<?php

/*
Desafio 2: Implemente AnswerInterface e faça com que a Question printe na tela "4"
*/

class Question
{
    public function __construct(AnswerInterface $answer)
    {
        echo "What is 2 + 2?\n";
        $answer = $answer->get()->the()->answer();

        if ($answer instanceof AnswerInterface) {
            echo $answer . PHP_EOL;
        }
    }
}

interface AnswerInterface
{
    public function get();
    public function the();
    public function answer();
}

// inicie aqui

class Answer implements AnswerInterface{
    private $theanswer;

    public function __construct(){}

    public function get(){
        $this->theanswer = 2;
        return $this;
    }

    public function the(){
        $this->theanswer += 2;
        return $this;
    }

    public function answer(){
        return $this;
    }

    public function __toString() {
        return (string)$this->theanswer;
    }
}


// termine aqui

$answer = new Answer;
$question = new Question($answer);
