# phpFrameworkStudy
PHP框架的学习,主要是用于熟悉平时用得少的框架：
- 比如PHP中有传统的web框架（FPM），也有基于swoole，基于workman的框架
- 所以都来学习下，做下对比

# Yii
- 传统的fpm框架就用yii来做对比，因为对于thinkphp跟laravel都用得比较多比较熟悉
- 安装运行：本地环境需要安装composer，然后按照官网使用composer下载安装即可。搭建的虚拟主机指向=>basic/web的index.php
- 目录结构: 控制器=>basic/controllers ; 视图=>basic/views ; 数据库配置=>config/web.php  ; model => basic/models
- MVC：yii的控制器有方法跟操作；操作可以被外部URL访问，方法不可以。
  > yii\base\Model 被用于普通模型类的父类并与数据表无关。yii\db\ActiveRecord 通常是普通模型类的父类但与数据表有关联
  >
  >  yii\widgets\ActiveForm小部件足够智能到把模型中声明的验证转化成客户端JavaScript脚本去执行验证
- curd: yii中的控制器里面
- gii :  Gii可以去自动生成代码


# hyperf

- hyperf是一个高性能，高灵活性的渐进式PHP协程框架。内置协程服务器及大量常用的组件。（学习了一段时间感觉坑挺多的，不稳定，我基本是跟着文档来的，但跑着跑着就报错）
> 报错的原因找到了，就是因为在下载组件的时候不需要的组件不要下载，不然找不到相应的服务会报错~
> 坑2：官网的文档有3.0,2.0。不同版本要找对应的文档。不然写了重启不起作用

- 安装：前提是环境内需要有swoole，可以用docker拉取 hyperf/hyperf镜像。然后composer拉取 
```dockerfile
docker run --name hyperf -v /workspace/skeleton:/data/project -p 9501:9501 -it --privileged -u root --entrypoint /bin/sh hyperf/hyperf:8.0-alpine-v3.15-swoole
cd /data/project
composer create-project hyperf/hyperf-skeleton
cd hyperf-skeleton
php bin/hyperf.php start
```

- 路由: 可以像config/routes.php那样配置路由。 也可以用注解去使用
```php
 // 这个是通过配置文件去定义路由
 Router::post('/post', 'App\Controller\IndexController@post');

 // 其次是通过注解去配置路由==》通过#[AutoController]或者 #[Controller]
```
- 依赖注入：可以通过构造函数实现依赖注入，也可以通过注解 #[Inject] （依赖注入的好处就是：“不需要理会依赖的依赖”）

-端口监听：允许多端口监听，比如http服务是监听9501,那么可以新建一个服务innerHttp监听9502 （具体看文档配置）

- 事件：感觉是对swoole事件的进一步封装



