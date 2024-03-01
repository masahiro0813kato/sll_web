<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
//import FlashMessage from "@/Components/FlashMessage.vue";

defineProps({
    lureMakers: Array,
});
</script>

<template>
    <Head title="ルアーメーカー一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">ルアーメーカー一覧</h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <section class="text-gray-600 body-font">
                            <div class="container px-5 py-8 mx-auto">
                                <!-- <FlashMessage /> -->
                                <div class="w-full mx-auto overflow-auto lg:w-2/3">
                                    <div class="flex w-full pl-4 mx-auto my-4 lg:w-full">
                                        <Link as="button" :href="route('lureMakers.create')" class="flex px-6 py-2 ml-auto text-white bg-indigo-500 border-0 rounded focus:outline-none hover:bg-indigo-600"> 登録 </Link>
                                    </div>
                                    <table class="w-full text-left whitespace-no-wrap table-auto">
                                        <thead>
                                            <tr>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 rounded-tl rounded-bl title-font">ID</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">名前(日本語)</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">名前(英語)</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">画像パス</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">ステータス</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="lureMaker in lureMakers" :key="lureMaker.id">
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lureMaker.id }}
                                                    <!-- <Link
                                                        class="text-blue-400"
                                                        :href="
                                                            route('lureMaker.show', {
                                                                item: lureMaker.id,
                                                            })
                                                        "
                                                        >{{ lureMaker.id }}</Link
                                                    > -->
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lureMaker.lure_maker_name_ja }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lureMaker.lure_maker_name_en }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    <img :src="'/images/' + lureMaker.lure_maker_logo_image + '.png'" :alt="lureMaker.lure_maker_name_ja" class="w-auto h-7" />
                                                </td>
                                                <td class="px-4 py-3 text-lg text-gray-900 border-b-2 border-gray-200">
                                                    <span v-if="lureMaker.is_available === 1"> 表示</span>
                                                    <span v-if="lureMaker.is_available === 0"> 非表示</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
