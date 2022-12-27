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
                    <div class="row ">
                        <div class="col-12">
                            <div class="page_title_box d-flex flex-wrap align-items-center justify-content-between">
                                <div class="page_title_left mb_10">
                                    <h3 class="mb-0">Overview</h3>
                                    <p>
                                        Buy, Sell, Send Bitcoin, Receive Bitcoin, etc.
                                    </p>
                                </div>
                                <div class="page_title_right">
                                    <div class="dropdown CRM_dropdown  mr_5 mb_10">
                                        <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Navigation
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            <a class="dropdown-item" href="{{ route('buynsell') }}">Buy & Sell</a>
                                            <a class="dropdown-item" href="{{ route('deposit') }}">Deposit Naira</a>
                                            <a class="dropdown-item" href="{{ route('naira') }}">Withdraw Naira</a>
                                            <a class="dropdown-item" href="/dashboard/sendbtn">Send Bitcoin</a>
                                            <a class="dropdown-item" href="/dashboard/wallet_receive">Receive Bitcoin</a>
                                            <a class="dropdown-item" href="#goTopriceList">Price List</a>
                                        </div>
                                    </div>
                                    <a href="#" class="white_btn mb_10 red_btn"
                                        onclick="event.preventDefault();
                                        document.getElementById('logout-form').submit();"
                                        aria-expanded="false">
                                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                                            @csrf
                                        </form>
                                        Log Out
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-12">

                        </div>
                        <div class="col-xl-4" id="portfoliomobile">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Your Portfolio</h3>
                                        </div>
                                        <a class="hidebalspan hidebal" href="javascript: void(0)"> <small>
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i> Hide balance</small></a>

                                        <a class="hidebalspan showbal" href="javascript: void(0)" style="display:none;">
                                            <small><i class="fa fa-eye" aria-hidden="true"></i> Show balance</small></a>

                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <div class="row justify-content-center mb_30  ">
                                        <div class="col-12 text-center">
                                            <h4 class="f_s_22 f_w_700 mb-0"><span class="totalbal balspan">₦{{ number_format(Auth::user()->wallet->naira, 2) }}</span></h4>
                                            <p class="f_s_11 f_w_400">Total Balance</p>
                                        </div>
                                    </div>
                                    <div class="social_media_list">
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/1.svg" alt="">
                                                Bitcoin</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="btcbal balspan">{{ Auth::user()->wallet->btc }}
                                                            BTC</span></h4>
                                                </a>
                                                <p><span
                                                        class="usdbal balspan">${{ round(Auth::user()->wallet->btc * getCurrentBtcDollar(), 2) }}</span>
                                                </p>
                                            </span>
                                        </div>
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/eth.png" alt="">
                                                Ethereum</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="ethbal balspan">{{ Auth::user()->wallet->eth }}
                                                            ETH</span></h4>
                                                </a>
                                                <p><span
                                                        class="ethusdbal balspan">${{ round(Auth::user()->wallet->eth * getCurrentEthDollar(), 2) }}</span>
                                                </p>
                                            </span>
                                        </div>
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/usdt_trc_2068.png"
                                                    alt="">
                                                USDT TRC20</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="usdtbal balspan">{{ Auth::user()->wallet->usdt }}
                                                            USDT</span></h4>
                                                </a>
                                                <p><span
                                                        class="usdbal balspan">${{ round(Auth::user()->wallet->usdt * getCurrentUSDTDollar(), 2) }}</span>
                                                </p>
                                            </span>
                                        </div>
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/naira.png" alt="">
                                                Naira</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="ngnbal balspan">₦{{ number_format(Auth::user()->wallet->naira, 2) }}</span>
                                                    </h4>
                                                </a>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8" id="order_history_desk">
                            <div class="white_card mb_30 card_height_100">
                                <div class="white_card_header ">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Order History</h3>
                                        </div>
                                        <a href="{{ route('orders') }}">
                                            <p>View all</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="white_card_body pt-0">
                                    <div class="QA_section">
                                        @if ($order->count() > 0)
                                            
                                                <div class="QA_table mb-0 transaction-table">
                                                    <!-- table-responsive -->
                                                    <div class="table-responsive">
                                                        <table class="table  ">
                                                            <tbody>
                                                                @foreach ($order as $item)
                                                                <tr>
                                                                    @if ($item->type == 'Sell')
                                                                        <td scope="row">
                                                                            <span class="sold-thumb"><i
                                                                                    class="ti-arrow-down"></i></span>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-danger">{{ $item->type }}</span>
                                                                        </td>
                                                                    @endif
                                                                    @if ($item->type == 'Buy')
                                                                        <td scope="row">
                                                                            <span class="buy-thumb"><i
                                                                                    class="ti-arrow-up"></i></span>
                                                                        </td>
                                                                        <td>
                                                                            <span
                                                                                class="badge badge-success">{{ $item->type }}</span>
                                                                        </td>
                                                                    @endif
                                                                    <td>
                                                                        <span>
                                                                            @php
                                                                                $in = App\Models\Invoice::where('user_id', Auth::user()->id)
                                                                                    ->where('order_id', $item->id)
                                                                                    ->first();
                                                                                if ($in != null) {
                                                                                    $ins = true;
                                                                                } else {
                                                                                    $ins = false;
                                                                                }
                                                                            @endphp
                                                                            @if ($ins == true AND $item->status == 0 AND $item->type == "Sell")
                                                                                <a href="#"
                                                                                    data-value="{{ $in->invoice_id }}"
                                                                                    class="invoice_me"
                                                                                    title="Send Notice">Send Notice</a>
                                                                                OR
                                                                            @endif
                                                                            @if ($item->status == 3)
                                                                                <a href="#"
                                                                                    class="status_btn cancel_btn"
                                                                                    title="Order Canceled">Order
                                                                                    Cancelled</a>
                                                                            @endif
                                                                            @if ($item->status == 0 AND $item->type == "Buy")
                                                                                <a href="#"
                                                                                    class="status_btn cancel_btn cancel_me_sell"
                                                                                    data-value="{{ $item->id }}"
                                                                                    title="Click here to cancel this order">Cancel
                                                                                    Order</a>
                                                                            @endif
                                                                            @if ($item->status == 0)
                                                                                <a href="#"
                                                                                    class="status_btn cancel_btn cancel_me_sell"
                                                                                    data-value="{{ $item->id }}"
                                                                                    title="Click here to cancel this order">Cancel
                                                                                    Order</a>
                                                                            @endif
                                                                            @if ($item->status == 1)
                                                                                <a href="#"
                                                                                    class="status_btn success_btn"
                                                                                    title="Order Succeeded">Order
                                                                                    Succeeded</a>
                                                                            @endif
                                                                            @if ($item->status == 2 AND $item->pay_with != "Bitcoin Balance")
                                                                                <a href="#"
                                                                                    class="status_btn success_btn"
                                                                                    title="Order Succeeded">In-Process</a>
                                                                            @endif
                                                                            @if ($item->status == 0 AND $item->currency == "Bitcoin" AND $item->pay_with == "Bitcoin Balance")
                                                                                <a href="#"
                                                                                    class="status_btn success_btn"
                                                                                    title="Order Succeeded">In-Process</a>
                                                                            @endif
                                                                            @if ($item->status == 0 AND $item->currency == "Ethereum" AND $item->pay_with == "Ethereum Balance")
                                                                                <a href="#"
                                                                                    class="status_btn success_btn"
                                                                                    title="Order Succeeded">In-Process</a>
                                                                            @endif
                                                                            @if ($item->status == 0 AND $item->currency == "USDT TRC20" AND $item->pay_with == "USDT Balance")
                                                                                <a href="#"
                                                                                    class="status_btn success_btn"
                                                                                    title="Order Succeeded">In-Process</a>
                                                                            @endif
                                                                        </span>
                                                                    </td>
                                                                    <td><span
                                                                            title="Order Placed on 06/Nov/2022 09:11 AM">-</span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            title="{{ $item->amount }} {{ $item->unit }}">
                                                                            @if ($item->unit == 'USD')
                                                                                {{ $item->amount }} USD
                                                                            @endif
                                                                            @if ($item->unit == 'NGN')
                                                                                {{ $item->amount }} NGN
                                                                            @endif
                                                                            @if ($item->unit == 'BTC')
                                                                                {{ $item->amount }} BTC
                                                                            @endif
                                                                        </span>
                                                                    </td>
                                                                    <td>
                                                                        @if($item->currency == "Bitcoin")
                                                                        <span title=""><img
                                                                                class="small_img" src="{{rates()[0]->currency_img}}"
                                                                                alt="">
                                                                            {{ $item->currency }}</span>
                                                                        @endif
                                                                        @if($item->currency == "Perfect Money")
                                                                        <span title=""><img
                                                                                class="small_img" src="{{rates()[1]->currency_img}}"
                                                                                alt="">
                                                                            {{ $item->currency }}</span>
                                                                        @endif
                                                                        @if($item->currency == "Ethereum")
                                                                        <span title=""><img
                                                                                class="small_img" src="{{rates()[2]->currency_img}}"
                                                                                alt="">
                                                                            {{ $item->currency }}</span>
                                                                        @endif
                                                                        @if($item->currency == "USDT TRC20")
                                                                        <span title=""><img
                                                                                class="small_img" src="{{rates()[3]->currency_img}}"
                                                                                alt="">
                                                                            {{ $item->currency }}</span>
                                                                        @endif
                                                                        @if($item->currency == "bitcoin Cash")
                                                                        <span title=""><img
                                                                                class="small_img" src="{{rates()[4]->currency_img}}"
                                                                                alt="">
                                                                            {{ $item->currency }}</span>
                                                                        @endif
                                                                        @if($item->currency == "Tron")
                                                                        <span title=""><img
                                                                                class="small_img" src="{{rates()[5]->currency_img}}"
                                                                                alt="">
                                                                            {{ $item->currency }}</span>
                                                                        @endif
                                                                    </td>
                                                                </tr>
                                                                @endforeach
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            
                                        @else
                                            <div class="QA_table mb-0 transaction-table">
                                                <!-- table-responsive -->
                                                <div class="table-responsive">
                                                    <table class="table  ">
                                                        <tbody>
                                                            <p>
                                                                Your recent order history will appear here.
                                                            </p>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        @endif

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4" id="portfoliodesk">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Your Portfolio</h3>
                                        </div>
                                        <a class="hidebalspan hidebal" href="javascript: void(0)"> <small>
                                                <i class="fa fa-eye-slash" aria-hidden="true"></i> Hide
                                                balance</small></a>
                                        <a class="hidebalspan showbal" href="javascript: void(0)" style="display:none;">
                                            <small><i class="fa fa-eye" aria-hidden="true"></i> Show balance</small></a>
                                    </div>
                                </div>
                                <div class="white_card_body">
                                    <div class="row justify-content-center mb_30  ">
                                        <div class="col-12 text-center">
                                            <h4 class="f_s_22 f_w_700 mb-0"><span
                                                    class="totalbal balspan">₦{{ number_format(Auth::user()->wallet->naira, 2) }}</span>
                                            </h4>
                                            <p class="f_s_11 f_w_400">Total Balance</p>
                                        </div>
                                    </div>
                                    <div class="social_media_list">
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/1.svg" alt="">
                                                Bitcoin</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="btcbal balspan">{{ number_format(Auth::user()->wallet->btc, 8) }}
                                                            BTC</span></h4>
                                                </a>
                                                <p><span
                                                        class="usdbal balspan">${{ round(Auth::user()->wallet->btc * getCurrentBtcDollar(), 2) }}</span>
                                                </p>
                                            </span>
                                        </div>
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/eth.png" alt="">
                                                Ethereum</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="ethbal balspan">{{ number_format(Auth::user()->wallet->eth, 8)}}
                                                            ETH</span></h4>
                                                </a>
                                                <p><span
                                                        class="ethusdbal balspan">${{ round(Auth::user()->wallet->eth * getCurrentEthDollar(), 2)}}</span>
                                                </p>
                                            </span>
                                        </div>
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/usdt_trc_2068.png"
                                                    alt="">
                                                USDT TRC20</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="usdtbal balspan">{{ Auth::user()->wallet->usdt }}
                                                            USDT</span></h4>
                                                </a>
                                                <p><span
                                                        class="usdtusdbal balspan">${{ round(Auth::user()->wallet->usdt * getCurrentUSDTDollar(), 2) }}</span>
                                                </p>
                                            </span>
                                        </div>
                                        <div class="single_media d-flex justify-content-between align-items-center">
                                            <span class="mediaName"> <img src="dash/libraries/naira.png" alt="">
                                                Naira</span>
                                            <span class="earning_amount">
                                                <a href="javascript: void(0)" title="">
                                                    <h4><span
                                                            class="ngnbal balspan">₦{{ number_format(Auth::user()->wallet->naira, 2) }}</span>
                                                    </h4>
                                                </a>
                                            </span>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <!-- <h3 class="m-0">Quick Sell</h3> -->
                                            <ul class="nav nav-pills custom_bootstrap_nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#quickselldiv" data-toggle="tab">Quick
                                                        Sell</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#quickbuydiv"
                                                        data-toggle="tab">Quick Buy</a>
                                                </li>
                                            </ul>

                                        </div>
                                    </div>
                                </div>
                                @if (Auth::user()->bank->bvn == null)
                                    <div class="tab-content">
                                        <div class="white_card_body tab-pane fade" id="quickselldiv">
                                            <div class="exchange_widget">
                                                <form id="mySellform" class="currency_validate">
                                                    <div class="form-group buyprice">Sell 1 BTC @ ₦{{ number_format(getCurrentBtcDollar() * rates()[0]['sell_rate'], 2) }}</div>
                                                    <div class="form-group">
                                                        <label>Currency</label>
                                                        <div class="input-group ">

                                                            <select name="currency_sell" id="currency_sell"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Bitcoin" selected="selected"
                                                                    data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                                <option data-value="PM" value="Perfect Money">Perfect
                                                                    Money</option>
                                                                <option data-value="ETH" value="Ethereum">Ethereum
                                                                </option>
                                                                <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                                </option>
                                                                <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                                </option>
                                                                <option data-value="TRN" value="Tron">Tron
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="btc_externalEnabled"
                                                        id="btc_externalEnabled" value="Enabled">
                                                    <div class="form-group" id="sellfrom_div">
                                                        <label id="sellfromlabel">Sell From</label>
                                                        <div class="input-group" id="sellfrom_btc" style="">
                                                            <select name="sell_from" id="sell_from"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Bitcoin Balance"
                                                                    value="Bitcoin Balance" selected="selected">Bitcoin
                                                                    Balance</option>
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group" id="sellfrom_eth">
                                                            <select name="sell_from" id="sell_from_eth"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Ethereum Balance" value="Ethereum Balance"
                                                                    selected="selected">Ethereum Balance</option>
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>
    
                                                        </div>
                                                        <div class="input-group" id="sellfrom_usdt">
                                                            <select name="sell_from" id="sell_from_usdt"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="USDT Balance" value="USDT Balance"
                                                                    selected="selected">USDT Balance</option>
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>
    
                                                        </div>
                                                        <div class="input-group" style="display: none;"
                                                            id="sellfrom_account">
                                                            <select name="sell_from_acct" id="sell_from_acct"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="External Account"
                                                                    value="External Account" selected="selected">External
                                                                    Account</option>
                                                            </select>
                                                        </div>
                                                        <input type="hidden" name="pm_autoEnabled" id="pm_autoEnabled"
                                                            value="Enabled">
                                                        <input type="hidden" name="pm_manualEnabled"
                                                            id="pm_manualEnabled" value="Disabled">
                                                        <div class="input-group" style="display: none;" id="sellfrom_pm">
                                                            <select name="sell_from_pm" id="sell_from_pm"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Automatic" value="Automatic"
                                                                    selected="selected">Automatic</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group" style="display: none;"
                                                            id="sellfrom_crypto">
                                                            <select name="sell_from_crypto" id="sell_from_crypto"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="display: none;" id="sellfrom_type">
                                                        <label id="sellfromlabel2">Wallet Type</label>
                                                        <div class="input-group">
                                                            <select name="sell_from_type" id="sell_from_type"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Blockchain" value="Blockchain"
                                                                    selected="selected">Blockchain</option>
                                                                <option value="Binance">Binance</option>
                                                                <option value="Coinbase">Coinbase</option>
                                                                <option value="Paxful">Paxful</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Enter your amount</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <select id="currencySell"
                                                                    class="form-control input-group-text">
                                                                    <option value="USD" data-display="USD"
                                                                        selected="selected">USD</option>
                                                                    <option value="BTC">BTC</option>
                                                                    <option value="NGN">NGN</option>
                                                                </select>
                                                            </div>
                                                            <input type="text" name="amountSell" class="form-control"
                                                                id="amountSell">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0" id="ecurrsell"></p>
                                                            <p class="mb-0" id="ecurrsell2"
                                                                style="color: rgb(23, 97, 253);">Receive: ₦0.00</p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodiv" id="acctnodiv"
                                                        style="display: none;">
                                                        <label id="header_acct"></label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnoSell"
                                                                class="form-control acctnoCheck" id="acctnoSell">
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodiv" id="acctnamediv"
                                                        style="display: none;">
                                                        <label id="header_acctname"></label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnameSell"
                                                                class="form-control acctnameCheck" id="acctnameSell">
                                                        </div>
                                                    </div>
                                                    <div class="form-group availsale" style="">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 availsale" style=""><b>Bitcoin
                                                                    Balance</b></p>
                                                            <p class="mb-0 availsale btcbal balspan" style="">0 BTC
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group usdtavailsale" style="">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 usdtavailsale" style=""><b>USDT
                                                                    Balance</b></p>
                                                            <p class="mb-0 usdtavailsale usdtbal balspan" style="">0 USDT
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ethavailsale" style="">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 ethavailsale" style=""><b>Ethereum
                                                                    Balance</b></p>
                                                            <p class="mb-0 ethavailsale ethbal balspan" style="">0 ETH
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" name="sellNowbtn"
                                                        class="btn_1 w-100 sellNowbtn" id="sellNowbtn">Sell Now <span
                                                            class="loadingText fa fa-spinner fa-spin fa-2x"
                                                            style="float: right; display: none;"></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--End quickselldiv-->
                                        <div class="white_card_body tab-pane fade active show" id="quickbuydiv">
                                            <div class="exchange_widget">
                                                <div class="form-group buyprice">Buy 1 BTC @
                                                    ₦{{ number_format(getCurrentBtcDollar() * rates()[0]['buy_rate'], 2) }}
                                                </div>
                                                <div class="form-group">
                                                    <label>Currency</label>
                                                    <div class="input-group ">
                                                        <select name="currency_buy" id="currency_buy"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option data-display="Bitcoin" selected="selected"
                                                                data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                            <option data-value="PM" value="Perfect Money">Perfect Money
                                                            </option>
                                                            <option data-value="ETH" value="Ethereum">Ethereum</option>
                                                            <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                            </option>
                                                            <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                            </option>
                                                        </select>


                                                    </div>
                                                </div>
                                                <p class="formText verifyText"><a
                                                        href="/dashboard/settings?type=verify_me"><b>Click
                                                            here</b></a><b> to verify your identity to be able to buy.</b>
                                                </p>
                                                <p class="formText">After verification, you can buy instantly.</p>
                                            </div>
                                        </div>
                                        <!--end quickbuydiv-->
                                    </div>
                                @else
                                    <div class="tab-content">
                                        <div class="white_card_body tab-pane fade" id="quickselldiv">
                                            <div class="exchange_widget">
                                                <form id="mySellform" class="currency_validate">
                                                    <div class="form-group buyprice">Sell 1 BTC @
                                                        ₦{{ number_format(getCurrentBtcDollar() * rates()[0]['sell_rate'], 2) }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Currency</label>
                                                        <div class="input-group ">
                                                            <select name="currency_sell" id="currency_sell"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Bitcoin" selected="selected"
                                                                    data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                                <option data-value="PM" value="Perfect Money">Perfect
                                                                    Money</option>
                                                                <option data-value="ETH" value="Ethereum">Ethereum
                                                                </option>
                                                                <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                                </option>
                                                                <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                                </option>
                                                                <option data-value="TRN" value="Tron">Tron
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <input type="hidden" name="btc_externalEnabled"
                                                        id="btc_externalEnabled" value="Enabled">
                                                    <div class="form-group" id="sellfrom_div">
                                                        <label id="sellfromlabel">Sell From</label>
                                                        <div class="input-group" id="sellfrom_btc" style="">
                                                            <select name="sell_from" id="sell_from"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Bitcoin Balance"
                                                                    value="Bitcoin Balance" selected="selected">Bitcoin
                                                                    Balance</option>
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group" id="sellfrom_eth">
                                                            <select name="sell_from" id="sell_from_eth"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Ethereum Balance" value="Ethereum Balance"
                                                                    selected="selected">Ethereum Balance</option>
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>
    
                                                        </div>
                                                        <div class="input-group" id="sellfrom_usdt">
                                                            <select name="sell_from" id="sell_from_usdt"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="USDT Balance" value="USDT Balance"
                                                                    selected="selected">USDT Balance</option>
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>
    
                                                        </div>
                                                        <div class="input-group" style="display: none;"
                                                            id="sellfrom_account">
                                                            <select name="sell_from_acct" id="sell_from_acct"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="External Account"
                                                                    value="External Account" selected="selected">External
                                                                    Account</option>
                                                            </select>
                                                        </div>
                                                        <input type="hidden" name="pm_autoEnabled" id="pm_autoEnabled"
                                                            value="Enabled">
                                                        <input type="hidden" name="pm_manualEnabled"
                                                            id="pm_manualEnabled" value="Disabled">
                                                        <div class="input-group" style="display: none;" id="sellfrom_pm">
                                                            <select name="sell_from_pm" id="sell_from_pm"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Automatic" value="Automatic"
                                                                    selected="selected">Automatic</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group" style="display: none;"
                                                            id="sellfrom_crypto">
                                                            <select name="sell_from_crypto" id="sell_from_crypto"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option value="External Wallet">External Wallet</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="display: none;" id="sellfrom_type">
                                                        <label id="sellfromlabel2">Wallet Type</label>
                                                        <div class="input-group">
                                                            <select name="sell_from_type" id="sell_from_type"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Blockchain" value="Blockchain"
                                                                    selected="selected">Blockchain</option>
                                                                <option value="Binance">Binance</option>
                                                                <option value="Coinbase">Coinbase</option>
                                                                <option value="Paxful">Paxful</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Enter your amount</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <select id="currencySell"
                                                                    class="form-control input-group-text">
                                                                    <option value="USD" data-display="USD"
                                                                        selected="selected">USD</option>
                                                                    <option value="BTC">BTC</option>
                                                                    <option value="NGN">NGN</option>
                                                                </select>
                                                            </div>
                                                            <input type="text" name="amountSell" class="form-control"
                                                                id="amountSell">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0" id="ecurrsell"></p>
                                                            <p class="mb-0" id="ecurrsell2"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodiv" id="acctnodiv"
                                                        style="display: none;">
                                                        <label id="header_acct"></label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnoSell"
                                                                class="form-control acctnoCheck" id="acctnoSell">
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodiv" id="acctnamediv"
                                                        style="display: none;">
                                                        <label id="header_acctname"></label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnameSell"
                                                                class="form-control acctnameCheck" id="acctnameSell">
                                                        </div>
                                                    </div>
                                                    <div class="form-group availsale" style="">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 availsale" style=""><b>Bitcoin
                                                                    Balance</b></p>
                                                            <p class="mb-0 availsale btcbal balspan" style="">{{number_format(Auth::user()->wallet->btc, 8)}} BTC
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group usdtavailsale" style="">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 usdtavailsale" style=""><b>USDT
                                                                    Balance</b></p>
                                                            <p class="mb-0 usdtavailsale usdtbal balspan" style="">{{Auth::user()->wallet->usdt}} USDT
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group ethavailsale" style="">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 ethavailsale" style=""><b>Ethereum
                                                                    Balance</b></p>
                                                            <p class="mb-0 ethavailsale ethbal balspan" style="">{{number_format(Auth::user()->wallet->eth, 8)}} ETH
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <button type="button" name="sellNowbtn"
                                                        class="btn_1 w-100 sellNowbtn" id="sellNowbtn">Sell Now <span
                                                            class="loadingText fa fa-spinner fa-spin fa-2x"
                                                            style="display:none;float:right;"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--End quickselldiv-->
                                        <div class="white_card_body tab-pane fade active show" id="quickbuydiv">
                                            <div class="exchange_widget">
                                                <form id="myBuyform" class="currency_validate">
                                                    <div class="form-group buyprice">Buy 1 BTC @
                                                        ₦{{ number_format(getCurrentBtcDollar() * rates()[0]['buy_rate'], 2) }}
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Currency</label>
                                                        <div class="input-group ">
                                                            <select name="currency_buy" id="currency_buy"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Bitcoin" selected="selected"
                                                                    data-value="BTC" value="Bitcoin">Bitcoin</option>
                                                                <option data-value="PM" value="Perfect Money">Perfect
                                                                    Money</option>
                                                                <option data-value="ETH" value="Ethereum">Ethereum
                                                                </option>
                                                                <option data-value="TRC20" value="USDT TRC20">USDT TRC20
                                                                </option>
                                                                <option data-value="BCH" value="bitcoin Cash">bitcoin Cash
                                                                </option>
                                                                <option data-value="TRN" value="Tron">Tron
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group" id="buyfrom_div">
                                                        <label id="buyfromlabel">Pay With</label>
                                                        <div class="input-group" id="buyfrom_btc" style="display: none;">
                                                            <select name="buy_from" id="buy_from"
                                                                class="form-control nice_Select buy_from"
                                                                style="display: none;">
                                                                <option data-display="Naira Wallet" value="Naira Wallet"
                                                                    selected="selected">Naira Wallet</option>
                                                            </select>
                                                        </div>
                                                        <div class="input-group" style="" id="buyfrom_account">
                                                            <select name="buy_from_acct" id="buy_from_acct"
                                                                class="form-control nice_Select buy_from"
                                                                style="display: none;">
                                                                <option data-display="Naira Wallet" value="Naira Wallet"
                                                                    selected="selected">Naira Wallet</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Enter your amount</label>
                                                        <div class="input-group mb-3">
                                                            <div class="input-group-prepend">
                                                                <select id="currencyBuy"
                                                                    class="form-control input-group-text">

                                                                    <option value="USD" data-display="USD"
                                                                        selected="selected">USD</option>
                                                                    <option value="NGN">NGN</option>
                                                                </select>
                                                            </div>
                                                            <input type="text" name="amountBuy" class="form-control"
                                                                id="amountBuy">
                                                        </div>

                                                    </div>
                                                    <div class="form-group">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0" id="ecurrbuy"></p>
                                                            <p class="mb-0" id="ecurrbuy2"></p>
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodivbuy" id="acctnodiv_buy"
                                                        style="">
                                                        <label id="header_acct_buy">Your Perfect Money Account
                                                            Number</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnoBuy"
                                                                class="form-control acctnoCheck" id="acctnoBuy">
                                                        </div>
                                                    </div>
                                                    <div class="form-group acctInfodivbuy" id="acctnamediv_buy"
                                                        style="">
                                                        <label id="header_acctname_buy">Your Perfect Money Account
                                                            Name</label>
                                                        <div class="input-group mb-3">
                                                            <input type="text" name="acctnameBuy"
                                                                class="form-control acctnameCheck" id="acctnameBuy">
                                                        </div>
                                                    </div>
                                                    <div class="form-group" style="display: none;" id="buy_type">
                                                        <label id="buy_typelabel">Wallet Type</label>
                                                        <div class="input-group">
                                                            <select name="buy_to_type" id="buy_to_type"
                                                                class="form-control nice_Select" style="display: none;">
                                                                <option data-display="Blockchain" value="Blockchain"
                                                                    selected="selected">Blockchain</option>
                                                                <option value="Binance">Binance</option>
                                                                <option value="Coinbase">Coinbase</option>
                                                                <option value="Paxful">Paxful</option>
                                                                <option value="Others">Others</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="form-group availbuy" style="display: none;">
                                                        <div class="d-flex justify-content-between mt-3 ">
                                                            <p class="mb-0 availbuy" style="display: none;"><b>Available
                                                                    Balance</b></p>
                                                            <p class="mb-0 availbuy ngnbal balspan"
                                                                style="display: none;">
                                                                ₦{{ number_format(Auth::user()->wallet->naira, 2) }}</p>
                                                        </div>
                                                    </div>
                                                    <button type="button" name="buyNowbtn" class="btn_1 w-100 buyNowbtn"
                                                        id="buyNowbtn">Buy Now <span
                                                            class="loadingText fa fa-spinner fa-spin fa-2x"
                                                            style="display:none;float:right;"
                                                            id="loadingText_buy"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                        <!--end quickbuydiv-->
                                    </div>
                                @endif

                            </div>
                        </div>
                        <div class="col-lg-8" id="goTopriceList">
                            <div class="white_card mb_30 card_height_100">
                                <div class="white_card_header ">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0 pricelist">Price List for Today {{ date('d/M/Y') }}</h3>
                                        </div>
                                        <!-- <a href="#">
                                                <p>View all</p>
                                            </a> -->
                                    </div>
                                </div>
                                <div class="white_card_body pt-0">
                                    <div class="QA_section">
                                        <div class="QA_table mb-0 transaction-table">
                                            <!-- table-responsive -->
                                            <div class="table-responsive">
                                                <table class="table  ">
                                                    <thead>
                                                        <ul class="nav nav-pills custom_bootstrap_nav pricemobile">
                                                            <li class="nav-item">
                                                                <a class="nav-link buyptab active"
                                                                    style="background:#77c454;" data-toggle="tab">Buy
                                                                    Prices</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link sellptab" data-toggle="tab">Sell
                                                                    Prices</a>
                                                            </li>
                                                        </ul>

                                                        <tr class="pricedesk">
                                                            <th scope="row">E-currency</span></th>
                                                            <th><span class="badge badge-success pricetag">Buy (per
                                                                    USD)</span></th>
                                                            <th><span class="badge badge-danger pricetag">Sell (per
                                                                    USD)</span></th>
                                                        </tr>
                                                    </thead>
                                                    <input type="hidden" id="typepr">

                                                    @if ($rates->count() > 0)
                                                        @foreach ($rates as $item)
                                                            <tr>
                                                                <td scope="row">
                                                                    <img class="small_img"
                                                                        src="{{ $item->currency_img }}" alt="">
                                                                    {{ $item->e_currency }}
                                                                </td>
                                                                <td class="buypricediv1" style="color:#77c454">₦
                                                                    {{ $item->buy_rate }}</td>
                                                                <td class="sellpricediv1" style="color:#ff788e">₦
                                                                    {{ $item->sell_rate }}</td>
                                                            </tr>
                                                        @endforeach
                                                    @else
                                                    @endif
                                                    <!-- </div> -->
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8" id="order_history_mobile">
                            <div class="white_card mb_30 card_height_100">
                                <div class="white_card_header ">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Order History</h3>
                                        </div>
                                        <a href="{{ route('orders') }}">
                                            <p>View all</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="white_card_body pt-0">
                                    <div class="QA_section">
                                        @if ($order->count() > 0)
                                            <div class="QA_table mb-0 transaction-table">
                                                <!-- table-responsive -->
                                                <div class="table-responsive">
                                                    <table class="table  ">
                                                        <tbody>
                                                            @foreach ($order as $item)
                                                            <tr>
                                                                @if ($item->type == 'Sell')
                                                                    <td scope="row">
                                                                        <span class="sold-thumb"><i
                                                                                class="ti-arrow-down"></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-danger">{{ $item->type }}</span>
                                                                    </td>
                                                                @endif
                                                                @if ($item->type == 'Buy')
                                                                    <td scope="row">
                                                                        <span class="buy-thumb"><i
                                                                                class="ti-arrow-up"></i></span>
                                                                    </td>
                                                                    <td>
                                                                        <span
                                                                            class="badge badge-success">{{ $item->type }}</span>
                                                                    </td>
                                                                @endif
                                                                <td>
                                                                    <span>
                                                                        @php
                                                                            $in = App\Models\Invoice::where('user_id', Auth::user()->id)
                                                                                ->where('order_id', $item->id)
                                                                                ->first();
                                                                            if ($in != null) {
                                                                                $ins = true;
                                                                            } else {
                                                                                $ins = false;
                                                                            }
                                                                        @endphp
                                                                        @if ($ins == true AND $item->status == 0 AND $item->type == "Sell")
                                                                            <a href="#"
                                                                                data-value="{{ $in->invoice_id }}"
                                                                                class="invoice_me"
                                                                                title="Send Notice">Send Notice</a>
                                                                            OR
                                                                        @endif
                                                                        @if ($item->status == 3)
                                                                            <a href="#"
                                                                                class="status_btn cancel_btn"
                                                                                title="Order Canceled">Order
                                                                                Cancelled</a>
                                                                        @endif
                                                                        @if ($item->status == 0 AND $item->type == "Buy")
                                                                            <a href="#"
                                                                                class="status_btn cancel_btn cancel_me_sell"
                                                                                data-value="{{ $item->id }}"
                                                                                title="Click here to cancel this order">Cancel
                                                                                Order</a>
                                                                        @endif
                                                                        @if ($item->status == 0)
                                                                            <a href="#"
                                                                                class="status_btn cancel_btn cancel_me_sell"
                                                                                data-value="{{ $item->id }}"
                                                                                title="Click here to cancel this order">Cancel
                                                                                Order</a>
                                                                        @endif
                                                                        @if ($item->status == 1)
                                                                            <a href="#"
                                                                                class="status_btn success_btn"
                                                                                title="Order Succeeded">Order
                                                                                Succeeded</a>
                                                                        @endif
                                                                        @if ($item->status == 2 AND $item->pay_with != "Bitcoin Balance")
                                                                            <a href="#"
                                                                                class="status_btn success_btn"
                                                                                title="Order Succeeded">In-Process</a>
                                                                        @endif
                                                                        @if ($item->status == 0 AND $item->currency == "Bitcoin" AND $item->pay_with == "Bitcoin Balance")
                                                                            <a href="#"
                                                                                class="status_btn success_btn"
                                                                                title="Order Succeeded">In-Process</a>
                                                                        @endif
                                                                        @if ($item->status == 0 AND $item->currency == "Ethereum" AND $item->pay_with == "Ethereum Balance")
                                                                            <a href="#"
                                                                                class="status_btn success_btn"
                                                                                title="Order Succeeded">In-Process</a>
                                                                        @endif
                                                                        @if ($item->status == 0 AND $item->currency == "USDT TRC20" AND $item->pay_with == "USDT Balance")
                                                                            <a href="#"
                                                                                class="status_btn success_btn"
                                                                                title="Order Succeeded">In-Process</a>
                                                                        @endif
                                                                    </span>
                                                                </td>
                                                                <td><span
                                                                        title="Order Placed on 06/Nov/2022 09:11 AM">-</span>
                                                                </td>
                                                                <td>
                                                                    <span
                                                                        title="{{ $item->amount }} {{ $item->unit }}">
                                                                        @if ($item->unit == 'USD')
                                                                            {{ $item->amount }} USD
                                                                        @endif
                                                                        @if ($item->unit == 'NGN')
                                                                            {{ $item->amount }} NGN
                                                                        @endif
                                                                        @if ($item->unit == 'BTC')
                                                                            {{ $item->amount }} BTC
                                                                        @endif
                                                                    </span>
                                                                </td>
                                                                <td>
                                                                    @if($item->currency == "Bitcoin")
                                                                    <span title=""><img
                                                                            class="small_img" src="{{rates()[0]->currency_img}}"
                                                                            alt="">
                                                                        {{ $item->currency }}</span>
                                                                    @endif
                                                                    @if($item->currency == "Perfect Money")
                                                                    <span title=""><img
                                                                            class="small_img" src="{{rates()[1]->currency_img}}"
                                                                            alt="">
                                                                        {{ $item->currency }}</span>
                                                                    @endif
                                                                    @if($item->currency == "Ethereum")
                                                                    <span title=""><img
                                                                            class="small_img" src="{{rates()[2]->currency_img}}"
                                                                            alt="">
                                                                        {{ $item->currency }}</span>
                                                                    @endif
                                                                    @if($item->currency == "USDT TRC20")
                                                                    <span title=""><img
                                                                            class="small_img" src="{{rates()[3]->currency_img}}"
                                                                            alt="">
                                                                        {{ $item->currency }}</span>
                                                                    @endif
                                                                    @if($item->currency == "bitcoin Cash")
                                                                    <span title=""><img
                                                                            class="small_img" src="{{rates()[4]->currency_img}}"
                                                                            alt="">
                                                                        {{ $item->currency }}</span>
                                                                    @endif
                                                                    @if($item->currency == "Tron")
                                                                    <span title=""><img
                                                                            class="small_img" src="{{rates()[5]->currency_img}}"
                                                                            alt="">
                                                                        {{ $item->currency }}</span>
                                                                    @endif
                                                                </td>
                                                            </tr>
                                                            @endforeach
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        
                                    @else
                                        <div class="QA_table mb-0 transaction-table">
                                            <!-- table-responsive -->
                                            <div class="table-responsive">
                                                <table class="table  ">
                                                    <tbody>
                                                        <p>
                                                            Your recent order history will appear here.
                                                        </p>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    @endif
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <!-- <h3 class="m-0">Quick Transfer</h3> -->
                                            <ul class="nav nav-pills custom_bootstrap_nav">
                                                <li class="nav-item">
                                                    <a class="nav-link" href="#bitdiv" data-toggle="tab">Send BTC</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link active" href="#nairadiv" data-toggle="tab">
                                                        Withdraw
                                                        Naira</a>
                                                </li>
                                            </ul>
                                        </div>

                                    </div>
                                </div>
                                <div class="tab-content">
                                    @if (Auth::user()->bank->bvn == null)
                                        <div class="white_card_body tab-pane fade" id="bitdiv">
                                            <div class="exchange_widget">
                                                <div class="form-group" id="walletdiv">
                                                    <label id="header_trf_wallet">Bitcoin Address</label>
                                                    <p class="dangerP error_address" style="display: none;"></p>
                                                    <div class="input-group">
                                                        <input type="text" name="trf_wallet" class="form-control"
                                                            id="trf_wallet" />
                                                    </div>
                                                </div>
                                                <p class="formText">
                                                    <a href="/dashboard/settings?type=verify_me"><b>Click here</b></a><b> to verify
                                                        your
                                                        identity to be able to send bitcoin.</b>
                                                </p>
                                                <p class="formText">After verification, you can send bitcoin to any bitcoin
                                                    address comfortably.</p>
                                            </div>
                                        </div>
                                        <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                            <div class="exchange_widget">
                                                <div class="form-group" id="bankacctdiv">
                                                    <label id="header_trf_wallet">Select Bank</label>
                                                    <div class="input-group">
                                                        <select name="bank_name" id="bank_name"
                                                            class="form-control nice_Select" style="display: none;">
                                                            <option value="Verify your identity to withdraw money">Verify your identity to withdraw money
                                                            </option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div>
                                                    <p class="formText">
                                                        <a href="/dashboard/settings?type=verify_me"><b>Click here</b></a><b> to verify
                                                            your
                                                            identity to be able to withdraw naira.</b>
                                                    </p>
                                                    <p class="formText">After verification, you can withdraw naira to your
                                                        account comfortably.</p>
                                                </div>
                                            </div>
                                        </div>
                                    @else
                                        <div class="white_card_body tab-pane fade" id="bitdiv">
                                            <div class="exchange_widget">
                                                <form name="myBTCform" id="myBTCform" class="currency_validate">
                                                    <div class="form-group" id="walletdiv">
                                                        <label id="header_trf_wallet">Bitcoin Address</label>
                                                        <p class="dangerP error_address" style="display: none;"></p>
                                                        <div class="input-group">
                                                            <input type="text" name="trf_wallet" class="form-control"
                                                                id="trf_wallet">
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Enter amount in BTC</label>
                                                        <div class="input-group">
                                                            <input type="text" name="bit_amount" class="form-control"
                                                                id="bit_amount">
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <p class="mb-0">Transfer Fee</p>
                                                            <h6 class="mb-0 showwithfee_btc">
                                                                {{ settings()->btc_trans_fee }}BTC</h6>
                                                            <input type="hidden" name="transfee_btc" id="transfee_btc"
                                                                value="{{ settings()->btc_trans_fee }}">
                                                            <input type="hidden" name="fee_method_btc"
                                                                id="fee_method_btc" value="flat_rate">
                                                            <input type="hidden" name="balbtc" id="balbtc"
                                                                value="{{ Auth::user()->wallet->btc }}">
                                                            <input type="hidden" name="rateUnit" id="rateUnit"
                                                                value="{{ getCurrentBtcDollar() }}">
                                                            <input type="hidden" name="above_amount_btc"
                                                                id="above_amount_btc" value="">
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3"
                                                            id="availBal_btc">
                                                            <p class="mb-0">Current Balance</p>
                                                            <h6 class="mb-0 btcbal_upto balspan" id="balspanOne_btc">
                                                                {{ Auth::user()->wallet->btc }} BTC</h6>
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3 hidden"
                                                            id="availBalwith_btc">
                                                            <p class="mb-0">Balance after this withdrawal</p>
                                                            <h6 class="mb-0 ngnbal_upto balspanwith_btc"></h6>

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
                                                    <button type="button" name="send_submit" id="send_submit"
                                                        class="btn_1 w-100">Send Now <span
                                                            class="loadingText fa fa-spinner fa-spin fa-2x"
                                                            style="display:none;float:right;"
                                                            id="loadingText_send"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                        <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                            <div class="exchange_widget">
                                                <form name="myWithform" id="myWithform" class="currency_validate">
                                                    <div class="form-group" id="bankacctdiv">
                                                        <label>Bank Account</label> <small style="float:right;"><a
                                                                href="settings?type=bank"><i class="fas fa-edit"></i>
                                                                Add/Edit
                                                                Bank</a></small>
                                                        <div class="input-group ">
                                                            <select name="bank_name" id="bank_name"
                                                                class="form-control nice_Select" style="display: block;">
                                                                <option
                                                                    data-display="{{ Auth::user()->bank->bank_name }}...{{ substr(Auth::user()->bank->account_num, 7) }}"
                                                                    selected=""
                                                                    value="{{ Auth::user()->bank->account_num }}"
                                                                    data-value="first">
                                                                    {{ Auth::user()->bank->bank_name }}...{{ substr(Auth::user()->bank->account_num, 7) }}
                                                                </option>
                                                            </select>
                                                        </div>
                                                    </div><!-- mustverify_with_naira -->
                                                    <div class="form-group">
                                                        <label>Enter your amount</label>
                                                        <div class="input-group">
                                                            <input type="text" name="trf_amount" class="form-control"
                                                                id="trf_amount">
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3">
                                                            <p class="mb-0">Transfer Fee</p>
                                                            <h6 class="mb-0 showwithfee">
                                                                {{ settings()->naira_withdraw_fee }}% of your withdrawal
                                                                amount</h6>
                                                            <input type="hidden" name="withfee" id="withfee"
                                                                value="{{ settings()->naira_withdraw_fee }}">
                                                            <input type="hidden" name="fee_method" id="fee_method"
                                                                value="percentage">
                                                            <input type="hidden" name="balngn" id="balngn"
                                                                value="{{ Auth::user()->wallet->naira }}">
                                                            <input type="hidden" name="above_amount" id="above_amount"
                                                                value="">
                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3 hidden"
                                                            id="availBal">
                                                            <p class="mb-0">Current Balance</p>
                                                            <h6 class="mb-0 ngnbal_upto balspan" id="balspanOne"></h6>

                                                        </div>
                                                        <div class="d-flex justify-content-between mt-3 hidden"
                                                            id="availBalwith">
                                                            <p class="mb-0">Balance after this withdrawal</p>
                                                            <h6 class="mb-0 ngnbal_upto balspanwith"></h6>

                                                        </div>
                                                    </div>
                                                    <button type="button" name="with_submit" id="with_submit"
                                                        class="btn_1 w-100">Withdraw Now <span
                                                            class="loadingText fa fa-spinner fa-spin fa-2x"
                                                            style="display:none;float:right;"
                                                            id="loadingText_with"></span></button>
                                                </form>
                                            </div>
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="white_card mb_30 card_height_100">
                                <div class="white_card_header ">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h3 class="m-0">Recent Bitcoin Transactions</h3>
                                        </div>
                                        <a href="{{ route('wallet_transactions') }}">
                                            <p class="viewall">View all</p>
                                        </a>
                                    </div>
                                </div>
                                <div class="white_card_body pt-0">
                                    <div class="QA_section">
                                        <div class="QA_table mb-0 transaction-table">
                                            <!-- table-responsive -->
                                            @if ($trans->count() > 0)
                                                <div id="DataTables_Table_0_wrapper"
                                                    class="dataTables_wrapper no-footer">
                                                    <div id="DataTables_Table_0_filter" class="dataTables_filter">
                                                        <label><i class="ti-search"></i><input type="search"
                                                                class="" placeholder="Quick Search"
                                                                aria-controls="DataTables_Table_0" /></label>
                                                    </div>
                                                    <table class="table lms_table_active3 dataTable no-footer dtr-inline"
                                                        id="DataTables_Table_0" role="grid"
                                                        aria-describedby="DataTables_Table_0_info"
                                                        style="width: 1140px;">
                                                        <!--<thead>
                                                            <tr role="row">
                                                                <th scope="col" class="sorting_disabled"
                                                                    rowspan="1" colspan="1"
                                                                    style="width: 67px;">
                                                                </th>
                                                                <th scope="col" class="sorting_disabled"
                                                                    rowspan="1" colspan="1"
                                                                    style="width: 173px;">
                                                                    Time</th>
                                                                <th scope="col" class="sorting_disabled"
                                                                    rowspan="1" colspan="1"
                                                                    style="width: 308px;">
                                                                    Address</th>
                                                                <th scope="col" class="sorting_disabled"
                                                                    rowspan="1" colspan="1"
                                                                    style="width: 200px;">
                                                                    Status</th>
                                                                <th scope="col" class="sorting_disabled"
                                                                    rowspan="1" colspan="1"
                                                                    style="width: 240px;">
                                                                    Amount</th>
                                                            </tr>
                                                        </thead>-->
                                                        <tbody>
                                                            @foreach ($trans as $item)
                                                                <tr>
                                                                <tr class="odd">
                                                                    <td scope="row">
                                                                        <span class="badge badge-danger">Sent</span><br>
                                                                        <span class="datetd">{{ $item->created_at->format('d/M/Y') }}</span>
                                                                    </td>
                                                                    {{--<td>
                                                                        <p class="" style="cursor: pointer;">
                                                                             at {{ $item->created_at->format('h:m a') }}
                                                                        </p>
                                                                    </td>--}}
                                                                    <td>
                                                                        <div class="media align-items-center">
                                                                            <div class="media-body">
                                                                                <p>{{ $item->trf_wallet }}</p>
                                                                            </div>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <p class="" style="cursor: pointer;">
                                                                            @if ($item->status == 0)
                                                                                <span>pending</span>
                                                                            @endif
                                                                            @if ($item->status == 1)
                                                                                <span>approved</span>
                                                                            @endif
                                                                            @if ($item->status == 3)
                                                                                <span>rejected</span>
                                                                            @endif
                                                                        </p>
                                                                    </td>
                                                                    <td>
                                                                        <p> {{ $item->btc_amount }}</p>
                                                                    </td>
                                                                </tr>
                                                                </tr>
                                                            @endforeach

                                                        </tbody>
                                                    </table>
                                                    {{-- <div class="dataTables_info" id="DataTables_Table_0_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div>
                                                <div class="dataTables_paginate paging_simple_numbers" id="DataTables_Table_0_paginate">
                                                    <a class="paginate_button previous disabled" aria-controls="DataTables_Table_0" data-dt-idx="0" tabindex="0" id="DataTables_Table_0_previous"><i class="ti-arrow-left"></i></a><span></span>
                                                    <a class="paginate_button next disabled" aria-controls="DataTables_Table_0" data-dt-idx="1" tabindex="0" id="DataTables_Table_0_next"><i class="ti-arrow-right"></i></a>
                                                </div> --}}
                                                    <input type="hidden" id="countmsg" value="">
                                                </div>
                                            @else
                                                <div class="table-responsive">
                                                    <table class="table  ">
                                                        <tbody>
                                                            <p>
                                                                Your recent bitcoin transactions will appear here.
                                                            </p>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <form action="https://perfectmoney.is/api/step1.asp" method="POST" id="pm_form">
                    <input type="hidden" name="PAYEE_ACCOUNT" value="U4289111">
                    <input type="hidden" name="PAYEE_NAME" value="Abijan Exchange">
                    <input type="hidden" name="PAYMENT_ID" value="Sell PM">
                    <input type="hidden" name="PAYMENT_AMOUNT" id="PAYMENT_AMOUNT" value="20">
                    <input type="hidden" name="PAYMENT_UNITS" value="USD">
                    <input type="hidden" name="STATUS_URL"
                        id="STATUS_URL"
                        value="mailto:morshudlhgmo@gmail.com">
                    <input type="hidden" name="PAYMENT_URL"
                        id="PAYMENT_URL"
                        value="http://abijanexchange.greenmouseproperties.com/dashboard/pmresponse">
                    <input type="hidden" name="PAYMENT_URL_METHOD"
                        id="PAYMENT_URL_METHOD" value="POST">
                    <input type="hidden" name="NOPAYMENT_URL"
                        id="NOPAYMENT_URL"
                        value="http://abijanexchange.greenmouseproperties.com/dashboard/sell-pm?status=error&amp;type=nopayment">
                    <input type="hidden" name="BAGGAGE_FIELDS"
                        id="BAGGAGE_FIELDS" value="Email CUST_NUM">
                    <input type="hidden" name="SUGGESTED_MEMO"
                        id="SUGGESTED_MEMO" value="Invoice no 11247483">
                    <input type="hidden" name="Email" value="{{Auth::user()->email}}">
                    <input type="hidden" name="PAYMENT_METHOD"
                        id="PAYMENT_METHOD" value="PerfectMoney account">
            </form>
            <!-- [ content ] End -->

            <!-- [ Layout footer ] Start -->
            @includeIf('layouts.dashboard-footer')
            <script
  src="https://code.jquery.com/jquery-3.6.3.min.js"
  integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU="
  crossorigin="anonymous"></script>
            <!-- [ Layout footer ] End -->
            <script>
                $('.hidebalspan').click(function() {
                    console.log('hello');
        var txn_ngn1 = parseFloat(txn_ngn).toFixed(2);
        var txn_ngn_show = formatter.format(txn_ngn1);

        var txn_usd1 = parseFloat(txn_usd).toFixed(2);
        var txn_usd_show = formatter_usd.format(txn_usd1);

        //var txn_btc = parseFloat(txn_btc).toFixed(8);

        var txn_total1 = parseFloat(txn_total).toFixed(2);
        var txn_total_show = formatter.format(txn_total1);

        if ($(this).hasClass('showbal')) {
            //Show the balance
            $('.hidebal').show();
            $('.showbal').hide();
            $('.totalbal').html(txn_total_show);
            $('.btcbal').html(txn_btc + " BTC");
            $('.ethbal').html(txn_eth + " ETH");
            $('.ethusdbal').html("$"+txn_ethusd);
            $('.usdtusdbal').html("$"+txn_usdtusd);
            
            $('.usdtbal').html(txn_usdt + "USDT");
            $('.btcbal_upto').html(txn_btc_upto + " BTC");
            $('.ngnbal_upto').html("₦ " + txn_ngn_upto);
            $('.ngnbal').html(txn_ngn_show);
            $('.usdbal').html(txn_usd_show);
            var url = window.location.href.split('#')[0];
            history.replaceState('', document.title, url);
            /* $.ajax({
                type: "POST",
                url: "readnotice",
                data: {
                    bal: 'yes'
                },
                success: function(result) {
                    if (result) {
                        $('.hidebal').show();
                        $('.showbal').hide();
                        $('.totalbal').html(txn_total_show);
                        $('.btcbal').html(txn_btc + " BTC");
                        $('.btcbal_upto').html(txn_btc_upto + " BTC");
                        $('.ngnbal_upto').html("₦ " + txn_ngn_upto);
                        $('.ngnbal').html(txn_ngn_show);
                        $('.usdbal').html(txn_usd_show);
                        var url = window.location.href.split('#')[0];
                        history.replaceState('', document.title, url);
                    }

                }
            }); */
        } else {
            //Hide the balance
            $('.showbal').show();
            $('.hidebal').hide();
            $('.balspan').html('***');
            var url = window.location.href.split('#')[0];
            history.replaceState('', document.title, url);
            /* $.ajax({
                type: "POST",
                url: "readnotice",
                data: {
                    bal: 'no'
                },
                success: function(result) {
                    if (result) {

                    }

                }
            }); */
        }
    });
            </script>
        </div>
        <!-- [ Layout content ] Start -->
    </div>
    <!-- [ Layout container ] End -->
@endsection
