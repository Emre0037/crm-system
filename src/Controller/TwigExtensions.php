<?php


namespace App\Controller;


use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;

class TwigExtensions extends AbstractExtension
{
    public function getFilters()
    {
        return [
            new TwigFilter('base64', [$this, 'twig_base64_filter']),
        ];
    }

    function twig_base64_filter($source)
    {   if($source!=null) {           
           return base64_encode(imagecreatefromstring($source));
        }
        return '';
    }
}