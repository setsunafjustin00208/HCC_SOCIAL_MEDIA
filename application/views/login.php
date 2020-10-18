
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log-In</title>
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/basictable.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/examples.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/font-awesome.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/ladda.min.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/lsb.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/monthly.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/morris.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/style.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/table-style.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url()?>bootstrap/css/typo.css" type="text/css">
    <style type="text/css">
    .errorMessage {
        padding: 8px;
        background-color: orange;
        border: solid 2px red;
        width: 60%;
        cursor: pointer;
        color: #fff;
        font-size: 14px;
        margin-top: 7%;
        -webkit-transition: all 1.5s ease-in-out;
        -moz-transition: all 1.5s ease-in-out;
        -o-transition: all 1.5s ease-in-out;
        }
        .message {
        padding: 8px;
        background-color: green;
        border: solid 2px greenyellow;
        width: 60%;
        cursor: pointer;
        color: #fff;
        font-size: 14px;
        margin-top: 7%;
        -webkit-transition: all 1.5s ease-in-out;
        -moz-transition: all 1.5s ease-in-out;
        -o-transition: all 1.5s ease-in-out;
        }
       .rounded-text-field{
           border-radius: 19px;
       }
       .img-logo{
        width: 32%;
        height: 32%;
       }

    </style>
</head>


<body class="signup-body">
<?php echo validation_errors(); ?>
<div class="agile-signup">
    <div class="class content2">
        <div class="class grids-heading gallery-heading signup-heading">
           <center> <img class="img-responsive img-logo" src="<?=base_url()?>bootstrap/images/hcc-new.png" alt=""></center>
           <div class="clearfix"></div>
            <h2>HCC LOGIN</h2>
        </div>
    <?=form_open("main/login")?>

                    <input class="rounded-text-field" type="text" name="Username"  placeholder="Username" required>
                    <input class="rounded-text-field" type="Password"  name="Password" placeholder="Password" required>
                    <input type="submit" class="register" value="LOG-IN">

    </form>
    <?php

if (isset($_SESSION['wrongLogIn'])) {
	$message = $_SESSION['wrongLogIn'];
	echo "<div><p class='errorMessage center-block'>" . $message . "</p></div>";
}
?>
    <div class="signin-text">
        <div class="text-left">
            <p class=""><a href="<?=site_url('main/register')?>">Register here</a>
            </p>
        </div>
        <div class="text-right">
            <p class=""><a href="<?=site_url('main/activation')?>">Activate Account</a>
            </p>
        </div>
    </div>



    </div>
    <div class="clearfix"></div>

    <div class="footer-icons">
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
            </ul>


    </div>
</div>
</body>
</html>