@extends('layouts.website')

@section('title','Checkout')
@section('content')



    <div class="page-wrapper">



        <!-- Main Header -->

        <header class="main-header fixed-top-header">



            <!--Header Lower-->



        </header>

        <!--End Main Header -->


        <!-- Page Banner -->

        <section class="page-banner">

            <div class="auto-container">

                <div class="page-title">
                    <h1> Checkout</h1>
                </div>

                <div class="bread-crumb text-right">

                    <span class="initial-text">You Are Here: </span>

                    <ul class="breadcrumb pull-right">
                        <li><a href="/">Home</a></li>
                        <li>Checkout</li>
                    </ul>
                </div>

            </div>

        </section>

        <!-- Sidebar Page -->

        <div class="sidebar-page">

            <div class="auto-container">

                <div class="row clearfix">

                    <!-- sidebar area -->


                    <!-- sidebar area -->


                    <!-- Side Bar -->

                    <!-- Left Content -->

                    <section class="left-content  col-lg-12 col-md-12 col-sm-12 col-xs-12">


                        <!-- blog post item -->

                        <div class="woocommerce">
                            <div class="woocommerce-form-coupon-toggle">

                                <div class="woocommerce-info">Have a coupon? <a href="#" class="showcoupon">Click here
                                        to enter your code</a></div>
                            </div>

                            <form class="checkout_coupon woocommerce-form-coupon" method="post" style="display:none">

                                <p>If you have a coupon code, please apply it below.</p>

                                <p class="form-row form-row-first">
                                    <input type="text" name="coupon_code" class="input-text" placeholder="Coupon code"
                                        id="coupon_code" value="">
                                </p>

                                <p class="form-row form-row-last">
                                    <button type="submit" class="button" name="apply_coupon"
                                        value="Apply coupon">Apply coupon</button>
                                </p>

                                <div class="clear"></div>
                            </form>

                            <form name="checkout" class="checkout woocommerce-checkout"
                                action="/" enctype="multipart/form-data"
                                novalidate="novalidate">



                                <div class="col2-set clearfix" id="customer_details">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">

                                            <h3>Billing details</h3>



                                            <div class="woocommerce-billing-fields__field-wrapper">
                                                <p class="form-row form-row-first validate-required"
                                                    id="billing_first_name_field" data-priority="10"><label
                                                        for="billing_first_name" class="">First
                                                        name&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_first_name"
                                                            id="billing_first_name" placeholder="" value=""
                                                            autocomplete="given-name"></span></p>
                                                <p class="form-row form-row-last validate-required"
                                                    id="billing_last_name_field" data-priority="20"><label
                                                        for="billing_last_name" class="">Last name&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_last_name"
                                                            id="billing_last_name" placeholder="" value=""
                                                            autocomplete="family-name"></span></p>
                                                <p class="form-row form-row-wide" id="billing_company_field"
                                                    data-priority="30"><label for="billing_company"
                                                        class="">Company name&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_company"
                                                            id="billing_company" placeholder="" value=""
                                                            autocomplete="organization"></span></p>
                                                <p class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated"
                                                    id="billing_country_field" data-priority="40"><label
                                                        for="billing_country" class="">Country&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><select name="billing_country"
                                                            id="billing_country"
                                                            class="country_to_state country_select select2-hidden-accessible"
                                                            autocomplete="country" tabindex="-1" aria-hidden="true">
                                                            <option value="">Select a country…</option>
                                                            <option value="AX">Åland Islands</option>
                                                            <option value="AF">Afghanistan</option>
                                                            <option value="AL">Albania</option>
                                                            <option value="DZ">Algeria</option>
                                                            <option value="AS">American Samoa</option>
                                                            <option value="AD">Andorra</option>
                                                            <option value="AO">Angola</option>
                                                            <option value="AI">Anguilla</option>
                                                            <option value="AQ">Antarctica</option>
                                                            <option value="AG">Antigua and Barbuda</option>
                                                            <option value="AR">Argentina</option>
                                                            <option value="AM">Armenia</option>
                                                            <option value="AW">Aruba</option>
                                                            <option value="AU">Australia</option>
                                                            <option value="AT">Austria</option>
                                                            <option value="AZ">Azerbaijan</option>
                                                            <option value="BS">Bahamas</option>
                                                            <option value="BH">Bahrain</option>
                                                            <option value="BD">Bangladesh</option>
                                                            <option value="BB">Barbados</option>
                                                            <option value="BY">Belarus</option>
                                                            <option value="PW">Belau</option>
                                                            <option value="BE">Belgium</option>
                                                            <option value="BZ">Belize</option>
                                                            <option value="BJ">Benin</option>
                                                            <option value="BM">Bermuda</option>
                                                            <option value="BT">Bhutan</option>
                                                            <option value="BO">Bolivia</option>
                                                            <option value="BQ">Bonaire, Saint Eustatius and Saba</option>
                                                            <option value="BA">Bosnia and Herzegovina</option>
                                                            <option value="BW">Botswana</option>
                                                            <option value="BV">Bouvet Island</option>
                                                            <option value="BR">Brazil</option>
                                                            <option value="IO">British Indian Ocean Territory</option>
                                                            <option value="VG">British Virgin Islands</option>
                                                            <option value="BN">Brunei</option>
                                                            <option value="BG">Bulgaria</option>
                                                            <option value="BF">Burkina Faso</option>
                                                            <option value="BI">Burundi</option>
                                                            <option value="KH">Cambodia</option>
                                                            <option value="CM">Cameroon</option>
                                                            <option value="CA">Canada</option>
                                                            <option value="CV">Cape Verde</option>
                                                            <option value="KY">Cayman Islands</option>
                                                            <option value="CF">Central African Republic</option>
                                                            <option value="TD">Chad</option>
                                                            <option value="CL">Chile</option>
                                                            <option value="CN">China</option>
                                                            <option value="CX">Christmas Island</option>
                                                            <option value="CC">Cocos (Keeling) Islands</option>
                                                            <option value="CO">Colombia</option>
                                                            <option value="KM">Comoros</option>
                                                            <option value="CG">Congo (Brazzaville)</option>
                                                            <option value="CD">Congo (Kinshasa)</option>
                                                            <option value="CK">Cook Islands</option>
                                                            <option value="CR">Costa Rica</option>
                                                            <option value="HR">Croatia</option>
                                                            <option value="CU">Cuba</option>
                                                            <option value="CW">Curaçao</option>
                                                            <option value="CY">Cyprus</option>
                                                            <option value="CZ">Czech Republic</option>
                                                            <option value="DK">Denmark</option>
                                                            <option value="DJ">Djibouti</option>
                                                            <option value="DM">Dominica</option>
                                                            <option value="DO">Dominican Republic</option>
                                                            <option value="EC">Ecuador</option>
                                                            <option value="EG">Egypt</option>
                                                            <option value="SV">El Salvador</option>
                                                            <option value="GQ">Equatorial Guinea</option>
                                                            <option value="ER">Eritrea</option>
                                                            <option value="EE">Estonia</option>
                                                            <option value="ET">Ethiopia</option>
                                                            <option value="FK">Falkland Islands</option>
                                                            <option value="FO">Faroe Islands</option>
                                                            <option value="FJ">Fiji</option>
                                                            <option value="FI">Finland</option>
                                                            <option value="FR">France</option>
                                                            <option value="GF">French Guiana</option>
                                                            <option value="PF">French Polynesia</option>
                                                            <option value="TF">French Southern Territories</option>
                                                            <option value="GA">Gabon</option>
                                                            <option value="GM">Gambia</option>
                                                            <option value="GE">Georgia</option>
                                                            <option value="DE">Germany</option>
                                                            <option value="GH">Ghana</option>
                                                            <option value="GI">Gibraltar</option>
                                                            <option value="GR">Greece</option>
                                                            <option value="GL">Greenland</option>
                                                            <option value="GD">Grenada</option>
                                                            <option value="GP">Guadeloupe</option>
                                                            <option value="GU">Guam</option>
                                                            <option value="GT">Guatemala</option>
                                                            <option value="GG">Guernsey</option>
                                                            <option value="GN">Guinea</option>
                                                            <option value="GW">Guinea-Bissau</option>
                                                            <option value="GY">Guyana</option>
                                                            <option value="HT">Haiti</option>
                                                            <option value="HM">Heard Island and McDonald Islands</option>
                                                            <option value="HN">Honduras</option>
                                                            <option value="HK">Hong Kong</option>
                                                            <option value="HU">Hungary</option>
                                                            <option value="IS">Iceland</option>
                                                            <option value="IN">India</option>
                                                            <option value="ID">Indonesia</option>
                                                            <option value="IR">Iran</option>
                                                            <option value="IQ">Iraq</option>
                                                            <option value="IE">Ireland</option>
                                                            <option value="IM">Isle of Man</option>
                                                            <option value="IL">Israel</option>
                                                            <option value="IT">Italy</option>
                                                            <option value="CI">Ivory Coast</option>
                                                            <option value="JM">Jamaica</option>
                                                            <option value="JP">Japan</option>
                                                            <option value="JE">Jersey</option>
                                                            <option value="JO">Jordan</option>
                                                            <option value="KZ">Kazakhstan</option>
                                                            <option value="KE">Kenya</option>
                                                            <option value="KI">Kiribati</option>
                                                            <option value="KW">Kuwait</option>
                                                            <option value="KG">Kyrgyzstan</option>
                                                            <option value="LA">Laos</option>
                                                            <option value="LV">Latvia</option>
                                                            <option value="LB">Lebanon</option>
                                                            <option value="LS">Lesotho</option>
                                                            <option value="LR">Liberia</option>
                                                            <option value="LY">Libya</option>
                                                            <option value="LI">Liechtenstein</option>
                                                            <option value="LT">Lithuania</option>
                                                            <option value="LU">Luxembourg</option>
                                                            <option value="MO">Macao S.A.R., China</option>
                                                            <option value="MK">Macedonia</option>
                                                            <option value="MG">Madagascar</option>
                                                            <option value="MW">Malawi</option>
                                                            <option value="MY">Malaysia</option>
                                                            <option value="MV">Maldives</option>
                                                            <option value="ML">Mali</option>
                                                            <option value="MT">Malta</option>
                                                            <option value="MH">Marshall Islands</option>
                                                            <option value="MQ">Martinique</option>
                                                            <option value="MR">Mauritania</option>
                                                            <option value="MU">Mauritius</option>
                                                            <option value="YT">Mayotte</option>
                                                            <option value="MX">Mexico</option>
                                                            <option value="FM">Micronesia</option>
                                                            <option value="MD">Moldova</option>
                                                            <option value="MC">Monaco</option>
                                                            <option value="MN">Mongolia</option>
                                                            <option value="ME">Montenegro</option>
                                                            <option value="MS">Montserrat</option>
                                                            <option value="MA">Morocco</option>
                                                            <option value="MZ">Mozambique</option>
                                                            <option value="MM">Myanmar</option>
                                                            <option value="NA">Namibia</option>
                                                            <option value="NR">Nauru</option>
                                                            <option value="NP">Nepal</option>
                                                            <option value="NL">Netherlands</option>
                                                            <option value="NC">New Caledonia</option>
                                                            <option value="NZ">New Zealand</option>
                                                            <option value="NI">Nicaragua</option>
                                                            <option value="NE">Niger</option>
                                                            <option value="NG">Nigeria</option>
                                                            <option value="NU">Niue</option>
                                                            <option value="NF">Norfolk Island</option>
                                                            <option value="KP">North Korea</option>
                                                            <option value="MP">Northern Mariana Islands</option>
                                                            <option value="NO">Norway</option>
                                                            <option value="OM">Oman</option>
                                                            <option value="PK">Pakistan</option>
                                                            <option value="PS">Palestinian Territory</option>
                                                            <option value="PA">Panama</option>
                                                            <option value="PG">Papua New Guinea</option>
                                                            <option value="PY">Paraguay</option>
                                                            <option value="PE">Peru</option>
                                                            <option value="PH">Philippines</option>
                                                            <option value="PN">Pitcairn</option>
                                                            <option value="PL">Poland</option>
                                                            <option value="PT">Portugal</option>
                                                            <option value="PR">Puerto Rico</option>
                                                            <option value="QA">Qatar</option>
                                                            <option value="RE">Reunion</option>
                                                            <option value="RO">Romania</option>
                                                            <option value="RU">Russia</option>
                                                            <option value="RW">Rwanda</option>
                                                            <option value="ST">São Tomé and Príncipe</option>
                                                            <option value="BL">Saint Barthélemy</option>
                                                            <option value="SH">Saint Helena</option>
                                                            <option value="KN">Saint Kitts and Nevis</option>
                                                            <option value="LC">Saint Lucia</option>
                                                            <option value="SX">Saint Martin (Dutch part)</option>
                                                            <option value="MF">Saint Martin (French part)</option>
                                                            <option value="PM">Saint Pierre and Miquelon</option>
                                                            <option value="VC">Saint Vincent and the Grenadines</option>
                                                            <option value="WS">Samoa</option>
                                                            <option value="SM">San Marino</option>
                                                            <option value="SA">Saudi Arabia</option>
                                                            <option value="SN">Senegal</option>
                                                            <option value="RS">Serbia</option>
                                                            <option value="SC">Seychelles</option>
                                                            <option value="SL">Sierra Leone</option>
                                                            <option value="SG">Singapore</option>
                                                            <option value="SK">Slovakia</option>
                                                            <option value="SI">Slovenia</option>
                                                            <option value="SB">Solomon Islands</option>
                                                            <option value="SO">Somalia</option>
                                                            <option value="ZA">South Africa</option>
                                                            <option value="GS">South Georgia/Sandwich Islands</option>
                                                            <option value="KR">South Korea</option>
                                                            <option value="SS">South Sudan</option>
                                                            <option value="ES">Spain</option>
                                                            <option value="LK">Sri Lanka</option>
                                                            <option value="SD">Sudan</option>
                                                            <option value="SR">Suriname</option>
                                                            <option value="SJ">Svalbard and Jan Mayen</option>
                                                            <option value="SZ">Swaziland</option>
                                                            <option value="SE">Sweden</option>
                                                            <option value="CH">Switzerland</option>
                                                            <option value="SY">Syria</option>
                                                            <option value="TW">Taiwan</option>
                                                            <option value="TJ">Tajikistan</option>
                                                            <option value="TZ">Tanzania</option>
                                                            <option value="TH">Thailand</option>
                                                            <option value="TL">Timor-Leste</option>
                                                            <option value="TG">Togo</option>
                                                            <option value="TK">Tokelau</option>
                                                            <option value="TO">Tonga</option>
                                                            <option value="TT">Trinidad and Tobago</option>
                                                            <option value="TN">Tunisia</option>
                                                            <option value="TR">Turkey</option>
                                                            <option value="TM">Turkmenistan</option>
                                                            <option value="TC">Turks and Caicos Islands</option>
                                                            <option value="TV">Tuvalu</option>
                                                            <option value="UG">Uganda</option>
                                                            <option value="UA">Ukraine</option>
                                                            <option value="AE">United Arab Emirates</option>
                                                            <option value="GB">United Kingdom (UK)</option>
                                                            <option value="US" selected="selected">United States (US)
                                                            </option>
                                                            <option value="UM">United States (US) Minor Outlying Islands
                                                            </option>
                                                            <option value="VI">United States (US) Virgin Islands</option>
                                                            <option value="UY">Uruguay</option>
                                                            <option value="UZ">Uzbekistan</option>
                                                            <option value="VU">Vanuatu</option>
                                                            <option value="VA">Vatican</option>
                                                            <option value="VE">Venezuela</option>
                                                            <option value="VN">Vietnam</option>
                                                            <option value="WF">Wallis and Futuna</option>
                                                            <option value="EH">Western Sahara</option>
                                                            <option value="YE">Yemen</option>
                                                            <option value="ZM">Zambia</option>
                                                            <option value="ZW">Zimbabwe</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-billing_country-container"
                                                                    role="combobox"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-billing_country-container"
                                                                        role="textbox" aria-readonly="true"
                                                                        title="United States (US)">United States
                                                                        (US)</span><span class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span><noscript><button
                                                                type="submit" name="woocommerce_checkout_update_totals"
                                                                value="Update country">Update
                                                                country</button></noscript></span></p>
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="billing_address_1_field" data-priority="50"><label
                                                        for="billing_address_1" class="">Street
                                                        address&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_address_1"
                                                            id="billing_address_1"
                                                            placeholder="House number and street name" value=""
                                                            autocomplete="address-line1"></span></p>
                                                <p class="form-row form-row-wide address-field" id="billing_address_2_field"
                                                    data-priority="60"><span class="woocommerce-input-wrapper"><input
                                                            type="text" class="input-text " name="billing_address_2"
                                                            id="billing_address_2"
                                                            placeholder="Apartment, suite, unit etc. (optional)" value=""
                                                            autocomplete="address-line2"></span></p>
                                                <p class="form-row form-row-wide address-field validate-required"
                                                    id="billing_city_field" data-priority="70"
                                                    data-o_class="form-row form-row-wide address-field validate-required">
                                                    <label for="billing_city" class="">Town / City&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_city" id="billing_city"
                                                            placeholder="" value="" autocomplete="address-level2"></span>
                                                </p>
                                                <p class="form-row form-row-wide address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field"
                                                    id="billing_state_field" data-priority="80"
                                                    data-o_class="form-row form-row-wide address-field validate-required validate-state woocommerce-invalid woocommerce-invalid-required-field">
                                                    <label for="billing_state" class="">State&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><select name="billing_state"
                                                            id="billing_state"
                                                            class="state_select select2-hidden-accessible"
                                                            autocomplete="address-level1" data-placeholder="" tabindex="-1"
                                                            aria-hidden="true">
                                                            <option value="">Select an option…</option>
                                                            <option value="AL">Alabama</option>
                                                            <option value="AK">Alaska</option>
                                                            <option value="AZ">Arizona</option>
                                                            <option value="AR">Arkansas</option>
                                                            <option value="CA">California</option>
                                                            <option value="CO">Colorado</option>
                                                            <option value="CT">Connecticut</option>
                                                            <option value="DE">Delaware</option>
                                                            <option value="DC">District Of Columbia</option>
                                                            <option value="FL">Florida</option>
                                                            <option value="GA">Georgia</option>
                                                            <option value="HI">Hawaii</option>
                                                            <option value="ID">Idaho</option>
                                                            <option value="IL">Illinois</option>
                                                            <option value="IN">Indiana</option>
                                                            <option value="IA">Iowa</option>
                                                            <option value="KS">Kansas</option>
                                                            <option value="KY">Kentucky</option>
                                                            <option value="LA">Louisiana</option>
                                                            <option value="ME">Maine</option>
                                                            <option value="MD">Maryland</option>
                                                            <option value="MA">Massachusetts</option>
                                                            <option value="MI">Michigan</option>
                                                            <option value="MN">Minnesota</option>
                                                            <option value="MS">Mississippi</option>
                                                            <option value="MO">Missouri</option>
                                                            <option value="MT">Montana</option>
                                                            <option value="NE">Nebraska</option>
                                                            <option value="NV">Nevada</option>
                                                            <option value="NH">New Hampshire</option>
                                                            <option value="NJ">New Jersey</option>
                                                            <option value="NM">New Mexico</option>
                                                            <option value="NY">New York</option>
                                                            <option value="NC">North Carolina</option>
                                                            <option value="ND">North Dakota</option>
                                                            <option value="OH">Ohio</option>
                                                            <option value="OK">Oklahoma</option>
                                                            <option value="OR">Oregon</option>
                                                            <option value="PA">Pennsylvania</option>
                                                            <option value="RI">Rhode Island</option>
                                                            <option value="SC">South Carolina</option>
                                                            <option value="SD">South Dakota</option>
                                                            <option value="TN">Tennessee</option>
                                                            <option value="TX">Texas</option>
                                                            <option value="UT">Utah</option>
                                                            <option value="VT">Vermont</option>
                                                            <option value="VA">Virginia</option>
                                                            <option value="WA">Washington</option>
                                                            <option value="WV">West Virginia</option>
                                                            <option value="WI">Wisconsin</option>
                                                            <option value="WY">Wyoming</option>
                                                            <option value="AA">Armed Forces (AA)</option>
                                                            <option value="AE">Armed Forces (AE)</option>
                                                            <option value="AP">Armed Forces (AP)</option>
                                                        </select><span
                                                            class="select2 select2-container select2-container--default"
                                                            dir="ltr" style="width: 100%;"><span
                                                                class="selection"><span
                                                                    class="select2-selection select2-selection--single"
                                                                    aria-haspopup="true" aria-expanded="false" tabindex="0"
                                                                    aria-labelledby="select2-billing_state-container"
                                                                    role="combobox"><span
                                                                        class="select2-selection__rendered"
                                                                        id="select2-billing_state-container" role="textbox"
                                                                        aria-readonly="true"><span
                                                                            class="select2-selection__placeholder"></span></span><span
                                                                        class="select2-selection__arrow"
                                                                        role="presentation"><b
                                                                            role="presentation"></b></span></span></span><span
                                                                class="dropdown-wrapper"
                                                                aria-hidden="true"></span></span></span></p>
                                                <p class="form-row form-row-wide address-field validate-required validate-postcode"
                                                    id="billing_postcode_field" data-priority="90"
                                                    data-o_class="form-row form-row-wide address-field validate-required validate-postcode">
                                                    <label for="billing_postcode" class="">ZIP&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="text"
                                                            class="input-text " name="billing_postcode"
                                                            id="billing_postcode" placeholder="" value=""
                                                            autocomplete="postal-code"></span></p>
                                                <p class="form-row form-row-wide validate-required validate-phone"
                                                    id="billing_phone_field" data-priority="100"><label for="billing_phone"
                                                        class="">Phone&nbsp;<abbr class="required"
                                                            title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="tel"
                                                            class="input-text " name="billing_phone" id="billing_phone"
                                                            placeholder="" value="" autocomplete="tel"></span></p>
                                                <p class="form-row form-row-wide validate-required validate-email"
                                                    id="billing_email_field" data-priority="110"><label for="billing_email"
                                                        class="">Email address&nbsp;<abbr
                                                            class="required" title="required">*</abbr></label><span
                                                        class="woocommerce-input-wrapper"><input type="email"
                                                            class="input-text " name="billing_email" id="billing_email"
                                                            placeholder="" value="" autocomplete="email username"></span>
                                                </p>
                                            </div>

                                        </div>

                                    </div>

                                    <div class="col-2">
                                        <div class="woocommerce-shipping-fields">
                                        </div>
                                        <div class="woocommerce-additional-fields">



                                            <h3>Additional information</h3>


                                            <div class="woocommerce-additional-fields__field-wrapper">
                                                <p class="form-row notes" id="order_comments_field" data-priority=""><label
                                                        for="order_comments" class="">Order notes&nbsp;<span
                                                            class="optional">(optional)</span></label><span
                                                        class="woocommerce-input-wrapper"><textarea name="order_comments"
                                                            class="input-text " id="order_comments"
                                                            placeholder="Notes about your order, e.g. special notes for delivery."
                                                            rows="2" cols="5"></textarea></span></p>
                                            </div>


                                        </div>
                                    </div>
                                </div>


                                <h3 id="order_review_heading">Your order</h3>



                                <div id="order_review" class="woocommerce-checkout-review-order">
                                    <table class="shop_table woocommerce-checkout-review-order-table">
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    Happy Ninja&nbsp; <strong class="product-quantity">× 1</strong> </td>
                                                <td class="product-total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">AED </span>18.00</span>
                                                </td>
                                            </tr>
                                        </tbody>
                                        <tfoot>

                                            <tr class="cart-subtotal">
                                                <th>Subtotal</th>
                                                <td><span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">AED </span>18.00</span>
                                                </td>
                                            </tr>






                                            <tr class="order-total">
                                                <th>Total</th>
                                                <td><strong><span class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol">AED </span>18.00</span></strong>
                                                </td>
                                            </tr>


                                        </tfoot>
                                    </table>

                                    <div id="payment" class="woocommerce-checkout-payment">
                                        <ul class="wc_payment_methods payment_methods methods">
                                            <li class="wc_payment_method payment_method_ppec_paypal">
                                                <input id="payment_method_ppec_paypal" type="radio" class="input-radio"
                                                    name="payment_method" value="ppec_paypal" checked="checked"
                                                    data-order_button_text="Continue to payment" style="display: none;">

                                                <label for="payment_method_ppec_paypal">
                                                    PayPal <img
                                                        src="https://www.paypalobjects.com/webstatic/en_US/i/buttons/pp-acceptance-small.png"
                                                        alt="PayPal"> </label>
                                                <div class="payment_box payment_method_ppec_paypal">
                                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a
                                                        PayPal account.</p>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="form-row place-order clearfix">
                                            <noscript>
                                                Since your browser does not support JavaScript, or it is disabled, please
                                                ensure you click the &lt;em&gt;Update Totals&lt;/em&gt; button before
                                                placing your order. You may be charged more than the amount stated above if
                                                you fail to do so. <br /><input type="submit" class="button alt"
                                                    name="woocommerce_checkout_update_totals" value="Update totals" />
                                            </noscript>

                                            <div class="woocommerce-terms-and-conditions-wrapper">
                                                <div class="woocommerce-privacy-policy-text"></div>
                                            </div>


                                            <input type="submit" class="button alt"
                                                name="woocommerce_checkout_place_order" id="place_order" value="Place order"
                                                data-value="Place order">

                                            <input type="hidden" id="_wpnonce" name="_wpnonce" value="606689a6de"><input
                                                type="hidden" name="_wp_http_referer"
                                                value="/carshire/?wc-ajax=update_order_review">
                                        </div>
                                    </div>

                                </div>


                            </form>

                        </div>



                        <div itemscope="" itemtype="https://schema.org/Comment" id="comments"
                            class="post-comments comment-area clearfix">


                            <!-- Comment Form -->

                            <div class="comment-form wow fadeInUp animated" data-wow-delay="200ms"
                                data-wow-duration="1500ms"
                                style="visibility: visible; animation-duration: 1500ms; animation-delay: 200ms; animation-name: fadeInUp;">

                                <!-- Heading -->




                            </div>

                        </div><!-- #comments -->

                        <!-- end comments -->



                        <!-- Pagination -->

                    </section>

                    <!-- sidebar area -->


                    <!-- sidebar area -->


                    <!-- sidebar area -->

                </div>

            </div>

        </div>

        <!--Contact Options-->
        <section class="contact-options">

        </section>

        <!--Main Footer-->
        <footer class="main-footer">
            <!--Footer Upper-->



            <!--Footer Bottom-->

        </footer>
    </div>

@endsection
