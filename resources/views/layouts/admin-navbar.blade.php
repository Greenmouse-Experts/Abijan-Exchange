<!-- [ Layout navbar ( Header ) ] Start -->
<div class="container-fluid no-gutters">
            <div class="row">
                <div class="col-lg-12 p-0 ">
                    <div class="header_iner d-flex justify-content-between align-items-center">
                        <div class="sidebar_icon d-none d-lg-none">
                            <i class="ti-menu"></i>
                        </div>
                        <div class="line_icon open_miniSide d-lg-block d-sm-block d-md-block">
                            <img src="{{URL::asset('admin/libraries/line_img.png')}}" alt="">
                        </div>
                        <div class="header_right d-flex justify-content-between align-items-center">

                            <div class="profile_info d-flex align-items-center">
                                <div class="profile_thumb mr_20">
                                    <img src="{{URL::asset('admin/libraries/sample_pic.png')}}" alt="#">
                                </div>
                                    <div class="author_name">
                                        <h4 class="f_s_15 f_w_500 mb-0">{{Auth::user()->username}}</h4>
                                        <p class="f_s_12 f_w_400">Verified</p>
                                    </div>
                                    <div class="profile_info_iner">
                                        <div class="profile_author_name">
                                            <h5>{{Auth::user()->username}}</h5>
                                        </div>
                                        <div class="profile_info_details">
                                            <a href="/admin/profile">My Profile</a>
                                            <a onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();" href="#">Log Out </a>
                                            <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                                @csrf
                                            </form>
                                        </div>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- [ Layout navbar ( Header ) ] End -->
