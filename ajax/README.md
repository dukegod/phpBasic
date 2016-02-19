# ajax 技术 总结

## 同步交互

表单一起提交信息，等待，提交，等待

## 异步请求

不刷新表单

## HTTP 

原理： 计算机通讯的规格，

无状态的协议：

### http请求的过程：

+ 建立TCP连接
+ web浏览器向web服务器发送请求命令
+ web浏览器发送请求的头信息
+ web服务器应答
+ web服务器发送应答头信息
+ web服务器向浏览器发送数据
+ web服务器关闭TCP连接

#### http请求四部分组成：

+ http请求的方法或动作，比如是get还是post
+ 正在请求的URL，总得知道请求的地址
+ 请求头，包含一些客户端环境信息，身份验证信息等
+ 请求体，也就是请求正文，请求正文中可以包含客户提交的查询字符串信息，表单信息等等

##### get：

+ 一般用于信息获取
+ 使用url传递参数
+ 对于发送信息的数量也有限制

##### post： 

+ 一般用于修改服务器上的资源
+ 发送的信息数量无限制

#### http 响应组成：

+ 一个数字和文字的组成的状态码
+ 响应头
+ 响应体

##### 响应的状态码

1XX

## xmlhttprequest

后台与服务器之间的响应

+ 运用css与html来实现页面，表达信息
+ 运用XMLHttpRequest 和 web服务器进行数据的异步交换
+ 运用JavaScript 操作DOM，实现动态局部刷新

### 创建

```
<script type="text/javascript">
	var request;
	if (window.XMLHttpRequest) {
		request = new XMLHttpRequest(); //common browser
	} else{
		request = new ActiveXObject('Microsoft.XMLHTTP');
	}
</script>
```

### 发送请求

open(method,url,async)

content-type：

send()

```
```


### 获取响应

responseText

responseXML

status，

是否成功标识

readystate :请求的状态。

有5个可取值：

+ 0 = 未初始化，
+ 1 = 正在加载， open()方法没有调用
+ 2 = 已加载，
+ 3 = 交互中，
+ 4 = 完成


## json

存储和交换文本信息的语法类似XML


#### 解析 json 校验

+ eval 不推荐

+ JSON.parse() 转为 js对象;



### jquery 实现ajax 

jqXHR


## 跨域

一个域名组成：

http：//www.22.com:8080/js.js:  协议，子域名，主域名，端口号，请求资源地址

当协议，子域名，主域名端口号中任意一个不相同时，都算作不同域

不同域名之间相互请求资源都算作“跨域”

### 解决方法

代理

jsonp 解决get方法的跨域请求

一个页面声明，一个页面调用

XHR2 解决跨域

#### 代码说明

server.php: 普通的服务

serverjson.php: json的形式传输 

serverjson2.php: XHR2的方式处理跨域

serverjsonp.php:  jsonp的方式处理跨域












