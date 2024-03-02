<script setup>
import Header from "@/Layouts/Header.vue";
import { Head, Link } from "@inertiajs/vue3";
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";

defineProps({
    lures: Array,
});

const search = ref("");
// ref の値を取得するには .valueが必要
const searchLures = () => {
    Inertia.get(route("lures.index", { search: search.value }));
};
</script>

<template>
    <Head title="ルアー一覧" />
    <main class="scroll">
        <section class="w-full p-4 searchbox">
            <input type="text" name="search" v-model="search" @keypress.enter="searchLures" placeholder="ルアー名 メーカーで検索" />
        </section>
        <section class="main list_card">
            <div v-for="lure in lures" :key="lure.id" class="card card_lure">
                <Link
                    :href="
                        route('lures.show', {
                            lure: lure.id,
                        })
                    "
                >
                    <div class="card_lure__textArea">
                        <div>
                            <div class="card_lure__titleArea">
                                <div class="card_lure__makerName">{{ lure.lure_maker_name_en }}</div>
                                <h2 class="card_lure__lureName">{{ lure.lure_name_ja }}</h2>
                                <div class="card_lure__lureName_en">{{ lure.lure_name_en }}</div>
                            </div>
                            <div class="card_lure__infoArea">
                                <div class="card_lure__hookArea">
                                    <span class="card_lure__hookTitle">H：</span>
                                    <span v-if="lure.attached_hook_size_1">
                                        <span>{{ lure.attached_hook_size_1 }}</span>
                                    </span>
                                    <span v-if="lure.attached_hook_size_2">
                                        <span class="card_lure__hookDotSeparator">・</span>
                                        <span>{{ lure.attached_hook_size_2 }}</span>
                                    </span>
                                    <span v-if="lure.attached_hook_size_3">
                                        <span class="card_lure__hookDotSeparator">・</span>
                                        <span>{{ lure.attached_hook_size_3 }}</span>
                                    </span>
                                    <span v-if="lure.attached_hook_size_4">
                                        <span class="card_lure__hookDotSeparator">・</span>
                                        <span>{{ lure.attached_hook_size_4 }}</span>
                                    </span>
                                    <span v-if="lure.attached_hook_size_5">
                                        <span class="card_lure__hookDotSeparator">・</span>
                                        <span>{{ lure.attached_hook_size_5 }}</span>
                                    </span>
                                </div>
                                <div class="card_lure__ringArea">
                                    <span class="card_lure__hookTitle">R：</span>
                                    <span v-if="lure.attached_ring_size">
                                        <span>{{ lure.attached_ring_size }}</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </Link>
                <div class="card_lure__imgArea">
                    <img :src="'/images/lures_tmb/' + lure.lure_tmb_image + '.png'" :alt="lure.lure_name_ja" class="w-auto h-auto" />
                </div>
            </div>
        </section>
    </main>
</template>
