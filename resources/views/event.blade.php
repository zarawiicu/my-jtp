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

                <div class="col-lg-12">
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

                <div class="flex flex-col flex-wrap">
                    <div class="col-lg-12">
                        <div class="row" style="gap: 15px; margin-top:15%; border-top:5px solid white">
                            @foreach ($events as $event)
                                <div class="col-lg-4" style="margin-top:10%">
                                    <div class="meeting-item">
                                        <div class="thumb">
                                            <img src="{{ asset('images/' . $event->gambar) }}" alt="Event Image" width="200px" height="150px">
                                        </div>
                                        <div class="down-content">
                                            <h5 class="card-title">{{ $event->judul }}</h5>
                                            <p class="card-text">{{ $event->deskripsi }}</p>
                                            <a href="#" class="btn btn-block btn-outline-primary w-full">Read</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
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
                            <h2>Some facts about our group</h2>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content percentage">
                                        <div class="count-digit">94</div>
                                        <div class="count-title">Solid</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="count-area-content">
                                        <div class="count-digit">126</div>
                                        <div class="count-title">Aboard</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-12">
                                    <div class="count-area-content new-students">
                                        <div class="count-digit">2345</div>
                                        <div class="count-title">Local</div>
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
                        <a href="https://youtu.be/FuNJOCYCWLM?si=btWsZ4sVOZRDHFsF" target="_blank"><img src=" {{ asset('assets/images/play-icon.png') }}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    {{-- </section> --}}
    @endsection
