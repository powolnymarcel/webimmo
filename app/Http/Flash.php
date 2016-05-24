<?php
namespace App\Http;
class Flash
{

    public function creation($title, $text, $type, $key = 'flash_message')
    {
        session()->flash($key, [
            'title'  => $title,
            'message'   => $text,
            'level'   => $type,
        ]);
    }


    public function warning($title, $text)
    {
        return $this->creation($title, $text, 'warning');
    }


    public function error($title, $text)
    {
        return $this->creation($title, $text, 'error');
    }


    public function success($title, $text)
    {
        return $this->creation($title, $text, 'success');
    }


    public function info($title, $text)
    {
        return $this->creation($title, $text, 'info');
    }


    public function overlay($title, $text, $level = 'info')
    {
        return $this->creation($title, $text, $level, 'flash_message_overlay');
    }
}