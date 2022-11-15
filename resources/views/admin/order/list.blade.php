@extends('layouts.admin')
@section('title', 'Order')
@section('nav-title', 'Order')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icons">list</i></div>
                    <h5 class="card-title">Order List</h5>
                </div>
                <div class="card-body">
                	<div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Order No</th>
                                    <th>Course Name</th>
                                    <th>Course Price</th>
                                    <th>Buyyer Name</th>
                                    <th>Buyyer Phone</th>
                                    <th>Buyyer Address</th>
                                    <th>Buyyer Postal</th>
                                    <th>Buyyer Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($list as $item)
                                <tr>
                                	<td>{{ $loop->iteration }}</td>
                                	<td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $item->order_no }}</td>
                                	<td>{{ $item->name }}</td>
                                    <td>£ {{ $item->price }}</td>
                                    <td>{{ $item->user_name}}</td>
                                    <td>{{ $item->user_phone}}</td>
                                    <td>{{ $item->user_add}}</td>
                                    <td>{{ $item->user_postal}}</td>
                                    <td>{{ $item->email}}</td>
                                    <td>
                                		<span class="badge badge-primary">{{$item->status}}</span>
                                    </td>
                                </tr>
                                @endforeach		
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
<script>
    // 
</script>
@endsection