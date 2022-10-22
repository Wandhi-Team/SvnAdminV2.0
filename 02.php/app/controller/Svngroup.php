<?php
/*
 * @Author: witersen
 * @Date: 2022-04-24 23:37:05
 * @LastEditors: witersen
 * @LastEditTime: 2022-05-07 14:04:33
 * @Description: QQ:1801168257
 */

namespace app\controller;

use app\service\Svngroup as ServiceSvngroup;

class Svngroup extends Base
{
    /**
     * 服务层对象
     *
     * @var object
     */
    private $ServiceSvngroup;

    function __construct()
    {
        parent::__construct();

        $this->ServiceSvngroup = new ServiceSvngroup();
    }

    /**
     * 获取带有分页的分组列表
     */
    public function GetGroupList()
    {
        $result = $this->ServiceSvngroup->GetGroupList();
        json2($result);
    }

    /**
     * 编辑分组备注信息
     */
    public function EditGroupNote()
    {
        $result = $this->ServiceSvngroup->EditGroupNote();
        json2($result);
    }

    /**
     * 新建SVN分组
     */
    public function CreateGroup()
    {
        $result = $this->ServiceSvngroup->CreateGroup();
        json2($result);
    }

    /**
     * 删除SVN分组
     */
    public function DelGroup()
    {
        $result = $this->ServiceSvngroup->DelGroup();
        json2($result);
    }

    /**
     * 修改SVN分组的名称
     */
    public function EditGroupName()
    {
        $result = $this->ServiceSvngroup->EditGroupName();
        json2($result);
    }

    /**
     * 获取SVN分组的用户成员和分组成员
     */
    public function GetGroupMember()
    {
        $result = $this->ServiceSvngroup->GetGroupMember();
        json2($result);
    }

    /**
     * 为分组添加或者删除所包含的对象
     * 对象包括：用户、分组、用户别名
     */
    public function UpdGroupMember()
    {
        $result = $this->ServiceSvngroup->UpdGroupMember();
        json2($result);
    }
}
