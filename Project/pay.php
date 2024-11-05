
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tamil Nadu Banks Net Banking</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: beige;
        }
        
        h1, h2, h3 {
            text-align: center;
            padding: 20px;
            color: #333;
        }
        
        table {
            width: 100%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        
        th {
            background-color: #f2f2f2;
        }
        
        tr:hover {
            background-color: #f5f5f5;
        }
        
        a {
            color: #007bff;
            text-decoration: none;
        }
        
        a:hover {
            text-decoration: underline;
        }
        
        #qrcode {
            width: 100px;
            margin: auto;
            display: block;
        }
        
        .bottom-link {
            display: block;
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: #007bff;
        }

    </style>
</head>
<body>
    <div class="container">
        <h1> Net Banking Links Tamil Nadu</h1>
        <h2>Account number: 2902014641</h2>
        <h3>IFSC: CBIN0280932</h3>
        
        <table class="table table-bordered">
            <thead class="thead-light">
                <tr>
                    <th>s.no</th>
                    <th>Net Banking Link</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Bank 1</td>
                    <td><a href="https://tmb.in/">Tamilnadu Merchantile Bank (TMB)</a></td>
                </tr>
                <tr>
                    <td>Bank 2</td>
                    <td><a href="https://www.onlinesbi.sbi/">State Bank Of India (SBI)</a></td>
                </tr>
                <tr>
                    <td>Bank 3</td>
                    <td><a href="https://www.iob.in/Default.aspx">Indian Overseas Bank (IOB)</a></td>
                </tr>
                <tr>
                    <td>Bank 4</td>
                    <td><a href="https://canarabank.com/">Canara Bank</a></td>
                </tr>
                <tr>
                    <td>Bank 5</td>
                    <td><a href="https://www.centralbankofindia.co.in/en">Central Bank Of India (CBI)</a></td>
                </tr>
                <tr>
                    <td>Bank 6</td>
                    <td><a href="https://canarabank.com/">Axis Bank</a></td>
                </tr>
                <tr>
                    <td>Bank 7</td>
                    <td><a href="https://www.unionbankofindia.co.in/english/home.aspx">Union Bank Of India</a></td>
                </tr>
                <tr>
                    <td>Bank 8</td>
                    <td><a href="https://www.hdfcbank.com/">HDFC Bank</a></td>
                </tr>
            </tbody>
        </table>
        <div class="text-center">
        <h2>Attach Screenshot</h2>
        <form id="uploadForm" enctype="multipart/form-data">
            <input type="file" id="screenshot" name="screenshot" accept="image/*">
            <button type="button" onclick="uploadScreenshot()" class="btn btn-primary">Upload</button>
        </form>
        <div id="uploadStatus"></div>
    </div>  
    <?php
if(isset($_FILES['screenshot'])) {
    // Database configuration
    $servername = "localhost"; // Change this to your database server
    $username = "root"; // Change this to your database username
    $password = ""; // Change this to your database password
    $dbname = "ajj_construction"; // Change this to your database name

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $file_name = $_FILES['screenshot']['name'];
    $file_tmp = $_FILES['screenshot']['tmp_name'];

    // Move uploaded file to a permanent location
    $upload_dir = "C:/xampp/htdocs/Project/uploads/"; // Change this to your upload directory path
    $file_path = $upload_dir . $file_name;

    if(move_uploaded_file($file_tmp, $file_path)) {
        // File uploaded successfully, insert into database
        $upload_time = date('Y-m-d H:i:s'); // Current timestamp
        $sql = "INSERT INTO uploaded_files (file_name, file_path, upload_time) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sss", $file_name, $file_path, $upload_time);

        if ($stmt->execute()) {
            echo "File uploaded successfully and inserted into database.";
        } else {
            echo "Error executing SQL query: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "Error uploading file.";
    }

    $conn->close();
} 
?>



        <div class="text-center">
            <h2>Scan QR Code for Payment</h2>
            <img id="qrcode" src="IMG_20230803_211142.jpg" alt="QR code">
        </div>

        <a class="bottom-link" href="index.html">HOME</a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
    function uploadScreenshot() {
        var fileInput = document.getElementById('screenshot');
        var file = fileInput.files[0];
        if (file) {
            var formData = new FormData();
            formData.append('screenshot', file);

            $.ajax({
                url: 'pay.php',
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#uploadStatus').text('Upload successful.');
                    console.log('Upload successful.');
                    // You can handle the response here
                },
                error: function(xhr, status, error) {
                    $('#uploadStatus').text('Upload failed: ' + error);
                    console.error('Upload failed: ' + error);
                    // You can handle the error here
                }
            });
        } else {
            $('#uploadStatus').text('Please select a file to upload.');
            console.error('Please select a file to upload.');
        }
    }
</script>

</body>
</html>


