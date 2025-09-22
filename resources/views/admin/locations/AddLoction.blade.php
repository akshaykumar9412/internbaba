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
                <form action="{{ route('locations.store') }}" method="POST">
                    @csrf
                    <div class="card-body " id="bar-parent2">
                        <div class="row">
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>City</label>
                                    <input type="text" name ="city" value="{{ old('city') }}" class="form-control"
                                        placeholder="Enter ...">
                                </div>
                                @error('city')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>State</label>
                                    <input type="text" name ="state" value="{{ old('state') }}"class="form-control"
                                        placeholder="Enter ...">
                                </div>
                                @error('state')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Country</label>
                                    <input type="text" name ="country" value="{{ old('country') }}" class="form-control"
                                        placeholder="Enter ...">
                                </div>
                                @error('country')
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
