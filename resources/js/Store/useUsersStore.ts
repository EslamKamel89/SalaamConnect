import { User } from '@/types/types';
import { defineStore } from 'pinia';
import { computed, ref } from 'vue';

export const useUsersStore = defineStore('users', () => {
    const users = ref<User[]>([]);
    const setUsers = (onlineUsers: User[]) => {
        users.value = onlineUsers;
    };
    const count = computed<number>(() => users.value.length);
    const addUser = (user: User) => {
        if (users.value.find((u) => u.id === user.id)) return;
        users.value.push(user);
    };
    const removeUser = (user: User) => {
        users.value = users.value.filter((u) => u.id !== user.id);
    };
    return {
        users,
        setUsers,
        count,
        addUser,
        removeUser,
    };
});
