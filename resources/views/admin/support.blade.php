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
                                <h4>Send Bitcoin Request</h4>
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
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Subject</th>
                                                <th>Message</th>
                                                <th>Date</th>
                                                <th>Reply</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if ($msg->count() > 0)
                                                @foreach ($msg as $item)
                                                    <tr>
                                                        <td>{{ !is_null(request()->query('page')) ? ((int) request()->query('page') * 10) + $loop->iteration - 10 : $loop->iteration}}</td>
                                                        <td>
                                                            {{$item->name}}
                                                        </td>
                                                        <td>{{$item->email}}</td>
                                                        <td>
                                                            {{$item->phone}}
                                                        </td>
                                                        <td>
                                                            {{$item->subject}}
                                                        </td>
                                                        <td>{{$item->message}}</td>
                                                        <td>{{\Carbon\Carbon::parse($item->created_at)->diffForHumans()}}</td>
                                                        <td><a href="mailto:{{$item->email}}">Reply</a></td>
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
                                {{ $msg->links() }}
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
