<!-- Christopher -->

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">


    <title>Shoe Store - Homepage</title>


    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <!-- Custom Color Scheme -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

</head>

<body>

    <div class="container">
        <div class="page-header">
            <h1><a class="customHeader" href="index.html">The Shoe Store</a></h1>
        </div> 
    </div>
    
    <?php include '../references/navigation.php' ; ?>

    <div class="spacer"></div>

    <div class="alert alert-warning text-center">
        <p>The Shoe Store has been acquired by Achilles Heels Corporation. Read more <a class="alert-link" href="about.html">here</a>.</p>
    </div>

    

    <div class="container">
        <div class="jumbotron jumboColor">
            <div class="text-center">
                <img src="img/content/multiple_shoes.png" alt="Multiple Shoes" />
                <p>From boots to tennis shoes, find your style and your price at <em>The Shoe Store</em></p>
                <p>View our products <a class="customLink" href="products.html">here</a></p>
            </div>
        </div>
    </div>
    <div class="text-center">
        <h3>
            Want to view our online store? <a class="customLink" href="login.html">Login</a> or <a class="customLink" href="signup.html">Signup</a>
        </h3>
    </div>

    <div class="text-center" id="customContainerColor">
        <img src="img/content/bag_of_shoes.png" alt="Bag of Shoes" />
        <h3>
            Take Home the Latest Styles Today! <a class="customLink" href="location.html">View Our Locations</a>
        </h3>
    </div>

     <?php include '../references/footer.php' ; ?>
     
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
