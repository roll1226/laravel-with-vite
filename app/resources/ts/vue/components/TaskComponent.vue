<script setup lang="ts">
type PropsType = {
    context: string;
    taskRoute: string;
    status: number;
};
defineProps<PropsType>();

const handleTest = async () => {
    const result = await fetch("/api/tasks/1").then((res) => res.json());
    console.log(result);
};
</script>

<template>
    <div>
        <p>
            <a :href="taskRoute">
                {{ status }}
            </a>
        </p>
        <p>{{ context }}</p>
        <button @click="handleTest">Async</button>
    </div>
</template>
