@extends('layouts.admin')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <h1>All modul</h1>
                    </div>
                    <div class="col-lg-4">
                        <a href="{{ route('modul_admin.create') }}" class="btn btn-primary float-right"
                            style="border-radius: 8px;">
                            Create +
                        </a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 mt-4">
                        <div class="card border-0">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Modul Name</th>
                                                <th>Title</th>
                                                <th>Content</th>
                                                <th>Full</th>
                                                <th>Lks</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 15px;">
                                            @foreach ($moduls as $key => $modul)
                                                <tr class="align-middle">
                                                    <td> {{ ++$key }} </td>
                                                    <td>{{ $modul->name }}</td>
                                                    <td>{{ $modul->title }}</td>
                                                    <td>{{ $modul->content }}</td>
                                                    <td>{{ $modul->full_document }}</td>
                                                    <td>{{ $modul->lks_document }}</td>
                                                    <td>
                                                        <div class="d-flex gap-2">
                                                            <a href="#" class="btn btn-sm btn-warning text-white">
                                                                <i class="bx bx-edit"></i> Edit
                                                            </a>
                                                            <button class="btn btn-sm btn-light">
                                                                <i class="bx bx-trash"></i> Hapus
                                                            </button>
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
            </div>
        </div>
    </div>
@endsection
