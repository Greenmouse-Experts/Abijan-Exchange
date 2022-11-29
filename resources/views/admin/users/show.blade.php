@extends('layouts.admin-frontend')

@section('page-content')
    @include('sweetalert::alert')
    <!-- [ Layout container ] Start -->
    @php
        $u = \App\Models\UserProfile::where('user_id', $user->id)->first();
        $wallet = \App\Models\UserWallet::where('user_id', $user->id)->first();
        $sec = \App\Models\UserSecurityQuestion::where('user_id', $user->id)->get();
        $default = URL::asset("admin/libraries/sample_pic.png");
        if($u == null){
            $true = false;
        }
        else{
            $true = true;
        }

        if($wallet == null){
            $wtrue = false;
        }
        else{
            $wtrue = true;
        }
    @endphp
    <div class="layout-container">
        <!-- [ Layout navbar ( Header ) ] Start -->
        @includeIf('layouts.admin-navbar')
        <!-- [ Layout navbar ( Header ) ] End -->

        <!-- [ Layout content ] Start -->
        <div class="layout-content">

            <!-- [ content ] Start -->
            <!--/ menu  -->
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="page_title_left mb_30">
                                            <h3>
                                                @if ($true == true)
                                                    {{$u->firstname}} {{$u->first()->surname}}
                                                @endif
                                            </h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-right">
                                            <p><a href="/">Dashboard</a> <i class="fas fa-caret-right"></i> {{$user->username}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="email-sidebar white_box">
                                <ul class="text-left mt-2 nav nav-pills" style="background: transparent; color: #000">
                                    <li class="nav-item" style="width: 100%">
                                        <a class="nav-link active" href="#userdetails" data-toggle="tab">
                                            <i class="ti-settings"></i> <span> <span>Details</span> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 100%">
                                        <a  class="nav-link" href="#btc" data-toggle="tab">
                                            <i class="ti-credit-card"></i> <span> <span>BTC Wallet</span></span>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 100%">
                                        <a class="nav-link" href="#usdt" data-toggle="tab">
                                            <i class="ti-user"></i> <span> <span>USDT Wallet</span> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 100%">
                                        <a class="nav-link" href="#ethereum" data-toggle="tab">
                                            <i class="ti-briefcase"></i> <span> <span>Ethereum Wallet</span> </span>
                                        </a>
                                    </li>
                                    <li class="nav-item" style="width: 100%">
                                        <a class="nav-link" href="#security" data-toggle="tab">
                                            <i class="ti-lock"></i> <span> <span>Security Question</span> </span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="tab-content">
                                <div class="white_box QA_section mb_30 tab-pane fade active show" id="userdetails">
                                    <div class="white_box_tittle list_header">
                                        <h4>User Details</h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="QA_table">
                                        <!-- table-responsive -->
                                        <!-- table-responsive -->
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                        class="ti-search"></i>
                                                    <input type="search" class="" placeholder="Quick Search"
                                                        aria-controls="DataTables_Table_0"></style='display:none'>
                                                </label>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <div class="text-center">
                                                        <img src="{{$u->photo ?? $default}}" alt="" class="rounded" width="150px" height="150px">
                                                        <h5>{{$user->username}}</h5>
                                                        <h6 class="text-secondary font-weight-light">{{$user->email}}</h6>
                                                        @if ($user->status != 'disabled')
                                                            <form action="{{route('users.change_type', $user->id)}}" method="post">
                                                            @csrf
                                                                <input type="hidden" name="status" value="disabled">
                                                                <button type="submit" class="btn btn-danger">Disable User</button>
                                                            </form>
                                                        @else
                                                            <form action="{{route('users.change_type', $user->id)}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="status" value="enabled">
                                                                <button type="submit" class="btn btn-success">Enable User</button>
                                                            </form>
                                                        @endif

                                                    </div>
                                                </div>
                                                <div class="col-md-9">
                                                    <legend>
                                                        <h4>User Information</h4>
                                                    </legend>
                                                    <div class="row">
                                                        <div class="col-md-7">
                                                            <div class="form-group">
                                                                <label for="name">Name</label>
                                                                <h4> {{$u->firstname}} {{$u->middlename}} {{$u->first()->surname}}</h4>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Email</label>
                                                                <h4> {{$user->email}}</h4>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Phone Number</label>
                                                                <h4> {{$u->phone_no}}</h4>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-5">
                                                            <div class="form-group">
                                                                <label for="name">Gender</label>
                                                                <h4> {{$u->gender}}</h4>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Date of Birth</label>
                                                                <h4> {{$u->dob}}</h4>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="name">Naira Wallet</label>
                                                                <h4> ₦{{$wallet->naira}}</h4>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="countmsg" value="">
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="btc">
                                    <div class="white_box QA_section mb_30" id="btc">
                                        <div class="white_box_tittle list_header">
                                            <h4>BTC Wallet</h4>
                                            <div class="box_right d-flex lms_block">
                                                <div class="serach_field_2">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="QA_table">
                                            <!-- table-responsive -->
                                            <!-- table-responsive -->
                                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                                <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                            class="ti-search"></i>
                                                        <input type="search" class="" placeholder="Quick Search"
                                                            aria-controls="DataTables_Table_0">
                                                    </label></div>
                                                <legend>
                                                    <h3>User Bitcoin (BTC) Wallet Info</h3>
                                                </legend>
                                                <div class="form-group">
                                                    <label for="btc">Corrent Balance</label>
                                                    <h4>{{$wallet->btc ?? '0'}} BTC</h4>
                                                </div>
                                                <div class="col-md-7">
                                                    <ul class="nav nav-pills custom_bootstrap_nav">
                                                        <li class="nav-item">
                                                            <a class="nav-link active" href="#addBtc" data-toggle="tab">
                                                                Add BTC</a>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" href="#deductBtc" data-toggle="tab">
                                                                Deduct BTC</a>
                                                        </li>
                                                    </ul>


                                                    <div class="tab-content">
                                                        <div class="white_card_body tab-pane fade active show" id="addBtc">
                                                            <div class="form-group col-md-12 mt-3">
                                                                <form action="{{route('users.add_btc', $user->id)}}" method="post">
                                                                    @csrf
                                                                    <input type="tel" name="addBtc" placeholder="0.01" class="form-control col-md-8" id="">
                                                                    <button type="submit" class="btn btn-dark col-md-8 mt-1">
                                                                        ADD BTC
                                                                    </button>
                                                                </form>

                                                            </div>

                                                        </div>
                                                        <div class="white_card_body tab-pane fade" id="deductBtc">
                                                            <div class="form-group col-md-12 mt-3">
                                                                <form action="{{route('users.deduct_btc', $user->id)}}" method="post">
                                                                    @csrf
                                                                    <input type="tel" name="deductBtc" placeholder="0.01" class="form-control col-md-8" id="">
                                                                    <button type="submit" class="btn btn-dark col-md-8 mt-1">
                                                                        DEDUCT BTC
                                                                    </button>
                                                                </form>

                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class="white_box QA_section mb_30 tab-pane fade" id="usdt">
                                    <div class="white_box_tittle list_header">
                                        <h4>TRC20 USDT Wallet</h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="QA_table">
                                        <!-- table-responsive -->
                                        <!-- table-responsive -->
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                        class="ti-search"></i>
                                                    <input type="search" class="" placeholder="Quick Search"
                                                        aria-controls="DataTables_Table_0">
                                                </label>
                                            </div>
                                            <legend>
                                                <h3>User TRC20 (USDT) Wallet Info</h3>
                                            </legend>
                                            <div class="form-group">
                                                <label for="btc">Corrent Balance</label>
                                                <h4>{{$wallet->usdt ?? '0'}} USDT</h4>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="nav nav-pills custom_bootstrap_nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#addUSDT" data-toggle="tab">
                                                            Add USDT</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#deductUSDT" data-toggle="tab">
                                                            Deduct USDT</a>
                                                    </li>
                                                </ul>


                                                <div class="tab-content">
                                                    <div class="white_card_body tab-pane fade active show" id="addUSDT">
                                                        <div class="form-group col-md-12 mt-3">
                                                            <form action="{{route('users.add_usdt', $user->id)}}" method="post">
                                                                @csrf
                                                                <input type="tel" name="addUsdt" placeholder="1" class="form-control col-md-8" id="">
                                                                <button type="submit" class="btn btn-dark col-md-8 mt-1">
                                                                    ADD USDT
                                                                </button>
                                                            </form>

                                                        </div>

                                                    </div>
                                                    <div class="white_card_body tab-pane fade" id="deductUSDT">
                                                        <div class="form-group col-md-12 mt-3">
                                                            <form action="{{route('users.deduct_usdt', $user->id)}}" method="post">
                                                                @csrf
                                                                <input type="tel" name="deductUsdt" placeholder="1" class="form-control col-md-8" id="">
                                                                <button type="submit" class="btn btn-dark col-md-8 mt-1">
                                                                    DEDUCT USDT
                                                                </button>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_box QA_section mb_30 tab-pane fade" id="ethereum">
                                    <div class="white_box_tittle list_header">
                                        <h4>Ethereum Wallet</h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="QA_table">
                                        <!-- table-responsive -->
                                        <!-- table-responsive -->
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                        class="ti-search"></i>
                                                    <input type="search" class="" placeholder="Quick Search"
                                                        aria-controls="DataTables_Table_0"></style='display:none'>
                                                </label>
                                            </div>
                                            <legend>
                                                <h3>User Ethereum (ETH) Wallet Info</h3>
                                            </legend>
                                            <div class="form-group">
                                                <label for="btc">Corrent Balance</label>
                                                <h4>{{$wallet->eth ?? '0'}} ETH</h4>
                                            </div>
                                            <div class="col-md-7">
                                                <ul class="nav nav-pills custom_bootstrap_nav">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" href="#addETH" data-toggle="tab">
                                                            Add ETH</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" href="#deductETH" data-toggle="tab">
                                                            Deduct ETH</a>
                                                    </li>
                                                </ul>


                                                <div class="tab-content">
                                                    <div class="white_card_body tab-pane fade active show" id="addETH">
                                                        <div class="form-group col-md-12 mt-3">
                                                            <form action="{{route('users.add_eth', $user->id)}}" method="post">
                                                                @csrf
                                                                <input type="tel" name="addEth" placeholder="0.01" class="form-control col-md-8" id="">
                                                                <button type="submit" class="btn btn-dark col-md-8 mt-1">
                                                                    ADD ETH
                                                                </button>
                                                            </form>

                                                        </div>

                                                    </div>
                                                    <div class="white_card_body tab-pane fade" id="deductETH">
                                                        <div class="form-group col-md-12 mt-3">
                                                            <form action="{{route('users.deduct_eth', $user->id)}}" method="post">
                                                                @csrf
                                                                <input type="tel" name="deductEth" placeholder="0.01" class="form-control col-md-8" id="">
                                                                <button type="submit" class="btn btn-dark col-md-8 mt-1">
                                                                    DEDUCT ETH
                                                                </button>
                                                            </form>

                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="white_box QA_section mb_30 tab-pane fade" id="security">
                                    <div class="white_box_tittle list_header">
                                        <h4>Security Question</h4>
                                        <div class="box_right d-flex lms_block">
                                            <div class="serach_field_2">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="QA_table">
                                        <!-- table-responsive -->
                                        <!-- table-responsive -->
                                        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                            <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                        class="ti-search"></i>
                                                    <input type="search" class="" placeholder="Quick Search"
                                                        aria-controls="DataTables_Table_0"></style='display:none'>
                                                </label>
                                            </div>
                                            <legend>
                                                <h3>User Security Question</h3>
                                            </legend>
                                            <div class="form-group">
                                                <label for="security">1. {{$sec[0]->question ?? ''}}</label>
                                                <h4>{{$sec[0]->answer ?? ''}}</h4>
                                            </div>

                                            <div class="form-group">
                                                <label for="security">2. {{$sec[1]->question ?? ''}}</label>
                                                <h4>{{$sec[1]->answer ?? ''}}</h4>
                                            </div>

                                            <div class="form-group">
                                                <label for="security">3. {{$sec[2]->question ?? ''}}</label>
                                                <h4>{{$sec[2]->answer ?? ''}}</h4>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <div class="modal fade" id="addRate" tabindex="-1" role="dialog" aria-labelledby="messageModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="main-title">
                            <h3 class="m-0">Create an Admin</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Use this form to add currency current rate.</p><br>
                        </div>
                        <form method="POST" action="{{ route('SetRate') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>E-Currency</label>
                                        <input name="currency" id="currency" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Currency Image</label>
                                        <input name="curr_img" id="curr_img" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>E-Currency Short</label>
                                        <input name="port_short" id="port_short" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Buy Rate</label>
                                        <input name="buy_rate" id="buy_rate" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Sell Rate</label>
                                        <input name="sell_rate" id="sell_rate" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Charges Fee</label>
                                        <input name="charges" id="charges" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 forgotpasswordhide">
                                    <div class="common_input mb_20">
                                        <button type="submit" class="btn_1 w-100 col-md-5" id="ContinueCompose">Add Rate
                                            <span class="spincompose fa fa-spinner fa-spin fa-2x"
                                                style="display: none;"></span></button>
                                    </div>
                                </div>
                                <div class="col-lg-12 forgotpasswordshow" style="display:none;">
                                    <div class="common_input mb_20">
                                        <p>Please click <b><a href="forgotpassword">HERE</a></b> to reset your password or
                                            click the "Forgot Password" link on the login page.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="editRateModal" tabindex="-1" role="dialog"
            aria-labelledby="messageModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="main-title">
                            <h3 class="m-0">Create an Admin</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Use this form to update currency current rate.</p><br>
                        </div>
                        <form method="POST" action="{{ route('updateRate') }}" enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="id" value="" id="edit_id">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>E-Currency</label>
                                        <input name="currency" id="edit_currency" value="" type="text"
                                            maxlength="100" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Currency Image</label>
                                        <input name="curr_img" id="curr_img" type="file" class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>E-Currency Short</label>
                                        <input name="port_short" id="edit_port_short" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Buy Rate</label>
                                        <input name="buy_rate" id="edit_buy_rate" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Sell Rate</label>
                                        <input name="sell_rate" id="edit_sell_rate" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Charges Fee</label>
                                        <input name="charges" id="edit_fee" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-12 forgotpasswordhide">
                                    <div class="common_input mb_20">
                                        <button type="submit" class="btn_1 w-100 col-md-5" id="ContinueCompose">Update
                                            Rate
                                            <span class="spincompose fa fa-spinner fa-spin fa-2x"
                                                style="display: none;"></span></button>
                                    </div>
                                </div>
                                <div class="col-lg-12 forgotpasswordshow" style="display:none;">
                                    <div class="common_input mb_20">
                                        <p>Please click <b><a href="forgotpassword">HERE</a></b>
                                            to reset your password
                                            or
                                            click the "Forgot
                                            Password" link on the
                                            login page.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> --}}
        <!-- [ content ] End -->

        <!-- [ Layout footer ] Start -->
        @includeIf('layouts.admin-footer')
        <!-- [ Layout footer ] End -->
    </div>
    <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection
