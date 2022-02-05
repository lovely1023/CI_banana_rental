<?php foreach($ads as $row):?>
    <tr>
        <td><button adid="<?php echo $row->id;?>" onclick="o_modal(this)" class="btn btn-sm btn-info">View all</button></td>
        <td><a href="/uploads/drive_document/<?php echo $row->tech_inspec?>" target="blank"  class="btn btn-sm btn-info">View</a></td>
        <td><a href="/uploads/drive_document/<?php echo $row->lics_plate?>" target="blank"  class="btn btn-sm btn-info">View</a></td>
        <td><a href="/uploads/drive_document/<?php echo $row->assurance?>" target="blank"  class="btn btn-sm btn-info">View</a></td>                
        <td><button adid="<?php echo $row->id;?>" onclick="dt_modal(this)" class="btn btn-sm btn-info">View Details</button></td>
        <td><?php echo $row->created_at;?></td>
        <td>
            <label class="switch" onchange="is_permit(this)" ads_id="<?php echo $row->id;?>">
                <input type="checkbox"  <?php if($row->status==1){echo "checked";} ?>>
                <span class="slider round"></span>
            </label>
        </td>
    </tr>
<?php endforeach;?>