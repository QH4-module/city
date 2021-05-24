<?php
/**
 * File Name: TraitCityController.php
 * ©2020 All right reserved Qiaotongtianxia Network Technology Co., Ltd.
 * @author: hyunsu
 * @date: 2021/5/20 9:43 下午
 * @email: hyunsu@foxmail.com
 * @description:
 * @version: 1.0.0
 * ============================= 版本修正历史记录 ==========================
 * 版 本:          修改时间:          修改人:
 * 修改内容:
 *      //
 */

namespace qh4module\city;


use qh4module\city\external\ExtCity;
use qh4module\city\models\CityOptionData;

trait TraitCityController
{
    /**
     * @return ExtCity
     */
    public function ext_city()
    {
        return new ExtCity();
    }

    /**
     * 获取城市数据用于级联选择
     * @return mixed
     */
    public function actionCityOptionData()
    {
        $model = new CityOptionData([
            'external' => $this->ext_city(),
        ]);

        return $this->runModel($model);
    }
}