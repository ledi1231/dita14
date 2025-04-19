<?php include_once "header.php"; ?>

    
<div class="w-50 mx-auto" style="padding-top: 100px;">
    <h1>Register</h1>


<form action="registerLogic.php" method="POST">
<div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form2Example3" class="form-control" name="name" />
    <label class="form-label" for="form2Example1">Name</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form2Example4" class="form-control" name="surname" />
    <label class="form-label" for="form2Example1">Surname</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form2Example5" class="form-control" name="username" />
    <label class="form-label" for="form2Example1">Username</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form2Example1" class="form-control" name="email" />
    <label class="form-label" for="form2Example1">Email address</label>
  </div>

  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form2Example2" class="form-control" name="password" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>

  

  <button  type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block mb-4" name="submit">Sign up</button>

  <div class="text-center">
    <p>Have an account? <a href="login.php">Login</a></p>
    
    
  </div>
</form>
</div>








<?php 
include_once "footer.php" ; ?>