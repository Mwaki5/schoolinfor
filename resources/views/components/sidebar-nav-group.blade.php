@props(['title' => 'Navigation', 'icon' => null, 'group' => null])

<div class="space-y-1">
    <button
        type="button"
        @click="activeGroup = (activeGroup === '{{ $group }}') ? null : '{{ $group }}'"
        :class="sidebarOpen ? 'justify-between' : 'justify-center'"
        class="flex w-full items-center rounded-xl px-3 py-2.5 text-left text-sm font-medium text-slate-200 transition duration-200 hover:bg-white/5 hover:text-white focus:outline-none focus:ring-2 focus:ring-cyan-400/50"
    >
        <span class="flex items-center gap-3" :class="sidebarOpen ? 'gap-3' : 'gap-0'">
            @if ($icon)
                <span data-lucide="{{ $icon }}" class="h-4 w-4 shrink-0 text-cyan-300"></span>
            @endif
            <span x-show="sidebarOpen">{{ $title }}</span>
        </span>

        <span x-show="sidebarOpen && activeGroup === '{{ $group }}'" data-lucide="chevron-down" class="h-4 w-4 text-slate-400 transition-transform duration-300 ease-out"></span>
        <span x-show="sidebarOpen && activeGroup !== '{{ $group }}'" data-lucide="chevron-left" class="h-4 w-4 text-slate-400 transition-transform duration-300 ease-out"></span>
    </button>

    <div
        x-show="sidebarOpen && activeGroup === '{{ $group }}'"
        x-transition:enter="transition-all duration-300 ease-out"
        x-transition:enter-start="opacity-0 max-h-0"
        x-transition:enter-end="opacity-100 max-h-40"
        x-transition:leave="transition-all duration-200 ease-in"
        x-transition:leave-start="opacity-100 max-h-40"
        x-transition:leave-end="opacity-0 max-h-0"
        class="overflow-hidden"
    >
        <div class="mt-1 space-y-1 border-l border-slate-600/80 pl-4">
            {{ $slot }}
        </div>
    </div>
</div>