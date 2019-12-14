<?php
    session_start();

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

<?php
        //รับข้อมูลจาก Form Register
        include("connect.php");
        if(isset($_POST['submit'])){ //check is it is posted back
            // รับข้อมูลจาก Form
            $carType = $_POST['carType'];
            $brand = $_POST['brand'];
            $model = $_POST['model'];
            $color = $_POST['color'];
            $license = $_POST['license'];
            $province = $_POST['province'];
            $modelYear = $_POST['modelYear'];
            $price = $_POST['price'];

            //echo "$firstname $lastname $username $password $email";
            //insert to table
            $sqlInsert = "INSERT INTO customer (firstname, lastname, username, password,email,active) VALUE('$firstname','$lastname','$username','$password','$email','0')";
            //echo $sqlInsert;
            //$mysqli_query
            $result = $con->query($sqlInsert);
            if($result){
                //เมื่อ Register สำเร็จ
                echo "<script> alert('Register Complete'); </script>";
                header("location: login.php");
            }
            else{
                echo "Error during insert: " .$con->error;
            }
        } 
    ?>
    <div class="container">
        <div class="row">
            <form action="" method="post">
                <div class="col-md-8 col-md-offset-2" style="margin-top:50px;">
                    <div class="panel panel-info">
                        <div class="panel-heading text-center">
                            เพิ่มรถ
                        </div>
                        <div class="panel-body">

                        <div class="form-group row">
                                <label for="carType" class="col-md-3">ประเภทรถ : </label>
                                <div class="col-md-9">
                                    <input type="number" name="carType" class="form-control">
                                </div>
                            </div>
                
                            <div class="form-group row">
                                <label for="brand" class="col-md-3">Brand : </label>
                                <div class="col-md-9">
                                    <input type="text" name="brand" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="model" class="col-md-3">Model : </label>
                                <div class="col-md-9">
                                    <input type="email" name="model" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="color" class="col-md-3">Color : </label>
                                <div class="col-md-9">
                                    <input type="text" name="color" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="license" class="col-md-3">License : </label>
                                <div class="col-md-9">
                                    <input type="email" name="license" class="form-control">
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="province" class="col-md-3">Province : </label>
                                <div class="col-md-9">
                                    <input type="email" name="province" class="form-control">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="modelYear" class="col-md-3">ModelYear : </label>
                                <div class="col-md-9">
                                    <input type="email" name="modelYear" class="form-control">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label for="price" class="col-md-3">Price : </label>
                                <div class="col-md-9">
                                    <input type="email" name="price" class="form-control">
                                </div>
                            </div>
                        
                        </div>
                        <div class="panel-footer">
                            <button type="submit" class="btn btn-success btn-block" name="submit">เพิ่ม</button>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
