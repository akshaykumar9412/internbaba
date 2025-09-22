@extends('admin.layouts.Master')
@section('pageTitle', 'Profile')
@section('mainContainer')
<div class="white-box">
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card-head">
                <header>Password Change</header>
                <button id="panel-button2" class="mdl-button mdl-js-button mdl-button--icon pull-right"
                    data-upgraded=",MaterialButton">
                    <i class="material-icons">more_vert</i>
                </button>
                <ul class="mdl-menu mdl-menu--bottom-right mdl-js-menu mdl-js-ripple-effect" data-mdl-for="panel-button2">
                    <li class="mdl-menu__item"><i class="material-icons">assistant_photo</i>Action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">print</i>Another action
                    </li>
                    <li class="mdl-menu__item"><i class="material-icons">favorite</i>Something
                        else here</li>
                </ul>
            </div>
            <div class="card-body " id="bar-parent1">
                <form>
                    <div class="form-group">
                        <label for="simpleFormEmail">User Name</label>
                        <input type="email" class="form-control" id="simpleFormEmail" placeholder="Enter user name">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormPassword">Current
                            Password</label>
                        <input type="password" class="form-control" id="simpleFormPassword" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                        <label for="simpleFormPassword">New Password</label>
                        <input type="password" class="form-control" id="newpassword" placeholder="New Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
