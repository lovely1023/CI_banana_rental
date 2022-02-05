

<!-- <div class="splitPage"> -->
<div class="container">
    <div class="splitPage_content">
        <nav class="mainNav mainNav--minTransparent">
            <div class="mainNav_gutter">
                <div class="mainNav_logo">
                    <a href="/" class="mainNav_logo_link" aria-label="Back to homepage">
                        <img src="/assets/img/sign.png" style="height:75px;padding:5px;" alt="Bananacampers">
                    </a>
                </div>
                
            </div>
        </nav>
        <div class="container">
            <div class="formSign">
                <div class="socialSign" style="margin-top:80px;">
                    <p class="text-center" style="font-size:16px;"><span style="font-weight:100"><?php echo $this->lang->line('reset'); ?>?</span>
                    <?php echo $this->lang->line('restit'); ?></p>
                </div>
                   
                <div class="sign_up_form">
                
                    <div class="form-group btnHelp">
                        <label for="new_pwd">
                        <?php echo $this->lang->line('npw'); ?> *
                        </label> 
                        <input type="password" id="new_pwd" placeholder="<?php echo $this->lang->line('npw'); ?>" class="form-control">
                        <div class="help-block">
                            <a href="#" class="show-pwd" onclick="ch_ps_new(this)"><?php echo $this->lang->line('spw'); ?></a>
                        </div>
                        <br><br>


                        <label for="re_new_pwd">
                        <?php echo $this->lang->line('confirmpw'); ?> * 
                        </label> 
                        <input type="password" id="re_new_pwd" placeholder="<?php echo $this->lang->line('confirmpw'); ?>" class="form-control">
                        <div class="help-block">
                            <a href="#" class="show-pwd" onclick="ch_ps_re(this)"><?php echo $this->lang->line('spw'); ?></a>
                        </div>
                    </div>
                    <hr><br>
                    <div class="">
                        <button class="btn btn-primary" onclick="reset_pwd()"><?php echo $this->lang->line('reset'); ?></button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<script>

    var pwd,repwd;
    function ch_ps_new(e){
        if($('#new_pwd').attr('type')=="password"){
            $('#new_pwd').attr('type','text');
            $(e).text('<?php echo $this->lang->line('hpw'); ?>');
        }else{
            $('#new_pwd').attr('type','password');
            $(e).text('<?php echo $this->lang->line('spw'); ?>');
        }
        
    }

    function ch_ps_re(e){
        if($('#re_new_pwd').attr('type')=="password"){
            $('#re_new_pwd').attr('type','text');
            $(e).text('<?php echo $this->lang->line('hpw'); ?>');
        }else{
            $('#re_new_pwd').attr('type','password');
            $(e).text('<?php echo $this->lang->line('spw'); ?>');
        }
        
    }

    function reset_pwd(){
        pwd = $('#new_pwd').val();
        repwd = $('#re_new_pwd').val();
        if(pwd==''){
            $('#new_pwd').focus();return;
        }else if(pwd!=repwd){
            $('#re_new_pwd').val('');
            $('#re_new_pwd').focus();return;
        }
        $.post(
            '/index.php/First/reset',
            {
                new_pwd:pwd,
                code:<?=$code;?>
            },
            function(data,status){
                if(data==1){
                    window.location.href = "/index.php/First";
                }else{
                    toastr_call("error","<?php echo $this->lang->line('errconfem'); ?>");
                }
            }
        );
    }
</script>
    