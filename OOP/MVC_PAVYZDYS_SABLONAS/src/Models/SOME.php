<?php
namespace MyProject\Models;
class SOME{

      public function __construct (private string $some1,
                                 private string $some2)
    {
    }
    /**
     * @return string
     */
    public function getSome1(): string
    {
        return $this->some1;
    }

    /**
     * @return string
     */
    public function getSome2(): string
    {
        return $this->some2;
    }
}