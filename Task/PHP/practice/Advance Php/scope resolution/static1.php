<?php

use ParentClass as GlobalParentClass;

class ParentClass{
    static public $PublicDM = "PublicDM from parent";
    static private $PrivateDM = "PrivateDM from parent";
    static protected $ProtectedDM = "ProtectedDM from parent";
    static function parentMethod() {
        echo "<br>parentMethod<br>";
        // echo parent::$PrivateDM."<br>"; // we are not able to use parent:: in based/ parent class
        echo self::$PrivateDM." inside parent class <br>";
    }
}
class ChildClass extends GlobalParentClass{
    static function StaticMethod() {
        // echo $this->PublicDM;
        echo parent::$PublicDM."<br>";
        echo parent::$ProtectedDM."<br>";
        echo self::$ProtectedDM." protected DM accessing inchild by self keyword with ::  <br>";
        // echo parent::$PrivateDM."<br>";
        echo "called Static Method";
    }
}

echo ChildClass::StaticMethod();
echo ChildClass::parentMethod   ();
?>