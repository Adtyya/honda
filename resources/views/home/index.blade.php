@extends('resources.home')
@section('content')
    <section>
        <div id="home">
            <div class="container-fluid banner">
                @if(session()->has('succes'))
                <div class="text-center">
                <div class="alert alert-warning alert-dismissible fade show"  role="alert">
                    <strong>{{session()->get('succes')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"     aria-label="Close"></button>
                </div>
                </div>
                @endif
              <div class="container banner-content col-lg-6">
               <div class="text-center">
                <p class="fs-1" style="font-family: 'Roboto Slab', serif; color: #FF2626;">HONDA <br> ARTA CIKUPA</p>
                <p class="d-none d-sm-block">Dealer mobil RESMI Honda yang berada di Cikupa. Melayani penjualan mobil, perawatan berkala, service, penyediaan suku cadang.</p>
               </div>
              </div>
            </div>
        </div>
        <div id="produk">
            <div class="container">
                <h2 class="text-center fw-bold mt-2">Produk Kami</h2>
                <div class="row">
                    @foreach ($post as $item)
                    <div class="col-md-6">
                        <div class="card me-3 mt-3">
                            <img src="{{ $item->foto }}" class="card-img-top" alt="pictures" width="280" height="240" style="object-fit: cover">
                            <div class="card-body">
                            <h3 class="card-title" style="font-family: 'Roboto Slab', serif;">{{ $item->judul }}</h3>
                            <p>{{ $item->created_at->diffForhumans() }}</p>
                            <a href="/detail/{{ $item->id }}" class="btn" style="background-color: #FF2626; color: white">Detail Produk</a>
                        </div>
                        </div>
                    </div>
                    @endforeach
                        <div class="mt-3">
                            {{ $post->links() }}
                        </div>
                </div>
                <div id="contact">
                    
                        <div class="container mt-5">
                            <div class="row">
                                <div class="col-md">
                                    <div class="card" style="background-color: #FF2626;">
                                        <h2 class="text-center fw-bold text-light mt-3">Aditia Sanja Wiradika</h2>
                                        <div class="text-center">
                                            <img src="media/ath.png" width="200" height="200" class="mt-2 rounded-circle img-thumbnail" alt="author">
                                        </div>
                                        <p class="mx-3 my-3 text-light text-center">Official Marketing Honda Arta Cikupa</p>
                                        <h3 class="fw-bold ms-3" style="color: white;">Contact Me!</h3>
                                            <div class="mt-3 ms-3 text-light fs-6">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-telephone-fill me-3" viewBox="0 0 16 16">
                                                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                                                </svg>0897-8218-433
                                            </div>
                                        <div class="text-light fs-6 ms-3 mt-1">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-envelope me-3" viewBox="0 0 16 16">
                                                <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                                            </svg>aditia.wiradika@gmail.com
                                        </div>
                                        <p class="text-light text-center mt-5">Jl. Raya Serang KM .14, Dukuh, Cikupa, Banten 15710</p>
                                        <p class="mt-3 mb-3 text-light text-center">&copy; Official Marketing 2021</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
        </div>
    </section>    
@endsection