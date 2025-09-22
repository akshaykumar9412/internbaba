@extends('admin.layouts.Master')
@section('pageTitle', 'Product Mangement')
@section('mainContainer')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>All Location</header>
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
                                    <a class = "text-white font-bold  rounded-pill p-2  "
                                        href="{{ url('admin/categories/create') }}">Add
                                        new</a>
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
                                {{-- <th>
                                    <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                        <input type="checkbox" class="group-checkable" data-set="#sample_1 .checkboxes" />
                                        <span></span>
                                    </label>
                                </th> --}}
                                <th>ID</th>
                                <th>Category</th>
                                <th>Edit</th>
                                <th>Delete</th>
                                <th>View</th>


                            </tr>
                        </thead>
                        {{-- <pre>
                        {{ print_r(getProductData())  }}
                        </pre> --}}
                        {{-- {{ dd()  }} --}}
                        <tbody>
                            @foreach ($categories as $categorie)
                                {{-- <tr class="odd gradeX">
                                    <td>
                                        <label class="rt-chkbox rt-chkbox-single rt-chkbox-outline">
                                            <input type="checkbox" class="checkboxes" value="1" />
                                            <span></span>
                                        </label>
                                    </td> --}}
                                <td> {{ $categorie['id'] }} </td>
                                <td>
                                    {{ $categorie['name'] }}
                                </td>

                                <div class="btn-group">

                                    <td class="px-6 py-4 text-center">
                                        <a href="{{ route('categories.edit', $categorie->id) }}"
                                            class="btn btn-primary center">Edit</a>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <form action="{{ route('categories.destroy', $categorie->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger center"
                                                onclick="return confirm('Are you sure?')">Delete</button>
                                        </form>
                                    </td>
                                    <td class="px-6 py-4 text-center">
                                        <a
                                            href="{{ route('categories.show', $categorie->id) }}"class="btn btn-warning center">View</button>
                                    </td>


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
