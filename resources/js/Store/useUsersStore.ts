import { User } from '@/types/types';
import { defineStore } from 'pinia';
import { computed, ref } from 'vue';

export const useUsersStore = defineStore('users', () => {
    const users = ref<User[]>([]);
    const setUsers = (onlineUsers: User[]) => {
        users.value = onlineUsers;
    };
    const count = computed<number>(() => users.value.length);
    return {
        users,
        setUsers,
        count,
    };
});
