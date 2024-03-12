<script setup>
import Header from "@/Layouts/Header.vue";
import { Head } from "@inertiajs/vue3";
import { ref } from "vue";
import { Inertia } from "@inertiajs/inertia";
import SiteHeader from "@/Layouts/Header.vue";
import InputSearch from "@/Components/InputSearch.vue";
import LureList from "@/Components/LureList.vue";

const props = defineProps({
    //lures: Array,
    //searchKey: String,
});

const searchKey = ref("");

/*const searchLures = (search) => {
    //console.log(search);
    Inertia.get(route("lures.index", { search: search }));
};*/
const updateLures = (data) => {
    console.log(data);
    if (data != null) {
        searchKey.value = data;
    } else {
        searchKey.value = "";
    }
};
</script>

<template>
    <Head title="ルアー一覧" />
    <SiteHeader />

    <main>
        <InputSearch v-model="searchKey" @searchUpdateItems="updateLures" />
        <LureList v-model="searchKey" />
        <!-- <input v-model="searchKey" />
        <p>{{ searchKey }}</p> -->
    </main>
</template>

<style scoped lang="scss">
main {
    margin-top: 4rem;
}
</style>
