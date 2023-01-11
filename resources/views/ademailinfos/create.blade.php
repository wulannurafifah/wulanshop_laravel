@extends('layout/login')

@section('title', 'Form Tambah Email Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Tambah Email Info</h3>
            
                <form method="post" action="/ademailinfos"><br>
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Nama Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Email" name="email">
                    </div>

                    <button type="submit">Tambah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
