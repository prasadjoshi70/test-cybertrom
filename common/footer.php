  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.0.0-rc.5
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<!-- <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/assets/jquery-ui.css"> -->
 <!-- <script src="<?php echo $BASE_URL; ?>/assets/jquery-1.12.4.js"></script> -->
  <!-- <script src="<?php echo $BASE_URL; ?>/assets/jquery-ui.js"></script> -->
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>

<!-- Bootstrap 4 -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo $BASE_URL; ?>/assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/moment/moment.min.js"></script>
<!--<script src="<?php echo $BASE_URL; ?>/assets/plugins/daterangepicker/daterangepicker.js"></script>-->
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo $BASE_URL; ?>/assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<<?php echo $BASE_URL; ?>/assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo $BASE_URL; ?>/assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo $BASE_URL; ?>/assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo $BASE_URL; ?>/assets/dist/js/demo.js"></script>
 <script type="text/javascript" src="<?php echo $BASE_URL; ?>/assets/typeahead.js"></script>
 <!-- <script type="text/javascript" src="<?php echo $BASE_URL; ?>/assets/jquery.min.js"></script> -->
 <script type="text/javascript" src="<?php echo $BASE_URL; ?>/assets/datepicker.min.js"></script>
 <script type="text/javascript" src="<?php echo $BASE_URL; ?>/assets/datepicker.en.js"></script>
<!--
 <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
 <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
-->


<!--<script src="https://code.jquery.com/jquery-3.5.1.js"></script> -->
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script> 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>
<script src="<?php echo $BASE_URL; ?>/assets/jquery.table2excel.js"></script>	
		
<script>
$(".exportToExcel").click(function(){
	var myfilename = jQuery(this).attr("id");
	//alert(myfilename);
	//alert(myfilename);
  $(".table2excel").table2excel({
    // exclude CSS class
    exclude: ".noExl",
    name: "Worksheet Name",
    filename: myfilename, //do not include extension
    fileext: ".xls" // file extension
  }); 
});
</script>
			
</body>
</html>