<x-app>

	<div>
		<header class="mb-6 relative">
			<div class="relative">
				<img src="../images/default-profile-banner.jpg"
					alt="banner"
					class="rounded-lg mb-2" 
				>

				<img 
					src="{{ $user->avatar }}" 
					alt="your avatar" 
					class="rounded-full h-32 w-32 object-cover object-top 
						absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
						style="left: 50%" 
				>
			</div>

			<div class="flex justify-between items-center mb-4">
				<div>
					<h2 class="font-bold text-2xl">{{ $user->name }}</h2>
					<p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
				</div>

				<div class="flex">
					<a 
						href="" 
						class="rounded-full border border-gray-300 py-2 px-4 mr-4 text-black text-xs"
					>
						Edit Profile
					</a>

					<x-follow-button :user="$user"></x-follow-button>
				</div>
			</div>

			<p class="text-sm">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quaerat delectus quae, quam assumenda tempora repellat maiores rem deserunt voluptatem, commodi fuga impedit sed fugiat veritatis quasi cumque quas temporibus aspernatur.
			</p>

		</header>

		@include ('_timeline', [
			'tweets' => $user->tweets
		])
	</div>

</x-app>