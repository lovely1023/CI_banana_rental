<div class="container">
    <div class="row">
    
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('email');?>: </label>
            <input type="text" disabled value="<?php echo $client->email;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('fname');?>: </label>
            <input type="text" disabled value="<?php echo $client->first;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('lname');?>: </label>
            <input type="text" disabled value="<?php echo $client->last;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('birth');?>: </label>
            <input type="text" disabled value="<?php echo $client->birth;?>">
        </div>

        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('phone');?>: </label>
            <input type="text" disabled value="<?php echo $client->phone_num;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('country');?>: </label>
            <input type="text" disabled value="<?php echo $client->Country;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('city');?>: </label>
            <input type="text" disabled value="<?php echo $client->City;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('street');?>: </label>
            <input type="text" disabled value="<?php echo $client->Street;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('hnum');?>: </label>
            <input type="text" disabled value="<?php echo $client->House_number;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('pcode');?>: </label>
            <input type="text" disabled value="<?php echo $client->Postal_Code;?>">
        </div>
        <div class="col-md-12">
            <label for="first"><?php echo $this->lang->line('abme');?>: </label>
            
            <div><?php echo $client->presentation;?></div>
        </div>
    </div>
</div>
