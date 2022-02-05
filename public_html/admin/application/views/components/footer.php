

<script class="include" type="text/javascript" src="/admin/assets/lib/jquery.dcjqaccordion.2.7.js"></script>
<script src="/admin/assets/lib/jquery.scrollTo.min.js"></script>
<script src="/admin/assets/lib/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/admin/assets/lib/jquery.sparkline.js"></script>

<script src="/admin/assets/lib/common-scripts.js"></script>
<script src="/assets/js/others/toastr.min.js"></script>
<script>
    function toastr_call(type,title,msg,override){
        toastr.options = {
            "closeButton": true,
            "debug": false,
            "newestOnTop": false,
            "progressBar": true,
            "positionClass": "toast-bottom-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        } 
        toastr[type](msg, title,override); 
    }
</script>
</body>

</html>