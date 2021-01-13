@extends('backend.master')

@section('content')

    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">List</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">List Agency</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Manager</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($agencys as $agency)
                            <tr>
                                <td>{{ $agency->code }}</td>
                                <td>{{ $agency->name }}</td>
                                <td>{{ $agency->phone }}</td>
                                <td>{{ $agency->email }}</td>
                                <td>{{ $agency->address }}</td>
                                <td>{{ $agency->manager }}</td>
                                <td>{{ ($agency->status == 0) ? "Đang hoạt động" : "Ngừng hoạt động" }}</td>
                                <td>
                                    <a href="{{ route('admin.edit', $agency->id) }}">Edit</a>
                                    <a onclick="return confirm('Are you sure you want to delete it?')" href="{{ route('admin.destroy', $agency->id) }}">Delete</a>
                                </td>
                            </tr>
                        @empty

                        @endforelse
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>Manager</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>

    </div>

@endsection
