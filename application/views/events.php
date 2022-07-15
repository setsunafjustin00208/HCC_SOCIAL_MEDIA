<?php
$loginVerification = $this->session->userdata('logged_in');
$loginVerificationuser = $this->session->userdata('user_type');

if (!$loginVerification) {
  redirect("main/index");

}
elseif (($loginVerificationuser) != "USER") {
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
    <link href="<?=base_url()?>fullcalendar/lib/main.css" rel="stylesheet" />
    <script type = "text/javascript" src = "<?=base_url()?>bootstrap/js/jquery-3.5.1.js"></script>
    <script type = "text/javascript" src="<?=base_url()?>fullcalendar/lib/main.js"></script>
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
  padding-left: 25px;
  height: 50px;
  width: 250px;
}
.sec{
        position: relative;
        right: -1px;
        top:-22px;
    }

    .counter-lg {
        top: -24px !important;
    }

    #external-events {
  position: relative;
  z-index: 2;
  top: 20px;
  left: 20px;
  width: 250px;
  padding: 0 10px;
  border: 1px solid #ccc;
  background: #eee;
  overflow-y: scroll;
}

#external-events .fc-event {
  cursor: move;
  margin: 3px 0;
}

#calendar-container {
  position: relative;
  z-index: 1;
  margin-left: 200px;
}

#calendar {
  max-width: 1100px;
  margin: 20px auto;
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
				<a href = "">
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
                          $queryConNotif = $this->db->query("SELECT COUNT(*) as notCon FROM connection where acceptor = '{userID}' and is_confirm = 0");
                          $notCon = $queryConNotif->row();
                          
                          if (($notCon->notCon)>0) {
                            echo "<span class='badge'>$notCon->notCon</­span>"; 
                          }else{

                          }
                          ?>
                      </i></span>
                      <div class="clearfix"></div>
                  </div>
              </a>
              <ul class="dropdown-menu drp-mnu">
                <li><a href="#"><i class="fa fa-cog"></i> Settings</a></li>
                <li><a href="<?=site_url('main/view_request')?>"><i class="fa fa-users"></i> Connections<?php
                          $queryConNotif = $this->db->query("SELECT COUNT(*) as notCon FROM connection where acceptor = '{userID}' and is_confirm = 0");
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
   <h1 class="float-right headeradmin"><a href="<?=site_url('main/user_page')?>">&nbsp;<?=$userOnSession?></a></h1>
  </div>
</section>
<div class = "main-grid">
	<div class = "agile-grids">
		<div class = "progressbar-heading grids-heading">
			<h2> <i class="fa fa-calendar"></i> Events</h2>
		</div>
	</div>

	<div class = "codes">
		<div class = "agile-container">
      <script>
       
      document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
           headerToolbar: {
                        left: 'prev,next today',
                        center: 'title',
                        right: 'dayGridMonth,timeGridWeek,timeGridDay'},
          selectable: true,
           dateClick: function(info) {
            alert('clicked ' + info.dateStr);
          },
          select: function(info) {
          alert('selected ' + info.startStr + ' to ' + info.endStr);
        }
             
        });
        calendar.render();
      });
      </script>
          
      <div id="calendar"></div>
				

		</div>
	</div>
</div>
</section>

</body>
</html>