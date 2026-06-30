<?php
class User
{
    // プロパティ
    public $name;
    public $age;


    // コントラクタを定義
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    // 自己紹介メソッド
    public function introduce()
    {
        echo "こんにちは、私は{$this->name}です。{$this->age}歳です。<br>";
    }

    // 成人判定メソッド
    public function isAdult()
    {
        return $this->age >= 18;
    }
}

echo "<h2>ユーザー管理システム</h2>";

// ユーザーを作成
$user1 = new User("田中 太朗", 25);
$user2 = new User("佐藤 花子", 17);
$user3 = new User("鈴木 一郎", 30);

// 自己紹介
echo "<h3>自己紹介</h3>";
$user1->introduce();
$user2->introduce();
$user3->introduce();

// 成人判定
echo "<h3>成人判定</h3>";
if ($user1->isAdult()) {
    echo "{$user1->name}さんは成人です。<br>";
} else {
    echo "{$user1->name}さんは未成年です。<br>";
}

if ($user2->isAdult()) {
    echo "{$user2->name}さんは成人です。<br>";
} else {
    echo "{$user2->name}さんは未成年です。<br>";
}

if ($user3->isAdult()) {
    echo "{$user3->name}さんは成人です。<br>";
} else {
    echo "{$user3->name}さんは未成年です。<br>";
}
?>