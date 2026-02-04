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
    'Custom software development',
    'Web & mobile applications',
    'API & backend systems',
    'Cloud architecture & DevOps',
    'System modernization & scaling',
];

const principles = [
    {
        title: 'Clean architecture',
        description: 'no spaghetti code',
    },
    {
        title: 'Scalable by design',
        description: 'built for growth from day one',
    },
    {
        title: 'Great developer experience',
        description: 'easy to extend and maintain',
    },
    {
        title: 'Business-first thinking',
        description: 'tech that supports real goals',
    },
];

const process = [
    {
        step: '1. Understand',
        description: 'We take time to understand your business, users, and constraints.',
    },
    {
        step: '2. Design',
        description: 'Clear system design, thoughtful UX, and realistic technical decisions.',
    },
    {
        step: '3. Build',
        description: 'Clean code, tested systems, and transparent progress.',
    },
    {
        step: '4. Launch & Scale',
        description: 'Smooth deployment, monitoring, and ongoing improvements.',
    },
];

const industries = [
    'Startups & scale-ups',
    'SMEs & enterprises',
    'Fintech & payments',
    'EdTech & platforms',
    'Public sector & NGOs',
];

const techStack = [
    { category: 'Frontend', tech: 'JavaScript, TypeScript, modern frameworks' },
    { category: 'Backend', tech: 'PHP, Python, Node.js' },
    { category: 'Mobile', tech: 'Flutter' },
    { category: 'Databases', tech: 'PostgreSQL, MySQL' },
    { category: 'Cloud & DevOps', tech: 'Docker, CI/CD, cloud platforms' },
];
</script>

