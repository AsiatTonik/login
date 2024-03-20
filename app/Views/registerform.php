<?php  

echo $this->extend("layout/main"); 
// layout/main - slozka layout ve slozce layout 

echo $this->section("content");


?>

<div class="form-floating mb-3 mt-3">
  <input type="text" class="form-control" id="username" placeholder="Enter email" name="email">
  <label for="email">Uživatelské jméno</label>
</div>

<div class="form-floating mb-3 mt-3">
  <input type="text" class="form-control" id="name" placeholder="Enter email" name="email">
  <label for="email">Jméno</label>
</div>

<div class="form-floating mb-3 mt-3">
  <input type="text" class="form-control" id="surname" placeholder="Enter email" name="email">
  <label for="email">Příjmení</label>
</div>

<div class="form-floating mb-3 mt-3">
  <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  <label for="email">Email</label>
</div>

<div class="form-floating mb-3 mt-3">
  <input type="password" class="form-control" id="pwd" placeholder="Enter email" name="email">
  <label for="email">Heslo</label>
</div>

<div class="form-floating mb-3 mt-3">
  <input type="password" class="form-control" id="pwd" placeholder="Enter email" name="email">
  <label for="email">Heslo2</label>
</div>







<button type="submit" class="btn btn-primary">odeslat</button>







<?php

echo form_close();

echo $this->endSection();