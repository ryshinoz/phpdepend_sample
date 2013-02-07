<?php
namespace Sample\Controller;

class B
{
    public function action()
    {
        $service = new \Sample\Service\A();
        $service->hello();
    }
}
