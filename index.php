<?php
declare(strict_types=1);


$idiom = [ "因果応報（いんがおうほう）", "明鏡止水（めいきょうしすい）", "本末転倒（ほんまつてんとう）", "呉越同舟（ごえつどうしゅう）", "百花繚乱（ひゃっかりょうらん）","温故知新（おんこちしん）","快刀乱麻（かいとうらんま）","一蓮托生（いちれんたくしょう）" ] ;
shuffle($idiom);

function fizzbuzz_rand_idiom($num, $array)
{
  if (($num % 15) === 0) {
    return $array[$num / 15];
  } elseif (($num % 3) === 0) {
      return 'Fizz';
  } elseif (($num % 5) === 0) {
      return 'Buzz';
  } else {
      return $num;
  }
}

for ($i = 1; $i <= 100; $i++) {
  echo fizzbuzz_rand_idiom($i, $idiom), PHP_EOL;
}

?>
