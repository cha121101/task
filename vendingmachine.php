

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/css/bootstrap.css">
    <title>Vending Machine App</title>
    
</head>
<body>
    <h2 class="text-center mt-5">Vendo machine</h2>

    <div class="container w-50">
       
        <div class="ml-5 mt-4">
            <form action="" method="POST">
                <h4>Products</h4>
                <div class="ml-5 mt-3">
                     
                    <p><input type="checkbox" name="products[]"  value="Coke"> Coke - 15</p>
                    <p><input type="checkbox" name="products[]"  value="Sprite" > Sprite - 20</p>
                    <p><input type="checkbox" name="products[]"  value="Royal" > Royal - 20</p>
                    <p><input type="checkbox" name="products[]"  value="Pepsi" > Pepsi -15</p>
                    <p><input type="checkbox" name="products[]"  value="Mountain Dew" > Moutain Dew - 20</p>
                <div>

                <div class="text-center">
                    <h4 class="mt-5">Add-Ups</h4>
                    <div class="" style="display: inline-block;">
                        <p>Size: <select name="size" id="">
                            <option value="regular">Regular</option>
                            <option value="upsize">Up-Size (add 5)</option>
                            <option value="jumbo">Jumbo ( add 10)</option>
                        </select></p>
                    </div>
                    <div class="ml-5" style="display: inline-block;">
                        <p>Quantity : <input type="number" name="quantity" value="1" id=""></p>
                    </div>
                    
                </div>
               <center> <button type="submit" name="checkoutsubmit" class="text-center">Check out</button></center>
            </form>
            <h4>Purchase Summary:</h4>
            <ul>
                <?php

                    $checkOutbtn = $_POST['checkoutsubmit'];
                    $quantity = $_POST['quantity'];
                    $phase ="";
                    if($quantity == ""){
                        $quantity = 0;
                    }
                    if($quantity <= 1){
                        $phase = "piece";
                    }else{
                        $phase = "pieces";
                    }

                    $size = $_POST['size'];
                    $total = 0;
                    if(isset($checkOutbtn)){
                        
                        $productSelected = 0;
                        
                        if(!empty($_POST['products'])){
                            
                            foreach($_POST['products'] as $products){
                                $productSelected += 1;
                                if ($products == "Coke"){
                                    $regular = 15;
                                    $Upsize = 20;
                                    $Jumbo = 25;

                                    if($size == "upsize"){
                                        $totalupsize = $quantity * $Upsize;
                                        $total += $totalupsize;
                                        echo "<li> $quantity $phase of Up-size $products amounting $totalupsize ";
                                    }
                                    elseif($size == "jumbo"){
                                        $totaljumbo = $quantity * $Jumbo;
                                        $total += $totaljumbo;
                                        echo "<li> $quantity $phase of Jumbo $products amounting $totaljumbo ";
                                    }elseif($size == "regular"){
                                        $totalregular = $quantity * $regular;
                                        $total += $totalregular;
                                        echo "<li> $quantity $phase of Regular $products amounting $totalregular ";
                                    }
                                    
                                }
                                if ($products == "Sprite"){
                                    $regular = 20;
                                    $Upsize = 25;
                                    $Jumbo = 30;

                                    if($size == "upsize"){
                                        $totalupsize = $quantity * $Upsize;
                                        $total += $totalupsize;
                                        echo "<li> $quantity $phase of Up-size $products amounting $totalupsize ";
                                    }
                                    elseif($size == "jumbo"){
                                        $totaljumbo = $quantity * $Jumbo;
                                        $total += $totaljumbo;
                                        echo "<li> $quantity $phase of Jumbo $products amounting $totaljumbo ";
                                    }elseif($size == "regular"){
                                        $totalregular = $quantity * $regular;
                                        $total += $totalregular;
                                        echo "<li> $quantity $phase of Regular $products amounting $totalregular ";
                                    }
                                }
                                if ($products == "Royal"){
                                    $regular = 20;
                                    $Upsize = 25;
                                    $Jumbo = 30;

                                    if($size == "upsize"){
                                        $totalupsize = $quantity * $Upsize;
                                        $total += $totalupsize;
                                        echo "<li> $quantity $phase of Up-size $products amounting $totalupsize ";
                                    }
                                    elseif($size == "jumbo"){
                                        $totaljumbo = $quantity * $Jumbo;
                                        $total += $totaljumbo;
                                        echo "<li> $quantity $phase of Jumbo $products amounting $totaljumbo";
                                    }elseif($size == "regular"){
                                        $totalregular = $quantity * $regular;
                                        $total += $totalregular;
                                        echo "<li> $quantity $phase of Regular $products amounting $totalregular ";
                                    }
                                }
                                if ($products == "Pepsi"){
                                    $regular = 15;
                                    $Upsize = 20;
                                    $Jumbo = 25;

                                    if($size == "upsize"){
                                        $totalupsize = $quantity * $Upsize;
                                        $total += $totalupsize;
                                        echo "<li> $quantity $phase of Up-size $products amounting $totalupsize ";
                                    }
                                    elseif($size == "jumbo"){
                                        $totaljumbo = $quantity * $Jumbo;
                                        $total += $totaljumbo;
                                        echo "<li> $quantity $phase of Jumbo $products amounting $totaljumbo ";
                                    }elseif($size == "regular"){
                                        $totalregular = $quantity * $regular;
                                        $total += $totalregular;
                                        echo "<li> $quantity $phase of Regular $products amounting $totalregular ";
                                    }
                                }
                                if ($products == "Mountain Dew"){
                                    $regular = 20;
                                    $Upsize = 25;
                                    $Jumbo = 30;

                                    if($size == "upsize"){
                                        $totalupsize = $quantity * $Upsize;
                                        $total += $totalupsize;
                                        echo "<li> $quantity $phase of Up-size $products amounting $totalupsize ";
                                    }
                                    elseif($size == "jumbo"){
                                        $totaljumbo = $quantity * $Jumbo;
                                        $total += $totaljumbo;
                                        echo "<li> $quantity $phase of Jumbo $products amounting $totaljumbo ";
                                    }elseif($size == "regular"){
                                        $totalregular = $quantity * $regular;
                                        $total += $totalregular;
                                        echo "<li> $quantity $phase of Regular $products amounting $totalregular ";
                                    }
                                }

                            }
                            $totalProductSold = $productSelected * $quantity;
                            echo "<p class='m-0'> <b> Total Items: $totalProductSold </b> </p>";
                            echo "<p class='m-0'> <b> Total Items price : $total </b> </p>";
                        }else{
                            echo "<p> No Currently Orders </p>";
                        }

                    }
                    

                ?>
            </ul>
        </div>
    </div>



</body>
</html>