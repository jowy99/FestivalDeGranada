@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-festival-500 dark:focus:border-festival-600 focus:ring-festival-500 dark:focus:ring-festival-600 rounded-md shadow-sm']) !!}>
