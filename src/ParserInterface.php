<?php

//namespace lukesky\parser;
namespace migr\parser;

/**
 * @author Victor Zinchenko <zinchenko.us@gmail.com>
 */
interface ParserInterface
{

    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $url, string $tag): array;
}