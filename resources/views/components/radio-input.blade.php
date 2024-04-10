@props([
    'disabled' => false,
    'checked' => false,
])

<input
    {{ $disabled ? 'disabled' : '' }}
    {!! $attributes->merge(['type' => 'radio', 'class' => 'border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800']) !!}
    {{ $checked ? 'checked' : '' }}
/>
