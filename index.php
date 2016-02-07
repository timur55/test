<?


function a (){

    echo "Фунция A";

}

define("VAR", "Hello world.");
$var = "123";

class B {

    public function c(){

        return a();

    }

    public function get_c(){

        echo $var;

    }

}

$b = new B;
$b->get_c();
$b->get_c();









?>