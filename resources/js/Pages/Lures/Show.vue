<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";
import nl2br from "@/common";

const props = defineProps({
    lure: Object,
    lure_maker: Object,
});

console.log(typeof props.lure.lure_infomation);
const lure_info = props.lure.lure_infomation;
console.log(nl2br(lure_info));

const bg_image = "url('/images/lures_main/" + props.lure.lure_main_image + ".png')";
</script>

<template>
    <main class="scroll">
        <Head title="ルアー詳細" />
        <section class="lureShow_image">
            <img :src="'/images/lures_main/' + lure.lure_main_image + '.png'" :alt="lure.lure_name_ja" />
        </section>
        <section class="lureShow_data">
            <div class="lureShow_data__titleArea">
                <div class="lureShow_data__makerTitle">{{ lure_maker[0].lure_maker_name_en }}</div>
                <h1 class="lureShow_data__lureName_ja">{{ lure.lure_name_ja }}</h1>
                <div class="lureShow_data__lureName_en">{{ lure.lure_name_en }}</div>
            </div>
            <div class="lureShow_data__specArea">
                <div class="lureShow_data__categoryArea">
                    <h2 class>Type</h2>
                    <div>{{ lure.lure_category }}</div>
                </div>
                <div class="lureShow_data__hookArea">
                    <h2>Hook Size</h2>
                    <div class="lureShow_data__hook">
                        <span class="card_lure__hookTitle">F・</span>
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
                        <span class="card_lure__hookTitle">・R</span>
                    </div>
                </div>
                <div class="lureShow_data__otherSpecArea">
                    <div>
                        <h2>Ring Size</h2>
                        <div>{{ lure.attached_ring_size }}</div>
                    </div>
                    <div>
                        <h2>Length</h2>
                        <div>{{ lure.lure_length }}<span class="lureShow_data__unit">mm</span></div>
                    </div>
                    <div>
                        <h2>Weight</h2>
                        <div>{{ lure.lure_weight }}<span class="lureShow_data__unit">g</span></div>
                    </div>
                    <div>
                        <h2>Buoyancy</h2>
                        <div>{{ lure.lure_buoyancy }}</div>
                    </div>
                    <div>
                        <h2>Range</h2>
                        <div>{{ lure.lure_range_min }}-{{ lure.lure_range_max }}<span class="lureShow_data__unit">cm</span></div>
                    </div>
                </div>
            </div>
            <div v-html="nl2br(lure.lure_infomation)"></div>
        </section>
    </main>
</template>

<style lang="scss" scoped>
.lureShow_image {
    position: relative;
    width: 100%;
    display: flex;
    justify-content: center;
    background-color: #fff;

    &::before {
        content: "";
        position: absolute;
        width: 100%;
        min-height: 100%;
        // background: rgba(255, 255, 255, 0.7);
        z-index: 5;
        backdrop-filter: blur(30px);
    }

    &::after {
        content: "";
        position: absolute;
        background-color: #fff;
        background-image: v-bind("bg_image");
        background-repeat: no-repeat;
        //background-size: 400%;
        //background-position: 20% 48%;
        width: 100%;
        min-height: 100%;
        z-index: 1;
        filter: brightness(130%) saturate(400%) opacity(35%);
        //mix-blend-mode: hard-light;

        animation-name: zoom;
        // animation-delay: -20s;
        animation-duration: 20s;
        animation-timing-function: linear;
        animation-iteration-count: infinite;
    }

    @keyframes zoom {
        0% {
            background-size: 400%;
            background-position: 20% 48%;
        }

        50% {
            background-size: 600%;
            background-position: 40% 52%;
        }

        100% {
            background-size: 400%;
            background-position: 20% 48%;
        }
    }

    & img {
        width: 80%;
        height: auto;
        z-index: 10;
        //filter: drop-shadow(0px 4px 4px rgba(0, 0, 0, 0.25));
        //filter: drop-shadow(4px 16px 16px rgba(10, 50, 50, 0.25));
        //filter: drop-shadow(16px 16px 10px rgba(144, 144, 144, 0.25));
    }
}

.lureShow_data {
    position: relative;
    background-color: #2a262f;
    z-index: 50;
    padding: 2rem 1rem;
    color: #fff;

    &__titleArea {
        padding-bottom: 2rem;
    }

    &__makerTitle {
        font-size: 1.25rem;
        line-height: 1;
        margin-bottom: 1.5rem;
    }

    &__lureName_ja {
        font-size: 1.6rem;
        line-height: 1.2;
    }

    &__lureName_en {
        font-size: 1rem;
        color: #828282;
        line-height: 1.2;
    }

    &__specArea {
        border-top: 0.5px solid #828282;
        border-bottom: 0.5px solid #828282;
        padding: 2rem 0;
        margin-bottom: 2rem;
        line-height: 1;
        font-size: 1.25rem;
    }

    &__categoryArea,
    &__hookArea {
        margin-bottom: 2rem;
    }

    &__otherSpecArea {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        grid-template-rows: repeat(2, 1fr);
        grid-column-gap: 1rem;
        grid-row-gap: 2rem;
    }

    & h2 {
        font-size: 0.875rem;
        color: #828282;
        margin-bottom: 0.5rem;
    }

    &__unit {
        font-size: 0.875rem;
    }
}
</style>
