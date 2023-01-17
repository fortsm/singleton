<?php

class Singleton
{
    private $instance;

    public function getInstance() {
        if (!$this->instance) {
            $this->instance = $this;
        }

        return $this->instance;
    }

    public function sayHello() {
        echo "Hello world!";
    }
}