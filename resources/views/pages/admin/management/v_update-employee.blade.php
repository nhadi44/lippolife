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
    <div class="container" style="padding-top: 40px; margin-left: 55px">
        <div class="col-10">
            <div class="card" id="cuser">
                <div class="card-header bg-warning">
                    <h5 class="card-title">User Management Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('employee/updates',$employee->id)}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="Department Name" class="col-form-label col-sm-3 font-weight-normal">Department Name</label>
                            <div class="col-6">
                                <select name="deptCode" id="deptCode" class="form-control">
                                    @foreach ($depart as $item)
                                    <option value="{{$item->code}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Name" class="col-form-label col-sm-3 font-weight-normal">Name</label>
                            <div class="col-9">
                                <input type="text" name="name" id="name" class="form-control" value="{{$employee->name}}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="position" class="col-form-label col-sm-3 font-weight-normal">Position</label>
                            <div class="col-6">
                                <select name="position" id="position" class="form-control text-capitalize">
                                    <option value="{{$employee->position}}" selected>{{$employee->position}}</option>
                                    <option value="manager">Manager</option>
                                    <option value="asistan manager">Assistant Manager</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="asistan supervisor">Asisstant Supervisor</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-9">
                            <input type="text" name="code" id="code" value="{{$employee->code}}" class="form-control" hidden>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-9">
                            <input type="text" name="created_at" id="created_at" value="{{$employee->created_at}}" class="form-control" hidden>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <a href="{{url('management')}}" class="btn btn-secondary mr-2" type="button" id="cancel1">Cancel</a>
                        <button class="btn btn-warning" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection