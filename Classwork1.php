<?php
class fnc{
    var $name;
    public $fname;
    protected $username;
    private $password;
    public function computer_user($fname){
        return $fname;
    }
    public function user_age($fname,$yob){
        $user = $this-> computer_user($fname);
        $age = date('Y') - $yob;
        return $user . " is "  .$age;
    }
    public function hash_pass($pass){
        return password_hash($pass, PASSWORD_DEFAULT);
    }

}
$Obj = new fnc();
print $Obj-> user_age("Alex", 2000);
print '<br>';

print $Obj-> hash_pass("123");

?>