@extends('template.app')
@section('content')

  <section class="heading-page header-text" id="top" style="background-image: url('assets/images/sub-bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Get all details</h6>
          <h2>Profile Group</h2>
        </div>
      </div>
    </div>
  </section>

  <section class="meetings-page" id="meetings">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-12">
              <div class="meeting-single-item">
                <div class="thumb">
                  <div class="date">
                    <h6>Nov <span>12</span></h6>
                  </div>
                  <a href="meeting-details.html"><img src="assets/images/jtp-logo.jpg" alt=""></a>
                </div>
                <div class="down-content">
                  <a href="meeting-details.html"><h4>Profil Jawa Timur Park Group</h4></a>
                  <p>Zarawiicu - AD, Malang</p>
                  <p class="description">
                    Punakawan, kisah wayang asli Jawa, mewakili semangat theme park Jawa Timur Park Group. Kerendahan hati, kecerdasan, dan tawa yang ditunjukkan oleh Semar, Gareng, Petruk, Bagong diwujudkan oleh Jawa Timur Park Group dengan menghadirkan beberapa taman rekreasi keluarga di tengah ramainya Kota Batu. Seperti keempat Punakawan, Jatim Park Group seolah ingin mengingatkan kita: jangan lupa tertawa menikmati hidup di tengah kesibukan!

Tokoh Punakawan tersebut melekat dalam desain theme park Jawa Timur Park Group, yang terdiri dari 11 taman rekreasi di Surabaya dan Malang, serta 1 taman rekreasi di Jawa Barat. Wahana rekreasi Jawa Timur Park Group sangat bervariasi, mulai dari museum, kebun binatang, taman, hingga pusat permainan, yang semuanya ditujukan untuk anak dan keluarga. Untuk melengkapi kenyamanan wisata, Jawa Timur Park Group juga telah memfasilitasi 4 hotel di Jawa Timur.
                  </p>
                  
                </div>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="main-button-red">
                <a href="{{ route('home') }}">Back To Home</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    @endsection
