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

    <script src="{{URL::asset('dash/libraries/chart.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/roundedBar.js')}}"></script>
    <script src="{{URL::asset('dash/libraries/sweetalert.min.js')}}"></script>


    <!-- custom js -->
    <script src="{{URL::asset('dash/libraries/dashboard_init.js')}}"></script>
    <script>
        $(function() {
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
