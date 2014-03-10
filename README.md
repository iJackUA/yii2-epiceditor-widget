yii2-epiceditor-widget
======================
Yii2 widget for EpicEditor - An Embeddable JavaScript Markdown Editor

## Demo

on [http://epiceditor.com](http://epiceditor.com/)

## Usage example

### Active widget

```php
use ijackua\epiceditor\Epiceditor;

Epiceditor::widget([
		'model' => $model,
		'attribute' => 'text',
		'options' => ['focusOnLoad' => true],
		'divHtmlOptions' => ['class' => 'epiceditordiv']
	])
```

### Simple widget

```php
use ijackua\epiceditor\Epiceditor;

Epiceditor::widget([
		'name' => 'epiceditor',
		'value' => '# Hello world',
		'options' => ['focusOnLoad' => true],
		'divHtmlOptions' => ['class' => 'epiceditordiv']
	])
```

## Available EpicEditor options

see on [official EpicEditor site](http://epiceditor.com/#options)

## Available Marked options (markdown parser used by EpicEditor)
see on [official EpicEditor site](https://github.com/chjj/marked)