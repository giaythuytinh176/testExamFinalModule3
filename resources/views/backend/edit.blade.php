@extends('backend.master')

@section('content')

    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                                                                       href="https://datatables.net">official
                DataTables documentation</a>.</p>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.update', $agency->id) }}" method="post">
                        @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <input type="hidden" name="code" value="{{ $agency->code }}">
                            <tr>
                                <th>Name</th>
                                <th><input type="text" name="name" value="{{ $agency->name }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('name') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th><input type="text" name="phone" value="{{ $agency->phone }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('phone') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th><input type="text" name="email" value="{{ $agency->email }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('email') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th><input type="text" name="address" value="{{ $agency->address }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('address') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Manager</th>
                                <th><input type="text" name="manager" value="{{ $agency->manager }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('manager') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>
                                    <select name="status">
                                        <option value="1" {{ ($agency->status == 1) ? "selected" : "" }}>Ngừng hoạt động</option>
                                        <option value="0" {{ ($agency->status == 0) ? "selected" : "" }}>Đang hoạt động</option>
                                    </select>
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('status') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th style="text-align: center" colspan="2">
                                    <input type="submit" value="Submit">
                                </th>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>

    </div>

@endsection
