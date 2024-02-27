@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-blue-400 focus:ring-blue-500 rounded-md shadow-sm']) !!}>
