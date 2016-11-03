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
?>
<?php 
	$carousel_id = "carousel_" . mt_rand(10,99); 
	$indicators = "<ol class=\"carousel-indicators\">";
	$sronly = ".sr-only {position: absolute;width: 1px;height: 1px;padding: 0;margin: -1px;overflow: hidden;clip: rect(0,0,0,0);border: 0;}";
$document = JFactory::getDocument();
$document->addStyleDeclaration($sronly);
?>
<div class="mod-newsflash-bs-carousel mod-newsflash-bs-carousel__<?php echo $moduleclass_sfx; ?> carousel slide" id="<?php echo $carousel_id; ?>" data-ride="carousel" data-interval="8000">

   
<div class="carousel-inner" role="listbox">
  <?php for ($i = 0, $n = count($list); $i < $n; $i ++) :
	$indicators .= "<li data-target=\"#";
	$indicators .= $carousel_id;
	$indicators .= "\" data-slide-to=\"";
	$indicators .= $i;
	$indicators .= "\"";
	$indicators .= ($i)?"":" class=\"active\"";
	$indicators .= "></li>";
    $item = $list[$i]; 
/*
    $class="";
    if($i == $n-1){
      $class="lastItem";
    }*/ ?>
	<div class="item <?php echo ($i)?'':'active'; ?>">
    <!--<div class="item item_num<?php echo $i; ?> item__module <?php echo $class; ?>">
      
    </div>-->
	  <!-- Wrapper for slides --><?php require JModuleHelper::getLayoutPath('mod_articles_news_bs_carousel', '_item'); ?>
	</div>
  
  
  <?php endfor; 
  $indicators .= "</ol>";
  ?>
</div>
<?php echo $indicators; ?>
 <a class="left carousel-control" href="#<?php echo $carousel_id; ?>" role="button" data-slide="prev">
    <span class="icon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#<?php echo $carousel_id; ?>" role="button" data-slide="next">
    <span class="icon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>  

  
</div>
