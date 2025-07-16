<?
/** @var array $arParams */
/** @var array $arResult */
?>

<nav class="menu">
  <ul class="menu__list">
    <? foreach ($arResult as $arItem): ?>
      <li class="menu__item">
        <a href="<?= $arItem['url'] ?>"
           class="menu__link link"
        ><?= $arItem['name'] ?></a>
      </li>
    <? endforeach; ?>
  </ul>
</nav>
