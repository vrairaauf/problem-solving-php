<?php 
use \PHPUnit\Framework\TestCase;
class FragumentCacheTest extends TestCase{

	public function testSuccess()
	{
		$a="ddd";
		function hell()
		{
			return null;
		}
		$b="hh";$c=$b;
		$this->assertEquals("ddd",$a);
		$this->assertNotEquals("dddj",$a);
		$this->assertNull(hell());
		$this->assertSame($b, $c);
	}
	public function testExpectFooActualFoo(): void
    {
        $this->expectOutputString('foo');
        function helld()
		{
			print 'foo';
		}
		helld();
    }

}
?>