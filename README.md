# phpFrameworkStudy
PHP框架的学习,主要是用于熟悉平时用得少的框架：
- 比如PHP中有传统的web框架（FPM），也有基于swoole，基于workman的框架
- 所以都来学习下，做下对比

# Yii
- 传统的fpm框架就用yii来做对比，因为对于thinkphp跟laravel都用得比较多比较熟悉
- 安装运行：本地环境需要安装composer，然后按照官网使用composer下载安装即可。搭建的虚拟主机指向=>basic/web的index.php
- 目录结构: 控制器=>basic/controllers ; 视图=>basic/views ; 数据库配置=>config/web.php
- MVC：yii的控制器有方法跟操作；操作可以被外部URL访问，方法不可以。
  > yii\base\Model 被用于普通模型类的父类并与数据表无关。yii\db\ActiveRecord 通常是普通模型类的父类但与数据表有关联
  >
  >  yii\widgets\ActiveForm小部件足够智能到把模型中声明的验证转化成客户端JavaScript脚本去执行验证
- curd: yii中的控制器里面
