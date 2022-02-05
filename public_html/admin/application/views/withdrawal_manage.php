<style>
.fasize{
    font-size:30px;
}
</style>
<div class="col-md-12">
    <div class="content-panel">
        <table class="table table-bordered table-striped table-condensed">
        <h4><i class="fa fa-angle-right"></i> Payment Manage Table</h4>
        <hr>
        <div class="col-md-8">
            <input class="form-control" onkeyup="searchbar()" id="sch"
            placeholder="Search for FirstName,LastName,Email,PayPal(owner),DrivingLicense(owner)" type="text"><br>
        </div>
        <thead> 
            <tr>
                <th>Email</th>            
                <th>First</th>
                <th>Last</th>
                <th>Deposit</th>
                <th>Owner-Email</th>
                <th>Owner-Paypal</th>
                <th>Owner-DrivingLicense</th>
                <th>Amount</th>
                <th>Date to pay</th>
                <th>Deposit at</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody id="tbody">
            <?php foreach($with as $row):?>
            <tr wid="<?php echo $row->id;?>" 
                 own_pr="<?php echo $row->own_pr;?>" owner_email="<?php echo $row->owner_email;?>" >                
                <td><?php echo $row->email;?></td>
                <td><?php echo $row->first;?></td>
                <td><?php echo $row->last;?></td>
                <td><?php echo $row->deposit_amount;?></td>
                <td><?php echo $row->owner_email;?></td>                
                <td><?php echo $row->iban;?></td>
                <td><?php echo $row->driv_num;?></td>
                <td><?php echo $row->own_pr;?></td>
                <td><?php echo $row->firstday;?></td>
                <td><?php echo $row->created_at;?></td>
                <td>
                    <?php if($row->status==0){ ?>
                        <a  onclick="funding(this)" class="btn btn-primary btn-block btn-sm">Pay Now</a>
                    <?php }else if($row->status==1){ ?>
                        <a class="btn btn-default btn-sm btn-block">PAID</a>
                    <?php } ?>
                </td>
            </tr>
            <?php endforeach;?>
        </tbody>
        </table>
    </div>
</div>

<script>

    function searchbar(){
        var key = $('#sch').val();
        $.post(
            '/admin/index.php/Admin_C/searchpay',
            {
                key:key
            },
            function(data){
                $('#tbody').html(data);
            }
        );
    }

    function funding(e){

        toastr_call('info','After pay to this user in paypal manually, please press this button!');

        var delayInMilliseconds = 1000;

        setTimeout(function() {
            if(confirm("Are you really to make paid status for this user?")){

                var id = $(e).parent().parent().attr('wid');            
                var own_pr = $(e).parent().parent().attr('own_pr');
                var owner_email = $(e).parent().parent().attr('owner_email');

                $.post(
                    '/admin/index.php/Admin_C/funding',
                    {
                        id:id,
                        own_pr:own_pr,
                        owner_email:owner_email
                    },
                    function(data){
                        location.reload('/');
                    }
                );
            }
        }, delayInMilliseconds);
        

        
        
    }
</script>