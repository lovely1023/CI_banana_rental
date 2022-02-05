<style>h4{color:red;}</style>

<nav class="navbar navbar-expand-sm bg-success navbar-dark">

    <ul class="navbar-nav">
        <li class="nav-item">
            <a style="font-size:16px;" class="nav-link" href="/"><?php echo $this->lang->line('home');?></a>
        </li>
        <li class="nav-item">
            <a style="font-size:16px;" class="nav-link active" id="my_ads_nav" href="/index.php/My_ads"><?php echo $this->lang->line('adlist');?></a>
        </li>
        <li class="nav-item">
            <a style="font-size:16px;" class="nav-link" id="" href="<?php echo '/index.php/Rent/schedule/'.$ads_id; ?>"><?php echo $this->lang->line('bschedul');?></a>
        </li>
    </ul>
 
</nav>

<br>

<div class="container">
    <h2><?php echo $v_type; ?></h2>
    <hr>
    <div>
        <h4><?php echo $this->lang->line('phs');?></h4>
        <div class="row" style="margin-left:auto;margin-right:auto;"> 
            <input type="file" id="newphoto" hidden>
            <label for="newphoto" class="btn btn-default" style="width:50%;">
            <?php echo $this->lang->line('selectnew');?></label>
            <button onclick="add_new_photo()" class="btn btn-primary" style="width:50%;">
                <?php echo $this->lang->line('addm');?>
            </button>
            
        </div>
        <div class="row" id="photo_v">
            
        </div>
    </div>
    
    <hr>
    <div>
        <h4><?php echo $this->lang->line('vty');?></h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="id_chassis_brand"><?php echo $this->lang->line('vty1');?> *</label>
                    <div class="form-group">
                        <input type="text" id="id_chassis_brand" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_chassis_model"><?php echo $this->lang->line('vty2');?></label>
                    <div class="form-group">
                        <input type="text" id="id_chassis_model" value="" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_conversion_model"><?php echo $this->lang->line('vty4');?></label>
                    <div class="form-group">
                        <input type="text" id="id_conversion_model" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_numbers_seats"><?php echo $this->lang->line('vty5');?> *</label>
                    <select name="id_numbers_seats" class="form-control slt" id="id_numbers_seats" style="height:50px;">
                        <option value="Select"><?php echo $this->lang->line('select');?></option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7+</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="id_number_seatbelts"><?php echo $this->lang->line('vty6');?> *</label>
                    <select name="id_number_seatbelts" class="form-control slt" id="id_number_seatbelts" style="height:50px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7+</option>
                    </select>
                </div>
                <div class="col-md-6" style="margin-bottom:30px;">
                    <label for="id_number_berth"><?php echo $this->lang->line('vty7');?> *</label>
                    <select name="id_number_berth" class="form-control slt" id="id_number_berth" style="height:50px;">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7+</option>
                    </select>
                </div>
                <hr>
            </div>
            <div class="row">
                <button onclick="v_type_u()" class="btn btn-primary" style="margin-left:auto;margin-right:auto;width:200px"><?php echo $this->lang->line('save');?></button>
            </div>
        </div>
    </div>

    <hr>
    <div>
        <h4><?php echo $this->lang->line('tech');?></h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="id_license_plate"><?php echo $this->lang->line('tech1');?> *</label>
                    <div class="form-group">
                        <input type="text" id="id_license_plate" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_registered_country"><?php echo $this->lang->line('tech2');?> *</label>
                    <div class="form-group">
                        <select id="id_registered_country" name="id_registered_country" class="form-control" style="height:50px;">
                            <option value="">SELECT</option>
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
                
                <div class="col-md-6">
                    <label for="id_license_plate_year"><?php echo $this->lang->line('tech3');?> *</label>
                    <div class="form-group">
                        <input type="date" id="id_license_plate_year" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_total_weight"><?php echo $this->lang->line('tech4');?> *</label>
                    <div class="input-group">
                        <input type="number" id="id_total_weight" name="id_total_weight" required="" max="20000" min="100" class="form-control">
                        <span class="input-group-addon">kg</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_fuel"><?php echo $this->lang->line('fuel');?> *</label>
                    <select name="id_fuel" class="form-control slt" id="id_fuel" style="height:50px;">
                        <option value="Select"><?php echo $this->lang->line('select');?></option>
                        <option value="Gasoline"><?php echo $this->lang->line('gas');?></option>
                        <option value="Diesel"><?php echo $this->lang->line('diesel');?></option>
                        <option value="GPL"><?php echo $this->lang->line('gpl');?></option>
                        <option value="Electric"><?php echo $this->lang->line('elec');?></option>
                        <option value="Others"><?php echo $this->lang->line('oth');?></option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="id_vehicle_consumption"><?php echo $this->lang->line('tech5');?> *</label>
                    <select name="id_vehicle_consumption" class="form-control slt" id="id_vehicle_consumption" style="height:50px;">
                        <option value="Select">Select</option>
                        <option value="-6L/100km">-6L/100km</option>
                        <option value="6~8L/100km">6~8L/100km</option>
                        <option value="8~10L/100km">8~10L/100km</option>
                        <option value="10~12L/100km">10~12L/100km</option>
                        <option value="12~14L/100km">12~14L/100km</option>
                        <option value="+14L/100km">+14L/100km</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="id_vehicle_length"><?php echo $this->lang->line('tech6');?> *</label>
                    <div class="input-group">
                        <input type="number" id="id_vehicle_length" name="id_vehicle_length" required="" max="20.0" min="0.0" step=".1" class="form-control">
                        <span class="input-group-addon">metres</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_vehicle_width"><?php echo $this->lang->line('tech7');?> *</label>
                    <div class="input-group">
                        <input type="number" id="id_vehicle_width" name="id_vehicle_width" required="" max="20.0" min="0.0" step=".1" class="form-control">
                        <span class="input-group-addon">metres</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_vehicle_height"><?php echo $this->lang->line('tech8');?> *</label>
                    <div class="input-group">
                        <input type="number" id="id_vehicle_height" name="id_vehicle_height" required="" max="20.0" min="0.0" step=".1" class="form-control">
                        <span class="input-group-addon">Meters</span>
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_acquisition_value"><?php echo $this->lang->line('tech9');?> *</label>
                    <div class="form-group">
                        <input type="number" id="id_acquisition_value" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="id_cell_phone"><?php echo $this->lang->line('tech10');?> *</label>
                    <div class="form-group">
                        <input type="number" id="id_cell_phone" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-primary" onclick="u_tech_charact()" style="margin-left:auto;margin-right:auto;width:200px"><?php echo $this->lang->line('save');?></button>
            </div>
        </div>        
    </div>

    <hr>
    <div>
        <h4><?php echo $this->lang->line('sfbet');?></h4>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="berth_tb">
                    
                </div>
            </div>
            <div class="row">
                <div class="container">
                    <hr>
                    <div class="row">
                        <div class="col-xs-4">
                            <label for="type_berth"><?php echo $this->lang->line('tpberth');?></label>
                            <select name="type_berth" class="form-control slt" id="type_berth" style="height:50px;">
                                <option value="Select"><?php echo $this->lang->line('select');?></option>
                                <option value="Central bed"><?php echo $this->lang->line('bertp1');?></option>
                                <option value="Transversal bed"><?php echo $this->lang->line('bertp2');?></option>
                                <option value="Leaning bed"><?php echo $this->lang->line('bertp3');?></option>
                                <option value="Build in/off bed"><?php echo $this->lang->line('bertp4');?></option>
                                <option value="Twin bed"><?php echo $this->lang->line('bertp5');?></option>
                                <option value="Capuccino bed"><?php echo $this->lang->line('bertp6');?></option>
                                <option value="Bench bed"><?php echo $this->lang->line('bertp7');?></option>
                                <option value="Lift celling bed"><?php echo $this->lang->line('bertp8');?></option>
                                <option value="Bunk bed"><?php echo $this->lang->line('bertp9');?></option>
                                <option value="Swing bed"><?php echo $this->lang->line('bertp10');?></option>
                            </select>
                        </div>
                        
                        <div class="col-xs-4">
                            <label for="width_berth"><?php echo $this->lang->line('wdth');?> *</label>
                            <div class="input-group">
                                <input type="number" id="width_berth" name="width_berth" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            <label for="length_berth"><?php echo $this->lang->line('lgth');?> *</label>
                            <div class="input-group">
                                <input type="number" id="length_berth" name="length_berth" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                <span class="input-group-addon">cm</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <br><br>
            <button class="btn btn-info" onclick="add_berth()"><?php echo $this->lang->line('adbeth');?></button>
        </div>
    </div>

    <hr>
    <div>
        <h4><?php echo $this->lang->line('des');?> </h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <label for="descript"><?php echo $this->lang->line('vdes');?>  *</label>
                    <div class="form-group">
                        <textarea type="text" id="descript" style="font-size:18px;" rows="5" cols="40" class="form-control"></textarea>
                    </div>
                </div>
            </div>
            <div class="row">
                <button class="btn btn-primary" onclick="u_intro()" style="margin-left:auto;margin-right:auto;width:200px"><?php echo $this->lang->line('save');?></button>
            </div>
        </div>
        
    </div>

    <div>
        <h4><?php echo $this->lang->line('drivrel');?></h4><hr>
        <div class="container">
            
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)"  name="power_steering" id="power_steering" autocomplete="off" />
                    <div class="btn-group">
                        <label for="power_steering" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="power_steering" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel1');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="cruise_control" id="cruise_control" autocomplete="off" />
                    <div class="btn-group">
                        <label for="cruise_control" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="cruise_control" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel2');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="wheel_drive" id="wheel_drive" autocomplete="off" />
                    <div class="btn-group">
                        <label for="wheel_drive" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="wheel_drive" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel3');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="gps" id="gps" autocomplete="off" />
                    <div class="btn-group">
                        <label for="gps" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="gps" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel4');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="parking_motion" id="parking_motion" autocomplete="off" />
                    <div class="btn-group">
                        <label for="parking_motion" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="parking_motion" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel15');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="rear_camera" id="rear_camera" autocomplete="off" />
                    <div class="btn-group">
                        <label for="rear_camera" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="rear_camera" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel5');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="cabin_heating" id="cabin_heating" autocomplete="off" />
                    <div class="btn-group">
                        <label for="cabin_heating" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="cabin_heating" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel6');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="ac" id="ac" autocomplete="off" />
                    <div class="btn-group">
                        <label for="ac" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="ac" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel7');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="central_lock" id="central_lock" autocomplete="off" />
                    <div class="btn-group">
                        <label for="central_lock" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="central_lock" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel8');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="baby_seat" id="baby_seat" autocomplete="off" />
                    <div class="btn-group">
                        <label for="baby_seat" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="baby_seat" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel9');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="baby_car_chair" id="baby_car_chair" autocomplete="off" />
                    <div class="btn-group">
                        <label for="baby_car_chair" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="baby_car_chair" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel10');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="winter_tires" id="winter_tires" autocomplete="off" />
                    <div class="btn-group">
                        <label for="winter_tires" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="winter_tires" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel14');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="snow_chains" id="snow_chains" autocomplete="off" />
                    <div class="btn-group">
                        <label for="snow_chains" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="snow_chains" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel11');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="wedge_levelers" id="wedge_levelers" autocomplete="off" />
                    <div class="btn-group">
                        <label for="wedge_levelers" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="wedge_levelers" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel12');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="safety_kit" id="safety_kit" autocomplete="off" />
                    <div class="btn-group">
                        <label for="safety_kit" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="safety_kit" class="btn btn-default">
                        <?php echo $this->lang->line('drivrel13');?>
                        </label>
                    </div>
                </div>
            </div>
            
            
        </div><hr>
        
        <h4><?php echo $this->lang->line('lif');?></h4><hr>
        <div class="container">
            <div class="col-xs-12 col-sm-6">

                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Autoradio" id="Autoradio" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Autoradio" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Autoradio" class="btn btn-default">
                        <?php echo $this->lang->line('lif1');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="CD_Player" id="CD_Player" autocomplete="off" />
                    <div class="btn-group">
                        <label for="CD_Player" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="CD_Player" class="btn btn-default">
                        <?php echo $this->lang->line('lif2');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="MP3" id="MP3" autocomplete="off" />
                    <div class="btn-group">
                        <label for="MP3" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="MP3" class="btn btn-default">
                        <?php echo $this->lang->line('lif3');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Audio_in" id="Audio_in" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Audio_in" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Audio_in" class="btn btn-default">
                        <?php echo $this->lang->line('lif4');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Bluetooth" id="Bluetooth" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Bluetooth" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Bluetooth" class="btn btn-default">
                        <?php echo $this->lang->line('lif5');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="TV" id="TV" autocomplete="off" />
                    <div class="btn-group">
                        <label for="TV" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="TV" class="btn btn-default">
                        <?php echo $this->lang->line('lif6');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="DVD_Player" id="DVD_Player" autocomplete="off" />
                    <div class="btn-group">
                        <label for="DVD_Player" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="DVD_Player" class="btn btn-default">
                        <?php echo $this->lang->line('lif7');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Satellite_dish" id="Satellite_dish" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Satellite_dish" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Satellite_dish" class="btn btn-default">
                        <?php echo $this->lang->line('lif8');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Sponge" id="Sponge" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Sponge" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Sponge" class="btn btn-default" style="font-size:14px;height:34px;">
                        <?php echo $this->lang->line('lif9');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="AC_life" id="AC_life" autocomplete="off" />
                    <div class="btn-group">
                        <label for="AC_life" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="AC_life" class="btn btn-default">
                        <?php echo $this->lang->line('lif10');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Bed_linen" id="Bed_linen" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Bed_linen" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Bed_linen" class="btn btn-default">
                        <?php echo $this->lang->line('lif11');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Swing_driver" id="Swing_driver" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Swing_driver" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Swing_driver" class="btn btn-default">
                        <?php echo $this->lang->line('lif12');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Swing_passenger" id="Swing_passenger" autocomplete="off"/>
                    <div class="btn-group">
                        <label for="Swing_passenger" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Swing_passenger" class="btn btn-default" style="font-size:12px;height:34px;">
                        <?php echo $this->lang->line('lif13');?>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h4><?php echo $this->lang->line('kitch');?></h4><hr>
        <div class="container">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Sink" id="Sink" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Sink" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Sink" class="btn btn-default">
                        <?php echo $this->lang->line('kitch1');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Stove" id="Stove" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Stove" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Stove" class="btn btn-default">
                        <?php echo $this->lang->line('kitch2');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Oven" id="Oven" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Oven" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Oven" class="btn btn-default">
                        <?php echo $this->lang->line('kitch3');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Fridge" id="Fridge" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Fridge" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Fridge" class="btn btn-default">
                        <?php echo $this->lang->line('kitch4');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Freezer" id="Freezer" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Freezer" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Freezer" class="btn btn-default">
                        <?php echo $this->lang->line('kitch5');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Extractor" id="Extractor" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Extractor" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Extractor" class="btn btn-default">
                        <?php echo $this->lang->line('kitch6');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Pan_kit" id="Pan_kit" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Pan_kit" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Pan_kit" class="btn btn-default">
                        <?php echo $this->lang->line('kitch7');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Dishes_kit" id="Dishes_kit" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Dishes_kit" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Dishes_kit" class="btn btn-default">
                        <?php echo $this->lang->line('kitch8');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Coffee_machine" id="Coffee_machine" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Coffee_machine" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Coffee_machine" class="btn btn-default">
                        <?php echo $this->lang->line('kitch9');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Inside_table" id="Inside_table" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Inside_table" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Inside_table" class="btn btn-default">
                        <?php echo $this->lang->line('kitch10');?>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12">
                        <label for="dining_seats"><?php echo $this->lang->line('dinseat');?> *</label>
                        <select name="dining_seats" class="form-control slt" id="dining_seats" style="height:50px;">
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">+7</option>
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h4> <?php echo $this->lang->line('bath');?></h4><hr>
        <div class="container">
            <div class="col-xs-12 col-sm-6">
                
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Inside_shower" id="Inside_shower" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Inside_shower" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Inside_shower" class="btn btn-default">
                        <?php echo $this->lang->line('bath1');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Outside_shower" id="Outside_shower" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Outside_shower" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Outside_shower" class="btn btn-default">
                        <?php echo $this->lang->line('bath2');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Integrated_bathroom" id="Integrated_bathroom" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Integrated_bathroom" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Integrated_bathroom" class="btn btn-default">
                        <?php echo $this->lang->line('bath3');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Portable_toilet" id="Portable_toilet" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Portable_toilet" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Portable_toilet" class="btn btn-default">
                        <?php echo $this->lang->line('bath4');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Sink_bath" id="Sink_bath" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Sink_bath" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Sink_bath" class="btn btn-default">
                        <?php echo $this->lang->line('bath5');?>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h4><?php echo $this->lang->line('out');?></h4><hr>
        <div class="container">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)"  name="Bicycle_carrier" id="Bicycle_carrier" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Bicycle_carrier" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Bicycle_carrier" class="btn btn-default">
                        <?php echo $this->lang->line('out1');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)"  name="Side_awning" id="Side_awning" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Side_awning" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Side_awning" class="btn btn-default">
                        <?php echo $this->lang->line('out2');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)"  name="Outside_table" id="Outside_table" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Outside_table" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Outside_table" class="btn btn-default">
                        <?php echo $this->lang->line('out3');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Barbecue" id="Barbecue" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Barbecue" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Barbecue" class="btn btn-default">
                        <?php echo $this->lang->line('out4');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Towing_adaptor" id="Towing_adaptor" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Towing_adaptor" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Towing_adaptor" class="btn btn-default">
                        <?php echo $this->lang->line('out5');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Outdoor_luggage_compartment" id="Outdoor_luggage_compartment" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Outdoor_luggage_compartment" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Outdoor_luggage_compartment" class="btn btn-default" style="font-size:14px;height:34px;">
                        <?php echo $this->lang->line('out6');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Outside_chairs" id="Outside_chairs" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Outside_chairs" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Outside_chairs" class="btn btn-default">
                        <?php echo $this->lang->line('out7');?>
                        </label>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <h4><?php echo $this->lang->line('autm');?></h4><hr>
        <div class="container">
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Solar_panels" id="Solar_panels" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Solar_panels" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Solar_panels" class="btn btn-default">
                        <?php echo $this->lang->line('autm1');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Outside_Eletric" id="Outside_Eletric" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Outside_Eletric" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Outside_Eletric" class="btn btn-default" style="font-size:13px;height:34px;">
                        <?php echo $this->lang->line('autm2');?>
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-6">
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Auxiliary_battery" id="Auxiliary_battery" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Auxiliary_battery" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Auxiliary_battery" class="btn btn-default">
                        <?php echo $this->lang->line('autm3');?>
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="checkbox" onclick="ch_box(this)" name="Eletric_generator" id="Eletric_generator" autocomplete="off" />
                    <div class="btn-group">
                        <label for="Eletric_generator" class="btn btn-success">
                            <span class="glyphicon glyphicon-ok"></span>
                            <span> </span>
                        </label>
                        <label for="Eletric_generator" class="btn btn-default">
                        <?php echo $this->lang->line('autm4');?>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <hr>
    <div>
        <h4><?php echo $this->lang->line('vpad');?></h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="Street"><?php echo $this->lang->line('vpad1');?> *</label>
                    <div class="form-group">
                        <input type="text" id="Street" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Number"><?php echo $this->lang->line('vpad2');?> *</label>
                    <div class="form-group">
                        <input type="number" id="Number" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Flat_house"><?php echo $this->lang->line('vpad3');?> *</label>
                    <div class="form-group">
                        <input type="text" id="Flat_house" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Zip_code"><?php echo $this->lang->line('vpad4');?></label>
                    <div class="form-group">
                        <input type="text" id="Zip_code" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="City"><?php echo $this->lang->line('vpad5');?> *</label>
                    <div class="form-group">
                        <input type="text" id="City" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="District"><?php echo $this->lang->line('vpad6');?> *</label>
                    <div class="form-group">
                        <input type="text" id="District" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="Country"><?php echo $this->lang->line('vpad7');?> *</label>
                    <div class="form-group">
                        <select id="Country" name="Country" class="form-control" style="height:50px;">
                            <option value="">SELECT</option>
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
            </div>
            <div class="row">
                <button onclick="parking_up()" class="btn btn-primary" style="margin-left:auto;margin-right:auto;width:200px"><?php echo $this->lang->line('save');?></button>
            </div>
        </div>
    </div>

    <hr>
    <div>
        <h4><?php echo $this->lang->line('renpr');?></h4><hr>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <label for="price"><?php echo $this->lang->line('renpr1').' (EUR)';?> *</label>
                    <div class="form-group">
                        <input type="number" id="price" class="form-control">
                    </div>
                </div>
                <div class="col-md-6">
                    <label for="deposit"><?php echo $this->lang->line('renpr2').' (EUR)';?> *</label>
                    <div class="form-group">
                        <input type="number" id="deposit" class="form-control">
                    </div>
                </div>
            </div>
            <div class="row">
                <button onclick="up_price()" class="btn btn-primary" style="margin-left:auto;margin-right:auto;width:200px"><?php echo $this->lang->line('save');?></button>
            </div>
        </div>
    </div>

    <hr>
    <br><br>
