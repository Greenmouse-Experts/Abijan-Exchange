<!DOCTYPE html>

<html lang="en" class="default-style layout-fixed layout-navbar-fixed">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Required meta tags -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard - Fastest and easiest way to buy and sell bitcoins - Abijan Exchange</title>


    <!-- css files -->
    <link rel="icon" href="{{URL::asset('dash/libraries/logo.png')}}" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/bootstrap.css')}}">

    <!-- themefy CSS -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/themify-icons.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <!-- select2 CSS -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/nice-select.css')}}">
    <!-- owl carousel CSS -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/owl.css')}}">
    <!-- gijgo css -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/gijgo.css')}}">
    <!-- font awesome CSS -->
    <link rel="stylesheet" href="{{URL::asset('dash/awesome/css/all.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/tagsinput.css')}}">

    <!-- date picker -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/date-picker.css')}}">

    <link rel="stylesheet" href="{{URL::asset('dash/libraries/vectormap-2.css')}}">

    <!-- scrollabe  -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/scrollable.css')}}">
    <!-- datatable CSS -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/jquery.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/responsive.css')}}">
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/buttons.css')}}">
    <!-- text editor css -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/summernote-bs4.css')}}">
    <!-- morris css -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/morris.css')}}">
    <!-- metarial icon css -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/material-icons.css')}}">

    <!-- menu css  -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/metisMenu.css')}}">
    <!-- style CSS -->
    <link rel="stylesheet" href="{{URL::asset('dash/libraries/style.css')}}">

    <!-- <link rel="stylesheet" href="libraries/default.css" id="colorSkinCSS"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>


<body>
    <!-- [ Layout wrapper ] Start -->
    <!-- Side-Nav -->
    @includeIf('layouts.dashboard-sidebar')
    @include('sweetalert::alert')
            <!-- Side-Nav Ends -->
    <section class="main_content dashboard_part large_header_bg">
        @yield('page-content')
    </section>
    <script src="//code.tidio.co/paxvr5wtlkqbupvtskobap2kwagdeid0.js" async></script>
    <div class="CHAT_MESSAGE_POPUPBOX">
    <div class="CHAT_POPUP_HEADER">
        <div class="MSEESAGE_CHATBOX_CLOSE">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7.09939 5.98831L11.772 10.661C12.076 10.965 12.076 11.4564 11.772 11.7603C11.468 12.0643 10.9766 12.0643 10.6726 11.7603L5.99994 7.08762L1.32737 11.7603C1.02329 12.0643 0.532002 12.0643 0.228062 11.7603C-0.0760207 11.4564 -0.0760207 10.965 0.228062 10.661L4.90063 5.98831L0.228062 1.3156C-0.0760207 1.01166 -0.0760207 0.520226 0.228062 0.216286C0.379534 0.0646715 0.578697 -0.0114918 0.777717 -0.0114918C0.976738 -0.0114918 1.17576 0.0646715 1.32737 0.216286L5.99994 4.889L10.6726 0.216286C10.8243 0.0646715 11.0233 -0.0114918 11.2223 -0.0114918C11.4213 -0.0114918 11.6203 0.0646715 11.772 0.216286C12.076 0.520226 12.076 1.01166 11.772 1.3156L7.09939 5.98831Z" fill="white"></path>
            </svg>

        </div>
        <h3>Message Notification</h3>
        <div class="Chat_Listed_member">
            <!--  You have no new message -->
            You have no new messages from Abijan Exchange Support.
        </div>
    </div>
    <div class="CHAT_POPUP_BODY">
                <p class="mesaged_send_date">
            Your new messages will appear here.
        </p>
                    </div>
