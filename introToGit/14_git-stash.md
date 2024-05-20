cd code-user/
echo "# Список дел" > todo.md
git stash
echo "stash не трогает новые файлы, которые еще не добавлены в индекс." >> hexlet.txt
git add hexlet.txt
git commit -m "Добавлена строка про stash в файл hexlet.txt"
git stash pop
git add todo.md
git commit -m alllll
