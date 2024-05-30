<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student.php</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:bisque;
            margin: 0;
            padding: 0;
        }

        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .minimalist-form {
            background-color:white;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }

        .minimalist-form h2 {
            margin-top: 0;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        button[type="submit"] {
            display: block;
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 4px;
            background-color:chocolate;
            color: white;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color:brown;
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="minimalist-form" action="welcome.php" method="post">
            <h2>Student Details</h2>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="matricID">Matric ID:</label>
                <input type="matricID" id="matricID" name="matricID" required>
            </div>

            <div class="form-group">
                <label for="phone">Phone number:</label>
                <input type="tel" id="phone" name="phone" required>
            </div>
        
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>

<!--<html>
<body>
<form action="welcome.php" method="post">
Name: <input type="text" name="name"><br>
E-mail: <input type="text" name="email"><br>
Phone number: <input type="num" name="phone"><br>
<input type="submit">
</form>
</body>
</html> -->