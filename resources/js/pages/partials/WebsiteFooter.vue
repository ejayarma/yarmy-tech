<script setup lang="ts">
import { Mail, MessageCircleMoreIcon, Phone } from 'lucide-vue-next';

</script>

<template>
    <footer class="border-t border-gray-200">
        <div class="relative  bg-primary text-slate-50  -mt-5 shadow-3xl shadow-inner  ">
            <div
                class="absolute inset-0 h-full w-full bg-transparent bg-[radial-gradient(#2563eb_1px,transparent_1px)] [background-size:16px_16px] [mask-image:radial-gradient(ellipse_50%_50%_at_50%_50%,#000_60%,transparent_100%)]">
            </div>

            <div
                class="container-primary relative grid items-center grid-cols-1 gap-10 p-6 px-4 py-10 mx-auto sm:gap-0 sm:grid-cols-2 lg:grid-cols-4">
                <div class="flex gap-4">
                    <svg class="size-10 md:size-16 fill-secondary" id="a" data-name="Layer 1"
                        xmlns="http://www.w3.org/2000/svg" viewBox="0 0 498.573 463.864">
                        <path
                            d="M241.489,294.033l.249,76.631c.039,11.868,11.136,19.873,22.335,18.101,9.922-1.57,16.466-10.233,16.474-21.213l.052-80.364c.003-5.236,2.719-14.106,7.718-16.993l161.529-93.292c46.438-26.82,62.507-84.726,35.851-130.286C459.499,1.839,401.319-13.745,355.755,13.413l-81.488,47.266c12.581,9.057,25.329,15.215,38.409,22.655l61.363-35.716c27.565-16.044,61.964-8.656,77.907,18.346,15.948,27.012,6.33,61.142-21.418,77.164l-159.479,92.08c-20.79,12.003-29.638,34.967-29.561,58.826ZM341.239,152.817l73.468-42.167c9.638-5.531,11.43-18.297,6.222-26.518-5.277-8.329-15.925-12.459-25.39-7.044l-70.874,40.548c-6.43,3.679-15.568,5.369-22.606,1.292L144.807,27.85C98.134.818,39.905,14.149,12.985,59.875-14.001,105.715,2.478,164.001,49.423,190.849l80.759,46.187.703-44.063-64.19-37.226c-27.09-15.71-35.499-49.792-20.326-75.731,15.352-26.246,48.679-35.631,75.651-20.044l156.297,90.325c19.407,11.215,42.522,14.229,62.922,2.52ZM317.011,294.938c.723,3.836-.683,5.979-.682,8.691l.035,65.282c.017,30.792-23.799,55.079-53.738,55.94-29.043.835-56.406-21.396-56.509-52.618l-.619-188.454c-.074-22.685-13.057-41.736-32.017-52.631l-70.85-40.714c-9.394-5.398-21.386-.267-25.893,8.782-3.977,7.984-2.127,19.503,6.944,24.794l72.362,42.206c5.375,3.135,10.375,9.393,10.389,16.063l.388,188.196c.109,52.579,43.169,93.289,94.158,93.39,50.879.101,94.257-41.076,94.191-93.235l-.122-97.18-38.037,21.488Z" />
                    </svg>
                    <div class="inline-flex flex-col leading-tight gap-2">
                        <b>Yarmy Technologies</b>
                        <span class="text-slate-300">Innovation that empowers</span>
                    </div>
                </div>
                <div class="tracking-wider">

                    <h4 class="font-semibold">Address</h4>
                    <ul class="mt-2">
                        <li>
                            GZ-149-6441
                        </li>
                        <li>
                            Planners Avenue
                        </li>
                        <li>
                            Spintex
                        </li>
                    </ul>
                </div>

                <div class="tracking-wider">

                    <h4 class="font-semibold">Navigation</h4>
                    <ul class="mt-2">
                        <li>
                            <a href="/about-us" class="block py-1">About us</a>
                        </li>
                        <li>
                            <a href="/service" class="block py-1">Our Services</a>
                        </li>
                        <li>
                            <a href="/privacy-policy" class="block py-1">Privacy Policy</a>
                        </li>
                        <li>
                            <a href="/terms" class="block py-1">Terms &amp; Conditions</a>
                        </li>
                    </ul>
                </div>
                <div class="tracking-wider">

                    <h4 class="font-semibold">Contact US</h4>

                    <div class="flex gap-4 mt-2 align-baseline">
                        <Mail class="stroke-1 fill-white stroke-gray-300" :size="24" />

                        <a href="mailto:hello@yarmy.tech">hello@yarmy.tech</a>
                    </div>

                    <div class="flex gap-4 mt-2 align-baseline">

                        <Phone class="stroke-1 fill-white stroke-gray-300" :size="24" />
                        <a href="tel:+233241739556">+233 (0) 241 739 556</a>
                    </div>

                    <div class="flex gap-4 mt-2 align-baseline">
                        <MessageCircleMoreIcon class="stroke-1 fill-white stroke-gray-300" :size="24" />
                        <a href="/contact">Send a message</a>

                        <!-- <a href="mailto:hello@yarmy.tech">hello@yarmy.tech</a> -->
                    </div>
                </div>



            </div>

            <p class="relative py-1 text-sm  text-center text-gray-700 bg-white ">
                &copy; {{ new Date().getFullYear() }} <span class="text-xs">●</span> Yarmy Technologies. ❤️ All rights
                reserved
            </p>
        </div>
    </footer>
</template>
