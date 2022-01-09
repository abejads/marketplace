@extends('layouts.main')

@section('container')
        <div class="container mt-5">
          
          @if(session()->has('success'))
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @elseif(session()->has('login_error'))
          <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('login_error') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
          @endif


            <div class="row">
              <div class="col-sm-6">
                <div class="card shadow bg-body">
                  <div class="card-body">
                    <h2 class="card-title text-center mt-2" style="font-weight: bold;">Login</h2>
                    
                    <form action="/login" method="post" class="mt-5">
                    @csrf
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                      </div>
                      <span class="text-danger"> @error ('email') {{ $message }} @enderror</span>
                      <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password">
                      </div>
                      @if ($message = Session::get('error'))
                        <span> {{ $message }}</span>
                      @endif
                      <center>
                          <button type="submit" class="btn btn-primary">Submit</button><br><br>
                          Don't have an account yet? <a style="text-decoration: none;" href="/register">Register</a>
                      </center>
                      
                    </form>

                  </div>
                </div>
              </div>


              <div class="col-sm-6">
                <center>
                    <img class="img-fluid" src="/img/login.svg" alt="">
                </center>
              </div>
                
              </div>
        </div>
@endsection