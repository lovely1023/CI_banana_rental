    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container-fluid h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" style="width:100px;height:80px;" alt=""></a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#fancyNav" aria-controls="fancyNav" aria-expanded="false" aria-label="Toggle navigation"><span class="ti-menu"></span></button>
                        <div class="collapse navbar-collapse" id="fancyNav">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item" style="margin-left:23px;">
                                    <select class="btn btn-outline-light" id="lang" onchange="ch_lang()" >
                                        <option value="pt">Português</option>
                                        <option value="en" <?php if($this->session->userdata('language')=="en"){ echo "selected"; } ?> >English</option>
                                        <option value="fr" <?php if($this->session->userdata('language')=="fr"){ echo "selected"; } ?> >Français</option>
                                        <option value="sp" <?php if($this->session->userdata('language')=="sp"){ echo "selected"; } ?> >Español</option>
                                    </select>
                                </li>

                                <?php if($this->session->userdata('email')){ ?>

                                <li id="header_inbox_bar" class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                                    <i style="font-size:30px;margin-left:24px;color:white;" class="fa fa-envelope-o"></i>
                                    
                                    <?php if($num>0){ ?>
                                    <span class="badge bg-theme"><?php echo $num;?></span>
                                    <?php } ?>

                                    </a>
                                    <ul class="dropdown-menu extended inbox" style="margin-left:24px;">
                                        <li>
                                            <?php if($num>0){ ?>
                                            <p class="green"><?php echo $this->lang->line('msg1'); ?>
                                            <?php echo $num;?><?php echo $this->lang->line('msg2'); ?></p>
                                            <?php }else{ ?>
                                            <p class="red"><?php echo $this->lang->line('msg3'); ?></p>
                                            <?php } ?>
                                        </li>
                                        <?php foreach($notes as $row): ?>
                                            <?php if($this->session->userdata('email')!=$row->email){ ?>
                                        <li>
                                            <?php if($this->session->userdata('email')==$row->owner_email){ ?>
                                                <a href="/index.php/Rent/booking_list" style="text-decoration:none;">
                                            <?php }else{ ?>
                                                <a href="/index.php/My_booking" style="text-decoration:none;">
                                            <?php } ?>
                                            
                                            <span class="photo"><img alt="avatar" src="/uploads/user_pictures/<?php echo $row->user_picture; ?>"></span>
                                            
                                            <span class="subject">
                                                <?php if($row->status==0){ ?>
                                                <b style="color:red;"><?php echo $row->first;?></b><br>
                                                <span class="from"><?php echo $this->lang->line('msg4'); ?></span>
                                                <?php }else if($row->status==1){ ?>
                                                    <?php if($row->is_read_msg==0){ ?>
                                                        <b style="color:red;"><?php echo $row->first;?></b><br>
                                                        <span class="from"><?php echo $this->lang->line('msg5'); ?></span>
                                                    <?php }else{ ?>
                                                        <b style="color:red;"><?php echo $row->first;?></b><br>
                                                        <span class="from"><?php echo $this->lang->line('msg6'); ?></span>
                                                    <?php } ?>
                                                <?php }else if($row->status==2){ ?>
                                                    <b style="color:red;"><?php echo $row->first;?></b><br>
                                                    <span class="from"><?php echo $this->lang->line('msg7'); ?></span>
                                                <?php }else if($row->status==3){ ?>
                                                    <?php if($row->is_read_msg==0){ ?>
                                                        <b style="color:red;"><?php echo $row->first;?></b><br>
                                                        <span class="from"><?php echo $this->lang->line('msg8'); ?></span>
                                                    <?php }else{ ?>
                                                        <b style="color:red;"><?php echo $row->first;?></b><br>
                                                        <span class="from"><?php echo $this->lang->line('msg6'); ?></span>
                                                    <?php } ?>
                                                <?php }else if($row->status==4){ ?>
                                                    <?php if($row->is_read_msg==0){ ?>
                                                        <b style="color:red;"><?php echo $row->first.' '.$this->lang->line('msg21');?></b><br>
                                                        <span class="from">
                                                            <?php echo $this->lang->line('msg9'); ?>:<br><?php echo $row->startDate.' ~ '.$row->endDate; ?><br>
                                                            <?php echo $this->lang->line('msg10'); ?>: <?php echo $row->deposit_pr.' €';?><br>
                                                            <?php echo $this->lang->line('msg11'); ?>: <?php echo $row->allday_pr.' €';?><br>
                                                            <?php echo $this->lang->line('msg12'); ?>
                                                            <br><?php echo $this->lang->line('msg13'); ?>
                                                        </span>
                                                    <?php }else{ ?>
                                                        <b style="color:red;"><?php echo $row->first;?></b><br>
                                                        <span class="from"><?php echo $this->lang->line('msg6'); ?></span>
                                                    <?php } ?>
                                                    
                                                <?php }else if($row->status==5){ ?>
                                                    <?php if($row->is_read_msg==0){ ?>
                                                        <b style="color:red;"><?php echo $this->lang->line('msg14'); ?></b><br><br>
                                                    <span class="from">
                                                        <?php echo $this->lang->line('msg15'); ?>
                                                        <b style="color:red"><?php echo $this->lang->line('msg16'); ?></b>
                                                        
                                                    <?php }else{ ?>
                                                        <b style="color:red;"><?php echo $row->first;?></b><br>
                                                        <span class="from"><?php echo $this->lang->line('msg6'); ?></span>
                                                    <?php } ?> 
                                                    
                                                <?php }else if($row->status==6){ ?>
                                                    <?php if($row->is_read_msg==0){ ?>
                                                        <b style="color:red;"><?php echo $this->lang->line('msg18'); ?></b><br>
                                                    <span class="from"><?php echo $this->lang->line('msg19'); ?></span>
                                                    <br><b style="color:orange"><?php echo $this->lang->line('msg20'); ?></b> 
                                                    <?php }else{ ?>
                                                        <b style="color:red;"><?php echo $row->first;?></b><br>
                                                        <span class="from"><?php echo $this->lang->line('msg6'); ?></span>
                                                    <?php } ?>
                                                    
                                                <?php } ?>
                                            </span>
                                            </a>
                                        </li>
                                        <?php } ?>
                                        <?php endforeach ?>
                                    </ul>
                                </li>

                                <li class="nav-item">
                                    <a href="/index.php/My_booking" class="btn btn-outline-light" style="font-size:15px;margin-left:22px"><?php echo $this->lang->line('mtrip'); ?></a>
                                </li> 
                                <?php } ?>

                                <li class="nav-item active">
                                    <a class="nav-link" href="/"><?php echo $this->lang->line('home'); ?> <span class="sr-only">(current)</span></a>
                                </li>
                                <?php if(!$this->session->userdata('email')){ ?>

                                <li class="nav-item">
                                    <a class="nav-link" href="/index.php/First/sign_up"><?php echo $this->lang->line('sign_up'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/index.php/First/sign_in"><?php echo $this->lang->line('sign_in'); ?></a>
                                </li>
                                <?php }else{ ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $user->first; ?><br><?php if($user->balance>0){ echo '€'.$user->balance.' EUR';} ?></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        
                                        <a class="dropdown-item" href="/index.php/Myaccount"><?php echo $this->lang->line('account'); ?></a>
                                        <?php if($user->ads_num>0){ ?>
                                        <a class="dropdown-item" href="/index.php/Rent/booking_list"><?php echo $this->lang->line('mybooking'); ?></a>
                                        <a class="dropdown-item" href="/index.php/My_ads"><?php echo $this->lang->line('ad_list'); ?></a>
                                        <?php } ?>
                                                                                
                                        <a class="dropdown-item" href="/index.php/My_booking"><?php echo $this->lang->line('mtrip');?></a>
                                        
                                        <a class="dropdown-item" href="/index.php/First/logout"><?php echo $this->lang->line('sign_out'); ?></a>
                                    </div>
                                </li>
                                
                                <?php if($user->ads_num>0){ ?>
                                <li class="nav-item">
                                    <a href="/index.php/Rent/booking_list" class="btn btn-outline-light" style="font-size:15px;margin-left:22px"><?php echo $this->lang->line('mybooking'); ?></a>
                                </li>
                                <?php }else{ ?>
                                <li class="nav-item">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</li>  
                                <?php } }  ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $this->lang->line('faq');?></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="/index.php/First/faqowner"><?php echo $this->lang->line('faq_owner');?></a>

                                        <a class="dropdown-item" href="/index.php/First/faqtenant"><?php echo $this->lang->line('faq_tenant'); ?></a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <!-- ***** Hero Area Start ***** -->
    <div class="fancy-hero-area bg-img animated-img" style="background-image: url(/assets/img/bg-img/back.jpg);">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="fancy-hero-content text-center">
                        
                        <!-- <div class="video-overview">
                            <a href="https://www.youtube.com/watch?v=f5BBJ4ySgpo" class="video--play--btn"><i class="fa fa-play" aria-hidden="true"></i> Watch The Overview</a>
                        </div> -->
                        <h2><?php echo $this->lang->line('ban1'); ?></h2>
                        <a href="/index.php/Rent" class="btn fancy-btn fancy-active"><?php echo $this->lang->line('bt1'); ?></a>
                        <a href="/index.php/Create_ads" class="btn fancy-btn"><?php echo $this->lang->line('bt2'); ?></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Hero Area End ***** -->
    
    <!-- ***** Top Feature Area Start ***** -->
    <div class="fancy-top-features-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="fancy-top-features-content">
                        <div class="row no-gutters">
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-thumbs-o-up" aria-hidden="true"></i><?php echo $this->lang->line('reli_t'); ?></h5>
                                    <p><?php echo $this->lang->line('reli'); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $this->lang->line('exp_t'); ?></h5>
                                    <p><?php echo $this->lang->line('exp'); ?></p>
                                </div>
                            </div>
                            <div class="col-12 col-md-4">
                                <div class="single-top-feature">
                                    <h5><i class="fa fa-diamond" aria-hidden="true"></i> <?php echo $this->lang->line('qlt_t'); ?></h5>
                                    <p><?php echo $this->lang->line('qlt'); ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Top Feature Area End ***** -->

    <!-- ***** top ranking star rv ***** -->
    <section class="fancy-blog-area section-padding-100-70" style="margin-top:60px;padding-left: 15px;padding-right:15px;">
        <div class="container-fulid">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading text-center">
                        <h3><?php echo $this->lang->line('rent_t'); ?></h3>
                        <!-- <p>We Are A Creative Digital Agency. Focused on Growing Brands Online</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
            <?php foreach($ads as $row): ?>
            <div class="col-12 col-md-3" style="padding:10px">
                <div class="motorhome_info" title="<?php echo 'See the '.$row->vehicle_type.' '.$row->chassis_brand;?>">
                    <div class="img_slide">
                        <div id="<?php echo 'demo'.$row->id; ?>" class="carousel slide" data-ride="carousel">

                            <!-- Indicators -->
                            <ul class="carousel-indicators">
                                <?php 
                                $ii = $row->ph_num;
                                for($i=0;$i<$row->ph_num;$i++){?>
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
                                <div class="row"><span><?php echo $row->seats;?>
                                <?php echo $this->lang->line('seats'); ?> - <?php echo $row->berth;?> <?php echo $this->lang->line('berth'); ?> </span></div>
                            </div>
                            <div class="col-4">
                                <div class="row"><span>From <br><b>€ <?php echo $row->price;?></b></span></div>
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
            </div><br>
            <div style="text-align:center;">
                <a href="index.php/Rent" class="btn fancy-btn fancy-active"><?php echo $this->lang->line('bt1'); ?></a>
            </div>
        </div>
    </section>
    

    <!-- ***** descript ***** -->
    <section class="fancy-services-area bg-img bg-overlay section-padding-100-70" style="background-image: url(/assets/img/bg-img/hero-2.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-heading heading-white text-center">
                        <h2><?php echo $this->lang->line('des_t') ?></h2>
                        <p><?php echo $this->lang->line('des') ?></p>
                    </div>
                </div>
            </div>

            <div class="row">
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/assets/img/part/1.svg" alt="">
                        <p><?php echo $this->lang->line('p1') ?></p>
                        
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1s">
                        <img src="/assets/img/part/2.svg" alt="">
                        <p><?php echo $this->lang->line('p2') ?></p>
                        
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="1.5s">
                        <img src="/assets/img/part/3.svg" alt="">
                        <p><?php echo $this->lang->line('p3') ?></p>
                    </div>
                </div>
                <!-- Single Service -->
                <div class="col-12 col-md-3">
                    <div class="single-service-area text-center wow fadeInUp" data-wow-delay="2s">
                        <img src="/assets/img/part/4.svg" alt="">
                        <p><?php echo $this->lang->line('p4') ?></p>
                        
                    </div>
                </div>
            </div>
            <div  style="text-align:center;">
                <a href="/index.php/Create_ads" class="btn fancy-btn"><?php echo $this->lang->line('create_ad') ?></a>
            </div>
        </div>
    </section>

    <!-- ***** About Us  ***** -->
    <section class="fancy-about-us-area bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="about-us-text">
                        <h2><?php echo $this->lang->line('abt_t') ?></h2>
                        <p><?php echo $this->lang->line('abt') ?></p>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xl-5 ml-xl-auto">
                    <div class="about-us-thumb wow fadeInUp" data-wow-delay="0.5s">
                        <img src="/assets/img/bg-img/about-1.jpg" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** banner ***** -->
    <section class="fancy-cta-area bg-img bg-overlay section-padding-100" style="background-image: url(/assets/img/bg-img/hero-3.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="cta-content text-center">
                        <h2 style="color:white"><?php echo $this->lang->line('banner') ?></h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ***** recent review ***** -->
    <section class="fancy-testimonials-area section-padding-100">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="testimonials-slides owl-carousel">
                        <?php foreach($recent as $row):?>
                        <div class="single-testimonial d-md-flex align-items-center">
                            
                            <div class="testimonial-thumbnail">
                                <img src="/uploads/user_pictures/<?php echo $row->user_picture;?>" alt="avartar">
                            </div>
                            
                            <div class="testimonilas-content">
                                <span class="playfair-font quote">“</span>
                                <h5><?php echo $row->comment?></h5>
                                <h6><?php echo $row->first.'  -';?> <span><?php echo $row->created_at;?></span></h6>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Testimonials Area End ***** -->
    <!-- ***** Footer Area Start ***** -->
    <footer class="fancy-footer-area fancy-bg-dark">
        
        <div class="footer-copywrite-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="copywrite-content h-100 d-flex align-items-center justify-content-between">
                            <div class="copywrite-text">
                                <p  style="color:white;">Banana Campers Copyright &copy;
                                    <script>document.write(new Date().getFullYear());</script> Todos os direitos reservados </a>
                                </p>
                            </div>
                            <div class="copywrite-text">
                                <span style="color:white;"><?php echo $this->lang->line('contact') ?>:</span>&nbsp;&nbsp;<span style="color:white;">suporte@bananacampers.pt</span>
                            </div>
                            <div class="copywrite-text">
                            <a class="policymd" style="color:white;" data-toggle="modal" data-target="#policy" ><?php echo $this->lang->line('private_policy'); ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="modal fade" id="policy">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-content">
                    <div class="modal-header">
                    <h5><?php echo $this->lang->line('policy_t') ?></h5>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="row">
                                <div class="col-12">
                                    
                                    <p><?php echo $this->lang->line('policy') ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" data-dismiss="modal" >Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Footer Area End ***** -->

    <script>
        function ch_lang(){
            var lang = $('#lang').val();
            $.post(
                '/index.php/First/language',
                {
                    lang:lang
                },
                function(data){
                    location.reload();
                }
            );
        }
        $(document).ready(function(){
            $.post(
                '/index.php/First/send_mail_bookend',
                function(data){
                    
                }
            );
        })
    </script>
    <style>
::-webkit-scrollbar {
    width: 5px;
    background:lightgray;
}

::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,255,1); 
    border-radius: 15px;
}

::-webkit-scrollbar-thumb {
    border-radius: 15px;
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.5); 
    background:cyan;
} 
    </style>


