@extends('layouts.user')
@section('title', 'Dashboard')
@section('nav-title', 'Dashboard')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-3 col-md-6 col-sm-6">
            <div class="card card-stats">
                <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon"><i class="material-icons">cached</i></div>
                    <p class="card-category">Your Orders</p>
                    <h3 class="card-title"></h3>
                </div>
                <div class="card-footer">
                    <div class="stats"><i class="material-icons">cached</i> Your Orders</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
