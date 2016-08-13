Set of widgets for AdminLTE2
============================
Set of widgets for AdminLTE2

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist jakim-pj/yii2-widgets-adminlte2
```

or add

```
"jakim-pj/yii2-widgets-adminlte2": "^1.0"
```

to the require section of your `composer.json` file.


Usage
-----

Once the extension is installed, simply use it in your code by  :

```php
        InfoBox::widget([
            'color' => 'bg-green',
            'icon' => 'fa-calendar-check-o',
            'text' => 'Last Check In',
            'number' => [
                Yii::$app->formatter->asDatetime($lastCheckIn->start), //line #1
                $lastCheckIn->user->fullName // line #2
            ]
        ]);
```

![](https://cloud.githubusercontent.com/assets/839118/17645276/ddf6d110-61a0-11e6-9513-4325d96961ad.png)
![](https://cloud.githubusercontent.com/assets/839118/17645275/ddf60dde-61a0-11e6-8dfa-03eb80e6dc02.png)
![](https://cloud.githubusercontent.com/assets/839118/17645274/ddf5f8bc-61a0-11e6-870c-730ee7518a21.png)



```php
        SmallBox::widget([
            'color' => 'bg-red',
            'icon' => 'fa-exclamation-triangle',
            'header' => $formatter->asInteger($incidents),
            'text' => 'Total number of incidents',
            'footerUrl' => Url::to(['incident/index']),
        ]);
```

![](https://cloud.githubusercontent.com/assets/839118/17645262/aba94cba-61a0-11e6-81b4-8cd59032b72a.png)
![](https://cloud.githubusercontent.com/assets/839118/17645263/abac023e-61a0-11e6-9290-d92996c2494b.png)
![](https://cloud.githubusercontent.com/assets/839118/17645264/abaf3850-61a0-11e6-8f0b-3a1a9d8d48c2.png)