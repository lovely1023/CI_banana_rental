    
<thead>
    <tr>
        <th><?php echo $this->lang->line('ph');?></th>
        <th><?php echo $this->lang->line('rvn');?></th>
        <th><?php echo $this->lang->line('statu');?></th>
    </tr>
</thead>
<tbody>
    <?php foreach($ads as $row): ?>
    <tr id="<?php echo $row->id ;?>" v_type="<?php echo $row->chassis_brand;?>"
             onclick="get_ads_id(this)">
        <td><img src="/uploads/ads_photos/<?php echo $row->img_name ;?>"
                 width="200px" height="180px" alt=""></td>
        <td><?php echo $row->chassis_brand.'&nbsp&nbsp'.$row->chassis_model ;?></td>
        <td>
            <?php if($row->status==1){
                    echo "<span style='color:blue'>".$this->lang->line('statu1')."</span>";
                }else{
                    echo "<span style='color:red'>".$this->lang->line('statu2')."</span>";
                    } ;?>
        </td>
    </tr>
    <?php endforeach;?>
</tbody>



    