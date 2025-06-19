@extends('layout.App')
@section('content')
    <div class="page-header bg-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">
                            <div style="position:relative;display:inline-block;">
                                <div
                                    style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                    P</div>
                                <div
                                    style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                    r</div>
                                <div
                                    style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                    o</div>
                                <div
                                    style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                    j</div>
                                <div
                                    style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                    e</div>

                            </div> <span>
                                <div style="position:relative;display:inline-block;">
                                    <div
                                        style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        c</div>
                                    <div
                                        style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        t</div>
                                    <div
                                        style="position: relative; display: inline-block; opacity: 1; visibility: inherit; transform: translate(0px, 0px);">
                                        s</div>
                                </div>
                            </span>
                        </h1>

                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Page Contact Us Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="row">


                <div class="col-lg-12">
                    <!-- Project Item Boxes start -->
                    <div class="row work-item-boxes align-items-center" style="position: relative; height: 6316.88px;">
                        @foreach ($projects as $project)
                            <div class="col-lg-4 col-md-6 work-item-box branding uix_ux"
                                style="position: absolute; left: 0px; top: 0px;">
                                <!-- Work Item Start -->
                                <div class="work-item wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="work-image">
                                        <a href="{{ $project->link }}" target="blank" data-cursor-text="View">
                                            <figure class="image-anime">
                                                <img src="{{ asset('storage/' . $project->image) }}" alt="">
                                            </figure>
                                        </a>
                                    </div>
                                    <div class="work-body">
                                        <div class="work-content">
                                            <h3><a href="{{ $project->link }}" target="blank">{{ $project->title }}</a></h3>
                                            <p>{{ $project->description }}</p>
                                        </div>
                                        <div class="work-btn">
                                            <a href="{{ $project->link }}" target="blank"><img
                                                    src="{{ asset('assets/images/arrrow-light.svg') }}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- Work Item End -->
                            </div>
                        @endforeach
                    </div>
                    <!-- Project Item Boxes End -->
                </div>
            </div>
        </div>
    </div>
@endsection
