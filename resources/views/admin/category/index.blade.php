@extends('layouts.admin')
@section('styles')
<link href="{{asset('assets/plugins/datatable/css/dataTables.bootstrap5.min.css')}}" rel="stylesheet" />
@endsection

@section('content')
<!--breadcrumb-->
<div class="breadcrumb_section bg_gray page-title-mini">
    <!-- STRART CONTAINER -->
        <div class="row align-items-center">
            <div class="col-md-6">
                <ol class="breadcrumb justify-content-md-start">
                    <li class="breadcrumb-item"><a href="{{url('/admin')}}">Admin</a></li>
                    <li class="breadcrumb-item active"><a href="{{url('/admin/category')}}">Category</a></li>
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

<h6 class="mb-0 text-uppercase">Category</h6>
<hr>
<div class="row">
    @include('admin.category.form')
    <div class="col-md-8">
        <h4 class="py-2 mb-2"><span class="text-muted fw-light"> </span> List Category Product</h4>
        <div class="card mb-4">

            <div class="card-body">
                <div class="card-datatable table-responsive pt-0">
                    <table class="datatables-basic table border-top" id="example">
                        <thead>
                            <tr class="text-nowrap">
                                <th>No</th>
                                <th>Category Name</th>
                                <th>Slug</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody class="table-border-bottom-0">
                            @php $no = 1; @endphp
                            @foreach ($categories as $data)
                            <tr class="{{ $no % 2 == 1 ? 'table-light' : 'table-active' }}">
                                <th scope="row">{{$no++}}</th>
                                <td>{{$data->name}}</td>
                                <td>{{$data->slug}}</td>
                                <td>
                                    <div class="dropdown">
                                        <form action="{{route('category.destroy',$data->id)}}" method="POST">
                                            @method('DELETE')
                                            @csrf
                                            <button type="button"
                                                class="btn btn-sm rounded-pill btn-outline-secondary dropdown-toggle"
                                                data-bs-toggle="dropdown" aria-expanded="false"> Choose
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                <a class="dropdown-item"
                                                    href="{{route('category.edit',$data->id)}}"><i
                                                        class="bx bx-edit-alt me-1"></i>
                                                    Edit</a>
                                                <a href="{{route('category.destroy', $data->id)}}" data-confirm-delete="true" class="dropdown-item"
                                                    type="submit"><i class="bx bx-trash me-1"></i> Delete</a>
                                            </div>
                                        </form>
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
</div>
@endsection

@push('scripts')
<script src="{{asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatable/js/dataTables.bootstrap5.min.js')}}"></script>
<script>
    $(document).ready(function() {
		$('#example').DataTable();
	});
</script>

@endpush