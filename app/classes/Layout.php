<?php

namespace app\classes;

class Layout
{

    private $view;
    private array $data = [];

    public function add($view)
    {

        $this->view = $view;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function load()
    {

        return "../app/views/{$this->view}.php";
    }

    public function loadData($data)
    {

        $loadData = $this->data = $data;

        return (object) $loadData;
    }

    public function master($master)
    {

        return "../app/views/{$master}.php";
    }
}
