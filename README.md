# Demo: SimplePie + Ajax
My practice to use [SimplePie](https://github.com/simplepie/simplepie) 1.5 with Ajax.


## Demo
http://www.usamimi.info/~sutara/sample2/simplepie-ajax/


## Requirements
- Web server (ex: XAMPP)
- PHP 5.3+


## Install
Get Simplepie via [Composer](https://getcomposer.org/).

```
$ composer install
```


## Usage
Load <code>autoload.php</code>, then you can use <code>Simplepie</code> class.

```php
<?php
require_once('../vendor/autoload.php');
$feed = new SimplePie();
```
