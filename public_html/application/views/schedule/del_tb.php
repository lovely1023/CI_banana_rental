<table class="table table-hover">
    <thead>
        <td><?php echo $this->lang->line('tb1');?></td>
        <td><?php echo $this->lang->line('tb2');?></td>
        <td><?php echo $this->lang->line('tb3');?></td>
        <td><?php echo $this->lang->line('tb4');?></td>
    </thead>
    <tbody>
    <?php foreach($reason as $row):?>
    <tr rid="<?php echo $row->id;?>">
        <td><?php echo $row->startDate.' ~ '.$row->endDate; ?></td>
        <td><?php echo $row->reason;?></td>
        <td><?php echo $row->created_at;?></td>
        <td><button class="btn btn-danger" onclick="del(this)"><?php echo $this->lang->line('tb4');?></button></td>
    </tr>
    <?php endforeach;?>
    </tbody>
</table>
<script>
    function del(e){
        var id=$(e).parent().parent().attr('rid');
        $.post(
            '/index.php/Rent/del',
            {
                id:id
            },
            function(data){
                location.reload();
            }
        );
    }
</script>
