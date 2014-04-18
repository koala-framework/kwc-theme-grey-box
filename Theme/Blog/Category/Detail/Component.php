<?php
class Theme_Blog_Category_Detail_Component extends Kwc_Blog_Category_Detail_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['list'] = 'Theme_Blog_Category_Detail_List_Component';
        return $ret;
    }
}
