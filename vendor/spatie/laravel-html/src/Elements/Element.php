<?php

namespace Spatie\Html\Elements;

use ReflectionClass;
use Spatie\Html\Attributes;
use Spatie\Html\BaseElement;
use Illuminate\Support\Collection;

class Element extends BaseElement
{
    /**
     * @param string $tag
     *
     * @return static
     */
    public static function withTag($tag)
    {
        $element = (new ReflectionClass(static::class))->newInstanceWithoutConstructor();

        $element->tag = $tag;
        $element->attributes = new Attributes();
        $element->children = new Collection();

        return $element;
    }
}
