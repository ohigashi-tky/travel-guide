<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../components/PlaceholderPattern.vue';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Dashboard',
        href: '/dashboard',
    },
];

const playAudio = () => {
  const audio = new Audio('/audio/hukuoka/dazaihu/dazaihu_guide_1.wav');
  audio.play();
};
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                    <button @click="playAudio" class="absolute top-0 left-0 w-full h-full flex items-center justify-center bg-black/50 hover:bg-black/70 text-white rounded-xl">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                            <path fill-rule="evenodd" d="M4.5 5.653c0-.856.917-1.398 1.668-.986l11.54 6.348c.831.457.831 1.553 0 2.01l-11.54 6.347c-.751.412-1.668-.129-1.668-.987V5.653z" clip-rule="evenodd" />
                        </svg>
                        太宰府天満宮 再生
                    </button>
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
                <div class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border">
                    <PlaceholderPattern />
                </div>
            </div>
            <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 dark:border-sidebar-border md:min-h-min p-4">
                <img src="/img/hukuoka/dazaihu/dazaihu_img_1.jpg" alt="太宰府天満宮" class="rounded-xl mb-4 w-1/2">
                <h2 class="text-xl font-bold mb-2">太宰府天満宮</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-4">
                    太宰府天満宮は、学問の神様として知られる菅原道真公をお祀りする神社です。
                    毎年多くの受験生や観光客が訪れます。
                </p>
                <a href="#" class="text-blue-500 hover:text-blue-700">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-4 h-4 inline-block mr-1">
                        <path fill-rule="evenodd" d="M3.75 3a.75.75 0 00-.75.75v15.75a.75.75 0 00.75.75h16.5a.75.75 0 00.75-.75V3.75a.75.75 0 00-.75-.75H3.75zM5.25 4.5h13.5a.75.75 0 01.75.75v7.5a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75v-7.5a.75.75 0 01.75-.75zm0 9h4.5a.75.75 0 01.75.75v4.5a.75.75 0 01-.75.75H5.25a.75.75 0 01-.75-.75v-4.5a.75.75 0 01.75-.75zm6 0h4.5a.75.75 0 01.75.75v4.5a.75.75 0 01-.75.75h-4.5a.75.75 0 01-.75-.75v-4.5a.75.75 0 01.75-.75z" clip-rule="evenodd" />
                    </svg>
                    地図を見る
                </a>
            </div>
        </div>
    </AppLayout>
</template>
