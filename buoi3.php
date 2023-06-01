<?php
// Câu 1: kiểm tra xem một số có phải là số chẵn hay không
echo "Câu 1: ";
function checkEvenNumber($number) {
    if ($number % 2 == 0) {
        echo "Số $number là số chẵn";
    } else {
        echo "Số $number không là số chẵn";
    }
}
checkEvenNumber(11); // Gọi hàm kiểm tra số chẵn với một số cụ thể
echo "<br>";

// Câu 2: tính tổng của các số từ 1 đến n
echo "Câu 2: ";
function total($n) {
    $total = 0;
    for ($i = 1; $i <= $n; $i++) {
        $total += $i; // giá trị của $i được cộng vào biến $tong để tính tổng
    }
    return $total;
}
$n = 10; // Gọi hàm tính tổng với giá trị n cụ thể
$result = total($n);
echo "Tổng các số từ 1 đến $n là: $result";
echo "<br>";

// Câu 3: in ra bảng cửu chương từ 1 đến 10
echo "Câu 3: ";
function multiplicationTable($start, $end) {
    for ($i = $start; $i <= $end; $i++) {
        echo "Bảng cửu chương $i: <br>";
        for ($j = 1; $j <= 10; $j++) {
            $result = $i * $j;
            echo "$i x $j = $result <br>";
        }
    }
}
multiplicationTable(1, 10);

// Câu 4: kiểm tra xem một chuỗi có chứa một từ cụ thể hay không
echo "Câu 4: ";
function checkString($string, $word) {
    if (strpos($string, $word) !== false) { //tìm kiếm vị trí của từ cụ thể trong chuỗi
        echo "Chuỗi '$string' chứa từ '$word'";
    } else {
        echo "Chuỗi '$string' không chứa từ '$word'";
    }
}
$string = "Le Thi Van Anh"; // Gọi hàm kiểm tra chuỗi với một chuỗi và từ cụ thể
$word = "Anh";
checkString($string, $word);
echo "<br>";

// Câu 5: tìm giá trị lớn nhất và nhỏ nhất trong một mảng
echo "Câu 5: ";
function findMaxMin($array) {
    $min = $array[0];
    $max = $array[0];
    foreach ($array as $value){
        if ($value < $min) {
            $min = $value;
        }
    }
    if ($value > $max){
        $max = $value;
    }
    return array('min' => $min, 'max' => $max);
}
$array = [5, 2, 9, 11, 7];
$result = findMaxMin($array);
echo "Giá trị nhỏ nhất: ".$result['min'].'<br>';
echo "Giá trị lớn nhất: ".$result['max'].'<br>';

