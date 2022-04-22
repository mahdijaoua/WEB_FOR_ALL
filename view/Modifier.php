<?php
include_once '../config.php';
include_once '../controller/servicec.php';

$db=config::getConnexion();
$sql="SELECT * FROM produit where id=?";
$recipesStatement = $db->prepare($sql);
$recipesStatement->execute([$_GET['id']]);
$prod=$recipesStatement->fetchall();


session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Back-end</title>
    <!-- HTML5 Shim and Respond.js IE10 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 10]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="description" content="Mega Able Bootstrap admin template made using Bootstrap 4 and it has huge amount of ready made feature, UI components, pages which completely fulfills any dashboard needs." />
    <meta name="keywords" content="bootstrap, bootstrap admin template, admin theme, admin dashboard, dashboard template, admin template, responsive" />
    <meta name="author" content="codedthemes" />
    <!-- Favicon icon -->
    <link rel="icon" href="../assets7/images/icon.png" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500" rel="stylesheet">
    <!-- waves.css -->
    <link rel="stylesheet" href="../assets7/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="../assets7/css/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="../assets7/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- themify icon -->
    <link rel="stylesheet" type="text/css" href="../assets7/icon/themify-icons/themify-icons.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="../assets7/icon/font-awesome/css/font-awesome.min.css">
    <!-- scrollbar.css -->
    <link rel="stylesheet" type="text/css" href="../assets7/css/jquery.mCustomScrollbar.css">
    <!-- am chart export.css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="../assets7/css/style.css">




    <script>
         function check(){
             var superficie=document.frm.superficie.value;
             if (isNaN(superficie)){
                 document.getElementById("msg").innerHTML="Entrez uniquement une valeur numérique";
                 return false;
             }else{
                 return true;
             }
         }
      </script>



</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="loader-track">
            <div class="preloader-wrapper">
                <div class="spinner-layer spinner-blue">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
                <div class="spinner-layer spinner-red">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-yellow">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>

                <div class="spinner-layer spinner-green">
                    <div class="circle-clipper left">
                        <div class="circle"></div>
                    </div>
                    <div class="gap-patch">
                        <div class="circle"></div>
                    </div>
                    <div class="circle-clipper right">
                        <div class="circle"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a class="mobile-menu waves-effect waves-light" id="mobile-collapse" href="#!">
                            <i class="ti-menu"></i>
                        </a>
                        <div class="mobile-search waves-effect waves-light">
                            <div class="header-search">
                              
                            </div>
                        </div>
                        <a href="index.html">
                            <img class="img-fluid" src="../assets7/images/logo.png" alt="Theme-Logo" height="15" width="147" />
                        </a>
                      
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li>
                                <div class="sidebar_toggle"><a href="javascript:void(0)"><i class="ti-menu"></i></a></div>
                            </li>
                          
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <a href="#!" class="waves-effect waves-light">
                                    <i class="ti-bell"></i>
                                    <span class="badge bg-c-red"></span>
                                </a>
                                <ul class="show-notification">
                                    <li>
                                        <h6>Notifications</h6>
                                        <label class="label label-danger">New</label>
                                    </li>
                                  
                                </ul>
                            </li>
                          
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="">
                              



                                <div class="main-menu-content">
                                    <ul>
                                        <li class="more-details">
                                            <a href="user-profile.html"><i class="ti-user"></i>View Profile</a>
                                            <a href="#!"><i class="ti-settings"></i>Settings</a>
                                            <a href="auth-normal-sign-in.html"><i class="ti-layout-sidebar-left"></i>Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="p-15 p-b-0">
                              

                            </div>
                           
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active">
                                    <a href="dash.php" class="waves-effect waves-dark">
                                        <span class="pcoded-micon"><i class="ti-home"></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                </li>
                                <li class="pcoded-hasmenu">
                                   
                                    </ul>
                                </li>
                            </ul>
                            <div class="pcoded-navigation-label" data-i18n="nav.category.forms">Tables</div>
                            <ul class="pcoded-item pcoded-left-item">

                           
						<li class="nav-item">
							<a  href="./produit.php">
								<i class="fas fa-layer-group"></i>
								<p>Produit</p>
								<!-- <span class="caret"></span> -->
							</a>
                            </li>

                         <li class="nav-item">
							<a  href="./categorie.php">
								<i class="fas fa-layer-group"></i>
								<p>categorie</p>
								<!-- <span class="caret"></span> -->
							</a>
                          </li>
                               

                            </ul>

                          
                    </nav>
                    <div class="pcoded-content">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-block">
                                <div class="row align-items-center">
                                    <div class="col-md-8">
                                        <div class="page-header-title">
                                            <h5 class="m-b-10">Dashboard</h5>
                                            <p class="m-b-0">Welcome to Mega Able</p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="breadcrumb-title">
                                            <li class="breadcrumb-item">
                                                <a href="index.html"> <i class="fa fa-home"></i> </a>
                                            </li>
                                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
		<!-- End Sidebar -->

		<div class="main-panel">
			<div class="content">
				<div class="page-inner">
				
    

                                <div id="pay-invoice">
                                    <div class="card-body">
                                        <div class="card-title">
        <div class="row">
          <div class="col-12">
            
            <div class="table-responsive">
          
            <form class="table align-items-center table-flush"  method="post" action="Modifierser.php" enctype="multipart/form-data" name ="frm" onsubmit="return check()">
        <center><legend><h2> Modifier
       <?php
     foreach ($prod as $res) {

      }
