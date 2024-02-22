@extends('layouts.app1')
@section('content')

@foreach ($errors->all() as $error)
        <div class="alert alert-danger mb-2">{{ $error }}</div>
 @endforeach
    <form action="{{ route('status.update', $status->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('Patch')
        <div class="row">
            <div class="col-lg-9 col-12 mx-auto">
                <div class="card card-body mt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-1">
                            <h6 class="mb-2">Edit Status</h6>
                            <p class="text-sm mb-0"><b>Note</b>: halama ini telah direlasikan , harap tinjau kembali</p>
                        </div>
                        <div class="col-auto my-4">
                            <a href="{{ route('status.index') }}" class="btn btn-primary add-list"><i
                                    class="fa fa-table me-3"></i>Status</a>
                        </div>
                    </div>
                    <hr class="horizontal dark my-3">
                    <label for="status" class="form-label">Status</label>
                    <input type="text" class="form-control" id="status" name="status" value="{{ $status->status }}">
                    <div class="d-flex justify-content-end mt-4">
                        <button type="button" name="button" class="btn btn-light m-0"><a href="{{ route('status.index') }}">Batal</button>
                        <button type="submit" name="button" class="btn bg-gradient-primary m-0 ms-2">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>


@endsection