<div class="border border-blue-400 rounded-lg px-8 py-6 mb-6">
	<form method="POST" action="./tweets">
		@csrf

		<textarea 
			name="body" 
			class="w-full"
			required 
			autofocus 
			placeholder="What's up doc?" 
		></textarea>

		<hr class="my-4">

		<footer class="flex justify-between items-center">
			<img 
				src="{{ auth()->user()->avatar }}" 
				alt="your avatar" 
				class="rounded-full h-10 w-10 object-cover object-top"
			>

			<button 
				type="submit" 
				class="bg-blue-500 hover:bg-blue-600 rounded-full shadow py-2 px-8 text-sm text-white"
				>
				Tweet-a-roo!
			</button>
		</footer>
	</form>

	@error('body')
		<p class="text-red-500 text-sm mt-4">{{ $message }}</p>
	@enderror
</div>	