@props(['name', 'class' => 'w-6 h-6'])

@if (view()->exists("components.icons.$name"))
    @include("components.icons.$name", ['class' => $class])
@else
    <span class="{{ $class }} inline-block bg-gray-300 rounded"></span>
@endif