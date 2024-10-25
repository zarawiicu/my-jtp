@extends('template.app')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="heading-page header-text" id="top" style="background-image: url('{{ asset('assets/images/sub-bg.jpg') }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h6>Get promo details</h6>
                    <h2>information about the promo</h2>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="col-lg-8" style="margin-left:580px;margin-top:100px;">
            <div class="row">
                <div class="col-lg-6" style=" box-shadow: 10px 10px 15px 5px rgba(0, 0, 0, 0.3); border-radius: 20px">
                    <div class="meeting-item">
                        <div class="thumb">
                            <div class="price">
                                <span>50k</span>
                            </div>
                            <a href="meeting-details.html"><img src="{{ asset('assets/images/diskon.jpg') }}" alt="New Lecturer Meeting" style="border-radius: 10px; padding: 10px;padding-top:15px"></a>
                        </div>
                        <div class="down-content">
                            <div class="date">
                                <h6>Nov <span>10</span></h6>
                            </div>
                            <a href="meeting-details.html">
                                <h4>Diskon 50%</h4>
                            </a>
                            <p>Syarat & Ketentuan :

                                – Kunjungan pada themepark ( tertanda diskon ) dilakukan di hari yang sama

                                – Gelang tiket pada kunjungan themepark pertama tidak rusak atau lepas

                                – Diskon tidak berlaku untuk kunjungan langsung pada themepark yang (tertanda diskon )

                                – Harga yang tertulis adalah harga normal atau belum termasuk potongan diskon

                                – Khusus pembelian tiket the legend stars + museum musik dunia / fun tech plaza akan mendapatkan *Free Tiket ke Secret Journey*</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
