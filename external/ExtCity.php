<?php
/**
 * File Name: ExtCity.php
 * ©2020 All right reserved Qiaotongtianxia Network Technology Co., Ltd.
 * @author: hyunsu
 * @date: 2021/5/20 9:44 下午
 * @email: hyunsu@foxmail.com
 * @description:
 * @version: 1.0.0
 * ============================= 版本修正历史记录 ==========================
 * 版 本:          修改时间:          修改人:
 * 修改内容:
 *      //
 */

namespace qh4module\city\external;


use qttx\web\External;

class ExtCity extends External
{
    public function tableName()
    {
        return '{{%city}}';
    }
}