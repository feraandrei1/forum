<div id="flarum-loading" style="display: none">
    <?php echo e($translator->trans('core.views.content.loading_text')); ?>

</div>

<noscript>
    <div class="Alert">
        <div class="container">
            <?php echo e($translator->trans('core.views.content.javascript_disabled_message')); ?>

        </div>
    </div>
</noscript>

<div id="flarum-loading-error" style="display: none">
    <div class="Alert">
        <div class="container">
            <?php echo e($translator->trans('core.views.content.load_error_message')); ?>

        </div>
    </div>
</div>

<noscript id="flarum-content">
    <?php echo $content; ?>

</noscript>
<?php /**PATH C:\Users\12345\Downloads\1-de-pus-pe-github\1-to-verify\forum\vendor\flarum\core\src\Frontend/../../views/frontend/content.blade.php ENDPATH**/ ?>