# Конвертер строк
Преобразует строку в верхний регистр

## Требования
- PHP 7.4

## Установка
```bash
$ composer require supervoron/formatter-composer-package
```

# Использование
```php
<?php
$stringFormatter = new StringFormatter();
echo $stringFormatter->toUpperCase('string'); // 'STRING'