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

    <!-- All Plugins js -->
    <script src="/assets/js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="/assets/js/active.js"></script>
    <script src="/assets/js/others/toastr.min.js"></script>

    <script src="/assets/min/dropzone.min.js"></script>
    <script src="/assets/min/dropify/js/dropify.min.js"></script>
    <script src="/assets/min/form-fileuploads.init.js"></script>

    <script src="/assets/calendar/jquery-ui.min.js"></script> 
    <script src="/assets/moment/moment.js"></script>
    <script src="/assets/schedule/datatables/js/jquery.dataTables.js"></script>
    <script src="/assets/datepicker/bootstrap-datepicker.js"></script>
    <script src="/assets/datepicker/locales/bootstrap-datepicker.pt.js"></script>
    <script src="/assets/sweetalert2/sweetalert2.min.js"></script>

    