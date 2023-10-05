@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center hover:text-blue-900 text-md text-blue-500 '
            : 'inline-flex items-center hover:text-blue-900 text-md text-gray-500 ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
