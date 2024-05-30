<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank You!</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:bisque;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            text-align: center;
        }

        .container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            max-width: 400px;
        }

        h2 {
            margin-top: 0;
            margin-bottom: 20px;
            color:brown; /* IIUM Green */
        }

        p {
            margin-bottom: 10px;
        }

        .details {
            margin-top: 20px;
            margin-bottom: 10px;
            border-top: 1px solid #ccc;
            padding-top: 20px;
            text-align: left;
        }

        .details p {
            margin-bottom: 10px;
        }

        .button {
            background-color:chocolate; /* IIUM Green */
            margin-bottom: 10px;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #005200; /* Slightly darker green on hover */
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Thank You for Your Submission!</h2>
        
        <div class="details">
            <p>Welcome <?php echo $_POST["name"]; ?></p>
            <p>Your email address is: <?php echo $_POST["email"]; ?></p>
            <p>Your matric ID is: <?php echo $_POST["matricID"]; ?></p>
            <p>Your phone number is: <?php echo $_POST["phone"]; ?></p>
        </div>

        <a href="index.html" class="button">Return to Form</a>
    </div>
</body>
</html>

<!--<html>
<body>
Welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?><br>
Your phone number is: <?php echo $_POST["phone"]; ?>
</body>
</html>-->


