<?php namespace ProcessWire;

if(!defined("PROCESSWIRE")) die();

/** @var Config $config */
/** @var AdminThemeUikit $adminTheme */
/** @var AdminThemeUikitMarkup $markup */
/** @var User $user */
/** @var array $extras */

?>
<!-- FOOTER -->
<footer id='pw-footer' class='uk-margin'>
	<div class='pw-container uk-container uk-container-expand'>
		<div class="uk-text-center">
			<?= $uk->config->company ?> &copy; <?= date('Y') ?>
			<?php echo $adminTheme->renderExtraMarkup('footer'); ?>
		</div>	
		<?php if($adminTheme->isSuperuser && $config->debug):
			include($config->paths->wire . 'templates-admin/debug.inc'); ?>
			<script>
				$('#debug_toggle').appendTo('#pw-uk-debug-toggle');
				$('#debug').find('table').addClass('uk-table uk-table-small uk-table-hover uk-table-divider');
			</script>
		<?php endif; ?>
	</div>
</footer>

