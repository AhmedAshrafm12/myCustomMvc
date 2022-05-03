
<?php


if (isset($errors)) {
    echo "<div class='alert alert-danger'>";
    foreach ($errors as $error) {
        echo $error."<br>";
    }
    echo "</div>";
}
;?>
<div style="background-color: #bdc4bb;" class="p-4">
<form method="POST">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="text" class="form-control" name='email' id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">firstName</label>
    <input type="text" class="form-control" name='firstName' id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">LastName</label>
    <input type="text" class="form-control" name='lastName' id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" class="form-control" name='password' id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  

  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>