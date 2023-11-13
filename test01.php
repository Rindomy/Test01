<?php
// Bài 1: Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không.
function isPrime($n){
    if ($n<2) {
        return flase;
    }
    else {
        $k=$n/2;
        for ($i=2; $i<=$k; $i++){
        if ($n % $i == 0) { 
            return false;
        }
        else {
            return true;
        }
    }
    }
}
echo "Danh sách số nguyên tố từ 1 đến 100 là: <br>";
for ($i=2;$i<=100;$i++)
if (isPrime($i) === true) {
    echo " $i";
}
//Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp.
   $product1['Name']="PC";
   $product1['Price']="40";
   $product1['Quantity']="6";
   $product2['Name']="IP";
   $product2['Price']="10";
   $product2['Quantity']="10";
   foreach($product1 as $a => $value_a){
    echo "Key=". $a . ", Value=". $value_a;
    echo "<br>";
   }
   foreach($product2 as $b => $value_b){
    echo "Key=". $a . ", Value=". $value_a;
    echo "<br>";
   }
  <?php
// Bài 1: Viết một chương trình PHP để kiểm tra xem một số nguyên dương nào đó có phải là số nguyên tố hay không.
function isPrime($n){
    if ($n<2) {
        return flase;
    }
    else {
        $k=$n/2;
        for ($i=2; $i<=$k; $i++){
        if ($n % $i == 0) { 
            return false;
        }
        else {
            return true;
        }
    }
    }
}
echo "Danh sách số nguyên tố từ 1 đến 100 là: <br>";
for ($i=2;$i<=100;$i++)
if (isPrime($i) === true) {
    echo " $i";
}
//Bài 2: Viết một ứng dụng PHP để quản lý thông tin về sản phẩm trong một cửa hàng sử dụng mảng kết hợp.
   $product1['Name']="PC";
   $product1['Price']="40";
   $product1['Quantity']="6";
   $product2['Name']="IP";
   $product2['Price']="10";
   $product2['Quantity']="10";
   foreach($product1 as $a => $value_a){
    echo "Key=". $a . ", Value=". $value_a;
    echo "<br>";
   }
   foreach($product2 as $b => $value_b){
    echo "Key=". $a . ", Value=". $value_a;
    echo "<br>";
   }
   $s1=$product1['Price']* $product1['Quantity'];
   $s2= $product2['Price']* $product2['Quantity'];
   function sumPro(){
   global $s1, $s2;
   $sum = $s1 + $s2;
   return $sum;
   }
   echo "Tổng giá trị sản phẩm là: ". sumPro(); 
   
?>
