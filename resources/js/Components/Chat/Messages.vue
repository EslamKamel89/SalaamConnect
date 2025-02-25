<template>
    <!-- Page Content -->
    <main id="page-content" class="absolute inset-0">
        <div
            class="container mx-auto flex h-full flex-col space-y-6 overflow-y-auto px-4 py-24 lg:p-8 lg:pb-28 xl:max-w-7xl"
        >
            <!-- Messages Received -->
            <div
                class="flex w-5/6 flex-col items-start gap-2 lg:w-2/3 xl:w-1/3"
            >
                <p class="text-sm font-medium text-slate-500">Sender's Name</p>
                <div class="rounded-2xl rounded-br-none bg-gray-100 px-5 py-3">
                    <p class="font-semibold text-slate-600">Message Content</p>
                </div>
                <p class="text-xs font-medium text-slate-500">16:25 am</p>
            </div>
            <!-- END  Messages Received -->

            <!-- Messages Sent -->
            <div
                class="ms-auto flex w-5/6 flex-col items-end gap-2 lg:w-2/3 xl:w-1/3"
            >
                <div
                    class="rounded-2xl rounded-tl-none bg-indigo-600 px-5 py-3"
                >
                    <p class="font-semibold text-white">Message Content</p>
                </div>
                <p class="text-right text-xs font-medium text-slate-500">
                    16:25 am
                </p>
            </div>
            <!-- END Messages Sent -->
        </div>
    </main>
    <!-- END Page Content -->
</template>

<script setup lang="ts"></script>

<style scoped></style>
