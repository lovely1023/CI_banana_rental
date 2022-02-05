<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Title -->
    <title><?php echo $title;?></title>

    <!-- Favicon -->
    <link rel="icon" href="/assets/img/core-img/favicon.ico">
    
    <link href="/assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- <link href="/assets/schedule/css/bootstrap.min.css" rel="stylesheet"> -->

    <link rel="stylesheet" type="text/css" href="/assets/schedule/calendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" href="/assets/schedule/datepicker/datepicker3.css">
    <link href="/assets/css/others/toastr.min.css" rel="stylesheet">

    <script src="/assets/schedule/js/jquery.min.js"></script>    
    <script src="/assets/schedule/js/jquery-ui.js"></script>
    <script src="/assets/schedule/calendar/jquery-ui.min.js"></script> 
    <script src="/assets/schedule/moment/moment.js"></script>
    <script src="/assets/schedule/calendar/dist/fullcalendar.min.js"></script>
    <script src="/assets/schedule/js/bootstrap.min.js"></script>
    <script src="/assets/schedule/datepicker/bootstrap-datepicker.js"></script>
    <script src="/assets/schedule/sweetalert2/sweetalert2.min.js"></script>
    <script src="/assets/js/others/toastr.min.js"></script>
    <script>
        function toastr_call(type,title,msg,override){
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": false,
                "progressBar": true,
                "positionClass": "toast-bottom-left",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": "300",
                "hideDuration": "1000",
                "timeOut": "5000",
                "extendedTimeOut": "1000",
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut"
            } 
            toastr[type](msg, title,override); 
        }
    </script>
</head>

