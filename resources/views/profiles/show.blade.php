@extends('layouts.app')

@section('content')
	<header class="mb-6">
		<img src="../images/default-profile-banner.jpg"
			alt="banner"
			class="mb-2" 
		>

		<div class="flex justify-between items-center">
			<div>
				<h2 class="font-bold text-2xl">{{ $user->name }}</h2>
				<p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
			</div>

			<div>
				<a 
					href="" 
					class="rounded-full border border-gray-300 py-2 px-4 mr-4 text-black text-xs"
				>
					Edit Profile
				</a>

				<a
					href=""
					class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs"
				>
					Follow Me
				</a>
			</div>

			<img 
				src="{{ $user->avatar }}" 
				alt="your avatar" 
				class="rounded-full h-32 w-32 object-cover object-top"
			>
			
		</div>
	</header>

	@include ('_timeline', [
		'tweets' => $user->tweets
	])
@endsection