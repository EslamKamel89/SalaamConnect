<template>
    <!-- Page Content -->
    <!-- <main id="page-content" class="absolute inset-0"></main> -->

    <main id="page-content" class="">
        <div
            class="container mx-auto flex h-full flex-col-reverse space-y-6 space-y-reverse overflow-y-auto px-4 py-24 lg:p-8 lg:pb-28 xl:max-w-7xl"
        >
            <div class="w-full" v-for="message in messages" :key="message.id">
                <div
                    class="flex !w-full w-5/6 flex-col gap-2 lg:w-2/3 xl:w-1/3"
                    :class="{
                        'items-start': authUser.id !== message.user_id,
                        'items-end': authUser.id === message.user_id,
                    }"
                >
                    <p
                        v-if="authUser.id !== message.user_id"
                        class="text-sm font-medium text-slate-500"
                    >
                        {{ message.user.name }}
                    </p>
                    <div
                        class="rounded-2xl bg-gray-100 px-5 py-3"
                        :class="{
                            'rounded-tl-none bg-gray-100':
                                authUser.id !== message.user_id,
                            'rounded-br-none bg-indigo-600':
                                authUser.id === message.user_id,
                        }"
                    >
                        <p
                            class="font-semibold"
                            :class="{
                                'text-slate-600':
                                    authUser.id !== message.user_id,
                                'text-white': authUser.id === message.user_id,
                            }"
                        >
                            {{ message.content }}
                        </p>
                    </div>
                    <p class="text-xs font-medium text-slate-500">
                        {{ message.created_at }}
                    </p>
                </div>
            </div>
            <div
                ref="target"
                class="h-32 w-32 translate-y-20 bg-transparent"
            ></div>
        </div>
    </main>
    <!-- END Page Content -->
</template>

<script setup lang="ts">
import { useMessageStore } from '@/Store/useMessageStore';
import { usePage } from '@inertiajs/vue3';
import { useIntersectionObserver } from '@vueuse/core';
import { storeToRefs } from 'pinia';
import { onUnmounted, shallowRef, useTemplateRef, watch } from 'vue';

const props = defineProps<{
    slug: string;
}>();

const messageStore = useMessageStore();
const { messages } = storeToRefs(messageStore);

const authUser = usePage().props.auth.user;

const target = useTemplateRef<HTMLDivElement>('target');
const targetIsVisible = shallowRef<boolean | null>(null);

const { stop } = useIntersectionObserver(target, ([entry], observerElement) => {
    targetIsVisible.value = entry?.isIntersecting || false;
});
watch(targetIsVisible, (newValue, oldValue) => {
    if (oldValue !== null && newValue && messageStore.isInitiaMessageslLoaded) {
        messageStore.fetchPreviousMessages(props.slug);
    }
});
onUnmounted(() => {
    stop();
});
</script>
