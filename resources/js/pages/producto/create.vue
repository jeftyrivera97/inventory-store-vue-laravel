<script setup lang="ts">
import { type BreadcrumbItem } from '../../types';
import AppLayout from '../../layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';
import { LogOut } from 'lucide-vue-next';

import CreateForm from '@/components/productos/create-form.vue'



const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Crear Nuevo Producto',
        href: route('producto.create'),
    },
];
const props = defineProps({
    impuestos: { type: Object, required: true },
    categorias: { type: Object, required: true },
    proveedores: { type: Object, required: true },
})

</script>

<template>

    <Head title="Crear Producto" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <CreateForm :proveedores="proveedores" :categorias="categorias" :impuestos="impuestos" />
        </div>
    </AppLayout>
</template>
