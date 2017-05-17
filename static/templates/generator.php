<?
	require_once('../class/HtmlCodeGenerator.php');
	//print_r($_POST);
	/*$stepsCounter = $_POST['stepsCounter'];
	$stepsIco = $_POST['stepIco'];
	$stepsTitle = $_POST['stepTitle'];
	$stepsText = $_POST['stepText'];*/
	$params = $_POST;

	/*switch($params['formName']) {
		case 'cardSteps':
			$content = HtmlCodeGenerator::getHtmlCodeForCardSteps($params);
			break;
	}*/
		$content = HtmlCodeGenerator::getHtmlCodeForCardSteps($params);

	$arr = array(
		//'body' => HtmlCodeGenerator::getHtmlCodeForCardSteps($stepsCounter, $stepsIco, $stepsTitle, $stepsText)
		'body' => $content
	);
	echo json_encode($arr);
?>
