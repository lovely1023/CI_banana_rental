<style>h5{color:red;padding:30px;}</style>
<div class="" style="margin-top:100px;"></div>
<?php $this->load->view('userpage/components/navbar') ?>
<div class="container">
    <br>
    <h3><?php echo $this->lang->line('profile');?></h3>

    <hr>
    <h5><?php echo $this->lang->line('identity');?></h5>
    <div class="row">
        <div class="col-sm-6">
            <label for="id_first_name"><?php echo $this->lang->line('firstn');?></label>
            <div class="form-group">
                <input type="text" id="id_first_name" placeholder="<?php echo $this->lang->line('firstn');?>" class="form-control" maxlength="30">
            </div>
        </div>
        <div class="col-sm-6">
            <label for="id_last_name"><?php echo $this->lang->line('lastn');?></label>
            <div class="form-group">
                <input type="text" id="id_last_name" placeholder="<?php echo $this->lang->line('lastn');?>" class="form-control" maxlength="30">
            </div>
        </div>
        <div class="col-sm-6">
            <label for="id_phone_num"><?php echo $this->lang->line('phone');?></label>
            <div class="form-group">
                <input type="number" id="id_phone_num" placeholder="<?php echo $this->lang->line('phone');?>" class="form-control" maxlength="30">
            </div>
        </div>
        
        <div class="col-sm-6">
            <label for="Country"><?php echo $this->lang->line('country'); ?></label>
            <div class="form-group">
                <select id="Country" class="form-control" style="height:50px;">
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
        <div class="col-sm-6">
            <label for="City"><?php echo $this->lang->line('city'); ?></label>
            <input type="text" id="City" placeholder="City" class="form-control"  style="height:50px;">
        </div>
        <div class="col-sm-6">
            <label for="Street"><?php echo $this->lang->line('street'); ?></label>
            <input type="text" id="Street" placeholder="Street" class="form-control"  style="height:50px;">
        </div>
        <div class="col-sm-6">
            <label for="House_number"><?php echo $this->lang->line('hnum'); ?></label>
            <input type="number" id="House_number" placeholder="House_number" class="form-control"  style="height:50px;">
        </div>
        <div class="col-sm-6">
            <label for="Postal_Code"><?php echo $this->lang->line('pcode'); ?></label>
            <input type="number" id="Postal_Code" placeholder="Postal_Code" class="form-control"  style="height:50px;">
        </div>

        <div class="col-sm-12">
            <div class="form-group">
                <label for="id_borned_on"><?php echo $this->lang->line('birth');?></label>
                <div class="row row-selectDate">
                    <div class="col-sm-4 col-xs-12">
                        <select name="id_borned_on_day" id="id_borned_on_day" class="form-control">
                            <option value="0">---</option>
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
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <select name="id_borned_on_month" id="id_borned_on_month" class="form-control">
                            <option value="0">---</option>
                            <option value="01"><?php echo $this->lang->line('m1');?></option>
                            <option value="02"><?php echo $this->lang->line('m2');?></option>
                            <option value="03"><?php echo $this->lang->line('m3');?></option>
                            <option value="04"><?php echo $this->lang->line('m4');?></option>
                            <option value="05"><?php echo $this->lang->line('m5');?></option>
                            <option value="06"><?php echo $this->lang->line('m6');?></option>
                            <option value="07"><?php echo $this->lang->line('m7');?></option>
                            <option value="08"><?php echo $this->lang->line('m8');?></option>
                            <option value="09"><?php echo $this->lang->line('m9');?></option>
                            <option value="10"><?php echo $this->lang->line('m10');?></option>
                            <option value="11"><?php echo $this->lang->line('m11');?></option>
                            <option value="12"><?php echo $this->lang->line('m12');?></option>
                        </select>
                    </div>
                    <div class="col-sm-4 col-xs-12">
                        <select name="id_borned_on_year" id="id_borned_on_year" class="form-control">
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
        </div>

    </div>

    <div class="row">
        <button onclick="u_identity()" class="btn btn-primary savebtn savebtn"><?php echo $this->lang->line('save');?></button>
    </div>
    
    <hr>
    <h5><?php echo $this->lang->line('abme');?></h5>
    <div class="row">
        <div class="col-sm-12">
            <div class="form-group  ">
                <label for="id_description">
                <?php echo $this->lang->line('who');?>
                </label>
                <textarea name="id_description" id="id_description"
                         rows="6" cols="40" class="form-control"></textarea>
            </div>
            
        </div>
    </div>
    <div class="row">
        <button onclick="u_description()" class="btn btn-primary savebtn"><?php echo $this->lang->line('save');?></button>
    </div>
    
    <hr>
    <h5><?php echo $this->lang->line('mypic');?></h5><br>
    <div class="row">
        <div class="col-sm-12">
            <div id="user_pic_div">
                <input type="file" id="profile_picture" hidden>
                <label id="user_avartar" for="profile_picture">
                    <img id="user_picture">
                </label>
            </div>
        </div>
    </div>
    <div class="row">
        <button onclick="up_picture()" class="btn btn-primary savebtn" style="margin-top:30px;margin-left:auto;margin-right:auto;width:150px;"><?php echo $this->lang->line('save');?></button>
    </div>
    
    <hr>
    <h5><?php echo $this->lang->line('chpw');?></h5><br>
    <div class="row">
        <div class="col-sm-12">
            <label for="id_current_pw"><?php echo $this->lang->line('opw');?></label>
            <div class="form-group">
                <input type="text" id="id_current_pw" placeholder="<?php echo $this->lang->line('opw');?>" class="form-control" maxlength="30">
            </div>
        </div>
        <div class="col-sm-6">
            <label for="id_new_pw"><?php echo $this->lang->line('npw');?></label>
            <div class="form-group">
                <input type="text" id="id_new_pw" placeholder="<?php echo $this->lang->line('npw');?>" class="form-control" maxlength="30">
            </div>
        </div>
        <div class="col-sm-6">
            <label for="id_confirm_pw"><?php echo $this->lang->line('conpw');?></label>
            <div class="form-group">
                <input type="text" id="id_confirm_pw" placeholder="<?php echo $this->lang->line('conpw');?>" class="form-control" maxlength="30">
            </div>
        </div>
    </div>
    <div class="row">
        <button onclick="change_pw()" class="btn btn-primary savebtn" style="margin-top:30px;margin-left:auto;margin-right:auto;width:150px;"><?php echo $this->lang->line('save');?></button>
    </div>
    
    <hr>
    <h5><?php echo $this->lang->line('mydoc');?></h5><br>
    <div class="row">
        <div class="col-md-6" style="text-align:center;">
            <span><?php echo $this->lang->line('drdoc');?></span><br>
            <input type="file" id="drive_doc" hidden>
            <label id="drive_doc_div" for="drive_doc">
                <img id="drive_doc_img">
            </label>
        </div>
        <div class="col-md-6" style="text-align:center;">
            <span><?php echo $this->lang->line('idtdoc');?></span><br>
            <input type="file" id="identity" hidden>
            <label id="identity_div" for="identity">
                <img id="identity_img">
            </label>
        </div>
    </div>
    <div class="row">
        <button onclick="up_doc()" class="btn btn-primary savebtn"><?php echo $this->lang->line('save');?></button>
    </div>
    
    <hr>
    <h5><?php echo $this->lang->line('bankd');?></h5>
    <div class="row">
        <div class="col-sm-12">
            <label for="id_iban"><?php echo $this->lang->line('paypadd');?></label>
            <div class="form-group">
                <input type="text" id="id_iban" placeholder="<?php echo $this->lang->line('paypadd');?>" class="form-control" maxlength="30">
            </div>
        </div>
    </div>
    <div class="row">
        <button onclick="u_bank()" class="btn btn-primary savebtn"><?php echo $this->lang->line('save');?></button>
    </div><hr>
