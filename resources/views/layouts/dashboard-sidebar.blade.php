<!-- [ Layout sidenav ] Start -->
<nav class="sidebar ">
        <!-- <nav class="sidebar dark_sidebar"> -->
        <div class="logo d-flex justify-content-between">
            <a class="large_logo" href="{{route('home')}}"><img src="{{URL::asset('dash/libraries/logoo.png')}}" alt=""></a>
            <a class="small_logo" href="{{route('home')}}"><img src="{{URL::asset('dash/libraries/logo.png')}}" alt=""></a>
            <div class="sidebar_close_icon d-lg-none">
                <i class="ti-close"></i>
            </div>
        </div>
        <ul id="sidebar_menu">
            <li>
                <a href="{{route('home')}}" class="chome" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/1_003.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Dashboard </span>
                    </div>
                </a>
            </li>
            <li>
                <a aria-expanded="false" class="has-arrow cngnwallet">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/2_002.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Wallet</span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{route('naira')}}">Naira</a></li>
                    <li><a href="{{route('sendbtn')}}">Bitcoin</a></li>
                    <li><a href="#">Ethereum</a></li>
                    <li><a href="#">USDT</a></li>
                </ul>
            </li>
            <li>
                <a href="{{route('buynsell')}}" aria-expanded="false" class="cbuynsell">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/6.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Buy &amp; Sell</span>
                    </div>
                </a>
            </li>
            {{-- <li>
                <a class="has-arrow cbitwallet" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/6.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Bitcoin Wallet</span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{route('sendbtn')}}">Send BTC</a></li>
                    <li><a href="{{route('wallet_receive')}}">Receive BTC</a></li>
                    <li><a href="{{route('wallet_transactions')}}">Transactions</a></li>
                </ul>
            </li> --}}
            {{-- <li>
                <a class="has-arrow cbitwallet" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/ethereum.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Ethereum</span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{route('ethereum')}}">Send Eth</a></li>
                    <li><a href="{{route('receive_eth')}}">Receive Eth</a></li>
                    <!-- <li><a href="{{route('wallet_transactions')}}">Transactions</a></li> -->
                </ul>
            </li>
            <li>
                <a href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/2_002.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>USDT</span>
                    </div>
                </a>
            </li> --}}
            <li>
                <a href="#" aria-expanded="false" class="cbuynsell">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/swap.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Swap</span>
                        <small style="font-size: 10px;color: #ff3000;">coming soon!</small>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" aria-expanded="false" class="cbuynsell">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/peer-to-peer.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>P2P</span>
                        <small style="font-size: 10px;color: #ff3000;">coming soon!</small>
                    </div>
                </a>
            </li>
            <li>
                <a href="#" aria-expanded="false" class="cbuynsell">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/bill (1).png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Utility Bill</span>
                        <small style="font-size: 10px;color: #ff3000;">coming soon!</small>
                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('referrals')}}" class="creferral" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/5.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Referrals</span>

                    </div>
                </a>
            </li>
            <li>
                <a href="{{route('edit_profile')}}" aria-expanded="false" class="cprofile">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/General.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>My Profile</span>
                    </div>
                </a>
            </li>
            <li>
                <a class="has-arrow cmailbox" href="#" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/Mail_Box.svg')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Message Center </span>
                    </div>
                </a>
                <ul>
                    <li><a href="{{route('mailbox.inbox')}}">Inbox</a></li>
                    <li><a href="{{route('mailbox.sent')}}">Sent Mails</a></li>
                    <li><a href="{{route('mailbox.trash')}}">Trash</a></li>
                    <li><a href="{{route('mailbox.archive')}}">Archived Mails</a></li>
                </ul>
            </li>
            <li>
                <a href="#" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();" aria-expanded="false">
                    <div class="nav_icon_small">
                        <img src="{{URL::asset('dash/libraries/17.png')}}" alt="">
                    </div>
                    <div class="nav_title">
                        <span>Log Out</span>
                        <form id="logout-form" method="POST" action="{{ route('logout') }}">
                            @csrf
                        </form>
                    </div>
                </a>
            </li>
        </ul>
    </nav>
<!-- [ Layout sidenav ] End -->