?>

        </h2></legend></center>
        <table id="example1" class="table table-striped">
        <tr>
          <input type="hidden" name="id"  value="<?php echo $res['id'] ?>">

          <th> couleur </th>
          <th><input id="couleur"type="text" name="couleur" value="<?php  echo $res['couleur']; ?>"/></th>
        </tr>
        
        <th>kilometrage</th>
          <th><input id="kilometrage" type="number" name="kilometrage" value="<?php echo $res['kilometrage']; ?>"/></th>
        </tr>
      </table>
        <br>
        <center>
        <td><button type="submit" name="Modifier" value="Modifier" class="btn btn-danger btn-sm">Modifier</button></td>
      </center>

      <span id="msg" style="color:red"></span>
      </form>
          </div>
          </div>
          </div>
       <table>
              </table>
              
            </div>
                                </div>

                            </div>
                        </div> <!-- .card -->

                    </div>
        
                    </div>
					</div>
				</div>
			</div>
</div>
			


</div>
                                
</div>
</div>
<!-- Page-body end -->
</div>
<div id="styleSelector"> </div>
</div>
</div> 
</div>
</div>
</div>
</div>
</div>



<script type="text/javascript" src="../assets7/js/jquery/jquery.min.js"></script>
<script type="text/javascript" src="../assets7/js/jquery-ui/jquery-ui.min.js "></script>
<script type="text/javascript" src="../assets7/js/popper.js/popper.min.js"></script>
<script type="text/javascript" src="../assets7/js/bootstrap/js/bootstrap.min.js "></script>
<script type="text/javascript" src="../assets7/pages/widget/excanvas.js "></script>
<!-- waves js -->
<script src="../assets7/pages/waves/js/waves.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="../assets7/js/jquery-slimscroll/jquery.slimscroll.js "></script>
<!-- modernizr js -->
<script type="text/javascript" src="../assets7/js/modernizr/modernizr.js "></script>
<!-- slimscroll js -->
<script type="text/javascript" src="../assets7/js/SmoothScroll.js"></script>
<script src="../assets7/js/jquery.mCustomScrollbar.concat.min.js "></script>
<!-- Chart js -->
<script type="text/javascript" src="../assets7/js/chart.js/Chart.js"></script>
<!-- amchart js -->
<script src="https://www.amcharts.com/lib/3/amcharts.js"></script>
<script src="../assets7/pages/widget/amchart/gauge.js"></script>
<script src="../assets7/pages/widget/amchart/serial.js"></script>
<script src="../assets7/pages/widget/amchart/light.js"></script>
<script src="../assets7/pages/widget/amchart/pie.min.js"></script>
<script src="https://www.amcharts.com/lib/3/plugins/export/export.min.js"></script>
<!-- menu js -->
<script src="../assets7/js/pcoded.min.js"></script>
<script src="../assets7/js/vertical-layout.min.js "></script>
<!-- custom js -->
<script type="text/javascript" src="../assets7/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="../assets7/js/script.js "></script>


<script>
	
	var today = new Date();
	var dd = today.getDate();
	var mm = today.getMonth()+1; //January is 0 so need to add 1 to make it 1!
	var yyyy = today.getFullYear();
	if(dd<10){
	  dd='0'+dd
	} 
	if(mm<10){
	  mm='0'+mm
	} 
	
	today = yyyy+'-'+mm+'-'+dd;
	document.getElementById("date").setAttribute("min", today);
	console.log(today);
	
	</script>
	


</body>
