@extends('layout/login')

@section('title', 'Form Ubah Data Admin Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Data Admin Info</h3>
            
                <form method="post" action="/admininfos/{{ $admininfos->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="admin_name" class="form-label">Nama Admin</label>
                        <input type="text" class="form-control" id="admin_name" placeholder="Masukkan Nama Admin" name="admin_name" value="{{$admininfos->admin_name}}">
                    </div>

                    <div class="mb-3">
                        <label for="admin_email" class="form-label">Email Admin</label>
                        <input type="text" class="form-control" id="admin_email" placeholder="Masukkan Email Admin" name="admin_email" value="{{$admininfos->admin_email}}">
                    </div>

                    <div class="mb-3">
                        <label for="admin_password" class="form-label">Password</label>
                        <input type="text" class="form-control" id="admin_password" placeholder="Masukkan Password" name="admin_password" value="{{$admininfos->admin_password}}">
                    </div>
                    <button type="submit">Ubah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
