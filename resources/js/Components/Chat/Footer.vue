<template>
    <!-- Page Footer -->
    <footer
        id="page-footer"
        class="fixed bottom-0 end-0 start-0 items-center border-t border-slate-200/75 bg-white lg:start-80"
    >
        <form
            class="container mx-auto flex h-20 items-center gap-2 px-4 lg:px-8 xl:max-w-7xl"
            onsubmit="return false;"
        >
            <input
                type="text"
                class="-mx-5 block w-full rounded-lg border-0 px-5 py-4 leading-6 focus:border-indigo-500 focus:ring focus:ring-indigo-500/75"
                placeholder="Type a new message and hit enter.."
            />
        </form>
    </footer>
    <!-- END Page Footer -->
</template>

<script setup lang="ts"></script>
