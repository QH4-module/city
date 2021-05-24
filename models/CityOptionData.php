<?php
/**
 * File Name: CityOptionData.php
 * ©2020 All right reserved Qiaotongtianxia Network Technology Co., Ltd.
 * @author: hyunsu
 * @date: 2021/5/20 9:45 下午
 * @email: hyunsu@foxmail.com
 * @description:
 * @version: 1.0.0
 * ============================= 版本修正历史记录 ==========================
 * 版 本:          修改时间:          修改人:
 * 修改内容:
 *      //
 */

namespace qh4module\city\models;


use qh4module\city\external\ExtCity;
use qh4module\city\HpCity;
use qttx\web\ServiceModel;

/**
 * Class CityOptionData
 * @package qh4module\city\models
 * @property ExtCity $external
 */
class CityOptionData extends ServiceModel
{
    /**
     * @var
     */
    public $level = [1, 2, 3];

    /**
     * @inheritDoc
     */
    public function rules()
    {
        return [
            [['level'], 'array', 'type' => 'integer'],
        ];
    }

    /**
     * @inheritDoc
     */
    public function run()
    {
        return HpCity::optionData($this->level, ['id' => 'value', 'name' => 'label'], $this->external);
    }
}