@extends('website.layouts.main')

@php
    $meta = meta('contact');
@endphp

@section('title', $meta->get('title'))
@section('description', $meta->get('meta_description'))
@section('keywords', $meta->get('meta_keywords'))

@section('content')
    @include('website.components.breadcrumb', ['image' => $meta->image(), 'links' =>  [$meta->get('title') ]])




    <section class="ss_map">
        <iframe
            src="https://maps.google.com/maps?q={{setting('site.address')}}&t=&z=15&ie=UTF8&iwloc=&output=embed"
            class="google-map__home"
            allowfullscreen
        >
        </iframe>
    </section>
    <section class="ss_contact ss_section_sec_bg spacer_bottom">
        <!--===== Form Section Start =====-->
        <div class="container-fluid">
            <div class="ss_box_wbg">
                <div class="row">
                    <div class="col-lg-4 col-md-5">
                        <div class="ss_contact_left">
                            <div class="ss_contact_one d-flex align-items-center">
                                <svg
                                    viewBox="0 -1 512 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                >
                                    <path
                                        d="m204.5 458.605469v51.855469l-12.539062-10.128907c-1.9375-1.566406-48.035157-38.992187-94.78125-92.660156-64.484376-74.035156-97.179688-140.492187-97.179688-197.519531v-5.652344c0-112.761719 91.738281-204.5 204.5-204.5s204.5 91.738281 204.5 204.5v5.652344c0 4.789062-.253906 9.652344-.714844 14.574218l-39.992187-36.484374c-8.191407-83.15625-78.519531-148.339844-163.792969-148.339844-90.757812 0-164.597656 73.839844-164.597656 164.597656v5.652344c0 96.367187 124.164062 213.027344 164.597656 248.453125zm122.699219-28.660157h59.851562v-59.851562h-59.851562zm-122.699219-310.238281c46.753906 0 84.792969 38.039063 84.792969 84.792969s-38.039063 84.792969-84.792969 84.792969-84.792969-38.039063-84.792969-84.792969 38.039063-84.792969 84.792969-84.792969zm0 39.902344c-24.753906 0-44.890625 20.136719-44.890625 44.890625 0 24.75 20.136719 44.890625 44.890625 44.890625 24.75 0 44.890625-20.140625 44.890625-44.890625 0-24.753906-20.140625-44.890625-44.890625-44.890625zm280.609375 243.222656-11.21875-10.234375v64.058594c0 29.828125-24.269531 54.09375-54.097656 54.09375h-126.332031c-29.828126 0-54.097657-24.265625-54.097657-54.09375v-64.058594l-11.21875 10.234375-26.890625-29.476562 155.371094-141.746094 155.375 141.746094zm-51.121094-46.636719-77.363281-70.574218-77.359375 70.574218v100.457032c0 7.828125 6.367187 14.195312 14.195313 14.195312h126.332031c7.828125 0 14.195312-6.367187 14.195312-14.195312zm0 0"
                                    ></path>
                                </svg>
                                <div class="d-block">
                                <h2>Ünvan:</h2>
                                <p>{{setting('site.address')}}</p>
                                <p>{{setting('site.address_additional')}}</p>
                                </div>
                            </div>
                            <div class="ss_contact_two d-flex align-items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 485.211 485.211"
                                >
                                    <g>
                                        <path
                                            d="M485.211,363.906c0,10.637-2.992,20.498-7.785,29.174L324.225,221.67l151.54-132.584
                      c5.895,9.355,9.446,20.344,9.446,32.219V363.906z M242.606,252.793l210.863-184.5c-8.653-4.737-18.397-7.642-28.908-7.642H60.651
                      c-10.524,0-20.271,2.905-28.889,7.642L242.606,252.793z M301.393,241.631l-48.809,42.734c-2.855,2.487-6.41,3.729-9.978,3.729
                      c-3.57,0-7.125-1.242-9.98-3.729l-48.82-42.736L28.667,415.23c9.299,5.834,20.197,9.329,31.983,9.329h363.911
                      c11.784,0,22.687-3.495,31.983-9.329L301.393,241.631z M9.448,89.085C3.554,98.44,0,109.429,0,121.305v242.602
                      c0,10.637,2.978,20.498,7.789,29.174l153.183-171.44L9.448,89.085z"
                                        ></path>
                                    </g>
                                </svg>
                                <div class="d-block">
                                <h2>Email:</h2>
                                <p>{{setting('site.mail')}}</p>
                                </div>
                            </div>
                            <div class="ss_contact_three d-flex align-items-center">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    viewBox="0 0 488.532 488.532"
                                >
                                    <g>
                                        <path
                                            d="M363.06,209.3c-2.1,0.5-3.6,2.1-5.7,2.6c-2.6,1-4.7,1.6-7.3,2.1c-3.1,0.5-5.2-1.6-6.2-4.2c-0.5-2.6-1-4.7-0.5-7.3
                        c0.5-4.7,1.6-9.4,2.6-14.1c2.6-14.1,5.2-28.6,7.8-42.7c0.5-3.6,1.6-7.8,1-11.5c0-4.7-3.1-6.8-7.8-6.8c-6.2,0-13,0-19.3,0
                        s-12.5,0-18.2,0c-1.6,0-3.1,0-4.7,0.5c-2.6,0.5-4.2,2.1-4.7,4.2c0,1.6,1,3.6,3.6,4.7c2.1,0.5,4.2,1,6.8,1c5.2,0.5,6.8,2.6,6.8,7.8
                        c0,1,0,1.6,0,2.6c-2.1,12.5-4.2,25-6.8,37.5c-1,7.3-2.1,14.6-3.1,21.3c-1.6,10.4,8.9,20.3,16.7,21.3c4.7,0.5,9.9,1,14.6,1
                        c10.4,0,19.3-4.7,26.6-12c1-1,2.6-3.1,2.6-4.7C368.26,209.9,366.16,207.8,363.06,209.3z"
                                        ></path>
                                        <path
                                            d="M443.26,45.3c-59.9-60.4-157.3-60.4-217.1,0c-57.8,57.8-59.9,150-6.2,210.4l1,1c-5.7,12.5-16.1,28.1-31.8,35.9
                        c-5.2,2.6-4.2,10.4,1.6,11.5c17.7,2.6,42.7,0,65.6-17.7l0.5,0.5c58.8,34.4,135.9,26.6,186.4-24
                        C503.16,202.6,503.16,105.2,443.26,45.3z M334.96,271.8c-65.1,0-117.7-52.6-117.7-117.7s52.6-117.6,117.7-117.6
                        s117.7,52.6,117.7,117.7S400.06,271.8,334.96,271.8z"
                                        ></path>
                                        <path
                                            d="M288.56,359.3c-12-12.5-27.6-12.5-40.1,0c-9.4,9.4-18.7,18.7-28.1,28.1c-2.6,2.6-4.7,3.1-7.8,1.6
                        c-5.7-3.6-12.5-6.2-18.2-9.9c-27.1-17.2-50-39.1-70.3-64c-9.9-12.5-18.7-25.5-25-40.6c-1-3.1-1-4.7,1.6-7.3
                        c9.9-8.9,18.7-18.2,28.1-27.6c13-13,13-28.1,0-41.1c-7.8-7.8-15.1-15.1-22.4-22.4c-7.8-7.8-15.1-15.6-22.9-22.9
                        c-12-12-27.6-12-40.1,0c-9.4,9.4-18.7,18.7-28.1,28.1c-8.9,8.9-13.5,19.3-14.6,31.2c-1.6,19.3,3.1,38,9.9,56.2
                        c14.1,38,35.4,70.8,60.9,101.5c34.9,41.7,76.5,74.5,125,97.9c21.9,10.4,44.3,18.7,68.2,20.3c17.2,1,31.8-3.6,43.7-16.7
                        c7.8-9.4,17.2-17.2,25.5-26c12.5-13,12.5-28.6,0-41.1C318.76,389.5,303.66,374.4,288.56,359.3z"
                                        ></path>
                                        <path
                                            d="M338.56,118.2c10.9,0,19.8-8.9,19.8-19.8s-8.9-20.3-19.8-20.3s-19.8,8.9-20.3,19.8
                        C318.76,109.4,327.66,118.2,338.56,118.2z"
                                        ></path>
                                    </g>
                                </svg>
                                <div class="d-block">
                                <h2>Phone:</h2>
                                <p>{{setting('site.phone')}}</p>
                                <p>{{setting('site.mobile')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-7">
                        <div class="ss_contact_right">
                            <h1>Bizə yazın</h1>
                            <form method="POST" action="{{route('contact.form')}}">
                                @csrf
                                <div class="ss_contact_form">
                                    <label for="name">@lang('static.name')</label>
                                    <input
                                        type="text"
                                        placeholder="@lang('static.enter_name')"
                                        name="name"
                                        id="name"
                                        class="require"
                                        value="{{old('name')}}"
                                        data-error="Xahiş edirik ad hissəsini boş qoymayın"
                                    />
                                </div>
                                <div class="ss_contact_form">
                                    <label for="number">@lang('static.phone')</label>
                                    <input
                                        type="text"
                                        name="number"
                                        id="number"
                                        placeholder="@lang('static.enter_number')"
                                        class="require"
                                        value="{{old('number')}}"
                                        data-error="Xahiş edirik nömrə hissəsini boş qoymayın"
                                    />
                                </div>
                                <div class="ss_contact_form">
                                    <label for="email">@lang('static.email')</label>
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        placeholder="@lang('static.enter_email')"
                                        class="require"
                                        data-valid="email"
                                        value="{{old('email')}}"
                                        data-error="Email düzgün deyil."
                                    />
                                </div>
                                <div class="ss_contact_form">
                                    <label for="subject">@lang('static.subject')</label>
                                    <input
                                        type="text"
                                        name="subject"
                                        id="subject"
                                        placeholder="@lang('static.enter_subject')"
                                        class="require"
                                        value="{{old('subject')}}"
                                        data-error="Xahiş edirik mövzu hissəsini boş qoymayın"
                                    />
                                </div>
                                <div class="ss_contact_form">
                                    <label class="ss_message">@lang('static.message')</label>
                                    <textarea
                                        name="message"
                                        id="message"
                                        placeholder="@lang('static.enter_message')"
                                        class="require"
                                        data-error="Xahiş edirik mesaj hissəsini boş qoymayın"
                                    >{{old('message')}}</textarea>
                                </div>
                                <button type="submit" class="ss_btn submitForm">
                                    @lang('static.send')
                                </button>
                                <div class="response"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($meta->get('show_contact'))
        @include('website.components.contact')
    @endif

@endsection

