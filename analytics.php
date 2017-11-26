<?php
/**
 * Created by PhpStorm.
 * User: Stephen
 * Date: 2017-11-26
 * Time: 3:28 AM
 */

    require_once('php/GenerateQuery.php');
    $array = GenerateQuery::Search();
    //$array = GenerateQuery::DisplayQuery();
    
?>

<html lang="en">
  <head>
    <title>ResourceMe</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="/images/favicon.png">
      
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    
    <link href="/css/spacing.css" rel="stylesheet">
      
  </head>
    
  <body onload="analytics_onload()" style="background: linear-gradient(141deg, #0fb8ad 0%, #1fc8db 51%, #2cb5e8 75%);">
    <header class="masthead clearfix">
      <div class="navbar navbar-dark bg-dark">
        <div class="container d-flex justify-content-between">
            <a href="/index.php" class="navbar-brand"><!--<img src="images/logo.png" style="height:45px;">--><b>Resource</b>Me</a>
            <div class="inner">
              <nav class="nav nav-masthead">
                <a class="nav-link" href="/index.php">Home</a>
                <a class="nav-link" href="" data-toggle="modal" data-target="#SignInModal">Profile</a>
                <a class="nav-link active" href="#">Analytics</a>
              </nav>
            </div>
        </div>
      </div>
    </header>

    <main role="main" >

        <div class = "container">
        
        <nav aria-label="breadcrumb" role="navigation">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/index.php">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Analytics</li>
            </ol>
        </nav>  
        </div>
        
        <div class="container">
            <h1>Refugee Movements</h1>
            <P>We've compiled general statistics about the current refugee situation worldwide, based off of real-time information.</P>
            <div class="album container" style="padding-top: 3rem; padding-bottom: 3rem; padding-left: 3rem; padding-right: 3rem">
                <h4>Filters</h4><hr>
                <form action="analytics.php" method="post">
                    <div class="row">
                        <div class="form-group col">
                <label for="inputSex1">Sex</label>
                <select type="text" class="form-control" id="inputSex" name="sexSearch">
                    <option selected></option>
                    <option>Male</option>
                    <option>Female</option>
                    <option>Other</option>
                </select>
            </div>
                <div class="form-group col-md-2">
      <label for="inputZip">Marital Status</label>
      <select type="text" class="form-control" id="inputMarital" name="maritalStatusSearch">
          <option></option>
        <option>Single</option>
          <option>Married</option>
          <option>Common-law Partnership</option>
          <option>Widowed</option>
          <option>Divorced</option>
          <option>Seperated</option>
                    </select>
      </div>
                <div class="form-group col-md-3" style="justify-content: center;">
      <label for="inputZip">Education Level</label>
        <select type="text" class="form-control" id="inputEducation" name="educationSearch">
            <option></option>
            <option>None</option>
            <option>Elementary School</option>
            <option>Secondary School</option>
            <option>College/Diploma</option>
            <option>Undergraduate Degree</option>
            <option>Post-graduate Degree</option>
        </select>
      </div>
                    
                    
                     <div class="form-group col-md-3">
      <label for="filterCountry">Country of Origin</label>
      <select id="filterCountry" class="form-control" name="countryOGSearch">
          <option> </option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
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
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia, Plurinational State of</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
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
            <option value="CG">Congo</option>
            <option value="CD">Congo, the Democratic Republic of the</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Côte d'Ivoire</option>
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
            <option value="FK">Falkland Islands (Malvinas)</option>
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
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
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
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
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
            <option value="RE">Réunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin (French part)</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten (Dutch part)</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
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
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela, Bolivarian Republic of</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.S.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
</select>
    </div>
                        
        <div class="form-group col-md-3">
      <label for="filterCountry">Country of Birth</label>
      <select id="filterCountry" class="form-control" name="countryBirthSearch">
          <option> </option>
            <option value="AF">Afghanistan</option>
            <option value="AX">Åland Islands</option>
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
            <option value="BE">Belgium</option>
            <option value="BZ">Belize</option>
            <option value="BJ">Benin</option>
            <option value="BM">Bermuda</option>
            <option value="BT">Bhutan</option>
            <option value="BO">Bolivia, Plurinational State of</option>
            <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
            <option value="BA">Bosnia and Herzegovina</option>
            <option value="BW">Botswana</option>
            <option value="BV">Bouvet Island</option>
            <option value="BR">Brazil</option>
            <option value="IO">British Indian Ocean Territory</option>
            <option value="BN">Brunei Darussalam</option>
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
            <option value="CG">Congo</option>
            <option value="CD">Congo, the Democratic Republic of the</option>
            <option value="CK">Cook Islands</option>
            <option value="CR">Costa Rica</option>
            <option value="CI">Côte d'Ivoire</option>
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
            <option value="FK">Falkland Islands (Malvinas)</option>
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
            <option value="VA">Holy See (Vatican City State)</option>
            <option value="HN">Honduras</option>
            <option value="HK">Hong Kong</option>
            <option value="HU">Hungary</option>
            <option value="IS">Iceland</option>
            <option value="IN">India</option>
            <option value="ID">Indonesia</option>
            <option value="IR">Iran, Islamic Republic of</option>
            <option value="IQ">Iraq</option>
            <option value="IE">Ireland</option>
            <option value="IM">Isle of Man</option>
            <option value="IL">Israel</option>
            <option value="IT">Italy</option>
            <option value="JM">Jamaica</option>
            <option value="JP">Japan</option>
            <option value="JE">Jersey</option>
            <option value="JO">Jordan</option>
            <option value="KZ">Kazakhstan</option>
            <option value="KE">Kenya</option>
            <option value="KI">Kiribati</option>
            <option value="KP">Korea, Democratic People's Republic of</option>
            <option value="KR">Korea, Republic of</option>
            <option value="KW">Kuwait</option>
            <option value="KG">Kyrgyzstan</option>
            <option value="LA">Lao People's Democratic Republic</option>
            <option value="LV">Latvia</option>
            <option value="LB">Lebanon</option>
            <option value="LS">Lesotho</option>
            <option value="LR">Liberia</option>
            <option value="LY">Libya</option>
            <option value="LI">Liechtenstein</option>
            <option value="LT">Lithuania</option>
            <option value="LU">Luxembourg</option>
            <option value="MO">Macao</option>
            <option value="MK">Macedonia, the former Yugoslav Republic of</option>
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
            <option value="FM">Micronesia, Federated States of</option>
            <option value="MD">Moldova, Republic of</option>
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
            <option value="MP">Northern Mariana Islands</option>
            <option value="NO">Norway</option>
            <option value="OM">Oman</option>
            <option value="PK">Pakistan</option>
            <option value="PW">Palau</option>
            <option value="PS">Palestinian Territory, Occupied</option>
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
            <option value="RE">Réunion</option>
            <option value="RO">Romania</option>
            <option value="RU">Russian Federation</option>
            <option value="RW">Rwanda</option>
            <option value="BL">Saint Barthélemy</option>
            <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
            <option value="KN">Saint Kitts and Nevis</option>
            <option value="LC">Saint Lucia</option>
            <option value="MF">Saint Martin (French part)</option>
            <option value="PM">Saint Pierre and Miquelon</option>
            <option value="VC">Saint Vincent and the Grenadines</option>
            <option value="WS">Samoa</option>
            <option value="SM">San Marino</option>
            <option value="ST">Sao Tome and Principe</option>
            <option value="SA">Saudi Arabia</option>
            <option value="SN">Senegal</option>
            <option value="RS">Serbia</option>
            <option value="SC">Seychelles</option>
            <option value="SL">Sierra Leone</option>
            <option value="SG">Singapore</option>
            <option value="SX">Sint Maarten (Dutch part)</option>
            <option value="SK">Slovakia</option>
            <option value="SI">Slovenia</option>
            <option value="SB">Solomon Islands</option>
            <option value="SO">Somalia</option>
            <option value="ZA">South Africa</option>
            <option value="GS">South Georgia and the South Sandwich Islands</option>
            <option value="SS">South Sudan</option>
            <option value="ES">Spain</option>
            <option value="LK">Sri Lanka</option>
            <option value="SD">Sudan</option>
            <option value="SR">Suriname</option>
            <option value="SJ">Svalbard and Jan Mayen</option>
            <option value="SZ">Swaziland</option>
            <option value="SE">Sweden</option>
            <option value="CH">Switzerland</option>
            <option value="SY">Syrian Arab Republic</option>
            <option value="TW">Taiwan</option>
            <option value="TJ">Tajikistan</option>
            <option value="TZ">Tanzania, United Republic of</option>
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
            <option value="GB">United Kingdom</option>
            <option value="US">United States</option>
            <option value="UM">United States Minor Outlying Islands</option>
            <option value="UY">Uruguay</option>
            <option value="UZ">Uzbekistan</option>
            <option value="VU">Vanuatu</option>
            <option value="VE">Venezuela, Bolivarian Republic of</option>
            <option value="VN">Viet Nam</option>
            <option value="VG">Virgin Islands, British</option>
            <option value="VI">Virgin Islands, U.S.</option>
            <option value="WF">Wallis and Futuna</option>
            <option value="EH">Western Sahara</option>
            <option value="YE">Yemen</option>
            <option value="ZM">Zambia</option>
            <option value="ZW">Zimbabwe</option>
