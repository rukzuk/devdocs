#!/bin/bash

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
ROOT="$( cd "${DIR}/.." && pwd )"

function sami_create_docu() {
    echo "------------ generating php api documenation from stubs"
    sami_config_file="${ROOT}/config/sami.config.php"
    if [ -f "$sami_config_file" ]
    then
        php ${ROOT}/vendor/bin/sami.php update "$sami_config_file"

		sami_files=( "build/php/Render/APIs/APIv1/CSSAPI.rst" "build/php/Render/APIs/APIv1/HeadAPI.rst" "build/php/Render/APIs/APIv1/MediaIcon.rst" "build/php/Render/APIs/APIv1/MediaImage.rst" "build/php/Render/APIs/APIv1/MediaItem.rst" "build/php/Render/APIs/APIv1/Navigation.rst" "build/php/Render/APIs/APIv1/Page.rst" "build/php/Render/APIs/APIv1/RenderAPI.rst" "build/php/Render/APIs/RootAPIv1/RootCssAPI.rst" "build/php/Render/APIs/RootAPIv1/RootRenderAPI.rst" )
		destin=( "src/sphinx/module_tutorial/php_api/php_css_api.rst" "src/sphinx/module_tutorial/php_api/php_head_api.rst" "src/sphinx/module_tutorial/php_api/php_mediaicon_api.rst" "src/sphinx/module_tutorial/php_api/php_mediaimage_api.rst" "src/sphinx/module_tutorial/php_api/php_mediaitem_api.rst" "src/sphinx/module_tutorial/php_api/php_navigation_api.rst" "src/sphinx/module_tutorial/php_api/php_page_api.rst" "src/sphinx/module_tutorial/php_api/php_render_api.rst" "src/sphinx/module_tutorial/php_api/php_root_css_api.rst" "src/sphinx/module_tutorial/php_api/php_root_render_api.rst" )

		for (( i = 0 ; i < ${#sami_files[@]} ; i++ ))
		do
	        if [ -f "${ROOT}/${sami_files[$i]}" ]
	        then
	            cp -f "${ROOT}/${sami_files[$i]}" "${ROOT}/${destin[$i]}"
	            echo "------------ copy ${sami_files[$i]} --> ${destin[$i]}"
	        else
	            echo "------------ ${sami_files[$i]} not found"
	            exit 1
	        fi
	    done
    else
        echo "------------ $sami_config_file not found"
        exit 1
    fi
    echo "------------ done"
}

function sphinx_create_docu(){
    module_tutorial_directory="${ROOT}/src/sphinx/module_tutorial"
    if [ -d "$module_tutorial_directory" ]; then
        (cd $module_tutorial_directory && make html)
    else
        echo "------------ $module_tutorial_directory does not exists"
        exit 1
    fi
}

function jsdoc_create_docu(){
    # run jsdoc
    (cd ${ROOT} && ${ROOT}/node_modules/.bin/jsdoc -c ${ROOT}/config/jsdoc.json)
    # copy output
    jsdoc_file="${ROOT}/build/cms/docs/CMS.api.API.html"
    destin="${ROOT}/src/sphinx/module_tutorial/js_module_api.rst"
    if [ -f "$jsdoc_file" ]
    then
        cp -f "$jsdoc_file" "$destin"
        echo "------------ copy $jsdoc_file --> $destin"
    else
        echo "------------ $jsdoc_file not found"
        exit 1
    fi
}

function fetch_stubs() {
	stubDir="${ROOT}/stubs";
	echo "------------ Clear existsing stubs in ${stubDir}"
    rm -rf ${stubDir} 2>&1 >/dev/null
    echo "------------ Create directory ${stubDir}"
    mkdir "${stubDir}"
    echo "------------ Start fetching module api stubs from github"
    git clone --depth 1 https://github.com/rukzuk/module-api-stubs.git ${stubDir}
    echo "------------ Done"
}

fetch_stubs
sami_create_docu
jsdoc_create_docu
sphinx_create_docu

