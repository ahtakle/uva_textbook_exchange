<?php

  $isbn_list = array("978-1-891830-75-4" => "110 Per c",
                     "978-1-60309-050-6" => "The 120 Days of Simon",
                     "978-1-60309-266-1" => "A Matter of Life",
                     "978-1-891830-71-6" => "AEIOU or Any Easy Intimacy",
                     "978-1-60309-025-4" => "Alec: The Years Have Pants",
                     "978-1-60309-322-4" => "Alone Forever",
                     "978-1-60309-008-7" => "Hieronymus B.",
                     "978-0133651911" => "World History"
                     );

  $isbn = $_GET["isbn"];
  if (array_key_exists($isbn, $isbn_list))
    print $isbn_list[$isbn];
  else
    print " , ";

?>
