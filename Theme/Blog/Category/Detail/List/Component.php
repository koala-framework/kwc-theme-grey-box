<?php
class Theme_Blog_Category_Detail_List_Component extends Kwc_Blog_Category_Detail_List_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['view'] = 'Theme_Blog_View_Component';
        return $ret;
    }
}
