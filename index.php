<?php
    require("connection.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>007</title>
		<!--bootstrap-css-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!--My css style-->
		<link rel="stylesheet" href="css/styles.css">
		<!-- title icon-->
		<link type="image/x-icon" rel="icon" href="images/icon.svg">
        <embed name="myMusic" loop="true" hidden="true" src="./music.mp3"></embed>
	</head>
	<body class="bg">
		<div class="container">
			<div class="col-12 bg-img"></div>
			<div class="row">
                <?php
                    $sql = "SELECT filmname, imdb_id, year, poster FROM films";//SQL query
                    $result = $conn->query($sql);// Execute a query
                    if($result->num_rows > 0){// Se houver resultados
                        while($row = $result->fetch_assoc()){// Enquanto houver resultados
                            $filename = $row["filmname"];// Nome do filme
                            $year = $row["year"];// Ano do filme
                            $imdb_id =  $row["imdb_id"];// IMDB ID do filme
                            $poster =  $row["poster"];// Poster do filme
                            echo "<div class='col-lg-3 col-md-4 col-sm-6 col-6 series'>";
                            echo sprintf("<a href='film.php?film=%s'><img src='poster/%s'></a>", $imdb_id, $poster);
                            echo "<div class='subtitle'>".$filename."</div></div>";
                        }
                    }
                    $conn->close();// Close connection
                ?>
            </div>
        </div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>