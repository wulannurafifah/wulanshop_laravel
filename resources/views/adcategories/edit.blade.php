@extends('layout/login')

@section('title', 'Form Ubah Kategori')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Kategori</h3>
            
                <form method="post" action="/adcategories/{{ $adcategories->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="cat_title" class="form-label">Nama Kategori</label>
                        <input type="text" class="form-control" id="cat_title" placeholder="Masukkan Nama Kategori" name="cat_title" value="{{$adcategories->cat_title}}">
                    </div>

                    <button type="submit">Ubah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
