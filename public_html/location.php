<!-- Christopher -->

<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Shoe Store - Locations</title>

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

    <div class="row">
        <div class="container col-lg-4 col-lg-offset-4 list-group">
            <div>
                <h2>Our Locations</h2>
            </div>
            <div class="list-group-item">
                <h4>
                    Indianola Flagship Store
                </h4>
                <div class="list-group-item-text">
                    <p><em>Store Hours</em></p>

                    <p>Monday - Friday: 9:00 AM to 5:00 PM</p>

                    <p>Saturday: 9:00 AM to 9:00 PM</p>

                    <p>Sunday: Closed</p>

                    <p>
                        <em>Address</em>
                    </p>
                    <p>701 C Street Indianola, IA 50125</p>
                </div>
            </div>

            <div class="list-group-item">
                <h4>
                    Chicago Delivery Station
                </h4>
                <div class="list-group-item-text">
                    <p><em>Store Hours</em></p>

                    <p>Monday - Friday: 9:00 AM to 5:00 PM</p>

                    <p>Saturday: Closed</p>

                    <p>Sunday: Closed</p>

                    <p>
                        <em>Address</em>
                    </p>
                    <p>2303 McKeller Road Chicago, IL 60290</p>
                </div>
            </div>

            <div class="list-group-item">
                <h4>
                    One Hundred Oaks Mall Store
                </h4>
                <div class="list-group-item-text">
                    <p><em>Store Hours</em></p>

                    <p>Monday - Thursday: 9:00 AM to 9:00 PM</p>

                    <p>Friday: 9:00 AM to 10:00 PM</p>

                    <p>Saturday: 9:00 AM to 10:00 PM</p>

                    <p>Sunday: 9:00 AM to 3:00 PM</p>

                    <p>
                        <em>Address</em>
                    </p>

                    <p>719 Thompson Ln, Nashville, TN 37204</p>
                </div>
            </div>
        </div>
    </div>

        <div class="container">
            <div class="container col-lg-4 col-lg-offset-4">
                <h3><em>More locations coming soon!</em></h3>
            </div>
        </div>
        
             <?php include '../references/footer.php' ; ?>
             
             
            <!-- Scripts required to make Bootstrap work better. -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
            <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>