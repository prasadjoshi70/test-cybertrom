<?php
ob_start();
session_start();
include("includes/connection.php");
include("includes/common.php");
$page = "Dashboard";

?>
<?php include("common/header.php"); ?> 
<?php include("common/aside.php"); ?>   
<!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">People</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

<!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
			  <a href="<?php echo $BASE_URL; ?>/org.php?mode=A" class="btn btn-block btn-info float-right">Add New</a>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>
                <tr>
                  <th>Photo </th>
                  <th>Name</th>
                  <th>Action </th>
                </tr>
                </thead>
                <tbody>
				<?php
            
                    $query2 = "SELECT * FROM people";
					$result2 = mysqli_query($conn, $query2);
					while($row2 = mysqli_fetch_object($result2))
					{ ?>
						<tr>
                          <td><img src="<?php echo $UPLOAD_URL.$row2->photo;?>" alt="photo" style="width:200px; height:200px;"></td>
						  <td><?php echo $row2->fname.' '.$row2->lname; ?></td>
						  <td><a href="<?php echo $BASE_URL; ?>/ajax.php?id=<?php echo $row2->id; ?>" class="btn btn-block btn-info float-right">Download</a></td>
						</tr>
						
					<?php } ?>
						
                </tbody>
              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 <script type="text/javascript">
  $(document).ready( function () {
    $('#example2').DataTable({"ordering": false,"fixedHeader": true,"pageLength": 5});
} );
</script>

<?php include("common/footer.php");  ?>  
