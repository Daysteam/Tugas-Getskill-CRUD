@extends('layout.app')

@section('title','Apotek | Tambah Supplier')

@section('content')
	<h1 class="mt-2">Tambah Supplier</h1>
	<a href="{{ route('supplier.index') }}" class="btn btn-secondary">Kembali</a>
	<div class="d-flex justify-content-center w-50 mt-2">
		<form action="{{ route('supplier.store') }}" method="POST">
			@csrf
			<div class="my-2">
				<label class="form-label" for="supplier">Nama Suplier</label>
				<input type="text" class="form-control" id="supplier" name="nama_supplier" placeholder="Nama Supplier.." value="{{ old('nama_supplier') }}">
			</div>
			<div class="mb-2">
				<label class="form-label" for="alamat">Alamat</label>
				<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat.." value="{{ old('alamat') }}">
			</div>
			<div class="mb-2">
				<label class="form-label" for="no_telp">No Telp</label>
				<input type="tel" class="form-control" name="no_telp" id="no_telp" placeholder="No Telp.." value="{{ old('no_telp') }}">
			</div>
			<button class="btn btn-primary" type="submit">Submit</button>
		</form>
	</div>
@endsection
