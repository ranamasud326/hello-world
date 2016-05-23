<!DOCTYPE html>
<html>
<head>
	<title>testing git project </title>
</head>
<body>
<p> Git Testing</p>
<?php
 echo "Test Php code ....";
?>
<p>
	On GitHub, saved changes are called commits. 
	Each commit has an associated commit message, which is a 
	description explaining why a particular change was made. Commit messages 
	capture the history of your changes, so other contributors can understand 
	what you’ve done and why.
</p>
<code>
Step 1: From your project repository, bring in the changes and test.
git fetch origin
git checkout -b hello_02 origin/hello_02
git merge master

Step 2: Merge the changes and update on GitHub.

git checkout master
git merge --no-ff hello_02
git push origin master
</code>
</body>
</html>