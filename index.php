<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Free Bootstrap Admin Template : Binary Admin</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
     <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Binary Admin</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">  &nbsp;  </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
				
					
                    <li>
                        <a class="active-menu"  href="index.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                     <li>
                        <a  href="index.php?halaman=showbarang"><i class="fa fa-desktop fa-3x"></i> barang</a>
                    </li>
                    <li>
                        <a  href="index.php?halaman=showmember"><i class="fa fa-qrcode fa-3x"></i> member</a>
                    </li>
						   <li  >
                        <a   href="index.php?halaman=showsupplier"><i class="fa fa-bar-chart-o fa-3x"></i> supplier</a>
                    </li>	
                      <li  >
                        <a  href="index.php?halaman=showpinjam"><i class="fa fa-table fa-3x"></i> pinjam</a>
                    </li>
                    	
                
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <?php 
                if (isset($_GET['halaman']))
                {
                    if ($_GET['halaman']=="index")
                    {
                        include "index.php";
                    }
                    elseif ($_GET['halaman']=="showbarang") {
                        include 'barang.php';
                    }
                    elseif ($_GET['halaman']=="addbarang") {
                        include 'addbarang.php';
                    }
                    elseif ($_GET['halaman']=="updatebarang") {
                        include 'updatebarang.php';
                    }
                    elseif ($_GET['halaman']=="deletebarang") {
                        include 'deletebarang.php';
                    }
                     elseif ($_GET['halaman']=="showmember") {
                        include 'member.php';
                    }
                    elseif ($_GET['halaman']=="addmember") {
                        include 'addmember.php';
                    }
                    elseif ($_GET['halaman']=="updatemember") {
                        include 'updatemember.php';
                    }
                    elseif ($_GET['halaman']=="deletemember") {
                        include 'deletemember.php';
                    }
                     elseif ($_GET['halaman']=="showsupplier") {
                        include 'supplier.php';
                    }
                    elseif ($_GET['halaman']=="addsupplier") {
                        include 'addsupplier.php';
                    }
                    elseif ($_GET['halaman']=="updatesupplier") {
                        include 'updatesupplier.php';
                    }
                    elseif ($_GET['halaman']=="deletesupplier") {
                        include 'deletesupplier.php';
                    }
                    elseif ($_GET['halaman']=="showpinjam") {
                        include 'pinjam.php';
                    }
                    elseif ($_GET['halaman']=="addpinjam") {
                        include 'addpinjam.php';
                    }
                    elseif ($_GET['halaman']=="updatepinjam") {
                        include 'updatepinjam.php';
                    }
                    elseif ($_GET['halaman']=="deletepinjam") {
                        include 'deletepinjam.php';
                    }
                }
                    ?>    
                 <!-- /. ROW  -->
                  <hr />
                
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