<body>
    

    <style type="text/css">
        .clickable { cursor: pointer; }
        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
        background: 0;  color: #999; cursor: default; }
        .datepick-month td .active .day { background-color: blue;color: #fff; }
        span.fc-time {  display: none; }
        span.fc-title { font-size: 15px; padding: 6px 5px; margin: 4px 2px; }
        .ui-datepicker-current-day .ui-state-active { background: #000000; }
        .dp-highlight .ui-state-default {
            background: #484;
            color: #FFF;
        }
    </style>

    <nav class="navbar navbar-expand-sm bg-success navbar-dark">

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="/"><?php echo $this->lang->line('home');?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/index.php/My_ads"><?php echo $this->lang->line('adlist');?></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#"><?php echo $this->lang->line('bschedul');?></a>
            </li>
        </ul>

    </nav>

    <div id="top-content" class="container-fluid" style="text-align: left; padding-top: 30px;">
        <div class="container" id="cal-box">
            <div class='row'>
                <div class='col-md-3'>
                    <div class='form-group'>
                        <label class='control-label'><?php echo $this->lang->line('stdate');?></label>
                        <input class='form-control' id="start_date" placeholder='<?php echo $this->lang->line('stdate');?>' type='text'/>
                    </div>
                </div>
                <div class='col-md-3'>
                    <div class='form-group'>
                        <label class='control-label'><?php echo $this->lang->line('endate');?></label>
                        <input class='form-control' placeholder='<?php echo $this->lang->line('endate');?>' id="end_date" type='text'/>
                    </div>
                </div>
                
                <div class="col-md-3">
                    <div class="form-group" style="margin-top: 21px;">
                        <div>
                            <label>
                                <input type="radio" name="reason" id="unavailable">
                                <?php echo $this->lang->line('avail')?></label>
                        </div>
                        <div id="un1" style="display: none;">
                            <select class="form-control" id="reason">
                                <option value=""><?php echo $this->lang->line('selreason');?></option>
                                <option value="<?php echo $this->lang->line('reason1');?>"><?php echo $this->lang->line('reason1');?></option>
                                <option value="<?php echo $this->lang->line('reason2');?>"><?php echo $this->lang->line('reason2');?></option>
                                <option value="<?php echo $this->lang->line('reason3');?>"><?php echo $this->lang->line('reason3');?></option>
                            </select>
                        </div>
                        <div style="margin-top: 5px;">
                            <label>
                                <input type="radio" name="reason" id="available">
                                <?php echo $this->lang->line('unavail')?></label>  
                        </div>


                    <div>
                        
                    </div>
                              
                        
                    </div>
                    <div class="form-group">
                        <div id="un2" style="display: none;">
                            <select class="form-control" id="abl_reason">
                                <option value=""><?php echo $this->lang->line('cusreason');?></option>
                                <!-- <option value="<?php echo $this->lang->line('reason3');?>">By default (€50.00)</option> -->
                                <?php
                                    foreach($season_rate as $row){
                                ?>
                                <option value="<?php echo $row['id']; ?>">
                                    <?php echo $row['sson_title']."($".$row['sson_rate_perday'].")"; ?>
                                </option>
                                <?php
                                    }
                                ?>
                            </select> 
                        </div>
                        <div id="un3" style="display: none; margin-top: 10px;">
                            <select class="form-control" id="minimum">
                                <option value=""><?php echo $this->lang->line('minreason');?></option>
                                <option value="<?php echo $this->lang->line('reason1');?>">2 <?php echo $this->lang->line('days');?></option>
                                <option value="<?php echo $this->lang->line('reason2');?>">3 <?php echo $this->lang->line('days');?></option>
                                <option value="<?php echo $this->lang->line('reason3');?>">4 <?php echo $this->lang->line('days');?></option>
                                <option value="<?php echo $this->lang->line('reason3');?>">5 <?php echo $this->lang->line('days');?></option>
                                <option value="<?php echo $this->lang->line('reason3');?>">6 <?php echo $this->lang->line('days');?></option>
                                <option value="<?php echo $this->lang->line('reason3');?>">7 <?php echo $this->lang->line('days');?></option>
                                <option value="<?php echo $this->lang->line('reason3');?>">8 <?php echo $this->lang->line('days');?></option>
                            </select> 
                        </div>                              
                    </div>            
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <br>
                        <input type='button' onclick="booking()" 
                            value='<?php echo $this->lang->line('reasonbt');?>' class='btn btn-danger btn-block'>
                        <button class="btn btn-info btn-block" onclick="open_sch()" >
                            <?php echo $this->lang->line('delreason');?></button>
                        <button class="btn btn-success btn-block" id="btn_rate" style="display: none;">
                            <?php echo $this->lang->line('ratereason');?></button>
                    </div>
                </div>
            </div>
            <div id="viewschedul">
                
            </div>

            <div id="viewseason" style="display:none">
                <table class="table table-hover">
                    <thead>
                        <td>Duration</td>
                        <td>SeasonName</td>
                        <td>Rental Day</td>
                        <td>Delete</td>
                    </thead>
                    <tbody>
                    <?php foreach($season_pro as $row):?>
                        <tr rid="<?php echo $row->id;?>">
                            <td><?php echo $row->start_date.' ~ '.$row->end_date; ?></td>
                            <td><?php echo $row->sson_title;?></td>
                            <td><?php echo $row->sson_rate_perday;?></td>
                            <td><button class="btn btn-danger" onclick="del(this)">Remove</button></td>
                        </tr>
                    <?php endforeach;?>
                    </tbody>
                    <script>
                        function del(e){
                            var id=$(e).parent().parent().attr('rid');
                            $.post(
                                '/index.php/Rent/del1',
                                {
                                    id:id
                                },
                                function(data){
                                    // alert("success");
                                    location.reload();
                                }
                            );
                        }
                    </script>
                    
                </table>
            </div>

            <div id="modal-container">
                <div class="modal-content_own">
                    <div class="cont_modal" style="display: flex; 
                        flex-direction: column;
                        align-items: center;
                        height: 100%;
                        justify-content: flex-start;
                    ">
                        <div class="txt">
                            <p style="text-align: center;"><?php echo $this->lang->line('introsen')?></p>
                        </div>
                        <div class="input row input_group">
                            <div class="col-md-4" style="display: flex;flex-direction: row;justify-content: space-around;">
                                <label>Season:</label><input type="text" id="season" style="
                                    width:120px;
                                    border-radius: 10px;
                                    outline: none;
                                    border-color: #999!important;
                                    margin-right: 10px;
                                    height: 30px;">                                
                            </div>
                            <div class="col-md-4" style="display: flex;flex-direction: row;outline: none; justify-content: space-around;">
                                <label>Rates:</label><input type="number" id="season_rates" placeholder="€" style="
                                    width:120px; 
                                    border-color: #999!important;
                                    border-radius: 10px;
                                    outline: none;
                                    height: 30px;">
                            </div>
                            <div class="col-md-4" style="display: flex; flex-direction: column;">
                                <button class="btn btn-success" style="font-size: 10px;" onclick="addSeasonRate(<?php echo $ads_id; ?>)"><?php echo $this->lang->line("btcustomise") ?></button>                                
                            </div>
                        </div>
                        <div class="season_grp">
                        <?php 
                                foreach($season_rate as $row){
                                    echo "<div class='group row'><p class='col-sm-4' id='sson_title'>".$row['sson_title']."</p><p class='col-sm-4' id='sson_rate_perday'>".$row['sson_rate_perday']."</p><div class='col-sm-4' id='remove_sson'><button class='btn btn-success'"."season_id=".$row['id']." id='remove_sson_btn' onclick='remove_sson(this)'>Remove</button></div></div>";
                                }
                            ?>
                            
                        </div>
                    </div>
                </div>
            </div>

            <div id="calendar"></div>



            
        </div>
    </div>

    
</body>
    
<script type="text/javascript">
function booking(){
        if(document.getElementById("unavailable").checked){
            var start_date=$('#start_date').val();
            var end_date=$('#end_date').val();
            var reason=$('#reason').val();
            var ads_id = <?php echo $ads_id; ?>;

            if(start_date==''){
                toastr_call('warning','<?php echo $this->lang->line('wrdate');?>');
                $('#start_date').focus();
                return;
            }else if(end_date==''){
                toastr_call('warning','<?php echo $this->lang->line('wrdate');?>');
                $('#end_date').focus();
                return;
            }else if(reason==''){
                toastr_call('warning','<?php echo $this->lang->line('wrreas');?> ');
                $('#reason').focus();
                return;
            }
            $.post(
                '/index.php/Rent/add_unavailableschedule',
                {
                    start_date:start_date,
                    end_date:end_date,
                    reason:reason,
                    ads_id:ads_id
                },
                function(data){
                    if(data == 'success'){
                        toastr_call('success','<?php echo $this->lang->line('succ');?>');
                        setTimeout(function(){
                            window.location.reload();
                        }, 4000)
                    }else{
                        toastr_call('error','<?php echo $this->lang->line('alexist');?>');                        
                    }
                }
            );
        }else if(document.getElementById("available").checked){
            var start_date=$('#start_date').val();
            var end_date=$('#end_date').val();
            var reason=$('#abl_reason').val();
            var ads_id = <?php echo $ads_id; ?>;
            if(start_date==''){
                toastr_call('warning','<?php echo $this->lang->line('wrdate');?>');
                $('#start_date').focus();
                return;
            }else if(end_date==''){
                toastr_call('warning','<?php echo $this->lang->line('wrdate');?>');
                $('#end_date').focus();
                return;
            }else if(reason==''){
                toastr_call('warning','<?php echo $this->lang->line('season');?> ');
                $('#abl_reason').focus();
                return;
            }else{
            addSeason();
            }
            // alert("please add correct funtion");
            
        }else{toastr_call('warning','<?php echo $this->lang->line('radio_check');?> ');}
    } 

    function open_sch(){
        if(document.getElementById('unavailable').checked){
            var ads_id = <?php echo $ads_id;?>;
            // $("#viewseason").fadeOut();
            $("#viewschedul").css("display","block");
                    $('#viewseason').css("display","none");
            $.post(
                '/index.php/Rent/del_schedule',
                {
                    ads_id:ads_id
                },
                function(data){
                    $('#viewschedul').html(data);
                    
                }
            );
        }else if(document.getElementById('available').checked){
            $("#viewschedul").css("display","none");
            $("#viewseason").css("display","block");
        }else{toastr_call('warning','<?php echo $this->lang->line('radio_check');?> ');}  
    }

    !function($) {
        "use strict";

        var CalendarApp = function() {
            this.$body = $("body")
            this.$calendar = $('#calendar'),
            this.$event = ('#calendar-events div.calendar-events'),
            this.$calendarObj = null
        };

        
        CalendarApp.prototype.init = function() {
            var date = new Date();
            var d = date.getDate();
            var m = date.getMonth();
            var y = date.getFullYear();
            var form = '';
            var today = new Date($.now());
            var eventArr = <?php echo json_encode($tmpEventArr) ?>;
            var defaultEvents =  eventArr;
            var $this = this;
            
            $this.$calendarObj = $this.$calendar.fullCalendar({                 
                defaultView: 'month',  
                timeZone: 'local',
                events: defaultEvents,
                eventLimit: true,
                selectable: true,
            });
            // function addNew(info){
            //     var myEvent = {
            //         title:"my new event",
            //         start: info.dateStr,
            //         end: info.dateStr
            //     };
            //     calendar.addEvent(myEvent);
            // }
                        
        },
        $.CalendarApp = new CalendarApp, $.CalendarApp.Constructor = CalendarApp        
    }(window.jQuery),

    function($) {
        "use strict";
        $.CalendarApp.init()
    }(window.jQuery);

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

    var checkin = $('#start_date').datepicker({

        beforeShowDay: function(date) {
            return date.valueOf() >= now.valueOf();
        },
        autoclose: true,
        minDate: nowTemp,
        todayHighlight : true,
        format : 'yyyy-mm-dd'

        }).on('changeDate', function(ev) {
            // console.log(checkin);
        if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.datepicker("update", newDate);
        }
        $('#end_date')[0].focus();
    });

    // var eventDates = {};
    var checkout = $('#end_date').datepicker({
        beforeShowDay: function(date) {
            if (!checkin.datepicker("getDate").valueOf()) {
            return date.valueOf() >= new Date().valueOf();
            } else {
            return date.valueOf() > checkin.datepicker("getDate").valueOf();
            }
        },
        autoclose: true,
        todayHighlight : true,
        format : 'yyyy-mm-dd',
        onSelect: function(value, date) {
            console.log(date);
            date.dpDiv.find('.active day')
            .css('background-color', '#000000');
        }

        }).on('changeDate', function(ev) {

    });
    $("#unavailable").click(function(){
        $("#un1").show();
        $("#un2").hide();
        $("#un3").hide();
        $("#btn_rate").hide();
    });
    $("#available").click(function(){
        $("#un2").show();
        $("#un3").show();
        $("#un1").hide();
        $("#btn_rate").show();
    });
    document.getElementById("btn_rate").addEventListener("click", function(){
        document.getElementById("modal-container").classList.add("show");
    });
    window.addEventListener("click", function(e){
        if(e.target==document.getElementById("modal-container")) document.getElementById("modal-container").classList.remove("show");
    });

    function addSeasonRate(ads_id){
        var ads_id = <?php echo $ads_id;?>;
        var sson_title = $("#season").val();
        var sson_rate_perday = $("#season_rates").val();
        $.ajax({
            url: "/index.php/Rent/addSeasonRate",
            type: 'post',
            dataType: 'json',
            headers: {
            'Access-Control-Allow-Origin': '*'
            },
            data:{
                ads_id:ads_id,
                sson_title:sson_title,
                sson_rate_perday:sson_rate_perday
            },
            success: function(result){
                // alert("success");
                // console.log(result);
                var last_id = result[0]['id'];
                console.log(last_id);
                $(".season_grp").append("<div class='group row'><p class='col-sm-4' id='sson_title'>"+sson_title+"</p><p class='col-sm-4' id='sson_rate_perday'>"+sson_rate_perday+"</p><div class='col-sm-4' id='remove_sson'><button class='btn btn-success' season_id="+last_id+" id='remove_sson_btn' onclick='remove_sson(this)'>Remove</button></div></div>");
                
                $("#abl_reason").append($('<option></option>').val(last_id).html(sson_title+"(€"+sson_rate_perday+")"));
                console.log(sson_title,sson_rate_perday);
          }
        });
        
        
    }

    function remove_sson(btn){
        var season_id = $(btn).attr("season_id");
                // var option_title = $(btn).parent().parent().children("p:first-child").text();
                $("#abl_reason option[value='"+season_id+"']").remove();
                // console.log(option_title);
                $(btn).parent().parent().remove();

        $.ajax({
            url:"/index.php/Rent/removeSeason",
            type:'post',
            dataType:'json',
            data:{
                season_id:season_id
            },
            success:function(result){
                
            }

        })
    }

    function addSeason(){
        var season_id = $("#abl_reason").val();
        var start_date=$('#start_date').val();
        var end_date=$('#end_date').val();
        var ads_id = <?php echo $ads_id; ?>;

    
        $.ajax({
            url:"/index.php/Rent/addSeasonDate",
            type:'post',
            dataType:'json',
            data:{
                season_id:season_id,
                ads_id:ads_id,
                start_date:start_date,
                end_date:end_date
            },
            success:function(result){
                
                console.log(result);
                if(result == 'success'){
                        toastr_call('success','<?php echo $this->lang->line('succ');?>');
                        setTimeout(function(){
                            window.location.reload();
                        }, 4000) 


                      
                    }else{
                        toastr_call('error','<?php echo $this->lang->line('alexist');?>');                        
                    }

            }

        });
    }

var start_date= "<?php
                foreach($s_tmpEventArr as $row){
                    echo $row["start_date"]." ";
                }
                ?>";
var end_date= "<?php
                foreach($s_tmpEventArr as $row){
                    echo $row["end_date"]." ";
                }
                ?>";
var s_title= "<?php
                foreach($s_tmpEventArr as $row){
                    echo $row["s_title"]."   ";
                }
                ?>";

                    console.log(start_date, end_date, s_title);

                var s_data = start_date.split(" ");
                var e_data = end_date.split(" ");
                var s_title = s_title.split("   ");

console.log(s_data.length);
for(i = 0; i < s_data.length; i++){
    $('#calendar').fullCalendar('renderEvent', {
        title: s_title[i],
        start: s_data[i],
        end: e_data[i],
        allDay: true,
        color  : '#28A745',
        textColor:'#fff'
        });
}
    
</script>