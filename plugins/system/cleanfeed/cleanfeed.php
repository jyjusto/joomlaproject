<?php
/**
 * @version		$Id: cleanfeed.php 20196 2011-03-04 02:40:25Z mrichey $
 * @package		plg_system_cleanfeed
 * @copyright	Copyright (C) 2005 - 2011 Michael Richey. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access
defined('_JEXEC') or die;

jimport('joomla.plugin.plugin');

class plgSystemCleanFeed extends JPlugin
{
    	/**
	 * Constructor
	 *
	 * @access	protected
	 * @param	object	$subject The object to observe
	 * @param 	array   $config  An array that holds the plugin configuration
	 * @since	1.0
	 */
	function plgSystemCleanFeed( &$subject, $config )
	{
		parent::__construct( $subject, $config );
	}
	/**
	 * onContentPrepare
	 *
	 * Method is called by the view
	 *
	 * @param	string	The context of the content being passed to the plugin.
	 * @param	object	The article object.  Note $article->text is also available
	 * @param	object	The article params
	 * @param	int		The 'page' number
	 */
	public function onAfterRender()
	{
            $app = JFactory::getApplication();
            
            // verify that we're dealing with a feed
            if($app->isAdmin() || JRequest::getVar('format',false,'GET','string')!='feed') return true;

            // it's on!
            $plugins = $this->params->get('plugins',false);
//            if(strlen(trim($plugins))) {
//                $plugins = explode("\n",$plugins);
//            } else {
//                return true;
//            }
//            $find=array();
//            $replace=array();
//            foreach($plugins as $plugin) {
//                $find[]='/\{'.$plugin.'.*\}/';
//                $find[]='/\{'.$plugin.'\}.*\{\/'.$plugin.'\}/';
//                $replace[]='';
//                $replace[]='';
//            }
//            if(count($find)) {
//                $buffer = JResponse::getBody();
//                $buffer = preg_replace($find,$replace,$buffer);
//                JResponse::setBody($buffer);
//            }
            if(strlen(trim($plugins))) {
                $plugins = explode("\n",$plugins);
                $buffer = JResponse::getBody();
            } else {
                return true;
            }
            $wildcard=false;
            foreach($plugins as $key=>$plugin) {
                if($plugin == '*') {
                    $wildcard = true;
                    unset($plugins[$key]);
                }
            }
            if($wildcard) {
                preg_match_all('/\{\w*/',$buffer,$matches);
                foreach($matches[0] as $match) {
                    $match=str_replace('{','',$match);
                    if(strlen($match)) $plugins[$match]=$match;
                }
            }
            $find=array();
            $replace=array();
            foreach($plugins as $plugin) {
                $find[]='\{'.$plugin.'\s?.*?\}.*?\{/'.$plugin.'\}';
                $find[]='\{'.$plugin.'\s?.*?\}';
                $replace[]='';
                $replace[]='';
            }
            if(count($find)) {
                foreach($find as $key=>$f) {
                    $f = '/'.str_replace('/','\/',$f).'/';
                    $find[$key]=$f;
                }
                $buffer = preg_replace($find,$replace,$buffer);
                JResponse::setBody($buffer);
            }
        }
}