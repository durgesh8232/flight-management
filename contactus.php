<?php
 include 'header.html'; 
 ?>
<style>
body {
   background-color: rosybrown;
  }



</style>
	<div class="container">
		<h2 class="text-center">Contact Us</h2>
		<form>
			<div class="form-group">
				<label for="name">Name:</label>
				<input type="text" class="form-control" id="name" name="name">
			</div>
			<div class="form-group">
				<label for="address">Address:</label>
				<textarea class="form-control" id="address" name="address"></textarea>
			</div>
			<div class="form-group">
				<label for="phone">Phone Number:</label>
				<input type="text" class="form-control" id="phone" name="phone">
			</div>
			<div class="form-group">
				<label for="message">Message:</label>
				<textarea class="form-control" id="message" name="message"></textarea>
			</div>
			<button type="submit" class="btn btn-primary">Submit</button><br><br>
		</form>
	</div>
 <?php 
 include 'footer.html'; 
 ?>

