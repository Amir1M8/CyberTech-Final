<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CyberTech - Security Fields</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/footer.css">
    <link rel="stylesheet" href="../../css/header.css">
    <script src="../../js/functions.js"></script>
    <link rel="shortcut icon" href="../../assets/images/Logo.ico"/>
    <style>
        body {
            margin: 0;
            padding: 0;
            position: relative;
            overflow: hidden;   
        }

        body::before {
            content: "";
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: url("../../assets/images/image9.jpg");
            background-size: cover;
            background-position: center;
            filter: blur(8px);
            z-index: -1;
            transform: scale(1.1);
        }

        .content-box {
            width: 90%;              
            max-width: 1500px; 
            margin: 120px auto 50px auto;
            background: #12140ead; 
            color: white;               
            padding: 30px;
            border-radius: 15px;    
            box-shadow: 0 0 20px rgba(0,0,0,0.5); 
            backdrop-filter: blur(2px); 
        }
  </style>
</head>
<body>
    <?php
        session_start();
        include "../../html/en/header.php";
    ?>
    <div class="content-box">
    <h1>Cyber Security Fields</h1>
    </div>
</body>
</html>