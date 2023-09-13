@extends('Admin.app')
@section('main')
<div class="page-wrapper">
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">Update Artikel Baru</h3>
                        <form action="{{ route('updateApplication', $artikel->id) }}" method="POST" enctype="multipart/form-data" class="mt-3">
                            @csrf
                            @method('PUT')
                            <div class="form-body">
                                <label class="form-label">Title</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="title" value="{{ $artikel->title }}"
                                                placeholder="Title">
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Description</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <textarea type="text" class="form-control" name="description"
                                                placeholder="Description">{{ $artikel->description }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <label class="form-label">Isi</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <textarea type="text" class="form-control" name="isi"
                                                placeholder="Isi">{{ $artikel->isi }}</textarea>
                                        </div>
                                    </div>
                                </div>
                                {{-- //USE THE DATE THING FOR FORMS --}}
                                <label class="form-label">Tanggal</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="text" class="form-control" name="tanggal" value="{{ $artikel->tanggal }}"
                                                placeholder="Tanggal">
                                        </div>
                                    </div>
                                </div>
                                {{-- //USE THE IMAGE THING FOR FORMS --}}
                                <label class="form-label">Image</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group mb-3">
                                            <input type="file" class="form-control" name="image" value="{{ $artikel->image }}"
                                                placeholder="Image">
                                            <img src="/images/{{ $artikel->image }}" width="300px">
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