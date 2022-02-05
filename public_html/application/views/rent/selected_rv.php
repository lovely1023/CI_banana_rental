<div style="margin-top:120px;postion:fixed"></div>
<style>
    .datepicker.dropdown-menu {
        margin-top:-113px;
    }
    @media only screen and (max-width: 768px){
        .datepicker.dropdown-menu {
            margin-top:-123px; 
        }
    }
    
    .clickable { cursor: pointer; }
    .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
    background: 0;  color: red; cursor: default; }
    .datepicker table tr td.today,.datepicker table tr td.today:hover{background:lightblue!important;}
    .datepicker-month td .active .day { background-color: blue;color: #fff; }
    span.fc-time {  display: none; }
    span.fc-title { font-size: 15px; padding: 6px 5px; margin: 4px 2px; }
    .ui-datepicker-current-day .ui-state-active { background: #000000; }
    .dp-highlight .ui-state-default {
        background: #484;
        color: #FFF;
    }
    .checked{
        color:orange;
    }
</style>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            
            <div class="row" style="padding:10px;">
                <div id="<?php echo 'demo'.$ads_id; ?>" class="carousel slide" data-ride="carousel">

                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <?php for($i=0;$i<$ph_num;$i++){?>
                        <li data-target="<?php echo '#demo'.$ads_id; ?>"
                        data-slide-to="<?php echo $i;?>" <?php if($i==0){ echo 'class="active"'; }; ?> ></li>
                        <?php } ?>
                    </ul>

                    <!-- The slideshow -->
                    <div class="carousel-inner" >
                        <?php foreach($photos as $slide):?>
                            <?php 
                                if($slide->photo_num==1){
                                    echo    '<div class="carousel-item active" >
                                                <img src="/uploads/ads_photos/'.$slide->img_name.'" alt="Los Angeles" class="dt_img">
                                            </div>';
                                }else{
                                    echo   '<div class="carousel-item " >
                                                <img src="/uploads/ads_photos/'.$slide->img_name.'" alt="Los Angeles" class="dt_img">
                                            </div>';         
                                }
                                
                            ?>
                        <?php endforeach ?>
                    </div>

                    <!-- Left and right controls -->
                    <a class="carousel-control-prev" href="<?php echo '#demo'.$ads_id; ?>" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="<?php echo '#demo'.$ads_id; ?>" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-4 col-sm-2" style="width:100%;">
                    <img src="/uploads/user_pictures/<?php echo $user_info->user_picture;?>" style="width:100px;height:100px;" alt="Owner's picture">
                </div>
                <div class="col-8 col-sm-10">
                    <label><b style="font-size:22px;">
                    <?php echo $ads->chassis_brand.' '.$ads->chassis_model.' de '.$user_info->first; ?></b></label>
                    <p><?php echo $ads->City.' '.$ads->Country; ?></p>
                    <div>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span><?php echo $review_num.' reviews';?></span>
                    </div>
                </div>
            </div>
            <hr><h6><b><?php echo $this->lang->line('abvehi');?></b></h6>
            <div class="row">
                
                <div class="col-12">
                    <p><?php echo $ads->intro;?></p>
                </div>
            </div>
            <hr>
            <h6><b><?php echo $this->lang->line('berths');?></b></h6>
            <div class="row" style="padding:10px;">
                <?php foreach($beds as $row):?>                
                <div class="col-4" style="border:1px dotted #EEE">
                    <p><?php echo $this->lang->line('berth');?> <?php echo $row->berth_num;?></p>
                    <div class="" style="width:100px">
                    <?php if($row->type_berth=='Central bed'){ ?>                    
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_0" x="0" y="0"><svg id="sprites-sleeping_0"><path d="M1 26v1a3 3 0 003 3h48.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H4a3 3 0 00-3 3v1h21a1 1 0 011 1v16a1 1 0 01-1 1H1zm51.691 5H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31zM1 16.5h7V25h14V9H1v7.5zm0 1V25h6v-7.5H1zM8 9v16h3V9H8zM7 8h5v18H7V8z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>  
                        <h6><?php echo $this->lang->line('bd1');?></h6>                 
                    <?php }else if($row->type_berth=='Transversal bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_1" x="0" y="0"><svg id="sprites-sleeping_1"><path d="M17 13v14h35.866l7.923-2.16A3 3 0 0063 21.944V6.055a3 3 0 00-2.21-2.894L52.865 1H17v12zm-1 0H1v11a3 3 0 003 3h12V13zM1 8h7V1H4a3 3 0 00-3 3v4zm8 0h7V1H9v7zM4 0h49l8.052 2.196A4 4 0 0164 6.056v15.889a4 4 0 01-2.948 3.859L53 28H4a4 4 0 01-4-4V4a4 4 0 014-4zM1 9v3h15V9H1z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd2');?></h6> 
                    <?php }else if($row->type_berth=='Leaning bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_2" x="0" y="0"><svg id="sprites-sleeping_2"><path d="M52.691 31H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31zM1 16h15.893a4 4 0 012.057.57l7.111 4.264a4 4 0 011.943 3.433L28.001 30h24.865l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H4a3 3 0 00-3 3v9zm0 8v3a3 3 0 003 3h4v-6H1zm8-7v13h3V17H9zm4 13h14l.004-5.733a3 3 0 00-1.457-2.575l-7.112-4.265A3 3 0 0016.893 17H13v13zM1 17v6h7v-6H1z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd3');?></h6> 
                    <?php }else if($row->type_berth=='Build in/off bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_3" x="0" y="0"><svg id="sprites-sleeping_3"><path d="M52.691 31H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31zM21 4H4a3 3 0 00-3 3v20a3 3 0 003 3h48.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H44v12a1 1 0 01-1 1h-3.25v.336h-1.5V17h-11.5v.72h-1.5V17H22a1 1 0 01-1-1V4zm8 0h-1v.5h-1V4h-5v12h7V4zm2 0h-1v12h3V4h-1v.5h-1V4zm3 0v12h9V4h-3.419c.084.18.14.381.163.638l.006.692-1.5.012-.001-.62a.244.244 0 00-.032-.096L39.297 4H39v.5h-2V4h-1v.5h-1V4h-1zm4.25 2.336h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm-.006 3.834l1.463.33a1.752 1.752 0 01-1.188 1.285l-.445-1.432a.252.252 0 00.17-.183zm-1.052.194v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5H27c-.498 0-.964-.21-1.293-.571l1.108-1.011a.247.247 0 00.185.082h.192zm-.442-2.644h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-.97-.052l1.5.044v.978z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd4');?></h6> 
                    <?php }else if($row->type_berth=='Twin bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_4" x="0" y="0"><svg id="sprites-sleeping_4"><path d="M52 4v3.438l.403-.146.343.942-.091.03-.655.239V12h3.246a1.41 1.41 0 00.04-.224l1.054.034a2.232 2.232 0 01-.014.19H59V4h-7zm-1.805 8H51V8.866l-.552.202-.342-.94.765-.279.129.354V4h-7v8h5.56l.56-.204.075.204zM43 4H4a3 3 0 00-3 3v20a3 3 0 003 3h39V4zm9 9h-8v3h15v-3h-4.19l.389.692a2.27 2.27 0 01-.315.146l-.55.2-.342-.94.27-.098H52zm-8 4v13h15V17H44zm16-5v18a3 3 0 003-3V7a3 3 0 00-3-3v8zm-7.309 19H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448L53.81 3H60a4 4 0 014 4v20a4 4 0 01-4 4h-6.191l-.862 1.724a.5.5 0 01-.894-.448L52.69 31zM49.682 9.346l-.191.07-.133-.366-1.149.418.136.373.94-.342.073.202-.366.133-.418-1.149.766-.278.342.94zm3.685-1.148l.117-1.054c.377.042.737.179 1.047.397l-.615.872a1.417 1.417 0 00-.549-.215zm.979.664l.929-.426c.023.052.045.104.066.16l.24.659-.94.342-.178-.49a1.417 1.417 0 00-.117-.245zm.573 1.5l.94-.342.279.766-.94.342-.279-.766zm-1.693 3.015l.342.94-.765.278-.342-.94.765-.278zm-1.531.557l.342.94-.766.279-.418-1.149.063-.022-.238-.655-.94.342.279.766.94-.342.035.097.703-.256zm-1.853-2.904l-.94.342-.279-.765.94-.342.279.765zm-.16 13.596l-.342.94-.766-.28.418-1.148.366.133-.074.202-.94-.342-.135.373 1.149.418.133-.366.191.07zm.766.279l.765.278-.342.94-.765-.279.342-.94zm1.531.557l.676.246.09.03-.342.942-.766-.278.342-.94zm1.388.312c.197-.032.384-.106.549-.215l.615.872c-.31.218-.67.355-1.047.397l-.117-1.054zm.979-.664c.046-.076.085-.158.117-.245l.178-.49.94.342-.24.659c-.021.056-.043.109-.066.16l-.93-.426zm.573-1.5l.28-.766.939.342-.279.766-.94-.342zm.367-1.414a1.415 1.415 0 00-.18-.562l.92-.546c.193.325.302.695.314 1.075l-1.054.033zm-.593-1.016c-.099-.07-.209-.127-.328-.17l-.373-.136.342-.94.55.2c.113.043.216.09.315.146l-.506.9zm-1.467-.585l-.765-.279.342-.94.765.28-.342.94zm-1.531-.557l-.703-.256-.036.097-.94-.342-.278.766.94.342.238-.654-.063-.023.418-1.149.766.279-.342.94zm-1.296 1.372l-.279.766-.94-.342.28-.766.939.342zm-.557 1.532l-.279.765-.94-.342.279-.765.94.342z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd5');?></h6> 
                    <?php }else if($row->type_berth=='Capuccino bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_5" x="0" y="0"><svg id="sprites-sleeping_5"><path d="M52 4v3.438l.403-.146.343.942-.091.03-.655.239V12h3.246a1.41 1.41 0 00.04-.224l1.054.034a2.232 2.232 0 01-.014.19H59V4h-7zm-1.805 8H51V8.866l-.552.202-.342-.94.765-.279.129.354V4h-7v8h5.56l.56-.204.075.204zM43 4H4a3 3 0 00-3 3v20a3 3 0 003 3h39V4zm9 9h-8v3h15v-3h-4.19l.389.692a2.27 2.27 0 01-.315.146l-.55.2-.342-.94.27-.098H52zm-8 4v13h15V17H44zm16-5v18a3 3 0 003-3V7a3 3 0 00-3-3v8zm-7.309 19H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448L53.81 3H60a4 4 0 014 4v20a4 4 0 01-4 4h-6.191l-.862 1.724a.5.5 0 01-.894-.448L52.69 31zM49.682 9.346l-.191.07-.133-.366-1.149.418.136.373.94-.342.073.202-.366.133-.418-1.149.766-.278.342.94zm3.685-1.148l.117-1.054c.377.042.737.179 1.047.397l-.615.872a1.417 1.417 0 00-.549-.215zm.979.664l.929-.426c.023.052.045.104.066.16l.24.659-.94.342-.178-.49a1.417 1.417 0 00-.117-.245zm.573 1.5l.94-.342.279.766-.94.342-.279-.766zm-1.693 3.015l.342.94-.765.278-.342-.94.765-.278zm-1.531.557l.342.94-.766.279-.418-1.149.063-.022-.238-.655-.94.342.279.766.94-.342.035.097.703-.256zm-1.853-2.904l-.94.342-.279-.765.94-.342.279.765zm-.16 13.596l-.342.94-.766-.28.418-1.148.366.133-.074.202-.94-.342-.135.373 1.149.418.133-.366.191.07zm.766.279l.765.278-.342.94-.765-.279.342-.94zm1.531.557l.676.246.09.03-.342.942-.766-.278.342-.94zm1.388.312c.197-.032.384-.106.549-.215l.615.872c-.31.218-.67.355-1.047.397l-.117-1.054zm.979-.664c.046-.076.085-.158.117-.245l.178-.49.94.342-.24.659c-.021.056-.043.109-.066.16l-.93-.426zm.573-1.5l.28-.766.939.342-.279.766-.94-.342zm.367-1.414a1.415 1.415 0 00-.18-.562l.92-.546c.193.325.302.695.314 1.075l-1.054.033zm-.593-1.016c-.099-.07-.209-.127-.328-.17l-.373-.136.342-.94.55.2c.113.043.216.09.315.146l-.506.9zm-1.467-.585l-.765-.279.342-.94.765.28-.342.94zm-1.531-.557l-.703-.256-.036.097-.94-.342-.278.766.94.342.238-.654-.063-.023.418-1.149.766.279-.342.94zm-1.296 1.372l-.279.766-.94-.342.28-.766.939.342zm-.557 1.532l-.279.765-.94-.342.279-.765.94.342z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd6');?></h6> 
                    <?php }else if($row->type_berth=='Bench bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_6" x="0" y="0"><svg id="sprites-sleeping_6"><g fill="#2E2E2E" fill-rule="nonzero"><path d="M22 10.5h6V4h-5a1 1 0 00-1 1v5.5zm0 1V16a1 1 0 001 1h5v-5.5h-6zm-1 0V5c0-.364.097-.706.268-1H4a3 3 0 00-3 3v20a3 3 0 003 3h48.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4h-9.134c.17.294.268.636.268 1v11a2 2 0 01-2 2H23a2 2 0 01-2-2v-4.5zm8-1V17h3V4h-3v6.5zM33 4v1.322h1v.815h-1v.815h1v.815h-1v.815h1v.696h-.066V10.5h.814v-1H34v-.104h-1v1.715h1.222v.389h.204v-1h-.815v1.222H34v-.214h-1v.814h1v.815h-1v.815h1v.815h-1V17h.934v-.722H34v-.696h-1v.814h1v.104h.748v.5h.815v-.5h.815v.5h.815v-.5h.397c.127 0 .25-.017.367-.048l.09.548H42a1 1 0 001-1V5a1 1 0 00-1-1h-2.83c.164.133.309.288.43.462l-.876.61a1.417 1.417 0 00-.442-.39L38.619 4h-.934v.503a1.431 1.431 0 00-.095-.003h-.72V4h-.814v.5h-.815V4h-.815v.5h-.204v-.389H33v.397h1v.214h-.389V4H33zm19.691-1l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859L53 31H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691zm-17.45 8.5v-1h.815v1h-.815zm1.63 0v-1h.814v1.003a1.431 1.431 0 00-.095-.003h-.72zm1.41.181l.47-.95c.34.168.632.42.849.731l-.876.61a1.417 1.417 0 00-.442-.39zm.693.96l1.019-.083c.004.056.007.113.007.173v.7h-1v-.52c0-.093-.009-.183-.026-.27zM39 14.245h1v.815h-1v-.815zm-.139 1.454l.979.392c-.141.352-.37.663-.663.903l-.677-.828c.151-.128.275-.287.361-.467zm.113-10.06l1.019-.082c.004.056.007.113.007.173v.7h-1v-.52c0-.093-.009-.183-.026-.27zM39 7.246h1v.815h-1v-.815zM38.861 8.7l.979.392c-.141.352-.37.663-.663.903l-.677-.828c.151-.128.275-.287.361-.467zm-.904.752l.167 1.018a2.27 2.27 0 01-.346.03h-.585v-1h.397c.127 0 .25-.017.367-.048zm-1.58.048v1h-.814v-1h.815z"></path><path d="M52.053 32.276a.5.5 0 00.894.448l1-2a.5.5 0 00-.894-.448l-1 2z"></path></g></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd7');?></h6> 
                    <?php }else if($row->type_berth=='Lift celling bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_7" x="0" y="0"><svg id="sprites-sleeping_7"><path d="M20 17.478V24a1 1 0 001 1h5v-7.498l-6-.024zm0-1l6 .024V8h-5a1 1 0 00-1 1v7.478zm-1 .996h-.026l.004-1H19V9a2 2 0 012-2h19a2 2 0 012 2v15a2 2 0 01-2 2H21a2 2 0 01-2-2v-6.526zM30 25h10a1 1 0 001-1V9a1 1 0 00-1-1H30v17zm15.885 6a1.85 1.85 0 01-.725.242 2.145 2.145 0 01-.263.005l-.017-.001.015-.246h-1.002l-.011.183-.998-.062.007-.121H41.89l-.003.06-.95-.06H4a4 4 0 01-4-4V7a4 4 0 014-4h37.84l-.003-.056.998-.062.008.118h1.002l-.012-.18.998-.063.016.243h7.844l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31h-6.806zm.78-27c.028.091.05.187.067.29.014.142.018.193.018.253v.433h-1.5v-.433a.311.311 0 00-.062-.193l.468-.35h-.747l.016.255-.998.062-.02-.317h-1.002l.024.379-.999.062L41.903 4h-1.002l.031.503-.998.062L39.9 4h-1.002l.04.627-.999.063-.043-.69h-1.002l.047.752-.998.062-.05-.814h-1.003l.055.876-.998.062L33.888 4h-1.002l.062 1-.998.063L31.884 4h-1.002l.07 1.125-.998.062L29.88 4h-1.002l.078 1.249-.998.062L27.876 4h-1.002l.085 1.373-.998.062L25.872 4H4a3 3 0 00-3 3v20a3 3 0 003 3h20.919l.093-1.495.998.063L25.92 30h1.002l.086-1.37.998.062L27.924 30h1.002l.078-1.246.998.062L29.928 30h1.002l.07-1.122.998.063L31.932 30h1.002l.062-.997.998.062-.058.935h1.002l.054-.873.998.062-.05.811h1.002l.046-.749.999.062-.043.687h1.002l.039-.624.998.062-.035.562h1.002l.03-.5.999.062-.027.438h1.001l.024-.376.998.062-.02.314h1.002l.016-.251h.017.039a.25.25 0 00.184-.139l.736.39h6.917l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4h-6.2zm-32.68 2.181l-.094-1.497.998-.062.094 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.063.093 1.498-.998.062zm1.996-.125l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497L24.87 4l.093 1.497-.998.062zm21.285.416h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm-21.236.467l-.094 1.497-.998-.062.094-1.497.998.062zm-1.997-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.498.998.063zm-1.996-.125l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.049-.003a1.741 1.741 0 01-1.408-.895l1.308-.735c.045.08.117.128.194.133l.048.003zm-.283-.846h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-.502c0-.288.067-.57.194-.822l1.34.674a.328.328 0 00-.034.148v.502zM27 8v17h2V8h-2z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd8');?></h6> 
                    <?php }else if($row->type_berth=='Bunk bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_8" x="0" y="0"><svg id="sprites-sleeping_8"><g fill="#2E2E2E" fill-rule="nonzero"><path d="M12 15v15h40.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H12v11zm-1 0H1v12a3 3 0 003 3h7V15zm0-4V4H4a3 3 0 00-3 3v4h10zM4 3h49l8.052 2.196A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859L53 31H4a4 4 0 01-4-4V7a4 4 0 014-4zm-3 9v2h10v-2H1z"></path><path d="M53.947 3.276a.5.5 0 01-.894.448l-1-2a.5.5 0 01.894-.448l1 2zM52.053 32.276a.5.5 0 00.894.448l1-2a.5.5 0 00-.894-.448l-1 2z"></path></g></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd9');?></h6> 
                    <?php }else if($row->type_berth=='Swing bed'){ ?>
                        <svg class="img-responsive" viewBox="0 0 72 35">
                            <use xlink:href="#sprites-sleeping_9" x="0" y="0"><svg id="sprites-sleeping_9"><path d="M20 17.478V24a1 1 0 001 1h5v-7.498l-6-.024zm0-1l6 .024V8h-5a1 1 0 00-1 1v7.478zm-1 .996h-.026l.004-1H19V9a2 2 0 012-2h19a2 2 0 012 2v15a2 2 0 01-2 2H21a2 2 0 01-2-2v-6.526zM30 25h10a1 1 0 001-1V9a1 1 0 00-1-1H30v17zm15.885 6a1.85 1.85 0 01-.725.242 2.145 2.145 0 01-.263.005l-.017-.001.015-.246h-1.002l-.011.183-.998-.062.007-.121H41.89l-.003.06-.95-.06H4a4 4 0 01-4-4V7a4 4 0 014-4h37.84l-.003-.056.998-.062.008.118h1.002l-.012-.18.998-.063.016.243h7.844l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31h-6.806zm.78-27c.028.091.05.187.067.29.014.142.018.193.018.253v.433h-1.5v-.433a.311.311 0 00-.062-.193l.468-.35h-.747l.016.255-.998.062-.02-.317h-1.002l.024.379-.999.062L41.903 4h-1.002l.031.503-.998.062L39.9 4h-1.002l.04.627-.999.063-.043-.69h-1.002l.047.752-.998.062-.05-.814h-1.003l.055.876-.998.062L33.888 4h-1.002l.062 1-.998.063L31.884 4h-1.002l.07 1.125-.998.062L29.88 4h-1.002l.078 1.249-.998.062L27.876 4h-1.002l.085 1.373-.998.062L25.872 4H4a3 3 0 00-3 3v20a3 3 0 003 3h20.919l.093-1.495.998.063L25.92 30h1.002l.086-1.37.998.062L27.924 30h1.002l.078-1.246.998.062L29.928 30h1.002l.07-1.122.998.063L31.932 30h1.002l.062-.997.998.062-.058.935h1.002l.054-.873.998.062-.05.811h1.002l.046-.749.999.062-.043.687h1.002l.039-.624.998.062-.035.562h1.002l.03-.5.999.062-.027.438h1.001l.024-.376.998.062-.02.314h1.002l.016-.251h.017.039a.25.25 0 00.184-.139l.736.39h6.917l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4h-6.2zm-32.68 2.181l-.094-1.497.998-.062.094 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.063.093 1.498-.998.062zm1.996-.125l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497L24.87 4l.093 1.497-.998.062zm21.285.416h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm-21.236.467l-.094 1.497-.998-.062.094-1.497.998.062zm-1.997-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.498.998.063zm-1.996-.125l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.049-.003a1.741 1.741 0 01-1.408-.895l1.308-.735c.045.08.117.128.194.133l.048.003zm-.283-.846h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-.502c0-.288.067-.57.194-.822l1.34.674a.328.328 0 00-.034.148v.502zM27 8v17h2V8h-2z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                        </svg>
                        <h6><?php echo $this->lang->line('bd10');?></h6> 
                    <?php } ?>
                    </div>
                    
                    <p><?php echo $row->width_berth.' cm X '.$row->length_berth.' cm'?></p>


                </div>
                <?php endforeach;?>
            </div>
            <hr>
            <h6><b><?php echo $this->lang->line('equp');?></b></h6><br>
            <div class="row"> 
            
                <div class="col-12"><h6>=<?php echo $this->lang->line('dri');?>=</h6></div>
            </div><br>
            <div class="row">
                <?php if($eqps->power_steering==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('dri1');?>
                </div>
                <?php }if($eqps->cruise_control==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri2');?>
                    </div>
                <?php }if($eqps->wheel_drive==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri3');?>
                    </div>
                <?php }if($eqps->gps==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri4');?>
                    </div>
                <?php }if($eqps->parking_motion==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri5');?>
                    </div>
                <?php }if($eqps->rear_camera==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri6');?>
                    </div>
                <?php }if($eqps->cabin_heating==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri7');?>
                    </div>
                <?php }if($eqps->ac==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri8');?>
                    </div>
                    <?php }if($eqps->central_lock==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri9');?>
                    </div>
                    <?php }if($eqps->baby_seat==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri10');?>
                    </div>
                    <?php }if($eqps->baby_car_chair==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri11');?>
                    </div>

                    <?php }if($eqps->winter_tires==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri12');?>
                    </div>
                    <?php }if($eqps->snow_chains==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri13');?>
                    </div>
                    <?php }if($eqps->wedge_levelers==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri14');?>
                    </div>
                    <?php }if($eqps->safety_kit==1){ ?>
                    <div class="col-4">
                    <?php echo $this->lang->line('dri15');?>
                    </div>
                <?php } ?>
            </div><br>
            <div class="row">
                
                <div class="col-12"><h6>=<?php echo $this->lang->line('life');?>=</h6></div>
            </div><br>
            <div class="row">
                    <?php if($eqps->Autoradio==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life1');?>
                </div>
                <?php }if($eqps->CD_Player==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life2');?>
                </div>
                <?php }if($eqps->MP3==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life3');?>
                </div>
                <?php }if($eqps->Audio_in==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life4');?>
                </div>
                <?php }if($eqps->Bluetooth==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life5');?>
                </div>
                <?php }if($eqps->TV==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life6');?>
                </div>
                <?php }if($eqps->DVD_Player==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life7');?>
                </div>
                <?php }if($eqps->Satellite_dish==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life8');?>
                </div>
                <?php }if($eqps->Sponge==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life9');?>
                </div>
                <?php }if($eqps->AC_life==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life10');?>
                </div>
                <?php }if($eqps->Bed_linen==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life11');?>
                </div>
                <?php }if($eqps->Swing_driver==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life12');?>
                </div>
                <?php }if($eqps->Swing_passenger==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('life13');?>
                </div>
                <?php } ?>
            </div><br>
            <div class="row">
               
                <div class="col-12"><h6>=<?php echo $this->lang->line('kitchen');?>=</h6></div>
            </div><br>
            <div class="row">
                <?php if($eqps->Sink==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen1');?>
                </div>
                <?php }if($eqps->Stove==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen2');?>
                </div>
                <?php }if($eqps->Oven==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen3');?>
                </div>
                <?php }if($eqps->Fridge==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen4');?>
                </div>
                <?php }if($eqps->Freezer==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen5');?>
                </div>
                <?php }if($eqps->Extractor==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen6');?>
                </div>
                <?php }if($eqps->Pan_kit==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen7');?>
                </div>
                <?php }if($eqps->Dishes_kit==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen8');?>
                </div>
                <?php }if($eqps->Coffee_machine==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen9');?>
                </div>
                <?php }if($eqps->Inside_table==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('kitchen10');?>
                </div>
                <?php } ?>
            </div><br>
            <div class="row">
                
                <div class="col-12"><h6>=<?php echo $this->lang->line('bath');?>=</h6></div>
            </div><br>
            <div class="row">
                <?php if($eqps->Inside_shower==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('bath1');?>
                </div>
                <?php }if($eqps->Outside_shower==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('bath2');?>
                </div>
                <?php }if($eqps->Integrated_bathroom==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('bath3');?>
                </div>
                <?php }if($eqps->Portable_toilet==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('bath4');?>
                </div>
                <?php }if($eqps->Sink_bath==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('bath5');?>
                </div>
                <?php } ?>
            </div><br>
            <div class="row">
               
                <div class="col-12"><h6>=<?php echo $this->lang->line('out');?>=</h6></div>
            </div><br>
            <div class="row">
                <?php if($eqps->Bicycle_carrier==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('out1');?>
                </div>
                <?php }if($eqps->Side_awning==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('out2');?>
                </div>
                <?php }if($eqps->Outside_table==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('out3');?>
                </div>
                <?php }if($eqps->Barbecue==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('out4');?>
                </div>
                <?php }if($eqps->Towing_adaptor==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('out5');?>
                </div>
                <?php }if($eqps->Outside_chairs==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('out7');?>
                </div>
                <?php }if($eqps->Outdoor_luggage_compartment==1){ ?>
                <div class="col-8">
                <?php echo $this->lang->line('out6');?>
                </div>
                <?php } ?>
            </div><br>
            <div class="row">
                
                <div class="col-12"><h6>=<?php echo $this->lang->line('auto');?>=</h6></div>
            </div><br>
            <div class="row">
                <?php if($eqps->Solar_panels==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('auto1');?>
                </div>
                <?php }if($eqps->Outside_Eletric==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('auto2');?>
                </div>
                <?php }if($eqps->Auxiliary_battery==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('auto3');?>
                </div>
                <?php }if($eqps->Eletric_generator==1){ ?>
                <div class="col-4">
                <?php echo $this->lang->line('auto4');?>
                </div>
                <?php } ?>
            </div><br>

            <hr><h6><b><?php echo $this->lang->line('techsp');?></b></h6>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-5">
                <?php echo $this->lang->line('techsp1');?>: <b><?php echo $ads->conversion_model; ?></b><br>
                <?php echo $this->lang->line('techsp2');?>: <b><?php echo $ads->license_p_year;?></b><br>
                <?php echo $this->lang->line('techsp3');?>: <b><?php echo $ads->seats;?></b><br>
                <?php echo $this->lang->line('techsp4');?>: <b><?php echo $ads->seatbelts;?></b>
                </div>
                <div class="col-5">
                    <br>
                    <?php echo $this->lang->line('techsp5');?>: <b><?php echo $ads->total_weight;?></b><br>
                    <?php echo $this->lang->line('techsp6');?>: <b><?php echo $ads->berth;?></b><br>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2"></div>
                <div class="col-5">
                <?php echo $this->lang->line('techsp7');?>: <b><?php echo $ads->length.' m'; ?></b><br>
                <?php echo $this->lang->line('techsp8');?>: <b><?php echo $ads->height.' m';?></b><br>
                <?php echo $this->lang->line('techsp9');?>: <b><?php echo $ads->width.' m';?></b>
                </div>
                <div class="col-5">
                <?php echo $this->lang->line('techsp10');?>: <b><?php echo $ads->fuel; ?></b><br>
                <?php echo $this->lang->line('techsp11');?>: <b><?php echo $ads->consumption;?></b><br>
                </div>
            </div>
            <hr><h6><b><?php echo $this->lang->line('abowner');?></b></h6>
            <div class="row">
                
                <div class="col-12">
                    <p><?php echo $user_info->presentation;?></p>
                </div>
            </div><hr>
            
            <h6><b><?php echo $this->lang->line('review');?></b></h6>
            <?php foreach($review as $row):?>
            <div class="row" style="border:1px solid #EEE;">
                <div style="padding:10px;width:20%;float:left;">
                    <img src="<?php echo '/uploads/user_pictures/'.$row->user_picture;?>" style="width:80px;height:80px;border-radius:50%;" alt="client_avartar">
                </div>
                <div style="width:80%;float:left;">
                    <div class="row">
                        <div class="col-12"><h6><b><?php echo $row->first;?></b></h6></div>
                        <div class="col-12"><p><?php echo $row->created_at; ?></p></div>
                        <div class="col-12"><span><?php echo $row->comment; ?></span></div>
                        <?php if($row->rate==5){?>
                        <div class="col-12">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa">&nbsp&nbsp <?php echo $row->rate;?></span>
                        </div>
                        <?php } ?>
                        <?php if($row->rate==0){?>
                        <div class="col-12">
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa">&nbsp&nbsp <?php echo $row->rate;?></span>
                        </div>
                        <?php } ?>
                        <?php if($row->rate==1){?>
                        <div class="col-12">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa">&nbsp&nbsp <?php echo $row->rate;?></span>
                        </div>
                        <?php } ?>
                        <?php if($row->rate==2){?>
                        <div class="col-12">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa">&nbsp&nbsp <?php echo $row->rate;?></span>
                        </div>
                        <?php } ?>
                        <?php if($row->rate==3){?>
                        <div class="col-12">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa fa-star "></span>
                            <span class="fa">&nbsp&nbsp <?php echo $row->rate;?></span>
                        </div>
                        <?php } ?>
                        <?php if($row->rate==4){?>
                        <div class="col-12">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star "></span>
                            <span class="fa">&nbsp&nbsp <?php echo $row->rate;?></span>
                        </div>
                        <?php } ?> 
                    </div>
                    <?php if(isset($row->img)){ ?>
                    <div style="padding:5px;float:left">
                        <img src="<?php echo '/uploads/review_img/'.$row->img;?>" style="width:80px;height:80px;" alt="">
                    </div>
                    <?php } ?> 
                                     
                </div>
            </div> <br>             
            <?php endforeach; ?>

            <div style="height:100px"></div>
            <!-- In here, addtional infos -->
        </div>   
        <div class="col-12 col-md-4 ">
            <div class="row">
                <span class="title_pr">
                <?php echo $this->lang->line('rangett');?>
                </span>
            </div>
            <div class="row border_show">
                <div class="date_r">
                    <input type="text" placeholder="<?php echo $this->lang->line('startda');?>" class="form-control" id="start_date" >
                    <br>
                    <input type="text" placeholder="<?php echo $this->lang->line('endda');?>" class="form-control" id="end_date" >
                </div>  
                <div class="prtg">
                    <p id="prtg_title"><?php echo $this->lang->line('prdt');?></p>                  
                    <p id="default"><b><?php echo $this->lang->line('day');?>:</b> <span id="perday_pr"></span></p>
                    <p id="average"><b><?php echo $this->lang->line('avgday');?>:</b> <span id="average_pr"></span></p>
                    
                    <p><b><?php echo $this->lang->line('total');?>:</b> <span id="total_pr"></span></p>             
                    <p><b><?php echo $this->lang->line('deposi');?>:</b> <span id="deposit_pr"><?php echo '€'.$ads->deposit;?></span></p>             
                    <p><?php echo $this->lang->line('deposi_detail');?></p>             
                </div>              
            </div>
            <div class="row">
                <button class="btn btn-danger btn-block" id="before" style="display:block"><?php echo $this->lang->line('beforebooking');?></button>
                
                <button class="btn btn-success btn-block" id="after" style="display:none"  id="bookingbtn" owner="<?php echo $ads->email;?>"
                 onclick="booking(this)"><?php echo $this->lang->line('booking');?></button>
            </div>
        </div>
    </div>
