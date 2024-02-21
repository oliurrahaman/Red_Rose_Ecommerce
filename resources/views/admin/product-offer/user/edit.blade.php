@extends('admin.master')

@section('title', 'Edit User')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">User Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">User</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit User</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->

    <div class="row">
        <div class="col">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit User Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('user.update', $user->id)}}" method="post" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="row mb-4">
                            <label for="firstName" class="col-md-3 form-label">User Name</label>
                            <div class="col-md-9">
                                <input class="form-control" id="firstName" value="{{$user->name}}" name="name" placeholder="User Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="email" class="col-md-3 form-label">Email Address</label>
                            <div class="col-md-9">
                                <input class="form-control" id="email" value="{{$user->email}}" name="email" placeholder="User Email" type="email">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="password" class="col-md-3 form-label">Password</label>
                            <div class="col-md-9">
                                <input class="form-control" id="password" value="" name="password" placeholder="User Password" type="password">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="mobile" class="col-md-3 form-label">Mobile Number</label>
                            <div class="col-md-9">
                                <input class="form-control" id="mobile" value="{{$user->mobile}}" name="mobile" placeholder="User Mobile" type="number">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="lastName" class="col-md-3 form-label">Select Role</label>
                            <div class="col-md-9">
                                <select class="form-control" name="role" required>
                                    <option value="" disabled selected> -- Select Role -- </option>
                                    <option value="1" @selected($user->role == 1)>Admin</option>
                                    <option value="2" @selected($user->role == 2)>Manager</option>
                                    <option value="3" @selected($user->role == 3)>Executive</option>
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="imgInp" class="col-md-3 form-label">User Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="imgInp" name="image" type="file"/>
                                <img src="{{asset($user->profile_photo_path)}}" id="categoryImage" alt=""/>
                            </div>
                        </div>
                        <button class="btn btn-primary rounded-0 float-end" type="submit">Update User Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

