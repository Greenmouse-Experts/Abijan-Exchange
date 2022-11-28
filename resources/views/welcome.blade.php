@extends('layouts.frontend')

@section('header')
    @includeIf('layouts.frontend-header')
@endsection

@section('footer')
    @includeIf('layouts.frontend-footer')
@endsection

@section('page-content')
    <!-- PARTICLES -->
    <div id="particle-container">
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
        <div class="particle_1"></div>
    </div>

    <!-- BANNER START -->
    <section class="hero-area hero-bg"style="padding-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 align-self-center">
                    <div class="hero-content mb-5 mb-lg-0">
                        <h1 class="fw-bold mb-4">The Best & Most Reliable E-currency Exchange, Operating Since 2012
                        </h1>
                        <div class="text-dark">Abijan Exchange gives you the freedom to make instant and easy buy, sell,
                            pay, swap and store your cryptos. We have the most secure platform to manage your crypto &
                            e-currency portfolio in Nigeria.</div>
                        <div class="align-items-center mt-4">
                            <button class="btn btn-primary shadow-none">
                                <a href="/register">
                                    Get Started
                                </a>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="col-1"></div>
                <div class="col-lg-4 justify-content-end">
                    <div id="vue-app" class="">
                        <div
                          class="card shadow pt-2"
                          style="box-shadow: grey 0px 0px 2px; border-radius: 10px"
                        >
                          <!---->
                          <div class="card-head bg-transparent border-0">
                            <h5 class="card-title text-center">
                              Buy/Sell <b>Crypto</b>
                              Instantly
                            </h5>
                            <ul class="nav nav-pills mb-3 m-auto text-center" id="pills-tab" role="tablist">
                              <li class="nav-item m-auto">
                                    <a href="#"
                                        v-on:click="setNewValue('buy')"
                                        v-bind:class="[current_option == 'buy' ? 'nav-link active': 'nav-link']">
                                        BUY
                                    </a>
                                </li>
                                <li class="nav-item m-auto">
                                    <a href="#"
                                        v-on:click="setNewValue('sell')"
                                        v-bind:class="[current_option == 'sell' ? 'nav-link active': 'nav-link']">
                                        SELL
                                    </a>
                                </li>
                            </ul>
                          </div>
                          <div class="card-body mt-0">
                            <form id="vuePriceForm" action="" method="post">
                              <div class="row no-gutters mb-2">
                                <div class="col-8">
                                  <input
                                    type="text"
                                    placeholder="0.0000000"
                                    id="Amount"
                                    v-model="btc"
                                    @keyup="handle_btccreateElementonvert"
                                    class="form-control rounded border-dark"
                                  />
                                </div>
                                <div class="col-4">
                                  <div
                                    class="border d-flex justify-content-between ml-2 border-dark rounded w-100"
                                  >
                                    <button
                                      data-toggle="dropdown"
                                      class="bg-transparent btn d-flex align-items-center dropdown-toggle dropdown-toggle-split pl-2"
                                    >
                                      <img
                                        :src="selectedcreateElementoin.icon"
                                        class="rounded-circle mr-2"
                                        style="width: 20px; height:20px; margin-right: 5px;margin-left: -7px;"
                                      />
                                      <span style="font-size: 11px;font-weight: 600;">@{{selectedcreateElementoin.name}}</span>
                                    </button>
                                    <div
                                      class="dropdown-menu p-0 m-0"
                                      style="width: 30px !important; padding-right: 0px !important;"
                                    >
                                      <a style="font-size: 12px;" href="#" @click="change_active(item.name)" v-for="item in coins" :key="item.name" class="dropdown-item"
                                        style="width: 100% !important"
                                        ><img
                                          :src="item.icon"
                                          class="rounded-circle mr-2"
                                          style="width: 20px; height: 20px"
                                        />
                                        <span>@{{item.name}}</span></a
                                      >
                                    </div>
                                  </div>
                                  <small style="font-size: 10px;"
                                    class="d-block text-right mt-2 font-weight-bold text-danger"
                                    >@{{selectedcreateElementoin.buy_in_usd}} USD / @{{activecreateElementoin_selected}}</small
                                  >
                                </div>
                              </div>
                              <div class="row no-gutters mb-2">
                                <div class="col-8">
                                  <input
                                    type="text"
                                    placeholder="Enter amount in NGN"
                                    id="Amount"
                                    v-model="ngn"
                                    @keyup="handle_ngncreateElementonvert"
                                    class="form-control rounded border-dark"
                                  />
                                </div>
                                <div class="col-4">
                                  <div
                                    class="ml-2 d-flex align-items-center border border-dark rounded form-control"
                                  >
                                    <img
                                      src="https://nairadirect.com/images/coin-icon/nigeria.png"
                                      alt="Sell bitcoin in Nigeria quickly with easy steps"
                                      title="Sell bitcoin in Nigeria quickly with easy steps"
                                      class="rounded-circle mr-2"
                                      style="width: 15px;margin-right: 5px;margin-left: -7px;"
                                    />
                                    <span style="font-size: 11px;font-weight: 600;">NGN</span>
                                  </div>
                                  <small style="font-size: 10px;"
                                    v-if="current_option == 'buy'"
                                    class="d-block text-right mt-2 font-weight-bold text-danger"
                                    >1USD = @{{selectedcreateElementoin.buy_one}}NGN</small
                                  >
                                  <small style="font-size: 10px;"
                                    v-if="current_option == 'sell'"
                                    class="d-block text-right mt-2 font-weight-bold text-danger"
                                    >1USD = @{{selectedcreateElementoin.sell_one}}NGN</small
                                  >
                                </div>
                              </div>
                              <div class="row no-gutters">
                                <div class="col-8">
                                  <input
                                    type="text"
                                    placeholder="USD Equivalent"
                                    id="Amount"
                                    v-model="usd"
                                    @keyup="handle_usdcreateElementonvert"
                                    class="form-control rounded border-dark"
                                  />
                                </div>
                                <div class="col-4">
                                  <div
                                    class="ml-2 d-flex align-items-center border border-dark rounded form-control"
                                  >
                                    <img
                                      src="https://nairadirect.com/images/coin-icon/united states.png"
                                      alt="Sell bitcoin in Nigeria quickly with easy steps"
                                      title="Sell bitcoin in Nigeria quickly with easy steps"
                                      class="rounded-circle mr-2"
                                      style="width: 15px;margin-right: 5px;margin-left: -7px;"
                                    />
                                    <span style="font-size: 11px;font-weight: 600;">USD</span>
                                  </div>
                                </div>
                              </div>
                                <div class="form-check mt-1">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                    <label class="form-check-label check_label_fs_sm" for="flexCheckDefault">
                                        I have read and agree with the <a href="/terms-conditions"> Terms &amp; Conditions</a>
                                    </label>
                                </div>
                                <a v-if="current_option == 'buy'" href="/login" class="btn btn-primary text-uppercase fw-bold rounded-1 w-100 mt-2"> Buy
                                    Now
                                </a>
                                <a v-if="current_option == 'sell'" href="/login" class="btn btn-primary text-uppercase fw-bold rounded-1 w-100 mt-2"> Sell
                                    Now
                                </a>

                            </form>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div><!-- end container -->
    </section>

    <style>
        .dropdown-menu {
            --bs-dropdown-min-width: 6rem !important;
        }
        .dropdown-toggle-split::after {
            margin-left: 25% !important;
        }
    </style>
    <!-- END BANNER -->
    <div class="bg-black marquee">
        <div class="TickerNews" id="T1">
            <div class="ti_wrapper">
                <div class="ti_slide">

                    <div class="ti_content" style="width: 2709px; margin-left: -989.258px;">
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/bitcoin.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Bitcoin:
                                </span><span>BTC</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/BCH.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Bitcoin
                                    Cash: </span><span>BCH</span></a></div>

                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/Ethereum.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Ethereum:
                                </span><span>ETH</span></a></div>

                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/TRC20.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>TRC20:
                                </span><span>USDT</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/Tether.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>ERC20:
                                </span><span>USDT</span></a></div>

                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/PM2.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Perfect
                                    Money: </span><span>PM</span></a></div>


                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/paypal2.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Paypal:
                                </span><span>PP</span></a></div>

                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/bitcoin.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Bitcoin:
                                </span><span>BTC</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/BCH.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Bitcoin
                                    Cash: </span><span>BCH</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/Ethereum.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Ethereum:
                                </span><span>ETH</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/TRC20.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>TRC20:
                                </span><span>USDT</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/Tether.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>ERC20:
                                </span><span>USDT</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/PM2.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Perfect
                                    Money: </span><span>PM</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/paypal2.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Paypal:
                                </span><span>PP</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/bitcoin.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Bitcoin:
                                </span><span>BTC</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/BCH.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Bitcoin
                                    Cash: </span><span>BCH</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/Ethereum.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Ethereum:
                                </span><span>ETH</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/TRC20.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>TRC20:
                                </span><span>USDT</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/Tether.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>ERC20:
                                </span><span>USDT</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/PM2.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Perfect
                                    Money: </span><span>PM</span></a></div>
                        <div class="ti_news"><a href="#"><img
                                    src="https://nairadirect.com/images/coin-icon/paypal2.png"
                                    alt="Sell bitcoin in Nigeria quickly with easy steps"
                                    title="Sell bitcoin in Nigeria quickly with easy steps"><span>Paypal:
                                </span><span>PP</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section about my-5" id="about">
        <!-- start container -->
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12 mt-4 pt-2">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pt-2">
                            <img src="{{ URL::asset('assets/images/about.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="col-lg-6 mt-4 pt-2">
                            <h2 class="fw-bold mb-4">About Us</h2>
                            <p class="fs-sm">Abijan Exchange is a leading cryptocurrency exchange and your most reliable
                                source for
                                fast e-currency funding, we provide the safest and easy-to-use digital currency trading
                                platform. Abijan Exchange is a Nigeria biggest E-currency Exchange Company since 2012.
                            </p>
                            <p class="fs-sm">We solve the incessant problem of getting into the crypto market at the
                                right price. We have reduced the unbearable margin between Buying and Selling.</p>
                            <h5 class="fw-bold">Trade With Confidence</h5>
                            <!-- LIST -->
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <i class="fa-solid fa-circle-check me-2"></i>
                                            </div>
                                            <div class="heading">
                                                <h6 class="mt-1 fs-sm">Asset, Price, Quantity, Time and Margin are
                                                    decided by you.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <i class="fa-solid fa-circle-check me-2"></i>
                                            </div>
                                            <div class="heading">
                                                <h6 class="mt-1 fs-sm">Our system is very fluid - you will never miss
                                                    important opportunities to Trade 24/7.</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mt-2">
                                        <div class="d-flex">
                                            <div class="icon">
                                                <i class="fa-solid fa-circle-check me-2"></i>
                                            </div>
                                            <div class="heading">
                                                <h6 class="mt-1 fs-sm">Asset Security Is Paramount.</h6>
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
    </div>

    <!-- RATING ROLLING UP -->
    <div class="container">
        <div class="row pt-5 pb-4">
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="icon-element mb-4">
                        <i class="fa-regular fa-calendar mt-3"></i>
                    </div>
                    <h2 class="counter-number mb-2">11 +</h2>
                    <p class="counter-title">Years Experience</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="icon-element mb-4">
                        <i class="fa-solid fa-money-bill-transfer mt-3"></i>
                    </div>
                    <h2 class="counter-number counter mb-2">85389</h2>
                    <p class="counter-title">Total Transactions</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="icon-element mb-4">
                        <i class="fa-solid fa-users mt-3"></i>
                    </div>
                    <h2 class="counter-number counter mb-2">71540</h2>
                    <p class="counter-title">Active Happy Users</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
            <div class="col-lg-3 col-md-6">
                <div class="counter-item">
                    <div class="icon-element mb-4">
                        <i class="fa-solid fa-cart-shopping mt-3"></i>
                    </div>
                    <h2 class="mb-2 fw-bold"> $<span class="counter-number counter">2,000,000</span> </h2>
                    <p class="counter-title">24h trading volume</p>
                </div><!-- end counter-item-->
            </div><!-- end col-lg-3 -->
        </div>
    </div>

    <!-- Steps Area -->
    <section class="steps position-relative py-5" style="background-color: #f5f5f5;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mt-5">
                    <div class="steps-right">
                        <ul>
                            <li class="steps-item">
                                <div class="icon-wrapper">
                                    <span>
                                        <i class="ri-check-line"></i>
                                    </span>
                                </div>
                                <div class="steps-content">
                                    <div class="content-title">
                                        <h5 class="fw-bold">Get started in three easy steps</h5>
                                    </div>
                                    <div class="content-txt">
                                        <p class="fs-sm">Create an Account</p>
                                    </div>
                                </div>
                            </li>
                            <li class="steps-item">
                                <div class="icon-wrapper">
                                    <span>
                                        <i class="ri-check-line"></i>
                                    </span>
                                </div>
                                <div class="steps-content">
                                    <div class="content-title">
                                        <h5 class="fw-bold">Sign up for free on our website</h5>
                                    </div>
                                    <div class="content-txt">
                                        <p class="fs-sm">Get verified and link your bank account to make naira deposits
                                            and withdrawals</p>
                                    </div>
                                </div>
                            </li>
                            <li class="steps-item">
                                <div class="icon-wrapper">
                                    <span>
                                        <i class="ri-check-line"></i>
                                    </span>
                                </div>
                                <div class="steps-content">
                                    <!-- <span class="count-number">03</span> -->
                                    <div class="content-title">
                                        <h5>Buy, Sell, Trade on the go</h5>
                                    </div>
                                    <div class="content-txt">
                                        <p class="fs-sm">Start buying and selling, Fund your account with Naira and
                                            start trading all your favourite coins!
                                        </p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <button class="btn btn-primary btn-lg shadow rounded-1 fw-bold me-3"> Download Wallet </button> -->
                    <button class="btn btn-dark btn-lg move shadow rounded-1 fw-bold"> <a href="/register">
                            Get Started
                        </a> </button>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="steps-left">
                        <img src="{{ URL::asset('assets/images/mobile_wallet.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Steps Are End -->
    <section class="process-section bg-light py-5">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 col-md-12">
                    <div class="section-heading text-center aos-init aos-animate" data-aos="fade-up">
                        <h2 class="fw-bold"> Why Choose Us </h2>
                        <p> We are trusted by thousands of active bitcoin traders that understand the importance of
                            security and good rates. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="setup-process-wrap">
                        <ul class="setup-process-list list-unstyled text-center mb-0">
                            <li class="setup-process-item py-4 px-2" data-aos="fade-up">
                                <div class="setup-process-icon mb-3">
                                    <i class="ri-secure-payment-fill text-primary ri-3x"></i>
                                </div>
                                <span class="badge bg-dark py-1 px-3 rounded-custom">
                                    BEST EXCHANGE RATES</span>
                                <p class="mt-3 mb-0"> You want the best rate? Abijan Exchange is the right place. We
                                    always provide you with the best exchange rates. </p>
                            </li>
                            <li class="setup-process-item py-4 px-2" data-aos="fade-up">
                                <div class="setup-process-icon mb-3">
                                    <i class="ri-hand-coin-fill text-primary ri-3x"></i>
                                </div>
                                <span class="badge bg-dark py-1 px-3 rounded-custom">ALWAYS AVAILABLE SUPPORT</span>
                                <p class="mt-3 mb-0"> We got your back. If you have any question or, one in a million,
                                    faced a problem working on our platform, just contact support. </p>
                            </li>
                            <li class="setup-process-item py-4 px-2" data-aos="fade-up">
                                <div class="setup-process-icon mb-3">
                                    <i class="ri-exchange-dollar-fill text-primary ri-3x"></i>
                                </div>
                                <span class="badge bg-dark py-1 px-3 rounded-custom">MORE CURRENCY OPTION</span>
                                <p class="mt-3 mb-0">At Abijan Exchange you have the options to choose from many currency
                                    pairs. Just make a wish, your currency is in your wallet.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-dark position-relative pt-5 py-sm-6 pb-sm-2">
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-size-cover"
            style="background-image: url(img/demo/booking/bg-pattern02.png);"></div>
        <div class="position-relative zindex-5 container pb-3 pt-sm-2">
            <div class="mx-auto" style="max-width: 460px;">
                <h2 class="text-light text-center pt-sm-2 fw-bold mb-3">Subscribe to our newsletter</h2>
                <p class="text-light text-center mb-grid-gutter mb-5">To get latest updates from us</p>
                <form
                    action="https://facebook.us20.list-manage.com/subscribe/post?u=3e271affbd0840470e2d612ff&amp;id=2602f8aff0&amp;f_id=00f02de4f0"
                    method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank"
                    novalidate class="validate input-group mb-4">
                    <input class="form-control shadow-none required email" type="email" name="EMAIL" id="mce-EMAIL"
                        required placeholder="Enter your email address" required="">
                    <button style="border-radius: 0 10px 10px 0 !important;" class="btn btn-primary" type="submit"><i
                            class="ri-send-plane-fill"></i></button>
                </form>
            </div>
        </div>
    </section>

    <!-- JOIN THE COMMUNITY -->
    <div class="join_community my-5 py-5">
        <section class="container position-relative zindex-5 mt-2 mt-md-5" id="tickets">
            <div class="row justify-content-center">
                <div class="col-lg-10 col-md-11">
                    <div class="bg_light rounded-3 pt-5 px-3 pb-4 p-sm-5">
                        <div
                            class="join_margin d-sm-flex justify-content-between align-items-center text-center text-sm-start">
                            <div class="join_community_hero">
                                <img class="up_down" src="{{ URL::asset('assets/images/join_community.png') }}"
                                    alt="">
                            </div>
                            <div class=""></div>
                            <div class=""></div>
                            <div class=""></div>
                            <div class=""></div>
                            <div class="me-sm-3 mb-4 mb-sm-0">
                                <h4 class="mb-2 text-dark fw-bold">Join the <span style="color: #0B2A6B;">
                                        Community</span> </h4>
                                <p class="mb-0 text-dark fs-sm">Cick here to join our community and
                                    get updates on our product </p>
                            </div>
                            <a class="btn btn-primary" target="_blank" href=https://t.me/abijan_Exchangee">Proceed</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!-- Steps Area -->
    <!-- DOWLOAD AREA -->
    <div class=" container mt-5">
        <div class="download_area p-5">

            <div class="row">

                <div class="col-lg-6">

                    <h2 class="fw-bold mb-3">Also available on IOS and Google Play</h2>
                    <p>Download our ANDROID and IOS apps today and start trading on your mobile
                        phone</p>

                    <div class="mt-4">

                        <a class="btn-market btn-apple me-2 me-md-3" href="javascript:void(0)" role="button">
                            <span class="btn-market-subtitle">Download on the</span>
                            <span class="btn-market-title">App Store</span>
                        </a>

                        <a class="btn-market btn-google mx-2" href="javascript:void(0)" role="button">
                            <span class="btn-market-subtitle">Download on the</span>
                            <span class="btn-market-title">Google Play</span>
                        </a>

                    </div>

                </div>

                <div class="col-lg-5 offset-lg-1 download_image">
                    <img class="d-block mx-auto" src="assets/images/iphone.png" alt="Mobile App">
                </div>

            </div>

        </div>
    </div>
    <!-- DOWNLOAD AREA END -->
    <!--Testimonial-->
    <section class="testimonial">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 text-center mb-4">
                    <div class="textHead">
                        <p class="subhead"></p>
                        <h2>Our Customers Feedback</h2>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div id="carouselExampleIndicators" class="carousel slide testimonialSlider" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                                class="active" aria-current="true" aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3"
                                aria-label="Slide 4"></button>
                            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4"
                                aria-label="Slide 5"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row justify-content-center testimonialDiv">
                                    <div class="col-md-1">
                                        <div class="testimonialImg">
                                            <img src="{{ URL::asset('assets/images/Frame 487.png') }}" draggable="false">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="testimonialBox">
                                            <div class="mainShape">
                                                <img class="quote" src="{{ URL::asset('assets/images/quote.png') }}"
                                                    draggable="false">
                                                <p>“ I enjoy doing business with you guys, because
                                                    you don't
                                                    delay
                                                    processing transactions as soon as payments are
                                                    made.
                                                    Thanks and
                                                    keep it up
                                                    ”
                                                </p>
                                                <h5>John Chukwudi</h5>
                                            </div>
                                            <div class="shape1"></div>
                                            <div class="shape2"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center testimonialDiv">
                                    <div class="col-md-1">
                                        <div class="testimonialImg">
                                            <img src="{{ URL::asset('assets/images/Frame 488.png') }}" draggable="false">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="testimonialBox">
                                            <div class="mainShape">
                                                <img class="quote" src="{{ URL::asset('assets/images/quote.png') }}"
                                                    draggable="false">
                                                <p>
                                                    “Abijan Exchange is an amazing e-currency
                                                    exchanger.
                                                    Their
                                                    services is fast and very relaible. Looking
                                                    forward to
                                                    doing
                                                    more business with you guys.
                                                    ”
                                                </p>
                                                <h5>Sunny Adike</h5>
                                            </div>
                                            <div class="shape1"></div>
                                            <div class="shape2"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center testimonialDiv">
                                    <div class="col-md-1">
                                        <div class="testimonialImg">
                                            <img src="{{ URL::asset('assets/images/Frame 489.png') }}" draggable="false">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="testimonialBox">
                                            <div class="mainShape">
                                                <img class="quote" src="{{ URL::asset('assets/images/quote.png') }}"
                                                    draggable="false">
                                                <p>
                                                    “I enjoy doing business with you guys, because you don't
                                                    delay
                                                    processing transactions as soon as payments are made.
                                                    Thanks and
                                                    keep it up
                                                    ”
                                                </p>
                                                <h5>Hamzat</h5>
                                            </div>
                                            <div class="shape1"></div>
                                            <div class="shape2"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center testimonialDiv">
                                    <div class="col-md-1">
                                        <div class="testimonialImg">
                                            <img src="{{ URL::asset('assets/images/Frame 490.png') }}" draggable="false">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="testimonialBox">
                                            <div class="mainShape">
                                                <img class="quote" src="{{ URL::asset('assets/images/quote.png') }}"
                                                    draggable="false">
                                                <p>
                                                    “Trust and integrity are such in your organisation.
                                                    Please keep
                                                    it up. May God bless you all
                                                    ”
                                                </p>
                                                <h5>Abdul</h5>
                                            </div>
                                            <div class="shape1"></div>
                                            <div class="shape2"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                            <div class="carousel-item">
                                <div class="row justify-content-center testimonialDiv">
                                    <div class="col-md-1">
                                        <div class="testimonialImg">
                                            <img src="{{ URL::asset('assets/images/Frame 491.png') }}" draggable="false">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="testimonialBox">
                                            <div class="mainShape">
                                                <img class="quote" src="{{ URL::asset('assets/images/quote.png') }}"
                                                    draggable="false">
                                                <p>
                                                    “ Abijan Exchange is an amazing e-currency exchanger.
                                                    Their
                                                    services is fast and very relaible. Looking forward to
                                                    doing
                                                    more business with you guys.
                                                    ”
                                                </p>
                                                <h5>Adeleke</h5>
                                            </div>
                                            <div class="shape1"></div>
                                            <div class="shape2"></div>
                                        </div>
                                    </div>
                                    <div class="col-md-1"></div>
                                </div>
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="prev">
                            <i class="bi bi-arrow-left"></i>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                            data-bs-slide="next">
                            <i class="bi bi-arrow-right"></i>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Testimonial Ends-->

    <!-- Steps Are End -->
    <!-- <section class="feedback-area content-bg position-relative overflow-hidden py-5">
                <img src="{{ URL::asset('ssets/images/dark-mode-gradient.svg') }}" alt="shape"
                    style="user-select: none !important; z-index: -4 !important;;"
                    class="position-absolute center-shape">
                <div class="container mt-5">
                    <div class="row align-items-center justify-content-center">
                        <div class="col-lg-6">
                            <div class="feedback-title text-center">
                                <h2 class="fw-bold">Our customers feedback</h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="feedback-slider mt-5 slick-initialized slick-slider"><button
                                    class="slick-arrow slick-prev"><i
                                        class="ri-arrow-left-line"></i></button>
                                <div class="slick-list draggable">
                                    <div class="slick-track"
                                        style="opacity: 1; width: 5715px; transform: translate3d(-1143px, 0px, 0px);">
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="-3" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="{{ URL::asset('assets/images/fc-1.jpg') }}" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">
                                                    <h6 class="fw-bold mb-1">Sunny Adike</h6>
                                                </div>
                                            </div>
                                            <div class="feedback-comment">
                                                <p> Abijan Exchange  is an amazing e-currency exchanger.
                                                    Their
                                                    services is fast and very relaible. Looking forward to
                                                    doing
                                                    more business with you guys.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="-2" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Mathew Aduh</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Just to say a big thank you for your wonderful and
                                                    efficient
                                                    services. Your customer service is spectacular.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="-1" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Patrick Paul</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                I have been enjoying Abijan Exchange  over the years because
                                                of there
                                                fast funding and they are reliably good.
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-current slick-active"
                                            data-slick-index="0" aria-hidden="false" style="width: 356px;"
                                            tabindex="0">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">John Joel</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Very good site and simple, the rates are very nice also
                                                    and they
                                                    are very fast in sending money to your bank
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-active"
                                            data-slick-index="1" aria-hidden="false" style="width: 356px;"
                                            tabindex="0">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Thomas Agaba</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Trust and integrity are such in your organisation.
                                                    Please keep
                                                    it up. May God bless you all
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-active"
                                            data-slick-index="2" aria-hidden="false" style="width: 356px;"
                                            tabindex="0">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">John Chukwudi</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> I enjoy doing business with you guys, because you don't
                                                    delay
                                                    processing transactions as soon as payments are made.
                                                    Thanks and
                                                    keep it up
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide" data-slick-index="3"
                                            aria-hidden="true" style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Sunny Adike</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Abijan Exchange  is an amazing e-currency exchanger.
                                                    Their
                                                    services is fast and very relaible. Looking forward to
                                                    doing
                                                    more business with you guys.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide" data-slick-index="4"
                                            aria-hidden="true" style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Mathew Aduh</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Just to say a big thank you for your wonderful and
                                                    efficient
                                                    services. Your customer service is spectacular.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide" data-slick-index="5"
                                            aria-hidden="true" style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Patrick Paul</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                I have been enjoying Abijan Exchange  over the years because
                                                of there
                                                fast funding and they are reliably good.
                                                <p></p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="6" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">John Joel</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Very good site and simple, the rates are very nice also
                                                    and they
                                                    are very fast in sending money to your bank
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="7" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Thomas Agaba</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Trust and integrity are such in your organisation.
                                                    Please keep
                                                    it up. May God bless you all
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="8" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">John Chukwudi</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> I enjoy doing business with you guys, because you don't
                                                    delay
                                                    processing transactions as soon as payments are made.
                                                    Thanks and
                                                    keep it up
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="9" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Sunny Adike</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Abijan Exchange  is an amazing e-currency exchanger.
                                                    Their
                                                    services is fast and very relaible. Looking forward to
                                                    doing
                                                    more business with you guys.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="10" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Mathew Aduh</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                <p> Just to say a big thank you for your wonderful and
                                                    efficient
                                                    services. Your customer service is spectacular.
                                                </p>
                                            </div>
                                        </div>
                                        <div class="feedback-single slick-slide slick-cloned"
                                            data-slick-index="11" id="" aria-hidden="true"
                                            style="width: 356px;" tabindex="-1">
                                            <div class="feedback-top">
                                                <div class="thumb-wrapper">
                                                    <img src="assets/images/fc-1.jpg" alt="author image"
                                                        class="img-fluid">
                                                </div>
                                                <div class="title-n-rating">

                                                    <h6 class="fw-bold mb-1">Patrick Paul</h6>

                                                </div>
                                            </div>

                                            <div class="feedback-comment">
                                                I have been enjoying Abijan Exchange  over the years because
                                                of there
                                                fast funding and they are reliably good.
                                                <p></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button class="slick-arrow slick-next"><i
                                        class="ri-arrow-right-line"></i></button>
                            </div>

                        </div>
                    </div>

                </div>
            </section> -->

    <!-- FAQ's -->
    <div class="content sec-content mt-5">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5 order-2 order-lg-0">
                    <div class="info">
                        <div class="section-head style-4 mb-5">
                            <h2 class="fw-bold"> Frequently asked questions </h2>
                        </div>
                        <div class="faq style-3 style-4">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading1"><button class="accordion-button"
                                            type="button" data-bs-toggle="collapse" data-bs-target="#collapse1"
                                            aria-expanded="false" aria-controls="collapse1">How is
                                            the price calculated?</button></h2>
                                    <div id="collapse1" class="accordion-collapse collapse show"
                                        aria-labelledby="heading1" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">The price of Bitcoin and other
                                            digital currencies are determined by supply and demand:
                                            the buyers who want a certain currency and the sellers
                                            who have that currency. Abijan Exchange does not set the
                                            price of Bitcoin or any digital currency.</div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading2"><button
                                            class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse2" aria-expanded="false"
                                            aria-controls="collapse2">Why is
                                            the Bitcoin price different on Google?</button></h2>
                                    <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">There is no global Bitcoin
                                            price, it isn't pegged to any currency, country or
                                            Bitcoin platform. When you see the price on Google, it
                                            is simply showing an estimated, international price
                                        </div>
                                    </div>
                                </div>
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="heading3"><button
                                            class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse3" aria-expanded="false"
                                            aria-controls="collapse3">Do I
                                            need to buy a whole Bitcoin?</button></h2>
                                    <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3"
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">No. Bitcoin, Ethereum and most
                                            other digital currencies are divisible. You can spend a
                                            small amount of money and buy or sell very small amounts
                                            over time.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-0 order-lg-2">
                    <div class="img mb-30 mb-lg-0"><img src="/assets/images/faq.png" alt=""></div>
                </div>
            </div>
        </div>
    </div>
@endsection
