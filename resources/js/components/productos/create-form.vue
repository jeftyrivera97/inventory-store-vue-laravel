<script setup lang="ts">

import { Button } from '@/components/ui/button'
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import { reactive } from 'vue'
import { router } from '@inertiajs/vue3'
import { CircleArrowLeft } from 'lucide-vue-next';
import { Save } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3'
import { Pen } from 'lucide-vue-next';

import { Select, SelectContent, SelectGroup, SelectItem, SelectLabel, SelectTrigger, SelectValue, } from '@/components/ui/select'

defineProps({
    impuestos: { type: Object, required: true },
    categorias: { type: Object, required: true },
    proveedores: { type: Object, required: true },

})

const form = reactive({
    codigo_producto: '',
    descripcion: '',
    id_categoria: null as any,
    marca: '',
    size: '',
    color: '',
    id_proveedor: null as number | null,
    peso: 0,
    stock: 0,
    id_impuesto: null as number | null,
    gravado15: 1,
    gravado18: 1,
    impuesto15: 1,
    impuesto18: 1,
    exento: 0,
    exonerado: 0,
    costo: 0,
    precio_venta: 0,
    precio_web: 0,
    valor: 0,
    id_estado_online: 1,
    id_estado: 1,
    id_usuario: 1,
    id_empresa: 1,
    registro: "2025-03-31 16:22:17",
    updated: "2025-03-31 16:22:17",
})

function generarCodigo() {
    if (!form.descripcion || form.descripcion.trim() === '') {
        alert("Debe Ingresar una Descripcion")
        return
    }
    if (!form.id_categoria) {
        alert("Debe Seleccionar una Categoria")
        return
    }
    if (!form.marca || form.marca.trim() === '') {
        alert("Debe Ingresar una Marca")
        return
    }

    const descripcion = form.descripcion;
    const marca = form.marca;
    const categoria = form.id_categoria.descripcion;

    const de = descripcion.slice(0, 2);
    const ma = marca.slice(0, 2);
    const ca = categoria.slice(0, 2);
    const x = de + ca + ma;
    const result = x.toUpperCase();
    const num = Math.floor((Math.random() * 999) + 100);
    const codigo = result + num;
    
    const element = document.getElementById("codigo_producto") as HTMLInputElement;
    if (element) {
        element.value = codigo;
    }
    form.codigo_producto = codigo;
}

function submit() {
    // Calcular el valor correctamente
    const stock = form.stock || 0;
    const precio = form.precio_venta || 0;
    form.valor = stock * precio;

    // Enviar solo el ID de la categoría
    const formData = {
        ...form,
        id_categoria: form.id_categoria?.id || form.id_categoria
    };
    
    router.post('/producto', formData)
}

</script>

<template>
    <form @submit.prevent="submit">
        <div className="grid grid-cols-3 grid-rows-5 gap-4">
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="descripcion">Descripcion</Label>
                    <Input type="text" id="descripcion" name="descripcion" v-model="form.descripcion"
                        placeholder="Ingrese Nombre" required />
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="id_categoria">Categoria</Label>
                    <Select v-model="form.id_categoria" required>
                        <SelectTrigger>
                            <SelectValue placeholder="Seleccione una Categoria" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Categorias</SelectLabel>
                                <SelectItem v-for="option in categorias" :key="option.id" :value="option">
                                    {{ option.descripcion }}
                                </SelectItem>
                            </SelectGroup>
                        </SelectContent>
                    </Select>
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="marca">Marca</Label>
                    <Input type="text" id="marca" name="marca" v-model="form.marca" placeholder="Ingrese Marca"
                        required />
                </div>

            </div>

            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="size">Tamaño</Label>
                    <Input type="text" id="size" name="size" v-model="form.size" placeholder="Ingrese Tamaño"
                        required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="color">Color</Label>
                    <Input type="text" id="color" name="color" v-model="form.color" placeholder="Ingrese Color"
                        required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="peso">Peso (lbs.)</Label>
                    <Input type="number" id="peso" name="peso" v-model="form.peso" placeholder="Ingrese Peso en Libras" step="any" min="0.01" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="id_proveedor">Proveedor</Label>
                    <Select v-model="form.id_proveedor" required>
                        <SelectTrigger>
                            <SelectValue placeholder="Seleccione un Proveedor" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Proveedores</SelectLabel>
                                <SelectItem v-for="option in proveedores" :key="option.id" :value="option.id">
                                    {{ option.descripcion }}
                                </SelectItem>
                            </SelectGroup>
                        </SelectContent>
                    </Select>
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="id_impuesto">Impuesto</Label>
                    <Select v-model="form.id_impuesto" required>
                        <SelectTrigger>
                            <SelectValue placeholder="Seleccione tipo de Impuesto" />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Impuestos</SelectLabel>
                                <SelectItem v-for="option in impuestos" :key="option.id" :value="option.id">
                                    {{ option.descripcion }}
                                </SelectItem>
                            </SelectGroup>
                        </SelectContent>
                    </Select>
                </div>


            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="stock">Existencias</Label>
                    <Input type="number" id="stock" name="stock" v-model="form.stock"
                        placeholder="Ingrese Existencias Actual" required />
                </div>
            </div>

            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="costo">Costo</Label>
                    <Input type="number" id="costo" name="costo" v-model="form.costo" placeholder="Ingrese Costo"
                        required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="precio_venta">Precio de Venta</Label>
                    <Input type="number" id="precio_venta" name="precio_venta" v-model="form.precio_venta"
                        placeholder="Ingrese Precio de Venta" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="precio_venta">Precio Tienda Web</Label>
                    <Input type="number" id="precio_web" name="precio_web" v-model="form.precio_web"
                        placeholder="Ingrese Precio de Venta Web" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="costo">Codigo Producto</Label>
                    <Input type="text" id="codigo_producto" name="codigo_producto" v-model="form.codigo_producto"
                        placeholder="Genere o Ingrese Codigo Producto" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="accion">Accion</Label>
                    <Button type="submit">
                        <Save />Guardar Producto
                    </Button>
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="accion">Accion</Label>
                    <Link href="/producto"> <Button variant="destructive">
                        <CircleArrowLeft />Regresar
                    </Button></Link>
                </div>
            </div>

        </div>
    </form>
    <div className="grid grid-cols-1 grid-rows-1 gap-4">
        <div>
            <Button @click="generarCodigo">
                <Pen />Generar Codigo
            </Button>
        </div>
    </div>
</template>
