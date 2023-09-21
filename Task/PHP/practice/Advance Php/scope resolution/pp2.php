<?php

class ParentClass{
    static public $PublicDM = "scoperesolution";
    static private $PrivateDM = "PrivateDM";
    protected $ProtectedDM = "ProtectedDM";
    function parentMethod() {
        echo "parentMethod";
    }
}

echo ParentClass::$PublicDM;
// echo ParentClass::$PrivateDM;
// echo ParentClass::$ProtectedDM;

?>