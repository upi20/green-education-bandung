@extends('templates.frontend.master')
@section('content')
    @php
        $p = 'setting.home';
        $k = "$p.hero";
    @endphp
    {{-- herro --}}
    @if (settings()->get("$k.visible"))
        <section data-anim-wrap class="masthead -type-5 pt-lg-0 pb-lg-0 bg-green-1 mt-lg-0">
            <div class="masthead__bg"></div>
            <div class="container">
                <div class="row y-gap-50 items-center d-lg-flex flex-row-reverse">

                    <div class="col-lg-6 col-image-logo">
                        <div class="masthead__content text-center">
                            <h1 data-anim-child="slide-up delay-1" class="text-white">
                                PROGRAM PENDIDIKAN <br> LINGKUNGAN HIDUP
                            </h1>
                            <img src="{{ asset('assets/templates/frontend/logo.png') }}" alt="" class="mt-20 mb-20">

                            <h1 data-anim-child="slide-up delay-2" class="masthead__title text-white">
                                GREEN EDUCATION BANDUNG
                            </h1>

                            <div class="col-auto mt-20" data-anim-child="slide-right delay-2">
                                <a href="{{ settings()->get("$k.video_link") }}" class="d-flex items-center js-gallery"
                                    data-gallery="gallery1">
                                    <div class="d-flex justify-center items-center size-60 rounded-full"
                                        style="border: 2px solid white;">
                                        <div class="icon-play text-20 text-white pl-5"></div>
                                    </div>
                                    <div class="ml-10 text-white">{{ settings()->get("$k.video_title") }}</div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 col-image-hero pt-0 pb-0">
                        <div data-anim-child="slide-up delay-3" class="masthead__image">
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    @foreach ($home_sliders as $slider)
                                        <div class="carousel-item  @if ($loop->first) active @endif">
                                            <img src="{{ "$home_slider_url/$slider->foto" }}" alt="{{ $slider->nama }}">
                                        </div>
                                    @endforeach
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif


    @php
        $p = 'setting.home';
        $k = "$p.about";
    @endphp
    {{-- deskripsi --}}
    @if (settings()->get("$k.visible"))
        <section data-anim-wrap class="cta -type-1 layout-pt-lg layout-pb-lg bg-dark-1 pb-0" style="padding-top: 460px">
            <div data-parallax="0.6" class="cta__bg">
                <div data-parallax-target class="bg-image js-lazy" data-bg="{{ asset(settings()->get("$k.foto1")) }}"
                    style="opacity: 0.7; background-size: contain;background-repeat: inherit;"></div>
            </div>
            <div class="bg-green-1">
                <div class="container pb-90 pt-60">
                    <h2 class="text-30md:text-30 text-white" data-anim-child="slide-up delay-1">
                        {{ settings()->get("$k.deskripsi1") }}
                    </h2>
                </div>
            </div>
        </section>
        <section data-anim-wrap class="cta -type-1 layout-pt-lg layout-pb-lg bg-dark-1 pt-0 pb-0">
            <div data-parallax="0.6" class="cta__bg">
                <div data-parallax-target class="bg-image js-lazy" data-bg="{{ asset(settings()->get("$k.foto2")) }}"
                    style="opacity: 0.7; background-size: contain;background-repeat: inherit;"></div>
            </div>
            <div class="row">
                <div class="col-lg-6 description-2"></div>
                <div class="col-lg-6">
                    <div class="bg-green-1 pl-lg-60 pt-60 pb-90">
                        <div style="max-width: 720px" class="container-lg">
                            <h2 class="text-30md:text-30 text-white" data-anim-child="slide-up delay-1">
                                {{ settings()->get("$k.deskripsi2") }}
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
    {{-- struktur --}}
    <section class="layout-pt-lg layout-pb-lg"
        style="background-image: url('{{ asset('assets/templates/frontend/img/home/struktur/bg.jpg') }}');  background-repeat: no-repeat;
        /* background-attachment: fixed; */
        background-position: center;
        background-size: cover;"
        data-anim-wrap>
        <div class="container">
            <div class="row y-gap-15 justify-between items-end" data-anim-child="slide-up delay-1">
                <div class="col-lg-6">
                    <div class="sectionTitle bg-white" style="padding: 8px; border-radius: 4px">
                        <h2 class="sectionTitle__title ">Struktur</h2>
                        <p class="sectionTitle__text ">Yayasan pendidikan bandung hijau</p>
                    </div>
                </div>
            </div>

            <div class="pt-60 lg:pt-40 js-section-slider " data-gap="30" data-pagination="js-students-slider-pagination"
                data-nav-prev="js-students-slider-prev" data-nav-next="js-students-slider-next"
                data-slider-cols="xl-4 lg-3 md-2" data-anim-child="slide-left delay-2">
                <div class="swiper-wrapper">

                    <div class="swiper-slide" data-anim-child="slide-left delay-3">
                        <div class="teamCard -type-2 bg-white shadow-4" style="min-height: 325px; border: 0">
                            <div class="teamCard__content pt-25">
                                <img src="{{ asset('assets/templates/frontend/img/home/struktur/dewan pengawas.jpg') }}"
                                    alt="image"
                                    style="margin: auto;position: relative;margin: auto;width: 150px;height: 150px;max-height: 150px;border-radius: 150px;object-fit: cover; /* cover, contain, fill, scale-down */object-position: center;-webkit-border-radius: 150px;-moz-border-radius: 150px;">
                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12 text-center">
                                    Hessy Widiyastuti, S.Psi, M.Pd
                                </h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5 text-center">
                                    Ketua Dewan Pembina
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-anim-child="slide-left delay-4">
                        <div class="teamCard -type-2 bg-white shadow-4" style="min-height: 325px; border: 0">
                            <div class="teamCard__content pt-25">
                                <img src="{{ asset('assets/templates/frontend/logo.png') }}" alt="image"
                                    style="margin: auto;position: relative;margin: auto;width: 150px;height: 150px;max-height: 150px;border-radius: 150px;object-fit: cover; /* cover, contain, fill, scale-down */object-position: center;-webkit-border-radius: 150px;-moz-border-radius: 150px;">
                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12 text-center">
                                    Rudi
                                </h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5 text-center">
                                    Dewan Pengawas
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-anim-child="slide-left delay-5">
                        <div class="teamCard -type-2 bg-white shadow-4" style="min-height: 325px; border: 0">
                            <div class="teamCard__content pt-25">
                                <img src="{{ asset('assets/templates/frontend/img/home/struktur/ketua yayasan.jpeg') }}"
                                    alt="image"
                                    style="margin: auto;position: relative;margin: auto;width: 150px;height: 150px;max-height: 150px;border-radius: 150px;object-fit: cover; /* cover, contain, fill, scale-down */object-position: center;-webkit-border-radius: 150px;-moz-border-radius: 150px;">
                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12 text-center">
                                    Boy Hidayat
                                </h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5 text-center">
                                    Ketua Yayasan
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-anim-child="slide-left delay-6">
                        <div class="teamCard -type-2 bg-white shadow-4" style="min-height: 325px; border: 0">
                            <div class="teamCard__content pt-25">
                                <img src="{{ asset('assets/templates/frontend/img/home/struktur/sekertaris.jpg') }}"
                                    alt="image"
                                    style="margin: auto;position: relative;margin: auto;width: 150px;height: 150px;max-height: 150px;border-radius: 150px;object-fit: cover; /* cover, contain, fill, scale-down */object-position: center;-webkit-border-radius: 150px;-moz-border-radius: 150px;">
                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12 text-center">
                                    Dadan S. Sumardja
                                </h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5 text-center">
                                    Sekertaris
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide" data-anim-child="slide-left delay-6">
                        <div class="teamCard -type-2 bg-white shadow-4" style="min-height: 325px; border: 0">
                            <div class="teamCard__content pt-25">
                                <img src="{{ asset('assets/templates/frontend/img/home/struktur/bendahara.jpeg') }}"
                                    alt="image"
                                    style="margin: auto;position: relative;margin: auto;width: 150px;height: 150px;max-height: 150px;border-radius: 150px;object-fit: cover; /* cover, contain, fill, scale-down */object-position: center;-webkit-border-radius: 150px;-moz-border-radius: 150px;">
                                <h4 class="teamCard__title text-17 lh-15 fw-500 mt-12 text-center">
                                    Chiechie Sari Rachma
                                </h4>
                                <div class="teamCard__subtitle text-14 lh-1 mt-5 text-center">
                                    Bendahara
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row pt-60 lg:pt-40">
                <div class="col-auto">
                    <div class="d-flex x-gap-15 justify-center items-center bg-white"
                        style="padding: 8px; border-radius: 4px">
                        <div class="col-auto">
                            <button class="d-flex items-center text-24 arrow-left-hover js-students-slider-prev">
                                <i class="icon icon-arrow-left"></i>
                            </button>
                        </div>
                        <div class="col-auto">
                            <div class="pagination -arrows js-students-slider-pagination"></div>
                        </div>
                        <div class="col-auto">
                            <button class="d-flex items-center text-24 arrow-right-hover js-students-slider-next">
                                <i class="icon icon-arrow-right"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- visi misi --}}
    <section class="layout-pt-lg layout-pb-md" data-anim-wrap>
        <div class="container">
            <div class="row justify-center text-center mb-60">
                <div class="col-auto">
                    <div class="sectionTitle ">
                        <h2 class="sectionTitle__title "data-anim-child="slide-up delay-1">Visi dan misi yayasan</h2>
                        <p class="sectionTitle__text " data-anim-child="slide-up delay-2">Sebagai pegangan dan pijakan
                            dalam melangkah</p>
                    </div>
                </div>
            </div>

            <div class="row y-gap-30 items-center" data-anim-child="slide-right delay-3">
                <div class="col-xl-5 offset-xl-1 col-lg-6">
                    <img class="w-1/1" src="{{ asset('assets/templates/frontend/img/home/visi-misi/visi.jpeg') }}"
                        style="border-radius: 8px" alt="image">
                </div>

                <div class="col-xl-4 offset-xl-1 col-lg-6" data-anim-child="slide-left delay-4">
                    <h3 class="text-24 lh-1">VISI YAYASAN</h3>
                    <p class="mt-20 text-24" style="line-height: 40px">Terciptanya generasi yang rahmatan lil'alamin,
                        yaitu masyarakat yang mampu
                        memberikan manfaat kepada sekitar serta mampu mengelola alam secara bijak, adil, dan lestari </p>
                </div>
            </div>
        </div>
    </section>
    <section class="layout-pt-md layout-pb-md" data-anim-wrap>
        <div class="container">
            <div class="row y-gap-30 items-center">
                <div class="col-xl-4 offset-xl-1 order-lg-1 col-lg-6 order-2" data-anim-child="slide-left delay-1">
                    <h3 class="text-24 lh-1">MISI YAYASAN </h3>
                    <p class="mt-20 text-24">
                    <ul>
                        <li class="text-20">
                            Menjadi Pusat Edukasi Lingkungan, Budaya, dan Kebangsaan yang berbasis kepada kearifan lokal
                            bangsa Indonesia.
                        </li>
                        <li class="text-20">
                            Menjadi Institusi Pengembangan Kreativitas Pengelolaan Sampah yang terbaik.
                        </li>
                        <li class="text-20">
                            Menjadi Model dalam Pengembangan Pendidikan Lingkungan Masyarakat.
                        </li>
                    </ul>
                    </p>
                </div>

                <div class="col-xl-5 offset-xl-1 col-lg-6 order-lg-2 order-1" data-anim-child="slide-right delay-2">
                    <img class="w-1/1" src="{{ asset('assets/templates/frontend/img/home/visi-misi/misi.jpeg') }}"
                        style="border-radius: 8px" alt="image">
                </div>
            </div>
        </div>
    </section>


    @php
        $k = "$p.galeri_kegiatan";
    @endphp
    @if (settings()->get("$k.visible"))
        <section class="layout-pt-lg layout-pb-lg bg-light-3" data-anim-wrap>
            <div class="container">
                <div class="row y-gap-15 justify-between items-end">
                    <div class="col-lg-6" data-anim="slide-right delay-3">

                        <div class="sectionTitle ">
                            <h2 class="sectionTitle__title ">{{ settings()->get("$k.title") }}</h2>
                            <p class="sectionTitle__text ">{{ settings()->get("$k.sub_title") }}</p>
                        </div>

                    </div>

                    <div class="col-auto" data-anim="slide-left delay-3">
                        <div class="d-flex justify-center x-gap-15 items-center">
                            <div class="col-auto">
                                <button class="d-flex items-center text-24 arrow-left-hover js-events-slider-prev">
                                    <i class="icon icon-arrow-left"></i>
                                </button>
                            </div>
                            <div class="col-auto">
                                <div class="pagination -arrows js-events-slider-pagination"></div>
                            </div>
                            <div class="col-auto">
                                <button class="d-flex items-center text-24 arrow-right-hover js-events-slider-next">
                                    <i class="icon icon-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="pt-60 lg:pt-40 js-section-slider" data-gap="30"
                    data-pagination="js-events-slider-pagination" data-nav-prev="js-events-slider-prev"
                    data-nav-next="js-events-slider-next" data-slider-cols="xl-3 lg-2">
                    <div class="swiper-wrapper">
                        @foreach ($galeri_list as $galery)
                            <div class="swiper-slide">
                                <div data-anim="slide-left delay-3" class="eventCard -type-1">
                                    <div class="eventCard__img">
                                        <img src="{{ "https://drive.google.com/uc?export=view&id={$galery->foto_id_gdrive}" }}"
                                            alt="{{ $galery->nama }}"
                                            style="width: 100%; height: 250px; object-fit: cover;">
                                    </div>

                                    <div class="eventCard__bg bg-white">
                                        <div class="eventCard__content y-gap-10">
                                            <div class="eventCard__inner">
                                                <h4 class="eventCard__title text-17 fw-500">
                                                    {{ $galery->nama }}
                                                </h4>
                                                <div class="d-flex x-gap-15 pt-10">
                                                    <div class="d-flex items-center">
                                                        <div class="icon-calendar-2 text-16 mr-8"></div>
                                                        <div class="text-14">{{ $galery->tanggal_str }}</div>
                                                    </div>
                                                    <div class="d-flex items-center">
                                                        <div class="icon-location text-16 mr-8"></div>
                                                        <div class="text-14">{{ $galery->lokasi }}</div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="eventCard__button">
                                                <a href="{{ route('galeri.detail', $galery->slug) }}"
                                                    class="button -sm -rounded -green-1 text-white px-25">Lihat</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="row pt-60 lg:pt-40" data-anim="slide-right delay-3">
                    <div class="col-auto">
                        <a href="{{ route('galeri') }}" class="button -icon -outline-green-1 text-green-1 fw-500">
                            {{ settings()->get("$k.button_text") }}
                            <span class="icon-arrow-top-right text-14 ml-10"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @php
        $k = "$p.artikel";
    @endphp
    @if (settings()->get("$k.visible"))
        <section class="layout-pt-md layout-pb-lg">
            <div data-anim-wrap class="container">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-lg-6" data-anim-child="slide-right delay-3">
                        <div class="sectionTitle ">
                            <h2 class="sectionTitle__title ">{{ settings()->get("$k.title") }}</h2>
                            <p class="sectionTitle__text ">{{ settings()->get("$k.sub_title") }}</p>
                        </div>
                    </div>

                    <div class="col-auto" data-anim-child="slide-left delay-3">
                        <a href="{{ route('artikel') }}" class="button -icon -green-1 text-white">
                            {{ settings()->get("$k.button_text") }}
                            <i class="icon-arrow-top-right text-13 ml-10"></i>
                        </a>
                    </div>
                </div>

                <div class="row y-gap-30 pt-50">
                    @foreach ($articles as $k => $a)
                        @if ($k > 1)
                            @continue
                        @endif
                        <div class="col-lg-4 col-md-6">
                            <div data-anim-child="slide-left delay-3" class="blogCard -type-1">
                                @php
                                    $get_id_yt = check_image_youtube($a->detail);
                                    $youtube = $get_id_yt ? true : false;
                                    $foto = $a->foto ? asset($a->foto) : 'https://i.ytimg.com/vi/' . $get_id_yt . '/sddefault.jpg';
                                @endphp
                                <div class="blogCard__image">
                                    <img src="{{ $foto }}" alt="{{ $a->nama }}"
                                        style="width: 100%; height: 300px; object-fit: cover;">
                                </div>
                                <div class="blogCard__content">
                                    @if ($a->kategori)
                                        <a href="{{ url("artikel?kategori=$a->kategori_slug") }}" class=" text-green-1"
                                            title="Kategori {{ $a->kategori }}">
                                            {{ $a->kategori }}
                                        </a>
                                    @elseif ($a->tag)
                                        <a href="{{ url("artikel?tag=$a->tag_slug") }}" class=" text-green-1"
                                            title="tag {{ $a->tag }}">
                                            {{ $a->tag }}
                                        </a>
                                    @endif
                                    <h4 class="blogCard__title">
                                        <a href="{{ route('artikel.detail', $a->slug) }}">{{ $a->nama }}</a>
                                    </h4>
                                    <div class="blogCard__date">{{ $a->date_full }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="col-lg-4">
                        <div class="row y-gap-30">

                            @foreach ($articles as $k => $a)
                                @if ($k < 2)
                                    @continue
                                @endif
                                <div class="col-lg-12 col-md-6">
                                    <a href="{{ route('artikel.detail', $a->slug) }}"
                                        data-anim-child="slide-left delay-3" class="eventCard -type-4">
                                        <div class="eventCard__date bg-light-7 mr-20"
                                            style="min-width: 100px; min-height: 100px">
                                            <span class="text-30 lh-1 text-green-1 fw-700">{{ $a->date_str }}</span>
                                            <span
                                                class="text-18 lh-1 text-green-1 fw-500 uppercase mt-10">{{ $a->month_str }}</span>
                                        </div>

                                        <div class="eventCard__content">
                                            @if ($a->kategori)
                                                {{-- <a href="{{ url("?kategori=$a->kategori_slug") }}"
                                                    class="text-13 lh-1 fw-500 uppercase text-green-1"
                                                    title="Kategori {{ $a->kategori }}">
                                                    {{ $a->kategori }}
                                                    </a> --}}
                                                <div class="text-13 lh-1 fw-500 uppercase text-green-1">
                                                    {{ $a->kategori }}
                                                </div>
                                            @elseif ($a->tag)
                                                {{-- <a href="{{ url("?tag=$a->tag_slug") }}"
                                                    class="text-13 lh-1 fw-500 uppercase text-green-1"
                                                    title="tag {{ $a->tag }}">
                                                    {{ $a->tag }}
                                                    </a> --}}
                                                <div class="text-13 lh-1 fw-500 uppercase text-green-1">
                                                    {{ $a->tag }}
                                                </div>
                                            @endif
                                            <h4 class="text-17 lh-15 fw-500 mt-10"> {{ $a->nama }}</h4>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    {{-- terima kasih --}}
    @php
        $image_asset = 'assets/templates/frontend/img/home/terima-kasih/1.jpeg';
        $img_thx_attr = get_file_attr_attribute("./$image_asset");
    @endphp
    {{-- <section class="bg-green-3" data-anim-wrap
        style="background-image: url('{{ asset($image_asset) }}');
        background-repeat: no-repeat;
        background-position: center;
        height: {{ $img_thx_attr->height }}px;"> --}}
    <section class="bg-green-3 text-center" data-anim-wrap style="height: 720px">
        <img src="{{ asset($image_asset) }}" alt=""
            style="height: 100%;
            object-fit: cover; /* cover, contain, fill, scale-down */
            object-position: center;">

        <div style="position: absolute;margin-top: -720px;width: 100%;" data-anim-child="slide-top delay-1">
            <img src="{{ asset('assets/logo.png') }}" alt="" style="margin-top:60px; width: 150px"
                id="image-thank">
            <h1 class="text-white mt-25">TERIMA KASIH</h1>
        </div>

        <div class="d-flex justify-content-center"
            style="position: absolute;margin-top: -160px;width: 100%;text-align: center;">
            <div class="bg-green-1 pt-20 pb-20 pl-20 pr-20" style="max-width: 960px;border-radius: 8px;opacity: 0.5;">
                <h3 class="text-white text-alamat" data-anim-child="slide-top delay-1">
                    GREEN EDUCATION BANDUNG / YAYASAN PENDIDIKAN BANDUNG HIJAU
                    JL. INTAN RAYA NO. 4 SADANG SERANG - BANDUNG (081322728628)
                </h3>
            </div>
        </div>

        <div class="d-flex justify-content-center"
            style="position: absolute;margin-top: -160px;width: 100%;text-align: center;">
            <div class="pt-20 pb-20 pl-20 pr-20" style="max-width: 960px;border-radius: 8px;">
                <h3 class="text-white text-alamat" data-anim-child="slide-top delay-2">
                    GREEN EDUCATION BANDUNG / YAYASAN PENDIDIKAN BANDUNG HIJAU
                    JL. INTAN RAYA NO. 4 SADANG SERANG - BANDUNG (081322728628)
                </h3>
            </div>
        </div>

    </section>
@endsection


@section('javascript')
    <script>
        var myCarousel = document.querySelector('#carouselExampleControls');
        var carousel = new bootstrap.Carousel(myCarousel);

        $(window).resize(function() {
            const width = $(this).width();
            set_thx_width(width);
        });

        function set_thx_width(width) {
            const el = $('.text-alamat');
            if (width < 320) {
                el.addClass('text-18');
                el.removeClass('text-20');
            } else if (width < 768) {
                el.removeClass('text-18');
                el.addClass('text-20');
            } else {
                el.removeClass('text-20');
                el.removeClass('text-18');
            }
        }

        set_thx_width($(window).width());
    </script>
@endsection
