<script setup lang="ts">
import { Label } from "@/components/ui/label"
import { Input } from "@/components/ui/input"

const props = defineProps({
    info: { type: String, required: true },
})

</script>

<template>
   <Input type="text" v-model="props.info" readonly />
</template>
