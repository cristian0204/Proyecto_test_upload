<?php 
$con = mysqli_connect("localhost","root","","colleges");
 ?>

 <!DOCTYPE	html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1//DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 	<meta charset="utf-8">
 	<title>Unititled Document</title>
 </head>

 <body>
 	
 <?php 
 
 $q = "select * from videoup";
 $query = mysqli_query($con,$q);
 while ($row=mysqli_fetch_assoc($query)) {

 	$id = $row['id'];
 	$name = $row['name'];
 	echo"<a href='watch.php?id=$id'>$name</a><br>";
 }

 ?>	

 </body>
 
 </html>




 <!---------------------------------------------------------------------------------------------------------->

 <!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Centro de Documentación Finding Tc || Roles de usuarios </title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   
    <link rel="stylesheet" href="menu/css/tree-viewer.css">


 

    <!-- Fontfaces CSS-->
    <link href="admin/css/font-face.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="admin/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="admin/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="admin/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="admin/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="admin/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="admin/css/theme.css" rel="stylesheet" media="all">

       <!-------------------------->

<link rel="stylesheet" href="css/modals.css">

<style type="text/css">
    @media (min-width: 768px) {
        #modal-content {
            -webkit-box-shadow: 0 2px 3px rgba(0, 0, 0.125);
            box-shadow: 0 2px 3px rgba(0, 0, 0, 0.125);
            width: 150%;
            top: 5%;
            left: -23%;
            margin-top: 5%;
        }
    }

</style>


<!-------------------------->

</head>

<body class="animsition" style="background-color: #e5e5e5">
<div class="page-wrapper">

     
            <!-- HEADER DESKTOP-->
              <header>
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap"  style="float: right;">
                            
                            <div class="header-button">
                               
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                       
                                        <div class="content">
                                            <a class="js-acc-btn" >usuario</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">

                                            
                                                <div class="account-dropdown__footer">
                                                    <a  href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();"><i class="zmdi zmdi-power"></i>Cerrar Sesión</a>
                                                </div>                                                    

                                                    

                                                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">

                                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                               onclick="event.preventDefault();
                                                                             document.getElementById('logout-form').submit();">
                                                                {{ __('Cerrar Sesión') }}
                                                                </a>

                                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                                @csrf
                                                                </form>
                                                            </div>
                                                                                                                 
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
          
                    <div class="main-content">
                        <div class="section__content section__content--p30">
                            <div class="container-fluid">
                           
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="au-card chart-percent-card">
                                            <div class="au-card-inner">
                                                <div class="logo" style="background-color:white" >
                                                    <a target="_blank" href="http://findingtc.com/">
                                                        <img style="height: 50px" src="img/logo-finding1.png" alt="Cool Admin" />
                                                    </a>
                                                </div> <br>
                                                <h3 class="title-2 tm-b-5">Centro de docuemntación | videos</h3> <br>
                                                <div class="row no-gutters">
                                                       <div class="col-md-12">
                                                            <div class="table-responsive table-responsive-data2">
                                                               
                                                                <table class="table table-data2">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>Titulo</th>                           
                                                                            <th>Descripción</th>
                                                                            <th>Categoria</th>
                                                                            <th></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>


                                                                        
                                                                        <tr class="tr-shadow">
                                                                            <td>
                                                                                	<?php 
																					 $q = "select * from videoup";
																					 $query = mysqli_query($con,$q);
																					 while ($row=mysqli_fetch_assoc($query)) {

																					 	$id = $row['id'];
																					 	$name = $row['name'];
																					 	echo"<a href='watch.php?id=$id'>$name</a><br>";
																					 }

																					 ?>	
                                                                                
                                                                            </td>

                                                                            <td><span class="block-email" >Descripción</span></td>

                                                                            <td><span class="block-email" >Categoria</span></td>
                                                                            
                                                                            <td>
                                                                                <div class="table-data-feature">
                                                                                    <button class="item" href="#" data-toggle="modal" data-target="#reproducion">
                                                                                         <i class="zmdi zmdi-play"></i>
                                                                                     </button>
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                       
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>                                                  
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="modal fade" id="reproducion" tabindex="-1" role="dialog" aria-labelledby="mediumModalLabel" aria-hidden="true">
                     <div class="modal-dialog modal-lg" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel">Titulo del video</h5>
                                   <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                   </button>
                            </div>

                            <div class="modal-body">
                                <center>
                                <iframe width="600" height="415" src="https://www.youtube-nocookie.com/embed/7TezZ2JbvZs" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" fullscreen></iframe>
                                </center>
                         
                            </div>                     
                        </div>
                    </div>
                </div>



                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright © 2019 Finding Tc. Todos los derechos reservados.</p>
                                </div>
                            </div>
                        </div>
      


</div> 



    <!-- Jquery JS-->
    <script src="admin/vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="admin/vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="admin/vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="admin/vendor/slick/slick.min.js">
    </script>
    <script src="admin/vendor/wow/wow.min.js"></script>
    <script src="admin/vendor/animsition/animsition.min.js"></script>
    <script src="admin/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="admin/vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="admin/vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="admin/vendor/circle-progress/circle-progress.min.js"></script>
    <script src="admin/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="admin/vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="admin/vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="admin/js/main.js"></script>

<!----------------------------------------------------------->

    <script src="js/sweetalert2.all.min.js"></script>
    <script src="js/sweetalert2.min.js"></script>
    <link rel="stylesheet" href="js/sweetalert2.min.css">

<!----------------------------->
 
    <script src="menu/js/jstree.min.js"></script>
    <script src="menu/js/jstree.active.js"></script>

<!----------------------------->

</body>

</html>
<!-- end document-->
