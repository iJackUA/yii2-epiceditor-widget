<?php
namespace ijackua\epiceditor;

use yii\web\AssetBundle;

class EpiceditorAssets extends AssetBundle
{
	public $sourcePath = '@app/widgets/epiceditor/assets';
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
}