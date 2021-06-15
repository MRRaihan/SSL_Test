@extends('layouts.admin.master')
@section('title', 'User List')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of User</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Users List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Users List</h3>
                </div>
                <div class="panel-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 10px">SL#</th>
                            <th class="text-center" >Name</th>
                            <th class="text-center" >Email</th>
                            <th class="text-center" >Phone</th>
                            <th class="text-center" >Address</th>
                            <th class="text-center" >Status</th>
                            <th class="text-center" style="width: 12%">Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <td>{{ $serial ++ }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ ucfirst($user->status)}}</td>
                                <td>
                                    <a class="btn btn-primary btn-sm" href="{{ route('user.edit',$user->id) }}">Edit</a>
                                    <form class="d-inline-block pull-right" action="{{ route('user.destroy',$user->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you confirm ?')">Destroy</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- End Row -->

@endsection



