@extends('layouts.main')

@section('container')
{{-- {{ dd($carts, $products) }} --}}
<section class="h-100 cart-page">

  @php
    $total_harga = 0;

  @endphp

      <div class="container py-5">
        <div class="row d-flex justify-content-center my-4">
          <div class="col-md-8">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Cart - (kode jumlah item) items</h5>
              </div>
              
              {{-- {{dd($products)}} --}}

              @foreach($carts as $key => $cart)
                @php

                  $product = $products[$loop->index];
                  $harga = $product->harga * $cart->jumlah;

                  $total_harga += $harga;
                @endphp
                
                <div class="card-body">
                  <!-- Single item -->
                  <div class="row">
                    <div class="col-lg-3 col-md-12 mb-4 mb-lg-0">
                      <!-- Image -->
                      <div class="bg-image hover-overlay hover-zoom ripple rounded" data-mdb-ripple-color="light">
                        <img src="/img/{{ $product->gambar_produk }}" class="w-100" />
                      </div>
                      <!-- Image -->
                    </div>

                    <div class="col-lg-5 col-md-6 mb-4 mb-lg-0">
                      <!-- Data -->
                      <h4><strong>{{ $product->nama_produk }}</strong></h4>
                     
                      <form action="{{url('/cart/deleteCart/'.$cart->id)}}"method="get">
                      <button type="submit" class="btn btn-danger btn-sm me-1 mb-2" data-mdb-toggle="tooltip" title="Remove item">
                        <i class="bi bi-trash-fill"></i>
                      </button>
                      </form>
                      <!-- Data -->
                    </div>

                    <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                      <!-- Quantity -->
                      <div class="d-flex mb-4" style="max-width: 300px">

                        <div class="form-outline">
                          <input id="form1" min="0" name="quantity" value="{{ $cart->jumlah }}" type="number" class="form-control" />
                          <label class="form-label text-center" for="form1">Quantity</label>
                        </div>

                      </div>
                      <!-- Quantity -->

                      <!-- Price -->
                      <p class="text-start text-md-center">
                        <strong>Rp. {{ number_format($harga, 2, ',', '.') }}</strong>
                      </p>
                      <!-- Price -->
                    </div>
                  </div>
                  <hr class="my-4" />
                </div>
              
              @endforeach


            </div>
          </div>
          <div class="col-md-4">
            <div class="card mb-4">
              <div class="card-header py-3">
                <h5 class="mb-0">Summary</h5>
              </div>
              <div class="card-body">
                <ul class="list-group list-group-flush">
                  <li
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 pb-0">
                    Products
                    <span>Rp. {{ number_format($total_harga , 2, ',', '.') }}</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between align-items-center px-0">
                    Shipping
                    <span>Gratis</span>
                  </li>
                  <li
                    class="list-group-item d-flex justify-content-between align-items-center border-0 px-0 mb-3">
                    <div>
                      <strong>Total amount</strong>
                      <strong>
                        <p class="mb-0">(including VAT)</p>
                      </strong>
                    </div>
                    <span><strong>Rp. {{ number_format($total_harga + 500, 2, ',', '.') }}</strong></span>
                  </li>
                </ul>

                <button type="button" class="btn btn-danger btn-lg btn-block" onclick="document.location='checkout'">
                  Go to checkout
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection