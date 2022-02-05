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
                                        <option value="fr" <?php if($this->session->userdata('language')=="fr"){ echo "selected"; } ?> >France</option>
                                        <option value="sp" <?php if($this->session->userdata('language')=="sp"){ echo "selected"; } ?> >España</option>
                                    </select>
                            </li>

                            <?php if($this->session->userdata('email')){ ?>

                                <li id="header_inbox_bar" class="dropdown">
                                    <a data-toggle="dropdown" class="dropdown-toggle" href="">
                                        <i style="font-size:30px;margin-left:24px;color:white;" class="fa fa-envelope-o"></i>

<!--                                        --><?php //if($num>0){ ?>
<!--                                            <span class="badge bg-theme">--><?php //echo $num; ?><!--</span>-->
<!--                                        --><?php //} ?>

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
                            <?php } ?>


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

<!-- ***** FAQ Owner Area Start ***** -->
<div class="faq-content fancy-top-features-area bg-gray">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php echo $this->lang->line('faq_o_desc'); ?>
            </div>
        </div>
    </div>
</div>
<!-- ***** FAQ Owner Area End ***** -->
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


