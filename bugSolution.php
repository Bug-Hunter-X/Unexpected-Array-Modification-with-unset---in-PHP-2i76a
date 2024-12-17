function fooSafe(array $arr) {
  $arrCopy = $arr;
  foreach ($arrCopy as $key => $value) {
    if ($value === 'bar') {
      unset($arrCopy[$key]);
    }
  }
  return $arrCopy;
}

$arr = ['foo', 'bar', 'baz'];
$result = fooSafe($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )
print_r($arr); // Output: Array ( [0] => foo [1] => bar [2] => baz ) //Original array unchanged

//Alternative using array_filter:
function fooFilter(array $arr) {
  return array_filter($arr, function($value) { return $value !== 'bar';});
}

$arr = ['foo', 'bar', 'baz'];
$result = fooFilter($arr);
print_r($result); // Output: Array ( [0] => foo [2] => baz )
print_r($arr); // Output: Array ( [0] => foo [1] => bar [2] => baz ) //Original array unchanged
