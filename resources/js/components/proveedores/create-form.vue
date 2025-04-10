<script setup lang="ts">

import { Button } from '@/components/ui/button'
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import { reactive } from 'vue'
import { router, usePage } from '@inertiajs/vue3'
import { Plus } from 'lucide-vue-next';
import { CircleArrowLeft } from 'lucide-vue-next';
import { Save } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3'
import { Pen } from 'lucide-vue-next';
import { useForm } from '@inertiajs/vue3'
import $ from 'jquery'
import { Select, SelectContent, SelectGroup, SelectItem, SelectLabel, SelectTrigger, SelectValue, } from '@/components/ui/select'

const props = defineProps({


})

const form = reactive({
    codigo_proveedor: null,
    descripcion: null,
    categoria: null,
    contacto: null,
    telefono: null,
    id_estado: null,
    id_usuario: null,
    id_empresa: null,

})


function submit() {
    router.post('/proveedor', form)
}

</script>

<template>
    <form @submit.prevent="submit">
        <div className="grid grid-cols-3 grid-rows-3 gap-4">

            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="costo">Codigo Proveedor</Label>
                    <Input type="text" id="codigo_producto" name="codigo_proveedor" v-model="form.codigo_proveedor"
                        placeholder="Genere o Ingrese Codigo Producto" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="descripcion">Descripcion</Label>
                    <Input type="text" id="descripcion" name="descripcion" v-model="form.descripcion"
                        placeholder="Ingrese Nombre" required />
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="categoria">Categoria</Label>
                    <Input type="text" id="categoria" name="categoria" v-model="form.categoria"
                        placeholder="Ingrese Categoria" required />
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="contacto">Contacto/Vendedor</Label>
                    <Input type="text" id="contacto" name="contacto" v-model="form.contacto" placeholder="Ingrese Contacto"
                        required />
                </div>

            </div>

            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="telefono">Telefono</Label>
                    <Input type="text" id="telefono" name="telefono" v-model="form.telefono" placeholder="Ingrese Telefono"
                        required />
                </div>

            </div>
            <div>


            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="accion">Accion</Label>
                    <Button type="submit">
                        <Save />Guardar Proveedor
                    </Button>
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="accion">Accion</Label>
                    <Link href="/proveedor"> <Button variant="destructive">
                        <CircleArrowLeft />Regresar
                    </Button></Link>
                </div>
            </div>
        </div>
    </form>
</template>
