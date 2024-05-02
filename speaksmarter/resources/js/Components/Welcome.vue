<script setup>
import ApplicationLogo from '@/Components/ApplicationLogo.vue';
</script>

<template>
    <div class="grid grid-cols-2 gap-2 my-6 text-white">
        <div class="flex justify-center">
            <button v-if="$page.props.user.permissions.includes('create roles')" type="button" class="rounded bg-green-700 w-1/2 text-center py-2">Manage role</button>
        </div>
        <div class="flex justify-center">
            <button v-if="$page.props.user.permissions.includes('create lessons')" type="button" class="rounded bg-green-700 w-1/2 text-center py-2">Manage lessons</button>
        </div>
    </div>
    {{ $page.props }}
</template>
