<style>
    .fasize{
        font-size:30px;
    }
    .aboume{
        width:30px;
    }
</style>
<div class="col-md-12">
    <div class="content-panel">
        <table class="table table-bordered table-striped table-condensed">
        <h4><i class="fa fa-angle-right"></i> User Table</h4>
        <hr>
        <div class="col-md-8">
            <input class="form-control" onkeyup="searchbar()" id="sch"
            placeholder="Search for..." type="text"><br>
        </div>
        <thead>
            <tr>
                <th>Avatar</th>
                <th>First</th>
                <th>Last</th>
                <th>DrivDoc</th>
                <th>IdentityDoc</th>
                <th>Balance</th>
                <th>More Detail</th>
                <th>Created at</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php foreach($users as $row):?>
            <tr>
                <td><?php if($row->user_picture){ ?>
                    <img src="<?php echo '/uploads/user_pictures/'.$row->user_picture;?>"
                    style="width:100px;height:100px;" alt="avartar"><?php }else{ ?>
                        <img src="<?php echo '/uploads/user_pictures/User_default_logo.png';?>"
                    style="width:100px;height:100px;" alt="avartar"><?php } ?>
                </td>

                <td><?php echo $row->first;?></td>
                <td><?php echo $row->last;?></td>
                <td>
                    <?php if($row->driv_doc){ ?>
                    <a href="/uploads/driving_license/<?php echo $row->driv_doc?>" target="blank"  class="btn btn-sm btn-info">View</a>
                    <?php } ?>
                </td>
                <td>
                    <?php if($row->driv_doc){ ?>
                    <a href="/uploads/identity_cards/<?php echo $row->identity?>" target="blank"  class="btn btn-sm btn-info">View</a>
                    <?php } ?>
                </td>
                <td><?php echo $row->balance;?></td>
                <td><button class="btn btn-info" usid="<?php echo $row->id;?>" 
                        onclick="user_detail(this)" data-toggle="modal" data-target="#infodetail"
                    >ViewDetail</button></td>
                <td><?php echo $row->created_at;?></td>
                <td>
                    <label class="switch" onchange="is_permit(this)" uid="<?php echo $row->id;?>">
                        <input type="checkbox"  <?php if($row->permit==1){echo "checked";} ?>>
                        <span class="slider round"></span>
                    </label>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
    </div>
</div>

<div class="modal fade" id="infodetail">
    <div class="modal-dialog">
        <div class="modal-content">
             <div class="modal-header"></div>
             <div class="modal-body">
                <div id="putdetail"></div>
             </div>
             <div class="modal-footer">
                <button class="btn btn-danger" data-dismiss="modal">Close</button>
             </div>
        </div>
    </div>
</div>

    <script>

        function searchbar(){
            var key = $('#sch').val();
            
            $.post(
                '/admin/index.php/Admin_C/searchuser',
                {
                    key:key
                },
                function(data){
                    $('#tbody').html(data);
                }
            );
        }
        function user_detail(e){
            var userid = $(e).attr('usid');
            $.post(
                '/admin/index.php/Admin_C/user_detail',
                {
                    id:userid
                },
                function(data){
                    $("#putdetail").html(data);
                }
            );
        }

        function is_permit(e){
            var uid = $(e).attr('uid');
            $.post(
                '/admin/index.php/Admin_C/ch_permit',
                {
                    uid:uid
                },
                function(data){
                    toastr_call('success','success',"This is permitted successfully");
                }
            );
        }
    </script>