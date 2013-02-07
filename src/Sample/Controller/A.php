<?php
namespace Sample\Controller;

class A
{
    public function action()
    {
        $service = new \Sample\Service\A();
        $service->hello();
    }
}
