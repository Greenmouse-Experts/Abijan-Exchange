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
                                            <h3>Admin Roles</h3>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="dashboard_breadcam text-right">
                                            <p><a href="/">Dashboard</a> <i class="fas fa-caret-right"></i> Mailbox
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
                                    <button data-toggle="modal" data-target="#addRole"
                                        class="btn_1 w-100 mb-2 btn-lg email-gradient gradient-9-hover email__btn waves-effect"
                                        title="Delete message">
                                        <i class="ti-user"></i> Add Roles
                                    </button>
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper no-footer">
                                        <div id="DataTables_Table_0_filter" class="dataTables_filter"><label><i
                                                    class="ti-search"></i>
                                                <input type="search" class="" placeholder="Quick Search"
                                                    aria-controls="DataTables_Table_0"></style='display:none'>
                                            </label></div>
                                        <table class="table readMsgTable dataTable no-footer dtr-inline"
                                            id="DataTables_Table_0" role="grid"
                                            aria-describedby="DataTables_Table_0_info" style="width: 835px;">
                                            <thead>
                                                <tr role="row">
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 86px;"><label
                                                            class="primary_checkbox d-flex mr-12 selectDelete1">
                                                            <input type="checkbox" id="checkboxAll">
                                                            <span class="checkmark" title="Select"
                                                                id="checkboxmsgAll"></span>
                                                        </label></th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 171px;">Name</th>
                                                    <th scope="col" class="sorting_disabled" rowspan="1"
                                                        colspan="1" style="width: 171px;">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @if ($roles->count() > 0)
                                                    @foreach ($roles as $role)
                                                        <tr>
                                                            <td scope="" tabindex="0">
                                                                <p>{{ $loop->iteration }}</p>
                                                            </td>
                                                            <td>
                                                                <p>{{ $role->name }}</p>
                                                            </td>
                                                            <td>
                                                                <a data-placement="top" title="View Role" style="cursor: pointer" href="{{ route('roles.show',$role->id) }}">
                                                                    <i class=" ti-eye "></i>
                                                                </a>
                                                                <a data-placement="top" title="Edit Role" style="cursor: pointer" href="{{ route('roles.edit',$role->id) }}">
                                                                    <i class=" ti-pencil-alt "></i>
                                                                </a>
                                                            </td>
                                                        </tr>
                                                    @endforeach
                                                @else
                                                    <tr class="odd">
                                                        <td valign="top" colspan="5" class="dataTables_empty">Your
                                                            rates will appear here.</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                    <input type="hidden" id="countmsg" value="">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="addRole" tabindex="-1" role="dialog" aria-labelledby="messageModalCenterTitle"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <div class="main-title">
                            <h3 class="m-0">Create an Admin</h3>
                        </div>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">??</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div>
                            <p>Use this form to add currency current rate.</p><br>
                        </div>
                        <form method="POST" action="{{ route('roles.store') }}">
                            @csrf
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="common_input mb_20">
                                        <label>Role Name</label>
                                        <input name="name" id="name" type="text" maxlength="100"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-16">
                                    <div class="common_input mb_20">
                                        <label>Permissions</label>
                                        <br>
                                        @foreach($permission as $value)

                                            <label> <input style="box-sizing: border-box;
                                                padding: 0;
                                                height: 14px;
                                                display: inline;" type="checkbox" class="" value="{{ $value->id }}" name="permission[]" id="">

                                            {{ $value->name }}</label>

                                        @endforeach
                                    </div>
                                </div>

                                <div class="col-lg-12 forgotpasswordhide">
                                    <div class="common_input mb_20">
                                        <button type="submit" class="btn_1 w-100 col-md-5" id="ContinueCompose">Add Rate
                                            <span class="spincompose fa fa-spinner fa-spin fa-2x"
                                                style="display: none;"></span></button>
                                    </div>
                                </div>
                                <div class="col-lg-12 forgotpasswordshow" style="display:none;">
                                    <div class="common_input mb_20">
                                        <p>Please click <b><a href="forgotpassword">HERE</a></b> to reset your password or
                                            click the "Forgot Password" link on the login page.</p>
                                    </div>
                                </div>
                            </div>
                        </form>
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
