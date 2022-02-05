<link rel="stylesheet" href="/assets/css/chat.css">

<div class="col-12  chat">
    <div class="card">
        <div class="card-header msg_head">
            <div class="d-flex bd-highlight">
                <div class="img_cont">
                    <img src="<?php echo '/uploads/user_pictures/'.$receiver_img;?>" class="rounded-circle user_img">                
                </div>
                <div class="user_info">
                    <span><?php echo $this->lang->line('chwith');?> <b> <?php echo $receiver_first;?></b></span>                
                </div>
            </div>
        </div>        
        <div class="card-body msg_card_body" id="chatscroll">
            <?php foreach($msgs as $row):?>
                <?php if($row->receiver == $sender){ ?>
                <div class="d-flex justify-content-start mb-4">
                    <div class="img_cont_msg">
                        <img src="<?php echo '/uploads/user_pictures/'.$receiver_img;?>" class="rounded-circle user_img_msg">
                    </div>
                    <div class="msg_cotainer"><?php echo $row->msg;?>                    
                        <span class="msg_time"><?php echo $row->created_at;?></span>
                    </div>
                </div>
                <?php }else if($row->sender = $sender){ ?>
                <div class="d-flex justify-content-end mb-4">
                    <div class="msg_cotainer_send"><?php echo $row->msg;?>                                        
                        <span class="msg_time_send"><?php echo $row->created_at;?></span>
                    </div>
                    <div class="img_cont_msg">
                        <img src="<?php echo '/uploads/user_pictures/'.$sender_img;?>" class="rounded-circle user_img_msg">
                    </div>
                </div>
            <?php } endforeach;?>
        </div>

        <div class="card-footer">
            <div class="input-group">
                <input type="hidden" id="chatinfos" bookid="<?php echo $bookid;?>" sender="<?php echo $sender;?>" receiver="<?php echo $receiver;?>">                
                <textarea id="mymsg" class="form-control type_msg" onkeydown=mymsg(event) placeholder="<?php echo $this->lang->line('tpmsg');?>..."></textarea>
            </div>
        </div>
    </div>
</div>