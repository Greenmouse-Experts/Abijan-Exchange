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
            <div class="container-fluid p-0 ">
                <!-- page title  -->
                <div class="row">
                    <div class="col-xl-6">
                        <div class="white_card card_height_100 mb_30">
                            <div class="white_card_header">
                                <div class="box_header m-0">
                                    <div class="main-title">
                                        <h4 class="m-0">Verify Identity</h4><br>
                                        <ul class="nav nav-pills custom_bootstrap_nav">
                                            <li class="nav-item">
                                                <a class="nav-link perinf active">Personal Information</a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link bankinf"> Bank &amp; Identity </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link continf"> Contact Info</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-content">
                                <div class="white_card_body tab-pane fade active show" id="nairadiv">
                                    <div class="exchange_widget">
                                        <form name="" id="" method="POST" action="{{route('validateBvn')}}" class="currency_validate"
                                            autocomplete="off">
                                            @csrf
                                            <div class="form-group firstver">
                                                <label>First Name</label>
                                                <input type="text" value="{{Auth::user()->profile->firstname ?? ''}}" name="first_name_ver"
                                                    class="form-control" id="first_name_ver">
                                            </div>
                                            <div class="form-group firstver">
                                                <label>Middle Name</label>
                                                <input type="text" value="{{Auth::user()->profile->middlename ?? ''}}" name="middle_name_ver"
                                                    class="form-control" id="middle_name_ver">
                                            </div>
                                            <div class="form-group firstver">
                                                <label>Surname</label>
                                                <input type="text" value="{{Auth::user()->profile->surname ?? ''}}" name="surname_ver" class="form-control"
                                                    id="surname_ver">
                                            </div>
                                            <div class="form-group firstver">
                                                <label>Date of Birth</label>
                                                <div class="input-group ">
                                                    <select name="day_ver" id="day_ver" class="form-control nice_Select"
                                                        style="display: none;">
                                                        <option value="">Day</option>
                                                        <option value="01">1</option>
                                                        <option value="02">2</option>
                                                        <option value="03">3</option>
                                                        <option value="04">4</option>
                                                        <option value="05">5</option>
                                                        <option value="06">6</option>
                                                        <option value="07">7</option>
                                                        <option value="08">8</option>
                                                        <option value="09">9</option>
                                                        <option value="10">10</option>
                                                        <option value="11">11</option>
                                                        <option value="12">12</option>
                                                        <option value="13">13</option>
                                                        <option value="14">14</option>
                                                        <option value="15">15</option>
                                                        <option value="16">16</option>
                                                        <option value="17">17</option>
                                                        <option value="18">18</option>
                                                        <option value="19">19</option>
                                                        <option value="20">20</option>
                                                        <option value="21">21</option>
                                                        <option value="22">22</option>
                                                        <option value="23">23</option>
                                                        <option value="24">24</option>
                                                        <option value="25">25</option>
                                                        <option value="26">26</option>
                                                        <option value="27">27</option>
                                                        <option value="28">28</option>
                                                        <option value="29">29</option>
                                                        <option value="30">30</option>
                                                        <option value="31">31</option>
                                                    </select>
                                                    <select name="month_ver" id="month_ver"
                                                        class="form-control nice_Select" style="display: none;">
                                                        <option value="">Month</option>
                                                        <option value="01">January</option>
                                                        <option value="02">February</option>
                                                        <option value="03">March</option>
                                                        <option value="04">April</option>
                                                        <option value="05">May</option>
                                                        <option value="06">June</option>
                                                        <option value="07">July</option>
                                                        <option value="08">August</option>
                                                        <option value="09">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                    <select name="year_ver" id="year_ver"
                                                        class="form-control nice_Select" style="display: none;">
                                                        <option value="">Year</option>
                                                        <option value="2005">2005</option>
                                                        <option value="2004">2004</option>
                                                        <option value="2003">2003</option>
                                                        <option value="2002">2002</option>
                                                        <option value="2001">2001</option>
                                                        <option value="2000">2000</option>
                                                        <option value="1999">1999</option>
                                                        <option value="1998">1998</option>
                                                        <option value="1997">1997</option>
                                                        <option value="1996">1996</option>
                                                        <option value="1995">1995</option>
                                                        <option value="1994">1994</option>
                                                        <option value="1993">1993</option>
                                                        <option value="1992">1992</option>
                                                        <option value="1991">1991</option>
                                                        <option value="1990">1990</option>
                                                        <option value="1989">1989</option>
                                                        <option value="1988">1988</option>
                                                        <option value="1987">1987</option>
                                                        <option value="1986">1986</option>
                                                        <option value="1985">1985</option>
                                                        <option value="1984">1984</option>
                                                        <option value="1983">1983</option>
                                                        <option value="1982">1982</option>
                                                        <option value="1981">1981</option>
                                                        <option value="1980">1980</option>
                                                        <option value="1979">1979</option>
                                                        <option value="1978">1978</option>
                                                        <option value="1977">1977</option>
                                                        <option value="1976">1976</option>
                                                        <option value="1975">1975</option>
                                                        <option value="1974">1974</option>
                                                        <option value="1973">1973</option>
                                                        <option value="1972">1972</option>
                                                        <option value="1971">1971</option>
                                                        <option value="1970">1970</option>
                                                        <option value="1969">1969</option>
                                                        <option value="1968">1968</option>
                                                        <option value="1967">1967</option>
                                                        <option value="1966">1966</option>
                                                        <option value="1965">1965</option>
                                                        <option value="1964">1964</option>
                                                        <option value="1963">1963</option>
                                                        <option value="1962">1962</option>
                                                        <option value="1961">1961</option>
                                                        <option value="1960">1960</option>
                                                        <option value="1959">1959</option>
                                                        <option value="1958">1958</option>
                                                        <option value="1957">1957</option>
                                                        <option value="1956">1956</option>
                                                        <option value="1955">1955</option>
                                                        <option value="1954">1954</option>
                                                        <option value="1953">1953</option>
                                                        <option value="1952">1952</option>
                                                        <option value="1951">1951</option>
                                                        <option value="1950">1950</option>
                                                        <option value="1949">1949</option>
                                                        <option value="1948">1948</option>
                                                        <option value="1947">1947</option>
                                                        <option value="1946">1946</option>
                                                        <option value="1945">1945</option>
                                                        <option value="1944">1944</option>
                                                        <option value="1943">1943</option>
                                                        <option value="1942">1942</option>
                                                        <option value="1941">1941</option>
                                                        <option value="1940">1940</option>
                                                        <option value="1939">1939</option>
                                                        <option value="1938">1938</option>
                                                        <option value="1937">1937</option>
                                                        <option value="1936">1936</option>
                                                        <option value="1935">1935</option>
                                                        <option value="1934">1934</option>
                                                        <option value="1933">1933</option>
                                                        <option value="1932">1932</option>
                                                        <option value="1931">1931</option>
                                                        <option value="1930">1930</option>
                                                        <option value="1929">1929</option>
                                                        <option value="1928">1928</option>
                                                        <option value="1927">1927</option>
                                                        <option value="1926">1926</option>
                                                        <option value="1925">1925</option>
                                                        <option value="1924">1924</option>
                                                        <option value="1923">1923</option>
                                                        <option value="1922">1922</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group secondver hidden">
                                                <label>Bank Name</label>
                                                <div class="input-group ">
                                                    <select name="bank_name_ver" id="bank_name_ver"
                                                        class="form-control nice_Select" style="display: none;">
                                                        <option value="">Please select your bank</option>
                                                        <option value="Diamond Bank">ACCESS BANK (DIAMOND)</option>
                                                        <option value="Access Bank">ACCESS BANK PLC</option>
                                                        <option value="Citibank Nigeria">CITIBANK NIGERIA</option>
                                                        <option value="Ecobank Nigeria">ECOBANK NIGERIA PLC</option>
                                                        <option value="Enterprise Bank">ENTERPRISE BANK</option>
                                                        <option value="Fidelity Bank">FIDELITY BANK PLC</option>
                                                        <option value="First Bank of Nigeria">FIRST BANK OF NIGERIA PLC
                                                        </option>
                                                        <option value="First City Monument Bank">FIRST CITY MONUMENT BANK
                                                            PLC</option>
                                                        <option value="Guaranty Trust Bank">GTBANK PLC</option>
                                                        <option value="Heritage Bank">HERITAGE BANK</option>
                                                        <option value="Jaiz Bank">JAIZ BANK</option>
                                                        <option value="Keystone Bank">KEYSTONE BANK</option>
                                                        <option value="MainStreet Bank">MAINSTREET BANK</option>
                                                        <option value="Parallex Bank">PARALLEX BANK</option>
                                                        <option value="Polaris Bank">POLARIS BANK LIMITED</option>
                                                        <option value="Providus Bank">PROVIDUS BANK LIMITED</option>
                                                        <option value="Stanbic IBTC Bank">STANBIC IBTC BANK PLC</option>
                                                        <option value="Standard Chartered Bank">STANDARD CHARTERED BANK
                                                            NIGERIA LTD</option>
                                                        <option value="Sterling Bank">STERLING BANK PLC</option>
                                                        <option value="Union Bank of Nigeria">UNION BANK OF NIGERIA PLC
                                                        </option>
                                                        <option value="United Bank For Africa">UNITED BANK FOR AFRICA PLC
                                                        </option>
                                                        <option value="UNITY BANK">UNITY BANK PLC</option>
                                                        <option value="Wema Bank">WEMA BANK PLC</option>
                                                        <option value="Zenith Bank">ZENITH BANK PLC</option>
                                                    </select>

                                                </div>
                                            </div>
                                            <div class="form-group secondver hidden">
                                                <label>Account Number</label>
                                                <input type="text" name="acct_no_ver" class="form-control acct_nos"
                                                    id="acct_no_ver">
                                            </div>
                                            <div class="form-group secondver hidden">
                                                <label>Bank Verification Number (BVN)</label>
                                                <input type="text" name="bvn_ver" class="form-control bvn_nos"
                                                    id="bvn_ver">
                                            </div>
                                            <div class="form-group thirdver hidden">
                                                <label>Main Phone Number</label>
                                                <input type="text" value="" name="phone_ver"
                                                    class="form-control phonesVer" id="phone_ver">
                                                <span id="error_phone" class="hidden">Please provide a valid Phone
                                                    Number</span>
                                            </div>
                                            <div class="form-group thirdver hidden">
                                                <label>Second Phone Number (Optional)</label>
                                                <input type="text" value="" name="alt_phone_ver"
                                                    class="form-control phonesVer" id="alt_phone_ver">
                                                <span id="error_alt_phone" class="hidden">Please provide a valid Phone
                                                    Number</span>
                                            </div>
                                            <div class="form-group thirdver hidden">
                                                <label>Gender</label>
                                                <div class="input-group ">
                                                    <select name="gender_ver" id="gender_ver"
                                                        class="form-control nice_Select" style="display: none;">
                                                        <option value="">Please Select</option>
                                                        <option value="Male">Male</option>
                                                        <option value="Female">Female</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <input type="hidden" id="verpage" value="1">
                                                <button type="button" name="ver_back" id="ver_back"
                                                    class="btn btn-outline-info rounded-pill mb-0"><i
                                                        class="ti-arrow-left f_s_14 mr-2"></i> Back to my Profile</button>
                                                <button type="button" name="ver_next" id="ver_next"
                                                    class="btn btn-outline-info rounded-pill mb-0">Next <i
                                                        class="ti-arrow-right f_s_14 mr-2"></i></button>
                                                <button type="submit" style="float:right;" name=""
                                                    id="ver_submit" class="btn_1 mb-0 w-50 hidden">Submit <span
                                                        class="loadingText fa fa-spinner fa-spin fa-2x"
                                                        style="display:none;float:right;"
                                                        id="loadingText_ver"></span></button>
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="white_box mb_30">
                            <div class="box_header ">
                                <div class="main-title">
                                    <h3 class="mb-0">Verification FAQs</h3>
                                </div>
                            </div>
                            <!-- accordian -->
                            <div class="accordion accordion_custom mb_50" id="accordion_ex">
                                <div class="card">
                                    <div class="card-header" id="headingOne">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn" type="button" data-toggle="collapse"
                                                data-target="#collapseOne" aria-expanded="true"
                                                aria-controls="collapseOne"> My BVN phone number is lost, what do I do?
                                            </a>
                                        </h2>
                                    </div>

                                    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                        data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Provide the lost phone number in the main phone number field and your current
                                                phone number in the second phone number.</p>
                                            <p>Remember to go to your bank later to update the BVN record with your current
                                                phone number.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingTwo">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                aria-controls="collapseTwo">
                                                How soon will my identity be verified?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                        data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>If you provide the right information, your identity will be verified within
                                                minutes. You will receive an email as soon as it has been verified.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header" id="headingThree">
                                        <h2 class="mb-0">
                                            <a href="#" class="btn collapsed" type="button"
                                                data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                aria-controls="collapseThree">
                                                Can I change my phone number after verification?
                                            </a>
                                        </h2>
                                    </div>
                                    <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                        data-parent="#accordion_ex">
                                        <div class="card-body">
                                            <p>Once your identity has been verified on Abijan Exchange, your main phone number
                                                can't be removed except the phone number changed on your BVN record.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- accordian -->
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
