<?php

/*
Desafio 3: Use reflection to conseguir acesso a Question::$answer do $e->getAnswer
*/

class Question
{
    private $answer = 42;

    public function __construct($e)
    {
        try {
            throw $e;
        } catch (Exception $e) {
            echo $e->getAnswer($this) . PHP_EOL;
        }
    }
}


// start editing here


class AccessException extends Exception
{
    public function getAnswer(Question $question)
    {
    	$ro = new ReflectionObject($question);
    	$ans = $ro->getProperty('answer');
    	$ans->setAccessible(true);
    	echo $ans->getValue($question);
    }
}
$e = new AccessException();

// end editing here

new Question($e);
