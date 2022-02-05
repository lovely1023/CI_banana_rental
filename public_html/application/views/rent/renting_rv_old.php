

<style>
    .datepicker.dropdown-menu {
            top:60px!important;
        }
        @media only screen and (max-width: 768px){
            .datepicker.dropdown-menu {
                top:100px!important;
            }
        }

        .clickable { cursor: pointer; }
        .datepicker table tr td.disabled, .datepicker table tr td.disabled:hover {
        background: 0;  color: #999; cursor: default; }
        .datepicker-month td .active .day { background-color: blue;color: #fff; }
        span.fc-time {  display: none; }
        span.fc-title { font-size: 15px; padding: 6px 5px; margin: 4px 2px; }
        .ui-datepicker-current-day .ui-state-active { background: #000000; }
        .dp-highlight .ui-state-default {
            background: #484;
            color: #FFF;
    }

</style>

<div style="margin-top:120px;postion:fixed"></div>
<hr>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-8">
            <input type="text"  placeholder="<?php echo $this->lang->line('where');?>" class="form-control " id="id_where">
        </div>
        <div class="col-12 col-md-4">
            
            <div class="date_range">
                <input type="text" placeholder="<?php echo $this->lang->line('start');?>" class="form-control" id="start_date" >
            </div>
            <div class="date_range">
                <input type="text" placeholder="<?php echo $this->lang->line('end');?>" class="form-control" id="end_date" >
            </div>
            
        </div>
    </div>
</div>

<hr>

<div class="container">
    <div class="row">
        <div class="col-12 col-md-3">
            <span style="width:100%;"><b><?php echo $this->lang->line('price');?></b></span>
            <div >
                <p>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                </p>
                <div id="slider-range"></div>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <label for="number_seats"><b><?php echo $this->lang->line('seat');?></b></label>
                    <select name="" class="form-control" id="number_seats">
                        <option value="2">2 or more</option>
                        <option value="3">3 or more</option>
                        <option value="4">4 or more</option>
                        <option value="5">5 or more</option>
                        <option value="6">6 or more</option>
                    </select>
                </div>
                <div class="col-6">
                    <label for="number_berths"><b><?php echo $this->lang->line('berth');?></b> </label>
                    <select name="" class="form-control" id="number_berths">
                        <option value="2">2 or more</option>
                        <option value="3">3 or more</option>
                        <option value="4">4 or more</option>
                        <option value="5">5 or more</option>
                        <option value="6">6 or more</option>
                    </select>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <label ><b><?php echo $this->lang->line('type');?></b></label>
                </div>
                <div class="col-12 ttp">
                    <input type="checkbox" id="id_types_1" value="Low profile">
                    <label for="id_types_1" >
                        <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                            <use xlink:href="#sprites-type1" x="0" y="0">
                                <svg id="sprites-type1" viewBox="0 0 61 50"><path d="M52.368 36.774a5.18 5.18 0 11-10.359 0H17.84a5.18 5.18 0 11-10.358 0h-6.33A1.15 1.15 0 010 35.623v-24.17c0-.636.515-1.151 1.15-1.151h31.076V9.15c0-.636.516-1.151 1.151-1.151h5.755c.636 0 1.151.515 1.151 1.15v1.152h3.405c2.33 0 4.656.192 6.954.575l1.355.226a4.604 4.604 0 013.191 2.173l.633 1.054a1.9 1.9 0 01-1.432 2.867l-1.446.01 7.038 9.133c.613.796.95 1.77.957 2.773l.053 6.5a1.15 1.15 0 01-1.142 1.16h-7.481zm-.128-1.151h7.6l-.053-6.5a3.453 3.453 0 00-.717-2.08l-.484-.628H47.189a1.15 1.15 0 01-1.151-1.15v-8.057c0-.636.515-1.151 1.15-1.151h7.004a.749.749 0 00.642-1.135l-.633-1.054a3.453 3.453 0 00-2.393-1.63l-1.356-.225a41.144 41.144 0 00-6.764-.56H1.151v24.17h6.458a5.181 5.181 0 0110.102 0h11.063V17.208c0-.636.515-1.151 1.15-1.151h6.906c.636 0 1.151.515 1.151 1.15v18.416h4.157a5.181 5.181 0 0110.102 0zM33.377 10.302h5.755V9.15h-5.755v1.15zm18.113 6.906H47.19v8.056h10.51l-6.209-8.056zm-38.83 6.905v-6.905H4.604v6.905h8.056zm1.151 0h8.057v-6.905H13.81v6.905zm-9.207-8.056h17.264c.636 0 1.15.515 1.15 1.15v6.906a1.15 1.15 0 01-1.15 1.151H4.604a1.15 1.15 0 01-1.151-1.15v-6.906c0-.636.515-1.151 1.15-1.151zm25.32 19.566h6.906V17.208h-6.905v18.415zM12.66 40.802a4.028 4.028 0 100-8.057 4.028 4.028 0 000 8.057zm34.529 0a4.028 4.028 0 100-8.057 4.028 4.028 0 000 8.057z"></path></svg>
                            </use>
                        </svg>
                        <span style="margin-top:-10px"><?php echo $this->lang->line('type1');?></span>
                    </label>
                </div>
                <div class="col-12 ttp">
                    <input type="checkbox" id="id_types_2" value="Coachbuilt">
                    <label for="id_types_2" >
                        <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                            <use xlink:href="#sprites-type2" x="0" y="0">
                            <svg id="sprites-type2" viewBox="0 0 60 50"><path d="M51.51 37.434a5.094 5.094 0 01-10.19 0H17.548a5.094 5.094 0 01-10.189 0H1.132A1.132 1.132 0 010 36.302V12.528c0-.625.507-1.132 1.132-1.132H21.51v-1.132c0-.625.507-1.132 1.133-1.132h5.66c.625 0 1.132.507 1.132 1.132v1.132h5.66A16.981 16.981 0 0145.283 8h7.083a7.45 7.45 0 017.068 5.094 3.87 3.87 0 01-3.672 5.095h-3.687l6.923 8.983c.603.782.933 1.74.941 2.727l.052 6.394a1.132 1.132 0 01-1.123 1.14l-.01.001H51.51zm-.127-1.132h7.476l-.052-6.394a3.396 3.396 0 00-.706-2.045l-.476-.618h-11.21a1.132 1.132 0 01-1.132-1.132V18.19c0-.626.507-1.132 1.132-1.132h9.347a2.738 2.738 0 002.598-3.605 6.318 6.318 0 00-5.994-4.32h-7.083a15.85 15.85 0 00-9.51 3.17l-.301.226H1.132v23.774h6.353a5.096 5.096 0 019.936 0H28.3V18.189c0-.626.508-1.132 1.133-1.132h6.792c.626 0 1.132.506 1.132 1.132v18.113h4.089a5.096 5.096 0 019.936 0zM22.642 11.396h5.66v-1.132h-5.66v1.132zm28.004 6.793h-4.23v7.924h10.337l-6.107-7.924zM12.453 24.98V18.19H4.528v6.792h7.925zm1.132 0h7.924V18.19h-7.924v6.792zm-9.057-7.924H21.51c.626 0 1.133.506 1.133 1.132v6.792c0 .625-.507 1.132-1.133 1.132H4.53a1.132 1.132 0 01-1.133-1.132V18.19c0-.626.507-1.132 1.132-1.132zm24.906 1.132v18.113h6.792V18.189h-6.792zM12.453 41.396a3.962 3.962 0 100-7.924 3.962 3.962 0 000 7.924zm33.962 0a3.962 3.962 0 100-7.924 3.962 3.962 0 000 7.924zm0-30v3.396h5.66v-3.396h-5.66zm0-1.132h5.66c.626 0 1.133.507 1.133 1.132v3.396c0 .626-.507 1.133-1.133 1.133h-5.66a1.132 1.132 0 01-1.132-1.133v-3.396c0-.625.507-1.132 1.132-1.132z"></path></svg>
                            </use>
                        </svg>
                        <span style="margin-top:-10px"><?php echo $this->lang->line('type2');?></span>
                    </label>
                </div>
                <div class="col-12 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_3" value="‘A’ class">
                        <label for="id_types_3" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type3" x="0" y="0">
                                <svg id="sprites-type3" viewBox="0 0 60 50"><path d="M51.51 36.302a5.094 5.094 0 01-10.19 0H17.548a5.094 5.094 0 01-10.189 0H1.132A1.132 1.132 0 010 35.17V11.396c0-.625.507-1.132 1.132-1.132H32.83V9.132c0-.625.507-1.132 1.132-1.132h5.66c.626 0 1.133.507 1.133 1.132v1.142a33.09 33.09 0 019.622 1.688 10.377 10.377 0 016.65 6.838l1.752 5.785a27.643 27.643 0 011.184 7.755l.026 2.82a1.132 1.132 0 01-1.132 1.142H51.51zm-.127-1.132h7.474l-.026-2.82a26.511 26.511 0 00-.803-6.237H46.415a1.132 1.132 0 01-1.132-1.132v-7.924c0-.626.507-1.132 1.132-1.132h7.813a9.243 9.243 0 00-4.209-2.889 31.959 31.959 0 00-10.106-1.64H1.133V35.17h6.352a5.096 5.096 0 019.936 0h12.013V17.057c0-.626.507-1.132 1.132-1.132h6.792c.626 0 1.133.506 1.133 1.132V35.17h2.956a5.096 5.096 0 019.936 0zm-17.42-24.906h5.66V9.132h-5.66v1.132zm21.064 6.793h-8.612v7.924h11.3a26.449 26.449 0 00-.02-.068l-1.75-5.785a9.24 9.24 0 00-.918-2.071zm-50.499 0v6.792h5.66v-6.792h-5.66zm0-1.132h5.66c.626 0 1.133.506 1.133 1.132v6.792c0 .625-.507 1.132-1.132 1.132h-5.66a1.132 1.132 0 01-1.133-1.132v-6.792c0-.626.507-1.132 1.132-1.132zm11.321 1.132v6.792h10.189v-6.792H15.849zm0-1.132h10.189c.625 0 1.132.506 1.132 1.132v6.792c0 .625-.507 1.132-1.132 1.132H15.849a1.132 1.132 0 01-1.132-1.132v-6.792c0-.626.507-1.132 1.132-1.132zM30.566 35.17h6.792V17.057h-6.792V35.17zm-18.113 5.094a3.962 3.962 0 100-7.924 3.962 3.962 0 000 7.924zm33.962 0a3.962 3.962 0 100-7.924 3.962 3.962 0 000 7.924z"></path></svg>
                                </use>
                            </svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type3');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_4" value="Converted van">
                        <label for="id_types_4" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type4" x="0" y="0">
                                    <svg id="sprites-type4" viewBox="0 0 60 50"><path d="M38.55 33.27a4.761 4.761 0 019.284 0h9.102l-.05-8.477a3.173 3.173 0 00-1.264-2.516l-14.05-10.581a3.173 3.173 0 00-1.91-.638H4.058v22.211H6.82a4.761 4.761 0 019.283 0h1.705V14.231c0-.584.473-1.058 1.057-1.058h13.75c.585 0 1.058.474 1.058 1.058v19.038h4.878zm-.117 1.057H16.22a4.76 4.76 0 01-9.52 0H4.059A1.058 1.058 0 013 33.27V11.058C3 10.474 3.474 10 4.058 10h35.604a4.23 4.23 0 012.545.851L56.26 21.432a4.23 4.23 0 011.685 3.355l.05 8.476a1.058 1.058 0 01-1.051 1.064h-8.991a4.76 4.76 0 01-9.52 0zm-16.394-17.98v6.345h7.403v-6.346H22.04zm0-1.059h7.403c.585 0 1.058.474 1.058 1.058v6.346c0 .585-.473 1.058-1.058 1.058H22.04a1.058 1.058 0 01-1.058-1.058v-6.346c0-.584.473-1.058 1.058-1.058zM18.865 33.27h13.75V14.231h-13.75v19.038zM49.54 23.75v-2.656l-8.825-6.863h-3.868v9.52H49.54zm0 1.058H36.846a1.058 1.058 0 01-1.057-1.058v-9.52c0-.583.473-1.057 1.057-1.057h3.868c.235 0 .464.078.65.223l8.824 6.863c.258.2.408.509.408.835v2.656c0 .584-.473 1.058-1.057 1.058zM11.462 38.029a3.702 3.702 0 100-7.404 3.702 3.702 0 000 7.404zm31.73 0a3.702 3.702 0 100-7.404 3.702 3.702 0 000 7.404z"></path></svg>
                                </use>
                            </svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type4');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_5" value="Camper">
                        <label for="id_types_5" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type5" x="0" y="0">
                                <svg id="sprites-type5" viewBox="0 0 60 50"><path d="M55.714 33.571v-8.549c0-.137-.002-.273-.006-.41V25H1.071v8.571h6.013a4.823 4.823 0 019.404 0h22.739a4.823 4.823 0 019.404 0h7.083zm.716-11.725c.111-.039.231-.06.356-.06h2.143c.591 0 1.071.48 1.071 1.071v7.5c0 .592-.48 1.072-1.071 1.072h-2.143v2.142c0 .592-.48 1.072-1.072 1.072H48.75a4.821 4.821 0 01-9.643 0h-22.5a4.821 4.821 0 01-9.643 0H1.071C.48 34.643 0 34.163 0 33.57v-22.5C0 10.48.48 10 1.071 10h39.621c4.155 0 8.166 1.525 11.272 4.286a14.365 14.365 0 014.466 7.56zm.356 1.011v7.5h2.143v-7.5h-2.143zm-1.472-1.071H43.93c-.592 0-1.072-.48-1.072-1.072v-6.428c0-.592.48-1.072 1.072-1.072h4.734a15.896 15.896 0 00-7.971-2.143H1.072V23.93h54.597c-.06-.727-.179-1.443-.355-2.143zm-5.038-7.5H43.93v6.428h11.068a13.292 13.292 0 00-3.745-5.627 15.9 15.9 0 00-.976-.801zm-45.99 0v6.428h6.428v-6.428H4.286zm0-1.072h6.428c.592 0 1.072.48 1.072 1.072v6.428c0 .592-.48 1.072-1.072 1.072H4.286c-.592 0-1.072-.48-1.072-1.072v-6.428c0-.592.48-1.072 1.072-1.072zm9.643 1.072v6.428h6.428v-6.428H13.93zm0-1.072h6.428c.592 0 1.072.48 1.072 1.072v6.428c0 .592-.48 1.072-1.072 1.072H13.93c-.592 0-1.072-.48-1.072-1.072v-6.428c0-.592.48-1.072 1.072-1.072zm9.642 1.072v6.428H30v-6.428h-6.429zm0-1.072H30c.592 0 1.071.48 1.071 1.072v6.428c0 .592-.48 1.072-1.071 1.072h-6.429c-.591 0-1.071-.48-1.071-1.072v-6.428c0-.592.48-1.072 1.071-1.072zm9.643 1.072v6.428h6.429v-6.428h-6.429zm0-1.072h6.429c.592 0 1.071.48 1.071 1.072v6.428c0 .592-.48 1.072-1.071 1.072h-6.429c-.591 0-1.071-.48-1.071-1.072v-6.428c0-.592.48-1.072 1.071-1.072zM11.786 38.393a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5zm32.143 0a3.75 3.75 0 100-7.5 3.75 3.75 0 000 7.5z"></path></svg>
                                </use>
                            </svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type5');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_6" value="Caravan">
                        <label for="id_types_6" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type6" x="0" y="0">
                                    <svg id="sprites-type6" viewBox="0 0 60 50"><path d="M9.852 36.097c.545-2.34 2.67-4.085 5.206-4.085 2.543 0 4.67 1.752 5.21 4.1h9.036V17.37a1.18 1.18 0 011.187-1.17h7.123a1.18 1.18 0 011.187 1.17v18.741h2.374c3.934 0 7.123-3.146 7.123-7.028V18.542c0-3.882-3.189-7.028-7.123-7.028H10.31c-3.934 0-7.123 3.146-7.123 7.028v10.541c0 3.73 2.945 6.78 6.665 7.014zm-.136 1.165C5.404 36.962 2 33.415 2 29.083V18.542c0-4.529 3.72-8.2 8.31-8.2v-1.17A1.18 1.18 0 0111.497 8h5.936a1.18 1.18 0 011.187 1.171v1.172h22.555c4.59 0 8.31 3.67 8.31 8.199v10.541c0 2.983-1.614 5.593-4.027 7.028H58v1.171H20.4c0 2.911-2.391 5.271-5.342 5.271-2.95 0-5.342-2.36-5.342-5.27v-.021zm1.781-26.92h5.936v-1.17h-5.936v1.17zm18.994 25.77h7.123V17.37H30.49v18.741zM9.123 17.37v7.028H22.18V17.37H9.123zm0-1.17H22.18a1.18 1.18 0 011.187 1.17v7.028a1.18 1.18 0 01-1.187 1.171H9.123a1.18 1.18 0 01-1.187-1.17V17.37a1.18 1.18 0 011.187-1.17zm5.935 25.182c2.295 0 4.155-1.836 4.155-4.1 0-2.264-1.86-4.1-4.155-4.1-2.294 0-4.155 1.836-4.155 4.1 0 2.264 1.86 4.1 4.155 4.1z"></path></svg>
                                </use>
                            </svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type6');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-12 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_7" value="Other">
                        <label for="id_types_7" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type7" x="0" y="0">
                                    <svg id="sprites-type7" viewBox="0 0 60 50"><path d="M11.6 16.025l.1-.1h.88l1.867-7.435h-1.214l-.1-.1c0-1.32 1.075-2.39 2.4-2.39h13.034c1.325 0 2.4 1.07 2.4 2.39l-.1.1h-1.214l1.867 7.435h.88l.1.1c0 .494-.15.964-.425 1.36h1c1.065 0 2.08.443 2.797 1.22l8.032 8.764h8.227c.561 0 1.017.447 1.02 1.002l.049 8.17a1.014 1.014 0 01-1.014 1.013h-2.202C49.93 40.57 47.434 43 44.364 43c-3.07 0-5.565-2.429-5.62-5.446H25.142C25.087 40.57 22.591 43 19.521 43c-3.07 0-5.565-2.429-5.62-5.446h-2.2c-.564 0-1.02-.451-1.02-1.008v-2.623H8.02c-.564 0-1.021-.45-1.021-1.008v-7.261c0-.557.457-1.008 1.02-1.008h2.66v-6.254c0-.557.457-1.008 1.02-1.008h.325a2.373 2.373 0 01-.425-1.359zm18.924 1.364c.287-.088.537-.265.717-.5H12.86c.177.231.422.406.703.495l16.962.005zM11.8 18.492v17.954h2.192c.486-2.61 2.802-4.538 5.528-4.538 2.727 0 5.043 1.928 5.529 4.538h13.786c.486-2.61 2.802-4.538 5.528-4.538 2.726 0 5.043 1.928 5.528 4.538h2.187l-.047-7.97-8.608-.031-8.38-9.094a2.678 2.678 0 00-1.969-.859H11.801zm-3.68 7.262v7.061h2.56v-7.061H8.12zm5.52-5.446v7.061h6.24v-7.061h-6.24zm-.1-1.108h6.44c.564 0 1.02.45 1.02 1.008v7.261c0 .557-.456 1.008-1.02 1.008h-6.44c-.563 0-1.02-.451-1.02-1.008v-7.261c0-.557.457-1.008 1.02-1.008zm9.3 8.17h6.242v-7.062h-6.241v7.061zm-.1-8.17h6.442c.563 0 1.02.45 1.02 1.008v7.261c0 .557-.457 1.008-1.02 1.008h-6.441c-.563 0-1.02-.451-1.02-1.008v-7.261c0-.557.457-1.008 1.02-1.008zm10.632 1.108h-1.33v7.061h7.73l-6.4-7.061zm6.625 8.169h-8.055c-.563 0-1.02-.451-1.02-1.008v-7.261c0-.557.457-1.008 1.02-1.008h1.43c.29 0 .565.12.758.333l6.625 7.262a1 1 0 01-.076 1.424c-.187.166-.43.258-.682.258zM19.521 41.892c2.486 0 4.501-1.987 4.501-4.438 0-2.451-2.015-4.439-4.5-4.439-2.486 0-4.501 1.988-4.501 4.439 0 2.45 2.015 4.438 4.5 4.438zm24.843 0c2.486 0 4.5-1.987 4.5-4.438 0-2.451-2.014-4.439-4.5-4.439-2.485 0-4.5 1.988-4.5 4.439 0 2.45 2.015 4.438 4.5 4.438zM13.577 15.925h16.946L28.657 8.49H27.9v2.19c0 2.586-2.104 4.682-4.7 4.682h-2.3c-2.596 0-4.7-2.096-4.7-4.681V8.49h-.757l-1.866 7.434zm16.131-8.398a1.434 1.434 0 00-1.141-.564H15.533c-.455 0-.874.214-1.141.564h15.316zm-2.775.963h-9.766v2.19a3.725 3.725 0 003.733 3.718h2.3a3.725 3.725 0 003.733-3.717V8.49z"></path></svg>
                                </use>
                            </svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type7');?></span>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <label for=""><b><?php echo $this->lang->line('dri');?></b></label>
                </div>
                
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="power_steering" class="form-check-input" value="power_steering"><?php echo $this->lang->line('dri1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="cruise_control" class="form-check-input"><?php echo $this->lang->line('dri2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="wheel_drive" class="form-check-input"><?php echo $this->lang->line('dri3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="gps" class="form-check-input"><?php echo $this->lang->line('dri4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="parking_motion" class="form-check-input"><?php echo $this->lang->line('dri5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="rear_camera" class="form-check-input"><?php echo $this->lang->line('dri6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="cabin_heating" class="form-check-input"><?php echo $this->lang->line('dri7');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="ac" class="form-check-input"><?php echo $this->lang->line('dri8');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="central_lock" class="form-check-input"><?php echo $this->lang->line('dri9');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="baby_seat" class="form-check-input"><?php echo $this->lang->line('dri10');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="baby_car_chair" class="form-check-input"><?php echo $this->lang->line('dri11');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="winter_tires" class="form-check-input"><?php echo $this->lang->line('dri12');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="snow_chains" class="form-check-input"><?php echo $this->lang->line('dri13');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="wedge_levelers" class="form-check-input"><?php echo $this->lang->line('dri14');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="safety_kit" class="form-check-input"><?php echo $this->lang->line('dri15');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-12">
                    <label for=""><b>Life on board</b></label>
                </div>
                
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Autoradio" class="form-check-input"><?php echo $this->lang->line('life1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="CD_Player" class="form-check-input"><?php echo $this->lang->line('life2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="MP3" class="form-check-input"><?php echo $this->lang->line('life3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Audio_in" class="form-check-input"><?php echo $this->lang->line('life4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Bluetooth" class="form-check-input"><?php echo $this->lang->line('life5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="TV" class="form-check-input"><?php echo $this->lang->line('life6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="DVD_Player" class="form-check-input"><?php echo $this->lang->line('life7');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Satellite_dish" class="form-check-input"><?php echo $this->lang->line('life8');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Sponge" class="form-check-input"><?php echo $this->lang->line('life9');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="AC_life" class="form-check-input"><?php echo $this->lang->line('life10');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Bed_linen" class="form-check-input"><?php echo $this->lang->line('life11');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Swing_driver" class="form-check-input"><?php echo $this->lang->line('life12');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Swing_passenger" class="form-check-input"><?php echo $this->lang->line('life13');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <label for=""><b>Kitchen comfort</b></label>
                </div>
                
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Sink" class="form-check-input"><?php echo $this->lang->line('kitchen1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Stove" class="form-check-input"><?php echo $this->lang->line('kitchen2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Oven" class="form-check-input"><?php echo $this->lang->line('kitchen3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Fridge" class="form-check-input"><?php echo $this->lang->line('kitchen4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Freezer" class="form-check-input"><?php echo $this->lang->line('kitchen5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Extractor" class="form-check-input"><?php echo $this->lang->line('kitchen6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Pan_kit" class="form-check-input"><?php echo $this->lang->line('kitchen7');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Dishes_kit" class="form-check-input"><?php echo $this->lang->line('kitchen8');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Coffee_machine" class="form-check-input"><?php echo $this->lang->line('kitchen9');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Inside_table" class="form-check-input"><?php echo $this->lang->line('kitchen10');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <label for=""><b>Bathroom comfort</b></label>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Inside_shower" class="form-check-input"><?php echo $this->lang->line('bath1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outside_shower" class="form-check-input"><?php echo $this->lang->line('bath2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Integrated_bathroom" class="form-check-input"><?php echo $this->lang->line('bath3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Portable_toilet" class="form-check-input"><?php echo $this->lang->line('bath4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Sink_bath" class="form-check-input"><?php echo $this->lang->line('bath5');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <label for=""><b>Outside comfort</b></label>
                </div>
                
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Bicycle_carrier" class="form-check-input"><?php echo $this->lang->line('out1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Side_awning" class="form-check-input"><?php echo $this->lang->line('out2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outside_table" class="form-check-input"><?php echo $this->lang->line('out3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Barbecue" class="form-check-input"><?php echo $this->lang->line('out4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Towing_adaptor" class="form-check-input"><?php echo $this->lang->line('out5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outdoor_luggage_compartment" class="form-check-input"><?php echo $this->lang->line('out6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outside_chairs" class="form-check-input"><?php echo $this->lang->line('out7');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12">
                    <label for=""><b>Autonomy comfort</b></label>
                </div>
                
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Solar_panels" class="form-check-input"><?php echo $this->lang->line('auto1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outside_Eletric" class="form-check-input"><?php echo $this->lang->line('auto2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Auxiliary_battery" class="form-check-input"><?php echo $this->lang->line('auto3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-12">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Eletric_generator" class="form-check-input"><?php echo $this->lang->line('auto4');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
        </div>
        <div class="col-12 col-md-9">
            <div id="car_list"></div>
        </div>
    </div>
</div>


<script>
    var min_pr=0,max_pr=250;
    $(function() {
        $( "#slider-range" ).slider({
            range: true,
            min: 0,
            max: 250,
            values: [ 0, 250 ],
            
            slide: function( event, ui ) {
                $( "#amount" ).val( "€ " + ui.values[ 0 ] + " - € " + ui.values[ 1 ] );
                min_pr = $( "#slider-range" ).slider( "values", 0 );
                max_pr = $( "#slider-range" ).slider( "values", 1 );
                search_result();
            }
        });

        $( "#amount" ).val( "€ " + $( "#slider-range" ).slider( "values", 0 ) +
        " - € " + $( "#slider-range" ).slider( "values", 1 ) );
        
    });

    $(document).ready(function(){
        $.post(
            '/index.php/Rent/get_all_vehicle',
            function(data){
                $('#car_list').html(data);
            }
        );
    });
                
    function search_result(){
        var start_date = $('#start_date').val();
        var end_date = $('#end_date').val();

        var id_where = $('#id_where').val();
        var number_seats = $('#number_seats').val();
        var number_berths = $('#number_berths').val();
        if ($('#power_steering').is(":checked")){power_steering=1;}else{power_steering=0;}
        if ($('#cruise_control').is(":checked")){cruise_control=1;}else{cruise_control=0;}
        if ($('#wheel_drive').is(":checked")){wheel_drive=1;}else{wheel_drive=0;}
        if ($('#gps').is(":checked")){gps=1;}else{gps=0;}
        if ($('#parking_motion').is(":checked")){parking_motion=1;}else{parking_motion=0;}
        if ($('#rear_camera').is(":checked")){rear_camera=1;}else{rear_camera=0;}
        if ($('#cabin_heating').is(":checked")){cabin_heating=1;}else{cabin_heating=0;}
        if ($('#ac').is(":checked")){ac=1;}else{ac=0;}
        if ($('#central_lock').is(":checked")){central_lock=1;}else{central_lock=0;}
        if ($('#baby_seat').is(":checked")){baby_seat=1;}else{baby_seat=0;}
        if ($('#baby_car_chair').is(":checked")){baby_car_chair=1;}else{baby_car_chair=0;}
        if ($('#winter_tires').is(":checked")){winter_tires=1;}else{winter_tires=0;}
        if ($('#snow_chains').is(":checked")){snow_chains=1;}else{snow_chains=0;}
        if ($('#wedge_levelers').is(":checked")){wedge_levelers=1;}else{wedge_levelers=0;}
        if ($('#safety_kit').is(":checked")){safety_kit=1;}else{safety_kit=0;}

        if ($('#Autoradio').is(":checked")){Autoradio=1;}else{Autoradio=0;}
        if ($('#CD_Player').is(":checked")){CD_Player=1;}else{CD_Player=0;}
        if ($('#MP3').is(":checked")){MP3=1;}else{MP3=0;}
        if ($('#Audio_in').is(":checked")){Audio_in=1;}else{Audio_in=0;}
        if ($('#Bluetooth').is(":checked")){Bluetooth=1;}else{Bluetooth=0;}
        if ($('#TV').is(":checked")){TV=1;}else{TV=0;}
        if ($('#DVD_Player').is(":checked")){DVD_Player=1;}else{DVD_Player=0;}
        if ($('#Satellite_dish').is(":checked")){Satellite_dish=1;}else{Satellite_dish=0;}
        if ($('#Sponge').is(":checked")){Sponge=1;}else{Sponge=0;}
        if ($('#AC_life').is(":checked")){AC_life=1;}else{AC_life=0;}
        if ($('#Bed_linen').is(":checked")){Bed_linen=1;}else{Bed_linen=0;}
        if ($('#Swing_driver').is(":checked")){Swing_driver=1;}else{Swing_driver=0;}
        if ($('#Swing_passenger').is(":checked")){Swing_passenger=1;}else{Swing_passenger=0;}

        if ($('#Sink').is(":checked")){Sink=1;}else{Sink=0;}
        if ($('#Stove').is(":checked")){Stove=1;}else{Stove=0;}
        if ($('#Oven').is(":checked")){Oven=1;}else{Oven=0;}
        if ($('#Fridge').is(":checked")){Fridge=1;}else{Fridge=0;}
        if ($('#Freezer').is(":checked")){Freezer=1;}else{Freezer=0;}
        if ($('#Extractor').is(":checked")){Extractor=1;}else{Extractor=0;}
        if ($('#Pan_kit').is(":checked")){Pan_kit=1;}else{Pan_kit=0;}
        if ($('#Dishes_kit').is(":checked")){Dishes_kit=1;}else{Dishes_kit=0;}
        if ($('#Coffee_machine').is(":checked")){Coffee_machine=1;}else{Coffee_machine=0;}
        if ($('#Inside_table').is(":checked")){Inside_table=1;}else{Inside_table=0;}

        if ($('#Inside_shower').is(":checked")){Inside_shower=1;}else{Inside_shower=0;}
        if ($('#Outside_shower').is(":checked")){Outside_shower=1;}else{Outside_shower=0;}
        if ($('#Integrated_bathroom').is(":checked")){Integrated_bathroom=1;}else{Integrated_bathroom=0;}
        if ($('#Portable_toilet').is(":checked")){Portable_toilet=1;}else{Portable_toilet=0;}
        if ($('#Sink_bath').is(":checked")){Sink_bath=1;}else{Sink_bath=0;}

        if ($('#Bicycle_carrier').is(":checked")){Bicycle_carrier=1;}else{Bicycle_carrier=0;}
        if ($('#Side_awning').is(":checked")){Side_awning=1;}else{Side_awning=0;}
        if ($('#Outside_table').is(":checked")){Outside_table=1;}else{Outside_table=0;}
        if ($('#Barbecue').is(":checked")){Barbecue=1;}else{Barbecue=0;}
        if ($('#Towing_adaptor').is(":checked")){Towing_adaptor=1;}else{Towing_adaptor=0;}
        if ($('#Outdoor_luggage_compartment').is(":checked")){Outdoor_luggage_compartment=1;}else{Outdoor_luggage_compartment=0;}
        if ($('#Outside_chairs').is(":checked")){Outside_chairs=1;}else{Outside_chairs=0;}

        if ($('#Solar_panels').is(":checked")){Solar_panels=1;}else{Solar_panels=0;}
        if ($('#Outside_Eletric').is(":checked")){Outside_Eletric=1;}else{Outside_Eletric=0;}
        if ($('#Auxiliary_battery').is(":checked")){Auxiliary_battery=1;}else{Auxiliary_battery=0;}
        if ($('#Eletric_generator').is(":checked")){Eletric_generator=1;}else{Eletric_generator=0;}

        if ($('#id_types_1').is(":checked")){id_types_1=$('#id_types_1').val();}else{id_types_1=0;}
        if ($('#id_types_2').is(":checked")){id_types_2=$('#id_types_2').val();}else{id_types_2=0;}
        if ($('#id_types_3').is(":checked")){id_types_3=$('#id_types_3').val();}else{id_types_3=0;}
        if ($('#id_types_4').is(":checked")){id_types_4=$('#id_types_4').val();}else{id_types_4=0;}
        if ($('#id_types_5').is(":checked")){id_types_5=$('#id_types_5').val();}else{id_types_5=0;}
        if ($('#id_types_6').is(":checked")){id_types_6=$('#id_types_6').val();}else{id_types_6=0;}
        if ($('#id_types_7').is(":checked")){id_types_7=$('#id_types_7').val();}else{id_types_7=0;}

       
        $.post(
            '/index.php/Rent/find_result',
            {
                id_where:id_where,
                min_pr:min_pr,
                max_pr:max_pr,
                seats:number_seats,
                berth:number_berths,
                power_steering:power_steering,
                cruise_control:cruise_control,
                wheel_drive:wheel_drive,
                gps:gps,
                parking_motion:parking_motion,
                rear_camera:rear_camera,
                cabin_heating:cabin_heating,
                ac:ac,
                central_lock:central_lock,
                baby_seat:baby_seat,
                baby_car_chair:baby_car_chair,
                winter_tires:winter_tires,
                snow_chains:snow_chains,
                wedge_levelers:wedge_levelers,
                safety_kit:safety_kit,
                Autoradio:Autoradio,
                CD_Player:CD_Player,
                MP3:MP3,
                Audio_in:Audio_in,
                Bluetooth:Bluetooth,
                TV:TV,
                DVD_Player:DVD_Player,
                Satellite_dish:Satellite_dish,
                Sponge:Sponge,
                AC_life:AC_life,
                Bed_linen:Bed_linen,
                Swing_driver:Swing_driver,
                Swing_passenger:Swing_passenger,
                Sink:Sink,
                Stove:Stove,
                Oven:Oven,
                Fridge:Fridge,
                Freezer:Freezer,
                Extractor:Extractor,
                Pan_kit:Pan_kit,
                Dishes_kit:Dishes_kit,
                Coffee_machine:Coffee_machine,
                Inside_table:Inside_table,
                Inside_shower:Inside_shower,
                Outside_shower:Outside_shower,
                Integrated_bathroom:Integrated_bathroom,
                Portable_toilet:Portable_toilet,
                Sink_bath:Sink_bath,
                Bicycle_carrier:Bicycle_carrier,
                Side_awning:Side_awning,
                Outside_table:Outside_table,
                Barbecue:Barbecue,
                Towing_adaptor:Towing_adaptor,
                Outdoor_luggage_compartment:Outdoor_luggage_compartment,
                Outside_chairs:Outside_chairs,
                Solar_panels:Solar_panels,
                Outside_Eletric:Outside_Eletric,
                Auxiliary_battery:Auxiliary_battery,
                Eletric_generator:Eletric_generator,
                id_types_1:id_types_1,
                id_types_2:id_types_2,
                id_types_3:id_types_3,
                id_types_4:id_types_4,
                id_types_5:id_types_5,
                id_types_6:id_types_6,
                id_types_7:id_types_7,
                start_date:start_date,
                end_date:end_date
            },
            function(data){
                $('#car_list').html(data);
            }
        );
    }

    var nowTemp = new Date();
    var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
    
   
    
    var checkin = $('#start_date').datepicker({

        beforeShowDay: function(date) {
            
            return date.valueOf() >= now.valueOf();
        
        },
        autoclose: true,
        minDate: nowTemp,
        todayHighlight : true,
        format : 'yyyy-mm-dd',
        <?php if($this->session->userdata('language')!='en'){ ?>
        language:'pt'
        <?php } ?>

    }).on('changeDate', function(ev) {
        if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

            var newDate = new Date(ev.date);
            newDate.setDate(newDate.getDate() + 1);
            checkout.datepicker("update", newDate);
        }
        $('#end_date')[0].focus();
    });

    var checkout = $('#end_date').datepicker({
        beforeShowDay: function(date) {
            if (!checkin.datepicker("getDate").valueOf()) {
                return date.valueOf() >= new Date().valueOf();
            } else {
                return date.valueOf() > checkin.datepicker("getDate").valueOf();
            }
        },
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
            search_result();
        }
        
    });
    

    $("#id_where").on('keyup',function(){search_result();});
        $('#number_seats').change(function(){search_result();});
        $('#number_berths').change(function(){search_result();});
        
        $('#power_steering').change(function(){search_result();});
        $('#cruise_control').change(function(){search_result();});
        $('#wheel_drive').change(function(){search_result();});
        $('#gps').change(function(){search_result();});
        $('#parking_motion').change(function(){search_result();});
        $('#rear_camera').change(function(){search_result();});
        $('#cabin_heating').change(function(){search_result();});
        $('#ac').change(function(){search_result();});
        $('#central_lock').change(function(){search_result();});
        $('#baby_seat').change(function(){search_result();});
        $('#baby_car_chair').change(function(){search_result();});
        $('#winter_tires').change(function(){search_result();});
        $('#snow_chains').change(function(){search_result();});
        $('#wedge_levelers').change(function(){search_result();});
        $('#safety_kit').change(function(){search_result();});

        $('#Autoradio').change(function(){search_result();});
        $('#CD_Player').change(function(){search_result();});
        $('#MP3').change(function(){search_result();});
        $('#Audio_in').change(function(){search_result();});
        $('#Bluetooth').change(function(){search_result();});
        $('#TV').change(function(){search_result();});
        $('#DVD_Player').change(function(){search_result();});
        $('#Satellite_dish').change(function(){search_result();});
        $('#Sponge').change(function(){search_result();});
        $('#AC_life').change(function(){search_result();});
        $('#Bed_linen').change(function(){search_result();});
        $('#Swing_driver').change(function(){search_result();});
        $('#Swing_passenger').change(function(){search_result();});

        $('#Sink').change(function(){search_result();});
        $('#Stove').change(function(){search_result();});
        $('#Oven').change(function(){search_result();});
        $('#Fridge').change(function(){search_result();});
        $('#Freezer').change(function(){search_result();});
        $('#Extractor').change(function(){search_result();});
        $('#Pan_kit').change(function(){search_result();});
        $('#Dishes_kit').change(function(){search_result();});
        $('#Coffee_machine').change(function(){search_result();});
        $('#Inside_table').change(function(){search_result();});

        $('#Inside_shower').change(function(){search_result();});
        $('#Outside_shower').change(function(){search_result();});
        $('#Integrated_bathroom').change(function(){search_result();});
        $('#Portable_toilet').change(function(){search_result();});
        $('#Sink_bath').change(function(){search_result();});

        $('#Bicycle_carrier').change(function(){search_result();});
        $('#Side_awning').change(function(){search_result();});
        $('#Outside_table').change(function(){search_result();});
        $('#Barbecue').change(function(){search_result();});
        $('#Towing_adaptor').change(function(){search_result();});
        $('#Outdoor_luggage_compartment').change(function(){search_result();});
        $('#Outside_chairs').change(function(){search_result();});

        $('#Solar_panels').change(function(){search_result();});
        $('#Outside_Eletric').change(function(){search_result();});
        $('#Auxiliary_battery').change(function(){search_result();});
        $('#Eletric_generator').change(function(){search_result();});

        $('#id_types_1').change(function(){search_result();});
        $('#id_types_2').change(function(){search_result();});
        $('#id_types_3').change(function(){search_result();});
        $('#id_types_4').change(function(){search_result();});
        $('#id_types_5').change(function(){search_result();});
        $('#id_types_6').change(function(){search_result();});
    $('#id_types_7').change(function(){search_result();});    
    



</script>

