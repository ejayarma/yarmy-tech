<script setup lang="ts">
import { ref, computed } from 'vue'
import { InertiaLinkProps, Link, usePage } from '@inertiajs/vue3'
import { toUrl, urlIsActive } from '@/lib/utils';

const isOpen = ref(false)

const page = usePage();
const auth = computed(() => page.props.auth);

const isCurrentRoute = computed(
    () => (url: NonNullable<InertiaLinkProps['href']>) =>
        urlIsActive(url, page.url),
);

const activeItemStyles = computed(
    () => (url: NonNullable<InertiaLinkProps['href']>) =>
        isCurrentRoute.value(toUrl(url))
            ? 'text-primary font-medium dark:bg-neutral-800 dark:text-neutral-100'
            : '',
);

</script>

<template>
    <header class="sticky top-0 z-50 bg-white shadow lg:px-10 text-center">
        <div class="container-primary">
            <div class="flex items-center justify-between py-2 relative">
                <!-- Logo -->
                <Link :class="['rounded-xl px-4 py-2 inline-flex items-center justify-between', activeItemStyles('/')]" href="/">
                    <svg class="size-10 md:size-16 fill-primary" id="a" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 498.573 463.864">
                        <path d="M241.489,294.033l.249,76.631c.039,11.868,11.136,19.873,22.335,18.101,9.922-1.57,16.466-10.233,16.474-21.213l.052-80.364c.003-5.236,2.719-14.106,7.718-16.993l161.529-93.292c46.438-26.82,62.507-84.726,35.851-130.286C459.499,1.839,401.319-13.745,355.755,13.413l-81.488,47.266c12.581,9.057,25.329,15.215,38.409,22.655l61.363-35.716c27.565-16.044,61.964-8.656,77.907,18.346,15.948,27.012,6.33,61.142-21.418,77.164l-159.479,92.08c-20.79,12.003-29.638,34.967-29.561,58.826ZM341.239,152.817l73.468-42.167c9.638-5.531,11.43-18.297,6.222-26.518-5.277-8.329-15.925-12.459-25.39-7.044l-70.874,40.548c-6.43,3.679-15.568,5.369-22.606,1.292L144.807,27.85C98.134.818,39.905,14.149,12.985,59.875-14.001,105.715,2.478,164.001,49.423,190.849l80.759,46.187.703-44.063-64.19-37.226c-27.09-15.71-35.499-49.792-20.326-75.731,15.352-26.246,48.679-35.631,75.651-20.044l156.297,90.325c19.407,11.215,42.522,14.229,62.922,2.52ZM317.011,294.938c.723,3.836-.683,5.979-.682,8.691l.035,65.282c.017,30.792-23.799,55.079-53.738,55.94-29.043.835-56.406-21.396-56.509-52.618l-.619-188.454c-.074-22.685-13.057-41.736-32.017-52.631l-70.85-40.714c-9.394-5.398-21.386-.267-25.893,8.782-3.977,7.984-2.127,19.503,6.944,24.794l72.362,42.206c5.375,3.135,10.375,9.393,10.389,16.063l.388,188.196c.109,52.579,43.169,93.289,94.158,93.39,50.879.101,94.257-41.076,94.191-93.235l-.122-97.18-38.037,21.488Z"/>
                    </svg>
                    <span class="font-medium ml-2.5 text-xs sm:text-xl lg:text-2xl tracking-wider text-primary">Yarmy Technologies</span>
                </Link>

                <!-- Desktop Nav -->
                <nav aria-label="Navigation" class="hidden lg:flex items-center gap-6">
                    <ul class="flex gap-4">
                        <li>
                            <Link :class="['link-large', activeItemStyles('/')]" href="/">Home</Link>
                        </li>
                        <li>
                            <Link class="link-large" href="/about-us">About<span
                                    class="hidden xl:inline"> Us</span></Link>
                        </li>
                        <li>
                            <Link class="link-large" href="/services">Services</Link>
                        </li>

                        <li>
                            <Link class="link-large" href="/contact">Contact</Link>
                        </li>
                    </ul>
                    <Link class="button-primary ml-4 animate- animate-bounce" href="/contact">Start a project</Link>
                </nav>

                <!-- Mobile Hamburger -->
                <button class="lg:hidden p-2 pr-0 rounded-lg hover:bg-gray-100 focus:outline-none"
                    @click="isOpen = !isOpen">
                    <svg v-if="!isOpen" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg v-else xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>

            <!-- Mobile Nav -->
            <transition name="fade">
                <nav aria-label="Mobile navigation" v-if="isOpen"
                    class="lg:hidden bg-white border-t shadow-inner min-h-svh xl:min-h-max">
                    <ul class="flex flex-col px-4 py-10 space-y-2">
                        <li>
                            <Link
                                class="block rounded-lg px-4 py-3 hover:bg-primary/30 active:border-2 active:border-primary/30"
                                href="/">Home</Link>
                        </li>
                        <li>
                            <Link
                                class="block rounded-lg px-4 py-3 hover:bg-primary/30 active:border-2 active:border-primary/30"
                                href="/about-us">About Us</Link>
                        </li>
                        <li>
                            <Link
                                class="block rounded-lg px-4 py-3 hover:bg-primary/30 active:border-2 active:border-primary/30"
                                href="/services">Services</Link>
                        </li>
                        <li>
                            <Link
                                class="block rounded-lg px-4 py-3 hover:bg-primary/30 active:border-2 active:border-primary/30"
                                href="/contact">Contact</Link>
                        </li>
                        <li class="w-full">
                            <Link class="button-primary block w-full text-center animate-pulse" href="/contact">
                                Start a project
                            </Link>
                        </li>
                    </ul>
                </nav>
            </transition>
        </div>
    </header>
</template>

<style scoped>
.fade-enter-active,
.fade-leave-active {
    transition: opacity 0.2s ease;
}

.fade-enter-from,
.fade-leave-to {
    opacity: 0;
}
</style>
