@extends('layouts.kasirmain')
@section('casir')
    <div class="wrapper">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-4 px-3 py-3">
                    <div class="card">
                        <div class="card-body ">
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Kode Barang</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Nama Barang</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Harga</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="inputGroup-sizing-default">Jumlah</span>
                                <input type="text" class="form-control" aria-label="Sizing example input"
                                    aria-describedby="inputGroup-sizing-default">
                                <button type="button" class="btn btn-warning text-light">
                                    <span id="inputGroup-sizing-default">Tambah</span>
                                </button>
                            </div>
                            <div class=" mb-3">
                                <button type="button" class="btn btn-primary text-light" style="width: 26rem;">
                                    <span>Selesai</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-7 py-3">
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="inputGroup-sizing-default">Total</span>
                        <input type="text" class="form-control hidden" aria-label="Sizing example input"
                            aria-describedby="inputGroup-sizing-default">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