</div>

<script>
    var dates = [];
    var date = new Date();
    function formatDate(date) {
        var d = new Date(date),
            month = '' + (d.getMonth() + 1),
            day = '' + d.getDate(),
            year = d.getFullYear();

        if (month.length < 2) 
            month = '0' + month;
        if (day.length < 2) 
            day = '0' + day;

        return [year, month, day].join('-');
    }
    var start,end,loop,newDate;
    <?php foreach($daterange as $row): ?>
        start = new Date("<?php echo $row->startDate;?>");
        end = new Date("<?php echo $row->endDate;?>");
        loop = new Date(start);
        while(loop <= end){   
            dates.push(formatDate(loop));     
            newDate = loop.setDate(loop.getDate() + 1);
            loop = new Date(newDate);           
        }
    <?php endforeach; ?>

    var checkin = $('#start_date').datepicker({
        
        beforeShowDay: function(date) {
            var dateStr = moment(date).format('YYYY-MM-DD');
            return $.inArray(dateStr,dates) == -1;
        },
        startDate: date,
        autoclose: true,
        todayHighlight : true,
        format : 'yyyy-mm-dd',
        changeMonth: true,
        changeYear: true,
        <?php if($this->session->userdata('language')!='en'){ ?>
        language:'pt'
        <?php } ?>

    }).on('changeDate', function(ev) {
        if ((ev.date.valueOf() >= checkout.datepicker("getDate").valueOf()) || !checkout.datepicker("getDate").valueOf()) {
            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.datepicker("update", newDate);
        }
        $('#end_date')[0].focus();
    });

    // $("#start_date").datepicker($.datepicker.regional['pt']);

    var checkout = $('#end_date').datepicker({
        beforeShowDay: function(date) {
            var dateStr = moment(date).format('YYYY-MM-DD');
            return $.inArray(dateStr,dates) == -1;
        },
        startDate: date,
        autoclose: true,
        todayHighlight : true,
        format : 'yyyy-mm-dd',
        <?php if($this->session->userdata('language')!='en'){ ?>
        language:'pt'
        <?php } ?>
    }).on('changeDate', function(ev) {
        if($('#start_date').val()==''){
            $('#start_date').focus();
        }else{
            if($('#end_date').val()==''){
                $('#end_date').focus();
            }else{
                check_daterange();
            }            
        }        
    });
    var perday,allday,service_fee,total,startdate,avg_pr,enddate;

    function check_daterange(){
        $.post(
            '/index.php/Rent/check_user',
            function(data){
                if(data=='yes'){
                    startdate=$('#start_date').val();
                    enddate=$('#end_date').val(); 

                    $.post(
                        '/index.php/Rent/check_schedule',
                        {
                            start:startdate,
                            end:enddate,
                            ads_id:<?php echo $ads_id;?>,
                            perday:<?php echo $ads->price; ?>
                        },
                        function(data){
                        if(data=="no"){ 
                            $('.prtg').css('display','none');
                                toastr_call('info','<?php echo $this->lang->line('alreadyrange');?>');
                            }
                        else{
                                $('.prtg').css('display','block');
                                $('#before').css('display','none');
                                $('#after').css('display','block');

                            perday = <?php echo $ads->price; ?>;
                            // for(i=startdate; i<=enddate; i+=86400){
                            //     allday = allday + getAveragePrice(i);
                            // }
                            var as = JSON.parse(data);
                            allday = Number(as.all_price);
                            service_fee = Math.round(allday*0.15);
                            avg_pr = Math.round(allday/Number(as.date));
                            total = Number(allday) + service_fee;
                            console.log(avg_pr);
                            
                            if (avg_pr == perday) {
                            $("#average").css("display","none");
                            // $('#average_pr').text("No season");
                            $('#perday_pr').text('€' + perday);
                            $('#allday_pr').text('€' + allday);
                            $('#service_pr').text('€' + service_fee);
                            $('#total_pr').text('€' + total);                                
                            }else{
                            $("#default").css("display","none");
                            $('#average_pr').text('€' + avg_pr);
                            // $('#perday_pr').text('€' + perday);
                            $('#allday_pr').text('€' + allday);
                            $('#service_pr').text('€' + service_fee);
                            $('#total_pr').text('€' + total);
                            }
                        }
                        }
                    );
                }else{
                    toastr_call('warning','','<?php echo $this->lang->line('penid');?>');
                }
            }
        );
    }

    // function getAveragePrice(i){
    //     $

    // }

    function booking(e){
        owner_email = $(e).attr('owner');
        if(startdate){
            
            $.post(
                '/index.php/Rent/book_new',
                {
                    owner_email:owner_email,
                    startdate:startdate,
                    enddate:enddate,
                    ads_id:<?php echo $ads_id;?>,
                    allday:allday,
                    service_fee:service_fee,
                    deposit:<?php echo $ads->deposit;?>
                },
                function(data){                   
                    if(data=='sign_in'){
                        window.location.href = '/index.php/First/sign_in';
                    }else if(data=='same_user'){
                        toastr_call('warning','','<?php echo $this->lang->line('ownrv');?>');
                    }else{
                        toastr_call('success','<?php echo $this->lang->line('suc1');?>','<?php echo $this->lang->line('suc2');?>');
                        
                        var delayInMilliseconds = 4000;
               
                        setTimeout(function() {
                            window.location.href = '/';
                        }, delayInMilliseconds);
                    }
                }
            );
        }
    }

    


</script>