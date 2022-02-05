

    <section id="main-content">
        <section class="wrapper">
            <div class="row" id="pagecontent">
            
            </div>
        </section>
    </section>
</section>

<script>
    $(document).ready(function(){
        $('#admininfo').addClass('active');
        
        $.post(
            '/admin/index.php/Admin_C/admin_info',
            function(data){
                $('#pagecontent').html(data);
            }
        );
    });
</script>
    
