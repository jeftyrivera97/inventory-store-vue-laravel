<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Panel Principal',
        href: '/dashboard',
    },
];

const props = defineProps({
    user: { type: Object, required: true },
    today: { type: Object, required: true },
})


</script>

<template>
    <Head title="Panel Principal" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
               <span>Bienvenido, {{ user.name }} hoy es {{ today }} </span>

            </div>
        </div>
    </AppLayout>
</template>
