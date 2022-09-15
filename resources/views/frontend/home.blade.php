@extends('templates.frontend.master')
@section('content')
    @php
        $p = 'setting.home';
        $k = "$p.hero";
    @endphp
    <section data-anim-wrap class="mainSlider -type-1 js-mainSlider">
        <div class="swiper-wrapper">

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="{{ asset(settings()->get("$k.image")) }}"></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="{{ asset(settings()->get("$k.image")) }}"></div>
                </div>
            </div>

            <div class="swiper-slide">
                <div data-anim-child="fade" class="mainSlider__bg">
                    <div class="bg-image js-lazy" data-bg="{{ asset(settings()->get("$k.image")) }}"></div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="row justify-center text-center">
                <div class="col-xl-6 col-lg-8">
                    <div class="mainSlider__content">
                        <h1 data-anim-child="slide-up delay-3" class="mainSlider__title text-white">
                            Green Education Bandung</span>
                        </h1>

                        <p data-anim-child="slide-up delay-4" class="mainSlider__text text-white">
                            Konsultan Lingkungan
                        </p>

                        <div data-anim-child="slide-up delay-5" class="mainSlider__form">
                            <input type="text" placeholder="Mau konsultasi sekarang?">
                            <button class="button -md -purple-1 text-white">
                                <i class="fab fa-whatsapp mr-15"></i>
                                Konsultasi
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <div data-anim-child="slide-up delay-6" class="row y-gap-20 justify-center mainSlider__items">

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <i class="fas fa-book-open text-white text-30"></i>
                        <h4 class="text-20 fw-500 lh-18 text-white mt-8">100,000 courses</h4>
                        <p class="text-15 text-white">Explore a variety of fresh topics</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <i class="fas fa-chalkboard-teacher text-white text-30"></i>
                        <h4 class="text-20 fw-500 lh-18 text-white mt-8">Expert instruction</h4>
                        <p class="text-15 text-white">Find the right instructor for you</p>
                    </div>
                </div>

                <div class="col-xl-3 col-md-4 col-sm-6">
                    <div class="mainSlider-item text-center">
                        <i class="fas fa-globe-asia text-white text-30"></i>
                        <h4 class="text-20 fw-500 lh-18 text-white mt-8">Go Green</h4>
                        <p class="text-15 text-white">Comfortable living green environment</p>
                    </div>
                </div>

            </div>
        </div>

        <button
            class="swiper-prev button -white-20 text-white size-60 rounded-full d-flex justify-center items-center js-prev">
            <i class="icon icon-arrow-left text-24"></i>
        </button>

        <button
            class="swiper-next button -white-20 text-white size-60 rounded-full d-flex justify-center items-center js-next">
            <i class="icon icon-arrow-right text-24"></i>
        </button>
    </section>

    @if (settings()->get("$k.visible"))
        <section data-anim-wrap class="masthead -type-4 bg-light-6  animated pt-30" style="margin-top: 0">
            <div class="container pt-60">
                <div class="row justify-center items-center">
                    <div class="col-xl-5 col-lg-6">
                        <div class="masthead__content pb-50">
                            <h1 data-anim-child="slide-up delay-3" class="masthead__title">
                                {{ settings()->get("$k.title") }}<br>
                                </span>
                            </h1>
                            <p data-anim-child="slide-right delay-3" class="masthead__text pt-15">
                                {!! settings()->get("$k.sub_title") !!}
                            </p>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-6" style="padding-bottom: 0;">
                        <div data-anim-child="slide-left delay-3" class="masthead__image">
                            <img src="{{ asset(settings()->get("$k.image")) }}" alt="image"
                                style="position: relative; top: 1px;">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- galeri kegiatan -->
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

                <div class="pt-60 lg:pt-40 js-section-slider" data-gap="30" data-pagination="js-events-slider-pagination"
                    data-nav-prev="js-events-slider-prev" data-nav-next="js-events-slider-next"
                    data-slider-cols="xl-3 lg-2">
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
                                                    class="button -sm -rounded -blue-1 text-white px-25">Lihat</a>
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
                        <a href="{{ route('galeri') }}" class="button -icon -outline-blue-1 text-blue-1 fw-500">
                            {{ settings()->get("$k.button_text") }}
                            <span class="icon-arrow-top-right text-14 ml-10"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
    @endif

    <!-- blog dan artikel -->
    @php
        $k = "$p.artikel";
    @endphp
    @if (settings()->get("$k.visible"))
        <section class="layout-pt-md layout-pb-lg">
            <div data-anim-wrap class="container">
                <div class="row y-gap-20 justify-between items-center">
                    <div class="col-lg-6"data-anim-child="slide-right delay-3">
                        <div class="sectionTitle ">
                            <h2 class="sectionTitle__title ">{{ settings()->get("$k.title") }}</h2>
                            <p class="sectionTitle__text ">{{ settings()->get("$k.sub_title") }}</p>
                        </div>
                    </div>

                    <div class="col-auto" data-anim-child="slide-left delay-3">
                        <a href="{{ route('artikel') }}" class="button -icon -blue-3 text-white">
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
                                        <a href="{{ url("artikel?kategori=$a->kategori_slug") }}" class=" text-blue-1"
                                            title="Kategori {{ $a->kategori }}">
                                            {{ $a->kategori }}
                                        </a>
                                    @elseif ($a->tag)
                                        <a href="{{ url("artikel?tag=$a->tag_slug") }}" class=" text-blue-1"
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
                                            <span class="text-30 lh-1 fw-700">{{ $a->date_str }}</span>
                                            <span class="text-18 lh-1 fw-500 uppercase mt-10">{{ $a->month_str }}</span>
                                        </div>

                                        <div class="eventCard__content">
                                            @if ($a->kategori)
                                                {{-- <a href="{{ url("?kategori=$a->kategori_slug") }}"
                                                    class="text-13 lh-1 fw-500 uppercase text-blue-1"
                                                    title="Kategori {{ $a->kategori }}">
                                                    {{ $a->kategori }}
                                                    </a> --}}
                                                <div class="text-13 lh-1 fw-500 uppercase text-blue-1">
                                                    {{ $a->kategori }}
                                                </div>
                                            @elseif ($a->tag)
                                                {{-- <a href="{{ url("?tag=$a->tag_slug") }}"
                                                    class="text-13 lh-1 fw-500 uppercase text-blue-1"
                                                    title="tag {{ $a->tag }}">
                                                    {{ $a->tag }}
                                                    </a> --}}
                                                <div class="text-13 lh-1 fw-500 uppercase text-blue-1">
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
@endsection
