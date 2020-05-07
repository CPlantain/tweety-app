<x-master>
    <div class="container mx-auto flex justify-center">
        <div class="px-12 py-6 bg-gray-300 rounded-lg">
            <div class="col-md-8">
                <div class="font-bold text-lg mb-4">{{ __('Login') }}</div>

                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-6">
                            <label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
                                for="email"
                            >
                                E-mail  
                            </label>

                            <input class="rounded p-2 px-8 w-full" 
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

                            <input class="rounded p-2 px-8 w-full" 
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
                            <div>
                                <input type="checkbox" 
                                        class="mr-1"
                                        name="remember"
                                        id="remember" {{ old('remember') ? ' checked' : ''}}
                                >

                                <label for="remember" 
                                        class="text-xs text-gray-700 font-bold uppercase"
                                >
                                    Remember Me
                                </label>

                                @error('remember')
                                    <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div class="mb-1">
                            <button type="submit"
                                    class="px-4 py-2 mr-2 rounded-full uppercase bg-blue-400 hover:bg-blue-500 text-white"
                            >
                                Login
                            </button>

                            <a href="{{ route('password.request') }}"
                                class="text-sm text-gray-700"
                            >
                                Forgot Your Password?
                            </a>
                        </div>
                    </form>
            </div>
        </div>
    </div>
</x-master>
