<nav class="bg-black border-b border-gray-100 p-6 flex justify-between">
  <div class="flex items-center space-x-2">
      <h1 class="text-2xl font-medium text-blue-500 ml-4">
        <a href="/">laliga</a>
      </h1>  
  </div>
  <div class="flex items-center space-x-2">
        @if (Route::has('login'))
          <div class="">
          @auth
            <button class="px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
              <a href="{{ url('/home') }}" class="text-white dark:text-gray-500 ">Home</a>
            </button>
        @else
            <button class="px-2 py-1 bg-blue-500 hover:bg-blue-700 text-white font-bold rounded">
              <a href="{{ route('login') }}" class="text-white hover:text-gray-500 ">Entrar</a>
            </button>
            @if (Route::has('register'))
              <button class="px-2 py-1 bg-white hover:bg-blue-700 text-gray-500 font-bold rounded">
                <a href="{{ route('register') }}" class="text-black hover:text-gray-500 ">Registro</a>
              </button>
            @endif
          @endauth
        </div>
        @endif     
  </div>    
</nav>

