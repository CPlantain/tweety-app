<div class="bg-blue-100 rounded-lg p-6">
	<h3 class="font-bold text-xl mb-4">Following</h3>
	<ul>
		@forelse (current_user()->follows as $user)
			<li class="{{ $loop->last ? '' : 'mb-4' }}" >
				<div>
					<a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
						<img 
							src="{{ $user->avatar }}" 
							alt="avatar" 
							class="rounded-full mr-2 h-10 w-10 object-cover object-top"
						>

						{{ $user->name }}
					</a>
				</div>
			</li>
		@empty
			<li>No follows yet!</li>
		@endforelse
	</ul>
</div>
