<?php
session_start();
//$loginError = $_GET['message'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <link rel="stylesheet" href="stylesheet.css">

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>


    <title>Login</title>
</head>
	<body>
		<div class="container-fluid">
			<div class="row" id="header">
				<div class="col-2">
					<img src="logo.png" alt="Bike2Go logo"/>
				</div>
			</div>
		</div>
		
		<div class="container-fluid">
			<div class="row" id = "main">
				<form action="authenticate.php" method="post">
                            <label class="col-form-label" for="userid"><strong>User ID:</strong></label>
                            <input type="text" name="userid" class="form-control" id="userid" placeholder="User ID">

                            <label class="col-form-label" for="password"><strong>Password:</strong></label>
                            <input type="text" name="password" class="form-control" id="password" placeholder="Password">

                            <div class="my-4">
                                <button type="submit" class="btn btn-secondary">Submit</button>
                            </div>

                        </form>
			</div>
		</div>