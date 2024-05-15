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
        <p>
            <a :href="taskRoute">
                {{ status }}
            </a>
        </p>
        <p>{{ context }}</p>
    </div>
</template>
