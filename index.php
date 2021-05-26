<?php include 'sidebar.php';?>

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
                        <div id="desig_error" class="error hidden">Please enter Designation </div>
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
</form>
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
                    $s=mysqli_query($con,"SELECT * FROM employee WHERE status=1 ");
                    while ($rrr=mysqli_fetch_array($s)) 
                    {
                    	$des=$rrr['role'];
                    	$sq=mysqli_query($con,"select * from role_master where id='$des'");
                    	$r=mysqli_fetch_array($sq);
                     	$id=$rrr['id'];
                  ?>
                  <tr style="font-size: 15px; font-family: roboto; ">
                  	<td></td>
                  		<td><?php echo $rrr['id'] ; ?></td>
                        
                      
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