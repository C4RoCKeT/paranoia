<?php
/**
 * Created by PhpStorm.
 * User: tilst
 * Date: 5-8-2018
 * Time: 22:29
 */

namespace app\components;

use \NumberFormatter;
use yii\base\Widget;

class FormHeader extends Widget {

    public $partTemplate = '/// Part {part}';
    public $titleTemplate = '{title} >>>';

    public $part = 1;

    public $numberLanguage = 'en';

    public $title = 'THE COMPUTER IS YOUR FRIEND';

    public $upperCase = true;


    public function run() {
        $numberFormatter = new NumberFormatter($this->numberLanguage, NumberFormatter::SPELLOUT);
        $partLabel = strtr($this->partTemplate, ['{part}' => $numberFormatter->format($this->part)]);
        $title = strtr($this->titleTemplate, ['{title}' => $this->title]);
        if ($this->upperCase) {
            $partLabel = mb_strtoupper($partLabel);
            $title = mb_strtoupper($title);
        }
        ?>
        <div class="form-header">
            <div class="form-header-part-number">
                <i><?= $partLabel ?></i>
            </div>
            <div class="form-header-title">
                <?= $title ?>
            </div>
        </div>
        <?php
    }
}