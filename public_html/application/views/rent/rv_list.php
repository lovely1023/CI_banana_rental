<style>
    .carousel-inner img {
    width: 100%;
    height: 100%;
  }

    .fa {
        font-size: 15px;
    }

    .checked {
        color: orange;
    }
</style> 
<div class="row">
    <?php foreach($ads as $row): ?>
    <!-- <div class="col-12 col-md-6" style="padding:10px"> -->
    <div class="col-12 col-md-4" style="padding:10px">
        <div class="motorhome_info" title="<?php echo 'See the '.$row->vehicle_type.' '.$row->chassis_brand;?>">
            <div class="img_slide">
                <div id="<?php echo 'demo'.$row->id; ?>" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <?php for($i=0;$i<$row->ph_num;$i++){?>
                        <li data-target="<?php echo '#demo'.$row->id; ?>"
                         data-slide-to="<?php echo $i;?>" <?php if($i==0){ echo 'class="active"'; }; ?> ></li>
                        <?php } ?>
                    </ul>

                    <!-- The slideshow -->
                    <a href='<?php echo "/index.php/Rent/select_rv/".$row->id;?>' target="_blank"><div class="carousel-inner" >
                        <?php foreach($photos as $slide):?>
                            <?php if($row->id==$slide->ads_id){
                                if($slide->photo_num==1){
                                    echo    '<div class="carousel-item active" >
                                                <img src="/uploads/ads_photos/'.$slide->img_name.'" alt="Los Angeles" class="carsel_img">
                                            </div>';
                                }else{
                                    echo   '<div class="carousel-item " >
                                                <img src="/uploads/ads_photos/'.$slide->img_name.'" alt="Los Angeles" class="carsel_img">
                                            </div>';         
                                }
                                
                            }; ?>
                        <?php endforeach ?>
                    </div></a>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="<?php echo '#demo'.$row->id; ?>" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="<?php echo '#demo'.$row->id; ?>" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <div class="container">
            <a href='<?php echo "/index.php/Rent/select_rv/".$row->id;?>' target="_blank" style="text-decoration:none;">
            <div class="content_details row" style="padding:10px;color:black">
                    <div class="col-8" >
                        <div class="row"><span><b><?php echo $row->vehicle_type;?></b></span></div>
                        <div class="row"><span><?php echo $row->Country.'-'.$row->City;?></span></div>
                        <div class="row"><span><?php echo $row->seats;?> <?php echo $this->lang->line('seats');?> - <?php echo $row->berth;?> <?php echo $this->lang->line('berths');?></span></div>
                    </div>
                    <div class="col-4">
                        <div class="row"><span><?php echo $this->lang->line('from');?> <br><b>€ <?php echo $row->price;?></b></span></div>
                        <?php if($row->review>0){?>
                        <div class="row" style="margin-top:7px;"><span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa">&nbsp&nbsp <?php echo $row->review;?></span>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div></a>
        </div>
    </div>
    <?php endforeach ?>
</div>
