<!DOCTYPE html>
<html lang="en-US">

@include('frontend.partials.head')


<body>
    <!-- Page Loader Start -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner"></div>
    </div>
    <!-- Page Loader End -->

    @include('frontend.partials.navbar')

    @yield('content')
    @include('frontend.blog.partials.modal')

    <section class="aubna-welcome-area">
        <!--Content before waves-->
        <div class="container text-center">
            <div class="align-items-center justify-content-between ">
                <div class="inner-header">
                    <div class="row">
                        <div class="col">
                            <div class="welcome-left">
                                <h1>Veteran Kos</h1>
                                <p>Kosan siap huni di sekitar kampus UPNVJ</p>
                            </div>
                        </div>
                    </div>
                    {{-- <div class="inner-content">
                    
                 </div> --}}
                </div>
            </div>
        </div>
    </section>
    <section class="aubna-blog-area section_100">
        <div class="container-md">
            <div class="row p-md-5">
                <div class="col-lg-24">
                    <div class="row row-cols-4 row-cols-lg-4">
                        @foreach ($posts as $p)
                          <div class="card btn ml-5" style="width: 18rem;" data-bs-toggle="modal" href="#exampleModalToggle{{ $p->id }}">
                            <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <h4 class="card-title">{{ $p->title }}</h4>
                              <div class="row">
                                <div class="col">
                                    <h6><i class="bi bi-cash"></i> Rp.{{ $p->harga }}</h6>
                                </div>
                                <div class="col">
                                    <h6>Kamar : {{ $p->max_kamarT }}</h6>
                                </div>
                              </div>
                              
                              <p class="card-text">{{ $p->alamat_kost }}</p>
                              {{-- <a href="#" class="btn btn-primary">Go somewhere</a> --}}

                            </div>
                          </div>

                          <!-- MODAL -->
                          <div class="modal modal-xl fade" id="exampleModalToggle{{ $p->id }}" aria-hidden="true" aria-labelledby="exampleModalToggle{{ $p->id }}Label" tabindex="-1">
                            <div class="modal-dialog modal-dialog-centered">
                                <div class="modal-content">
                                    <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalToggle{{ $p->id }}Label">{{ $p->title }}</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                    <div class="container align-items-center text-center">
                                        <div class="row">
                                        <div class="col">
                                            <div class="row mb-2">
                                            <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" class="card-img-top" alt="...">
                                            </div>
                                            <div class="row mb-2">
                                                <a type="button" class="btn btn-success btn-lg" href="https://wa.me/<?php echo $p->pemilik->noTelp ?>?text=Halo%20apakah%20untuk%20kost%20<?php echo $p->title; ?>%20masih%20ada%201%20kamar%20%3F">Maps</a>
                                            {{ $p->maps }}
                                            </div>
                                        </div>
                                        <div class="col">
                                            <div class="row">
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                <h5 class="card-title">Detail Pemilik</h5>
                                                <hr style="border: 0.5px solid #F86D08;">
                                                <p class="card-text">Pemilik : {{ $p->pemilik->name}}</p>
                                                <p class="card-text">Alamat : {{ $p->pemilik->alamat }}</p>
                                                <p class="card-text">nomor : {{ $p->pemilik->noTelp }}</p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <div class="card mb-2">
                                                <div class="card-body">
                                                <h5 class="card-title">Detail Kost</h5>
                                                <hr style="border: 0.5px solid #F86D08;">
                                                <p class="card-text">Deskripsi :</p>
                                                <p class="card-text"></p>
                                                <p class="card-text">Jenis kost : </p>
                                                <p class="card-text">Alamat : {{ $p->alamat_kost }}</p>
                                                <p class="card-text">Fasilitas : {{ $p->fasilitas_kamar }}</p>
                                                <p class="card-text">Dekat dengan : {{ $p->fasilitas_sekitar }}</p>
                                                </div>
                                            </div>
                                            </div>
                                            <div class="row">
                                            <a type="button" class="btn btn-success btn-lg" href="https://wa.me/<?php echo $p->noTelp; ?>?text=Halo%20apakah%20untuk%20kost%20<?php echo $p->title; ?>%20masih%20ada%201%20kamar%20%3F">Hubungi</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                    <div class="modal-footer text-center">
                                    <button class="btn btn-primary" data-bs-target="#exampleModalToggle{{ $p->id }}2" data-bs-toggle="modal">close</button>
                                    </div>
                                </div>
                            </div>
                          </div>
                        @endforeach
                        </div>
                    </div>
                </div>
                {{-- <div class="col-4">
                    <div class="card border-secondary">
                        @foreach ($posts as $p)
                            <div class="card mb-3">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <figure class="blog-img">
                                            <a href="#">
                                                <img src="{{ asset('aubna') }}/assets/img/blog-2.jpg" alt="blog imag">
                                            </a>
                                        </figure>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $p->title }}</h5>
                                            <p class="card-text">{{ Str::limit($p->body, 50) }}</p>
                                            <p class="card-text"><small class="text-muted">Last updated
                                                    {{ $p->created_at->format('d-m-Y') }}</small></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div> --}}
            </div>
    </section>


    {{-- @include('frontend.partials.footer') --}}
    @include('frontend.partials.script')
    @yield('scripts')

</body>

</html>