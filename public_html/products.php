<!--Christopher-->
<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <title>The Shoe Store - Products</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

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


  
    </div>
    <div class="container table-responsive">
        <table class="table table-hover">
            <caption><h2>Our Products</h2></caption>
            <thead>
                <tr>
                    <th> </th>
                    <th id="money">Warm Colors</th>
                    <th id="money">Cool Colors</th>
                    <th id="money">Grayscale</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        Shoes:
                    </td>
                    <td>
                        <a href="img/content/red_shoe.png" class="thumbnail">
                            <img src="img/content/red_shoe.png" alt="Red Shoe" />
                        </a>
                    </td>
                    <td>
                        <a href="img/content/blue_shoe.png" class="thumbnail">
                            <img src="img/content/blue_shoe.png" alt="Blue Shoe" />
                        </a>
                    </td>
                    <td>
                        <a href="img/content/shoe_store_logo.png" class="thumbnail">
                            <img src="img/content/shoe_store_logo.png" alt="Black Shoe" />
                        </a>
                    </td>
                <tr>
                    <td></td>
                    <td>
                        <a href="img/content/gold_shoe.png" class="thumbnail">
                            <img src="img/content/gold_shoe.png" alt="Gold Shoe" />
                    </td>
                    <td>
                        <a href="img/content/green_shoe.png" class="thumbnail">
                            <img src="img/content/green_shoe.png" alt="Green Shoe" />
                    </td>
                    <td>
                        <a href="img/content/gray_shoe.png" class="thumbnail">
                            <img src="img/content/gray_shoe.png" alt="Gray Shoe" />
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td>Price:</td>
                    <td id="money">$45</td>
                    <td id="money">$45</td>
                    <td id="money">$40</td>
                </tr>
            </tfoot>
        </table>
    </div>

    <div class="row">
        <div class="container col-lg-4 col-lg-offset-4 clear-top">
            <h4>Products are available at our <a class="customLink" href="location.html">brick and mortar stores</a> or at our Amazon page.</h4>
            <h4>All online purchases are liable for a free resizing as needed.*</h4>
            <small><em>*Original shipping charges may be incurred on redelivery. This is based on your original shipping speed.</em></small>
        </div>
    </div>
    
  
    <?php include '../references/footer.php' ; ?>
  
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>
