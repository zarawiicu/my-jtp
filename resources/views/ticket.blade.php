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
    <section class="contact-us" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 align-self-center">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="contact" action="" method="post">

                                <div class="col-lg-12">
                                    <h2>Booking tiketmu sekarang!!</h2>
                                </div>

                                <div id="booking-form_es_" class="alert alert-block alert-danger" style="display:none">
                                    <p>Please fix the following input errors:</p>
                                    <ul>
                                        <li>dummy</li>
                                    </ul>
                                </div>
                                <div class="col-lg-12">

                                    <label>Choose Your Vacation Date</label>
                                    <input name="Booking[booking_arrival_date]" id="Booking_booking_arrival_date"
                                        type="date" value="24-09-2024">

                                    <div class="clear"></div>
                                </div>

                                <div class="col-lg-12">
                                    <label class="step-desc">Choose Park</label>
                                    <select>

                                        <option value="1">JATIM PARK 1
                                </div>
                                <option value="2">JATIM PARK 2
                        </div>
                        <option value="3">Eco Green Park
                    </div>
                    <option value="4">Museum Angkut
                </div>
                <option value="5">BATU NIGHT SPECTACULAR (BNS)
            </div>
            <option value="6">PREDATOR FUN PARK
        </div>
        <option value="7">JATIM PARK 3</div>
        <option value="8">MILENIAL GLOW GARDEN</div>
        <option value="9">BATU LOVE GARDEN</div>


            </select>

            <input name="Booking" id="Booking_location_id" type="hidden" value="" />
            </div>
            <br>

            <div class="col-lg-12">
                <label class="step-desc">Fill In Your Data</label>
                <div class="form-group">
                    <label class="col-sm-2 control-label require" for="Booking_booking_contact_name">Contact Name <span
                            class="required">*</span></label>
                    <div class="col-sm-10">
                        <input autocomplete="off" name="Booking[booking_contact_name]" id="Booking_booking_contact_name"
                            class="form-control" type="text" />
                        <p id="Booking_booking_contact_name_em_" style="display:none" class="help-block"></p>
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label required"
                        for="Booking_booking_contact_email">E-mail <span class="required">*</span></label>
                    <div class="col-sm-10">
                        <input autocomplete="off" name="Booking[booking_contact_email]" id="Booking_booking_contact_email"
                            class="form-control" type="email" />
                        <p id="Booking_booking_contact_email_em_" style="display:none" class="help-block"></p>
                    </div>
                </div>

                <div class="form-group"><label class="col-sm-2 control-label required"
                        for="Booking_booking_contact_mobile">Mobile <span class="required">*</span></label>
                    <div class="col-sm-10"><input autocomplete="off" name="Booking[booking_contact_mobile]"
                            id="Booking_booking_contact_mobile" class="form-control" type="text" />
                        <p id="Booking_booking_contact_mobile_em_" style="display:none" class="help-block"></p>
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label"
                        for="Booking_booking_contact_phone">Phone</label>
                    <div class="col-sm-10"><input autocomplete="off" name="Booking[booking_contact_phone]"
                            id="Booking_booking_contact_phone" class="form-control" type="text" />
                        <p id="Booking_booking_contact_phone_em_" style="display:none" class="help-block"></p>
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label required"
                        for="Booking_booking_contact_address">Address <span class="required">*</span></label>
                    <div class="col-sm-10"><input maxLength="250" autocomplete="off"
                            name="Booking[booking_contact_address]" id="Booking_booking_contact_address"
                            class="form-control" type="text" maxlength="250" />
                        <p id="Booking_booking_contact_address_em_" style="display:none" class="help-block"></p>
                    </div>
                </div>
                <div class="form-group"><label class="col-sm-2 control-label required"
                        for="Booking_booking_contact_country">Country <span class="required">*</span></label>
                    <div class="col-sm-10"><select id="Booking_booking_contact_country"
                            name="Booking[booking_contact_country]" class="form-control">
                            <option value="">-- choose country --</option>
                            <option value="Indonesia" selected="selected">Indonesia</option>
                            <option value="Other">Other</option>
                        </select>
                        <p id="Booking_booking_contact_country_em_" style="display:none" class="help-block"></p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <label class="step-desc">Choose Your Country</label>
                    <select label="" id="Booking_city_id" name="Booking[city_id]" class="form-control">
                        <option value="">-- choose city --</option>
                        <option value="1">DKI Jakarta</option>
                        <option value="2">Surabaya</option>
                        <option value="3">Semarang</option>
                        <option value="4">Yogyakarta</option>
                        <option value="5">Bandung</option>
                        <option value="6">Malang</option>
                        <option value="7">Batu</option>
                        <option value="8">Medan</option>
                        <option value="9">Jayapura</option>
                        <option value="10">Denpasar</option>
                        <option value="11">Sidoarjo</option>
                        <option value="13">Bogor</option>
                        <option value="14">Banda Aceh</option>
                        <option value="15">Ambon</option>
                        <option value="16">Ambulu</option>
                        <option value="17">Amuntai</option>
                        <option value="18">Bandar Lampung</option>
                        <option value="19">Badung</option>
                        <option value="20">Balikpapan</option>
                        <option value="21">Bangil</option>
                        <option value="22">Bangkalan</option>
                        <option value="23">Banjarmasin</option>
                        <option value="24">Banjarbaru</option>
                        <option value="25">Banten</option>
                        <option value="26">Bantul</option>
                        <option value="27">Banyumas</option>
                        <option value="28">Banyuwangi</option>
                        <option value="29">Batam</option>
                        <option value="30">Bekasi</option>
                        <option value="31">Berau</option>
                        <option value="32">Blitar</option>
                        <option value="33">Langsa</option>
                        <option value="34">Lhokseumawe</option>
                        <option value="35">Meulaboh</option>
                        <option value="36">Sabang</option>
                        <option value="37">Subulussalam</option>
                        <option value="38">Pangkal Pinang</option>
                        <option value="39">Cilegon</option>
                        <option value="40">Serang</option>
                        <option value="41">Tangerang Selatan</option>
                        <option value="42">Tangerang</option>
                        <option value="43">Bengkulu</option>
                        <option value="44">Gorontalo</option>
                        <option value="45">Jakarta Barat</option>
                        <option value="46">Jakarta Selatan</option>
                        <option value="47">Jakarta Timur</option>
                        <option value="48">Jakarta Utara</option>
                        <option value="49">Sungai Penuh</option>
                        <option value="50">Jambi</option>
                        <option value="51">Cimahi</option>
                        <option value="52">Cirebon</option>
                        <option value="53">Depok</option>
                        <option value="54">Sukabumi</option>
                        <option value="55">Tasikmalaya</option>
                        <option value="56">Banjar</option>
                        <option value="57">Magelang</option>
                        <option value="58">Pekalongan</option>
                        <option value="59">Purwokerto</option>
                        <option value="60">Salatiga</option>
                        <option value="61">Tarakan</option>
                        <option value="62">Surakarta</option>
                        <option value="63">Tegal</option>
                        <option value="64">Kediri</option>
                        <option value="65">Madiun</option>
                        <option value="66">Mojokerto</option>
                        <option value="67">Pasuruan</option>
                        <option value="68">Probolinggo</option>
                        <option value="69">Pontianak</option>
                        <option value="70">Singkawang</option>
                        <option value="71">Palangkaraya</option>
                        <option value="72">Bontang</option>
                        <option value="73">Samarinda</option>
                        <option value="74">Tanjungpinang</option>
                        <option value="75">Metro</option>
                        <option value="76">Ternate</option>
                        <option value="77">Tidore Kepulauan</option>
                        <option value="78">Tual</option>
                        <option value="79">Bima</option>
                        <option value="80">Mataram</option>
                        <option value="81">Kupang</option>
                        <option value="82">Sorong</option>
                        <option value="83">Jayapura</option>
                        <option value="84">Dumai</option>
                        <option value="85">Pekanbaru</option>
                        <option value="86">Makassar</option>
                        <option value="87">Palopo</option>
                        <option value="88">Parepare</option>
                        <option value="89">Palu</option>
                        <option value="90">Bau-Bau</option>
                        <option value="91">Kendari</option>
                        <option value="92">Bitung</option>
                        <option value="93">Kotamobagu</option>
                        <option value="94">Manado</option>
                        <option value="95">Tomohon</option>
                        <option value="96">Bukittinggi</option>
                        <option value="97">Padang</option>
                        <option value="98">Padangpanjang</option>
                        <option value="99">Pariaman</option>
                        <option value="100">Payakumbuh</option>
                        <option value="101">Sawahlunto</option>
                        <option value="102">Solok</option>
                        <option value="103">Lubuklinggau</option>
                        <option value="104">Pagaralam</option>
                        <option value="105">Palembang</option>
                        <option value="106">Prabumulih</option>
                        <option value="107">Binjai</option>
                        <option value="108">Padang Sidempuan</option>
                        <option value="109">Pematangsiantar</option>
                        <option value="110">Sibolga</option>
                        <option value="111">Tanjungbalai</option>
                        <option value="112">Tebingtinggi</option>
                    </select>
                    <p id="Booking_city_id_em_" style="display:none" class="help-block"></p>
                </div>
            </div>

            <div class="form-group"><label class="col-sm-2 control-label" for="Booking_booking_remarks">Remarks</label>
                <div class="col-sm-10">
                    <textarea maxLength="250" rows="2" class="form-control" name="Booking[booking_remarks]"
                        id="Booking_booking_remarks"></textarea>
                    <p id="Booking_booking_remarks_em_" style="display:none" class="help-block"></p>
                </div>
            </div>

            <div style="text-align: right; margin-bottom: 20px;" class="form-actions"><button id="bookBtn"
                    class="btn btn-primary btn-lg" type="submit" name="yt0">Book
                    Now</button></div>
            </form>

            </div>
            </div>
        @endsection
