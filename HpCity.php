<?php
/**
 * File Name: HpCity.php
 * ©2020 All right reserved Qiaotongtianxia Network Technology Co., Ltd.
 * @author: hyunsu
 * @date: 2021/4/21 4:09 下午
 * @email: hyunsu@foxmail.com
 * @description:
 * @version: 1.0.0
 * ============================= 版本修正历史记录 ==========================
 * 版 本:          修改时间:          修改人:
 * 修改内容:
 *      //
 */

namespace qh4module\city;


use qh4module\city\models\CityActiveRecord;
use qttx\helper\ArrayHelper;

class HpCity
{
    /**
     * 获取城市数据树 用于 select 组件
     * @param array $level 等级筛选
     * @param array $alias 用于设置别名
     *               比如有些组件需要 label 和 value ,则可以传入 ['id'=>'value','name'=>'label']
     * @return array
     */
    public static function optionData($level = [1, 2, 3, 4], $alias = [])
    {
        $pid_name = 'parent_id';
        $id_name = 'id';
        $field_id = 'id';
        $field_name = 'name';
        if (isset($alias['id'])) {
            $field_id = "id as {$alias['id']}";
            $id_name = $alias['id'];
        }
        if (isset($alias['name'])) {
            $field_name = "name as {$alias['name']}";
        }

        $result = \QTTX::$app->db
            ->select([$field_id, 'parent_id', $field_name])
            ->from(CityActiveRecord::tableName())
            ->whereIn('level', $level)
            ->query();

        return ArrayHelper::formatTree($result, 100000, $pid_name, $id_name);
    }
}