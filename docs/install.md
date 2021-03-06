# Установка

Это конечно не весь список возможностей, здесь сделан только вывод самой актуальной информации, в виде json массива, по мере возможностей буду дополнять данный функционал

* Для установки нужно запустить composer, который автоматически подгрузит нужные для работы классы
* Запустите ```composer require visavi/rzd-api``` через консоль в директории вашего проекта

* Для демонстрации пользовательского интерфеса установите логин и пароль ($username и $password) в файле examples/user_login.php от сайта rzd.ru

### Пример работы
Для просмотра возможностей API зайдите на главную страницу examples/index.php

### Запуск тестов
```
vendor/bin/phpunit
```

### Реализованные классы

* Query.php - состоит из 5 методов,
  * get  - Получает данные, может как принимать данные GET так и отправлять POST (PATCH, PUT, DELETE)
  * send - Отправка данных
  * run - Вспомогательный метод, запрашивает данные, получает сессию и куки для повторного запроса
  * getRid - Вспомогательный метод, получает уникальный ключ RID (REQUEST_ID)
  * isJson - Вспомогательный метод, определяет валидность json

* Auth.php
  * login - Авторизация на сайте rzd.ru
  * getProfile - Возвращает данные профиля пользователя

* Api.php
  * trainRoutes - Получение маршрутов в одну точку
  * trainRoutesReturn - Получение маршрутов туда-обратно
  * trainCarriages - Получение списка вагонов выбранного поезда
  * trainStationList - Получение списка станций в пути следования выбранного маршрута
  * stationCode - Получение списка кодов станций (Поиск по первым символам города)
