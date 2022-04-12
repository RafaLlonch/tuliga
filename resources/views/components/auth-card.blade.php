@include('layouts.header')
<div class="flex justify-center items-center mt-8">
    <div class="w-full sm:max-w-md bg-gray-50 shadow-lg rounded px-8 pt-6 pb-8 mb-4">
        {{ $slot }}
    </div>
</div>