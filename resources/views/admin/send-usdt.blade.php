@extends('layouts.admin-frontend')

@section('page-content')
@include('sweetalert::alert')
<!-- [ Layout container ] Start -->
<div class="layout-container">
    <!-- [ Layout navbar ( Header ) ] Start -->
    @includeIf('layouts.admin-navbar')
    <!-- [ Layout navbar ( Header ) ] End -->

    <!-- [ Layout content ] Start -->
    <div class="layout-content">

        <!-- [ content ] Start -->
        <!--/ menu  -->
        <div class="main_content_iner overly_inner ">
            <div class="container-fluid p-0 ">
                <!-- page title  -->
                <div class="row">
                    <div class="col-md-12 m-b-30">
                        <!-- begin page title -->
                        <div class="d-block d-sm-flex flex-nowrap align-items-center">
                            <div class="page-title mb-sm-0">
                                <h4>Send USDT TRC20 Request</h4>
                            </div>
                        </div>
                        <!-- end page title -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-statistics">
                            <div class="card-body">
                                <div class="export-table-wrapper table-responsive pb-4">
                                    <div class="export-buttons m-b-20">
                                        <a href="#" id="exportExcel" class="btn btn-primary">Export To Excel</a>
                                        <a href="#" id="exportCSV" class="btn btn-primary">Export To CSV</a>
                                    </div>
                                    <table id="export-table" class="table table-bordered">
                                        <thead class="thead-light">
                                            <tr>
                                                <th>S/N</th>
                                                <th>Withdrawer Name</th>
                                                <th>Email</th>
                                                <th>Amount</th>
                                                <th>To Wallet</th>
                                                <th>Charges</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($btc->count() > 0)
                                                @foreach ($btc as $item)
                                                    <tr>
                                                        @php
                                                            $userP = \App\Models\UserProfile::where('user_id', $item->user_id)->first();
                                                            $user = \App\Models\User::where('id', $item->user_id)->first();
                                                            $userW = \App\Models\UserWallet::where('user_id', $item->user_id)->first();
                                                            $userB = \App\Models\UserBank::where('user_id', $item->user_id)->first();
                                                            if($userP == null){
                                                                $true = false;
                                                            }
                                                            else{
                                                                $true = true;
                                                            }
                                                        @endphp
                                                        <td>#</td>
                                                        <td>
                                                            @if ($true == true)
                                                                {{\App\Models\UserProfile::where('user_id', $item->user_id)->first()->firstname}} {{\App\Models\UserProfile::where('user_id', $item->user_id)->first()->surname}}
                                                            @endif
                                                        </td>
                                                        <td>{{$user->email}}</td>
                                                        <td>
                                                            {{$item->btc_amount}}
                                                        </td>
                                                        <td>
                                                            {{$item->trf_wallet}}
                                                        </td>
                                                        <td>{{$item->transfer_fee}}</td>
                                                        <td>{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                                                        <td>
                                                            @if ($item->status == 0)
                                                                <form action="{{route('usdt.update')}}" method="POST">
                                                                    @csrf
                                                                    <input type="hidden" name="id" value="{{$item->id}}">
                                                                    <button type="submit" class="btn btn-success">Approve</button>
                                                                </form>
                                                            @else
                                                                Approved
                                                            @endif
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @else
                                                <tr>
                                                    <td>
                                                        No Data Yet
                                                    </td>
                                                </tr>
                                            @endif

                                        </tbody>

                                    </table>
                                </div>
                                {{ $btc->links() }}
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end row -->
            </div>
        </div>
        <!-- [ content ] End -->

        <!-- [ Layout footer ] Start -->
        @includeIf('layouts.admin-footer')
        <!-- [ Layout footer ] End -->
    </div>
    <!-- [ Layout content ] Start -->
</div>
<!-- [ Layout container ] End -->
@endsection
