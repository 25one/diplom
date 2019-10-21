<?php $__env->startSection('content'); ?>
	<div class="wrapper" id="vueApp">
		<header class="main-header">
			<?php echo $__env->make(AdminTemplate::getViewPath('_partials.header'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</header>

		<aside class="main-sidebar">
			<?php echo $__env->make(AdminTemplate::getViewPath('_partials.navigation'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
		</aside>

		<div class="content-wrapper">
			<?php echo $template->renderBreadcrumbs($breadcrumbKey); ?>


			<div class="content-header">
				<h1>
					<?php echo e($title); ?>

				</h1>
			</div>

			<div class="content body">
				<?php echo $__env->yieldPushContent('content.top'); ?>

				<?php echo $content; ?>


				<?php echo $__env->yieldPushContent('content.bottom'); ?>
			</div>
		</div>
	</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make(AdminTemplate::getViewPath('_layout.base'), \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/alex/www/diplom/vendor/laravelrus/sleepingowl/src/Providers/../../resources/views/default/_layout/inner.blade.php ENDPATH**/ ?>