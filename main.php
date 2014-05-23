<?php
/* * ************************************************************* 
 * Copyright notice 
 * 
 * (c) 2014 Chi Hoang (info@chihoang.de) 
 *  All rights reserved 
 * 
 * **************************************************************/
require_once("data.php");

class oracle {
    
    var $tabiging;
    var $tabhex;
    var $tabhexindex;
    var $tabcurr;
    var $hexnum; 
    var $hexnametab;   
    var $wtabhex;

    function oracle ($tabiging,$tabhex,$tabhexindex,$tabcurr,$hexnum,$hexnametab,$wtabhex)
    {
        $this->tabiging=$tabiging;    
        $this->tabhex=$tabhex;
        $this->tabhexindex=$tabhexindex;
        $this->tabcurr=$tabcurr;
        $this->hexnum=$hexnum;
        $this->hexnametab=$hexnametab;
        $this->wtabhex=$wtabhex;
    }
    
    function find_change($index) 
    {
        return $this->wtabhex[$index-1];
    }
    function find_name($current) 
    {
        return $this->hexnametab[$current-1];
    }
    function find_current($index) 
    {
        return $this->tabhex[$index-1];
    }
    function find_index($iging) 
    {
        for ($i=0; $i<4096; $i++) 
        {
            if ($this->tabcurr[$i] == $iging) 
            {
                break;
            }
        }
        return $i;
    }

    function hexagram() 
    {
        for ($i=1;$i<7;$i++) 
        {
            $mc = rand(0, 15);
            $iging = $this->tabiging[$mc]; 
            switch ($i) 
            {
                case 1:
                    $curr = $iging;
                    break;
                case 2 :
                    $curr = $curr+10*$iging;
                    break;
                case 3 :
                    $curr = $curr+100*$iging;
                    break;
                case 4 :
                    $curr = $curr+1000*$iging;
                    break;
                case 5 :
                    $curr = $curr+10000*$iging;
                    break;
                case 6 :
                    $curr = $curr+100000*$iging;
                    break;
            }    
        }
        return $curr;
    }
}  
?>
