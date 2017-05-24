<?php
	$ROOT = '..';
	class HtmlCodeGenerator {
		public static function getHtmlCodeForCardSteps($params) {
			$code = self::render('cardSteps',$params);
			return $code;
		}
		public static function getHtmlCodeForInstruction($params) {
			$code = self::render('instruction',$params);
			return $code;
		}
		public static function getHtmlCodeForQuestions($params) {
			$code = self::render('questions',$params);
			return $code;
		}
		public static function getHtmlCodeForRequest($params) {
			$code = self::render('request',$params);
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