@extends('layouts.admin.master')
@section('title','Update User')
@section('content')
    <!-- Page-Title -->
    <div class="row">
        <div class="col-sm-12">
            <div class="page-header-title">
                <h4 class="pull-left page-title">Update User</h4>
                <ol class="breadcrumb pull-right">
                    <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                    <li class="active">Update User</li>
                </ol>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-sm-12">
            <div class="panel panel-primary">
                <div class="panel-heading"><h3 class="panel-title">User Update Form</h3></div>
                <div class="panel-body">

                    <form action="{{ route('user.update', $user->id) }}" class="form-horizontal" method="post">
                        @csrf
                        @method('put')
                        <div class="form-group">
                            <label class="col-md-2 control-label">Name</label>
                            <div class="col-md-10">
                                <input name="name" value="{{$user->name}}" type="text" class="form-control" placeholder="Name">
                                @error('name')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label" for="example-email">Email</label>
                            <div class="col-md-10">
                                <input type="email" value="{{ $user->email }}" id="example-email" name="email" class="form-control" placeholder="Email">
                                @error('email')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Password</label>
                                <div class="col-md-10">
                                    <input  name="password" type="password" class="form-control" placeholder="Password">
                                    @error('password')
                                    <div class="text-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                        <div class="form-group">
                            <label class="col-md-2 control-label">Phone</label>
                            <div class="col-md-10">
                                <input value="{{ $user->phone }}" name="phone" type="tel" id="phone" class="form-control" placeholder="017xxxxxxxx">
                                @error('phone')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Address</label>
                            <div class="col-md-10">
                                <input name="address" value="{{ $user->address }}" type="text" class="form-control" placeholder="Address">
                                @error('address')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-2 control-label">Status</label>
                            <div class="col-md-10">
                                <div class="radio radio-info radio-inline">
                                    <input @if($user->status == 'active') checked   @endif type="radio" id="active" value="active" name="status">
                                    <label for="active"> Active </label>
                                </div>
                                <div class="radio radio-inline">
                                    <input @if($user->status == 'inactive') checked   @endif type="radio" id="inactive" value="inactive" name="status">
                                    <label for="inactive"> Inactive </label>
                                </div>
                                @error('status')
                                <div class="text-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <button class="btn btn-info pull-right" type="submit">Update</button>
                    </form>
                </div> <!-- panel-body -->
            </div> <!-- panel -->
        </div> <!-- col -->
    </div>
@endsection
