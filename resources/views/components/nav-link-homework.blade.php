@props(['active' => false, 'type' => 'a'])
<!-- vanilla php -->
<?php if ($type === 'a') : ?>
    <a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page': 'false' }}"
        {{ $attributes }}
    >{{ $slot }}</a>
<?php else : ?>
    <button class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page': 'false' }}"
        {{ $attributes }}
    >{{ $slot }}</button>
<?php endif ?>


<!-- blade style -->
@if ($type === 'a')
    <a class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page': 'false' }}"
        {{ $attributes }}
    >{{ $slot }}</a>
@else
    <button class="{{ $active ? 'bg-gray-900 text-white': 'text-gray-300 hover:bg-white/5 hover:text-white'}} rounded-md px-3 py-2 text-sm font-medium"
        aria-current="{{ $active ? 'page': 'false' }}"
        {{ $attributes }}
    >{{ $slot }}</button>
@endif

<!-- side note: if we would have a button we would not pass a href in the layout component -->
