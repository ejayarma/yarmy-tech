<script setup lang="ts">
import { Head } from '@inertiajs/vue3';
import WebsiteFooter from './partials/WebsiteFooter.vue';
import WebsiteHeader from './partials/WebsiteHeader.vue';

const lastUpdated = 'January 12, 2026';
const companyName = 'Yarmy Technologies';
const contactEmail = 'legal@yarmy.tech';
const websiteUrl = 'https://yarmy.tech';

const sections = [
    {
        id: 'acceptance',
        title: 'Acceptance of Terms',
        content: `By accessing or using the Yarmy Technologies website (${websiteUrl}) or engaging our services, you agree to be bound by these Terms and Conditions and our Privacy Policy. If you do not agree to these terms, please do not use our website or services. These terms apply to all visitors, clients, and users of our website and services.`,
    },
    {
        id: 'services',
        title: 'Our Services',
        content: `Yarmy Technologies provides software development services including, but not limited to, custom software development, web and mobile application development, API and backend systems, cloud architecture and DevOps, and system modernisation. The specific scope, deliverables, timelines, and pricing for any engagement are defined in a separate written agreement, proposal, or Statement of Work (SOW) agreed upon between Yarmy Technologies and the client.`,
    },
    {
        id: 'website-use',
        title: 'Website Use',
        content: `You may use our website for lawful purposes only. You agree not to:`,
        list: [
            'Use the site in any way that violates applicable local, national, or international laws or regulations',
            'Transmit any unsolicited or unauthorised advertising or promotional material',
            'Attempt to gain unauthorised access to any part of the website or its related systems',
            'Transmit any data containing viruses, malware, or other harmful code',
            'Scrape, copy, or reproduce any content from this site without prior written permission',
            'Impersonate Yarmy Technologies or any of its employees or representatives',
        ],
        extra: `We reserve the right to restrict or terminate access to the website for any user who violates these conditions.`,
    },
    {
        id: 'intellectual-property',
        title: 'Intellectual Property',
        content: `All content on this website — including text, graphics, logos, icons, images, and software — is the property of Yarmy Technologies and is protected by applicable intellectual property laws. You may not reproduce, distribute, or create derivative works from any website content without our express written consent.`,
        subsections: [
            {
                subtitle: 'Client Work',
                text: `Intellectual property rights for work developed under a client engagement are governed by the terms of the specific project agreement. Generally, upon full payment, clients receive ownership of the final deliverables as specified in the agreement. Yarmy Technologies retains ownership of any pre-existing tools, frameworks, libraries, or methodologies used in the development process.`,
            },
            {
                subtitle: 'Open Source Components',
                text: `Our projects may incorporate open-source software. Such components remain subject to their respective open-source licences, which will be disclosed as part of the project documentation.`,
            },
        ],
    },
    {
        id: 'payment',
        title: 'Payment Terms',
        content: `Payment terms are outlined in each project agreement or invoice. Unless otherwise agreed:`,
        list: [
            'Invoices are due within days of issue as specified on them',
            // 'Late payments may incur interest at a rate of 1.5% per month',
            'Work may be paused or withheld pending outstanding payments',
            'Deposits paid are non-refundable unless Yarmy Technologies fails to deliver as agreed',
            'All prices are exclusive of applicable taxes unless stated otherwise',
        ],
    },
    {
        id: 'confidentiality',
        title: 'Confidentiality',
        content: `Both parties agree to keep confidential any proprietary or sensitive information shared during the course of the engagement. This includes but is not limited to technical specifications, business strategy, pricing, and client data. This obligation survives the termination of any project agreement. Specific confidentiality or non-disclosure obligations may be further defined in a separate NDA or project agreement.`,
    },
    {
        id: 'disclaimers',
        title: 'Disclaimers & Warranties',
        content: `Our website is provided on an "as is" and "as available" basis. To the fullest extent permitted by law, Yarmy Technologies makes no warranties, express or implied, including but not limited to:`,
        list: [
            'Uninterrupted or error-free operation of the website',
            'Accuracy or completeness of any information on the site',
            'Fitness for a particular purpose',
            'Non-infringement of third-party rights',
        ],
        extra: `We do not warrant that the website is free of viruses or other harmful components. Use of the site is at your own risk.`,
    },
    {
        id: 'limitation-of-liability',
        title: 'Limitation of Liability',
        content: `To the maximum extent permitted by applicable law, Yarmy Technologies and its directors, employees, and partners shall not be liable for any indirect, incidental, consequential, special, or punitive damages arising from your use of this website or our services, including but not limited to loss of profits, data, business, or goodwill. Our total aggregate liability for any claim arising from or related to a project engagement shall not exceed the fees paid by the client for the specific service giving rise to the claim in the three months preceding the claim.`,
    },
    {
        id: 'third-party',
        title: 'Third-Party Links & Services',
        content: `Our website may contain links to third-party websites or services. These links are provided for convenience only. Yarmy Technologies has no control over the content, policies, or practices of third-party sites and accepts no responsibility for them. Inclusion of a link does not constitute endorsement. We recommend reading the terms and privacy policies of any third-party services you use.`,
    },
    {
        id: 'termination',
        title: 'Termination',
        content: `Either party may terminate a project engagement in accordance with the terms set out in the applicable project agreement. In the event of termination:`,
        list: [
            'The client remains liable for payment for all work completed up to the termination date',
            'Yarmy Technologies will deliver all completed work and assets in our possession',
            'Confidentiality obligations and intellectual property terms survive termination',
            'Any termination-related fees are as specified in the project agreement',
        ],
    },
    {
        id: 'changes',
        title: 'Changes to These Terms',
        content: `We reserve the right to update or modify these Terms and Conditions at any time. Changes will be posted on this page with an updated "Last updated" date. Continued use of our website after changes are posted constitutes acceptance of the revised terms. For significant changes affecting active client engagements, we will provide notice by email.`,
    },
    {
        id: 'governing-law',
        title: 'Governing Law',
        content: `These Terms and Conditions are governed by and construed in accordance with the laws of the jurisdiction in which Yarmy Technologies is registered. Any disputes arising out of or in connection with these terms shall be subject to the exclusive jurisdiction of the courts of that jurisdiction. We will always attempt to resolve disputes amicably before pursuing formal proceedings.`,
    },
    {
        id: 'contact',
        title: 'Contact Us',
        content: `If you have questions or concerns about these Terms and Conditions, please reach out to us:`,
        contact: true,
    },
];
</script>

