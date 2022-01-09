@extends('layouts.main')

@section('container')
    <div class="container">
      <div class="row mt-4">
        <div class="col"><h2><strong>Daftar Produk</strong></h2></div>
      </div>

      <div class="row mb-4">
           
        @foreach($products as $product)

            <div class="col-md-3 mt-4">
                <a href="/products/{{ $product->nama_produk }}" class="text-decoration-none">
                    <div class="card shadow card-product">
                        <img src="/img/{{ $product->gambar_produk }}" class="card-img-top" >
                        <div class="card-body">
                            <h5 class="card-title"><strong>{{ $product->nama_produk }}</strong></h5>
                            <p class="card-text">Harga: Rp. {{ number_format($product->harga, 2, ',', '.') }}</p>
                            <form action="/cart" method="post">
                                @csrf
                                <input type="hidden" name="products_id" value="{{ $product->id }}">
                                <button type="submit" class="btn btn-danger mt-2"><i class="bi bi-cart-plus"></i> Beli</button>
                            </form>
                        </div>
                    </div>
                </a>
            </div>
        
        @endforeach
        </div>
    </div>
@endsection