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
            <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> Dashboard <span class="badge badge-info">NEW</span></a>
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

<form action="saveemployee.php" method="post">
<center>
      <div class="container-fluid">
        <div class="animated fadeIn">
          <div class="">
            <div class="">
              <div class="card" style="width: 80%; text-align: left;">
                <div class="card-header">
                  <strong>Employee Details</strong>
                  <small>Form</small>
                </div>
                <div class="card-body">
                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="name">Employee Name</label>
                        <input type="text" class="form-control" id="name" name="ename" placeholder="Enter your employee name" required="">
                         <div id="name_error" class="error hidden">Please enter Employee Name</div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="col-sm-12">

                      <div class="form-group">
                        <label for="ccnumber">Designation</label>
                        <input type="text" class="form-control" id="desig" name="designation" placeholder="Enter designation" required="">
                        <div id="desig_error" class="error hidden">Please enter Disignation </div>
                      </div>

                    </div>

                  </div>
                  <!--/.row-->

                  <div class="row">

                    <div class="form-group col-sm-6">
                      <label for="ccmonth">Role</label>
                      <select class="form-control" id="role" name="role" required="">
                        <option selected="" disabled="" value="">Select Role</option>
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
                       <div id="role_error" class="error hidden">Please enter Role </div>
                    </div>

                    <div class="form-group col-sm-6">
                      <label for="ccyear">Phone Number</label>
                      <input type="text" class="form-control" id="myform_phone" name="phone" placeholder="Enter Phone Number" maxlength="10" onkeyup ="validateForm();" required="">
                       <div id="phone_error" class="error hidden">Please enter a valid phone number</div>
                        <div id="phone_error_" class="error hidden">Please enter a  phone number</div>
                    </div>
                     
   
<div class="form-group w3-padding">
                  <input type="submit" name="submit" class=" form-control w3-btn w3-small w3-green w3-round" value="register"  id="btn" onclick="validatedata()">  
</div>
                  </div>
                  <!--/.row-->
                </div>
              </div>

            </div>
            <!--/.col-->
</div></div></div>
<div class="" style="width: 80%;">
   <table class="w3-table-all " id="myTable">
              <thead>
                <tr style="background-color: mediumseagreen; color:white;">
                	<th>Slno</th>
                   	<th>Employee ID</th> 
                    <th>Employee Name</th>
                    <th>Designation</th>
                   
                    <th>Role</th>
                    <th>Phone</th>
                    <th></th>
                    <th></th>
                   

                </tr>
                </thead>
                <?php
                    $s=mysqli_query($con,"SELECT * FROM employee where status=1 ");
                    while ($rrr=mysqli_fetch_array($s)) 
                    {
                    	$des=$rrr['role'];
                    	$sq=mysqli_query($con,"select * from role_master where id='$des'");
                    	$r=mysqli_fetch_array($sq);
                     	$id=$rrr['id'];
                  ?>
                  <tr style="font-size: 15px; font-family: roboto; ">
                  	<td></td>
                  		<td>EMP<?php echo $rrr['id'] ; ?></td>
                        
                      
                        <td><?php echo $rrr['employeename'] ; ?></td>
                      
                        <td><?php echo $rrr['designation'] ; ?></td>
                          <td><?php echo $r['role'] ; ?></td>
                        <td><?php echo $rrr['phone'] ; ?></td>
                         <td><a href="<?php echo 'editefs.php?id='.$id.''?>" class="w3-btn w3-medium w3-blue w3-card">Edit</a></td>
                        <td><a href="<?php echo 'deleteemployee.php?id='.$id.''?>" class="w3-btn w3-medium w3-red w3-card " onclick="return confirm('do you really want to delete this record')">Delete</a></td>
                    
                       
                  </tr>
                    
                   <?php      
                    }
                    ?>
               

            </table>
        </div>
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
function validatedata()
{
  var name=document.getElementById('name').value;
  var desig=document.getElementById('desig').value;
   var role=document.getElementById('role').value;
    var phone=document.getElementById('myform_phone').value;
  if(name=="")
  {
     document.getElementById('name_error').classList.remove('hidden');
  }
  else 
  {
        document.getElementById('name_error').classList.add('hidden');
     } 
  if(desig=="")
    {
     document.getElementById('desig_error').classList.remove('hidden');
  }
  
  else 
  {
        document.getElementById('desig_error').classList.add('hidden');
     }
     if(role=="")
    {
     document.getElementById('role_error').classList.remove('hidden');
  }
  
  else 
  {
        document.getElementById('role_error').classList.add('hidden');
     } 
     if(phone=="")
    {
     document.getElementById('phone_error_').classList.remove('hidden');
  }
  
  else 
  {
        document.getElementById('phone_error_').classList.add('hidden');
     }   
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