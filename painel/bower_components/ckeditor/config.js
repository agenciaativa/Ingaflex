/**
 * @license Copyright (c) 2003-2017, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.md or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here.
	// For complete reference see:
	// http://docs.ckeditor.com/#!/api/CKEDITOR.config

	// The toolbar groups arrangement, optimized for two toolbar rows.
		/*config.toolbarGroups = [
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
			{ name: 'forms', groups: [ 'forms' ] },
			{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
			{ name: 'links', groups: [ 'links' ] },
			{ name: 'insert', groups: [ 'insert' ] },
			{ name: 'styles', groups: [ 'styles' ] },
			{ name: 'colors', groups: [ 'colors' ] },
			{ name: 'tools', groups: [ 'tools' ] },
			{ name: 'others', groups: [ 'others' ] },
			{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] }
		];*/

		config.toolbar_Padrao = [
			{ name: 'basicstyles', items: [ 'Bold', 'Italic' ] },
			{ name: 'paragraph', items: [ 'Blockquote' ] },
			{ name: 'links', items: [ 'Link', 'Unlink'] },
			{ name: 'styles', items: [ 'Styles', 'Format' ] },
			{ name: 'document', items: [ 'Source'] }
		];

		config.toolbar_Basico = [
			{ name: 'basicstyles', items: [ 'Bold' ] }
		];

		config.toolbar = 'Padrao';
		config.skin = 'moonocolor';
		config.height = 150;

		// Remove some buttons provided by the standard plugins, which are
		// not needed in the Standard(s) toolbar.
		// config.removeButtons = 'Save,NewPage,Preview,Print,Templates,Copy,Cut,Paste,PasteFromWord,Undo,Redo,Find,Replace,SelectAll,Scayt,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Strike,Subscript,Superscript,CopyFormatting,RemoveFormat,CreateDiv,JustifyLeft,JustifyCenter,JustifyRight,JustifyBlock,BidiLtr,BidiRtl,Language,Anchor,Image,Flash,Table,HorizontalRule,Smiley,SpecialChar,PageBreak,Iframe,Font,FontSize,TextColor,BGColor,ShowBlocks,Maximize,About';

		// Set the most common block elements.
		config.format_tags = 'p;h1;h2;h3';

		// Simplify the dialog windows.
		config.removeDialogTabs = 'image:advanced;link:advanced';
};
