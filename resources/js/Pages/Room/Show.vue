<template>
    <Head title="Messages" />

    <div>
        <!-- Page Container -->
        <div
            id="page-container"
            class="relative mx-auto h-screen min-w-[320px] bg-white lg:ms-80"
        >
            <Nav />
            <Header />
            <Messages />
            <Footer />
        </div>
        <!-- END Page Container -->
    </div>
</template>

<script setup lang="ts">
import Footer from '@/Components/Chat/Footer.vue';
import Header from '@/Components/Chat/Header.vue';
import Messages from '@/Components/Chat/Messages.vue';
import Nav from '@/Components/Chat/Nav.vue';
import { Room } from '@/types/types';
import { Head } from '@inertiajs/vue3';
import { PropType } from 'vue';
defineProps({
    room: { type: Object as PropType<Room>, required: true },
});
</script>
