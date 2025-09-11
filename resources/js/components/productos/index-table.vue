<script setup lang="ts">

import { Table, TableBody, TableCaption, TableCell, TableHead, TableHeader, TableRow, } from '@/components/ui/table'
import DeleteOption from '@/components/shared/delete-button.vue'
import EditOption from '@/components/shared/edit-button.vue'
import TablePagination from '@/components/shared/pagination.vue'

const props = defineProps({
    data: { type: Object, required: true },
    modulo: { type: String, required: true },
    contador: { type: String, required: true },
    tableHeaders: { type: Object, required: true },
})

console.log(props.data);


const stringRoute = "producto.destroy"
const editRoute = "producto.edit"

</script>

<template>
    <span>Tabla de {{modulo}} ({{ props.contador }})</span>
    <nav class="relative flex justify-center">
        <Table>
            <TableCaption>Todos los Registros</TableCaption>
            <TableHeader>
                <TableRow>
                    <TableHead v-for="header in tableHeaders" :key="header.index">{{ header }}</TableHead>
                    <TableHead class="text-right">
                        Opciones
                    </TableHead>
                </TableRow>
            </TableHeader>
            <TableBody>
                <TableRow v-for="item in data.data" :key="item.id">
                    <TableCell class="font-medium">
                        {{ item.codigo_producto }}
                    </TableCell>
                    <TableCell>{{ item.descripcion }}</TableCell>
                    <TableCell>
                        <span v-if="!item.categoria">CATEGORIA NO EXISTE</span>
                        <span v-else>{{ item.categoria.descripcion }}</span>
                    </TableCell>
                    <TableCell>{{ item.color }}</TableCell>
                    <TableCell>
                        <span v-if="!item.proveedor">PROVEEDOR NO EXISTE</span>
                        <span v-else>{{ item.proveedor.descripcion }}</span>
                    </TableCell>
                    <TableCell>{{ item.size }}</TableCell>
                    <TableCell>{{ item.stock }}</TableCell>
                    <TableCell>{{ item.marca }}</TableCell>
                    <TableCell>L. {{ item.precio_venta }}.00</TableCell>
                    <TableCell class="text-right">
                        <EditOption :id="item.id"  :editRoute="editRoute" />
                        <DeleteOption :id="item.id" :stringRoute="stringRoute"/>
                    </TableCell>
                </TableRow>
            </TableBody>
        </Table>
    </nav>
    <TablePagination :pagination="data.meta" />
</template>
