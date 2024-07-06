@extends('layouts.admin')
@section('styles')
    <link href="{{ asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" />
@endsection

@section('content')
    <!--breadcrumb-->
    <div class="breadcrumb_section bg_gray page-title-mini">
        <!-- STRART CONTAINER -->
            <div class="row align-items-center">
                <div class="col-md-6">
                    <ol class="breadcrumb justify-content-md-start">
                        <li class="breadcrumb-item"><a href="{{url('/admin')}}">Admin</a></li>
                        <li class="breadcrumb-item active"><a href="{{url('/admin/user')}}">User</a></li>
                    </ol>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb justify-content-md-end">
                        <div class="btn-group">
                            <a href="{{route('product.create')}}" class="btn btn-sm btn-primary">Add Data</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--end breadcrumb-->

    <h6 class="mb-0 text-uppercase">Users</h6>
    <hr>
    <div class="card">
        <div class="card-body">
            <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                    <thead style="text-align: center">
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Role</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $i = 1; @endphp
                        @foreach ($users as $data)
                            @if ($loop->first)
                                <tr>
                                    <td style="text-align: center">{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->role == 1 ? 'Admin' : 'User' }}</td>
                                    <td class="center-align" align="center"><button class="btn btn-sm btn-danger" disabled>Can't Delete</button></td>
                                </tr>
                            @else
                                <tr>
                                    <td style="text-align: center">{{ $i++ }}</td>
                                    <td>{{ $data->name }}</td>
                                    <td>{{ $data->email }}</td>
                                    <td>{{ $data->role == 1 ? 'Admin' : 'User' }}</td>
                                    <td class="center-align" align="center">
                                        <div class="dropdown">
                                            <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
                                                data-bs-toggle="dropdown">
                                                <i class="bx bx-dots-vertical-rounded"></i>
                                            </button>
                                            <div class="dropdown-menu">
                                                <form action="{{ route('user.destroy', $data->id) }}" method="post">
                                                    @csrf
                                                    @method('DELETE')
                                                    <a class="dropdown-item" href="{{ route('user.edit', $data->id) }}"><i
                                                            class="bx bx-edit-alt me-1"></i> Edit</a>
                                                    <a class="dropdown-item"
                                                        href="{{ route('user.destroy', $data->id) }}"><i
                                                            class="bx bx-trash me-1"></i> Delete</a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="{{ asset('assets/plugins/datatable/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
@endpush
