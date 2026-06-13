/**
 * Плагин GLink для TinyMCE.
 * 
 * Пакет русской локализации.
 * 
 * @author    Anton Tivonenko
 * @copyright (c) 2015, by Anton Tivonenko, anton.tivonenko@gmail.com
 * @date      Oct 01, 2015
 */

Ext.apply(Rg.wd.tinymce.glink, {
    locale: {
        btnTooltip: 'Добавить / изменить ссылку на файл',
        menuItemText: 'Ссылка на файл' 
    }
});

Ext.define('Ext.locale.ru.Rg.wd.tinymce.glink.Panel', {
    override: 'Rg.wd.tinymce.glink.Panel',
    btnAddText: 'Добавить',
    btnAddTooltip: 'Добавить ссылку на файл в текст',
    btnEditText: 'Изменить',
    btnEditTooltip: 'Изменить ссылку на файл в тексте',
    btnCutText: 'Вырезать',
    btnCutTooltip: 'Вырезать ссылку на файл из текста',
    btnCancelText: 'Отмена',
    btnCancelTooltip: 'Закрыть окно',
    fldHrefLabel: 'URL-адрес',
    fldHrefTooltip: 'URL-адрес ссылки на файл (атрибут "href")',
    fldTextLabel: 'Текст ссылки',
    fldTitleLabel: 'Заголовок',
    fldTitleTooltip: 'Всплывающая подсказка ссылки на файл (атрибут "title")',
    fldTargetLabel: 'Цель',
    fldTargetTooltip: 'Действие при нажатии на ссылку (атрибут "target")',
    targetData: [
        {id: 'null', text: '[ без выбора ]'}, 
        {id: '_blank', text: 'открыть в новом окне'}
    ]
});

Ext.define('Ext.locale.ru.Rg.wd.tinymce.glink.Window', {
    override: "Rg.wd.tinymce.glink.Window",
    addingTitle: 'Добавление ссылки на файл',
    editingTitle: 'Изменение ссылки на файл'
});