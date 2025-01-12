<?php

namespace App\tags;

class LabelTag implements TagInterface
{
    private $text;
    private $innerTag;

    public function __construct(string $text, TagInterface $innerTag)
    {
        $this->text = $text;
        $this->innerTag = $innerTag;
    }

    public function render()
    {
        return "<label>{$this->text}{$this->innerTag->render()}</label>";
    }

    public function __toString()
    {
        return $this->render();
    }
}
