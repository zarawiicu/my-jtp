@extends('template.app')
@section('content')
    <!-- ***** Main Banner Area Start ***** -->
    <section class="section main-banner" id="top" data-section="section1">
        <video autoplay muted loop id="bg-video">
            <source src="{{ asset('assets/images/jtp-video.mp4') }}" type="video/mp4" />
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
                                <div class="scroll-to-section"><a href="{{ asset('profile-group') }}">Find Out More</a>
                                </div>
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
                            <a href="#">All Latest Event</a>
                        </div>
                    </div>
                </div>


                @foreach ($events as $event)
                    <div class="row grid" style="grid-template-coloums: 1fx 1fx;">
                        <div class="col-lg-4 templatemo-item-col all imp">
                            <div class="meeting-item">
                                <div class="thumb">
                                    <img src="{{ asset('storage/' . $event->gambar) }}" alt="Event Image">
                                </div>
                                <div class="down-content">
                                    <h5 class="card-title">{{ $event->judul }}</h5>
                                    <p class="card-text">{{ $event->deskripsi }}</p>
                                    <a href="#" class="btn btn-block btn-outline-primary">Read</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
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
                        <a href="https://www.youtube.com/watch?v=HndV87XpkWg" target="_blank"><img
                                src="{{ asset('assets/images/play-icon.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    @endsection
