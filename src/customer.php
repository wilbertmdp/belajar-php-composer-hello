<?php

namespace Wilbertanderson\Belajar;

class customer{

    public function __construct(private string $name){

    }

    public function sayhello(string $name):string{
        return "hello $name, my name is $this->name";
    }
}
