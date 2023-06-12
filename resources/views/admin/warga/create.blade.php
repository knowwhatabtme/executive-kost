@extends('admin.partials.master')
@section('content')
    
<div class="global-container">
    <div class="row justify-content-md-center">
        <div class="card-login-form" style="width: 25rem;">
            <div class="card-body">
              <h5 class="card-title text-center mb-4">R E G I S T E R</h5>
              <form action="{{ route('daftarwarga.store') }}" method="POST">
                @csrf
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">Nama</label>
                  <input type="text" class="form-control" id="exampleInputNama" name="nama">
                </div>
                <div class="col mb-3">
                  <label for="exampleInputEmail1" class="form-label">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                </div>
                <div class="col mb-3">
                  <label for="exampleInputPassword1" class="form-label">Password</label>
                  <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                </div>
                <div class="col mb-3">
                  <label for="exampleInputPassword1" class="form-label">No Telp</label>
                  <input type="text" class="form-control" id="exampleInputNumber" name="no_hp">
                </div>
                <div class="col mb-3">
                    <label for="inputAddress" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St" name="alamat">
                </div>
                <div class="col mb-3">
                    <label for="inputState" class="form-label">Wilayah</label>
                    <select id="inputState" class="form-select" name="wilayah">
                      <option value="Depok Satu">Depok Satu</option>
                      <option value="Sawangan">Sawangan</option>
                      <option value="Depok Dua">Depok Dua</option>
                      <option value="Depok Timur">Depok Timur</option>  
                    </select>
                </div>
                <div class="col mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>

@endsection