<?php require 'partials/head.php'?>

<?php require 'partials/nav.php'?>

<div class="max-w-7xl mx-auto flex flex-col h-full">
	<nav aria-label="Breadcrumb ">
		<ol class="flex overflow-hidden rounded  text-sm text-gray-700">
			<li>
				<a
					href="/notes"
					class="block h-10 bg-gray-100 px-4 leading-10 transition-colors hover:text-gray-900"
				>
					Notes
				</a>
			</li>

			<li class="relative flex items-center">
				<span
					class="absolute inset-y-0 -start-px h-10 w-4 bg-gray-100 [clip-path:_polygon(0_0,_0%_100%,_100%_50%)] rtl:rotate-180"
				>
				</span>

				<span href="#" class="block h-10 pr-4 pl-6 leading-10 transition-colors hover:text-gray-900">
					Note: <?= $note['id']?>
				</span>
			</li>
		</ol>
	</nav>
	<div class="mt-6">
		<?php require 'partials/content.php'?>
	</div>

	<div class="flow-root mt-6">
		<dl class="-my-3 divide-y divide-gray-200 text-sm">
			<div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
				<dt class="font-medium text-gray-900">Id</dt>

				<dd class="text-gray-700 sm:col-span-2"><?= $note['id'] ?></dd>
			</div>

			<div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
				<dt class="font-medium text-gray-900">Body</dt>

				<dd class="text-gray-700 sm:col-span-2"><?= $note['body'] ?></dd>
			</div>

			<div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
				<dt class="font-medium text-gray-900">user_id</dt>

				<dd class="text-gray-700 sm:col-span-2"><?= $note['user_id'] ?></dd>
			</div>

			<div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
				<dt class="font-medium text-gray-900">created_at</dt>

				<dd class="text-gray-700 sm:col-span-2"><?= date('y/m/d', strtotime($note['created_at'])) ?></dd>
			</div>

			<div class="grid grid-cols-1 gap-1 py-3 sm:grid-cols-3 sm:gap-4">
				<dt class="font-medium text-gray-900">updated_at</dt>

				<dd class="text-gray-700 sm:col-span-2">
					<?= date('y/m/d', strtotime($note['updated_at'])) ?>
				</dd>
			</div>
		</dl>
	</div>
</div>

</div>
<?php require 'partials/foot.php'?>
		