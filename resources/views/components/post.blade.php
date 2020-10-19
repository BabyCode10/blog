<div class="bg-white rounded-lg mb-4 py-4 px-5">
    <p class="text-gray-400 text-xs font-semibold font-poppins">{{ $created_at }}</p>

    <a href="{{ route('show', $slug) }}" class="text-blue-500 text-lg font-semibold font-poppins">{{ $title }}</a>

    <p class="text-blue-800 text-sm font-medium font-poppins">Content: {{ $slot }}</p>

    <div class="flex justify-end">
        <div class="flex items-center">
            <i class="mr-4" fill="#cbd5e0" stroke="#cbd5e0" stroke-width="0.5" data-feather="message-circle"></i>
            <p class="text-gray-400 text-sm font-medium font-poppins">{{ $comments }}</p>
        </div>
    </div>
</div>