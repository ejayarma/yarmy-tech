<script setup lang="ts">
import { dashboard, login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';
import WebsiteFooter from './partials/WebsiteFooter.vue';
import WebsiteHeader from './partials/WebsiteHeader.vue';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);

const beliefs = [
    'Simple to use',
    'Easy to maintain',
    'Built with care',
];

const values = [
    {
        title: 'Clarity over cleverness',
        description: 'We write code that humans can read and understand, not just machines.',
    },
    {
        title: 'Quality over speed',
        description: 'We take the time to build things right, so they last.',
    },
    {
        title: 'Long-term impact over quick wins',
        description: 'We focus on sustainable solutions that grow with your business.',
    },
];
</script>

<template>

    <Head title="About Us">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="min-h-screen flex flex-col">
        <WebsiteHeader />

        <main class="flex-1">
            <!-- Hero Section -->
            <section class="max-w-4xl mx-auto px-4 py-16 md:py-24 text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    About <span class="text-primary">Yarmy</span>
                </h1>
                <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">
                    Yarmy is a software company focused on building well-crafted, enjoyable software.
                </p>
            </section>

            <!-- Philosophy Section -->
            <section class="bg-muted/30 py-20">
                <div class="max-w-4xl mx-auto px-4">
                    <div class="text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">
                            We believe great technology should be:
                        </h2>
                    </div>

                    <div class="grid md:grid-cols-3 gap-6 max-w-3xl mx-auto mb-12">
                        <div v-for="belief in beliefs" :key="belief"
                            class="bg-card border border-border rounded-lg p-8 text-center">
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                            </div>
                            <h3 class="text-lg font-semibold">{{ belief }}</h3>
                        </div>
                    </div>

                    <p class="text-center text-lg md:text-xl font-medium max-w-2xl mx-auto">
                        Our name reflects our philosophy: software should feel satisfying — not frustrating.
                    </p>
                </div>
            </section>

            <!-- Our Approach Section -->
            <section class="py-20">
                <div class="max-w-5xl mx-auto px-4">
                    <div class="text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">Our Approach</h2>
                        <p class="text-xl text-muted-foreground">We value:</p>
                    </div>

                    <div class="grid md:grid-cols-3 gap-8">
                        <div v-for="value in values" :key="value.title"
                            class="bg-card border border-border rounded-lg p-8">
                            <h3 class="text-xl font-bold mb-4 text-primary">
                                {{ value.title }}
                            </h3>
                            <p class="text-muted-foreground leading-relaxed">
                                {{ value.description }}
                            </p>
                        </div>
                    </div>

                    <div class="text-center mt-16">
                        <p class="text-lg md:text-xl font-medium max-w-3xl mx-auto leading-relaxed">
                            Every system we build is designed to be understood, extended, and trusted.
                        </p>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="bg-muted/30 py-20">
                <div class="max-w-4xl mx-auto px-4 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Ready to work with us?
                    </h2>
                    <p class="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
                        Let's build software that your team will actually enjoy using.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link :href="'/contact'"
                            class="inline-block bg-primary text-primary-foreground px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors font-medium">
                            Get in touch
                        </Link>
                        <Link :href="'/'"
                            class="inline-block bg-secondary text-secondary-foreground px-8 py-3 rounded-lg hover:bg-secondary/80 transition-colors font-medium">
                            See what we do
                        </Link>
                    </div>
                </div>
            </section>
        </main>

        <WebsiteFooter />
    </div>
</template>
