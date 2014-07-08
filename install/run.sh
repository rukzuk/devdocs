#!/bin/bash

# Install deps

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

ROOT="${DIR}/.."

echo "------------ start npm package installation"
cd ..
if command -v npm >/dev/null; then
    file="$ROOT/package.json"
    if [ -f "$file" ]
    then
        echo "------------ install packages"
        npm install
    else
        echo "------------ $file not found"
        exit 2
    fi
else
    echo "------------ command npm not found"
    echo '------------ install nodejs and grunt'
    apt-get install -y python-software-properties
    add-apt-repository -y ppa:chris-lea/node.js
    apt-get update
    apt-get -y install nodejs
    npm -g install grunt-cli
    echo "------------ Installed node, npm, grunt"

    if command -v npm >/dev/null; then
        file="$ROOT/package.json"
        if [ -f "$file" ]; then
            echo "------------ install packages"
            npm install
        else
            echo "------------ $file not found"
            exit 1
        fi
    else
        echo "------------ command npm still not found, abort script"
        exit 1
    fi
fi

# TODO: use virtualenv and add requirements to the repo?
sudo pip install sphinx sphinx_rtd_theme sphinxcontrib-phpdomain

echo "------------ done"

echo "------------ generate doc"
${DIR}/gendoc.sh

