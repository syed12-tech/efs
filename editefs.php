<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="CoreUI Pro - Bootstrap 4 Admin Template">
  <meta name="author" content="Łukasz Holeczek">
  <meta name="keyword" content=",">
  <link rel="shortcut icon" href="img/favicon.png">
  <title>EFS</title>
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
  <!-- Icons -->
  <link href="vendors/css/flag-icon.min.css" rel="stylesheet">
  <link href="vendors/css/font-awesome.min.css" rel="stylesheet">
  <link href="vendors/css/simple-line-icons.min.css" rel="stylesheet">
  <link href="https://www.w3schools.com/w3css/4/w3.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script src="jQueryAssets/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>


  <!-- Main styles for this application -->
  <link href="css/style.css" rel="stylesheet">

  <!-- Styles required by this views -->
<style type="text/css">
  .error
{
  color: red;
  size: 80%
}
.hidden
{
  display:none;
}

</style>
</head>

<!-- BODY options, add following classes to body to change options

// Header options
1. '.header-fixed'					- Fixed Header

// Brand options
1. '.brand-minimized'       - Minimized brand (Only symbol)

// Sidebar options
1. '.sidebar-fixed'					- Fixed Sidebar
2. '.sidebar-hidden'				- Hidden Sidebar
3. '.sidebar-off-canvas'		- Off Canvas Sidebar
4. '.sidebar-minimized'			- Minimized Sidebar (Only icons)
5. '.sidebar-compact'			  - Compact Sidebar

// Aside options
1. '.aside-menu-fixed'			- Fixed Aside Menu
2. '.aside-menu-hidden'			- Hidden Aside Menu
3. '.aside-menu-off-canvas'	- Off Canvas Aside Menu

// Breadcrumb options
1. '.breadcrumb-fixed'			- Fixed Breadcrumb

// Footer options
1. '.footer-fixed'					- Fixed footer

-->

<body class="app header-fixed sidebar-fixed aside-menu-fixed aside-menu-hidden">
  <header class="app-header navbar">
    
  </header>
  <div class="app-body">
    <div class="sidebar">
      <nav class="sidebar-nav">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="index.php"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-info">NEW</span></a>
          </li>

          <li class="nav-title">
            Theme
          </li>
<!--           <li class="nav-item">
            <a href="colors.html" class="nav-link"><i class="icon-drop"></i> Colors</a>
          </li>
          <li class="nav-item">
            <a href="typography.html" class="nav-link"><i class="icon-pencil"></i> Typograhy</a>
          </li> -->
          <li class="nav-title">
            Components
          </li>
          

        </ul>
      </nav>
      <button class="sidebar-minimizer brand-minimizer" type="button"></button>
    </div>
    <!-- Main content -->
    <main class="main">

      <!-- Breadcrumb -->
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Home</li>
        <li class="breadcrumb-item"><a href="#">Admin</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
        <!-- Breadcrumb Menu-->
        <li class="breadcrumb-menu d-md-down-none">
          <div class="btn-group" role="group" aria-label="Button group with nested dropdown">
            <a class="btn" href="#"><i class="icon-speech"></i></a>
            <a class="btn" href="./"><i class="icon-graph"></i> &nbsp;Dashboard</a>
            
          </div>
        </li>
      </ol>

