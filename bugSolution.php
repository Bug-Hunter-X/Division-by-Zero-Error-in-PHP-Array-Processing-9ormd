```php
function processData(array $data): array {
  //Check for empty array
  if(empty($data)){
    return ['sum' => 0, 'average' => 0];
  }
  $sum = array_sum($data);
  $average = $sum / count($data);
  return [ 'sum' => $sum, 'average' => $average ];
}

$data = [10, 20, 30];
$result = processData($data);
print_r($result);

$data2 = [];
$result2 = processData($data2);
print_r($result2);
```