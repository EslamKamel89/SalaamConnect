<template>
    <Head title="Messages" />

    <div>
        <!-- Page Container -->
        <div
            id="page-container"
            class="relative mx-auto mb-10 h-screen min-w-[320px] bg-white lg:ms-80"
        >
            <Nav />
            <Header />
            <Messages />
            <Footer @valid="(message) => pr(message)" />
        </div>
        <!-- END Page Container -->
    </div>
</template>

<script setup lang="ts">
import Footer from '@/Components/Chat/Footer.vue';
import Header from '@/Components/Chat/Header.vue';
import Messages from '@/Components/Chat/Messages.vue';
import Nav from '@/Components/Chat/Nav.vue';
import { useMessageStore } from '@/Store/useMessageStore';
import { Room } from '@/types/types';
import { pr } from '@/utils/pr';
import { Head } from '@inertiajs/vue3';
import { storeToRefs } from 'pinia';
import { PropType } from 'vue';
const props = defineProps({
    room: { type: Object as PropType<Room>, required: true },
});
const { messages, page } = storeToRefs(useMessageStore());
</script>
