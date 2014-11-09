<?php
/**
 * @author: Indranil Samanta.
 */

function encrypt($string){
    $string = str_rot13($string);
    $string = strtolower($string);
    $string = str_replace('a','baryR42304-53)(&^*%^#@!Y*96964fef',$string);
    $string = str_replace('b','2@fedj^&*%g45543ehrnwkjh%#$^gjh7i',$string);
    $string = str_replace('c','36y565yurerqwev%^#$)(*(&^))_(5487fmg',$string);
    $string = str_replace('d','4547547rthwefgenujb^$()2645',$string);
    $string = str_replace('e','IUVK&^^^&%^BJVv$#@H$',$string);
    $string = str_replace('f','gv356uyj',$string);
    $string = str_replace('g','46h5j5yj',$string);
    $string = str_replace('h','65u8netgrjtgr*&%**(&5446/*',$string);
    $string = str_replace('i','460[ja]l',$string);
    $string = str_replace('j','@#gthr!%$^&',$string);
    $string = str_replace('k','hjrwnnnwenwt4nbwbw',$string);
    $string = str_replace('l','fk;4',$string);
    $string = str_replace('m','bhrtgngmhmy5yu579nw',$string);
    $string = str_replace('n','-+#%#^*(',$string);
    $string = str_replace('o','ejgwe4973',$string);
    $string = str_replace('p','34879)*(_9',$string);
    $string = str_replace('q','@!$!^@!(*@)@_!*',$string);
    $string = str_replace('r','jh$%&*54',$string);
    $string = str_replace('s','hrmrhme@##$!%',$string);
    $string = str_replace('t','FY525452@%%$',$string);
    $string = str_replace('u','  whfwgh^*$ ',$string);
    $string = str_replace('v','__RYJYRJYJY__#RY%#YHTBH@T',$string);
    $string = str_replace('w','GGIY^&^&%98875)_N',$string);
    $string = str_replace('x','fktd^$#_*(JKB875jhv$!@',$string);
    $string = str_replace('y','gchytd^&987456G',$string);
    $string = str_replace('z','1GHCTES%#*(BHV',$string);    
    $string = str_replace(' ','*)%^(_+hhgm-',$string);
    
    $string = md5(md5(md5(md5(md5($string)))));
    $string = str_rot13($string);
    $string = str_replace('z','1',$string);
    $string = str_replace('y','2',$string);
    $string = str_replace('x','3',$string);
    $string = str_replace('w','4',$string);
    $string = str_replace('v','5',$string);
    $string = str_replace('u','6',$string);
    $string = str_replace('t','7',$string);
    $string = str_replace('s','8',$string);
    $string = str_replace('r','9',$string);
    $string = str_replace('q','0',$string); 
    $string = md5($string);   
    $string = str_rot13($string);
    $string = str_replace('a','<',$string); 
    $string = str_replace('b','>',$string); 
    $string = str_replace('c',';',$string); 
    $string = str_replace('m',']',$string); 
    $string = str_replace('n','[',$string); 
    $string = str_replace('f','@',$string); 
    $string = md5($string);   
    $string = str_rot13($string);
    //$string = substr($string,3,15);
    
    return $string; 
}

echo encrypt('This is a string');
?> 