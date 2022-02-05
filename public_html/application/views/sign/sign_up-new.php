
<!DOCTYPE html>
<html lang="en" >
    <head>
    	<base href="">
            <meta charset="utf-8"/>
	        <title><?php echo $title;?></title>
	        <meta name="description" content=""/>
            <link rel="icon" href="/assets/img/core-img/favicon.ico">
	        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>

	        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700"/>        <!--end::Fonts-->
            <link href="/assets/login/css/login-3.css" rel="stylesheet" type="text/css"/>
            <link href="/assets/login/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css"/>
            <link href="/assets/login/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css"/>
            <link href="/assets/login/css/style.bundle.css" rel="stylesheet" type="text/css"/>
	        
        </head>
	<body  id="kt_body" style="background-image: url(/assets/login/media/bg/bg-10.jpg)"  class="quick-panel-right demo-panel-right offcanvas-right header-fixed subheader-enabled page-loading"  >
	

	<div class="d-flex flex-column flex-root">
				<!--begin::Login-->
		<div class="login login-3 login-signin-on d-flex flex-row-fluid" id="kt_login">
			<div class="d-flex flex-center bgi-size-cover bgi-no-repeat flex-row-fluid" style="background-image: url(/assets/login/media/bg/bg-1.jpg);">
				<div class="login-form text-center text-white p-7 position-relative overflow-hidden">
					<!--begin::Login Header-->
					<div class="d-flex flex-center mb-15">
						<a href="/" class="mainNav_logo_link" aria-label="Back to homepage">
                        	<img src="/assets/img/sign.png" style="height:75px;padding:5px;" alt="Monkey">
                    	</a>
					</div>
					<!--end::Login Header-->

					<!--begin::Login Sign in form-->
					<div class="login-signin">
						<div class="mb-20">
							<h3><?php echo $this->lang->line('signup'); ?></h3>
							<p class="opacity-60 font-weight-bold"><?php echo $this->lang->line('top_t'); ?></p>		

						</div>
						     <div class="sign_up_form" id="main_infodiv">                        
                                <div class="row">
                                    <div class=" col-6">
                                        <div class="form-group">
                                            <input type="text" id="id_first_name" placeholder="<?php echo $this->lang->line('firstn'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="30">
                                        </div>
                                    </div>
                                    <div class=" col-6">
                                        <div class="form-group">
                                            <input type="text" id="id_last_name" placeholder="<?php echo $this->lang->line('lastn'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="30">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="id_borned_on" class="text-white"><?php echo $this->lang->line('birth'); ?></label>
                                    <div class="row row-selectDate">
                                        <div class="col-3">
                                            <select name="borned_on_day" id="id_borned_on_day" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5">
                                                <option value="0">---</option>
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                                <option value="7">7</option>
                                                <option value="8">8</option>
                                                <option value="9">9</option>
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
                                        </div>
                                        <div class="col-5">
                                            <select name="borned_on_month" id="id_borned_on_month" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5">
                                                <option value="0">---</option>
                                                <option value="1"><?php echo $this->lang->line('m1'); ?></option>
                                                <option value="2"><?php echo $this->lang->line('m2'); ?></option>
                                                <option value="3"><?php echo $this->lang->line('m3'); ?></option>
                                                <option value="4"><?php echo $this->lang->line('m4'); ?></option>
                                                <option value="5"><?php echo $this->lang->line('m5'); ?></option>
                                                <option value="6"><?php echo $this->lang->line('m6'); ?></option>
                                                <option value="7"><?php echo $this->lang->line('m7'); ?></option>
                                                <option value="8"><?php echo $this->lang->line('m8'); ?></option>
                                                <option value="9"><?php echo $this->lang->line('m9'); ?></option>
                                                <option value="10"><?php echo $this->lang->line('m10'); ?></option>
                                                <option value="11"><?php echo $this->lang->line('m11'); ?></option>
                                                <option value="12"><?php echo $this->lang->line('m12'); ?></option>
                                            </select>
                                        </div>
                                        <div class="col-4">
                                            <select name="borned_on_year" id="id_borned_on_year" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5">
                                                <option value="0">---</option>
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
                                                <option value="1921">1921</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <label for="id_email" class="text-white"><?php echo $this->lang->line('email'); ?></label>
                                    <input type="text" id="id_email" placeholder="<?php echo $this->lang->line('email'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                </div>

                                <div class="form-group">
                                    <label for="id_phone" class="text-white"><?php echo $this->lang->line('phone'); ?></label>
                                    <input type="number" id="id_phone" placeholder="<?php echo $this->lang->line('phone'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                </div>

                                <div class="form-group">
                                    <label for="Country" class="text-white"><?php echo $this->lang->line('country'); ?></label>
                                    <div class="form-group">
                                        <select id="Country" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" style="height:50px;">
                                            <option value="0">Select</option>
                                            <option value="Afganistan">Afghanistan</option>
                                            <option value="Albania">Albania</option>
                                            <option value="Algeria">Algeria</option>
                                            <option value="American Samoa">American Samoa</option>
                                            <option value="Andorra">Andorra</option>
                                            <option value="Angola">Angola</option>
                                            <option value="Anguilla">Anguilla</option>
                                            <option value="Antigua & Barbuda">Antigua & Barbuda</option>
                                            <option value="Argentina">Argentina</option>
                                            <option value="Armenia">Armenia</option>
                                            <option value="Aruba">Aruba</option>
                                            <option value="Australia">Australia</option>
                                            <option value="Austria">Austria</option>
                                            <option value="Azerbaijan">Azerbaijan</option>
                                            <option value="Bahamas">Bahamas</option>
                                            <option value="Bahrain">Bahrain</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="Barbados">Barbados</option>
                                            <option value="Belarus">Belarus</option>
                                            <option value="Belgium">Belgium</option>
                                            <option value="Belize">Belize</option>
                                            <option value="Benin">Benin</option>
                                            <option value="Bermuda">Bermuda</option>
                                            <option value="Bhutan">Bhutan</option>
                                            <option value="Bolivia">Bolivia</option>
                                            <option value="Bonaire">Bonaire</option>
                                            <option value="Bosnia & Herzegovina">Bosnia & Herzegovina</option>
                                            <option value="Botswana">Botswana</option>
                                            <option value="Brazil">Brazil</option>
                                            <option value="British Indian Ocean Ter">British Indian Ocean Ter</option>
                                            <option value="Brunei">Brunei</option>
                                            <option value="Bulgaria">Bulgaria</option>
                                            <option value="Burkina Faso">Burkina Faso</option>
                                            <option value="Burundi">Burundi</option>
                                            <option value="Cambodia">Cambodia</option>
                                            <option value="Cameroon">Cameroon</option>
                                            <option value="Canada">Canada</option>
                                            <option value="Canary Islands">Canary Islands</option>
                                            <option value="Cape Verde">Cape Verde</option>
                                            <option value="Cayman Islands">Cayman Islands</option>
                                            <option value="Central African Republic">Central African Republic</option>
                                            <option value="Chad">Chad</option>
                                            <option value="Channel Islands">Channel Islands</option>
                                            <option value="Chile">Chile</option>
                                            <option value="China">China</option>
                                            <option value="Christmas Island">Christmas Island</option>
                                            <option value="Cocos Island">Cocos Island</option>
                                            <option value="Colombia">Colombia</option>
                                            <option value="Comoros">Comoros</option>
                                            <option value="Congo">Congo</option>
                                            <option value="Cook Islands">Cook Islands</option>
                                            <option value="Costa Rica">Costa Rica</option>
                                            <option value="Cote DIvoire">Cote DIvoire</option>
                                            <option value="Croatia">Croatia</option>
                                            <option value="Cuba">Cuba</option>
                                            <option value="Curaco">Curacao</option>
                                            <option value="Cyprus">Cyprus</option>
                                            <option value="Czech Republic">Czech Republic</option>
                                            <option value="Denmark">Denmark</option>
                                            <option value="Djibouti">Djibouti</option>
                                            <option value="Dominica">Dominica</option>
                                            <option value="Dominican Republic">Dominican Republic</option>
                                            <option value="East Timor">East Timor</option>
                                            <option value="Ecuador">Ecuador</option>
                                            <option value="Egypt">Egypt</option>
                                            <option value="El Salvador">El Salvador</option>
                                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                                            <option value="Eritrea">Eritrea</option>
                                            <option value="Estonia">Estonia</option>
                                            <option value="Ethiopia">Ethiopia</option>
                                            <option value="Falkland Islands">Falkland Islands</option>
                                            <option value="Faroe Islands">Faroe Islands</option>
                                            <option value="Fiji">Fiji</option>
                                            <option value="Finland">Finland</option>
                                            <option value="France">France</option>
                                            <option value="French Guiana">French Guiana</option>
                                            <option value="French Polynesia">French Polynesia</option>
                                            <option value="French Southern Ter">French Southern Ter</option>
                                            <option value="Gabon">Gabon</option>
                                            <option value="Gambia">Gambia</option>
                                            <option value="Georgia">Georgia</option>
                                            <option value="Germany">Germany</option>
                                            <option value="Ghana">Ghana</option>
                                            <option value="Gibraltar">Gibraltar</option>
                                            <option value="Great Britain">Great Britain</option>
                                            <option value="Greece">Greece</option>
                                            <option value="Greenland">Greenland</option>
                                            <option value="Grenada">Grenada</option>
                                            <option value="Guadeloupe">Guadeloupe</option>
                                            <option value="Guam">Guam</option>
                                            <option value="Guatemala">Guatemala</option>
                                            <option value="Guinea">Guinea</option>
                                            <option value="Guyana">Guyana</option>
                                            <option value="Haiti">Haiti</option>
                                            <option value="Hawaii">Hawaii</option>
                                            <option value="Honduras">Honduras</option>
                                            <option value="Hong Kong">Hong Kong</option>
                                            <option value="Hungary">Hungary</option>
                                            <option value="Iceland">Iceland</option>
                                            <option value="Indonesia">Indonesia</option>
                                            <option value="India">India</option>
                                            <option value="Iran">Iran</option>
                                            <option value="Iraq">Iraq</option>
                                            <option value="Ireland">Ireland</option>
                                            <option value="Isle of Man">Isle of Man</option>
                                            <option value="Israel">Israel</option>
                                            <option value="Italy">Italy</option>
                                            <option value="Jamaica">Jamaica</option>
                                            <option value="Japan">Japan</option>
                                            <option value="Jordan">Jordan</option>
                                            <option value="Kazakhstan">Kazakhstan</option>
                                            <option value="Kenya">Kenya</option>
                                            <option value="Kiribati">Kiribati</option>
                                            <option value="Korea North">Korea North</option>
                                            <option value="Korea Sout">Korea South</option>
                                            <option value="Kuwait">Kuwait</option>
                                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                                            <option value="Laos">Laos</option>
                                            <option value="Latvia">Latvia</option>
                                            <option value="Lebanon">Lebanon</option>
                                            <option value="Lesotho">Lesotho</option>
                                            <option value="Liberia">Liberia</option>
                                            <option value="Libya">Libya</option>
                                            <option value="Liechtenstein">Liechtenstein</option>
                                            <option value="Lithuania">Lithuania</option>
                                            <option value="Luxembourg">Luxembourg</option>
                                            <option value="Macau">Macau</option>
                                            <option value="Macedonia">Macedonia</option>
                                            <option value="Madagascar">Madagascar</option>
                                            <option value="Malaysia">Malaysia</option>
                                            <option value="Malawi">Malawi</option>
                                            <option value="Maldives">Maldives</option>
                                            <option value="Mali">Mali</option>
                                            <option value="Malta">Malta</option>
                                            <option value="Marshall Islands">Marshall Islands</option>
                                            <option value="Martinique">Martinique</option>
                                            <option value="Mauritania">Mauritania</option>
                                            <option value="Mauritius">Mauritius</option>
                                            <option value="Mayotte">Mayotte</option>
                                            <option value="Mexico">Mexico</option>
                                            <option value="Midway Islands">Midway Islands</option>
                                            <option value="Moldova">Moldova</option>
                                            <option value="Monaco">Monaco</option>
                                            <option value="Mongolia">Mongolia</option>
                                            <option value="Montserrat">Montserrat</option>
                                            <option value="Morocco">Morocco</option>
                                            <option value="Mozambique">Mozambique</option>
                                            <option value="Myanmar">Myanmar</option>
                                            <option value="Nambia">Nambia</option>
                                            <option value="Nauru">Nauru</option>
                                            <option value="Nepal">Nepal</option>
                                            <option value="Netherland Antilles">Netherland Antilles</option>
                                            <option value="Netherlands">Netherlands (Holland, Europe)</option>
                                            <option value="Nevis">Nevis</option>
                                            <option value="New Caledonia">New Caledonia</option>
                                            <option value="New Zealand">New Zealand</option>
                                            <option value="Nicaragua">Nicaragua</option>
                                            <option value="Niger">Niger</option>
                                            <option value="Nigeria">Nigeria</option>
                                            <option value="Niue">Niue</option>
                                            <option value="Norfolk Island">Norfolk Island</option>
                                            <option value="Norway">Norway</option>
                                            <option value="Oman">Oman</option>
                                            <option value="Pakistan">Pakistan</option>
                                            <option value="Palau Island">Palau Island</option>
                                            <option value="Palestine">Palestine</option>
                                            <option value="Panama">Panama</option>
                                            <option value="Papua New Guinea">Papua New Guinea</option>
                                            <option value="Paraguay">Paraguay</option>
                                            <option value="Peru">Peru</option>
                                            <option value="Phillipines">Philippines</option>
                                            <option value="Pitcairn Island">Pitcairn Island</option>
                                            <option value="Poland">Poland</option>
                                            <option value="Portugal">Portugal</option>
                                            <option value="Puerto Rico">Puerto Rico</option>
                                            <option value="Qatar">Qatar</option>
                                            <option value="Republic of Montenegro">Republic of Montenegro</option>
                                            <option value="Republic of Serbia">Republic of Serbia</option>
                                            <option value="Reunion">Reunion</option>
                                            <option value="Romania">Romania</option>
                                            <option value="Russia">Russia</option>
                                            <option value="Rwanda">Rwanda</option>
                                            <option value="St Barthelemy">St Barthelemy</option>
                                            <option value="St Eustatius">St Eustatius</option>
                                            <option value="St Helena">St Helena</option>
                                            <option value="St Kitts-Nevis">St Kitts-Nevis</option>
                                            <option value="St Lucia">St Lucia</option>
                                            <option value="St Maarten">St Maarten</option>
                                            <option value="St Pierre & Miquelon">St Pierre & Miquelon</option>
                                            <option value="St Vincent & Grenadines">St Vincent & Grenadines</option>
                                            <option value="Saipan">Saipan</option>
                                            <option value="Samoa">Samoa</option>
                                            <option value="Samoa American">Samoa American</option>
                                            <option value="San Marino">San Marino</option>
                                            <option value="Sao Tome & Principe">Sao Tome & Principe</option>
                                            <option value="Saudi Arabia">Saudi Arabia</option>
                                            <option value="Senegal">Senegal</option>
                                            <option value="Seychelles">Seychelles</option>
                                            <option value="Sierra Leone">Sierra Leone</option>
                                            <option value="Singapore">Singapore</option>
                                            <option value="Slovakia">Slovakia</option>
                                            <option value="Slovenia">Slovenia</option>
                                            <option value="Solomon Islands">Solomon Islands</option>
                                            <option value="Somalia">Somalia</option>
                                            <option value="South Africa">South Africa</option>
                                            <option value="Spain">Spain</option>
                                            <option value="Sri Lanka">Sri Lanka</option>
                                            <option value="Sudan">Sudan</option>
                                            <option value="Suriname">Suriname</option>
                                            <option value="Swaziland">Swaziland</option>
                                            <option value="Sweden">Sweden</option>
                                            <option value="Switzerland">Switzerland</option>
                                            <option value="Syria">Syria</option>
                                            <option value="Tahiti">Tahiti</option>
                                            <option value="Taiwan">Taiwan</option>
                                            <option value="Tajikistan">Tajikistan</option>
                                            <option value="Tanzania">Tanzania</option>
                                            <option value="Thailand">Thailand</option>
                                            <option value="Togo">Togo</option>
                                            <option value="Tokelau">Tokelau</option>
                                            <option value="Tonga">Tonga</option>
                                            <option value="Trinidad & Tobago">Trinidad & Tobago</option>
                                            <option value="Tunisia">Tunisia</option>
                                            <option value="Turkey">Turkey</option>
                                            <option value="Turkmenistan">Turkmenistan</option>
                                            <option value="Turks & Caicos Is">Turks & Caicos Is</option>
                                            <option value="Tuvalu">Tuvalu</option>
                                            <option value="Uganda">Uganda</option>
                                            <option value="United Kingdom">United Kingdom</option>
                                            <option value="Ukraine">Ukraine</option>
                                            <option value="United Arab Erimates">United Arab Emirates</option>
                                            <option value="United States of America">United States of America</option>
                                            <option value="Uraguay">Uruguay</option>
                                            <option value="Uzbekistan">Uzbekistan</option>
                                            <option value="Vanuatu">Vanuatu</option>
                                            <option value="Vatican City State">Vatican City State</option>
                                            <option value="Venezuela">Venezuela</option>
                                            <option value="Vietnam">Vietnam</option>
                                            <option value="Virgin Islands (Brit)">Virgin Islands (Brit)</option>
                                            <option value="Virgin Islands (USA)">Virgin Islands (USA)</option>
                                            <option value="Wake Island">Wake Island</option>
                                            <option value="Wallis & Futana Is">Wallis & Futana Is</option>
                                            <option value="Yemen">Yemen</option>
                                            <option value="Zaire">Zaire</option>
                                            <option value="Zambia">Zambia</option>
                                            <option value="Zimbabwe">Zimbabwe</option>
                                            </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="City" class="text-white"><?php echo $this->lang->line('city'); ?></label>
                                    <input type="text" id="City" placeholder="City" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                </div>
                                <div class="form-group">
                                    <label for="Street" class="text-white"><?php echo $this->lang->line('street'); ?></label>
                                    <input type="text" id="Street" placeholder="Street" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                </div>
                                <div class="form-group">
                                    <label for="House_number" class="text-white"><?php echo $this->lang->line('hnum'); ?></label>
                                    <input type="number" id="House_number" placeholder="House_number" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                </div>
                                <div class="form-group">
                                    <label for="Postal_Code" class="text-white"><?php echo $this->lang->line('pcode'); ?></label>
                                    <input type="number" id="Postal_Code" placeholder="Postal_Code" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                </div>
                                <div class="form-group">
                                    <label for="id_password1" class="text-white"><?php echo $this->lang->line('pw'); ?></label>
                                    <input type="password" placeholder="<?php echo $this->lang->line('pw'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" id="id_password1">
                                    <div class="help-block">
                                        <a href="#" class="show-pwd" onclick="ch_ps(this)"><?php echo $this->lang->line('show'); ?></a>
                                    </div>
                                </div>                        
                            </div>  

                            <div class="row" id="fileupdiv" style="display:none">
                                <div class="col-lg-12 mtp">
                                    <div class="mt-3">
                                        <label for="driving" class="text-white"><b><?php echo $this->lang->line('driving'); ?></b></label>
                                        <div class="col-xs-12 col-md-6">
                                        <input class="row" type="file" id="driving_up" data-plugins="dropify" data-max-file-size="10M" />&nbsp;
                                        </div>
                                        <div class="col-xs-12 col-md-6">
                                        <input class="row" type="text" id="driving" placeholder="<?php echo $this->lang->line('ffn1'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-12 mtop" >
                                    <div class="mt-3">
                                        <label for="identity" class="text-white"><b><?php echo $this->lang->line('identity'); ?></b></label>
                                        <input type="file" id="idt_up" data-plugins="dropify" data-max-file-size="10M" />&nbsp;
                                        <input type="text" id="identity" placeholder="<?php echo $this->lang->line('ffn2'); ?>" class="form-control h-auto text-white placeholder-white opacity-70 bg-dark-o-70 rounded-pill border-0 py-4 px-8 mb-5" maxlength="75">
                                    </div>
                                </div>
                            </div>

                            <hr>
                                
                            <div class="form-group text-center mt-10">
                                <button class="btn btn-pill btn-outline-white font-weight-bold opacity-90 px-15 py-3" id="rgbt1" onclick="register()"><?php echo $this->lang->line('next'); ?></button>
                                <button class="btn btn-primary btn-block" id="rgbt2" style="display:none" onclick="license()"><?php echo $this->lang->line('signup'); ?></button>
                            
                            </div>


                            <div class="mt-10">
                                <span class="opacity-70 mr-4">
                                    <?php echo $this->lang->line('areu_ready'); ?>
                                </span>
                                <!-- <a href="/index.php/First/sign_up" class="text-white font-weight-bold"> -->
                               <a href="/index.php/First/sign_in">
                                <?php echo $this->lang->line('signin'); ?>
                                </a>
                            </div>

						
						
					</div>
					<!--end::Login Sign in form-->

				</div>
			</div>
		</div>
		<!--end::Login-->
	</div>
