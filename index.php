<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>
<body>

<div class="container" style="background-color:rgb(249, 192, 173) ;">
<form action="insert-students-data.php" method="post">
    <h1 style="text-align:center ;">Student Registration</h1>
  
  <div class="form-group" style="margin-bottom:20px ;">
    <label for="exampleInputPassword1">Student Id</label>
    <input type="text" class="form-control" name="student-id" id="exampleInputPassword1" placeholder="Student Id">
  </div>
  <div class="form-group" style="margin-bottom:20px ;">
    <label for="exampleInputPassword1">First Name</label>
    <input type="text" class="form-control" name="first-name" id="exampleInputPassword1" placeholder="First Name">
  </div>
  <div class="form-group" style="margin-bottom:20px ;">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" class="form-control" name="last-name" id="exampleInputPassword1" placeholder="Last Name">
  </div>
  <div class="form-group" style="margin-bottom:20px ;">
    <label for="exampleInputPassword1">Date Of Birth</label>
    <input type="text" class="form-control" name="date-of-birth" id="exampleInputPassword1" placeholder="Date Of Birth">
  </div>
  <div class="form-group" style="margin-bottom:20px ;">
    <label for="exampleInputPassword1">Email</label>
    <input type="email" class="form-control" name="email" id="exampleInputPassword1" placeholder="Email">
  </div>
  <div class="form-group" style="margin-bottom:20px ;">
    <label for="exampleInputPassword1">Department</label>
    <input type="text" class="form-control" name="department" id="exampleInputPassword1" placeholder="department">
  </div>
  <button type="submit" class="btn btn-primary" style="margin: 20px 50px 20px 500px" >Submit</button>
</form>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    
</body>
</html>