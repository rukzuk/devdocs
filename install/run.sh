#!/bin/bash

# Install deps

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"

ROOT="$( cd "${DIR}/.." && pwd)"

echo "------------ start npm package installation"
if ! command -v npm >/dev/null; then
    echo "------------ command npm not found"
    echo '------------ install nodejs and grunt'
    apt-get install -y python-software-properties
    add-apt-repository -y ppa:chris-lea/node.js
    apt-get update
    apt-get -y install nodejs
    echo "------------ Installed node, npm, grunt"
fi

if command -v npm >/dev/null; then
    file="${ROOT}/package.json"
    if [ -f "${file}" ]; then
        echo "------------ install packages"
        npm install
    else
        echo "------------ ${file} not found"
        exit 1
    fi
else
    echo "------------ command npm still not found, abort script"
    exit 1
fi

# TODO: use virtualenv and add requirements to the repo?
sudo pip install sphinx sphinx_rtd_theme sphinxcontrib-phpdomain

echo "------------ done"

echo "------------ start install/update composer"
if [ ! -f "${ROOT}/composer.phar" ]; then
    curl -sS https://getcomposer.org/installer | php -- --install-dir=${ROOT}
else
    php ${ROOT}/composer.phar self-update
fi
echo "------------ done"

echo "------------ start composer package installation"
if [ ! -f "${ROOT}/composer.phar" ]; then
    echo "------------ composer.phar not found"
    exit 3
fi
php ${ROOT}/composer.phar install
echo "------------ done"

echo "------------ generate doc"
${DIR}/gendoc.sh

