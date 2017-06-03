<?
	require_once('root.php');
	require_once('../class/HtmlCodeGenerator.php');
	$params = $_POST;
	switch($params['formName']) {
		case 'cardSteps':
			$content = HtmlCodeGenerator::getHtmlCodeForCardSteps($params);
			break;
		case 'instruction':
			$content = HtmlCodeGenerator::getHtmlCodeForInstruction($params);
			break;
		case 'questions':
			$content = HtmlCodeGenerator::getHtmlCodeForQuestions($params);
			break;
		case 'request':
			$content = HtmlCodeGenerator::getHtmlCodeForRequest($params);
			break;
		case 'slider':
			$content = HtmlCodeGenerator::getHtmlCodeForSlider($params);
			break;
	}


	$arr = array(
		'body' => $content
	);
	echo json_encode($arr);
?>
