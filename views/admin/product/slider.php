<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.add_slider_item').on('click', function (event) {
            var wrapper = $('.slider_item_wrapper');
            var item = ' <p>\n' +
                '        <input style="width: 50%;direction: ltr;" type="text" name="sliders[]">\n' +
                '        <a href="#" class="remove_slider_item"><span class="dashicons dashicons-dismiss"></span></a>\n' +
                '    </p>';

            event.preventDefault();
            wrapper.append(item);
        });
        $(document).on('click', '.remove_slider_item', function (event) {
            event.preventDefault();

            var $this = $(this);
            $this.parent().slideUp();
        });
    });
</script>
<p>
    <a href="#" class="add_slider_item">اضافه کردن آیتم</a>
</p>
<div class="slider_item_wrapper">
    <?php if (isset($slider_images) &&is_array($slider_images) && count($slider_images) > 0): ?>


        <?php foreach ($slider_images as $slider_image): ?>
            <p>
                <input style="width: 50%;direction: ltr;" type="text" name="sliders[]" autocomplete="off"
                       value="<?php echo $slider_image; ?>">
                <a href="#" class="remove_slider_item"><span class="dashicons dashicons-dismiss"></span></a>
            </p>
        <?php endforeach;  ?>
    <?php else: ?>
        <p>
            <input style="width: 50%;direction: ltr;" type="text" name="sliders[]" value="" autocomplete="off">
            <a href="#" class="remove_slider_item"><span class="dashicons dashicons-dismiss"></span></a>
        </p>
    <?php endif;  ?>





</div>
