<x-master>
    <div class="container mx-auto flex justify-center mb-6">
        <div class="px-12 py-6 bg-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Register') }}</div>

                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                                for="username"
                            >
                                Username  
                            </label>

                            <input class="rounded p-2 px-4 w-full" 
                                type="text"
                                name="username"
                                id="username"
                                autocomplete="username" 
                                value="{{ old('username') }}" 
                                required 
                            >

                            @error('username')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                                for="name"
                            >
                                Display Name  
                            </label>

                            <input class="rounded p-2 px-4 w-full" 
                                type="text"
                                name="name"
                                id="name"
                                autocomplete="name" 
                                value="{{ old('name') }}" 
                                required 
                            >

                            @error('name')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                                for="email"
                            >
                                E-mail  
                            </label>

                            <input class="rounded p-2 px-4 w-full" 
                                type="email"
                                name="email"
                                id="email"
                                autocomplete="email" 
                                value="{{ old('email') }}" 
                                required 
                            >

                            @error('email')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                                for="password"
                            >
                                Password    
                            </label>

                            <input class="rounded p-2 px-4 w-full" 
                                type="password"
                                name="password"
                                id="password"
                                autocomplete="current-password" 
                                required 
                            >

                            @error('password')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                                for="password_confirmation"
                            >
                                Confirm Password    
                            </label>

                            <input class="rounded p-2 px-4 w-full" 
                                type="password"
                                name="password_confirmation"
                                id="password_confirmation"
                                required 
                            >

                            @error('password_confirmation')
                                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-1">
                            <button type="submit"
                                    class="px-4 py-2 mr-2 rounded-full uppercase bg-blue-400 hover:bg-blue-500 text-white"
                            >
                                Register
                            </button>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-master>
