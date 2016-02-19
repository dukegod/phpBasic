# php 基本的语法

## 变量

规则：
* 以$开头
* 区分大小写，不能包含空格

### 创建变量

创建变量没有声明

### php global关键字

global 关键字用于函数内访问全局变量;

在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字;

PHP 将所有全局变量存储在一个名为 $GLOBALS[index] 的数组中.

```
<?php
	$x=5;
	$y=10;

	function myTest()
	{
		global $x,$y;
		$y=$x+$y;
	}

	myTest();
	echo $y; // 输出 15
?>
```

### Static 作用域

当一个函数完成时，它的所有变量通常都会被删除。然而，有时候您希望某个局部变量不要被删除。

要做到这一点，请在您第一次声明变量时使用 static 关键字：

```

<?php
function myTest()
{
static $x=0;
echo $x;
$x++;
}

myTest();
myTest();
myTest();

?>
```

**该变量仍然是函数的局部变量**

### 参数作用域

参数是通过调用代码将值传递给函数的局部变量。

参数是在参数列表中声明的，作为函数声明的一部分：

## 常量

常量在定义后，默认是全局变量，可以在整个运行的脚本的任何地方使用。

define(string constant_name, mixed value, case_sensitive = true)



