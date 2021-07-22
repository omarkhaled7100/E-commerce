
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>My Card</title>
</head>
<body>

<div class="thank">
    <img src="true-sign.PNG" alt="">    
    <span>Thanks</span>
</div>
<p class="myCard">
<h1 class="myCard">
    You have ordered
    quantity of  <?php
    $quantity = $_GET["quantity"];
    print "$quantity";
    ?> of your product
</h1>
<h1 class="myCard">
    We will contact you as soon as the product is shipped</h1> 
        <h2 class="myCard">
        It will take 14 days.</h2> 
        <h3 class="myCard">
            Thanks for using our service 
        </h3>
    

</p>
    <script src="index.js"></script>
    
</body>
</html>