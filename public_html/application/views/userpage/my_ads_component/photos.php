

<?php foreach($photos as $row): ?>
    <div class="col-md-3" pid="<?php echo $row->id;?>" ads_id="<?php echo $row->ads_id; ?>" style="text-align:center;padding:20px;">
        <img title="<?php echo $row->photo_num; ?>" style="width:300px;height:200px;"
             src="/uploads/ads_photos/<?php echo $row->img_name; ?>" alt=""><br>
        <input type="file" id="up_ph" hidden>
        <label for="up_ph" class="btn btn-default">SELECT</label>
        <button class="btn btn-primary" onclick="selph_up(this)">Update</button>
        <button class="btn btn-danger" onclick="selph_del(this)">Delete</button>
    </div>
<?php endforeach;?> 
<script>
    function selph_up(e){
        var id = $(e).parent().attr('pid');
        if($('#up_ph').val()==''){
            return;
        }
        var formdata = new FormData();
        formdata.append('up_ph', $('#up_ph')[0].files[0]);
        formdata.append('id',id);

        $.ajax({
            url: '/index.php/My_ads/selph_update',
            type: 'POST',
            processData: false,
            contentType: false,
            cache: false,
            data: formdata,
            success:function (data) {
                location.reload();
            }
        });
    }

    function selph_del(e){
        var id = $(e).parent().attr('pid');
        var photo_num = $(e).parent().children().first().attr('title');
        if(photo_num==1){
            toastr_call('warning','<?php echo $this->lang->line('undel');?>');return;
        }
        $.post(
            '/index.php/My_ads/selph_del',
            {
                id:id
            },
            function(data){
                location.reload();
            }
        );
    }
</script>
