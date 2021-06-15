@extends('layouts.admin.master')
@section('title', 'Create Result')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Create New Result</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="active">Create Result</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">Result Form</h3></div>
                <div class="panel-body">
                    <form class="form-horizontal" action="{{route('result.store')}}" method="post" >
                        @csrf

                        <div class="form-group">
                            <label class="col-sm-2 control-label">Student/User Name</label>
                            <div class="col-sm-10">
                                <select name="user_id" id="user_id" class="form-control">
                                    <option value="" style="display: none" selected>Select User/Student</option>
                                    @foreach($users as $user)
                                        <option @if(old('user_id') == $user->id) selected @endif value="{{ $user->id }}"> {{ $user->name }} </option>
                                    @endforeach
                                </select>
                                @error('user_id')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Result Title</label>
                            <div class="col-md-10">
                                <input value="{{old('result_title')}}" name="result_title" type="text" id="result_title" class="form-control" placeholder="Result Title">
                                @error('result_title')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Result</label>
                            <div class="col-md-10">
                                <input value="{{old('result')}}" name="result" type="text" id="result" class="form-control" placeholder="Grade">
                                @error('result')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group">
                            <label class="col-md-2 control-label"> Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input type="radio" id="inactive" value="inactive" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="pull-right">
                            <button type="submit" class="btn btn-info waves-effect waves-light">Save</button>
                        </div>

                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
    <!-- End Row -->

@endsection
