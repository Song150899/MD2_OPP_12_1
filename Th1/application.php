<?php

class application
{
    private string $name;
    public static int $count=0;
    public function __construct(string $name)
    { $this->name=$name;
        self::$count++;
    }
    public function __toString():string
    {
        // TODO: Implement __toString() method.
        return "Application name: " . $this->name;
    }

}