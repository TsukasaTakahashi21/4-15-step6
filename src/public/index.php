<!-- 実践課題① -->
<?php
$arrayList = [
  [3, 5, 1, 0, 9, 12],
  [1, 2, 14, 10, 19, 1],
  [0, 3, 3, 3, 7, 2]
];

class MaxValueFinder {
  // 引数に型 array を指定
  public static function findMaxValues(array $arrayList):void {
    foreach ($arrayList as $array) {
      echo max($array)."\n";
    }
  }
}

MaxValueFinder::findMaxValues([
  [3, 5, 1, 0, 9, 12],
  [1, 2, 14, 10, 19, 1],
  [0, 3, 3, 3, 7, 2]
]);
?>



<!-- 実践課題② -->
<?php
$arrayList = [
    [3, 5, 1, 0, 9, 12],
    [1, 2, 14, 10, 9, 1],
    [0, 3, 4, 10, 20, 2]
];

class MaxMultipleOfThreeFinder {
  // 引数に型 array を指定
    public static function findMaxMultipleOfThree(array $arrayList): void {
        $maxMultipleOfThree = null; 

        foreach ($arrayList as $array) {
            foreach ($array as $value) {
                if ($value % 3 === 0) {
                    if ($maxMultipleOfThree === null || $value > $maxMultipleOfThree) {
                        $maxMultipleOfThree = $value;
                    }
                }
            }
        }

        if ($maxMultipleOfThree !== null) {
            echo $maxMultipleOfThree . "\n";
        }
    }
}

MaxMultipleOfThreeFinder::findMaxMultipleOfThree($arrayList);

?>


