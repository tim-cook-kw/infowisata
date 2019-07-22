@extends('homepage::layouts.app')

@section('title','Wisata')

@push('css')

@endpush
@section('content')
<!------------ Gallery section ------------>
<section id="hotels" class="parallax">
    <div class="container">
      <div class="row">
  
        <div class="col-md-12">
  
         <div class="col-md-offset-2 col-md-8 col-sm-offset-1 col-sm-10 text-center">
           <div class="wow fadeInUp section-title" data-wow-delay="1s">
              <h2>Category</h2>
          </div>
        </div>
          
            <!-- iso section -->
            <div class="iso-section wow fadeInUp text-center" data-wow-delay="0.5">
  
                      <ul class="filter-wrapper clearfix">
                    <ul class="filter-wrapper clearfix">
                      <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                      <li><a href="#" class="opc-main-bg" data-filter=".wisataalam">Wisata Alam</a></li>
                      <li><a href="#" class="opc-main-bg" data-filter=".wisatapantai">Wisata Pantai</a></li>
                      <li><a href="#" class="opc-main-bg" data-filter=".wisatasejarah">Wisata Sejarah</a></li>
                      <li><a href="#" class="opc-main-bg" data-filter=".wisatakuliner">Wisata Kuliner</a></li>
                  </ul>
  
                      </ul>
  
                      <!-- iso box section -->
                      <div class="iso-box-section wow fadeInUp" data-wow-delay="0.9s">
                        <div class="iso-box-wrapper col4-iso-box">
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="{{ asset('asset/images/alam-01.jpg') }}" data-lightbox-gallery="food-gallery">
                                <img src="{{ asset('asset/images/alam-01.jpg') }}" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Wisata Alam Kalibiru</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="{{ asset('asset/images/alam-02.jpg') }}" data-lightbox-gallery="food-gallery">
                                <img src="{{ asset('asset/images/alam-02.jpg') }}" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Tebing Breksi</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="{{ asset('asset/images/alam-03.jpg') }}" data-lightbox-gallery="food-gallery">
                                <img src="{{ asset('asset/images/alam-03.jpg') }}" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Hutan Pinus Mangunan</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/alam-04.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/alam-04.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Bukit Panguk</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/alam-05.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/alam-05.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Embung Nglanggeran</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/alam-06.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/alam-06.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Goa Pindul</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/alam-07.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/alam-07.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Air Terjun Kedung Pedut</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/alam-08.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/alam-08.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Gumuk Pasir Parangkusumo</h3>
                          </div>
  
                          <div class="iso-box wisataalam col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/alam-09.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/alam-09.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Bukit Bintang</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-01.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-01.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Indrayanti</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-02.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-02.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Nglambor</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-03.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-03.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Pok Tunggal</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-04.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-04.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Timang</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-05.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-05.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Ngrenehan</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-06.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-06.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Parangtritis</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-07.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-07.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Sadranan</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-08.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-08.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Wediombo</h3>
                          </div>
  
                          <div class="iso-box wisatapantai col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/pantai-09.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/pantai-09.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Pantai Jungwok</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-01.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-01.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Benteng Vredeburg</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-02.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-02.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Monumen Jogja Kembali / Monjali</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-03.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-03.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Keraton Yogyakarta</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-04.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-04.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Taman Sari</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-05.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-05.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Museum Perjuangan Jogja</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-06.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-06.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Gedung Agung Jogja</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-07.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-07.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Museum Sonobudoyo</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-08.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-08.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Candi Prambanan</h3>
                          </div>
  
                          <div class="iso-box wisatasejarah col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/sejarah-09.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/sejarah-09.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Candi Sambisari</h3>
                          </div>
  
                          <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/kuliner-01.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/kuliner-01.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>House Of Raminten</h3>
                          </div>
  
                          <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/kuliner-02.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/kuliner-02.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Gudeg Yu Djum</h3>
                          </div>
  
                          <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/kuliner-03.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/kuliner-03.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Angkringan Kopi Joss Lik Man</h3>
                          </div>
  
                          <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/kuliner-04.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/kuliner-04.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Bong Kopitown</h3>
                          </div>
  
                          <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/kuliner-05.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/kuliner-05.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Bakpia Kurnia Sari</h3>
                          </div>
  
                          <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/kuliner-06.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/kuliner-06.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Bakpia Pathok 25</h3>
                          </div>
  
                          <div class="iso-box wisatakuliner lunch col-md-4 col-sm-6">
                            <div class="gallery-thumb">
                              <a href="images/kuliner-07.jpg" data-lightbox-gallery="food-gallery">
                                <img src="images/kuliner-07.jpg" class="fluid-img" alt="Gallery">
                                  <div class="gallery-overlay">
                                    <div class="gallery-item">
                                      <i class="fa fa-search"></i>
                                    </div>
                                  </div>
                              </a>
                            </div>
                            <h3>Bakpia Kukus Tugu Jogja</h3>
                          </div>
  
                         </div>
                      </div>
  
            </div>
  
        </div>
  
      </div>
    </div>
  </section>


@endsection

@push('js')

@endpush