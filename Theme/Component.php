<?php
class Theme_Component extends Kwf_Component_Theme_Abstract
{
    public static function getSettings()
    {
        $ret = parent::getSettings();
        $ret['componentName'] = 'Grey Box';
        return $ret;
    }

    public static function getRootSettings()
    {
        $ret = array();
        $ret['generators']['box'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => array(
                'mainMenu' => 'Theme_Menu_Main_Component',
                'subMenu' => 'Theme_Menu_Sub_Component',
                'bottomMenu' => 'Theme_Menu_Bottom_Component',
            ),
            'inherit' => true,
        );
        $ret['generators']['headerTitle'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Theme_Box_HeaderTitle_Component',
            'inherit' => true,
            'unique' => true,
        );
        $ret['generators']['metaTags'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Box_MetaTagsContent_Component',
            'inherit' => true,
        );
        $ret['generators']['openGraph'] = array(
            'class' => 'Kwf_Component_Generator_Box_StaticSelect',
            'component' => array(
                    'parentContent' => 'Kwc_Basic_ParentContent_Component',
                    'openGraph' => 'Kwc_Box_OpenGraph_Component'
            ),
            'inherit' => true,
            'boxName' => 'Open Graph'
        );
        $ret['generators']['title'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Box_TitleEditable_Component',
            'inherit' => true,
        );
        $ret['generators']['rssFeeds'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Kwc_Box_RssFeeds_Component',
            'inherit' => true,
            'unique' => true
        );

        $ret['generators']['searchBox'] = array(
            'class' => 'Kwf_Component_Generator_Box_Static',
            'component' => 'Theme_FulltextSearch_Box_Component',
            'unique' => true,
            'inherit' => true
        );

        $ret['generators']['search'] = array(
            'class' => 'Kwf_Component_Generator_Page_Static',
            'component' => 'Theme_FulltextSearch_Search_Directory_Component',
            'name' => trlStatic('Suche')
        );

        $ret['generators']['lastPosts'] = array(
            'class' => 'Kwf_Component_Generator_MultiBox_Static',
            'component' => 'Theme_Blog_Box_LastPosts_Component',
            'box' => 'rightBox',
            'inherit' => true
        );

        $ret['editComponents'] = array('title', 'metaTags', 'openGraph', 'headerTitle');

        $ret['contentWidth'] = 800;
        $ret['contentWidthBoxSubtract'] = array(
            'subMenu' => 200
        );

        $ret['masterTemplate'] = substr(dirname(__FILE__), strlen(getcwd())+1).'/Master.tpl';
        $ret['assets']['files'][] = 'theme/Theme/Web.scss';
        $ret['assets']['files'][] = 'theme/Theme/Master.scss';

        return $ret;
    }
}
