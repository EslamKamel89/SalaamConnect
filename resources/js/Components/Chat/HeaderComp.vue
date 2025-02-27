<template>
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
                        >Inertia<span class="font-medium text-indigo-600"
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
</template>

<script setup lang="ts"></script>
