<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import WebsiteFooter from './partials/WebsiteFooter.vue';
import WebsiteHeader from './partials/WebsiteHeader.vue';

const lastUpdated = 'January 12, 2026';
const companyName = 'Yarmy Technologies';
const contactEmail = 'privacy@yarmy.tech';
const websiteUrl = 'https://yarmy.tech';

const sections = [
    {
        id: 'information-we-collect',
        title: 'Information We Collect',
        content: `We collect information you provide directly to us, such as when you contact us through our website, request a project quote, or engage with our services. This may include:`,
        list: [
            'Name and contact details (email address, phone number)',
            'Company name and job title',
            'Project requirements and technical specifications you share with us',
            'Communication history and correspondence',
            'Payment and billing information when applicable',
        ],
        extra: `We also automatically collect certain technical information when you visit our website, including your IP address, browser type, operating system, referring URLs, pages visited, and timestamps. We use cookies and similar tracking technologies to enhance your browsing experience.`,
    },
    {
        id: 'how-we-use-information',
        title: 'How We Use Your Information',
        content: 'We use the information we collect to:',
        list: [
            'Respond to your enquiries and provide the services you request',
            'Send project updates, proposals, and related business communications',
            'Process payments and manage billing',
            'Improve and personalise your experience on our website',
            'Analyse usage patterns to improve our services',
            'Comply with legal obligations and enforce our agreements',
            'Send occasional marketing communications (with your consent)',
        ],
    },
    {
        id: 'sharing-information',
        title: 'How We Share Your Information',
        content: `We do not sell, trade, or rent your personal information to third parties. We may share your information in the following limited circumstances:`,
        list: [
            'With trusted service providers who assist us in operating our website and delivering our services (e.g., hosting providers, payment processors), under strict confidentiality obligations',
            'When required by law, court order, or governmental authority',
            'To protect the rights, property, or safety of Yarmy Technologies, our clients, or others',
            'With your explicit consent for any other purpose',
        ],
    },
    {
        id: 'data-retention',
        title: 'Data Retention',
        content: `We retain your personal information for as long as necessary to fulfil the purposes described in this policy, maintain our business relationship with you, and comply with our legal obligations. When information is no longer required, we securely delete or anonymise it. Project-related data is typically retained for up to seven years to meet standard accounting and contractual requirements.`,
    },
    {
        id: 'your-rights',
        title: 'Your Rights',
        content: 'Depending on your location, you may have the following rights regarding your personal data:',
        list: [
            'Access: Request a copy of the personal data we hold about you',
            'Rectification: Request correction of inaccurate or incomplete data',
            'Erasure: Request deletion of your personal data, subject to legal obligations',
            'Restriction: Request that we limit how we process your data',
            'Portability: Receive your data in a structured, machine-readable format',
            'Objection: Object to processing based on legitimate interests or for direct marketing',
            'Withdraw consent: Withdraw any consent you have given at any time',
        ],
        extra: `To exercise any of these rights, please contact us at ${contactEmail}. We will respond within 30 days.`,
    },
    {
        id: 'cookies',
        title: 'Cookies',
        content: `Our website uses cookies to improve functionality and analyse traffic. Cookies are small text files stored on your device. We use:`,
        list: [
            'Essential cookies: Necessary for the website to function correctly',
            'Analytics cookies: Help us understand how visitors interact with our site (e.g., Google Analytics)',
            'Preference cookies: Remember your settings and choices',
        ],
        extra: `You can control or disable cookies through your browser settings. Note that disabling certain cookies may affect the functionality of our website.`,
    },
    {
        id: 'security',
        title: 'Data Security',
        content: `We implement appropriate technical and organisational measures to protect your personal information against unauthorised access, alteration, disclosure, or destruction. These include encrypted data transmission (SSL/TLS), secure server infrastructure, access controls, and regular security reviews. However, no method of transmission over the internet is completely secure, and we cannot guarantee absolute security.`,
    },
    {
        id: 'third-party-links',
        title: 'Third-Party Links',
        content: `Our website may contain links to third-party websites. We are not responsible for the privacy practices or content of those sites. We encourage you to read the privacy policy of any website you visit.`,
    },
    {
        id: 'changes',
        title: 'Changes to This Policy',
        content: `We may update this Privacy Policy from time to time to reflect changes in our practices or applicable law. We will post the updated policy on this page with a revised "Last updated" date. For significant changes, we may notify you directly by email. We encourage you to review this policy periodically.`,
    },
    {
        id: 'contact',
        title: 'Contact Us',
        content: `If you have questions, concerns, or requests regarding this Privacy Policy or how we handle your data, please contact us at:`,
        contact: true,
    },
];
</script>

