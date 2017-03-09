YII-JWT
=======
JSON Web Tokens ([JWT](https://jwt.io/)) in Yii 1.

Base PHP codes is [php-jwt](https://github.com/firebase/php-jwt).

Requirements
------------
Yii Framework 1.1 or above.

Installation
------------
Extract all files under `jwt` folder name in `extensions` folder.

And put the following code in `protected/config/main.php`

```php
'components'=>array(
    ...
    'JWT' => array(
        'class' => 'ext.jwt.JWT',
        'key' => 'HERE-INPUT-YOUR-SECRET-KEY',
    ),
    ...
),
```
Do not forget enter a suitable and complex secret key.

Example
------------
```php
$token = array(
    "blog" => "http://weblog.nabi.ir",
    "name" => "nabi",
    "date" => "2017-03-09",
    "number" => 1396
);

$jwt = Yii::app()->JWT->encode($token);
var_dump($jwt);

$decode = Yii::app()->JWT->decode($jwt);
var_dump($decode);
```
