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
                    echo "capricornio.jpg";
                } else{
                    echo "aquarius.jpg";
                }
                break;
            case 2:
                if($data["day"] >= 20){
                    echo "<aquarius.png>";
                }else{
                    echo "<peixes.png>";
                }
                break;
            case 3:
                if($data["day"] >= 19){
                    echo "<.jpg>";
                } else {
                    echo "<.jpg>";
                }
                break;
            case 4:
                if( $data["day"] >= 22){
                    echo "<.jpg>";
                } else {
                    echo "<.jpg>";
                }
                break;
            case 5:
                if( $data["day"] >= 22){
                    echo "<.jpg>";
                } else {
                    echo "<.jpg>";
                }
                break;      
            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
        }

    ?>

</body>
</html>