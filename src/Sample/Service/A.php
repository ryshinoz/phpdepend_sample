<?php
namespace Sample\Service;

//class A extends AbstractService
class A
{
    public function hello()
    {
        $a = new \Sample\Model\A();
        $a->hello();
    }
}

