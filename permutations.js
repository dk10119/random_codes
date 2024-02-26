//this function will return all possible permutations of a given string. no duplication
//how it works: it remove the first character, find all permutaion of the rest of the chars and return the those permutations with the first one.

function permutations(string) {
  if (!string || typeof string !== "string") {
    return "Please enter a string";
  } else if (string.length < 2) {
    return string;
  }

  let permutationsArray = [];

  for (let i = 0; i < string.length; i++) {
    let char = string[i];
    //remove the first char, then return all permutaions started with that char then continue to loop with another first char.

    if (string.indexOf(char) != i) continue;
    //to break the iteration if it encounter a dup char

    let remainingChars =
      string.slice(0, i) + string.slice(i + 1, string.length);

    for (let permutation of permutations(remainingChars)) {
      permutationsArray.push(char + permutation);
    }
    //this loop will loop through all the remaining char, seperating 1 letter at a time and return the last char when it reach the end.
  }
  return permutationsArray;
}

//test cases
console.log(permutations("a"));
console.log(permutations("a1"));
console.log(permutations("abcd"));
