<?php
require './Classes/OpenWheatherApi.php';
$openWheater = new OpenWheatherApi();
$clima = $openWheater->getClima();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="background"></div>

<div class="weather">
		<div class="fundo1"></div>
	
		<h2>
			<i class="fas fa-map-marker-alt"></i>
			<?php echo $clima->cidade;?>
	</h2>
	 <div class="tempo">
		 <h1><?php echo $clima->getTemperaturaCelsius();?>°</h1>
         <h1><?php echo $clima->getTemperaturaFahrenheit();?>°F</h1>
         <h1><?php echo $clima->temperatura;?>K</h1>
		 <div class="right">
			 <span><i class="fas fa-cloud-rain"></i>
				   <?php echo $clima->humidade;?>
			 </span>
			 <span><i class="fas fa-wind"></i>
             <?php echo $clima->velocidadeVento;?>m/s
			 </span>
             <span><i class="fas fa-wind"></i>
             <?php echo $clima->pressao;?>
			 </span>
             <span><?php echo $clima->descricao ?></span>
		 </div>
	</div>
</div>
</body>
</html>