</div>


<script>
    
    var sel_ads_id = <?php echo $ads_id; ?>;

    function add_new_photo(){
        if($('#newphoto').val()==''){
            return;
        }
        var formdata = new FormData();
        formdata.append('new_photo', $('#newphoto')[0].files[0]);
        formdata.append('ads_id',sel_ads_id);

        $.ajax({
            url: '/index.php/My_ads/add_newphoto',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formdata,
            success:function (data) {
                location.reload();
            }
        });
    }

    $(document).ready(function(){
        $.post(
            '/index.php/My_ads/get_all_photo',
            {
                ads_id:sel_ads_id
            },
            function(data){
                $('#photo_v').html(data);
            }
        );

        $.post(
            '/index.php/My_ads/get_type',
            {
                ads_id:sel_ads_id
            },
            function(data){
                var ads_data = JSON.parse(data);
                $('#id_chassis_brand').val(ads_data['chassis_brand']);
                $('#id_chassis_model').val(ads_data['chassis_model']);
                $('#id_model_brand').val(ads_data['model_brand']);
                $('#id_conversion_model').val(ads_data['conversion_model']);
                $('#id_numbers_seats').val(ads_data['seats']);
                $('#id_number_seatbelts').val(ads_data['seatbelts']);
                $('#id_number_berth').val(ads_data['berth']);

                $('#id_license_plate').val(ads_data['license_p']);
                $('#id_registered_country').val(ads_data['reg_country']);
                $('#id_license_plate_year').val(ads_data['license_p_year']);
                $('#id_total_weight').val(ads_data['total_weight']);
                $('#id_fuel').val(ads_data['fuel']);
                $('#id_vehicle_consumption').val(ads_data['consumption']);
                $('#id_vehicle_length').val(ads_data['length']);
                $('#id_vehicle_width').val(ads_data['width']);
                $('#id_vehicle_height').val(ads_data['height']);
                $('#id_acquisition_value').val(ads_data['acquisition_v']);
                $('#id_cell_phone').val(ads_data['cell_phone']);

                $('#descript').val(ads_data['intro']);

                $('#Street').val(ads_data['Street']);
                $('#Number').val(ads_data['Number']);
                $('#Flat_house').val(ads_data['Flat_house']);
                $('#Zip_code').val(ads_data['Zip_code']);
                $('#City').val(ads_data['City']);
                $('#District').val(ads_data['District']);
                $('#Country').val(ads_data['Country']);

                $('#price').val(ads_data['price']);
                $('#deposit').val(ads_data['deposit']);

            }
        );

        $.post(
            '/index.php/My_ads/read_check',
            {
                ads_id:sel_ads_id
            }, 
            function(data){
                var arr = JSON.parse(data);
                $('#dining_seats').val(arr.dining_seats);
                if(arr==null){
                    return;
                }
                else{
                    Object.keys(arr).forEach((e)=>{
                        if($("#"+e)){
                            $("#"+e).attr("checked", arr[e]==1? 1: false);
                            if($("#"+e).attr("checked")){
                                $("#"+e).siblings().children().first().next().addClass('active');
                            }else{
                                $(e).siblings().children().first().next().removeClass('active');
                            }
                        }
                    });
                }
            }
        );

        $.post(
            '/index.php/My_ads/get_berth',
            {
                ads_id:sel_ads_id
            },
            function(data){
                $('#berth_tb').html(data);
            }
        ); 

    });

    function del_berth(e){
        var del_tr = $(e).parent().parent();
        var del_id = $(del_tr).attr('id');
        $.post(
            '/index.php/Create_ads/del_berth',
            {
                del_id:del_id
            },
            function(data){
                $(del_tr).remove();
                location.reload('/');
            }
        );
    }
    
    function ch_box(e){
        var state,id;
        if($(e).is(':checked')){
            $(e).siblings().children().first().next().addClass('active');
            state = 1;
            
        }else{
            $(e).siblings().children().first().next().removeClass('active');
            state = 0
        }

        id = $(e).attr('id');
        console.log(id);
        $.post(
            '/index.php/Create_ads/up_check_ad',
            {
                ads_id:sel_ads_id,
                state:state,
                id:id
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('succh');?>');
            }
        );
    }

    $('#dining_seats').on('change',function(){
        value = $('#dining_seats').val();
        $.post(
            '/index.php/Create_ads/add_dining_seats_step5',
            {
                value:value
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('succh');?>');
            }
        );
    });

    
    function add_berth(){
        var type_berth = $('#type_berth').val();
        var width_berth = $('#width_berth').val();
        var length_berth = $('#length_berth').val();
        if(type_berth=='Select'){
            $('#type_berth').focus();
            toastr_call('info','<?php echo $this->lang->line('btype');?>');
            return;
        }else if(width_berth==''){
            $('#width_berth').focus();
            toastr_call('info','<?php echo $this->lang->line('bwidth');?>');return;
        }else if(length_berth==''){
            $('#length_berth').focus();
            toastr_call('info','<?php echo $this->lang->line('blength');?>');return;
        }
        $.post(
            '/index.php/My_ads/create_berth',
            {
                ads_id:sel_ads_id,
                type_berth:type_berth,
                width_berth:width_berth,
                length_berth:length_berth
            },
            function(data){
                location.reload('/');
            }
        );
    }

    function v_type_u(){
        var id_chassis_brand = $('#id_chassis_brand').val();
        var id_chassis_model = $('#id_chassis_model').val();
        var id_model_brand = $('#id_model_brand').val();
        var id_conversion_model = $('#id_conversion_model').val();
        var id_numbers_seats = $('#id_numbers_seats').val();
        var id_number_seatbelts = $('#id_number_seatbelts').val();
        var id_number_berth = $('#id_number_berth').val();

        $.post(
            '/index.php/My_ads/update_type',
            {
                ads_id:sel_ads_id,
                id_chassis_brand:id_chassis_brand,
                id_chassis_model:id_chassis_model,
                id_model_brand:id_model_brand,
                id_conversion_model:id_conversion_model,
                id_numbers_seats:id_numbers_seats,
                id_number_seatbelts:id_number_seatbelts,
                id_number_berth:id_number_berth
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('succh');?>')
            }
        );
    }


    function u_tech_charact(){
        var id_license_plate = $('#id_license_plate').val();
        var id_registered_country = $('#id_registered_country').val();
        var id_license_plate_year = $('#id_license_plate_year').val();
        var id_total_weight = $('#id_total_weight').val();
        var id_fuel = $('#id_fuel').val();
        var id_vehicle_length = $('#id_vehicle_length').val();
        var id_vehicle_consumption = $('#id_vehicle_consumption').val();
        var id_vehicle_width = $('#id_vehicle_width').val();
        var id_vehicle_height = $('#id_vehicle_height').val();
        var id_acquisition_value = $('#id_acquisition_value').val();
        var id_cell_phone = $('#id_cell_phone').val();

        $.post(
            '/index.php/My_ads/update_charact',
            {
                ads_id:sel_ads_id,
                id_license_plate:id_license_plate,
                id_registered_country:id_registered_country,
                id_license_plate_year:id_license_plate_year,
                id_total_weight:id_total_weight,
                id_fuel:id_fuel,
                id_vehicle_length:id_vehicle_length,
                id_vehicle_consumption:id_vehicle_consumption,
                id_vehicle_width:id_vehicle_width,
                id_vehicle_height:id_vehicle_height,
                id_acquisition_value:id_acquisition_value,
                id_cell_phone:id_cell_phone
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('succh');?>');
            }
        );
    }

    function u_intro(){
        var intro = $('#descript').val();
        $.post(
            '/index.php/My_ads/update_intro',
            {
                ads_id:sel_ads_id,
                intro:intro
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('succh');?>');
            }
        );
    }

    function parking_up(){
        var Street = $('#Street').val();
        var Number = $('#Number').val();
        var Flat_house = $('#Flat_house').val();
        var Zip_code = $('#Zip_code').val();
        var City = $('#City').val();
        var District = $('#District').val();
        var Country = $('#Country').val();

        $.post(
            '/index.php/My_ads/update_parking_address',
            {
                ads_id:sel_ads_id,
                Street:Street,
                Number:Number,
                Flat_house:Flat_house,
                Zip_code:Zip_code,
                City:City,
                District:District,
                Country:Country
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('succh');?>')
            }
        );
    }

    function up_price(){
        var price = $('#price').val();
        var deposit = $('#deposit').val();
        $.post(
            '/index.php/My_ads/update_price',
            {
                ads_id:sel_ads_id,
                price:price,
                deposit:deposit
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('succh');?>');
            }
        );
    }

</script>

    




