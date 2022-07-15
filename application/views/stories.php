<?php
$loginVerification = $this->session->userdata('logged_in');
$loginVerificationuser = $this->session->userdata('user_type');

if (!$loginVerification) {
  redirect("main/index");

}
elseif (($loginVerificationuser) != "USER") {
  redirect("main/dashboard");

}


$userID = $this->session->userdata('userID');
$queryuserinfo = $this->db->query("SELECT * FROM users where userID = {$userID}");
foreach($queryuserinfo->result() as $rowinfo):
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
        margin-top: -5px;
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
        	text-align: justify;
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
    	.button-left{
   		 padding-left: 10px;
    	 height: 42px;
 		}
 		/* Header/Blog Title */
.header {
  padding: 30px;
  font-size: 40px;
  text-align: center;
  background: white;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {
  float: left;
  width: 75%;
}

/* Right column */
.rightcolumn {
  float: left;
  width: 25%;
  padding-left: 20px;
}

/* Fake image */
.fakeimg {
  background-color: #aaa;
  width: 100%;
  padding: 20px;
}

/* Add a card effect for articles */
.card {
  background-color: #1686E8;
  padding: 20px;
  margin-top: 20px;
}
.card-body{
  background-color: #FFFFFF80;
  padding: 20px;
  margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Footer */
.footer {
  padding: 20px;
  text-align: center;
  background: #ddd;
  margin-top: 20px;
}
.font-white{
  color: white;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
.edit-title{
	border-color: #7F7F7FFF;
	height: 35px;
	width: 300px;
	text-align: center;
}
.edit-text-area{
	height: 500px;
}
.react{
  background-color: #DEFFDBFF;
  padding-top: 15px;
  margin-top: 10px;
  padding-left: 15px;
  height: 50px;
  width: 400px;
}
.space{
  padding-left: 10px;
}
.sec{
        position: relative;
        right: -1px;
        top:-22px;
    }

    .counter-lg {
        top: -24px !important;
    }

 		
	</style>  
	
</head>
<body class = "dashboard-page">

	<nav class = "main-menu">
		<ul>
			<li class = "has-subnav">
				<a href = "<?=site_url('main/user_page')?>">
					<i class = "fa fa-home nav-icon"></i>
					<span class = "nav-text">Home</span>
				</a>
			</li>

			<li class = "has-subnav">
				<a href = "<?=site_url('main/profile')?>">
					<i class = "fa fa-user nav-icon" aria-hidden="true"></i>
					<span class = "nav-text">Profile</span>
				</a>
			</li>

			<li class = "has-subnav">
				<a href = "<?=site_url('main/messages')?>">
				<i class = "fa fa-envelope nav-icon"></i>
				<span class ="nav-text">Messages</span>
				</a>

			</li>

			<li class = "has-subnav">
				<a href = "<?=site_url('main/stories')?>">
				<i class = "fa fa-book nav-icon"></i>
				<span class ="nav-text">Stories</span>
				</a>

			</li>

      <li class = "has-subnav">
        <a href = "<?=site_url('main/events')?>">
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
                      <span class="prfil-img"><i class="fa fa-user" aria-hidden="true">
                      <?php
                          $queryConNotif = $this->db->query("SELECT COUNT(*) as notCon FROM connection where acceptor = '{$userID}' and is_confirm = 0");
                          $notCon = $queryConNotif->row();
                          
                          if (($notCon->notCon)>0) {
                            echo "<span class='badge'>$notCon->notCon</­span>"; 
                          }else{

                          }
                          ?></i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?=site_url('main/view_request')?>"><i class="fa fa-users"></i> Connections <?php
                          $queryConNotif = $this->db->query("SELECT COUNT(*) as notCon FROM connection where acceptor = '{$userID}' and is_confirm = 0");
                          $notCon = $queryConNotif->row();
                          
                          if (($notCon->notCon)>0) {
                            echo "<span class='badge'>$notCon->notCon</­span>"; 
                          }else{

                          }
                          ?></a></li>
                <li><a href="logout"><i class="fa fa-sign-out"></i> Log-out</a></li>

              </ul>
          </li>
      </ul>
      </div>
  </div>
  <div class="w3l_search text-right">
    <?=form_open("main/searchUser")?>
      <input type = "text" name ="key">
      <button type = "submit" value="SEARCH" class = "btn btn-warning button-left">
      <i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
  </div>
  <div class="">
   <h1 class="float-right headeradmin"><a href="<?=site_url('main/user_page')?>">&nbsp;<?=$rowinfo->Fname?></a></h1>
  </div>
</section>
<div class = "main-grid">
	<div class = "agile-grids">
		<div class = "progressbar-heading grids-heading">
			<h2> <i class="fa fa-book"></i> Stories</h2>
			<?php 
			if (isset($_SESSION['posted'])) {
	$message = $_SESSION['posted'];
	echo "<div><p class='message center-block text-center bg-primary'>" . $message . "</p></div>";
}
			 ?>
		</div>
	</div>

	<div class = "codes">
		<div class = "agile-container">
	

				<?php 
				$userID=$this->session->userdata('userID');
				$queryStories=$this->db->query("SELECT * FROM stories INNER JOIN users WHERE stories.userID = users.userID");
				foreach($queryStories->result() as $rowStory):

          if(($rowStory->userID)==$userID){

          }
          else{



				 ?>
				<div class="card">
				      <h2 class="font-white"><?=$rowStory->title?></h2>
              <br>
              <h4 class="font-white">By: <?=$rowStory->Fname?> <?=$rowStory->Mi?>. <?=$rowStory->Lname?></h4>
              <br>
				      <h5 class="font-white">Published at: <?=$rowStory->date_created?></h5>
              <br>
				      <h5 class="font-white">Edited at: <?=$rowStory->date_modified?></h5>
              <br>
				      <div class="card-body">
                <p class="font-grey"><?=$rowStory->body?></p>
				      </div>
              <br>
              <div class="react">
                
                <?php 
                $userID=$this->session->userdata('userID');
                $querylikes=$this->db->query("SELECT * FROM likes WHERE storyID='{$rowStory->storyID}' and userID = '{$userID}'");
                $countlikes=$this->db->query("SELECT COUNT(*) as counting FROM likes WHERE storyID='{$rowStory->storyID}'");
                      $counting=$countlikes->row();
                      $showcounts=$counting->counting;
                if($querylikes->num_rows()>0){
                  echo "<a href='storyunlikes/$rowinfo->userID/$rowStory->storyID'><i class='fa fa-thumbs-down'></i> $showcounts &nbsp;</a>";
                  

                }else{
                  echo "<a href='storylikes/$rowinfo->userID/$rowStory->storyID'><i class='fa fa-thumbs-up'></i> $showcounts &nbsp;</a>";
                
                }

                  ?>
                <?php
               $queryVerifyConnection=$this->db->query("SELECT * FROM connection where requestor = '{$userID}' and acceptor='{$rowStory->userID}'");
                 if ($queryVerifyConnection->num_rows()>0){
                 echo"<a href = 'abortRequest/$rowStory->userID'><i class='fa fa-minus'></i> ABORT CONNECTION&nbsp;</a>";
                }else{
                 echo"<a href = 'requestConnection/$rowStory->userID'><i class='fa fa-plus'></i> CONNECT&nbsp;</a>";
                  }?>

                 <a href="<?=site_url('main/comments')?>/<?=$rowStory->storyID?>/<?=$rowinfo->userID?>"><i class='fa fa-pencil'></i> COMMENT&nbsp;</a>
              </div>

    			</div>
 
    			 

			<?php 
      }
				endforeach;
        endforeach;
			 ?>

		</div>
	</div>
</div>
</section>

</body>
</html>