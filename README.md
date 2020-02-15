# Для собеседования в artvisio

#### Для запуска приложения необходимо :
Переименовать .env.example в .env
Изменить ваши настройки сайта в файле .env, в корне проекта.


Загрузить все зависимости проекта.

`composer install`


Создать Базу данных можно командой 

`php bin/console doctrine:database:create`

Запустить все миграции

`php bin/console doctrine:migrations:migrate` 