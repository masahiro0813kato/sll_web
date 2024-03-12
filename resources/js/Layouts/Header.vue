<script setup lang="ts">
import { Link } from "@inertiajs/vue3";
</script>

<template>
    <header>
        <div class="logo">
            <Link href="/lures">
                <img src="/images/common/logo-sll.svg" alt="SLL Logo" />
            </Link>
        </div>
        <div class="hamburger"></div>
    </header>
</template>

<style>
header {
    width: 100%;
    padding: 1rem;
    position: fixed;
    top: 0;
    mix-blend-mode: difference;
    z-index: 1000;
}
</style>
