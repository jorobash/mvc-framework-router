<?php

class Str
{
    private $s = '';

    /**
     * @var string[]
     */
    private $functions = [
        'length' => 'strlen',
        'upper' => 'strtoupper',
        'lower' => 'strtolower'
    ];

    /**
     * @param string $s
     */
    public function __construct(string $s)
    {
        $this->s = $s;
    }

    /**
     * @param $method
     * @param $args
     * @return mixed
     * @method length
     * @method upper
     * @method lower
     */
    public function __call($method, $args)
    {
        if(!in_array($method,array_keys($this->functions))){
            throw new BadMethodCallException('Bad method');
        }

        array_unshift($args,$this->s);

        return call_user_func_array($this->functions[$method],$args);
    }
}
try{
    $s = new Str("Hello, world!");
    echo $s->lengtht();
}catch(BadMethodCallException $e){
    echo $e->getMessage();
}

