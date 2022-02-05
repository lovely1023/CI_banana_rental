

<style>
    .datepicker.dropdown-menu {
            /*top:60px!important;*/
            top:220px!important;
        }
        @media only screen and (max-width: 768px){
            .datepicker.dropdown-menu {
                /*top:100px!important;*/
                top:220px!important;
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
    <div class="row col-12">
        <div class=" col-xs-12 col-md-6">
            <!-- <div class="col-12 col-md-8"> -->
            <div class="col-12 col-md-12">
                <input type="text"  placeholder="<?php echo $this->lang->line('where');?>" class="form-control " id="id_where">
            </div>
             <hr>
            <div class="col-12">
             <span style="width:100%;"><b><?php echo $this->lang->line('price');?></b></span>
                <div >
                    <p>
                        <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                    </p>
                    <div id="slider-range"></div>
                </div>
                <!-- <hr> -->
            </div>
             <hr>
            <!-- <div class="col-12 col-md-4"> -->
            <div class="row col-12 col-md-12">                
                <div class="date_range">
                    <input type="text" placeholder="<?php echo $this->lang->line('start');?>" class="form-control" id="start_date" >
                </div>
                <div class="date_range">
                    <input type="text" placeholder="<?php echo $this->lang->line('end');?>" class="form-control" id="end_date" >
                </div>                
            </div>
             <hr>
             <div class="row col-12 col-md-12">
                <div class="col-xs-12 col-md-6">
                    <label for="number_seats"><b><?php echo $this->lang->line('seat');?></b></label>
                    <!-- <b class="col-4"><?php echo $this->lang->line('seat');?></b> -->
                    <select name="" class="form-control" id="number_seats">
                        <option value="2">2 or more</option>
                        <option value="3">3 or more</option>
                        <option value="4">4 or more</option>
                        <option value="5">5 or more</option>
                        <option value="6">6 or more</option>
                    </select>
                </div>


                <div class="col-xs-12 col-md-6">
                    <label for="number_berths"><b><?php echo $this->lang->line('berth');?></b> </label>
                    <!-- <b class="col-4"><?php echo $this->lang->line('berth');?></b> -->
                    <select name="" class="form-control" id="number_berths">
                        <option value="2">2 or more</option>
                        <option value="3">3 or more</option>
                        <option value="4">4 or more</option>
                        <option value="5">5 or more</option>
                        <option value="6">6 or more</option>
                    </select>
                </div>
            </div>
        </div>
         <hr>
        <div class="col-xs-12 col-md-6">
           
            <div class="row">
                <div class="col-12">
                    <label ><b><?php echo $this->lang->line('type');?></b></label>
                </div>
                <div class="col-xs-12 col-md-6 ttp">
                    <input type="checkbox" id="id_types_1" value="Low profile">
                    <label for="id_types_1" >
                        <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                            <svg version="1.0" xmlns="http://www.eat_bananas.com" viewBox="0 0 305 130"><path d="M29.7 10.7c-.4.3-.7 2.1-.7 4V18h54.1l-.3-3.8-.3-3.7-26.1-.3c-14.3-.1-26.3.1-26.7.5z"/><path d="M169.7 12.2c-4.9.5-14.1 2.3-20.5 4.1l-11.7 3.2-59.2.5c-55.1.5-59.4.6-61 2.3-1.6 1.6-1.9 4.8-2.5 28-.5 14.4-1 30.2-1.3 35.2-.3 4.9-.2 12.1.2 16C14.9 112 14.8 112 48.5 112h27l2.3 4c6.2 10.9 24.5 10.3 29.2-.9l1.2-3.1h134.5l2.4 3.7c3.3 5.1 6.9 7.4 12.2 8 7.7.9 13.7-2.4 18.2-10.1.7-1.2 3.1-1.9 8.4-2.5 5.1-.5 7.8-1.3 8.6-2.4 1.7-2.4 2.8-14.2 1.6-18-.5-1.8-1.4-5.9-2-9.1-1.4-7.6-3.5-9.8-13.2-13.8-6.9-2.8-8.4-3.9-13.3-9.9-3.1-3.7-9-9.8-13.1-13.5-7.1-6.4-7.4-6.8-5.5-8.1 3.1-2.2 2.5-6.4-1.2-10-12.1-11.7-43.4-17.5-76.1-14.1zm-.9 24c.9.9 1.2 9.6 1.2 32.9 0 37.7 1.1 34.9-13.5 34.9S143 106.8 143 69.1c0-23.3.3-32 1.2-32.9 1.7-1.7 22.9-1.7 24.6 0zm-69 14.5l-.3 9.8-24.4.3c-17.1.2-24.8-.1-25.7-.9-1.5-1.2-2.1-16.9-.7-18.2.3-.4 12-.7 26-.7h25.4l-.3 9.7zm107.7.3v9.5h-27l-.3-8.4c-.2-4.6-.1-9 .2-9.8.4-1.1 3.4-1.3 13.8-1.1l13.3.3V51zm36.1-7.7c3.4 1.8 7.9 6.4 14.4 15.1 3.9 5.2 4.2 5.8 2.7 7.3-1.7 1.7-5.3 1.8-19.7.8-14.6-1.1-16.4-2.2-19.4-12.5-1.7-5.7-2.1-11.2-.8-12.4 1.3-1.4 19.5 0 22.8 1.7zM95.9 100.5c3.1 1.5 4.1 3.3 4.1 7s-1 5.5-4.1 7c-4 2.1-5.7 1.9-9-1.4-4-4-3.9-8.1.2-11.5 3.5-3 4.9-3.2 8.8-1.1zm169.9 2.1c2.8 3.2 2.8 6.6-.2 10-6 7.1-17.4 0-13.4-8.4 2.7-5.6 9.3-6.4 13.6-1.6z"/><path d="M145.7 37.6c-.4.4-.7 14.6-.7 31.5 0 23.1.3 31 1.2 31.5 1.7 1.1 19.8.8 20.9-.3.5-.5.8-14.2.7-31.9l-.3-30.9-10.6-.3c-5.8-.1-10.8.1-11.2.4zm17.8 21.9v18h-6l-.3-6.8c-.3-6.6-.4-6.8-4.2-9.3l-3.9-2.6-.3-7.9c-.2-4.4-.1-8.4 0-9 .3-.6 3.3-.9 7.5-.7l7.2.3v18z"/></svg>
                        <span style="margin-top:-10px"><?php echo $this->lang->line('type1');?></span>
                    </label>
                </div>
                <div class="col-xs-12 col-md-6 ttp">
                    <input type="checkbox" id="id_types_2" value="Coachbuilt">
                    <label for="id_types_2" >
                         <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                         <svg version="1.0" xmlns="http://www.eat_bananas.com" viewBox="0 0 346 202"><path d="M190.2 14.6c-2.4.8-7 3.4-10.3 5.7-8.1 5.6-10.5 7-16.4 9.3-4.6 1.7-8.9 1.9-60.6 2.2l-55.6.3-2.1 2.2c-2.8 3-4.2 22.1-4.9 67.4-.5 28-.9 35.5-1.9 36.4-1 .8-1.4 4.1-1.4 12 0 14.2-.3 13.9 18 13.9h13.6l1.8 4.1c8.2 18.6 35 19.2 43.7.9l2.4-5H259l2.1 4.3c4.8 9.5 11.8 14.1 21.9 14.1 10.1 0 18.4-5.4 22.5-14.5 2-4.2 4-5.2 14.2-6.5 2.9-.3 5.9-1.4 6.7-2.3.8-.9 1.9-5.4 2.5-10.6.9-8.1.8-9.3-.9-12.2-1.3-2.1-2.3-6.9-3-13.4-1.8-17.5-2.8-19.3-14.2-24.3-7.3-3.3-13.2-8.1-32.1-26.6l-16.4-15.9-12.9-.3c-11.1-.3-12.9-.5-13.2-2-.3-1.5 1.4-1.7 17.6-2l17.9-.3 4.9-3c6.8-4.3 9.8-9.9 9.7-18.3 0-5.5-.5-6.8-3-10-5.8-7.3-5.1-7.2-49.3-7.2-32.5.1-40.3.4-43.8 1.6zm71.4 6.6c2 3.2-1.2 14.9-5 18-1.8 1.5-4.7 1.8-23.7 1.8-20 0-21.7-.1-23.3-1.9-1.6-1.8-1.6-2.3.4-8.7 3.4-11 1.8-10.4 28.1-10.4 16.8 0 23 .3 23.5 1.2zM195.2 68c1.7 2.4 1.9 4.9 1.8 41.2 0 21.2-.3 39.4-.7 40.4-1.4 3.9-3.3 4.3-19.1 4.4-12.4 0-15.7-.3-17.7-1.6l-2.5-1.6v-41.1c0-37 .2-41.2 1.7-42.9 1.5-1.7 3.2-1.8 18.1-1.6 16.3.3 16.5.3 18.4 2.8zm67.1 1.3c3.1 1.7 23 21.4 23.9 23.7.3.8.2 2.5-.3 3.7l-.8 2.3h-27.9c-34.4 0-31.7 1.5-31.7-17.1 0-10.4.3-13.2 1.5-14 2.4-1.6 31.9-.5 35.3 1.4zm-133.5.9c.8.8 1.2 5.5 1.2 14.4 0 12.8-.1 13.2-2.2 13.8-4 1-58.8.7-60.9-.4-1.7-1-1.9-2.2-1.9-13.8 0-8.6.4-13.2 1.2-14 1.7-1.7 60.9-1.7 62.6 0zM99.5 148c6.9 4.2 7.2 15.5.7 20.5-3.6 2.7-12.2 2.7-15.2 0-5-4.5-6.2-10-3.4-15.8 3.1-6.5 11.4-8.7 17.9-4.7zm191.9 1.3c3.5 2.9 3.8 3.7 3.9 8.5.1 6.3-2.3 10-7.6 12.1-4.9 1.8-9.8.7-13.6-3.1-2.7-2.7-3.1-3.9-3.1-8.3 0-4.6.4-5.6 3.7-8.8 3.1-3.2 4.3-3.7 8.3-3.7 3.8 0 5.3.6 8.4 3.3z"/><path d="M160.5 69.3c-.3.6-.4 19.2-.3 41.2l.3 40 15.5.2c8.5.2 16.1-.1 16.9-.6 1.2-.8 1.4-7.4 1.3-39.7-.1-21.3-.4-39.6-.8-40.6-.5-1.6-1.9-1.8-16.5-1.8-11.9 0-16.1.3-16.4 1.3zm26.9 6.3c.9 2.2.7 22.7-.2 24.1-.7 1.1-6.9 1.6-16.9 1.4l-4.3-.1V88.2c0-7.1.3-13.2.7-13.5.3-.4 5-.7 10.4-.7 7.9 0 9.8.3 10.3 1.6zM66.5 20.6c-1 1-1.5 2.9-1.3 4.8l.3 3.1 33.3.3 33.2.2v-4c0-2.9-.5-4.2-1.9-5-1.2-.6-13.2-1-32-1-26.3 0-30.2.2-31.6 1.6zM23.3 83.7c-1 .3-1.3 6.4-1.3 25.4V134h15V83l-6.2.1c-3.5 0-6.9.3-7.5.6z"/></svg>
                        <span style="margin-top:-10px"><?php echo $this->lang->line('type2');?></span>
                    </label>
                </div>
                <div class="col-xs-12 col-md-6 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_3" value="‘A’ class">
                        <label for="id_types_3" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type3" x="0" y="0">
                                <svg id="sprites-type3"><svg version="1.0" xmlns="http://www.eat_bananas.com" viewBox="0 0 376 194"><path d="M59.7 19.7c-.4.3-.7 1.9-.7 3.5V26h51v-2.3c0-4.5-1-4.7-26-4.7-13 0-24 .3-24.3.7zM170.7 19.6c-.4.4-.7 2-.7 3.6V26h25c22.3 0 25.1-.2 25.7-1.6.3-.9.2-2.4-.4-3.3-.9-1.4-4.2-1.6-25-1.9-13.2-.1-24.2.1-24.6.4zM28.2 30.7c-2.5 1-4.2 6.4-5.2 16.5-.6 5.7-1.6 13.2-2.2 16.8-.6 3.8-1 22.8-1 46.1 0 35.4.2 40 1.7 43.3 1 2 2.1 3.6 2.6 3.6s1.8.8 2.9 1.8c1.8 1.5 5.1 1.8 25.2 2.2 21.8.5 23.1.6 24.2 2.5 2.8 5 5.9 8.6 10.3 11.7 4.5 3.1 5.3 3.3 13.3 3.3 7.8 0 8.8-.2 12.1-2.8 2-1.5 5.4-5.4 7.4-8.7l3.7-5.9 81.4-.1h81.3l1.6 3c2.2 4.3 7.1 9.6 11.2 12.1 2.9 1.8 5.1 2.3 11.3 2.3 7 0 8.1-.3 12.6-3.3 5.2-3.6 5.2-3.5 8.7-9.6l2.4-4 10.6-.5c9.9-.5 10.8-.7 12.4-3 4.3-5.9 5.2-10.1 5.2-23.6.1-14.2-1.2-19.3-6.2-24.5-1.3-1.3-4.5-5.3-7.2-8.9-2.7-3.6-5.2-6.7-5.5-7-.4-.3-5.1-6.4-10.5-13.5C327 73.3 322.3 67.3 322 67c-.3-.3-3-3.6-6-7.5-6.6-8.4-10.1-11.8-17.6-17.1-3.5-2.5-15.9-8.4-17.7-8.4-.6 0-3.2-.8-5.7-1.8-4.2-1.6-13.3-1.7-125-1.9-66.3-.1-121.1.1-121.8.4zm175.2 24.4l2.6 2v45.3c0 37.5-.2 45.6-1.4 47.2-1.3 1.7-2.8 1.9-17.4 1.9-14.3 0-16.2-.2-18.1-1.9-2.1-1.9-2.1-2.4-2.1-46.3 0-29.5.4-45.1 1.1-46.4 1.7-3.2 4.5-3.8 19-3.8 12.3-.1 13.9.1 16.3 2zM89.8 62.6c2.1.6 2.2 1 2.2 13.5V89H66.6c-14 0-26.1-.3-27-.6-1.3-.5-1.6-2.6-1.6-12.5 0-10.2.2-11.9 1.8-12.8 1.8-1.1 46.1-1.5 50-.5zm48.1.8c.8.9 1.1 5.4.9 13.2l-.3 11.9h-18l-.3-12c-.2-10.4 0-12.1 1.5-13.2 2.4-1.8 14.7-1.7 16.2.1zm130.6 2.1c10.5.8 19.7 1.5 20.6 1.5 1.4 0 6 6.4 10.4 14.2.6.9 3.4 5.5 6.3 10.1 2.8 4.7 5.2 9.2 5.2 10.1 0 2-3.3 2.1-19.4.1-6.6-.8-18.8-2.2-27-3.1l-14.8-1.7-2-4.6c-1.1-2.5-2.4-5.7-2.8-7.1-.5-1.4-1.8-5-3-8-3.1-7.8-3.8-10.3-3.3-11.8.6-1.6 6.1-1.5 29.8.3zm50.2 4.9c2.6 2.8 22.7 28.4 27.2 34.7 1.3 1.9 1.1 1.9-6 1.4-4.1-.3-8.8-.8-10.6-1.1-3.2-.5-9.3-4.7-9.3-6.5 0-.5-1.2-2.8-2.7-5.2-3.9-5.9-5.1-8-5.9-9.7-.4-.8-2.7-4.5-5.1-8.2-2.4-3.7-4.3-7.2-4.3-7.7 0-.7 2.7-1.1 6.8-1.1 6.5 0 7 .2 9.9 3.4zm-214.9 74c4.1 2.1 6 4.7 6.2 8.6.3 6 .1 6.8-3.2 9.9-2.8 2.6-4.1 3.1-8.5 3.1-4.5 0-5.4-.4-7.6-3-3.4-4-4.1-7.8-2.2-12.3 1.7-4 6.6-7.7 10.3-7.7 1.3 0 3.5.6 5 1.4zm211.9.6c6.9 4.2 7.9 12.5 2.3 18.2-2.4 2.3-3.7 2.8-8 2.8-4.4 0-5.6-.4-8.1-2.9s-2.9-3.7-2.9-8.3c0-4.4.5-5.9 2.3-7.6 4.7-4.4 9.6-5.2 14.4-2.2z"/><path d="M171.8 57.1c-1.7.9-1.8 4.2-1.8 45.4 0 42.9.1 44.5 1.9 45.5 2.1 1.1 26.8 1.4 29.5.4 1.4-.5 1.6-5.5 1.6-45.3 0-33.4-.3-45-1.2-45.9-1.5-1.5-27.5-1.6-30-.1zm23.6 5.5c1.3.5 1.6 2.7 1.6 13.5V89h-21V76.1c0-9.4.3-13.1 1.3-13.4 1.8-.8 16.2-.8 18.1-.1z"/></svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type3');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_4" value="Converted van">
                        <label for="id_types_4" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type4" x="0" y="0">
                                    <svg id="sprites-type4"><svg version="1.0" xmlns="http://www.eat_bananas.com" viewBox="0 0 416 200"><path d="M79.4 12.4c-.3.8-.4 2.4-.2 3.5.3 2.1.8 2.1 24.6 2.4l24.3.2-.3-3.5-.3-3.5-23.8-.3c-20-.2-23.8 0-24.3 1.2zM216.2 12.2c-1.4 1.4-1.6 5.8-.2 5.8.6 0 11.7.1 24.8.1h23.7v-6.6l-23.5-.3c-17.5-.2-23.9.1-24.8 1zM47.6 23.3c-2.2 2.2-2.3 2.9-2.9 28.7-.4 14.6-.7 38.8-.7 53.8 0 23.4-.2 27.6-1.6 28.9-1.2 1.3-1.4 3.2-.9 11.2 1.2 17.5.4 17.1 35 17.1H103l1 2.6c1.7 4.4 5 8.4 9.4 11.2 3.6 2.4 5.1 2.7 12.6 2.7 7.8 0 8.9-.2 13-3 2.6-1.8 5.7-5.2 7.5-8.2l3-5.3H328l1.3 3.3c1.6 3.8 5.8 8.4 10.2 11.3 2.4 1.5 4.8 1.9 11.5 1.9 7.5 0 9-.3 12.5-2.6 4.9-3.2 6.7-5.2 9.4-10.5 2.1-4 2.3-4.1 8.3-4.8 3.3-.3 7.8-.6 9.9-.6 2.6 0 4.7-.8 6.6-2.4 2.8-2.4 2.8-2.5 2.7-14.3 0-13.2-2.2-27.9-5-33.6-1.5-3.1-3.3-4.5-10.4-8.1-4.7-2.4-10-4.7-11.8-5-3.4-.8-6.4-3.4-12.7-11-2.2-2.7-5.1-6.1-6.5-7.5-1.4-1.4-13.3-13.8-26.4-27.4-13.2-13.7-25.2-25.5-26.9-26.3-8.5-4.5-5.8-4.4-131.5-4.4H49.9l-2.3 2.3zm97.2 25.5c.9.7 1.2 4.2 1 14.3l-.3 13.4-35.5.3c-32.5.2-35.6.1-36.7-1.5-1.6-2.1-1.8-22.5-.3-25.4 1-1.8 2.5-1.9 35.8-1.9 19.1 0 35.3.4 36 .8zm131.3 8.1l2.4 1.9V104c0 43.6-.1 45.2-1.9 46.6-1.6 1.1-8.5 1.4-38.1 1.4-42.6 0-39.7.8-40.3-11.6-.4-6.5-.7-7.4-2.3-7.4-2.6 0-2.5-5.5.1-9.5 1.9-2.8 2-4.7 2-32.7 0-30.3.4-34.2 3.9-35.1.9-.3 17.4-.5 36.7-.6 33.2-.1 35.3 0 37.5 1.8zm50.7 7.2c4.5 1.9 9.1 6.1 18.1 16.7 9.4 11 10.9 16.5 4.8 17.6-1.8.3-10.9.2-20.2-.3-22.3-1.3-25.9-2.5-29.7-10.1-2.8-5.7-6.1-19.6-5.6-23.3.4-3 3.6-3.6 16.8-3 8 .4 12.8 1.1 15.8 2.4zm-192.2 84.4c1.9 2.2 2.4 4 2.4 8 0 4.4-.4 5.5-3.1 8.1-2.5 2.4-3.9 2.9-7.7 2.9-5.8 0-9.5-2.6-11.3-7.7-.9-3-.9-4.3.1-7 2.6-6.5 5-8 12.4-7.4 3.8.3 5.3.9 7.2 3.1zm224.5-.6c6.3 6.7 3.4 17.7-5.2 19.6-9 2-16.6-5.9-13.8-14.3 1.1-3.5 3.5-6.5 6-7.5 3.1-1.4 11 0 13 2.2z"/><path d="M202.1 59.4c-.8.9-1.1 10-.9 31.2.3 27.8.4 29.9 2.1 29.8 1.2-.1 1.7.5 1.7 2.2 0 1.8-.6 2.4-2 2.4-1.9 0-2.1.5-1.8 7.2l.3 7.3h3c2.7 0 3.1-.4 3.5-3.5.3-2.3 1.1-3.6 2.3-3.8 1.3-.3 1.7.4 1.7 3.1 0 4.6-3.2 8.5-7.3 8.9-4 .4-5 3.4-1.5 4.7 1.3.5 17.7.6 37 .3 34.1-.5 34.7-.5 35.2-2.6 1.1-3.9.7-84.6-.4-86.7-1-1.8-2.5-1.9-36.4-1.9-28.7 0-35.6.3-36.5 1.4zm67.7 4.8c1.8 1.8 1.7 28.2-.2 29.7-.9.8-10.3 1.1-32.2.9l-30.9-.3-.3-14.4c-.2-9.7.1-14.8.9-15.7 1.6-1.9 60.8-2.1 62.7-.2zM24.2 65.2c-.7.7-1.2 2.1-1.2 3.2 0 1-.6 4.2-1.4 7-4.2 15.2-4.9 19.9-5.4 33.9-.2 8.1-.1 16.3.2 18.2l.7 3.5H41V64h-7.8c-4.7 0-8.3.5-9 1.2z"/></svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type4');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_5" value="Camper">
                        <label for="id_types_5" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type5" x="0" y="0">
                                <svg id="sprites-type5"><svg version="1.0" xmlns="http://www.eat_bananas.com" viewBox="0 0 346 226"><path d="M204.5 6c-1.1.4-4.9 1.6-8.5 2.5-3.6.9-8.3 2.3-10.5 3-2.2.7-6.9 2-10.5 3-3.6.9-8.3 2.3-10.5 3-2.2.7-6.9 2-10.5 3-3.6 1-8.3 2.3-10.5 3-2.2.7-6.9 2.1-10.5 3-3.6 1-8.3 2.3-10.5 3-2.2.7-6.7 2-10 2.9-20.5 5.6-23.9 6.9-24.3 9-.5 2.4 1.5 3.6 4.2 2.6 2.2-.8 9.5-2.9 29.6-8.5 16.6-4.7 25.6-7.4 28.5-8.6 1.1-.4 3.6-1.1 5.5-1.4 1.9-.3 5.6-1.3 8.3-2.1 2.6-.8 6.8-2 9.5-2.8 2.6-.7 7.2-2.1 10.2-3 3-.8 7.8-2.2 10.5-3 13-3.6 13.5-3.8 13.5-6.2 0-2.8-.9-3.4-3.5-2.4zM188.5 19c-15 4.5-29.8 8.8-33.5 9.5-4.4.9-22.8 6.2-25.5 7.4-1.1.5-4.9 1.7-8.5 2.6-3.6 1-8.3 2.3-10.5 3-2.2.7-6.8 2.1-10.2 3.1L94 46.3v13.6l57.1.1h57.1l-.6-2.3c-.6-2.1-1.4-5.5-3.7-17.2-.6-2.8-1.3-9.4-1.6-14.8-.7-11.4.1-11-13.8-6.7zm-19.7 16.6c1.5.8 3.4 3.2 4.3 5.2 4.2 9.5 4.9 11.4 4.9 12.6 0 1.6-17.1 2.3-40.9 1.8l-14.1-.4v-4c0-2.1.4-4.7 1-5.7 1.1-2.2 7.5-4.1 23.5-7.1 6.6-1.3 13.1-2.7 14.5-3.1 3.7-1.1 3.9-1.1 6.8.7zM60.3 65.9c-.7 1.1-1.5 4.1-1.8 6.8-.5 4.1-1.7 47.6-1.5 52.5.4 10.5-1.4 36.6-2.7 38-.9.8-1.3 4.4-1.3 10.3 0 12.4-.1 12.4 16.5 12.7l13 .3 2.2 4c1.3 2.2 2.5 4.5 2.9 5.2 1.1 2.2 8.5 6.4 13.4 7.5 9.5 2.2 20.5-3.5 25-12.7l2.2-4.5 61 .2 61 .3 2.5 4.5c7 12.9 21.2 16.4 33.5 8.4 3.8-2.5 8.8-9.2 8.8-11.8 0-1.4 4-2.6 14.2-4.1 5.6-.9 6.8-3.3 6.8-14-.1-6.3-.5-9.6-1.5-10.9-.8-1.1-1.5-3.4-1.5-5.2 0-1.7-.7-7.1-1.5-12-1.8-10.1-3.4-12.4-10.5-15.5-10.3-4.5-13.8-7.1-31.5-23.9-12.8-12-15.6-15.1-18-19.7-5.3-10.2-8.6-15-11.3-16.6-2.8-1.6-9-1.7-90.9-1.7-85.4 0-87.9.1-89 1.9zM139 96.7c.3 18.1 0 25.7-1.2 26.4-.7.5-14.8.9-31.2.9-26.5 0-30.2-.2-31.8-1.7-1.6-1.4-1.8-3.3-1.8-13.8 0-8.1.4-12.5 1.2-13.3.9-.9 9.6-1.2 33-1.2H139v2.7zm73-.8c.5 1.1 1 7 1 13.2 0 9.1-.3 11.6-1.7 13.1-1.5 1.7-3.8 1.8-31.6 1.8-26.6 0-30.3-.2-31.9-1.7-1.5-1.4-1.8-3.2-1.8-13 0-6.3.5-12.3 1-13.4 1-1.8 2.4-1.9 32.5-1.9s31.5.1 32.5 1.9zm40.1-.1c1.4.9 4 3 5.6 4.7 1.7 1.6 6.3 5.9 10.3 9.5 8.8 8 9.8 9.5 7.4 12.1-1.6 1.8-3.3 1.9-26.6 1.9-15.3 0-25.7-.4-26.9-1-1.7-1-1.9-2.2-1.9-14.4 0-7.3.3-13.6.7-13.9.3-.4 7-.7 14.7-.7 11.7 0 14.5.3 16.7 1.8zM111.6 171c6.7 4.2 7 13.7.6 19-4.2 3.5-8.3 3.9-12.5 1.2-4.2-2.8-5.6-5.3-5.7-10 0-9.8 9.4-15.2 17.6-10.2zm167.8.1c3.1 2.5 5.6 6.9 5.6 10.1 0 5.4-6.6 11.8-12.3 11.8-1.3 0-4.3-1.4-6.5-3-4.1-2.9-4.2-3.1-4.2-8.9 0-5.7.2-6.1 3.7-9 4.6-3.8 9.7-4.1 13.7-1zM33.6 97.2c-3.7 3.3-4.6 9.7-4.6 34 0 20.4.5 24.1 3.4 26 .6.4 5.3.8 10.3.8 8.8 0 9.3-.1 9.7-2.3.3-1.2.8-15.4 1.1-31.5l.6-29.2h-9c-7.9 0-9.3.3-11.5 2.2z"/></svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type5');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_6" value="Caravan">
                        <label for="id_types_6" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type6" x="0" y="0">
                                    <svg id="sprites-type6"><svg version="1.0" xmlns="http://www.eat_bananas.com" viewBox="0 0 404 208"><path d="M98 18.5c-.8.2-6.9.9-13.5 1.5C54.7 22.9 42.4 30.5 34 51.5c-2.8 6.9-4.2 20.7-4.7 46-.5 24.2-.7 26.2-2.5 28.2s-2 3.3-1.7 14.1c.4 11 .6 12.3 2.8 14.6 4.8 5.1 7.4 5.6 27.4 5.6 14.5 0 18.7.3 19.6 1.4.7.8 5.1 1.8 11.4 2.5 29 3.2 36.9 4.1 45 4.6l8.8.7-.6-3.5c-.4-2-.4-4-.1-4.6 1.1-1.7 3.6 0 3.6 2.4 0 7 8.5 17.4 15.9 19.5 13.8 3.8 26.5-2.9 30.9-16.4 2.4-7.3 4.9-8.3 4.4-1.8l-.4 4.4 7.9-.6c8.4-.7 27.7-2.8 46.8-5.1 9.3-1.2 24.9-1.5 68.8-1.5h56.8l-.3-6.7-.3-6.7-3.5-.7c-1.9-.4-5.9-.9-8.7-1.2-4.8-.5-5.3-.4-5.3 1.3 0 1.8-.7 2-7.5 2H341v-2.8c0-2.6.6-2.9 12-6.7 9.4-3.1 12-4.3 12-5.7 0-2.1-.6-2.1-6.3-.9-2.3.5-8 1.7-12.7 2.6-16.7 3.2-16 2.9-16 8.5v5h-30.5l-.2-18.3c-.2-18.8-1.2-25.6-5.6-38.2-8.6-24.9-29.3-45.4-57.7-57.2-21.8-9.1-43.2-13.5-81.1-16.8-15-1.3-52.2-1.9-56.9-1zm15.4 23.6l2.7 3.1-.2 52.2c-.1 28.6-.4 51.3-.6 50.3-.3-1.3-1-1.6-2.1-1.1-4.8 2-36.1 3-41 1.3-6.4-2.2-6.2-.8-6.2-54.7V44.3l2.5-2.7 2.4-2.6h39.9l2.6 3.1zm95.4 22.8c.2 10.1-.1 13.6-1 14.3-.7.4-15.3.8-32.5.8-29.9 0-31.3-.1-32.3-1.9-1.1-2.1-1.4-18.9-.4-24l.7-3.1 32.6.2 32.6.3.3 13.4zM174.5 152c5.2 4.9 5.6 10.4.9 15.9-6.7 8-20.4 2.9-20.4-7.7 0-3.8 3.2-8.9 6.4-10.3 3.5-1.5 10.5-.4 13.1 2.1z"/><path d="M71.7 44.7c-.4.3-.7 22.6-.7 49.4 0 43.5.2 48.8 1.6 49.3.9.3 9.6.6 19.4.6 15.3 0 17.9-.2 18.4-1.6.8-2 .8-94.8 0-96.8-.5-1.4-3.2-1.6-19.3-1.6-10.3 0-19.1.3-19.4.7zm31.8 20.8v14l-11 .3C75.8 80.2 77 81.2 77 66.6c0-6.9.3-13.2.6-14 .5-1.4 2.4-1.6 13.3-1.4l12.6.3v14zM333.5 164.7c-.4 1-.7 4.5-.8 7.8l-.1 6 3.7.3c2.3.2 4.7 1.3 6.2 2.8 3.1 3.1 8.6 3.3 11.5.4 3.1-3.1 2.7-9.3-.6-11.9-3.7-2.9-7-2.6-10.6 1-1.7 1.6-3.4 2.7-3.9 2.2-.4-.4-.9-2.8-1.1-5.3-.3-4.8-2.9-6.8-4.3-3.3z"/></svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type6');?></span>
                        </label>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6 ttp">
                    <div class="form-check">
                        <input type="checkbox" id="id_types_7" value="Other">
                        <label for="id_types_7" >
                            <svg class="" style="width:70px;" viewBox="0 -15 176.9 98.4">
                                <use xlink:href="#sprites-type7" x="0" y="0">
                                    <svg id="sprites-type7"><svg version="1.0" xmlns="http://www.eat_bananas.com" viewBox="0 0 360 274"><path d="M170.7 5.9c-2.6 1-6 2.7-7.4 3.8l-2.7 1.9 1.7 4.2c1.7 4.1 1.6 4.2-.6 4.6-1.2.3-8.8.7-16.9.9-11.5.2-14.8 0-15.2-1-.3-.8.2-1.3 1.4-1.3 3 0 2.7-4.6-.2-5.4-4.6-1.2-13.5-.7-14.8.9-1.7 2 .3 4.5 3.6 4.5 2.4 0 3.3 2.3 1.5 3.4-.8.5-10.5 16.6-14.9 24.6-.7 1.4-2.2 3.8-3.3 5.5-3.1 4.8-4.7 8.8-4.2 10.2.4.9 3.2 1.3 10.4 1.3 6.2 0 10.7.5 11.9 1.2 1.5.9 2.3 1 2.8.2.4-.6 2.1-1.6 3.7-2.1 2.9-1 3-1.3 2.8-6.1-.3-5.6-2.6-11.1-6.8-15.6-2.7-2.9-2.7-2.9-.9-6.2 1.9-3.5 3.2-4.3 3.8-2.2.2.7 1.7 5.6 3.4 10.8 1.6 5.2 3.3 10.9 3.7 12.7.9 4.6 2.5 5.4 10 5.1l6.7-.3 2.7-5c7.7-14 11.6-21.2 12.5-23.2 1.4-3 2.9-2.4 4 1.5.8 2.8.5 3.5-1.7 5.6-4.7 4.3-7.7 10.3-8.4 16.5-.6 5.8-.5 6.1 3.1 10.2 2.4 2.8 3.6 5.3 3.6 7.2 0 2.8.2 2.9 3.1 2.3 1.7-.3 3.8-.6 4.5-.6.9 0 .4-1.4-1.6-4.2-2.5-3.5-3-5-3-10 0-7.4 3.4-14.4 6.5-13.5.5.2 2.7 3.9 5 8.3 3.7 7.2 4.3 7.9 7 7.9 4.7 0 4.4-3.3-1.3-14.9-2.8-5.5-7.8-15.7-11.1-22.4-3.4-6.8-5.9-12.7-5.7-13.1.3-.4 2.3-1.6 4.5-2.7 3.3-1.5 4.1-2.4 4.1-4.7 0-3.1-.7-3.2-7.3-.8zM160 29.8c0 .4-.4 1.2-.9 1.7-.4.6-2.5 4-4.5 7.7-2 3.8-5.2 9.8-7.2 13.5-2 3.8-4 7.2-4.4 7.6-1.2 1.4-10.5-27.4-9.6-29.9.4-1.1 3.1-1.4 13.6-1.4 7.1 0 13 .4 13 .8z"/><path d="M93.9 33.9c-8.5 2-16.7 11.2-19.4 21.6-1.3 5.2-1.3 6.1-.1 7.4 1.1 1 1.9 1.1 2.8.4.7-.6 2.4-1.3 3.8-1.5 1.9-.2 2.6-1.2 3.5-4.3 1.5-5.8 3.1-8.2 7.7-11.5 3.2-2.3 5.2-3 8.8-3 4.4 0 4.8-.2 6.9-4 1.2-2.2 1.9-4.4 1.6-5-.7-1.1-11.3-1.2-15.6-.1zM183.4 35.4c1.2 5 3.6 7.6 6.8 7.6 3.9 0 8.9 3.1 12.4 7.7 2.4 3.2 2.8 4.6 2.8 10.3.1 5.6-.3 7.3-2.7 10.8L200 76h5.9c6.6 0 7.2-.5 9.1-7.2 3.4-12.8-2.8-27.1-14.3-32.9-2.2-1.2-7-2.3-10.9-2.6l-7.1-.6.7 2.7zM82 85.5c0 11.1-.4 18.5-1 18.5-.5 0-1-3.3-1.2-7.3l-.3-7.2-11-.2c-13.6-.2-14.5.3-14.5 8.8 0 5.2-.2 5.8-2.2 6.1-2.7.4-3.4 3.2-1.6 6.7 1.3 2.4 1.6 2.5 11.6 2.2 10.7-.3 13.2.5 13.2 3.9 0 1.3-1.3 2.1-4.7 3-6.4 1.6-10.7 4.4-13.1 8.5-2.2 3.6-4.3 17.7-6.1 40.2-.5 6.7-1.5 13.1-2 14.2-.6 1.1-1.1 7.6-1.1 14.7v12.7l4.3 4.2c5.6 5.3 11.8 8.5 16.5 8.5 3.7 0 3.8.1 5.7 5.5 1 3.1 2.8 6.9 4 8.4 2.1 3 10.4 9.9 14.2 11.9 2.9 1.6 17.7 1.5 22.9-.1 6.4-1.9 15.6-11.7 18.1-19.3l2-5.9H237.4l.8 3.7c1.6 8 9.3 17 17.8 20.9 3.9 1.8 5.9 2 14.7 1.7l10.2-.5 6.5-5.7c6.2-5.4 9.1-9.8 11.3-17.1.7-2.5 1.5-3.1 4.8-3.6 4.9-.6 7.9-2.3 12.1-6.9 3.7-3.8 5-10 4.1-18.7-1.9-17.6-4-30.9-5.5-33.1-1.9-3-8.9-6.1-15.1-6.8-5.1-.6-18-2.5-32.8-5l-9.8-1.7-19.3-12.8c-10.6-7.1-20.7-13.6-22.4-14.5-3.9-2-11.7-4.4-14.6-4.4-3.1 0-4.1-2.9-1.6-4.7 1.5-1.1 4.8-1.4 14.3-1.2l12.4.3 1.3-3.8c1.5-4.3 1.2-5.6-1.7-5.6-1.7 0-1.9-.8-1.9-9.5 0-5.2-.4-9.5-.9-9.5-.9 0-13.6 5.2-18.9 7.8-2.9 1.4-3.5 1.4-4.2.1-.7-1-.3-1.6 1.3-2 1.3-.3 3.1-1.1 4.2-1.6 3.8-2 9.6-4.3 10.8-4.3.7 0 2.1-.7 3.1-1.5 1.8-1.3-.9-1.5-24-1.5-29.1 0-28.4-.5-9.1 7.3 1.7.8 4.8 2 6.7 2.9 1.9.8 4.6 2 6 2.6 7 2.9 12.9 5.5 16.5 7.3l4 2-4.6-.5c-2.5-.3-5.9-1.2-7.5-2-1.6-.9-4.7-2.3-6.9-3.2-2.2-.9-5.3-2.2-7-2.9-4.3-2-12.7-5.5-15-6.5-1.1-.4-3.6-1.5-5.7-2.4-6.5-2.9-6.7-2.7-7 7.6-.2 7.5-.6 9.3-1.8 9.3-1.3 0-1.6-2.7-2-16.3-.6-21 .2-20.1-19.1-20.2-18.4 0-17.8-.8-18.1 20.5-.3 14.3-.5 16-2 16.3-1.6.3-1.8-.5-1.8-5.7 0-8.5-1-9.1-17-9.2-9.4 0-11.9-.3-10-1 1.4-.6 7.9-.9 14.5-.8l12 .3.3-8c.4-11.2.8-11-20.5-11.7L82 67.1v18.4zm101.7 28.3c.6.4 1.3 1.6 1.5 2.7.3 2-.3 2-48.9 2.3L87 119v-2.4c0-1.3.6-2.7 1.3-2.9 2-.8 94.1-.7 95.4.1zm24.3 18c6.4 3.3 8.9 4.9 26.7 16.5 5.9 3.9 8.4 7 6.8 8.5-1.3 1.3-108.4-.4-156.4-2.4l-15.4-.7.6-7.8c.6-9.2 3-15 6.7-16.1 1.4-.3 30.4-.6 64.5-.5l62 .2 4.5 2.3zM112 204c8.7 4.4 11.8 15.6 6.6 23.8-3 4.7-5.9 6.7-11.3 7.6-6.3 1.1-11.6-.8-15.7-5.6-3.3-3.9-3.6-4.6-3.6-10.8 0-6.1.3-7 3.3-10.3 6-6.9 13.3-8.5 20.7-4.7zm163.3-.4c4.8 2.5 7.3 5.4 9.1 10.6 1.4 4.3 1.4 5.1-.1 9.8-5.1 15.9-27.8 15.5-32.3-.5-3.7-13.4 11.2-26.1 23.3-19.9z"/><path d="M55.6 69.5c-1.2 1.2-1.6 3.6-1.6 9.6V87h26.1l-.3-9.3-.3-9.2-11.1-.3c-9.2-.2-11.5 0-12.8 1.3zM38 138.9c-8.2.7-12.4 2.7-13.3 6.4-.3 1.2-1.1 7.8-1.6 14.7-2.3 26.4-2.7 35.5-1.8 37.1.7 1.1 4.3 2.2 10.9 3.3 5.5 1 10.1 1.6 10.4 1.4.2-.3.7-4 1-8.4.3-4.3.8-8.6 1.2-9.4.7-1.9 3-22.6 3.8-35.8.6-9.6.6-10.2-1.2-10-1 .1-5.3.4-9.4.7z"/></svg>
                            <span style="margin-top:-10px"><?php echo $this->lang->line('type7');?></span>
                        </label>
                    </div>
                </div>
            </div>
            
           
        </div>
    </div>

</div>

<hr>

<div class="container">
    <div class="row">
       
        <div class="col-12 col-md-12">
            <div id="car_list"></div>
        </div>
        <div class="col-12 col-md-6">
           <!--  <span style="width:100%;"><b><?php echo $this->lang->line('price');?></b></span>
            <div >
                <p>
                    <input type="text" id="amount" readonly style="border:0; color:#f6931f; font-weight:bold;">
                </p>
                <div id="slider-range"></div>
            </div>
            <hr> -->
            
           
            <div class="row">
                <div class="col-12">
                    <label for=""><b><?php echo $this->lang->line('dri');?></b></label>
                </div>
                
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="power_steering" class="form-check-input" value="power_steering"><?php echo $this->lang->line('dri1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="cruise_control" class="form-check-input"><?php echo $this->lang->line('dri2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="wheel_drive" class="form-check-input"><?php echo $this->lang->line('dri3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="gps" class="form-check-input"><?php echo $this->lang->line('dri4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="parking_motion" class="form-check-input"><?php echo $this->lang->line('dri5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="rear_camera" class="form-check-input"><?php echo $this->lang->line('dri6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="cabin_heating" class="form-check-input"><?php echo $this->lang->line('dri7');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="ac" class="form-check-input"><?php echo $this->lang->line('dri8');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="central_lock" class="form-check-input"><?php echo $this->lang->line('dri9');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="baby_seat" class="form-check-input"><?php echo $this->lang->line('dri10');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="baby_car_chair" class="form-check-input"><?php echo $this->lang->line('dri11');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="winter_tires" class="form-check-input"><?php echo $this->lang->line('dri12');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="snow_chains" class="form-check-input"><?php echo $this->lang->line('dri13');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="wedge_levelers" class="form-check-input"><?php echo $this->lang->line('dri14');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="safety_kit" class="form-check-input"><?php echo $this->lang->line('dri15');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-12 col-md-6">
                    <label for=""><b>Life on board</b></label>
                </div>
                
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Autoradio" class="form-check-input"><?php echo $this->lang->line('life1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="CD_Player" class="form-check-input"><?php echo $this->lang->line('life2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="MP3" class="form-check-input"><?php echo $this->lang->line('life3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Audio_in" class="form-check-input"><?php echo $this->lang->line('life4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Bluetooth" class="form-check-input"><?php echo $this->lang->line('life5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="TV" class="form-check-input"><?php echo $this->lang->line('life6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="DVD_Player" class="form-check-input"><?php echo $this->lang->line('life7');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Satellite_dish" class="form-check-input"><?php echo $this->lang->line('life8');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Sponge" class="form-check-input"><?php echo $this->lang->line('life9');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="AC_life" class="form-check-input"><?php echo $this->lang->line('life10');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Bed_linen" class="form-check-input"><?php echo $this->lang->line('life11');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Swing_driver" class="form-check-input"><?php echo $this->lang->line('life12');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
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
                
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Sink" class="form-check-input"><?php echo $this->lang->line('kitchen1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Stove" class="form-check-input"><?php echo $this->lang->line('kitchen2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Oven" class="form-check-input"><?php echo $this->lang->line('kitchen3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Fridge" class="form-check-input"><?php echo $this->lang->line('kitchen4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Freezer" class="form-check-input"><?php echo $this->lang->line('kitchen5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Extractor" class="form-check-input"><?php echo $this->lang->line('kitchen6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Pan_kit" class="form-check-input"><?php echo $this->lang->line('kitchen7');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Dishes_kit" class="form-check-input"><?php echo $this->lang->line('kitchen8');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Coffee_machine" class="form-check-input"><?php echo $this->lang->line('kitchen9');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
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
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Inside_shower" class="form-check-input"><?php echo $this->lang->line('bath1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outside_shower" class="form-check-input"><?php echo $this->lang->line('bath2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Integrated_bathroom" class="form-check-input"><?php echo $this->lang->line('bath3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Portable_toilet" class="form-check-input"><?php echo $this->lang->line('bath4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
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
                
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Bicycle_carrier" class="form-check-input"><?php echo $this->lang->line('out1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Side_awning" class="form-check-input"><?php echo $this->lang->line('out2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outside_table" class="form-check-input"><?php echo $this->lang->line('out3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Barbecue" class="form-check-input"><?php echo $this->lang->line('out4');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Towing_adaptor" class="form-check-input"><?php echo $this->lang->line('out5');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outdoor_luggage_compartment" class="form-check-input"><?php echo $this->lang->line('out6');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
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
                
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Solar_panels" class="form-check-input"><?php echo $this->lang->line('auto1');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Outside_Eletric" class="form-check-input"><?php echo $this->lang->line('auto2');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Auxiliary_battery" class="form-check-input"><?php echo $this->lang->line('auto3');?>
                        </label>
                    </div>
                </div>
                <div class="col-6 col-md-6">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" id="Eletric_generator" class="form-check-input"><?php echo $this->lang->line('auto4');?>
                        </label>
                    </div>
                </div>
            </div>
            <hr>
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

