<script setup lang="ts">
import { Head, Link, useForm } from '@inertiajs/vue3';
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

const form = useForm({
    name: '',
    company: '',
    email: '',
    message: '',
});

const submit = () => {
    form.post('/contact', {
        onSuccess: () => {
            form.reset();
        },
        preserveScroll: true,
    });
};
</script>

<template>

    <Head title="Contact">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="min-h-screen flex flex-col">
        <WebsiteHeader />

        <main class="flex-1">
            <!-- Hero Section -->
            <section class="max-w-4xl mx-auto px-4 py-16 md:py-24 text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Let's Build Something <span class="text-primary">Great</span>
                </h1>
                <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">
                    Have an idea, a problem, or an existing system that needs improvement?
                    <br class="hidden sm:inline" />
                    Tell us about it, we'll help you figure out the best way forward.
                </p>
            </section>

            <!-- Contact Form -->
            <section class="bg-muted/30 py-20">
                <div class="max-w-2xl mx-auto px-4">
                    <form @submit.prevent="submit" class="space-y-6">
                        <div>
                            <label for="name" class="block text-sm font-medium mb-2">
                                Name <span class="text-destructive">*</span>
                            </label>
                            <input id="name" v-model="form.name" type="text" placeholder="Your full name"
                                class="w-full px-4 py-3 rounded-lg border border-input bg-background focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent transition-colors"
                                required />
                        </div>

                        <div>
                            <label for="company" class="block text-sm font-medium mb-2">
                                Company
                            </label>
                            <input id="company" v-model="form.company" type="text"
                                placeholder="Your company name (optional)"
                                class="w-full px-4 py-3 rounded-lg border border-input bg-background focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent transition-colors" />
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium mb-2">
                                Email <span class="text-destructive">*</span>
                            </label>
                            <input id="email" v-model="form.email" type="email" placeholder="your.email@example.com"
                                class="w-full px-4 py-3 rounded-lg border border-input bg-background focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent transition-colors"
                                required />
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium mb-2">
                                Message <span class="text-destructive">*</span>
                            </label>
                            <textarea id="message" v-model="form.message"
                                placeholder="Tell us about your project or what you're looking to build..." rows="6"
                                class="w-full px-4 py-3 rounded-lg border border-input bg-background focus:outline-none focus:ring-2 focus:ring-ring focus:border-transparent transition-colors resize-none"
                                required></textarea>
                        </div>

                        <button type="submit" :disabled="form.processing"
                            class="w-full bg-primary text-primary-foreground px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors font-medium text-lg disabled:opacity-50 disabled:cursor-not-allowed">
                            <span v-if="form.processing">Sending...</span>
                            <span v-else>Send Message</span>
                        </button>

                        <div v-if="form.recentlySuccessful" class="mt-4 text-green-600 text-center">
                            Thank you for reaching out! We'll be in touch soon.
                        </div>

                        <p class="text-sm text-muted-foreground text-center">
                            We'll get back to you within 24 hours.
                        </p>
                    </form>
                </div>
            </section>

            <!-- Additional Contact Info -->
            <section class="py-16">
                <div class="max-w-4xl mx-auto px-4">
                    <div class="grid md:grid-cols-3 gap-8 text-center">
                        <div>
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold mb-2">Email</h3>
                            <a href="mailto:hello@yarmy.tech"
                                class="text-muted-foreground hover:text-primary transition-colors">
                                hello@yarmy.tech
                            </a>
                        </div>

                        <div>
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold mb-2">Response Time</h3>
                            <p class="text-muted-foreground">Within 24 hours</p>
                        </div>

                        <div>
                            <div
                                class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mx-auto mb-4">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                </svg>
                            </div>
                            <h3 class="font-semibold mb-2">Location</h3>
                            <p class="text-muted-foreground">Remote & Global</p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <WebsiteFooter />
    </div>
</template>
