@extends('layout/login')

@section('title', 'Form Tambah Data Admin Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Data Admin Info</h3>
            
                <form method="post" action="/admininfos"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="admin_name" class="form-label">Nama Admin</label>
                        <input type="text" class="form-control" id="admin_name" placeholder="Masukkan Nama Admin" name="admin_name">
                    </div>

                    <div class="mb-3">
                        <label for="admin_email" class="form-label">Email Admin</label>
                        <input type="text" class="form-control" id="admin_email" placeholder="Masukkan Email Admin" name="admin_email">
                    </div>

                    <div class="mb-3">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="admin_password" placeholder="Masukkan Password" name="admin_password">
                    </div>
            
                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
