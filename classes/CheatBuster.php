<?php
class CheatBuster extends AbstractClass
{
     public function getValue() {
       return "No back button for cheaters!";
     }

     public function prefixValue($prefix) {
       return "{$prefix}Please use the application the way you're supposed to!";
    }
}
