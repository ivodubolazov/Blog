
<div class="span8">
	<?foreach($posts as $post):?>

	<a href="<?=BASE_URL?>posts/view/<?=$post['post_id']?>"><h1><?=$post['post_subject']?></h1></a>
	<p><?=$post['post_text']?></p>
	<div>
		<span class="badge badge-success"><?=$post['post_created']?></span>
		<div class="pull-right">

				<span class="label" style="background-color:#8d9aa7;">Taggi nimetus</span>

		</div>
	</div>
		<hr>
	<?endforeach?>
</div>
