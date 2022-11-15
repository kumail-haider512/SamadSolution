@extends('layouts.master')
@section('title','Page')
@section('content')
	<div class="container">
		<div class="row">
		    <div class="col-md-12">
				<h4 class="text-capitalize" style="margin-top: 125px;">{{ $page->name ?? ''}}</p>
			</div>
			<div class="col-md-12">
				<p>{!! $page->description !!}</p>
			</div>
		</div>
	</div>
@endsection