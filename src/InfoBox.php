<?php

namespace jakim\widgets;

use yii\base\Widget;

class InfoBox extends Widget
{
    public $color = 'bg-aqua';
    public $icon = 'fa-info';
    public $text;
    public $number;

    public function run()
    {
        return $this->render('info-box', [
            'color' => $this->color,
            'icon' => $this->icon,
            'text' => (array)$this->text,
            'number' => (array)$this->number,
        ]);
    }
}