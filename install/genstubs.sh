#!/bin/bash

cd ..
directory="tmp/rukzuk_repo"

function make_repo_dir(){
    echo "------------ start generating php api stubs"
    if [ ! -d "$directory" ]; then
      mkdir -p "$directory"
      chmod 777 "$directory"
    fi
}

function clone_rukzuk_repo(){
    git clone ssh://git@stash.rukzuk.intern:7999/rz/rukzuk.git "$directory"
}

function create_stubs(){
    createStubs="src/sami/phpModuleApi/createStubs.php"
    if [ -f "$createStubs" ]; then
        php "$createStubs"
    else
        echo "------------ $createStubs not found"
        exit 1
    fi
    echo "------------ done"
}

make_repo_dir
clone_rukzuk_repo
create_stubs

cd install
