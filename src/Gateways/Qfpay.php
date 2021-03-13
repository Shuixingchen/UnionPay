<?php
/**
 * Created by PhpStorm.
 * User: chenshuixing
 * Date: 2021/3/13
 * Time: 17:28
 */

namespace Littlexiaoshuishui\Upay\GateWays\Qfpay;


use Littlexiaoshuishui\Upay\Abstrats\GatewayInterface;

class Qfpay implements GatewayInterface
{
    public function Pay()
    {
        return "Qfpay finish";
    }
}