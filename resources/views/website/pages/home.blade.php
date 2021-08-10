@extends('website.layouts.main')

@php
    $meta = meta('homepage', ['body', 'btnText', 'btnLink']);
@endphp

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('content')

    <x-slider/>

    <x-solutions/>

    <section class="ss_section_three spacer_bottom">
        <!--===== Section Three Start =====-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <div  data-aos="fade-up" class="ss_three_left">
                        <img class="img-fluid" src="assets/images/servis.png" alt="image" />
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <div class="ss_three_right">
                        <!-- <h3>best service</h3> -->
                        <h1>EvSun-a xoş gəldiniz</h1>
                        <p>2020-ci ildə təsis edilmiş EvSun şirkəti, Smartek Technologies və SmartAgro Solutions şirkətlər qrupuna daxil olan yeni bölmədir. EvSun şirkəti günəş elektrik stansiyaları, elektrik verilişi üçün yükləmə (şarj) stansiyaları, avtomatlaşdırma
                            və idarəetmə sistemlərinin layihələndirilməsi, tətbiqi və texniki xidmətində ixtisaslaşıb. Bizim komandamızda öz işinin peşəkarları, Energetika, Avtomatika və İnformasiya texnologiyaları sahəsində ixtisaslı mühəndislər çalışır.</p>
                        <a href="service.html" class="ss_btn mt-4">Ətraflı</a>
                    </div>
                </div>
            </div>
            <div class="ss_shape_one">
                <div class="ss_shape"></div>
            </div>
            <div class="ss_shape_dot"></div>
        </div>
    </section>
    <!--===== Section Three End =====-->

    <x-services/>

    <x-brands/>

    <x-blog/>

@endsection
