@extends('Admin.app')
@section('content')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-7 align-self-center">
                <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">User Datatable</h3>
                <div class="d-flex align-items-center">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb m-0 p-0">
                            <li class="breadcrumb-item"><a href="index.html" class="text-muted">Home</a></li>
                            <li class="breadcrumb-item text-muted active" aria-current="page">Data User</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="col-5 align-self-center">
                <div class="customize-input float-end">
                    <a href="{{ route('createUser') }}" class="btn btn-rounded btn-primary pl-3 pr-3">Add Data User</a>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12">
                @if( Session::get('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                    {{ Session::get('success') }}
                    </div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                {{ Session::forget('success') }}
                @if(Session::get('error'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <div class="alert-body">
                        {{ Session::get('error') }}
                    </div>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="myTable" class="table table-striped table-bordered text-nowrap table-hover">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pemohon</th>
                                        <th>Nama Perangkat</th>
                                        <th>Merek / Brand</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1 ?>
                                    <?php foreach ($user as $item) : ?>
                                    <tr>
                                        {{-- <td>{{ ++$i }}</td> --}}
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->localrepName }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->brand }}</td>
                                        <td class="btn btn-primary" >{{ $item->status }}</td>
                                        <td>
                                            <form action="{{ route('destroyUser',$item->id) }}" method="POST" style="display: flex; justify-content:center">
                                                <a class="btn btn-primary" href="{{ route('editUser', $item->id) }}">Edit</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" style="width: 100px; height: 40px; filter: drop-shadow(0px 4px 20px rgba(255, 255, 255, 0));"
                                                >Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                    <?php endforeach ?>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nama Pemohon</th>
                                        <th>Nama Perangkat</th>
                                        <th>Merek / Brand</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')

<script>
    new DataTable('#myTable', {
    order: [[3, 'desc']]
    });
</script>

@endsection