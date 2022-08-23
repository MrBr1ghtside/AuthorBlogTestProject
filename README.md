<p align="center">
    <a href="https://github.com/yiisoft" target="_blank">
        <img src="https://avatars0.githubusercontent.com/u/993323" height="100px">
    </a>
    <h1 align="center">Author Blog Test Project with Yii 2 Advanced</h1>
    <br>
</p>

Авторский блог, созданный с помощью бесплатного css-шаблона и фреймворка Yii2. 

Для разворачивания проекта трубется php версии 5.6.0 или выше, yii2 advanced ~2.0.14.

Полный список требований необходимых для работы проекта
-------------------

```
"require": {
        "php": ">=5.6.0",
        "yiisoft/yii2": "~2.0.14",
        "yiisoft/yii2-bootstrap4": "~2.0.0",
        "yiisoft/yii2-swiftmailer": "~2.0.0 || ~2.1.0",
		"kartik-v/yii2-widgets": "dev-master",
		"dvizh/yii2-seo": "@dev",
        "dektrium/yii2-user": "^0.9.14",
        "dmstr/yii2-adminlte-asset": "^2.1"
    },
```

Структура проекта
-------------------

```
common
    config/              содержит общие конфигурации
    mail/                содержит файлы просмотра для электронной почты
    models/              содержит классы моделей, используемых в backend и frontend
    tests/               содержит тесты для общих классов   
console
    config/              содержит консольные конфигурации
    controllers/         содержит консольные контроллеры (команды)
    migrations/          содержит миграции для баз данных
    models/              содержит классы моделей, специфичные для консоли
    runtime/             содержит файлы, созданные во время выполнения
backend
    assets/              содержит ресурсы приложения, такие как JavaScript и CSS
    config/              содержит конфигурации для backend
    controllers/         содержит классы веб-контроллеров
    models/              содержит backend-ориентированные классы моделей
    runtime/             содержит файлы, сгенерированные во время выполнения
    tests/               содержит тесты для backend-приложения    
    views/               содержит файлы просмотра для веб-приложения
    web/                 содержит входной скрипт и веб-ресурсы
frontend
    assets/              содержит ресурсы приложения, такие как JavaScript и CSS
    config/              содержит конфигурации для frontend
    controllers/         содержит классы веб-контроллеров
    models/              содержит frontend-ориентированные классы моделей
    runtime/             содержит файлы, сгенерированные во время выполнения
    tests/               содержит тесты для frontend-приложения    
    views/               содержит файлы просмотра для веб-приложения
    web/                 содержит входной скрипт и веб-ресурсы
    widgets/             содержит frontend-виджеты
vendor/                  содержит зависимые пакеты
environments/            содержит переопределения на основе среды
```
