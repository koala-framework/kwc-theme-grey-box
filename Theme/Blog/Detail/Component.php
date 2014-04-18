<?php
class Theme_Blog_Detail_Component extends Kwc_Blog_Detail_Component
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['placeholder']['backLink'] = false;
        $ret['placeholder']['previousLink'] = trlKwfStatic('← Previous');
        $ret['placeholder']['nextLink'] = trlKwfStatic('Next →');
        $ret['generators']['child']['component']['comments'] = 'Theme_Blog_Comments_Directory_Component';
        return $ret;
    }
}
