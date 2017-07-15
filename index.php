<?php

require_once('inc/moeda.php');

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="robots" content="index, follow" />
	<meta name="Sistema Produzido Com Intuito de Manipular Informações de um Formulário com PHP, jQuery e AJAX"/>

	<title>Formulário Ajax</title>

	<link rel="canonical" href="index">
	<link rel="stylesheet" href="css/boot.css">
</head>
<body class="content">
	<header class="sectiontitle">
		<h1>Formulário Ajax</h1>
	</header>

	<article class="box box-full bg-light">
		<form class="j_submit" id="form" name="j_submit" method="post">
			<label>
				<span>Informe o Valor Monetário:</span>
				<input class="js-currency" type="text" name="valor"/>
			</label>

			<label>
				<span>Informe o Valor da Nota:</span>
				<input class="" type="text" name="nota"/>
			</label>

			<input class="btn btn-blue" type="submit" name="SendPostForm">

			<?php

			$data = filter_input_array(INPUT_POST, FILTER_DEFAULT);

			if ($data != null && !in_array('', $data)):
				unset($data['SendPostForm']);
				
				$moeda = new Moeda($data['valor'], $data['nota']);

				$result = $moeda->getResult();

				//echo ceil(number_format($result, 2, ",", "."));
			else:
				echo "";

			endif;

			?>

			<div class="">
				<span class="trigger-close j_close"></span>
				<p></p>
			</div>
		</form>

	</article>

	<script src="js/jquery.js"></script>
	<script src="js/jquery.maskMoney.min.js"></script>ipt
	<script src="js/scripts.js"></script>
</body>
</html>