<script setup lang="ts">
import { Button } from '@/components/ui/button'
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"
import { reactive } from 'vue'
import { router, usePage } from '@inertiajs/vue3'
import { CircleArrowLeft } from 'lucide-vue-next';
import { Save } from 'lucide-vue-next';
import { Link } from '@inertiajs/vue3'
import { useForm } from '@inertiajs/vue3'
import { Pen } from 'lucide-vue-next';
import $ from 'jquery'
import { Select, SelectContent, SelectGroup, SelectItem, SelectLabel, SelectTrigger, SelectValue, } from '@/components/ui/select'


const props = defineProps({
    impuestos: { type: Object, required: true },
    categorias: { type: Object, required: true },
    proveedores: { type: Object, required: true },
    data: { type: Object, required: true },
})


const form = useForm({
    codigo_producto: props.data.codigo_producto,
    descripcion: props.data.descripcion,
    id_categoria: 0,
    marca: props.data.marca,
    size: props.data.size,
    color: props.data.color,
    id_proveedor: props.data.id_proveedor,
    peso: props.data.peso,
    stock: props.data.stock,
    id_impuesto: props.data.id_impuesto,
    gravado15: props.data.gravado15,
    gravado18: props.data.gravado18,
    impuesto15: props.data.impuesto15,
    impuesto18: props.data.impuesto18,
    exento: props.data.exento,
    exonerado: props.data.exonerado,
    costo: props.data.costo,
    precio_venta: props.data.precio_venta,
    precio_web: props.data.precio_web,
    valor: props.data.valor,
    id_estado_web: props.data.id_estado_web,
    id_estado: props.data.id_estado,
    id_usuario: props.data.id_usuario,
    id_empresa: props.data.id_empresa,
    registro: props.data.registro,
    updated: props.data.updated,

})


function generarCodigo(event) {

    if (form.descripcion === undefined || form.descripcion == "" || form.descripcion === null) {
        alert("Debe Ingresar una Descripcion")
    }
    else if (form.id_categoria === undefined || form.id_categoria == "" || form.id_categoria === null) {
        alert("Debe Seleccionar una Categoria")
    }
    else if (form.marca === undefined || form.marca == "" || form.marca === null) {
        alert("Debe Ingresar una Marca")
    }
    else {
        var descripcion = form.descripcion;
        var marca = form.marca;
        var categoria = form.id_categoria.descripcion;

        const de = descripcion.slice(0, 2);
        const ma = marca.slice(0, 2);
        const ca = categoria.slice(0, 2);
        const x = de + ca + ma;
        let result = x.toUpperCase();
        let num = Math.floor((Math.random() * 999) + 100);
        var codigo = result + num;
        document.getElementById("codigo_producto").value = codigo;
        form.codigo_producto = codigo;
    }
}
</script>

<template>
    <form @submit.prevent="form.put(route('producto.update', data.id))">
        <div className="grid grid-cols-3 grid-rows-5 gap-4">
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="descripcion">Descripcion</Label>
                    <Input type="text" id="descripcion" name="descripcion" v-model="form.descripcion" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="id_categoria">Categorias</Label>
                    <Select v-model="form.id_categoria" required>
                        <SelectTrigger>
                            <SelectValue />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Categorias</SelectLabel>
                                <SelectItem v-for="option in categorias" :value="option">
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
                    <Input type="text" id="marca" name="marca" v-model="form.marca" required />
                </div>

            </div>

            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="size">Tamaño</Label>
                    <Input type="text" id="size" name="size" v-model="form.size" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="color">Color</Label>
                    <Input type="text" id="color" name="color" v-model="form.color" required />
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="id_proveedor">Proveedores</Label>
                    <Select v-model="form.id_proveedor" required>
                        <SelectTrigger>
                            <SelectValue />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Proveedores</SelectLabel>
                                <SelectItem v-for="option in proveedores" :value="option.id">
                                    {{ option.descripcion }}
                                </SelectItem>
                            </SelectGroup>
                        </SelectContent>
                    </Select>
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="peso">Peso (lbs.)</Label>
                    <Input type="number" id="peso" name="peso" v-model="form.peso" min="0" step="any" required />
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="stock">Existencias</Label>
                    <Input type="number" id="stock" name="stock" v-model="form.stock" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="id_impuesto">Impuesto</Label>
                    <Select v-model="form.id_impuesto" required>
                        <SelectTrigger>
                            <SelectValue />
                        </SelectTrigger>
                        <SelectContent>
                            <SelectGroup>
                                <SelectLabel>Impuestos</SelectLabel>
                                <SelectItem v-for="option in impuestos" :value="option.id">
                                    {{ option.descripcion }}
                                </SelectItem>

                            </SelectGroup>
                        </SelectContent>
                    </Select>
                </div>
            </div>

            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="costo">Costo</Label>
                    <Input type="number" id="costo" name="costo" v-model="form.costo" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="precio_venta">Precio de Venta</Label>
                    <Input type="number" id="precio_venta" name="precio_venta" v-model="form.precio_venta" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="precio_venta">Precio Tienda Web</Label>
                    <Input type="number" id="precio_web" name="precio_web" v-model="form.precio_web" required />
                </div>

            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="costo">Codigo Producto</Label>
                    <Input type="text" id="codigo_producto" name="codigo_producto" v-model="form.codigo_producto"
                        required />
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
                    <Link href="/producto">
                    <Button variant="destructive">
                        <CircleArrowLeft />Regresar
                    </Button>
                    </Link>
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
