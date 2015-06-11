export ACTION=$1
export BRANCH=master

git subtree $ACTION --prefix=modules/Core git@github.com:pingpongcms/core.git $BRANCH --squash
git subtree $ACTION --prefix=modules/Api git@github.com:pingpongcms/api.git $BRANCH --squash
git subtree $ACTION --prefix=modules/Settings git@github.com:pingpongcms/settings.git $BRANCH --squash
git subtree $ACTION --prefix=modules/Menus git@github.com:pingpongcms/menus.git $BRANCH --squash