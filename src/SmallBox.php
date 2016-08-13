<?php

namespace jakim\widgets;

use yii\base\Widget;

class SmallBox extends Widget
{
    public $color = 'bg-aqua';
    public $icon = 'fa-info';
    public $header;
    public $text;
    public $footerUrl;
    public $footerText = 'More info ';
    public $footerIcon = 'fa-arrow-circle-right';

    public function run()
    {

        if ($this->footerUrl && !$this->footerText) {
            $this->footerText = parse_url($this->footerUrl, PHP_URL_HOST);
        }
        return $this->render('small-box', [
            'color' => $this->color,
            'icon' => $this->icon,
            'header' => (array)$this->header,
            'text' => (array)$this->text,
            'footerUrl' => $this->footerUrl,
            'footerText' => $this->footerText,
            'footerIcon' => $this->footerIcon,
        ]);
    }
}