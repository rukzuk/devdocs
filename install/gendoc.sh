#!/bin/bash

cd ..

function sami_create_docu() {
    echo "------------ generating php api documenation from stubs"
    sami_config_file="config/sami.config.php"
    if [ -f "$sami_config_file" ]
    then
        php vendor/bin/sami.php update "$sami_config_file"

		sami_files=( "build/php/Render/APIs/APIv1/CSSAPI.html" "build/php/Render/APIs/APIv1/HeadAPI.html" "build/php/Render/APIs/APIv1/MediaIcon.html" "build/php/Render/APIs/APIv1/MediaImage.html" "build/php/Render/APIs/APIv1/MediaItem.html" "build/php/Render/APIs/APIv1/Navigation.html" "build/php/Render/APIs/APIv1/Page.html" "build/php/Render/APIs/APIv1/RenderAPI.html" "build/php/Render/APIs/RootAPIv1/RootCssAPI.html" "build/php/Render/APIs/RootAPIv1/RootRenderAPI.html" )
		destin=( "src/sphinx/module_tutorial/php_api/php_css_api.rst" "src/sphinx/module_tutorial/php_api/php_head_api.rst" "src/sphinx/module_tutorial/php_api/php_mediaicon_api.rst" "src/sphinx/module_tutorial/php_api/php_mediaimage_api.rst" "src/sphinx/module_tutorial/php_api/php_mediaitem_api.rst" "src/sphinx/module_tutorial/php_api/php_navigation_api.rst" "src/sphinx/module_tutorial/php_api/php_page_api.rst" "src/sphinx/module_tutorial/php_api/php_render_api.rst" "src/sphinx/module_tutorial/php_api/php_root_css_api.rst" "src/sphinx/module_tutorial/php_api/php_root_render_api.rst" )

		for (( i = 0 ; i < ${#sami_files[@]} ; i++ ))
		do
	        if [ -f "${sami_files[$i]}" ]
	        then
	            cp -f "${sami_files[$i]}" "${destin[$i]}"
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
    module_tutorial_directory="src/sphinx/module_tutorial"
    if [ -d "$module_tutorial_directory" ]; then
        cd src/sphinx/module_tutorial
        make html
        cd ../../..
    else
        echo "------------ $module_tutorial_directory does not exists"
        exit 1
    fi
}

function jsdoc_create_docu(){
    if command -v grunt >/dev/null; then
        # run jsdoc
        node_modules/.bin/jsdoc -c ./config/jsdoc.json
        # copy output
        jsdoc_file="build/cms/docs/CMS.api.API.html"
        destin="src/sphinx/module_tutorial/js_module_api.rst"
        if [ -f "$jsdoc_file" ]
        then
            cp -f "$jsdoc_file" "$destin"
            echo "------------ copy $jsdoc_file --> $destin"
        else
            echo "------------ $jsdoc_file not found"
            exit 1
        fi
    else
        echo "------------ command grunt not found"
        exit 1
    fi
}

function compress_stubs(){
    echo "------------ compressing stub files for public download"
    if command -v zip >/dev/null; then
        build_download_directory="build/html/_downloads"
        if [ ! -d "$build_download_directory" ]; then
			mkdir -p "$build_download_directory"
        fi
        zip -r build/html/_downloads/stubs.zip stubs/php
    else
        echo "------------ command zip not found"
        exit 1
    fi
    echo "------------ done"
}

sami_create_docu
jsdoc_create_docu
sphinx_create_docu
compress_stubs

cd install