<template>

    <Head title="Privacy Policy — Yarmy Technologies">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="min-h-screen">
        <WebsiteHeader />

        <main>
            <!-- Hero -->
            <section class="grid-wrapper">
                <div class="linear-background"></div>
                <div class="grid-background"></div>
                <div class="relative z-10 max-w-4xl mx-auto px-4 py-20 md:py-28 text-center">
                    <div
                        class="inline-flex items-center gap-2 bg-secondary/80 text-secondary-foreground text-sm font-medium px-4 py-1.5 rounded-full mb-6 border border-border">
                        <svg class="w-4 h-4 text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                        </svg>
                        Legal
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Privacy Policy
                    </h1>
                    <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                        Your privacy matters to us. This policy explains how {{ companyName }} collects, uses, and
                        protects your information.
                    </p>
                    <p class="mt-6 text-sm text-muted">Last updated: {{ lastUpdated }}</p>
                </div>
            </section>

            <svg class="bg-background -mt-1 border-0 outline-0" xmlns="http://www.w3.org/2000/svg"
                viewBox="0 0 1440 80">
                <path fill="#142452" fill-opacity="1"
                    d="M0,48L60,42.7C120,37,240,27,360,32C480,37,600,59,720,58.7C840,59,960,37,1080,32C1200,27,1320,37,1380,42.7L1440,48L1440,0L1380,0C1320,0,1200,0,1080,0C960,0,840,0,720,0C600,0,480,0,360,0C240,0,120,0,60,0L0,0Z">
                </path>
            </svg>

            <!-- Content -->
            <section class="py-16">
                <div class="max-w-4xl mx-auto px-4">
                    <div class="grid lg:grid-cols-4 gap-10">

                        <!-- Sticky TOC -->
                        <aside class="hidden lg:block">
                            <div class="sticky top-8">
                                <p class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-4">
                                    Contents
                                </p>
                                <nav class="space-y-1">
                                    <a v-for="section in sections" :key="section.id" :href="`#${section.id}`"
                                        class="block text-sm text-muted-foreground hover:text-foreground hover:translate-x-1 transition-all duration-200 py-1 border-l-2 border-transparent hover:border-primary pl-3">
                                        {{ section.title }}
                                    </a>
                                </nav>
                            </div>
                        </aside>

                        <!-- Main content -->
                        <div class="lg:col-span-3 space-y-12">
                            <div
                                class="bg-secondary/40 border border-border rounded-xl p-5 text-sm text-muted-foreground leading-relaxed">
                                This Privacy Policy applies to the website at
                                <a :href="websiteUrl"
                                    class="text-primary underline underline-offset-2 hover:text-accent transition-colors">{{
                                        websiteUrl }}</a>
                                and all services provided by {{ companyName }}. By using our website or services, you
                                agree to the terms outlined here.
                            </div>

                            <div v-for="section in sections" :key="section.id" :id="section.id"
                                class="scroll-mt-8 border-b border-border pb-10 last:border-0">
                                <h2 class="text-2xl font-bold mb-4 flex items-center gap-3">
                                    <span
                                        class="w-1 h-6 bg-gradient-to-b from-primary to-accent rounded-full inline-block flex-shrink-0"></span>
                                    {{ section.title }}
                                </h2>

                                <p v-if="section.content" class="text-muted-foreground leading-relaxed mb-4">
                                    {{ section.content }}
                                </p>

                                <ul v-if="section.list" class="space-y-2 mb-4">
                                    <li v-for="item in section.list" :key="item"
                                        class="flex items-start gap-3 text-muted-foreground">
                                        <svg class="w-5 h-5 text-accent flex-shrink-0 mt-0.5" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M5 13l4 4L19 7" />
                                        </svg>
                                        <span class="text-sm leading-relaxed">{{ item }}</span>
                                    </li>
                                </ul>

                                <p v-if="section.extra" class="text-muted-foreground leading-relaxed text-sm">
                                    {{ section.extra }}
                                </p>

                                <div v-if="section.contact"
                                    class="bg-card border border-border rounded-xl p-6 mt-4 space-y-2 text-sm text-muted-foreground">
                                    <p class="font-semibold text-foreground text-base">{{ companyName }}</p>
                                    <p>
                                        Email:
                                        <a :href="`mailto:${contactEmail}`"
                                            class="text-primary underline underline-offset-2 hover:text-accent transition-colors">
                                            {{ contactEmail }}
                                        </a>
                                    </p>
                                    <p>Website: <a :href="websiteUrl"
                                            class="text-primary underline underline-offset-2 hover:text-accent transition-colors">{{
                                                websiteUrl }}</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- CTA -->
            <section class="bg-muted/30 py-16">
                <div class="max-w-2xl mx-auto px-4 text-center">
                    <h2 class="text-2xl font-bold mb-3">Have questions about your data?</h2>
                    <p class="text-muted-foreground mb-6">
                        We're happy to answer any questions about how we handle your information.
                    </p>
                    <a :href="`mailto:${contactEmail}`"
                        class="inline-block bg-primary text-primary-foreground px-8 py-3 rounded-full hover:bg-primary/90 transition-colors font-medium">
                        Contact our privacy team
                    </a>
                </div>
            </section>
        </main>

        <WebsiteFooter />
    </div>
</template>
