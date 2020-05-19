<?php
Git Commands

============================

git version

git init
Initialized empty Git repository in C:/xamp8/htdocs/cas-php-mysql/.git/
(initialization (creation) of git repository (can be multiple per file system, but one per folder)
(create git repository when starting a project)

git status

cd "putanja do lokacije projekta" (projekat = folder) 
cd C:/xamp8/htdocs/cas-php-mysql/

git add <file_name>
(or git add . to add everything from current folder to tracking)

git config --global user.name "xxxx"
git config --global user.email "xxxx"

git commit -m "Initial commit"

git log 
(lists all commits so far)

git status

git add index.php

git commit -m "Second Commit"

git checkout 89e1e6780088c63d6426e65ef4bd129646533334

git reset 89e1e6780088c63d6426e65ef4bd129646533334 --hard
(permanently resets to commit with hash above)

git checkout -b branch1

git add index.php

git commit -m "paragraph added on Branch1"

git checkout master

git log

git branch

git checkout branch1

git merge
(adds branch2 to branch1)

git branch -d branch2
(deletes branch2)