function foo(array $arr) {
  $count = count($arr);
  foreach ($arr as $key => $value) {
    // Check if the next index exists before accessing it.
    if (isset($arr[$key + 1])) {
      if ($value > $arr[$key + 1]) {
        // Do something
      }
    }
  }
} 