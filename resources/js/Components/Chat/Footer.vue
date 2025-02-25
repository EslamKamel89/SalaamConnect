<!-- eslint-disable vue/use-v-on-exact -->
<template>
    <!-- Page Footer -->
    <div>
        {{ shift }}
    </div>
    <footer
        id="page-footer"
        class="fixed bottom-0 end-0 start-0 items-center border-t border-slate-200/75 bg-white lg:start-80"
    >
        <div
            class="container mx-auto flex h-20 items-center gap-2 px-4 lg:px-8 xl:max-w-7xl"
        >
            <textarea
                type="text"
                v-model="message"
                v-on:keydown.enter.prevent="handleEnter"
                v-on:keydown.shift="shift = true"
                v-on:keyup="shift = false"
                class="-mx-5 block w-full rounded-lg border-0 px-5 py-4 leading-6 focus:border-indigo-500 focus:ring focus:ring-indigo-500/75"
                placeholder="Type a new message and hit enter.."
            ></textarea>
        </div>
    </footer>
    <!-- END Page Footer -->
</template>

<script setup lang="ts">
import { ref } from 'vue';

const message = ref('');
const shift = ref(false);
const handleEnter = () => {
    if (shift.value && message.value.length) {
        message.value += '\n';
        return;
    }
    if (message.value.length) {
        emit('valid', message.value);
        message.value = '';
    }
};
const emit = defineEmits<{
    valid: [message: string];
}>();
</script>
