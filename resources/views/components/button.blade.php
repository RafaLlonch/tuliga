<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-3 rounded focus:outline-none focus:shadow-outline']) }}>
    {{ $slot }}
</button>
