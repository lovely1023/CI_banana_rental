

    <section id="main-content">
        <section class="wrapper">
            <div class="row" id="pagecontent">
            
            </div>
        </section>
    </section>
</section>


<script>
    $(document).ready(function(){
        $('#bookingmanage').addClass('active');
        $.post(
            '/admin/index.php/Admin_C/booking_manage',
            function(data){
                $('#pagecontent').html(data);
            }
        );
    });
</script>
    
