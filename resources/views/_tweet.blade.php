<div class="flex p-4 border-b border-gray-300">
	<div class="mr-2 flex-shrink-0">
		<a href="{{ route('profile', $tweet->user) }}">
			<img 
				src="{{ $tweet->user->avatar }}" 
				alt="avatar" 
				class="rounded-full h-12 w-12 object-cover object-top"
			>
		</a>
	</div>

	<div>
		<h5 class="font-bold mb-4">
			<a href="{{ route('profile', $tweet->user) }}">
				{{ $tweet->user->name }}
			</a>
		</h5>

		<p class="text-sm">{{ $tweet->body }}</p>
	</div>
</div>