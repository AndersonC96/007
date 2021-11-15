<?php
    require("connection.php");
    $film_id = $_GET['film'];// obter id do filme a partir da url
	$apiKey = "43550673";// chave da api
	function fetch_film_info($api_key, $film_id){// função para obter informações do filme
        $query = array(// array com as informações a serem obtidas
            "apikey" => $api_key,// chave da api
            "i" => $film_id,// id do filme
            "plot" => "full"// informações a serem obtidas
        );
		$url = "http://www.omdbapi.com/?".http_build_query($query);// url para obter informações do filme
		$ch = curl_init();// inicializar curl
		curl_setopt($ch, CURLOPT_HEADER, 0);// não mostrar cabeçalho
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);// mostrar conteúdo
		curl_setopt($ch, CURLOPT_URL, $url);// url
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);// seguir redirecionamentos
		curl_setopt($ch, CURLOPT_VERBOSE, 0);// não mostrar informações de debug
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// não verificar certificado SSL
		$response = curl_exec($ch);// obter resposta
		curl_close($ch);// fechar conexão
		$data = json_decode($response);// decodificar resposta
		return $data;// retornar dados
    }
    $sql = sprintf("SELECT trailer FROM films WHERE imdb_id='%s'", $film_id);// obter trailer do filme
    $result = $conn->query($sql);// executar query
    if($result->num_rows > 0){// se houver resultados
        while($row = $result->fetch_assoc()){// obter resultados
            $trailer_video_url = $row["trailer"];// obter trailer do filme
            break;// sair do loop
        }
    }
    $data = fetch_film_info($apiKey, $film_id);// obter informações do filme
    $trailer_video_url = "trailers/".$trailer_video_url;// url do trailer
?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<title><?= $data->Title ?></title>
		<!--bootstrap-css-->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<!--My css style-->
		<link rel="stylesheet" href="css/styles.css">
        <!-- title icon-->
        <link type="image/x-icon" rel="icon" href="images/icon.svg">
	</head>
	<body class="bg">
		<div class="container">
            <div class="col-12">
                <center><a href="index.php"><img class="subpage-logo" src="images/logo.png" height="150px"></a></center>
            </div>
            <div class="row">
                <div class="col-12 col-md-12 series-title">
                    <?php
                        echo sprintf("<h1>%s</h1>", $data->Title);
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-3">
                    <?php
                        echo sprintf("<p><img class='sub-series-img' src='%s' width='100%%' ></p>", $data->Poster);
                    ?>
                </div>
                <div class="col-12 col-md-9">
                    <p class="plotTitle"><strong>Released</strong></p>
                    <?php echo sprintf("<p class='released'>%s</p>", $data->Released);?>
                    <p class="plotTitle"><strong>Runtime</strong></p>
                    <?php echo sprintf("<p class='runtime'>%s</p>", $data->Runtime);?>
                    <p class="plotTitle"><strong>Rated</strong></p>
                    <?php echo sprintf("<p class='runtime'>%s</p>", $data->Rated);?>
                    <p class="plotTitle"><strong>Genre(s)</strong></p>
                    <?php echo sprintf("<p class='genre'>%s</p>", $data->Genre);?>
                    <p class="plotTitle"><strong>Director</strong></p>
                    <?php echo sprintf("<p class='director'>%s</p>", $data->Director);?>
                    <p class="plotTitle"><strong>Writer(s)</strong></p>
                    <?php echo sprintf("<p class='writer'>%s</p>", $data->Writer);?>
                    <p class="plotTitle"><strong>Actors</strong></p>
                    <?php echo sprintf("<p class='actors'>%s</p>", $data->Actors);?>
                    <p class="plotTitle"><strong>Plot</strong></p>
                    <?php echo sprintf("<p class='plot'>%s</p>", $data->Plot);?>
                    <p class="plotTitle"><strong>Language</strong></p>
                    <?php echo sprintf("<p class='language'>%s</p>", $data->Language);?>
                    <p class="plotTitle"><strong>Country</strong></p>
                    <?php echo sprintf("<p class='country'>%s</p>", $data->Country);?>
                    <p class="plotTitle"><strong>Awards</strong></p>
                    <?php echo sprintf("<p class='awards'>%s</p>", $data->Awards);?>
                    <p class="plotTitle"><strong>Ratings</strong></p>
                    <?php
                        foreach($data->Ratings as $ratings){// percorrer ratings
                            echo sprintf("<p class='ratings'><strong>%s:</strong> %s</p>", $ratings->Source, $ratings->Value);// exibir rating
                        }
                    ?>
                    <p class="plotTitle"><strong>Box Office</strong></p>
                    <?php echo sprintf("<p class='boxOffice'>%s</p>", $data->BoxOffice);?>
                    <p class="plotTitle"><strong>Production</strong></p>
                    <?php echo sprintf("<p class='production'>%s</p>", $data->Production);?>
                </div>
                <div class="col-12 col-md-12 trailer">
                    <video width='100%' controls >
                        <?php
                            echo sprintf("<source src='%s' type='video/mp4' />", $trailer_video_url);
                        ?>
                    </video>
                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </body>
</html>