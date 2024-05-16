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
                                <form id="modulForm" method="post" enctype="multipart/form-data" class="form-horizontal">
                                    @csrf
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="name" class=" form-control-label">Modul Name</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="name" name="name" placeholder="Text" class="form-control" value="{{ old('name') }}" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="title" class="form-control-label">Title</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="title" name="title" placeholder="Text" class="form-control" value="{{ old('title') }}" required>
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
                                            <input type="file" id="full_document" name="full_document" class="form-control-file" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="lks_document" class=" form-control-label">Kerja LKS</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="text" id="lks_document" name="lks_document" placeholder="Link" class="form-control" value="{{ old('lks_document') }}" required>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col col-md-3">
                                            <label for="foto" class=" form-control-label">Foto</label>
                                        </div>
                                        <div class="col-12 col-md-9">
                                            <input type="file" id="foto" name="foto" class="form-control-file" required>
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
                                <div id="progressWrapper" style="display:none; margin-top: 20px;">
                                    <div id="progressBar" style="width:0%; height:20px; background-color:blue;"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Inline JavaScript -->
    <script>
        document.getElementById('modulForm').addEventListener('submit', async function(e) {
            e.preventDefault();

            const formData = new FormData(this);
            const progressWrapper = document.getElementById('progressWrapper');
            const progressBar = document.getElementById('progressBar');

            progressWrapper.style.display = 'block';

            try {
                const response = await axios.post('{{ route('modul_admin.store') }}', formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data'
                    },
                    onUploadProgress: function(progressEvent) {
                        let percentCompleted = Math.round((progressEvent.loaded * 100) / progressEvent.total);
                        progressBar.style.width = percentCompleted + '%';
                    }
                });

                if (response.status === 200) {
                    window.location.href = '{{ route('modul_admin.index') }}';
                }
            } catch (error) {
                console.error('Error uploading file:', error);
            }
        });
    </script>
@endsection
