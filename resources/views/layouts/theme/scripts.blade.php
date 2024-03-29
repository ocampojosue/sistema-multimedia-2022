<script src="assets/js/libs/jquery-3.1.1.min.js"></script>
<script src="bootstrap/js/popper.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="plugins/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="assets/js/app.js"></script>

<script>
    $(document).ready(function() {
        App.init();
    });
</script>
<script src="assets/js/custom.js"></script>
<!-- END GLOBAL MANDATORY SCRIPTS -->

<!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
{{-- <script src="plugins/apex/apexcharts.min.js"></script> --}}
{{-- <script src="assets/js/dashboard/dash_2.js"></script> --}}
<script src="plugins/highlight/highlight.pack.js"></script>
<script src="assets/js/custom.js"></script>
<script src="plugins/font-icons/feather/feather.min.js"></script>
<script type="text/javascript">
    feather.replace();
</script>
<!-- END GLOBAL MANDATORY STYLES -->

<!-- BEGIN PAGE LEVEL SCRIPTS -->
{{-- <script src="assets/js/scrollspyNav.js"></script> --}}
<script src="{{asset('plugins/snackbar/snackbar.min.js')}}"></script>
<script>
    function noty(msg, option = 1){
        Snackbar.show({
            text:msg.toUpperCase(),
            actionText: 'CERRAR',
            actionTextColor: '#fff',
            backgroundColor: option == 1 ? '#2195F2' : '#e7515a',
            pos: 'top-right',
        });
    }
</script>
<script src="{{asset('plugins/sweetalerts/sweetalert2.min.js')}}"></script>
@livewireScripts