@extends('layout.layout')
@section('title', 'Hubungi Kami')

@section('content')
    @include('layout.navbar')

    <div class="container-fluid py-5 mb-5 hero-header">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="text-center mx-auto mb-5" style="max-width: 500px;">
                    <h2 class="d-inline-block text-primary text-uppercase border-bottom border-5">Kontak Klinik Margi Rahayu</h2>
                </div>
            </div>
            <div class="row justify-content-start px-3">
                <div class="col-lg-6 col-md-12">

                </div>
                <div class="col-lg-6 col-md-12">
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-black me-3 pr-2"></i>Jl. Panglima Sudirman No.91, Pesanggrahan, Kec. Batu, Kota Batu, Jawa Timur 65313</p>
                    <p class="mb-2"><i class="fa fa-envelope text-black me-3 pr-2"></i>info@example.com</p>
                    <p class="mb-0"><i class="fa fa-phone-alt text-black me-3 pr-2"></i>(0341) 591223</p>

                    <form>
                        <div class="row g-3">
                            <div class="col-12 my-3">
                                <input type="text" class="form-control bg-light border-0" placeholder="Nama Anda" style="height: 55px;">
                            </div>
                            <div class="col-12 my-3">
                                <input type="text" class="form-control bg-light border-0" placeholder="Email Anda (wajib diisi)" style="height: 55px;">
                            </div>
                            <div class="col-12 my-3">
                                <textarea class="form-control bg-light border-0" id="exampleFormControlTextarea1" rows="7" placeholder="Pesan"></textarea>
                            </div>
                            <div class="col-12 my-3">
                                <button class="btn btn-primary w-100 py-3" type="submit">Kirim</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @include('layout.bottom')
@endsection
