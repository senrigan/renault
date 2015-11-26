/*jslint white: true, browser: true, undef: true, nomen: true, eqeqeq: true, plusplus: false, bitwise: true, regexp: true, strict: true, newcap: true, immed: true, maxerr: 14 */
/*global window: false, REDIPS: true */

/* enable strict mode */
"use strict";

// create redips container
var redips = {};

// redips initialization
redips.init = function () {
	// reference to the REDIPS.drag object
	var	rd = REDIPS.drag;
	// define border style (this should go before init() method)
	rd.style.borderEnabled = 'none';
	// initialization
	rd.init();
	// set hover color
	rd.hover.colorTd = '#FFE885';
	// DIV elements can be dropped to the empty cells only
	rd.dropMode = 'single';

	rd.event.droppedBefore = function (targetCell) {
		// test if target cell is occupied and set reference to the dragged DIV element
		var empty = rd.emptyCell(targetCell, 'test');
		// if target cell is not empty
		if (!empty) {
			// open dialog should be wrapped in setTimeout because of
			// removeChild and return false below
			setTimeout(function () {
				$('#dialog').dialog('open');
			}, 50);
			// remove dragged DIV from from DOM (node still exists in memory)
			rd.obj.parentNode.removeChild(rd.obj);
			// this will disable DIV elements in target cell (DIV element will be somehow marked)
			rd.enableDrag(false, targetCell);
			// return false (deleted DIV will not be returned to source cell)
			return false;
		}
	};

		// add counter to cloned element name
	// (after cloned DIV element is dropped to the table)
	
	// in the moment when DIV element is moved, clonedDIV will be set
	
	// DIV element was clicked - disable 'mini' tables
/*	rd.event.clicked = function () {
		// search for table inside DIV element
		var tbl = rd.obj.getElementsByTagName('TABLE');
		// if dragged DIV element contains table then disable all mini tables
		// it is not allowed to drop mini table within another mini table
		if (tbl.length > 0) {
			rd.enableTable(false, 'mini');
		}
	};
*/
	// after dragged DIV element is dropped, enable all mini tables
	// this way, mini tables will be ready for accepting ordinary DIV element (circle DIV)
/*	rd.event.finish = function () {
		rd.enableTable(true, 'mini');
	}
*/
	// define A and B source elements for the last row only (element ID and class name of the last row)
	rd.only.div.a = 'last';
	rd.only.div.b = 'last';
	// A and B elements can't be placed to other table cells (this is default value)
	rd.only.other = 'deny';

	rd.event.moved = function (cloned) {
		clonedDIV = cloned;
	};
	rd.event.cloned = function () {
		// set id of cloned element
		var clonedId = rd.obj.id;
		// if id of cloned element begins with "e" then make exception (allow DIV element to access cells with class name "redips-mark")
		if (clonedId.substr(0, 1) === 'z') {   
			//rd.mark.exception[clonedId] = 'mark';
			rd.only.div[clonedId] = 'last';
		}
	};

	

	// define jQuery dialog
	$('#dialog').dialog({
		autoOpen: false,
		resizable: false,
		modal: true,
		width: 400,
		height: 170,
		// define Shift, Switch and Overwrite buttons
		buttons: {
			'Shift': function () {
				// enable elements in target cell (return solid border)
				rd.enableDrag(true, rd.td.target);
				// DIV element is cloned then shift cells to the last TD
				if (clonedDIV) {
					rd.shiftCells(lastCell, rd.td.target);
				}
				// if DIV element is dragged within table then shift cells
				// from source to target TD position
				else {
					rd.shiftCells(rd.td.source, rd.td.target);
				}
				// append previously removed DIV to the target cell
				rd.td.target.appendChild(rd.obj);
				// close dialog
				$(this).dialog('close');
			},
			'Switch': function () {
				// enable elements in target cell (return solid border) in both cases
				rd.enableDrag(true, rd.td.target);
				// switch elements only if current DIV element is not cloned 
				if (!clonedDIV) {
					// relocate target and source cells
					rd.relocate(rd.td.target, rd.td.source);
					// append previously removed DIV to the target cell
					rd.td.target.appendChild(rd.obj);
				}
				// close dialog
				$(this).dialog('close');
			},
			'Overwrite': function () {
				// empty target cell
				rd.emptyCell(rd.td.target);
				// append previously removed DIV to the target cell
				rd.td.target.appendChild(rd.obj);
				// close dialog
				$(this).dialog('close');
			}
		
		},
		// action when dialog is closed
		close: function (event, ui) {
			// return dragged DIV element to the source cell only if X button is clicked
			// (in this case event.which property exists)
			if (event.which) {
				// enable elements in target cell (return solid border)
				rd.enableDrag(true, rd.td.target);
				// if and DIV element is not cloned then return in to source cell
				if (!clonedDIV) {
					// append previously removed DIV to the target cell
					rd.td.source.appendChild(rd.obj);
				}
			}
		}
	});	
};

// add onload event listener
if (window.addEventListener) {
	window.addEventListener('load', redips.init, false);
}
else if (window.attachEvent) {
	window.attachEvent('onload', redips.init);
}