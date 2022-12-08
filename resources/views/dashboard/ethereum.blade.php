@extends('layouts.dashboard-frontend') @section('page-content')
<!-- [ Layout container ] Start -->
<div class="layout-container">
    <!-- [ Layout navbar ( Header ) ] Start -->
    @includeIf('layouts.dashboard-navbar')
    <!-- [ Layout navbar ( Header ) ] End -->

    <!-- [ Layout content ] Start -->
    <div class="layout-content">
        <!-- [ content ] Start -->
        <!--/ menu  -->
        <div class="main_content_iner overly_inner">
            <div class="container-fluid p-0">
                <!-- page title  -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h4 class="m-0">Send Ethereum</h4>
                                        <br />
                                        <ul class="nav nav-pills custom_bootstrap_nav">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="#bitdiv" data-toggle="tab">Send Ethereum</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('receive_eth')}}"> Receive Ethereum</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{route('eth_trans')}}"> Transactions</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content">
                                @if (Auth::user()->bank->bvn == null)
                                    <div class="white_card_body tab-pane fade active show" id="bitdiv">
                                        <div class="exchange_widget">
                                            <div class="form-group" id="walletdiv">
                                                <label id="header_trf_wallet">Ethereum Address</label>
                                                <p class="dangerP error_address" style="display: none;"></p>
                                                <div class="input-group">
                                                    <input type="text" name="trf_wallet" class="form-control" id="trf_wallet" />
                                                </div>
                                            </div>
                                            <p class="formText">
                                                <a href="verify_me?type=identity"><b>Click here</b></a><b> to verify your identity to be able to send Ethereum.</b>
                                            </p>
                                            <p class="formText">After verification, you can send Ethereum to any Ethereum address comfortably.</p>
                                        </div>
                                    </div>
                                @else
                                    <div class="white_card_body tab-pane fade active show" id="bitdiv">
                                        <div class="exchange_widget">
                                            <form name="myETHform" id="myETHform" class="currency_validate">
                                                <div class="form-group" id="walletdiv">
                                                    <label id="header_trf_wallet">Ethereum Address</label>
                                                    <p class="dangerP error_address" style="display: none;"></p>
                                                    <div class="input-group">
                                                        <input type="text" name="eth_wallet" class="form-control"
                                                            id="eth_wallet">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Enter amount in ETH</label>
                                                    <div class="input-group">
                                                        <input type="text" name="bit_amount" class="form-control"
                                                            id="bit_amount">
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3">
                                                        <p class="mb-0">Transfer Fee</p>
                                                        <h6 class="mb-0 showwithfee_btc">{{settings()->eth_trans_fee}}ETH</h6>
                                                        <input type="hidden" name="transfee_btc" id="transfee_btc"
                                                            value="{{settings()->eth_trans_fee}}">
                                                        <input type="hidden" name="fee_method_btc" id="fee_method_btc"
                                                            value="flat_rate">
                                                        <input type="hidden" name="balbtc" id="balbtc" value="{{Auth::user()->wallet->eth}}">
                                                        <input type="hidden" name="rateUnit" id="rateUnit" value="{{getCurrentEthDollar()}}">
                                                        <input type="hidden" name="above_amount_eth" id="above_amount_eth"
                                                            value="">
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3" id="availBal_eth">
                                                        <p class="mb-0">Current Balance</p>
                                                        <h6 class="mb-0 btcbal_upto balspan" id="balspanOne_eth">{{Auth::user()->wallet->eth}} ETH</h6>
                                                    </div>
                                                    <div class="d-flex justify-content-between mt-3 hidden"
                                                        id="availBalwith_eth">
                                                        <p class="mb-0">Balance after this withdrawal</p>
                                                        <h6 class="mb-0 ngnbal_upto balspanwith_eth"></h6>

                                                    </div>
                                                </div>
                                                <div class="form-group" id="passdiv_send" style="display: none;">
                                                    <label id="header_trf_wallet">Enter your password</label>
                                                    <p class="dangerP error_pass" style="display: none;"></p>
                                                    <div class="input-group">
                                                        <input type="password" name="send_pass" class="form-control"
                                                            id="send_pass">
                                                    </div>
                                                </div>
                                                <button type="button" name="send_submit2" id="send_submit2"
                                                    class="btn_1 w-100">Send Now <span
                                                        class="loadingText fa fa-spinner fa-spin fa-2x"
                                                        style="display:none;float:right;"
                                                        id="loadingText_send"></span></button>
                                            </form>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="box_header">
                                <div class="main-title">
                                    <h3 class="mb-0">Ethereum FAQs</h3>
                                </div>
                            </div>
                            <!-- accordian -->
                            <div class="accordion accordion_custom mb_50" id="accordion_ex">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                How long does a Ethereum transaction take?
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Ethereum transactions normally take about 10 to 30 minutes to send, on occasion it can take a few hours if the Ethereum network is slow.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                Ethereum refunds and payouts
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>
                                                Abijan Exchange wallet is a web wallet - outgoing Ethereum addresses are not connected to your account. If you are asking for a refund from a merchant, please ask them to send the refund to your
                                                receiving address.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                Ethereum transfer fees
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Transactions to wallets of other Abijan Exchange users are free.</p>

                                            <p>
                                                Transactions to other Ethereum wallets are subject to a sending fee. The size of the fee changes depending on the current usage rate of the Ethereum blockchain, we automatically adjust this fee
                                                based on the current network congestion to make sure your transactions are confirmed as quickly as possible. The sending fee is paid from your Abijan Exchange wallet when you send a transaction.
                                            </p>

                                            <p>Current outgoing transfer fee: <b>0.00003772BTC</b></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordian -->
                        </div>
                    </div>
                </div>
            </div>
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
