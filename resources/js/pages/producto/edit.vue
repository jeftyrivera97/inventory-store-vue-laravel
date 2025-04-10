<script setup lang="ts">
import { type BreadcrumbItem } from '../../types';
import AppLayout from '../../layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';
import { LogOut } from 'lucide-vue-next';
import EditForm from '@/components/productos/edit-form.vue'


const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Editar Producto',
        href: 'producto.edit',
    },
];
const props = defineProps({
    impuestos: { type: Object, required: true },
    categorias: { type: Object, required: true },
    proveedores: { type: Object, required: true },
    data: { type: Object, required: true },
})

</script>

<template>

    <Head title="Editar Producto" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <EditForm :proveedores="proveedores" :categorias="categorias" :impuestos="impuestos" :data="data" />
        </div>
    </AppLayout>
</template>
