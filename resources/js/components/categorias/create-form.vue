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
    descripcion: null,
    nombre_imagen: null,
    ruta_imagen: null,
    registro: "2025-03-31 16:22:17",
    updated: "2025-03-31 16:22:17",
    id_estado: null,
    id_estado_web: null,
    id_usuario: null,
})


function submit() {
    router.post('/categoria', form)
}

</script>

<template>
    <form @submit.prevent="submit">
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
