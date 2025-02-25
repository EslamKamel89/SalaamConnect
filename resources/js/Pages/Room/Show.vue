<template>
    <Head title="Messages" />

    <div>
        <!-- Page Container -->
        <div
            id="page-container"
            class="relative mx-auto h-screen min-w-[320px] bg-white lg:ms-80"
        >
            <!-- Page Sidebar -->
            <nav
                id="page-sidebar"
                class="fixed bottom-0 start-0 top-0 z-50 flex h-full w-80 flex-col overflow-auto bg-slate-200 transition-transform duration-500 ease-out lg:translate-x-0 lg:shadow-none ltr:-translate-x-full ltr:lg:translate-x-0 rtl:translate-x-full rtl:lg:translate-x-0"
                aria-label="Main Sidebar Navigation"
            >
                <!-- Sidebar Header -->
                <div
                    class="flex h-20 w-full flex-none items-center justify-between pe-2 ps-8"
                >
                    <!-- Brand -->
                    <a
                        href="javascript:void(0)"
                        class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-slate-800 transition hover:opacity-75 active:opacity-100 lg:justify-center"
                    >
                        <svg
                            class="hi-mini hi-chat-bubble-left-right inline-block h-5 w-5 text-indigo-500 transition ease-out group-hover:-rotate-6"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            aria-hidden="true"
                        >
                            <path
                                d="M3.505 2.365A41.369 41.369 0 019 2c1.863 0 3.697.124 5.495.365 1.247.167 2.18 1.108 2.435 2.268a4.45 4.45 0 00-.577-.069 43.141 43.141 0 00-4.706 0C9.229 4.696 7.5 6.727 7.5 8.998v2.24c0 1.413.67 2.735 1.76 3.562l-2.98 2.98A.75.75 0 015 17.25v-3.443c-.501-.048-1-.106-1.495-.172C2.033 13.438 1 12.162 1 10.72V5.28c0-1.441 1.033-2.717 2.505-2.914z"
                            />
                            <path
                                d="M14 6c-.762 0-1.52.02-2.271.062C10.157 6.148 9 7.472 9 8.998v2.24c0 1.519 1.147 2.839 2.71 2.935.214.013.428.024.642.034.2.009.385.09.518.224l2.35 2.35a.75.75 0 001.28-.531v-2.07c1.453-.195 2.5-1.463 2.5-2.915V8.998c0-1.526-1.157-2.85-2.729-2.936A41.645 41.645 0 0014 6z"
                            />
                        </svg>
                        <span
                            >Inertia<span class="font-medium text-indigo-600"
                                >Chat</span
                            ></span
                        >
                    </a>
                    <!-- END Brand -->

                    <!-- Close Sidebar on Mobile -->
                    <div class="lg:hidden">
                        <button
                            type="button"
                            class="flex h-10 w-10 items-center justify-center text-slate-400 hover:text-slate-600 active:text-slate-400"
                        >
                            <svg
                                class="hi-solid hi-x -mx-1 inline-block h-5 w-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                    </div>
                    <!-- END Close Sidebar on Mobile -->
                </div>
                <!-- END Sidebar Header -->

                <!-- Main Navigation -->
                <div class="grow space-y-2 ps-4 pt-2">
                    <a
                        href="javascript:void(0)"
                        class="flex items-center gap-3 border-indigo-500 bg-white px-3 py-4 shadow-sm ltr:rounded-l ltr:border-l-4 rtl:rounded-r rtl:border-r-4"
                    >
                        <div class="relative flex-none">
                            <img
                                src="https://images.unsplash.com/photo-1567186937675-a5131c8a89ea?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MXwxfDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                                alt="User Avatar"
                                class="h-11 w-11 rounded-full border-2 border-white/50"
                            />
                            <span
                                class="absolute bottom-0 end-0 h-3 w-3 rounded-full border-2 border-white bg-emerald-500 shadow-sm"
                            ></span>
                        </div>
                        <div class="grow">
                            <p class="mb-0.5 line-clamp-1 text-sm font-bold">
                                John Smith
                            </p>
                            <p
                                class="line-clamp-1 text-xs font-medium text-slate-500"
                            >
                                j.smith@example.com
                            </p>
                        </div>
                        <div class="flex-none self-start">
                            <p class="text-xs font-medium text-slate-400">
                                Now
                            </p>
                        </div>
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="flex items-center gap-3 border-transparent px-3 py-4 hover:border-indigo-300 hover:bg-white/50 active:border-indigo-500 active:bg-white active:shadow-sm ltr:rounded-l ltr:border-l-4 rtl:rounded-r rtl:border-r-4"
                    >
                        <div class="relative flex-none">
                            <img
                                src="https://images.unsplash.com/photo-1507003211169-0a1dd7228f2d?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MXwxfDB8MXxhbGx8fHx8fHx8fA&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                                alt="User Avatar"
                                class="h-11 w-11 rounded-full border-2 border-white/50"
                            />
                            <span
                                class="absolute bottom-0 end-0 h-3 w-3 rounded-full border-2 border-white bg-amber-500 shadow-sm"
                            ></span>
                        </div>
                        <div class="grow">
                            <p class="mb-0.5 line-clamp-1 text-sm font-bold">
                                Gus Taylor
                            </p>
                            <p
                                class="line-clamp-1 text-xs font-medium text-slate-500"
                            >
                                g.taylor@example.com
                            </p>
                        </div>
                        <div class="flex-none self-start">
                            <p class="text-xs font-medium text-slate-400">
                                16:25
                            </p>
                        </div>
                    </a>
                    <a
                        href="javascript:void(0)"
                        class="flex items-center gap-3 border-transparent px-3 py-4 hover:border-indigo-300 hover:bg-white/50 active:border-indigo-500 active:bg-white active:shadow-sm ltr:rounded-l ltr:border-l-4 rtl:rounded-r rtl:border-r-4"
                    >
                        <div class="relative flex-none">
                            <img
                                src="https://images.unsplash.com/photo-1514846326710-096e4a8035e0?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2MjYzODYzMg&ixlib=rb-1.2.1&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                                alt="User Avatar"
                                class="h-11 w-11 rounded-full border-2 border-white/50"
                            />
                            <span
                                class="absolute bottom-0 end-0 h-3 w-3 rounded-full border-2 border-white bg-rose-500 shadow-sm"
                            ></span>
                        </div>
                        <div class="grow">
                            <p class="mb-0.5 line-clamp-1 text-sm font-bold">
                                Sue Keller
                            </p>
                            <p
                                class="line-clamp-1 text-xs font-medium text-slate-500"
                            >
                                s.keller@example.com
                            </p>
                        </div>
                        <div class="flex-none self-start">
                            <p class="text-xs font-medium text-slate-400">
                                March 15
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Main Navigation -->

                <!-- Sub Navigation -->
                <div class="flex-none space-y-2 px-4 pb-2">
                    <a
                        href="javascript:void(0)"
                        class="flex items-center gap-3 rounded border-l-4 border-transparent px-3 py-4 hover:border-indigo-300 hover:bg-white/50 active:border-indigo-500 active:bg-white active:shadow-sm"
                    >
                        <div class="relative flex-none">
                            <img
                                src="https://images.unsplash.com/photo-1528892952291-009c663ce843?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=160&ixid=MnwxfDB8MXxyYW5kb218MHx8fHx8fHx8MTY2ODc1OTQ0OQ&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=160"
                                alt="User Avatar"
                                class="h-11 w-11 rounded-full border-2 border-white/50"
                            />
                        </div>
                        <div class="grow">
                            <p class="mb-0.5 line-clamp-1 text-sm font-bold">
                                My Account
                            </p>
                            <p
                                class="line-clamp-1 text-xs font-medium text-slate-500"
                            >
                                @john.doe
                            </p>
                        </div>
                    </a>
                </div>
                <!-- END Sub Navigation -->
            </nav>
            <!-- Page Sidebar -->

            <!-- Page Header -->
            <header
                id="page-header"
                class="fixed end-0 start-0 top-0 z-30 flex h-20 flex-none items-center border-b border-slate-200/75 bg-white/80 backdrop-blur-sm lg:start-80 lg:hidden"
            >
                <div
                    class="container mx-auto flex justify-between px-4 lg:px-8 xl:max-w-7xl"
                >
                    <!-- Left Section -->
                    <div class="flex items-center gap-2">
                        <!-- Toggle Sidebar on Mobile -->
                        <button
                            type="button"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-300 bg-white px-2.5 py-2 font-semibold leading-6 text-slate-800 shadow-sm hover:border-slate-300 hover:bg-slate-100 hover:text-slate-800 hover:shadow focus:outline-none focus:ring focus:ring-slate-500/25 active:border-white active:bg-white active:shadow-none"
                        >
                            <svg
                                class="hi-solid hi-menu-alt-1 inline-block h-5 w-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </button>
                        <!-- END Toggle Sidebar on Mobile -->
                    </div>
                    <!-- END Left Section -->

                    <!-- Middle Section -->
                    <div class="flex items-center gap-2">
                        <!-- Brand -->
                        <a
                            href="javascript:void(0)"
                            class="group inline-flex items-center gap-2 text-lg font-bold tracking-wide text-slate-800 transition hover:opacity-75 active:opacity-100"
                        >
                            <svg
                                class="hi-mini hi-chat-bubble-left-right inline-block h-5 w-5 text-indigo-500 transition ease-out group-hover:-rotate-6"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                                aria-hidden="true"
                            >
                                <path
                                    d="M3.505 2.365A41.369 41.369 0 019 2c1.863 0 3.697.124 5.495.365 1.247.167 2.18 1.108 2.435 2.268a4.45 4.45 0 00-.577-.069 43.141 43.141 0 00-4.706 0C9.229 4.696 7.5 6.727 7.5 8.998v2.24c0 1.413.67 2.735 1.76 3.562l-2.98 2.98A.75.75 0 015 17.25v-3.443c-.501-.048-1-.106-1.495-.172C2.033 13.438 1 12.162 1 10.72V5.28c0-1.441 1.033-2.717 2.505-2.914z"
                                />
                                <path
                                    d="M14 6c-.762 0-1.52.02-2.271.062C10.157 6.148 9 7.472 9 8.998v2.24c0 1.519 1.147 2.839 2.71 2.935.214.013.428.024.642.034.2.009.385.09.518.224l2.35 2.35a.75.75 0 001.28-.531v-2.07c1.453-.195 2.5-1.463 2.5-2.915V8.998c0-1.526-1.157-2.85-2.729-2.936A41.645 41.645 0 0014 6z"
                                />
                            </svg>
                            <span
                                >Inertia<span
                                    class="font-medium text-indigo-600"
                                    >Chat</span
                                ></span
                            >
                        </a>
                        <!-- END Brand -->
                    </div>
                    <!-- END Middle Section -->

                    <!-- Right Section -->
                    <div class="flex items-center gap-2">
                        <!-- Settings -->
                        <a
                            href="javascript:void(0)"
                            class="inline-flex items-center justify-center gap-2 rounded-lg border border-slate-300 bg-white px-2.5 py-2 font-semibold leading-6 text-slate-800 shadow-sm hover:border-slate-300 hover:bg-slate-100 hover:text-slate-800 hover:shadow focus:outline-none focus:ring focus:ring-slate-500/25 active:border-white active:bg-white active:shadow-none"
                        >
                            <svg
                                class="hi-solid hi-user-circle inline-block h-5 w-5"
                                fill="currentColor"
                                viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg"
                            >
                                <path
                                    fill-rule="evenodd"
                                    d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-6-3a2 2 0 11-4 0 2 2 0 014 0zm-2 4a5 5 0 00-4.546 2.916A5.986 5.986 0 0010 16a5.986 5.986 0 004.546-2.084A5 5 0 0010 11z"
                                    clip-rule="evenodd"
                                />
                            </svg>
                        </a>
                        <!-- END Toggle Sidebar on Mobile -->
                    </div>
                    <!-- END Right Section -->
                </div>
            </header>
            <!-- END Page Header -->

            <!-- Page Content -->
            <main id="page-content" class="absolute inset-0">
                <div
                    class="container mx-auto flex h-full flex-col space-y-6 overflow-y-auto px-4 py-24 lg:p-8 lg:pb-28 xl:max-w-7xl"
                >
                    <!-- Messages Received -->
                    <div
                        class="flex w-5/6 flex-col items-start gap-2 lg:w-2/3 xl:w-1/3"
                    >
                        <p class="text-sm font-medium text-slate-500">
                            Sender's Name
                        </p>
                        <div
                            class="rounded-2xl rounded-br-none bg-gray-100 px-5 py-3"
                        >
                            <p class="font-semibold text-slate-600">
                                Message Content
                            </p>
                        </div>
                        <p class="text-xs font-medium text-slate-500">
                            16:25 am
                        </p>
                    </div>
                    <!-- END  Messages Received -->

                    <!-- Messages Sent -->
                    <div
                        class="ms-auto flex w-5/6 flex-col items-end gap-2 lg:w-2/3 xl:w-1/3"
                    >
                        <div
                            class="rounded-2xl rounded-tl-none bg-indigo-600 px-5 py-3"
                        >
                            <p class="font-semibold text-white">
                                Message Content
                            </p>
                        </div>
                        <p
                            class="text-right text-xs font-medium text-slate-500"
                        >
                            16:25 am
                        </p>
                    </div>
                    <!-- END Messages Sent -->
                </div>
            </main>
            <!-- END Page Content -->

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
        </div>
        <!-- END Page Container -->
    </div>
</template>

<script setup lang="ts">
import { Room } from '@/types/types';
import { Head } from '@inertiajs/vue3';
import { PropType } from 'vue';
defineProps({
    room: { type: Object as PropType<Room>, required: true },
});
</script>
