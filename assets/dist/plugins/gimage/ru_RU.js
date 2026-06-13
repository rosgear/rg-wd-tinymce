/**
 * Плагин GImage для TinyMCE.
 * 
 * Пакет русской локализации.
 * 
 * @author    Anton Tivonenko
 * @copyright (c) 2015, by Anton Tivonenko, anton.tivonenko@gmail.com
 * @date      Oct 01, 2015
 */

Ext.apply(Rg.wd.tinymce.gimage, {
    locale: {
        btnTooltip: 'Добавить / изменить изображение материала',
        menuItemText: 'Изображение статьи' 
    }
});

Ext.define('Ext.locale.ru.Rg.wd.tinymce.gimage.Panel', {
    override: 'Rg.wd.tinymce.gimage.Panel',
    btnAddText: 'Добавить',
    btnAddTooltip: 'Добавить изображение в текст',
    btnEditText: 'Изменить',
    btnEditTooltip: 'Изменить изображение в тексте',
    btnCutText: 'Вырезать',
    btnCutTooltip: 'Вырезать изображение из текста',
    btnCancelText: 'Отмена',
    btnCancelTooltip: 'Закрыть окно',
    fldSrcLabel: 'URL-адрес',
    fldSrcTooltip: 'URL-адрес файла изображения (атрибут "src")',
    fldAltLabel: 'Альтернативный текст',
    fldAltTooltip: 'Альтернативное текстовое описание изображения (атрибут "alt")',
    fldTitleLabel: 'Подсказка',
    fldTitleTooltip: 'Всплывающая подсказка изображения (атрибут "title")',
    fldLongdescLabel: 'Подробное описание',
    fldLongdescTooltip: 'Ссылка на более подробное описание изображения (атрибут "longdesc")',
    fldLoadingLabel: 'Загрузка',
    fldLoadingTooltip: 'Указывает на то, как браузер должен загрузить изображение',
    fldFloatLabel: 'Обтекание',
    fldFloatTooltip: 'Обтекание изображения текстом',
    fldAlignLabel: 'Выравнивание',
    fldAlignTooltip: 'Выравнивание относительно текста или других изображений на странице',
    fieldsetCss: 'CSS (каскадные таблицы стилей) изображения',
    fldCssLabel: 'CSS-класс',
    fldCssTooltip: 'CSS-класс изображения в CSS-файле',
    fldStyleLabel: 'CSS-стили',
    fieldsetSize: 'Размеры изображения',
    fldWidthLabel: 'Ширина',
    fldHeightLabel: 'Высота',
    fldZoomLabel: 'увеличивать изображение при нажатии',
    loadingData: [
        {id: 'null', text: '[ без выбора ]'}, 
        {id: 'eager', text: 'загружать немедленно'}, 
        {id: 'lazy', text: 'отложить загрузку'}
    ],
    alignData: [
        {id: 'null', text: '[ без выбора ]'}, 
        {id: 'bottom', text: 'выравнивание нижней границы по окружающему тексту'}, 
        {id: 'left', text: 'выравнивание по левому краю окна'}, 
        {id: 'middle', text: 'выравнивание середины по базовой линии текущей строки'}, 
        {id: 'right', text: 'выравнивание  по правому краю окна'}, 
        {id: 'top', text: 'выравнивание верхней границы  по высокому элементу строки'}
    ],
    floatData: [
        {id: 'null', text: '[ без выбора ]'}, 
        {id: 'left', text: 'слева'}, 
        {id: 'right', text: 'справа'}
    ]
});

Ext.define('Ext.locale.ru.Rg.wd.tinymce.gimage.Window', {
    override: "Rg.wd.tinymce.gimage.Window",
    addingTitle: 'Добавление изображения',
    editingTitle: 'Изменение изображения'
});