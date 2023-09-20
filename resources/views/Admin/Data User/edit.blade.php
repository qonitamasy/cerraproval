@extends('Admin.app')
@section('main')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12">
                <h2 class="card-title mb-4">Edit Data User Details</h2>
                <div class="card">
                    <div class="card-body">
                        <form action="{{ route('updateUser', $user->id) }}" method="POST" enctype="multipart/form-data" class="mt-2">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <label class="form-label">Nama Perangkat</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="name" value="{{ $user->name }}"
                                                placeholder="Name">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Brand / Merek</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="brand" value="{{ $user->brand }}"
                                                placeholder="brand">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Model Type</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="modeltype" value="{{ $user->modeltype }}"
                                                placeholder="modeltype">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Pemasaran</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="pemasaran" value="{{ $user->pemasaran }}"
                                                placeholder="Pemasaran">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Pembuat</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="pembuat" value="{{ $user->pembuat }}"
                                                placeholder="Pembuat">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Alamat</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="alamat" value="{{ $user->alamat }}"
                                                placeholder="Alamat">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Local Rep Name</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="localrepName" value="{{ $user->localrepName }}"
                                                placeholder="Local Rep Name">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Local Rep Alamat</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="localrepAlamat" value="{{ $user->localrepAlamat }}"
                                                placeholder="Local Rep Alamat">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-actions mt-5">
                                <div class="float-end">
                                    <button type="submit" class="btn btn-info">Submit</button>
                                    <button type="reset" class="btn btn-dark">Reset</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection