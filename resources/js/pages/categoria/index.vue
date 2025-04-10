<script setup lang="ts">
import { type BreadcrumbItem } from '../../types';
import AppLayout from '../../layouts/AppLayout.vue';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';
import { LogOut } from 'lucide-vue-next';
import { Label } from "@/components/ui/label"
import IndexTable from '@/components/categorias/index-table.vue'
import SearchInput from '@/components/shared/search.vue'
import AddButton from '@/components/shared/add-button.vue'
import InfoInput from '@/components/shared/info-input.vue'
import ResponseMessage from '@/components/shared/flash-message.vue'



const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Categoria de Productos',
        href: route('categoria.index'),
    },
];
const props = defineProps({
    contador: { type: String, required: true },
    modulo: { type: String, required: true },
    data: { type: Object, required: true },
    tableHeaders: { type: Object, required: true },
})

const info = "Nueva Categoria";
const href = route('categoria.create');
const search = "Buscar Categoria";
const searchRoute = "/categoria";

</script>

<template>
    <Head :title="modulo" />
    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="grid grid-cols-4 grid-rows-1 gap-1">
                <div>
                    <SearchInput :search="search" :searchRoute="searchRoute"/>
                </div>
                <div>
                    <!-- empty column -->
                </div>
                <div>
                    <!-- empty column -->
                </div>
                <div>
                    <AddButton :info="info" :href="href" />
                </div>
            </div>
            <div class="grid grid-cols-2 grid-rows-1 gap-4">
                <div>
                    <ResponseMessage />
                </div>
            </div>
            <div class="grid grid-cols-1 grid-rows-1 gap-4">
                <div>
                    <IndexTable :data="data" :tableHeaders="tableHeaders" :modulo="modulo" :contador="contador" />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