// Câu 6: sắp xếp một mảng theo thứ tự tăng dần.
echo "Câu 6: ";
function bubbleSort($arr) {
    $n = count($arr);
    for ($i=0; $i<$n-1; $i++) {
        for ($j=0; $j < $n - $i - 1; $j++){
            if ($arr[$j] > $arr[$j+1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j+1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
$number = [5,3,8,2,1];
$sortNumbers = bubbleSort($number);
echo "Mảng sau khi đã sắp xếp: ";
foreach ($sortNumbers as $element) {
    echo $element . " ";
}
echo "<br>";

// Câu 7: tính giai thừa của một số nguyên dương.
echo "Câu 7: ";
function factorial($n) {
    if ($n < 0) {
        return "Không tính được giai thừa của số âm";
    } elseif ($n == 0) {
        return 1;
    } else {
        $factorial = 1;
        for ($i = 1; $i <= $n; $i++) {
            $factorial *= $i;
        }
        return $factorial;
    }
}
$n = 5;
$calculation = factorial($n);
echo "Giai thừa của $n là: $calculation";
echo "<br>";

// Câu 8: tìm số nguyên tố trong một khoảng cho trước
echo "Câu 8: ";
function isPrime($number) { //hàm kiểm tra snt
    if ($number <= 1) { //1 không phải snt
        return false;
    }
    for ($i = 2; $i <= sqrt($number); $i++) { //thuật toán tìm snt: ước nào khác 1 và chính nó 
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}
function findPrimes($start, $end) { //kiểm tra snt trong khoảng
    $primes = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i)) {
            $primes[] = $i;
        }
    }
    return $primes;
}
$start = 1;
$end = 50;
$primeNumbers = findPrimes($start, $end);
echo "Các số nguyên tố từ $start đến $end là: ";
echo implode(", ", $primeNumbers);
echo "<br>";

// Câu 9: tính tổng của các số trong một mảng
echo "Câu 9:";
function calculateSum($array) {
    $sum = 0;
    foreach ($array as $number) {
        $sum += $number;
    }
    return $sum;
}
$numbers = [1, 2, 3, 4, 5];
$sum = calculateSum($numbers);
echo "Tổng của các số trong mảng là: " . $sum;
echo "<br>";

// Câu 10: in ra các số Fibonacci trong một khoảng cho trước
// Fibonacci: bắt đầu là 0 và 1, các số phía sau là tổng 2 số đứng liền trước
echo "Câu 10: ";
function generateFibonacci($n) {
    $fibonacci = [];
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;
    for ($i = 2; $i <= $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }
    return $fibonacci;
}
$start = 0;
$end = 10;
$fibonacciNumbers = generateFibonacci($end);
echo "Các số Fibonacci từ $start đến $end là: ";
echo implode(", ", array_slice($fibonacciNumbers, $start, $end - $start + 1));
echo "<br>";

// Câu 11: kiểm tra xem một số có phải là số Armstrong hay không
// số có giá trị bằng tổng lập phương của các chữ số trong số đó
echo "Câu 11: ";
function isArmstrongNumber($number) {
    $sum = 0;
    $temp = $number;
    while ($temp > 0) {
        $digit = $temp % 10; //lấy phần dư là số cuối cùng
        $sum += pow($digit, strlen((string)$number)); //tính luỹ thừa
        $temp = (int)($temp / 10); //loại số cuối cùng để sang số tiếp theo
    }
    if ($sum == $number) {
        return true;
    } else {
        return false;
    }
}
$number = 153;
if (isArmstrongNumber($number)) {
    echo "$number là số Armstrong";
} else {
    echo "$number không phải là số Armstrong";
}
echo "<br>";

// Câu 12: chèn một phần tử vào một mảng ở vị trí bất kỳ
echo "Câu 12: ";
function insertElement($array, $element, $position) { //biến mảng, phần tử, vị trí
    $result = []; 
    $length = count($array);
    if ($position < 0 || $position > $length) {
        return $array;
    }
    for ($i = 0; $i < $length; $i++) {
        if ($i == $position) { //vị trí i bằng vị trí chèn 
            $result[] = $element;
        }
        $result[] = $array[$i];
    }
    return $result;
}
$array = [1, 2, 3, 4, 5];
$element = 10;
$position = 2;
$result = insertElement($array, $element, $position);
echo "Mảng sau khi chèn phần tử $element vào vị trí $position: " . implode(", ", $result);
echo "<br>";

// Câu 13: loại bỏ các phần tử trùng lặp trong một mảng
echo "Câu 13: ";
function removeDuplicates($array) {
    $result = array();
    foreach ($array as $element) { 
        if (!in_array($element, $result)) { //element không tồn tại trong result
            $result[] = $element;
        }
    }
    return $result;
}
$array = array(1, 2, 3, 4, 2, 3, 5, 6, 4);
$result = removeDuplicates($array);
echo "Mảng sau khi loại bỏ các phần tử trùng lặp: " . implode(", ", $result);
echo "<br>";

// Câu 14: tìm vị trí của một phần tử trong một mảng
echo "Câu 14: ";
function findElementPosition($array, $element) {
    $positions = array();
    foreach ($array as $key => $value) { //key: lưu trữ chỉ số, value: lưu trữ giá trị
        if ($value === $element) {
            $positions[] = $key;
        }
    }
    return $positions;
}
$array = array(1, 2, 3, 4, 2, 3, 5, 6, 4);
$element = 2;
$positions = findElementPosition($array, $element);
echo "Phần tử cần tìm: $element <br>";
if (empty($positions)) {
    echo "Không tìm thấy phần tử trong mảng.";
} else {
    echo "Vị trí của phần tử trong mảng: " . implode(", ", $positions);
}
echo "<br>";

// Câu 15: đảo ngược một chuỗi
echo "Câu 15: ";
function reverseString($string) {
    $reversedString = strrev($string);
    return $reversedString;
}
$string = "Le Thi Van Anh";
$reversedString = reverseString($string);
echo "Chuỗi đảo ngược: $reversedString";
echo "<br>";

// Câu 16: tính số lượng phần tử trong một mảng
echo "Câu 16: ";
function countElements($array) {
    $count = count($array);
    return $count;
}
$array = [1, 2, 3, 4, 5];
$count = countElements($array);
echo "Số lượng phần tử trong mảng: $count";
echo "<br>";

// Câu 17: kiểm tra xem một chuỗi có phải là chuỗi Palindrome hay không
// đọc xuôi hoặc ngược đều giống như nhau
echo "Câu 17: ";
function isPalindrome($string) {
    $reversedString = strrev($string);
    if ($string === $reversedString) {
        return true;
    } else {
        return false;
    }
}
$string = "madam";
$isPalindrome = isPalindrome($string);
if ($isPalindrome) {
    echo "$string là chuỗi Palindrome";
} else {
    echo "$string không là chuỗi Palindrome";
}
echo "<br>";

// Câu 18: đếm số lần xuất hiện của một phần tử trong một mảng
echo "Câu 18: ";
function countOccurrences($array, $element) {
    $count = 0;
    foreach ($array as $value) {
        if ($value === $element) {
            $count++;
        }
    }
    return $count;
}
$array = [1, 2, 3, 2, 4, 2, 5, 2];
$element = 2;
$occurrences = countOccurrences($array, $element);
echo "Số lần xuất hiện của phần tử $element trong mảng là: $occurrences";
echo "<br>";

// Câu 19: sắp xếp một mảng theo thứ tự giảm dần
echo "Câu 19: ";
function sortDescending($array) {
    rsort($array);
    return $array;
}
$array = [5, 2, 9, 1, 7];
$sortedArray = sortDescending($array);
echo "Mảng sau khi sắp xếp theo thứ tự giảm dần: ";
foreach ($sortedArray as $value) {
    echo $value . " ";
}
echo "<br>";

// Câu 20: thêm một phần tử vào đầu hoặc cuối của một mảng
echo "Câu 20: ";
function addElementToArray($array, $element, $position) {
    if ($position === 'start') {
        array_unshift($array, $element); //thêm phần tử vào đầu mảng
    } elseif ($position === 'end') {
        array_push($array, $element); //thêm phần tử vào cuối mảng
    }
    return $array;
}
$array = [1, 2, 3, 4, 5];
$element = 6;
$position = 'end';
$newArray = addElementToArray($array, $element, $position);
echo "Mảng sau khi thêm phần tử: ";
foreach ($newArray as $value) {
    echo $value . " ";
}
echo "<br>";

// Câu 21: tìm số lớn thứ hai trong một mảng
echo "Câu 21: ";
function findSecondLargest($array) {
    $max = $array[0]; //GT đầu tiên của mảng
    $secondLargest = null;
    foreach ($array as $value) {
        if ($value > $max) {  //value là số lớn nhất mới
            $secondLargest = $max;
            $max = $value;
        } elseif ($value < $max && ($secondLargest === null || $value > $secondLargest)) {
            $secondLargest = $value;
        }
    }
    return $secondLargest;
}
$array = [5, 2, 9, 1, 7];
$secondLargest = findSecondLargest($array);
echo "Số lớn thứ hai trong mảng là: $secondLargest";
echo "<br>";

// Câu 22: tìm ước số chung lớn nhất và bội số chung nhỏ nhất của hai số nguyên dương
echo "Câu 22: ";
function greatestCommonDivisor($a, $b) { //ước số chung lớn nhất
    while ($b != 0) {
        $temp = $b;
        $b = $a % $b;
        $a = $temp; //khi b=0 thì giá trị a là ước số chung lớn nhất
    }
    return $a;
}
function leastCommonMultiple($a, $b) { //bội số chung nhỏ nhất
    $gcd = greatestCommonDivisor($a, $b);
    $lcm = ($a * $b) / $gcd;
    return $lcm;
}
$num1 = 12;
$num2 = 18;
$gcd = greatestCommonDivisor($num1, $num2);
$lcm = leastCommonMultiple($num1, $num2);
echo "Ước số chung lớn nhất của $num1 và $num2 là: " . $gcd . "<br>";
echo "Bội số chung nhỏ nhất của $num1 và $num2 là: " . $lcm . "<br>";

// Câu 23: kiểm tra xem một số có phải là số hoàn hảo hay không
// tổng các ước nguyên dương thực sự của nó bằng chính nó
echo "Câu 23: ";
function isPerfectNumber($number) {
    $sum = 0;
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i == 0) { //i là ước của number
            $sum += $i;
        }
    }
    return $sum == $number;
}
$number = 28;
if (isPerfectNumber($number)) {
    echo "$number là số hoàn hảo";
} else {
    echo "$number không là số hoàn hảo";
}
echo "<br>";


// Câu 24: tìm số lẻ lớn nhất trong một mảng
echo "Câu 24: ";
function findLargestOddNumber($array) {
    $largestOdd = null;
    foreach ($array as $number) {
        if ($number % 2 != 0) { //nếu number là số lẻ
            if ($largestOdd === null || $number > $largestOdd) { 
                $largestOdd = $number;
            }
        }
    }
    return $largestOdd;
}
$numbers = [2, 7, 10, 13, 8, 21, 17];
$largestOddNumber = findLargestOddNumber($numbers);
if ($largestOddNumber !== null) {
    echo "Số lẻ lớn nhất trong mảng là: " . $largestOddNumber;
} else {
    echo "Không có số lẻ trong mảng";
}
echo "<br>";

// Câu 25: kiểm tra xem một số có phải là số nguyên tố hay không (giống câu 8)
echo "Câu 25: ";
// function isPrime($number) { //hàm kiểm tra snt
//     if ($number <= 1) { //1 không phải snt
//         return false;
//     }
//     for ($i = 2; $i <= sqrt($number); $i++) { //thuật toán tìm snt: ước nào khác 1 và chính nó 
//         if ($number % $i == 0) {
//             return false;
//         }
//     }
//     return true;
// }
$number = 17;
if (isPrime($number)) {
    echo "$number là số nguyên tố";
} else {
    echo "$number không là số nguyên tố";
}
echo "<br>";

// Câu 26: tìm số dương lớn nhất trong một mảng
echo "Câu 26: ";
function findLargestPositiveNumber($array) {
    $largestPositive = null;
    foreach ($array as $number) {
        if ($number > 0) {
            if ($largestPositive === null || $number > $largestPositive) {
                $largestPositive = $number;
            }
        }
    }
    return $largestPositive;
}
$numbers = [-5, 10, 25, -8, 15, 20];
$largestPositiveNumber = findLargestPositiveNumber($numbers);
if ($largestPositiveNumber !== null) {
    echo "Số dương lớn nhất trong mảng là: " . $largestPositiveNumber;
} else {
    echo "Không có số dương trong mảng";
}
echo "<br>";

// Câu 27: tìm số âm lớn nhất trong một mảng
echo "Câu 27: ";
function findLargestNegativeNumber($array) {
    $largestNegative = null;
    foreach ($array as $number) {
        if ($number < 0) {
            if ($largestNegative === null || $number > $largestNegative) {
                $largestNegative = $number;
            }
        }
    }
    return $largestNegative;
}
$numbers = [-5, 10, -25, -8, 15, 20];
$largestNegativeNumber = findLargestNegativeNumber($numbers);
if ($largestNegativeNumber !== null) {
    echo "Số âm lớn nhất trong mảng là: " . $largestNegativeNumber;
} else {
    echo "Không có số âm trong mảng";
}
echo "<br>";

// Câu 28: tính tổng các số lẻ từ 1 đến n
echo "Câu 28: ";
function sumOddNumbers($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 2 != 0) {
            $sum += $i;
        }
    }
    return $sum;
}
$n = 10;
$sumOdd = sumOddNumbers($n);
echo "Tổng các số lẻ từ 1 đến $n là: $sumOdd";
echo "<br>";

