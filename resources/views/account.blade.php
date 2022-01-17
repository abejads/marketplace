@extends('layouts.main')

@section('container')
{{-- {{dd($accounts)}} --}}
<div class="container account-page card card-body mt-5">
      <div class="row profile">
        <div class="col-md-3">
          <div class="profile-sidebar">
            <div class="profile-img">
              {{-- <img src="Gambar/ryo.jpg" class="rounded-circle" alt="" /> --}}
              {{-- <div class="file btn btn-lg btn-primary">
                Pilih foto
                <input type="file" name="file" />
              </div> --}}
            </div>

            <div class="profile-usertitle">
              <div class="profile-usertitle-desc">
                Besar file: maksimum 10.000.000 bytes (10 Megabytes). Ekstensi file yang diperbolehkan: .JPG .JPEG .PNG
              </div>
            </div>

            <div class="profile-userbuttons">
              <a href="#" class="btn btn-danger btn-sm">Ubah Profile Picture</a>
            </div>
          </div>
        </div>
        <div class="col-md-9">
          <div class="profile-content">
            <div class="row">
              <div class="col-md-12">
                <h4><b>Ubah Biodata Diri</b></h4>
                <br>
              </div>
            </div>
            <table class="table table-user-information">
              <tbody>
                <tr>
                  <td><b>Nama</b></td>
                  <td>{{ $accounts->name }}</td>
                </tr>
                <tr>
                  <td><b>Tanggal Lahir</b></td>
                  <td>{{ $accounts->tanggal_lahir }}</td>
                </tr>
                <tr>
                  <td><b>Jenis Kelamin</b></td>
                  <td>{{ $accounts->jenis_kelamin }} <a href="#link-ubah-gender">Ubah</a></td>
                </tr>
                <tr>
                  <td><b>Email</b></td>
                  <td>{{ $accounts->email }} </td>
                </tr>
                <tr>
                  <td><b>Nomor HP</b></td>
                  <td>{{ $accounts->nomor_hp }} </td>
                </tr>
                <tr>
                  <td><b>Alamat Tersimpan</b></td>
                  <td>{{ $accounts->alamat }} <a href="#link-ubah-gender">Ubah</a></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
@endsection