@extends('admin.layouts.Master')
@section('pageTitle', 'Add Product')
@section('addProduct', 'active')
@section('mainContainer')
    <div class="row">
        <div class="col-md-12 col-sm-12">
            <div class="card card-box">
                <div class="card-head">
                    <header>Update Product</header>
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
                <div class="card-body " id="bar-parent2">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <!-- text input -->
                            <div class="form-group">
                                <label>Text</label>
                                <input type="text" class="form-control" placeholder="Enter ...">
                            </div>
                            <div class="form-group has-error">
                                <label class="control-label" for="inputError">testt</label>
                                <input type="text" class="form-control" id="inputError" placeholder="Enter ...">
                                <span class="help-block">Error Message</span>
                            </div>
                            <div class="form-group">
                                <label>Text Disabled</label>
                                <input type="text" class="form-control" placeholder="Enter ..." disabled>
                            </div>
                            <div class="form-group">
                                <label>Text Readonly</label>
                                <input type="text" class="form-control" placeholder="Enter ..." readonly>
                            </div>
                            <!-- checkbox -->
                            <div class="form-group">
                                <div class="checkbox checkbox-icon-black p-0">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        Checkbox 1
                                    </label>
                                </div>
                                <div class="checkbox checkbox-icon-black p-0">
                                    <input id="checkbox2" type="checkbox" checked="checked">
                                    <label for="checkbox2">
                                        Checkbox 2
                                    </label>
                                </div>
                                
                                <div class="checkbox checkbox-icon-black p-0">
                                    <input id="checkbox3" type="checkbox" disabled>
                                    <label for="checkbox3">
                                        Checkbox 3
                                    </label>
                                </div>
                            </div>
                            <!-- radio -->
                            <div class="form-group">
                                <div class="radio p-0">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                    <label for="optionsRadios1">
                                        Option 1
                                    </label>
                                </div>
                                <div class="radio p-0">
                                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                    <label for="optionsRadios2">
                                        Option 2
                                    </label>
                                </div>
                                <div class="radio p-0">
                                    <input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" disabled>
                                    <label for="optionsRadios3">
                                        Option disabled
                                    </label>
                                </div>
                            </div>
                            <!-- select -->
                            <div class="form-group">
                                <label>Select</label>
                                <select class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Disabled</label>
                                <select class="form-control" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <!-- textarea -->
                            <div class="form-group">
                                <label>Textarea</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Textarea Disabled</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                            </div>
                            <div class="form-group">
                                <label>Textarea Readonly</label>
                                <textarea class="form-control" rows="3" placeholder="Enter ..." Readonly></textarea>
                            </div>
                            <!-- Select multiple-->
                            <div class="form-group">
                                <label>Select Multiple</label>
                                <select multiple class="form-control">
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Multiple Disabled</label>
                                <select multiple class="form-control" disabled>
                                    <option>option 1</option>
                                    <option>option 2</option>
                                    <option>option 3</option>
                                    <option>option 4</option>
                                    <option>option 5</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
