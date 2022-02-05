<div class="container" style="max-height:500px;overflow-y:scroll;">
    <div class="row">
        First Name: <input type="text" value="<?php echo $ads->first;?>" disabled><br>
        Last Name: <input type="text" value="<?php echo $ads->last;?>" disabled><br>
        Email: <input type="text" value="<?php echo $ads->email;?>" disabled><br>
        Vehicle Type: <input type="text" value="<?php echo $ads->vehicle_type;?>" disabled><br>
        Chassis Brand: <input type="text" value="<?php echo $ads->chassis_brand;?>" disabled><br>
        Chassis Model: <input type="text" value="<?php echo $ads->chassis_model;?>" disabled><br>
        Conversion Model:<input type="text" value="<?php echo $ads->conversion_model;?>" disabled><br>
        Seats: <input type="text" value="<?php echo $ads->seats;?>" disabled><br>
        Seatbelts: <input type="text" value="<?php echo $ads->seatbelts;?>" disabled><br>
        Beds: <input type="text" value="<?php echo $ads->berth;?>" disabled><br>
        License Plate: <input type="text" value="<?php echo $ads->license_p;?>" disabled><br>
        Registered Country: <input type="text" value="<?php echo $ads->reg_country;?>" disabled><br>
        License Plate Year: <input type="text" value="<?php echo $ads->license_p_year;?>" disabled><br>
        Total authorized weight under load: <input type="text" value="<?php echo $ads->total_weight.' kg';?>" disabled><br>
        Fuel: <input type="text" value="<?php echo $ads->fuel;?>" disabled><br>
        Consumption: <input type="text" value="<?php echo $ads->consumption;?>" disabled><br>
        Length: <input type="text" value="<?php echo $ads->length.' m';?>" disabled><br>
        Width: <input type="text" value="<?php echo $ads->width.' m';?>" disabled><br>
        Height: <input type="text" value="<?php echo $ads->height.' m';?>" disabled><br>
        Acquisition value: <input type="text" value="<?php echo $ads->acquisition_v;?>" disabled><br>
        Cell Phone: <input type="text" value="<?php echo $ads->cell_phone;?>" disabled><br>
        Street: <input type="text" value="<?php echo $ads->Street;?>" disabled><br>
        Number: <input type="text" value="<?php echo $ads->Number;?>" disabled><br>
        Flat House: <input type="text" value="<?php echo $ads->Flat_house;?>" disabled><br>
        Zip Code: <input type="text" value="<?php echo $ads->Zip_code;?>" disabled><br>
        Country: <input type="text" value="<?php echo $ads->Country;?>" disabled><br>
        City: <input type="text" value="<?php echo $ads->City;?>" disabled><br>
        District: <input type="text" value="<?php echo $ads->District;?>" disabled><br>
        Price: <input type="text" value="<?php echo $ads->price;?>" disabled><br>
        Deposit: <input type="text" value="<?php echo $ads->deposit;?>" disabled><br>
        Vehicle Assurance: <input type="text" value="<?php echo $ads->assurance_doc;?>" disabled><br>
        License Plat Registration: <input type="text" value="<?php echo $ads->lics_plate_doc;?>" disabled><br>
        Technical inspection : <input type="text" value="<?php echo $ads->tech_inspec_doc;?>" disabled><br>
    </div><br>
    
    <h6><b>Equipment</b></h6><br>
    <div class="row"> 
        <div class="col-md-1"></div>
        <div class="col-md-11"><h6>=Driving related=</h6></div>
    </div><br>
    <div class="row">
        <?php if($ads->power_steering==1){ ?>
        <div class="col-md-4">
            <?php echo "Power Steering";?>
        </div>
        <?php }if($ads->cruise_control==1){ ?>
            <div class="col-md-4">
            <?php echo "Cruise Control";?>
            </div>
        <?php }if($ads->wheel_drive==1){ ?>
            <div class="col-md-4">
            <?php echo "Wheel Drive";?>
            </div>
        <?php }if($ads->gps==1){ ?>
            <div class="col-md-4">
            <?php echo "GPS";?>
            </div>
        <?php }if($ads->parking_motion==1){ ?>
            <div class="col-md-4">
            <?php echo "Parking Motion";?>
            </div>
        <?php }if($ads->rear_camera==1){ ?>
            <div class="col-md-4">
            <?php echo "Rear Camera";?>
            </div>
        <?php }if($ads->cabin_heating==1){ ?>
            <div class="col-md-4">
            <?php echo "Cabin Heating";?>
            </div>
        <?php }if($ads->ac==1){ ?>
            <div class="col-md-4">
            <?php echo "AC";?>
            </div>
            <?php }if($ads->central_lock==1){ ?>
            <div class="col-md-4">
            <?php echo "Central Lock";?>
            </div>
            <?php }if($ads->baby_seat==1){ ?>
            <div class="col-md-4">
            <?php echo "Baby Seat";?>
            </div>
            <?php }if($ads->baby_car_chair==1){ ?>
            <div class="col-md-4">
            <?php echo "Baby Car Chair";?>
            </div>

            <?php }if($ads->winter_tires==1){ ?>
            <div class="col-md-4">
            <?php echo "Winter Tires";?>
            </div>
            <?php }if($ads->snow_chains==1){ ?>
            <div class="col-md-4">
            <?php echo "Snow Chains";?>
            </div>
            <?php }if($ads->wedge_levelers==1){ ?>
            <div class="col-md-4">
            <?php echo "Wedge Levelers";?>
            </div>
            <?php }if($ads->safety_kit==1){ ?>
            <div class="col-md-4">
            <?php echo "Safety Kit";?>
            </div>
        <?php } ?>
    </div><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><h6>=Life on Board=</h6></div>
    </div><br>
    <div class="row">
            <?php if($ads->Autoradio==1){ ?>
        <div class="col-md-4">
            <?php echo "Autoradio";?>
        </div>
        <?php }if($ads->CD_Player==1){ ?>
        <div class="col-md-4">
            <?php echo "CD Player";?>
        </div>
        <?php }if($ads->MP3==1){ ?>
        <div class="col-md-4">
            <?php echo "MP3";?>
        </div>
        <?php }if($ads->Audio_in==1){ ?>
        <div class="col-md-4">
            <?php echo "Audio in";?>
        </div>
        <?php }if($ads->Bluetooth==1){ ?>
        <div class="col-md-4">
            <?php echo "Bluetooth";?>
        </div>
        <?php }if($ads->TV==1){ ?>
        <div class="col-md-4">
            <?php echo "TV";?>
        </div>
        <?php }if($ads->DVD_Player==1){ ?>
        <div class="col-md-4">
            <?php echo "DVD Player";?>
        </div>
        <?php }if($ads->Satellite_dish==1){ ?>
        <div class="col-md-4">
            <?php echo "Satellite dish";?>
        </div>
        <?php }if($ads->Sponge==1){ ?>
        <div class="col-md-4">
            <?php echo "Sponge";?>
        </div>
        <?php }if($ads->AC_life==1){ ?>
        <div class="col-md-4">
            <?php echo "AC life";?>
        </div>
        <?php }if($ads->Bed_linen==1){ ?>
        <div class="col-md-4">
            <?php echo "Bed linen";?>
        </div>
        <?php }if($ads->Swing_driver==1){ ?>
        <div class="col-md-4">
            <?php echo "Swing driver";?>
        </div>
        <?php }if($ads->Swing_passenger==1){ ?>
        <div class="col-md-4">
            <?php echo "Swing Passenger";?>
        </div>
        <?php } ?>
    </div><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><h6>=Kitchen / Dining area=</h6></div>
    </div><br>
    <div class="row">
        <?php if($ads->Sink==1){ ?>
        <div class="col-md-4">
            <?php echo "Sink";?>
        </div>
        <?php }if($ads->Stove==1){ ?>
        <div class="col-md-4">
            <?php echo "Stove";?>
        </div>
        <?php }if($ads->Oven==1){ ?>
        <div class="col-md-4">
            <?php echo "Oven";?>
        </div>
        <?php }if($ads->Fridge==1){ ?>
        <div class="col-md-4">
            <?php echo "Fridge";?>
        </div>
        <?php }if($ads->Freezer==1){ ?>
        <div class="col-md-4">
            <?php echo "Freezer";?>
        </div>
        <?php }if($ads->Extractor==1){ ?>
        <div class="col-md-4">
            <?php echo "Extractor";?>
        </div>
        <?php }if($ads->Pan_kit==1){ ?>
        <div class="col-md-4">
            <?php echo "Pan kit";?>
        </div>
        <?php }if($ads->Dishes_kit==1){ ?>
        <div class="col-md-4">
            <?php echo "Dishes kit";?>
        </div>
        <?php }if($ads->Coffee_machine==1){ ?>
        <div class="col-md-4">
            <?php echo "Coffee machine";?>
        </div>
        <?php }if($ads->Inside_table==1){ ?>
        <div class="col-md-4">
            <?php echo "Inside table";?>
        </div>
        <?php } ?>
    </div><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><h6>=Bathroom=</h6></div>
    </div><br>
    <div class="row">
        <?php if($ads->Inside_shower==1){ ?>
        <div class="col-md-4">
            <?php echo "Inside Shower";?>
        </div>
        <?php }if($ads->Outside_shower==1){ ?>
        <div class="col-md-4">
            <?php echo "Outside Shower";?>
        </div>
        <?php }if($ads->Integrated_bathroom==1){ ?>
        <div class="col-md-4">
            <?php echo "Integrated Bathroom";?>
        </div>
        <?php }if($ads->Portable_toilet==1){ ?>
        <div class="col-md-4">
            <?php echo "Portable toilet";?>
        </div>
        <?php }if($ads->Sink_bath==1){ ?>
        <div class="col-md-4">
            <?php echo "Sink";?>
        </div>
        <?php } ?>
    </div><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><h6>=OutSide=</h6></div>
    </div><br>
    <div class="row">
        <?php if($ads->Bicycle_carrier==1){ ?>
        <div class="col-md-4">
            <?php echo "Bicycle Carrier";?>
        </div>
        <?php }if($ads->Side_awning==1){ ?>
        <div class="col-md-4">
            <?php echo "Side Awning";?>
        </div>
        <?php }if($ads->Outside_table==1){ ?>
        <div class="col-md-4">
            <?php echo "Outside Table";?>
        </div>
        <?php }if($ads->Barbecue==1){ ?>
        <div class="col-md-4">
            <?php echo "Barbecue";?>
        </div>
        <?php }if($ads->Towing_adaptor==1){ ?>
        <div class="col-md-4">
            <?php echo "Towing Adaptor";?>
        </div>
        <?php }if($ads->Outside_chairs==1){ ?>
        <div class="col-md-4">
            <?php echo "Outside Chairs";?>
        </div>
        <?php }if($ads->Outdoor_luggage_compartment==1){ ?>
        <div class="col-md-8">
            <?php echo "Outdoor luggage Compartment";?>
        </div>
        <?php } ?>
    </div><br>
    <div class="row">
        <div class="col-md-1"></div>
        <div class="col-md-11"><h6>=Autonomy=</h6></div>
    </div><br>
    <div class="row">
        <?php if($ads->Solar_panels==1){ ?>
        <div class="col-md-4">
            <?php echo "Solar Panels";?>
        </div>
        <?php }if($ads->Outside_Eletric==1){ ?>
        <div class="col-md-4">
            <?php echo "Outside Eletric";?>
        </div>
        <?php }if($ads->Auxiliary_battery==1){ ?>
        <div class="col-md-4">
            <?php echo "Auxiliary Battery";?>
        </div>
        <?php }if($ads->Eletric_generator==1){ ?>
        <div class="col-md-4">
            <?php echo "Eletric Generator";?>
        </div>
        <?php } ?>
    </div><br>
    
</div>