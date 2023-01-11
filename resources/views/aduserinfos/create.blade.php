@extends('layout/login')

@section('title', 'Form Tambah User Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah User Info</h3>
            
                <form method="post" action="/aduserinfos"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="first_name" class="form-label">Nama Awal</label>
                        <input type="text" class="form-control" id="first_name" placeholder="Masukkan Nama Awal" name="first_name">
                    </div>
                    <div class="mb-3">
                        <label for="last_name" class="form-label">Nama Akhir</label>
                        <input type="text" class="form-control" id="last_name" placeholder="Masukkan Nama Akhir" name="last_name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Nama Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Email" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="password" placeholder="Masukkan Password" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="mobile" class="form-label">No HP</label>
                        <input type="text" class="form-control" id="mobile" placeholder="Masukkan No Hp" name="mobile">
                    </div>
                    <div class="mb-3">
                        <label for="address1" class="form-label">Alamat Lengkap</label>
                        <input type="text" class="form-control" id="address1" placeholder="Masukkan Alamat Lengkap" name="address1">
                    </div>
                    <div class="mb-3">
                        <label for="address2" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="address2" placeholder="Masukkan Kode Pos" name="address2">
                    </div>

                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
