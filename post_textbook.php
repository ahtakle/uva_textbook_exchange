
<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<!-- Meta tags -->
	<title>General Application Form a Flat Responsive Widget Template :: w3layouts</title>
	<meta name="keywords" content="UVA Textbook Exchange, Textbook, Post a Textbook" />
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- stylesheets -->
	<link rel="stylesheet" href="postbook.css" type="text/css" media="all">

	<!-- google fonts  -->
	<link href="//fonts.googleapis.com/css?family=Alegreya+Sans:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese" rel="stylesheet">

	    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.3.16/angular.min.js"></script>
</head>
<body ng-app="myApp">
  <header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="nav-container" ng-controller="myController">
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="navbar-nav">
            <li class="navbar-left"><a href="list_textbooks.php">Buy</a></li>
            <li class="navbar-left" id="active"><a href="post_textbook.php">Sell</a></li>
            <li class="navbar-left"><a href="#contact">Contact</a></li>
            <li class="navbar-right"><a href="logout.php">Logout</a></li>
            <li class="navbar-right"><a href="#">
                <?php
                  session_start();
                  #use of variable expressions
                  if(isset($_POST["username"])) {
                    $_SESSION["username"] = $_POST["username"];
                }
                  echo $_SESSION["username"];
                ?>
              </a>
            </li>
            </li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
  </header>
  <br/><br/><br/>
	<div class="heading">
		<h1>Sell a Textbook</h1>
		<div class="container">
			<div class="heading">
				<h2>Posting Form</h2>
			</div>
			<div class="agile-form">
				<form action="#" method="post">
					<ul class="field-list">
						<li class="name">
							<label class="form-label"> Name <span class="form-required"> * </span></label>
							<div class="form-input">
									<input type="text" name="name" placeholder="Textbook Name" required>
							</div>
						</li>
						<li>
							<label class="form-label"> Author <span class="form-required"> * </span></label>
							<div class="form-input">
								<input type="text" name="author" placeholder="Author Name" required>
							</div>
						</li>
						<li>
							<label class="form-label"> ISBN </label>
							<div class="form-input">
								<input type="text" name="isbn" placeholder="ISBN" optional
								ng-model="isbn" ng-blur="getISBNInfo()">
							</div>
						</li>
						<li>
							<label class="form-label"> Price </label>
							<div class="form-input">
								<input type="text" name="price" placeholder="Price (i.e. 100.00)" optional>
							</div>
						</li>
            <li>
              <label class="form-label" id="price-label"> Price Negotiable </label>
              <div class="form-input">
                <input type="radio" name="negotiable" value="Yes">Yes
                <input type="radio" name="negotiable" value="No">No
              </div>
            </li>
            <li>
							<label class="form-label"> Edition </span></label>
							<div class="form-input">
								<input type="text" name="edition" placeholder="Edition" optional>
							</div>
						</li>
						<li>
							<label class="form-label"> Condition <span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="condition" required>
									<option value="">Condition</option>
									<option value="New"> New </option>
									<option value="Excellent"> Excellent </option>
									<option value="Good"> Good </option>
                  <option value="Fair"> Fair </option>
                  <option value="Poor"> Poor </option>
								</select>
							</div>
						</li>
						<li>
							<label class="form-label">Type <span class="form-required"> * </span></label>
							<div class="form-input">
								<select class="form-dropdown" name="citizen" required>
									<option value="">Select Type</option>
									<option value="hardcover"> Hard Cover </option>
									<option value="paperback"> Paper Back</option>
									<option value="looseleaf"> Loose Leaf </option>
                  <option value="ebook"> E-Book Access </option>
								</select>
							</div>
						</li>
            <li>
              <label class="form-label"> Upload Image </label>
              <div class="form-input">
                <input type="file" name="image">
              </div>
            </li>
						<li>
							<label class="form-label">
							   Course Info
							   <span class="form-required"> * </span>
							</label>
							<div class="form-input add">
								<span class="form-sub-label">
									<input type="text" name="mnemonic" placeholder="Department (i.e. CS) * " required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="number" placeholder="Course Number (i.e. 4640) *" required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="professor" placeholder="Professor Last Name *" required>
								</span>
								<span class="form-sub-label">
									<input type="text" name="section" placeholder="Section (i.e. 2:00-3:15)" optional>
								</span>
							</div>
						</li>
					</ul>
					<div class="submit_btn">
						<input type="submit" value="Submit">
					</div>
				</form>
					Response data: {{data}}
			</div>
		</div>
		<div class="copyright">
			<p>© 2018 General Application Form. All rights reserved | Design by <a href="www.w3layouts.com">W3layouts</a></p>
		</div>
	</div>

	<script>
	      var myApp = angular.module('myApp', []);

	      myApp.controller("myController", function ($scope, $http)
	      {
	         var onSuccess = function (data, status, headers, config)
	         {
	            $scope.data = data;
	         };

	         var onError = function (data, status, headers, config)
	         {
	            $scope.error = status;
	         };

	         $scope.getISBNInfo = function()
	         {
						 console.log("getISBNInfo");
	            if ($scope.isbn !== undefined)
	            {
	               /* var promise = $http.get("http://localhost/cs4640s18/angularjs-backend/popcorn-get-request/getCityState.php?zip=" + $scope.zip); */
	               var promise = $http.get("isbn.php?isbn=" + $scope.isbn);
								 console.log(promise);
	               promise.success(onSuccess);
	               promise.error(onError);
	            }
	            else
	            {
	        	   $scope.data = "undefined";
	            }
	         }

	      });
	    </script>

</body>
</html>
