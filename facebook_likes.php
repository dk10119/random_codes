<?php

// turn an array of names into the "who likes it" string in Facebook post.
// should give different format when number of people change from 0 to 3 or more.

function likes($names) {
  $othersCount = count($names) - 2;
  switch(count($names)) {
    case 0: return "no one likes this";
    case 1: return $names[0]. " likes this";
    case 2: return $names[0]. " and " . $names[1] . " like this";
    case 3: return $names[0] . ", " . $names[1] . " and " . $names[2] . " like this";
    default: return $names[0] . ", " . $names[1] . " and " . $othersCount . " others like this";
  }
};

// print var_dump(likes([]));
// print var_dump(likes(['Alex']));
// print var_dump(likes(['Alex', 'Jacob']));
// print var_dump(likes(['Alex', 'Jacob', 'Mark']));
// print var_dump(likes(['Alex', 'Jacob', 'Mark', 'Max']));
print var_dump(likes(['Alex', 'Jacob', 'Mark', 'Max', 'John', 'Bob', 'Steve', 'Mary']));
