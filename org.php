<?php
ob_start();
session_start();
include("includes/connection.php");
include("includes/common.php");
$page = "People";
//print_r($_SESSION['name']);
//die();
		
			if(isset($_REQUEST['Submit']))
			{	

					if($_REQUEST['mode']=="A")
					{
                        if($_FILES["fileupload"]["name"]!="") 
				        {
								$dot = strpos($_FILES["fileupload"]["name"],".");
								$fname = substr($_FILES["fileupload"]["name"],0,$dot);
								$ext = substr($_FILES["fileupload"]["name"],$dot);
				
								$attachment = $fname.date("d-m-Y-h-i-s").$ext;
					
								if (file_exists($UPLOAD_URL . $attachment)) 
								{
									$msg =  $attachment . " already exists. ";
								} 
								else 
								{
									
									move_uploaded_file($_FILES["fileupload"]["tmp_name"], $UPLOAD_URL.$attachment);
									chmod($UPLOAD_URL. $attachment, 0766);
                                }
				        }
						
						$fname = mysqli_real_escape_string($conn,$_POST['fname']);
                        $lname = mysqli_real_escape_string($conn,$_POST['lname']);
						$address = mysqli_real_escape_string($conn,$_POST['address']);
						$email = mysqli_real_escape_string($conn,$_POST['email']);
						
						$query = "INSERT INTO people(fname, lname, address, email, photo) VALUES('$fname','$lname','$address','$email', '$attachment')";	
						$result = mysqli_query($conn, $query);
						if($result) {
							$message = "<span class='notification n-success'>Data added successfully</span>";
						}
						$fname="";
                        $lname="";
						$address="";
						$email="";						
					}
				}
		

?>

<?php include("common/header.php"); ?> 
<?php include("common/aside.php"); ?>  

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
              
			  <?php if(isset($_REQUEST['Submit'])){	echo $message; } ?>
			  

			
            </div>
            <!-- /.card-header -->
            <!-- general form elements disabled -->
            <div class="card card-warning">
              
              <!-- /.card-header -->
              <div class="card-body">
			  
                <form action="" method="post" enctype="multipart/form-data" method="post">
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" required name="fname" class="form-control" placeholder="Enter First Name" />
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" required name="lname" class="form-control" placeholder="Enter Last Name"/>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- textarea -->
                      <div class="form-group">
                        <label>Address</label>
                        <textarea class="form-control" required name="address" rows="3" placeholder="Enter Address" ></textarea>
                      </div>
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <!-- text input -->
                      <div class="form-group">
                        <label>Email</label>
                        <input type="text" required name="email" class="form-control" placeholder="Enter E-mail"/>
                      </div>
                    </div> 
                  </div>
                  <div class="row">
                  <div class="col-sm-6">
                      <!-- text input -->
						 <div class="form-group">
							<label for="exampleInputFile">Upload Photo</label>
							 <div class="form-group">
								<input type="file" id="fileupload" name="fileupload">
							</div>
						 </div>
                    </div> 
                    </div>
				 	
				  <div class="row">
                    <div class="col-sm-6">
                      <!-- radio -->
                      <div class="form-group">
						
                        <div class="form-check">
                          <input type="submit" name="Submit" value="submit" class="btn btn-block btn-info float-right"/>
                          
                        </div>
                      </div>
                    </div>
                  </div>
				  
				
	
                </form>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
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
  
  <?php include("common/footer.php"); ?> 