<?php
	$ROOT = '..';
	class HtmlCodeGenerator {
		public static function getHtmlCodeForCardSteps($stepsCounter, $stepsIco, $stepsTitle, $stepsText) {
			$params = array(
				'stepsCounter' => $stepsCounter,
				'stepsIco' => $stepsIco,
				'stepsTitle' => $stepsTitle,
				'stepsText' => $stepsText,
			);
			$code = self::render('cardSteps',$params);
			return $code;
		}

		private static function render($viewName, $data) {
			global $ROOT;
			$parameters = $data;

			ob_start();
			require $ROOT . '/views/' . $viewName . '.php';
			$content = ob_get_contents();

			ob_end_clean();

			return $content;
		}
	}
?>