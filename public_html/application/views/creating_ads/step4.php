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
                
                <!-- here -->
                 <div class="fullwidth col-xs-2"> 
                      <div class="container">
                        <!-- <h3>Vertical layout</h3>                                     -->
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

                          <li class="progress-step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">5</h4>
                            </div>
                          </li>
                          <li class="progress-step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">6</h4>
                            </div>
                          </li>
                          <li class="progress-step">
                            <div class="progress-marker"></div>
                            <div class="progress-text">
                              <h4 class="progress-title">7</h4>
                            </div>
                          </li>
                          <li class="progress-step">
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
                <div class="col-xs-10"  style="padding-left: 30px">
                    <div class="container">
                        <div >
                            <h3><?php echo $this->lang->line('st4t1');?></h3>
                            <p><?php echo $this->lang->line('st4t1');?></p>
                        </div>
                         <div class="row" style="margin-top:30px;margin-bottom:30px;">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12"   id="berth_tb">
                                        
                                    </div>
                                </div>
                            </div>
                        </div>

                         <span><b><?php echo $this->lang->line('sfbet');?></b></span>
                        <div class="row">
                            <div class="container">
                                <hr>
                                <div class="row">
                                    <div class="col-xs-12 col-md-4">
                                        <label for="type_berth"><?php echo $this->lang->line('tpberth');?></label>
                                        <select name="type_berth" class="form-control slt" id="type_berth" style="height:50px;">
                                            <option value="Select"><?php echo $this->lang->line('select');?></option>
                                            <option value="Central bed"><?php echo $this->lang->line('bertp1');?></option>
                                            <option value="Transversal bed"><?php echo $this->lang->line('bertp2');?></option>
                                            <option value="Leaning bed"><?php echo $this->lang->line('bertp3');?></option>
                                            <option value="Build in/off bed"><?php echo $this->lang->line('bertp4');?></option>
                                            <option value="Twin bed"><?php echo $this->lang->line('bertp5');?></option>
                                            <option value="Capuccino bed"><?php echo $this->lang->line('bertp6');?></option>
                                            <option value="Bench bed"><?php echo $this->lang->line('bertp7');?></option>
                                            <option value="Lift celling bed"><?php echo $this->lang->line('bertp8');?></option>
                                            <option value="Bunk bed"><?php echo $this->lang->line('bertp9');?></option>
                                            <option value="Swing bed"><?php echo $this->lang->line('bertp10');?></option>
                                        </select>
                                    </div>
                                    
                                    <div class="col-xs-12 col-md-4">
                                        <label for="width_berth"><?php echo $this->lang->line('wdth');?> *</label>
                                        <div class="input-group">
                                            <input type="number" id="width_berth" name="width_berth" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                            <span class="input-group-addon">cm</span>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-md-4">
                                        <label for="length_berth"><?php echo $this->lang->line('lgth');?> *</label>
                                        <div class="input-group">
                                            <input type="number" id="length_berth" name="length_berth" required="" max="20.0" min="0.0" step=".1" class="form-control">
                                            <span class="input-group-addon">cm</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <br><br>
                        <button class="btn btn-info" onclick="add_berth()"><?php echo $this->lang->line('adbeth');?></button>
                        <div style="text-align:center">
                            <hr><button class="btn btn-info btn-lg" onclick="back_step3()"><?php echo $this->lang->line('back');?></button>
                            <button class="btn btn-primary btn-lg" onclick="to_step5()"><?php echo $this->lang->line('next');?></button><hr>
                        </div>
                    </div>
                </div>

            </div>

           
            
        </div>
        <div class="col-lg-3 rdiv">
            <div class="aside_advice aside_advicefirst">
                <h3><?php echo $this->lang->line('st3r1');?></h3>
  
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_0" x="0" y="0"><svg id="sprites-sleeping_0"><path d="M1 26v1a3 3 0 003 3h48.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H4a3 3 0 00-3 3v1h21a1 1 0 011 1v16a1 1 0 01-1 1H1zm51.691 5H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31zM1 16.5h7V25h14V9H1v7.5zm0 1V25h6v-7.5H1zM8 9v16h3V9H8zM7 8h5v18H7V8z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd1');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_1" x="0" y="0"><svg id="sprites-sleeping_1"><path d="M17 13v14h35.866l7.923-2.16A3 3 0 0063 21.944V6.055a3 3 0 00-2.21-2.894L52.865 1H17v12zm-1 0H1v11a3 3 0 003 3h12V13zM1 8h7V1H4a3 3 0 00-3 3v4zm8 0h7V1H9v7zM4 0h49l8.052 2.196A4 4 0 0164 6.056v15.889a4 4 0 01-2.948 3.859L53 28H4a4 4 0 01-4-4V4a4 4 0 014-4zM1 9v3h15V9H1z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd2');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_2" x="0" y="0"><svg id="sprites-sleeping_2"><path d="M52.691 31H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31zM1 16h15.893a4 4 0 012.057.57l7.111 4.264a4 4 0 011.943 3.433L28.001 30h24.865l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H4a3 3 0 00-3 3v9zm0 8v3a3 3 0 003 3h4v-6H1zm8-7v13h3V17H9zm4 13h14l.004-5.733a3 3 0 00-1.457-2.575l-7.112-4.265A3 3 0 0016.893 17H13v13zM1 17v6h7v-6H1z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd3');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_3" x="0" y="0"><svg id="sprites-sleeping_3"><path d="M52.691 31H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31zM21 4H4a3 3 0 00-3 3v20a3 3 0 003 3h48.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H44v12a1 1 0 01-1 1h-3.25v.336h-1.5V17h-11.5v.72h-1.5V17H22a1 1 0 01-1-1V4zm8 0h-1v.5h-1V4h-5v12h7V4zm2 0h-1v12h3V4h-1v.5h-1V4zm3 0v12h9V4h-3.419c.084.18.14.381.163.638l.006.692-1.5.012-.001-.62a.244.244 0 00-.032-.096L39.297 4H39v.5h-2V4h-1v.5h-1V4h-1zm4.25 2.336h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm-.006 3.834l1.463.33a1.752 1.752 0 01-1.188 1.285l-.445-1.432a.252.252 0 00.17-.183zm-1.052.194v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5h-1v-1.5h1zm-2 0v1.5H27c-.498 0-.964-.21-1.293-.571l1.108-1.011a.247.247 0 00.185.082h.192zm-.442-2.644h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-.97-.052l1.5.044v.978z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd4');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_4" x="0" y="0"><svg id="sprites-sleeping_4"><path d="M52 4v3.438l.403-.146.343.942-.091.03-.655.239V12h3.246a1.41 1.41 0 00.04-.224l1.054.034a2.232 2.232 0 01-.014.19H59V4h-7zm-1.805 8H51V8.866l-.552.202-.342-.94.765-.279.129.354V4h-7v8h5.56l.56-.204.075.204zM43 4H4a3 3 0 00-3 3v20a3 3 0 003 3h39V4zm9 9h-8v3h15v-3h-4.19l.389.692a2.27 2.27 0 01-.315.146l-.55.2-.342-.94.27-.098H52zm-8 4v13h15V17H44zm16-5v18a3 3 0 003-3V7a3 3 0 00-3-3v8zm-7.309 19H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691l-.638-1.276a.5.5 0 01.894-.448L53.81 3H60a4 4 0 014 4v20a4 4 0 01-4 4h-6.191l-.862 1.724a.5.5 0 01-.894-.448L52.69 31zM49.682 9.346l-.191.07-.133-.366-1.149.418.136.373.94-.342.073.202-.366.133-.418-1.149.766-.278.342.94zm3.685-1.148l.117-1.054c.377.042.737.179 1.047.397l-.615.872a1.417 1.417 0 00-.549-.215zm.979.664l.929-.426c.023.052.045.104.066.16l.24.659-.94.342-.178-.49a1.417 1.417 0 00-.117-.245zm.573 1.5l.94-.342.279.766-.94.342-.279-.766zm-1.693 3.015l.342.94-.765.278-.342-.94.765-.278zm-1.531.557l.342.94-.766.279-.418-1.149.063-.022-.238-.655-.94.342.279.766.94-.342.035.097.703-.256zm-1.853-2.904l-.94.342-.279-.765.94-.342.279.765zm-.16 13.596l-.342.94-.766-.28.418-1.148.366.133-.074.202-.94-.342-.135.373 1.149.418.133-.366.191.07zm.766.279l.765.278-.342.94-.765-.279.342-.94zm1.531.557l.676.246.09.03-.342.942-.766-.278.342-.94zm1.388.312c.197-.032.384-.106.549-.215l.615.872c-.31.218-.67.355-1.047.397l-.117-1.054zm.979-.664c.046-.076.085-.158.117-.245l.178-.49.94.342-.24.659c-.021.056-.043.109-.066.16l-.93-.426zm.573-1.5l.28-.766.939.342-.279.766-.94-.342zm.367-1.414a1.415 1.415 0 00-.18-.562l.92-.546c.193.325.302.695.314 1.075l-1.054.033zm-.593-1.016c-.099-.07-.209-.127-.328-.17l-.373-.136.342-.94.55.2c.113.043.216.09.315.146l-.506.9zm-1.467-.585l-.765-.279.342-.94.765.28-.342.94zm-1.531-.557l-.703-.256-.036.097-.94-.342-.278.766.94.342.238-.654-.063-.023.418-1.149.766.279-.342.94zm-1.296 1.372l-.279.766-.94-.342.28-.766.939.342zm-.557 1.532l-.279.765-.94-.342.279-.765.94.342z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd5');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_5" x="0" y="0"><svg id="sprites-sleeping_5"><path d="M52.866 30l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H4a3 3 0 00-3 3v20a3 3 0 003 3h48.866zM4 3h49l8.052 2.196A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859L53 31H4a4 4 0 01-4-4V7a4 4 0 014-4zM1 13h24a1 1 0 001-1V4H4a3 3 0 00-3 3v6zM4 3h23v9a2 2 0 01-2 2H0V7a4 4 0 014-4zM1 21v6a3 3 0 003 3h22v-8a1 1 0 00-1-1H1zm3 10a4 4 0 01-4-4v-7h25a2 2 0 012 2v9H4zM9 4v9h2V4H9zM8 3h4v11H8V3zm1 18v9h2v-9H9zm-1-1h4v11H8V20zM53.947 3.276a.5.5 0 01-.894.448l-1-2a.5.5 0 01.894-.448l1 2zm-1.894 29l1-2a.5.5 0 01.894.448l-1 2a.5.5 0 01-.894-.448z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd6');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_6" x="0" y="0"><svg id="sprites-sleeping_6"><g fill="#2E2E2E" fill-rule="nonzero"><path d="M22 10.5h6V4h-5a1 1 0 00-1 1v5.5zm0 1V16a1 1 0 001 1h5v-5.5h-6zm-1 0V5c0-.364.097-.706.268-1H4a3 3 0 00-3 3v20a3 3 0 003 3h48.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4h-9.134c.17.294.268.636.268 1v11a2 2 0 01-2 2H23a2 2 0 01-2-2v-4.5zm8-1V17h3V4h-3v6.5zM33 4v1.322h1v.815h-1v.815h1v.815h-1v.815h1v.696h-.066V10.5h.814v-1H34v-.104h-1v1.715h1.222v.389h.204v-1h-.815v1.222H34v-.214h-1v.814h1v.815h-1v.815h1v.815h-1V17h.934v-.722H34v-.696h-1v.814h1v.104h.748v.5h.815v-.5h.815v.5h.815v-.5h.397c.127 0 .25-.017.367-.048l.09.548H42a1 1 0 001-1V5a1 1 0 00-1-1h-2.83c.164.133.309.288.43.462l-.876.61a1.417 1.417 0 00-.442-.39L38.619 4h-.934v.503a1.431 1.431 0 00-.095-.003h-.72V4h-.814v.5h-.815V4h-.815v.5h-.204v-.389H33v.397h1v.214h-.389V4H33zm19.691-1l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859L53 31H4a4 4 0 01-4-4V7a4 4 0 014-4h48.691zm-17.45 8.5v-1h.815v1h-.815zm1.63 0v-1h.814v1.003a1.431 1.431 0 00-.095-.003h-.72zm1.41.181l.47-.95c.34.168.632.42.849.731l-.876.61a1.417 1.417 0 00-.442-.39zm.693.96l1.019-.083c.004.056.007.113.007.173v.7h-1v-.52c0-.093-.009-.183-.026-.27zM39 14.245h1v.815h-1v-.815zm-.139 1.454l.979.392c-.141.352-.37.663-.663.903l-.677-.828c.151-.128.275-.287.361-.467zm.113-10.06l1.019-.082c.004.056.007.113.007.173v.7h-1v-.52c0-.093-.009-.183-.026-.27zM39 7.246h1v.815h-1v-.815zM38.861 8.7l.979.392c-.141.352-.37.663-.663.903l-.677-.828c.151-.128.275-.287.361-.467zm-.904.752l.167 1.018a2.27 2.27 0 01-.346.03h-.585v-1h.397c.127 0 .25-.017.367-.048zm-1.58.048v1h-.814v-1h.815z"></path><path d="M52.053 32.276a.5.5 0 00.894.448l1-2a.5.5 0 00-.894-.448l-1 2z"></path></g></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd7');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_7" x="0" y="0"><svg id="sprites-sleeping_7"><path d="M20 17.478V24a1 1 0 001 1h5v-7.498l-6-.024zm0-1l6 .024V8h-5a1 1 0 00-1 1v7.478zm-1 .996h-.026l.004-1H19V9a2 2 0 012-2h19a2 2 0 012 2v15a2 2 0 01-2 2H21a2 2 0 01-2-2v-6.526zM30 25h10a1 1 0 001-1V9a1 1 0 00-1-1H30v17zm15.885 6a1.85 1.85 0 01-.725.242 2.145 2.145 0 01-.263.005l-.017-.001.015-.246h-1.002l-.011.183-.998-.062.007-.121H41.89l-.003.06-.95-.06H4a4 4 0 01-4-4V7a4 4 0 014-4h37.84l-.003-.056.998-.062.008.118h1.002l-.012-.18.998-.063.016.243h7.844l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31h-6.806zm.78-27c.028.091.05.187.067.29.014.142.018.193.018.253v.433h-1.5v-.433a.311.311 0 00-.062-.193l.468-.35h-.747l.016.255-.998.062-.02-.317h-1.002l.024.379-.999.062L41.903 4h-1.002l.031.503-.998.062L39.9 4h-1.002l.04.627-.999.063-.043-.69h-1.002l.047.752-.998.062-.05-.814h-1.003l.055.876-.998.062L33.888 4h-1.002l.062 1-.998.063L31.884 4h-1.002l.07 1.125-.998.062L29.88 4h-1.002l.078 1.249-.998.062L27.876 4h-1.002l.085 1.373-.998.062L25.872 4H4a3 3 0 00-3 3v20a3 3 0 003 3h20.919l.093-1.495.998.063L25.92 30h1.002l.086-1.37.998.062L27.924 30h1.002l.078-1.246.998.062L29.928 30h1.002l.07-1.122.998.063L31.932 30h1.002l.062-.997.998.062-.058.935h1.002l.054-.873.998.062-.05.811h1.002l.046-.749.999.062-.043.687h1.002l.039-.624.998.062-.035.562h1.002l.03-.5.999.062-.027.438h1.001l.024-.376.998.062-.02.314h1.002l.016-.251h.017.039a.25.25 0 00.184-.139l.736.39h6.917l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4h-6.2zm-32.68 2.181l-.094-1.497.998-.062.094 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.063.093 1.498-.998.062zm1.996-.125l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497L24.87 4l.093 1.497-.998.062zm21.285.416h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm-21.236.467l-.094 1.497-.998-.062.094-1.497.998.062zm-1.997-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.498.998.063zm-1.996-.125l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.049-.003a1.741 1.741 0 01-1.408-.895l1.308-.735c.045.08.117.128.194.133l.048.003zm-.283-.846h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-.502c0-.288.067-.57.194-.822l1.34.674a.328.328 0 00-.034.148v.502zM27 8v17h2V8h-2z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd8');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_8" x="0" y="0"><svg id="sprites-sleeping_8"><g fill="#2E2E2E" fill-rule="nonzero"><path d="M12 15v15h40.866l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4H12v11zm-1 0H1v12a3 3 0 003 3h7V15zm0-4V4H4a3 3 0 00-3 3v4h10zM4 3h49l8.052 2.196A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859L53 31H4a4 4 0 01-4-4V7a4 4 0 014-4zm-3 9v2h10v-2H1z"></path><path d="M53.947 3.276a.5.5 0 01-.894.448l-1-2a.5.5 0 01.894-.448l1 2zM52.053 32.276a.5.5 0 00.894.448l1-2a.5.5 0 00-.894-.448l-1 2z"></path></g></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd9');?></span>
                </div>
                
                <div class="sleeping_info">
                    <svg class="img-responsive" viewBox="0 0 72 35">
                    <use xlink:href="#sprites-sleeping_9" x="0" y="0"><svg id="sprites-sleeping_9"><path d="M20 17.478V24a1 1 0 001 1h5v-7.498l-6-.024zm0-1l6 .024V8h-5a1 1 0 00-1 1v7.478zm-1 .996h-.026l.004-1H19V9a2 2 0 012-2h19a2 2 0 012 2v15a2 2 0 01-2 2H21a2 2 0 01-2-2v-6.526zM30 25h10a1 1 0 001-1V9a1 1 0 00-1-1H30v17zm15.885 6a1.85 1.85 0 01-.725.242 2.145 2.145 0 01-.263.005l-.017-.001.015-.246h-1.002l-.011.183-.998-.062.007-.121H41.89l-.003.06-.95-.06H4a4 4 0 01-4-4V7a4 4 0 014-4h37.84l-.003-.056.998-.062.008.118h1.002l-.012-.18.998-.063.016.243h7.844l-.638-1.276a.5.5 0 01.894-.448l.99 1.98 7.115 1.94A4 4 0 0164 9.056v15.889a4 4 0 01-2.948 3.859l-7.115 1.94-.99 1.98a.5.5 0 01-.894-.448L52.69 31h-6.806zm.78-27c.028.091.05.187.067.29.014.142.018.193.018.253v.433h-1.5v-.433a.311.311 0 00-.062-.193l.468-.35h-.747l.016.255-.998.062-.02-.317h-1.002l.024.379-.999.062L41.903 4h-1.002l.031.503-.998.062L39.9 4h-1.002l.04.627-.999.063-.043-.69h-1.002l.047.752-.998.062-.05-.814h-1.003l.055.876-.998.062L33.888 4h-1.002l.062 1-.998.063L31.884 4h-1.002l.07 1.125-.998.062L29.88 4h-1.002l.078 1.249-.998.062L27.876 4h-1.002l.085 1.373-.998.062L25.872 4H4a3 3 0 00-3 3v20a3 3 0 003 3h20.919l.093-1.495.998.063L25.92 30h1.002l.086-1.37.998.062L27.924 30h1.002l.078-1.246.998.062L29.928 30h1.002l.07-1.122.998.063L31.932 30h1.002l.062-.997.998.062-.058.935h1.002l.054-.873.998.062-.05.811h1.002l.046-.749.999.062-.043.687h1.002l.039-.624.998.062-.035.562h1.002l.03-.5.999.062-.027.438h1.001l.024-.376.998.062-.02.314h1.002l.016-.251h.017.039a.25.25 0 00.184-.139l.736.39h6.917l7.923-2.16A3 3 0 0063 24.944V9.055a3 3 0 00-2.21-2.894L52.865 4h-6.2zm-32.68 2.181l-.094-1.497.998-.062.094 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.063.093 1.498-.998.062zm1.996-.125l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497.998-.062.093 1.497-.998.062zm1.996-.124l-.093-1.497L24.87 4l.093 1.497-.998.062zm21.285.416h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm0 2h1.5v1h-1.5v-1zm-21.236.467l-.094 1.497-.998-.062.094-1.497.998.062zm-1.997-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.498.998.063zm-1.996-.125l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.998-.062.093-1.497.998.062zm-1.996-.124l-.093 1.497-.049-.003a1.741 1.741 0 01-1.408-.895l1.308-.735c.045.08.117.128.194.133l.048.003zm-.283-.846h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-1h1.5v1zm0-2h-1.5v-.502c0-.288.067-.57.194-.822l1.34.674a.328.328 0 00-.034.148v.502zM27 8v17h2V8h-2z" fill="#2E2E2E" fill-rule="nonzero"></path></svg></use>
                    </svg>
                    <span><?php echo $this->lang->line('bd10');?></span>
                </div>
            
            </div>
        </div>
    </div>
