<?php 

include ("../title.php");
include ("../footerinfo.php");

?>


<!doctype html>
<html>

<head>
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><?php echo $titile;?></title>
    <link href='login/bootstrap.min.css' rel='stylesheet'>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
    <link href='login/style.css' rel='stylesheet'>
    <script type='text/javascript' src='login/jquery.min.js'></script>



</head>

<body oncontextmenu='return false' class='snippet-body'>
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        <div class="row"> <img src="login/logo.png" class="logo"> </div>
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="login/login.png" class="image"> </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
                            <h6 class="mb-0 mr-4 mt-2">Welcome for Signup </h6>
                        </div>
                        <div class="row px-3 mb-4">
                        <div class="line"></div> <small class="or text-center">||</small>
                            <div class="line"></div>
                        </div>
                       
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">User Name</h6>
                            </label>
                             <input class="mb-4" type="text" name="name" placeholder="Enter User Name"> 
                        </div>
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Email Address</h6>
                            </label>
                             <input class="mb-4" type="text" name="email" placeholder="Enter a valid email address"> 
                        </div>
                        <div class="row px-3"> 
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Password</h6>
                            </label>
                             <input class="mb-4" type="password" name="pawd" placeholder="Enter Password"> 
                        </div>
                        <div class="row px-3"> 
                        <label class="mb-1">
                                <h6 class="mb-0 text-sm">Confirmation Password</h6>
                            </label> 
                            <input type="password" name="cpswd" placeholder="Enter Same Password"> 
                        </div>
                        
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Register</button> </div>
                        <div class="row mb-4 px-3"> <small class="font-weight-bold">Have an account? <a href= "index.php"class="text-danger "> Singin</a></small> </div>
                    </div>
                </div>
            </div>
           
        </div>
    </div>
    <script type='text/javascript' src='login/bootstrap.bundle.min.js'></script>
    <script type='text/javascript'></script>
</body>

</html>