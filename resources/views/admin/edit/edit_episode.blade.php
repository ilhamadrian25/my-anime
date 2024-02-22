@extends('layouts.app1')
@section('content')

@foreach ($errors->all() as $error)
        <div class="alert alert-danger mb-2">{{ $error }}</div>
 @endforeach
    <form action="{{ route('episode.update', $episode->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Patch')
        <div class="row">
            <div class="col-lg-9 col-12 mx-auto">
                <div class="card card-body mt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-1">
                            <h6 class="mb-2">Edit Season</h6>
                            <p class="text-sm mb-0"><b>Note</b>: Halaman edit episode diubah menjadi edit season</p>
                        </div>
                        <div class="col-auto my-4">
                            <a href="{{ route('episode.index') }}" class="btn btn-primary add-list"><i
                                    class="fa fa-table me-3"></i>Season</a>
                        </div>
                    </div>
                    <hr class="horizontal dark my-3">
                    <label for="episode" class="form-label">Season</label>
                    <input type="text" class="form-control" id="episode" name="episode" value="{{ $episode->episode }}">
                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" name="button" class="btn btn-light m-0"><a href="{{ route('episode.index') }}">Batal</button>
                        <button type="submit" name="button" class="btn bg-gradient-primary m-0 ms-2">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection