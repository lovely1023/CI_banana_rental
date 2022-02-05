<table class="table table-hover">
    <thead>
        <tr>
            <th></th>
            <th><?php echo $this->lang->line('btyp');?></th>
            <th><?php echo $this->lang->line('dimens');?></th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($berths as $row): ?>
        <tr id="<?php echo $row->id; ?>">
            <td><?php echo $this->lang->line('berth');?> <?php echo $row->berth_num; ?></td>
            <td><?php echo $row->type_berth ?></td>
            <td><?php echo $row->width_berth.' x '.$row->length_berth; ?></td>
            <td><a href="#" onclick="del_berth(this)"><?php echo $this->lang->line('remov');?></a></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>