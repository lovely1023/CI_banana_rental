<div class="container">
    
    <div class="row">
        <div class="col-md-12"><h5 style="text-align:center;">Identity</h5></div>
        <div class="col-md-4">
            <label for="firstname">FirstName</label>
            <div class="form-group">
                <input type="text" id="firstname" placeholder="Email" value="<?php echo $first;?>" class="form-control">
            </div>
        </div><div class="col-md-4">
            <label for="lastname">LastName</label>
            <div class="form-group">
                <input type="text" id="lastname" placeholder="Email" value="<?php echo $last;?>" class="form-control">
            </div>
        </div><div class="col-md-4">
            <label for="admin_email">Email</label>
            <div class="form-group">
                <input type="text" id="admin_email" placeholder="Email" value="<?php echo $email;?>" class="form-control">
            </div>
        </div>
        <div class="col-md-12" style="text-align:center;">
            <button onclick="ad_info()" class="btn btn-primary savebtn" style="margin-top:10px;margin-left:auto;margin-right:auto;width:150px;">Update</button>
        </div> 
        <div class="col-md-12"><h5 style="text-align:center;"> Admin picture</h5><br></div>
        <div class="col-md-12" style="text-align:center;">
            <label for="admin_img">
                <img src="/admin/assets/img/<?php if($img){echo $img;}else{echo 'avartar.png';};?>" style="width:200px;height:200px;" alt="">
            </label>
            <input type="file" id="admin_img" style="opacity:0;">
        </div>
        <div class="col-md-12" style="text-align:center;">
            <button onclick="u_img()" class="btn btn-primary savebtn" style="margin-top:10px;margin-left:auto;margin-right:auto;width:150px;">Update</button>
        </div>
        <div class="col-md-12"><h5 style="text-align:center;"> Change Password</h5><br></div>
        <div class="col-md-4">
            <label for="id_current_pw">Current Password</label>
            <div class="form-group">
                <input type="text" id="current_pw" placeholder="Current Password" class="form-control" maxlength="30">
            </div>
        </div>
        <div class="col-md-4">
            <label for="id_new_pw">New password</label>
            <div class="form-group">
                <input type="text" id="new_pw" placeholder="New Password" class="form-control" maxlength="30">
            </div>
        </div>
        <div class="col-md-4">
            <label for="id_confirm_pw">Confirm password</label>
            <div class="form-group">
                <input type="text" id="confirm_pw" placeholder="Confirm Password" class="form-control" maxlength="30">
            </div>
        </div>
        <div class="col-md-12" style="text-align:center;">
            <button onclick="u_pw()" class="btn btn-primary savebtn" style="margin-top:10px;margin-left:auto;margin-right:auto;width:150px;">Update</button>
        </div>
    </div>    
</div>
<script>
    function ad_info(){
        
        var first = $('#firstname').val();
        var last = $('#lastname').val();
        var email = $('#admin_email').val();
        if(first==''){$('#firstname').focus();return;}
        if(last==''){$('#lastname').focus();return;}
        if(email==''){$('#admin_email').focus();return;}
        $.post(
            '/admin/index.php/Admin_C/u_info',
            {
                first:first,
                last:last,
                email:email
            },
            function(data){
                toastr_call('success','','Updated successfully');
            }
        );
    }

    function u_img(){
        var admin_img = $('#admin_img').val();
        if(admin_img==''){toastr_call('warning','error','Please select admin image correctly');return;}
        var formdata = new FormData();
        formdata.append('image', $('#admin_img')[0].files[0]);
        $.ajax({
            url: '/admin/index.php/Admin_C/u_img',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formdata,
            success:function (data) {
                toastr_call('success','','Updated successfully');
            }
        });
    }
    function u_pw(){
        var current_pw = $('#current_pw').val();
        var new_pw = $('#new_pw').val();
        var confirm_pw = $('#confirm_pw').val();
        if(current_pw==''){$('#current_pw').focus();return;}
        if(new_pw==''){$('#new_pw').focus();return;}
        if(new_pw != confirm_pw){$('#confirm_pw').val('');$('#confirm_pw').focus();return;}
        $.post(
            '/admin/index.php/Admin_C/u_pw',
            {
                old:current_pw,
                new:new_pw
            },
            function(data){
                if(data=="ok"){toastr_call('success','','Update successfully');}else{
                    toastr_call('error','','Please input current password correctly');
                }
            }
        );
    }
</script>