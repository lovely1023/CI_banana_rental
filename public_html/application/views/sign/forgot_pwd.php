

<!-- <div class="splitPage"> -->
<div class="container">
    <div class="splitPage_content">
        <nav class="mainNav mainNav--minTransparent">
            <div class="mainNav_gutter">
                <div class="mainNav_logo">
                    <a href="/" class="mainNav_logo_link" aria-label="Back to homepage">
                        <img src="/assets/img/sign.png" style="height:75px;padding:5px;" alt="Monkey">
                    </a>
                </div>
                
            </div>
        </nav>
        <div class="container">
            <div class="formSign">
                <div class="socialSign" style="margin-top:80px;">
                    <p class="text-center" style="font-size:16px;"><span style="font-weight:100"><?php echo $this->lang->line('forgot'); ?></span>
                    <?php echo $this->lang->line('enter'); ?></p>
                </div>
                   
                <div class="sign_up_form">
                
                    <div class="form-group btnHelp">
                    <label for="id_email">
                    <?php echo $this->lang->line('email'); ?> *
                    </label> 
                        <input type="text" id="id_email" placeholder="<?php echo $this->lang->line('email'); ?>" class="form-control">
                    </div>
                    <hr>
                    <div class="">
                        <button class="btn btn-primary" onclick="forgot()"><?php echo $this->lang->line('ch'); ?></button>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>
                

    


<script>
    var email;
    function forgot(){
        email=$('#id_email').val();
        if(email==''){
            toastr_call("warning","<?php echo $this->lang->line('errinput'); ?>");
            $('#id_email').focus();return;
        }
        $.post(
            '/index.php/First/send_pwd',
            {
                email:email
            },
            function(data,status){
                if(data=="no"){
                    $('#id_email').val('');
                    toastr_call("error","<?php echo $this->lang->line('erremail'); ?>");
                }else if(data=='send_err'){
                    toastr_call("error","<?php echo $this->lang->line('errsend'); ?>");
                }else if(data=='send_ok'){
                    toastr_call("success","<?php echo $this->lang->line('checemail'); ?>");
                }
            }
        );
    }
</script>
    