@extends('backend.master')

@section('content')

    <div class="container">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Add</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <form action="{{ route('admin.store') }}" method="post">
                        @csrf
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <tr>
                                <th>Code</th>
                                <th>
                                    <input type="number" name="code" value="{{ old('code') }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('code') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Name</th>
                                <th><input type="text" name="name" value="{{ old('name') }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('name') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <th><input type="text" name="phone" value="{{ old('phone') }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('phone') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <th><input type="email" name="email" value="{{ old('email') }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('email') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Address</th>
                                <th><input type="text" name="address" value="{{ old('address') }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('address') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Manager</th>
                                <th><input type="text" name="manager" value="{{ old('manager') }}">
                                    @if($errors->any())
                                        <p style="color: red"> {{ $errors->first('manager') }}</p>

                                    @endif
                                </th>
                            </tr>
                            <tr>
                                <th>Status</th>
                                <th>
                                    <select name="status">
                                        <option value="1">Ngừng hoạt động</option>
                                        <option value="0">Đang hoạt động</option>
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
