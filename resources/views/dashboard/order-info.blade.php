@extends('layouts.dashboard-frontend')

@section('page-content')
    <!-- [ Layout container ] Start -->
    <div class="layout-container">
        <!-- [ Layout navbar ( Header ) ] Start -->
        @includeIf('layouts.dashboard-navbar')
        <!-- [ Layout navbar ( Header ) ] End -->

        <!-- [ Layout content ] Start -->
        <div class="layout-content">
            @php
                $o = $order;
            @endphp
            <!-- [ content ] Start -->
            <!--/ menu  -->
            <div class="main_content_iner overly_inner ">
                <div class="container-fluid p-0 ">
                    <!-- page title  -->
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="white_card card_height_100 mb_30">
                                <div class="white_card_header">
                                    <div class="box_header m-0">
                                        <div class="main-title">
                                            <h4 class="m-0">{{$o->type}} Order for Invoice Number: {{\App\Models\Invoice::where('order_id', $o->id)->first()->invoice_id ?? 'Buy Order'}}</h4><br>

                                        </div>

                                    </div>
                                </div>
                                <div class="tab-content">
                                    <div class="white_card_body tab-pane fade active show" id="quickbuydiv">
                                        <div class="exchange_widget">
                                            <form role="form" id="notice-form" name="notice-form" method="post"
                                                action="" enctype="multipart/form-data" class="notice-form"
                                                autocomplete="OFF">
                                                <input type="hidden" name="hiddeninvoice_no" id="hiddeninvoice_no"
                                                    value="11068998">
                                                <div class="form-group">
                                                    <label>Order Date &amp; Time:</label> {{ $o->created_at->format('d/M/Y') }} at {{ $o->created_at->format('h:m a') }}
                                                </div>
                                                <div class="form-group">
                                                    <label>Currency:</label> {{$o->currency}}
                                                </div>
                                                @if($o->type == "Buy" AND $o->status == 1)
                                                    <div class="form-group">
                                                        <label>We sent via:</label> External
                                                    </div>
                                                @endif
                                                @if($o->type == "Sell")
                                                    @if ($o->status == 0)
                                                        <div class="form-group">
                                                            <label>You will send via:</label> {{$o->pay_with}}
                                                        </div>
                                                    @endif
                                                    @if ($o->status == 1 || $o->status == 2)
                                                        <div class="form-group">
                                                            <label>You sent via:</label> {{$o->pay_with}}
                                                        </div>
                                                    @endif
                                                @else
                                                    <div class="form-group">
                                                        <label>Payment Method:</label> {{$o->pay_with}}
                                                    </div>
                                                @endif

                                                <div class="form-group">
                                                    <label>Status:</label>
                                                    @if ($o->status == 3)
                                                        Order Cancelled
                                                    @endif
                                                    @if ($o->status == 0)
                                                        Order Booked
                                                    @endif
                                                    @if ($o->status == 1)
                                                        Order Completed
                                                    @endif
                                                    @if ($o->status == 2)
                                                        In-Process
                                                    @endif
                                                </div>
                                                <div class="form-group">
                                                    <label>Order Amount:</label> 
                                                    @if($o->currency == "Bitcoin")
                                                        @if($o->type == "Sell")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[0]['sell_rate'], 2)}}, {{number_format($o->amount/getCurrentBtcDollar(), 8)}} BTC
                                                            @endif
                                                        @endif
                                                        @if($o->type == "Buy")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[0]['buy_rate'], 2)}}, {{number_format($o->amount/getCurrentBtcDollar(), 8)}} BTC
                                                            @endif
                                                        @endif
                                                    @endif
                                                    @if($o->currency == "Ethereum")
                                                        @if($o->type == "Sell")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[2]['sell_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                        @if($o->type == "Buy")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[2]['buy_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                    @endif
                                                    @if($o->currency == "bitcoin Cash")
                                                        @if($o->type == "Sell")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[3]['sell_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                        @if($o->type == "Buy")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[3]['buy_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                    @endif
                                                    @if($o->currency == "Perfect Money")
                                                        @if($o->type == "Sell")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[1]['sell_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                        @if($o->type == "Buy")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[1]['buy_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                    @endif
                                                    @if($o->currency == "USDT TRC20")
                                                        @if($o->type == "Sell")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[4]['sell_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                        @if($o->type == "Buy")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[4]['buy_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                    @endif
                                                    @if($o->currency == "Tron")
                                                        @if($o->type == "Sell")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[5]['sell_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                        @if($o->type == "Buy")
                                                            @if($o->unit == "USD")
                                                                ${{number_format($o->amount, 2)}}, ₦{{number_format($o->amount*rates()[5]['buy_rate'], 2)}}
                                                            @endif
                                                        @endif
                                                    @endif
                                                </div>
                                                
                                                @if ($o->status == 0)
                                                    @if($o->currency == "USDT TRC20")
                                                        <div class="form-group">
                                                            <label>{{$o->currency}} Address for this transaction:</label>
                                                            <div class="input-group mb-3">
                                                                {{settings()->usdt_wallet}} </div>
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "Perfect Money")
                                                        <div class="form-group">
                                                            <label>Our PM Account Number:</label>
                                                            <div class="input-group mb-3">
                                                                {{settings()->pm_number}} </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Our PM Account Name:</label>
                                                            <div class="input-group mb-3">
                                                                {{settings()->pm_name}} </div>
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "bitcoin Cash")
                                                        <div class="form-group">
                                                            <label>{{$o->currency}} Address for this transaction:</label>
                                                            <div class="input-group mb-3">
                                                                {{settings()->bch_wallet}} </div>
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "Ethereum")
                                                        <div class="form-group">
                                                            <label>{{$o->currency}} Address for this transaction:</label>
                                                            <div class="input-group mb-3">
                                                                {{settings()->eth_wallet}} </div>
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "Bitcoin")
                                                        @if($o->pay_with == "External Wallet")
                                                            <div class="form-group">
                                                                <label>{{$o->currency}} Address for this transaction:</label>
                                                                <div class="input-group mb-3">
                                                                    {{settings()->btc_wallet}} </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                    @if($o->currency == "Tron")
                                                        @if($o->pay_with == "External Wallet")
                                                            <div class="form-group">
                                                                <label>{{$o->currency}} Address for this transaction:</label>
                                                                <div class="input-group mb-3">
                                                                    {{settings()->trn_wallet}} </div>
                                                            </div>
                                                        @endif
                                                    @endif
                                                @endif
                                                
                                                @if ($o->status == 1)
                                                    @if($o->currency == "Perfect Money")
                                                        <div class="form-group">
                                                            <label>Batch Number/ Memo:</label> {{\App\Models\Invoice::where('order_id', $o->id)->first()->memo}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fund Date:</label> {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->format('D')}}, {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->isoFormat('Do MMM Y')}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount Paid:</label> ${{\App\Models\Invoice::where('order_id', $o->id)->first()->amount_sent}}                                      
                                                        </div>
                                                        @if($o->type == "Buy")
                                                        <div class="form-group">
                                                            <label>Your PM Account Number:</label>
                                                            <div class="input-group mb-3">
                                                                {{$o->pm_acctnum}} ({{$o->pm_acctname}})                                            
                                                            </div>
                                                        </div>
                                                        @endif
                                                    @endif
                                                    @if($o->currency == "Bitcoin" AND $o->pay_with == "External Wallet")
                                                        <div class="form-group">
                                                            <label>Fund Date:</label> {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->format('D')}}, {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->isoFormat('Do MMM Y')}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount Paid:</label> ${{\App\Models\Invoice::where('order_id', $o->id)->first()->amount_sent}}                                      
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "USDT TRC20")
                                                        <div class="form-group">
                                                            <label>Transaction Id/ Hash:</label> {{\App\Models\Invoice::where('order_id', $o->id)->first()->memo}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fund Date:</label> {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->format('D')}}, {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->isoFormat('Do MMM Y')}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount Paid:</label> ${{\App\Models\Invoice::where('order_id', $o->id)->first()->amount_sent}}                                      
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "bitcoin Cash")
                                                        <div class="form-group">
                                                            <label>Transaction Id/ Hash:</label> {{\App\Models\Invoice::where('order_id', $o->id)->first()->memo}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fund Date:</label> {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->format('D')}}, {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->isoFormat('Do MMM Y')}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount Paid:</label> ${{\App\Models\Invoice::where('order_id', $o->id)->first()->amount_sent}}                                      
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "Ethereum")
                                                        <div class="form-group">
                                                            <label>Transaction Id/ Hash:</label> {{\App\Models\Invoice::where('order_id', $o->id)->first()->memo}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fund Date:</label> {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->format('D')}}, {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->isoFormat('Do MMM Y')}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount Paid:</label> ${{\App\Models\Invoice::where('order_id', $o->id)->first()->amount_sent}}                                      
                                                        </div>
                                                    @endif
                                                    @if($o->currency == "Tron")
                                                        <div class="form-group">
                                                            <label>Transaction Id/ Hash:</label> {{\App\Models\Invoice::where('order_id', $o->id)->first()->memo}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Fund Date:</label> {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->format('D')}}, {{\Carbon\Carbon::parse(\App\Models\Invoice::where('order_id', $o->id)->first()->fund_date)->isoFormat('Do MMM Y')}}                                       
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Amount Paid:</label> ${{\App\Models\Invoice::where('order_id', $o->id)->first()->amount_sent}}                                      
                                                        </div>
                                                    @endif
                                                @endif
                                                

                                            </form>
                                        </div>
                                    </div>
                                    <!--end quickbuydiv-->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="white_box mb_30">
                                <div class="box_header ">
                                    <div class="main-title">
                                        <h3 class="mb-0">Order FAQs</h3>
                                    </div>
                                </div>
                                <!-- accordian -->
                                <div class="accordion accordion_custom mb_50" id="accordion_ex">
                                    <div class="card">
                                        <div class="card-header" id="headingOne">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn" type="button" data-toggle="collapse"
                                                    data-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    How long does a sell order take to be completed?
                                                </a>
                                            </h2>
                                        </div>

                                        <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>If you have sent the {{$o->currency}}, your naira wallet will be credited
                                                    after confirming the {{$o->currency}}.</p>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-header" id="headingTwo">
                                            <h2 class="mb-0">
                                                <a href="#" class="btn collapsed" type="button"
                                                    data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                    aria-controls="collapseTwo">
                                                    How do I receive money?
                                                </a>
                                            </h2>
                                        </div>
                                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                            data-parent="#accordion_ex">
                                            <div class="card-body">
                                                <p>Your naira will be credited to your AbijanExchange wallet after your
                                                    order has been processed. You can withdraw it to your bank account
                                                    anytime.</p>
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
