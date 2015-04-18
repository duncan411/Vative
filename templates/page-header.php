<?php use Roots\Sage\Titles;

$class = '';
$img_src = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full');
if (isset($img_src[0])){
	$class = 'has-image';
	$style = 'background-image:url('. $img_src[0] .');';
}
?>

<div class="page-header <?=$class?>" style="<?=$style?>">
  <h2 class="title"><?= Titles\title(); ?></h2>
</div>
