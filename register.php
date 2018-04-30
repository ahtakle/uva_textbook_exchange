<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<head>
  <meta name="author" content="Lauren Phan and Aditi Takle">
  <meta name="description" content="UVA Textbook Exchange">
  <link href="register.css" rel="stylesheet">
</head>
<body class="text-center">
  <div class="header">Register for UVA Textbook Exchange<img src="register.png">
  </div>

  <!--Registration form-->
  <form ng-app="myApp" ng-controller="myCtrl" name="myForm" action="register_confirm.html" method="post">
    <table>
      <tr>
        <td>First Name:</td>
        <td><input ng-model="fname" type="text" name="fname" required value="<?php if(!empty($_POST)){ echo($_POST['fname']); } ?>"/></td>
      </tr>
      <tr>
        <td>Last Name:</td>
        <td><input ng-model="lname" type="text" name="lname" required value="<?php if(!empty($_POST)){ echo($_POST['lname']); } ?>"/></td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td><input ng-model="text" type="email" id="email" name="email" required value="<?php if(!empty($_POST)){ echo($_POST['email']); } ?>"/>
          <span ng-show="myForm.email.$error.email">Not a valid e-mail address</span>
        </td>
      </tr>
      <tr>
        <td>Password:</td>
        <td><input type="password" id="password1" name="password1" required /></td>
      </tr>
      <tr>
        <td>Confirm Password:</td>
        <td><input type="password" id="password2" name="password2" required /></td>
      </tr>
    </table>

    <button value="Register" title="Register"><span>Register</span></button>

    <p>{{fname + " " + lname}}</p>
    <?php
      $responses = $_POST;
      if(!empty($responses)) {
        if($responses['password1'] != $responses['password2']) {
            #server-side input validation, error messages
            echo "<p style='color:red'>Passwords don't match. Please enter information again.</p>";
          }
      }
    ?>
  </form>
  <footer>
    <a href="index.php">Already have an account? Sign in here.</a>
    <section id ="tagline">
      <p>Lauren Phan and Aditi Takle © 2018</p>
    </section>
  </footer>
  <script>
    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope) {
      $scope.fname = "First name";
      $scope.lname = "Last name";
    });

    myApp.controller("myCtrl", function ($scope, $http)
      {

         $scope.getPlace = function()
         {
            if ($scope.zip !== undefined)
            {
               /* var promise = $http.get("http://localhost/cs4640s18/angularjs-backend/popcorn-get-request/getCityState.php?zip=" + $scope.zip); */
               var promise = $http.get("getCityState.php?zip=" + $scope.zip);
               promise.success(onSuccess);
               promise.error(onError);
            }
            else
            {
        	   $scope.data = "undefined";
            }
         }
     
      });

    app.controller('myCtrl', function($scope, $http) {
      $http({
        method : "GET",
        url : "register_confirm.html?fname=" + $scope.fname + "&lname=" + $scope.lname
       }).then(function mySuccess(response) {
         var promise = $http.get("getCityState.php?zip=" + $scope.zip);
              promise.success(onSuccess);
              promise.error(onError);
        }, function myError(response) {
      });
    });

  </script>
      <!-- Include JQuery from the Google CDN for Bebas Font-->
      <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
      <!-- Include the RenderedFont rendering engine (using the #free account key) -->
      <script type="text/javascript"  src='http://cdn.renderedfont.com/js/renderedfont-0.8.min.js#free'></script>
</body>
</html>
