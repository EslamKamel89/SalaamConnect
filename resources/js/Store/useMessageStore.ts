import { defineStore } from 'pinia';
import { ref } from 'vue';

export const useMessageStore = defineStore('messages', () => {
    const page = ref(1);
    const messages = ref<[]>([]);
    return {
        page,
        messages,
    };
});
