<?php
// Q1 tic-tac問題
<?php

for ($i=1; $i<=100; ++$i) {
    echo PHP_EOL;
if ($i % 4 == 0 || $i % 5 == 0){
    if ($i % 4 == 0 && $i % 5 == 0) {
        echo 'tic-tac';
    } elseif (($i % 4) == 0){
        echo 'tic';
    } elseif (($i % 5) == 0) {
        echo 'tac';
    } 
}  else {
    echo $i;
}
}

?>

// Q2 多次元連想配列
//問題1
echo $personalInfos[1]['name'] . 'の電話番号は' . $personalInfos[1]['tel'] . 'です。'

//問題2
foreach ($personalInfos as $num => $personalInfo) {
  echo $num +1 . '番目の' . $personalInfo['name'] . 'のメールアドレスは' . $personalInfo['mail'] . 'で、電話番号は' . $personalInfo['tel'] . 'です。' ."\n";
}

//問題3
$ageList = [25, 30, 18];

foreach ($ageList as $num => $age) {
    $personalInfos[$num]['age'] = $age;
}

var_dump($personalInfos);


// Q3 オブジェクト-1

class Student
{
    public $studentId;
    public $studentName;

    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend()
    {
        echo '授業に出席しました。';
    }
}

$yamada = new Student(120, '山田');

echo '学籍番号' . $yamada->studentId . '番の生徒は' . $yamada->studentName . 'です。';



// Q4 オブジェクト-2

class Student
{
    // property
    public $studentId;
    public $studentName;

    // method
    public function __construct($id, $name)
    {
        $this->studentId = $id;
        $this->studentName = $name;
    }

    public function attend($language)
    {
        echo $this->studentName . 'は' . $language . 'の授業に参加しました。学籍番号：' . $this->studentId;
    }
}

$yamada = new Student(120, '山田');
関数名（引数）
$yamada->attend('PHP');

// Q5 定義済みクラス
//問題1

date_default_timezone_set('Asia/Tokyo');

$monthAgo = new DateTime();

$monthAgo->modify("-1 months");

$formatted_date = $monthAgo->format('Y-m-d');

echo $formatted_date;

//問題2

date_default_timezone_set('Asia/Tokyo');

$past = new DateTime('1992-4-25');
$today = new DateTime();

$result = $past->diff($today);

echo 'あの日から' . $result->format('%a') . '日経過しました。';



?>