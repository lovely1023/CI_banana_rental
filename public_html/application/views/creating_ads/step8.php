<style>
    body{
        background:#f3f4f5;
    }
</style>

<link rel="stylesheet" href="/assets/step_progress/styles/site.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cutive+Mono|Open+Sans:300,400&display=swap">
<link rel="stylesheet" href="/assets/step_progress/styles/progress-tracker.css">

<script src="/assets/step_progress/scripts/site.js"></script>

<div class="container">
    <div class="row">
        <div class="col-xs-12 col-lg-9" style="height:auto">
            <div>
                <a href="/" >
                    <img src="/assets/img/sign.png" style="height:75px;padding:5px;" alt="Monkey">
                </a>
            </div>
            <div><p style="font-size:18px;text-align:center"><b><?php echo $this->lang->line('steprang');?></b></p></div>
           
            <div class="col-xs-12">
                <div class="fullwidth col-xs-2"> 
                      <div class="container">
                            <style>
                                .progress-tracker--vertical .progress-text {
                                    padding: 0 12px 30px 12px;
                                }
                                .separator {
                                     border-bottom: 0px solid #ddd; 
                                }
                                .progress-tracker {
                                    display: -webkit-box;
                                    display: -ms-flexbox;
                                    display: flex;
                                    margin: 10px auto;
                                    padding: 0;
                                    list-style: none;
                                }
                            </style>
                        <ul class="progress-tracker progress-tracker--vertical">
                          <!-- <li class="progress-step is-complete"> -->
                          <li class="progress-step is-active">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">1</h4>                     
                            </div>
                          </li>

                          <li class="progress-step is-active">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">2</h4>
                            </div>
                          </li>

                          <li class="progress-step is-active" aria-current="step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">3</h4>
                            </div>
                          </li>

                          <li class="progress-step is-active">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">4</h4>
                            </div>
                          </li>

                          <li class="progress-step is-active">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">5</h4>
                            </div>
                          </li>
                          <li class="progress-step is-active">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">6</h4>
                            </div>
                          </li>
                          <li class="progress-step is-active">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">7</h4>
                            </div>
                          </li>
                          <li class="progress-step is-active">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">8</h4>
                            </div>
                          </li>
                          <li class="progress-step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">9</h4>
                            </div>
                          </li>
                        </ul>    
                      </div>
                </div>


                <div class="col-xs-10" style="padding-left: 30px">
                    <div class="container">
                        <div >
                            <h3><?php echo $this->lang->line('renpr');?></h3>
                            <p></p>
                        </div>
                        <!-- here -->
                        <div class="row">
                            <div class="container">
                                <hr>
                                
                                <div class="row">
                                    <div class="col-xs-12 col-md-6">
                                        <label for="price"><?php echo $this->lang->line('renpr1');?> € *</label>
                                        <div class="form-group">
                                            <input type="number" id="price" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-6">
                                        <label for="deposit"><?php echo $this->lang->line('renpr2');?> *</label>
                                        <div class="form-group">
                                            <input type="number" id="deposit" class="form-control">
                                        </div>
                                    </div>
                                </div>
                                <div style="text-align:center">
                                    <hr><button class="btn btn-primary btn-lg" onclick="back_step7()"><?php echo $this->lang->line('back');?></button>
                                    <button class="btn btn-primary btn-lg" onclick="to_step9()"><?php echo $this->lang->line('next');?></button><hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
            <h3><?php echo $this->lang->line('st7r1');?></h3>
                <p><?php echo $this->lang->line('st7r2');?></p>
            </div>
        </div>
    </div>
</div>

<script>
    function back_step7(){
    window.location.href = '/index.php/Create_ads/step7';
}

function to_step9(){
    var price = $('#price').val();
    var deposit = $('#deposit').val();

    if(price==''){
        $('#price').focus();
        toastr_call('error','This field is required.');return;
    }else if(deposit==''){
        $('#deposit').focus();
        toastr_call('error','This field is required.');return;
    }

    $.post(
        '/index.php/Create_ads/create_step8',
        {
            deposit:deposit,   
            price:price  
        },
        function(data){
            window.location.href = '/index.php/Create_ads/step9';
        }
    );
}

</script>


