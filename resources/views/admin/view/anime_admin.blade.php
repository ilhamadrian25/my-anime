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
    <!--=      Genre Area Start        =-->
    <!--=====================================-->
    <div class="row">
        <div class="col-lg-20 col-12 mx-auto">
            <div class="card card-body mt-4">
                <div class="row align-items-center justify-content-between">
                    <div class="col-auto my-2">
                        <a href="{{ route('detail.create') }}" class="btn btn-primary add-list"><i
                                class="fa-solid fa-plus me-3"></i>Anime</a>
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
                                    <table class="table table-flush" id="datatable-anime">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>No.</th>
                                                <th>Foto</th>
                                                <th>Nama</th>
                                                <th>Nama dalam bahasa inggris</th>
                                                <th>Season</th>
                                                <th>Type</th>
                                                <th>Studio</th>
                                                <th>Tanggal Rilis</th>
                                                <th>Status</th>
                                                {{-- <th>Genre</th> --}}
                                                <th>Musim</th>
                                                <th>Country</th>
                                                <th>Duration</th>
                                                <th>shinopsis</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($anime as $no => $hasil)
                                                <tr>
                                                    <th>{{ $no + 1 }}</th>
                                                    <td class="p-2">
                                                        <img width="80"
                                                            src="{{ asset('storage/anime/' . $hasil->foto) }}"
                                                            alt="">
                                                    </td>
                                                    <td>{{ $hasil->nama_jepang ?? '' }}</td>
                                                    <td>{{ $hasil->nama_inggris ?? '' }}</td>
                                                    <td>{{ $hasil->season_name->season ?? '' }}</td>
                                                    <td>{{ $hasil->type_name->type ?? '' }}</td>
                                                    <td>{{ $hasil->studio_name->studio ?? '' }}</td>
                                                    <td>{{ $hasil->tanggal ?? '' }}</td>
                                                    <td>{{ $hasil->status_name->status ?? '' }}</td>
                                                    {{-- <td>{{ $hasil->genre_name->genre ?? '' }}</td> --}}
                                                    <td>{{ $hasil->musim_name->musim ?? '' }}</td>
                                                    <td>{{ $hasil->country_name->country ?? '' }}</td>
                                                    <td>{{ $hasil->durasi ?? '' }}</td>
                                                    <td>{{ $hasil->sinopsis ?? '' }}</td>
                                                    <td>
                                                        <form action="{{ route('detail.destroy', $hasil->id) }}"
                                                            class="delete-data" method="POST">
                                                            @csrf
                                                            @method('DELETE')
                                                            <div class="d-flex gap-2">
                                                                <a href="{{ route('episode.show', $hasil->id) }}"
                                                                    class="btn btn-outline-success btn-sm mx-1"><i
                                                                        class="fas fa-eye"></i></a>
                                                                <a href="{{ route('detail.edit', $hasil->id) }}"
                                                                    class="btn btn-outline-primary "><i
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
@endsection
