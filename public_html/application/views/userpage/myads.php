<div style="margin-top:100px;"></div>

<?php $this->load->view('userpage/components/navbar') ?>

<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <table class="table table-hover"  id="ads_1_tb">
                
            </table>
        </div>
    </div>
</div>

<script> 
    $(document).ready(function(){
        $('#my_ads_nav').addClass('active');
        
        $.post(
            '/index.php/My_ads/read_myads',
            function(data){
                if(data=='none'){
                    $('#ads_1_tb').html("<p><?php echo $this->lang->line('noad');?></p>");
                }else{
                    $('#ads_1_tb').html(data);
                }
            }
        );

    });

    function get_ads_id(e){
        var ads_id=$(e).attr('id');
        var v_type=$(e).attr('v_type');
        window.location.href = '/index.php/My_ads/show_myads_details/'+ads_id+'/'+v_type;
    }
</script>







