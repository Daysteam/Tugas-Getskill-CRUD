@extends('layout.app')

@section('title','Apotek | Supplier')

@section('content')
	<h1 class="mt-2">Supplier</h1>
	<a href="{{ route('supplier.create') }}" class="btn btn-primary py-1 px-2">Tambah</a>
	<form action="{{ route('supplier.index') }}" class="d-flex justify-content-between mt-2" method="GET">
		@csrf
		<input type="text" name="search" class="form-control" placeholder="Supplier..">
		<button type="submit" class="btn btn-primary">Cari</button>
	</form>
	<table class="table table-striped table-bordered mt-2">
		<tr>
			<th>No</th>
			<th>Nama Supplier</th>
			<th>Alamat</th>
			<th>No Telp</th>
			<th>Aksi</th>
		</tr>
		@forelse( $suppliers as $index => $supplier)
			<tr>
				<td>{{ $index + 1 }}</td>
				<td>{{ $supplier->nama_supplier }}</td>
				<td>{{ $supplier->nama_supplier }}</td>
				<td>{{ $supplier->nama_supplier }}</td>
				<td>
					<a class="btn btn-warning" href="{{ route('supplier.edit', $supplier->id) }}">Edit</a>
					<form method="POST" class="d-inline" action="{{ route('supplier.destroy',$supplier->id') }}">
						@csrf
						@method('DELETE')
						<buttton type="submit" class="btn btn-danger">Delete</button>
					</form>
				</td>
			</tr>
	</table>
	<div class="d-flex justify-content-center mt-2">
		{{ $suppliers->links() }}
	</div>
@endsection