</div>
    <!-- [ Layout wrapper] End -->
    <!-- js files -->
    <script src="{{URL::asset('dash/libraries/jquery-3.js')}}"></script>
    <!-- popper js -->
    <script src="{{URL::asset('dash/libraries/popper.js')}}"></script>
    <!-- bootstarp js -->
    <script src="{{URL::asset('dash/libraries/bootstrap.js')}}"></script>
    <!-- sidebar menu  -->
    <script src="{{URL::asset('dash/libraries/metisMenu.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{URL::asset('dash/libraries/jquery_003.js')}}"></script>
    <!-- waypoints js -->
    <script src="{{URL::asset('dash/libraries/Chart.js')}}"></script>
    <!-- counterup js -->
    <script src="{{URL::asset('dash/libraries/jquery_002.js')}}"></script>

    <!-- nice select -->
    <script src="{{URL::asset('dash/libraries/jquery_004.js')}}"></script>
    <!-- owl carousel -->
    <script src="{{URL::asset('dash/libraries/owl.js')}}"></script>

    <!-- responsive table -->
    <script src="{{URL::asset('dash/libraries/jquery.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/dataTables_002.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/dataTables.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/buttons_003.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/jszip.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/pdfmake.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/vfs_fonts.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/buttons.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/buttons_002.js')}}"></script>

    <!-- datepicker  -->
    <!-- <script src="libraries/datepicker_002.js"></script> -->
    <script src="{{URL::asset('dash/libraries/datepicker.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/datepicker_003.js')}}"></script>

    <script src="{{URL::asset('dash/libraries/roundedBar.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/sweetalert.min.js')}}"></script>


    <!-- custom js -->
    <script src="{{URL::asset('dash/libraries/dashboard_init.js')}}"></script>
    <script>
        $(function() {
            function checkDec(el) {
        var ex = /^[0-9]+\.?[0-9]*$/;
        if (ex.test(el.value) == false) {
            el.value = el.value.substring(0, el.value.length - 1);
        }
    }

    $("#amountSell").on("keyup", function() {
        calUSD(this);
    });

    $("#amountBuy").on("keyup", function() {
        calUSDBuy(this);
    });

    function calUSDBuy(crom) {

        var currency = $('#currency_buy').val();
        var unit = $("#currencyBuy").val();
        var si = $(crom).val();
        var si = si.replace(/,/g, '');
        $(crom).val(si);
        checkDec(crom);
        var s = $(crom).val();

        var shortcode = $("#currency_buy").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var sellprice = getrate(shortcode, 'buy');
        var typecurr = getrate(shortcode, 'type');
        var nobtc = $('#csrfbtc').length;

        switch (unit) {
            case 'NGN':
                var usd_value = parseFloat(s / sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    console.log(btcworth)
                    var btc_value = parseFloat(usd_value / btcworth).toFixed(8);

                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                    }
                    if (btc_value == "1.00000000") {
                        var btc_value = "1";
                    }
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#myBuyform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                    $("#ecurrbuy2").html(btc_value + ' BTC');
                    $('#ecurrbuy2').css('color', '#1761fd');
                } else {
                    $("#ecurrbuy2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                $("#ecurrbuy").html("~" + formatter_usd.format(usd_value));
                $('#ecurrbuy').css('color', 'black');
                break;
            case 'BTC':
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    console.log(btcworth)
                    var btc_value = parseFloat(s).toFixed(8);
                    var usd_value = parseFloat(btc_value * btcworth).toFixed(2);
                    var ngn_value = parseFloat(usd_value * sellprice).toFixed(2);
                    if (s == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                        var ngn_value = 0;
                    }
                    if (btc_value == "1.00000000") {
                        var btc_value = "1";
                    }
                    $("#ecurrbuy").html("~" + formatter_usd.format(usd_value));
                    $("#ecurrbuy2").html(formatter.format(ngn_value));
                    $('#ecurrbuy').css('color', 'black');
                    $('#ecurrbuy2').css('color', '#1761fd');

                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#myBuyform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrbuy").html("");
                    $("#ecurrbuy2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            case 'USD':
                var ngn_value = parseFloat(s * sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(s / btcworth).toFixed(8);
                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var ngn_value = 0;
                    }
                    if (btc_value == "1.00000000") {
                        var btc_value = "1";
                    }
                    $("#ecurrbuy").html("~" + btc_value + " BTC");
                    $("#ecurrbuy2").html(formatter.format(ngn_value));
                    $('#ecurrbuy').css('color', 'black');
                    $('#ecurrbuy2').css('color', '#1761fd');
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#myBuyform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrbuy").html("");
                    $("#ecurrbuy2").html('Pay: ' + formatter.format(ngn_value));
                    $('#ecurrbuy2').css('color', '#1761fd');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            default:
                break;
        }
        if (currency == "Bitcoin") {
            $(".acctInfodivbuy").hide();
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
        }
        else if (currency == "Ethereum") {
            $(".acctInfodivbuy").hide();
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
        }
        else if (currency == "USDT TRC20") {
            $(".acctInfodivbuy").hide();
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
        }
        else {

            if (typecurr == "ecurrency") {
                $(".acctInfodivbuy").show();
                $("#header_acct_buy").html('Your ' + currency + ' Account Number');
                $("#header_acctname_buy").html('Your ' + currency + ' Account Name');
            } else {
                $(".acctInfodivbuy").show();
                $("#header_acct_buy").html('Your ' + currency + ' Wallet Address');
                $("#header_acctname_buy").html('Confirm ' + currency + ' Wallet Address');
            }
        }

    }

    function calUSD(crom) {
        checkDec(crom);
        var currency = $('#currency_sell').val();
        var unit = $("#currencySell").val();
        var s = $(crom).val();
        var shortcode = $("#currency_sell").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var sellprice = getrate(shortcode, 'sell');
        var typecurr = getrate(shortcode, 'type');
        var nobtc = $('#csrfbtc').length;

        switch (unit) {
            case 'NGN':
                var usd_value = parseFloat(s / sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(usd_value / btcworth).toFixed(8);

                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                    }
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#mySellform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                    $("#ecurrsell2").html(btc_value + ' BTC');
                    $('#ecurrsell2').css('color', '#1761fd');
                } else {
                    $("#ecurrsell2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                $("#ecurrsell").html("~" + formatter_usd.format(usd_value));
                $('#ecurrsell').css('color', 'black');
                break;
            case 'BTC':
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(s).toFixed(8);
                    var usd_value = parseFloat(btc_value * btcworth).toFixed(2);
                    var ngn_value = parseFloat(usd_value * sellprice).toFixed(2);
                    if (s == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var usd_value = 0;
                        var ngn_value = 0;
                    }
                    $("#ecurrsell").html("~" + formatter_usd.format(usd_value));
                    $("#ecurrsell2").html(formatter.format(ngn_value));
                    $('#ecurrsell').css('color', 'black');
                    $('#ecurrsell2').css('color', '#1761fd');

                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#mySellform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrsell").html("");
                    $("#ecurrsell2").html('');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            case 'USD':
                var ngn_value = parseFloat(s * sellprice).toFixed(2);
                if (currency == "Bitcoin") {
                    var btcworth = getrate('live', null);
                    var btc_value = parseFloat(s / btcworth).toFixed(8);
                    if (btc_value == 0 || btc_value == "NaN") {
                        var btc_value = 0;
                        var ngn_value = 0;
                    }
                    $("#ecurrsell").html("~" + btc_value + " BTC");
                    $("#ecurrsell2").html(formatter.format(ngn_value));
                    $('#ecurrsell').css('color', 'black');
                    $('#ecurrsell2').css('color', '#1761fd');
                    if (!nobtc) {
                        $('<input>').attr({
                            type: 'hidden',
                            id: 'csrfbtc',
                            value: btc_value
                        }).appendTo('#mySellform');
                    } else {
                        $("#csrfbtc").val(btc_value);
                    }
                } else {
                    $("#ecurrsell").html("");
                    $("#ecurrsell2").html('Receive: ' + formatter.format(ngn_value));
                    $('#ecurrsell2').css('color', '#1761fd');
                    if (nobtc) {
                        $("#csrfbtc").remove();
                    }
                }
                break;
            default:
                break;
        }
        if (currency == "Bitcoin") {
            $(".acctInfodiv").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
            $("#header_acct").html('');
            $("#header_acctname").html('');
        }
        else if (currency == "Ethereum") {
            $(".acctInfodiv").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
            $("#header_acct").html('');
            $("#header_acctname").html('');
        }
        else if (currency == "USDT TRC20") {
            $(".acctInfodiv").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
            $("#header_acct").html('');
            $("#header_acctname").html('');
        }
        else {

            if (typecurr == "ecurrency") {
                $(".acctInfodiv").show();
                $("#header_acct").html(currency + ' Account Number');
                $("#header_acctname").html(currency + ' Account Name');
                if (currency == "Perfect Money") {
                    console.log('hfhhf')
                    var sell_from_pm = $("#sell_from_pm").val();
                    var pm_autoEnabled = $("#pm_autoEnabled").val();
                    var pm_manualEnabled = $("#pm_manualEnabled").val();
                    if (sell_from_pm == "Automatic" && pm_autoEnabled == "Enabled") {
                        $(".acctInfodiv").hide();
                        $("#acctnoSell").val('');
                        $("#acctnameSell").val('');
                    } else {
                        $(".acctInfodiv").show();
                    }
                }
            } else {
                $(".acctInfodiv").hide();
                $("#acctnoSell").val('');
                $("#acctnameSell").val('');
                $("#header_acct").html('');
                $("#header_acctname").html('');
            }
        }

    }

    function showcurrency(ps) {

        var shortcode = $("#currency_sell").find(':selected').data('value');
        if (shortcode) {
            var shortcodes = shortcode.toLowerCase();
            var typecurr = getrate(shortcodes, 'type');
        }
        if (ps == "Bitcoin") {
            $("#sellfrom_btc").show();
            $("#sellfrom_account").hide();
            $("#sellfrom_crypto").hide();
            $('#currencySell')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="BTC">BTC</option><option value="NGN">NGN</option>')
                .val('USD');
            var sell = $("#sell_from").val();

            if (sell == "Bitcoin Balance") {
                $(".availsale").show();
            } else {
                $(".availsale").hide();
            }
            $(".acctInfodiv").hide();
            $("#header_acct").html('');
            $("#header_acctname").html('');
            $("#sellfromlabel").html('Sell From');
            $("#sellfrom_pm").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
        }
        else {

            if (typecurr == "crypto") {
                //var msg = "Selected option is a crypto";
                $("#sellfrom_btc").hide();
                $("#sellfrom_account").hide();
                $("#sellfrom_crypto").show();
                $(".acctInfodiv").hide();
                $("#header_acct").html('');
                $("#header_acctname").html('');
                $("#sellfromlabel").html('Sell From');
                $("#sellfrom_pm").hide();
                $("#acctnoSell").val('');
                $("#acctnameSell").val('');
            } else if (typecurr == "ecurrency") {
                //var msg = "Selected option is an ecurrency";
                $("#sellfrom_btc").hide();
                $("#sellfrom_type").hide();
                $("#sellfrom_account").show();
                $("#sellfrom_crypto").hide();
                $(".acctInfodiv").show();
                $("#header_acct").html(ps + ' Account Number');
                $("#header_acctname").html(ps + ' Account Name');
                if (ps == 'Perfect Money') {
                    var pm_autoEnabled = $("#pm_autoEnabled").val();
                    var pm_manualEnabled = $("#pm_manualEnabled").val();
                    if (pm_manualEnabled || pm_autoEnabled) {
                        $("#sellfromlabel").html('Funding Method');
                    } else {
                        $("#sellfromlabel").hide();
                    }

                    $("#sellfrom_account").hide();
                    $("#sellfrom_pm").show();
                    var sell_from_pm = $("#sell_from_pm").val();
                    if (sell_from_pm == "Automatic" && pm_autoEnabled == "Enabled") {
                        $(".acctInfodiv").hide();
                        $("#acctnoSell").val('');
                        $("#acctnameSell").val('');
                    } else {
                        $(".acctInfodiv").show();
                    }
                } else {
                    $("#sellfromlabel").html('Sell From');
                    $("#sellfrom_account").show();
                    $("#sellfrom_pm").hide();
                }
            }
            $('#currencySell')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="NGN">NGN</option>')
                .val('USD');
            $(".availsale").hide();
        }
    }

    function showcurrencyBuy(ps) {

        var shortcode = $("#currency_buy").find(':selected').data('value');
        if (shortcode) {
            var shortcode = shortcode.toLowerCase();
            var typecurr = getrate(shortcode, 'type');
            var buy = $("#buy_from_acct").val();
        }
        if (ps == "Bitcoin") {
            $('#currencyBuy')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="BTC">BTC</option><option value="NGN">NGN</option>')
                .val('USD');

            $(".availbuy").show();
            $("#buyfrom_btc").show();
            $("#buyfrom_account").hide();
            $("#buy_from_acct").val('');
            $(".acctInfodivbuy").hide();
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
        }
        else if (ps == "Ethereum") {
            $('#currencyBuy')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="BTC">BTC</option><option value="NGN">NGN</option>')
                .val('USD');

            $(".availbuy").show();
            $("#buyfrom_btc").show();
            $("#buyfrom_account").hide();
            $("#buy_from_acct").val('');
            $(".acctInfodivbuy").hide();
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
        }
        else if (ps == "USDT TRC20") {
            $('#currencyBuy')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="BTC">BTC</option><option value="NGN">NGN</option>')
                .val('USD');

            $(".availbuy").show();
            $("#buyfrom_btc").show();
            $("#buyfrom_account").hide();
            $("#buy_from_acct").val('');
            $(".acctInfodivbuy").hide();
            $("#header_acct_buy").html('');
            $("#header_acctname_buy").html('');
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
        }
        else {
            $("#acctnoBuy").val('');
            $("#acctnameBuy").val('');
            $(".acctInfodivbuy").show();
            $("#buyfrom_btc").hide();
            $("#buyfrom_account").show();
            $("#buy_from").val('');
            $(".availbuy").hide();

            if (buy == "Naira Wallet") {
                $(".availbuy").show();
            }

            if (typecurr == "crypto") {
                //var msg = "Selected option is a crypto";
                $("#header_acct_buy").html('Your ' + ps + ' Wallet Address');
                $("#header_acctname_buy").html('Confirm ' + ps + ' Wallet Address');
                $("#buy_type").show();
            } else if (typecurr == "ecurrency") {
                //var msg = "Selected option is an ecurrency";
                $("#header_acct_buy").html('Your ' + ps + ' Account Number');
                $("#header_acctname_buy").html('Your ' + ps + ' Account Name');
                $("#buy_type").hide();
            }
            $('#currencyBuy')
                .find('option')
                .remove()
                .end()
                .append('<option value="USD" data-display="USD" selected="selected">USD</option><option value="NGN">NGN</option>')
                .val('USD');
        }
    }

    $(document).ready(function() {
        var ps = $("#currency_sell").val();
        $(".acctInfodiv").hide();
        $("#acctnoSell").val('');
        $("#acctnameSell").val('');
        if (ps != "") {
            showcurrency(ps);
        }
        var buy = $("#currency_buy").val();
        $(".acctInfodivbuy").hide();
        $("#acctnoBuy").val('');
        $("#acctnameBuy").val('');
        if (buy != "") {
            showcurrencyBuy(buy);
        }
    });

    $('#currency_sell').on('change', function() {
        var ops = $(this).val();
        showcurrency(ops);
    });
    $('#currency_buy').on('change', function() {
        var ops = $(this).val();
        showcurrencyBuy(ops);
    });

    $('.acctnoCheck').on('keyup', function() {
        var id = $(this).attr("id");
        switch (id) {
            case 'acctnoSell':
                var ps = $("#currency_sell").val();
                $("#acctnameSell").attr("placeholder", "");
                var idname = "acctnameSell";
                break;

            case 'acctnoBuy':
                var ps = $("#currency_buy").val();
                $("#acctnameBuy").attr("placeholder", "");
                var idname = "acctnameBuy";
                break;

            default:
                break;
        }

        if (ps == "Perfect Money") {
            $("#" + idname).val('');
            var sanitized = $('#' + id).val().replace(/[^0-9]/g, '');
            $('#' + id).val('U' + sanitized);
        }
    });

    $('.acctnoCheck').on('change', function() {
        var id = $(this).attr("id");
        switch (id) {
            case 'acctnoSell':
                var ps = $("#currency_sell").val();
                var top = $(".acctnameSellError").length;
                var idname = "acctnameSell";
                var myname = "Sell";
                break;

            case 'acctnoBuy':
                var ps = $("#currency_buy").val();
                var top = $(".acctnameBuyError").length;
                var idname = "acctnameBuy";
                var myname = "Buy";
                break;

            default:
                break;
        }

        if (ps == "Perfect Money") {
            doneTyping1(myname);
            // var typingTimer1;
            // var doneTypingInterval1 = 1000;
            // clearTimeout(typingTimer1);
            // typingTimer1 = setTimeout(doneTyping1, doneTypingInterval1);
        } else {
            if (top) {
                $("." + idname + "Error").remove();
            }
        }
    });
    // $('#acctnoSell').on('keydown', function () {
    //     var ps = $('#currency_sell').val();
    //     if(ps=="Perfect Money"){
    //         var typingTimer1;
    //         clearTimeout(typingTimer1);
    //     }else{
    //         if(top){
    //             $(".acctnameSellError").remove();
    //         }
    //     }
    // });

    function doneTyping1(name) {
        var lowername = name.toLowerCase();
        var acctno = $('#acctno' + name).val();
        var ecurrency = $('#currency_' + lowername).val();
        var top = $(".acctname" + name + "Error").length;
        var header = "";
        if (lowername == "buy") {
            var header = "_buy";
        }

        if (acctno.length >= "8") {
            $("#acctname" + name).attr("placeholder", "Please wait...");
            $.ajax({
                type: "POST",
                url: "pm_query",
                data: {
                    acctno: acctno,
                    ecurrency: ecurrency
                },
                success: function(result) {
                    if (top) {
                        $(".acctname" + name + "Error").remove();
                    }
                    if (result.includes("ERROR:")) {
                        $("#acctname" + name).val('');
                        $("#acctname" + name).attr("placeholder", "");
                        $("#header_acctname" + header).after('<p class="dangerP acctname' + name + 'Error"><b>Error: Invalid PM Account</b></p>');
                        $("#" + lowername + "Nowbtn").css("opacity", "0.2").attr('disabled', 'disabled');
                    } else {
                        $("#acctname" + name).val(result);
                        $("#" + lowername + "Nowbtn").css("opacity", "").removeAttr('disabled');

                    }

                }
            });
        } else if (acctno.length < 8) {
            $("#acctname" + name).val('');

            if (!top) {
                $("#header_acctname" + header).after('<p class="dangerP acctname' + name + 'Error"><b>Error: Incomplete PM Account Number Entered</b></p>');
            }
        }


    }
    $('#buy_from').on('change', function() {
        var buy = $(this).val();
        if (buy == "Naira Wallet") {
            $(".availbuy").show();
        } else {
            $(".availbuy").hide();
        }
    });
    $('#buy_from_acct').on('change', function() {
        var buy = $(this).val();
        var current = $('.buy_from_acct  .current');
        //alert(current.html());
        if (buy == "Naira Wallet") {
            $(".availbuy").show();
        } else {
            $(".availbuy").hide();
        }
    });
    $("#acctnameBuy").on('keyup', function() {
        var first = $("#acctnoBuy").val();
        var second = $(this).val();
        var top = $(".acctnameBuyError").length;
        var ecurrency = $("#currency_buy").val();
        var shortcode = $("#currency_buy").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var typecurr = getrate(shortcode, 'type');

        if (typecurr == "crypto" && ecurrency != "Bitcoin") {
            if (first != second) {
                if (top) {
                    $(".acctnameBuyError").show();
                } else {
                    $("#header_acctname_buy").after('<p class="dangerP acctnameBuyError"><b>Error: The wallet address must be the same</b></p>');
                }
            } else {
                $(".acctnameBuyError").remove();
            }
        }
    });

    $('#sell_from').on('change', function() {
        var sell = $(this).val();
        if (sell == "Bitcoin Balance") {
            $(".availsale").show();
            $("#sellfrom_type").hide();
        } else {
            $(".availsale").hide();
            if (sell == "External Wallet") {
                $("#sellfrom_type").show();
            }
        }
    });
    $('#sell_from_pm').on('change', function() {
        var sell = $(this).val();
        var pm_autoEnabled = $("#pm_autoEnabled").val();
        var pm_manualEnabled = $("#pm_manualEnabled").val();

        if (sell == "Automatic" && pm_autoEnabled == 'Enabled') {
            $(".acctInfodiv").hide();
            $("#acctnoSell").val('');
            $("#acctnameSell").val('');
        } else {
            $(".acctInfodiv").show();
        }
    });

    $('#sellNowbtn').click(function() {
        $('#loadingText').show();
        var acctnameSell = "";
        var acctnoSell = "";
        var amount = $('#amountSell').val();
        var unit = $('#currencySell').val();
        var currency_sell = $("#currency_sell").val();
        var csrfbtc = $("#csrfbtc").val();
        var sellType = $("#sell_from_type").val();
        var pm_autoEnabled = $("#pm_autoEnabled").val();
        var pm_manualEnabled = $("#pm_manualEnabled").val();

        var shortcode = $("#currency_sell").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var typecurr = getrate(shortcode, 'type');

        if (currency_sell == "Bitcoin") {
            var sell_from = $('#sell_from').val();
            var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&csrfbtc=" + csrfbtc;
        } else {
            if (typecurr == "ecurrency") {
                var sell_from = $('#sell_from_acct').val();
                var acctnameSell = $('#acctnameSell').val();
                var acctnoSell = $('#acctnoSell').val();
                var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&acctnameSell=" + acctnameSell + "&acctnoSell=" + acctnoSell;
                if (currency_sell == "Perfect Money") {
                    var sell_from = $("#sell_from_pm").val();
                    var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&acctnameSell=" + acctnameSell + "&acctnoSell=" + acctnoSell;
                }
            } else {
                var sell_from = $('#sell_from_crypto').val();
                var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=" + sell_from + "&sellType=" + sellType;
            }
        }

        if (currency_sell == "Perfect Money" && sell_from == "Automatic" && pm_autoEnabled == "Enabled") {
            if (pm_manualEnabled == "Enabled") {
                swal({
                        title: "Are you sure?",
                        text: "If you click yes, you will be redirected to perfect money website to pay for this order..",
                        icon: "warning",
                        buttons: ["Oh no!", "Yes, Proceed!"],
                        dangerMode: false,
                    })
                    .then((willProceed) => {
                        if (willProceed) {
                            var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=Automatic";
                            proceed(mydata);
                        } else {
                            swal("Your funding method has been changed to manual, please provide your PM Account Number!");
                            $('#sell_from_pm').val("Manual");
                            $('#sell_from_pm').niceSelect('update');
                            $(".acctInfodiv").show();
                        }
                    });
            } else {
                swal({
                        title: "Are you sure?",
                        text: "If you click yes, you will be redirected to perfect money website to pay for this order!",
                        icon: "warning",
                        buttons: ["Cancel", "Yes, Proceed!"],
                        dangerMode: false,
                    })
                    .then((willProceed) => {
                        if (willProceed) {
                            var mydata = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_sell + "&sell_from=Automatic";
                            proceed(mydata);
                        }
                    });
            }

        } else {
            proceed(mydata);
        }

        function proceed(top) {
            $('#sellNowbtn').attr('disabled', 'disabled');
            $(".loadingText").show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/quicksell",
                data: top,
                dataType: 'json',
                success: function(result) {
                    $('#sellNowbtn').removeAttr('disabled');
                    $(".loadingText").hide();

                    var mystat = result.status;
                    var mymsg = result.msg;


                    if (mystat != "") {
                        if (mystat == "success") {
                            swal({
                                title: "Sold",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });
                        } else if (mystat === "pm-auto") {
                            /* var pst = result.acctnamesell.trim();
                            var divs = result.div.trim(); */
                            console.log('222')
                            var url = result.url
                            window.location.href = url
                            //$("#currency_sell").before(divs);
                            //$(pst).submit();
                        } else if (mystat == "error") {

                            /* var rez = result.acctnamesell.trim();
                            if (rez) {
                                $(".acctInfodiv").show();
                            } */
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                        } else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        }
    });

    $('#buyNowbtn').click(function() {
        $('#loadingText_buy').show();
        var acctnameBuy = "";
        var acctnoBuy = "";
        var amount = $('#amountBuy').val();
        var unit = $('#currencyBuy').val();
        var currency_buy = $("#currency_buy").val();
        var buy_to_type = $("#buy_to_type").val();

        var shortcode = $("#currency_buy").find(':selected').data('value');
        var shortcode = shortcode.toLowerCase();
        var typecurr = getrate(shortcode, 'type');

        if (currency_buy == "Bitcoin") {
            $('#buy_from').val("Naira Wallet");
            var buy_from = $('#buy_from').val();
            $('#buy_from').niceSelect('update');
            var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from;
        } else {
            var buy_from = $('#buy_from_acct').val();
            var acctnameBuy = $('#acctnameBuy').val();
            var acctnoBuy = $('#acctnoBuy').val();
            if (!buy_from || buy_from == null) {
                $('#buy_from_acct').val("Naira Wallet");
                var buy_from = $('#buy_from_acct').val();
                $('#buy_from_acct').niceSelect('update');
                var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from + "&acctnameBuy=" + acctnameBuy + "&acctnoBuy=" + acctnoBuy;
            } else {
                if (typecurr == "crypto") {
                    var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from + "&acctnameBuy=" + acctnameBuy + "&acctnoBuy=" + acctnoBuy + "buy_to_type=" + buy_to_type;
                } else {
                    var mydataB = "amount=" + amount + "&unit=" + unit + "&currency_option=" + currency_buy + "&buy_from=" + buy_from + "&acctnameBuy=" + acctnameBuy + "&acctnoBuy=" + acctnoBuy;
                }
            }
        }

        if (typecurr == "crypto" && currency_buy != "Bitcoin") {
            if (acctnameBuy != acctnoBuy) {
                $("#loadingText_buy").hide();
                swal({
                    title: "Error",
                    text: 'The Wallet addresses provided must be the same',
                    icon: "error",
                });
            } else {
                if (mydataB)
                    proceedBuy(mydataB);
            }
        } else {
            if (mydataB)
                proceedBuy(mydataB);
        }

        function proceedBuy(topMe) {
            $('#buyNowbtn').attr('disabled', 'disabled');
            $("#loadingText_buy").show();

            function congreat(send) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/dashboard/quickbuy",
                    data: send,
                    dataType: 'json',
                    success: function(result) {
                        $('#buyNowbtn').removeAttr('disabled');
                        $("#loadingText_buy").hide();

                        var mystat = result.status;
                        var mymsg = result.msg;

                        if (mystat != "") {
                            if (mystat == "success") {
                                swal({
                                    title: "Order Placed",
                                    text: '' + mymsg,
                                    icon: "success",
                                }).then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });
                            } else if (mystat == "error") {

                                /* var rez = result.acctnamebuy.trim();
                                if (rez) {
                                    $(".acctInfodivbuy").show();
                                } */
                                swal({
                                    title: "Error",
                                    text: '' + mymsg,
                                    icon: "error",
                                });
                            } else {
                                swal({
                                        title: "Unknown error",
                                        text: 'Please try again',
                                        icon: "error",
                                    })
                                    .then((value) => {
                                        if (value) {
                                            location.reload();
                                        }
                                    });

                            }
                        }
                    }
                });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/getInstructions",
                data: {
                    type: 'deposit'
                },
                success: function(result) {
                    var great = result.trim();
                    if (great && buy_from != "Naira Wallet") {

                        var wrapper = document.createElement("span");
                        wrapper.innerHTML = '<h4><strong>WARNING! WARNING!!</strong><i>DO NOT INCLUDE BITCOIN OR BTC ,NO THIRD PARTY AND COMPANY PAYMENT</i></h4><p><i><strong>NOTE-</strong>PAYMENT MUST COME FROM YOUR PERSONAL NAME USED&nbsp;</i></p><p>==================================================</p><p><i><strong>NOTE</strong>-<strong>HOW CBN TRACK BITCOIN TRANSACTION &nbsp;track bitcoin transaction</strong> when you include bitcoin or btc or dollar or perfect money or USDT or any form of crypto-currency in &nbsp;ur online bank pay remark or memo or when you are paying cash or any means of &nbsp;payment.</i><br>===================================================</p><p><i><strong>&nbsp;What do i need put in my memo/remark when transferring money to us ? You can put the Trans ID OR UR user I.D on abijanexchange or your name, generated for you after making the order for Naira deposit.An invoice will be generated for every order you make and you can make use of that when you are transferring</strong> money into our bank&nbsp;</i><br>====================================================</p><p><i><strong>NOTE</strong>- What if include bitcoin in my payment remark? we would NOT return your money because, we believe CBN would have noticed such a payment that carries or comes with the bitcoin as a remark and CBN is responsible for withholding the such payment</i></p>';

                        swal({
                            title: 'Warning Notice!',
                            content: wrapper,
                            icon: "warning",
                            buttons: ["Cancel", "Yes, I agree!"],
                            dangerMode: false,
                            closeOnClickOutside: false,
                            closeOnEsc: false,
                        }).then((value) => {
                            if (value) {
                                //Continue
                                congreat(topMe);
                            } else {
                                $('#buyNowbtn').removeAttr('disabled');
                                $("#loadingText_buy").hide();
                            }
                        });
                    } else {
                        congreat(topMe);
                    }
                }
            });
        }
    });

    $(".cancel_me_sell").click(function(e) {
        e.preventDefault();

        var inv = $(this).attr("data-value");

        swal({
                title: "Are you sure?",
                text: "Once cancelled, you will not be able to continue with this order#" + inv + "!",
                icon: "warning",
                buttons: ["Oh no!", "Yes, Cancel!"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: "/dashboard/cancel_sell",
                        data: {
                            inv: inv
                        },
                        success: function(result) {
                            swal("Poof! Your order #" + inv + " has been cancelled!", {
                                    icon: "success",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });
                        }
                    });
                } else {
                    swal("Your order is still active!");
                }
            });
        return false;
    });
    $(".invoice_me").click(function(e) {
        e.preventDefault();

        var inv = $(this).attr("data-value");

        window.location.href = "/dashboard/sendnotice?i=" + inv;
        return false;
    });
    $(".submitNotice").click(function() {

        $('.submitNotice').attr('disabled', 'disabled');
        $(".loadingText").show();
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: "POST",
            url: "/dashboard/palertz_sell",
            data: $("#notice-form").serialize(),
            dataType: 'json',
            success: function(result) {
                $('.submitNotice').removeAttr('disabled');
                $(".loadingText").hide();

                var mystat = result.status;
                var mymsg = result.msg;

                if (mystat !== "") {
                    if (mystat === "success") {
                        swal({
                            title: "Notice Sent",
                            text: '' + mymsg,
                            icon: "success",
                        });
                        window.open(
                            'orders',
                            '_self'
                        );
                    } else if (mystat === "error") {
                        swal({
                            title: "Error",
                            text: '' + mymsg,
                            icon: "error",
                        });
                    } else {
                        swal({
                                title: "Unknown error",
                                text: 'Please try again',
                                icon: "error",
                            })
                            .then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });

                    }
                }
            }
        });
    });
            function checkDec(el) {
                var ex = /^[0-9]+\.?[0-9]*$/;
                if (ex.test(el.value) == false) {
                    el.value = el.value.substring(0, el.value.length - 1);
                }
            }
        $("#trf_amount").on('keyup', function() {
        checkDec(this);

        var valu = this.value.replace(/[^0-9.]/g, "");
        $(this).val(valu);

        var s = $(this).val();
        var u = this.value.substring(0, this.value.length - 1);
        var fee_method = $('#fee_method').val();
        var depfee = $('#depfee').val();
        var withfee = $('#withfee').val();
        var balngn = $('#balngn').val();
        var above_amount = $("#above_amount").val();
        var enableFee = false;

        if (above_amount) {
            if (Number(above_amount) <= s) {
                //Enable transfer fee
                var enableFee = true;
            }
        } else {
            //Enable transfer fee
            var enableFee = true;
        }

        if ($('#withfee').length) {
            var formName = "withdrawal";
        } else if ($('#depfee').length) {
            var formName = "deposit";
        }

        if (s > 0) {
            if (s.length > 10) {
                $(this).val(u);
            }
            switch (formName) {
                case 'deposit':
                    if (enableFee) {
                        if (fee_method == 'percentage') {
                            var newamt = depfee / 100;
                            var newamt = newamt * s;
                            var newamt1 = parseFloat(newamt).toFixed(2);
                            var newamt = formatter.format(newamt);
                            if (newamt == '₦0.00') {
                                var newamt = 'Free';
                            }
                        } else {
                            var newamt = depfee ? '₦' + depfee : "Free";
                            var newamt1 = depfee;
                        }
                    } else {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }


                    $('.showdepfee').html(newamt);
                    var availNowB = Number(balngn) + Number(s);
                    var availNow1 = availNowB - newamt1;

                    var availNow = parseFloat(availNow1).toFixed(2);

                    $('#availBal').removeClass('hidden');
                    $('#availBalwith').removeClass('hidden');
                    $('#balspanOne').html('₦' + balngn);
                    $('.balspanwith').html(formatter.format(availNow));

                    break;
                case 'withdrawal':
                    if (enableFee) {
                        if (fee_method == 'percentage') {
                            var newamt = withfee / 100;
                            var newamt = newamt * s;
                            var newamt1 = parseFloat(newamt).toFixed(2);
                            var newamt = formatter.format(newamt1);
                            if (newamt == '₦0.00') {
                                var newamt = 'Free';
                            }
                        } else {
                            var newamt = withfee ? '₦' + withfee : "Free";
                            var newamt1 = withfee;
                        }

                    } else {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }

                    $('.showwithfee').html(newamt);
                    var availNow1 = balngn - s - newamt1;

                    var availNow = parseFloat(availNow1).toFixed(2);
                    $('#availBal').removeClass('hidden');
                    $('#availBalwith').removeClass('hidden');
                    $('#balspanOne').html('₦' + balngn);
                    $('.balspanwith').html('₦' + availNow);
                    if (availNow < 0) {
                        $('.balspanwith').html('₦0.00');
                    }
                    break;
                default:
                    break;
            }

        } else {
            if (formName == "withdrawal") {
                var withS = withfee ? '₦' + withfee : "Free";
            }
            if (formName == "deposit") {
                var depS = depfee ? '₦' + depfee : "Free";
            }
            if (fee_method == 'percentage') {
                var withS = withfee + "% of your withdrawal amount";
                var depS = depfee + "% of your deposit amount";
            }
            $('.showdepfee').html(depS);
            $('.showwithfee').html(withS);
            $('#balspanOne').html('₦' + balngn);
            $('#availBal').removeClass('hidden');
            $('#availBalwith').addClass('hidden');

        }
    });
    $('#with_submit').click(function() {
        var wallet = $("#bank_name").val();
        var bit_amount = $("#trf_amount").val();
        var withfee = $("#withfee").val();
        var balspanOne = $("#balspanOne").val();
        var rep = $('#bank_name').find(':selected').data('value');

        if (wallet && bit_amount) {

            $('#with_submit').attr('disabled', 'disabled');
            $("#loadingText_with").show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/sendnaira",
                data: {
                    trf_amount: bit_amount,
                    wallet: wallet,
                    recipient: rep,
                    withfee: withfee,
                    balspanOne: balspanOne,
                },
                dataType: 'json',
                success: function(result) {
                    $('#with_submit').removeAttr('disabled');
                    $("#loadingText_with").hide();

                    var mystat = result.status;
                    var mymsg = result.msg;

                    if (mystat !== "") {
                        if (mystat == "success") {
                            $("#trf_amount").val('')
                            swal({
                                title: "Withdrawal Sent",
                                text: '' + mymsg,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });
                        } else if (mystat == "error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                        } else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
    $('#dep_submit').click(function() {
        var wallet = $("#deposit_method").val();
        var bit_amount = $("#trf_amount").val();

        if (wallet && bit_amount) {

            $('#dep_submit').attr('disabled', 'disabled');
            $("#loadingText_dep").show();
            var great = null;

            function congret() {
                $('#dep_submit').attr('disabled', 'disabled');
                $("#loadingText_dep").show();
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "/dashboard/depositnaira",
                    data: $("#myDepform").serialize(),
                    dataType: 'json',
                    success: function(result) {
                        $('#dep_submit').removeAttr('disabled');
                        $("#loadingText_dep").hide();

                        var mystat = result.status;
                        var mymsg = result.msg;

                        if (mystat != "") {
                            if (mystat == "success") {
                                $("#trf_amount").val('')
                                swal({
                                    title: "Deposit Request Made",
                                    text: '' + mymsg,
                                    icon: "success",
                                }).then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });
                            } else if (mystat == "error") {
                                swal({
                                    title: "Error",
                                    text: '' + mymsg,
                                    icon: "error",
                                });
                            } else {
                                swal({
                                        title: "Unknown error",
                                        text: 'Please try again',
                                        icon: "error",
                                    })
                                    .then((value) => {
                                        if (value) {
                                            location.reload();
                                        }
                                    });

                            }
                        }
                    }
                });
            }
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/getInstructions",
                data: {
                    type: 'deposit'
                },
                success: function(result) {
                    great = result;
                    if (great) {

                        var wrapper = document.createElement("span");
                        wrapper.innerHTML = '<h4><strong>WARNING! WARNING!!</strong><i>DO NOT INCLUDE BITCOIN OR BTC ,NO THIRD PARTY AND COMPANY PAYMENT</i></h4><p><i><strong>NOTE-</strong>PAYMENT MUST COME FROM YOUR PERSONAL NAME USED&nbsp;</i></p><p>==================================================</p><p><i><strong>NOTE</strong>-<strong>HOW CBN TRACK BITCOIN TRANSACTION &nbsp;track bitcoin transaction</strong> when you include bitcoin or btc or dollar or perfect money or USDT or any form of crypto-currency in &nbsp;ur online bank pay remark or memo or when you are paying cash or any means of &nbsp;payment.</i><br>===================================================</p><p><i><strong>&nbsp;What do i need put in my memo/remark when transferring money to us ? You can put the Trans ID OR UR user I.D on abijanexchange or your name, generated for you after making the order for Naira deposit.An invoice will be generated for every order you make and you can make use of that when you are transferring</strong> money into our bank&nbsp;</i><br>====================================================</p><p><i><strong>NOTE</strong>- What if include bitcoin in my payment remark? we would NOT return your money because, we believe CBN would have noticed such a payment that carries or comes with the bitcoin as a remark and CBN is responsible for withholding the such payment</i></p>';

                        $('#dep_submit').removeAttr('disabled');
                        $("#loadingText_dep").hide();

                        swal({
                            title: 'Warning Notice!',
                            content: wrapper,
                            icon: "warning",
                            buttons: ["Cancel", "Yes, I agree!"],
                            dangerMode: false,
                            closeOnClickOutside: false,
                            closeOnEsc: false,
                        }).then((value) => {
                            if (value) {
                                //Continue
                                congret();
                            } else {
                                $('#dep_submit').removeAttr('disabled');
                                $("#loadingText_dep").hide();
                            }
                        });
                    } else {
                        congret();
                    }
                }
            });

        } else {
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
        $('#send_submit').click(function() {
        var wallet = $("#trf_wallet").val();
        var bit_amount = $("#bit_amount").val();
        var send_pass = $("#send_pass").val();

        if (wallet && bit_amount && send_pass) {

            $('#send_submit').attr('disabled', 'disabled');
            $("#loadingText_send").show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/sendBtc",
                data: $("#myBTCform").serialize(),
                dataType: 'json',
                success: function(result) {
                    $('#send_submit').removeAttr('disabled');
                    $("#loadingText_send").hide();
                    console.log(result.error);
                    var mystat = result.status;
                    var mymsg = result.error;
                    var mymsg2 = result.success;

                    if (mystat != "") {
                        if (mystat == "success") {
                            $("#trf_wallet").val('');
                            $("#bit_amount").val('')
                            swal({
                                title: "BTC Sent",
                                text: '' + mymsg2,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });
                        } else if (mystat == "password_error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                            if (value) {
                                location.reload();
                            }
                        }
                        else if (mystat == "balance_error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                            if (value) {
                                location.reload();
                            }
                        }
                        else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            $("#passdiv_send").show();
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
    $('.hidebalspan').click(function() {
        var txn_ngn1 = parseFloat(txn_ngn).toFixed(2);
        var txn_ngn_show = formatter.format(txn_ngn1);

        var txn_usd1 = parseFloat(txn_usd).toFixed(2);
        var txn_usd_show = formatter_usd.format(txn_usd1);

        //var txn_btc = parseFloat(txn_btc).toFixed(8);

        var txn_total1 = parseFloat(txn_total).toFixed(2);
        var txn_total_show = formatter.format(txn_total1);

        if ($(this).hasClass('showbal')) {
            //Show the balance
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/hidebal",
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
            });
        } else {
            //Hide the balance
            $.ajax({
                type: "POST",
                url: "dashboard/hidebal",
                data: {
                    bal: 'no'
                },
                success: function(result) {
                    if (result) {
                        $('.showbal').show();
                        $('.hidebal').hide();
                        $('.balspan').html('***');
                        var url = window.location.href.split('#')[0];
                        history.replaceState('', document.title, url);
                    }

                }
            });
        }
    });
    $("#bit_amount").on('keyup', function() {
        checkDec(this);

        var valu = this.value.replace(/[^0-9.]/g, "");
        $(this).val(valu);

        var s = $(this).val();
        var u = this.value.substring(0, this.value.length - 1);
        $("#passdiv_send").hide();
        var wallet = $("#trf_wallet").val();
        var wallet2 = $("#trf_wallet").val();

        var fee_method = $('#fee_method_btc').val();
        var depfee = $('#depfee').val();
        var withfee = $('#transfee_btc').val();
        var balngn = $('#balbtc').val();
        var above_amount = $("#above_amount_btc").val();
        var above_amount2 = $("#above_amount_eth").val();
        var above_amount3 = $("#above_amount_usdt").val();
        var enableFee = false;
        var rateUnit = $("#rateUnit").val();

        if (rateUnit == "BTC") {
            var showbtc_unit = rateUnit;
            var showusd_unit = "";
        } else if (rateUnit == "USD") {
            var showbtc_unit = "";
            var showusd_unit = '$';
        }

        if (above_amount) {
            if (Number(above_amount) <= s) {
                //Enable transfer fee
                var enableFee = true;
            }
        }
        else if (above_amount2) {
            if (Number(above_amount2) <= s) {
                //Enable transfer fee
                var enableFee = true;
            }
        }
        else if (above_amount3) {
            if (Number(above_amount3) <= s) {
                //Enable transfer fee
                var enableFee = true;
            }
        }
        else {
            //Enable transfer fee
            var enableFee = true;
        }

        if ($('#transfee_btc').length) {
            var formName = "withdrawal";
        } else if ($('#depfee').length) {
            var formName = "deposit";
        }

        if (s > 0) {
            if (s.length > 10) {
                $(this).val(u);
            }
            /**Show transfer fee */
            switch (formName) {
                case 'deposit':

                    break;
                case 'withdrawal':
                    if (enableFee) {
                        if (fee_method == 'percentage') {
                            var newamt = withfee / 100;
                            var newamt = Number(newamt * s);
                            var newamt1 = parseFloat(newamt).toFixed(8);
                            var newamt = newamt1 + 'BTC';

                        } else {
                            var newamt = withfee ? withfee + 'BTC' : "Free";
                            var newamt1 = withfee;

                            if (showusd_unit && newamt1) {
                                //convert fee to usd;
                                var btcworth = getrate('live', null);
                                var newamt1 = parseFloat(newamt1 / btcworth).toFixed(8);
                                var newamt = newamt1 + 'BTC';
                            }
                        }

                    } else {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }

                    if (newamt1 == '0.00000000' || newamt1 == '0.00') {
                        var newamt = 'Free';
                        var newamt1 = 0;
                    }



                    $('.showwithfee_btc').html(newamt);

                    var availNow1 = balngn - s - newamt1;

                    var availNow = parseFloat(availNow1).toFixed(8);
                    if (availNow == '0.00000000' || availNow == '0.00') {
                        var availNow = 0;
                    }
                    $('#availBal_btc').removeClass('hidden');
                    $('#availBalwith_btc').removeClass('hidden');
                    $('#availBal_eth').removeClass('hidden');
                    $('#availBalwith_eth').removeClass('hidden');
                    $('#availBal_usdt').removeClass('hidden');
                    $('#availBalwith_usdt').removeClass('hidden');
                    $('#balspanOne_btc').html(balngn + 'BTC');
                    $('.balspanwith_btc').html(availNow + 'BTC');
                    $('#balspanOne_eth').html(balngn + 'ETH');
                    $('.balspanwith_eth').html(availNow + 'ETH');
                    $('#balspanOne_usdt').html(balngn + 'USDT');
                    $('.balspanwith_usdt').html(availNow + 'USDT');
                    if (availNow < 0) {
                        $('.balspanwith_btc').html('0 BTC');
                        $('.balspanwith_eth').html('0 ETH');
                        $('.balspanwith_usdt').html('0 USDT');
                    }
                    break;
                default:
                    break;
            }
            if (wallet) {
                $("#passdiv_send").show();
            }
        } else {

            if (formName == "withdrawal") {
                var withS = withfee ? withfee + 'BTC' : "Free";
            }
            if (formName == "deposit") {
                var depS = depfee ? depfee + 'BTC' : "Free";
            }

            if (fee_method == 'percentage') {
                var withS = withfee + "% of your sent amount";
                var depS = depfee + "% of your deposit amount";
            } else {
                if (showusd_unit && withfee) {
                    //convert fee to usd;
                    var btcworth = getrate('live', null);
                    var newamt1 = parseFloat(withfee / btcworth).toFixed(8);
                    var withS = newamt1 + 'BTC';
                }
            }
            $('.showdepfee_btc').html(depS);
            $('.showwithfee_btc').html(withS);
            $('#balspanOne_btc').html(balngn + 'BTC');
            $('#balspanOne_eth').html(balngn + 'ETH');
            $('#balspanOne_usdt').html(balngn + 'USDT');
            $('#availBal_btc').removeClass('hidden');
            $('#availBalwith_btc').addClass('hidden');
            $('#availBal_eth').removeClass('hidden');
            $('#availBalwith_eth').addClass('hidden');
            $('#availBal_usdt').removeClass('hidden');
            $('#availBalwith_usdt').addClass('hidden');

        }
    });
    $("#trf_wallet").on('change', function() {
        var s = $(this).val();
        //var u = this.value.substring(0,this.value.length - 1);

        if (s.length >= 26) {
            $(".error_address").removeClass("dangerP");
            $(".error_address").html('<b>Checking address...</b>');
            $(".error_address").show();
            //Check if btc wallet address is valid
            $.ajax({
                type: "POST",
                url: "addr_query",
                data: {
                    ecurrency: s
                },
                success: function(result) {
                    if (result == "false") {
                        $(".error_address").addClass("dangerP");
                        $(".error_address").html('<b>Error: Invalid bitcoin address</b>');
                        $(".error_address").show();
                        $('#send_submit').attr('disabled', 'disabled');
                        $('#trf_wallet').css('border-color', 'red');
                        $('#trf_wallet').focus();
                        return false;
                    }
                    if (result == "true") {
                        $(".error_address").html('');
                        $(".error_address").hide();
                        $('#send_submit').removeAttr('disabled');
                        $('#trf_wallet').css('border-color', 'green');
                        return true;
                    }

                }
            });
        } else {
            if (s.length >= 1) {
                $(".error_address").addClass("dangerP");
                $(".error_address").html('<b>Error: Invalid bitcoin address</b>');
                $(".error_address").show();
                $('#send_submit').attr('disabled', 'disabled');
                $('#trf_wallet').css('border-color', 'red');
                $('#trf_wallet').focus();
            } else {
                $(".error_address").html('');
                $(".error_address").hide();
                $('#send_submit').removeAttr('disabled');
                $('#trf_wallet').css('border-color', '');
            }
        }
    });
    $("#send_pass").on('change', function() {
        var type = $(this).attr('type');
        if (type == "text") {
            var sanitized = $(this).val().replace(/\s/g, '');
            $(this).val(sanitized);
        }
    });

    $('#send_submit').click(function() {
        var wallet = $("#trf_wallet").val();
        var bit_amount = $("#bit_amount").val();
        var send_pass = $("#send_pass").val();

        if (wallet && bit_amount && send_pass) {

            $('#send_submit').attr('disabled', 'disabled');
            $("#loadingText_send").show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "/dashboard/sendBtc",
                data: $("#myBTCform").serialize(),
                dataType: 'json',
                success: function(result) {
                    $('#send_submit').removeAttr('disabled');
                    $("#loadingText_send").hide();
                    console.log(result.error);
                    var mystat = result.status;
                    var mymsg = result.error;
                    var mymsg2 = result.success;

                    if (mystat != "") {
                        if (mystat == "success") {
                            $("#trf_wallet").val('');
                            $("#bit_amount").val('')
                            swal({
                                title: "BTC Sent",
                                text: '' + mymsg2,
                                icon: "success",
                            }).then((value) => {
                                if (value) {
                                    location.reload();
                                }
                            });
                        } else if (mystat == "password_error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                            if (value) {
                                location.reload();
                            }
                        }
                        else if (mystat == "balance_error") {
                            swal({
                                title: "Error",
                                text: '' + mymsg,
                                icon: "error",
                            });
                            if (value) {
                                location.reload();
                            }
                        }
                        else {
                            swal({
                                    title: "Unknown error",
                                    text: 'Please try again',
                                    icon: "error",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });

                        }
                    }
                }
            });
        } else {
            $("#passdiv_send").show();
            swal({
                title: "Error",
                text: 'Please fill all the fields',
                icon: "error",
            });
        }
    });
        $('#ContinueCompose').click(function(){
                var category = $('#category').val();
        var subject = $('#subject').val();
        var memo = $('#memo').val();
        //var composetype = $('#msgtyperead').val();

        if (memo != "") {

            $('.spincompose').show();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                }
            });
            $.ajax({
                type: "POST",
                url: "{{route('send.mail')}}",
                data: {
                    category: category,
                    subject: subject,
                    message: memo,
                },
                success: function(result) {
                    $('.spincompose').hide();
                    if (result != "") {
                        $('#messageModalCenter').modal('hide');
                        $('#msgtyperead').val('compose');
                        $('#idread').val('');
                        $('#category').val('');
                        $('#memo').val('');
                        swal({
                            title: "Message sent",
                            text: 'Your Message has been sent successfully to Support.',
                            type: 'success',
                            icon: "success",
                        });
                    }
                }
            });
        }
            })
        })
    </script>
    <script>
        var txn_ngn = "0.00";
        var txn_usd = "0.00";
        var txn_btc = "0";
        var txn_total = "0";
        var txn_btc_upto = "";
        var txn_ngn_upto = "0";

        function getrate(unit, buy = null) {
            var btc_in_usd = {{getCurrentBtcDollar()}};
            var fiat_conversion_table = [{ "port_short": "{{rates()[0]['port_short']}}", "port_type": "crypto", "port_sell": "{{rates()[0]['sell_rate']}}", "port_buy": "{{rates()[0]['buy_rate']}}" }, { "port_short": "{{rates()[1]['port_short']}}", "port_type": "ecurrency", "port_sell": "{{rates()[1]['sell_rate']}}", "port_buy": "{{rates()[1]['buy_rate']}}" }, { "port_short": "{{rates()[2]['port_short']}}", "port_type": "crypto", "port_sell": "{{rates()[2]['sell_rate']}}", "port_buy": "{{rates()[2]['buy_rate']}}" }, { "port_short": "{{rates()[3]['port_short']}}", "port_type": "crypto", "port_sell": "{{rates()[3]['sell_rate']}}", "port_buy": "{{rates()[3]['buy_rate']}}" }, { "port_short": "{{rates()[4]['port_short']}}", "port_type": "crypto", "port_sell": "{{rates()[4]['sell_rate']}}", "port_buy": "{{rates()[4]['buy_rate']}}" }];
            let counterfiat = 0;
            for (const obj of fiat_conversion_table) {
                var cname = (obj.port_short).toLowerCase();
                var csell = obj.port_sell;
                var cbuy = obj.port_buy;
                var ctype = obj.port_type;
                if (cname === unit) {
                    switch (buy) {
                        case 'sell':
                            var answer = csell;
                            break;
                        case 'buy':
                            var answer = cbuy;
                            break;
                        case 'type':
                            var answer = ctype;
                            break;
                        default:
                            break;
                    }
                }
                counterfiat++;
            }
            if (unit == "live") {
                var answer = btc_in_usd;
            }
            return answer;
        }
    </script>
    <script>
        $(".cancel_me_sell").click(function(e) {
        e.preventDefault();

        var inv = $(this).attr("data-value");

        swal({
                title: "Are you sure?",
                text: "Once cancelled, you will not be able to continue with this order#" + inv + "!",
                icon: "warning",
                buttons: ["Oh no!", "Yes, Cancel!"],
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    $.ajax({
                        type: "POST",
                        url: "/dashboard/cancel_sell",
                        data: {
                            inv: inv
                        },
                        success: function(result) {
                            swal("Poof! Your order #" + inv + " has been cancelled!", {
                                    icon: "success",
                                })
                                .then((value) => {
                                    if (value) {
                                        location.reload();
                                    }
                                });
                        }
                    });
                } else {
                    swal("Your order is still active!");
                }
            });
        return false;
    });
    $(".invoice_me").click(function(e) {
        e.preventDefault();

        var inv = $(this).attr("data-value");

        window.location.href = "/dashboard/sendnotice?i=" + inv;
        return false;
    });
    </script>
    <script src="{{URL::asset('dash/libraries/custom.js')}}"></script>

</body>

</html>
