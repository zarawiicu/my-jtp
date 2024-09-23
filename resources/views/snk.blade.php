@extends('template.app')
@section('content')

  <section class="heading-page header-text" id="top" style="background-image: url('assets/images/sub-bg.jpg');">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h6>Get all details</h6>
          <h2>Online Teaching and Learning Tools</h2>
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
                  <a href="meeting-details.html"><img src="assets/images/single-meeting.jpg" alt=""></a>
                </div>
                <div class="down-content">
                  <a href="meeting-details.html"><h4>Syarat dan ketentuan</h4></a>
                  <p>yang ditetapkan di bawah ini mengatur pemakaian jasa online Jawa Timur Park Group terkait penggunaan website www.jtp.id. Pelanggan disarankan membaca dengan saksama karena dapat berdampak kepada hak dan kewajiban pelanggan di bawah hukum.

                    Dengan mengakses dan/atau mengunakan website www.jtp.id, maka pelanggan dianggap telah membaca, mengerti, memahami dan menyetujui semua isi dalam syarat dan ketentuan yang telah ditetapkan.</p>
                    <ol>
                    <li><p class="description">1. DEFINISI</p></li>
<ol>
    <li><p>a) Jawa Timur Park Group adalah jasa online yang dimiliki dan dioperasikan oleh PT Bunga Wangsa Sedjati.</p></li>
    <li><p>b) Situs Jawa Timur Park Group adalah www.jtp.id.</p></li>
    <li><p>c) Syarat & Ketentuan adalah perjanjian antara pelanggan dan Jawa Timur Park Group yang berisikan seperangkat peraturan yang mengatur hak, kewajiban, tanggung jawab pelanggan dan Jawa Timur Park Group, serta tata cara penggunaan sistem layanan Jawa Timur Park Group.</p></li>
    <li><p>d) Pelanggan adalah pengguna yang melakukan pembelian atas barang berupa tiket masuk theme park Jawa Timur Park Group yang dijual di situs www.jtp.id..</p></li>
    <li><p>e) www.jtp.id adalah situs jasa online yang melakukan tindakan menjual tiket masuk theme park Jawa Timur Park Group.</p></li>
    <li><p>f) Tiket adalah benda berupa gelang yang diikatkan di pergelangan tangan sebagai tanda masuk theme park.</p></li>
    <li><p>g) Rekening resmi Jawa Timur Park Group adalah rekening bank yang telah bekerja sama untuk proses transaksi jual beli di situs www.jtp.id.</p></li>
</ol>

                </ol>

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
