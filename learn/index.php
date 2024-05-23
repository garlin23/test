<?php

header('Content-type: text/html; charset=utf-8');

require_once 'functions.php';

require_once 'user.php';

//$arr_en = ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5, 'f'=>6, 'g'=>7, 'h'=>8, 'i'=>9, 'j'=>10, 'k'=>11, 'l'=>12, 'm'=>13, 'n'=>14, 'o'=>15, 'p'=>16, 'q'=>17, 'r'=>18, 's'=>19, 't'=>20, 'u'=>21, 'v'=>22, 'w'=>23, 'x'=>24, 'y'=>25, 'z'=>26];
//$arr_eng = [26=>'a' , 25=>"b", 24=> 'c', 23=> 'd', 22=> 'e', 21=>'f', 20=>'g', 19=>'h', 18=>'i', 17=>'j', 16=>'k', 15=>'l', 14=>'m', 13=>'n', 12=>'o', 11=>'p', 10=>'q', 9=>'r', 8=>'s', 7=>'t', 6=>'u', 5=> 'v', 4=>'w', 3=>'x', 2=>'y', 1=>'z', 27=>'!', 28=>'?', 29=>' '];
//$arr_engl = [1=>'a' , 2=>"b", 3=> 'c', 4=> 'd', 5=> 'e', 6=>'f', 7=>'g', 8=>'h', 9=>'i', 10=>'j', 111=>'k', 12=>'l', 13=>'m', 14=>'n', 15=>'o', 16=>'p', 17=>'q', 18=>'r', 19=>'s', 20=>'t', 21=>'u', 22=> 'v', 23=>'w', 24=>'x', 25=>'y', 26=>'z'];

$data = [
    [
        'CITY'=>'Красноярск',
        'NAME'=>'Дима',
        'AGE'=>'18',
        'IS_WORK'=>true,
    ],
    [
        'CITY'=>'Москва',
        'NAME'=>'Саша',
        'AGE'=>'32',
        'IS_WORK'=>false,
    ],
    [
        'CITY'=>'Питер',
        'NAME'=>'Володя',
        'AGE'=>'25',
        'IS_WORK'=>true,
    ],
    [
        'CITY'=>'Новосибирск',
        'NAME'=>'Настя',
        'AGE'=>'36',
        'IS_WORK'=>false,
    ],
    [
        'CITY'=>'Курск',
        'NAME'=>'Елена',
        'AGE'=>'27',
        'IS_WORK'=>true,
    ],
    [
        'CITY'=>'Питер',
        'NAME'=>'Сергей',
        'AGE'=>'21',
        'IS_WORK'=>false,
        ],
    [
        'CITY'=>'Красноярск',
        'NAME'=>'Лиза',
        'AGE'=>'19',
        'IS_WORK'=>true,
    ],
    [
        'CITY'=>'Москва',
        'NAME'=>'Настя',
        'AGE'=>'35',
        'IS_WORK'=>false,
    ],
    [
        'CITY'=>'Курск',
        'NAME'=>'Володя',
        'AGE'=>'59',
        'IS_WORK'=>true,
    ],
    [
        'CITY'=>'Новосибирск',
        'NAME'=>'Настя',
        'AGE'=>'22',
        'IS_WORK'=>false,
    ],
    [
        'CITY'=>'Курск',
        'NAME'=>'Елена',
        'AGE'=>'15',
        'IS_WORK'=>false,
    ],
    [
        'CITY'=>'Питер',
        'NAME'=>'Саша',
        'AGE'=>'44',
        'IS_WORK'=>false,
    ],
];

i_show($_POST);

//i_show('Елена Питер 21 год');
$arr = [];

foreach ($data as $item) {
    if(!empty($_POST['text'])) {
        if($_POST['text'] != $item['NAME']) {
            continue;
        }
    }
    
    if(!empty($_POST['num1'])) {
        if($_POST['num1'] > $item['AGE']) {
            continue;
        }
    }
    if(!empty($_POST['num2'])) {
        if($_POST['num2'] < $item['AGE']) {
            continue;
        }
    }
    
    if(isset($_POST['sity'])) {
        foreach ($_POST['sity'] as $value) {
            
            if ($value == $item['CITY']) {
                $arr[] = $item;
            }

        }
        continue;
    }
    
    if(isset($_POST['IS_WORK'])) {
        if($_POST['IS_WORK'] == 'there') {$arr[] = $item; continue;}
        
        if($_POST['IS_WORK'] != $item['IS_WORK']) {
            continue;
        }
    }
    
    $arr[] = $item;
}

i_show($arr);

?>
<form action="" method="post" style="width: 290px; background-color: aquamarine">
    <fieldset>
        <legend>Тест</legend>
    
        <input type="text" name="text" placeholder="Введите ФИО" maxlength="105" value="<?=$_POST['text']?>"><br>
        <input type="number" name="num1" placeholder="Введите возраст ОТ" value="<?=$_POST['num1']?>"><br>
        <input type="number" name="num2" placeholder="Введите возраст ДО" value="<?=$_POST['num2']?>"><br><br>
        Города<br>
        <select name="sity[]" multiple>
            <option value="Питер">Питер</option>
            <option value="Новосибирск">Новосибирск</option>
            <option value="Красноярск">Красноярск</option>
            <option value="Курск">Курск</option>
            <option value="Москва">Москва</option>

        </select> <br><br>
    
        <input type="radio" name="IS_WORK" value="1">Работает<br>
        <input type="radio" name="IS_WORK" value="">Не работает<br>
        <input type="radio" name="IS_WORK" value="there">все<br><br>
    
    
        <button type="submit">Отправить</button> <br><br>
        
    </fieldset>
</form>


<?php











?>








