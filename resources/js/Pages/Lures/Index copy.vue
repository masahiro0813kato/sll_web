<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";
//import FlashMessage from "@/Components/FlashMessage.vue";

defineProps({
    lures: Array,
});
</script>

<template>
    <Head title="ルアー一覧" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">ルアー一覧</h2>
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
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">メイン画像</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">サムネイル画像</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">フックサイズ1</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">フックサイズ2</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">フックサイズ3</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">フックサイズ4</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">フックサイズ5</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">リングサイズ</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">ルアータイプ俗称</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">ルアータイプ俗称</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">浮力</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">ルアータイプ</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">アクション</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">長さ</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">重さ</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">レンジ</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">オリジナルURL</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">情報</th>
                                                <th class="px-4 py-3 text-sm font-medium tracking-wider text-gray-900 bg-gray-100 title-font">ステータス</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr v-for="lure in lures" :key="lure.id">
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.id }}
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
                                                    {{ lure.name_ja }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.name_en }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    <img :src="'/images/' + lure.image_main + '.png'" :alt="lure.name_en" class="w-auto h-7" />
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    <img :src="'/images/' + lure.image_tmb + '.png'" :alt="lure.name_en" class="w-auto h-7" />
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">{{ lure.name_hook_size_1 }}・ {{ lure.name_hook_size_2 }}・ {{ lure.name_hook_size_3 }}・ {{ lure.name_hook_size_４ }}・ {{ lure.name_hook_size_5 }}</td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.ring_size }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.type }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.type_buoyancy }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.type_action }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.action }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.length }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.weight }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">{{ lure.range_min }}-{{ lure.range_max }}</td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.org_url }}
                                                </td>
                                                <td class="px-4 py-3 border-b-2 border-gray-200">
                                                    {{ lure.infomation }}
                                                </td>
                                                <td class="px-4 py-3 text-lg text-gray-900 border-b-2 border-gray-200">
                                                    <span v-if="lure.is_visible === 1"> 表示</span>
                                                    <span v-if="lure.is_visible === 0"> 非表示</span>
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
