<!-- 共通JS読み込み -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.js"></script>
<!-- プライバシーポリシー・免責事項ポップアップ用パーツ読み込み(共通) -->
<?php get_template_part('sub_parts/popup'); ?>
<!-- プライバシーポリシー・免責事項ポップアップ用 js -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/popup.js"></script>
<?php wp_footer(); ?>