<script setup lang="ts">
import { dashboard, login, register } from '@/routes';
import { Head, Link } from '@inertiajs/vue3';

withDefaults(
    defineProps<{
        canRegister: boolean;
    }>(),
    {
        canRegister: true,
    },
);
</script>

<template>

    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <div>
        <!-- Header -->
        <header class="border-b border-gray-200">
            <nav class="max-w-6xl mx-auto px-4 py-6 flex items-center justify-between">
                <div class="text-2xl font-bold text-blue-600">Yarmy</div>
                <div class="space-x-6 hidden md:flex">
                    <a href="#services" class="text-gray-600 hover:text-blue-600 transition">Services</a>
                    <a href="#about" class="text-gray-600 hover:text-blue-600 transition">About</a>
                    <a href="#contact" class="text-gray-600 hover:text-blue-600 transition">Contact</a>
                </div>
            </nav>
        </header>

        <main>
            <!-- Hero -->
            <section class="max-w-6xl mx-auto px-4 py-20 md:py-32 text-center">
                <h1 class="text-4xl md:text-6xl font-bold mb-6">Technology Solutions<br/>Built Right</h1>
                <p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">We build innovative software solutions that help businesses grow and succeed in the digital age.</p>
                <a href="#contact" class="inline-block bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition">Get Started</a>
            </section>

            <!-- Services -->
            <section id="services" class="bg-gray-50 py-20">
                <div class="max-w-6xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">What We Do</h2>
                    <div class="grid md:grid-cols-3 gap-8">
                        <div class="bg-white p-8 rounded-lg">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Software Development</h3>
                            <p class="text-gray-600">Custom applications tailored to your business needs.</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Web Solutions</h3>
                            <p class="text-gray-600">Modern, responsive websites that deliver results.</p>
                        </div>
                        <div class="bg-white p-8 rounded-lg">
                            <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                                <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 15a4 4 0 004 4h9a5 5 0 10-.1-9.999 5.002 5.002 0 10-9.78 2.096A4.001 4.001 0 003 15z"></path>
                                </svg>
                            </div>
                            <h3 class="text-xl font-semibold mb-3">Cloud Services</h3>
                            <p class="text-gray-600">Scalable infrastructure and deployment solutions.</p>
                        </div>
                    </div>
                </div>
            </section>

            <!-- About -->
            <section id="about" class="py-20">
                <div class="max-w-4xl mx-auto px-4 text-center">
                    <h2 class="text-3xl font-bold mb-6">About Yarmy</h2>
                    <p class="text-lg text-gray-600 leading-relaxed">We're a technology company focused on delivering high-quality software solutions. Our team brings together expertise in development, design, and strategy to help businesses leverage technology effectively.</p>
                </div>
            </section>

            <!-- Contact -->
            <section id="contact" class="bg-gray-50 py-20">
                <div class="max-w-2xl mx-auto px-4">
                    <h2 class="text-3xl font-bold text-center mb-12">Get In Touch</h2>
                    <form class="space-y-6">
                        <div>
                            <input type="text" placeholder="Name" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600" required>
                        </div>
                        <div>
                            <input type="email" placeholder="Email" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600" required>
                        </div>
                        <div>
                            <textarea placeholder="Message" rows="5" class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:outline-none focus:border-blue-600" required></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 text-white px-8 py-3 rounded-lg hover:bg-blue-700 transition">Send Message</button>
                    </form>
                </div>
            </section>
        </main>

        <footer class="border-t border-gray-200 py-8">
            <div class="max-w-6xl mx-auto px-4 text-center text-gray-600">
                <p>&copy; 2024 Yarmy Technologies. All rights reserved.</p>
            </div>
        </footer>

    </div>
</template>
