<div {{ $attributes->class([
    'border border-gray-300 shadow-sm bg-white rounded-xl filament-tables-container space-y-10',
    'dark:bg-gray-800 dark:border-gray-700' => config('tables.dark_mode'),
]) }}>
    {{ $slot }}
</div>