</select>
    </div>
                    </div>
                    <div class="row">
                    
                        <div class="form-check">
  <label class="form-check-label">
    <input class="form-check-input" type="checkbox" value="" name="specialNeedsSearch">Special Needs
  </label>
</div>          
                    
                    
                        
                    </div>
            
           <button type="submit" class="btn btn-primary">Search</button>
                    <button type="button" class="btn btn-outline-primary">Last Updated</button>
            <button type="button" class="btn btn-outline-primary">Last Login</button>
                    
                    
                    <button type="button" class="btn btn-info" data-toggle="modal" data-target=".bd-example-modal-sm">Notify <span class="badge badge-light">4</span></button>

<div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content container">
      <p><br>Notifications sent.</p>
    </div>
  </div>
</div>
                
                </form>
                
            <h4>Results</h4><hr>
                
                <table class="table table-sm table-hover">
                <thead>
                    <tr>
                        <th scope="col">Given Names</th>
                        <th scope="col">Family Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Sex</th>
                        <th scope="col">Marital Status</th>
                        <th scope="col">Education</th>
                        <th scope="col">Needs</th>
                        <th scope="col">Country of Origin</th>
                        <th scope="col">Current Country</th>
                    </tr>    
                </thead>
                    <div id="dataTable"></div>  
                </table>        
        
              
            </div>
            </div>
        
        
    <!-- Modal -->
    <div class="modal fade" id="SignInModal" tabindex="-1" role="dialog" aria-labelledby="SignInModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="SignInModalLabel">Sign In</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="login.php" method="post">
                  <div class="form-group">
                    <label for="inputUser">Username</label>
                    <input type="text" class="form-control" id="inputUser" placeholder="Enter username" name="username">
                  </div>
                  <div class="form-group">
                    <label for="inputPassword">Password</label>
                    <input type="password" class="form-control" id="inputPassword" placeholder="Enter password" name="password">
                  </div>
                  <button type="submit" class="btn btn-primary">Sign In</button>
                </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
        
        <!-- Modal -->
<div class="modal fade" id="govModal" tabindex="-1" role="dialog" aria-labelledby="govModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="govModalLabel">NGO / Government / UNHCR Verification</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Please authenticate your credentials as an authorized NGO, government, or UNHCR officer. 
      </div>
      <div class="modal-footer">
        <a class="btn btn-secondary" href="/index.php">Close</a>
        <button type="button" class="btn btn-success" data-dismiss="modal">Confirm</button>
      </div>
    </div>
  </div>
</div>
        

    </main>

    <footer class="text-muted" style="background-color: #f7f7f7">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p><b>Resource</b>Me | BlocHacks 2017 | The Refugee Centre @ Concordia University </p>
      </div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
      
    
    <script>
        
    function analytics_onload(){
        $('#govModal').modal("show")      
        
     var js_array = JSON.parse( '<?php echo json_encode($array) ?>');
        
    var html = "<tbody>";
    for (var i = 0; i < js_array.length; i++) {
        html+="<tr>";
        for(var j =0; j < 10; j++){
            html+="<td>"+js_array[i].[j]+"</td>";
        }
        html+="</tr>";

        }
        html+="</tbody>";
        document.getElementById("dataTable").innerHTML = html;
    }
    </script>
      
      
  </body>
</html>
