@extends('admin.layouts.Master')
@section('pageTitle', 'Add Product')
@section('addProduct', 'active')
@section('mainContainer')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Add Employee</header>
                    <button id="panel-button3" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                        data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button3">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                        </li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else
                            here</li>
                    </ul>
                </div>
                <form action="{{ route('employees.store') }}" method="POST">
                    @csrf
                    <div class="card-body " id="bar-parent2">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Full Name </label>



                                    <input type="text" name ="name" value="{{ old('name') }}" class="form-control"
                                        placeholder="Enter full name">
                                </div>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->

                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name ="email" value="{{ old('email') }}"class="form-control"
                                        placeholder="Enter ...">
                                </div>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Phone</label>
                                    <input type="text" name ="phone" value="{{ old('phone') }}" class="form-control"
                                        placeholder="Enter phone number">
                                </div>
                                @error('phone')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Gender</label>
                                    <input type="text" name ="gender" value="{{ old('gender') }}" class="form-control"
                                        placeholder="Enter Gender">
                                </div>
                                @error('gender')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Position</label>
                                    <input type="text" name ="phone" value="{{ old('position') }}" class="form-control"
                                        placeholder="Enter phone number">
                                </div>
                                @error('position')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Hire Date</label>
                                    <input type="date" name ="hire_date" value="{{ old('hire_date') }}"
                                        class="form-control" placeholder="Enter hire date">
                                </div>
                                @error('hire_date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Salary</label>
                                    <input type="number" name ="hire_date" value="{{ old('salary') }}"
                                        class="form-control" placeholder="Enter salary">
                                </div>
                                @error('salary')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" name ="address" value="{{ old('address') }}" class="form-control"
                                        placeholder="Enter address">
                                </div>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Status</label>
                                    <input type="text" name ="status" value="{{ old('status') }}" class="form-control"
                                        placeholder="Enter status">
                                </div>
                                @error('address')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Profile Picture</label>
                                    <input type="file" name ="profile_picture" value="{{ old('profile_picture') }}"
                                        class="form-control" placeholder="Enter profile_picture">
                                </div>
                                @error('profile_picture')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-12 text-center mt-3">
                                <button type="submit" class="btn btn-success px-4 py-2">
                                    <i class="material-icons align-middle">send</i> Submit Job
                                </button>
                                <button type="reset" class="btn btn-secondary px-4 py-2 ms-2">
                                    <i class="material-icons align-middle">refresh</i> Reset
                                </button>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
