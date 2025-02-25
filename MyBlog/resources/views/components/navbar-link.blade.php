@props(['href', 'active' => false])

@php
    $isActive = request()->is(trim($href, '/')) ? 'text-blue-700 dark:text-blue-500' : 'text-gray-900 hover:text-blue-700 dark:text-white dark:hover:text-blue-500';
@endphp

<li>
    <a href="{{ $href }}" class="{{ $isActive }} block py-2 px-3 rounded md:p-0">
        {{ $slot }}
    </a>
</li>
