
<!DOCTYPE html>
<html>
<head>
    <title>AJJ CONSTRUCTIONS</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-image:url("rod.jpg");
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

        #qrcode {
            position: fixed;
            bottom: 20px;
            right: 20px;
            width: 100px;
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
           $('#LENGTH').on('change', function()
           {
            calculateTotal();
           });
        $('#to').on('input', function()
        {
            calculateTotal();
        });
        function calculateTotal()
        {
            var length = $('#LENGTH').val();
            var count = parseFloat($('#to').val()) || 0; // Get the number of bricks, default to 0 if empty or non-numeric
            var price;
            switch (length)
            {
                case "10 mm":
                    price = 75;
                    break;    
                default:
                    price = 0; 
                    case "12 mm":
                    price = 74.5;
                    break;    
                
                
                    case "16 mm":
                    price = 74.5;
                    break; 
                
                    case "20 mm":
                    price = 73.5;
                    break; 
               
                    case "25 mm":
                    price = 72.5;
                    break; 
               
                    case "28 mm":
                    price = 71.5;
                    break; 
                
                    case "32 mm":
                    price = 70.5;
                    break; 
               
                    case "5.5 mm":
                    price = 78.5;
                    break; 
                
                    case "6 mm":
                    price = 77.5;
                    break; 
               
                    case "8 mm":
                    price = 76.5;
                    break; 
               
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
        <h1>ORDERS FOR RODS</h1>
        
        <div id="formbg">
            <form method="post">
            <div class="form-group ">
                    <label for="LOCATION" class="col-sm-4 col-form-label form-label">LOCATION:</label>
                    <div class="col-sm-8">
                        <select class="form-control" id="LOCATION" name="LOCATION">
                            <option value="">-(Please select your location)-</option>
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

                <div class="form-group">
    <label for="LENGTH" class="col-sm-4 col-form-label form-label">LENGTH:</label>
    <div class="col-sm-8">
        <select name="LENGTH" id="LENGTH"  class="form-control" required="">
            <option value="">select length</option>
            <option value="10 mm">10 mm</option>
            <option value="12 mm">12 mm</option>
            <option value="16 mm">16 mm</option>
            <option value="20 mm">20 mm</option>
            <option value="25 mm">25 mm</option>
            <option value="28 mm">28 mm</option>
            <option value="32 mm">32 mm</option>
            <option value="5.5 mm">5.5 mm</option>
            <option value="6 mm">6 mm</option>
            <option value="8 mm">8 mm</option>


            <!-- Add more options as needed -->
        </select>
    </div>

                </div>
                <div class="form-group ">
                    <label for="TON" class="col-sm-4 col-form-label form-label">KG Required:</label>
                    <div class="col-sm-8">
                        <input type="number" name="TON" id="to" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="NAME_OF_CUSTOMER" class="col-sm-4 col-form-label form-label">CUSTOMER NAME:</label>
                    <div class="col-sm-8">
                        <input type="text" name="NAME_OF_CUSTOMER" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="ADDRESS_OF_CUSTOMER" class="col-sm-4 col-form-label form-label">ADDRESS :</label>
                    <div class="col-sm-8">
                        <input type="text" name="ADDRESS_OF_CUSTOMER" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="DELIVERY_ADDRESS" class="col-sm-4 col-form-label form-label">DELIVERY :</label>
                    <div class="col-sm-8">
                        <input type="text" name="DELIVERY_ADDRESS" class="form-control" required="">
                    </div>
                </div>
                <div class="form-group ">
                    <label for="GPAY_NUMBER" class="col-sm-4 col-form-label form-label">GPAY NUMBER:</label>
                    <div class="col-sm-8">
                        <input type="number" name="GPAY_NUMBER" class="form-control" required="">
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
$host="localhost:3306";
$user="root";
$pwd="";
$db="ajj_construction";
$conn=mysqli_connect($host,$user,$pwd,$db) or die("unable to connect");
if (isset($_POST['submit']) && $_SERVER["REQUEST_METHOD"] == "POST") 
{
    $LOCATION = $_POST['LOCATION'];
 $LEN = $_POST['LENGTH'];
 $TO = $_POST['TON'];
$NAME = $_POST['NAME_OF_CUSTOMER'];
$ADDRESS = $_POST['ADDRESS_OF_CUSTOMER'];
$DELIVERY = $_POST['DELIVERY_ADDRESS'];
$MOBILE = $_POST['GPAY_NUMBER'];
$amount = $_POST['totalAmount'];
$sql = 'select available_stock from stock_details where item = "steel"';
        $runsql = mysqli_query ($conn,$sql);
        $rows = mysqli_fetch_assoc($runsql);
        $db_available_stock = $rows["available_stock"];




        if ($db_available_stock > $TO) 
        {

     $query="insert into order_details_steel(location,length,ton,customer_name, address, dev_address, mobile_number, amount) values('$LOCATION','$LEN','$TO','$NAME','$ADDRESS','$DELIVERY','$MOBILE','$amount')";

    $run=mysqli_query($conn,$query);

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
