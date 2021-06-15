@extends('layouts.admin.master')
@section('title', 'Result List')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">List Of Result</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Result List</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Result List</h3>
                </div>
                <div class="panel-body">

                    <table id="datatable-buttons" class="table table-striped table-bordered text-center">
                        <thead>
                        <tr>
                            <th class="text-center" style="width: 10px">SL#</th>
                            <th class="text-center" >Student/User Name</th>
                            <th class="text-center" >Result Title</th>
                            <th class="text-center" >Result</th>
                            <th class="text-center" >Status</th>
                            <th class="text-center" style="width: 12%">Actions</th>
                        </tr>
                        </thead>


                        <tbody>
                        @foreach($results as $result)
                            <tr>
                                <td>{{$serial++ }}</td>
                                <td>{{$result->user->name}}</td>
                                <td>{{$result->result_title}}</td>
                                <td>{{$result->result}}</td>
                                <td>{{ucfirst($result->status)}}</td>
                                <td class="d-flex">
                                    <a class="btn btn-info d-inline-block" href="{{ route('result.edit', $result->id) }}">Edit</a>
                                    <form class="d-inline-block pull-right" method="post" action="{{ route('result.destroy', $result->id) }}">
                                        @csrf
                                        @method('delete')
                                        <button class="btn btn-danger" onclick="return confirm('Are you confirm to delete?')">Delete</button>
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

