@extends('layouts.user')
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
                                    <th>Buyyer Name</th>
                                    <th>Course Name</th>
                                    <th>Course Price</th>
                                    <th>Email</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                            	@foreach ($list as $item)
                                <tr>
                                	<td>{{ $loop->iteration }}</td>
                                	<td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $item->order_no }}</td>
                                    <td>{{ $item->user->name ?? ''}}</td>
                                	<td>{{ $item->name }}</td>
                                    <td>£ {{ $item->price }}</td>
                                    <td>
                                        @if($item->user_id == "")
                                            {{ $item->email }}
                                        @else
                                            {{ $item->user->email }}
                                        @endif
                                    </td>
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