<?php
function shell(array $array) : array {
  $n = count($array);
  $snail = array_merge($array[0]);
  for ($i = 2; $i < $n; $i++) {
  array_push($snail, $array[$i - 1][$n - 1]);
  }
  $snail = array_merge($snail, array_reverse($array[$n-1]));
  for ($i = $n - 1; $i > 1; $i--) {
  array_push($snail, $array[$i - 1][0]);
  }
  return $snail;
}

function removeShell(array $array) : array {
  $n = count($array);
  unset($array[$n - 1]);
  unset($array[0]);
  for ($i = 1; $i < $n - 1; $i++) {
    unset($array[$i][0]);
    unset($array[$i][$n -1]);
    $array[$i] = [...$array[$i]];
    print var_dump("test $n $i ", $array);
  }
  $array = [...$array];
  return $array;
}

function snail(array $array): array {
$snail = [];
while (count($array) > 2) {
  array_push($snail, ...shell($array));
  $array = removeShell($array);
}
if (count($array) == 1) {
  array_push($snail, ...$array[0]);
} elseif (count($array) == 2) {
  array_push($snail, ...$array[0]);
  array_push($snail, ...array_reverse($array[1]));
}
  return $snail;
}

print var_dump(snail([
      [1, 2, 3, 1],
      [4, 5, 6, 4],
      [7, 8, 9, 7],
      [7, 8, 9, 7]
    ]));

// print var_dump(snail([
//       [1, 2, 3],
//       [5, 6, 4],
//       [8, 9, 7]
//     ]));
