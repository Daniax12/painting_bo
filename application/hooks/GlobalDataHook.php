<?php

class GlobalDataHook
{
    protected $CI;

    public function __construct()
    {
        $this->CI =& get_instance();
    }

    public function load_global_data()
    {
        $CI =& get_instance();
        $CI->load->model('admin/Journal');
        $data['code_journaux'] = $CI-> Journal ->get_code_journaux();
        $CI->load->vars($data);
    }
}