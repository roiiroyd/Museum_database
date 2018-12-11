<!DOCTYPE html>
<!--
Copyright (c) 2003-2013, CKSource - Frederico Knabben. All rights reserved.
For licensing, see LICENSE.html or http://ckeditor.com/license
-->
<html>
<head>
	<meta charset="utf-8">
	<title>API Usage &mdash; CKEditor Sample</title>
	<script src="ckeditor.js"></script>
	<script>

// The instanceReady event is fired, when an instance of CKEditor has finished
// its initialization.
CKEDITOR.on( 'instanceReady', function( ev ) {
	// Show the editor name and description in the browser status bar.
	document.getElementById( 'eMessage' ).innerHTML = 'Instance <code>' + ev.editor.name + '<\/code> loaded.';

	// Show this sample buttons.
	document.getElementById( 'eButtons' ).style.display = 'block';
});

function InsertHTML() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Insert HTML code.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertHtml
		editor.insertHtml( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function InsertText() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'txtArea' ).value;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Insert as plain text.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-insertText
		editor.insertText( value );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function SetContents() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	var value = document.getElementById( 'htmlArea' ).value;

	// Set editor contents (replace current contents).
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-setData
	editor.setData( value );
}

function GetContents() {
	// Get the editor instance that you want to interact with.
	var editor = CKEDITOR.instances.editor1;

	// Get editor contents
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-getData
	alert( editor.getData() );
}

function ExecuteCommand( commandName ) {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;

	// Check the active editing mode.
	if ( editor.mode == 'wysiwyg' )
	{
		// Execute the command.
		// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-execCommand
		editor.execCommand( commandName );
	}
	else
		alert( 'You must be in WYSIWYG mode!' );
}

function CheckDirty() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	// Checks whether the current editor contents present changes when compared
	// to the contents loaded into the editor at startup
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-checkDirty
	alert( editor.checkDirty() );
}

function ResetDirty() {
	// Get the editor instance that we want to interact with.
	var editor = CKEDITOR.instances.editor1;
	// Resets the "dirty state" of the editor (see CheckDirty())
	// http://docs.ckeditor.com/#!/api/CKEDITOR.editor-method-resetDirty
	editor.resetDirty();
	alert( 'The "IsDirty" status has been reset' );
}

function Focus() {
	CKEDITOR.instances.editor1.focus();
}

function onFocus() {
	document.getElementById( 'eMessage' ).innerHTML = '<b>' + this.name + ' is focused </b>';
}

function onBlur() {
	document.getElementById( 'eMessage' ).innerHTML = this.name + ' lost focus';
}

	</script>

</head>
<body>



	<form action="../../../samples/sample_posteddata.php" method="post">
		<textarea cols="100" id="editor1" name="editor1" rows="10">&lt;p&gt;This is some &lt;strong&gt;sample text&lt;/strong&gt;. You are using &lt;a href="http://ckeditor.com/"&gt;CKEditor&lt;/a&gt;.&lt;/p&gt;</textarea>

		<script>
			// Replace the <textarea id="editor1"> with an CKEditor instance.
CKEDITOR.replace( 'editor1', { skin : 'moono', height : 200, width : 1000, toolbar : [ ['Paste','Source','-','Templates','-','Maximize','-','FontSize','Font','Table','-','Bold','Italic','Underline','-','JustifyLeft','JustifyCenter','JustifyRight','-','TextColor','BGColor','-','Outdent','Indent','-','Link','-','Image','-','NumberedList','-','BulletedList'] ], });
		</script>

		<p id="eMessage">
		</p>

		<div id="eButtons" style="display: none">
			<input id="exec-bold" onclick="ExecuteCommand('bold');" type="button" value="Execute &quot;bold&quot; Command">
			<input id="exec-link" onclick="ExecuteCommand('link');" type="button" value="Execute &quot;link&quot; Command">
			<input onclick="Focus();" type="button" value="Focus">
			<br><br>
			<input onclick="InsertHTML();" type="button" value="Insert HTML">
			<input onclick="SetContents();" type="button" value="Set Editor Contents">
			<input onclick="GetContents();" type="button" value="Get Editor Contents (XHTML)">
			<br>
			<textarea cols="100" id="htmlArea" rows="3">&lt;h2&gt;Test&lt;/h2&gt;&lt;p&gt;This is some &lt;a href="/Test1.html"&gt;sample&lt;/a&gt; HTML code.&lt;/p&gt;</textarea>
			<br>
			<br>
			<input onclick="InsertText();" type="button" value="Insert Text">
			<br>
			<textarea cols="100" id="txtArea" rows="3">   First line with some leading whitespaces.

Second line of text preceded by two line breaks.</textarea>
			<br>
			<br>
			<input onclick="CheckDirty();" type="button" value="checkDirty()">
			<input onclick="ResetDirty();" type="button" value="resetDirty()">
		</div>
	</form>