@extends('template.app')
@section('content')

  <!-- ***** Main Banner Area Start ***** -->
  <section class="section main-banner" id="top" data-section="section1">
    <video autoplay muted loop id="bg-video">
        <source src="assets/images/jtp-video.mp4" type="video/mp4" />
    </video>

    <div class="video-overlay header-text">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="caption">
                        <h6>Holaa Semua</h6>
                        <h2>Selamat datang di Jawa Timur Park Group</h2>
                        <p>Jawa Timur Park adalah sebuah tempat rekreasi dan taman belajar masa kini yang menawarkan
                            permainan, pengetahuan hingga hiburan dan menjadi salah satu icon wisata Jawa Timur yang
                            terdapat di Kota Batu.</p>
                        <div class="main-button-red">
                            <div class="scroll-to-section"><a href="profile-group">Find Out More</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
  <!-- ***** Main Banner Area End ***** -->

  <section class="upcoming-meetings" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="section-heading">
            <h2>Latest Event</h2>
          </div>
        </div>

        <div class="col-lg-4">
          <div class="categories">
            <h4>Event Catgories</h4>
            <ul>
              <li><a href="#">Contest</a></li><br>
              <li><a href="#">Funimal</a></li><br>
              <li><a href="#">Challenge</a></li><br>
              <li><a href="#">Festival</a></li>
            </ul>
            <div class="main-button-red">
              <a href="meetings.html">All Latest Event</a>
            </div>
          </div>
        </div>

        <div class="col-lg-8">
          <div class="row">
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <a href="meeting-details.html"><img src="assets/images/event1.png" alt="New Lecturer Meeting"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>10</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Dino Night Run</h4></a>
                  <p>Ingin merasakan sensasi berlari pada malam hari di tengah patung-patung dinosaurus berukuran besar? Daftarkan diri kamu ke acara Dino Night Run Season 2 di Jatim Park 3, Kota Batu, sekarang juga! Event lari berskala nasional ini tentunya akan memberikan sensasi unik tersendiri bagi para pelari karena digelar di tengah gelapnya malam dengan rute sejauh 5 kilometer.</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <a href="meeting-details.html"><img src="assets/images/event2.png" alt="Online Teaching"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>24</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Funimal Park di Pakuwon City Mall !</h4></a>
                  <p>Di Funimal Park, kamu bakal nemuin banyak satwa keren yang bisa bikin kamu melongo, seperti Sapi Perah, Kuda, Domba Merino, Longhorn, Ilama, Ular Boa, kalkun, dan masih banyak lagi yang pastinya bikin kamu heboh!</p>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <a href="meeting-details.html"><img src="assets/images/event3.jpg" alt="Higher Education"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Nov <span>26</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Family Vlog Challenge</h4></a>
                  <p>Berwisata bersama keluarga menjadi salah satu agenda yang perlu anda siapkan. Terlebih jika di akhir pekan menikmati momen berwisata bersama dengan keluarga besar tentunya menyenangkan banget. Biar lebih seru, coba ikutan Family Vlog Challenge dari Jawa Timur Park, yuk! Berani menerima tantangannya?</p>
                </div>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="meeting-item">
                <div class="thumb">
                  <a href="meeting-details.html"><img src="assets/images/event4.jpeg" alt="Student Training"></a>
                </div>
                <div class="down-content">
                  <div class="date">
                    <h6>Dec <span>30</span></h6>
                  </div>
                  <a href="meeting-details.html"><h4>Happy Fun Day</h4></a>
                  <p>Mulai dari pertunjukan welcoming dance, angklung, memberi makan buaya, drama musikal nusantara,  berbagai games menarik, dan juga kalian bisa berfoto-foto ria dengan berbagai costplay hewan predator yang keren-keren banget. Penasaran? Catat Jadwalnya dan jangan sampai ketinggalan.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="our-facts">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-lg-12">
              <h2>A Few Facts About Our University</h2>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content percentage">
                    <div class="count-digit">65</div>
                    <div class="count-title">Local Visitors</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">500</div>
                    <div class="count-title">Foreign Visitors</div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row">
                <div class="col-12">
                  <div class="count-area-content new-students">
                    <div class="count-digit">2345</div>
                    <div class="count-title">review</div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="count-area-content">
                    <div class="count-digit">32</div>
                    <div class="count-title">Awards</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 align-self-center">
          <div class="video">
            <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img src="assets/images/play-icon.png" alt=""></a>
          </div>
        </div>
      </div>
    </div>

@endsection
