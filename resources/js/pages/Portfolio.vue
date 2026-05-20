<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
import WebsiteFooter from './partials/WebsiteFooter.vue';
import WebsiteHeader from './partials/WebsiteHeader.vue';
import BereaHomePage from '@images/portfolio/bnf-homepage.png';
import SalvationHomePage from '@images/portfolio/salvation-homepage.png';
import SalvationAdmin from '@images/portfolio/salvation-admin.png';
import SalvationAbout from '@images/portfolio/salvation-about.png';
import BNFDonation from '@images/portfolio/bnf-donation.png';
import BNFAbout from '@images/portfolio/bnf-about.png';


withDefaults(
    defineProps<{
        canRegister: boolean;
        // Switch between: 'strip' | 'browser' | 'carousel'
        screenshotLayout: 'strip' | 'browser' | 'carousel';
    }>(),
    {
        canRegister: true,
        screenshotLayout: 'browser', // ← change this to try options
    },
);

const projects = [
    {
        id: 1,
        title: 'Berea Noble Foundation',
        tagline: 'Turning generosity into action — online.',
        category: 'NGO / Non-Profit',
        url: 'https://bereanoblefoundation.com/',
        challenge:
            'Berea Noble Foundation brings mobile libraries, healthcare, and educational programs to underserved communities across Ghana. They had a powerful mission but no digital presence, donations had to happen offline, limiting their reach.',
        solution:
            'We built a clean, trust-first website that tells their story compellingly and integrates a seamless payment system so anyone, anywhere, can donate in minutes. No friction, no confusion, just giving made simple.',
        impact: [
            'Online donations enabled for the first time',
            'Mobile-first design reaches donors on any device',
            'Credibility boost with a professional web presence',
        ],
        tech: ['Responsive UI/UX Design', 'Admin System', 'Payment Integration', 'Professional Email'],
        accentColor: 'hsl(25, 100%, 48%)',
        accentBg: 'hsl(25, 100%, 48% / 0.08)',
        accentBorder: 'hsl(25, 100%, 48% / 0.25)',
        screenshots: [
            { src: BereaHomePage, alt: 'Berea Noble Foundation homepage' },
            { src: BNFDonation, alt: 'Berea Noble Foundation donation page' },
            { src: BNFAbout, alt: 'Berea Noble Foundation about page' },
        ],
    },
    {
        id: 2,
        title: 'Salvation PCG Nungua',
        tagline: 'A church that knows its people — by name.',
        category: 'Church / Religious Organisation',
        url: 'https://www.salvationpcgnungua.org/',
        challenge:
            'Salvation Presbyterian Church of Ghana, Nungua had a growing congregation and a pile of paper records to match. Tracking membership, attendance, and pastoral care was becoming a full-time job on its own.',
        solution:
            'We delivered a public-facing website for the church\'s outreach, paired with a private admin system that gives leadership a live membership database — searchable, organised, and actually usable.',
        impact: [
            'Membership records digitised and centralised',
            'Admin dashboard for church leadership',
            'Public website for outreach and information',
        ],
        tech: ['Responsive UI/UX Design', 'Admin System', 'SMS and Email Broadcasting'],
        accentColor: 'hsl(225, 60%, 50%)',
        accentBg: 'hsl(225, 60%, 50% / 0.08)',
        accentBorder: 'hsl(225, 60%, 50% / 0.25)',
        screenshots: [
            { src: SalvationHomePage, alt: 'Salvation PCG homepage' },
            { src: SalvationAdmin, alt: 'Salvation PCG membership admin' },
            { src: SalvationAbout, alt: 'Salvation PCG about page' },
        ],
    },
];
</script>

