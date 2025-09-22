@extends('admin.layouts.Master')
@section('pageTitle', 'Add Product')
@section('addProduct', 'active')
@section('mainContainer')

    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Update Category</header>
                    <button id="panel-button3" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                        data-upgraded=",MaterialButton">
                        <i class="material-icons">more_vert</i>
                    </button>
                    <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button3">
                        <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action</li>
                        <li class="mdl-menu__item"><i class="material-icons">print</i>Another action</li>
                        <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something else here</li>
                    </ul>
                </div>

                <form action="{{ route('categories.update', $category->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="card-body " id="bar-parent2">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <label>Category</label>
                                <input type="text" name="name" value="{{ old('categorie', $category->name) }}"
                                    class="form-control" placeholder="Enter hr ,it,shales,marketing etc.">
                            </div>
                        </div>

                        <div class="col-12 text-center mt-3">
                            <button type="submit" class="btn btn-success px-4 py-2">
                                <i class="material-icons align-middle">send</i> Update Location
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
