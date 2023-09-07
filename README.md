# messenger
Мессенджер с шифрованием основанный на PHP предназначен для обмена текстовой информацией.

###Отличительные особенности:
Минимальные требования для сервера практически нет. Сервер должен лишь иметь возможность читать и записывать файлы.

История переписки хранит лишь последние 20 сообщений и может быть очищена в любой момент по нажатию кнопки

По умолчанию мессенджер отправляет сообщения в незашифрованном виде, но это можно легко исправить нажав на id собеседника в чате и указав общий ключ.

Книга контактов хранится локально на устройстве как и все ключи

Сервер не дешифрует ваши сообщения и абсолютно не знает что вы пишите друг друга как и окружающие

Есть поддержка PWA

Своими идентификаторами можно обменяться с помощью qr кода в настройках: контакт сразу будет добавлен в книгу отсканировавшего, а так же будет отправлен запрос на встречное добавление обладателю qr кода в список заявок(Посмотреть его можно нажав на свой никнейм ниже qr кода).

Вы так же можете добавить контак в свою книгу нажав плюс и указав его ID

Импорт/Экспорт контактов

Смена iD

Установка своих обоев на фон чата(До 2х МБ)
