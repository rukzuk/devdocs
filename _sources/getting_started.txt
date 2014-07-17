Getting Started
---------------

################
What is a Module
################

A module in rukzuk represents either a content component or a style component. Each module content component builds its own desired content and
output the result. Whereby a module style component attaches style attributes to a parent module content component and subsequently to its children.

.. TODO find a better place for module types

There are three types of modules:

=============  ===================================================================================
Type           Description
=============  ===================================================================================
default        Content components like text, image, slider, form, …
extension      Modules which can extend other modules, e.g. all style components.
root           The root module is responsible for the base HTML skeleton. It is always the first node in the design structure tree and can only be inserted once.
=============  ===================================================================================

Basic Example:

.. code-block:: php
    :linenos:

    <?php
    namespace Rukzuk\Modules;
    class my_module_text extends SimpleModule
    {
      /**
       * @param $renderApi
       * @param \Render\Unit $unit
       * @param \Render\ModuleInfo $moduleInfo
       */
      public function renderContent($renderApi, $unit, $moduleInfo)
      {
        echo "<div><span>My Text</span></div>";
        $renderApi->renderChildren($unit);
      }
    }
    ?>


Output Example:

.. code-block:: html

    <div id="MUNIT-43a1ee8c-954e-410f-9cfa-fd3758d35c13-MUNIT" class="my_module_text isModule">
        <div><span>My Text</span></div>

        <!-- Rendered Children -->
        <div id="MUNIT-24a3ee8c-954e-410f-9cfa-fd3758d67c48-MUNIT" class="rz_textfield isModule">
            <div class="text">
                <p>&nbsp;</p>
                <h2>THE TRIANGLE CHALLENGE<br>17.5.2014</h2>
            </div>
        </div>
    </div>

.. note::

    You can override modules if you name your new customized module with the origin module name. When you remove your derived module, the original module will come into play again.

##############
What is a Unit
##############

A unit represents a module which is inserted into the structure tree of a rukzuk design or page. It provides specific information/data unique to the unit, e.g. the form values of the user interface. Furthermore, a unit references to a module which processes such data from the unit.

##########################
Module Directory Structure
##########################

The module folder name must be identical to the module ID. Furthermore, every module has a specific directory structure.

.. image:: _static/images/module_directory_structure.png

Explaining the files in the above screen-shot

=============  ===================================================================================
File           Description
=============  ===================================================================================
rz_anchor.php  Main file containing the PHP class. The file name must be identical to the module ID.
manifest.json  Holds module relevant information such as module type, name, description, category, version etc. This file can be modified with the built-in user interface builder.
form.json      This file has all the form information to build the module user interface. This file can be generated with the built-in user interface builder.
custom.json    Specifying JavaScript and CSS files required by the module. You can differentiate between edit and live mode.
main.css       Contains static CSS used for the module style.
editMode.js    Allows further intervention in edit mode with custom behaviors.
editMode.css   Contains static CSS used for the edit mode.
css.js         Logic for dynamic CSS generation based on the unit form values.
=============  ===================================================================================

.. note::

    All folders named "notlive" are not going to be published to a live environment.

#############
Prerequisites
#############

* It is recommended to program your module against PHP version 5.4
* FTP client to upload your module into your rukzuk space

    * To endorse best development experience, it is advised to set-up your development environment to synchronize your development work via FTP.
    * alternatively you can use the module import facility which allows to import modules as ZIP files
* Module API stubs (API interface reference) - `Download <https://github.com/rukzuk/module-api-stubs/archive/master.zip>`_ | `Github <https://github.com/rukzuk/module-api-stubs>`_

`rukzuk on Github <https://github.com/rukzuk>`_


############
Module API's
############


-------------------
SimpleModule Helper
-------------------

The default root module "rz_root" comes with some wrappers to simplify the module development.
For example it provides the class ``SimpleModule`` which is inherited by all default modules. It also has some convenient helpers for e.g. dynamic CSS generation, responsive images or HTML tag building.

---------
PHP API's
---------

:doc:`Render API <php_api/php_render_api>`
: The render is responsible for going through a node tree containing units and its module to tell them to process and output their content.
    * access parent(s) and child(ren)
    * access to other API's such as CSS API, Head API

*Unit API* : Accessing unit data information.

	* the module can access unit information or data in edit mode as well as in an live environment
	* also accessible through JavaScript ( see :doc:`JS Module API <js_module_api>` )

*ModuleInfo API* : Provides information about the module used in the current unit.

	* access module info storage
	* also accessible through JavaScript ( see :doc:`JS Module API <js_module_api>` )

:doc:`CSS API <php_api/php_css_api>`
: Creates the css code for a single unit and writes it to output buffer.

:doc:`Head API <php_api/php_head_api>`
: HTML Head - insert custom tags in <head> of the page.
	* modify html head
	* add further html elements inside the <head> tag

.. note::

    All above API's are available in 'edit' & 'live' render mode except for the CSS API which is only available in 'edit' mode.

----------------
JavaScript API's
----------------

:doc:`JS Module API <js_module_api>`

---------------------------------------------------
When to use the module PHP API's and JavaScript API
---------------------------------------------------

Use the PHP API's when your custom module ask for server-side functions such as php mail() for example and you need access to unit and module data. Furthermore, the PHP API's provides the facility for rendering and output module content in conjunction with unit and module data.

The JavaScript API is useful when you require access to unit and module data on your client side implementation of your module. Moreover, the JavaScript API accommodates functions to help you to react on appropriate circumstances with the rukzuk client-side framework.
