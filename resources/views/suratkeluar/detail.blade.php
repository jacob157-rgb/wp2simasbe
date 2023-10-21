@extends('app')
@section('content')
    <div class="px-4 py-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title pt-2">
                    <h4>Detail Surat Keluar</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label for="">No. Surat <span class="text-danger"> : {{ $suratkeluar->no_surat }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Tgl. Surat <span class="text-danger"> : {{ $suratkeluar->tgl_surat }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Tgl. Keluar <span class="text-danger"> : {{ $suratkeluar->tgl_keluar }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Tujuan <span class="text-danger"> : {{ $suratkeluar->tujuan }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Isi Ringkas <span class="text-danger"> : {{ $suratkeluar->ringkasan }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">File Surat <span class="text-danger"> : {{ $suratkeluar->file_surat }}</span></label>
                        <br><a href="{{ url('suratkeluarfile/' . $suratkeluar->file_surat) }}" target="_blank"
                            class="btn btn-sm btn-info"><i class="fa fa-file"></i> Lihat File Tersimpan</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="my-2">
                    <a href="{{ route('suratkeluars.index') }}" class="btn btn-danger"><i class="fa fa-backward"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
