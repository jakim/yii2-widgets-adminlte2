<?php
/**
 *
 * @var string $color
 * @var string $icon
 * @var array $text
 * @var array $number
 */

use yii\helpers\Html;

?>

<div class="info-box">
        <span class="info-box-icon <?= $color ?>">
            <i class="fa <?= $icon ?>"></i>
        </span>

    <div class="info-box-content">
        <?php foreach ($text as $t): ?>
            <span class="info-box-text"><?= Html::encode($t) ?></span>
        <?php endforeach; ?>
        <?php foreach ($number as $n): ?>
            <span class="info-box-number"><?= $n ?></span>
        <?php endforeach; ?>
    </div>
</div>
