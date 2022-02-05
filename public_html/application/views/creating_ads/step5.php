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
    <div class="row">
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

                      <li class="progress-step is-active" aria-current="step">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">3</h4>
                        </div>
                      </li>

                      <li class="progress-step is-active">
                        <div class="progress-marker"></div>
                        <div class="progress-text">
                          <h4 class="progress-title">4</h4>
                        </div>
                      </li>

                      <li class="progress-step is-active">
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

                <div class="col-xs-10">
                    <div class="container" style="padding-left: 30px">
                        <div >
                            <h3><?php echo $this->lang->line('veq');?></h3>
                            <p><?php echo $this->lang->line('veq1');?></p>
                        </div>
                        <!-- here -->
                        <hr>

                        <h4><?php echo $this->lang->line('drivrel');?></h4><hr>
                    </div>
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
                        
                    <div style="text-align:center">
                        <hr><button class="btn btn-info btn-lg" onclick="back_step4()">Back</button>
                        <button class="btn btn-primary btn-lg" onclick="to_step6()">Next</button><hr>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3><?php echo $this->lang->line('st3r1');?></h3>
                <p><?php echo $this->lang->line('st5r1');?></p>
            </div>
            <div class="aside_advice">
                <h3><?php echo $this->lang->line('st3r3');?></h3>
                <p><?php echo $this->lang->line('st5r2');?></p>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function(){
    $.post(
        '/index.php/Create_ads/read_step5', 
        function(data){
            var arr = JSON.parse(data);
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

}); 

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
    
    $.post(
        '/index.php/Create_ads/up_step5',
        {
            state:state,
            id:id
        },
        function(data){
            
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

        }
    );
});

function to_step6(){
    $.post(
        '/index.php/Create_ads/update_step',
        {
            step:5
        },
        function(data){
            window.location.href = '/index.php/Create_ads/step6/';
        }
    );
}

function back_step4(){
    window.location.href = '/index.php/Create_ads/step4/';
}


</script>



