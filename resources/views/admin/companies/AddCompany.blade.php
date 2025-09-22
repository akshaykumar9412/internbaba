@extends('admin.layouts.Master')
@section('pageTitle', 'Add Product')
@section('addProduct', 'active')
@section('mainContainer')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Add Location</header>
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
                <form action="{{ route('companies.store') }}" method="POST">
                    @csrf
                    <div class="card-body " id="bar-parent2">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Comapny Name</label>
                                    <input type="text" name ="name" value= "{{ old('name') }}" class="form-control"
                                        placeholder="Enter ...">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            {{-- <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Comapny Logo</label>
                                    <input type="file" name ="logo" value= "{{ old('logo') }}" class="form-control"
                                        placeholder="">
                                    @error('logo')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div> --}}
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name ="email" value= "{{ old('email') }}" class="form-control"
                                        placeholder="Enter ...">
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Website</label>
                                    <input type="text" name ="website" value= "{{ old('website') }}" class="form-control"
                                        placeholder="Enter ...">
                                    @error('website')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Phone number</label>
                                    <input type="text" name ="phone" value= "{{ old('phone') }}" class="form-control"
                                        placeholder="Enter ...">
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Description</label>
                                    <input type="text" name ="description" value= "{{ old('description') }}"
                                        class="form-control" placeholder="Enter ...Description">
                                    @error('description')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
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
