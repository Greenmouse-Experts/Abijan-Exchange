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
            <div class="main_content_iner ">
                <div class="container-fluid p-0">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="dashboard_header mb_50">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="page_title_left mb_30">
                                            <h3>{{$role->name}}</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-right">
                                            <p><a href="/">Dashboard</a> <i class="fas fa-caret-right"></i> {{$role->name}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="email-sidebar white_box">
                                <ul class="text-left mt-2">
                                    @can('update-settings')
                                        <li>
                                            <a href="{{ route('settings') }}">
                                                <i class="ti-settings"></i> <span> <span>Settings</span> </span>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('set-rate')
                                        <li>
                                            <a href="{{ route('set_rate') }}">
                                                <i class="ti-credit-card"></i> <span> <span>Rates</span></span>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('create-admin')
                                        <li>
                                            <a href="{{ route('create_admin') }}">
                                                <i class="ti-user"></i> <span> <span>Admin User</span> </span>
                                            </a>
                                        </li>
                                    @endcan
                                    @can('role-create')
                                        <li class="active">
                                            <a href="{{ route('roles.index') }}">
                                                <i class="ti-briefcase"></i> <span> <span>Roles</span> </span>
                                            </a>
                                        </li>
                                    @endcan
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            <div class="white_box QA_section mb_30">
                                <div class="white_box_tittle list_header">
                                    <h4>Roles</h4>
                                    <div class="box_right d-flex lms_block">
                                        <div class="serach_field_2">
                                        </div>
                                    </div>
                                </div>
                                <div class="QA_table">
                                    <!-- table-responsive -->
                                    <!-- table-responsive -->
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                        <form>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="common_input mb_20">
                                                        <label>Role Name</label>
                                                        <input name="name" id="name" readonly value="{{$role->name}}" type="text" maxlength="100"
                                                            class="form-control">
                                                    </div>
                                                </div>
                                                <div class="col-lg-16">
                                                    <div class="common_input mb_20">
                                                        <label>Permissions</label>
                                                        <br>
                                                        @if(!empty($rolePermissions))

                                                            @foreach($rolePermissions as $v)

                                                                <label class="label label-success">{{ $v->name }}</label>

                                                            @endforeach

                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
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
