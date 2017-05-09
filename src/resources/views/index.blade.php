@extends('masterpage.master')


@section('title')
	Laravel Home
@endsection

@section('content')
	@include('slider')

	@include('overview')

	@include('reservations')

	@include('events')
	
@endsection