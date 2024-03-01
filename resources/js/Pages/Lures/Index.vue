<script setup>
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
import { Head, Link } from "@inertiajs/vue3";

defineProps({
    lures: Array,
});
</script>

<template>
    <main class="bg">
        <section class="main list_card">
            <div v-for="lure in lures" :key="lure.id" class="card card_lure">
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
                                    <span>・</span>
                                    <span>{{ lure.attached_hook_size_2 }}</span>
                                </span>
                                <span v-if="lure.attached_hook_size_3">
                                    <span>・</span>
                                    <span>{{ lure.attached_hook_size_3 }}</span>
                                </span>
                                <span v-if="lure.attached_hook_size_4">
                                    <span>・</span>
                                    <span>{{ lure.attached_hook_size_4 }}</span>
                                </span>
                                <span v-if="lure.attached_hook_size_5">
                                    <span>・</span>
                                    <span>{{ lure.attached_hook_size_5 }}</span>
                                </span>
                            </div>
                            <div class="card_lure__ringArea">
                                <span>R：</span>
                                <span v-if="lure.attached_ring_size">
                                    <span>{{ lure.attached_ring_size }}</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card_lure__imgArea">
                    <img :src="'/images/' + lure.lure_tmb_image + '.png'" :alt="lure.lure_name_ja" class="w-auto h-auto" />
                </div>
            </div>
        </section>
    </main>
</template>
