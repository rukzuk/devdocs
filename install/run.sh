#!/bin/sh

echo "------------ start npm package installation"
cd ..
if command -v npm >/dev/null; then
    file="package.json"
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
    apt-get -y install nodejs ruby1.9.1
    npm -g install grunt-cli
    echo "------------ Installed node, npm, grunt"

    if command -v npm >/dev/null; then
        file="package.json"
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
cd install
echo "------------ done"

file="genstubs.sh"
if [ -f "$file" ]
then
    ./genstubs.sh
else
    echo "------------ $file not found"
    exit 1
fi

file="gendoc.sh"
if [ -f "$file" ]
then
    ./gendoc.sh
else
    echo "------------ $file not found"
    exit 1
fi

cd ..

echo "------------ removing tmp repo folder"
rm -rf tmp
echo "------------ removing stub folder"
rm -rf build/stubs
