<?php
class Theme_Blog_Directory_Component extends Kwc_Blog_Directory_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['generators']['child']['component']['view'] = 'Theme_Blog_View_Component';
        $ret['generators']['detail']['component'] = 'Theme_Blog_Detail_Component';
        $ret['generators']['categories']['component'] = 'Theme_Blog_Category_Directory_Component';
        return $ret;
    }
}
