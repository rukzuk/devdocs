Class: API
--------------




-----------------------------------------


.. js:function:: new API() 


.. raw:: html

	

.. raw:: html

	X-doc-API - available as global <b>CMS</b> object in the editor iframe




Version: 1.2 (2014-02-03)


.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..








#######
Methods
#######



.. js:function:: applyRichTextEditorConfig(unitId, section, config) 

	:param String unitId: The id of the unit
	:param String section: The name of the section
	:param Object config: The RichTextEditor config object which will be merged with the default config


.. raw:: html

	

.. raw:: html

	Applies the given RichTextEditor config object to the default config set in the module of the unit for a specific section of a unit







.. raw:: html

	
	<br><br>









===================
Example
===================

.. code-block:: javascript
	CMS.applyRichTextEditorConfig('MUNIT-9b6e6080-c9df-4754-a688-5a5c347810e7-MUNIT', 'text', {
	  bold: false,
	  italic: true,
	  customStyles: [{
	    label: 'Headline 1',
	    element: 'h1',
	    classes: ''
	  }, {
	    label: 'Headline 2',
	    element: 'h2',
	    classes: ''
	  }, {
	    label: 'API-Style',
	    element: 'p',
	    classes: 'myAPIStyle'
	  }]
	});
	
	// Another Example with all possible properties
	CMS.applyRichTextEditorConfig('MUNIT-9b6e6080-c9df-4754-a688-5a5c347810e7-MUNIT', 'text', {
	  bold: true,
	  strikethrough: true,
	  italic: true,
	  subscript: true,
	  underline: true,
	  superscript: true,
	  bullist: true,
	  link: true,
	  numlist: true,
	  table: true,
	  enterKey: "paragraph", // none|paragraph|linebreak
	  customStyles: [{
	    label: "Headline 1",
	    element": "h1",
	    classes": "myClass"
	  }],
	  linkTargets: [
	    ["", "Same Window"],
	    ["_blank", "New Window"]
	  ]
	});



.. admonition:: Space

    ..


.. js:function:: createPreviewTicket(callback, options *opt* , options.protect, options.credentials, options.credentials.username, options.credentials.password, options.ticketLifetime, options.sessionLifetime, options.remainingCalls, scope *opt* ) 

	:param CMS.api.API~createTicketCallback callback: The callback function to be called after the ticket has been created
	:param Object optionsoptional: Configuration of the ticket, e.g. to protect it with credentials
	:param Object scopeoptional: The object in whose scope the callback function should be executed


.. raw:: html

	

.. raw:: html

	Creates a preview ticket for the current page or template so external users can preview it without the need of having a regular user account.







.. raw:: html

	
	<br><br>









===================
Example
===================

.. code-block:: javascript
	CMS.createPreviewTicket(function (ticket) { alert(ticket.url); }, {
	  protect: false,
	  credentials: {
	    username: 'test',
	    password: 'test'
	  },
	  ticketLifetime: 60,
	  sessionLifetime: 60,
	  remainingCalls: 1
	}, this);



.. admonition:: Space

    ..


.. js:function:: deselect() 


.. raw:: html

	

.. raw:: html

	Deselects the specified unit in both tree and iframe.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: duplicate(unitId)   Boolean

	:param String unitId: The id of the unit which is to be duplicated
 

.. raw:: html

	

.. raw:: html

	Duplicates the given unit







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: get(id, includeFormValues *opt* )   Object

	:param String id: The id of the unit
	:param Boolean includeFormValuesoptionaltrue: include the formValues
 

.. raw:: html

	

.. raw:: html

	Gets the configuration of the unit.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getAllUnitIds(moduleId)   Array.String

	:param String moduleId: unit ids from the given module id
 

.. raw:: html

	

.. raw:: html

	Returns the unit ids of <b>all</b> units of a specific module




**Since:** 1.1 (2014-01-08)


.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getColorById(colorId)   String

	:param String colorId: The id of the color
 

.. raw:: html

	

.. raw:: html

	Returns the rgba values for the given color id







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getCurrentResolution()   String
 

