<x-app>
	<form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
		@csrf
		@method('PATCH')

		<div class="mb-6">
			<label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
				for="name"
			>
				Display Name	
			</label>

			<input class="border border-gray-400 rounded-lg p-2 w-full" 
				type="text"
				name="name"
				id="name"
				value="{{ $user->name }}" 
				required 
			>

			@error('name')
				<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
			@enderror
		</div>

		<div class="mb-6">
			<label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
				for="username"
			>
				Userame	
			</label>

			<input class="border border-gray-400 rounded-lg p-2 w-full" 
				type="text"
				name="username"
				id="username"
				value="{{ $user->username }}" 
				required 
			>

			@error('username')
				<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
			@enderror
		</div>

		<div class="mb-6">
			<label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
				for="avatar"
			>
				Avatar	
			</label>

			<div class="flex">
				<input class="border border-gray-400 rounded-lg p-2 w-full" 
					type="file"
					name="avatar"
					id="avatar" 
				>

				<img src="{{ $user->avatar }}" 
					alt="your avatar"
					class="rounded-full h-12 w-12 ml-2 object-cover object-top"
				>
			</div>
			

			@error('avatar')
				<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
			@enderror
		</div>

		<div class="mb-6">
			<label class="block mb-2 uppercase font-bold text-xs text-gray-700" 
				for="email"
			>
				E-mail	
			</label>

			<input class="border border-gray-400 rounded-lg p-2 w-full" 
				type="email"
				name="email"
				id="email"
				value="{{ $user->email }}" 
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

			<input class="border border-gray-400 rounded-lg p-2 w-full" 
				type="password"
				name="password"
				id="password"
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
				Password Confirmation	
			</label>

			<input class="border border-gray-400 rounded-lg p-2 w-full" 
				type="password"
				name="password_confirmation"
				id="password_confirmation"
				required 
			>

			@error('password_confirmation')
				<p class="text-red-500 text-xs mt-2">{{ $message }}</p>
			@enderror
		</div>

		<div class="mb-6">
			<button type="submit"
					class="bg-blue-400 hover:bg-blue-500 text-white rounded-full py-2 px-4 mr-6"
			>
				Submit
			</button>

			<a href="{{ $user->path() }}" class="hover:underline">Cancel</a>
		</div>
	</form>
</x-app>