<script>
export default {
    name: "CategoriesCreate",
};
</script>

<script setup>
import AppLayout from "@/Layouts/AppLayout.vue";
import { useForm } from "@inertiajs/vue3";
import CategoryForm from "@/Components/Categories/Form.vue";

const form = useForm({
    name: "",
});
</script>

<template>
    <AppLayout title="Create category">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Category
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div
                    class="bg-white overflow-hidden shadow-xl sm:rounded-lg py-8 px-5"
                >
                    <CategoryForm
                        :form="form"
                        @submit="form.post(route('categories.store'))"
                    />
                </div>
            </div>
        </div>
    </AppLayout>
</template>
