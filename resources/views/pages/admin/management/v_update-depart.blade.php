@extends('layouts.admin.v_layout')
@section('content')
<div class="container-fluid">
    <div class="col-12">
        <h1 class="display-5 pt-2">Data Management</h1>
        <hr class="my-3">
        <div class="row">
            <div class="col-sm-3" style="padding-right: 0px">
                <a href="{{route('management')}}" class="btn btn-success" id="depman-edit">Department Management</a>
            </div>
            <div class="col-sm-3">
                <a href="{{route('management')}}" class="btn btn-warning" id="uman-edit">User Management</a>
            </div>
            <div class="col-sm-3">
                <a href="{{route('management')}}" class="btn btn-danger" id="dobman-edit">Job Desc Management</a>
            </div>
            <div class="col-sm-3">
                <a href="{{route('management')}}" class="btn btn-info" id="ujobman-edit">User Job Management</a>
            </div>
        </div>
    </div>
    <div class="container-fluid" style="padding-top: 40px; margin-left: -8px">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-success">
                    <h5 class="card-title">Edit Department Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('department/edit',$departEdit->id)}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <input type="text" name="id" id="id" class="form-control" value="{{$departEdit->id}}" hidden>
                        </div>
                        <div class="form-group row">
                            <label for="Created At" class="col-form-label col-sm-3 font-weight-normal">Created At</label>
                            <div class="col-4">
                                <input type="text" class="form-control-plaintext ml-1" value="{{$departEdit->created_at->format('D, d M Y')}}" disabled></input>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Code" class="col-form-label col-sm-3 font-weight-normal">Department Code</label>
                            <div class="col-4">
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="code" value="{{$departEdit->code}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Department Name" class="col-form-label col-sm-3 font-weight-normal">Department Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="name" id="name" value="{{$departEdit->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Description" class="col-form-label col-sm-3 font-weight-normal">Description</label>
                            <div class="col-9">
                                <textarea name="description" id="description" cols="30" rows="2" class="form-control">{{$departEdit->description}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{url('management')}}" class="btn btn-secondary mr-2" >Cancel</a>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
