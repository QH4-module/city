QH4框架扩展模块-城市模块

#### 功能
包含一份省市区街道4级城市数据表，含有层级、拼音、缩写、分级、经纬度等信息

### api列表
```php
/**
 * 获取城市数据用于级联选择
 * @return mixed
 */
public function actionCityOptionData()
```

### 方法列表
```php
/**
 * 获取城市数据树 用于 select 组件
 * @param array $level 等级筛选
 * @param array $alias 用于设置别名
 *               比如有些组件需要 label 和 value ,则可以传入 ['id'=>'value','name'=>'label']
 * @param ExtCity $external
 * @return array
 */
public static function optionData($level = [1, 2, 3, 4], $alias = [], ExtCity $external = null)
```