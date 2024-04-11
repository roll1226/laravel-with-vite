<script setup lang="ts">
type PropsType = {
    context: string;
};
defineProps<PropsType>();
</script>

<template>
    <div>{{ context }}</div>
</template>
