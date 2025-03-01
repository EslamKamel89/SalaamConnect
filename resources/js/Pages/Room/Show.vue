<template>
    <Head title="Messages" />

    <div>
        <!-- Page Container -->
        <div
            id="page-container"
            class="relative mx-auto mb-10 h-screen min-w-[320px] bg-white lg:ms-80"
        >
            <!-- <NavComp /> -->
            <HeaderComp />
            <Messages :slug="room.slug" />
            <Footer @valid="(message) => pr(message)" />
        </div>
        <!-- END Page Container -->
    </div>
</template>

<script setup lang="ts">
import Footer from '@/Components/Chat/Footer.vue';
import HeaderComp from '@/Components/Chat/HeaderComp.vue';
import Messages from '@/Components/Chat/Messages.vue';
import { useMessageStore } from '@/Store/useMessageStore';
import { Room } from '@/types/types';
import { pr } from '@/utils/pr';
import { Head } from '@inertiajs/vue3';
import { onMounted, PropType } from 'vue';
const props = defineProps({
    room: { type: Object as PropType<Room>, required: true },
});
const messageStore = useMessageStore();
onMounted(() => {
    messageStore.fetchMessages(props.room.slug, 1);
});
</script>
