
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
                    <li class="breadcrumb-item active"><a href="{{url('/admin/product')}}">Product</a></li>
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
    <!-- END CONTAINER-->
<!--end breadcrumb-->

<h6 class="mb-0 text-uppercase">Product</h6>
<hr>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered" style="width:100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Stok</th>
                        <th>Category</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php $i = 1; @endphp
                    @foreach ($product as $data)
                    <tr>
                        <td>{{$i++}}</td>
                        <td>{{$data->name}}</td>
                        <td>{{$data->price}}</td>
                        <td>{{$data->stok}}</td>
                        <td>{{$data->category->name}}</td>
                        <td>
                            <form action="{{route('product.destroy',$data->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <button type="button"
                                    class="btn btn-sm rounded-pill btn-outline-secondary dropdown-toggle"
                                    data-bs-toggle="dropdown" aria-expanded="false"> Choose
                                </button>
                                <div class="dropdown-menu" style="">
                                    <a class="dropdown-item" href="{{route('product.show',$data->id)}}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Show</a>
                                    <a class="dropdown-item" href="{{route('product.edit',$data->id)}}"><i
                                            class="bx bx-edit-alt me-1"></i>
                                        Edit</a>
                                    <a href="{{ route('product.destroy', $data->id) }}" data-confirm-delete="true"
                                        class="dropdown-item"><i class="bx bx-trash me-1"></i>
                                        Delete</a>
                                </div>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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
