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