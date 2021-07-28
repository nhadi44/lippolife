@extends('layouts.admin.v_layout')
@section('content')
<div class="container-fluid">
    <div class="col-12">
        <h1 class="display-5 pt-2">Data Management</h1>
        <hr class="my-3">
        <div class="row">
            <div class="col-sm-3" style="padding-right: 0px">
                <button class="btn btn-success" id="depman">Department Management</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-warning" id="uman">User Management</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-danger" id="dobman">Job Desc Management</button>
            </div>
            <div class="col-sm-3">
                <button class="btn btn-info" id="ujobman">User Job Management</button>
            </div>
        </div>
    </div>

    @if ($errors->any())
    <div class="container-fluid frmerror">
        <div class="alert alert-dark col-sm-4" id="alert-errors">
            <h5 class="card-title">Error</h5>
            <button class="btn btn-outline-secondary float-right" data-toggle="tooltip" data-placement="bottom" title="Close" id="btn-error"><i class="fas fa-times"></i></button>
            <br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    </div>
    @endif
    </script>
    <div class="container-fluid pt-4" id="department">
        <button class="btn btn-success mb-2" id="btndepart">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>  Add Department
        </button>
        <table class="table" id="datatable">
            <thead class="bg-success">
                <tr>
                    <th>No</th>
                    <th>Department Code</th>
                    <th>Department Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
                    @php
                        $no = 1;
                    @endphp
            <tbody>
                @foreach ($depart as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->description}}</td>
                    <td>
                        <a href="{{url('/department',$item->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="{{url('/department/delete',$item->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{-- Table User Management --}}
    <div class="container-fluid pt-4" id="usermanagement">
        <button class="btn btn-warning mb-2" id="btnuser">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>  Add Employee
        </button>
        <table class="table" id="datatable1">
            <thead class="bg-warning">
                <tr>
                    <th>No</th>
                    <th>Department Code</th>
                    <th>Employee Code</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Action</th>
                </tr>
            </thead>
            @php
                $no = 1;
                @endphp
            <tbody>
                @foreach ($employee as $item)
                <tr>
                    <td>{{$no++}}</td>
                    <td>{{$item->deptCode}}</td>
                    <td>{{$item->code}}</td>
                    <td>{{$item->name}}</td>
                    <td class="text-capitalize">{{$item->position}}</td>
                    <td>
                        <a href="{{url('/employee/edit',$item->id)}}" class="btn btn-warning" data-toggle="tooltip" data-placement="bottom" title="Edit"><i class="fas fa-edit"></i></a>
                        <a href="{{url('/employee/destroy',$item->id)}}" class="btn btn-danger" data-toggle="tooltip" data-placement="bottom" title="Delete"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <div class="container-fluid pt-4" id="jobdesc">
        <button class="btn btn-danger mb-2" id="btnjob">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg>  Add Job Desc
        </button>
        <table class="table" id="datatable2">
            <thead class="bg-danger">
                <tr>
                    <th>No</th>
                    <th>Department Code</th>
                    <th>Job Code</th>
                    <th>Job Name</th>
                    <th>Job Description</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>
    <div class="container-fluid pt-4" id="userjob">
        <h2 class="display-5">User Job Table</h2>
        <hr class="my-2">
        <table class="table" id="datatable3">
            <thead class="bg-info">
                <tr>
                    <th>No</th>
                    <th>Department Code</th>
                    <th>Department Name</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
            </thead>
        </table>
    </div>

    {{-- Form Add Department --}}
    <div class="container-fluid pt-4" id="frmdepartment">
        <div class="col-6">
            <div class="card">
                <div class="card-header bg-success">
                    <h5 class="card-title">Department Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('department')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="Code" class="col-form-label col-sm-3 font-weight-normal">Department Code</label>
                            <div class="col-4">
                                <input type="text" class="form-control @error('code') is-invalid @enderror" name="code" id="code" placeholder="Department Code">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Department Name" class="col-form-label col-sm-3 font-weight-normal">Department Name</label>
                            <div class="col-9">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Deparment Name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Description" class="col-form-label col-sm-3 font-weight-normal">Description</label>
                            <div class="col-9">
                                <textarea name="description" id="description" cols="30" rows="2" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button class="btn btn-secondary mr-2" id="cancel" type="button">Cancel</button>
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Form Add Employee --}}
    <div class="container pt-4" id="frmemployee">
        <div class="col-10">
            <div class="card" id="cuser">
                <div class="card-header bg-warning">
                    <h5 class="card-title">User Management Form</h5>
                </div>
                <div class="card-body">
                    <form action="{{url('employee')}}" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="Department Name" class="col-form-label col-sm-3 font-weight-normal">Department Name</label>
                            <div class="col-6">
                                <select name="deptCode" id="deptCode" class="form-control">
                                    <option value="0" selected>-- Select Departmen Code --</option>
                                    @foreach ($depart as $item)
                                    <option value="{{$item->code}}">{{$item->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Name" class="col-form-label col-sm-3 font-weight-normal">Name</label>
                            <div class="col-9">
                                <input type="text" name="name" id="name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="position" class="col-form-label col-sm-3 font-weight-normal">Position</label>
                            <div class="col-6">
                                <select name="position" id="position" class="form-control">
                                    <option value="0" selected>-- Select Employee Position --</option>
                                    <option value="manager">Manager</option>
                                    <option value="asistan manager">Assistant Manager</option>
                                    <option value="supervisor">Supervisor</option>
                                    <option value="asistan supervisor">Asisstant Supervisor</option>
                                    <option value="staff">Staff</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button class="btn btn-secondary mr-2" type="button" id="cancel1">Cancel</button>
                        <button class="btn btn-warning" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    {{-- Form Add Job --}}
    <div class="container pt-4" id="frmjob">
        <div class="col-12">
            <div class="card" id="cjob">
                <div class="card-header bg-danger">
                    <h5 class="card-title">Job Form</h5>
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label for="Department Code" class="col-form-label col-sm-3 font-weight-normal">Department Code</label>
                            <div class="col-4">
                                <input type="text" class="form-control" name="departCode" id="departCode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Job Code" class="col-form-label col-sm-3 font-weight-normal">Job Code</label>
                            <div class="col-4">
                                <input type="text" class="form-control" name="jobCode" name="jobCode">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Job Name" class="col-form-label col-sm-3 font-weight-normal">Job Name</label>
                            <div class="col-6">
                                <input type="text" name="jobName" id="jobName" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="Job Description" class="col-form-label col-sm-3 font-weight-normal">Job Description</label>
                            <div class="col-6">
                                <textarea name="jobDesc" id="jobDesc" cols="30" rows="3" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end">
                        <button class="btn btn-secondary mr-2" type="button" id="cancel2">Cancel</button>
                        <button class="btn btn-danger" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @include('sweetalert::alert')
</div>
@endsection
