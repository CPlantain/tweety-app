<div class="border border-gray-400 rounded-lg">
	@forelse ($tweets as $tweet)
		@include ('_tweet')
	@empty
		<p class="p-4">No tweets yet.</p>
	@endforelse
</div>