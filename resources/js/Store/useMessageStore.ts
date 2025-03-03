import { Pagination } from '@/types/types';
import { pr } from '@/utils/pr';
import axios from 'axios';
import { defineStore } from 'pinia';
import { ref } from 'vue';
import { Message } from './../types/types.d';

export const useMessageStore = defineStore('messages', () => {
    const currentPage = ref(1);
    const messagesWithMeta = ref<Pagination<Message> | null>(null);
    const messages = ref<Message[]>([]);
    const loading = ref<boolean>(false);
    const error = ref<string | null>(null);
    const isInitiaMessageslLoaded = ref<boolean>(false);
    const fetchMessages = async (roomSlug: string, page: number = 1) => {
        loading.value = true;
        // const response = await axios.get(
        //     `${baseUrl}/rooms/${roomSlug}/messages?page=${page}`,
        // );
        const response = await axios.get(
            route('rooms.messages.index', { room: roomSlug }),
            { params: { page } },
        );
        messagesWithMeta.value = response.data;
        messages.value = [
            ...messages.value,
            ...(messagesWithMeta.value?.data ?? []),
        ];
        currentPage.value = messagesWithMeta.value?.meta.current_page ?? 1;
        loading.value = false;
        isInitiaMessageslLoaded.value = true;
    };
    const fetchPreviousMessages = async (slug: string) => {
        await fetchMessages(slug, currentPage.value + 1);
    };
    const saveMessage = async (slug: string, message: string) => {
        pr('save messages is called');
        const response = await axios.post(
            route('rooms.messages.store', { room: slug }),
            {
                slug,
                message,
            },
        );
        pr(response.data, 'response.data');
        messages.value = [response.data, ...messages.value];
    };
    const pushMessage = (message: Message) => {
        messages.value.pop();
        messages.value = [message, ...messages.value];
    };
    return {
        currentPage,
        messages,
        fetchMessages,
        fetchPreviousMessages,
        messagesWithMeta,
        loading,
        error,
        isInitiaMessageslLoaded,
        saveMessage,
        pushMessage,
    };
});
