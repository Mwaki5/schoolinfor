@props(['href' => '#', 'icon' => null])

<a
    href="{{ $href }}"
    :class="sidebarOpen ? 'justify-start px-3' : 'justify-center px-2'"
    class="group flex items-center rounded-lg py-2 text-sm text-slate-300 transition duration-200 hover:bg-slate-800/80 hover:text-white"
>
    @if ($icon)
        <span data-lucide="{{ $icon }}" class="h-4 w-4 shrink-0 text-slate-400 transition group-hover:text-cyan-300" :class="sidebarOpen ? 'mr-3' : 'mr-0'"></span>
    @endif

    <span x-show="sidebarOpen">{{ $slot }}</span>
</a>