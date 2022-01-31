<?php 
use PHPUnit\Framework\TestCase;


final class TestExcercisesTest extends TestCase
{
    public function testIsBalanced(): void
    {
        $this->assertEquals(
            TestExcercises::isBalanced('{[][['), false
        );
        $this->assertEquals(
            TestExcercises::isBalanced('[]}{[]'), false
        );
        $this->assertEquals(
            TestExcercises::isBalanced('{[][[()]]}'), true
        );
    }
    public function testGetAnagrams(): void
    {
        $this->assertEqualsCanonicalizing(TestExcercises::getAnagrams('biro'), ['biro','bior','brio','broi','boir','bori','ibro','ibor','irbo','irob','iobr','iorb','rbio','rboi','ribo','riob','roib','robi','obir','obri','oibr','oirb','orbi','orib']);
    }
    public function testMaxNumber(): void
    {
        $this->assertEquals(TestExcercises::maxNumbers([50, 2, 1, 9]), "95021");
        $this->assertEquals(TestExcercises::maxNumbers([5, 50, 56]), "56550");
        $this->assertEquals(TestExcercises::maxNumbers([420, 42, 423]), "42423420");        
    }
}

