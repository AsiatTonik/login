<?php  

echo $this->extend("layout/main"); 
// layout/main - slozka layout ve slozce layout 

echo $this->section("content");

echo form_open("loginSend");
?>
<div class="alert alert-danger"><?= $error;?></div>
<div class="form-floating mb-3 mt-3">
  <input type="text" class="form-control" id="email" placeholder="Enter email" name="email">
  <label for="email">vložte email</label>
</div>



<div class="form-floating mt-3 mb-3">
  <input type="text" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  <label for="pwd">vložte heslo</label>
</div>

<button type="submit" class="btn btn-primary">odeslat</button>







<?php

echo form_close();

echo $this->endSection();