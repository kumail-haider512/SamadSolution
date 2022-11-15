@extends('layouts.admin')
@section('title', 'Search Student')
@section('nav-title', 'Search Student')
@section('css')
<style>
    form .form-group select.form-control {
     position: relative;
     top: 0px; 
    }
    h5{
        text-shadow: 0;
    }
</style>
@endsection
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <form method="POST" action="{{route('admin.student.searchstudent')}}">
                @csrf
                <div class="card">
                    <div class="card-header card-header-success">
                        <h5 class="card-title text-center">Search Student</h5>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Select Stuent</label>
                                    <select name="student_id" class="form-control">
                                        <option selected disabled value="">Select One</option>
                                        @foreach($student as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success sch">Search</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-12">
            <div class="card">
                <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon"><i class="material-icon">list</i></div>
                    <h5 class="card-title">Student Record</h5>
                </div>
                <div class="card-body">
                    <div class="material-datatables mt-3">
                        <table class="datatables table table-striped table-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Date</th>
                                    <th>Name</th>
                                    <th>Roll No</th>
                                    <th>Class</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($list as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->created_at->format('d/m/Y') }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->roll_no }}</td>
                                    <td>{{ $item->class }}</td>
                                    <td><img src="{{asset($item->image)}}" width="200px" height="200px"></td>
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
@endsection