<!-- Christopher -->

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Shoe Store - Signup</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">


    <!-- Custom Color Scheme -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>

<body>
  
    <div>
        <div class="container">
            <div class="page-header">
                <h1><a class="customHeader" href="index.html">The Shoe Store</a></h1>
            </div>
        </div>

       <?php include '../references/navigation.php' ; ?>

    <div class="row">
        <div class="container col-lg-4 col-lg-offset-4">

            <div>
                <h2>Sign up</h2>
            </div>
            <form>

                <div class="form-group">
                    <label class="text-left">First Name:</label><br />
                    <input type="text" class="form-control input-lg" name="firstName" placeholder="Enter First Name"><br />
                </div>
                <div class="form-group">
                    <label>Last Name:</label><br />
                    <input type="text" class="form-control input-lg" name="lastName" placeholder="Enter Last Name"><br />
                </div>

                <div class="form-group">
                    <label>Email address:</label><br />
                    <input type="email" class="form-control input-lg" name="email" placeholder="Enter email address"><br />
                </div>
                <div class="form-group">
                    <label>Password:</label><br />
                    <input type="password" class="form-control input-lg" name="password" placeholder="Create a Password"><br>
                </div>
                <div class="form-group">
                    <label>Confirm Password:</label><br />
                    <input type="password" class="form-control input-lg" name="password" placeholder="Create a Password"><br>
                </div>
                <a href="login.html" class="btn btn-primary center-block" role="button" >Sign Up
              </a>
            </form>
        </div>
    </div>


        <div class="container col-lg-4 col-lg-offset-4">

            <h4>Have an Account? Log in <a class="customLink" href="login.html">here.</a> </h4>

            

        </div>
        

    <?php include '../references/footer.php' ; ?>

    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
