<script setup lang="ts">
import { type BreadcrumbItem } from '../../types';
import AppLayout from '../../layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';
import { LogOut } from 'lucide-vue-next';

import CreateForm from '@/components/proveedores/create-form.vue'



const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Crear Nuevo Proveedor',
        href: route('proveedor.create'),
    },
];
const props = defineProps({

})

</script>

<template>

    <Head title="Crear Proveedor" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <CreateForm />
        </div>
    </AppLayout>
</template>
