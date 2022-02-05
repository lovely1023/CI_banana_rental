<style>
    body{
        background:#f3f4f5;
    }
</style>


<link rel="stylesheet" href="/assets/step_progress/styles/site.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono|Open+Sans:300,400&display=swap">
<link rel="stylesheet" href="/assets/step_progress/styles/progress-tracker.css">

<script src="/assets/step_progress/scripts/site.js"></script>

<div class="container">
    <div class="col-xs-12">
        <div class="col-xs-12 col-lg-9" style="height:auto">
            <div>
                <a href="/" >
                    <img src="/assets/img/sign.png" style="height:75px;padding:5px;" alt="Monkey">
                </a>
            </div>
            <div><p style="font-size:18px;text-align:center"><b><?php echo $this->lang->line('steprang');?></b></p></div>
            <div class="col-xs-12">
                
                <div class="fullwidth col-xs-2"> 
                  <div class="container">
                        <style>
                            .progress-tracker--vertical .progress-text {
                                padding: 0 12px 30px 12px;
                            }
                            .separator {
                                 border-bottom: 0px solid #ddd; 
                            }
                            .progress-tracker {
                                display: -webkit-box;
                                display: -ms-flexbox;
                                display: flex;
                                margin: 10px auto;
                                padding: 0;
                                list-style: none;
                            }
                        </style>
                    <ul class="progress-tracker progress-tracker--vertical">
                      <!-- <li class="progress-step is-complete"> -->
                      <li class="progress-step is-active">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">1</h4>                     
                        </div>
                      </li>

                      <li class="progress-step is-active">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">2</h4>
                        </div>
                      </li>

                      <li class="progress-step" aria-current="step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">3</h4>
                        </div>
                      </li>

                      <li class="progress-step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">4</h4>
                        </div>
                      </li>

                      <li class="progress-step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">5</h4>
                        </div>
                      </li>
                      <li class="progress-step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">6</h4>
                        </div>
                      </li>
                      <li class="progress-step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">7</h4>
                        </div>
                      </li>
                      <li class="progress-step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">8</h4>
                        </div>
                      </li>
                      <li class="progress-step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">9</h4>
                        </div>
                      </li>
                    </ul>        
                  
                  </div>
                </div>

                <div class="col-xs-10" style="padding-left: 30px">    
                    <div>
                        <h3><?php echo $this->lang->line('st2cmm');?></h3>
                        <p><?php echo $this->lang->line('st2cmm2');?></p>
                    </div>
        
                    <div class="col-xs-12 col-md-6">
                        <label for="id_license_plate"><?php echo $this->lang->line('tech1');?> *</label>
                        <div class="form-group">
                            <input type="text" id="id_license_plate" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
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
                    
                    <div class="col-xs-12 col-md-6">
                        <label for="id_license_plate_year"><?php echo $this->lang->line('tech3');?> *</label>
                        <div class="form-group">
                            <input type="date" id="id_license_plate_year" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                        <label for="id_total_weight"><?php echo $this->lang->line('tech4');?> *</label>
                        <div class="input-group">
                            <input type="number" id="id_total_weight" required="" max="10000" min="100"  class="form-control">
                            <span class="input-group-addon">kg</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6" style="height:50px;"></div>
                    <div class="col-xs-12 col-md-4">
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
                    <div class="col-xs-12 col-md-4">
                        <label for="id_vehicle_consumption"><?php echo $this->lang->line('tech5');?> *</label>
                        <select name="id_vehicle_consumption" class="form-control slt" id="id_vehicle_consumption" style="height:50px;">
                            <option value="Select"><?php echo $this->lang->line('select');?></option>
                            <option value="-6L/100km">-6L/100km</option>
                            <option value="6~8L/100km">6~8L/100km</option>
                            <option value="8~10L/100km">8~10L/100km</option>
                            <option value="10~12L/100km">10~12L/100km</option>
                            <option value="12~14L/100km">12~14L/100km</option>
                            <option value="+14L/100km">+14L/100km</option>
                        </select>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="id_vehicle_length"><?php echo $this->lang->line('tech6');?> *</label>
                        <div class="input-group">
                            <input type="number" id="id_vehicle_length" name="id_vehicle_length" required="" max="20.0" min="0.0" step=".1" class="form-control">
                            <span class="input-group-addon">meters</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="id_vehicle_width"><?php echo $this->lang->line('tech7');?> *</label>
                        <div class="input-group">
                            <input type="number" id="id_vehicle_width" name="id_vehicle_width" required="" max="20.0" min="0.0" step=".1" class="form-control">
                            <span class="input-group-addon">meters</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="id_vehicle_height"><?php echo $this->lang->line('tech8');?> *</label>
                        <div class="input-group">
                            <input type="number" id="id_vehicle_height" name="id_vehicle_height" required="" max="20.0" min="0.0" step=".1" class="form-control">
                            <span class="input-group-addon">meters</span>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-4">
                        <label for="id_acquisition_value"><?php echo $this->lang->line('tech9');?> *</label>
                        <div class="form-group">
                            <input type="number" id="id_acquisition_value" class="form-control">
                        </div>
                    </div>
                    <div class="col-xs-12">
                            <p><?php echo $this->lang->line('techmsg');?></p>
                            <label for="id_cell_phone" class="col-xs-12 col-md-12" style="padding-top: 4px;"><?php echo $this->lang->line('tech10');?> *</label>
                            <div class="form-group col-xs-12 col-md-6">
                                <input type="number" id="id_cell_phone" class="form-control">
                            </div>
                        </div>
                    
                    <div class="col-xs-12" style="text-align:center">
                        <hr><button class="btn btn-primary btn-lg" onclick="back_step1()"><?php echo $this->lang->line('back');?></button>
                        <button class="btn btn-primary btn-lg" onclick="to_step3()"><?php echo $this->lang->line('next');?></button><hr>
                    </div>
                </div>
            </div>
        </div>

          <div class="col-xs-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3><?php echo $this->lang->line('st2r1');?> !</h3>
                <p> <?php echo $this->lang->line('st2r2');?>.</p>
            </div>
            <div class="aside_advice">
                <h3><?php echo $this->lang->line('st2r3');?></h3>
                <p><?php echo $this->lang->line('st2r4');?>.</p>
            </div>
         </div>
    </div>
      
   