.. raw:: html

	

.. raw:: html

	Returns the id currently active resolution







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getImageUrl(mediaDbId, width *opt* , quality *opt* )   String

	:param String mediaDbId: for example: MDB-uuid-MDB
	:param Number widthoptional: width of the image; 0 = original size (height is determined automatically)
	:param Number qualityoptional: quality 0 (bad) - 100 (best) - works only on formats that support it, like jpg
 

.. raw:: html

	

.. raw:: html

	Get image URL by Media DB item







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getInsertable(unitId)   Object

	:param String unitId: The id of the unit in whose context units are going to be inserted
 

.. raw:: html

	

.. raw:: html

	Returns the sibling and child units of the given unit which can be inserted (TODO: this is only valid in the page context? Are these Ghost Units?)







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getMediaUrl(mediaDbId, download *opt* )   String

	:param String mediaDbId: 
	:param Boolean downloadoptional: weather the response should download the file (content-disposition: attachment)
 

.. raw:: html

	

.. raw:: html

	Get Media URL by Media DB ID




**Since:** 1.2 (2014-02-03)


.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getModule(moduleId)   Object

	:param String moduleId: The id of the module
 

.. raw:: html

	

.. raw:: html

	Gets meta-data of a module







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getResolutions()   Resolutions
 

.. raw:: html

	

.. raw:: html

	Get configured resolutions (breakpoints) for responsive CSS







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getSelected(includeFormValues *opt* )   Object

	:param Boolean includeFormValuesoptional: include the formValues; default = true
 

.. raw:: html

	

.. raw:: html

	Gets the configuration of the currently selected unit.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: getVisualHelpersState()   Object
 

.. raw:: html

	

