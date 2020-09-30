<!-- jQuery -->
<script src="{{ URL::asset('plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ URL::asset('plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ URL::asset('plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ URL::asset('dist/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ URL::asset('dist/js/demo.js') }}"></script>

<script>
    $(".delete").on("submit", function () {
        return confirm("Do you want to remove this?");
    });

    function showHideConfigurableAttributes() {
        var productType = $(".product-type").val();
            
        if (productType == 'configurable') {
            $(".configurable-attributes").show();
        } else {
            $(".configurable-attributes").hide();
        }
    }

    $(function(){
        showHideConfigurableAttributes();
        $(".product-type").change(function() {
            showHideConfigurableAttributes();
        });
    });
</script>