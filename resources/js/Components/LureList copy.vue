<script setup>
import { Link } from "@inertiajs/vue3";
import { ref, reactive, computed } from "vue";
import axios from "axios";
import RequestNextList from "@/Components/RequestNextList.vue";

const search = defineModel(); //リストを取得する検索キー
const paginateData = reactive({}); //検索したリストの全データ
const lures = reactive({}); //取得した検索結果データ
const lastListNum = ref(); //取得したデータの総分割数
const currentListNum = ref(1); //取得データの現在のページ
const totalNum = ref();
const test = reactive([]);
const moreShearch = search.values;

const getLuresData = computed(async () => {
    try {
        await axios.get(`/api/getLuresData/?search=${search.value}`).then((res) => {
            // console.log(res.data.data);
            paginateData.value = res;
            lures.value = paginateData.value.data.data;
            test.value = [];
            console.log(test.value);
            for (const item in res.data.data) {
                test.push(res.data.data[item]);
            }
            lastListNum.value = paginateData.value.data.last_page;
            totalNum.value = paginateData.value.data.total;
        });
        //toggleStatus();
    } catch (e) {
        console.log(e.message);
    }
});
const moreLuresData = async () => {
    try {
        await axios.get(`/api/getLuresData/?search=${moreShearch}&page=${currentListNum.value}`).then((res) => {
            console.log(res.data.data);
            paginateData.value = res;
            lures.value = paginateData.value.data.data;
            for (const item in res.data.data) {
                test.push(res.data.data[item]);
            }
        });
        //toggleStatus();
    } catch (e) {
        console.log(e.message);
    }
};
</script>

<template>
    {{ getLuresData }}
    <section v-if="lures.value" class="main list_card">
        <div class="text-white">全{{ totalNum }}件</div>
        <div v-for="lure in test" :key="lure.id">
            <Link
                :href="
                    route('lures.show', {
                        lure: lure.id,
                    })
                "
                class="card card_lure"
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

                <div class="card_lure__imgArea">
                    <img :src="'/images/lures_tmb/' + lure.lure_tmb_image + '.png'" :alt="lure.lure_name_ja" class="w-auto h-auto" />
                </div>
            </Link>
        </div>

        <RequestNextList v-if="currentListNum < lastListNum" v-model="currentListNum" />
        <button v-if="currentListNum < lastListNum" @click="currentListNum++" class="p-4 text-white">More View{{ currentListNum }}</button>
    </section>
    <section v-else>
        <div class="no_search_result">検索条件に該当するルアーはありません</div>
    </section>
</template>

<style scoped lang="scss">
.no_search_result {
    color: #fff;
    font-size: 0.875rem;
    display: flex;
    justify-content: center;
    padding: 4rem;
}

.list_card {
    display: flex;
    flex-direction: column;
    row-gap: 0.5rem;
}

.card {
    background-color: #fff;
    border-radius: 0.5rem;
}

.card_lure {
    display: flex;
    justify-content: space-between;
    align-items: center;
    row-gap: 8px;
    opacity: 1;
    transition: all 0.05s ease-in-out;

    &:active {
        opacity: 0.8;
    }

    &__textArea {
        padding: 1rem;
        flex: auto;
    }

    &__titleArea {
        padding-bottom: 0.5rem;
        border-bottom: 0.5px solid #828282;
    }

    &__makerName {
        font-size: 0.875rem;
        line-height: 1;
        margin-bottom: 0.5rem;
    }

    &__lureName {
        font-size: 1rem;
        line-height: 1.2;
        margin-bottom: 0.25rem;
    }

    &__lureName_en {
        font-size: 0.75rem;
        color: #828282;
        line-height: 1.2;
    }

    &__infoArea {
        margin-top: 0.5rem;
        display: flex;
        flex-direction: row;
        column-gap: 1rem;
        line-height: 1;
    }

    &__hookArea {
        font-size: 0.875rem;
    }

    &__hookTitle {
        font-size: 0.75rem;
        font-weight: bold;
        color: #828282;
    }

    &__hookDotSeparator {
        font-size: 0.75rem;
        font-weight: bold;
        color: #828282;
    }

    &__ringArea {
        font-size: 0.875rem;
    }

    &__imgArea {
        width: 33%;
        min-width: 120px;

        & img {
            width: 100%;
            height: auto;
            object-fit: cover;
        }
    }
}
</style>
