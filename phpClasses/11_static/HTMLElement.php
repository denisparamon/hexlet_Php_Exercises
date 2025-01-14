<?php

namespace App;

class HTMLElement
{
    private $body;

    public function setTextContent($body)
    {
        $this->body = $body;
    }

    public function __toString()
    {
        $tagName = static::$params['name'];
        $isPair = static::$params['pair'];

        // Если тег одиночный (не имеет пары), возвращаем его как одиночный элемент
        if (!$isPair) {
            return "<$tagName>";
        }

        // Для пары возвращаем открывающий и закрывающий тег с содержимым
        if ($this->body !== null) {
            return "<$tagName>{$this->body}</$tagName>";
        }

        return "<$tagName></$tagName>";
    }
}
