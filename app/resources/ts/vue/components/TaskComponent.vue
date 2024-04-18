<script setup lang="ts">
type PropsType = {
    context: string;
    taskRoute: string;
    status: number;
};
defineProps<PropsType>();
</script>

<template>
    <div>
        <a :href="taskRoute">
            <p>{{ status }}</p>
            <h4>{{ context }}</h4>
        </a>
    </div>
</template>
