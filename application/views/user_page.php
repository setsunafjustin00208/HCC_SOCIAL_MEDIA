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
				alert("Story Successfully Changed");
			}
			function deleteRecord(){
				alert("Story Successfully Deleted");
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
.font-white{
  color: white;
}
.font-grey{
	color:#444444FF;
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

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
  .leftcolumn, .rightcolumn {
    width: 100%;
    padding: 0;
  }
}
.edit-title{
	border-color: #C826D8FF;
	height: 35px;
	width: 300px;
	text-align: center;
}
.edit-text-area{
	height: 500px;
}
.sec{
        position: relative;
        right: 10px;
        top:-23px;
    }

    .counter-lg {
        top: -14px !important;
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
                      <span class="prfil-img"><i class="fa fa-user" aria-hidden="true"><?php
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
                <li><a href="<?=site_url('main/view_request')?>"><i class="fa fa-users"></i> Connections

                  <?php
                          $queryConNotif = $this->db->query("SELECT COUNT(*) as notCon FROM connection where acceptor = '{$userID}' and is_confirm = 0");
                          $notCon = $queryConNotif->row();
                          
                          if (($notCon->notCon)>0) {
                            echo "<span class='badge sec counter-lg'>$notCon->notCon</­span>"; 
                          }else{

                          }

                          ?>

                </a></li>
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
			<h2> <i class="fa fa-book"></i> Create your Story</h2>
			<?php 
			if (isset($_SESSION['posted'])) {
				$message = $_SESSION['posted'];
				echo "<div><p class='message center-block text-center bg-primary'>" . $message . "</p></div>";
			}elseif (isset($_SESSION['message'])) {
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

				<input type="hidden" name="username" value="<?=$rowinfo->username?>">
				<input class="text-center center-block border-color" type = "text" name ="title" required maxlength="99" placeholder="Type title here... "></input>
				<br>
				<textarea name = "body" required placeholder="Say something... and I giving up on you" class = "storyBody center-block"></textarea>
				<br>
				<button type = "submit" class = "btn btn-primary create-button"><i class="fa fa-pencil-square-o"></i> Create!</button>
			</form>
			<div class="clearfix"></div>
				<br><br>

				<?php 
				$userID=$this->session->userdata('userID');
				$queryStories=$this->db->query("SELECT * FROM stories WHERE userID = {$userID}");

				foreach($queryStories->result() as $rowStory):

				 ?>
				<div class="card">
					<div class="text-right">
				      	<a class="btn btn-warning" data-toggle="modal" data-target="#modal<?=$rowStory->storyID?>"  href="#modal<?=$rowStory->storyID?>"><i class="fa fa-edit" aria-hidden="true"></i></a>
						<a class="btn btn-danger" data-toggle="modal" data-target="#modalDelete<?=$rowStory->storyID?>"  href="#modalDelete<?=$rowStory->storyID?>" href="#"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
				      </div>
				      <h2 class="font-white"><?=$rowStory->title?></h2>
				      <h5 class="font-white">Published at: <?=$rowStory->date_created?></h5>
				      <h5 class="font-white">Edited at: <?=$rowStory->date_modified?></h5>
				      <div class="card-body">
				      	<p class="font-grey"><?=$rowStory->body?></p>
				      </div>
    			</div>
  <!--MODAL FOR EDIT-->
<div id="modal<?=$rowStory->storyID?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Story</h4>
      </div>
      <div class="modal-body">

        <center>
        <?=form_open("main/updateStory/$rowStory->storyID")?>
        <input type="hidden" name="date_modified" value="<?=date("y_m_d H:i:s")?>">

        <input type="text" name="title" class="edit-title" value="<?=$rowStory->title?>">
        <div class="clearfix"></div>
        <br>
        <textarea class="edit-text-area" name="body"><?=$rowStory->body?> </textarea>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-success" value = "Save" onClick = "message()">
        </form>

        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
<!--END MODAL EDIT-->

<!--MODAL DELETE-->
<div id="modalDelete<?=$rowStory->storyID?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Record</h4>
      </div>
      <div class="modal-body">

        <center>
        <?=form_open("main/deleteStory/$rowStory->storyID")?>

            <p>Do you want to delete this Story permanently?</p>


        </center>

      </div>
      <div class="modal-footer">
        <input type="submit" class="btn btn-danger" value = "YES" onClick = "deleteRecord()">
        </form>

        <button type="button" class="btn btn-default" data-dismiss="modal">CANCEL</button>
      </div>
    </div>

  </div>
</div>

<!--END OF MODAL DELETE-->
    			 

			<?php 
				endforeach;
				endforeach;
			 ?>

		</div>
	</div>
</div>
</section>

</body>
</html>