<template>

    <Head title="Our Work">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="min-h-screen flex flex-col">
        <WebsiteHeader />

        <main class="flex-1">

            <!-- Hero -->
            <section class="max-w-5xl mx-auto px-4 py-16 md:py-24 text-center">
                <p class="text-sm font-semibold uppercase tracking-widest text-accent mb-4">Our Work</p>
                <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-6 leading-tight">
                    Problems solved.<br class="hidden sm:inline" />
                    <span class="text-primary">Products shipped.</span>
                </h1>
                <p class="text-lg md:text-xl text-muted-foreground max-w-2xl mx-auto leading-relaxed">
                    Every project here started with a real problem and ended with software that actually works.
                    No fluff, just outcomes.
                </p>
            </section>

            <!-- Projects -->
            <section class="pb-24">
                <div class="max-w-5xl mx-auto px-4 space-y-16">

                    <article
                        v-for="project in projects"
                        :key="project.id"
                        class="group relative bg-card border border-border rounded-2xl overflow-hidden transition-all duration-300 hover:border-primary/30 hover:shadow-lg hover:shadow-primary/5"
                    >
                        <!-- Top accent bar -->
                        <div class="h-1 w-full" :style="{ background: project.accentColor }"></div>

                        <div class="p-8 md:p-10">

                            <!-- Header -->
                            <div class="flex flex-col sm:flex-row sm:items-start sm:justify-between gap-4 mb-8">
                                <div>
                                    <span
                                        class="inline-block text-xs font-semibold uppercase tracking-wider px-3 py-1 rounded-full mb-3"
                                        :style="{ background: project.accentBg, color: project.accentColor, border: `1px solid ${project.accentBorder}` }"
                                    >
                                        {{ project.category }}
                                    </span>
                                    <h2 class="text-2xl md:text-3xl font-bold mb-1">{{ project.title }}</h2>
                                    <p class="text-muted-foreground italic">{{ project.tagline }}</p>
                                </div>

                                <a
                                    :href="project.url"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="flex-shrink-0 inline-flex items-center gap-2 px-5 py-2.5 rounded-full border border-border text-sm font-medium text-muted-foreground hover:text-foreground hover:border-primary/50 hover:bg-primary/5 transition-all duration-200 self-start"
                                >
                                    View live site
                                    <svg class="w-3.5 h-3.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14" />
                                    </svg>
                                </a>
                            </div>

                            <!-- Case study body -->
                            <div class="grid md:grid-cols-2 gap-8 mb-8">
                                <div>
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-3">The Problem</h3>
                                    <p class="text-foreground/80 leading-relaxed">{{ project.challenge }}</p>
                                </div>
                                <div>
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-3">What We Built</h3>
                                    <p class="text-foreground/80 leading-relaxed">{{ project.solution }}</p>
                                </div>
                            </div>

                            <!-- Impact + Tech -->
                            <div class="flex flex-col sm:flex-row gap-8 pt-8 border-t border-border">

                                <!-- Impact -->
                                <div class="flex-1">
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-4">Impact</h3>
                                    <ul class="space-y-2">
                                        <li
                                            v-for="item in project.impact"
                                            :key="item"
                                            class="flex items-start gap-2.5 text-sm text-foreground/80"
                                        >
                                            <svg class="w-4 h-4 flex-shrink-0 mt-0.5" :style="{ color: project.accentColor }" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7" />
                                            </svg>
                                            {{ item }}
                                        </li>
                                    </ul>
                                </div>

                                <!-- Tech -->
                                <div class="sm:text-right">
                                    <!-- <h3 class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-4">What we used</h3> -->
                                    <div class="flex flex-wrap sm:justify-end gap-2">
                                        <span
                                            v-for="tag in project.tech"
                                            :key="tag"
                                            class="text-xs px-3 py-1 rounded-full bg-muted text-muted-foreground font-medium"
                                        >
                                            {{ tag }}
                                        </span>
                                    </div>
                                </div>

                            </div>
                        </div>
                            <!-- ── OPTION 1: Strip ── simple 3-col image grid -->
                             <div class="px-6 md:px-10 pb-10">
                                <div v-if="screenshotLayout === 'strip'" class="mt-8 pt-8 border-t border-border">
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-4">Screenshots</h3>
                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-3">
                                        <div
                                            v-for="shot in project.screenshots"
                                            :key="shot.src"
                                            class="rounded-xl overflow-hidden border border-border bg-muted aspect-video"
                                        >
                                            <img
                                                :src="shot.src"
                                                :alt="shot.alt"
                                                class="w-full h-full object-cover object-top"
                                            />
                                        </div>
                                    </div>
                                </div>

                                <!-- ── OPTION 2: Browser frame mockup ── -->
                                <div v-if="screenshotLayout === 'browser'" class="mt-8 pt-8 border-t border-border">
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-4">Screenshots</h3>
                                    <div class="grid grid-cols-1 sm:grid-cols-3 gap-4">
                                        <div
                                            v-for="shot in project.screenshots"
                                            :key="shot.src"
                                            class="rounded-xl overflow-hidden border border-border shadow-md bg-card"
                                        >
                                            <!-- Browser chrome -->
                                            <div class="flex items-center gap-1.5 px-3 py-2 bg-muted border-b border-border">
                                                <span class="w-2.5 h-2.5 rounded-full bg-red-400/70"></span>
                                                <span class="w-2.5 h-2.5 rounded-full bg-yellow-400/70"></span>
                                                <span class="w-2.5 h-2.5 rounded-full bg-green-400/70"></span>
                                                <div class="ml-2 flex-1 h-4 rounded bg-border/60 text-[10px] text-muted-foreground flex items-center px-2 truncate">
                                                    {{ project.url }}
                                                </div>
                                            </div>
                                            <!-- Screenshot -->
                                            <div class="aspect-video bg-muted">
                                                <img
                                                    :src="shot.src"
                                                    :alt="shot.alt"
                                                    class="w-full h-full object-cover object-top"
                                                />
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- ── OPTION 3: Horizontal carousel ── -->
                                <div v-if="screenshotLayout === 'carousel'" class="mt-8 pt-8 border-t border-border">
                                    <h3 class="text-xs font-semibold uppercase tracking-widest text-muted-foreground mb-4">Screenshots</h3>
                                    <div class="flex gap-4 overflow-x-auto pb-3 snap-x snap-mandatory scrollbar-hide -mx-8 md:-mx-10 px-8 md:px-10">
                                        <div
                                            v-for="shot in project.screenshots"
                                            :key="shot.src"
                                            class="flex-shrink-0 w-[80%] sm:w-[60%] md:w-[45%] snap-start rounded-xl overflow-hidden border border-border bg-muted aspect-video"
                                        >
                                            <img
                                                :src="shot.src"
                                                :alt="shot.alt"
                                                class="w-full h-full object-cover object-top"
                                            />
                                        </div>
                                    </div>
                                </div>
                             </div>
                    </article>

                </div>
            </section>

            <!-- CTA -->
            <section class="bg-muted/30 py-20">
                <div class="max-w-3xl mx-auto px-4 text-center">
                    <h2 class="text-3xl md:text-4xl font-bold mb-4">Got a problem worth solving?</h2>
                    <p class="text-lg text-muted-foreground mb-8 max-w-xl mx-auto">
                        Your project could be next. Let's talk about what you're building and figure out the best way to make it real.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <Link href="/contact"
                            class="inline-block bg-primary text-primary-foreground px-8 py-3 rounded-full hover:bg-primary/90 transition-colors font-medium">
                            Start a project
                        </Link>
                        <Link href="/services"
                            class="inline-block bg-secondary text-secondary-foreground px-8 py-3 rounded-full hover:bg-secondary/80 transition-colors font-medium">
                            See our services
                        </Link>
                    </div>
                </div>
            </section>

        </main>

        <WebsiteFooter />
    </div>
</template>

<style scoped>
/* Hide scrollbar for carousel while keeping scroll behaviour */
.scrollbar-hide {
    -ms-overflow-style: none;
    scrollbar-width: none;
}
.scrollbar-hide::-webkit-scrollbar {
    display: none;
}
</style>
