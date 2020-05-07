<x-app>
	<div>
		@foreach ($users as $user)
			<a href="{{ $user->path() }}" class="flex items-center mb-5">				
				<img src="{{ $user->avatar }}" 
					alt="{{ $user->name }}'s avatar"
					class="rounded-full mr-4 h-16 w-16 object-cover object-top" 
				>

				<div>
					<h4 class="font-bold">{{ '@' . $user->username }}</h4>
					<h5 class="text-sm text-gray-600">{{ $user->name }}</h5>
				</div>
			</a>
		@endforeach

		{{ $users->links() }}
	</div>
</x-app>