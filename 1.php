<?php
/*
Desafio 1: Leia e escreva no Test::$secret antes que ele seja enviado no output.

Regras:
1. Não utilizar API Reflection / runkit extension
2. Não parar a execução antes de Test::run()
3. Não gerar Exceptions ou PHP errors / warning e notices são permitidos
4. Não é permitido redefinir $test

Dicas:
1. Caesar
2. Métodos mágicos
3. Requer algo que ficou disponível na versão 5.4 PHP
*/


class Test
{
    private $secret = 'Nyy lbhe Onfr ner orybat gb hf.';

    private $callback;

    final public function run()
    {
        call_user_func($this->callback);
        return $this->secret . PHP_EOL;
    }

    public function __set($k, $v)
    {
        $key          = $v[($v[$v])]; // $v é um tipo estranho de array
        $value        = $v(); // e também um callback
        $this->{$key} = $value;
    }

}


$test = new Test;

// comece editar aqui
class Obj implements ArrayAccess {
    private $t;
    public function __construct($t) {
        $this->t = $t;
        return;
    }
    public function offsetSet($offset, $value) { return; }
    public function offsetExists($offset) { return; }
    public function offsetUnset($offset) { return; }

    public function offsetGet($offset) {
        return 'callback';
    }

    public function __invoke() {
        return function() { print_r($this); };
    }
}

$obj = new Obj($test);

$test->x = $obj;
// termine de editar aqui

echo $test->run();
