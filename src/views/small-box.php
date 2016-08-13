<?php
/**
 *
 * @var string $color
 * @var string $icon
 * @var array $header
 * @var array $text
 * @var string $footerUrl
 * @var string $footerText
 * @var string $footerIcon
 */

use yii\helpers\Html;

?>

<div class="small-box <?= $color ?>">
    <div class="inner">
        <?php foreach ($header as $h): ?>
            <h3><?= Html::encode($h) ?></h3>
        <?php endforeach; ?>
        <?php foreach ($text as $t): ?>
            <p><?= Html::encode($t) ?></p>
        <?php endforeach; ?>
    </div>
    <div class="icon">
        <i class="fa <?= $icon ?>"></i>
    </div>
    <?php if ($footerUrl): ?>
        <a href="<?= $footerUrl ?>" class="small-box-footer">
            <?= Html::encode($footerText) ?>
            <?php if ($footerIcon): ?>
                <i class="fa <?= $footerIcon ?>"></i>
            <?php endif; ?>
        </a>
    <?php elseif ($footerText): ?>
        <a class="small-box-footer"><?= Html::encode($footerText) ?></a>
    <?php endif; ?>

</div>
