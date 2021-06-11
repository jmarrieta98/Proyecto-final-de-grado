<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 border border-transparent rounded-md font-semibold text-xs bg-green-200 text-purple-600 uppercase tracking-widest  focus:outline-none focus:border-purple-600 focus:shadow-outline-gray disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
