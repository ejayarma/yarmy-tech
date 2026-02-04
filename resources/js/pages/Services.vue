<script setup lang="ts">
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

const services = [
    {
        title: 'Custom Software Development',
        description: 'Tailored solutions built around your business needs — not generic templates.',
        icon: 'code',
    },
    {
        title: 'Web & Mobile Applications',
        description: 'Modern, responsive, and user-focused applications that perform.',
        icon: 'devices',
    },
    {
        title: 'Backend & APIs',
        description: 'Secure, scalable systems that power your products reliably.',
        icon: 'server',
    },
    {
        title: 'Cloud & DevOps',
        description: 'Deployment pipelines, monitoring, and infrastructure that support growth.',
        icon: 'cloud',
    },
    {
        title: 'AI & Machine Learning',
        description: 'Intelligent solutions that automate processes and uncover insights from your data.',
        icon: 'ai',
    },
    {
        title: 'Technical Consulting',
        description: 'Strategic guidance on architecture, tech stack decisions, and system design.',
        icon: 'consulting',
    },
    {
        title: 'System Improvement & Scaling',
        description: 'Refactoring, performance optimization, and architecture clean-ups.',
        icon: 'optimization',
    },
];
</script>

<template>

    <Head title="Services">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="min-h-screen flex flex-col">
        <WebsiteHeader />

        <main class="flex-1">
            <!-- Hero Section -->
            <section class="max-w-6xl mx-auto px-4 py-16 md:py-24 text-center">
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Our <span class="text-primary">Services</span>
                </h1>
                <p class="text-lg md:text-xl text-muted-foreground max-w-3xl mx-auto leading-relaxed">
                    We offer end-to-end software solutions, from initial concept to deployment and beyond.
                    Every service is designed to deliver real value, not just code.
                </p>
            </section>

            <!-- Services Grid -->
            <section class="bg-muted/30 py-20">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                        <!-- Custom Software Development -->
                        <div
                            class="bg-card border border-border rounded-lg p-8 hover:border-primary/50 transition-colors">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Custom Software Development</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Tailored solutions built around your business needs, not generic templates.
                            </p>
                        </div>

                        <!-- Web & Mobile Applications -->
                        <div
                            class="bg-card border border-border rounded-lg p-8 hover:border-primary/50 transition-colors">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Web & Mobile Applications</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Modern, responsive, and user-focused applications that perform.
                            </p>
                        </div>

                        <!-- Backend & APIs -->
                        <div
                            class="bg-card border border-border rounded-lg p-8 hover:border-primary/50 transition-colors">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 12h14M5 12a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v4a2 2 0 01-2 2M5 12a2 2 0 00-2 2v4a2 2 0 002 2h14a2 2 0 002-2v-4a2 2 0 00-2-2m-2-4h.01M17 16h.01" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Backend & APIs</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Secure, scalable systems that power your products reliably.
                            </p>
                        </div>

                        <!-- Cloud & DevOps -->
                        <div
                            class="bg-card border border-border rounded-lg p-8 hover:border-primary/50 transition-colors">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Cloud & DevOps</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Deployment pipelines, monitoring, and infrastructure that support growth.
                            </p>
                        </div>

                        <!-- AI & Machine Learning -->
                        <div
                            class="bg-card border border-border rounded-lg p-8 hover:border-primary/50 transition-colors">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3">AI & Machine Learning</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Intelligent solutions that automate processes and uncover insights from your data.
                            </p>
                        </div>

                        <!-- Technical Consulting -->
                        <div
                            class="bg-card border border-border rounded-lg p-8 hover:border-primary/50 transition-colors">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3">Technical Consulting</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Strategic guidance on architecture, tech stack decisions, and system design.
                            </p>
                        </div>

                        <!-- System Improvement & Scaling -->
                        <div
                            class="bg-card border border-border rounded-lg p-8 hover:border-primary/50 transition-colors">
                            <div class="w-12 h-12 bg-primary/10 rounded-lg flex items-center justify-center mb-6">
                                <svg class="w-6 h-6 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M13 10V3L4 14h7v7l9-11h-7z" />
                                </svg>
                            </div>
                            <h3 class="text-xl font-bold mb-3">System Improvement & Scaling</h3>
                            <p class="text-muted-foreground leading-relaxed">
                                Refactoring, performance optimization, and architecture clean-ups.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- How We Deliver -->
            <section class="py-20">
                <div class="max-w-4xl mx-auto px-4 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">How We Deliver</h2>
                    <p class="text-lg text-muted-foreground mb-12 max-w-2xl mx-auto leading-relaxed">
                        Every project is different, but our approach stays the same: clear communication, quality code,
                        and systems built to last.
                    </p>

                    <div class="grid md:grid-cols-3 gap-8 text-left">
                        <div class="bg-card border border-border rounded-lg p-6">
                            <div class="text-3xl font-bold text-primary mb-3">1</div>
                            <h3 class="text-lg font-semibold mb-2">Discovery</h3>
                            <p class="text-muted-foreground text-sm">
                                We understand your goals, constraints, and what success looks like.
                            </p>
                        </div>
                        <div class="bg-card border border-border rounded-lg p-6">
                            <div class="text-3xl font-bold text-primary mb-3">2</div>
                            <h3 class="text-lg font-semibold mb-2">Build</h3>
                            <p class="text-muted-foreground text-sm">
                                Clean, tested code with transparent progress and regular check-ins.
                            </p>
                        </div>
                        <div class="bg-card border border-border rounded-lg p-6">
                            <div class="text-3xl font-bold text-primary mb-3">3</div>
                            <h3 class="text-lg font-semibold mb-2">Support</h3>
                            <p class="text-muted-foreground text-sm">
                                Deployment, monitoring, and ongoing improvements as you grow.
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA Section -->
            <section class="bg-muted/30 py-20">
                <div class="max-w-4xl mx-auto px-4 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-6">
                        Not sure which service you need?
                    </h2>
                    <p class="text-lg text-muted-foreground mb-8 max-w-2xl mx-auto">
                        Let's talk. We'll help you figure out the right approach for your project.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link :href="'/contact'"
                            class="inline-block bg-primary text-primary-foreground px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors font-medium">
                            Start a conversation
                        </Link>
                        <Link :href="'/about'"
                            class="inline-block bg-secondary text-secondary-foreground px-8 py-3 rounded-lg hover:bg-secondary/80 transition-colors font-medium">
                            Learn about us
                        </Link>
                    </div>
                </div>
            </section>
        </main>

        <WebsiteFooter />
    </div>
</template>
