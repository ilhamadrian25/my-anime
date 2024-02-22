@extends('layouts.app1')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    {{-- <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="home.html">Anime</a></li>
                    <li><a class="active">Profile</a></li>
                </ul>
            </div>
        </div>
    </section> --}}
    <!--=====================================-->
    <!--=      Season Area Start        =-->
    <!--=====================================-->
    <div class="row">
        <div class="col-lg-20 col-12 mx-auto">
            <div class="card card-body mt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto my-4">
                        <button type="button" class="btn btn-primary add-list " data-bs-toggle="modal"
                            data-bs-target="#modalseason"><i class="fa-solid fa-plus me-3"></i>Season</button>
                            <p class="text-sm mb-0"><b>Note</b>: </p>
                    </div>
                </div>
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                        <div class="col-lg-12">
                            @if ($message = session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text">{{ $message }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if ($message = session('Gagal'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <span class="alert-icon"><i class="ni ni-like-2"></i></span>
                                    <span class="alert-text">{{ $message }}</span>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <table class="table table-flush" id="datatable-prasarana">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No.</th>
                                                <th>Season</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($season as $no => $hasil)
                                                <tr>
                                                    <th>{{ $no + 1 }}</th>
                                                    <td>{{ $hasil->season ?? '' }}</td>
                                                    <td>
                                                        <form action="{{ route('season.destroy', $hasil->id) }}"
                                                            class="delete-data" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="d-flex gap-2">
                                                                <a href="{{ route('season.edit', $hasil->id) }}" class="btn btn-outline-primary "><i
                                                                        class="fas fa-edit"></i></a>
                                                                <button type="submit"
                                                                    class="btn btn-outline-danger btn-sm">
                                                                    <i class="far fa-trash-alt"></i>
                                                                </button>
                                                            </div>
                                                        </form>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal-popup area start  -->
    <div class="modal fade" id="modalseason" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalseason">Tambah Season</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{ route('season.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="mb-3">
                            <label for="season" class="form-label">Season</label>
                            <input type="text" class="form-control" name="season" id="season"
                                placeholder="masukan season">
                        </div>
                        <button type="submit" class="btn btn-primary float-end">Simpan</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
    <!-- modal-popup area end  -->
@endsection
