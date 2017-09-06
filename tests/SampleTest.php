<?php
namespace Acme\Test;
//require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';
//use PHPUnit\Framework\TestCase;
class SimpleTest extends \PHPUnit\Framework\TestCase
{

    public function testIsTrue() {
        $myvar = true;
        $this->assertTrue($myvar);
    }
}