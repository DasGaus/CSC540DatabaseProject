<?php
require "../../project_files/database.php";
?>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../css/home.css" type="text/css" />
    <title>New Customer Registration</title>

</head>



<body>

<div class="row" id="logo_id">
    <div class="col-md-12 text-center">
        <img src = "../images/customer_portal.png">



    </div>
<div>

<div class="container">
    <div class="row" style="margin-top: 50px;">
        <div class="col-md-12 text-center">
            <h1>Sign Up</h1>
        </div>
    </div>
    <div id="login_form_wrapper">
        <div class="row text-center">
            <form id="cust_reg" action="customer_registration_validation.php" method="POST">

                <div class="row">
                    <div class="col-xs-1">
                        Username:
                    </div>
                    <div class="col-xs-11">
                        <input id="login_username" type="text" name="username">
                    </div>
                </div>

                <br>
                <div class="row">
                    <div class="col-xs-1">
                        Password:
                    </div>
                    <div class="col-xs-11">
                        <input id="login_pword" type="password" name="password">
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-xs-1">
                        Confirm Password:
                    </div>
                    <br>
                    <div class="col-xs-11">
                        <input id="login_pword2" type="password" name="password_confirm">
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-1">
                        First Name:
                    </div>
                    <div class="col-xs-11">
                        <input id="registerFirstName" type="text" name="firstname">
                    </div>
                </div>

                <br>


                <div class="row">
                    <div class="col-xs-1">
                        Last Name:
                    </div>
                    <div class="col-xs-11">
                        <input id="registerLastName" type="text" name="lastname">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-xs-1">
                        Street Address:
                    </div>
                    <div class="col-xs-11">
                        <input id="registerAddress" type="text" name="address">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-xs-1">
                        City:
                    </div>
                    <div class="col-xs-11">
                        <input id="registerCity" type="text" name="city">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-xs-1">
                        State:
                    </div>
                    <div class="col-xs-11">
                        <input id="registerState" type="text" name="state">
                    </div>
                </div>

                <br>

                <div class="row">
                    <div class="col-xs-1">
                        ZIP code:
                    </div>
                    <div class="col-xs-11">
                        <input id="registerZipcode" type="text" name="zipcode">
                    </div>
                </div>



                <div class="col-md-12" style="margin-top: 10px">
                    <input id="login_button" type="submit" class="btn btn-default" value="Sign Up" name='submit'>
                </div>
        </div>
        </form>
        <div class="row" id="feedback_display">
        </div>

    </div>
</div>

</body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="customer_registration.js"></script>
