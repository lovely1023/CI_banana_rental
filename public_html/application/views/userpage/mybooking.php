
<div style="margin-top:100px;"></div>

<?php $this->load->view('userpage/components/navbar') ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12"> 
            <?php
            if(isset($myBooking) && !empty($myBooking)){ ?>
            <hr><h6><?php echo $this->lang->line('bkdtpr');?></h6><hr>
            <table id="storetable" class="priorityTable table table-bordered table-responsive" >
                <thead>
                    <tr>
                        <th><?php echo $this->lang->line('vehicle');?></th>
                        <th><?php echo $this->lang->line('rvtp');?></th>
                        <th><?php echo $this->lang->line('rvnm');?></th>
                        <th><?php echo $this->lang->line('stdt');?></th>
                        <th><?php echo $this->lang->line('endt');?></th>
                        <th><?php echo $this->lang->line('ttpr');?></th>
                        <th><?php echo $this->lang->line('dppr');?></th>
                        <th><?php echo $this->lang->line('restm');?></th>
                        <th><?php echo $this->lang->line('stat');?></th>
                        <th><?php echo $this->lang->line('view');?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($myBooking as $row) { ?>
                        <tr>
                            
                            <td><a href="<?php echo "/index.php/Rent/select_rv/".$row->ads_id;?>">
                                <div style="width:80px;height:50px"><img src="/uploads/ads_photos/<?php echo $row->img_name;?>" alt=""></div></a></td>
                            <td><?php echo $row->vehicle_type ;?></td>
                            <td><?php echo $row->chassis_brand.'-'.$row->chassis_model ;?></td>
                            <td><?php echo $row->startDate ;?></td>    
                            <td><?php echo $row->endDate ;?></td>    
                            <td><?php echo ($row->allday_pr+$row->service_pr).' €' ;?></td>    
                            <td><?php echo $row->deposit_pr.' €' ;?></td>    
                            <td><?php echo $row->created_at ;?></td>    
                            <td pid="<?php echo $row->id;?>"><?php if($row->status == 0){ ?>
                                    <span class="btn btn-sm btn-warning btn-block"><?php echo $this->lang->line('st1');?></span>
                                    <span class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#mybookingchatmodal"
                                         onclick="chat_owner(this)"
                                     chatid="<?php echo $row->id;?>" chatwith="<?php echo $row->owner_email;?>" ><?php echo $this->lang->line('st2');?></span>
                                <?php }elseif($row->status == 1){ ?>
                                    <span class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#mybookingchatmodal"
                                         onclick="chat_owner(this)"
                                     chatid="<?php echo $row->id;?>" chatwith="<?php echo $row->owner_email;?>" ><?php echo $this->lang->line('st2');?></span> 
                                <?php }elseif($row->status == 2){ ?>
                                    <span class="btn btn-sm btn-block" style="border-color:black;"><?php echo $this->lang->line('st3');?></span>
                                    
                                <?php }elseif($row->status == 3){ ?>
                                    <span class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#mybookingchatmodal"
                                         onclick="chat_owner(this)"
                                     chatid="<?php echo $row->id;?>" chatwith="<?php echo $row->owner_email;?>" ><?php echo $this->lang->line('st2');?></span>
                                    
                                    <a href="/index.php/First/deposit_paypal/<?php echo $row->allday_pr+$row->service_pr ;?>/<?php echo $row->id;?>" class="btn btn-sm btn-block btn-info" >
                                        <?php echo $this->lang->line('st4');?></span>
                                  
                                <?php }elseif($row->status == 4){ ?>
                                    <span class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#mybookingchatmodal"
                                         onclick="chat_owner(this)"
                                     chatid="<?php echo $row->id;?>" chatwith="<?php echo $row->owner_email;?>" ><?php echo $this->lang->line('st2');?></span>
                                    <span class="btn btn-sm btn-block btn-success"><?php echo $this->lang->line('st5');?></span>
                                <?php }elseif($row->status == 5){ ?>
                                    <span class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#mybookingchatmodal"
                                         onclick="chat_owner(this)"
                                     chatid="<?php echo $row->id;?>" chatwith="<?php echo $row->owner_email;?>" ><?php echo $this->lang->line('st2');?></span>
                                    <span class="btn btn-sm btn-block btn-primary" data-target="#reviewmodal" data-toggle="modal"
                                        onclick="id_get(this)" owner="<?php echo $row->owner_email;?>"
                                        ad_id="<?php echo $row->ads_id;?>" bkid="<?php echo $row->id; ?>"><?php echo $this->lang->line('st6');?></span>
                                <?php }elseif($row->status == 6){ ?>
                                    <span class="btn btn-sm btn-primary btn-block" data-toggle="modal" data-target="#mybookingchatmodal"
                                         onclick="chat_owner(this)"
                                     chatid="<?php echo $row->id;?>" chatwith="<?php echo $row->owner_email;?>" ><?php echo $this->lang->line('st2');?></span>
                                    <span class="btn btn-sm btn-block" style="border-color:black;"><?php echo $this->lang->line('st7');?></span> 
                                <?php } ?>
                            </td>
                            <td>
                                <?php if($row->status > 3){?>
                                    <span ownid="<?php echo $row->owner_email; ?>" class="btn btn-sm btn-primary btn-block"
                                     data-toggle="modal" data-target="#ownerinfo" onclick="owninfo(this)">
                                     <?php echo $this->lang->line('viewown');?></span>
                                <?php } ?>
                            </td> 
                        </tr>                        
                    <?php } ?>
                </tbody>
            </table>
            <?php }else{
                echo '<div class="alert alert-danger">'.$this->lang->line('norec').' !</div>' ;
            } ?>
        </div>                           
    </div>
