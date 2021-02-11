<!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link text-center">
     
    </a>

    <!-- Sidebar -->
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        
        
        <div class="info">
           <a href="<?php echo $BASE_URL; ?>/myprofile.php?mode=E" class="d-block">Welcome, <?php echo $_SESSION['name']; ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			   
			
			<li class="nav-item">
            <a href="<?php echo $BASE_URL; ?>/dashboard.php" class="nav-link">
              <i class="nav-icon fas fa-th"></i>
              <p>
               Dashboard
              </p>
            </a>
            </li>  
		   
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>