<form action="updateemployee.php" method="post">
<center>
  <?php
      $id=$_GET['id'];
      include 'connect.php';
      $s=mysqli_query($con,"select * from employee where id='$id'");
      $r=mysqli_fetch_array($s);
      $role=$r['role'];
      $ss=mysqli_query($con,"select * from role_master where id='$role'");
      $rr=mysqli_fetch_array($ss);
  ?>

      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="">
            <div class="">
              <div class="card" style="width: 80%; text-align: left;">
                <div class="card-header">
                  <strong>Edit Employee Details</strong>
                  <small>Form</small>
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Employee Name</label>
                         <input type="hidden" class="form-control"  name="slno" value="<?php  echo $r['id']?>" placeholder="Enter your employee name" required="">

                        <input type="text" class="form-control" id="name" name="ename" value="<?php  echo $r['employeename']?>" placeholder="Enter your employee name" required="">
                       
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Designation</label>
                        <input type="text" class="form-control" id="ccnumber" name="designation" value="<?php  echo $r['designation']?>" placeholder="Enter designation" required="">
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="form-group col-sm-6">
                      <label for="ccmonth">Role</label>
                      <select class="form-control" id="ccmonth" name="role" required="">
                        <option selected=""  value="<?php  echo $r['role']?>"><?php  echo $rr['role']?></option>
                        <?php
                        include 'connect.php';
                        $sql=mysqli_query($con,"select * from role_master");
                        while($row=mysqli_fetch_array($sql))
                        {
                        ?>
                        <option value="<?php echo $row['id']; ?>" > <?php echo $row['role']; ?></option>
                       
                       <?php
                     }
                       ?>
                       
                      </select>
                    </div>

                    <div class="form-group col-sm-6">
                      <label for="ccyear">Phone Number</label>
                      <input type="text" class="form-control" id="myform_phone" value="<?php echo $r['phone']; ?>" name="phone" placeholder="Enter Phone Number" maxlength="10" onkeyup ="validateForm();" required="">
                       <div id="phone_error" class="error hidden">Please enter a valid phone number</div>

                    </div>
                     
   
<div class="form-group w3-padding">
                  <input type="submit" name="submit" class=" form-control w3-btn w3-small w3-green w3-round" value="Update Data"  id="btn">  
                  <a  href="index.php" class="w3-btn w3-card w3-blue w3-small">Cancel </a> 
</div>
</div>
                  </div>
                  <!--/.row-->
                </div>
              </div>

            </div>
            <!--/.col-->
</div></div></div>

</center>
</form>
</main>
           
  <!-- Bootstrap and necessary plugins -->
  <script src="vendors/js/jquery.min.js"></script>
  <script src="vendors/js/popper.min.js"></script>
  <script src="vendors/js/bootstrap.min.js"></script>
  <script src="vendors/js/pace.min.js"></script>

  <!-- Plugins and scripts required by all views -->
  <script src="vendors/js/Chart.min.js"></script>

  <!-- CoreUI Pro main scripts -->

  <script src="js/app.js"></script>
  <script type="text/javascript">
   

function validatePhoneNumber(input_str)
 {
    var re = /^[\+]?[(]?[0-9]{3}[)]?[-\s\.]?[0-9]{3}[-\s\.]?[0-9]{4,6}$/im;

    return re.test(input_str);
}

function validateForm(event) {
    var phone = document.getElementById('myform_phone').value;
    if (!validatePhoneNumber(phone)) {
        document.getElementById('phone_error').classList.remove('hidden');
         document.getElementById("btn").disabled = true;
    } else {
        document.getElementById('phone_error').classList.add('hidden');
         document.getElementById("btn").disabled = false;

        
    }
    event.preventDefault();
}

// document.getElementById('myform').addEventListener('submit', validateForm);

<?php
if(isset($_GET['save']))
{
?>

alert("Record Saved Successfully ");

<?php
}
?>
<?php
if(isset($_GET['phoneexist']))
{
?>

alert("Phone Number already exist ");

<?php
}
?>

</script>
 <link rel="stylesheet" type="text/css" href="DataTables/datatables.min.css"/>
<script src="jQueryAssets/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="DataTables/datatables.min.js"></script>
<script>
        $(document).ready(function(){
         var t = $('#myTable').DataTable( {
        "columnDefs": [ {
            "searchable": false,
            "orderable": false,
            "targets": 0
        } ],
        "order": [[ 1, 'desc' ]]
    } );
 
    t.on( 'order.dt search.dt', function () {
        t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
            cell.innerHTML = i+1;
        } );
    } ).draw();
} );

</script>
</body>
</html>