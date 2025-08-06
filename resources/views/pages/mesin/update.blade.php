@extends('layouts.header')

@section('konten')

<div class="container-lg mt-5">

    @if($errors->any())
    <!--begin::Alert-->
    <div class="alert alert-dismissible bg-danger d-flex flex-column flex-sm-row p-5 mb-10">
        <!--begin::Icon-->
        <span class="svg-icon svg-icon-2hx svg-icon-light me-4 mb-5 mb-sm-0">
            <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen044.svg-->
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="10" fill="black"/>
                <rect x="11" y="14" width="7" height="2" rx="1" transform="rotate(-90 11 14)" fill="black"/>
                <rect x="11" y="17" width="2" height="2" rx="1" transform="rotate(-90 11 17)" fill="black"/>
            </svg>
            <!--end::Svg Icon-->
        </span>
        <!--end::Icon-->

        <!--begin::Wrapper-->
        <div class="d-flex flex-column text-light pe-0 pe-sm-10">
            <!--begin::Title-->
            <h4 class="mb-2 text-light">Error</h4>
            <!--end::Title-->

            <!--begin::Content-->
            <span>Terjadi kesalahan, mohon cek kembali isian form. Beberapa form tidak boleh dikosongi</span>
            <!--end::Content-->
        </div>
        <!--end::Wrapper-->

        <!--begin::Close-->
        <button type="button" class="position-absolute position-sm-relative m-2 m-sm-0 top-0 end-0 btn btn-icon ms-sm-auto" data-bs-dismiss="alert">
            <span class="svg-icon svg-icon-2x svg-icon-light">
                <!--begin::Svg Icon | path: assets/media/icons/duotune/general/gen034.svg-->   
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="black"/>
                    <rect x="7" y="15.3137" width="12" height="2" rx="1" transform="rotate(-45 7 15.3137)" fill="black"/>
                    <rect x="8.41422" y="7" width="12" height="2" rx="1" transform="rotate(45 8.41422 7)" fill="black"/>
                </svg>
                <!--end::Svg Icon-->
            </span>
        </button>
        <!--end::Close-->
    </div>
    <!--end::Alert-->
    @endif

    <form action="/mesin/update" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf

        <input type="hidden" name="id" value="{{ $mesin->id }}">

        <div class="mb-3">
            <label for="mesin" class="form-label">Nama Mesin</label>
            <input type="text" class="form-control @error('nama_mesin') is-invalid @enderror" id="mesin" placeholder="Nama Mesin" value="{{ old('nama_mesin', $mesin->nama_mesin) }}" name="nama_mesin">
            @error('nama_mesin')    
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="kode_mesin" class="form-label">Kode Mesin</label>
            <input type="text" class="form-control @error('kode_mesin') is-invalid @enderror" id="kode_mesin" placeholder="Kode Mesin" value="{{ old('kode_mesin', $mesin->kode_mesin) }}" name="kode_mesin">
            @error('kode_mesin')    
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tanggal_pembelian" class="form-label">Tanggal Pembelian</label>
            <input type="date" class="form-control @error('tanggal_pembelian') is-invalid @enderror" id="tanggal_pembelian" placeholder="Tanggal Pembelian" value="{{ old('tanggal_pembelian', $mesin->tanggal_pembelian) }}" name="tanggal_pembelian">
            @error('tanggal_pembelian')    
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="mesin_image" class="form-label">Gambar Mesin</label>
            <input type="file" class="form-control @error('mesin_image') is-invalid @enderror" id="mesin_image" name="mesin_image">
            @error('mesin_image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="nameTag_image" class="form-label">Name Tag Mesin</label>
            <input type="file" class="form-control @error('nameTag_image') is-invalid @enderror" id="nameTag_image" name="nameTag_image">
            @error('nameTag_image')
            <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="spesifikasi" class="form-label">Spesifikasi (opsional)</label>
            <p>Isian tidak boleh mengandung karakter petik (") maupun (')</p>
            <p class="text-danger">
                @error('spesifikasi')    
                 {{ $message }}
                @enderror
            </p>
            <textarea id="kt_docs_tinymce_basic" name="spesifikasi" class="tox-target">{{ old('spesifikasi', $mesin->spesifikasi) }}</textarea>
        </div>

        <a href="/mesin">
            <button type="button" class="btn btn-lg btn-secondary d-inline">
                <!--begin::Svg Icon | path: assets/media/icons/duotune/arrows/arr046.svg-->
                <span class="svg-icon svg-icon-muted svg-icon-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                        <path d="M14 6H9.60001V8H14C15.1 8 16 8.9 16 10V21C16 21.6 16.4 22 17 22C17.6 22 18 21.6 18 21V10C18 7.8 16.2 6 14 6Z" fill="black"/>
                        <path opacity="0.3" d="M9.60002 12L5.3 7.70001C4.9 7.30001 4.9 6.69999 5.3 6.29999L9.60002 2V12Z" fill="black"/>
                    </svg>
                </span>
                <span>Kembali</span>
                <!--end::Svg Icon-->
            </button>
        </a>

        <button type="submit" class="btn btn-lg btn-primary d-inline">
            <!--begin::Svg Icon | path: assets/media/icons/duotune/files/fil008.svg-->
            <span class="svg-icon svg-icon-muted svg-icon-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM11.7 17.7L16.7 12.7C17.1 12.3 17.1 11.7 16.7 11.3C16.3 10.9 15.7 10.9 15.3 11.3L11 15.6L8.70001 13.3C8.30001 12.9 7.69999 12.9 7.29999 13.3C6.89999 13.7 6.89999 14.3 7.29999 14.7L10.3 17.7C10.5 17.9 10.8 18 11 18C11.2 18 11.5 17.9 11.7 17.7Z" fill="black"/>
                    <path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="black"/>
                </svg>
            </span>
            <!--end::Svg Icon-->
            Simpan Perubahan
        </button>
       
    </form>
</div>

<script src="/assets/plugins/custom/tinymce/tinymce.bundle.js"></script>

<script>
    var options = {
        selector: "#kt_docs_tinymce_basic",
        forced_root_block: false,
        newline_behavior: 'block',
        toolbar: false,
        menubar: false,
    };

    tinymce.init(options);
</script>

@endsection
