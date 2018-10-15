<?php
/**
 * Created by PhpStorm.
 * User: Brandon Tilstra
 * Date: 1-6-2018
 * Time: 14:23
 */

namespace common\behaviors;

use yii\base\Behavior;
use common\models\User;
use yii\authclient\ClientInterface;
use common\models\Auth;

/**
 * Class AuthClientBehavior
 *
 * @property User $owner
 * @package common\behaviors
 */
class AuthClientBehavior extends Behavior
{

    public function isConnected(ClientInterface $authClient)
    {
        return Auth::find()->where([
            'user_id' => $this->owner->getId(),
            'source' => $authClient->getId()
        ])->exists();
    }
}