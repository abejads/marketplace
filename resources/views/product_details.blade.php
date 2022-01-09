@extends('layouts.main')

@section('container')
{{-- {{ dd($product )}} --}}
<div class="container">
    <div class="row mt-5">
        <div class="col">
            <h1><strong>Detail Produk</strong></h1>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-6">
            <img src="/img/{{ $product->gambar_produk }}" class="img-fluid shadow">
        </div>
        <div class="col-md-6">
            <h2><strong>{{ $product->nama_produk }}</strong></h2>
            <hr>
            <h5>Harga: <strong>Rp. {{ number_format($product->harga, 2, ',', '.') }}</strong></h5>

            <form action="/cart" method="post">
                <div class="form-group">
                    <p>{{ $product->deskripsi_produk }}</p>
                    <label for="jumlah-pesanan"><strong>Jumlah Pesanan</strong></label>
                    @csrf
                    <input type="number" value="1" min="1" name="jumlah" />
                    <input type="hidden" name="products_id" value="{{ $product->id }}"/>
                    <button class="btn btn-danger mt-5"><i class="bi bi-cart-plus"></i> Tambah ke keranjang</button>
                </div>
            </form>
        </div>
    </div>
    
</div>
@endsection