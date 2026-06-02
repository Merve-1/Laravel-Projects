@php
    $current = "bg-gray-900 text-white";
    $default = "text-gray-300 hover:bg-gray-700 hover:text-white";
    $path = ltrim($href, '/');
@endphp

<a href="{{ $href }}"
   class="rounded-md px-3 py-2 text-sm font-medium
   {{
        $href === '/'
            ? (request()->is('/') ? $current : $default)
            : (request()->is($path . '*') ? $current : $default)
   }}" {{ $attributes }}>
    {{ $slot }}
</a>
