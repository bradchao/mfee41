<?php
    function sayYa(){
        echo "Ya<br />";
    }
    function sayHello($name = 'World'){
        echo "Hello, {$name}<br />";
    }
    function sayHelloV2($name, $n = 1){
        for ($i=0; $i<$n; $i++){
            echo "Hello, {$name}<br />";
        }
    }

    function sum(){
        $args = func_get_args();
        $ret = 0;
        foreach($args as $v){
            $ret += $v;
        }
        return $ret;
    }

    sayYa();sayYa();
    sayHello('Brad');
    sayHello();
    sayHelloV2('Amy', 3);
    sayHelloV2('Eric');
    echo '<hr />';
    echo sum(1,2,3,4,5,6,7,8,9,10);
    



?>