<template>

    <Head title="Terms & Conditions — Yarmy Technologies">
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
                                d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                        </svg>
                        Legal
                    </div>
                    <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                        Terms & Conditions
                    </h1>
                    <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto">
                        Please read these terms carefully before using our website or engaging our services.
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

                            <!-- Intro notice -->
                            <div
                                class="bg-secondary/40 border border-border rounded-xl p-5 text-sm text-muted-foreground leading-relaxed">
                                These Terms and Conditions govern your use of
                                <a :href="websiteUrl"
                                    class="text-primary underline underline-offset-2 hover:text-accent transition-colors">{{
                                        websiteUrl }}</a>
                                and any services provided by {{ companyName }}. These terms are a legally binding
                                agreement. If you are entering into these terms on behalf of a company or organisation,
                                you confirm you have authority to bind that entity.
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

                                <!-- Subsections (e.g. IP) -->
                                <div v-if="section.subsections" class="mt-4 space-y-4">
                                    <div v-for="sub in section.subsections" :key="sub.subtitle"
                                        class="bg-muted/40 border border-border rounded-lg p-4">
                                        <h3 class="text-base font-semibold mb-2">{{ sub.subtitle }}</h3>
                                        <p class="text-sm text-muted-foreground leading-relaxed">{{ sub.text }}</p>
                                    </div>
                                </div>

                                <!-- Contact block -->
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
                                    <p>
                                        Website:
                                        <a :href="websiteUrl"
                                            class="text-primary underline underline-offset-2 hover:text-accent transition-colors">
                                            {{ websiteUrl }}
                                        </a>
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
                    <h2 class="text-2xl font-bold mb-3">Questions about our terms?</h2>
                    <p class="text-muted-foreground mb-6">
                        If anything here is unclear or you'd like to discuss a specific provision, we're here to help.
                    </p>
                    <a :href="`mailto:${contactEmail}`"
                        class="inline-block bg-primary text-primary-foreground px-8 py-3 rounded-full hover:bg-primary/90 transition-colors font-medium">
                        Get in touch
                    </a>
                </div>
            </section>
        </main>

        <WebsiteFooter />
    </div>
</template>
