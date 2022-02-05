
<?php foreach($photos as $row):?>
    <div class="photo_modal">
        <img src="<?php echo '/uploads/ads_photos/'.$row->img_name;?>" class="img_st" alt="">
    </div>
<?php endforeach;?>