@extends('admin.layouts.Master')
@section('pageTitle', 'Product Mangement')
@section('mainContainer')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-topline-red">
                <div class="card-head">
                    <header>All Employee</header>
                    <div class="tools">
                        <a class="fa fa-repeat btn-color box-refresh" href="javascript:;"></a>
                        <a class="t-collapse btn-color fa fa-chevron-down" href="javascript:;"></a>
                        <a class="t-close btn-color fa fa-times" href="javascript:;"></a>
                    </div>
                </div>
                <div class="card-body ">
                    <div class="row p-b-20">
                        <div class="bi" style="font-size: 1.5rem">
                            <div class="btn-group">
                                <button class="btn btn-success px-5 py-2  btn btn-success rounded-pill p-2">
                                    <a class = "text-white font-bold btn btn-success rounded-pill p-2  "
                                        href="{{ url('admin/employees/create') }}">Add
                                        new</a>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 col-6">
                            <div class="btn-group pull-right">
                                {{-- <button class="btn deepPink-bgcolor  btn-outline dropdown-toggle"
                                    data-bs-toggle="dropdown">Tools
                                    <i class="fa fa-angle-down"></i>
                                </button> --}}
                                {{-- <ul class="dropdown-menu pull-right">
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
                                </ul> --}}
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped table-bordered table-hover table-checkable order-column full-width"
                        id="example4">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Position</th>
                                <th>Hire_date</th>
                                <th>Salary</th>
                                <th>Address</th>
                                <th>Status</th>
                                <th>Profile Picture</th>
                                <th>Edit</th>
                                <th>View</th>
                                <th>Delete</th>



                            </tr>
                        </thead>
                        {{-- <pre>
                        {{ print_r(getProductData())  }}
                        </pre> --}}
                        {{-- {{ dd()  }} --}}
                        <tbody>
                            @foreach ($employees as $employe)
                                <tr class="odd gradeX">
                                    <td> {{ $employe['id'] }} </td>
                                    <td>
                                        {{ $employe['full_name'] }}
                                    </td>
                                    <td>
                                        {{ $employe['email'] }}
                                    </td>
                                    <td>
                                        {{ $employe['phone'] }}
                                    </td>
                                    <td> {{ $employe['gender'] }} </td>
                                    <td>
                                        {{ $employe['position'] }}
                                    </td>

                                    <td>
                                        {{ $employe['hire_date'] }}
                                    </td>
                                    <td>
                                        {{ $employe['salary'] }}
                                    </td>
                                    <td> {{ $employe['address'] }} </td>
                                    <td>
                                    <td> {{ $employe['status'] }} </td>
                                    <td>
                                        @if ($employe->profile_picture)
                                            <img src="{{ asset('storage/' . $employe->profile_picture) }}"
                                                alt="{{ $employe->title }}" style="max-width:300px;">
                                        @endif
                                    </td>


                                    <div class="btn-group">

                                        <td class="px-6 py-4 text-center">
                                            <a href="{{ route('employees.edit', $employe->id) }}"
                                                class="btn btn-primary center">Edit</a>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <form action="{{ route('employees.destroy', $employe->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger center"
                                                    onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                        <td class="px-6 py-4 text-center">
                                            <a
                                                href="{{ route('employees.show', $employe->id) }}"class="btn btn-warning center">View</button>
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
