<?php
/**
 * Created by PhpStorm.
 * User: chenshuixing
 * Date: 2021/3/13
 * Time: 16:47
 */

namespace Littlexiaoshuishui\Upay;


use Littlexiaoshuishui\Upay\Abstrats\GatewayInterface;
use mysql_xdevapi\Exception;

class Pay
{
    public function Create($method)
    {
        $gateway = __NAMESPACE__.'\\Gateways\\'.trim($method);

        if (class_exists($gateway)) {
            return self::make($gateway);
        }

        throw new Exception("Gateway [{$method}] Not Exists");
    }

    protected function make($gateway)
    {
        $app = new $gateway($this->config);

        if ($app instanceof GatewayInterface) {
            return $app;
        }

        throw new Exception("Gateway [{$gateway}] Must Be An Instance Of GatewayApplicationInterface");
    }

}