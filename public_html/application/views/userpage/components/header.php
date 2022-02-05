<!-- ***** Header Area Start ***** -->
<header class="header_area" id="header" style="background:rgb(61, 60, 60);">
    <div class="container-fluid h-100">
        <div class="row h-100">
            <div class="col-12 h-100">
                <nav class="h-100 navbar navbar-expand-lg align-items-center">
                    <a class="navbar-brand" href="/"><img src="/assets/img/logo.png" style="width:80px;height:80px;" alt=""></a>
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

                                <?php 
                                if($this->session->userdata('email')){ ?>
                                    
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

                                <?php if(!$this->session->has_userdata('email')){ ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="/index.php/First/sign_up"><?php echo $this->lang->line('sign_up'); ?></a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/index.php/First/sign_in"><?php echo $this->lang->line('sign_in'); ?></a>
                                </li>
                                <?php }if($this->session->has_userdata('email')){ ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <?php echo $user->first; ?><br> <?php if($user->balance>0){ echo '€'.$user->balance.' EUR';}?></a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <!-- <a class="dropdown-item" href="#">Home</a> -->
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
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->
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
    </script>
