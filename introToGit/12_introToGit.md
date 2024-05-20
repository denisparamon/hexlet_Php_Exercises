cd code-user
git switch refactoring
git reset --hard HEAD~2
git switch working-on-html
nano index.html

внеси следующие изменения:

<h1>Ветки в Git достойны отдельного курса</h1>
<p>Ветки являются ссылками на определённый коммит.</p>

git add index.html
git commit -m "Updated index.html for working-on-html branch"
