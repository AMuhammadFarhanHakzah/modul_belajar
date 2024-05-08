@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <strong>Basic Form</strong> Elements
                            </div>
                            <div class="card-body card-block">
                                <form action="{{ route('modul_admin.store') }}" method="post" enctype="multipart/form-data"
                                    class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="name" class=" form-control-label">Modul Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="name" placeholder="Text"
                                                class="form-control" value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="title" class="form-control-label">Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="title" name="title" placeholder="Text"
                                                class="form-control" value="{{ old('title') }}" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="content" class=" form-control-label">Content</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <textarea name="content" id="content" rows="9" placeholder="Content..." class="form-control" required>{{ old('content') }}</textarea>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="full_document" class=" form-control-label">Full document</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="full_document" name="full_document"
                                                class="form-control-file" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="lks_document" class=" form-control-label">Kerja LKS</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="lks_document" name="lks_document" placeholder="Link"
                                                class="form-control" value="{{ old('lks_document') }}" required>
                                        </div>
                                    </div>

                                    {{-- <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="name" class=" form-control-label">Modul Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="name" placeholder="Text"
                                                class="form-control" value="{{ old('name') }}" required>
                                        </div>
                                    </div> --}}

                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="foto" class=" form-control-label">Foto</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="foto" name="foto"
                                                class="form-control-file" required>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary btn-sm">
                                            <i class="fa fa-dot-circle-o"></i> Submit
                                        </button>
                                        <button type="reset" class="btn btn-danger btn-sm">
                                            <i class="fa fa-ban"></i> Reset
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
