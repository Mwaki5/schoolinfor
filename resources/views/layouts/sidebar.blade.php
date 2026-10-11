<aside x-data="{ sidebarOpen: true, activeGroup: 'academic-setup' }" :class="sidebarOpen ? 'w-[280px]' : 'w-20'" class="flex h-screen shrink-0 flex-col bg-[#1b263b] text-slate-200 shadow-[0_0_30px_rgba(15,23,42,0.4)] transition-all duration-300 ease-out">
    <div class="flex h-16 items-center justify-between border-b border-white/10 px-3">
        <div x-show="sidebarOpen" class="flex flex-1 items-center gap-3 overflow-hidden">
            <div class="flex h-10 w-10 items-center justify-center rounded-xl bg-cyan-500/10 text-cyan-300 ring-1 ring-white/10">
                <span data-lucide="school" class="h-5 w-5"></span>
            </div>
            <div class="min-w-0">
                <p class="text-[10px] uppercase tracking-[0.28em] text-slate-400">Academics</p>
                <p class="truncate text-sm font-semibold text-white">Admin Panel</p>
            </div>
        </div>

        <button
            type="button"
            @click="sidebarOpen = !sidebarOpen"
            class="flex h-10 w-10 shrink-0 items-center justify-center rounded-lg text-white transition hover:bg-white/5 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-400/50"
            aria-label="Toggle sidebar"
        >
            <span data-lucide="menu" class="h-5 w-5"></span>
        </button>
    </div>

    <nav class="flex-1 space-y-3 px-3 py-6">
        <x-sidebar-nav-group group="academic-setup" title="Academic setup" icon="graduation-cap">
            <x-sidebar-nav-item href="#" icon="building-2">Department</x-sidebar-nav-item>
            <x-sidebar-nav-item href="#" icon="calendar-days">Academic year</x-sidebar-nav-item>
            <x-sidebar-nav-item href="#" icon="book-open-text">Academic session</x-sidebar-nav-item>
        </x-sidebar-nav-group>

        <x-sidebar-nav-group group="student-management" title="Student management" icon="users">
            <x-sidebar-nav-item href="#" icon="user-round">Students</x-sidebar-nav-item>
            <x-sidebar-nav-item href="#" icon="clipboard-list">Attendance</x-sidebar-nav-item>
            <x-sidebar-nav-item href="#" icon="file-text">Reports</x-sidebar-nav-item>
        </x-sidebar-nav-group>
    </nav>
</aside>
