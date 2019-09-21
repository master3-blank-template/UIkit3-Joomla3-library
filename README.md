[![uikit banner](https://cloud.githubusercontent.com/assets/321047/21769911/474d7d9e-d681-11e6-9fe0-d95f8ccfd3a9.jpg)](http://getuikit.com/)

# UIkit3 library for Joomla3

[![Download](https://img.shields.io/badge/-download-28A5F5.svg?style=for-the-badge)](https://master3.alekvolsk.info/uikit)
[![Documentation](https://img.shields.io/badge/-documentation-28A5F5.svg?style=for-the-badge)](https://getuikit.com)

![Last Update](https://img.shields.io/badge/last_update-2019.09.22-28A5F5.svg?style=for-the-badge)
![Version](https://img.shields.io/badge/version-3.2.0-1e87f0.svg?style=for-the-badge)

_description in Russian [here](README.ru.md)_

Provides the work of templates [Master3](https://github.com/master3-blank-template/Master3) and [Master3Lite](https://github.com/master3-blank-template/Master3-Lite).

Contains a full copy of the UIkit repository with the exception of tests.

Usage:

```php
/**
 * Method to load the UIkit JavaScript & CSS framework into the document head
 *
 * @param   boolean  $icons       True to load UIkit icons [optional]
 * @param   mixed    $css         True to load UIkit styles [optional]
 * @param   boolean  $rtl         True to enable RTL mode in styles [optional]
 * @param   boolean  $min         True to enable the minimized version [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.framework', $isIcons, $isCss, $isRTL, $isMinified);


/**
 * Method to load the UIkit JavaScript clean framework into the document head
 *
 * @param   boolean  $min         True to enable the minimized version [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.js', $isMinified);


/**
 * Method to load the UIkit.Icons JavaScript framework into the document head
 *
 * @param   boolean  $min         True to enable the minimized version [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.icons', $isMinified);


/**
 * Method to load the UIkit CSS framework into the document head
 *
 * @param   boolean  $rtl         True to enable RTL mode in styles [optional]
 * @param   boolean  $min         True to enable the minimized version [optional]
 *
 * @return  void
 */
\Joomla\CMS\HTML\HTMLHelper::_('uikit3.css', $isRTL, $isMinified);
```

---

UIkit is an Open Source project developed by [YOOtheme](http://yootheme.com/).
