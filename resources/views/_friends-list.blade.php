<div class="bg-blue-100 rounded-lg p-6">
	<h3 class="font-bold text-xl mb-4">Following</h3>
	<ul>
		@foreach (auth()->user()->follows as $user)
			<li class="mb-4">
				<div class="flex items-center text-sm">
					<img 
						src="{{ auth()->user()->avatar }}" 
						alt="" 
						class="rounded-full mr-2 w-10"
					>

					{{ $user->name }}
				</div>
			</li>
		@endforeach
	</ul>
</div>