<template>

    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>

    <div class="min-h-screen">

        <WebsiteHeader />

        <main>
            <!-- Hero Section -->
            <section class="grid-wrapper">
                <div class="linear-background"></div>
                <div class="grid-background"></div>
                <div class="relative z-10 max-w-6xl mx-auto px-4 py-20 md:py-32">
                    <div class="text-center max-w-4xl mx-auto">
                        <!-- <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                            Spice up your <br class="hidden sm:inline" />
                            <span class="text-primary">tech game</span>
                        </h1> -->
                        <h1 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-6 leading-tight">
                            Innovative software solutions, built to scale
                        </h1>
                        <p class="text-xl md:text-3xl text-muted-foreground mb-10 max-w-3xl mx-auto leading-relaxed">
                            <!-- Innovative software solutions, built to scale. -->
                            Yarmy Technologies crafts reliable web, mobile, and
                            cloud systems that teams enjoy using, without unnecessary complexity.
                            <!-- <span class="hidden md:inline">
                            </span> -->
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center">

                            <a href="/contact">
                                <div
                                    class="glass-container glass-container--rounded glass-container--small lg:px-6 lg:py-3 inline-block">
                                    <div class="glass-filter"></div>
                                    <div class="glass-overlay"></div>
                                    <div class="glass-specular"></div>
                                    <div class="glass-content glass-content--alone">

                                        <div class="glass-item">
                                            Start a project
                                        </div>
                                    </div>
                                </div>
                            </a>




                        </div>
                    </div>
                </div>
            </section>

            <svg class="bg-muted/30 -mt-e border-0 outline-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="#142452" fill-opacity="1"
                    d="M0,192L15,192C30,192,60,192,90,170.7C120,149,150,107,180,128C210,149,240,235,270,266.7C300,299,330,277,360,240C390,203,420,149,450,149.3C480,149,510,203,540,202.7C570,203,600,149,630,154.7C660,160,690,224,720,240C750,256,780,224,810,192C840,160,870,128,900,149.3C930,171,960,245,990,261.3C1020,277,1050,235,1080,186.7C1110,139,1140,85,1170,90.7C1200,96,1230,160,1260,165.3C1290,171,1320,117,1350,85.3C1380,53,1410,43,1425,37.3L1440,32L1440,0L1425,0C1410,0,1380,0,1350,0C1320,0,1290,0,1260,0C1230,0,1200,0,1170,0C1140,0,1110,0,1080,0C1050,0,1020,0,990,0C960,0,930,0,900,0C870,0,840,0,810,0C780,0,750,0,720,0C690,0,660,0,630,0C600,0,570,0,540,0C510,0,480,0,450,0C420,0,390,0,360,0C330,0,300,0,270,0C240,0,210,0,180,0C150,0,120,0,90,0C60,0,30,0,15,0L0,0Z">
                </path>
            </svg>

            <!-- What We Do -->
            <section id="services" class="bg-muted/30 py-20 -mt-20">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">What We Do</h2>
                        <p class="text-lg text-muted-foreground leading-relaxed">
                            We help businesses turn ideas into well-crafted software products. Whether you're launching
                            something new or improving an existing system, we focus on clarity, performance, and
                            long-term maintainability.
                        </p>
                    </div>

                    <div class="max-w-2xl mx-auto">
                        <h3 class="text-xl font-semibold mb-6 text-center">Our core services:</h3>
                        <ul class="space-y-3">
                            <li v-for="service in services" :key="service"
                                class="flex items-start gap-3 text-muted-foreground">
                                <svg class="w-6 h-6 text-accent flex-shrink-0 mt-0.5" fill="none" stroke="currentColor"
                                    viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M5 13l4 4L19 7" />
                                </svg>
                                <span class="text-lg">{{ service }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <!-- Why Yarmy -->
            <section id="about" class="py-20">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Why Yarmy?</h2>
                        <p class="text-xl font-semibold mb-4">Software should feel good to use.</p>
                        <p class="text-lg text-muted-foreground leading-relaxed">
                            Most software fails because it's rushed, over-engineered, or hard to maintain. We take a
                            different approach.
                        </p>
                    </div>

                    <div class="grid md:grid-cols-2 gap-8 max-w-4xl mx-auto mb-12">
                        <div v-for="principle in principles" :key="principle.title"
                            class="bg-card border border-border rounded-lg p-6">
                            <h3 class="text-xl font-semibold mb-2">{{ principle.title }}</h3>
                            <p class="text-muted-foreground">{{ principle.description }}</p>
                        </div>
                    </div>

                    <p class="text-center text-lg font-medium max-w-2xl mx-auto">
                        We don't ship half-baked solutions. Only the good stuff goes live.
                    </p>
                </div>
            </section>

            <!-- How We Work -->
            <section class="bg-muted/30 py-20">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center mb-16">
                        <h2 class="text-3xl md:text-4xl font-bold mb-4">How We Work</h2>
                        <p class="text-xl text-muted-foreground">A simple, effective process</p>
                    </div>

                    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6 max-w-5xl mx-auto">
                        <div v-for="(item, index) in process" :key="item.step"
                            class="bg-card border border-border rounded-lg p-6 relative">
                            <div
                                class="absolute -top-3 -left-3 w-8 h-8 bg-primary text-primary-foreground rounded-full flex items-center justify-center font-bold text-sm">
                                {{ index + 1 }}
                            </div>
                            <h3 class="text-lg font-semibold mb-3">{{ item.step }}</h3>
                            <p class="text-muted-foreground text-sm leading-relaxed">
                                {{ item.description }}
                            </p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Industries -->
            <section class="py-20">
                <div class="max-w-6xl mx-auto px-4">
                    <div class="max-w-3xl mx-auto text-center mb-12">
                        <h2 class="text-3xl md:text-4xl font-bold mb-6">Industries We Support</h2>
                        <p class="text-lg text-muted-foreground mb-8">
                            We work with teams across multiple sectors:
                        </p>
                    </div>

                    <div class="max-w-2xl mx-auto">
                        <ul class="grid sm:grid-cols-2 gap-4">
                            <li v-for="industry in industries" :key="industry"
                                class="flex items-center gap-3 text-muted-foreground">
                                <div class="w-2 h-2 bg-primary rounded-full flex-shrink-0"></div>
                                <span class="text-lg">{{ industry }}</span>
                            </li>
                        </ul>
                        <p class="text-center text-lg font-medium mt-12">
                            If your problem is complex, we're interested.
                        </p>
                    </div>
                </div>
            </section>

            <!-- Final CTA -->
            <section id="contact" class="py-20">
                <div class="max-w-4xl mx-auto px-4 text-center">
                    <h2 class="text-3xl md:text-5xl font-bold mb-6">
                        Ready to spice up your <span class="text-primary">tech game?</span>
                    </h2>
                    <p class="text-lg md:text-xl text-muted-foreground mb-10 max-w-2xl mx-auto">
                        Let's build software that works today — and still makes sense tomorrow.
                    </p>
                    <div class="flex flex-col sm:flex-row gap-4 justify-center">
                        <!-- <a href="#contact-form"
                            class="inline-block bg-primary text-primary-foreground px-8 py-3 rounded-lg hover:bg-primary/90 transition-colors font-medium text-lg">
                            Start a project
                        </a> -->
                        <a href="/contact"
                            class="inline-block bg-secondary text-secondary-foreground px-8 py-3 rounded-full hover:bg-secondary/80 transition-colors font-medium text-lg">
                            Contact us
                        </a>
                    </div>
                </div>
            </section>
        </main>

        <WebsiteFooter />
    </div>
</template>
