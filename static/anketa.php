<?include "includes/header-empty.php"?>
	<div class="grid" data-no-fixed-footer>
		<div class="anketa" data-anketa>
			<?include "includes/anketa/nav.php"?>
			<div class="grid__inner">
				<div class="anketa__content">
					<form action="">
						<div class=""  data-anketa-step="1">
							<?include "includes/anketa/step1.php"?>
						</div>
						<div class="hide" data-anketa-step="2">
							<?include "includes/anketa/step2.php"?>
						</div>
						<div class="hide" data-anketa-step="3">
							<?include "includes/anketa/step3.php"?>
						</div>
						<div class="hide" data-anketa-step="4">
							<?include "includes/anketa/step4.php"?>
						</div>
						<div class="hide" data-anketa-step="5">
							<?include "includes/anketa/step5.php"?>
						</div>
						<div class="hide" data-anketa-step="6">
							<?include "includes/anketa/finish.php"?>
						</div>
					</form>
				</div>
			</div>
			<div class="hide">
				<?include "includes/anketa/conditions-popup.php"?>
			</div>
		</div>
	</div>
<?include "includes/footer-empty.php"?>

