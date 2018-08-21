@extends('frontend.layout.master')

@section('content')
	@include('frontend.sper.banner.slideshow')
	@include('frontend.sper.service.highlight')
	@include('frontend.sper.service.map')
	@include('frontend.sper.service.section')
	@include('frontend.sper.download.section')
@stop