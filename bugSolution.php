The solution involves using the correct string keys to access the array elements:

```php
<?php
$myArray = [
    "apple" => 1,
    "banana" => 2,
    "cherry" => 3
];

// Correct way to access elements
$appleValue = $myArray["apple"]; // Accessing using the correct string key
$bananaValue = $myArray["banana"];

//Iterating through the array correctly
foreach($myArray as $key => $value){
    echo "Key: " . $key . ", Value: " . $value . "\n";
}
echo "Apple: " . $appleValue . "\n";
echo "Banana: " . $bananaValue . "\n";
?>
```
This corrected version ensures that elements are accessed using their string keys, avoiding the unexpected `NULL` values.