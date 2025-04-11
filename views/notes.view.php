<?php require 'partials/head.php'?>

<?php require 'partials/nav.php'?>

<div class="max-w-7xl mx-auto flex flex-col items-center h-full">
	<?php require 'partials/content.php'?>


		<ul class="divide-y divide-gray-200 w-full space-y-1">
				<?php foreach ($notes as $note) { ?>
					<li>
						<a
							href="/note?id=<?= $note['id'] ?>"
							class="block rounded-lg px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-100 hover:text-gray-700">
							<?= $note['body'] ?>
						</a>
					</li>
				<?php } ?>
		</ul>
</div>

</div>
<?php require 'partials/foot.php'?>
		