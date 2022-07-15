<?php

$loginVerification=$this->session->userdata('logged_in');


if(!$loginVerification){

redirect("main/index");

}




?>




<!DOCTYPE html>
<html>
<head>
    <title> HCC DASHBOARD </title>
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
        alert("Record Successfully Changed")
      }
      function deleteRecord(){
        alert("Record Successfully Deleted")
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



    });
  </script>

  <style type="text/css" media="screen">
    .admin_container{
    padding-left: 10%;
}


  </style>

</head>
<body class = "dashboard-page">
  <script type = "text/javascript">
    var theme=$.cookie('protonTheme') || 'default';
    $('body').removeClass (function(index,css){
        return(css.match (/\btheme-\S+/g)|| []).join('');
    });
    if(theme !== 'default') $('body').addClass(theme);

  </script>

  <nav class = "main-menu">
    <ul>
      <li>
        <a href = "">
          <i class = "fa fa-home nav_icon"></i>
          <span class = "nav_text">Dashboard</span> </a>
       
      </li>

      <li class = "has-subnav">
        <a href = "">
          <i class = "fa fa-cogs" aria-hidden="true"></i>
          <span class = "nav-text">Components</span>
        <li class = "icon-angel-right"></li>
        <li class = "icon-angel-right"></li>  
        </a>
      </li>
      <li class = "has-subnav">
        <a href = "">
        <i class = "fa fa-check-square-o nav_icon"></i>
        <span class ="nav-text">Records</span>
        </a>

      </li>

      <li class = "has-subnav">
        <a href = "">
        <i class = "fa fa-file-text-o nav_icon"></i>
        <span class ="nav-text">Feeds</span>
        </a>
        
      </li>
      <li class = "has-subnav">
        <a href = "">
        <i class = "fa fa-list-ul nav_icon"></i>
        <span class ="nav-text">statistics</span>
        </a>
      </li>
      <li class = "has-subnav">
        <a href = "logout">
        <i class = "fa fa-list-ul nav_icon"></i>
        <span class ="nav-text">Log-Out</span>
        </a>
      </li>

      

    </ul>
  </nav>
<div class="main-grid">
  <div class="w3l_search">
    <?=form_open("main/searchUsers")?>
      <input type = "text" name ="key">
      <button type = "submit" value="SEARCH" class = "btn btn-warning">
      <i class="fa fa-search" aria-hidden="true"></i></button>
    </form>
  </div>
  
  <div class="header-right">
    <div class="profile_details_left">
      
    </div>
  </div> 

<br>


<br>
<table class="table table-hover">
  <tr>
    <th>USERID</th>
    <th>First Name</th>
    <th>Middle Initial</th>
    <th>Last Name</th>
    <th colspan="2">Details</th>
  </tr>

<?php
    if(isset($_POST['key'])){
    $key=$_POST['key'];
    $queryForUsers = $this->db->query("SELECT * FROM users where Fname like '{$key}%' or Lname like '{$key}%'");
    }else{
    $queryForUsers = $this->db->query("SELECT * FROM users");
    }


foreach ($queryForUsers->result() as $rowUsers):


?>
<tr>  <?php
      if(($rowUsers->user_type)=="ADMIN"){


      }else{


    ?>
    <td><?=$rowUsers->userID?></td>
    <td><?=$rowUsers->Fname?></td>
    <td><?=$rowUsers->Mi?></td>
    <td><?=$rowUsers->Lname?></td>
    <td><a class = "btn btn-warning" data-toggle="modal" data-target="#modalEdit<?=$rowUsers->userID?>" href="#modalEdit<?=$rowUsers->userID?>">EDIT</a></td>
    <td><a class = "btn btn-danger" data-toggle="modal" data-target="#modalDelete<?=$rowUsers->userID?>" href="#modalDelete<?=$rowUsers->userID?>">DELETE</a></td>


</tr>
<!--MODAL FOR EDIT-->
<div id="modalEdit<?=$rowUsers->userID?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Record</h4>
      </div>
      <div class="modal-body">

        <center>
        <?=form_open("main/updateUser/$rowUsers->userID")?>
        <?=form_hidden("date_modified",date("y_m_d H:i:s"))?>



      <input type = "password" name = "password" required value="<?=$rowUsers->password?>" minlength = "6"><br><br>
      <input type = "text" name = "Fname" required value="<?=$rowUsers->Fname?>" maxlength = "20"><br><br>
      <input type = "text" name = "Mi" required value="<?=$rowUsers->Mi?>" maxlength = "3"><br><br>
      <input type = "text" name = "Lname" required value="<?=$rowUsers->Lname?>" maxlength = "20"><br><br>

    </center>


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
<div id="modalDelete<?=$rowUsers->userID?>" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Delete Record</h4>
      </div>
      <div class="modal-body">

        <center>
        <?=form_open("main/deleteUser/$rowUsers->userID")?>

          <p>Do you want to delete this record permanently?</p>
     

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
      } 
endforeach;
?>
</table>
<!-- Modal -->

</div>
<body>
</html>