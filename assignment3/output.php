<!--
    Name: Nur Ain binti Lizam
    Matric Number: 2127942
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>output.php</title>
    <!--CSS Part-->
    <style>
        body{
            font-family:'Times New Roman', Times, serif;
            background-color: fuchsia;
            margin:0;
            padding:0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        h2{
            text-align: center;
        }
        .container{
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1)
        }
        .result{
            margin-top: 20px;
            text-align: center;
            justify-content: center;
        }
        .result p{
            margin:0;
            font-size: 25px;
            color: #333;
        }
        .bold{
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Result in Celcius (°C)</h2>

    <div class="result">
    <?php 
    //function
    function FahrenheitToCelsius ($fahrenhait)
    {
        $celsius = round (($fahrenhait - 32) * 5 ) / 9;
        return $celsius;
    }
    //output//
    if(isset($_POST["country"]) && isset($_POST["fahrenhait"]))
    {
        if(is_string($_POST["country"]) && (is_numeric($_POST["fahrenhait"])))
        {
        $country = $_POST["country"];
        $fahrenheit = $_POST["fahrenhait"];
        $celsius = FahrenheitToCelsius($fahrenheit);
        echo "<p>A country of</p>
              <p><span class='bold'>$country</span></p>
              <p>is currently</p> 
              <p><span class='bold'>$celsius</span></p>
              <p>degrees Celsius.</p>";
        } 
        else{
            echo "<p>Please provide a country and Fahrenheit temperature.</p>";
        }
    } 
    else{
        echo "<p>Please provide a country and Fahrenheit temperature.</p>";
    }
    ?>
    </div>
    </div>
</body>
</html>