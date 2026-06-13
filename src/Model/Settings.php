<?php
/**
 * Виджет веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Widget\TinyMCE\Model;

use Ge\Panel\Data\Model\WidgetSettingsModel;

/**
 * Модель настроек виджета.
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Widget\TinyMCE\Model
 * @since 1.0
 */
class Settings extends WidgetSettingsModel
{
    /**
     * {@inheritdoc}
     */
    public function maskedAttributes(): array
    {
        return [
            'menubar'          => 'menubar', // показывать главное меню
            'statusbar'        => 'statusbar', // показывать строку статуса
            'showToolbar'      => 'showToolbar', // показывать панель инструментов
            'defaultToolbar'   => 'defaultToolbar', // инструменты по умолчанию
            'toolbarItemsSize' => 'toolbar_items_size', // размер инструментов
            'plugins'          => 'plugins', // подключаемые плагины (plugins)
            'toolbar'          => 'toolbar', // панель инструментов
            'toolbar1'         => 'toolbar1', // панель инструментов (1-я строка)
            'toolbar2'         => 'toolbar2', // панель инструментов (2-я строка)
            'extendedValidElements' => 'extended_valid_elements', // расширенная проверка элементов (extended_valid_elements)
            // Увеличение изображения при нажатии
            'lbAttribute'    => 'lbAttribute', // атрибут признака увеличения
            'lbSrcAttribute' => 'lbSrcAttribute', // атрибут адреса полного изображения
            'lbPatternFile'  => 'lbPatternFile' // шаблон получения файла полного изображения
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels(): array
    {
        return [
            'menubar'          => 'Show menubar',
            'statusbar'        => 'Show statusbar',
            'showToolbar'      => 'Show toolbar',
            'defaultToolbar'   => 'Default toolbar',
            'toolbarItemsSize' => 'Toolbar size',
            'extendedValidElements' => 'Extended valid elements',
            'plugins'          => 'Plugins',
            'toolbar'          => 'Toolbar',
            'toolbar1'         => 'Toolbar (1 row)',
            'toolbar2'         => 'Toolbar (2 row)',
            // Увеличение изображения при нажатии
            'lbAttribute'    => 'Zoom flag attribute',
            'lbSrcAttribute' => 'Full image address attribute',
            'lbPatternFile'  => 'Template for getting full image file'
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function formatterRules(): array
    {
        return [
            [
                [
                    'menubar', 'statusbar', 'showToolbar', 'defaultToolbar'
                ], 'logic' => [true, false],
            ],
            [
                'plugins', 'tags'
            ]
        ];
    }
}