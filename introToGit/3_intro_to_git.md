git clone repos/git-user code-user
cd code-user
echo "I like to change files" >> hexlet.txt  # Добавляем вторую строку в hexlet.txt
echo "<h1>С помощью Git можно писать книги</h1>" > index.html  # Заменяем текст в index.html
git add .  # Добавляем все изменения в индекс Git
git commit -m "Update hexlet.txt and index.html"  # Создаем коммит с обновленными файлами
git config user.email "example@example.com"
git config user.name "John Doe"
git commit --amend --no-edit  # Перезаписываем последний коммит с новыми данными пользователя
git push origin main  # Пушим изменения в ветку main (или другую основную ветку)
