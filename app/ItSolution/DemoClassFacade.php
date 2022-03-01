<?php
namespace App\ItSolution;
use Illuminate\Support\Facades\Facade;
class DemoClassFacade extends Facade{
    protected static function getFacadeAccessor() { return 'democlass'; }
}
?>
