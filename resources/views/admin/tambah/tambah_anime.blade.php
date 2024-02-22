@extends('layouts.app1')
@section('content')
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger mb-2">{{ $error }}</div>
    @endforeach
    <form action="{{ route('detail.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-lg-9 col-12 mx-auto">
                <div class="card card-body mt-4">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto mt-1">
                            <h4 class="mb-3"> Tambahkan Anime Baru </h4>
                            <p class="text-sm mb-1"><b>Note : </b> Masukan luas tanah dengan benar! </p>

                        </div>
                        <hr class="horizontal dark mb-2">
                        <label class="mt-4 form-label">Masukan Foto Anime</label>
                        <input class="form-control form-control-solid mb-2 @error('product_image') is-invalid @enderror"
                            type="file" id="foto" name="foto" accept="image/*" onchange="previewImage();">
                        <!-- Form Group (type of product unit) -->

                        {{-- nama_jepang --}}
                        <hr class="horizontal dark mb-2">
                        <label for="nama_jepang" class="form-label">Nama Jepang</label>
                        <input type="text" class="form-control" id="nama_jepang" name="nama_jepang" autocomplete="off"
                            placeholder="masukan nama_jepang dengan benar!">
                        {{-- end nama_jepang --}}

                        {{-- nama_inggris --}}
                        <hr class="horizontal dark mb-2">
                        <label for="nama_inggris" class="form-label">Nama Inggris</label>
                        <input type="text" class="form-control" id="nama_inggris" name="nama_inggris" autocomplete="off"
                            placeholder="masukan nama_inggris dengan benar!">
                        {{-- end nama_inggris --}}

                        {{-- season --}}
                        <div class="row gx-3 mb-3">
                            <!-- Form Group (type of product type) -->
                            <hr class="horizontal dark mb-2">
                            <div class="col-md-6">
                                <label class="small mb-2" for="season_id">Season </label>
                                <select class="form-select form-control-solid @error('season_id') is-invalid @enderror"
                                    id="season" name="season">
                                    <option selected="" disabled="">Pilih Season:</option>
                                    @foreach ($season as $season)
                                        <option value="{{ $season->id }}"
                                            @if (old('season_id') == $season->id) selected="selected" @endif>
                                            {{ $season->season }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('season_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Form Group (season of product unit) -->
                        </div>
                        {{-- end season --}}

                        <div class="row gx-3 mb-3">
                            <!-- Form Group (type of product type) -->
                            <hr class="horizontal dark mb-2">
                            <div class="col-md-6">
                                <label class="small mb-2" for="type_id">Type </label>
                                <select class="form-select form-control-solid @error('type_id') is-invalid @enderror"
                                    id="type" name="type">
                                    <option selected="" disabled="">Pilih Type:</option>
                                    @foreach ($type as $type)
                                        <option value="{{ $type->id }}"
                                            @if (old('type_id') == $type->id) selected="selected" @endif>
                                            {{ $type->type }}
                                        </option>
                                    @endforeach
                                </select>
                                @error('type_id')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <!-- Form Group (type of product unit) -->
                        </div>
                    </div>


                    <div class="row gx-3 mb-3">
                        <!-- Form Group (type of product type) -->
                        <hr class="horizontal dark mb-2">
                        <div class="col-md-6">
                            <label class="small mb-2" for="studio_id">Studio </label>
                            <select class="form-select form-control-solid @error('studio_id') is-invalid @enderror"
                                id="studio" name="studio">
                                <option selected="" disabled="">Pilih Studio:</option>
                                @foreach ($studio as $studio)
                                    <option value="{{ $studio->id }}"
                                        @if (old('studio_id') == $studio->id) selected="selected" @endif>
                                        {{ $studio->studio }}
                                    </option>
                                @endforeach
                            </select>
                            @error('studio_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Form Group (studio of product unit) -->
                    </div>

                    {{-- tanggal --}}
                    <hr class="horizontal dark mb-2">
                    <label for="tanggal" class="form-label">Tanggal Rilis</label>
                    <p class="form-text text-muted text-xs ms-1">
                        Contoh : Jan 15, 2023
                    </p>
                    <input type="text" class="form-control" id="tanggal" name="tanggal" autocomplete="off"
                        placeholder="masukan tanggal dengan benar!">
                    {{-- end tanggal --}}

                    <!-- Form Group (type of  status) -->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (type of  status) -->
                        <hr class="horizontal dark mb-2">
                        <div class="col-md-6">
                            <label class="small mb-2" for="status_id">Status </label>
                            <select class="form-select form-control-solid @error('status_id') is-invalid @enderror"
                                id="status" name="status">
                                <option selected="" disabled="">Pilih Status:</option>
                                @foreach ($status as $status)
                                    <option value="{{ $status->id }}"
                                        @if (old('status_id') == $status->id) selected="selected" @endif>
                                        {{ $status->status }}
                                    </option>
                                @endforeach
                            </select>
                            @error('status_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Form Group (type of product unit) -->
                    </div>
                    {{-- end --}}

                    <!-- Form Group (type of  genre) -->
                    {{-- <div class="row gx-3 mb-3">
                        <hr class="horizontal dark mb-2">
                        <div class="col-md-6">
                            <label class="small mb-2" for="genre_id">Genre </label>
                            <select class="form-select form-control-solid @error('genre_id') is-invalid @enderror"
                                id="genre" name="genre">
                                <option selected="" disabled="">Pilih Genre:</option>
                                @foreach ($genre as $genre)
                                    <option value="{{ $genre->id }}"
                                        @if (old('genre_id') == $genre->id) selected="selected" @endif>
                                        {{ $genre->genre }}
                                    </option>
                                @endforeach
                            </select>
                            @error('genre_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div> --}}
                    {{-- end --}}

                    <!-- Form Group (type of  country) -->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (type of  country) -->
                        <hr class="horizontal dark mb-2">
                        <div class="col-md-6">
                            <label class="small mb-2" for="country_id">Country </label>
                            <select class="form-select form-control-solid @error('country_id') is-invalid @enderror"
                                id="country" name="country">
                                <option selected="" disabled="">Pilih Country:</option>
                                @foreach ($country as $country)
                                    <option value="{{ $country->id }}"
                                        @if (old('country_id') == $country->id) selected="selected" @endif>
                                        {{ $country->country }}
                                    </option>
                                @endforeach
                            </select>
                            @error('country_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Form Group (type of product unit) -->
                    </div>
                    {{-- end --}}

                    <!-- Form Group (type of  musim) -->
                    <div class="row gx-3 mb-3">
                        <!-- Form Group (type of  musim) -->
                        <hr class="horizontal dark mb-2">
                        <div class="col-md-6">
                            <label class="small mb-2" for="musim_id">Musim </label>
                            <select class="form-select form-control-solid @error('musim_id') is-invalid @enderror"
                                id="musim" name="musim">
                                <option selected="" disabled="">Pilih Musim:</option>
                                @foreach ($musim as $musim)
                                    <option value="{{ $musim->id }}"
                                        @if (old('musim_id') == $musim->id) selected="selected" @endif>
                                        {{ $musim->musim }}
                                    </option>
                                @endforeach
                            </select>
                            @error('musim_id')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <!-- Form Group (type of product unit) -->
                    </div>
                    {{-- end --}}

                    {{-- duration --}}
                    <hr class="horizontal dark mb-2">
                    <label for="durasi" class="form-label">Durasi</label>
                    <p class="form-text text-muted text-xs ms-1">
                        Contoh : 24 min / 1 hours 24 min
                    </p>
                    <input type="text" class="form-control" id="durasi" name="durasi" autocomplete="off"
                        placeholder="masukan durasi dengan benar!">
                    {{-- end durasi --}}

                    <label class="mt-4 form-label">Project Tags</label>
                    <select class="form-control" name="choices-multiple-remove-button"
                        id="choices-multiple-remove-button" multiple>
                        <option value="Choice 1" selected>Choice 1</option>
                        <option value="Choice 2">Choice 2</option>
                        <option value="Choice 3">Choice 3</option>
                        <option value="Choice 4">Choice 4</option>
                    </select>

                        {{-- sinopsis --}}
                        <label class="mt-4">Sinopsis</label>
                        <p class="form-text text-muted text-xs ms-1">
                            Tambahkan sinopsis yang dibutuhkan
                        </p>
                        <div>
                            <textarea class="summernote-container form-control" rows="10" maxlength="200" name="sinopsis" id="editor"></textarea>

                            <p><br></p>
                        </div>

                        <div class="d-flex justify-content-end mt-4">
                            <button type="button" name="button" class="btn btn-light m-0"><a
                                    href="{{ route('detail.index') }}">Batal</button>
                            <button type="submit" name="button"
                                class="btn bg-gradient-primary m-0 ms-2">Simpan</button>
                        </div>
                </div>
            </div>
        </div>
    </form>
@endsection
@push('scripts')
    <script src="{{ asset('assets/js/plugins/choices.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/flatpickr.min.js') }}"></script>
    <script src="{{ asset('assets/js/plugins/dropzone.min.js') }}"></script>
    <script src="https://cdn.tiny.cloud/1/lgw3uczikd5jv8h45lbadfu5lm3lqze9x07xyk5gykf9ncpv/tinymce/5/tinymce.min.js"
        referrerpolicy="origin"></script>
    <script>
        if (document.getElementById('editor')) {
            tinymce.init({
                selector: '#editor'
            });
        }

        if (document.getElementById('choices-multiple-remove-button')) {
            var element = document.getElementById('choices-multiple-remove-button');
            const example = new Choices(element, {
                removeItemButton: true
            });

            example.setChoices(
                [{
                        value: 'One',
                        label: 'Label One',
                        disabled: true
                    },
                    {
                        value: 'Two',
                        label: 'Label Two',
                        selected: true
                    },
                    {
                        value: 'Three',
                        label: 'Label Three'
                    },
                ],
                'value',
                'label',
                false,
            );
        }

    </script>
@endpush
