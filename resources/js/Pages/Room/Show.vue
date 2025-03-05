<template>
    <Head title="Messages" />

    <div>
        <!-- Page Container -->
        <div
            id="page-container"
            class="relative mx-auto mb-10 h-screen min-w-[320px] bg-white lg:ms-80"
        >
            <NavComp />
            <Messages :slug="room.slug" />
            <Footer @valid="storeMessage" @typing="whisperTyping" />
            <HeaderComp />
        </div>
        <!-- END Page Container -->
    </div>
</template>

<script setup lang="ts">
import Footer from '@/Components/Chat/Footer.vue';
import HeaderComp from '@/Components/Chat/HeaderComp.vue';
import Messages from '@/Components/Chat/Messages.vue';
import NavComp from '@/Components/Chat/NavComp.vue';
import { echo } from '@/echo';
import { useMessageStore } from '@/Store/useMessageStore';
import { useUsersStore } from '@/Store/useUsersStore';
import { Message, Room, User } from '@/types/types';
import { pr } from '@/utils/pr';
import { Head, usePage } from '@inertiajs/vue3';
import { onMounted, onUnmounted, PropType } from 'vue';

const props = defineProps({
    room: { type: Object as PropType<Room>, required: true },
});
const messageStore = useMessageStore();
const usersStore = useUsersStore();
const storeMessage = (message: string) => {
    messageStore.saveMessage(props.room.slug, message);
};
onMounted(() => {
    messageStore.fetchMessages(props.room.slug, 1);
});
const channel = echo.join(`room.${props.room.id}`);
channel
    .listen('MessageCreated', (newMessage: Message) => {
        pr(newMessage, 'MessageCreated');
        messageStore.pushMessage(newMessage);
    })
    .here((users: User[]) => {
        pr(users, 'here');
        usersStore.setUsers(users);
    })
    .joining((user: User) => {
        pr(user, 'joining');
        usersStore.addUser(user);
    })
    .leaving((user: User) => {
        pr(user, 'leaving');
        usersStore.removeUser(user);
    })
    .listenForWhisper(
        'typing',
        (data: { isTyping: boolean; userId: number }) => {
            pr(data, 'typing event recieved');
            usersStore.setTyping(data.userId, data.isTyping);
        },
    );
const page = usePage();
const whisperTyping = (isTyping: boolean) => {
    channel.whisper('typing', { isTyping, userId: page.props.auth.user.id });
};

onUnmounted(() => {
    echo.leave(channel.name);
});
</script>
