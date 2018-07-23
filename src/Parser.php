<?php

//namespace lukesky\parser;
namespace migr\parser;

/**
 * @author Student <notrealemail@gmail.com>
 */
class Parser implements ParserInterface
{

    /**
     * @param string $url
     * @param string $tag
     * @return array
     */
    public function process(string $tag, string $url): array
    {

        $htmlPage = file_get_contents($url);

        if ($htmlPage === false) {
            return ['Invalid URL'];
        }
        
        // Regular expression
		
		// int preg_match_all ( string $pattern , string $subject [, array &$matches [, int $flags = PREG_PATTERN_ORDER [, int $offset = 0 ]]] )	
		//Ищет в строке subject все совпадения с шаблоном pattern и помещает результат в массив matches в порядке, определяемом комбинацией флагов flags.	
		//После нахождения первого соответствия последующие поиски будут осуществляться не с начала строки, а от конца последнего найденного вхождения. 

        preg_match_all('/<' . $tag . '.*?>(.*?)<\/' . $tag . '>/s', $htmlPage, $strings);

        if (empty($strings[1])) {
            return ['There are no such tags on the page'];
        }

        return $strings[1];
    }
    
    public function test()
    {
        // feature
    }

}