</div> 

<div class="modal fade" id="mybookingchatmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">            
            <div class="modal-body">
                <div id="chatbody"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('clos');?></button>
            </div>
        </div>
    </div>
</div>
<style>
    .checked {
    color: orange;
    }
    .fa-star:hover{
        cursor:pointer;
    }
</style>
<div class="modal fade" id="reviewmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content"> 
            <div class="modal-header"></div>           
            <div class="modal-body">
                <div class="container">
                    <div class="row"> 
                        <h5><?php echo $this->lang->line('bkmodal1');?></h5>                       
                        <textarea id="comment"  placeholder="<?php echo $this->lang->line('bkmodal2');?>.." style="height:100px;width:100%;"></textarea>
                    </div><br>
                    <div class="row">
                        <h5><?php echo $this->lang->line('bkmodal3');?></h5><br>
                    </div><br>
                    <div class="row">
                        <input type="file" id="review_file" style="margin-left:20%;">
                    </div><br>
                    <div class="row">
                        <h5><?php echo $this->lang->line('bkmodal4');?></h5>
                    </div>
                    <div class="row" style="margin-left:20%;font-size:25px;">
                        <span id="star1" onclick="sel_star(this)" class="fa fa-star"></span>
                        <span id="star2" onclick="sel_star(this)" class="fa fa-star"></span>
                        <span id="star3" onclick="sel_star(this)" class="fa fa-star"></span>
                        <span id="star4" onclick="sel_star(this)" class="fa fa-star"></span>
                        <span id="star5" onclick="sel_star(this)" class="fa fa-star"></span>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-success" onclick="leave_review()"><?php echo $this->lang->line('bkmodal5');?></button>
                <button class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('clos');?></button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="ownerinfo">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5><?php echo $this->lang->line('owninf');?></h5>            
            </div>           
            <div class="modal-body">
                <div id="owninfodiv"></div> 
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cls');?></button>
            </div>
        </div>
    </div>
</div>

<script>
    var adid,rate;
    $(document).ready(function(){ $('#my_Road_nav').addClass('active'); });

    function chat_owner(e){
        var bookid = $(e).attr('chatid');
        var receiver = $(e).attr('chatwith');
        $.post(
            '/index.php/My_booking/mybooking_chat',
            {
                bookid:bookid,
                receiver:receiver
            },
            function(data){
                $('#chatbody').html(data);
            }
        );
    } 

    function mymsg(event){
        var x=event.keyCode;
        
        if(x==13){
            var msg=$('#mymsg').val();
            if(msg==''){return;}
            var bookid = $('#chatinfos').attr('bookid');
            var sender = $('#chatinfos').attr('sender');
            var receiver = $('#chatinfos').attr('receiver');

            $.post(
                '/index.php/My_booking/send_msg',
                {
                    msg:msg,
                    bookid:bookid,
                    sender:sender,
                    receiver:receiver
                },
                function(data){
                    $.post(
                        '/index.php/My_booking/mybooking_chat',
                        {
                            bookid:bookid,
                            receiver:receiver
                        },
                        function(data){
                            $('#chatbody').html(data);
                            var element = document.getElementById("chatscroll");
                            element.scrollTop = element.scrollHeight;
                            $('#mymsg').focus();
                        }
                    );
                }
            );
        }
    }
    function owninfo(e){
        var owner_email =$(e).attr('ownid');
        $.post(
            '/index.php/My_booking/get_owninfo',
            {
                owner_email:owner_email
            },
            function(data){
                $('#owninfodiv').html(data);
            }
        );
    }
   
    
    function id_get(e){
        adid = $(e).attr('ad_id');
        bkid = $(e).attr('bkid');
        owner = $(e).attr('owner');
    }

    function sel_star(e){
        var starid=$(e).attr('id');
        if(starid=='star1'){
            $('.fa-star').removeClass('checked');
            $('#star1').addClass('checked');
            rate = 1;
        }else if(starid=='star2'){
            $('.fa-star').removeClass('checked');
            $('#star1').addClass('checked');
            $('#star2').addClass('checked');
            rate = 2;
        }else if(starid=='star3'){
            $('.fa-star').removeClass('checked');
            $('#star1').addClass('checked');
            $('#star2').addClass('checked');
            $('#star3').addClass('checked');
            rate = 3;
        }else if(starid=='star4'){
            $('.fa-star').removeClass('checked');
            $('#star1').addClass('checked');
            $('#star2').addClass('checked');
            $('#star3').addClass('checked');
            $('#star4').addClass('checked');
            rate = 4;
        }else if(starid=='star5'){
            $('.fa-star').removeClass('checked');
            $('#star1').addClass('checked');
            $('#star2').addClass('checked');
            $('#star3').addClass('checked');
            $('#star4').addClass('checked');
            $('#star5').addClass('checked');
            rate = 5;
        }
    }

    function leave_review(){
        var comment = $('#comment').val();
        if(comment==''){ $('#comment').focus();toastr_call('warning','','<?php echo $this->lang->line("incomm");?>');return; }
        var formdata = new FormData;
        formdata.append('rate', rate);
        formdata.append('owner', owner);
        formdata.append('ads_id', adid);
        formdata.append('bkid', bkid);
        formdata.append('comment', comment);
        formdata.append('img', $('#review_file')[0].files[0]);
        $.ajax({
            url: '/index.php/My_booking/leave_review',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formdata,
            success:function(data){
                window.location.reload(); 
            }
        });
    }


</script>
