<?php
session_start();
?>

<!DOCTYPE html>

<html>

<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" />
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta charset="utf-8">
    <title>Buggy</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css" />
	<style>
       .error {color: #FF0000;}
    </style>
</head>

<body>
<?php
$_SESSION["usrname1"] = $_SESSION["usrname2"] = $_SESSION["email"] = $_SESSION["address"] = $_SESSION["password"] = $_SESSION["contactno"] = $_SESSION["restaurantnameErr"] = $_SESSION["restauranttype"] = '';
$_SESSION["usrname12"] = $_SESSION["usrname22"] = $_SESSION["email2"] = $_SESSION["address2"] = $_SESSION["password2"] = $_SESSION["contactno2"] = "";
?>
    <div class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-xs-8"></div>
                <button type="button" class="btn btn-lg btn-primary" id="myBtn">Login</button>
                <div class="col-xs-1"></div>
                <button type="button" class="btn btn-lg btn-info mine12" id="myBtn2">Sign Up</button>
                <!-- Modal -->

                <div class="modal fade" id="myModal2" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="popeye1"><span class="glyphicon glyphicon-cutlery"></span> Sign Up</h4>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">
							<p><span class="error">* required field.</span></p>
                                <form role="form" method="post" action="userlogin.php">
                                    <div class="form-group">
                                        <label for="Name"><span class="glyphicon glyphicon-user"></span> Username</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control" name="usrname1" placeholder="First Name">
												<span class="error">*</span>
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control" name="usrname2" placeholder="Surname">
												<span class="error">*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps"><span class="glyphicon glyphicon-globe"></span>Email-Address</label>
                                        <input type="email" class="form-control" name="pse" placeholder="example@gmail.com">
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps1"><span class="glyphicon glyphicon-phone-alt"></span>Contact No</label>
                                        <input type="text" class="form-control" name="pscn" placeholder="91xxxxxxxx">
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps2"><span class="glyphicon glyphicon-globe"></span>Address</label>
                                        <textarea class="form-control" rows="4" placeholder="Address" name="ps2"></textarea>
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>New Password</label>
                                        <input type="password" class="form-control" name="psw" placeholder="Enter password">
										<span class="error">*</span>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-heart"></span> Create An Account</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                            <p><a href="#" id="myBtn3"> Register as Owner?</a></p>
                                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="modal fade" id="myModal3" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header" style="padding:35px 50px;">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="popeye1"><span class="glyphicon glyphicon-cutlery"></span> Sign Up</h4>
                            </div>
                            <div class="modal-body" style="padding:40px 50px;">
							<p><span class="error">* required field.</span></p>
                                <form role="form" method="post" action="adminlogin.php">
                                    <div class="form-group">
                                        <label for="Name"><span class="glyphicon glyphicon-user"></span> OwnerName</label>
                                        <div class="row">
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control" name="usrname1" placeholder="First Name">
												<span class="error">*</span>
                                            </div>
                                            <div class="col-xs-6">
                                                <input type="text" class="form-control" name="usrname2" placeholder="Surname">
												<span class="error">*</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps"><span class="glyphicon glyphicon-globe"></span>Email-Address</label>
                                        <input type="text" class="form-control" name="pse" placeholder="example@gmail.com">
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps"><span class="glyphicon glyphicon-font"></span> Restaurant Name</label>
                                        <input type="text" class="form-control" name="psrn" placeholder="Restaurant Name">
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps"><span class="glyphicon glyphicon-leaf"></span>Restaurant Type</label>
                                        <input type="text" class="form-control" name="psrt" placeholder="Italian,Chinese etc..">
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps1"><span class="glyphicon glyphicon-phone-alt"></span>Contact No</label>
                                        <input type="text" class="form-control" name="pscn" placeholder="91xxxxxxxx">
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="ps2"><span class="glyphicon glyphicon-globe"></span> Restaurant Address</label>
                                        <textarea class="form-control" rows="4" placeholder="Address" name="psa"></textarea>
										<span class="error">*</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="psw"><span class="glyphicon glyphicon-eye-open"></span>New Password</label>
                                        <input type="password" class="form-control" name="psw" placeholder="Enter password">
										<span class="error">*</span>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-heart"></span> Create An Account</button>
                                </form>
                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            </div>
                        </div>

                    </div>
                </div>
                <script>
                    $(document).ready(function() {
                        $("#myBtn2").click(function() {
                            $("#myModal2").modal();
                        });
                    });
                </script>
                <script>
                    $(document).ready(function() {
                        $("#myBtn3").click(function() {
                            $("#myModal3").modal();
                        });
                    });
                </script>
            </div>
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form role="form" method="post" action = "login back user.php">
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                                    <input type="text" class="form-control" name="usrname12" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input type="password" class="form-control" name="psw12" placeholder="Enter password">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value= "" checked>Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
							</form>
						</div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <p><a href="#" id = "myBttn5"> Login as an Owner?</a></p>
                        </div>
                    </div>
                </div>
            </div>
			<div class="modal fade" id="myModal4" role="dialog">
                <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-header" style="padding:35px 50px;">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
                        </div>
                        <div class="modal-body" style="padding:40px 50px;">
                            <form role="form" method="post" action = "login back owner.php">
                                <div class="form-group">
                                    <label for="usrname"><span class="glyphicon glyphicon-user"></span> Email</label>
                                    <input type="text" class="form-control" name="usrname" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
                                    <input type="password" class="form-control" name="psw" placeholder="Enter password">
                                </div>
                                <div class="checkbox">
                                    <label><input type="checkbox" value= "" checked>Remember Me</label>
                                </div>
                                <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
							</form>
						</div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                            <p><a href="#"> Forgot Password?</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            $(document).ready(function() {
                $("#myBtn").click(function() {
                    $("#myModal").modal();
                });
            });
        </script>
		<script>
            $(document).ready(function() {
                $("#myBttn5").click(function() {
                    $("#myModal4").modal();
                });
            });
        </script>
        <div class="row">
            <div class="col-xs-1"></div>
            <img src="yup1.png">
            <div class="col-xs-4"></div>
        </div>
        <div class="row">
            <p></p>
        </div>
        <div class="row">
           <h2 class = "mine2 mine3">Order from your Favourite Restaurants</h2>
           </div>
    </div>
    <footer class="container">
        <div class="row">
            <figure class="col-xs-4 mine7">
                <img src="cash.png" />
            </figure>
            <figure class="col-xs-4 mine7">
                <img src="hamburger.png" />
            </figure>
            <figure class="col-xs-4 mine7">
                <img src="current.png" />
            </figure>
        </div>
        <div class="row">
            <h3 class="col-xs-4 mine8">Pay via Card/Cash</h3>
            <h3 class="col-xs-4 mine8">No Minimum Order</h3>
            <h3 class="col-xs-4 mine8">Lightning Fast Delivery</h3>
        </div>
        <hr>
        <div class="row">
            <h1></h1>
        </div>
        <div class="row mine10">
            <div class="col-xs-4"></div>
            <figure class="col-xs-1 mine9 mine11">
                <img src="fb2.png" />
            </figure>
            <figure class="col-xs-1 mine11">
                <img src="inst (1).png" />
            </figure>
            <figure class="col-xs-1 mine11">
                <img src="inst (2).png" />
            </figure>
        </div>
        <ul>
            <li class="opo">
                <a href="#">    About Us</a>
            </li>
            <li>
                <span> • </span><a href="#">Team</a>
            </li>
            <li>
                <span> • </span><a href="#">Terms &amp; Conditions</a>
            </li>
            <li>
                <span> • </span><a href="#">Refunds &amp; Cancellation Policy</a>
            </li>
            <li>
                <span> • </span><a href="#">Privacy Policy</a>
            </li>
            <li>
                <span> • </span><a href="#">Offer Terms</a>
            </li>
            <li>
                <span> • </span><a title="Partner with US" target="_blank" href="#">Partner With Us</a>
            </li>
            <li>
                <span> • </span><a title="Partner with US" target="_blank" href="#">Meet The Founders</a>
            </li>

            <li>
                <span> • </span><a title="Partner with US" target="_blank" href="#">Invest with Us</a>
            </li>
        </ul>
        <h6>--------------<span> &copy; 2017, Buggy --------------</h6>
    </footer>

</body>

</html>
