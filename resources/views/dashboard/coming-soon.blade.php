@extends('layouts.dashboard-frontend')

@section('page-content')
    <!-- [ Layout container ] Start -->
    <div class="layout-container">
        <!-- [ Layout navbar ( Header ) ] Start -->
        @includeIf('layouts.dashboard-navbar')
        <!-- [ Layout navbar ( Header ) ] End -->

        <!-- [ Layout content ] Start -->
        <div class="layout-content">

            <!-- [ content ] Start -->
            <!--/ menu  -->
            <div class="main_content_iner overly_inner ">
                <div class="container-fluid p-0 ">
                    <!-- page title  -->
                    <div class="text-center">
                        <h3 style="" class="coming_sooon">Coming Soon!!!</h3>
                    </div>
                </div>
                <style>
                    .coming_sooon{
                        font-size: 48px;
                        margin-top: 17%;
                        font-weight: lighter;
                        text-transform: uppercase;
                    }
                    @media (max-width:997px) {
                        .coming_sooon{
                            font-size: 27px;
                            margin-top: 25%;
                            font-weight: lighter;
                            text-transform: uppercase;
                        }
                    }
                </style>
            </div>
            <!-- [ content ] End -->

            <!-- [ Layout footer ] Start -->
            @includeIf('layouts.dashboard-footer')
            <!-- [ Layout footer ] End -->
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection
