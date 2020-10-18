<?php

$loginVerification = $this->session->userdata('logged_in');
$loginVerificationuser = $this->session->userdata('user_type');

if (!$loginVerification) {
	redirect("main/index");

}
if (($loginVerificationuser) != "USER") {
	redirect("main/dashboard");

}
$userOnSession = $this->session->userdata('Fname');
$userID = $this->session->userdata('userID');
?>
<!DOCTYPE html>
<html>
<head>
		<title> USER PAGE </title>
		<link href = "<?=base_url()?>bootstrap/css/basictable.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/bootstrap.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/examples.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/font-awesome.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/font.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/ladda.min.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/lsb.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/monthly.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/morris.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/style.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/table-style.css" rel ="stylesheet" type = "text/css">
		<link href = "<?=base_url()?>bootstrap/css/typo.css" rel ="stylesheet" type = "text/css">

		<script type = "text/javascript" src = "<?=base_url()?>bootstrap/js/jquery.min.js"></script>
		<script type = "text/javascript" src = "<?=base_url()?>bootstrap/js/bootstrap.js"></script>

		<script type = "text/javascript">
			function message(){
				alert("Record Successfully Changed");
			}
			function deleteRecord(){
				alert("Record Successfully Deleted");
			}
		</script>

	<meta name = "viewport" content = "width=device-width, initial=1">
	<script type = "text/javascript" src = "<?=base_url()?>bootstrap/js/jquery2.0.3.min.js"></script>
	<script type = "text/javascript" src = "<?=base_url()?>bootstrap/js/modernizr.js"></script>
	<script type = "text/javascript" src = "<?=base_url()?>bootstrap/js/jquery.cookie.js"></script>
	<script type = "text/javascript" src = "<?=base_url()?>bootstrap/js/screenfull.js"></script>

	<script type ="text/javascript">
		$(function (){
			$('#supported').text('supported/allowed: ' +!!screenfull.enabled);

			if(!screenfull.enabled){
				return false;
			}

			$('#toggle').click(function(){
				screenfull.toggle($('#container')[0]);


			});


		return 0;
		});
	</script>

	<style type="text/css">
	.storyBody{
		height: 150px;
	}
	 .img-logo-smol{
        width: 55px ;
        height: 55px;
        margin-bottom: 75px;
    }
    .message {
        padding: 8px;
        width: 20%;
        margin-bottom: 20px;
        cursor: pointer;
        color: #fff;
        font-size: 14px;
        -webkit-transition: all 1.5s ease-in-out;
        -moz-transition: all 1.5s ease-in-out;
        -o-transition: all 1.5s ease-in-out;
        }
        textarea{
        	resize: none;
        	border-radius: 10px;
        	border-color: blue;
        	width: 1000px;
        	padding-top: 20px;
        	padding-left: 20px;
        }
        .create-button{
        	margin-left: 80px;
        }
        .border-rounded{
        	border-radius: 2px;
        }
        .border-color{
        	border-style: ridge;
        	border-color: blue;
        	border-radius: 10px;
        	width: 500px;
        	height: 40px;

        }
	</style>  
	
</head>
<body class = "dashboard-page">

	<nav class = "main-menu">
		<ul>
			<li class = "has-subnav">
				<a href = "">
					<i class = "fa fa-home nav-icon"></i>
					<span class = "nav-text">Home</span>
				</a>
			</li>

			<li class = "has-subnav">
				<a href = "">
					<i class = "fa fa-user nav-icon" aria-hidden="true"></i>
					<span class = "nav-text">Profile</span>
				</a>
			</li>

			<li class = "has-subnav">
				<a href = "">
				<i class = "fa fa-envelope nav-icon"></i>
				<span class ="nav-text">Messages</span>
				</a>

			</li>

			<li class = "has-subnav">
				<a href = "">
				<i class = "fa fa-book nav-icon"></i>
				<span class ="nav-text">Stories</span>
				</a>

			</li>

			<li class = "has-subnav">
				<a href = "">
				<i class = "fa fa-calendar nav-icon"></i>
				<span class ="nav-text">Events</span>
				</a>
			</li>
		</ul>

	</nav>
<section class = "wrapper scrollable">

<section class = "title-bar">
    <i class="d-block"><img class="img-responsive img-logo-smol logo mx-auto img-fluid float-left" src="<?=base_url()?>bootstrap/images/hcc-new.png"></i>
    <div class="profile_details_left">
    <div class="profile_details">
      <ul>
          <li class="dropdown profile_details_drop">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <div class="profile_img">
                      <span class="prfil-img"><i class="fa fa-user" aria-hidden="true"></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="#"><i class="fa fa-user"></i> Profile</a></li>
                <li><a href="logout"><i class="fa fa-sign-out"></i> Log-out</a></li>

              </ul>
          </li>
      </ul>
      </div>
  </div>
 <div class="W3l_search text-right">
    <?=form_open("main/searchUsers")?>
      <input type = "text" name ="key">
      <button type = "submit" value="SEARCH" class = "btn btn-warning">
      <i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
  </div>
  <div class="">
   <h1 class="float-right headeradmin"><a href="<?=site_url('main/user_page')?>"><?=$userOnSession?></a></h1>
  </div>
</section>
<div class = "main-grid">
	<div class = "agile-grids">
		<div class = "progressbar-heading grids-heading">
			<h2> <i class="fa fa-book"></i> Create your Story</h2>
			<?php 
			if (isset($_SESSION['message'])) {
	$message = $_SESSION['message'];
	echo "<div><p class='message center-block text-center bg-primary'>" . $message . "</p></div>";
}
			 ?>
		</div>
	</div>

	<div class = "codes">
		<div class = "agile-container">

			<?php

?>

			<?=form_open("main/createStory")?>
			<?=form_hidden("userID", ("$userID"))?>

				<input class="text-center center-block border-color" type = "text" name ="title" required maxlength="99" placeholder="Type title here... "></input>
				<br>
				<textarea name = "body" required placeholder="Say something... and I giving up on you" class = "storyBody center-block"></textarea>
				<br>
				<button type = "submit" class = "btn btn-primary create-button"><i class="fa fa-pencil-square-o"></i> Create!</button>
			</form>

		</div>
	</div>
</div>
</section>

</body>
</html>