<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<hr>
<div class="review-block">
	<div class="review-text">
		<div class="review-text-cont">
			<?if(!empty($arResult["DETAIL_TEXT"])):?>
				<?=$arResult["DETAIL_TEXT"]?>
				<?endif;?>
		</div>
		<div class="review-autor">
			<?=$arResult["NAME"]?>
		<?if($arParams["DISPLAY_DATE"]!="N" && $arResult["DISPLAY_ACTIVE_FROM"]):?>
			<?=$arResult["DISPLAY_ACTIVE_FROM"]?><?=GetMessage("YEAR")?>
		<?endif?>
		<?if(!empty($arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"])):?>
			, <?=$arResult["DISPLAY_PROPERTIES"]["POSITION"]["VALUE"]?>
		<?endif;?>
		<?if(!empty($arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"])):?>
			, <?=$arResult["DISPLAY_PROPERTIES"]["COMPANY"]["VALUE"]?>.
		<?endif;?>
		</div>
	</div>
	<div style="clear: both;" class="review-img-wrap">
	<?if(!empty($arResult["DETAIL_PICTURE"]["SRC"])):?>
		<img src="<?=$arResult["DETAIL_PICTURE"]["SRC"]?>" alt="<?=$arResult["DETAIL_PICTURE"]["ALT"]?>">
	<?else:?>
		<img src="<?=SITE_TEMPLATE_PATH?>/img/rew/no_photo.jpg" alt="img">
	<?endif;?>
	</div>
</div>
<div class="exam-review-doc">
	<?$file_values = $arResult["DISPLAY_PROPERTIES"]["FILE"]["FILE_VALUE"]?>
	<?if ($file_values > 0):?>
	<p><?=GetMessage("DOCUMENTS")?></p>
	<?if (!is_array($file_values) || !empty($file_values["SRC"])):?>
		<?$file_values = array($file_values);?>
	<?endif;?>
	<?foreach ($file_values as $file):?>
	<div  class="exam-review-item-doc">
		<img class="rew-doc-ico" src="<?=SITE_TEMPLATE_PATH?>/img/icons/pdf_ico_40.png">
		<a href="<?=$file["SRC"]?>" download><?=$file["ORIGINAL_NAME"]?></a>
	</div>
	<?endforeach;?>
	<?endif;?>
</div>
<hr>