</div>
<script>
    var nodata,clk=1;
$(document).ready(function(){
    $.post(
        '/index.php/Create_ads/read_step4',
        function(data){
            if(data==''){
                nodata = true;
                $('#berth_tb').css('display','none');
            }else{
                $('#berth_tb').html(data);
            }
        }
    ); 
});


function add_berth(){
    if(clk==1){
        clk=2;
        var type_berth = $('#type_berth').val();
        var width_berth = $('#width_berth').val();
        var length_berth = $('#length_berth').val();
        if(type_berth=='Select'){
            $('#type_berth').focus();
            toastr_call('info',"<?php echo $this->lang->line('btype');?>");
            return;
        }else if(width_berth==''){
            $('#width_berth').focus();
            toastr_call('info',"<?php echo $this->lang->line('bwidth');?>");return;
        }else if(length_berth==''){
            $('#length_berth').focus();
            toastr_call('info',"<?php echo $this->lang->line('blength');?>");return;
        }
        $.post(
            '/index.php/Create_ads/create_step4',
            {
                type_berth:type_berth,
                width_berth:width_berth,
                length_berth:length_berth
            },
            function(data){
                location.reload('/');
            }
        );
    }else{
        return;
    }
    
}

function del_berth(e){
    var del_tr = $(e).parent().parent();
    var del_id = $(del_tr).attr('id');
    $.post(
        '/index.php/Create_ads/del_berth',
        {
            del_id:del_id
        },
        function(data){
            $(del_tr).remove();
            location.reload();
        }
    );
}


function to_step5(){
    
    if(nodata){
        toastr_call('error','<?php echo $this->lang->line("btype");?>');
    }else{
        $.post(
            '/index.php/Create_ads/update_step',
            {
                step:4
            },
            function(data){
                window.location.href = '/index.php/Create_ads/step5/';
            }
        );
    }
}

function back_step3(){
    window.location.href = '/index.php/Create_ads/step3/';
}
</script>


