<?php
namespace Space;
echo '<BR>Space';

class Tree
{
	public function leaves($value='')
	{
		echo '<BR>Space leaves';
	}
}//end class


namespace Space1;
// Space1 命名空间中的PHP代码
class Tree
{

	public function leaves($value='')
	{
		echo 'Space leaves 01';
	}
}//end class


namespace Space2;
// Space2 命名空间中的PHP代码
class Tree
{

	public function leaves($value='')
	{
		echo 'Space leaves 02';
	}
}//end class