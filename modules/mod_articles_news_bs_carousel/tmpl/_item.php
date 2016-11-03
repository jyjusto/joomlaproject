<?php
/**
 * Bootstrap Slideshow
 *
 * @author    Alvaro Guachilema http://lafabricadelinternet.com
 * @copyright Copyright (C) 2016 - 2017 Alvaro Guachilema
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 
 * Parts of this software are based on Articles Newsflash standard module and Advanced Newsflash 
 * 
*/
defined('_JEXEC') or die;
	$item_heading = $params->get('item_heading', 'h4');
	$item_images = json_decode($item->images);
?>

<!-- Intro Image -->
<?php if ($params->get('intro_image')): ?>
	<?php  if (isset($item_images->image_intro) and !empty($item_images->image_intro)) : ?>
	
		
			<!--KEEP IT<a href="<?php echo $item->link;?>"></a> -->
			<img style="margin: 0 auto; width: 100%;" 
			<?php if ($item_images->image_intro_caption):
				echo 'class="caption"'.' title="' .htmlspecialchars($item_images->image_intro_caption) .'"';
			endif; ?>
			src="<?php echo htmlspecialchars($item_images->image_intro); ?>" alt="<?php echo htmlspecialchars($item_images->image_intro_alt); ?>"/>
		
	<?php endif; ?>
<?php endif; ?>

<div class="itemcontent" style="position: absolute; top: 20%; left: 20%; width: 60%; background-color: rgba(0,0,0,0.5); padding: 20px 10px; border-radius: 10px;">
	<!-- Item title -->
	<?php if ($params->get('item_title')) : ?>
		<<?php echo $item_heading; ?> class="item_title item_title__<?php echo $params->get('moduleclass_sfx'); ?>">
		<?php if ($params->get('link_titles') && $item->link != '') : ?>
			<a href="<?php echo $item->link;?>">
				<?php echo $item->title;?></a>
		<?php else : ?>
			<?php echo $item->title; ?>
		<?php endif; ?>
		</<?php echo $item_heading; ?>>
	<?php endif; ?>

	<?php if (!$params->get('intro_only')) :
		echo $item->afterDisplayTitle;
	endif; ?>

	<?php if ($params->get('show_tags', 1) && !empty($item->tags)) : ?>
		<?php $item->tagLayout = new JLayoutFile('joomla.content.tags'); ?>

		<?php echo $item->tagLayout->render($item->tags->itemTags); ?>
	<?php endif; ?>

	<?php if ($params->get('published')) : ?>
		<div class="item_published">
			<?php echo JHtml::_('date', $item->publish_up, JText::_('DATE_FORMAT_LC1')); ?>
		</div>
	<?php endif; ?>

	<?php if ($params->get('createdby')) : ?>
		<div class="item_createdby">
			<?php $author = $item->author; ?>
			<?php $author = ($item->created_by_alias ? $item->created_by_alias : $author); ?>
				<?php echo JText::sprintf('mod_articles_news_bs_carousel_BY', $author); ?>
		</div>
	<?php endif; ?>

	<?php echo $item->beforeDisplayContent; ?>

	<!-- Introtext -->
	<div class="item_introtext"><?php echo $item->introtext; ?></div>

	<!-- Read More link -->
	<?php if (isset($item->link) && $item->readmore != 0 && $params->get('readmore')) :
		$readMoreText = JText::_('MOD_ARTICLES_NEWS_BS_READMORE');
			if ($item->alternative_readmore){
				$readMoreText = $item->alternative_readmore;
			}
		echo '<a class="btn btn-info readmore" href="'.$item->link.'"><span>'. $readMoreText .'</span></a>';
	endif; ?>
</div>

