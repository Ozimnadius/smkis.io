<?php

/**
 * Renders a template with given parameters.
 *
 * If a `.parameters.php` file exists in the component directory, it will be included and
 * its variables will be merged with $params.
 *
 * @param string $path
 * @param array $params
 *
 * @return string
 */
function template(string $path, array $params = []): string
{
  if (file_exists($GLOBALS['path'] . "/src/components/$name/.parameters.php")) {
    include_once($GLOBALS['path'] . "/src/components/$name/.parameters.php");
  } else {
    $arComponentParameters = [];
  }
  $arResult = array_merge($arComponentParameters, $params);
  $systemTemplateRenererIntoFullPath = "views/$path.php";
//    extract($params);
  ob_start();
  include($systemTemplateRenererIntoFullPath);
  return ob_get_clean();
}

/**
 * Renders a component with given parameters and data.
 *
 * The component is rendered using a view, which is located in
 * `src/components/$name/index.php`.
 *
 * If a `.parameters.php` file exists in the component directory, it will be included
 * and its variables will be merged with $params.
 *
 * If $dataUrl is given and is a string, it is considered to be a URL to a JSON file
 * and the contents of the file will be included in the component as $arResult.
 *
 * If $dataUrl is given and is an array or object, it will be included in the component
 * as $arResult directly.
 *
 * @param string $name
 * @param array $params
 * @param mixed $dataUrl
 *
 * @return string
 */
function component(string $name, array $params = [], mixed $dataUrl = ''): string
{
  if (file_exists($GLOBALS['path'] . "/src/components/$name/.parameters.php")) {
    include($GLOBALS['path'] . "/src/components/$name/.parameters.php");
    if (!empty($params)){
      $arComponentParameters = array_merge($arComponentParameters, $params);
    }
  } else {
    $arComponentParameters = [];
  }

  if (!empty($dataUrl)) {
    if (gettype($dataUrl) === 'string') {
      $arResult = file_get_contents($GLOBALS['path'] . "/" . $dataUrl);
      $arResult = json_decode($arResult, true);
    } else {
      $arResult = $dataUrl;
    }
  }

  $arParams = array_merge($arComponentParameters, $params);
  $fullPath = $GLOBALS['path'] . "/src/components/$name/index.php";
  unset($name, $params, $dataUrl, $arComponentParameters);
  return include($fullPath);
}

/**
 * Универсальная функция склонения слов.
 *
 * @param int $number Число, к которому применяется склонение.
 * @param array $forms Массив из трёх форм слова: [1 форма, 2 форма, 5 форма].
 * @return string
 */
function declension(int $number, array $forms): string
{
  $number = abs($number) % 100;
  $lastDigit = $number % 10;

  if ($number > 10 && $number < 20) {
    return $forms[2]; // Для чисел от 11 до 19
  }

  if ($lastDigit > 1 && $lastDigit < 5) {
    return $forms[1]; // Для чисел 2, 3, 4
  }

  if ($lastDigit == 1) {
    return $forms[0]; // Для чисел, заканчивающихся на 1
  }

  return $forms[2]; // Для остальных случаев
}