</div>

<script>
 function to_step3(){
    var id_license_plate = $('#id_license_plate').val();
    var id_registered_country = $('#id_registered_country').val();
    var id_license_plate_year = $('#id_license_plate_year').val();
    var id_total_weight = $('#id_total_weight').val();
    var id_fuel = $('#id_fuel').val();
    var id_vehicle_consumption = $('#id_vehicle_consumption').val();
    var id_vehicle_length = $('#id_vehicle_length').val();
    var id_vehicle_width = $('#id_vehicle_width').val();
    var id_vehicle_height = $('#id_vehicle_height').val();
    var id_acquisition_value = $('#id_acquisition_value').val();
    var id_cell_phone = $('#id_cell_phone').val();
    
    // console.log(id_vehicle_height);return;

    if(id_license_plate==''){
        $('#id_license_plate').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }else if(id_registered_country==''){
        $('#id_registered_country').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }else if(id_license_plate_year==''){
        $('#id_license_plate_year').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }else if(id_total_weight==''){
        $('#id_total_weight').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }else if(id_fuel=='Select'){
        $('#id_fuel').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }
    else if(id_vehicle_consumption=='Select'){
        $('#id_vehicle_consumption').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }
    else if(id_vehicle_length==''){
        $('#id_vehicle_length').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }
    else if(id_vehicle_width==''){
        $('#id_vehicle_width').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }
    else if(id_vehicle_height==''){
        $('#id_vehicle_height').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }
    else if(id_acquisition_value==''){
        $('#id_acquisition_value').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }
    else if(id_cell_phone==''){
        $('#id_cell_phone').focus();
        toastr_call('error','<?php echo $this->lang->line("require");?>');return;
    }

    $.post(
        '/index.php/Create_ads/create_step2',
        {
            license_p:id_license_plate,
            reg_country:id_registered_country,
            license_p_year:id_license_plate_year,
            total_weight:id_total_weight,
            fuel:id_fuel,
            consumption:id_vehicle_consumption,
            length:id_vehicle_length,
            width:id_vehicle_width,
            height:id_vehicle_height,
            acquisition_v:id_acquisition_value,
            cell_phone:id_cell_phone
        },
        function(data){
            window.location.href = '/index.php/Create_ads/step3/';
        }
    );

}

function back_step1(){
    window.location.href = '/index.php/Create_ads/step1';
}
</script>



