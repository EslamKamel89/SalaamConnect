<template>
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
                v-for="user in users"
                :key="user.id"
                href="javascript:void(0)"
                class="flex items-center gap-3 border-indigo-500 bg-white px-3 py-4 shadow-sm ltr:rounded-l ltr:border-l-4 rtl:rounded-r rtl:border-r-4"
            >
                <div class="relative flex-none">
                    <img
                        :src="user.avatar"
                        alt="User Avatar"
                        class="h-11 w-11 rounded-full border-2 border-white/50"
                    />
                    <span
                        class="absolute bottom-0 end-0 h-3 w-3 rounded-full border-2 border-white bg-emerald-500 shadow-sm"
                    ></span>
                </div>
                <div class="grow">
                    <p class="mb-0.5 line-clamp-1 text-sm font-bold">
                        {{ user.name }}
                    </p>
                    <p class="line-clamp-1 text-xs font-medium text-slate-500">
                        {{ user.email }}
                    </p>
                </div>
                <div class="flex-none self-start">
                    <p class="text-xs font-medium text-slate-400">Now</p>
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
                    <p class="line-clamp-1 text-xs font-medium text-slate-500">
                        @john.doe
                    </p>
                </div>
            </a>
        </div>
        <!-- END Sub Navigation -->
    </nav>
    <!-- Page Sidebar -->
</template>

<script setup lang="ts">
import { useUsersStore } from '@/Store/useUsersStore';
import { storeToRefs } from 'pinia';

const usersStore = useUsersStore();
const { users } = storeToRefs(usersStore);
</script>
