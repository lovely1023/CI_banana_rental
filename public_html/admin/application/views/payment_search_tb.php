<?php foreach($with as $row):?>
    <tr wid="<?php echo $row->id;?>" 
            own_pr="<?php echo $row->own_pr;?>" owner_email="<?php echo $row->owner_email;?>" >                
        <td><?php echo $row->email;?></td>
        <td><?php echo $row->first;?></td>
        <td><?php echo $row->last;?></td>
        <td><?php echo $row->deposit_amount;?></td>
        <td><?php echo $row->owner_email;?></td>                
        <td><?php echo $row->iban;?></td>
        <td><?php echo $row->driv_num;?></td>
        <td><?php echo $row->own_pr;?></td>
        <td><?php echo $row->firstday;?></td>
        <td><?php echo $row->created_at;?></td>
        <td>
            <?php if($row->status==0){ ?>
                <a  onclick="funding(this)" class="btn btn-primary btn-block btn-sm">Pay Now</a>
            <?php }else if($row->status==1){ ?>
                <a class="btn btn-default btn-sm btn-block">PAID</a>
            <?php } ?>
        </td>
    </tr>
<?php endforeach;?>