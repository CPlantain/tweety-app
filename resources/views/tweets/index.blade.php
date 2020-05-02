@extends('layouts.app')

@section('content')
{{__FILE__}}

	@include ('_publish-tweet-panel')

	@include ('_timeline')

@endsection
