<?php


namespace domain\Traits\Common;


trait MessageTraits
{
    protected $data;
    public function __construct()
    {
        $this->data['success'] = false;
        $this->data['data'] = [];
        $this->data['message'] = __('Something went wrong!');
        return $this->data;
    }
}
