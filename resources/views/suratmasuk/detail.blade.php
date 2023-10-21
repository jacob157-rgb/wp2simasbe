@extends('app')
@section('content')
    <div class="px-4 py-5">
        <div class="card">
            <div class="card-header">
                <div class="card-title pt-2">
                    <h4>Detail Surat Masuk</h4>
                </div>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col">
                        <label for="">No. Surat <span class="text-danger"> : {{ $suratmasuk->no_surat }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Tgl. Surat <span class="text-danger"> : {{ $suratmasuk->tgl_surat }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Tgl. Masuk <span class="text-danger"> : {{ $suratmasuk->tgl_masuk }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Pengirim <span class="text-danger"> : {{ $suratmasuk->pengirim }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">Isi Ringkas <span class="text-danger"> : {{ $suratmasuk->ringkasan }}</span></label>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col">
                        <label for="">File Surat <span class="text-danger"> : {{ $suratmasuk->file_surat }}</span></label>
                        <br><a href="{{ url('suratmasukfile/' . $suratmasuk->file_surat) }}" target="_blank"
                            class="btn btn-sm btn-info"><i class="fa fa-file"></i> Lihat File Tersimpan</a>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="my-2">
                    <a href="{{ route('suratmasuks.index') }}" class="btn btn-danger"><i class="fa fa-backward"></i> Kembali</a>
                </div>
            </div>
        </div>
    </div>
@endsection
