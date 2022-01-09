@extends('layouts.main')

@section('container')
          <div class="container mt-5">
            @if(session()->has('fail'))
              <div class="alert alert-danger alert-dismissible fade show" role="alert">
                {{ session('fail') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
            @endif
            <div class="row">
                <div class="col-sm-6">
                    <center>
                        <img class="img-fluid" src="/img/register.svg" alt="">
                    </center>
                </div>
                <div class="col-sm-6">
                  <div class="card shadow bg-body">
                    <div class="card-body">
                      <h2 class="card-title text-center mt-2" style="font-weight: bold;">Register</h2>
                      
                      <form action="/register" method="post" class="mt-5">
                        @csrf
                        <div class="mb-3">
                          <label for="name" class="form-label">Name</label>
                          <input type="name" class="form-control" id="name" name="name">
                        </div>
                        <span class="text-danger"> @error ('name') {{ $message }} @enderror</span>
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" name="email">
                        </div>
                        <span class="text-danger"> @error ('email') {{ $message }} @enderror</span>
                        <div class="mb-3">
                          <label for="exampleInputPassword1" class="form-label">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                        </div>
                        <span class="text-danger"> @error ('password') {{ $message }} @enderror</span>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password_confirmation">
                        </div>
                        <div class="passwd-desc">
                          • At least 8 characters<br>
                          • A mixture of uppercase and lowercase letters<br>
                          • A mixture of letters and numbers<br>
                          • Inclusion of at least 1 special characters, e.g.,!@ #?]
                        </div>
                        <center>
                            <button type="submit" class="btn btn-primary mt-3">Submit</button><br><br>
                            Already have an account? <a style="text-decoration: none;" href="/login">Login</a>
                        </center>
                      </form>

                    </div>
                  </div>
                </div>
              </div>
        </div>
@endsection