<!--end::Main-->

   <script>
        var email;
        
        function register(){
            
            var first_name,last_name,yy,mm,dd,password,Country,City,Street,House_number,Postal_Code;
            var allowed=/^([a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$)/;

            first_name = $('#id_first_name').val();
            last_name = $('#id_last_name').val();
            yy=$('#id_borned_on_year').val();
            mm=$('#id_borned_on_month').val();
            dd=$('#id_borned_on_day').val();
            email=$('#id_email').val();
            password=$('#id_password1').val();
            phone=$('#id_phone').val();
            Country=$('#Country').val();
            City=$('#City').val();
            Street=$('#Street').val();
            House_number=$('#House_number').val();
            Postal_Code=$('#Postal_Code').val();
            if(first_name==''){
                $('#id_first_name').focus();return;
            }else if(last_name==''){
                $('#id_last_name').focus();return;
            }else if(email==''){
                $('#id_email').focus();return;
            }else if(!allowed.test(email)){
                $('#id_email').val('');
                toastr_call("error","<?php echo $this->lang->line('emailerr'); ?>");
                $('#id_email').focus();return;
            }else if(phone==''){
                $('#id_phone').focus();return;
            }else if(Country==0){
                $('#Country').focus();return;
            }else if(City==''){
                $('#City').focus();return;
            }else if(Street==''){
                $('#Street').focus();return;
            }else if(House_number==''){
                $('#House_number').focus();return;
            }else if(Postal_Code==''){
                $('#Postal_Code').focus();return;
            }else if(password==''){
                $('#id_password1').focus();return;
            }else if(password.length<6){
                $('#id_password1').val('');
                toastr_call("error","<?php echo $this->lang->line('pwerr'); ?>");
                $('#id_password1').focus();return;
            }

            $.post(
                '/index.php/First/register',
                {
                    first:first_name,
                    last:last_name,
                    yy:yy,
                    mm:mm,
                    dd:dd,
                    email:email,
                    password:password,
                    phone:phone,
                    Country:Country,
                    City:City,
                    House_number:House_number,
                    Street:Street,
                    Postal_Code:Postal_Code
                },
                function(data,status){
                    if(data=="pass"){
                        $('#main_infodiv').css('display','none');
                        $('#rgbt1').css('display','none');
                        $('#rgbt2').css('display','block');
                        $('#fileupdiv').css('display','block');
                        toastr_call("success","<?php echo $this->lang->line('pwsuc'); ?>");
                    }else if(data=="already"){
                        toastr_call("error","<?php echo $this->lang->line('erregi'); ?>");
                    }else if(data=="pwd_err"){
                        $('#id_first_name').val('');
                        $('#id_last_name').val('');
                        $('#id_email').val('');
                        $('#id_password1').val('');
                        $('#id_phone').val('');
                        $('#id_address').val('');
                        $('#id_borned_on_year').val(0);
                        $('#id_borned_on_month').val(0);
                        $('#id_borned_on_day').val(0);
                        $('#id_first_name').focus();
                        toastr_call("success","<?php echo $this->lang->line('erreemail'); ?>");
                    }
                    else if(data=="exist"){
                        
                        $('#main_infodiv').css('display','none');
                        $('#rgbt1').css('display','none');
                        $('#rgbt2').css('display','block');
                        $('#fileupdiv').css('display','block');
                        toastr_call("success","<?php echo $this->lang->line('pwsuc'); ?>");
                    }else{
                        toastr_call("errors","System error!");
                    }
                }
            );
           
        }

        function license(){
            var file1=$('#driving_up').val();
            var file2=$('#idt_up').val();
            var driving=$('#driving').val();
            var identity=$('#identity').val();
            if(file1==''){
                toastr_call("error","<?php echo $this->lang->line('errdrup'); ?>");
            }else if(file2==''){
                toastr_call("error","<?php echo $this->lang->line('erridup'); ?>");
            }else if(driving==''){
                $('#driving').focus();
            }else if(identity==''){
                $('#identity').focus();
            }else{
                
                var formdata = new FormData();
                formdata.append('driving_up', $('#driving_up')[0].files[0]);
                formdata.append('idt_up', $('#idt_up')[0].files[0]);
                formdata.append('email', email);
                formdata.append('driving', driving);
                formdata.append('identity', identity);

                $.ajax({
                    url: '/index.php/First/driv',
                    type: 'POST',
                    processData: false,
                    contentType: false,
                    cache: false,
                    data: formdata,
                    success:function () {
                        
                        toastr_call("success","<?php echo $this->lang->line('allsuc'); ?>");
                        var delayInMilliseconds = 2000;
               
                        setTimeout(function() {
                            window.location.href = '/';
                        }, delayInMilliseconds);
                    }
                });
            }
        }

        function ch_ps(e){
            if($('#id_password1').attr('type')=="password"){
                $('#id_password1').attr('type','text');
                $(e).text("<?php echo $this->lang->line('show'); ?>");
            }else{
                $('#id_password1').attr('type','password');
                $(e).text("<?php echo $this->lang->line('hide'); ?>");
            }
            
        }
    </script>

        <script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
    "breakpoints": {
        "sm": 576,
        "md": 768,
        "lg": 992,
        "xl": 1200,
        "xxl": 1200
    },
    "colors": {
        "theme": {
            "base": {
                "white": "#ffffff",
                "primary": "#6993FF",
                "secondary": "#E5EAEE",
                "success": "#1BC5BD",
                "info": "#8950FC",
                "warning": "#FFA800",
                "danger": "#F64E60",
                "light": "#F3F6F9",
                "dark": "#212121"
            },
            "light": {
                "white": "#ffffff",
                "primary": "#E1E9FF",
                "secondary": "#ECF0F3",
                "success": "#C9F7F5",
                "info": "#EEE5FF",
                "warning": "#FFF4DE",
                "danger": "#FFE2E5",
                "light": "#F3F6F9",
                "dark": "#D6D6E0"
            },
            "inverse": {
                "white": "#ffffff",
                "primary": "#ffffff",
                "secondary": "#212121",
                "success": "#ffffff",
                "info": "#ffffff",
                "warning": "#ffffff",
                "danger": "#ffffff",
                "light": "#464E5F",
                "dark": "#ffffff"
            }
        },
        "gray": {
            "gray-100": "#F3F6F9",
            "gray-200": "#ECF0F3",
            "gray-300": "#E5EAEE",
            "gray-400": "#D6D6E0",
            "gray-500": "#B5B5C3",
            "gray-600": "#80808F",
            "gray-700": "#464E5F",
            "gray-800": "#1B283F",
            "gray-900": "#212121"
        }
    },
    "font-family": "Poppins"
};
        </script>
        <!--end::Global Config-->

    	<!--begin::Global Theme Bundle(used by all pages)-->
    	    	   <script src="/assets/login/plugins/global/plugins.bundle.js"></script>
		    	   <script src="/assets/login/plugins/custom/prismjs/prismjs.bundle.js"></script>
		    	   <script src="/assets/login/js/scripts.bundle.js"></script>
				<!--end::Global Theme Bundle-->


                    <!--begin::Page Scripts(used by this page)-->
                            <script src="/assets/login/js/pages/custom/login/login-general.js"></script>
                        <!--end::Page Scripts-->
            </body>
    <!--end::Body-->
</html>