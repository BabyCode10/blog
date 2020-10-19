<div class="bg-white rounded-lg mb-4 py-4 px-5">

    <p class="text-gray-400 text-xs font-semibold font-poppins">{{ $created_at }}</p>

    <p class="text-blue-500 text-lg font-semibold font-poppins">{{ $title }}</p>

    <p class="text-blue-800 text-sm font-medium font-poppins">{{ $content }}</p>

    {{ $slot }}
</div>