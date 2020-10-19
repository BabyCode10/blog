<ul class="flex flex-col w-64 px-10">
    <li class="w-full mb-2">
        <a href="{{ route('home') }}" class="block text-center text-sm font-semibold font-poppins {{ Request::is('admin/home*') ? 'text-white bg-blue-800' : 'text-gray-500' }} rounded-full py-2">Dashboard</a>
    </li> 

    <li class="w-full mb-2">
        <a href="{{ route('post') }}" class="block text-center text-sm font-semibold font-poppins {{ Request::is('admin/post*') ? 'text-white bg-blue-800' : 'text-gray-500' }} rounded-full py-2">Post</a>
    </li> 

    <li class="w-full mb-2">
        <a href="{{ route('comment-list') }}" class="block text-center text-sm font-semibold font-poppins {{ Request::is('admin/comment-list*') ? 'text-white bg-blue-800' : 'text-gray-500' }} rounded-full py-2">Comment List</a>
    </li> 

    <hr class="mb-2">

    <li class="mb-2">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            
            <div class="flex items-center justify-center">
                <i class="mr-1" stroke="#a0aec0" stroke-width="2" height="14" data-feather="log-out"></i>
                
                <button type="submit" class="text-center text-sm font-semibold font-poppins text-gray-500 rounded-full py-2">
                    Log Out
                </button>
            </div>
        </form>
    </li> 
</ul>