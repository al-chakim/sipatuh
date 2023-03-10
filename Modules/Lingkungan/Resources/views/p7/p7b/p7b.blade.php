@extends('lingkungan::layouts.datalingkungan')
@section('tittle')
    Lingkungan
@endsection
@section('content')
    <div class="app-content content ">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper container-xxl p-0">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-start mb-0">PLH</h2>
                            <div class="breadcrumb-wrapper">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a>
                                    </li>
                                    <li class="breadcrumb-item active">Pelaporan Lingkungan Hidup
                                    </li>
                                    <li class="breadcrumb-item active">Sertifikat Hasil Uji
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-end col-md-3 col-12 d-md-block d-none">
                    <div class="mb-1 breadcrumb-right">
                        <div class="col-12">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#addNewAddressModal">
                                Tambah
                            </button>
                        </div>
                    </div>
                </div>

            </div>
            <div class="content-body">

                <!-- add new address modal -->
                <div class="modal fade" id="addNewAddressModal" tabindex="-1" aria-labelledby="addNewAddressTitle"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header bg-transparent">
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body pb-5 px-sm-4 mx-50">
                                <h3 class="address-title text-center mb-1" id="addNewAddressTitle">Sertifikat Hasil Uji
                                </h3>
                                {{-- <div class="mb-1">
                                    <p><a href="https://docs.google.com/spreadsheets/d/17XhrOMURzm_DkvaM6_HjZGvZGtbEw6Q1/edit?usp=sharing&ouid=104644451334503581170&rtpof=true&sd=true"
                                            target="blank"><strong>Unduh Format Form SA PLB3 Disini</strong></a>
                                    </p>
                                </div> --}}
                                {{-- <p class="address-subtitle text-center mb-2 pb-75"></p> --}}

                                <form action="/Lingkungan/p7b" method="POST" enctype="multipart/form-data" id="addNewAddressForm"
                                    class="row gy-1 gx-2">
                                    @csrf
                                    <div class="col-12">
                                        <div class="row custom-options-checkable">
                                        </div>
                                    </div>

                                    {{-- <div class="col-12 col-md-12">
                                        <label class="form-label" for="jenis">Jenis Berkas</label>
                                        <select class="form-select" id="jenis" name="jenis" required>
                                            <option value="">-Pilih-</option>
                                            <option value="Inventarisasi DokLing & IL">Inventarisasi DokLing & IL</option>
                                            <option value="DokLing & IL">DokLing & IL</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Pilih Jenis</div>
                                    </div> --}}

                                    {{-- <div class="col-12 col-md-12">
                                        <label class="form-label" for="jenis">Jenis Dokumen</label>
                                        <select class="form-select" id="jenis" name="jenis">
                                            <option value="">-Pilih-</option>
                                            <option value="SA-Profile Perusahaan">SA-Profile Perusahaan</option>
                                            <option value="SA-Izin Lingkungan">SA-Izin Lingkungan</option>
                                        </select>
                                    </div> --}}

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="nomer_surat">Nomer Sertifikat</label>
                                        <input type="text" id="nomer_surat" name="nomer_surat" class="form-control"
                                            placeholder="Nomer Sertifikat" aria-label="Nomer Sertifikat"
                                            aria-describedby="nomer_surat" />
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="nomer_analisis">Nomer Analisis</label>
                                        <input type="text" id="nomer_analisis" name="nomer_analisis" class="form-control"
                                            placeholder="Nama Analisis" aria-label="Nama Analisis"
                                            aria-describedby="nomer_analisis" />
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="deskripsi">Deskripsi</label>
                                        <input type="text" id="deskripsi" name="deskripsi" class="form-control"
                                            placeholder="Deskripsi" aria-label="Deskripsi"
                                            aria-describedby="deskripsi" />
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="lokasi">Lokasi</label>
                                        <input type="text" id="lokasi" name="lokasi" class="form-control"
                                            placeholder="Lokasi" aria-label="Lokasi"
                                            aria-describedby="lokasi" />
                                    </div>

                                    <div class="col-12 col-md-12">
                                        <label class="form-label" for="divisi">Nama Unit</label>
                                        <select class="form-select" id="divisi" name="divisi">
                                            <option>-Pilih-</option>
                                            <option value="KANTOR INDUK">KANTOR INDUK</option>
                                            <option value="PT. PLN (Persero) UPDL BANJARBARU">PT. PLN (Persero) UPDL BANJARBARU</option>
                                            <option value="PT. PLN (Persero) UPDL BOGOR">PT. PLN (Persero) UPDL BOGOR</option>
                                            <option value="PT. PLN (Persero) UPDL JAKARTA">PT. PLN (Persero) UPDL JAKARTA</option>
                                            <option value="PT. PLN (Persero) UPDL MAKASAR">PT. PLN (Persero) UPDL MAKASAR</option>
                                            <option value="PT. PLN (Persero) UPDL PADANG">PT. PLN (Persero) UPDL PADANG</option>
                                            <option value="PT. PLN (Persero) UPDL PALEMBANG">PT. PLN (Persero) UPDL PALEMBANG</option>
                                            <option value="PT. PLN (Persero) UPDL PANDAAN">PT. PLN (Persero) UPDL PANDAAN</option>
                                            <option value="PT. PLN (Persero) UPDL SEMARANG">PT. PLN (Persero) UPDL SEMARANG</option>
                                            <option value="PT. PLN (Persero) UPDL SURALAYA">PT. PLN (Persero) UPDL SURALAYA</option>
                                            <option value="PT. PLN (Persero) UPDL TUNTUNGAN">PT. PLN (Persero) UPDL TUNTUNGAN</option>
                                        </select>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="wulan">Triwulan</label>
                                        <select class="form-select" id="wulan" name="wulan">
                                            <option value="">-Pilih-</option>
                                            <option value="TW I">TW I</option>
                                            <option value="TW II">TW II</option>
                                            <option value="TW III">TW III</option>
                                            <option value="TW IV">TW IV</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Pilih</div>
                                    </div>

                                    <div class="col-12 col-md-6">
                                        <label class="form-label" for="bulan">Bulan</label>
                                        <select class="form-select" id="bulan" name="bulan">
                                            <option value="">-Pilih-</option>
                                            <option value="Januari">Januari</option>
                                            <option value="Februari">Februari</option>
                                            <option value="Maret">Maret</option>
                                            <option value="April">April</option>
                                            <option value="Mei">Mei</option>
                                            <option value="Juni">Juni</option>
                                            <option value="Juli">Juli</option>
                                            <option value="Agustus">Agustus</option>
                                            <option value="September">September</option>
                                            <option value="Oktober">Oktober</option>
                                            <option value="November">November</option>
                                            <option value="Desember">Desember</option>
                                        </select>
                                        <div class="valid-feedback">Looks good!</div>
                                        <div class="invalid-feedback">Pilih Bulan</div>
                                    </div>

                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="tanggal_dibuat">Tanggal Dibuat</label>
                                        <input type="datetime-local" id="tanggal_dibuat" name="tanggal_dibuat"
                                            class="form-control" />
                                    </div>

                                    <div class="mb-1 col-md-12">
                                        {{-- <div class="mb-1"> --}}
                                            <label>Unggah Berkas</label>
                                            <input class="form-control" name="berkas" type="file" id="berkas"
                                                required>
                                        {{-- </div> --}}
                                    </div>

                                    {{-- <div class="col-12 col-md-6">
                                        <div class="mb-1">
                                            <label>Unggah Bukti</label>
                                            <input class="form-control" name="foto" type="file"
                                                id="foto" required>
                                        </div>
                                    </div> --}}

                                    {{-- <div class="col-xl-12 col-md-6 col-12">
                                        <div class="mb-1">
                                            <label for="keterangan" class="form-label">Keterangan</label>
                                            <input class="form-control" name="keterangan" type="text"
                                                id="keterangan">
                                        </div>
                                    </div> --}}

                                    <div class="mb-1 col-md-12">
                                        <label class="form-label" for="keterangan">Keterangan</label>
                                        <input type="text" id="keterangan" name="keterangan" class="form-control"
                                            placeholder="Keterangan" aria-label="Keterangan"
                                            aria-describedby="keterangan" />
                                    </div>

                                    {{-- <section id="form-control-repeater">
                                        <div class="invoice-repeater">
                                            <div data-repeater-list="point1doc">
                                                <div data-repeater-item>
                                                    <div class="row d-flex align-items-end">
                                                        <div class="col-xl-6 col-md-6 col-12">
                                                            <div class="mb-1">
                                                                <label>Unggah Berkas</label>
                                                                <input class="form-control" name="berkas" type="file"
                                                                    id="berkas" required>
                                                            </div>
                                                        </div>
                                                        <div class="col-xl-4 col-md-6 col-12">
                                                            <div class="mb-1">
                                                                <label for="keterangan"
                                                                    class="form-label">Keterangan</label>
                                                                <input class="form-control" name="keterangan"
                                                                    type="text" id="keterangan">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-2 col-12 mb-41">
                                                            <div class="mb-1">
                                                                <button class="btn btn-outline-danger text-nowrap px-1"
                                                                    data-repeater-delete type="button">
                                                                    <i data-feather="x" class="me-25"></i>
                                                                    <span>Hapus</span>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="mb-1">
                                                        <button class="btn btn-icon btn-primary" type="button"
                                                            data-repeater-create>
                                                            <i data-feather="plus" class="me-25"></i>
                                                            <span>Tambah</span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </section> --}}

                                    <div class="col-12 text-center">
                                        <button type="submit" class="btn btn-primary me-1 mt-2" id="type-update"
                                        onclick="return confirm('Apakah anda yakin ingin menginput data?')">Submit</button>
                                        <button type="reset" class="btn btn-outline-secondary mt-2"
                                            data-bs-dismiss="modal" aria-label="Close">
                                            Discard
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end new form pop up -->

            </div>

            <!-- Basic table -->
            <section id="basic-datatable">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <table class="datatables-basic table">
                                <thead>
                                    <tr>
                                        <th></th>
                                        <th class="text-center">No</th>
                                        <th class="text-center">No. Sertifikat</th>
                                        <th class="text-center">No. Analisis</th>
                                        <th class="text-center">Deskripsi</th>
                                        <th class="text-center">Lokasi</th>
                                        <th class="text-center" >Triwulan</th>
                                        {{-- <th class="text-center">Bukti</th> --}}
                                        <th class="text-center" >Status</th>
                                        <th class="text-center">Catatan</th>
                                        <th class="text-center">Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($p7bs as $p7b)
                                        <tr>
                                            <td></td>
                                            <td class="text-center">{{ $loop->iteration }}</td>
                                            <td class="text-center">{{ $p7b->nomer_surat }}</td>
                                            <td class="text-center">{{ $p7b->nomer_analisis }}</td>
                                            <td class="text-center">{{ $p7b->deskripsi }}</td>
                                            <td class="text-center">{{ $p7b->lokasi }}</td>
                                            <td class="text-center">{{ $p7b->wulan }}</td>
                                            {{-- <td class="text-center">
                                                <a href="{{ asset('storage/' . $p7b->berkas) }}" target="blank"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ asset('storage/' . $p7b->foto) }}" target="blank"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                            </td> --}}
                                            {{-- <td class="text-center">{{ $p7b->bulan }}</td> --}}
                                            {{-- <td class="text-center">{{ $p7b->tanggal_dibuat }}</td> --}}
                                            <td class="text-center">
                                                @if ($p7b->status == 'diajukan')
                                                    <span class="badge rounded-pill  badge-light-info">Diajukan</span>
                                                @elseif ($p7b->status == 'disetujui')
                                                    <span class="badge rounded-pill  badge-light-success">Disetujui</span>
                                                @elseif ($p7b->status == 'direvisi')
                                                    <span class="badge rounded-pill  badge-light-warning">Revisi</span>
                                                @elseif ($p7b->status == 'ditindak')
                                                    <span class="badge rounded-pill  badge-light-primary">Tindak Lanjut</span>
                                                @elseif ($p7b->status == 'ditolak')
                                                    <span class="badge rounded-pill  badge-light-danger">Ditolak</span>
                                                @endif
                                            </td>
                                            <td class="text-center">{{ $p7b->catatan }}</td>
                                            <td class="text-center">
                                                <a href="{{ asset('storage/' . $p7b->berkas) }}" target="blank"
                                                    class="btn btn-icon btn-success"><span data-feather="eye"></span></a>
                                                <a href="/Lingkungan/p7b/{{ $p7b->id }}/edit"
                                                    class="btn btn-icon btn-warning" style="margin: 3px 0px"><span
                                                        data-feather="edit"></span></a>

                                                <form action="/Lingkungan/p7b/{{ $p7b->id }}" method="post"
                                                    class="d-inline">
                                                    @method('delete')
                                                    @csrf
                                                    <button class="btn btn-icon btn-danger border-0"
                                                        onclick="return confirm('Apakah anda yakin ingin menghapus data?')">
                                                        <span data-feather="trash-2">
                                                        </span>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Basic table -->

            {{-- <a href="#" class="btn btn-primary btn-md" target="blank">Cetak Tanda Terima</a> --}}

        </div>
    </div>
@endsection
