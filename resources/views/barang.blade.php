@extends('layout.app')

@section('judul', 'Barang')
@section('konten')

<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Barang Page</h1>
</div>
<div class="container-fluid">
    <div class="card">
        <div class="card-header bg-primary text-white">
            Form input barang
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-3">
                    <input type="text" class="form-control" id="code" name="code" placeholder="Kode barang....">
                </div>
                <div class="col-3">
                    <input type="date" class="form-control" id="tanggal" name="tanggal"
                        placeholder="Tanggal....">
                </div>
                <div class="col-6">
                    <input type="text" class="form-control" id="nama_mobil" name="name_mobil"
                        placeholder="Nama Barang....">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-3">
                    <input type="text" class="form-control" id="seris_mobil" name="seris_mobil"
                        placeholder="####">
                </div>
                <div class="col-3">
                    <input type="text" class="form-control" id="asal_negara" name="asal_negara"
                        placeholder="####">
                </div>
                <div class="col-3">
                    <label for="exampleDataList" class="form-label">Jenis Barang</label>
                    <input class="form-control" list="datalistOptions" id="exampleDataList" placeholder="Type to search...">
                    <datalist id="datalistOptions">
                        <option value="###">
                    </datalist>
                </div>
                <div class="col-3">
                    <input type="submit" class="btn btn-primary" value="Simpan" id="btn-simpan"></input>
                    <input type="button" class="btn btn-warning d-none" value="Edit" id="btn-edit"></input>
                    <input type="button" class="btn btn-dark" value="Reset" id="btn-reset"></input>
                </div>
            </div>
        </div>
    </div>

    <div class="card mt-5">
        <div class="card-header bg-primary text-white">Data input Barang</div>
        <div class="card-body">
            <table class="table" id="tabel-mobil">
                <thead class="table-success">
                    <th>####</th>
                    <th>####</th>
                    <th>####</th>
                    <th>####</th>
                    <th>####</th>
                    <th>####</th>
                    <th>####</th>
                    <th>Aksi</th>
                </thead>
            </table>
        </div>
    </div>

</div>


@endsection