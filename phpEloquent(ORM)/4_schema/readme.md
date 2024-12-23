src/config/schema.php
Добавьте в схему таблицу posts. Структура таблицы:

id – идентификатор. Тип: bigint.
state – состояние публикации (опубликован/не опубликован). Тип: string. Может отсутствовать.
title – Заголовок поста. Тип: string.
body – Тело поста. Тип: text.
created_at/updated_at – Автоматические поля через метод timestamps().