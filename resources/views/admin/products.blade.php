@extends('admin.layouts.Master')
@section('pageTitle', 'Product Mangement')
@section('mainContainer')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>MANAGED TABLE</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row p-b-20">
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group">
                                <button id="addRow1" class="btn btn-info">
                                    Add New <i class="fa fa-plus"></i>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-right">
                                <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                    data-bs-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button>
                                <ul class="dropdown-menu pull-right">
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-print"></i> Print </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-pdf-o"></i> Save as PDF </a>
                                    </li>
                                    <li>
                                        <a href="javascript:;">
                                            <i class="fa fa-file-excel-o"></i> Export to Excel </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column full-width"
                        id="example4">
                        <thead>
                            <tr>
                                <th>
                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                        <span></span>
                                    </label>
                                </th>
                                <th> Title </th>
                                <th> Category </th>
                                <th> Brand </th>
                                <th> Price </th>
                                <th> Stock </th>
                                <th> SKU </th>
                                <th> Status </th>
                                <th> Action </th>
                            </tr>
                        </thead>
                        {{-- <pre>
                        {{ print_r(getProductData())  }}
                        </pre> --}}
                        {{-- {{ dd()  }} --}}
                        <tbody>
                            @foreach (getProductData() as $product)
                            <tr class="odd gradeX">
                                <td>
                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                        <input type="checkbox" class="checkboxes" value="1" />
                                        <span></span>
                                    </label>
                                </td>
                                <td> {{ $product["title"] }} </td>
                                <td>
                                    {{ $product["category"] }}
                                </td>
                                <td>
                                    {{ isset($product["brand"])? $product["brand"]:"" }}
                                </td>
                                <td>
                                    $ {{ $product["price"] }}
                                </td>
                                <td>
                                    {{ $product["stock"] }}
                                </td>
                                <td>
                                    <a href="#{{ $product["sku"] }}"> {{ $product["sku"] }} </a>
                                    
                                </td>
                                <td>
                                    <span class="label label-sm label-success"> Approved </span>
                                </td>
                                <td class="valigntop">
                                    <div class="btn-group">
                                        <button class="btn btn-xs deepPink-bgcolor dropdown-toggle no-margin" type="button"
                                            data-bs-toggle="dropdown" aria-expanded="false"> Actions
                                            <i class="fa fa-angle-down"></i>
                                        </button>
                                        <ul class="dropdown-menu pull-left" role="menu">
                                            <li>
                                                <a href="{{ url('/admin/product/edit/2') }}">
                                                    <i class="icon-docs"></i>Edit</a>
                                            </li>
                                            <li>
                                                <a href="{{ url('/admin/product/edit/2') }}">
                                                    <i class="icon-tag"></i> Delete </a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
