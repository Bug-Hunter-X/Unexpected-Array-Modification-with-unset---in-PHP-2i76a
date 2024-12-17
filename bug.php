function foo(array $arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
  return $arr;
}

$arr = ['foo', 'bar', 'baz'];
$result = foo($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )

//Uncommon issue: This code will correctly remove 'bar' from the array. However, if the array is passed by reference, the original array will be modified as well, leading to unexpected side effects.

function fooByRef(array &$arr) {
  foreach ($arr as $key => $value) {
    if ($value === 'bar') {
      unset($arr[$key]);
    }
  }
}

$arr = ['foo', 'bar', 'baz'];
fooByRef($arr); // Modifies original array
print_r($arr); // Output: Array ( [0] => foo [2] => baz )
