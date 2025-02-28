import { Message, Pagination } from '@/types/types';
import { baseUrl } from '@/utils/constants';
import axios from 'axios';
import { defineStore } from 'pinia';
import { ref } from 'vue';

export const useMessageStore = defineStore('messages', () => {
    const currentPage = ref(1);
    const messagesWithMeta = ref<Pagination<Message> | null>(null);
    const messages = ref<Message[]>([]);
    const loading = ref<boolean>(false);
    const error = ref<string | null>(null);
    const fetchMessages = async (roomSlug: string, page: number = 1) => {
        loading.value = true;
        const response = await axios.get(
            `${baseUrl}/rooms/${roomSlug}/messages?page=${page}`,
        );
        messagesWithMeta.value = response.data;
        messages.value = [
            ...messages.value,
            ...(messagesWithMeta.value?.data ?? []),
        ];
        currentPage.value = messagesWithMeta.value?.meta.current_page ?? 1;
        loading.value = false;
    };

    return {
        currentPage,
        messages,
        fetchMessages,
        messagesWithMeta,
        loading,
        error,
    };
});
