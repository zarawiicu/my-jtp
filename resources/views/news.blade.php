@extends('template.app')
@section('content')

  <section class="heading-page header-text" id="top" style="background-image: url('assets/images/sub-bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Here are our update news</h6>
          <h2>Breaking News</h2>
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
              <div class="filters">
                <ul>
                  <li data-filter="*"  class="active">All Meetings</li>
                  <li data-filter=".soon">Soon</li>
                  <li data-filter=".imp">Important</li>
                  <li data-filter=".att">Attractive</li>
                </ul>
              </div>
            </div>
            <div class="col-lg-12">
              <div class="row grid">
                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                    
                      <a href="meeting-details.html"><img src="assets/images/news1.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>12</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>9 Experience Seru</h4></a>
                      <p>TP.ID - Setiap tahun, Jatim Park Group tidak pernah berhenti menghadirkan experience baru yang mengesankan bagi para pengunjungnya. Inilah 9 experience terbaru yang bisa menjadi pilihan menarik untuk merayakan liburan akhir tahunmu.  </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="meeting-details.html"><img src="assets/images/news2.png" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>14</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Penghargaan BETD</h4></a>
                      <p>Kota Batu Jawa Timur Park kembali menorehkan prestasi yang membanggakan. Kali ini prestasi diperoleh dari Times Indonesia dalam kegiatan “Anugerah Times Indonesia 2023”. Minggu, 17 Desember 2023 yang bertempat di Hotel Grand Mercure Malang Mirama. </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      
                      <a href="meeting-details.html"><img src="assets/images/news3.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>16</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Drive-Thru Park</h4></a>
                      <p>konsep terobosan—”Drive Thru Park” pertama di dunia. Park inovatif ini menawarkan pengunjung pengalaman yang unik dan nyaman di mana anda dapat menjelajahi 17 area tematik secara private tanpa perlu berjalan-jalan yang melelahkan.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/news1.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>18</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>9 Experience Seru</h4></a>
                      <p>TP.ID - Setiap tahun, Jatim Park Group tidak pernah berhenti menghadirkan experience baru yang mengesankan bagi para pengunjungnya. Inilah 9 experience terbaru yang bisa menjadi pilihan menarik untuk merayakan liburan akhir tahunmu.  </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/news2.png" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>22</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Penghargaan BETD</h4></a>
                      <p>Kota Batu Jawa Timur Park kembali menorehkan prestasi yang membanggakan. Kali ini prestasi diperoleh dari Times Indonesia dalam kegiatan “Anugerah Times Indonesia 2023”. Minggu, 17 Desember 2023 yang bertempat di Hotel Grand Mercure Malang Mirama. </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/news3.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>24</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Drive-Thru Park</h4></a>
                      <p>konsep terobosan—”Drive Thru Park” pertama di dunia. Park inovatif ini menawarkan pengunjung pengalaman yang unik dan nyaman di mana anda dapat menjelajahi 17 area tematik secara private tanpa perlu berjalan-jalan yang melelahkan.</p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all imp att">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/news1.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>27</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>9 Experience Seru</h4></a>
                      <p>TP.ID - Setiap tahun, Jatim Park Group tidak pernah berhenti menghadirkan experience baru yang mengesankan bagi para pengunjungnya. Inilah 9 experience terbaru yang bisa menjadi pilihan menarik untuk merayakan liburan akhir tahunmu.  </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all soon imp">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/news2.png" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>28</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Penghargaan BETD</h4></a>
                      <p>Kota Batu Jawa Timur Park kembali menorehkan prestasi yang membanggakan. Kali ini prestasi diperoleh dari Times Indonesia dalam kegiatan “Anugerah Times Indonesia 2023”. Minggu, 17 Desember 2023 yang bertempat di Hotel Grand Mercure Malang Mirama. </p>
                    </div>
                  </div>
                </div>

                <div class="col-lg-4 templatemo-item-col all att soon">
                  <div class="meeting-item">
                    <div class="thumb">
                      <a href="meeting-details.html"><img src="assets/images/news3.jpg" alt=""></a>
                    </div>
                    <div class="down-content">
                      <div class="date">
                        <h6>Nov <span>30</span></h6>
                      </div>
                      <a href="meeting-details.html"><h4>Drive-Thru Park</h4></a>
                      <p>konsep terobosan—”Drive Thru Park” pertama di dunia. Park inovatif ini menawarkan pengunjung pengalaman yang unik dan nyaman di mana anda dapat menjelajahi 17 area tematik secara private tanpa perlu berjalan-jalan yang melelahkan.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            
            <div class="col-lg-12">
              <div class="pagination">
                <ul>
                <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
                  <li><a href="#">1</a></li>
                  <li class="active"><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

 @endsection
