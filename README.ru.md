[![uikit banner](https://cloud.githubusercontent.com/assets/321047/21769911/474d7d9e-d681-11e6-9fe0-d95f8ccfd3a9.jpg)](http://getuikit.com/)

# UIkit3 library for Joomla3

[![Download](https://img.shields.io/badge/-download-28A5F5.svg?style=for-the-badge)](https://master3.alekvolsk.info/uikit)
[![Documentation](https://img.shields.io/badge/-documentation-28A5F5.svg?style=for-the-badge)](https://getuikit.com)

![Last Update](https://img.shields.io/badge/last_update-2019.09.22-28A5F5.svg?style=for-the-badge)
![Version](https://img.shields.io/badge/version-3.2.0-1e87f0.svg?style=for-the-badge)

Обеспечивает работу шаблонов [Master3](https://github.com/master3-blank-template/Master3) и [Master3Lite](https://github.com/master3-blank-template/Master3-Lite).

Является независимым самостоятельным обновляемым расширением.

Содержит полную копию репозитория UIkit за исключением тестов.

Пример использования:

```php
/**
 * Метод подключает набор файлов фреймворка UIkit
 *
 * @param   boolean  $icons       True для подключения файла иконок [optional]
 * @param   mixed    $css         True для подключения стилей [optional]
 * @param   boolean  $rtl         True для подключения версии RTL [optional]
 * @param   boolean  $min         True для подключения минифицированной версии [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.framework', $isIcons, $isCss, $isRTL, $isMinified);


/**
 * Метод подгружает основной файл скрипта UIkit
 *
 * @param   boolean  $min         True для подключения минифицированной версии [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.js', $isMinified);


/**
 * Метод подгружает файл иконок UIkit
 *
 * @param   boolean  $min         True для подключения минифицированной версии [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.icons', $isMinified);


/**
 * Метод подключает CSS-стили UIkit
 *
 * @param   boolean  $rtl         True для подключения версии RTL [optional]
 * @param   boolean  $min         True для подключения минифицированной версии [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.css', $isRTL, $isMinified);
```

---

UIkit – это проект с открытым исходным кодом, разрабатываемый [YOOtheme](http://yootheme.com/).
