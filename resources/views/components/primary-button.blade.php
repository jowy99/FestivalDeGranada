<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-festival-500 dark:bg-festival-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-festival-800 uppercase tracking-widest hover:bg-festival-700 dark:hover:bg-white focus:bg-festival-700 dark:focus:bg-white active:bg-festival-900 dark:active:bg-festival-300 focus:outline-none focus:ring-2 focus:ring-festival-500 focus:ring-offset-2 dark:focus:ring-offset-festival-800 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
