</body>
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<script src="bootstrap/js/bootstrap.js"></script>
<script src="plugins/fastclick/fastclick.js"></script>
<script src="dist/js/app.js"></script>
<script src="plugins/datepicker/bootstrap-datepicker.js"></script>
<script src="plugins/daterangepicker/daterangepicker.js"></script>
<script src="plugins/daterangepicker/moments.js"></script>
<script src="plugins/select2/select2.min.js"></script>		
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script language="javascript" type="text/javascript" src="plugins/flot/jquery.flot.js"></script>
<script language="javascript" type="text/javascript" src="plugins/flot/jquery.flot.categories.js"></script>
<script language="javascript" type="text/javascript" src="plugins/flot/jquery.flot.orderBars.js"></script>
	

<script type="text/javascript">
$(function() {
    $('.date-picker').datepicker( {
        changeMonth: true,
        changeYear: true,
        showButtonPanel: true,
        dateFormat: 'MM yy',
        onClose: function(dateText, inst) { 
            $(this).datepicker('setDate', new Date(inst.selectedYear, inst.selectedMonth, 1));
        }
    });
});
</script>

</html>