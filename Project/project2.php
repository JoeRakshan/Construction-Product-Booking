
<!DOCTYPE html>
<html>
<head>
    <title>AJJ CONSTRUCTIONS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("GettyImages-941748918-5c7f3654c9e77c00012f82f6.jpg");
            background-size: cover;
            background-position: cover;
            color: white;
            font-size: 25px;
            font-family: 'Times New Roman', Times, serif;
            align:"center";
        }

        #formbg {
            background-color: rgba(4, 7, 8, 0.5);
            border-radius: 20px;
            padding: 40px;
            margin-top: 10px;
        }

        
        }
        .btn-danger {
            font-size: 25px;
        }
       
    </style>
     <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="jquery.js"></script>
    <script>
        $(document).ready(function()
        {
           $('#LOCATION').on('change', function()
           {
            calculateTotal();
           });
        $('#cements').on('input', function()
        {
            calculateTotal();
        });
        function calculateTotal()
        {
            var location = $('#LOCATION').val();
            var count = parseFloat($('#cements').val()) || 0; // Get the number of bricks, default to 0 if empty or non-numeric
            var price;
            switch (location)
            {
                case "alangulam":
                    price = 400;
                    break;    
                   default:
                    price = 0; 
                case "ambasamudram":
                    price = 400;
                    // break;    
                    // default:
                    // price = 0; 
                case "nanguneri":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0; 
                case "palayamkottai":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0; 
                case "radhapuram":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0; 
                case "sankarankoil":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0; 
                case "senkottai":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0;
                case "sivagiri":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0;
                case "tenkasi":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0;
                case "tirunelveli":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0; 
                case "veerakelamputhur":
                    price = 400;
                //     break;    
                //     default:
                //     price = 0; 
            }
            
            var total = count * price;
            $('#result').text('Total Price: ₹' + total.toFixed(2));

            $('#totalAmount').val(total);
        }
        });
</script>
<script>
        if (window.history.replaceState)
        {
            window.history.replaceState(null,null,window.location.href)
        }
</script>
</head>
<body>
    <div class="container">
            <h1>ORDERS FOR CEMENTS</h1>
            
            <div id="formbg">
                <form method="post">
                <div class="form-group ">
                        <label for="LOCATION" class="col-sm-4 col-form-label form-label">LOCATION:</label>
                        <div class="col-sm-8">
                            <select class="form-control" id="LOCATION" name="LOCATION">
                                <option value="">-(Please select  your location)-</option>
                                <option value="alangulam">alangulam</option>
                                <option value="ambasamudram">ambasamudram</option>
                                <option value="nanguneri">nanguneri</option>
                                <option value="palayamkottai">palayamkottai</option>
                                <option value="radhapuram">radhapuram</option>
                                <option value="sankarankoil">sankarankoil</option>
                                <option value="senkottai">senkottai</option>
                                <option value="sivagiri">sivagiri</option>
                                <option value="tenkasi">tenkasi</option>
                                <option value="tirunelveli">tirunelveli</option>
                                <option value="veerakelamputhur">veerakelamputhur</option>
                            </select>
                        </div>
                    </div>
                    
                    <div class="form-group ">
                        <label for="NO_OF_PACKS" class="col-sm-4 col-form-label form-label">NO.OF PACKS:</label>
                        <div class="col-sm-8">
                            <input type="number"id="cements" name="NO_OF_PACKS" class="form-control" required="">
                        </div>
                    </div>
                    
                                    <div class="form-group">
                    <label for="NO_OF_kilo" class="col-sm-4 col-form-label form-label">NO.OF KILOGRAM:</label>
                    <div class="col-sm-8">
                        <select id="cements" name="KILO" class="form-control" required="">
                            <option value="">Select Kilogram</option>
                            <option value="50">50 KG</option>
                            
                        </select>
                    </div>
                </div>

                    <div class="form-group ">
                        <label for="NAME_OF_CUSTOMER" class="col-sm-4 col-form-label form-label">CUSTOMER NAME:</label>
                        <div class="col-sm-8">
                            <input type="text" id="NAME_OF_CUSTOMER" name="NAME_OF_CUSTOMER" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="ADDRESS_OF_CUSTOMER" class="col-sm-4 col-form-label form-label">ADDRESS:</label>
                        <div class="col-sm-8">
                            <input type="text" id="ADDRESS_OF_CUSTOMER" name="ADDRESS_OF_CUSTOMER" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="DELIVERY_ADDRESS" class="col-sm-4 col-form-label form-label">DELIVERY ADDRESS:</label>
                        <div class="col-sm-8">
                            <input type="text" id="DELIVERY_ADDRESS" name="DELIVERY_ADDRESS" class="form-control" required="">
                        </div>
                    </div>
                    <div class="form-group ">
                        <label for="GPAY_NUMBER" class="col-sm-4 col-form-label form-label">GPAY NUMBER:</label>
                        <div class="col-sm-8">
                            <input type="number" id="GPAY_NUMBER" name="GPAY_NUMBER" class="form-control" required="">
                        </div>
                    </div>
                    <div id="result" name="result"></div>
                        <input type="hidden" id="totalAmount" name="totalAmount" value="0">
                        <input type="submit" name="submit" id="sumbit">
                </form>
            </div>
    
    </div>
   
   </body>
</html>
<?php
    $host = "localhost:3306";
    $user = "root";
    $pwd = "";
    $db = "ajj_construction";
    $conn = mysqli_connect($host, $user, $pwd, $db) or die("unable to connect");

    if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") 
    {
$LOCATION = $_POST['LOCATION'];
 $PACKS = $_POST['NO_OF_PACKS'];
 $KILO=$_POST['KILO'];
 $NAME = $_POST['NAME_OF_CUSTOMER'];
$ADDRESS = $_POST['ADDRESS_OF_CUSTOMER'];
$DELIVERY = $_POST['DELIVERY_ADDRESS'];
$MOBILE = $_POST['GPAY_NUMBER'];
$amount = $_POST['totalAmount'];
$sql = 'select available_stock from stock_details where item = "cements"';
        $runsql = mysqli_query ($conn,$sql);
        $rows = mysqli_fetch_assoc($runsql);
        $db_available_stock = $rows["available_stock"];




        if ($db_available_stock > $PACKS) 
        {
            $query = "INSERT INTO order_details_cements (location, no_of_packs,kilo, customer_name, address, dev_address, mobile_number, amount) VALUES ('$LOCATION','$PACKS','$KILO','$NAME','$ADDRESS','$DELIVERY','$MOBILE','$amount')";
            $run = mysqli_query($conn, $query);
    
            if ($run) 
            {
                echo '<script>alert("Order placed successfully!")
                window.location.replace("paymentpage.html");
                </script>';
            } 
            else
            {
                echo "<h1>Error: Unable to place the order.</h1>";
            }
        } 
        else 
        {
            echo '<script>alert("Only ' . $db_available_stock . ' Stock Available");</script>';
        }
        
    }
?>
