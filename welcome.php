<?php
$con=mysqli_connect("localhost","root","","user");

if($con)
{
    $query="select * from signup_det;";
    $result=mysqli_query($con,$query);
    
    // Edit
    if(isset($_POST['editDone']))
    {
            $id=$_POST['user_id'];
            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['password'];
            $zip=$_POST['zip'];
            $city=$_POST['city'];
            $gender=$_POST['gender'];

            // $all_rec="select * from signup_det where id='$id'";
            // $result1=mysqli_query($con,$all_rec);

            // $row = $result1->fetch_assoc();

            $query2= "update signup_det set name='$name',email='$email',address='$address',zip='$zip',city='$city',gender='$gender' where id='$id'";
            $result2=mysqli_query($con,$query2);
            if($result2)
            {
                echo '<script type="text/javascript">
                window.onload = function () 
                { alert("Record Updated Successfully"); }
                </script>';
                header("location:welcome.php");
            }
            else{
                echo "Failed to Update";
            }
    }

    if(isset($_POST['delDone']))
    {
        $id=$_POST['user_id'];
        $query3="DELETE FROM signup_det WHERE id='$id'";
        $result3=mysqli_query($con,$query3);
        if($result3)
        {
            echo '<script type="text/javascript">
        window.onload = function () 
        { alert("Data Deleted Successfully"); }
        </script>';
            header("location:welcome.php");
        }
        else{
            echo "Failed to Delete record";
        }
    }

    }
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Include Font Awesome for icons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <table>
        <h1> All Records</h1>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Zip</th>
            <th>Gender</th>
            <th>Action</th>
        </tr>
        <?php
        while($row = $result->fetch_assoc()) {?>
        <tr>
            <!-- <input type="hidden" name="user_id" id="user_id"> -->
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['address']; ?></td>
            <td><?php echo $row['city']; ?></td>
            <td><?php echo $row['zip']; ?></td>
            <td><?php echo $row['gender']; ?></td>
            <td><button class="editbtn"><i class="fas fa-edit" style="color:green;" name="edit"></i></button>&emsp;
            <button class="delbtn" >
                <i class="fas fa-trash" style="color:red;" name="delete"></i></button></td>


        </tr>
        <?php }?>
    </table>

    <!-- edit modal -->
    <div class="modal" id="editModal">
	  	<div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Edit Employee</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="welcome.php" method="post">
                    <input type="hidden" name="user_id" id="user_id">
                        <div class="form-group">
						    <label for="name">Name</label>
						    <input class="form-control" type="text" name="name" id="name">
					  	</div>
				    	<div class="form-group">
						    <label for="email">Email</label>
						    <input class="form-control" type="text" name="email" id="email">
					  	</div>
					  
					  	<div class="form-group">
						    <label for="last_name">Address</label>
                            <textarea class="form-control" type="text" name="address" rows="2" id="address"></textarea>
					  	</div>
					  	<div class="form-group">
						    <label for="city">City</label>
						    <input class="form-control" type="text" name="city" id="city">
					  	</div>
                          <div class="form-group">
						    <label for="zip">Zip</label>
						    <input class="form-control" type="text" name="zip" id="zip">
					  	</div>
                          <div class="form-group">
						    <label for="gender">Gender</label>
						    <input class="form-control" type="text" name="gender" id="gender">
					  	</div>
					  	<button type="submit" class="btn btn-primary" id="editDone" name="editDone">Update</button>
					  	<button type="button" class="btn btn-danger float-right" data-dismiss="modal">Close</button>
					</form>


		      	</div>

		    </div>
	  	</div>

  </div>
<!-- 
  edit modal end -->

  <!-- delete modal start -->

  <div class="modal" id="deleteModal">
  <div class="modal-dialog">
		    <div class="modal-content">

		      	<!-- Modal Header -->
		      	<div class="modal-header">
			        <h4 class="modal-title">Delete Detail</h4>
			        <button type="button" class="close" data-dismiss="modal">&times;</button>
		      	</div>

		      	<!-- Modal body -->
		      	<div class="modal-body">
		        	<form action="welcome.php" method="post">
                    <input type="hidden" name="user_id" id="user_id" >
                        <div class="form-group">
						    <label for="dltinfo">Are you sure to delete?</label>
					  	</div>
					  	<button type="submit" class="btn btn-danger" name="delDone">Yes</button>
					  	<button type="button" class="btn btn-success float-right" data-dismiss="modal">No</button>
					</form>


		      	</div>

		    </div>
	  	</div>

  </div>

  <!-- delete modal end -->

  <script>
$(document).ready(function()
{
    $('.editbtn').on('click',function(){
        $('#editModal').modal('show');

        $tr=$(this).closest('tr');
        var data=$tr.children("td").map(function()
        {
            return $(this).text();
        }).get();
        console.log(data);

        $('#user_id').val(data[0]);
        $('#name').val(data[1]);
        $('#email').val(data[2]);
        $('#address').val(data[3]);
        $('#city').val(data[4]);
        $('#zip').val(data[5]);
        $('#gender').val(data[6]);


    })

    $('.delbtn').on('click',function(){
        $('#deleteModal').modal('show');
        $tr=$(this).closest('tr');
        var data=$tr.children("td").map(function()
        {
            return $(this).text();
        }).get();
        console.log(data);

        $('#user_id').val(data[0]);
        
    })
})
    </script>
</body>
</html>