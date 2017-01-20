<?php
/**
* nur - a simple framework for PHP Developers
*
* @author   izni burak demirtaş (@izniburak) <izniburak@gmail.com>
* @web      <http://burakdemirtas.org>
* @url      <https://github.com/izniburak/nur>
* @license  The MIT License (MIT) - <http://opensource.org/licenses/MIT>
*/

 if (!function_exists('htmlCompress'))
 {
     function htmlCompress($html)
     {
         return str_replace(["\n", "\t", "\r", "   "], '', $html);
     }
 }
