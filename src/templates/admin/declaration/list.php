<?php
global $fs;

$declarations = $fs->files(PUBLIC_FILE_PATH."/declarations", array("allow_extension" => "pdf"));
arsort($declarations);
?>
<div class="scene defaultList declarationList">
	<h1>Vælgererklæringer</h1>

	<ul class="actions">
		<?= $HTML->link("Download and archive ALL", "/admin/declaration/downloadAll", array("class" => "button primary", "wrapper" => "li.download")) ?>
	</ul>

	<div class="all_items i:defaultList">
<?		if($declarations): ?>
		<ul class="items">
<?			foreach($declarations as $declaration):
				$filename = str_replace(PUBLIC_FILE_PATH."/declarations/", "", $declaration); ?>
			<li class="item">
				<h3><?= date("d/m/Y H:i:s", str_replace(".pdf", "", $filename)) ?></h3>

				<ul class="actions">
					<li class="delete">
						<form action="/admin/declaration/archive/<?= $filename ?>" method="post" class="i:formDefaultDelete">
							<input type="submit" value="Archive" class="delete button">
						</form>
					</li>
					<li class="download">
						<a href="/admin/declaration/download/<?= $filename ?>" class="button">Download</a>
					</li>
				</ul>
			 </li>
<?			endforeach; ?>
		</ul>
<?		else: ?>
		<p>No declarations.</p>
<?		endif; ?>
	</div>

</div>
