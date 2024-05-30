<!--
    Name: Nur Ain binti Lizam
    Matric Number: 2127942
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>input.php</title>
    <!--CSS part-->
    <style>
    body{
        font-family:'Times New Roman', Times, serif;
        background-color: fuchsia;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
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

    .detail{
        margin-bottom: 20px;
    }
    .detail label{
        display: block;
        margin-bottom: 5px;
    }
    .detail input{
        width:100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    button[type="submit"]{
        display: block;
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color:mediumvioletred;
        color: white;
        cursor: pointer;
    }
    button:hover{
        background-color:blueviolet;
    }
    </style>
</head>
<!--User Interface Form-->
<body>
    <div class="container">
        <form class="minimalist-form" action="output.php" method="post">
            <h2>Fahrenhait to Celsius Converter</h2>
            <div class="detail">
                <label for="country">Country Name:</label>
                <input type="text" name="country">
            </div>
            <div class="detail">
                <label for="fahrenhait">Fahrenhait (°F):</label>
                <input type="number" name="fahrenhait">
            </div>
            <button type="submit">Convert</button>
        </form>
    </div>
</body>
</html>



