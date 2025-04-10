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
    data: { type: Object, required: true },
})

const form = useForm({
    descripcion: props.data.descripcion,
    nombre_imagen: props.data.nombre_imagen,
    ruta_imagen: props.data.ruta_imagen,
    registro: props.data.registro,
    updated: props.data.updated,
    id_estado: props.data.id_estado,
    id_estado_web: props.data.id_estado_web,
    id_usuario: props.data.id_usuario,
})


</script>

<template>
   <form @submit.prevent="form.put(route('categoria.update', data.id))">
        <div className="grid grid-cols-3 grid-rows-2 gap-4">
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="descripcion">Descripcion</Label>
                    <Input type="text" id="descripcion" name="descripcion" v-model="form.descripcion"
                        placeholder="Ingrese Nombre" required />
                </div>
            </div>
            <div>
            </div>
            <div>
            </div>

            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="accion">Accion</Label>
                    <Button type="submit">
                        <Save />Guardar Categoria
                    </Button>
                </div>
            </div>
            <div>
                <div className="grid w-full max-w-sm items-center gap-1.5">
                    <Label htmlFor="accion">Accion</Label>
                    <Link href="/categoria"> <Button variant="destructive">
                        <CircleArrowLeft />Regresar
                    </Button></Link>
                </div>

            </div>
            <div>
            </div>
        </div>
    </form>
</template>
