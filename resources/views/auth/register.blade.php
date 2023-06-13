@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                {{-- Form Register user --}}
                <section class="aubna-blog-area section_50">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12 text-center">
                                <h1>Registrasi</h1>
                                <hr style="border: 0.5px solid #F86D08;">
                            </div>

                            <div class="col-lg-12">
                                <form>
                                    <div class="mb-3">
                                        <label for="name" class="form-label">Nama</label>
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" autofocus>

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="nik" class="form-label">NIK</label>
                                        <input id="nik" type="number"
                                            class="form-control @error('nik') is-invalid @enderror" name="nik"
                                            value="{{ old('nik') }}" required autocomplete="nik" autofocus>

                                        @error('nik')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="noTelp" class="form-label">No Telp</label>
                                        <input id="noTelp" type="number"
                                            class="form-control @error('noTelp') is-invalid @enderror" name="noTelp"
                                            value="{{ old('noTelp') }}" required autocomplete="noTelp" autofocus>

                                        @error('noTelp')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="tanggalLahir" class="form-label">Tanggal Lahir</label>
                                        <input id="tanggalLahir" type="date"
                                            class="form-control @error('tanggalLahir') is-invalid @enderror"
                                            name="tanggalLahir" value="{{ old('tanggalLahir') }}" required
                                            autocomplete="tanggalLahir">

                                        @error('tanggalLahir')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">Email</label>
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">password</label>
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <fieldset class="row mb-3">
                                        <legend class="col-form-label col-sm-2 pt-0">Radios</legend>
                                        <div class="col-sm-10">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios1" value="option1" checked>
                                                <label class="form-check-label" for="gridRadios1">
                                                    First radio
                                                </label>
                                            </div>
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="gridRadios"
                                                    id="gridRadios2" value="option2">
                                                <label class="form-check-label" for="gridRadios2">
                                                    Second radio
                                                </label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </form>
                            </div>
                        </div>
                </section>




            </div>
        </div>
    </div>
@endsection
