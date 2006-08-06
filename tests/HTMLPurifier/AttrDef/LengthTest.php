<?php

require_once 'HTMLPurifier/AttrDefHarness.php';
require_once 'HTMLPurifier/AttrDef/Length.php';

class HTMLPurifier_AttrDef_LengthTest extends HTMLPurifier_AttrDef_PixelsTest
{
    
    function setup() {
        $this->def = new HTMLPurifier_AttrDef_Length();
    }
    
    function test() {
        
        // pixel check
        parent::test();
        
        // percent check
        $this->assertDef('25%');
        
        // Firefox maintains percent, so will we
        $this->assertDef('0%');
        
        // 0% <= percent <= 100%
        $this->assertDef('-15%', '0%');
        $this->assertDef('120%', '100%');
        
        // fractional percents, apparently, aren't allowed
        $this->assertDef('56.5%', '56%');
        
    }
    
}

?>