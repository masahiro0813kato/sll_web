<script setup>
import Header from "@/Layouts/Header.vue";
import { Head } from "@inertiajs/vue3";
import { ref, onMounted } from "vue";
import { Inertia } from "@inertiajs/inertia";
import SiteHeader from "@/Layouts/Header.vue";
import InputSearch from "@/Components/InputSearch.vue";
import LureList from "@/Components/LureList.vue";

const searchKey = ref("");
const lureList = ref();

onMounted(() => {
    lureList.value.getLuresData("");
});

const updateLures = (data) => {
    // console.log(data);
    if (data != null) {
        searchKey.value = data;
    } else {
        searchKey.value = "";
    }
    lureList.value.getLuresData(searchKey.value);
};
</script>

<template>
    <Head title="ルアー一覧" />
    <SiteHeader />

    <main>
        <InputSearch v-model="searchKey" @searchUpdateItems="updateLures" />
        <LureList ref="lureList" />
    </main>
</template>

<style scoped lang="scss">
main {
    margin-top: 4rem;
}
</style>
