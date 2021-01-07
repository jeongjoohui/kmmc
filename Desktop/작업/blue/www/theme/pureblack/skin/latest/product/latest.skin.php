<?php
/* copyright(c) WEBsiting.co.kr */
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
include_once(G5_LIB_PATH.'/thumbnail.lib.php');

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$latest_skin_url.'/style.css">', 0);
add_stylesheet('<link rel="stylesheet" href="'.G5_THEME_URL.'/plugin/owlcarousel/owl.carousel.css">', 0);


$sql = " select * from {$g5['board_table']} where bo_table = '{$bo_table}' ";
$result = sql_query($sql);
$row=sql_fetch_array($result);

if ($row['bo_gallery_width'] == 0){
	$thumb_width = $row['bo_gallery_height'];
} else {
	$thumb_width = $row['bo_gallery_width'];
}
if ($row['bo_gallery_height'] == 0){
	$thumb_height = $row['bo_gallery_width'];
} else {
	$thumb_height = $row['bo_gallery_height'];
}
?>
<div class="prodLatWR">
	<div class="prodLat">
		<h2 class="prodLatTit"><a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>"><?php echo $bo_subject ?><u></u></a></h2>
		<div class="prodLatREL owl-carousel prodLat_<?php echo $bo_table ?>">
		<?php
		for ($i=0; $i<count($list); $i++) {
		$thumb = get_list_thumbnail($bo_table, $list[$i]['wr_id'], $thumb_width, $thumb_height, false, true);

		if($thumb['src']) {
			$img = $thumb['src'];
			$thumb['alt'] = $list[$i]['subject'];
			$noImage = '';
		} else {
			$img = G5_THEME_URL.'/plugin/websiting/imageSpacer.php?w='.$row['bo_gallery_width'].'&h='.$row['bo_gallery_height'];
			$thumb['alt'] = 'No image';
			$noImage = '<u>No image</u>';
		}
		$img_content = '<img src="'.$img.'" alt="'.$thumb['alt'].'" >';
		?>
			<div class="prodLatRELcon">
				<a href="<?php echo $list[$i]['href'] ?>">
					<i><?php echo $img_content; ?><?php echo $noImage; ?></i>
					<?php
					echo "<em>";
					if ($list[$i]['icon_secret']) echo "<i class=\"fa fa-lock\" aria-hidden=\"true\"></i><span class=\"sound_only\">비밀글</span> ";
					if ($list[$i]['icon_new']) echo "<span class=\"new_icon\">N<span class=\"sound_only\">새글</span></span>";
					if ($list[$i]['icon_hot']) echo "<span class=\"hot_icon\">H<span class=\"sound_only\">인기글</span></span>";
					echo "</em>";
					if ($list[$i]['ca_name']) echo "<span class='bo_cate_link'>".$list[$i]['ca_name']."</span> ";
					echo "<b>";
					echo $list[$i]['subject']."</b>";
					?>
				</a>
			</div>
		<?php }  ?>
		<?php if (count($list) == 0) { //게시물이 없을 때  ?>
			<p class="empty_li">게시물이 없습니다.</p>
		<?php }  ?>
		</div>
		<a href="<?php echo G5_BBS_URL ?>/board.php?bo_table=<?php echo $bo_table ?>" class="lt_more"><?php echo $bo_subject ?> 더보기 <i class="fa fa-plus" aria-hidden="true"></i></a>

	</div>
</div>
<script src="<?php echo G5_THEME_URL ?>/plugin/owlcarousel/owl.carousel.min.js"></script>
<script>
$('.prodLat_<?php echo $bo_table ?>').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsiveClass:true,
	autoplay:true,
	autoplayTimeout:5000,
	autoplayHoverPause:true,
    responsive:{
        0:{
            items:2
        },
        600:{
            items:3
        },
        980:{
            items:5
        }
    }
})
</script>
