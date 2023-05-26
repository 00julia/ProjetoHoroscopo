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
            
                if($data["month"] == 1 and $data["day"] >= 20){
                    echo "<p> Você é Aquario </p>";
                } else{
                    echo "<p> Você é Capricornio </p>";
                }
                break;
            case 2:
            
                if($data["month"] == 2 and $data["day"] >= 19){
                    echo "<p> Você é Peixes </p>";
                }else{
                    echo "<p> Você é Aquario </p>";
                }
                break;
            case 3:
            
                if($data["month"] == 3 and $data["day"] >= 21){
                    echo "<p> Você é Aries </p>";
                } else {
                    echo "<p> Você é Peixes </p>";
                }
                break;
            case 4:
            
                if($data["month"] == 4 and $data["day"] >= 20){
                    echo "<p> Você é Touro </p>";
                } else {
                    echo "<p> Você é Aries </p>";
                }
                break;
            case 5: 

                if($data ["month"] == 5 and $data["day"] >=21) {
                    echo "<p> Você é Gemêos </p>";
                } else {
                    echo "<p> Você é Touro <p>";
                }
                break;
                
            case 6: 

                if($data ["month"] == 6 and $data["day"] >=21) {
                    echo "<p> Você é Cancer </p>";
                } else {
                    echo "<p> Você é Gemêos </p>";
                }
                break;
            case 7: 

                if($data ["month"] == 7 and $data["day"] >=23) {
                    echo "<p> Você é Leão </p>";
                } else {
                    echo "<p> Você é Cancer </p>";
                }
                break;
            case 8: 

                if($data ["month"] == 8 and $data["day"] >=23) {
                        echo "<p> Você é Virgem </p>";
                } else {
                        echo "<p> Você é Leão </p>";
                }
                break;    
            case 9: 

                if($data ["month"] == 9 and $data["day"] >=23) {
                        echo "<p> Você é Libra </p>";
                } else {
                        echo "<p> Você é Virgem </p>";
                }
                break;
            case 10: 

                if($data ["month"] == 10 and $data["day"] >=22) {
                        echo "<p> Você é Escorpião </p>";
                } else {
                        echo "<p> Você é Libra </p>";
                }
            case 11: 

                if($data ["month"] == 11 and $data["day"] >=22) {
                        echo "<p> Você é Sagitário </p>";
                } else {
                        echo "<p> Você é Escorpião </p>";
                }
                break;
            case 12: 

                if($data ["month"] == 12 and $data["day"] >=22) {
                        echo "<p> Você é Capricornio </p>";
                } else {
                        echo "<p> Você é Sagitário </p>";
                }
                break;
                          
            default:
                echo "<p>Mês " .$data["month"]. " incorreto!</p>";        
        }

    ?>

</body>
</html>