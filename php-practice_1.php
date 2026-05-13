<?php
// Q1 変数と文字列
$name = '安藤';
echo '私の名前は「' . $name . '」です。' . "\n";

// Q2 四則演算
$num = 5 * 4;
echo $num . "\n";
echo $num / 2;

// Q3 日付操作
echo '現在時刻は、' . date('Y年m月d日 H時i分s秒') . 'です。';

// Q4 条件分岐-1 if文
$device = 'mac';
if ($device === 'windows' || $device === 'mac') {
    echo '使用OSは、' . $device . 'です。';
} else {
    echo 'どちらでもありません。';
}

// Q5 条件分岐-2 三項演算子
$age = 20;
echo ($age < 18) ? '未成年です。' . "\n" : '成人です。';

// Q6 配列
$kanto = ['東京都', '栃木県', '神奈川県', '千葉県', '埼玉県', '群馬県', '茨城県'];
echo $kanto[2] . 'と' . $kanto[4] . 'は関東地方の都道府県です。';

// Q7 連想配列-1
$prefectures = [
    '東京都' => '新宿区',
    '栃木県' => '宇都宮市',
    '神奈川県' => '横浜市',
    '千葉県' => '千葉市',
    '埼玉県' => 'さいたま市',
    '群馬県' => '前橋市',
    '茨城県' => '水戸市',
];
foreach ($prefectures as $key => $value) {
    echo $value . "\n";
}

// Q8 連想配列-2
foreach ($prefectures as $key => $value) {
    if ($key === '埼玉県') {
        echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
    }
}

// Q9 連想配列-3
$prefectures['愛知県'] = '名古屋市';
$prefectures['大阪府'] = '大阪市';

$kantoList = ['東京都', '神奈川県', '千葉県', '埼玉県',
'栃木県', '群馬県', '茨城県'];

foreach ($prefectures as $key => $value) {
    if (in_array($key, $kantoList)) {
        echo $key . 'の県庁所在地は、' . $value . 'です。' . "\n";
    } else {
        echo $key . 'は関東地方ではありません。' . "\n";
    }
}

// Q10 関数-1
function hello($name)
{
    return $name . 'さん、こんにちは。';
}
echo hello('金谷') . "\n";
echo hello('安藤') . "\n";

// Q11 関数-2
function calcTaxInPrice($price)
{
    return $price * 1.1;
}
$price = 1000;
$taxInPrice = calcTaxInPrice($price);
echo $price . '円の商品の税込価格は' . $taxInPrice . '円です。' . "\n";

// Q12 関数とif文
function distinguishNum($num)
{
    if ($num % 2 !== 0) {
        return $num . 'は奇数です。';
    } else {
        return $num . 'は偶数です。';
    }
}
echo distinguishNum(11) . "\n";
echo distinguishNum(24) . "\n";

// Q13 関数とswitch文
function evaluateGrade($grade)
{
    switch ($grade) {
        case 'A':
        case 'B':
            return '合格です。';
        case 'C':
            return '合格ですが追加課題があります。';
        case 'D':
            return '不合格です。';
        default:
            return '判定不明です。講師に問い合わせてください。';
    }
}
echo evaluateGrade('A') . "\n";
echo evaluateGrade('D') . "\n";

?>
