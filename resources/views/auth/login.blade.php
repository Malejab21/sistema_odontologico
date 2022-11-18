<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

<!-- component -->
<div
	class="bg-purple-900 absolute top-0 left-0 bg-gradient-to-b from-gray-900 via-gray-900 to-purple-800 bottom-0 leading-5 h-full w-full overflow-hidden">
	
</div>
<div
	class="relative   min-h-screen  sm:flex sm:flex-row  justify-center bg-transparent rounded-3xl shadow-xl">
	<div class="flex-col flex  self-center lg:px-14 sm:max-w-4xl xl:max-w-md  z-10">
		<div class="self-start hidden lg:flex flex-col  text-gray-300">
			
			<h1 class="my-3 font-semibold text-4xl">Bienvenidos</h1>
			<p class="pr-3 text-sm opacity-75">Sistema Odontologico</p>
		</div>
	</div>
	<div class="flex justify-center self-center  z-10">
        
		<div class="p-12 bg-white mx-auto rounded-3xl w-96 ">
			<div class="mb-7">
				
			</div>
			<div class="space-y-6">
				<div class="">
					
              </div>
                    
              <div>
                
              @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>
            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
					<div class="relative" x-data="{ show: true }">
						
						<div class="flex items-center absolute inset-y-0 right-0 mr-3  text-sm leading-5">
                        

							

							

						</div>
					</div>


					<div class="flex items-center justify-between">

						
					</div>
					
					<div class="flex items-center justify-center space-x-2 my-5">
						<span class="h-px w-16 bg-gray-100"></span>
						
						<span class="h-px w-16 bg-gray-100"></span>
					</div>
					<div class="flex justify-center gap-5 w-full ">

					</div>
				</div>
				<div class="mt-7 text-center text-gray-300 text-xs">
					<span>
                
				</div>
			</div>
		</div>
	</div>
	</div>
	<footer class="bg-transparent absolute w-full bottom-0 left-0 z-30">
	<div class="container p-5 mx-auto  flex items-center justify-between ">
		<div class="flex mr-auto">
			
		</div>

	</div>
	</footer>

<svg class="absolute bottom-0 left-0 " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#fff" fill-opacity="1" d="M0,0L40,42.7C80,85,160,171,240,197.3C320,224,400,192,480,154.7C560,117,640,75,720,74.7C800,75,880,117,960,154.7C1040,192,1120,224,1200,213.3C1280,203,1360,149,1400,122.7L1440,96L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js"></script>