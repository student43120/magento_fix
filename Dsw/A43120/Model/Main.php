<?php

namespace Dsw\A43120\Model;


class Main
{
    protected array $data;
    protected Injectable $injectable;

    /**
     * @param Injectable $injectable
     * @param array $data
     */
    public function __construct(Injectable $injectable, array $data = [])
    {
        $this->data=$data;
        $this->injectable = $injectable;
    }

    public function getId(): string
    {
        return $this->data['id'];
    }

    public function getInjectable(): Injectable
    {
        return $this->injectable;
    }

}
