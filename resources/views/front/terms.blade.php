@extends('layouts.master')
@section('title','Terms & Condition')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<p style="margin-top: 125px;">{!! $setting['terms'] ?? '' !!}</p>
		</div>
	</div>
</div>
@endsection