// Câu 29: tìm số chính phương trong một khoảng cho trước
// số tự nhiên có căn bậc hai là một số tự nhiên
echo "Câu 29: ";
function isPerfectSquare($number) { //tìm số chính phương
    $sqrt = sqrt($number); //tính căn bậc 2 và so sánh với số gốc 
    return ($sqrt * $sqrt == $number); //bình phương bằng số gốc thì là số chính phương
}
function findPerfectSquares($start, $end) {
    $perfectSquares = array();
    for ($i = $start; $i <= $end; $i++) {
        if (isPerfectSquare($i)) {
            $perfectSquares[] = $i;
        }
    }
    return $perfectSquares;
}
$start = 1;
$end = 50;
$perfectSquares = findPerfectSquares($start, $end);
echo "Các số chính phương từ $start đến $end là: " . implode(", ", $perfectSquares);
echo "<br>";

// Câu 30: kiểm tra xem một chuỗi có phải là chuỗi con của một chuỗi khác hay không
echo "Câu 30: ";
function isSubstring($string, $substring) {
    $stringLength = strlen($string); //chuỗi ban đầu
    $substringLength = strlen($substring); //chuỗi con
    if ($substringLength > $stringLength) { //chuỗi con không được dài hơn chuỗi gốc 
        return false;
    }
    for ($i = 0; $i <= $stringLength - $substringLength; $i++) {
        $j = 0;
        while ($j < $substringLength && $string[$i + $j] === $substring[$j]) {//so sánh từng ký tự của chuỗi con với ký tự tương ứng trong chuỗi gốc
            $j++;
        }
        if ($j === $substringLength) { 
            return true;
        }
    }
    return false;
}
$string = "Le Thi Van Anh";
$substring = "Anh";
if (isSubstring($string, $substring)) {
    echo "Chuỗi '$substring' là chuỗi con của chuỗi '$string'";
} else {
    echo "Chuỗi '$substring' không là chuỗi con của chuỗi '$string'";
}
