function foo(array $arr) {
  foreach ($arr as $key => $value) {
    //This code is prone to error when dealing with non-numeric arrays. If the key is not an integer, this line can cause an error. 
    if ($value > $arr[$key + 1]) { 
      //Do something
    }
  }
}