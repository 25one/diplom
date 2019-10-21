<script>
window.parent.document.getElementById("img_" + "<?php echo e($whatimage); ?>").setAttribute("src", "<?php echo e($file); ?>");
window.parent.document.getElementById("hidden_" + "<?php echo e($whatimage); ?>").setAttribute("value","<?php echo e($file); ?>");
</script>

<?php /**PATH /home/alex/www/diplom/resources/views/admink/user_upload.blade.php ENDPATH**/ ?>