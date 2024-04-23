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
                        <a href="{{route('modul_admin.create')}}" class="btn btn-primary float-right">
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
                                                <th>Deskripsi</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody style="font-size: 15px;">
                                            <tr class="align-middle">
                                                <td>1</td>
                                                <td>Kuis Matematika Dasar</td>
                                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
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
                                            <tr class="align-middle">
                                                <td>2</td>
                                                <td>Kuis Sejarah Dasar</td>
                                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
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
                                            <tr class="align-middle">
                                                <td>3</td>
                                                <td>Kuis Bahasa Indonesia Dasar</td>
                                                <td>Lorem ipsum dolor sit, amet consectetur adipisicing elit.</td>
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