.. raw:: html

	Returns the state of the visual helpers (if they should be visible/hidden)







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: i18n(input)   String|Mixed

	:param Object input: An object with texts for all available languages (e.g.      {de: "Hallo Welt!", en: "Hello World!"}
 

.. raw:: html

	

.. raw:: html

	Gives the text in current application language for given input







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: insert(unitId, position, ownerUnitId)   Boolean

	:param String unitId: The id of the unit which should be inserted
	:param String position: The position where it should be inserted (above, below, inside)
	:param String ownerUnitId: The id of the unit in whose context the new unit should be inserted
 

.. raw:: html

	

.. raw:: html

	Inserts the given unit in the context of the given owner unit at the given position







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: moveDown(unitId)   Boolean

	:param unitId: 
 

.. raw:: html

	

.. raw:: html

	Moves the unit down in the structure tree







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: moveUp(unitId)   Boolean

	:param unitId: 
 

.. raw:: html

	

.. raw:: html

	Moves the unit up in the structure tree







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: on(event, filter *opt* , handler, scope *opt* ) 

	:param String event: 

	.. raw:: html

		The name of the event, use one of the following:        <ul>          <li><a href="http://developers.rukzuk.com/js_module_api.html#formValueChange">formValueChange</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#unitSelect">unitSelect</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#unitDeselect">unitDeselect</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#showEditor">showEditor</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#beforeRenderPage">beforeRenderPage</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#afterRenderPage">afterRenderPage</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#beforeRenderUnit">beforeRenderUnit</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#afterRenderUnit">afterRenderUnit</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#beforeInsertUnit">beforeInsertUnit</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#beforeMoveUnit">beforeMoveUnit</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#beforeRemoveUnit">beforeRemoveUnit</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#afterRemoveUnit">afterRemoveUnit</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#unitTreeSelect">unitTreeSelect</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#unitTreeDeselect">unitTreeDeselect</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#treeMouseEnter">treeMouseEnter</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#treeMouseOut">treeMouseOut</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#unitFrameSelect">unitFrameSelect</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#unitFrameDeselect">unitFrameDeselect</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#frameMouseEnter">frameMouseEnter</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#frameMouseOut">frameMouseOut</a></li>          <li><a href="http://developers.rukzuk.com/js_module_api.html#visualHelpersStateChange">visualHelpersStateChange</a></li>        </ul>
	:param CMS.api.API~EventFilter|String filteroptional: The id of a unit or a filter object
	:param CMS.api.API~eventListenerCallback handler: The callback function
	:param Object scopeoptional: The execution context for the event handler


.. raw:: html

	

.. raw:: html

	Register listener for a CMS Event







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: openFormPanel(varName *opt* , showPanel *opt* ) 

	:param String varNameoptional: The name of the unit property whose form group has to be opened
	:param Boolean showPaneloptionaltrue: <tt>false</tt> to prevent activation of the containing form panel.


.. raw:: html

	

.. raw:: html

	Opens the form group which corresponds to the given form group id. If no argument is passed, it will just bring the form panel to front.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: openInsertWindow(unitId *opt* , position *opt* ) 

	:param String unitIdoptional: The id of the unit in whose context the insert window should be opened
	:param Integer positionoptional: 

	.. raw:: html

		The default position choice in the dialog. Possible values:<ul>      <li>-1 - above</li>      <li> 0 - inside</li>      <li> 1 - below (default)</li>      </ul>


.. raw:: html

	

.. raw:: html

	Tells the CMS to open the "Insert Unit" window







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: openTreePanel() 


.. raw:: html

	

.. raw:: html

	Opens the structure tree panel







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: preventRendering() 


.. raw:: html

	

.. raw:: html

	Informs the CMS that the module developer wants to stop the next reload from happening. NOTE: Call to this function is only allowed in the following event handlers:      <a href="http://developers.rukzuk.com/js_module_api.html#beforeRenderPage">beforeRenderPage</a>      <a href="http://developers.rukzuk.com/js_module_api.html#formValueChange">formValueChange</a>







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: processInsertedUnits(filter *opt* , callback *opt* , scope *opt* )   Array

	:param Object filteroptional: A filter object, e.g. to filter by moduleId
	:param function callbackoptional: The callback function to be called for each inserted unit
	:param Object scopeoptional: The object in whose scope the callback function should be executed
 

.. raw:: html

	

.. raw:: html

	Processes all units which were inserted before the current page/template reload.







.. raw:: html

	<br><br><b>Deprecated: </b>Use <a href="http://developers.rukzuk.com/js_module_api.html#getAllUnitIds">http://developers.rukzuk.com/js_module_api.html#getAllUnitIds</a> after a reload
	<br><br>








.. admonition:: Space

    ..


.. js:function:: refresh(unitId *opt* ) 

	:param String unitIdoptional: The id of the unit which should be re-rendered


.. raw:: html

	

.. raw:: html

	Re-renders the specified unit or if no unit id was given the whole page.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: remove(unitId, showConfirmation *opt* , callback *opt* , scope *opt* ) 

	:param String unitId: The id of the unit which is to be deleted.
	:param Boolean showConfirmationoptional: Whether the CMS should ask the user for confirmation before removing the unit
	:param Boolean callbackoptional: The function which will be executed when the unit is actually deleted or not
	:param Object scopeoptional: The object in whose scope the callback function should be executed


.. raw:: html

	

.. raw:: html

	Removes the specified unit.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: select(unitId) 

	:param String unitId: The id of the unit which should be selected


.. raw:: html

	

.. raw:: html

	Selects the specified unit in both tree and iframe.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: set(id, key, value)   Boolean

	:param String id: The id of the unit
	:param String key: The name of the unit property which is changed
	:param Mixed value: The new value of the unit property
 

.. raw:: html

	

.. raw:: html

	Store the given key value pair in the configuration of the specified unit and updates the editor window







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: setInfo(id, key, value)   Boolean

	:param String id: The id of the unit
	:param String key: The name of the meta property which is changed
	:param Mixed value: The new value of the meta property
 

.. raw:: html

	

.. raw:: html

	Allows to set meta information which should visualize unit settings (replaces <a href="http://developers.rukzuk.com/js_module_api.html#setName">http://developers.rukzuk.com/js_module_api.html#setName</a>)







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: setName(id, name)   Boolean

	:param String id: The id of the unit
	:param String name: The new name of the unit
 

.. raw:: html

	

.. raw:: html

	Updates the specified unit's name







.. raw:: html

	<br><br><b>Deprecated: </b>Does not effect the unit's name anymore; Use <a href="http://developers.rukzuk.com/js_module_api.html#setInfo">http://developers.rukzuk.com/js_module_api.html#setInfo</a> visualize unit settings
	<br><br>








.. admonition:: Space

    ..


.. js:function:: un(event) 

	:param String event: The name of the event


.. raw:: html

	

.. raw:: html

	Remove listener for a CMS Event







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: updateFormFieldConfig(unitId, key, config) 

	:param String unitId: The id of the unit
	:param String key: The variable name of the form field
	:param Object config: The form field config object


.. raw:: html

	

.. raw:: html

	Updates the configuration of a form field (e.g. the options of a combobox/drop-down element)







.. raw:: html

	
	<br><br>









===================
Example
===================

.. code-block:: javascript
	CMS.updateFormFieldConfig(unitId, 'additionalSelector', {
	  fieldLabel: 'Filter',
	  options: [
	    ['.text a', 'Link'],
	    ['.text p', 'Text']
	  ]
	});



.. admonition:: Space

    ..




################
Type Definitions
################



.. js:function:: createTicketCallback(ticket, ticket.id, ticket.url, ticket.protect, ticket.credentials, ticket.credentials.username, ticket.credentials.password, ticket.ticketLifetime, ticket.sessionLifetime, ticket.remainingCalls) 

	:param Object ticket: resulting ticket object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: Object EventFilter

    

.. raw:: html

	

	:param   moduleId: only listen to event of units from the given module id





.. raw:: html

	
	<br><br>




Event filter










.. js:function:: eventListenerCallback(config) 

	:param Object config: config object depends on type of event
 

.. raw:: html

	

.. raw:: html

	Event listener function







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..




######
Events
######



.. js:function:: afterRemoveUnit 

	:param String unitId: id of the unit which is open in editor


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: afterRenderPage 


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	<br><br><b>Deprecated: </b>Use <a href="http://developers.rukzuk.com/js_module_api.html#getAllUnitIds">http://developers.rukzuk.com/js_module_api.html#getAllUnitIds</a> after a reload
	<br><br>








.. admonition:: Space

    ..


.. js:function:: afterRenderUnit 

	:param String unitId: id of the unit which is open in editor


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: beforeInsertUnit 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: beforeMoveUnit 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: beforeRemoveUnit 

	:param String unitId: id of the unit which is open in editor


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: beforeRenderPage 


.. raw:: html

	

.. raw:: html

	Page is about to reload. You can cancel this reload/unit-replace by calling <a href="http://developers.rukzuk.com/js_module_api.html#preventRendering">http://developers.rukzuk.com/js_module_api.html#preventRendering</a>.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: beforeRenderUnit 

	:param String unitId: id of the unit which is open in editor


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: formValueChange 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	A form value has changed. You can prevent the reload/unitReplace by calling <a href="http://developers.rukzuk.com/js_module_api.html#preventRendering">http://developers.rukzuk.com/js_module_api.html#preventRendering</a>.







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: frameMouseEnter 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: frameMouseOut 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: resolutionChange 

	:param Object config: A configuration Object


.. raw:: html

	

.. raw:: html

	Fired after changing the resolution in the client




**Since:** 2014-1-21


.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: showEditor 

	:param String unitId: id of the unit which is open in editor


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: treeMouseEnter 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: treeMouseOut 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: unitDeselect 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: unitFrameDeselect 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: unitFrameSelect 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: unitSelect 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: unitTreeDeselect 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: unitTreeSelect 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	







.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..


.. js:function:: visualHelpersStateChange 

	:param Object config: Config Object


.. raw:: html

	

.. raw:: html

	




**Since:** 8db1dfb (2013-03-11)


.. raw:: html

	
	<br><br>








.. admonition:: Space

    ..