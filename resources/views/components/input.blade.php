@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border border-gray-500 focus:border-gray-400 focus:ring-0 rounded-xl']) !!}>