</div>

<script>
    $(document).ready(function(){
        $('#my_account_nav').addClass('active');
        $.post(
            '/index.php/Myaccount/get_profile',
            function(data){
                var arr = JSON.parse(data);
                
                $('#id_first_name').val(arr.first);
                $('#id_last_name').val(arr.last);
                $('#id_phone_num').val(arr.phone_num);
                $('#Country').val(arr.Country);
                $('#City').val(arr.City);
                $('#Street').val(arr.Street);
                $('#House_number').val(arr.House_number);
                $('#Postal_Code').val(arr.Postal_Code);
                var birthday = arr.birth.split('-');
                $('#id_borned_on_day').val(birthday[2]);
                $('#id_borned_on_month').val(birthday[1]);
                $('#id_borned_on_year').val(birthday[0]);

                $('#id_description').val(arr.presentation);

                $('#user_picture').attr('src','/uploads/user_pictures/'+arr.user_picture);

                $('#drive_doc_img').attr('src','/uploads/driving_license/'+arr.driv_doc);
                $('#identity_img').attr('src','/uploads/identity_cards/'+arr.identity);

                $('#id_iban').val(arr.iban);
                           

            }
        ); 
    })

    function u_identity(){
        var first = $('#id_first_name').val();
        var last = $('#id_last_name').val();
        var phone_num = $('#id_phone_num').val();
        var birth_day = $('#id_borned_on_day').val();
        var birth_month = $('#id_borned_on_month').val();
        var birth_year = $('#id_borned_on_year').val();
        var Country = $('#Country').val();
        var City = $('#City').val();
        var Street = $('#Street').val();
        var House_number = $('#House_number').val();
        var Postal_Code = $('#Postal_Code').val();
        if(first==''){$('#id_first_name').focus();toastr_call('error','this is required field');return;}
        if(last==''){$('#id_last_name').focus();toastr_call('error','this is required field');return;}
        if(phone_num==''){$('#id_phone_num').focus();toastr_call('error','this is required field');return;}
        if(birth_day==0){$('#id_borned_on_day').focus();toastr_call('error','this is required field');return;}
        if(birth_month==0){$('#id_borned_on_month').focus();toastr_call('error','this is required field');return;}
        if(birth_year==0){$('#id_borned_on_year').focus();toastr_call('error','this is required field');return;}
        if(Country==''){$('#Country').focus();toastr_call('error','this is required field');return;}
        if(City==''){$('#City').focus();toastr_call('error','this is required field');return;}
        if(Street==''){$('#Street').focus();toastr_call('error','this is required field');return;}
        if(House_number==''){$('#House_number').focus();toastr_call('error','this is required field');return;}
        if(Postal_Code==''){$('#Postal_Code').focus();toastr_call('error','this is required field');return;}
        var birth=birth_year+'-'+birth_month+'-'+birth_day;
        $.post(
            '/index.php/Myaccount/up_identity',
            {
                first:first,
                last:last,
                phone_num:phone_num,
                birth:birth,
                Country:Country,
                City:City,
                Street:Street,
                House_number:House_number,
                Postal_Code:Postal_Code
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('success');?>');
            }
        );
    }

    function u_description(){
        var description = $('#id_description').val();
        if(description==''){$('#id_description').focus();
            toastr_call('error','this is required field');return;}
        $.post(
            '/index.php/Myaccount/up_description',
            {
                description:description
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('success');?>');
            }
        );
    }

    function up_picture(){
        var up_pic = $('#profile_picture').val();
        if(up_pic==''){toastr_call('error','<?php echo $this->lang->line('selpic');?>');return;}
        
        var formdata = new FormData();
        formdata.append('picture', $('#profile_picture')[0].files[0]);
        
        $.ajax({
            url: '/index.php/Myaccount/up_picture',
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

    function up_doc(){
        
        var formdata = new FormData();

        var up_drv = $('#drive_doc').val();
        var up_idt = $('#identity').val();
        if(up_drv=='' && up_idt==''){ 
            toastr_call('error','<?php echo $this->lang->line('selndoc');?>');
        }
        else if(up_drv=='' && up_idt!=''){
            formdata.append('identity', $('#identity')[0].files[0]);
            
            $.ajax({
                url: '/index.php/Myaccount/up_doc2',
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
        else if(up_drv!='' && up_idt==''){
            formdata.append('drive_doc', $('#drive_doc')[0].files[0]);
            
            $.ajax({
                url: '/index.php/Myaccount/up_doc1',
                type: 'POST',
                processData: false,
                contentType: false,
                cache: false,
                data: formdata,
                success:function (data) {
                    location.reload();
                }
            });
        }else{
            formdata.append('drive_doc', $('#drive_doc')[0].files[0]);
            formdata.append('identity', $('#identity')[0].files[0]);
            
            $.ajax({
                url: '/index.php/Myaccount/up_doc',
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
    }

    function change_pw(){
        var old=$('#id_current_pw').val();
        var newpw=$('#id_new_pw').val();
        var confirm=$('#id_confirm_pw').val();

        if(old==''){$('#id_current_pw').focus();toastr_call('warning','<?php echo $this->lang->line('wrpw');?>');return;}
        if(newpw==''){$('#id_new_pw').focus();toastr_call('warning','<?php echo $this->lang->line('wrpw');?>');return;}
        if(newpw!=confirm){$('#id_confirm_pw').val('');$('#id_confirm_pw').focus();toastr_call('warning','<?php echo $this->lang->line('wrpw');?>');return;}
        
        $.post(
            '/index.php/Myaccount/change_pw',
            {
                old:old,
                newpw:newpw
            },
            function(data){
                if(data=='otherpw'){
                    toastr_call('error','<?php echo $this->lang->line('selpic');?>');
                    $('#id_current_pw').val('');
                    $('#id_current_pw').focus();
                }else if(data=='ok'){
                    $('#id_current_pw').val('');
                    $('#id_new_pw').val('');
                    $('#id_confirm_pw').val('');
                    toastr_call('success','<?php echo $this->lang->line('success');?>');
                }
            }
        );
    }

    function u_bank(){
        var id_iban = $('#id_iban').val();
        

        $.post(
            '/index.php/Myaccount/up_bank',
            {
                iban:id_iban,
                
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('success');?>');
            }
        );
    }

</script>