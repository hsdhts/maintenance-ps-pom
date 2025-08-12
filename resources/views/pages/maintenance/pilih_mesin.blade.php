@extends('layouts.header')

@section('konten')
<div class="container-fluid">

    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Pilih Mesin</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Mesin</th>
                            <th>Kode Mesin</th>
                            <th>Kategori</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($mesin as $m)
                        <tr>
                            <td>{{ $m->nama_mesin }}</td>
                            <td>{{ $m->kode_mesin }}</td>
                            <td>{{ $m->kategori ? $m->kategori->nama_kategori : 'Tak Terkategori' }}</td>
                            <td>
                                <form action="{{ url('/mesin/maintenance/create/') }}" method="post">
                                    @csrf
                                    <input type="hidden" name="mesin_id" value="{{ $m->id }}">
                                    <button type="submit" class="btn btn-primary">Pilih</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection
