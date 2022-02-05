

    <section id="main-content">
        <section class="wrapper">
            <div class="row" id="pagecontent">
            
            </div>
        </section>
    </section>
</section>


<script>
    $(document).ready(function(){
        $('#adsmanage').addClass('active');
        $.post(
            '/admin/index.php/Admin_C/ads_manage',
            function(data){
                $('#pagecontent').html(data);
            }
        );
    });
</script>
    
