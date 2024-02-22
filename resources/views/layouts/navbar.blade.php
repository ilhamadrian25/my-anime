<nav class="navbar navbar-main navbar-expand-lg  px-0 mx-4 shadow-none border-radius-xl z-index-sticky " id="navbarBlur"
    data-scroll="false">
    <div class="container-fluid py-1 px-3">

        <div class="sidenav-toggler sidenav-toggler-inner d-xl-block d-none ">
            <a href="javascript:;" class="nav-link p-0">
                {{-- <div class="sidenav-toggler-inner">
                    <i class="sidenav-toggler-line bg-dark"></i>
                    <i class="sidenav-toggler-line bg-dark"></i>
                    <i class="sidenav-toggler-line bg-dark"></i>
                </div> --}}
            </a>
        </div>
        <div class="collapse navbar-collapse mt-sm-0 mt-2 me-md-0 me-sm-4" id="navbar">
            <div class="ms-md-auto pe-md-3 d-flex align-items-center">
                <div class="input-group">
                    {{-- <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                    <input type="text" class="form-control" placeholder="Type here..."> --}}
                </div>
            </div>
            <ul class="navbar-nav  justify-content-end">
                {{-- <li class="nav-item d-flex align-items-center">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link text-white font-weight-bold px-0 border-0 bg-transparent"
                            target="_blank">
                            <i class="fa fa-user me-sm-1"></i>
                            <span class="d-sm-inline d-none">Sign Out</span>
                        </button>
                    </form>
                </li> --}}
                <li class="nav-item d-xl-none ps-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-gray p-0" id="iconNavbarSidenav">
                        <div class="sidenav-toggler-inner">
                            <i class="sidenav-toggler-line bg-gray"></i>
                            <i class="sidenav-toggler-line bg-gray"></i>
                            <i class="sidenav-toggler-line bg-gray"></i>
                        </div>
                    </a>
                </li>
                <li class="nav-item px-3 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0">
                        {{-- <i class="fa fa-cog fixed-plugin-button-nav cursor-pointer"></i> --}}
                    </a>
                </li>
                <li class="nav-item dropdown pe-2 d-flex align-items-center">
                    <a href="javascript:;" class="nav-link text-white p-0" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa fa-cog cursor-pointer"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end px-2 py-3 me-sm-n4" aria-labelledby="dropdownMenuButton">
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <i class="fa fa-sign-out me-3" aria-hidden="true"></i>
                                    </div>
                                    <div class="d-flex flex-column justify-content-center">
                                        <form action="#" method="POST">
                                            @csrf
                                            <button type="submit"
                                                class="nav-link text-dark font-weight-bold px-0 border-0 bg-transparent"
                                                target="_blank">
                                                <h6 class="text-sm font-weight-normal-dark mb-1">
                                                    <span class="font-weight-bold">Sign Out</span>
                                                </h6>
                                            </button>
                                        </form>
                                    </div>
                                </div>

                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <i class="fa fa-refresh me-3" aria-hidden="true"></i>
                                    </div>
                                    <h6 class="text-sm font-weight-normal-dark mb-1">
                                        <span class="font-weight-bold" data-bs-toggle="modal"
                                            data-bs-target="#modal1">Ganti Kata Sandi</span>
                                    </h6>
                                </div>
                            </a>
                        </li>
                        <li class="mb-2">
                            <a class="dropdown-item border-radius-md" href="javascript:;">
                                <div class="d-flex py-1">
                                    <div class="my-auto">
                                        <i class="fa-solid fa-circle-info me-3" aria-hidden="true"></i>
                                    </div>
                                    <h6 class="text-sm font-weight-normal-dark mb-1">
                                        <span class="font-weight-bold" data-bs-toggle="modal"
                                            data-bs-target="#adit">Petunjuk Penggunaan</span>
                                    </h6>
                                </div>
                            </a>
                        </li>
                       
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal1">Ganti Sandi<i></i></h5>
                <button type="button" class="close" data-bs-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger mb-2">{{ $error }}</div>
            @endforeach
            <div class="modal-body">
                @if (session()->has('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif
                @if (session()->has('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif
                <form action="#" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('Patch')
                    <div class="mb-3">
                        <label for="email" class="form-label">Email baru</label>
                        <input type="email" class="form-control" name="email" id="email">
                        <label for="sandi" class="form-label">Sandi Lama</label>
                        <input type="password" class="form-control" name="sandi" id="sandi">
                        <label for="sandi_baru" class="form-label">Sandi Baru</label>
                        <input type="password" class="form-control" name="sandi_baru" id="category">
                    </div>
                    <button type="submit" class="btn btn-primary float-end">Simpan</button>
                </form>

            </div>
        </div>
    </div>
</div>

<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="adit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cara Penggunaan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>1. Harap untuk mengisi pertama kali category pengadaan dan category kerusakan pada halaman table category!.</p>
          <p>2. Setelah mengisi category, dilanjutkan dengan mengisi tabel tanah, table bangunan, dan table prasarana sesuai urutan yg disebut.</p>
          <p>3. Setelah mengisi semuanya dilanjutkan dengan mengisi sarana/barang pada halaman table sarana.</p>
          <p>4. Untuk deskripsi, hanya deskripsi pada halaman tambah dan edit sarana yg wajib disini.</p>
          <p>5. Jika mengedit suatu data, data tersebut akan berpengaruh pada data lainnya yg digunakan, jadi harap teliti!.</p>
          <p>6. Pada halaman sarana terdapat halaman detail sarana/barang yang ditandai dengan icon mata, disana anda dapat mengisi pengadaan dan pelaporan sesuai nama sarana yang diinput.</p>
          <p>7. Jika menghapus data pada table sarana, data data yg ada didalamnya akan ikut terhapus seperti pengadaan sarana dan pelaporan sarana.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@push('script')
    <script src="{{ asset('assets/js/plugins/datatables.js') }}"></script>
    <script>
        new simpleDatatables.DataTable("#datatable-category");
    </script>
@endpush
