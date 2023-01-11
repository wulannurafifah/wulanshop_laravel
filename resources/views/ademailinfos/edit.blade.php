@extends('layout/login')

@section('title', 'Form Ubah Email Info')

@section('container')



<div class="container">
    <div class="row">
        <div class="col-8">            
            <h3 class = "mt-3">Form Ubah Email Info</h3>
            
                <form method="post" action="/ademailinfos/{{ $ademailinfos->id }}"><br>
                    @method('patch')
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Nama Email</label>
                        <input type="text" class="form-control" id="email" placeholder="Masukkan Nama Email" name="email" value="{{$ademailinfos->email}}">
                    </div>

                    <button type="submit">Ubah Data</button>
                </form>

        </div>
    </div>
</div>
@endsection
