
<div class="" style="margin-top:100px;"></div>

<?php $this->load->view('userpage/components/navbar') ?>

<div class="container" style="margin-top:30px;">
    <div class="row">
        <div class="col-lg-12">
            <?php 
            if(isset($getBooking) && !empty($getBooking)){ ?>
            <hr><h6><?php echo $this->lang->line('bkdtpr');?></h6><hr>
            <table class="priorityTable table table-bordered table-hover table-responsive" >
                <thead>
                    <tr>
                        <th><?php echo $this->lang->line('name');?></th>
                        <th><?php echo $this->lang->line('stdate');?></th>
                        <th><?php echo $this->lang->line('endate');?></th>
                        <!-- <th><?php echo $this->lang->line('renem');?></th> -->
                        <th><?php echo $this->lang->line('ttpr');?></th>
                        <th><?php echo $this->lang->line('depr');?></th>
                        <th><?php echo $this->lang->line('ctime');?></th>
                        <th><?php echo $this->lang->line('stat');?></th>
                        <th><?php echo $this->lang->line('view');?></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($getBooking as $row) { ?>
                        <tr>
                            <td><?php echo $row->chassis_brand.' '.$row->chassis_model; ?></td>    
                            <td><?php echo $row->startDate ;?></td>    
                            <td><?php echo $row->endDate ;?></td>    
                            <!-- <td><?php echo $row->renter_email ;?></td>     -->
                            <td><?php echo $row->allday_pr.' €' ;?></td>    
                            <td><?php echo $row->deposit_pr.' €' ;?></td>    
                            <td><?php echo $row->created_at ;?></td>    
                            <td pid="<?php echo $row->id;?>"><?php if($row->status == 0){ ?>
                                    <span class="btn btn-sm btn-success btn-block" renter="<?php echo $row->renter_email; ?>"
                                        onclick="check_accept(this)"><?php echo $this->lang->line('stat1');?></span> 
                                    <span class="btn btn-sm btn-danger btn-block"  renter="<?php echo $row->renter_email; ?>"
                                     onclick="check_reject(this)"><?php echo $this->lang->line('stat2');?></span>
                                    <span class="btn btn-sm btn-primary btn-block"  data-toggle="modal" data-target="#myrentingchatmodal"
                                        renter="<?php echo $row->renter_email;?>"  onclick="chat_renter(this)" 
                                        bookid="<?php echo $row->id;?>" ><?php echo $this->lang->line('stat3');?></span>
                                <?php }else if($row->status == 1){ ?>
                                    <span class="btn btn-sm btn-primary btn-block"  data-toggle="modal" data-target="#myrentingchatmodal"
                                        renter="<?php echo $row->renter_email;?>"  onclick="chat_renter(this)" 
                                        bookid="<?php echo $row->id;?>" ><?php echo $this->lang->line('stat3');?></span>
                                    <span class="btn btn-sm btn-success btn-block"  renter="<?php echo $row->renter_email ;?>" onclick="approve(this)"><?php echo $this->lang->line('stat4');?></span>
                                <?php }else if($row->status == 2){ ?>
                                    <span class="btn btn-sm btn-block" style="border-color:black;"><?php echo $this->lang->line('stat5');?></span> 
                                <?php }else if($row->status == 3){?>
                                    <span class="btn btn-sm btn-primary btn-block"  data-toggle="modal" data-target="#myrentingchatmodal"
                                        renter="<?php echo $row->renter_email;?>"  onclick="chat_renter(this)" 
                                        bookid="<?php echo $row->id;?>" ><?php echo $this->lang->line('stat3');?></span> 
                                    <span class="btn btn-sm btn-info btn-block disabled"><?php echo $this->lang->line('stat6');?></span>
                                <?php }else if($row->status == 4){?>
                                    <span class="btn btn-sm btn-primary btn-block"  data-toggle="modal" data-target="#myrentingchatmodal"
                                        renter="<?php echo $row->renter_email;?>"  onclick="chat_renter(this)" 
                                        bookid="<?php echo $row->id;?>" ><?php echo $this->lang->line('stat3');?></span>
                                    <span class="btn btn-sm btn-primary btn-block disabled"><?php echo $this->lang->line('stat7');?></span>
                                <?php }else if($row->status == 5){?>
                                    <span class="btn btn-sm btn-primary btn-block"  data-toggle="modal" data-target="#myrentingchatmodal"
                                        renter="<?php echo $row->renter_email;?>"  onclick="chat_renter(this)" 
                                        bookid="<?php echo $row->id;?>" ><?php echo $this->lang->line('stat3');?></span>
                                    <span class="btn btn-sm btn-success btn-block"><?php echo $this->lang->line('stat8');?></span>
                                <?php }else if($row->status == 6){?>
                                    <span class="btn btn-sm btn-primary btn-block"  data-toggle="modal" data-target="#myrentingchatmodal"
                                        renter="<?php echo $row->renter_email;?>"  onclick="chat_renter(this)" 
                                        bookid="<?php echo $row->id;?>" ><?php echo $this->lang->line('stat3');?></span>
                                    <span class="btn btn-sm btn-block" style="border-color:black;"><?php echo $this->lang->line('stat9');?></span>
                                <?php }?>  
                            </td>
                            <td>
                                <?php if($row->status > 3){?>
                                    <span cltid="<?php echo $row->renter_email; ?>" class="btn btn-sm btn-primary btn-block"
                                     data-toggle="modal" data-target="#clientinfo" onclick="cltinfo(this)"><?php echo $this->lang->line('viewcl');?></span>
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

<div class="modal fade" id="myrentingchatmodal">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">            
            <div class="modal-body">
                <div id="chatbody"></div> 
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cls');?></button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="clientinfo">
    <div class="modal-dialog">
        <div class="modal-content"> 
            <div class="modal-header">
                <h5><?php echo $this->lang->line('clinf');?></h5>            
            </div>           
            <div class="modal-body">
                <div id="cltinfodiv"></div> 
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal"><?php echo $this->lang->line('cls');?></button>
            </div>
        </div>
    </div>
</div>

 <script type="text/javascript">
    function cltinfo(e){
        var renter_email =$(e).attr('cltid');
        $.post(
            '/index.php/Rent/get_cltinfo',
            {
                renter_email:renter_email
            },
            function(data){
                $('#cltinfodiv').html(data);
            }
        );
    }
    function check_accept(e){
        var pid = $(e).parent().attr('pid');
        var renter = $(e).attr('renter');
        $.post(
            '/index.php/Rent/check_accept',
            {
                id:pid,
                renter:renter
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('cls1');?>');
                setTimeout(function(){
                    window.location.reload();
                }, 1000)
            }
        );
               
    }
    function check_reject(e){
        var pid = $(e).parent().attr('pid');
        var renter = $(e).attr('renter');
        if(confirm('<?php echo $this->lang->line('cls2');?> ?')){
            $.post(
                '/index.php/Rent/check_reject',
                {
                    id:pid,
                    renter:renter
                },
                function(data){
                    toastr_call('success','<?php echo $this->lang->line('cls3');?>');
                    setTimeout(function(){
                        window.location.reload();
                    }, 1000)
                }
            );
        }        
    }

    $(document).ready(function(){

        $('#my_books_nav').addClass('active');

        $('[data-toggle="tooltip"]').tooltip();
        var table = $('#storetable').DataTable({
        "pageLength": 25,
            "responsive": true,
            "ordering": true,
        });
    });

    function chat_renter(e){
        var bookid = $(e).attr('bookid');
        var receiver = $(e).attr('renter');

        $.post(
            '/index.php/Rent/myrenting_chat',
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
                '/index.php/Rent/send_msg',
                {
                    msg:msg,
                    bookid:bookid,
                    sender:sender,
                    receiver:receiver
                },
                function(data){
                    $.post(
                        '/index.php/Rent/myrenting_chat',
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
    function approve(e){
        var bookid = $(e).parent().attr('pid');
        var renter = $(e).attr('renter');
        $.post(
            '/index.php/Rent/book_approve',
            {
                bookid:bookid,
                renter:renter
            },
            function(data){
                toastr_call('success','<?php echo $this->lang->line('cls4');?>');
                setTimeout(function(){
                    window.location.reload();
                }, 1000)
            }
        );
    }

</script>