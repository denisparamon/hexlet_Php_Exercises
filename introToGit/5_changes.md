cd code-user
rm index.html
git add index.html
git diff --staged
git status
git commit -m "Remove index.html"
git mv hexlet.txt hexlet2.txt
git diff --staged
git status
git commit -m "Rename hexlet.txt to hexlet2.txt"
