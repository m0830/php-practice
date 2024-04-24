<?php
// Q1 変数と文字列

 $message = '私の名前は「伊東」です。';
 echo $message;
 
?>

// Q2 四則演算
<?php 

 $num = 5*4;
 
 echo $num . "\n";
 
 echo $num / 2;
 
?>

// Q3 日付操作
<?php 

 echo date("現在時刻は、Y年m月d日 H時i分s秒です。")

?>

// Q4 条件分岐-1 if文
<?php
$device = 'mac';

if ($device === 'windows' || $device === 'mac') {
    echo"使用OSは、{$device}です。";
} else {
        echo'どちらでもありません。';
    }

?>

// Q5 条件分岐-2 三項演算子
<?php

$age = 18;

if ($age >= 18) {
    echo '成人です。';
} else {
    echo '未成年です。';

}

?>

// Q6 配列
<?php

$prefectures = ['東京都', '神奈川県', '山梨県', '栃木県', '千葉県', '埼玉県', '群馬県', '茨城県', '山梨県'];

echo "$prefectures[3]と$prefectures[4]は関東地方の都道府県です。"

?>

// Q7 連想配列-1
<?php

$prefectures = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市', ];
    
foreach ($prefectures as $prefecture => $city) {
    echo $city."\n";
}
    
?>

// Q8 連想配列-2
<?php

$prefectures = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市', 
];
    
foreach ($prefectures as $prefecture => $city) {
    if ($prefecture === "埼玉県") {
    echo "{$prefecture}の県庁所在地は、{$city}です。";
  }
}

?>

// Q9 連想配列-3
<?php

$prefectures = [
    '東京都' => '新宿区',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '栃木県' => '宇都宮市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市', 
    '愛知県' => '名古屋市', 
    '大阪府' => '大阪市', ];
foreach ($prefectures as $prefecture => $city) {
    if ($city === '名古屋市' || $city === '大阪市'){
        echo $prefecture . 'は関東地方ではありません。' ."\n";
    } else {
        echo "{$prefecture}の県庁所在地は、{$city}です。" ."\n";
}
}

?>

// Q10 関数-1
<?php

function hello($name)
{
    return $name . 'さん、こんにちは。';
}

echo hello('金谷') . "\n";

echo hello('安藤');

?>

// Q11 関数-2
<?php

$price = 1000;

function calcTaxInPrice($price)
{
    return $price * 1.1;
}

echo $price . 'の商品の税込価格は' . calcTaxInPrice($price) . '円です。';

?>

// Q12 関数とif文
<?php

function distinguishNum($num) {
    if ($num % 2 === 1) {
        return $num . 'は奇数です。' ."\n";
    } else {
        return $num . 'は偶数です。';
    }
}

echo distinguishNum(11);
echo distinguishNum(24);

?>

// Q13 関数とswitch文
<?php

function evaluateGrade($string) {
   
switch ($string) {
    case 'A':
    case 'B':
        return '合格です。' . "\n";
        break;

    case 'C':  
        return '合格ですが追加課題があります。' . '\n';
        break;

    case 'D':
        return '不合格です。' . "\n";
        break;

    default:
        return '判定不明です。講師に問い合わせてください。' . "\n";
        break;
}
}

echo evaluateGrade('A');
echo evaluateGrade('ABCDEFG');

?>
