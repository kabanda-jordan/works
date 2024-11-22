<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $department = $_POST['department'];
    $experience = $_POST['experience'];
    $bio = $_POST['bio'];

    
    echo "<h1>Thank You for Signing Into the Kabanda Enterprise.</h1>";
    } else {
    echo "<h1>Error: Invalid Request Method</h1>";
}
?>
<table border="1">
<tr>
<th><b>Full Name:</b></th>
<td><?php echo "<p> $fullname</p>"; ?></td>
</tr>
<tr>
<th><b>Email:</b></th>
<td><?php echo "<p> $email</p>"; ?></td>
</tr>
<tr>
<th><b>Phone:</b></th>
<td><?php 
    echo "<p> $phone</p>"; ?></td>
</tr>
<tr>
<th><b>Date of Birth:</b></th>
<td><?php echo "<p> $dob</p>"; ?></td>
</tr>
<tr>
<th><b>Age:</b></th>
<td><?php  echo "<p> $age</p>"; ?></td>
</tr>
<tr>
<th><b>Gender:</b></th>
<td><?php  echo "<p> $gender</p>"; ?></td>
</tr>
<tr>
<th><b>Address:</b></th>
<td><?php echo "<p> $address</p>"; ?></td>
</tr>
<tr>
<th><b>Department:</b></th>
<td><?php echo "<p> $department</p>"; ?></td>
</tr>
<tr>
<th><b>Experience:</b></th>
<td><?php   echo "<p> $experience years</p>"; ?></td>
</tr>
<tr>
<th><b>Bio:</b></th>
<td><?php   echo "<p> $bio</p>";?></td>
</tr>

</table>