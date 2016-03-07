<?php

namespace payment\base;

use luya\helpers\ObjectHelper;
use yii\base\Object;
use yii\helpers\Inflector;

class Provider extends Object
{
    public function call($method, array $vars = [])
    {
        $object = new static;
        
        $response = ObjectHelper::callMethodSanitizeArguments($object, 'call' . Inflector::id2camel($method), $vars);
        
        return $response;
    }
}
