<script setup>
import axios from "axios";
import { Head, Link } from "@inertiajs/vue3";
import { ref, reactive, computed } from "vue";

const search = defineModel();
const lures = reactive({});

const emit = defineEmits(["searchUpdateItems"]);
const emitEvent = () => {
    emit("searchUpdateItems", search.value);
    document.getElementById("searchLures").blur();
};

const searchLures = async () => {
    try {
        await axios.get(`/api/suggestLures/?search=${search.value}`).then((res) => {
            //console.log(res.data);
            lures.value = res.data;
            // console.log(lures.value);
        });
        //toggleStatus();
    } catch (e) {
        console.log(e.message);
    }
};

const isShow = ref(false);

const scroll_control = (event) => {
    event.preventDefault();
};

const toggleStatus = () => {
    //console.log(isShow.value);
    if (isShow.value === true) {
        document.addEventListener("mousewheel", scroll_control, {
            passive: false,
        });
        document.addEventListener("touchmove", scroll_control, {
            passive: false,
        });
    } else {
        document.removeEventListener("mousewheel", scroll_control, {
            passive: false,
        });
        document.removeEventListener("touchmove", scroll_control, {
            passive: false,
        });
    }
};
</script>
<template>
    <div class="searchInput">
        <section class="w-full searchbox">
            <input
                type="text"
                id="searchLures"
                name="searchLures"
                v-model="search"
                @click="
                    isShow = true;
                    toggleStatus();
                "
                @input="searchLures"
                @keypress.enter="
                    isShow = false;
                    toggleStatus();
                    emitEvent();
                "
                placeholder="ルアー名 メーカーで検索"
            />

            <span v-show="!isShow" class="icon-search">
                <img src="/images/common/icon-search.svg" alt="検索" />
            </span>
            <span
                v-show="isShow"
                class="icon-search"
                @click="
                    isShow = false;
                    toggleStatus();
                "
            >
                <img src="/images/common/icon-arrow-left.svg" alt="キャンセル" />
            </span>
            <span
                v-show="isShow"
                class="inputReset"
                @click="
                    search = '';
                    toggleStatus();
                    searchLures();
                "
            >
                <img src="/images/common/icon-searchClose.svg" alt="クリア" />
            </span>
        </section>
        <Transition>
            <section v-show="isShow" class="searchSuggest">
                <p>検索</p>
                <ul>
                    <li v-for="lure in lures.value" :key="lure.id" class="text-white">
                        <Link :href="route('lures.show', { lure: lure.id })">
                            <div class="maker_name">{{ lure.lure_maker_name_en }}</div>
                            <div class="luer_name">{{ lure.lure_name_ja }}</div>
                        </Link>
                    </li>
                </ul>
            </section>
        </Transition>
    </div>
</template>

<style lang="scss" scoped>
.v-enter-active,
.v-leave-active {
    transition: opacity 0.2s ease;
}

.v-enter-from,
.v-leave-to {
    opacity: 0;
}
.searchInput {
    display: block;
    position: relative;
}
.searchbox {
    padding: 1rem 0.85rem;

    & input[type="text"] {
        width: 100%;
        padding: 1rem 1rem 1rem 4rem;
        //background-image: url("/public/images/common/icon-search.svg");
        background-repeat: no-repeat;
        background-position: 1rem 50%;
    }

    .icon-search,
    .icon-close {
        display: block;
        width: 1.5rem;
        height: 1.5rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%) scale(1);
        left: 2rem;
    }

    .inputReset {
        display: block;
        width: 1.5rem;
        height: 1.5rem;
        position: absolute;
        top: 50%;
        transform: translateY(-50%) scale(1);
        right: 2rem;

        & img {
            width: 100%;
            height: auto;
            transition: all 0.1s ease-in-out;
        }

        &:active img {
            transform: scale(1.5);
        }
    }
}

.searchSuggest {
    width: 100%;
    background-color: #2a262f;
    height: calc(100vh - 146px);
    position: absolute;

    & li a {
        display: flex;
        color: #fff;
        align-items: flex-end;
        column-gap: 0.5rem;
        padding: 1rem;
        border-bottom: 0.5px solid #828282;
        background-image: url("/public/images/common/icon-arrow-right.svg");
        background-repeat: no-repeat;
        background-position: right 1rem top 50%;

        &:hover,
        &:active {
            background-color: #3b3541;
        }

        & .maker_name {
            color: #828282;
            font-size: 0.75rem;
        }

        & .lure_name {
            font-size: 1rem;
        }
    }
}
</style>
