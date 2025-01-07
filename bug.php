```php
function processData(array $data): array {
  // Assume $data contains numerical data
  $sum = array_sum($data);
  $average = $sum / count($data);

  //Error prone part: Directly using the average without checking for division by zero
  return [ 'sum' => $sum, 'average' => $average ];
}

$data = [10, 20, 30];
$result = processData($data);
print_r($result);

$data2 = []; //Empty Array
$result2 = processData($data2); //Will cause division by zero error
print_r($result2); //This line might not execute due to the error above
```