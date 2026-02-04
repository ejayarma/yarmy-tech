<script setup lang="ts">
import WebsiteFooter from '@/pages/partials/WebsiteFooter.vue';
import WebsiteHeader from '@/pages/partials/WebsiteHeader.vue';

</script>

<template>
    <div class="min-h-screen">
        <WebsiteHeader />
        <main>
            <slot></slot>
        </main>
        <WebsiteFooter />
    </div>
</template>
