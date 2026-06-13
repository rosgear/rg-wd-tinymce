<?php
/**
 * Виджет веб-приложения RosGear.
 * 
 * @link https://rosgear.ru/
 * @copyright Copyright (c) 2015 RosGear
 * @license https://rosgear.ru/license/
 */

namespace Rg\Widget\TinyMCE\Settings;

use Ge\Panel\Helper\ExtCombo;
use Ge\Filesystem\Filesystem;
use Ge\Panel\Widget\SettingsWindow;

/**
 * Настройки редактора "TinyMCE".
 * 
 * @link https://www.tiny.cloud/docs/tinymce/6/
 * 
 * @author Anton Tivonenko <anton.tivonenko@gmail.com>
 * @package Rg\Widget\TinyMCE\Settings
 * @since 1.0
 */
class Settings extends SettingsWindow
{
    /**
     * Возвращает доступные темы редактора.
     * 
     * Для выпадающего списка.
     * 
     * @return array
     */
    protected function getPlugins(): array
    {
        // путь к каталогу плагинов
        $path = __DIR__ . DS . '..' . DS . '..' . DS . 'assets' . DS . 'dist' . DS . 'plugins';
        $rows = iterator_to_array(
            Filesystem::finder()->directories()->ignoreDotFiles(true)->in($path)->sortByName(), false
        );

        foreach ($rows as $row) {
            $filename = $row->getFilename();
            if ($filename) {
                $name = pathinfo($filename, PATHINFO_FILENAME);
                $themes[] = [$name, str_replace('-', ' ', ucfirst($name))];
            }
        }
        return $themes;
    } 

    /**
     * Возвращает размеры панели инструментов.
     * 
     * Для выпадающего списка.
     * 
     * @return array
     */
    protected function getToolbarSize(): array
    {
        return [
            ['small', '#Small'],
            ['medium', '#Medium'],
            ['large', '#Large'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    protected function init(): void
    {
        parent::init();

        $this->responsiveConfig = [
            'height < 900' => ['height' => '99%'],
            'width < 640' => ['width' => '99%'],
        ];
        $this->width = 640;
        $this->height = 900;
        $this->resizable = false;
        $this->form->autoScroll = true;
        $this->form->defaults = [
            'labelWidth' => 200,
            'labelAlign' => 'right'
        ];
        $this->form->items = [
            [
                'xtype'  => 'fieldset',
                'title'  => '#Add plugins',
                'items'  => [
                    [
                        'xtype' => 'tagfield',
                        'name'  => 'plugins',
                        'width' => '100%',
                        'store' => [],
                        'value' => 'js',
                        'store' => [
                            'fields' => ['id', 'name'],
                            'data'   => $this->getPlugins()
                        ],
                        'encodeSubmitValue' => true,
                        'displayField'     => 'name',
                        'valueField'       => 'id',
                        'createNewOnEnter' => true,
                        'createNewOnBlur'  => false,
                        'filterPickList'   => false,
                        'queryMode'        => 'local'
                    ]
                ]
            ],
            [
                'xtype'  => 'fieldset',
                'title'  => '#Extended valid elements',
                'items'  => [
                    'xtype' => 'textarea',
                    'anchor' => '100%',
                    'height' => 20,
                    'name'   => 'extendedValidElements'
                ]
            ],
            [
                'xtype'  => 'fieldset',
                'title'  => '#Toolbar',
                'items'  => [
                    'xtype' => 'textarea',
                    'anchor' => '100%',
                    'height' => 20,
                    'name'   => 'toolbar'
                ]
            ],
            [
                'xtype'  => 'fieldset',
                'title'  => '#Toolbar (1 row)',
                'items'  => [
                    'xtype' => 'textarea',
                    'anchor' => '100%',
                    'height' => 30,
                    'name'   => 'toolbar1'
                ]
            ],
            [
                'xtype'  => 'fieldset',
                'title'  => '#Toolbar (2 row)',
                'items'  => [
                    'xtype' => 'textarea',
                    'anchor' => '100%',
                    'height' => 30,
                    'name'   => 'toolbar2'
                ]
            ],
            [
                'xtype'    => 'fieldset',
                'title'    => '#Zoom image on click',
                'defaults' => [
                    'xtype'      => 'textfield',
                    'labelWidth' => 300,
                    'labelAlign' => 'right',
                    'anchor'     => '100%'
                ],
                'items' => [
                    [
                        'name'       => 'lbAttribute',
                        'fieldLabel' => '#Zoom flag attribute',
                        'tooltip'    => '#An attribute will be added to the image tag. Telling the plugin that the image can be enlarged.'
                    ],
                    [
                        'name'       => 'lbSrcAttribute',
                        'fieldLabel' => '#Full image address attribute',
                        'tooltip'    => '#An attribute will be added to the image tag that points the plugin to the URL of the full image.'
                    ],
                    [
                        'name'       => 'lbPatternFile',
                        'fieldLabel' => '#Template for getting full image file',
                        'tooltip'    => '#All words separated by "," will be removed from the original image URL, resulting in a new URL for the full image.'
                    ]
                ]
            ],
            [
                'xtype' => 'label',
                'ui'    => 'fieldset-comment',
                'text'  => '#Parameters passed to the plugin responsible for enlarging the image',
                'style' => 'margin-bottom:15px',
            ],
            ExtCombo::local('#Toolbar size', 'toolbarItemsSize', $this->getToolbarSize()),
            [
                'xtype'  => 'container',
                'layout' => 'column',
                'items'  => [
                    [
                        'columnWidth' => 0.5,
                        'defaults'    => [
                            'labelWidth' => 200,
                            'labelAlign' => 'right'
                        ],
                        'items' => [
                            [
                                'xtype'      => 'checkbox',
                                'ui'         => 'switch',
                                'name'       => 'menubar',
                                'fieldLabel' => '#Show menubar'
                            ],
                            [
                                'xtype'      => 'checkbox',
                                'ui'         => 'switch',
                                'name'       => 'statusbar',
                                'fieldLabel' => '#Show statusbar'
                            ]
                        ]
                    ],
                    [
                        'columnWidth' => 0.5,
                        'defaults'    => [
                            'labelWidth' => 220,
                            'labelAlign' => 'right'
                        ],
                        'items' => [
                            [
                                'xtype'      => 'checkbox',
                                'ui'         => 'switch',
                                'name'       => 'showToolbar',
                                'fieldLabel' => '#Show toolbar'
                            ],
                            [
                                'xtype'      => 'checkbox',
                                'ui'         => 'switch',
                                'name'       => 'defaultToolbar',
                                'fieldLabel' => '#Default toolbar'
                            ]
                        ]
                    ]
                ]
            ],
            [
                'xtype'    => 'fieldset',
                'title'    => '#Editor TinyMCE',
                'style'    => 'margin-top:15px',
                'defaults' => [
                    'xtype'      => 'displayfield',
                    'ui'         => 'parameter',
                    'labelWidth' => 70,
                    'labelAlign' => 'right'
                ],
                'items' => [
                    [
                        'fieldLabel' => '#version',
                        'value'      => '4.7.13'
                    ],
                    [
                        'fieldLabel' => '#site',
                        'value'      => '<a target="_blank" href="https://www.tiny.cloud/">https://www.tiny.cloud/</a>'
                    ]
                ]
            ]
            
        ];
    }
}