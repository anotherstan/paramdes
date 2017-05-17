<?
	require_once('../class/HtmlCodeGenerator.php');
	//print_r($_POST);
	$stepsCounter = $_POST['stepsCounter'];
	$stepsIco = $_POST['stepIco'];
	$stepsTitle = $_POST['stepTitle'];
	$stepsText = $_POST['stepText'];

	$arr = array(
		'body' => HtmlCodeGenerator::getHtmlCodeForCardSteps($stepsCounter, $stepsIco, $stepsTitle, $stepsText)
	);
	echo json_encode($arr);
?>
