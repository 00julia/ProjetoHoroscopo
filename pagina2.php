<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    
    <?php
        $data = date_parse($_GET["data"]);
        
        switch($data["month"]){
             case 1:
                if($data["day"] >= 20){
                    echo "<capricornio.jpg'>";
                } else{
                    echo "<aquarius.jpg'>";
                }
                break;
            case 2:
                if($data["day"] >= 21){
                    echo "<aquarius.jpg'>";
                }else{
                    echo "<peixes.jpg'>";
                }
                break;
            case 3:
                if($data["month"] == 9 and $data["day"] >= 23){
                    echo "<img src='img/primavera.png'>";
                } else {
                    echo "<img src='img/inverno.png'>";
                }
                break;
            case 10:
            case 11:
            case 12:
                if($data["month"] == 12 and $data["day"] >= 22){
                    echo "<img src='img/verao.png'>";
                } else {
                    echo "<img src='img/primavera.png'>";
                }
                break;
            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
        }

    ?>

</body>
</html>