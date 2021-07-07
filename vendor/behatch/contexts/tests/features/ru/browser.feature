#language: ru
Функционал: Браузер

    # Если этот сценарий проваливается
    # Возможно, это из-за того, что Ваше web-окружение неправильно настроено
    # Вы найдёте необходимую помощь в README.md
    @javascript
    Сценарий: Тестирование простого веб-доступа
        Пусть я на странице "/index.html"
        Тогда я должен видеть "Congratulations, you've correctly set up your apache environment."

    Сценарий: Basic-аутентификация
        Пусть я на странице "/browser/auth.php"
        Тогда код ответа сервера должен быть 401
        И я должен видеть "NONE SHALL PASS"

        Когда я устанавливаю Basic-аутентификацию с "something" и "wrong"
        И я перехожу на "/browser/auth.php"
        Тогда код ответа сервера должен быть 401
        И я должен видеть "NONE SHALL PASS"

        Когда я устанавливаю Basic-аутентификацию с "gabriel" и "30091984"
        И я перехожу на "/browser/auth.php"
        Тогда код ответа сервера должен быть 200
        И я должен видеть "Successfuly logged in"

        Когда я перехожу на "/browser/auth.php?logout"
        Тогда я должен видеть "Logged out"

        Когда я перехожу на "/browser/auth.php"
        Тогда код ответа сервера должен быть 401
        И я должен видеть "NONE SHALL PASS"

    @javascript
    Сценарий: Тестирование элементов
        Пусть я на адресе из:
            | parameters     |
            | /browser       |
            | /elements.html |
        Тогда я должен видеть 4 "div" в 1ом "body"
        И я должен видеть менее 6 "div" в 1 "body"
        И я должен видеть более 2 "div" в 1 "body"
        И выпадающий список "months_selector" не должен содержать "december"
        И выпадающий список "months_selector" должен содержать "january"
        Когда я кликаю на 1 элемент "ul li"
        Тогда я должен видеть "You clicked First LI"
        Когда я нажимаю на 2 кнопку "Submit"
        Тогда я должен видеть "You clicked Second BUTTON"
        Когда я кликаю по 1 ссылке "Second"
        Тогда я должен видеть "You clicked Second A"

    @javascript
    Сценарий: Тестирование фреймов
        Пусть я на странице "/browser/frames.html"
        Когда я переключаюсь на iframe "index"
        Тогда я должен видеть "Visible"

        Когда я переключаюсь на главный фрейм

        Когда переключаюсь на iframe "elements"
        Тогда выпадающий список "months_selector" должен содержать "january"

    @javascript
    Сценарий: Ожидание перед проверкой
        Пусть я на странице "/browser/timeout.html"
        Когда я жду 3 секунды пока не увижу "timeout"
        И я жду 1 секунду
        И я жду элемент "#iframe"
        И я жду 5 секунд элемент "#iframe"
        Тогда общее время должно быть more чем 1 секунды

    @javascript
    Сценарий: Ожидание пока текст не станет видимым
        Пусть я на странице "/browser/timeout.html"
        Тогда не должен видеть "timeout"
        Когда я жду 3 секунды пока не увижу "timeout"
        Тогда я должен видеть "timeout"

    Сценарий: Ожидание пока текст не станет видимым
        Пусть я на странице "/browser/index.html"
        Тогда я не должен видеть "foobar" в течение 1 секунды

    @javascript
    Сценарий: Проверка видимости элемента
        Пусть я на странице "/browser/index.html"
        Тогда элемент "#visible-element" должен быть видимым
        И элемент "#hidden-element" не должен быть видимым

    @javascript
    Сценарий:
        Пусть я на странице "/browser/elements.html"
        Тогда я заполняю поле "today" текущей датой
        И я заполняю поле "today" текущей датой с поправкой "-1 day"

    Сценарий:
        Пусть я на странице "/browser/elements.html"
        Тогда я сохраняю значение поля "today" в параметре "today"

    Сценарий: Ожидание долей секунды
        Пусть я на странице "/browser/index.html"
        И я жду 1.9 секунды
        И я жду 1.9 секунды
        И я жду 1.9 секунды
        Тогда общее время должно быть more чем 4 секунды
