<?php
    session_start();
    include("connect.php");
    if(!isset($_GET['pid'])||$_GET['pid']==""){
        header("Location: index.php");
    }
    else{
        $pid = $_GET['pid'];
    }
    $sql="SELECT * FROM car WHERE id =$pid";
    $result = $con->query($sql);
    if(!$result){
        echo "Error : " .$con->error;
    }
    else{
        if($result->num_rows>0){
            $prd =$result->fetch_object();
        }
        else{
            $prd=NULL;
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Soi5 Used Cars 006</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/startmin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="js/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/startmin.js"></script>

</head>
<body>
<nav class="navbar navbar-default">
<div id="wrapper">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="navbar-header">
            <a class="navbar-brand" href="#">Soi 5 Used Cars 006</a>
        </div>

        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>

        <!-- Top Navigation: Left Menu -->
        <ul class="nav navbar-nav navbar-left navbar-top-links">
            <li><a href="index.php"><i class="fa fa-home fa-fw"></i> หน้าหลัก</a></li>
        </ul>

        <!-- Top Navigation: Right Menu -->
        <ul class="nav navbar-right navbar-top-links">

        <?php
        if(isset($_SESSION['id'])){
        ?>
        
            
            <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                    <i class="fa fa-user fa-fw"></i> <?php echo $_SESSION['name'] ?> <span class="caret"></span>
                    <li><a href="logout.php">Logout</a></li>
                </a>
                <ul class="dropdown-menu">
                        <li><a href="#">Profile</a></li>
                        <li><a href="#">Setting</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="logout.php">Logout</a></li>
                    </ul>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-shopping-cart fa-fa"></i> (0)
                </a>
            </li>
            <?php
                    }
                    else{
                    ?>

                    <li><a href="login.php"><i class="fa fa-lock fa-fw"></i>เข้าสู่ระบบ</a></li>

                    <?php
                    }
                    ?>
        </ul>
        </nav>
        <!-- Sidebar -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="text-center">
                        <a href="#s">รถยนต์ของเรา</a>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-car fa-fw"></i> รถทุกประเภท</a>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-car fa-fw"></i> รถเก๋ง</a>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-truck fa-fw"></i> รถกระบะ</a>
                    </li>
                    <li>
                        <a href="#" class="active"><i class="fa fa-truck fa-fw"></i> รถตู้</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

<div class="container">
    <h2>Edit Product</h2>
    <div class="row">
        <div class="col-md-6">
            <div class="thumbnail">
                <img src="image/cars/<?php echo $prd->carpic; ?>" alt="">
            </div>
        </div>
        <div class="col-md-6">
            <form action="updateproduct.php" class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="brand" class="control-label col-md-3">Brand:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtName" class="form-control" value="<?php echo $prd->brand;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="model" class="control-label col-md-3">Model:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtModel" class="form-control" value="<?php echo $prd->model;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="color" class="control-label col-md-3">Color:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtColor" class="form-control" value="<?php echo $prd->color;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="price" class="control-label col-md-3">ราคา:</label>
                    <div class="col-md-9">
                        <input type="text" name="txtPrice" class="form-control" value="<?php echo $prd->price;?>">
                    </div>
                </div>

                <div class="form-group">
                    <label for="picture" class="control-label col-md-3">Car Picture:</label>
                    <div class="col-md-9">
                        <input type="file" name="filepic" class="form-control-file" accept="image/*">  
                    </div>
                        
                </div>

                <div class="form-group">
                    <div class="col-md-9 col-md-offset-3">
                        <input type="hidden" name="hdnProductId" value="<?php echo $prd->id;?>">
                        <button type="submit" class="btn btn-primary">Save</button>
                        <button type="reset" class="btn btn-danger">Reset</button>
                    </div>
                </div>

            </form>
            </div>
        </div>
    </div>
</body>
</html>
