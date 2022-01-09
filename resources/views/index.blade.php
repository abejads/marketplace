@extends('layouts.main')

@section('container')
{{-- {{ dd($products) }} --}}
    <div class="container">

        <div class="row">
            <div class="col">
                <div class="d-flex h-100">
                    <div class="justify-content-center align-self-center">
                        <h2><strong>Adam Store,</strong><br>Marketplace nomor satu se-indonesia. Terlengkap, termurah dan terjamin mutunya</h2>
                        <a href="products"><button class="btn btn-lg btn-danger mt-2"><i class="bi bi-arrow-right"></i> Belanja sekarang</button></a>
                    </div>
                </div>
            </div>

            <div class="col">
                <img src="img/hero-banner.svg" width="70%">
            </div>
        </div>
    

        <div class="row mt-5">
            <div class="col">
                <h2> <strong>Best Seller</strong></h2>
            </div>

            <div class="col">
                <a href="products" class="badge bg-danger float-end" style="text-decoration: none;">Lihat Semua</a> 
            </div>
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
                                <button href="products" class="btn btn-danger mt-2"><i class="bi bi-cart-plus"></i> Beli</button>
                            </form>
                        </div>
                    </div>
                </a>
            </div>

            @endforeach
        </div>

    </div>
@endsection