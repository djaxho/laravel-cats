<?php

function printCat() {
  $cats = [];

        $cats[] = <<<EOD

  /\_/\   _
>( °w° )<((
  )   (  ))
 (__ __)// \n\n
EOD;
        $cats[] = <<<EOD

   /\     /\
  {  `---'  }
  {  O   O  }
  ~~>  V  <~~
   \  \|/  /
    `-----'__
    /     \  `^\_
   {       }\ |\_\_   W
   |  \_/  |/ /  \_\_( )
    \__/  /(_E     \__/
      (  /
       MM \n\n
EOD;
        $cats[] = <<<EOD

|\---/|
| o_o |
 \_^_/ \n\n
EOD;
        $cats[] = <<<EOD

           A___A    
     ____ / o o \   
   /~____   ='= /
  (______)__m_m_)    \n\n
EOD;
        
        echo (app()->runningInConsole() ? '' : '<pre>')
          . $cats[array_rand($cats)]
          . (app()->runningInConsole() ? '' : '</pre>');

}


if (! function_exists('c')) {

    /**
     * Helper to print some cats and dump data
     *
     * @return mixed
     */
    function c()
    {
        
      printCat();
      dump(...func_get_args());
    }
}

if (! function_exists('cc')) {

    /**
     * Helper to print some cats, dump data and die
     *
     * @return mixed
     */
    function cc()
    {
        c(...func_get_args());
        die(1);
    }
}

if (!function_exists('ccc') && function_exists('ddd')) {

    /**
     * Helper to print some cats, dump data and die
     *
     * @return mixed
     */
    function ccc()
    {
      printCat();
      ddd(...func_get_args());
    }
}
