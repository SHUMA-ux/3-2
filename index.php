<?php

//商品の税込価格を計算しましょう
//①税率を定数TAXで作成しましょう。消費税は10%とします。
define("TAX",10);

//②商品の情報を連想配列に入れましょう。
$products = ["鉛筆" =>100 , "消しゴム" =>150 , "物差し" =>500 ];

function price_with_tax($key,$value,$TAX){
    $price=$value*(100+$TAX)/100;
    print $key."の税込価格は".$price."円です";
};

foreach($products as $key=>$value){
    echo price_with_tax($key,$value,TAX)."<br>";
}




//③税率を計算する関数を用意します。
//引数には値段を受け取り、税込価格を返答します。


//④繰り返し文を使って画面に指定の文字を表示しましょう！

?>