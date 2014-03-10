<?php
/**
 * Epiceditor assets class file
 *
 * @author Evgeniy Kuzminov
 * @license MIT License
 * http://stdout.in
 */
namespace ijackua\epiceditor;

use yii\web\AssetBundle;
use yii;

class EpiceditorAssets extends AssetBundle
{
	public $sourcePath = '@epiceditor/assets';
	public $basePath = '@webroot/assets';
	public $js = [
		'js/epiceditor.js',
	];
	/**
	 * You can change css assets to connect another editor themes
	 * @var array
	 */
	public $css = [
		'css/base/epiceditor.css',
		'css/editor/epic-dark.css',
//		'css/editor/epic-light.css',
		'css/preview/github.css',
//		'css/preview/preview-dark.css',
	];
	public $depends = [
		'yii\web\JqueryAsset',
	];

	public function init() {
		Yii::setAlias('@epiceditor', __DIR__);
		return parent::init();
	}
}