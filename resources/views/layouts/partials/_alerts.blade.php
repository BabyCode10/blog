@if (session('store'))
    <div class="text-green-600 text-sm font-medium font-poppins border border-green-600 bg-green-200 rounded-full text-center py-1 my-2">{{ session('store') }}</div>
@endif

@if (session('update'))
    <div class="text-blue-600 text-sm font-medium font-poppins border border-blue-600 bg-blue-200 rounded-full text-center py-1 my-2">{{ session('update') }}</div>
@endif

@if (session('destroy'))
    <div class="text-yellow-600 text-sm font-medium font-poppins border border-yellow-600 bg-yellow-200 rounded-full text-center py-1 my-2">{{ session('destroy') }}</div>
@endif

@if (session('error'))
    <div class="text-red-600 text-sm font-medium font-poppins border border-red-600 bg-red-200 rounded-full text-center py-1 my-2">{{ session('error') }}</div>
@endif
