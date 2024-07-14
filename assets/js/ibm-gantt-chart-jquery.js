(function webpackUniversalModuleDefinition(root, factory) {
	if(typeof exports === 'object' && typeof module === 'object')
		module.exports = factory(require("jquery"), require("vis"));
	else if(typeof define === 'function' && define.amd)
		define(["jquery", "vis"], factory);
	else if(typeof exports === 'object')
		exports["ibm-gantt-chart"] = factory(require("jquery"), require("vis"));
	else
		root["ibm-gantt-chart"] = factory(root["jQuery"], root["vis"]);
})(typeof self !== 'undefined' ? self : this, function(__WEBPACK_EXTERNAL_MODULE__6__, __WEBPACK_EXTERNAL_MODULE__43__) {
return /******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 88);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Gantt; });
/* harmony import */ var _babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(7);
/* harmony import */ var _babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_assertThisInitialized__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(16);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(4);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(3);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(5);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(2);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(1);
/* harmony import */ var font_awesome_css_font_awesome_css__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(129);
/* harmony import */ var font_awesome_css_font_awesome_css__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(font_awesome_css_font_awesome_css__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _core_scss__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(130);
/* harmony import */ var _core_scss__WEBPACK_IMPORTED_MODULE_8___default = /*#__PURE__*/__webpack_require__.n(_core_scss__WEBPACK_IMPORTED_MODULE_8__);
/* harmony import */ var _fonts_scss__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(131);
/* harmony import */ var _fonts_scss__WEBPACK_IMPORTED_MODULE_9___default = /*#__PURE__*/__webpack_require__.n(_fonts_scss__WEBPACK_IMPORTED_MODULE_9__);








/* eslint-disable */




var Gantt = function Gantt(context, config) {
  Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Gantt);

  this.context = Gantt.utils.isString(context) ? document.getElementById(context) : context;
  var panelClass = Gantt.components.GanttPanel.impl || Gantt.components.GanttPanel;
  this.gantt = new panelClass(this.context, config);
  return this.gantt;
};


Gantt.defaultConfiguration = {
  rowHeight: 27,
  zoomFactor: 0.2,
  loadingPanelThresold: 500
}; // noinspection SpellCheckingInspection

Gantt.events = {
  TITLE_CHANGED: 'titleChanged',
  TABLE_INIT: 'tableinit',
  TIME_TABLE_INIT: 'timesheetinit',
  TIME_LINE_INIT: 'timeline_init',
  TIME_WINDOW_CHANGED: 'timeWindowChanged',
  TIME_LINE_RANGE_CHANGE: 'timeline_rangechange',
  TIME_LINE_RANGE_CHANGED: 'timeline_rangechanged',
  TIME_LINE_SIZE_CHANGED: 'timeline_sizeChanged',
  TIME_LINE_PAN_MOVE: 'timeline_panmove',
  TIME_LINE_PAN_MOVED: 'timeline_panmove',
  TIME_LINE_SCROLLED: 'timeline_scrolled',
  RESIZED: 'resized',
  SPLIT_RESIZED: 'split_resized',
  ROWS_FILTERED: 'rows_filtered',
  DATA_LOADED: 'data_loaded',
  ROWS_ADDED: 'rows_added',
  ROWS_REMOVED: 'rows_removed',
  ROWS_MODIFIED: 'rows_modified',
  ROWS_SORTED: 'rows_sorted',
  START_SELECTING: 'startSelecting',
  SELECTION_CLEARED: 'selectionCleared',
  STOP_SELECTING: 'stopSelecting',
  // Event names are generated from the Type objects associated with the SelectionHandler, with the format type.name + 'Selected|Unselected|SelectionChanged|SelectionCleared'
  ACTIVITY_SELECTED: 'activitySelected',
  ACTIVITY_UNSELECTED: 'activityUnselected',
  ACTIVITY_SELECTION_CHANGED: 'activitySelectionChanged',
  ACTIVITY_SELECTION_CLEARED: 'activitySelectionCleared',
  RESOURCE_SELECTED: 'resourceSelected',
  RESOURCE_UNSELECTED: 'resourceUnselected',
  RESOURCE_SELECTION_CHANGED: 'resourceSelectionChanged',
  RESOURCE_SELECTION_CLEARED: 'resourceSelectionCleared',
  ROW_SELECTED: 'rowSelected',
  ROW_UNSELECTED: 'rowUnselected',
  ROW_SELECTION_CHANGED: 'rowSelectionChanged',
  ROW_SELECTION_CLEARED: 'rowSelectionCleared',
  CONSTRAINT_SELECTED: 'constraintSelected',
  CONSTRAINT_UNSELECTED: 'constraintUnselected',
  CONSTRAINT_SELECTION_CHANGED: 'constraintSelectionChanged',
  CONSTRAINT_SELECTION_CLEARED: 'constraintSelectionCleared'
};
Gantt.type = {
  ACTIVITY_CHART: 'ActivityChart',
  SCHEDULE_CHART: 'ScheduleChart'
};
Gantt.constraintTypes = {
  START_TO_START: 0,
  START_TO_END: 2,
  END_TO_END: 3,
  END_TO_START: 1,
  isFromStart: function isFromStart(type) {
    return type === 0 || type === 2;
  },
  isToStart: function isToStart(type) {
    return type < 2;
  }
};

var Tooltip =
/*#__PURE__*/
function () {
  function Tooltip(config) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Tooltip);
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Tooltip, [{
    key: "showTooltip",
    value: function showTooltip(elt, ctx, cb) {}
  }, {
    key: "hideTooltip",
    value: function hideTooltip() {}
  }, {
    key: "destroy",
    value: function destroy() {}
  }]);

  return Tooltip;
}();

var DataFetcher =
/*#__PURE__*/
function () {
  function DataFetcher() {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, DataFetcher);
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(DataFetcher, [{
    key: "get",
    value: function get(obj) {}
  }]);

  return DataFetcher;
}();

var Split =
/*#__PURE__*/
function () {
  function Split(elt, config) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Split);
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Split, [{
    key: "getLeftComponent",
    value: function getLeftComponent() {}
  }, {
    key: "getRightComponent",
    value: function getRightComponent() {}
  }, {
    key: "leftComponentCreated",
    value: function leftComponentCreated() {}
  }]);

  return Split;
}();

var Component =
/*#__PURE__*/
function () {
  function Component(gantt, config) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Component);

    this.gantt = gantt;
    this.config = config;
    this.utils = Gantt.utils;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Component, [{
    key: "on",
    value: function on(event, handler) {
      var events = this.__events || (this.__events = {});
      var ar;
      var eventList = this.utils.isArray(event) && event || event.split(' ');

      for (var i = 0; i < eventList.length; i++) {
        event = eventList[i];

        if (!(ar = events[event])) {
          events[event] = ar = [handler];
        } else {
          ar.push(handler);
        }
      }
    }
  }, {
    key: "one",
    value: function one(events, handler) {
      var _this = this;

      var wrapperHandler = function wrapperHandler() {
        for (var _len = arguments.length, params = new Array(_len), _key = 0; _key < _len; _key++) {
          params[_key] = arguments[_key];
        }

        handler.apply(_this, params); // remove the handler after it has been notified

        var event = params[0];

        var index = _this.__events[event].indexOf(wrapperHandler);

        if (index > -1) {
          _this.__events[event].splice(index, 1);
        }
      };

      this.on(events, wrapperHandler);
    }
  }, {
    key: "off",
    value: function off(event, handler) {
      if (this.__events) {
        var ar, i;
        var eventList = this.utils.isArray(event) && event || event.split(' ');

        for (var iEvent = 0; iEvent < eventList.length; iEvent++) {
          event = eventList[iEvent];

          if (ar = this.__events[event]) {
            for (i = 0; i < ar.length; i++) {
              if (ar[i] === handler) {
                ar.splice(i, 1);
                break;
              }
            }
          }
        }
      }
    }
  }, {
    key: "triggerEvent",
    value: function triggerEvent(events) {
      var ar, params;

      if (events === true) {
        // Apply mode, event parameters are provided as an array
        events = arguments[1];
        var paramsArg = arguments[2] || [];
        params = new Array(paramsArg.length + 1);

        for (var iParam = 0; iParam < paramsArg.length; ++iParam) {
          params[iParam + 1] = paramsArg[iParam];
        }
      } else {
        params = new Array(arguments.length);

        for (var _iParam = 1; _iParam < arguments.length; ++_iParam) {
          params[_iParam] = arguments[_iParam];
        }
      }

      var eventList = this.utils.isArray(events) && events || events.split(' ');

      for (var iEvent = 0, event, evCount = eventList.length; iEvent < evCount; iEvent++) {
        if (ar = this.__events && this.__events[params[0] = event = eventList[iEvent]]) {
          for (var i = 0, count = ar.length; i < count;) {
            ar[i].apply(this, params); // If the handler being notified still in the array, go to next array elt

            if (count === ar.length) {
              ++i;
            } else {
              // If the handler was removed during notification (see one method), next element is at same index
              count = ar.length;
            }
          }
        }
      }
    }
  }]);

  return Component;
}();

var ErrorHandler =
/*#__PURE__*/
function (_Component) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(ErrorHandler, _Component);

  function ErrorHandler(config) {
    var _this2;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, ErrorHandler);

    _this2 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(ErrorHandler).call(this, null, config));
    _this2.config = config;
    return _this2;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(ErrorHandler, [{
    key: "addError",
    value: function addError(err) {}
  }, {
    key: "hasErrors",
    value: function hasErrors() {
      return false;
    }
  }, {
    key: "clear",
    value: function clear() {}
  }, {
    key: "showError",
    value: function showError(err) {}
  }, {
    key: "getErrors",
    value: function getErrors() {
      return [];
    }
  }, {
    key: "createErrorNode",
    value: function createErrorNode(err) {
      var node = document.createElement('div');
      node.className = 'gantt_error';
      return node;
    }
  }, {
    key: "removeGroup",
    value: function removeGroup(node) {}
  }]);

  return ErrorHandler;
}(Component);
/**
 *
 * <br>Emmits events: <ul>
 *   <li>Gantt.events.TIME_LINE_INIT</li>
 *   <li>Gantt.events.TIME_LINE_RANGE_CHANGE</li>
 *   <li>Gantt.events.TIME_LINE_RANGE_CHANGED</li>
 *   <li>Gantt.events.TIME_LINE_PAN_MOVED</li>
 *   <li>Gantt.events.TIME_LINE_SIZE_CHANGED</li>
 * </ul>
 */


var TimeLine =
/*#__PURE__*/
function (_Component2) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(TimeLine, _Component2);

  function TimeLine(gantt, node, config) {
    var _this3;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, TimeLine);

    _this3 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(TimeLine).call(this, gantt, config));
    _this3.node = node;
    return _this3;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(TimeLine, [{
    key: "setTimeWindow",
    value: function setTimeWindow(start, end) {}
  }, {
    key: "getTimeAxisHeight",
    value: function getTimeAxisHeight() {
      return 0;
    }
  }, {
    key: "draw",
    value: function draw() {}
  }, {
    key: "validateZoomFactor",
    value: function validateZoomFactor(zoomFactor) {}
  }, {
    key: "getXFromMillis",
    value: function getXFromMillis(time) {}
  }, {
    key: "getDecorationContainer",
    value: function getDecorationContainer() {}
    /**
     * Returns the current time horizon, an object with two start and end time properties, time given in milliseconds
     */

  }, {
    key: "getHorizon",
    value: function getHorizon() {}
  }, {
    key: "getScrollableHorizon",
    value: function getScrollableHorizon() {}
  }, {
    key: "setVisibleTimeWindow",
    value: function setVisibleTimeWindow(window) {}
  }, {
    key: "resetZoom",
    value: function resetZoom() {}
    /**
     * Markers
     */

  }, {
    key: "addTimeMarker",
    value: function addTimeMarker(id, time, classes) {}
  }, {
    key: "removeTimeMarker",
    value: function removeTimeMarker(id) {}
  }, {
    key: "setTimeLineItem",
    value: function setTimeLineItem(id, item) {}
  }, {
    key: "addTimeLineItem",
    value: function addTimeLineItem(id, item) {}
  }, {
    key: "removeTimeLineItem",
    value: function removeTimeLineItem(id) {}
  }]);

  return TimeLine;
}(Component);

var TimeTable =
/*#__PURE__*/
function (_Component3) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(TimeTable, _Component3);

  function TimeTable(gantt, node, config) {
    var _this4;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, TimeTable);

    _this4 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(TimeTable).call(this, gantt, config));
    _this4.node = node;

    _this4.setConfiguration(config);

    return _this4;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(TimeTable, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }, {
    key: "draw",
    value: function draw() {}
  }, {
    key: "createUpdates",
    value: function createUpdates(parent) {
      return new (Gantt.components.GanttUpdates.impl || Gantt.components.GanttUpdates)(parent);
    }
  }, {
    key: "highlightRow",
    value: function highlightRow(row, highlight, deselectAll) {}
  }, {
    key: "getDisplayedActivitiesTimeRange",
    value: function getDisplayedActivitiesTimeRange() {}
  }, {
    key: "searchActivities",
    value: function searchActivities(row, callback) {}
  }, {
    key: "setConstraints",
    value: function setConstraints(constraints) {}
  }, {
    key: "update",
    value: function update() {}
  }, {
    key: "scrollToRow",
    value: function scrollToRow(row) {}
  }, {
    key: "scrollToY",
    value: function scrollToY(y) {}
  }, {
    key: "setScrollTop",
    value: function setScrollTop(y) {}
  }, {
    key: "setFirstVisibleRow",
    value: function setFirstVisibleRow(row) {}
  }, {
    key: "getScrollLeft",
    value: function getScrollLeft() {}
  }, {
    key: "setScrollLeft",
    value: function setScrollLeft(x) {}
    /**
     * Returns the component responsible for scrolling the time table.
     */

  }, {
    key: "getScroller",
    value: function getScroller() {}
  }, {
    key: "getVisibleWidth",
    value: function getVisibleWidth() {}
  }, {
    key: "getVisibleHeight",
    value: function getVisibleHeight() {} // Called to adjust the time table body width according to the time line width

  }, {
    key: "setBodyWidth",
    value: function setBodyWidth(w) {}
  }, {
    key: "getBodyWidth",
    value: function getBodyWidth() {} // Called to adjust the height of the time  table body according to the height of the gantt table

  }, {
    key: "setBodyHeight",
    value: function setBodyHeight(h) {}
  }, {
    key: "getBodyHeight",
    value: function getBodyHeight() {} // To perfectly horizontally align the time line and the time table, we need to apply a right margin
    // to the time line corresponding to the width of the vertical scroller in the time table, if any.

  }, {
    key: "getRightMargin",
    value: function getRightMargin() {} // The time line bottom must stops where the horizontal scrollbar of the time table starts.
    // The getBottomMargin returns the height of this scrollbar.

  }, {
    key: "getBottomMargin",
    value: function getBottomMargin() {}
  }]);

  return TimeTable;
}(Component);
/**
 *
 * <br>Emmits events: <ul>
 *   <li>Gantt.events.TABLE_INIT</li>
 *   <li>Gantt.events.ROWS_ADDED</li>
 *   <li>Gantt.events.ROWS_REMOVED</li>
 *   <li>Gantt.events.ROWS_MODIFIED</li>
 *   <li>Gantt.events.ROWS_FILTERED</li>
 * </ul>
 */


var TreeTable =
/*#__PURE__*/
function (_Component4) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(TreeTable, _Component4);

  function TreeTable(gantt, node, config) {
    var _this5;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, TreeTable);

    _this5 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(TreeTable).call(this, gantt, config));
    _this5.node = node;
    return _this5;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(TreeTable, [{
    key: "setRows",
    value: function setRows(rows) {}
  }, {
    key: "getRowCount",
    value: function getRowCount() {
      return 0;
    }
  }, {
    key: "isRowVisible",
    value: function isRowVisible(param) {}
  }, {
    key: "deleteDrawCache",
    value: function deleteDrawCache() {}
  }, {
    key: "draw",
    value: function draw() {}
  }, {
    key: "drawRows",
    value: function drawRows(selector) {}
  }, {
    key: "createUpdates",
    value: function createUpdates(parent) {
      return new (Gantt.components.GanttUpdates.impl || Gantt.components.GanttUpdates)(parent);
    }
  }, {
    key: "highlightRow",
    value: function highlightRow(row, highlight, deselectAll) {}
  }, {
    key: "setRowFilter",
    value: function setRowFilter(filter) {}
  }, {
    key: "filterChanged",
    value: function filterChanged() {}
  }, {
    key: "isRowFiltered",
    value: function isRowFiltered(row) {
      return false;
    }
  }, {
    key: "toggleCollapseRow",
    value: function toggleCollapseRow(param, collapse) {}
  }, {
    key: "setHeaderHeight",
    value: function setHeaderHeight(height) {}
  }, {
    key: "getTableBody",
    value: function getTableBody() {}
  }, {
    key: "getScrollableTable",
    value: function getScrollableTable() {}
  }, {
    key: "getTop",
    value: function getTop(tr) {
      return tr && tr.offsetTop - this.getTableBody().offsetTop || 0;
    }
  }, {
    key: "getRowAt",
    value: function getRowAt(y) {}
  }, {
    key: "getHeight",
    value: function getHeight() {}
  }, {
    key: "nextRow",
    value: function nextRow(row) {
      return null;
    }
  }, {
    key: "getRow",
    value: function getRow(id) {
      return null;
    }
  }, {
    key: "getRows",
    value: function getRows(selector) {}
  }, {
    key: "getRowName",
    value: function getRowName(row) {
      return row.name;
    }
  }, {
    key: "getRowTop",
    value: function getRowTop(row) {
      return row.tr && row.tr.offsetTop - this.getTableBody().offsetTop || 0;
    }
  }, {
    key: "expandParents",
    value: function expandParents(row) {}
  }]);

  return TreeTable;
}(Component);

TreeTable.defaultClass = '';

var GanttModel =
/*#__PURE__*/
function (_Component5) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(GanttModel, _Component5);

  function GanttModel(gantt, config) {
    var _this6;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, GanttModel);

    _this6 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(GanttModel).call(this, gantt, config));

    if (config) {
      _this6.setConfiguration(config);
    }

    return _this6;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(GanttModel, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }]);

  return GanttModel;
}(Component);
/**
 *
 * <br>Emmits events: <ul>
 *   <li>Gantt.events.TABLE_INIT</li>
 *   <li>Gantt.events.ROWS_ADDED</li>
 *   <li>Gantt.events.ROWS_REMOVED</li>
 *   <li>Gantt.events.ROWS_MODIFIED</li>
 *   <li>Gantt.events.ROWS_FILTERED</li>
 * </ul>
 */


var GanttPanel =
/*#__PURE__*/
function (_Component6) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(GanttPanel, _Component6);

  function GanttPanel(node, config) {
    var _this7;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, GanttPanel);

    _this7 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(GanttPanel).call(this, node, config));
    _this7.node = node;
    _this7.events = Gantt.events;
    _this7.constraintTypes = Gantt.constraintTypes;
    return _this7;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(GanttPanel, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }, {
    key: "draw",
    value: function draw() {}
  }, {
    key: "startUpdating",
    value: function startUpdating() {}
  }, {
    key: "stopUpdating",
    value: function stopUpdating() {}
  }, {
    key: "getModel",
    value: function getModel() {}
  }, {
    key: "getRowCount",
    value: function getRowCount() {
      return 0;
    }
  }, {
    key: "getRow",
    value: function getRow(param) {
      return null;
    }
  }, {
    key: "getVisiibleRows",
    value: function getVisiibleRows() {
      return [];
    }
  }, {
    key: "ensureRowVisible",
    value: function ensureRowVisible(param) {}
  }, {
    key: "isRowVisible",
    value: function isRowVisible(param) {}
  }, {
    key: "getFirstVisibleRow",
    value: function getFirstVisibleRow() {}
  }, {
    key: "setFirstVisibleRow",
    value: function setFirstVisibleRow(row) {}
  }, {
    key: "isRowFiltered",
    value: function isRowFiltered(param) {}
  }, {
    key: "toggleCollapseRow",
    value: function toggleCollapseRow(param, collapse) {}
  }, {
    key: "scrollToY",
    value: function scrollToY(y) {}
  }, {
    key: "getRowActivities",
    value: function getRowActivities(param) {}
  }, {
    key: "resetZoom",
    value: function resetZoom() {}
  }, {
    key: "zoomIn",
    value: function zoomIn(evt) {}
  }, {
    key: "zoomOut",
    value: function zoomOut(evt) {}
  }, {
    key: "zoom",
    value: function zoom(zoomFactor, evt) {}
  }, {
    key: "fitToContent",
    value: function fitToContent() {}
  }, {
    key: "getVisibleHeight",
    value: function getVisibleHeight() {
      return 0;
    }
  }, {
    key: "highlightRow",
    value: function highlightRow(row, highlight, deselectAll) {}
    /*                        */

    /*    Search and filter   */

    /*                        */

  }, {
    key: "addFilter",
    value: function addFilter(rowFilter, rows, activities) {}
  }, {
    key: "addFilter",
    value: function addFilter(rowFilter, filterTasks) {}
  }, {
    key: "removeFilter",
    value: function removeFilter(key, preventNotify) {}
  }, {
    key: "search",
    value: function search(text, rows, activities) {}
  }, {
    key: "setHideEmptyRows",
    value: function setHideEmptyRows(hide, preventNotify) {}
    /*                        */

    /*          Utils         */

    /*                        */

  }]);

  return GanttPanel;
}(Component);

var Filter = function Filter(options) {
  Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Filter);
};

var Renderer =
/*#__PURE__*/
function () {
  function Renderer(config, proto, paletteHandler) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Renderer);

    if (proto) {
      Gantt.utils.mergeObjects(this, proto);
    }

    this.config = config;
    this.paletteHandler = paletteHandler;
    this.setConfiguration(config);
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Renderer, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }]);

  return Renderer;
}();

var ActivityLayout =
/*#__PURE__*/
function () {
  function ActivityLayout(config) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, ActivityLayout);
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(ActivityLayout, [{
    key: "layout",
    value: function layout(row) {}
  }, {
    key: "allowVariableRowHeight",
    value: function allowVariableRowHeight() {
      return false;
    }
  }]);

  return ActivityLayout;
}();

Gantt.ObjectTypes = {
  Activity: 2,
  Resource: 4,
  Row: 1,
  Constraint: 8,
  Reservation: 16
};

var SelectionHandler =
/*#__PURE__*/
function (_Component7) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(SelectionHandler, _Component7);

  function SelectionHandler(config, proto) {
    var _this8;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, SelectionHandler);

    _this8 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(SelectionHandler).call(this, null, config));
    _this8.selections = [];
    _this8.selectionType = null;

    if (proto) {
      Gantt.utils.mergeObjects(Object(_babel_runtime_corejs2_helpers_esm_assertThisInitialized__WEBPACK_IMPORTED_MODULE_1__[/* default */ "a"])(_this8), proto);
    }

    _this8.setConfiguration(config);

    return _this8;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(SelectionHandler, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }, {
    key: "getObjectType",
    value: function getObjectType(obj) {}
  }, {
    key: "select",
    value: function select(obj, clear, notActive) {}
  }, {
    key: "clearSelection",
    value: function clearSelection() {
      this.selections = [];
    }
  }, {
    key: "isSelected",
    value: function isSelected(obj) {
      return this.selections.indexOf(obj) >= 0;
    }
  }, {
    key: "processClick",
    value: function processClick(e, obj) {}
  }, {
    key: "destroy",
    value: function destroy() {
      this.selections = [];
    }
  }]);

  return SelectionHandler;
}(Component);

var LayoutSynchronizer =
/*#__PURE__*/
function (_Component8) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(LayoutSynchronizer, _Component8);

  function LayoutSynchronizer(config, proto) {
    var _this9;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, LayoutSynchronizer);

    _this9 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(LayoutSynchronizer).call(this, null, config));

    if (proto) {
      Gantt.utils.mergeObjects(Object(_babel_runtime_corejs2_helpers_esm_assertThisInitialized__WEBPACK_IMPORTED_MODULE_1__[/* default */ "a"])(_this9), proto || config);
    }

    _this9.setConfiguration(config);

    return _this9;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(LayoutSynchronizer, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }, {
    key: "connect",
    value: function connect(gantt) {}
  }, {
    key: "disconnect",
    value: function disconnect() {}
  }, {
    key: "destroy",
    value: function destroy() {
      this.disconnect();
    }
  }]);

  return LayoutSynchronizer;
}(Component);

var Palette =
/*#__PURE__*/
function () {
  function Palette(config) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Palette);
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Palette, [{
    key: "getColors",
    value: function getColors(count) {}
  }]);

  return Palette;
}();

Gantt.defaultPaletteName = null;
Gantt.defaultPalettes = {};

var GanttUpdates =
/*#__PURE__*/
function () {
  function GanttUpdates(parent) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, GanttUpdates);

    this.parent = parent;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(GanttUpdates, [{
    key: "addUpdate",
    value: function addUpdate(update) {}
  }, {
    key: "removeUpdate",
    value: function removeUpdate(update) {}
  }, {
    key: "reload",
    value: function reload() {
      this._reload = true;
    }
  }, {
    key: "isReload",
    value: function isReload() {
      return false;
    }
  }, {
    key: "destroy",
    value: function destroy() {}
  }, {
    key: "startUpdating",
    value: function startUpdating() {}
  }, {
    key: "stopUpdating",
    value: function stopUpdating() {}
  }]);

  return GanttUpdates;
}();

var Toolbar =
/*#__PURE__*/
function (_Component9) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(Toolbar, _Component9);

  function Toolbar(gantt, node, config) {
    var _this10;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Toolbar);

    _this10 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(Toolbar).call(this, gantt, config));
    _this10.node = node;

    _this10.setConfiguration(config, node);

    return _this10;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Toolbar, [{
    key: "setConfiguration",
    value: function setConfiguration(config, node) {
      this.config = config;
    }
  }, {
    key: "connect",
    value: function connect(gantt) {}
  }, {
    key: "ganttLoaded",
    value: function ganttLoaded(gantt, rows) {}
  }, {
    key: "onInitialized",
    value: function onInitialized() {}
  }, {
    key: "destroy",
    value: function destroy() {}
  }]);

  return Toolbar;
}(Component);

Toolbar.createTitle = function (title) {
  var node = document.createElement('div');
  node.innerHTML = title;
  node.className = 'toolbar-title';
  return node;
};

var Button =
/*#__PURE__*/
function (_Component10) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(Button, _Component10);

  function Button(gantt, config) {
    var _this11;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Button);

    _this11 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(Button).call(this, gantt, config));
    _this11.callbacks = [];

    _this11.setConfiguration(config);

    return _this11;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Button, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this12 = this;

      var btn = document.createElement('div');

      if (config.id) {
        btn.id = config.id;
      }

      btn.className = "toolbar-button g-hoverable g-selectable".concat(config.classes ? ' ' + config.classes : '');

      if (config.icon) {
        var img = document.createElement('img');
        img.src = config.icon;
        img.alt = '';
        btn.appendChild(img);
      }

      if (config.fontIcon) {
        var fontIcon = document.createElement('i');
        fontIcon.className = config.fontIcon + (config.text ? ' fa-fw' : '');
        btn.appendChild(fontIcon);
      }

      if (config.svg) {
        Gantt.utils.appendSVG(btn, config.svg);
      }

      if (config.text) {
        btn.appendChild(document.createTextNode(config.text));
      }

      this.node = btn;

      this.node.onclick = function (e) {
        _this12.clicked(e);

        _this12.callbacks.map(function (cb) {
          cb({
            gantt: _this12.gantt,
            event: e
          });
        });
      };

      if (config.onclick) {
        this.onclick(config.onclick);
      }

      return btn;
    }
  }, {
    key: "onclick",
    value: function onclick(callback) {
      this.callbacks.push(callback);
    }
  }, {
    key: "clicked",
    value: function clicked(e) {}
  }, {
    key: "setId",
    value: function setId(id) {
      this.node.id = id;
    }
  }, {
    key: "update",
    value: function update() {}
  }, {
    key: "setSelected",
    value: function setSelected(selected) {
      Gantt.utils.toggleClass(this.node, 'selected', selected);
    }
  }]);

  return Button;
}(Component);

var CheckBox =
/*#__PURE__*/
function (_Component11) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(CheckBox, _Component11);

  function CheckBox(gantt, config) {
    var _this13;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, CheckBox);

    _this13 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(CheckBox).call(this, gantt, config));

    _this13.setConfiguration(config);

    return _this13;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(CheckBox, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var ctnr = this.node = document.createElement('div');
      ctnr.style.whiteSpace = 'nowrap';
      var input = this.inputNode = document.createElement('input');
      input.setAttribute('type', 'checkbox');
      input.setAttribute('value', 'None');
      input.className = 'g-selectable g-hoverable';

      if (config.id) {
        input.id = id;
      }

      if (config.classes) {
        ctnr.className = config.classes;
      }

      ctnr.appendChild(input);
      var label = document.createElement('label');

      if (config.id) {
        label.setAttribute('for', config.id);
      }

      if (config.icon) {
        var img = document.createElement('img');
        img.src = config.icon;
        img.alt = '';
        label.appendChild(img);
      }

      if (config.svg) {
        Gantt.utils.appendSVG(label, config.svg);
      }

      if (config.text) {
        label.appendChild(document.createTextNode(config.text));
      }

      if (config.onclick) {
        this.onclick(config.onclick);
      }

      ctnr.appendChild(label);
      return ctnr;
    }
  }, {
    key: "setChecked",
    value: function setChecked(checked) {
      this.inputNode.checked = checked;
    }
  }, {
    key: "onclick",
    value: function onclick(callback) {
      var _this14 = this;

      this.inputNode.onclick = function (e) {
        callback(_this14.inputNode.checked, {
          gantt: _this14.gantt,
          event: e
        });
      };
    }
  }, {
    key: "update",
    value: function update() {}
  }, {
    key: "setId",
    value: function setId(id) {
      this.inputNode.id = id;
    }
  }]);

  return CheckBox;
}(Component);

CheckBox.defaultClass = null;

var Toggle =
/*#__PURE__*/
function (_Component12) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(Toggle, _Component12);

  function Toggle(gantt, config) {
    var _this15;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Toggle);

    _this15 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(Toggle).call(this, gantt, config));

    _this15.setConfiguration(config);

    return _this15;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Toggle, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this16 = this;

      this.callbacks = [];
      var ctnr = this._node = document.createElement('div');
      this._isSel = config.isSelected && config.isSelected(this.gantt);
      this.btnUnselected = new (Gantt.components.Button.impl || Gantt.components.Button)(this.gantt, config.unselected);
      this.btnSelected = new (Gantt.components.Button.impl || Gantt.components.Button)(this.gantt, config.selected);
      ctnr.appendChild(this._isSel ? this.btnSelected.node : this.btnUnselected.node);

      if (config.id) {
        ctnr.id = id;
      }

      var onclick = function onclick(e) {
        _this16._isSel = !_this16._isSel;

        _this16.updateButtons(_this16._isSel);

        _this16.callbacks.forEach(function (c) {
          c(_this16._isSel, {
            gantt: _this16.gantt,
            event: e
          });
        });
      };

      this.btnUnselected.node.onclick = this.btnSelected.node.onclick = onclick;

      if (config.onclick) {
        this.onclick(config.onclick);
      }

      return ctnr;
    }
  }, {
    key: "isSelected",
    value: function isSelected() {
      return this._isSel;
    }
  }, {
    key: "setSelected",
    value: function setSelected(selected) {
      this._isSel = selected;
      this.updateButtons(selected);
    }
  }, {
    key: "onclick",
    value: function onclick(callback) {
      this.callbacks.push(callback);
    }
  }, {
    key: "update",
    value: function update() {
      this.updateButtons(this.config.isSelected ? this._isSel = this.config.isSelected(this.gantt) : this._isSel);
    }
  }, {
    key: "updateButtons",
    value: function updateButtons(isSel) {
      if (this.btnSelected.node.parentNode) {
        if (!isSel) this._node.replaceChild(this.btnUnselected.node, this.btnSelected.node);
      } else if (this.btnUnselected.node.parentNode) {
        this._node.replaceChild(this.btnSelected.node, this.btnUnselected.node);
      }
    }
  }, {
    key: "node",
    get: function get() {
      return this._node;
    },
    set: function set(node) {
      this._node = node;
    }
  }]);

  return Toggle;
}(Component);

Toggle.defaultClass = null;

var DropDownList =
/*#__PURE__*/
function (_Component13) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(DropDownList, _Component13);

  function DropDownList(gantt, config) {
    var _this17;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, DropDownList);

    _this17 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(DropDownList).call(this, gantt, config));

    _this17.setConfiguration(config);

    return _this17;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(DropDownList, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var node = this.node = document.createElement('div');
      var defaultClass = DropDownList.defaultClass;

      if (defaultClass) {
        node.className = defaultClass;
      }

      if (config.classes) {
        Gantt.utils.addClass(node, config.classes);
      }

      if (config.text || config.icon || config.fontIcon) {
        var labelNode = document.createElement('div');
        labelNode.className = 'label';

        if (config.icon) {
          var img = document.createElement('img');
          img.src = config.icon;
          img.alt = '';
          labelNode.appendChild(img);
        }

        if (config.fontIcon) {
          var fontIcon = document.createElement('i');
          fontIcon.className = config.fontIcon + (config.text ? ' fa-fw' : '');
          labelNode.appendChild(fontIcon);
        }

        if (config.text) {
          labelNode.appendChild(document.createTextNode(config.text));
        }

        node.appendChild(labelNode);
      }

      var select = this.selectNode = document.createElement('select');
      select.className = 'g-hoverable';

      for (var i = 0, count = config.options.length, opt, optNode; i < count; i++) {
        opt = config.options[i];
        optNode = document.createElement('option');
        optNode.text = opt.text;
        optNode.value = opt.value;
        select.appendChild(optNode);
      }

      node.appendChild(select);

      if (config.onchange) {
        this.onchange(config.onchange);
      }

      return node;
    }
  }, {
    key: "select",
    value: function select(value) {
      this.selectNode.value = value;
    }
  }, {
    key: "onchange",
    value: function onchange(callback) {
      var _this18 = this;

      this.selectNode.onchange = function (e) {
        callback(_this18.selectNode.value, {
          gantt: _this18.gantt,
          event: e
        });
      };
    }
  }, {
    key: "update",
    value: function update() {}
  }, {
    key: "setId",
    value: function setId(id) {
      this.selectNode.id = id;
    }
  }]);

  return DropDownList;
}(Component);

DropDownList.defaultClass = 'dropdown-list';

var Input =
/*#__PURE__*/
function (_Component14) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(Input, _Component14);

  function Input(gantt, config) {
    var _this19;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, Input);

    _this19 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(Input).call(this, gantt, config));

    _this19.setConfiguration(config);

    return _this19;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(Input, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var node = this.node = document.createElement('div');

      if (Input.defaultClass) {
        node.className = Input.defaultClass;
      }

      if (config.classes) {
        Gantt.utils.addClass(node, config.classes);
      }

      node.style.display = 'flex';
      node.style.flexDirection = 'row';
      node.style.alignItems = 'center';

      if (config.text || config.icon || config.fontIcon || config.type === 'search') {
        var labelNode = document.createElement('div');
        labelNode.className = 'label';
        labelNode.style.display = 'inline-block';

        if (config.icon) {
          var img = document.createElement('img');
          img.src = config.icon;
          img.alt = '';
          labelNode.appendChild(img);
        }

        if (config.fontIcon) {
          var fontIcon = document.createElement('i');
          fontIcon.className = config.fontIcon + (config.text ? ' fa-fw' : '');
          fontIcon.setAttribute('aria-disabled', true);
          labelNode.appendChild(fontIcon);
        } else if (config.type === 'search') {
          var _fontIcon = document.createElement('i');

          _fontIcon.setAttribute('aria-disabled', true);

          _fontIcon.className = "fa fa-search fa-lg".concat(config.text ? ' fa-fw' : '');
          labelNode.appendChild(_fontIcon);
        }

        if (config.text) {
          labelNode.appendChild(document.createTextNode(config.text));
        }

        node.appendChild(labelNode);
      }

      var input = this.inputNode = document.createElement('input');
      node.appendChild(input);
      var deleteBtn = document.createElement('div');
      deleteBtn.className = 'delete-button';
      deleteBtn.display = 'inline-block';
      var deleteIcon = document.createElement('i');
      deleteIcon.className = 'fa fa-times fa-lg';
      deleteBtn.appendChild(deleteIcon);
      node.appendChild(deleteBtn);

      deleteBtn.onclick = function () {
        input.value = '';

        if ('createEvent' in document) {
          var evt = document.createEvent('HTMLEvents');
          evt.initEvent('change', false, true);
          input.dispatchEvent(evt);
        } else {
          input.fireEvent('onchange');
        }
      };

      if (config.onchange) {
        this.onchange(config.onchange);
      }

      return node;
    }
  }, {
    key: "setText",
    value: function setText(value) {
      this.input.value = value;
    }
  }, {
    key: "onchange",
    value: function onchange(userCallback) {
      var _this20 = this;

      var callback = function callback(e) {
        userCallback(_this20.inputNode.value, {
          gantt: _this20.gantt,
          event: e
        });
      };

      this.inputNode.onchange = callback;
      this.inputNode.onkeyup = callback;
    }
  }, {
    key: "setId",
    value: function setId(id) {
      this.inputNode.id = id;
    }
  }]);

  return Input;
}(Component);

Input.defaultClass = 'input-box';

var ButtonGroup =
/*#__PURE__*/
function (_Component15) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(ButtonGroup, _Component15);

  function ButtonGroup(gantt, config) {
    var _this21;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, ButtonGroup);

    _this21 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(ButtonGroup).call(this, gantt, config));
    _this21.selected = null;
    _this21.callbacks = [];

    _this21.setConfiguration(config);

    return _this21;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(ButtonGroup, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var node = this.node = document.createElement('div');

      if (config.classes) {
        node.className = config.classes;
      }

      this.buttons = [];
      Gantt.utils.addClass(node, 'button-group');
      node.style.display = 'flex';
      node.style.flexDirection = 'row';
      node.style.alignItems = 'center';
      var self = this;

      function installBtnClicked(button) {
        button.clicked = function () {
          self.setSelected(button);
        };
      }

      this.value = null;
      var cfgBtns = config.buttons;

      for (var i = 0; i < cfgBtns.length; ++i) {
        var btn = new (Gantt.components.Button.impl || Gantt.components.Button)(this.gantt, cfgBtns[i]);
        this.buttons.push(btn);
        installBtnClicked(btn);

        if (cfgBtns[i].selected) {
          this.selected = btn;
          btn.setSelected(true);
          this.value = btn.value;
        }

        btn.value = cfgBtns[i].value;
        node.appendChild(btn.node);
      }

      if (config.onchange) {
        this.onchange(config.onchange);
      }

      if (config.value !== undefined) {
        this.setValue(config.value);
      }

      return node;
    }
  }, {
    key: "setValue",
    value: function setValue(value, noNotify) {
      for (var i = 0; i < this.buttons.length; i++) {
        if (this.buttons[i].value === value) {
          this.setSelected(this.buttons[i], noNotify);
          break;
        }
      }
    }
  }, {
    key: "getValue",
    value: function getValue() {
      return this.value;
    }
  }, {
    key: "setSelected",
    value: function setSelected(btn, noNotify) {
      var _this22 = this;

      if (this.selected !== btn) {
        if (this.selected) {
          this.selected.setSelected(false);
        }

        this.selected = btn;

        if (btn) {
          this.value = btn.value;
          btn.setSelected(true);
        } else {
          this.value = null;
        }

        if (!noNotify) {
          this.callbacks.map(function (cb) {
            cb(_this22.value);
          });
        }
      }
    }
  }, {
    key: "onchange",
    value: function onchange(userCallback) {
      this.callbacks.push(userCallback);
    }
  }, {
    key: "setId",
    value: function setId(id) {
      this.inputNode.id = id;
    }
  }]);

  return ButtonGroup;
}(Component);

var LoadResourceChart =
/*#__PURE__*/
function (_Component16) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(LoadResourceChart, _Component16);

  function LoadResourceChart(gantt, node, config) {
    var _this23;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, LoadResourceChart);

    _this23 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(LoadResourceChart).call(this, gantt, node, config));
    _this23.node = node;

    _this23.setConfiguration(config);

    return _this23;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(LoadResourceChart, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }, {
    key: "setVisible",
    value: function setVisible(visible) {}
  }, {
    key: "setScrollLeft",
    value: function setScrollLeft(left) {}
  }]);

  return LoadResourceChart;
}(Component);

var ConstraintsGraph =
/*#__PURE__*/
function (_Component17) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(ConstraintsGraph, _Component17);

  function ConstraintsGraph(gantt, node, config) {
    var _this24;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, ConstraintsGraph);

    _this24 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(ConstraintsGraph).call(this, gantt, node, config));
    _this24.node = node;

    _this24.setConfiguration(config);

    return _this24;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(ConstraintsGraph, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }, {
    key: "setConstraints",
    value: function setConstraints(cts) {}
  }, {
    key: "setNode",
    value: function setNode(node) {}
  }]);

  return ConstraintsGraph;
}(Component);

var ConstraintLayout =
/*#__PURE__*/
function (_Component18) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(ConstraintLayout, _Component18);

  function ConstraintLayout(gantt, config) {
    var _this25;

    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(this, ConstraintLayout);

    _this25 = Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(ConstraintLayout).call(this, gantt, null, config));

    _this25.setConfiguration(config);

    return _this25;
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(ConstraintLayout, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {}
  }, {
    key: "startInitialize",
    value: function startInitialize() {}
  }, {
    key: "addNode",
    value: function addNode(node) {}
  }, {
    key: "addConstraint",
    value: function addConstraint(nodeFrom, nodeTo, cons) {}
  }, {
    key: "stopInitialize",
    value: function stopInitialize() {}
  }, {
    key: "forEachLink",
    value: function forEachLink(node, cb) {}
  }, {
    key: "layoutNode",
    value: function layoutNode(node) {}
  }, {
    key: "layoutRowNodeLinks",
    value: function layoutRowNodeLinks(rowIndex) {}
  }, {
    key: "drawRowLinks",
    value: function drawRowLinks(rowIndex, parentElt, renderer, ctx) {}
  }]);

  return ConstraintLayout;
}(Component);

Gantt.components = {
  Component: Component,
  GanttPanel: GanttPanel,
  GanttModel: GanttModel,
  TreeTable: TreeTable,
  TimeLine: TimeLine,
  TimeTable: TimeTable,
  Split: Split,
  Tooltip: Tooltip,
  Filter: Filter,
  DataFetcher: DataFetcher,
  ErrorHandler: ErrorHandler,
  Renderer: Renderer,
  ActivityLayout: ActivityLayout,
  SelectionHandler: SelectionHandler,
  LayoutSynchronizer: LayoutSynchronizer,
  GanttUpdates: GanttUpdates,
  Palette: Palette,
  Toolbar: Toolbar,
  Button: Button,
  CheckBox: CheckBox,
  Toggle: Toggle,
  DropDownList: DropDownList,
  Input: Input,
  ButtonGroup: ButtonGroup,
  LoadResourceChart: LoadResourceChart,
  ConstraintsGraph: ConstraintsGraph,
  ConstraintLayout: ConstraintLayout
};

Gantt.envReady = function () {
  return _babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0___default.a.resolve(true);
};

if (false) {}

/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return _classCallCheck; });
function _classCallCheck(instance, Constructor) {
  if (!(instance instanceof Constructor)) {
    throw new TypeError("Cannot call a class as a function");
  }
}

/***/ }),
/* 2 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return _createClass; });
/* harmony import */ var _core_js_object_define_property__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(84);
/* harmony import */ var _core_js_object_define_property__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_core_js_object_define_property__WEBPACK_IMPORTED_MODULE_0__);


function _defineProperties(target, props) {
  for (var i = 0; i < props.length; i++) {
    var descriptor = props[i];
    descriptor.enumerable = descriptor.enumerable || false;
    descriptor.configurable = true;
    if ("value" in descriptor) descriptor.writable = true;

    _core_js_object_define_property__WEBPACK_IMPORTED_MODULE_0___default()(target, descriptor.key, descriptor);
  }
}

function _createClass(Constructor, protoProps, staticProps) {
  if (protoProps) _defineProperties(Constructor.prototype, protoProps);
  if (staticProps) _defineProperties(Constructor, staticProps);
  return Constructor;
}

/***/ }),
/* 3 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return _getPrototypeOf; });
/* harmony import */ var _core_js_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(61);
/* harmony import */ var _core_js_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_core_js_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _core_js_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(41);
/* harmony import */ var _core_js_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_core_js_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_1__);


function _getPrototypeOf(o) {
  _getPrototypeOf = _core_js_object_set_prototype_of__WEBPACK_IMPORTED_MODULE_1___default.a ? _core_js_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_0___default.a : function _getPrototypeOf(o) {
    return o.__proto__ || _core_js_object_get_prototype_of__WEBPACK_IMPORTED_MODULE_0___default()(o);
  };
  return _getPrototypeOf(o);
}

/***/ }),
/* 4 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return _possibleConstructorReturn; });
/* harmony import */ var _helpers_esm_typeof__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(40);
/* harmony import */ var _assertThisInitialized__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(16);


function _possibleConstructorReturn(self, call) {
  if (call && (Object(_helpers_esm_typeof__WEBPACK_IMPORTED_MODULE_0__[/* default */ "a"])(call) === "object" || typeof call === "function")) {
    return call;
  }

  return Object(_assertThisInitialized__WEBPACK_IMPORTED_MODULE_1__[/* default */ "a"])(self);
}

/***/ }),
/* 5 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/object/create.js
var create = __webpack_require__(18);
var create_default = /*#__PURE__*/__webpack_require__.n(create);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/object/set-prototype-of.js
var set_prototype_of = __webpack_require__(41);
var set_prototype_of_default = /*#__PURE__*/__webpack_require__.n(set_prototype_of);

// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/setPrototypeOf.js

function _setPrototypeOf(o, p) {
  _setPrototypeOf = set_prototype_of_default.a || function _setPrototypeOf(o, p) {
    o.__proto__ = p;
    return o;
  };

  return _setPrototypeOf(o, p);
}
// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/inherits.js
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return _inherits; });


function _inherits(subClass, superClass) {
  if (typeof superClass !== "function" && superClass !== null) {
    throw new TypeError("Super expression must either be null or a function");
  }

  subClass.prototype = create_default()(superClass && superClass.prototype, {
    constructor: {
      value: subClass,
      writable: true,
      configurable: true
    }
  });
  if (superClass) _setPrototypeOf(subClass, superClass);
}

/***/ }),
/* 6 */
/***/ (function(module, exports) {

module.exports = __WEBPACK_EXTERNAL_MODULE__6__;

/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(91);

/***/ }),
/* 8 */
/***/ (function(module, exports) {

var core = module.exports = { version: '2.6.9' };
if (typeof __e == 'number') __e = core; // eslint-disable-line no-undef


/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(10);
var core = __webpack_require__(8);
var ctx = __webpack_require__(28);
var hide = __webpack_require__(25);
var has = __webpack_require__(22);
var PROTOTYPE = 'prototype';

var $export = function (type, name, source) {
  var IS_FORCED = type & $export.F;
  var IS_GLOBAL = type & $export.G;
  var IS_STATIC = type & $export.S;
  var IS_PROTO = type & $export.P;
  var IS_BIND = type & $export.B;
  var IS_WRAP = type & $export.W;
  var exports = IS_GLOBAL ? core : core[name] || (core[name] = {});
  var expProto = exports[PROTOTYPE];
  var target = IS_GLOBAL ? global : IS_STATIC ? global[name] : (global[name] || {})[PROTOTYPE];
  var key, own, out;
  if (IS_GLOBAL) source = name;
  for (key in source) {
    // contains in native
    own = !IS_FORCED && target && target[key] !== undefined;
    if (own && has(exports, key)) continue;
    // export native or passed
    out = own ? target[key] : source[key];
    // prevent global pollution for namespaces
    exports[key] = IS_GLOBAL && typeof target[key] != 'function' ? source[key]
    // bind timers to global for call from export context
    : IS_BIND && own ? ctx(out, global)
    // wrap global constructors for prevent change them in library
    : IS_WRAP && target[key] == out ? (function (C) {
      var F = function (a, b, c) {
        if (this instanceof C) {
          switch (arguments.length) {
            case 0: return new C();
            case 1: return new C(a);
            case 2: return new C(a, b);
          } return new C(a, b, c);
        } return C.apply(this, arguments);
      };
      F[PROTOTYPE] = C[PROTOTYPE];
      return F;
    // make static versions for prototype methods
    })(out) : IS_PROTO && typeof out == 'function' ? ctx(Function.call, out) : out;
    // export proto methods to core.%CONSTRUCTOR%.methods.%NAME%
    if (IS_PROTO) {
      (exports.virtual || (exports.virtual = {}))[key] = out;
      // export proto methods to core.%CONSTRUCTOR%.prototype.%NAME%
      if (type & $export.R && expProto && !expProto[key]) hide(expProto, key, out);
    }
  }
};
// type bitmap
$export.F = 1;   // forced
$export.G = 2;   // global
$export.S = 4;   // static
$export.P = 8;   // proto
$export.B = 16;  // bind
$export.W = 32;  // wrap
$export.U = 64;  // safe
$export.R = 128; // real proto method for `library`
module.exports = $export;


/***/ }),
/* 10 */
/***/ (function(module, exports) {

// https://github.com/zloirock/core-js/issues/86#issuecomment-115759028
var global = module.exports = typeof window != 'undefined' && window.Math == Math
  ? window : typeof self != 'undefined' && self.Math == Math ? self
  // eslint-disable-next-line no-new-func
  : Function('return this')();
if (typeof __g == 'number') __g = global; // eslint-disable-line no-undef


/***/ }),
/* 11 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(137);

/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {

var store = __webpack_require__(51)('wks');
var uid = __webpack_require__(36);
var Symbol = __webpack_require__(10).Symbol;
var USE_SYMBOL = typeof Symbol == 'function';

var $exports = module.exports = function (name) {
  return store[name] || (store[name] =
    USE_SYMBOL && Symbol[name] || (USE_SYMBOL ? Symbol : uid)('Symbol.' + name));
};

$exports.store = store;


/***/ }),
/* 13 */
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(15);
module.exports = function (it) {
  if (!isObject(it)) throw TypeError(it + ' is not an object!');
  return it;
};


/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(132);

/***/ }),
/* 15 */
/***/ (function(module, exports) {

module.exports = function (it) {
  return typeof it === 'object' ? it !== null : typeof it === 'function';
};


/***/ }),
/* 16 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return _assertThisInitialized; });
function _assertThisInitialized(self) {
  if (self === void 0) {
    throw new ReferenceError("this hasn't been initialised - super() hasn't been called");
  }

  return self;
}

/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(142);

/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(127);

/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(115);

/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

var anObject = __webpack_require__(13);
var IE8_DOM_DEFINE = __webpack_require__(65);
var toPrimitive = __webpack_require__(46);
var dP = Object.defineProperty;

exports.f = __webpack_require__(21) ? Object.defineProperty : function defineProperty(O, P, Attributes) {
  anObject(O);
  P = toPrimitive(P, true);
  anObject(Attributes);
  if (IE8_DOM_DEFINE) try {
    return dP(O, P, Attributes);
  } catch (e) { /* empty */ }
  if ('get' in Attributes || 'set' in Attributes) throw TypeError('Accessors not supported!');
  if ('value' in Attributes) O[P] = Attributes.value;
  return O;
};


/***/ }),
/* 21 */
/***/ (function(module, exports, __webpack_require__) {

// Thank's IE8 for his funny defineProperty
module.exports = !__webpack_require__(27)(function () {
  return Object.defineProperty({}, 'a', { get: function () { return 7; } }).a != 7;
});


/***/ }),
/* 22 */
/***/ (function(module, exports) {

var hasOwnProperty = {}.hasOwnProperty;
module.exports = function (it, key) {
  return hasOwnProperty.call(it, key);
};


/***/ }),
/* 23 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(140);

/***/ }),
/* 24 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(134);

/***/ }),
/* 25 */
/***/ (function(module, exports, __webpack_require__) {

var dP = __webpack_require__(20);
var createDesc = __webpack_require__(33);
module.exports = __webpack_require__(21) ? function (object, key, value) {
  return dP.f(object, key, createDesc(1, value));
} : function (object, key, value) {
  object[key] = value;
  return object;
};


/***/ }),
/* 26 */
/***/ (function(module, exports, __webpack_require__) {

// to indexed object, toObject with fallback for non-array-like ES3 strings
var IObject = __webpack_require__(95);
var defined = __webpack_require__(34);
module.exports = function (it) {
  return IObject(defined(it));
};


/***/ }),
/* 27 */
/***/ (function(module, exports) {

module.exports = function (exec) {
  try {
    return !!exec();
  } catch (e) {
    return true;
  }
};


/***/ }),
/* 28 */
/***/ (function(module, exports, __webpack_require__) {

// optional / simple context binding
var aFunction = __webpack_require__(32);
module.exports = function (fn, that, length) {
  aFunction(fn);
  if (that === undefined) return fn;
  switch (length) {
    case 1: return function (a) {
      return fn.call(that, a);
    };
    case 2: return function (a, b) {
      return fn.call(that, a, b);
    };
    case 3: return function (a, b, c) {
      return fn.call(that, a, b, c);
    };
  }
  return function (/* ...args */) {
    return fn.apply(that, arguments);
  };
};


/***/ }),
/* 29 */
/***/ (function(module, exports) {

module.exports = true;


/***/ }),
/* 30 */
/***/ (function(module, exports) {

module.exports = {};


/***/ }),
/* 31 */
/***/ (function(module, exports) {

var toString = {}.toString;

module.exports = function (it) {
  return toString.call(it).slice(8, -1);
};


/***/ }),
/* 32 */
/***/ (function(module, exports) {

module.exports = function (it) {
  if (typeof it != 'function') throw TypeError(it + ' is not a function!');
  return it;
};


/***/ }),
/* 33 */
/***/ (function(module, exports) {

module.exports = function (bitmap, value) {
  return {
    enumerable: !(bitmap & 1),
    configurable: !(bitmap & 2),
    writable: !(bitmap & 4),
    value: value
  };
};


/***/ }),
/* 34 */
/***/ (function(module, exports) {

// 7.2.1 RequireObjectCoercible(argument)
module.exports = function (it) {
  if (it == undefined) throw TypeError("Can't call method on  " + it);
  return it;
};


/***/ }),
/* 35 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.2.14 / 15.2.3.14 Object.keys(O)
var $keys = __webpack_require__(69);
var enumBugKeys = __webpack_require__(52);

module.exports = Object.keys || function keys(O) {
  return $keys(O, enumBugKeys);
};


/***/ }),
/* 36 */
/***/ (function(module, exports) {

var id = 0;
var px = Math.random();
module.exports = function (key) {
  return 'Symbol('.concat(key === undefined ? '' : key, ')_', (++id + px).toString(36));
};


/***/ }),
/* 37 */
/***/ (function(module, exports, __webpack_require__) {

var def = __webpack_require__(20).f;
var has = __webpack_require__(22);
var TAG = __webpack_require__(12)('toStringTag');

module.exports = function (it, tag, stat) {
  if (it && !has(it = stat ? it : it.prototype, TAG)) def(it, TAG, { configurable: true, value: tag });
};


/***/ }),
/* 38 */
/***/ (function(module, exports, __webpack_require__) {

// 7.1.13 ToObject(argument)
var defined = __webpack_require__(34);
module.exports = function (it) {
  return Object(defined(it));
};


/***/ }),
/* 39 */
/***/ (function(module, exports, __webpack_require__) {

var pIE = __webpack_require__(58);
var createDesc = __webpack_require__(33);
var toIObject = __webpack_require__(26);
var toPrimitive = __webpack_require__(46);
var has = __webpack_require__(22);
var IE8_DOM_DEFINE = __webpack_require__(65);
var gOPD = Object.getOwnPropertyDescriptor;

exports.f = __webpack_require__(21) ? gOPD : function getOwnPropertyDescriptor(O, P) {
  O = toIObject(O);
  P = toPrimitive(P, true);
  if (IE8_DOM_DEFINE) try {
    return gOPD(O, P);
  } catch (e) { /* empty */ }
  if (has(O, P)) return createDesc(!pIE.f.call(O, P), O[P]);
};


/***/ }),
/* 40 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return _typeof; });
/* harmony import */ var _core_js_symbol_iterator__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(60);
/* harmony import */ var _core_js_symbol_iterator__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_core_js_symbol_iterator__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _core_js_symbol__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(19);
/* harmony import */ var _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_core_js_symbol__WEBPACK_IMPORTED_MODULE_1__);



function _typeof2(obj) { if (typeof _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a === "function" && typeof _core_js_symbol_iterator__WEBPACK_IMPORTED_MODULE_0___default.a === "symbol") { _typeof2 = function _typeof2(obj) { return typeof obj; }; } else { _typeof2 = function _typeof2(obj) { return obj && typeof _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a === "function" && obj.constructor === _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a && obj !== _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a.prototype ? "symbol" : typeof obj; }; } return _typeof2(obj); }

function _typeof(obj) {
  if (typeof _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a === "function" && _typeof2(_core_js_symbol_iterator__WEBPACK_IMPORTED_MODULE_0___default.a) === "symbol") {
    _typeof = function _typeof(obj) {
      return _typeof2(obj);
    };
  } else {
    _typeof = function _typeof(obj) {
      return obj && typeof _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a === "function" && obj.constructor === _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a && obj !== _core_js_symbol__WEBPACK_IMPORTED_MODULE_1___default.a.prototype ? "symbol" : _typeof2(obj);
    };
  }

  return _typeof(obj);
}

/***/ }),
/* 41 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(124);

/***/ }),
/* 42 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(144);

/***/ }),
/* 43 */
/***/ (function(module, exports) {

module.exports = __WEBPACK_EXTERNAL_MODULE__43__;

/***/ }),
/* 44 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/classCallCheck.js
var classCallCheck = __webpack_require__(1);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/createClass.js
var createClass = __webpack_require__(2);

// EXTERNAL MODULE: ./src/core/core.js
var core = __webpack_require__(0);

// CONCATENATED MODULE: ./src/core/plugins.js



core["a" /* default */].plugins = {
  plugins: [],

  /**
   * Registers the list of specified plugins if not already registered.
   * @param {Array|Object} plugins plugin instance(s).
   */
  register: function register(plugins) {
    for (var i = 0; i < arguments.length; i++) {
      if (this.plugins.indexOf(arguments[i]) === -1) {
        this.plugins.push(arguments[i]);
      }
    }
  },

  /**
   * Unregisters the specified plugin if registered.
   * @param {Array|Object} plugins plugin instance(s).
   */
  unregister: function unregister(plugins) {
    for (var i = 0, index; i < arguments.length; i++) {
      if ((index = this.plugins.indexOf(arguments[i])) !== -1) {
        this.plugins.splice(index, 1);
      }
    }
  },

  /**
   * Remove all registered plugins.
   * @see #register
   */
  clear: function clear() {
    this.plugins = [];
  },

  /**
   * Returns the number of registered plugins.
   * @returns {Number}
   */
  count: function count() {
    return this.plugins.length;
  },

  /**
   * Returns all registered plugin instances.
   * @returns {Array} array of plugins.
   */
  getAll: function getAll() {
    return this.plugins;
  },

  /**
   * Calls the registermed plugins on the specified method, with the provided args. This
   * method immediately returns as soon as a plugin returns a value. The
   * returned value can be used, for instance, to interrupt the current action.
   * @param {String|Boolean} method boolean to indicate the plugin call order of the name of the plugin method to call.
   * @param {...Object} args list to apply to the method call.
   * @returns {Object} the value false if any of the plugins return false, otherwise returns true.
   */
  call: function call(method) {
    for (var _len = arguments.length, args = new Array(_len > 1 ? _len - 1 : 0), _key = 1; _key < _len; _key++) {
      args[_key - 1] = arguments[_key];
    }

    var paramsStart;
    var reverse;

    if (typeof method !== 'string') {
      reverse = method;
      method = arguments[1];
      paramsStart = 2;
    } else {
      paramsStart = 1;
    }

    var params = Array.prototype.slice.call(arguments, paramsStart);

    for (var i = reverse ? this.plugins.length - 1 : 0, inc = reverse ? -1 : 1, end = reverse ? -1 : this.plugins.length, result; i !== end; i += inc) {
      var plugin = this.plugins[i];

      if (typeof plugin[method] === 'function') {
        if ((result = plugin[method].apply(plugin, params)) !== undefined) {
          return result;
        }
      }
    }
  }
};
/**
 * Plugin extension methods.
 * @interface Gantt.PluginBase
 */

var plugins_Plugin =
/*#__PURE__*/
function () {
  function Plugin() {
    Object(classCallCheck["a" /* default */])(this, Plugin);
  }

  Object(createClass["a" /* default */])(Plugin, [{
    key: "beforeInit",
    // Called at start of Gantt init
    value: function beforeInit() {} // Called at end of Gantt init

  }, {
    key: "afterInit",
    value: function afterInit() {} // Called at start of update

  }, {
    key: "beforeUpdate",
    value: function beforeUpdate() {} // Called at end of update

  }, {
    key: "afterUpdate",
    value: function afterUpdate() {} // Called at start of draw

  }, {
    key: "beforeDraw",
    value: function beforeDraw() {} // Called at end of draw

  }, {
    key: "afterDraw",
    value: function afterDraw() {} // Called during destroy

  }, {
    key: "destroy",
    value: function destroy() {}
  }]);

  return Plugin;
}();


// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/possibleConstructorReturn.js
var possibleConstructorReturn = __webpack_require__(4);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/getPrototypeOf.js
var getPrototypeOf = __webpack_require__(3);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/inherits.js + 1 modules
var inherits = __webpack_require__(5);

// CONCATENATED MODULE: ./src/core/selection.js






var START_SELECTION_METHOD = 'startSelection';
var STOP_SELECTION_METHOD = 'stopSelection';
var CLEAR_SELECTION_METHOD = 'clearSelection';
var SELECTION_CHANGED_EVENT = 'SelectionChanged';
var UNSELECT_EVENT = 'Unselected';
var SELECT_EVENT = 'Selected';
var CLEAR_SELECTION_EVENT = 'SelectionCleared';
var START_SELECTING = 'StartSelecting';
var STOP_SELECTING = 'StopSelecting';

var selection_Type =
/*#__PURE__*/
function () {
  function Type(config) {
    var _this = this;

    Object(classCallCheck["a" /* default */])(this, Type);

    core["a" /* default */].utils.mergeObjects(this, config);
    this[SELECTION_CHANGED_EVENT] = {
      event: function event() {
        return _this.getSelectionChangedEvent();
      },
      method: function method() {
        return _this.getSelectionChangedMethod();
      }
    };
    this[SELECT_EVENT] = {
      event: function event() {
        return _this.getSelectionEvent();
      },
      method: function method() {
        return _this.getSelectionMethod();
      }
    };
    this[UNSELECT_EVENT] = {
      event: function event() {
        return _this.getUnselectionEvent();
      },
      method: function method() {
        return _this.getUnselectionMethod();
      }
    };
    this[CLEAR_SELECTION_EVENT] = {
      event: function event() {
        return _this.getClearSelectionEvent();
      },
      method: function method() {
        return _this.getClearSelectionMethod();
      }
    };
  }

  Object(createClass["a" /* default */])(Type, [{
    key: "accept",
    value: function accept(obj) {
      return false;
    }
  }, {
    key: "getTypeEvent",
    value: function getTypeEvent(event) {
      return this[event] && this[event].event();
    }
  }, {
    key: "getTypeMethod",
    value: function getTypeMethod(method) {
      return this.name + method;
    }
  }, {
    key: "notify",
    value: function notify(o, event, params) {
      var m = this[event] && this[event].method();

      if (m = o[m]) {
        m.apply(o, params);
      }
    }
  }, {
    key: "getClearSelectionEvent",
    value: function getClearSelectionEvent() {
      return this.name + CLEAR_SELECTION_EVENT;
    }
  }, {
    key: "getClearSelectionMethod",
    value: function getClearSelectionMethod() {
      return this.clearSelectionMethod || this.getTypeMethod(SELECT_EVENT);
    }
  }, {
    key: "getSelectionEvent",
    value: function getSelectionEvent() {
      return this.name + SELECT_EVENT;
    }
  }, {
    key: "getSelectionMethod",
    value: function getSelectionMethod() {
      return this.selectionMethod || this.getTypeMethod(SELECT_EVENT);
    }
  }, {
    key: "getUnselectionEvent",
    value: function getUnselectionEvent() {
      return this.name + UNSELECT_EVENT;
    }
  }, {
    key: "getUnselectionMethod",
    value: function getUnselectionMethod() {
      return this.unselectionMethod || this.getTypeMethod(UNSELECT_EVENT);
    }
  }, {
    key: "getSelectionChangedEvent",
    value: function getSelectionChangedEvent() {
      return this.name + SELECTION_CHANGED_EVENT;
    }
  }, {
    key: "getSelectionChangedMethod",
    value: function getSelectionChangedMethod() {
      return this.selectionChangedMethod || this.getTypeMethod(SELECTION_CHANGED_EVENT);
    }
  }]);

  return Type;
}();

var selection_SelectionHandler =
/*#__PURE__*/
function (_Gantt$components$Sel) {
  Object(inherits["a" /* default */])(SelectionHandler, _Gantt$components$Sel);

  function SelectionHandler(config, proto) {
    var _this2;

    Object(classCallCheck["a" /* default */])(this, SelectionHandler);

    _this2 = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(SelectionHandler).call(this, config, proto));
    _this2.lock = 0;
    _this2.types = [];
    _this2.genericType = new selection_Type({
      name: ''
    });
    _this2.genericType[CLEAR_SELECTION_EVENT] = {
      event: function event() {
        return core["a" /* default */].events.SELECTION_CLEARED;
      },
      method: function method() {
        return CLEAR_SELECTION_METHOD;
      }
    };
    _this2.genericType[START_SELECTING] = {
      event: function event() {
        return core["a" /* default */].events.START_SELECTING;
      },
      method: function method() {
        return START_SELECTION_METHOD;
      }
    };
    _this2.genericType[STOP_SELECTING] = {
      event: function event() {
        return core["a" /* default */].events.STOP_SELECTING;
      },
      method: function method() {
        return STOP_SELECTION_METHOD;
      }
    };
    return _this2;
  }
  /**
   * @return {string}
   */


  Object(createClass["a" /* default */])(SelectionHandler, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      this.config = config;
      this.observers = [];

      if (config) {
        if (core["a" /* default */].utils.isArray(config)) {
          for (var i = 0; i < config.length; i++) {
            this.addConfiguration(config[i]);
          }
        } else {
          this.addConfiguration(config);
        }
      }
    }
  }, {
    key: "addConfiguration",
    value: function addConfiguration(config) {
      this.addObserver(config);
    }
  }, {
    key: "select",
    value: function select(obj, clear, notActive) {
      if (obj) {
        this.startSelecting();
        var objType = this.getObjectType(obj);
        var selTypeChanged = this.selectionType !== objType;

        if (this.selections.length && (clear || selTypeChanged)) {
          var oldType = this.selectionType;
          this.clear();

          if (selTypeChanged) {
            this.notify(oldType, SELECTION_CHANGED_EVENT, this.selections);
          }
        }

        this.selectionType = objType;

        if (notActive && this.selections.length) {
          // Add the selections at the end of selections array so that the current active selection at
          // position zero remains active
          if (core["a" /* default */].utils.isArray(obj)) {
            for (var i = 0, count = obj.length; i < count; ++i) {
              this.setObjectSelected(obj[i], true);
            }

            this.selections = this.selections.concat(obj);
          } else {
            this.setObjectSelected(obj, true);
            this.selections.push(obj);
          }
        } else if (core["a" /* default */].utils.isArray(obj)) {
          for (var _i = 0, _count = obj.length; _i < _count; ++_i) {
            this.setObjectSelected(obj[_i], true);
          }

          this.selections = obj.concat(this.selections);
        } else {
          // obj becomes the new active selection
          this.setObjectSelected(obj, true);
          this.selections.unshift(obj);
        }

        if (this.selections.length) {
          this.notify(this.selectionType, SELECT_EVENT, this.selections, this.selections[0]);
        }

        this.stopSelecting();
      }
    }
  }, {
    key: "unselect",
    value: function unselect(obj) {
      var _this3 = this;

      if (obj) {
        var selecting = false;
        var uns = core["a" /* default */].utils.isArray(obj) && obj || [obj];
        var foundUns = [];
        uns.forEach(function (o) {
          var index = _this3.selections.indexOf(obj);

          if (index >= 0) {
            if (!selecting) {
              _this3.startSelecting();

              selecting = true;
            }

            _this3.selections.splice(index, 1);

            _this3.setObjectSelected(obj, false);

            foundUns.push(obj);
          }
        });

        if (selecting) {
          this.notify(this.selectionType, UNSELECT_EVENT, foundUns);
          this.stopSelecting();
        }
      }
    }
  }, {
    key: "setObjectSelected",
    value: function setObjectSelected(obj, selected) {}
  }, {
    key: "clear",
    value: function clear() {
      if (this.selections.length) {
        this.startSelecting();
        var oldSelection = this.selections;

        for (var i = 0, count = oldSelection && oldSelection.length || 0; i < count; ++i) {
          this.setObjectSelected(oldSelection[i], false);
        }

        this.selections = [];
        this.notify(this.selectionType, CLEAR_SELECTION_EVENT, oldSelection);
        this.notify(this.genericType, CLEAR_SELECTION_EVENT, oldSelection);
        this.stopSelecting();
      }
    }
  }, {
    key: "processClick",
    value: function processClick(e, obj) {
      if (obj) {
        if (e.ctrlKey) {
          // toggle object selection.
          if (this.isSelected(obj)) {
            this.unselect(obj);
          } else {
            this.select(obj);
          }
        } else if (!this.isSelected(obj)) {
          this.select(obj, !e.shiftKey);
        }
      }
    }
  }, {
    key: "getObjectType",
    value: function getObjectType(obj) {
      for (var i = 0, count = this.types.length; i < count; ++i) {
        if (this.types[i].accept(obj)) return this.types[i];
      }

      return null;
    }
  }, {
    key: "startSelecting",
    value: function startSelecting() {
      if (++this.lock === 1) {
        this.notify(this.genericType, START_SELECTING);
      }
    }
  }, {
    key: "stopSelecting",
    value: function stopSelecting() {
      if (! --this.lock) {
        this.notify(this.genericType, STOP_SELECTING);

        if (this.selectionType) {
          this.notify(this.selectionType, SELECTION_CHANGED_EVENT, this.selections, this.selections.length ? this.selections[0] : null);
        }
      }
    } //
    // Notify selection observers
    //

  }, {
    key: "notify",
    value: function notify(type, event) {
      var typeEvent = type.getTypeEvent(event);

      for (var _len = arguments.length, params = new Array(_len > 2 ? _len - 2 : 0), _key = 2; _key < _len; _key++) {
        params[_key - 2] = arguments[_key];
      }

      if (typeEvent) {
        this.triggerEvent(true
        /* Specify 3rd parameter is an array of parameters */
        , typeEvent, params);
      }

      for (var i = 0, o; i < this.observers.length; i++) {
        o = this.observers[i];
        type.notify(o, event, params);
      }
    }
    /* notifyObserver(type, event, ...params) {
          for(let i = 0, o, m; i < this.observers.length; i++) {
              o = this.observers[i];
              type.notify(o, event, params);
          }
      } */

  }, {
    key: "addObserver",
    value: function addObserver(o) {
      this.observers.push(o);
    }
  }, {
    key: "removeObserver",
    value: function removeObserver(o) {
      var index = this.observers.indexOf(o);

      if (index >= 0) {
        this.observers.splice(index, 1);
        return 0;
      }

      return null;
    } //
    // Object types
    //

  }, {
    key: "registerType",
    value: function registerType(type) {
      type = new selection_Type(type);
      this.types.push(type);
      return type;
    }
  }], [{
    key: "SELECTION_CHANGED_EVENT",
    get: function get() {
      return SELECTION_CHANGED_EVENT;
    }
    /**
     * @return {string}
     */

  }, {
    key: "UNSELECT_EVENT",
    get: function get() {
      return UNSELECT_EVENT;
    }
    /**
     * @return {string}
     */

  }, {
    key: "SELECT_EVENT",
    get: function get() {
      return SELECT_EVENT;
    }
    /**
     * @return {string}
     */

  }, {
    key: "CLEAR_SELECTION_EVENT",
    get: function get() {
      return CLEAR_SELECTION_EVENT;
    }
  }]);

  return SelectionHandler;
}(core["a" /* default */].components.SelectionHandler);


core["a" /* default */].components.SelectionHandler.impl = selection_SelectionHandler;
// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/array/is-array.js
var is_array = __webpack_require__(14);
var is_array_default = /*#__PURE__*/__webpack_require__.n(is_array);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/typeof.js
var esm_typeof = __webpack_require__(40);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/parse-int.js
var parse_int = __webpack_require__(24);
var parse_int_default = /*#__PURE__*/__webpack_require__.n(parse_int);

// CONCATENATED MODULE: ./src/core/renderer.js









var AUTOMATIC_COLOR = 'automatic';
var TEXT_OVERFLOW_ELLIPSIS = 'ellipsis';
var TEXT_OVERFLOW_NO_DISPLAY = 'noDisplay';
var TEXT_OVERFLOW_CUT = 'cut';

function createSelectorFunction(selector, fct, oldFct, fctCtx) {
  return fct && function (object, ctx, ext) {
    if (!selector || selector(object, ctx)) {
      return fctCtx ? fct.call(fctCtx, object, ctx, ext) : fct(object, ctx, ext);
    }

    return oldFct && oldFct(object, ctx, ext) || undefined;
  };
}

var renderer_Renderer =
/*#__PURE__*/
function (_Gantt$components$Ren) {
  Object(inherits["a" /* default */])(Renderer, _Gantt$components$Ren);

  function Renderer(config, proto, paletteHandler) {
    Object(classCallCheck["a" /* default */])(this, Renderer);

    return Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(Renderer).call(this, config, proto, paletteHandler));
  }

  Object(createClass["a" /* default */])(Renderer, [{
    key: "draw",
    value: function draw(object, parentElt, ctx) {
      var shapeElt = this.createShape && this.createShape(object, parentElt, ctx) || null;

      if (this.getCSS) {
        var css = this.getCSS(object, ctx);

        if (css) {
          this.setCSS(shapeElt || parentElt, css);
        }
      }

      if ((this.getText || this.getIcon) && this.drawContent) {
        var text = this.getText && this.getText(object, ctx);
        var icon = this.getIcon && this.getIcon(object, ctx);
        this.drawContent(shapeElt || parentElt, icon, text, object, ctx);
      }

      var bg;

      if (this.background) {
        bg = this.background(object, ctx);

        if (bg) {
          this.setBackground(shapeElt, bg);
        }
      }

      if (this.color) {
        this.setColor(shapeElt, this.color(object, ctx, bg));
      }

      if (parentElt && shapeElt !== parentElt) {
        parentElt.appendChild(shapeElt);
      }

      return shapeElt;
    }
  }, {
    key: "setBackground",
    value: function setBackground(shapeElt, bg) {
      shapeElt.style.backgroundColor = bg;
    }
  }, {
    key: "setColor",
    value: function setColor(shapeElt, c) {
      shapeElt.style.color = c;
    }
  }, {
    key: "setCSS",
    value: function setCSS(elt, classname) {
      if (classname) {
        elt.className = elt.className && "".concat(elt.className, " ").concat(classname) || classname;
      }
    } // noinspection JSUnusedLocalSymbols

  }, {
    key: "createShape",
    value: function createShape(object, parentElt, ctx) {
      return null;
    } // noinspection JSUnusedLocalSymbols

  }, {
    key: "drawContent",
    value: function drawContent(elt, icon, text, object, ctx) {
      this.drawDefaultContent(elt, icon, text, object, ctx);
    }
  }, {
    key: "drawNoDisplayOverflowContent",
    value: function drawNoDisplayOverflowContent(elt, icon, text, object, ctx) {
      var ctnt = document.createElement('div');
      ctnt.className = 'content';
      ctnt.style.overflow = 'hidden';
      ctnt.style.display = 'flex'; // Cannot used as issue with FF https://github.ibm.com/IBMDecisionOptimization/dd-gantt-component/issues/14

      /* ctnt.style.alignItems = 'center'; */

      ctnt.style.justifyContent = 'center';
      ctnt.style.left = '0';
      ctnt.style.top = '0';
      ctnt.style.bottom = '0';
      ctnt.style.right = '0';
      ctnt.style.position = 'absolute';
      ctnt.style.flexWrap = 'wrap';

      if (icon) {
        var img = document.createElement('img');
        img.className = 'image-content';
        img.src = icon;
        img.alt = '';
        img.style["float"] = 'left';
        ctnt.appendChild(img);
      }

      var separator = document.createElement('div');
      separator.style.width = '1px';
      separator.style.display = 'inline-block';
      separator.style.height = '100%';
      ctnt.appendChild(separator);
      var t = document.createElement('div');
      t.className = 'text-content';
      t.innerHTML = text;
      t.style.display = 'flex';
      t.style.alignItems = 'center';
      t.style.whiteSpace = 'nowrap';
      t.style.height = '100%';
      t.style.textAlign = 'center';
      ctnt.appendChild(t);
      elt.appendChild(ctnt);
    }
  }, {
    key: "drawCutContent",
    value: function drawCutContent(elt, icon, text, object, ctx) {
      if (icon) {
        var img = document.createElement('img');
        img.className = 'image-content';
        img.src = icon;
        img.alt = '';
        elt.appendChild(img);
      }

      elt.style.overflow = 'hidden';
      var t = document.createElement('div');
      t.className = 'text-content';
      t.innerHTML = text;
      elt.appendChild(t);
      return t;
    }
  }, {
    key: "drawEllipsisContent",
    value: function drawEllipsisContent(elt, icon, text, object, ctx) {
      if (icon) {
        var img = document.createElement('img');
        img.className = 'image-content';
        img.src = icon;
        img.alt = '';
        elt.appendChild(img);
      }

      var t = document.createElement('div');
      t.className = 'text-content';
      t.style.textOverflow = 'ellipsis';
      t.style.overflow = 'hidden';
      t.innerHTML = text;
      elt.appendChild(t);
      return t;
    }
  }, {
    key: "drawOverflowVisibleContent",
    value: function drawOverflowVisibleContent(elt, icon, text, object, ctx) {
      if (icon) {
        var img = document.createElement('img');
        img.className = 'image-content';
        img.src = icon;
        img.alt = '';
        img.style["float"] = 'left';
        elt.appendChild(img);
      }

      var t = document.createElement('div');
      t.className = 'text-content';
      t.overflow = 'visible';
      t.innerHTML = text;
      elt.appendChild(t);
      return t;
    }
  }, {
    key: "filter",
    value: function filter(object, row, search) {
      if (this.getText && search) {
        var text = this.getText(object, row);
        return text && core["a" /* default */].utils.stringMatches(text, search);
      }

      return false;
    }
  }, {
    key: "createCSSGetter",
    value: function createCSSGetter(selector, classOptions, ctx) {
      if (typeof classOptions === 'function') {
        // Function is given the object to render in parameter and returns a set of CSS classes
        return createSelectorFunction(selector, classOptions, null, ctx);
      }

      if (typeof classOptions === 'string') {
        if (classOptions[0] === '@') {
          // The string represents the accessor to the object property providing the CSS class
          return createSelectorFunction(selector, core["a" /* default */].utils.propertyEvaluator(classOptions.substring(1)));
        }

        return createSelectorFunction(selector, function () {
          return classOptions;
        });
      } // Else the config is a descriptive object of the CSS setter


      if (!classOptions.property) {
        console.warn('Missing "property" field in class setter description:');
        console.warn(classOptions);
        return null;
      }

      var propGetter = core["a" /* default */].utils.propertyEvaluator(classOptions.property);
      return createSelectorFunction(selector, function (obj) {
        var prop = propGetter.call(obj, obj);

        if (prop) {
          if (classOptions.prefix) {
            prop = classOptions.prefix + prop;
          }

          if (classOptions.suffix) {
            prop = classOptions.suffix + prop;
          }
        }

        return prop;
      });
    }
  }, {
    key: "addCSSConfiguration",
    value: function addCSSConfiguration(selector, classes, ctx) {
      var i;
      var getter;

      if (!core["a" /* default */].utils.isArray(classes)) {
        classes = [classes];
      }

      for (i = 0; i < classes.length; i++) {
        getter = this.createCSSGetter(selector, classes[i], ctx);

        if (getter) {
          if (this.cssGetters) {
            this.cssGetters.push(getter);
          } else {
            this.cssGetters = [getter];

            this.getCSS = function (object, ctx) {
              var cssClasses = '';
              var cssToAdd;

              for (var _i = 0; _i < this.cssGetters.length; _i++) {
                cssToAdd = this.cssGetters[_i](object, ctx);

                if (cssToAdd) {
                  cssClasses = cssClasses && "".concat(cssClasses, " ").concat(cssToAdd) || cssToAdd;
                }
              }

              return cssClasses;
            };
          }
        }
      }
    }
  }, {
    key: "addFilterConfiguration",
    value: function addFilterConfiguration(selector, config, ctx) {
      var filter;

      if (typeof config === 'function') {
        filter = function filter() {
          for (var _len = arguments.length, params = new Array(_len), _key = 0; _key < _len; _key++) {
            params[_key] = arguments[_key];
          }

          return config.apply(ctx, params);
        };
      } else if (typeof config === 'string') {
        var getter = core["a" /* default */].utils.propertyEvaluator(config);

        if (getter) {
          filter = function filter(object, ctx, search) {
            if (search) {
              var value = getter(object, ctx);
              return value && core["a" /* default */].utils.stringMatches(value, search);
            }

            return true;
          };
        }
      } else {
        console.warn('Cannot process filter config. Must be a string or a function.');
        console.warn(config);
      }

      if (filter) {
        var oldFilter = this.filter;

        this.filter = function (object, ctx, search) {
          if (!oldFilter(object, ctx, search)) {
            return false;
          }

          if (!selector || selector(object)) {
            if (!filter(object, ctx, search)) {
              return false;
            }
          }

          return true;
        };
      }
    }
  }, {
    key: "addTooltipPropertiesConfiguration",
    value: function addTooltipPropertiesConfiguration(selector, config, ctx) {
      var tooltipPropsGetter;

      if (typeof config === 'function') {
        tooltipPropsGetter = config;
      } else {
        console.warn('Cannot process tooltip properties config. Must be a a function.');
        console.warn(config);
      }

      if (tooltipPropsGetter) {
        if (selector) {
          this.getTooltipProperties = createSelectorFunction(selector, tooltipPropsGetter, this.getTooltipProperties, ctx);
        } else this.getTooltipProperties = tooltipPropsGetter;
      }
    }
  }, {
    key: "addTooltipConfiguration",
    value: function addTooltipConfiguration(selector, config, ctx) {
      var tooltipGetter;

      if (typeof config === 'function') {
        tooltipGetter = function tooltipGetter() {
          for (var _len2 = arguments.length, params = new Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
            params[_key2] = arguments[_key2];
          }

          return config.apply(ctx, params);
        };
      } else {
        console.warn('Cannot process tooltip config. Must be a function.');
        console.warn(config);
      }

      if (tooltipGetter) {
        if (selector) {
          this.getTooltip = createSelectorFunction(selector, tooltipGetter, this.getTooltip);
        } else this.getTooltip = tooltipGetter;
      }
    }
  }, {
    key: "addTextConfiguration",
    value: function addTextConfiguration(selector, config, ctx) {
      var textGetter;

      if (typeof config === 'function') {
        textGetter = function textGetter() {
          for (var _len3 = arguments.length, params = new Array(_len3), _key3 = 0; _key3 < _len3; _key3++) {
            params[_key3] = arguments[_key3];
          }

          return config.apply(ctx, params);
        };
      } else if (typeof config === 'string') {
        textGetter = core["a" /* default */].utils.propertyEvaluator(config);
      } else {
        console.warn('Cannot process text config. Must be a string or a function.');
        console.warn(config);
      }

      if (textGetter) {
        if (selector) {
          this.getText = createSelectorFunction(selector, textGetter, this.getText);
        } else this.getText = textGetter;
      }
    }
  }, {
    key: "addIconConfiguration",
    value: function addIconConfiguration(selector, config, ctx) {
      var iconGetter;

      if (typeof config === 'function') {
        iconGetter = function iconGetter() {
          for (var _len4 = arguments.length, params = new Array(_len4), _key4 = 0; _key4 < _len4; _key4++) {
            params[_key4] = arguments[_key4];
          }

          return config.apply(ctx, params);
        };
      } else if (typeof config === 'string') {
        iconGetter = core["a" /* default */].utils.propertyEvaluator(config);
      } else {
        console.warn('Cannot process icon config. Must be a string or a function.');
        console.warn(config);
      }

      if (iconGetter) {
        if (selector) {
          this.getIcon = createSelectorFunction(selector, iconGetter, this.getIcon);
        } else this.getIcon = iconGetter;
      }
    }
  }, {
    key: "addDrawConfiguration",
    value: function addDrawConfiguration(selector, config) {
      if (selector) {
        var oldDraw = this.draw;

        this.draw = function (object, elt, ctx) {
          if (selector(object, ctx)) {
            config.draw(object, elt, ctx);
          } else {
            oldDraw(object, elt, ctx);
          }
        };
      } else {
        this.draw = function (object, elt, ctx) {
          config.draw(object, elt, ctx);
        };
      }
    }
  }, {
    key: "addDrawContentConfiguration",
    value: function addDrawContentConfiguration(selector, config) {
      if (selector) {
        var oldDrawContent = this.drawContent;

        this.drawContent = function (elt, text, object, ctx) {
          if (selector(object, ctx)) {
            config.drawContent(elt, text, object, ctx);
          } else {
            oldDrawContent(elt, text, object, ctx);
          }
        };
      } else {
        this.drawContent = function (elt, text, object, ctx) {
          config.drawContent(elt, text, object, ctx);
        };
      }
    }
  }, {
    key: "addTextOverflowConfiguration",
    value: function addTextOverflowConfiguration(selector, config) {
      var drawDefaultContent;

      if (config === TEXT_OVERFLOW_ELLIPSIS) {
        drawDefaultContent = this.drawEllipsisContent;
      } else if (config === TEXT_OVERFLOW_NO_DISPLAY) {
        drawDefaultContent = this.drawNoDisplayOverflowContent;
      } else if (config === TEXT_OVERFLOW_CUT) {
        drawDefaultContent = this.drawCutContent;
      }

      if (selector) {
        var oldDrawDefaultContent = this.drawDefaultContent;

        this.drawDefaultContent = function (elt, text, object, ctx) {
          if (selector(object, ctx)) {
            drawDefaultContent.call(this, elt, text, object, ctx);
          } else {
            oldDrawDefaultContent.call(this, elt, text, object, ctx);
          }
        };
      } else {
        this.drawDefaultContent = drawDefaultContent;
      }
    }
  }, {
    key: "hexToRgb",
    value: function hexToRgb(hex) {
      var result = /^#?([a-f\d]{2})([a-f\d]{2})([a-f\d]{2})$/i.exec(hex);
      return result ? {
        r: parse_int_default()(result[1], 16),
        g: parse_int_default()(result[2], 16),
        b: parse_int_default()(result[3], 16)
      } : null;
    }
  }, {
    key: "getTextColorFromBackgroundColor",
    value: function getTextColorFromBackgroundColor(hexColor) {
      var rgb = this.hexToRgb(hexColor); // http://www.w3.org/TR/AERT#color-contrast

      var o = Math.round((rgb.r * 299 + rgb.g * 587 + rgb.b * 114) / 1000);
      return o > 125 ? '#383633' : 'white';
    }
  }, {
    key: "addColorConfiguration",
    value: function addColorConfiguration(selector, config, property, ctx) {
      var _this = this;

      var colorGetter;

      if (typeof config === 'function') {
        colorGetter = function colorGetter() {
          for (var _len5 = arguments.length, params = new Array(_len5), _key5 = 0; _key5 < _len5; _key5++) {
            params[_key5] = arguments[_key5];
          }

          return config.apply(ctx, params);
        };
      } else if (typeof config === 'string') {
        if (property === 'color' && AUTOMATIC_COLOR === config) {
          colorGetter = function colorGetter(obj, ctx, bg) {
            var index = _this.colors && _this.colors.indexOf(bg) || -1;

            if (index < 0) {
              var textColor;

              try {
                textColor = _this.getTextColorFromBackgroundColor(bg);
              } catch (err) {
                console.error("Invalid color format ".concat(bg));
                console.error(err);
                textColor = 'black';
              }

              if (!_this.colors) {
                _this.colors = [bg];
                _this.textColors = [textColor];
              } else {
                _this.colors.push(bg);

                _this.textColors.push(textColor);
              }

              return textColor;
            }

            return _this.textColors[index];
          };
        } else {
          colorGetter = core["a" /* default */].utils.propertyEvaluator(config);
        }
      } else {
        // Object describing how to get a color from a palette
        var paletteConfig = config.palette;
        var paletteRenderer = {
          paletteHandler: this.paletteHandler,
          colors: null,
          value: core["a" /* default */].utils.propertyEvaluator(config.getValue),
          getColor: function getColor(obj, ctx) {
            var value = this.value(obj, ctx);
            var colors = this.colors || this.makeColors(obj, ctx); // makeColors leads to the creation of this.values

            var index = this.values.indexOf(value);

            if (index < 0) {
              index = this.values.length;
              this.values.push(value);
            }

            return index < 0 ? null : colors[index % colors.length];
          },
          getValues: config.values && (core["a" /* default */].utils.isFunction(config.values) && config.values || function () {
            return config.values;
          }),
          makeColors: function makeColors(obj, ctx) {
            var palette;

            if (paletteConfig) {
              if (core["a" /* default */].utils.isString(paletteConfig)) {
                palette = this.paletteHandler.getPalette(paletteConfig);
              } else {
                palette = new (core["a" /* default */].components.Palette.impl || core["a" /* default */].components.Palette)(paletteConfig);
              }
            } else {
              palette = this.paletteHandler.getPalette();
            }

            if (!palette && !this.colors) {
              console.error("No palette found for ".concat(paletteConfig));
              palette = core["a" /* default */].defaultPalettes[core["a" /* default */].defaultPaletteName];
            }

            this.values = this.getValues && this.getValues(obj, ctx) || [];
            this.colors = palette && palette.getColors(this.values.length || -1); // -1 for the max number of colors handled by the palette.

            return this.colors;
          }
        };

        colorGetter = function colorGetter(obj, ctx) {
          return paletteRenderer.getColor(obj, ctx);
        };
      }

      if (colorGetter) {
        if (selector) {
          this[property] = createSelectorFunction(selector, colorGetter, this[property]);
        } else this[property] = colorGetter;
      }
    }
  }, {
    key: "addConfiguration",
    value: function addConfiguration(config) {
      var selector;

      if (config.selector) {
        if (typeof config.selector === 'function') {
          selector = function selector() {
            return config.selector.apply(config, arguments);
          };
        } else if (Object(esm_typeof["a" /* default */])(config.selector) !== 'object' || !config.selector.property || !config.selector.value) {
          console.warn('Renderer selector must be a function or an object with "property" and "value" fields.');
          console.warn(config.selector);
        } else {
          var prop = core["a" /* default */].utils.propertyEvaluator(this.config.selector.property);
          var values = this.config.selector.value.split(',');

          selector = function selector(object) {
            var value = prop(object);
            return value && values.indexOf(value) >= 0;
          };
        }
      }

      this.processConfiguration(selector, config);
    }
  }, {
    key: "processConfiguration",
    value: function processConfiguration(selector, config) {
      this.defaultProcessConfiguration(selector, config);
    }
  }, {
    key: "defaultProcessConfiguration",
    value: function defaultProcessConfiguration(selector, config) {
      if (config.classes || config.css) {
        this.addCSSConfiguration(selector, config.classes || config.css, config);
      }

      if (config.text) {
        this.addTextConfiguration(selector, config.text, config);
      }

      if (config.icon) {
        this.addIconConfiguration(selector, config.icon, config);
      }

      if (config.filter) {
        this.addFilterConfiguration(selector, config.filter, config);
      }

      if (config.tooltip) {
        this.addTooltipConfiguration(selector, config.tooltip, config);
      }

      if (config.tooltipProperties) {
        this.addTooltipPropertiesConfiguration(selector, config.tooltipProperties, config);
      }

      if (config.createShape) {
        console.warn('config.createShape: Not implemented');
      }

      if (config.drawContent) {
        this.addDrawContentConfiguration(selector, config);
      }

      if (config.textOverflow) {
        this.addTextOverflowConfiguration(selector, config.textOverflow);
      }

      if (config.background) {
        this.addColorConfiguration(selector, config.background, 'background', config);
      }

      if (config.color) {
        this.addColorConfiguration(selector, config.color, 'color', config);
      }

      if (config.draw) {
        this.addDrawConfiguration(selector, config);
      }
    }
  }, {
    key: "setConfiguration",
    value: function setConfiguration(config) {
      this.drawDefaultContent = this.drawNoDisplayOverflowContent;

      if (is_array_default()(config)) {
        for (var i = 0; i < config.length; i++) {
          this.addConfiguration(config[i]);
        }
      } else if (config) {
        this.addConfiguration(config);
      }

      this.initialized(config);
    }
  }, {
    key: "initialized",
    value: function initialized(config) {} // noinspection JSUnusedLocalSymbols

  }, {
    key: "getTooltipProperties",
    value: function getTooltipProperties(obj, ctx) {
      return [];
    }
  }, {
    key: "getTooltip",
    value: function getTooltip(parentNode, obj, ctx) {
      parentNode.style.display = 'flex';
      parentNode.style.flexDirection = 'column';
      /* const tooltipContent = document.createElement('div');
          tooltipContent.className = 'gantt-tooltip-content';
          tooltipContent.style.display = 'flex';
          tooltipContent.style.flexFlow = 'column'; */

      if (this.getText) {
        var title = document.createElement('h2');
        title.appendChild(document.createTextNode(this.getText(obj, ctx)));
        title.style.display = 'block';
        title.style.flex = '0 0 auto';
        parentNode.appendChild(title);
      }

      var props = this.getTooltipProperties(obj, ctx);
      var tableCtnr = document.createElement('div');
      tableCtnr.style.overflow = 'auto';
      tableCtnr.style.display = 'block';
      tableCtnr.style.flexShrink = '1';
      tableCtnr.style.flexGrow = '1';
      var table = document.createElement('table');
      var body = document.createElement('tbody');
      var tr;
      var td;

      for (var iProp = 0, count = props.length; iProp < count;) {
        tr = document.createElement('tr');
        td = document.createElement('td');
        td.className = 'tooltip-key';
        td.appendChild(document.createTextNode(props[iProp++]));
        tr.appendChild(td);
        td = document.createElement('td');
        td.className = 'tooltip-table-separator';
        tr.appendChild(td);
        td = document.createElement('td');
        td.className = 'tooltip-value';
        td.appendChild(document.createTextNode(props[iProp++]));
        tr.appendChild(td);
        body.appendChild(tr);
      }

      table.appendChild(body);
      tableCtnr.appendChild(table);
      parentNode.appendChild(tableCtnr); // tooltipContent.appendChild(tableCtnr);
      // parentNode.appendChild(tooltipContent);
    }
  }]);

  return Renderer;
}(core["a" /* default */].components.Renderer);


core["a" /* default */].components.Renderer.impl = renderer_Renderer;
// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/object/create.js
var object_create = __webpack_require__(18);
var create_default = /*#__PURE__*/__webpack_require__.n(object_create);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/json/stringify.js
var stringify = __webpack_require__(11);
var stringify_default = /*#__PURE__*/__webpack_require__.n(stringify);

// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/arrayWithHoles.js

function _arrayWithHoles(arr) {
  if (is_array_default()(arr)) return arr;
}
// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/get-iterator.js
var get_iterator = __webpack_require__(85);
var get_iterator_default = /*#__PURE__*/__webpack_require__.n(get_iterator);

// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/iterableToArrayLimit.js

function _iterableToArrayLimit(arr, i) {
  var _arr = [];
  var _n = true;
  var _d = false;
  var _e = undefined;

  try {
    for (var _i = get_iterator_default()(arr), _s; !(_n = (_s = _i.next()).done); _n = true) {
      _arr.push(_s.value);

      if (i && _arr.length === i) break;
    }
  } catch (err) {
    _d = true;
    _e = err;
  } finally {
    try {
      if (!_n && _i["return"] != null) _i["return"]();
    } finally {
      if (_d) throw _e;
    }
  }

  return _arr;
}
// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/nonIterableRest.js
function _nonIterableRest() {
  throw new TypeError("Invalid attempt to destructure non-iterable instance");
}
// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/slicedToArray.js



function _slicedToArray(arr, i) {
  return _arrayWithHoles(arr) || _iterableToArrayLimit(arr, i) || _nonIterableRest();
}
// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/promise.js
var promise = __webpack_require__(7);
var promise_default = /*#__PURE__*/__webpack_require__.n(promise);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/object/keys.js
var object_keys = __webpack_require__(23);
var keys_default = /*#__PURE__*/__webpack_require__.n(object_keys);

// CONCATENATED MODULE: ./src/model/index.js












function updateTimeWindow(wnd, activity) {
  if (activity.start && wnd.start > activity.start) {
    wnd.start = activity.start;
  }

  if (activity.end && wnd.end < activity.end) {
    wnd.end = activity.end;
  }

  return activity;
}

var ConstraintPrototype = {
  isDisplayed: function isDisplayed() {
    return this.nodes !== null;
  },
  clearLink: function clearLink() {
    this.nodes = null;
  },
  setNodes: function setNodes(nodes) {
    this.nodes = nodes;
  }
};

var model_GanttModel =
/*#__PURE__*/
function (_Gantt$components$Gan) {
  Object(inherits["a" /* default */])(GanttModel, _Gantt$components$Gan);

  function GanttModel(gantt, config) {
    Object(classCallCheck["a" /* default */])(this, GanttModel);

    return Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(GanttModel).call(this, gantt, config));
  }

  Object(createClass["a" /* default */])(GanttModel, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this = this;

      this.destroy();
      var ftchClass = core["a" /* default */].components.DataFetcher.impl || core["a" /* default */].components.DataFetcher;
      var fetchConfig;

      var checkFetcher = function checkFetcher(fetcher, type) {
        if (!fetcher.get) {
          throw new Error("Could not configure data for ".concat(type, ". Probably a configuration issue with key(s) ").concat(keys_default()(fetcher).join(',')));
        }
      };

      this.dateParser = null;

      if (config.dateFormat) {
        try {
          this.dateParser = core["a" /* default */].utils.createDateParser(config.dateFormat);
        } catch (err) {
          throw new Error("Could not process date format ".concat(config.dateFormat, ": ").concat(err));
        }
      }

      var makeTimeFct = function makeTimeFct(fct) {
        if (_this.dateParser) {
          var _final;

          return function (obj) {
            if (!_final) {
              var value = fct(obj);

              if (core["a" /* default */].utils.isString(value)) {
                _final = function _final(obj) {
                  return _this.dateParser(fct(obj));
                };

                return _this.dateParser(value);
              }

              _final = fct;
              return value;
            }

            return _final(obj);
          };
        }

        return fct;
      };

      this.allFetcher = null;

      if (fetchConfig = config.all) {
        this.allFetcher = new ftchClass(fetchConfig, ['reader', 'resources', 'activities', 'reservations', 'constraints'], {
          gantt: this.gantt
        });
        checkFetcher(this.allFetcher, 'all');
        this.allFetcher._reader = fetchConfig.reader && core["a" /* default */].utils.isFunction(fetchConfig.reader) ? fetchConfig.reader : function (data) {
          return fetchConfig.reader;
        };
        this.allFetcher._resourcesGetter = fetchConfig.resources && core["a" /* default */].utils.propertyEvaluator(fetchConfig.resources);
        this.allFetcher._activitiesGetter = fetchConfig.activities && core["a" /* default */].utils.propertyEvaluator(fetchConfig.activities);
        this.allFetcher._reservationsGetter = fetchConfig.reservations && core["a" /* default */].utils.propertyEvaluator(fetchConfig.reservations);
        this.allFetcher._constraintsGetter = fetchConfig.constraints && core["a" /* default */].utils.propertyEvaluator(fetchConfig.constraints);
      }

      this.resourceFetcher = null;

      if (fetchConfig = config.resources) {
        this.resourceFetcher = new ftchClass(fetchConfig, ['id', 'parent', 'name', 'activities'], {
          gantt: this.gantt
        });
        checkFetcher(this.resourceFetcher, 'resources');

        if (fetchConfig.parent) {
          this.resourceFetcher._parentIdGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.parent || 'parentId');
        }

        this.resourceFetcher._idGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.id || 'id');
        this.resourceFetcher._nameGetter = fetchConfig.name && core["a" /* default */].utils.propertyEvaluator(fetchConfig.name) || this.resourceFetcher._idGetter;

        if (fetchConfig.activities) {
          this.resourceFetcher._activityGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.activities);
        }
      }

      if (fetchConfig = config.activities) {
        // Do no not create an activity getter if activities are provided along with the resources
        this.activityFetcher = this.resourceFetcher && this.resourceFetcher._activityGetter && {} || new ftchClass(fetchConfig, ['id', 'parent', 'name', 'start', 'end', 'resource'], {
          gantt: this.gantt
        });

        if (!this.resourceFetcher || !this.resourceFetcher._activityGetter) {
          checkFetcher(this.activityFetcher, 'activities');
        }

        if (fetchConfig.parent) {
          this.activityFetcher._parentIdGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.parent || 'parentId');
        }

        this.activityFetcher._idGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.id || 'id');
        this.activityFetcher._nameGetter = fetchConfig.name && core["a" /* default */].utils.propertyEvaluator(fetchConfig.name) || this.activityFetcher._idGetter;
        this.activityFetcher._startGetter = makeTimeFct(core["a" /* default */].utils.propertyEvaluator(fetchConfig.start || 'start'));
        this.activityFetcher._endGetter = makeTimeFct(core["a" /* default */].utils.propertyEvaluator(fetchConfig.end || 'end'));

        if (fetchConfig.resource) {
          this.activityFetcher._resourceIdGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.resource);
        }
      }

      if (fetchConfig = config.reservations) {
        this.reservationFetcher = new ftchClass(fetchConfig, ['activity', 'resource'], {
          gantt: this.gantt
        });
        checkFetcher(this.reservationFetcher, 'reservations'); // noinspection JSUnresolvedVariable

        this.reservationFetcher._activityGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.activity || 'activity');
        this.reservationFetcher._resourceGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.resource || 'resource');
      }

      if (fetchConfig = config.constraints) {
        this.constraintFetcher = new ftchClass(fetchConfig, ['from', 'to', 'type'], {
          gantt: this.gantt
        });
        checkFetcher(this.constraintFetcher, 'constraints');
        this.constraintFetcher._fromGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.from || 'from'); // noinspection JSUnresolvedVariable

        this.constraintFetcher._toGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.to || 'to');
        this.constraintFetcher._typeGetter = core["a" /* default */].utils.propertyEvaluator(fetchConfig.type || 'type');
        this.constraintFetcher._idGetter = fetchConfig.id && core["a" /* default */].utils.propertyEvaluator(fetchConfig.id) || null;
      }

      if (fetchConfig = config.timeWindow) {
        this.timeWindowFetcher = new ftchClass(fetchConfig, null, {
          gantt: this.gantt
        });
        checkFetcher(this.timeWindowFetcher, 'timeWindow');
        this.timeWindowFetcher._startGetter = makeTimeFct(core["a" /* default */].utils.propertyEvaluator(fetchConfig.start || 'start'));
        this.timeWindowFetcher._endGetter = makeTimeFct(core["a" /* default */].utils.propertyEvaluator(fetchConfig.end || 'end'));
      }
    }
  }, {
    key: "load",
    value: function load(config) {
      var _this2 = this;

      if (config) {
        this.destroy();
        this.setConfiguration(config);
      }

      this.allData = null;

      if (this.allFetcher) {
        return this.allFetcher.get().then(function (data) {
          return _this2.loadFromData(data);
        });
      }

      return this.loadFromData();
    }
  }, {
    key: "loadFromData",
    value: function loadFromData(data
    /* May be null */
    ) {
      var _this3 = this;

      var actPromise;
      var resaPromise;
      var resourcePromise;
      var consPromise;
      this.activities = [];
      this.activities.byIds = {};
      this.rows = [];
      this.constraints = [];
      this.constraints.byIds = {};
      this.resources = [];
      this.resources.byIds = {};
      this.reservations = [];
      this.reservations.byIds = {};
      this.timeWindow = null;
      this.flat = true;
      var wnd;
      var wndPromise;

      if (this.timeWindowFetcher) {
        wndPromise = this.timeWindowFetcher.get(data).then(function (obj) {
          return {
            start: _this3.timeWindowFetcher._startGetter(obj),
            end: _this3.timeWindowFetcher._endGetter(obj)
          };
        });
      } else {
        // If time window not provided with a specified data fetcher, we compute it.
        wnd = {
          start: Number.MAX_VALUE,
          end: 0
        } || null;
      }

      var resourceGantt = this.gantt.isResourceGantt();

      if (!this.resourceFetcher && !this.activityFetcher) {
        if (resourceGantt) resourcePromise = promise_default.a.resolve([]);else actPromise = promise_default.a.resolve([]);
      } else {
        var timeWindowProcessed = !!wndPromise;

        if (this.resourceFetcher) {
          resourcePromise = this.resourceFetcher.get(data).then(function (resources) {
            // Compute here the time window only if this is resource chart with activities provided along with resources
            var computeTimeWindow = !timeWindowProcessed && resourceGantt && _this3.resourceFetcher._activityGetter;
            _this3.resources = _this3.createTreeNodes(resources, _this3.resourceFetcher, false, computeTimeWindow && wnd);
            timeWindowProcessed = timeWindowProcessed || computeTimeWindow;
            return _this3.resources;
          });
        }

        if (this.activityFetcher && (!resourceGantt || !this.resourceFetcher || !this.resourceFetcher._activityGetter)) {
          actPromise = this.activityFetcher.get(data).then(function (activities) {
            // Compute here the time window only if a time window fetcher was not specified
            _this3.activities = _this3.createTreeNodes(activities, _this3.activityFetcher, true, !timeWindowProcessed && wnd);
            return _this3.activities;
          });
        }

        if (this.reservationFetcher) {
          resaPromise = this.reservationFetcher.get(data);
        }

        if (this.constraintFetcher) {
          consPromise = this.constraintFetcher.get(data);
        }
      }

      return promise_default.a.all([resourcePromise, actPromise, resaPromise, consPromise, wndPromise]).then(function (_ref) {
        var _ref2 = _slicedToArray(_ref, 5),
            resources = _ref2[0],
            activities = _ref2[1],
            resas = _ref2[2],
            cons = _ref2[3],
            wndResult = _ref2[4];

        // If assigning activities to resources through a resource ID getter on activities
        if (_this3.activityFetcher && _this3.activityFetcher._resourceIdGetter) {
          _this3.createReservationsFromActivityResources(resourceGantt ? _this3.resources.byIds : _this3.activities.byIds);
        }

        if (resas && resas.length) {
          _this3.createReservations(resas);
        }

        if (cons && cons.length) {
          _this3.createConstraints(cons);
        }

        wndResult = wndResult || wnd;

        if (!wndResult.end && resourceGantt && activities && activities.length) {
          // Gantt without reservations, process time window from unused activities
          wndResult.start = activities[0].start;
          wndResult.end = activities[0].end;

          for (var i = activities.length - 1; i; i--) {
            updateTimeWindow(wndResult, activities[i]);
          }
        }

        if (wndResult.end) {
          _this3.timeWindow = {
            start: wndResult.start,
            end: wndResult.end
          };

          _this3.triggerEvent(core["a" /* default */].events.TIME_WINDOW_CHANGED, _this3.timeWindow);
        }

        return _this3.rows = resourceGantt ? resources : activities;
      });
    }
  }, {
    key: "createReservations",
    value: function createReservations(data) {
      this.reservations = [];
      this.reservations.byIds = {};

      if (!data || data.length === 0) {
        return;
      }

      var resByIds = this.resources.byIds;
      var actByIds = this.activities.byIds;
      var resIdGetter = this.reservationFetcher._resourceGetter;
      var actIdGetter = this.reservationFetcher._activityGetter;

      for (var i = 0, resId, res, actId, act, len = data.length, resa; i < len; ++i) {
        resa = data[i];
        resId = resIdGetter(resa);

        if ((resId || resId === 0) && (res = resByIds[resId])) {
          actId = actIdGetter(resa);

          if ((actId || actId === 0) && (act = actByIds[actId])) {
            (res.activities || (res.activities = [])).push(resa = this.createReservationNode(act, res));
            this.reservations.push(resa);

            if (resa.id) {
              this.reservations.byIds[resa.id] = resa;
            }
          } else if (actId) {
            console.error("Cannot find activity \"".concat(actId, "\" for reservation ").concat(stringify_default()(resa)));
          } else {
            console.error("No activity specified for reservation ".concat(stringify_default()(resa)));
          }
        } else if (resId || resId === 0) {
          console.error("Cannot find resource \"".concat(resId, "\" for reservation ").concat(stringify_default()(resa)));
        } else {
          console.error("No resource specified for reservation ".concat(stringify_default()(resa)));
        }
      }
    }
  }, {
    key: "createReservationsFromActivityResources",
    value: function createReservationsFromActivityResources(rowByIds) {
      var resGetter = this.activityFetcher._resourceIdGetter;

      for (var i = 0, resId, res, len = this.activities.length, actNode; i < len; ++i) {
        resId = resGetter((actNode = this.activities[i]).getData());

        if (resId || resId === 0) {
          if (res = rowByIds[resId]) {
            (res.activities || (res.activities = [])).push(this.createReservationNode(actNode, res));
          } else {
            console.error("Cannot find resource \"".concat(resId, "\" for activity ").concat(stringify_default()(actNode.getData())));
          }
        } else {
          console.error("No resource specified for activity ".concat(stringify_default()(actNode.getData())));
        }
      }
    }
  }, {
    key: "createConstraints",
    value: function createConstraints(data) {
      var len = data.length;
      var consNodes = new Array(len);
      consNodes.byIds = {};

      for (var i = 0, node; i < len; ++i) {
        consNodes[i] = node = this.createConstraintNode(data[i], this.activities, i);
        consNodes.byIds[node.id] = node;
      }

      return this.constraints = consNodes;
    }
  }, {
    key: "isResourceGanttModel",
    value: function isResourceGanttModel() {
      return !!this.resourceFetcher;
    }
  }, {
    key: "isFlat",
    value: function isFlat() {
      return this.flat;
    }
  }, {
    key: "createActivityNode",
    value: function createActivityNode(activity) {
      var node = create_default()(activity);

      node.id = this.activityFetcher._idGetter(activity);
      node.name = this.activityFetcher._nameGetter(activity);
      node.start = this.activityFetcher._startGetter(activity);
      node.end = this.activityFetcher._endGetter(activity);

      node.getData = function () {
        return activity;
      };

      node.gantt = this.gantt;

      node.getObjectType = function () {
        return core["a" /* default */].ObjectTypes.Activity;
      };

      return node;
    }
  }, {
    key: "createReservationNode",
    value: function createReservationNode(activity, row) {
      var node = create_default()(activity);

      node.row = row;
      node.gantt = this.gantt;

      node.getObjectType = function () {
        return core["a" /* default */].ObjectTypes.Activity;
      }; // No reservation type as for now an activity acts as a reservation as the copy objects points to a row


      return node;
    }
  }, {
    key: "createConstraintNode",
    value: function createConstraintNode(cons, activities, index) {
      var id = this.constraintFetcher._fromGetter(cons);

      if (!id) {
        throw "No from activity specified for the constraint ".concat(stringify_default()(cons));
      }

      var from = activities.byIds[id];

      if (!from) {
        throw "No activity could be found with the ID ".concat(id, "for constraint ").concat(stringify_default()(cons));
      }

      id = this.constraintFetcher._toGetter(cons);

      if (!id) {
        throw "No to activity specified for the constraint ".concat(stringify_default()(cons));
      }

      var to = activities.byIds[id];

      if (!to) {
        throw "No activity could be found with the ID ".concat(id, "for constraint ").concat(stringify_default()(cons));
      }

      var node = create_default()(cons, ConstraintPrototype);

      node.from = from;
      node.to = to;
      node.type = this.constraintFetcher._typeGetter(cons);
      node.gantt = this.gantt;

      node.getData = function () {
        return cons;
      };

      node.id = this.constraintFetcher._idGetter ? this.constraintFetcher._idGetter(cons) : "cons_".concat(index);
      if (!from.consOuts) from.consOuts = [node];else from.consOuts.push(node);
      if (!to.consIns) to.consIns = [node];else to.consIns.push(node);

      node.getObjectType = function () {
        return core["a" /* default */].ObjectTypes.Constraint;
      };

      return node;
    }
  }, {
    key: "createTreeNode",
    value: function createTreeNode(id, data) {
      var row = create_default()(data);

      row.id = id;
      row.gantt = this.gantt;

      row.getData = function () {
        return data;
      };

      row.hasAncestor = function (node) {
        for (var p = row.parent; p; p = p.parent) {
          if (p === node) {
            return true;
          }
        }

        return true;
      };

      row.getAncestorsCount = function () {
        var count = 0;

        for (var parent = row.parent; parent; parent = parent.parent) {
          count++;
        }

        return count;
      };

      row.setRowHeight = function (row, h) {};

      row.isGanttRow = function () {
        return true;
      };

      return row;
    }
  }, {
    key: "createTreeNodes",
    value: function createTreeNodes(data, rowFetcher, isActivity, wnd) {
      var result = new Array(data.length);
      var byIds = result.byIds = {};
      var children = {};
      var row;
      var origData;
      var parentId;
      var arr;
      var i;
      var resultIndex;
      var id;
      var activities;
      var iAct;
      var len;
      var roots = [];
      var allActivities = this.activities;
      var actNode;
      var startGetter;
      var endGetter;
      var actsGetter;
      var act;

      if (isActivity || (actsGetter = rowFetcher._activityGetter)) {
        startGetter = this.activityFetcher._startGetter;
        endGetter = this.activityFetcher._endGetter;
      }
      /* function sortNodes(a, b) {
        // Put child nodes with children first
        const aChildren = children[a.id], bChildren = children[b.id];
        return aChildren && aChildren.length
            ? (bChildren && bChildren.length? 0 : -1) : (bChildren && bChildren.length? 1 : 0)
      } */


      function addNode(node, parentNode) {
        result[resultIndex++] = node;
        node.parent = parentNode; // const childNodes = children[node.id].sort(sortNodes);

        var childNodes = children[node.id];
        node.children = childNodes;
        var childCount = childNodes.length;

        for (var iChild = 0; iChild < childCount; ++iChild) {
          addNode(childNodes[iChild], node);
        }

        if (isActivity && childCount && (!node.start || !node.end)) {
          if (!node.start) {
            node.start = childNodes[0].start;
          }

          if (!node.end) {
            node.end = childNodes[0].end;
          }

          for (var _iChild = 1; _iChild < childCount; ++_iChild) {
            updateTimeWindow(node, childNodes[_iChild]);
          }
        }

        if (wnd && isActivity) {
          updateTimeWindow(wnd, node);
        }
      }

      var idGetter = rowFetcher._idGetter;
      var nameGetter = rowFetcher._nameGetter;
      var parentIdGetter = rowFetcher._parentIdGetter;

      for (i = 0, len = data.length; i < len; ++i) {
        origData = data[i];
        parentId = parentIdGetter ? parentIdGetter(origData) : null;
        id = idGetter(origData);
        row = this.createTreeNode(id, origData, children[id]);

        if (!children[id]) {
          children[id] = [];
        }

        if (nameGetter) {
          row.name = nameGetter(origData);
        }

        if (isActivity) {
          row.start = rowFetcher._startGetter(origData);
          row.end = rowFetcher._endGetter(origData);
          row.activities = [row];

          row.getObjectType = function () {
            return core["a" /* default */].ObjectTypes.Activity;
          };
        } else {
          row.getObjectType = function () {
            return core["a" /* default */].ObjectTypes.Resource;
          };
        } // Process the time window


        if (wnd) {
          if (!isActivity) {
            activities = actsGetter(origData);

            if (activities) {
              row.activities = new Array(activities.length);

              for (iAct = 0; iAct < activities.length; ++iAct) {
                actNode = this.createActivityNode(act = activities[iAct]);
                allActivities.push(actNode);

                if (actNode.id) {
                  allActivities.byIds[actNode.id] = actNode;
                }

                row.activities[iAct] = this.createReservationNode(updateTimeWindow(wnd, actNode), row);
              }
            } else {
              row.activities = [];
            }
          } else {
            // We are defining an activity chart, rows are activities
            updateTimeWindow(wnd, row);
          }
        }

        byIds[id] = row;

        if (parentId || parentId === 0) {
          arr = children[parentId];

          if (!arr) {
            children[parentId] = [row];
          } else {
            arr.push(row);
          }
        } else {
          roots.push(row);
        }
      }

      if (this.gantt.isResourceGantt() !== isActivity) {
        this.flat = roots.length === data.length;
      }

      for (i = 0, len = roots.length, resultIndex = 0; i < len; ++i) {
        addNode(roots[i]);
      }

      return result;
    }
  }, {
    key: "destroy",
    value: function destroy() {
      if (this.allFetcher && this.allFetcher.destroy) {
        this.allFetcher.destroy();
      }

      this.allFetcher = null;

      if (this.resourceFetcher && this.resourceFetcher.destroy) {
        this.resourceFetcher.destroy();
      }

      this.resourceFetcher = null;
      this.resources = null;

      if (this.activityFetcher && this.activityFetcher.destroy) {
        this.activityFetcher.destroy();
      }

      this.activityFetcher = null;
      this.activities = null;

      if (this.reservationFetcher && this.reservationFetcher.destroy) {
        this.reservationFetcher.destroy();
      }

      this.reservationFetcher = null;
      this.reservations = null;

      if (this.constraintFetcher && this.constraintFetcher.destroy) {
        this.constraintFetcher.destroy();
      }

      this.constraintFetcher = null;
      this.constraints = null;

      if (this.timeWindowFetcher && this.timeWindowFetcher.destroy) {
        this.timeWindowFetcher.destroy();
      }

      this.timeWindowFetcher = null;
      this.timeWindow = null;
    }
  }, {
    key: "getActivity",
    value: function getActivity(param) {
      if (core["a" /* default */].utils.isString(param)) {
        return this.activities && this.activities.byIds[param];
      }

      if (this.activities) {
        for (var i = 0, count = this.activities.length; i < count; ++i) {
          if (this.activities[i].getData() === param) {
            return this.activities[i];
          }
        }
      }

      return null;
    }
  }]);

  return GanttModel;
}(core["a" /* default */].components.GanttModel);


core["a" /* default */].components.GanttModel = model_GanttModel;
// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/number/parse-int.js
var number_parse_int = __webpack_require__(17);
var number_parse_int_default = /*#__PURE__*/__webpack_require__.n(number_parse_int);

// CONCATENATED MODULE: ./src/loadchart/loadchartctrl.js




var loadchartctrl_LoadResourceChartCtrl =
/*#__PURE__*/
function () {
  function LoadResourceChartCtrl(gantt, visible, config) {
    var _this = this;

    Object(classCallCheck["a" /* default */])(this, LoadResourceChartCtrl);

    this.gantt = gantt;
    this.visible = visible;
    this.loadCharts = [];
    var selectionHandler = gantt.selection;
    var ctlr = this;
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTION_CHANGED, function (e, sels) {
      // Selections array is sorted from the last selected object to the first.
      // To keep the same colors associated with the resources when changing
      // the selection (Ctrl + Click),
      // we need to reverse this order so that the first selected object remains always
      // at the same array index.
      ctlr.setResources(sels.concat([]).reverse());
    });
    selectionHandler.on(core["a" /* default */].events.ROW_UNSELECTED, function (e, sels) {
      return _this.unselectRows(sels, _this.visible);
    });
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTION_CLEARED, function (e, sels) {
      return _this.unselectRows(sels, _this.visible);
    });
    this.layoutSynch = this.gantt.synchLayout({
      timeTableBoundsChanged: function timeTableBoundsChanged(bounds) {
        ctlr.loadCharts.forEach(function (loadChart) {
          return loadChart.setTimeLineBounds(ctlr.layoutSynch.convertBounds(bounds, loadChart.getTimeLineNode));
        });
      },
      timeWindowChanged: function timeWindowChanged(start, end) {
        ctlr.timeWindowChanged(start, end);
      },
      timeLineSizeChanged: function timeLineSizeChanged(width) {
        ctlr.loadCharts.forEach(function (loadChart) {
          return loadChart.setTimeLineWidth(width);
        });
      },
      timeLineInitialized: function timeLineInitialized() {},
      timeLineScrolled: function timeLineScrolled(x) {
        ctlr.loadCharts.forEach(function (loadChart) {
          return loadChart.setTimeLineScrollLeft(x);
        });
      }
    });
    this.setConfiguration(config);
  }

  Object(createClass["a" /* default */])(LoadResourceChartCtrl, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this2 = this;

      var RendererClass = core["a" /* default */].components.Renderer.impl || core["a" /* default */].components.Renderer;
      this.resourceRenderer = new RendererClass(core["a" /* default */].utils.mergeObjects({
        background: {
          getValue: function getValue(res) {
            return _this2.resources.indexOf(res);
          }
        }
      }, config && config.renderer), {}, this.gantt);
    }
  }, {
    key: "getRowBackground",
    value: function getRowBackground(row) {
      return row.backgroundColor;
    }
  }, {
    key: "addLoadResourceChart",
    value: function addLoadResourceChart(loadChart) {
      this.loadCharts.push(loadChart);
      loadChart.setResourceRenderer(this.resourceRenderer);
    }
  }, {
    key: "addChildResources",
    value: function addChildResources(resources, a) {
      for (var i = 0, res; i < resources.length; i++) {
        res = resources[i];
        a.push(res);

        if (res.children) {
          this.addChildResources(res.children, a);
        }
      }

      return a;
    }
  }, {
    key: "setVisible",
    value: function setVisible(visible) {
      var _this3 = this;

      if (this.visible !== visible) {
        this.visible = visible;
        this.loadCharts.forEach(function (loadChart) {
          return loadChart.setVisible(visible);
        });

        if (this.visible) {
          if (this.savedTimeW) {
            var _this$savedTimeW = this.savedTimeW,
                start = _this$savedTimeW.start,
                end = _this$savedTimeW.end;
            delete this.savedTimeW;
            this.setTimeWindow(start, end, function () {
              if (_this3.resources && _this3.resources.length) {
                _this3.setResources(_this3.resources); // Forces a row redraw

              }
            });
          } else if (this.resources && this.resources.length) {
            this.setResources(this.resources); // Forces a row redraw
          }

          if (this.savedScrollLeft) {
            var left = this.savedScrollLeft;
            delete this.savedScrollLeft;
            this.setScrollLeft(left);
          }
        } else if (this.resources && this.resources.length) {
          this.unselectRows(this.resources, true);
        }
      }
    }
  }, {
    key: "isVisible",
    value: function isVisible() {
      return this.visible;
    }
  }, {
    key: "timeWindowChanged",
    value: function timeWindowChanged(start, end) {
      if (!this.visible) {
        this.savedTimeW = {
          start: start,
          end: end
        };
      } else {
        this.setTimeWindow(start, end);
      }
    }
  }, {
    key: "setTimeWindow",
    value: function setTimeWindow(start, end, onInit) {
      this.loadCharts.forEach(function (loadChart) {
        return loadChart.setTimeWindow(start, end, onInit);
      });
    }
  }, {
    key: "timeTableXScrolled",
    value: function timeTableXScrolled(left) {
      if (!this.visible) {
        this.savedScrollLeft = left;
      } else this.setScrollLeft(left);
    }
  }, {
    key: "setScrollLeft",
    value: function setScrollLeft(left) {
      this.loadCharts.forEach(function (loadChart) {
        return loadChart.setScrollLeft(left);
      });
    }
  }, {
    key: "setResources",
    value: function setResources(resources) {
      var allRes = this.addChildResources(resources, []);
      this.resources = allRes;

      if (this.visible) {
        for (var i = 0, count = allRes.length, res; i < count; i++) {
          res = allRes[i];
          res.backgroundColor = this.visible && this.resourceRenderer.background(res);
        }

        this.gantt.drawRows(this.resources);
        this.loadCharts.forEach(function (loadChart) {
          loadChart.setResources(allRes);
          loadChart.draw();
        });
      }
    }
  }, {
    key: "unselectRows",
    value: function unselectRows(rows, redraw) {
      var all = [];

      var unselectDeep = function unselectDeep(ar) {
        ar.forEach(function (row) {
          all.push(row);
          row.backgroundColor = undefined;

          if (row.children) {
            unselectDeep(row.children);
          }
        });
      };

      unselectDeep(rows);

      if (redraw) {
        this.gantt.drawRows(all);
      }
    }
  }, {
    key: "destroy",
    value: function destroy() {
      if (this.layoutSynch) {
        this.layoutSynch.disconnect();
        this.layoutSynch = null;
      }
    }
  }]);

  return LoadResourceChartCtrl;
}();


// EXTERNAL MODULE: ./src/loadchart/loadchart.js
var loadchart = __webpack_require__(83);

// CONCATENATED MODULE: ./src/loadchart/index.js




var LOAD_RESOURCE_CHART_OPENED = 'load-resource-chart-opened';
var LOAD_RESOURCE_CHART_CLOSED = 'load-resource-chart-closed';
var GANTT_LOAD_RESOURCE_CHART = 'gantt-load-resource-chart';
// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/number/is-nan.js
var is_nan = __webpack_require__(42);
var is_nan_default = /*#__PURE__*/__webpack_require__.n(is_nan);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/number/is-integer.js
var is_integer = __webpack_require__(63);
var is_integer_default = /*#__PURE__*/__webpack_require__.n(is_integer);

// CONCATENATED MODULE: ./src/core/utils.js













var GanttStrings = {
  'Gantt.MoveActivity': 'Move "{name}"',
  'Gantt.ChangeActivityRow': 'Change "{name}" of row',
  'timeLine.changeRowItem.fmt': '<div class="dragg-item-content"><h2 class="dragg-title">{title}</h2><table>' + '<tr><td class="dragg-item-property">From row</td><td class="table-separator"></td><td class="dragg-item-value">{start}</td></tr>' + '<tr><td class="dragg-item-property">At date</td><td class="table-separator"></td><td class="dragg-item-value">{startRow}</td></tr>' + '<tr><td class="dragg-item-property">To row</td><td class="table-separator"></td><td class="dragg-item-value">{current}</td></tr>' + '<tr><td class="dragg-item-property">At date</td><td class="table-separator"></td><td class="dragg-item-value">{currentRow}</td></tr>' + '</table></div>',
  'timeLine.newTimeItem.fmt': '<div class="dragg-item-content"><h2 class="dragg-title {draggStatusClass}">{title}</h2><table>' + '<tr><td class="dragg-item-property">From</td><td class="table-separator"></td><td class="dragg-item-value">{start}</td></tr>' + '<tr><td class="dragg-item-property">To</td><td class="table-separator"></td><td class="dragg-item-value">{current}</td></tr>' + '</table></div>',
  'gantt.loading': 'Loading',
  'gantt.error.details': 'Details',
  'gantt.error.title.fmt': '{msg} : {title}',
  'gantt.toolbar.mini.text': 'Mini',
  'gantt.toolbar.minimize.text': 'Compact',
  'gantt.toolbar.normal.text': 'Normal',
  'gantt.toolbar.mini.tooltip': 'Change row height',
  'gantt.toolbar.fit.tooltip': 'Fit',
  'gantt.toolbar.refresh.text': 'Refresh',
  'gantt.toolbar.refresh.tooltip': 'Refresh',
  'gantt.toolbar.zoomIn.tooltip': 'Zoom In',
  'gantt.toolbar.zoomOut.tooltip': 'Zoom Out',
  'gantt.loadResourceChart.load.title': 'Load',
  'gantt.loadResourceChart.show.tooltip': 'Show Load chart',
  'gantt.loadResourceChart.hide.tooltip': 'Hide Load chart',
  'gantt.loadResourceChart.noSelection.title': 'Select one or more resources to display in the load chart',
  'gantt.constraintChart.from': 'From',
  'gantt.constraintChart.to': 'To',
  'gantt.constraintChart.type': 'Type',
  'gantt.constraintChart.start.start': 'Start to Start',
  'gantt.constraintChart.start.end': 'End to Start',
  'gantt.constraintChart.end.end': 'End to End',
  'gantt.constraintChart.end.start': 'End to Start',
  'gantt.name': 'Name',
  'gantt.id': 'Id',
  'gantt.start': 'Start',
  'gantt.end': 'End'
}; // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Number/isInteger

Number.isInteger = is_integer_default.a || function (value) {
  return typeof value === 'number' && isFinite(value) && Math.floor(value) === value;
};

core["a" /* default */].utils = {
  defaultDateFormat: 'mmm d, hh:MM:ss TT',
  createDateParser: function createDateParser(format) {
    var i = 0;
    var fmt = {};
    var year = 'year';
    var month = 'month';
    var day = 'day';
    var hour = 'hour';
    var min = 'min';
    var secs = 'secs';
    var millis = 'millis';
    var convertor = {
      yyyy: year,
      yy: year,
      y: year,
      M: month,
      MM: month,
      MMMM: month,
      d: day,
      dd: day,
      H: hour,
      HH: hour,
      m: min,
      mm: min,
      s: secs,
      ss: secs,
      S: millis,
      SS: millis,
      SSS: millis
    };
    format.replace(/(yyyy|yy|y|MMMM|MM|M|dd|d|HH|H|mm|m|ss|s|SSS|SS|S)/g, function (part) {
      fmt[convertor[part]] = i++;
    });
    return function (s) {
      if (!s) return 0;
      var parts = s.match(/(\d+)/g);
      return new Date(parts[fmt[year]], parts[fmt[month]] - 1, parts[fmt[day]], parts[fmt[hour]], parts[fmt[min]], parts[fmt[secs]]).getTime();
    };
  },
  closest: function closest(elt, selector) {},
  mergeObjects: function mergeObjects(target) {
    if (!target) {
      target = {};
    }

    for (var _i = 1, obj, prop; _i < arguments.length; _i++) {
      if (obj = arguments[_i]) {
        for (var j = 0, keys = keys_default()(obj); j < keys.length; j++) {
          prop = keys[j];
          target[prop] = obj[prop];
        }
      }
    }

    return target;
  },
  getChild: function getChild(elt, tagname) {
    tagname = tagname ? tagname.toUpperCase() : null;

    for (var _i2 = 0; _i2 < elt.childNodes.length; _i2++) {
      if (!tagname || elt.childNodes[_i2].tagName.toUpperCase() === tagname) {
        return elt.childNodes[_i2];
      }
    }

    return null;
  },
  isArray: function isArray(obj) {
    // https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Array/isArray
    if (!is_array_default.a) {
      Array.isArray = function (arg) {
        return Object.prototype.toString.call(arg) === '[object Array]';
      };
    }

    return is_array_default()(obj);
  },
  isString: function isString(obj) {
    return typeof obj === 'string' || obj instanceof String;
  },
  isFunction: function isFunction(obj) {
    return typeof obj === 'function';
  },
  isDomElement: function isDomElement(obj) {
    return obj.nodeType > 0;
    /* return (
        typeof HTMLElement === "object"
            ? o instanceof HTMLElement :  o && typeof o === "object" && o !== null && o.nodeType === 1 && typeof o.nodeName==="string"
    ) */
  },
  hasClass: function hasClass(el, className) {
    if (el.classList) {
      return el.classList.contains(className);
    }

    if (el.className && el.className.match) {
      // Classname strings for SVG elements don't have some string methods including replace or match
      return !!el.className.match(new RegExp("(\\s|^)".concat(className, "(\\s|$)")));
    }

    return false;
  },
  addClass: function addClass(el, className) {
    if (el.classList) {
      el.classList.add(className);
    } else if (!this.hasClass(el, className)) {
      if (el.className) {
        el.className += " ".concat(className);
      } else {
        el.className = className;
      }
    }
  },
  removeClass: function removeClass(el, className) {
    if (el.classList) {
      el.classList.remove(className);
    } else if (this.hasClass(el, className)) {
      var reg = new RegExp("(\\s|^)".concat(className, "(\\s|$)"));
      el.className = el.className.replace(reg, ' ');
    }
  },
  toggleClass: function toggleClass(el, classname, set) {
    if (set === undefined) {
      if (this.hasClass(el, classname)) {
        this.removeClass(el, classname);
      } else {
        this.addClass(el, classname);
      }
    } else if (set) {
      this.addClass(el, classname);
    } else {
      this.removeClass(el, classname);
    }
  },
  html: function html(node, htmlText) {
    throw new Error('Gantt.utils.html not supported');
  },
  walkToAncestor: function walkToAncestor(parent, elt, cb, param) {
    function makeArrayMatcher(array) {
      return function (obj) {
        for (var _i3 = 0; _i3 < array.length; _i3++) {
          if (obj === array[_i3]) {
            return true;
          }
        }

        return false;
      };
    }

    var matcher = typeof parent === 'function' ? parent : this.isArray(parent) ? makeArrayMatcher(parent) : function (obj) {
      return parent === obj;
    };

    for (var p = elt, parentNode; p && p !== document || matcher(p);) {
      if (matcher(p)) {
        return param === undefined && p || param;
      }

      parentNode = p.parentNode;

      if (parentNode === document && !matcher(document)) {
        return;
      }

      if (cb) {
        var result = cb(parentNode, p, param);

        if (result !== undefined) {
          param = result;
        }
      }

      p = parentNode;
    }
  },
  getWindowScrollLeft: function getWindowScrollLeft() {
    var t; // https://developer.mozilla.org/en-US/docs/Web/API/Element/getBoundingClientRect for this browser safe implementation of scrollLeft

    return (((t = document.documentElement) || (t = document.body.parentNode)) && typeof t.scrollLeft === 'number' ? t : document.body).scrollLeft;
  },
  getWindowScrollTop: function getWindowScrollTop() {
    var t; // https://developer.mozilla.org/en-US/docs/Web/API/Element/getBoundingClientRect for this browser safe implementation of scrollTop

    return (((t = document.documentElement) || (t = document.body.parentNode)) && typeof t.scrollTop === 'number' ? t : document.body).scrollTop;
  },
  getScreenPoint: function getScreenPoint(elt, pt) {
    var bounds = elt.getBoundingClientRect();
    return {
      x: bounds.left + this.getWindowScrollLeft() + (pt ? pt.x : 0),
      y: bounds.top + this.getWindowScrollTop() + (pt ? pt.y : 0)
    };
  },
  getHeight: function getHeight(elt) {
    // In firefox, actual row heights can be non-integers, which results in elt.offsetHeight (integer)
    // being different from the actual display size, as the rounding done in the browser display and the one returned
    // from offsetHeight can different. A table row of height 32.5 is displayed with 32px and have its offsetHeight
    // returning 33...
    return elt.offsetHeight;
  },
  offsetParent: function offsetParent(elt) {
    return elt.parentNode; // Should be the closest ancestor with positioned style (fixed, relative or absolute)
  },
  ajax: function ajax(url, params) {},
  propertyEvaluator: function propertyEvaluator(path) {
    if (this.isFunction(path)) {
      return path;
    }

    var ar = path.split('.');

    if (ar.length > 1) {
      return function (obj) {
        for (var _i4 = 0; obj && _i4 < ar.length; _i4++) {
          obj = obj[ar[_i4]];
        }

        return obj;
      };
    }

    if (ar.length === 1) {
      return function (obj) {
        return obj[path];
      };
    }

    return function (obj) {
      return obj;
    };
  },
  stringMatches: function stringMatches(s, search) {
    return s.toLocaleLowerCase().indexOf(search.toLowerCase()) > -1;
  },
  getString: function getString(key, defaultValue) {
    return GanttStrings[key] || defaultValue || key;
  },
  formatString: function formatString(tpl, obj) {
    tpl = this.getString(tpl, tpl);
    return tpl.replace(/\{(\w+)\}/g, function (_, key) {
      return obj[key];
    });
  },
  addEventListener: function addEventListener(target, evt, cb, capture) {
    if (target.addEventListener) {
      target.addEventListener(evt, cb, capture);
    } else if (target.attachEvent) {
      target.attachEvent("on".concat(evt), cb);
    }
  },
  removeEventListener: function removeEventListener(target, evt, cb) {
    if (target.removeEventListener) {
      target.removeEventListener(evt, cb, false);
    } else if (target.detachEvent) {
      target.detachEvent("on".concat(evt), cb);
    }
  },
  "implements": function _implements(clazz) {
    for (var _i5 = 1, count = arguments.length; _i5 < count; _i5++) {
      var toImplement = arguments[_i5];

      for (var key in toImplement) {
        if (toImplement.hasOwnProperty(key)) {
          clazz[key] = toImplement[key];
        }
      }
    }

    return clazz;
  },
  detectIE: function detectIE() {
    // https://codepen.io/gapcode/pen/vEJNZN
    var ua = window.navigator.userAgent; // Test values; Uncomment to check result …
    // IE 10
    // ua = 'Mozilla/5.0 (compatible; MSIE 10.0; Windows NT 6.2; Trident/6.0)';
    // IE 11
    // ua = 'Mozilla/5.0 (Windows NT 6.3; Trident/7.0; rv:11.0) like Gecko';
    // Edge 12 (Spartan)
    // ua = 'Mozilla/5.0 (Windows NT 10.0; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/39.0.2171.71 Safari/537.36 Edge/12.0';
    // Edge 13
    // ua = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/46.0.2486.0 Safari/537.36 Edge/13.10586';

    var msie = ua.indexOf('MSIE ');

    if (msie > 0) {
      // IE 10 or older => return version number
      return parse_int_default()(ua.substring(msie + 5, ua.indexOf('.', msie)), 10);
    }

    var trident = ua.indexOf('Trident/');

    if (trident > 0) {
      // IE 11 => return version number
      var rv = ua.indexOf('rv:');
      return parse_int_default()(ua.substring(rv + 3, ua.indexOf('.', rv)), 10);
    }

    var edge = ua.indexOf('Edge/');

    if (edge > 0) {
      // Edge (IE 12+) => return version number
      return parse_int_default()(ua.substring(edge + 5, ua.indexOf('.', edge)), 10);
    } // other browser


    return false;
  }
};
core["a" /* default */].utils.isInteger = is_integer_default.a;

core["a" /* default */].utils.appendSVG = function (elt, cfg) {
  var svgElt = document.createElementNS('http://www.w3.org/2000/svg', 'svg'); // svgElt.setAttribute("viewBox", "0 0 " + config.svg.width + " " + config.svg.height);

  svgElt.setAttribute('viewBox', cfg.viewBox);
  svgElt.style.x = '0';
  svgElt.style.y = '0';
  svgElt.style.width = "".concat(cfg.width, "px");
  svgElt.style.height = "".concat(cfg.height, "px"); // Overrides the transformY(4px) from analytics CSS

  svgElt.style.webkitTransform = 'none';
  svgElt.style.transform = 'none';

  if (cfg.margin) {
    svgElt.style.margin = cfg.margin;
  } else {
    svgElt.style.margin = '0';
  }

  var paths = is_array_default()(cfg.paths) && cfg.paths || [cfg.paths];
  paths.forEach(function (p) {
    var pathElt = document.createElementNS('http://www.w3.org/2000/svg', 'path');
    pathElt.setAttribute('d', p);
    svgElt.appendChild(pathElt);
  });
  elt.appendChild(svgElt);
}; //
// DataFetcher
//

/**
 * Utility class for accessing remote or local data
 * @
 * @param config Configuration for accessing data.
 * @constructor
 */


var utils_DataFetcher =
/**
 * Constructs a new data fetcher associated with specified context and parameterized with the provided
 * options.
 * @param config parameters describing the access to data.
 * @param privateFields (Array) list of fields to not take into account when parsing the configuration.
 * @param settings the settings object to provide contextual info to user's callbacks.
 */
function DataFetcher(config, privateFields, settings) {
  var _this = this;

  Object(classCallCheck["a" /* default */])(this, DataFetcher);

  var createEntry = function createEntry(name, cfg) {
    var ctx = config.context || config;

    var postProcess = function postProcess(data) {
      var p = data && data.then && data || promise_default.a.resolve(data);

      if (config.success) {
        p = p.then(function (data) {
          return config.success.call(ctx, data, settings);
        });
      }

      return p;
    };

    if (core["a" /* default */].utils.isFunction(cfg)) {
      _this[name] = function () {
        try {
          for (var _len = arguments.length, params = new Array(_len), _key = 0; _key < _len; _key++) {
            params[_key] = arguments[_key];
          }

          return cfg.apply(settings, params);
        } catch (err) {
          return promise_default.a.reject(err);
        }
      };
    } else if (config.url) {
      // make the ajax call
      var ajaxConfig = core["a" /* default */].utils.mergeObjects({
        success: cfg.success,
        settings: settings
      }, cfg.ajaxConfig);

      _this[name] = function () {
        return core["a" /* default */].utils.ajax(cfg.url, ajaxConfig);
      };
    } else if (core["a" /* default */].utils.isArray(config)) {
      _this[name] = function () {
        return promise_default.a.resolve(config);
      };
    } else {
      var data = config.data;

      if (data) {
        if (core["a" /* default */].utils.isString(data)) {
          if (!ctx) {
            throw "No context defined for data fetcher ".concat(name);
          }

          var propEval = core["a" /* default */].utils.propertyEvaluator(data);
          var fct = typeof ctx === 'function';

          _this[name] = function (model) {
            model = model || (fct ? ctx() : ctx);

            if (model && model.then) {
              // Check if promise. See https://promisesaplus.com/#point-53
              return model.then(function (res) {
                return postProcess(propEval(res));
              });
            }

            return postProcess(propEval(model));
          };
        } else if (core["a" /* default */].utils.isFunction(data)) {
          var _fct = typeof ctx === 'function';

          _this[name] = function (model) {
            model = model || (_fct ? ctx() : ctx);

            if (model && model.then) {
              // Check if promise. See https://promisesaplus.com/#point-53
              return model.then(function (res) {
                return postProcess(data.call(ctx, model));
              });
            }

            try {
              return postProcess(data.call(ctx, model));
            } catch (err) {
              return promise_default.a.reject(err);
            }
          };
        } else {
          _this[name] = function () {
            return postProcess(data);
          };
        }
      } else {
        throw "Data definition for ".concat(stringify_default()(config), " for '").concat(name, "' does not define ajax parameters nor static data");
      }
    }
  };

  if (core["a" /* default */].utils.isFunction(config)) {
    createEntry('get', config, {});
  } else if (core["a" /* default */].utils.isArray(config)) {
    createEntry('get', config, {});
  } else {
    var defConfig = {
      context: settings
    };
    var entryConfigs = [];
    var useDefault;

    for (var _i6 = 0, prop, keys = keys_default()(config); _i6 < keys.length; _i6++) {
      prop = keys[_i6];

      if (prop === 'data' || prop === 'url' || prop === 'success' || prop === 'context' || prop === 'ajaxConfig') {
        defConfig[prop] = config[prop];
        useDefault = true;
      } else if (!privateFields || privateFields.indexOf(prop) < 0) {
        entryConfigs.push(prop);
        entryConfigs.push(config[prop]);
      }
    }

    for (var _i7 = 0, _prop; _i7 < entryConfigs.length;) {
      _prop = entryConfigs[_i7++];
      createEntry(_prop, useDefault && core["a" /* default */].utils.mergeObjects({}, defConfig, entryConfigs[_i7++]) || entryConfigs[_i7++], defConfig);
    }

    if (!entryConfigs.length && useDefault) {
      createEntry('get', defConfig);
    }
  }
};

core["a" /* default */].components.DataFetcher.impl = utils_DataFetcher; //
// Tooltip
//
// See https://developer.mozilla.org/en-US/docs/Web/Events/wheel

var prefix = '';

var _addEventListener; // detect event model


if (window.addEventListener) {
  _addEventListener = 'addEventListener';
} else {
  _addEventListener = 'attachEvent';
  prefix = 'on';
} // detect available wheel event
// noinspection JSUnresolvedVariable


var support = 'onwheel' in document.createElement('div') ? 'wheel' // Modern browsers support "wheel"
: document.onmousewheel !== undefined ? 'mousewheel' // Webkit and IE support at least "mousewheel"
: 'DOMMouseScroll'; // let's assume that remaining browsers are older Firefox

window.addWheelListener = function (elem, callback, useCapture) {
  _addWheelListener(elem, support, callback, useCapture); // handle MozMousePixelScroll in older Firefox


  if (support === 'DOMMouseScroll') {
    _addWheelListener(elem, 'MozMousePixelScroll', callback, useCapture);
  }
};

function _addWheelListener(elem, eventName, callback, useCapture) {
  elem[_addEventListener](prefix + eventName, support === 'wheel' ? callback : function (originalEvent) {
    !originalEvent && (originalEvent = window.event); // create a normalized event object

    var event = {
      // keep a ref to the original event object
      originalEvent: originalEvent,
      target: originalEvent.target || originalEvent.srcElement,
      type: 'wheel',
      deltaMode: originalEvent.type === 'MozMousePixelScroll' ? 0 : 1,
      deltaX: 0,
      deltaY: 0,
      deltaZ: 0,
      altKey: originalEvent.altKey,
      ctrlKey: originalEvent.ctrlKey,
      shiftKey: originalEvent.shiftKey,
      preventDefault: function preventDefault() {
        originalEvent.preventDefault ? originalEvent.preventDefault() : originalEvent.returnValue = false;
      }
    }; // calculate deltaY (and deltaX) according to the event

    if (support === 'mousewheel') {
      event.deltaY = -1 / 40 * originalEvent.wheelDelta; // Webkit also support wheelDeltaX
      // noinspection JSUnresolvedVariable

      originalEvent.wheelDeltaX && (event.deltaX = -1 / 40 * originalEvent.wheelDeltaX);
    } else {
      event.deltaY = originalEvent.detail;
    } // it's time to fire the callback


    return callback(event);
  }, useCapture || false);
}
/*                                                                                      */

/*                                                                                      */

/*                                  Date formatting                                     */

/*                                                                                      */

/*                                                                                      */


var dateFormat = function () {
  var token = /d{1,4}|m{1,4}|yy(?:yy)?|([HhMsTt])\1?|[LloSZ]|"[^"]*"|'[^']*'/g;
  var timezone = /\b(?:[PMCEA][SDP]T|(?:Pacific|Mountain|Central|Eastern|Atlantic) (?:Standard|Daylight|Prevailing) Time|(?:GMT|UTC)(?:[-+]\d{4})?)\b/g;
  var timezoneClip = /[^-+\dA-Z]/g;

  var pad = function pad(val, len) {
    val = String(val);
    len = len || 2;

    while (val.length < len) {
      val = "0".concat(val);
    }

    return val;
  }; // Regexes and supporting functions are cached through closure


  return function (date, mask, utc) {
    var dF = dateFormat; // You can't provide utc if you skip other args (use the "UTC:" mask prefix)

    if (arguments.length === 1 && Object.prototype.toString.call(date) === '[object String]' && !/\d/.test(date)) {
      mask = date;
      date = undefined;
    } // Passing date through Date applies Date.parse, if necessary


    date = date ? new Date(date) : new Date();
    if (is_nan_default()(date)) throw SyntaxError('invalid date');
    mask = String(dF.masks[mask] || mask || dF.masks["default"]); // Allow setting the utc argument via the mask

    if (mask.slice(0, 4) === 'UTC:') {
      mask = mask.slice(4);
      utc = true;
    }

    var _ = utc ? 'getUTC' : 'get';

    var d = date["".concat(_, "Date")]();
    var D = date["".concat(_, "Day")]();
    var m = date["".concat(_, "Month")]();
    var y = date["".concat(_, "FullYear")]();
    var H = date["".concat(_, "Hours")]();
    var M = date["".concat(_, "Minutes")]();
    var s = date["".concat(_, "Seconds")]();
    var L = date["".concat(_, "Milliseconds")]();
    var o = utc ? 0 : date.getTimezoneOffset();
    var flags = {
      d: d,
      dd: pad(d),
      ddd: dF.i18n.dayNames[D],
      dddd: dF.i18n.dayNames[D + 7],
      m: m + 1,
      mm: pad(m + 1),
      mmm: dF.i18n.monthNames[m],
      mmmm: dF.i18n.monthNames[m + 12],
      yy: String(y).slice(2),
      yyyy: y,
      h: H % 12 || 12,
      hh: pad(H % 12 || 12),
      H: H,
      HH: pad(H),
      M: M,
      MM: pad(M),
      s: s,
      ss: pad(s),
      l: pad(L, 3),
      L: pad(L > 99 ? Math.round(L / 10) : L),
      t: H < 12 ? 'a' : 'p',
      tt: H < 12 ? 'am' : 'pm',
      T: H < 12 ? 'A' : 'P',
      TT: H < 12 ? 'AM' : 'PM',
      Z: utc ? 'UTC' : (String(date).match(timezone) || ['']).pop().replace(timezoneClip, ''),
      o: (o > 0 ? '-' : '+') + pad(Math.floor(Math.abs(o) / 60) * 100 + Math.abs(o) % 60, 4),
      S: ['th', 'st', 'nd', 'rd'][d % 10 > 3 ? 0 : (d % 100 - d % 10 !== 10) * d % 10]
    };
    return mask.replace(token, function ($0) {
      return $0 in flags ? flags[$0] : $0.slice(1, $0.length - 1);
    });
  };
}(); // Some common format strings


dateFormat.masks = {
  "default": 'ddd mmm dd yyyy HH:MM:ss',
  shortDate: 'm/d/yy',
  mediumDate: 'mmm d, yyyy',
  longDate: 'mmmm d, yyyy',
  fullDate: 'dddd, mmmm d, yyyy',
  shortTime: 'h:MM TT',
  mediumTime: 'h:MM:ss TT',
  longTime: 'h:MM:ss TT Z',
  isoDate: 'yyyy-mm-dd',
  isoTime: 'HH:MM:ss',
  isoDateTime: "yyyy-mm-dd'T'HH:MM:ss",
  isoUtcDateTime: "UTC:yyyy-mm-dd'T'HH:MM:ss'Z'"
}; // Internationalization strings

dateFormat.i18n = {
  dayNames: ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'],
  monthNames: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
}; // For convenience...

Date.prototype.format = function (mask, utc) {
  return dateFormat(this, mask || core["a" /* default */].utils.defaultDateFormat, utc);
}; //
// Palette
//


var utils_Palette =
/*#__PURE__*/
function (_Gantt$components$Pal) {
  Object(inherits["a" /* default */])(Palette, _Gantt$components$Pal);

  function Palette(config) {
    var _this2;

    Object(classCallCheck["a" /* default */])(this, Palette);

    _this2 = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(Palette).call(this, config));
    _this2.colorSet = null;

    _this2.setConfiguration(config);

    return _this2;
  }

  Object(createClass["a" /* default */])(Palette, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this3 = this;

      var maxColorsSize = -1;

      var addColorSet = function addColorSet(col, size) {
        if (col.length >= maxColorsSize) {
          _this3.colorSet[size] = col;
          maxColorsSize = col.length;
        } else {
          var insert = size - 1;

          while (insert >= 0 && _this3.colorSet[insert].length < col.length) {
            _this3.colorSet[i] = _this3.colorSet[i - 1];
          }

          _this3.colorSet[insert === -1 ? 0 : insert] = col;
        }
      };

      var getColorsFromSet = function getColorsFromSet(count) {
        for (var index = 0, setCount = _this3.colorSet.length; index < setCount; ++index) {
          if (_this3.colorSet[index].length >= count) {
            return _this3.colorSet[index];
          }
        }

        return _this3.colorSet.length && _this3.colorSet[_this3.colorSet.length - 1] || null;
      };

      if (core["a" /* default */].utils.isArray(config)) {
        var count = config.length;

        if (count) {
          if (core["a" /* default */].utils.isArray(config[0])) {
            // If defining a set of color collections
            this.colorSet = new Array(count); // Sort color collections in this.colorSet from the lowest number of colors to the greatest.
            // Algo is optimized for case when receiving ordered array of color collections.

            for (var _i8 = 0; _i8 < count; _i8++) {
              addColorSet(config[_i8], _i8);
            }

            this._getColors = getColorsFromSet;
          } else {
            this.colors = config;

            this._getColors = function () {
              return _this3.colors;
            };
          }
        } else {
          this._getColors = function () {
            return null;
          };
        }
      } else if (core["a" /* default */].utils.isFunction(config)) {
        this._getColors = config;
      } else {
        var keys = keys_default()(config);

        var keyCount = keys.length;
        var size = 0;
        this.colorSet = new Array(keyCount);

        for (var _i9 = 0, val; _i9 < keyCount; ++_i9) {
          if (core["a" /* default */].utils.isArray(val = config[keys[_i9]])) {
            addColorSet(val, size++);
          }
        }

        if (!size || size !== keyCount) {
          console.error("Unkown palette configuration ".concat(config));
          console.log(config);

          this._getColors = function () {
            return null;
          };

          this.colorSet = null;
        } else {
          this._getColors = getColorsFromSet;
        }
      }
    }
  }, {
    key: "getColors",
    value: function getColors(count) {
      function makeResult(ar) {
        var arLen = ar.length;
        if (count < 0 || arLen === count) return ar;
        if (arLen > count) return ar.slice(0, count); // Extremely bad temporary solution when number of required colors exceeds palette's size

        var result = new Array(count);

        for (var _i10 = 0; _i10 < count; ++_i10) {
          result[_i10] = ar[_i10 % arLen];
        }

        return result;
      }

      var colors = this._getColors(count);

      return colors && makeResult(colors);
    }
  }]);

  return Palette;
}(core["a" /* default */].components.Palette);

core["a" /* default */].components.Palette.impl = utils_Palette;
core["a" /* default */].defaultPaletteName = 'qualitative20';
core["a" /* default */].defaultPalettes[core["a" /* default */].defaultPaletteName] = new utils_Palette([// IBM colors. See http://www.ibm.com/design/language/framework/visual/color/
// '#5AA8F8', '#FFA573', '#8CD211', '#EFC100', '#AF6EE8', '#FDE876', '#FF5050', '#00B29E', '#152935', '#4178BC', '#562F72', '#C8F08F', '#FF7832', '#FDD600'
// '#325C80', '#2D660A', '#4178BE', '#4B8401', '#5596E6', '#5AA701', '#5AAAFA', '#8CD211', '#7CC7FF', '#B4E051', '#C0E6FF', '#C8F08F', '#1D3649', '#0A3C02'
// '#6EB400', '#FF7832', '#BA8FF7', '#F0F2F4'
// '#9655D2', '#FF71D2', '#D92780', '#FF7D85', '#FCFAFA'

/* '#C0E6FF', '#7CC7FF', '#5AAAFA', '#5596E6', '#4178BE', '#325C80' */
// blue palette

/* "#a6cee3", "#1f78b4", "#b2df8a", "#33a02c", "#fb9a99", "#e31a1c", "#fdbf6f", "#ff7f00", "#cab2d6", "#6a3d9a" // Brewer palette */
// https://releases.fr.eurolabs.ibm.com/display/OS/Design+for+GANTT+CHART
'#41D6C3', '#8CD211', '#5AAAFA', '#BA8FF7', '#00AE9A', '#5AA600', '#4178BE', '#9855D4', '#EFC100', '#FF7832', '#E71D32', '#325C80', '#AC8C00', '#D74108', '#AD1625', '#1D3649', '#FF71D4', '#DB2780', '#9D9393', '#645A5A']);
core["a" /* default */].components.GanttPanel.prototype.utils = core["a" /* default */].utils;
// EXTERNAL MODULE: ./src/error/error.scss
var error = __webpack_require__(150);

// CONCATENATED MODULE: ./src/error/index.js







var defaults = {
  listClass: 'error-list fit-parent-content',
  maxErrors: 5,
  bodyClass: 'error-body clearfix',
  titleClass: 'error-title',
  barClass: 'error-bar',
  descClass: 'error-desc',
  detailsBtnClass: 'error-details-btn',
  removeBtnClass: 'remove-error-btn',
  errorExpandedDefault: true,
  fadingOutDuration: 600
};

var error_ErrorGroup =
/*#__PURE__*/
function () {
  function ErrorGroup(node) {
    Object(classCallCheck["a" /* default */])(this, ErrorGroup);

    this.node = node;
    this.errs = [];
    this.errNodes = [];
    this.errorList = null;
  }

  Object(createClass["a" /* default */])(ErrorGroup, [{
    key: "addError",
    value: function addError(err, node, maxErrors) {
      var _this = this;

      if (maxErrors && maxErrors > 0 && this.errs.length >= maxErrors) {
        this.errs.splice(0, this.errs.length - maxErrors + 1);
        var removed = this.errNodes.splice(0, this.errNodes.length - maxErrors + 1);
        removed.forEach(function (removedElt) {
          _this.errorList.removeChild(removedElt);
        });
      }

      this.errs.push(err);
      this.errNodes.push(node);
      this.errorList.appendChild(node);
      return node;
    }
  }, {
    key: "removeError",
    value: function removeError(err) {
      for (var i = 0; i < this.errs.length; i++) {
        if (this.errs[i] === err || this.errNodes[i] === err) {
          this.errs.splice(i, 1);
          var nodes = this.errNodes.splice(i, 1);

          if (nodes.length) {
            this.errorList.removeChild(nodes[0]);
          }

          return true;
        }
      }
    }
  }, {
    key: "clear",
    value: function clear() {
      if (this.errorList && this.errorList.parentNode === this.node) {
        this.node.removeChild(this.errorList);
      }

      this.errs = [];
      this.errNodes = [];
      this.errorList = null;
    }
  }, {
    key: "updateErrorList",
    value: function updateErrorList() {
      if (this.errorList) {
        if (this.errs.length) {
          this.errorList.style.display = '';

          if (!this.errorList.parentNode) {
            this.beforeSettingErrorList(this.node);
            this.node.appendChild(this.errorList);
          }
        } else {
          this.errorList.style.display = 'none';
        }
      }
    }
  }, {
    key: "beforeSettingErrorList",
    value: function beforeSettingErrorList(node) {
      while (node.firstChild) {
        node.removeChild(node.firstChild);
      }
    }
  }, {
    key: "hasErrors",
    value: function hasErrors() {
      return !!this.errs.length;
    }
  }]);

  return ErrorGroup;
}();

function ensureErrorGroup(node, errorGroups) {
  for (var i = 0; i < errorGroups.length; i++) {
    if (errorGroups[i].node === node) {
      return errorGroups[i];
    }
  }

  var errorGroup = new error_ErrorGroup(node);
  errorGroups.push(errorGroup);
  return errorGroup;
}

var error_ErrorHandler =
/*#__PURE__*/
function (_Gantt$components$Err) {
  Object(inherits["a" /* default */])(ErrorHandler, _Gantt$components$Err);

  function ErrorHandler(node, config) {
    var _this2;

    Object(classCallCheck["a" /* default */])(this, ErrorHandler);

    _this2 = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(ErrorHandler).call(this, core["a" /* default */].utils.mergeObjects({}, defaults, config)));
    _this2.node = node;
    _this2.lockCount = 0;
    _this2.errorGroups = [];
    return _this2;
  } // noinspection JSUnusedGlobalSymbols


  Object(createClass["a" /* default */])(ErrorHandler, [{
    key: "addError",
    value: function addError(err, msg, node) {
      if (!this.lockCount) {
        var errDetails = this.convertError(err, msg);
        var errNode = errDetails && this.createErrorNode(err, errDetails);

        if (errNode) {
          var errorGroup = ensureErrorGroup(node || this.node, this.errorGroups);

          if (!errorGroup.errorList) {
            errorGroup.errorList = this.createErrorList();
          }

          errorGroup.addError(err, errNode, this.config.maxErrors);
          errorGroup.updateErrorList();
          return errNode;
        }
      }
    }
  }, {
    key: "lock",
    value: function lock() {
      this.lockCount++;
    } // noinspection JSUnusedGlobalSymbols

  }, {
    key: "unlock",
    value: function unlock() {
      --this.lockCount;
    }
  }, {
    key: "getErrors",
    value: function getErrors() {
      var result = [];

      for (var iGroup = 0, count = this.errorGroups.length; iGroup < count; ++iGroup) {
        result = result.concat(this.errorGroups[iGroup].errs);
      }

      return result;
    }
  }, {
    key: "hasErrors",
    value: function hasErrors() {
      for (var iGroup = 0, count = this.errorGroups.length; iGroup < count; ++iGroup) {
        if (this.errorGroups[iGroup].hasErrors()) {
          return true;
        }
      }

      return false;
    }
  }, {
    key: "createErrorList",
    value: function createErrorList() {
      var lst = document.createElement('ul');
      lst.className = 'error-list';
      return lst;
    }
  }, {
    key: "createErrorNode",
    value: function createErrorNode(err, errDetails) {
      var _this3 = this;

      var node = document.createElement('li');
      node.className = this.config.errorExpandedDefault && 'error-component error-expanded' || 'error-component';
      var errorContent = document.createElement('div');
      errorContent.className = 'error-content clearfix';
      var textContent = document.createElement('div');
      var divTitle = document.createElement('span');
      divTitle.innerHTML = errDetails.title;
      divTitle.className = 'error-title';

      divTitle.onclick = function (evt) {
        return _this3._toggleErrorDisplay(node);
      };

      textContent.appendChild(divTitle);
      var divErrorBar = document.createElement('div');
      divErrorBar.className = 'error-bar';

      if (errDetails.desc) {
        var divDesc = document.createElement('div');
        divDesc.className = 'error-desc';
        divDesc.innerHTML = errDetails.desc;
        textContent.appendChild(divDesc);
        var detailsBtn = document.createElement('span');
        detailsBtn.tabIndex = 0;
        detailsBtn.className = 'error-details-btn';
        detailsBtn.innerHTML = core["a" /* default */].utils.getString('gantt.error.details');

        detailsBtn.onclick = function (evt) {
          return _this3._toggleErrorDisplay(node);
        };

        divErrorBar.appendChild(detailsBtn);
      } // Remove error button


      var removeErrorBtn = document.createElement('span');
      removeErrorBtn.className = 'remove-error-btn';
      removeErrorBtn.tabIndex = 0;

      removeErrorBtn.onclick = function (evt) {
        return _this3.removeError(err);
      };

      divErrorBar.appendChild(removeErrorBtn);
      errorContent.appendChild(divErrorBar);
      errorContent.appendChild(textContent); // Error the text div after the bar so that the bar remains top aligned with its container

      node.appendChild(errorContent);
      return node;
    }
  }, {
    key: "convertError",
    value: function convertError(err, msg) {
      var c = this.config && this.config.convertError && this.config.convertError(err, msg);

      if (c) {
        return c;
      }

      if (core["a" /* default */].utils.isString(err)) {
        return {
          title: err
        };
      }

      var title = err.message || err.status || err.statusCode;

      if (msg) {
        title = core["a" /* default */].utils.formatString('gantt.error.title.fmt', {
          msg: msg,
          title: title
        });
      }

      var desc = err.desc || err.description || err.stack;

      if (desc) {
        desc = desc.replace(/(?:\r\n|\r|\n)/g, '<br />');
      }

      return {
        title: title,
        desc: desc
      };
    }
  }, {
    key: "_toggleErrorDisplay",
    value: function _toggleErrorDisplay(errorNode) {
      core["a" /* default */].utils.toggleClass(errorNode, 'error-expanded');
    }
  }, {
    key: "removeError",
    value: function removeError(err) {
      for (var iGroup = 0, count = this.errorGroups.length; iGroup < count; iGroup++) {
        if (this.errorGroups[iGroup].removeError(err)) {
          this.errorGroups[iGroup].updateErrorList();
          return true;
        }
      }

      return false;
    }
  }, {
    key: "removeGroup",
    value: function removeGroup(node) {
      for (var iGroup = 0, count = this.errorGroups.length; iGroup < count; iGroup++) {
        if (this.errorGroups[iGroup].node === node) {
          this.errorGroups[iGroup].clear();
          this.errorGroups.splice(iGroup, 1);
          return true;
        }
      }

      return false;
    }
  }]);

  return ErrorHandler;
}(core["a" /* default */].components.ErrorHandler);


core["a" /* default */].components.ErrorHandler.impl = error_ErrorHandler;
// CONCATENATED MODULE: ./src/core/filter.js





var filter_Filter =
/*#__PURE__*/
function () {
  function Filter(options) {
    Object(classCallCheck["a" /* default */])(this, Filter);

    this.filters = [];
    this.filterKeys = [];

    if (options) {
      if (is_array_default()(options)) {
        for (var i = 0; i < options.length; i++) {
          this.addFilter(options[i]);
        }
      } else {
        this.addFilter(options);
      }
    }
  }

  Object(createClass["a" /* default */])(Filter, [{
    key: "addFilter",
    value: function addFilter(filter) {
      var filterKey = filter;
      filter = this.createFilter(filter);

      if (filter) {
        this.filters.push(filter);
        this.filterKeys.push(filterKey);
      }

      return filter;
    }
  }, {
    key: "addOrFilters",
    value: function addOrFilters() {
      var params = new Array(arguments.length);

      for (var i = 0; i < arguments.length; i++) {
        params[i] = arguments[i];
      }

      var filter = this.createFilterSet(params, true);

      if (filter) {
        this.filters.push(filter);
        this.filterKeys.push(filter);
      }

      return filter;
    }
  }, {
    key: "addAndFilters",
    value: function addAndFilters() {
      var params = new Array(arguments.length);

      for (var i = 0; i < arguments.length; i++) {
        params[i] = arguments[i];
      }

      var filter = this.createFilterSet(params, false);

      if (filter) {
        this.filters.push(filter);
        this.filterKeys.push(filter);
      }

      return filter;
    }
  }, {
    key: "createFilterSet",
    value: function createFilterSet() {
      if (!arguments.length) {
        return null;
      }

      var paramList;
      var orFilter;
      var i;
      var filter;

      if (is_array_default()(arguments[0])) {
        paramList = arguments[0];
        orFilter = arguments.length > 1 ? arguments[1] : this.DEFAULT_FILTER_SET_MODE_OR;
      } else {
        var copyLength;
        orFilter = arguments[arguments.length - 1];

        if (typeof orFilter !== 'boolean') {
          orFilter = this.DEFAULT_FILTER_SET_MODE_OR;
          copyLength = arguments.length;
        } else {
          copyLength = arguments.length - 1;
        }

        paramList = new Array(copyLength);

        for (i = 0; i < copyLength; i++) {
          paramList[i] = arguments[i];
        }
      }

      var filterList = [];

      for (i = 0; i < paramList.length; i++) {
        filter = this.createFilter(paramList[i]);

        if (filter) {
          filterList.push(filter);
        }
      }

      if (filterList.length) {
        filter = orFilter ? function (args) {
          for (var f = 0; f < filterList.length; f++) {
            if (filterList[f](args)) {
              return true;
            }
          }

          return false;
        } : function (args) {
          for (var f = 0; f < filterList.length; f++) {
            if (!filterList[f](args)) {
              return false;
            }
          }
        };
        return filter;
      }

      return null;
    }
  }, {
    key: "removeFilter",
    value: function removeFilter(filter) {
      var index = this.filters.indexOf(filter);

      if (index < 0) {
        index = this.filterKeys.indexOf(filter);
      }

      if (index > -1) {
        this.filters.splice(index, 1);
        this.filterKeys.splice(index, 1);
        return true;
      }

      return false;
    }
  }, {
    key: "createFilter",
    value: function createFilter(filter) {
      if (filter !== undefined) {
        var self = this;

        if (typeof filter === 'string') {
          return filter && function () {
            var params = arguments[0];
            params.push(filter);
            var result = self.acceptString.apply(self, params);
            params.pop();
            return result;
          } || function () {
            return true;
          };
        }

        if (typeof filter === 'function') {
          return function () {
            return filter.apply(self, arguments[0]);
          };
        }

        if (filter[this.getObjectFilterMethodName()]) {
          // Filter is an object with the appropriate filter method
          var fct = filter[this.getObjectFilterMethodName()];
          return function () {
            return fct.apply(filter, arguments[0]);
          };
        }

        if (filter.or) {
          return this.createFilterSet(filter.or, true);
        }

        if (filter.and) {
          return this.createFilterSet(filter.and, false);
        }

        console.log('Cannot process filter:');
        console.log(filter);
      } else {
        console.log('Null filter specified');
      }

      return null;
    }
  }, {
    key: "accept",
    value: function accept() {
      var params = [];
      var i;

      for (i = 0; i < arguments.length; i++) {
        params.push(arguments[i]);
      }

      for (i = 0; i < this.filters.length; i++) {
        if (!this.filters[i].call(this, params)) {
          return false;
        }
      }

      return true;
    }
  }, {
    key: "setFilter",
    value: function setFilter(filter) {
      this.filters = [];
      this.filterKeys = [];
      var params = [];
      var i;

      for (i = 0; i < arguments.length; i++) {
        params.push(arguments[i]);
      }

      this.addFilter.apply(this, params);
    }
  }, {
    key: "stringMatches",
    value: function stringMatches(string, pattern) {
      return string.indexOf(pattern) > -1;
    }
  }, {
    key: "acceptString",
    value: function acceptString(object, str) {}
  }, {
    key: "getObjectFilterMethodName",
    value: function getObjectFilterMethodName() {
      return 'accept';
    }
  }, {
    key: "isEmpty",
    value: function isEmpty() {
      return this.filters.length === 0;
    }
  }], [{
    key: "DEFAULT_FILTER_SET_MODE_OR",
    get: function get() {
      return false;
    }
  }]);

  return Filter;
}();

core["a" /* default */].components.Filter.impl = filter_Filter;
/* harmony default export */ var core_filter = (filter_Filter);
// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/assertThisInitialized.js
var assertThisInitialized = __webpack_require__(16);

// CONCATENATED MODULE: ./src/core/updates.js








var updates_GanttUpdates =
/*#__PURE__*/
function (_Gantt$components$Gan) {
  Object(inherits["a" /* default */])(GanttUpdates, _Gantt$components$Gan);

  function GanttUpdates(parent, proto) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, GanttUpdates);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(GanttUpdates).call(this, parent));
    _this.children = [];
    _this.updates = [];
    _this.updateLocks = 0;
    _this._reload = false;

    if (parent) {
      parent.children.push(Object(assertThisInitialized["a" /* default */])(_this));
    }

    if (proto) {
      core["a" /* default */].utils.mergeObjects(Object(assertThisInitialized["a" /* default */])(_this), proto);
    }

    _this._containsRowChanges = false;
    _this._tableYScrollChanged = false;
    return _this;
  }

  Object(createClass["a" /* default */])(GanttUpdates, [{
    key: "reload",
    value: function reload() {
      this._reload = true;
      this._containsRowChanges = true;
    }
  }, {
    key: "isReload",
    value: function isReload() {
      return this._reload || this.parent && this.parent.isReload();
    }
  }, {
    key: "rowsChanged",
    value: function rowsChanged(event, rows, rowRef) {
      this.addUpdate({
        type: event,
        rows: rows,
        rowRef: rowRef
      });
      this._containsRowChanges = true;
    }
  }, {
    key: "addUpdate",
    value: function addUpdate(update) {
      this.updates.push(update);
    }
  }, {
    key: "removeUpdate",
    value: function removeUpdate(update) {
      var index = this.updates.indexOf(update);

      if (index >= 0) {
        this.updates.splice(index, 1);
      }

      for (var i = 0, count = this.children ? this.children.length : 0; i < count; i++) {
        this.children[i].removeUpdate(update);
      }
    }
  }, {
    key: "tableScrollYChanged",
    value: function tableScrollYChanged() {
      this._tableYScrollChanged = true;
    }
  }, {
    key: "hasTableScrollYChanged",
    value: function hasTableScrollYChanged() {
      return this._tableYScrollChanged || this.parent && this.parent.hasTableScrollYChanged();
    }
  }, {
    key: "startUpdating",
    value: function startUpdating() {
      ++this.updateLocks;
    }
  }, {
    key: "stopUpdating",
    value: function stopUpdating() {
      if (--this.updateLocks === 0) {
        this.applyUpdates();
        return true;
      }

      return false;
    }
  }, {
    key: "applyUpdates",
    value: function applyUpdates() {
      this.doApplyUpdates();
      this.updates = [];
      this._reload = false;

      for (var i = 0, count = this.children ? this.children.length : 0; i < count; i++) {
        this.children[i].applyUpdates();
      }

      this._containsRowChanges = false;
    }
  }, {
    key: "containsRowChanges",
    value: function containsRowChanges() {
      return this._containsRowChanges || this.parent && this.parent.containsRowChanges();
    }
  }, {
    key: "applyReload",
    value: function applyReload() {}
  }, {
    key: "doApplyUpdates",
    value: function doApplyUpdates() {
      if (this._reload) {
        this.applyReload();
      } else {
        for (var iUpdate = 0, count = this.updates.length; iUpdate < count; iUpdate++) {
          this.applyUpdate(this.updates[iUpdate]);
        }
      }
    }
  }, {
    key: "applyUpdate",
    value: function applyUpdate(update) {}
  }, {
    key: "destroy",
    value: function destroy() {
      for (var i = 0, count = this.children ? this.children.length : 0; i < count; i++) {
        this.children[i].destroy();
      }

      this.children = null;
    }
  }]);

  return GanttUpdates;
}(core["a" /* default */].components.GanttUpdates);

core["a" /* default */].components.GanttUpdates.impl = updates_GanttUpdates;
// EXTERNAL MODULE: ./src/toolbar/toolbar.scss
var toolbar = __webpack_require__(151);

// CONCATENATED MODULE: ./src/toolbar/index.js
/* eslint-disable */









var idCount = 1;

function makeId(prefix) {
  return prefix + idCount++;
}

var checkClass;

function Checkbox(gantt, config) {
  if (!checkClass) {
    checkClass = core["a" /* default */].components.CheckBox.impl || core["a" /* default */].components.CheckBox;
  }

  return new checkClass(gantt, config);
}

var buttonClass;

function Button(gantt, config) {
  if (!buttonClass) {
    buttonClass = core["a" /* default */].components.Button.impl || core["a" /* default */].components.Button;
  }

  return new buttonClass(gantt, config);
}

var selectClass;

function Select(gantt, config) {
  if (!selectClass) {
    selectClass = core["a" /* default */].components.DropDownList.impl || core["a" /* default */].components.DropDownList;
  }

  return new selectClass(gantt, config);
}

var toggleClass;

function Toggle(gantt, config) {
  if (!toggleClass) {
    toggleClass = core["a" /* default */].components.Toggle.impl || core["a" /* default */].components.Toggle;
  }

  return new toggleClass(gantt, config);
}

var ToolbarComponents = {
  title: {
    node: function node(parentElt, gantt) {
      var node = core["a" /* default */].components.Toolbar.createTitle(gantt.getTitle());
      gantt.on(core["a" /* default */].events.TITLE_CHANGED, function (event, title) {
        node.innerHTML = title;
      });
      return node;
    },
    justifyLeft: true
  },
  separator: {
    node: function node(parentElt) {
      var sep = document.createElement('div');
      sep.className = 'separator';
      return sep;
    }
  },
  whitespace: {
    node: function node(parentElt) {
      var sep = document.createElement('div');
      sep.className = 'white-space';
      return sep;
    }
  },
  search: {
    component: function component(gantt) {
      return new (core["a" /* default */].components.Input.impl || core["a" /* default */].components.Input)(gantt, {
        type: 'search',
        onchange: function onchange(text) {
          gantt.search(text, true, true);
        }
      });
    }
  },
  mini: {
    component: function component(gantt) {
      return new Toggle(gantt, {
        unselected: {
          /*text : Gantt.utils.getString('gantt.toolbar.minimize.text'),*/
          tooltip: core["a" /* default */].utils.getString('gantt.toolbar.mini.tooltip'),

          /*fontIcon : "fa fa-compress fa-lg"*/
          svg: {
            width: 20,
            height: 20,
            viewBox: '0 0 16 16',
            margin: '-6px 0 0 0 ',
            paths: ['M4 5h16v2H4zM4 9h16v2H4zM4 13h16v2H4zM4 17h16v2H4z']
          }
        },
        selected: {
          /*fontIcon : "fa fa-expand fa-lg",*/

          /*text : Gantt.utils.getString('gantt.toolbar.normal.text'),*/
          tooltip: core["a" /* default */].utils.getString('gantt.toolbar.mini.tooltip'),
          svg: {
            width: 20,
            height: 20,
            viewBox: '0 0 24 24',
            margin: '-6px 0 0 0 ',
            paths: ['M4 5h16v2H4zM4 9h16v2H4zM4 13h16v2H4zM4 17h16v2H4z']
          }
        },
        isSelected: function isSelected() {
          var ganttNode = gantt.getPanelNode();
          return core["a" /* default */].utils.hasClass(ganttNode, 'mini');
        },
        onclick: function onclick() {
          var ganttNode = gantt.getPanelNode();
          core["a" /* default */].utils.toggleClass(ganttNode, 'mini');
          gantt.draw();
        }
      });
    },
    update: function update(gantt, rows, comp) {
      var ganttNode = gantt.getPanelNode();
      comp.setChecked(core["a" /* default */].utils.hasClass(ganttNode, 'mini'));
    }
  },
  fitToContent: {
    component: function component(gantt) {
      return Button(gantt, {
        /*fontIcon : 'fa fa-arrows fa-lg',*/
        // Edited with http://editor.method.ac/
        svg: {
          width: 20,
          height: 20,
          viewBox: '0 0 24 24',
          paths: ['m9,3c3.309,0 6,2.691 6,6s-2.691,6 -6,6s-6,-2.691 -6,-6s2.691,-6 6,-6m0,-2a8,8 0 1 0 0,16a8,8 0 0 0 0,-16zm6,17l3,-3l5,5l-3,3l-5,-5z', 'm5.067202,10.936161l1.794565,-1.677985l-1.794565,-1.677997l1.025685,-0.958955l2.820467,2.636953l-2.820467,2.637771', 'm13.211615,7.601521l-1.74349,1.712784l1.74349,1.712783l-0.996386,0.979422l-2.739875,-2.692204l2.739875,-2.69241']
        },
        tooltip: core["a" /* default */].utils.getString('gantt.toolbar.fit.tooltip'),
        onclick: function onclick() {
          gantt.fitToContent();
        }
      });
    }
  },
  refresh: {
    component: function component(gantt) {
      return Button(gantt, {
        fontIcon: 'fa fa-refresh fa-lg',

        /*svg : {
                    width: 24,
                    height: 40,
                    margin: '-6px 2px 0 0',
                    viewBox : "0 0 24 24",
                    paths: ["M2 13.987c0-4.97 4.032-8.994 9-8.994h7l-2.5-2.506L17 1l5 4.987-5 5-1.5-1.5 2.5-2.5h-6.864c-3.867 0-7.136 3.133-7.136 7S7.146 21 11.013 21a7.034 7.034 0 0 0 5.185-2.29l1.478 1.348A9.067 9.067 0 0 1 11 23c-4.97 0-9-4.043-9-9.013z"]
                },*/
        text: core["a" /* default */].utils.getString('gantt.toolbar.refresh.text'),
        tooltip: core["a" /* default */].utils.getString('gantt.toolbar.fit.tooltip'),
        onclick: function onclick() {
          gantt.draw();
        }
      });
    }
  },
  zoomIn: {
    component: function component(gantt) {
      return Button(gantt, {
        /*classes: 'zoom-in',*/

        /*fontIcon : 'fa fa-search-plus fa-lg',*/
        svg: {
          width: 20,
          height: 20,
          viewBox: '0 0 24 24',
          paths: ['M9 1a8 8 0 1 0 0 16A8 8 0 0 0 9 1zm0 14c-3.309 0-6-2.691-6-6s2.691-6 6-6 6 2.691 6 6-2.691 6-6 6zM15 18l3-3 5 5-3 3z', 'M10 5H8v3H5v2h3v3h2v-3h3V8h-3z']
        },
        tooltip: core["a" /* default */].utils.getString('gantt.toolbar.zoomIn.tooltip'),
        onclick: function onclick() {
          gantt.zoomIn();
        }
      });
    }
  },
  zoomOut: {
    component: function component(gantt) {
      return Button(gantt, {
        /*classes: 'zoom-out',*/

        /*fontIcon : 'fa fa-search-minus fa-lg',*/
        svg: {
          width: 20,
          height: 20,

          /*margin: '-2px 0 0 0',*/
          viewBox: '0 0 24 24',
          paths: ['M9 3c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6m0-2a8 8 0 1 0 0 16A8 8 0 0 0 9 1zM14.999 18l3-3 5 5-3 3z', 'M9 3c3.309 0 6 2.691 6 6s-2.691 6-6 6-6-2.691-6-6 2.691-6 6-6m0-2a8 8 0 1 0 0 16A8 8 0 0 0 9 1z', 'M5 8h8v2H5z']
        },
        tooltip: core["a" /* default */].utils.getString('gantt.toolbar.zoomOut.tooltip'),
        onclick: function onclick() {
          gantt.zoomOut();
        }
      });
    }
  },
  toggleLoadChart: {
    component: function component(gantt) {
      return new Toggle(gantt, {
        unselected: {
          classes: 'toggle-load-chart',
          fontIcon: 'fa fa-bar-chart fa-lg',
          tooltip: core["a" /* default */].utils.getString('gantt.loadResourceChart.show.tooltip')
        },
        selected: {
          classes: 'toggle-load-chart selected',
          fontIcon: 'fa fa-bar-chart fa-lg',
          tooltip: core["a" /* default */].utils.getString('gantt.loadResourceChart.hide.tooltip')
        },
        isSelected: function isSelected() {
          return gantt.isLoadChartVisible();
        },
        onclick: function onclick() {
          gantt.toggleLoadChartVisible();
        }
      });
    }
  }
};

var toolbar_Toolbar =
/*#__PURE__*/
function (_Gantt$components$Too) {
  Object(inherits["a" /* default */])(Toolbar, _Gantt$components$Too);

  function Toolbar(gantt, node, config) {
    Object(classCallCheck["a" /* default */])(this, Toolbar);

    return Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(Toolbar).call(this, gantt, node, config));
  }

  Object(createClass["a" /* default */])(Toolbar, [{
    key: "setConfiguration",
    value: function setConfiguration(config, toolbarNode) {
      var _this = this;

      this.components = [];
      var leftBar = null;

      function append(comp, handler) {
        if (handler.justifyLeft) {
          if (!leftBar) {
            leftBar = document.createElement('div');
            leftBar.style.display = 'flex';
            leftBar.style.flexDirection = 'row';
            leftBar.style.alignItems = 'center';
            leftBar.style.marginRight = 'auto';
            leftBar.className = 'left-toolbar-body';
            toolbarNode.appendChild(leftBar);
          }

          leftBar.appendChild(comp.node);
        } else {
          toolbarNode.appendChild(comp.node);
        }
      }

      var _loop = function _loop(i, count, _cfgNode, _handler, node, _comp) {
        _cfgNode = config[i];

        if (core["a" /* default */].utils.isString(_cfgNode)) {
          _handler = ToolbarComponents[_cfgNode];
        } else {
          _handler = _cfgNode;
        }

        if (!_handler.node) {
          if (_handler.component) {
            _comp = _handler.component(_this.gantt, toolbarNode);

            if (_comp.node && !_comp.node.parentNode) {
              append(_comp, _handler);
            }
          } else if (_handler.template) {
            _comp = {
              id: _handler.id !== undefined ? core["a" /* default */].utils.isFunction(_handler.id) ? _handler.id(_handler) : _handler.id : makeId(core["a" /* default */].utils.isString(_cfgNode) ? _cfgNode : 'toolbarComp')
            };
            _comp.node = document.createElement('div');
            var tpl = core["a" /* default */].utils.formatString(_handler.template, _comp);
            core["a" /* default */].utils.html(_comp.node, tpl);
            append(_comp, _handler);
          } else if (_handler.type) {
            if (_handler.type === 'button') {
              _comp = Button(_this.gantt, _handler);
            } else if (_handler.type === 'checkbox') {
              _comp = Checkbox(_this.gantt, _handler);
            } else if (_handler.type === 'select') {
              _comp = Select(_this.gantt, _handler);
            } else if (_handler.type === 'buttonGroup') {
              _comp = new (core["a" /* default */].components.ButtonGroup.impl || core["a" /* default */].components.ButtonGroup)(_this.gantt, _handler);
            } else if (_handler.type === 'separator') {
              _handler = ToolbarComponents.separator;
              _comp = {};
              _comp.node = _handler.node(toolbarNode, _this.gantt, _comp);
            } else {
              throw new Error('Unknown toolbar component type: ' + config.type);
            }

            if (_comp.node && !_comp.node.parentNode) {
              append(_comp, _handler);
            }
          } else {
            throw new Error('a node property must be specified in a toolbar element: ' + _cfgNode);
          }
        } else if (core["a" /* default */].utils.isString(_handler.node)) {
          _comp = {
            id: _handler.node,
            node: document.getElementById(_handler.node)
          };
        } else if (core["a" /* default */].utils.isFunction(_handler.node)) {
          _comp = {};
          _comp.node = _handler.node(toolbarNode, _this.gantt, _comp);
          append(_comp, _handler);
        } else {
          throw new Error('The node property of a toolbar element must be either a string ID or a function creating a Dom element');
        }

        if (_handler.id) {
          _comp.setId(_handler.id);
        }

        if (_handler.connect) {
          _handler.connect(_comp.node, _comp);
        }

        if (_handler.update) {
          _comp.update = function (gantt, rows) {
            _handler.update(gantt, rows, _comp);
          };
        }

        if (_cfgNode.id) _comp.id = _cfgNode.id;

        _this.components.push(_comp);

        cfgNode = _cfgNode;
        handler = _handler;
        comp = _comp;
      };

      for (var i = 0, count = config.length, cfgNode, handler, node, comp; i < count; i++) {
        _loop(i, count, cfgNode, handler, node, comp);
      }

      this.initTooltip();
    }
  }, {
    key: "onInitialized",
    value: function onInitialized() {
      this.components.forEach(function (c) {
        if (c.onInitialized) {
          c.onInitialized();
        }
      });
    }
  }, {
    key: "initTooltip",
    value: function initTooltip() {
      var tooltbar = this;

      function getTooltipNode(elt) {
        for (; elt && elt !== tooltbar.node; elt = elt.parentNode) {
          // Can be called with an elt outside the toolbar
          if (elt.dataset && elt.dataset.tooltip) {
            return elt;
          }
        }
      }

      this.gantt.tooltip.installTooltip({
        // The container that contains elements to display tooltip for.
        container: this.node,
        // The container inside which bounds the tooltip can be displayed
        getTooltipDisplayContainer: function getTooltipDisplayContainer() {
          return tooltbar.gantt.getBody();
        },
        // Returns an element in the node hierarchy for which a tooltip can be displayed
        getTooltipElement: function getTooltipElement(node) {
          return getTooltipNode(node);
        },
        renderTooltip: function renderTooltip(tooltipNode
        /* The element returned by getTooltipElement */
        , act
        /* data returned by getTooltipData for the specified tooltipElt */
        , tooltipCtnr
        /* The container of the tooltip to fill with info. */
        ) {
          tooltipCtnr.appendChild(document.createTextNode(tooltipNode.dataset.tooltip));
        }
      });
    }
  }, {
    key: "connect",
    value: function connect(gantt) {}
  }, {
    key: "ganttLoaded",
    value: function ganttLoaded(gantt, rows) {
      for (var i = 0, count = this.components.length, _comp2; i < count; ++i) {
        _comp2 = this.components[i];

        if (_comp2.update) {
          _comp2.update(gantt, rows);
        }
      }
    }
  }, {
    key: "destroy",
    value: function destroy() {}
  }]);

  return Toolbar;
}(core["a" /* default */].components.Toolbar);

core["a" /* default */].components.Toolbar.impl = toolbar_Toolbar;
/*                    */

/* Toolbar components */

/*                    */

var toolbar_FlatCheckbox =
/*#__PURE__*/
function (_Gantt$components$Che) {
  Object(inherits["a" /* default */])(FlatCheckbox, _Gantt$components$Che);

  function FlatCheckbox(gantt, config) {
    Object(classCallCheck["a" /* default */])(this, FlatCheckbox);

    return Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(FlatCheckbox).call(this, gantt, config));
  }

  Object(createClass["a" /* default */])(FlatCheckbox, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this2 = this;

      var btn = document.createElement('div');

      if (config.id) {
        btn.id = config.id;
      }

      btn.className = 'button g-hoverable g-selectable' + (config.classes ? ' ' + config.classes : '');

      if (config.icon) {
        var img = document.createElement('img');
        img.src = config.icon;
        img.alt = '';
        btn.appendChild(img);
      }

      if (config.fontIcon) {
        var fontIcon = document.createElement('i');
        fontIcon.className = config.fontIcon + (config.text ? ' fa-fw' : '');
        btn.appendChild(fontIcon);
      }

      if (config.text) {
        btn.appendChild(document.createTextNode(config.text));
      }

      this.node = btn;

      btn.onclick = function (e) {
        core["a" /* default */].utils.toggleClass(btn, 'selected');

        if (config.onclick) {
          config.onclick(_this2.gantt);
        }
      };

      return btn;
    }
  }]);

  return FlatCheckbox;
}(core["a" /* default */].components.CheckBox);

core["a" /* default */].components.CheckBox.impl = toolbar_FlatCheckbox;
// EXTERNAL MODULE: ./src/core/tooltip.scss
var tooltip = __webpack_require__(152);

// CONCATENATED MODULE: ./src/core/tooltip.js







var ARROW_STYLE = 'gantt-tooltip-arrow';
var BOTTOM_ARROW_STYLE = 'bottom-arrow';
var TOP_ARROW_STYLE = 'top-arrow';

var tooltip_Tooltip =
/*#__PURE__*/
function (_Gantt$components$Too) {
  Object(inherits["a" /* default */])(Tooltip, _Gantt$components$Too);

  function Tooltip(options) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, Tooltip);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(Tooltip).call(this, options));
    _this._tooltip = document.createElement('div');
    _this._tooltip.className = 'gantt-tooltip';
    _this._tooltip.style.position = 'fixed';
    _this._tooltip.style.visibility = 'hidden'; // Cannot have the arrow defined in CSS as the arrow position on the tooltip varies.

    _this._tooltipArrow = document.createElement('div');
    _this._tooltipArrow.style.position = 'absolute';
    _this._tooltipArrow.style.width = '0';
    _this._tooltipArrow.style.height = '0';
    _this._arrowHeight = 5;

    _this._tooltip.appendChild(_this._tooltipArrow);

    document.body.appendChild(_this._tooltip);
    core["a" /* default */].utils.addEventListener(_this._tooltip, 'mouseenter', function (evt) {
      if (_this._hideTimer !== undefined) {
        clearTimeout(_this._hideTimer);
        _this._hideTimer = null;
        _this._hidingElt = null;
      }
    }, true); // Capturing!

    core["a" /* default */].utils.addEventListener(_this._tooltip, 'mouseleave', function (evt) {
      if (evt.target === _this._tooltip) {
        _this.hideTooltip(300);
      }
    }, true); // Capturing!*/

    return _this;
  }

  Object(createClass["a" /* default */])(Tooltip, [{
    key: "showTooltip",
    value: function showTooltip(elt, ctx, cb) {
      var _this2 = this;

      if (elt === this._tooltipElt) return;

      if (this._hideTimer !== undefined) {
        clearTimeout(this._hideTimer);
        delete this._hideTimer;
        var hidingElt = this._hidingElt;
        this._hidingElt = null;

        if (hidingElt === elt) {
          return;
        }
      } // tooltip associated with same data is already showing.


      if (this._showTimer !== undefined) {
        if (this._tooltipElt === elt) {
          // tooltip associated with same data is about to show, do nothing
          return;
        }

        clearTimeout(this._showTimer);
        delete this._showTimer;
        this._tooltipElt = null;
      }

      this._tooltip.innerHTML = '';

      if (arguments.length === 2) {
        cb = ctx;
        ctx = null;
      }

      cb(this._tooltip);
      this._tooltip.style.visibility = 'hidden';
      this._tooltip.style.left = this._tooltip.style.top = 0; // If tooltip is a the right/bottom of the page, its processed sized can be cut, before display

      this._tooltip.style.maxHeight = 'none';
      var tooltipHeight = this._tooltip.offsetHeight + this._arrowHeight;
      var eltScreenPt = core["a" /* default */].utils.getScreenPoint(elt); // Process the limit bounds in which to display the tooltip

      var limits;

      if (ctx && ctx.limitElt) {
        var bounds = ctx.limitElt.getBoundingClientRect();
        var scrollLeft = core["a" /* default */].utils.getWindowScrollLeft();
        var scrollTop = core["a" /* default */].utils.getWindowScrollTop();
        limits = {
          x: Math.max(bounds.left + scrollLeft + (bounds.left < 0 ? bounds.lef : 0), 0),
          y: Math.max(bounds.top + scrollTop + (bounds.left < 0 ? bounds.lef : 0), 0)
        }; // limits = Gantt.utils.getScreenPoint(ctx.limitElt);

        limits.width = Math.min(document.documentElement.clientWidth, bounds.right + scrollLeft) - Math.max(bounds.left, 0);
        limits.height = Math.min(document.documentElement.clientHeight, bounds.bottom + scrollTop) - Math.max(bounds.top, 0);
      } else {
        limits = {
          x: 0,
          y: 0,
          width: document.body.offsetWidth,
          height: document.body.offsetHeight
        };
      } // Display the tooltip at the top or the bottom of the specified element?
      // Prefer top


      var topAvailHeight;
      var bottomAvailHeight;
      var arrowStyle;
      var arrowPos;

      if (eltScreenPt.y - tooltipHeight >= limits.y) {
        eltScreenPt.y -= tooltipHeight;
        this._tooltip.style.maxHeight = 'none';
        arrowStyle = BOTTOM_ARROW_STYLE;
      } // Otherwise, if displaying the tooltip at the bottom works, go for it
      else if (eltScreenPt.y + tooltipHeight + elt.offsetHeight <= limits.y + limits.height) {
          eltScreenPt.y += elt.offsetHeight + this._arrowHeight;
          this._tooltip.style.maxHeight = 'none';
          arrowStyle = TOP_ARROW_STYLE;
        } // Otherwise, display on top if more space available on top
        else if ((topAvailHeight = eltScreenPt.y - limits.y) > (bottomAvailHeight = limits.y + limits.height - eltScreenPt.y - elt.offsetHeight)) {
            eltScreenPt.y = limits.y;
            this._tooltip.style.maxHeight = "".concat(topAvailHeight - this._arrowHeight, "px");
            arrowStyle = BOTTOM_ARROW_STYLE;
          } // Display at the bottom
          else {
              eltScreenPt.y += elt.offsetHeight + this._arrowHeight;
              this._tooltip.style.maxHeight = "".concat(bottomAvailHeight - this._arrowHeight, "px");
              arrowStyle = TOP_ARROW_STYLE;
            } // Adjust horizontal position


      function adjustHorizontally(x, limitLeft, limitRight) {
        return Math.max(Math.min(x, limitRight), limitLeft);
      }

      var arrowMargin = 10; // Arrow cannot start at the left or right border of the tooltip because of the round border of the tooltip. Suggesting 10px as the minimum space from the tooltip border

      arrowPos = eltScreenPt.x + elt.offsetWidth / 2; // Ideal x screen position of the arrow

      if (limits.width <= this._tooltip.offsetWidth) {
        eltScreenPt.x = limits.x;
        this._tooltip.style.maxWidth = "".concat(limits.width, "px");
      } else {
        eltScreenPt.x = adjustHorizontally(eltScreenPt.x + elt.offsetWidth / 2 - this._tooltip.offsetWidth / 2, limits.x, limits.x + limits.width - this._tooltip.offsetWidth);
        this._tooltip.style.maxWidth = 'none';
      }

      arrowPos = adjustHorizontally(arrowPos - eltScreenPt.x, arrowMargin, this._tooltip.offsetWidth - arrowMargin);
      this.setArrowPosition(arrowStyle, arrowPos);

      this._tooltip.appendChild(this._tooltipArrow); // Previously removed with innerHTML = '';


      this._tooltip.style.top = "".concat(eltScreenPt.y, "px");
      this._tooltip.style.left = "".concat(eltScreenPt.x, "px");
      this._tooltipElt = elt;

      if (ctx && ctx.showDelay) {
        this._showTimer = setTimeout(function () {
          delete _this2._showTimer;
          _this2._tooltip.style.visibility = 'visible';
        }, ctx.showDelay);
      } else {
        this._tooltip.style.visibility = 'visible';
      }
    }
  }, {
    key: "setArrowPosition",
    value: function setArrowPosition(style, pos) {
      this._tooltipArrow.className = "".concat(ARROW_STYLE, " ").concat(style);

      if (style === TOP_ARROW_STYLE) {
        // this._tooltipArrow.style.top = 0;
        this._tooltipArrow.style.left = "".concat(pos, "px");
      } else if (style === BOTTOM_ARROW_STYLE) {
        // this._tooltipArrow.style.top = '100%';
        this._tooltipArrow.style.left = "".concat(pos, "px");
      }
    }
  }, {
    key: "hideTooltip",
    value: function hideTooltip(millis, cb) {
      var _this3 = this;

      if (this._showTimer !== undefined) {
        clearTimeout(this._showTimer);
        this._tooltipElt = null;
        delete this._showTimer; // If about to show a tooltip, no tooltip to hide.

        return;
      } // If no tooltip shown, nothing to hide


      if (!this._tooltipElt) return;

      if (millis) {
        if (this._hideTimer) {
          return;
        }

        this._hideCB = cb;
        this._hidingElt = this._tooltipElt;
        this._hideTimer = setTimeout(function () {
          _this3._hideTimer = null;
          _this3._hidingElt = null;
          _this3._tooltipElt = null;

          if (_this3._hideCB) {
            _this3._hideCB();
          }

          _this3._hideCB = null;
          _this3._tooltip.style.display = 'none';
        }, millis);
      } else {
        if (cb) {
          cb();
        }

        this._tooltipElt = null;
        this._tooltip.style.display = 'none';
      }
    }
  }, {
    key: "installTooltip",
    value: function installTooltip(config) {
      var _this4 = this;

      var TOOLTIP_FADING_TIME = 1000;
      var TOOLTIP_SHOWING_DELAY = 800;
      core["a" /* default */].utils.addEventListener(config.container, 'mouseenter', function (evt) {
        // console.log('Enter ' + printElement(evt.target) + ', relatedTarget: ' + (evt.relatedTarget && printElement(evt.relatedTarget) || 'none'));
        var tooltipNode = config.getTooltipElement(evt.target);

        if (tooltipNode) {
          var tooltipData = config.getTooltipData && config.getTooltipData(tooltipNode);

          if (config.enteringTooltipElement && config.enteringTooltipElement(tooltipNode, tooltipData) === false) {
            // During a drag n drop for example.
            return;
          }

          var ctx = {
            limitElt: config.getTooltipDisplayContainer && config.getTooltipDisplayContainer() || document.body,
            showDelay: TOOLTIP_SHOWING_DELAY
          }; // console.log('   show tooltip: ' + tooltipNode);

          _this4.showTooltip(tooltipNode, ctx, function (parent) {
            config.renderTooltip(tooltipNode, tooltipData, parent);
          });
        } else {
          _this4.hideTooltip(TOOLTIP_FADING_TIME);
        }
      }, true);
      core["a" /* default */].utils.addEventListener(config.container, 'mouseleave', function (evt) {
        // console.log('Leave ' + printElement(evt.target) + ', relatedTarget: ' + (evt.relatedTarget && printElement(evt.relatedTarget) || 'none'));
        var tooltipNode = config.getTooltipElement(evt.target);

        if (tooltipNode) {
          if (_this4._tooltipElt === tooltipNode) {
            var tooltipData = config.getTooltipData && config.getTooltipData(tooltipNode);

            if (config.leavingTooltipElement && config.leavingTooltipElement(tooltipNode, tooltipData) === false) {
              // To leave displayed the tooltip after leaving the element we show the tooltip for.
              return;
            }

            if (evt.relatedTarget && config.getTooltipElement(evt.relatedTarget) === tooltipNode) {
              // If the element the mouse is moving in is still in the tooltip node, do nothing.
              return;
            }
          } // Otherwise hide the tooltip


          _this4.hideTooltip(TOOLTIP_FADING_TIME);
        }
      }, true);
    }
  }]);

  return Tooltip;
}(core["a" /* default */].components.Tooltip);

core["a" /* default */].components.Tooltip.impl = tooltip_Tooltip;

function printElement(elt) {
  return elt.tagName + (elt.id ? "#".concat(elt.id) : '') + (elt.className && elt.className.replace ? ".".concat(elt.className.replace(/ /g, '.')) : '');
}
// CONCATENATED MODULE: ./src/panel/layoutsynch.js







function sameBounds(rect1, rect2) {
  if (!rect1 || !rect2) {
    return !rect1 === !rect2;
  }

  return rect1.x === rect2.x && rect1.y === rect2.y && rect1.width === rect2.width && rect1.height === rect2.height;
}

function layoutsynch_bounds(x, y, width, height) {
  return {
    x: x,
    y: y,
    width: width,
    height: height,
    toString: function toString() {
      return "{ x = ".concat(this.x, ", y = ").concat(this.y, ", width = ").concat(this.width, ", height = ").concat(this.height, " }");
    }
  };
}

var layoutsynch_LayoutSynchronizer =
/*#__PURE__*/
function (_Gantt$components$Lay) {
  Object(inherits["a" /* default */])(LayoutSynchronizer, _Gantt$components$Lay);

  function LayoutSynchronizer(config, proto) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, LayoutSynchronizer);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(LayoutSynchronizer).call(this, config, config));
    _this.timeTableBounds = null;
    return _this;
  }

  Object(createClass["a" /* default */])(LayoutSynchronizer, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      if (config) {
        core["a" /* default */].utils.mergeObjects(this, config);
      }
    }
  }, {
    key: "connect",
    value: function connect(gantt) {
      var _this2 = this;

      this.gantt = gantt;

      this.resizeHandler = function (e) {
        _this2.checkBounds();
      };

      gantt.on([core["a" /* default */].events.RESIZED, core["a" /* default */].events.SPLIT_RESIZED], this.resizeHandler);

      this.timeWindowChangeListener = function (e, start, end) {
        _this2.timeWindowChanged(start, end);
      };

      gantt.on(core["a" /* default */].events.TIME_WINDOW_CHANGED, this.timeWindowChangeListener);

      this.timeLineSizeListener = function (e, width, height) {
        _this2.timeLineSizeChanged(width, height);
      };

      gantt.on(core["a" /* default */].events.TIME_LINE_SIZE_CHANGED, this.timeLineSizeListener);

      this.timeLineInitializedListener = function (e) {
        _this2.timeLineInitialized();
      };

      gantt.on(core["a" /* default */].events.TIME_LINE_INIT, this.timeLineInitializedListener);

      this.timeLineScrollListener = function (e, x) {
        _this2.timeLineScrolled(x);
      };

      gantt.on(core["a" /* default */].events.TIME_LINE_SCROLLED, this.timeLineScrollListener);
    }
  }, {
    key: "convertBounds",
    value: function convertBounds(bounds, elt) {
      var parent = core["a" /* default */].utils.offsetParent(elt);
      var parentBounds = core["a" /* default */].utils.getScreenPoint(parent);
      parentBounds.x = bounds.x - parentBounds.x;
      parentBounds.y = bounds.y - parentBounds.y;
      parentBounds.width = bounds.width;
      parentBounds.height = bounds.height;
      return parentBounds;
    } //
    // Time line methods
    //

  }, {
    key: "getTimeLine",
    value: function getTimeLine() {
      return this.gantt.timeLine;
    }
  }, {
    key: "getTimeLineWidth",
    value: function getTimeLineWidth() {
      return this.gantt.timeLine.getWidth();
    }
  }, {
    key: "getTimeLineHeight",
    value: function getTimeLineHeight() {
      return this.gantt.timeLine.getTimeAxisHeight();
    }
  }, {
    key: "getTimeLineScrollLeft",
    value: function getTimeLineScrollLeft() {
      return this.gantt.timeTable.getScroller().scrollLeft;
    }
  }, {
    key: "getTimeAt",
    value: function getTimeAt(x) {
      return this.gantt.timeLine.getTimeAt(x);
    }
  }, {
    key: "timeLineInitialized",
    value: function timeLineInitialized() {}
  }, {
    key: "timeTableBoundsChanged",
    value: function timeTableBoundsChanged(bounds) {}
  }, {
    key: "timeWindowChanged",
    value: function timeWindowChanged(start, end) {}
  }, {
    key: "timeLineSizeChanged",
    value: function timeLineSizeChanged(width, height) {}
  }, {
    key: "timeLineScrolled",
    value: function timeLineScrolled(x) {}
  }, {
    key: "checkBounds",
    value: function checkBounds() {
      var newBounds = this.getScreenTimeTableScrollerBounds();

      if (newBounds) {
        if (!sameBounds(this.timeTableBounds, newBounds)) {
          this.timeTableBounds = newBounds;
          this.timeTableBoundsChanged(newBounds);
        }
      }
    }
  }, {
    key: "getScreenTimeTableScrollerBounds",
    value: function getScreenTimeTableScrollerBounds() {
      if (!this.gantt.timeTable) {
        // Called from first cycle of the Gantt initialization
        return null;
      }

      var timeTableScroller = this.gantt.timeTable.getScroller();
      var pt = core["a" /* default */].utils.getScreenPoint(timeTableScroller);
      return layoutsynch_bounds(pt.x, pt.y, this.gantt.timeTable.getVisibleWidth(), this.gantt.timeTable.getVisibleHeight());
    }
  }, {
    key: "disconnect",
    value: function disconnect() {
      if (this.gantt) {
        this.gantt.off([core["a" /* default */].events.RESIZED, core["a" /* default */].events.SPLIT_RESIZED], this.resizeHandler);
        this.gantt.off(core["a" /* default */].events.TIME_WINDOW_CHANGED, this.timeWindowChangeListener);
        this.gantt.off(core["a" /* default */].events.TIME_LINE_SIZE_CHANGED, this.timeLineSizeListener);
        this.gantt.off(core["a" /* default */].events.TIME_LINE_INIT, this.timeLineInitializedListener);
        this.gantt.off(core["a" /* default */].events.TIME_LINE_SCROLLED, this.timeLineScrollListener);
      }
    }
  }, {
    key: "destroy",
    value: function destroy() {}
  }]);

  return LayoutSynchronizer;
}(core["a" /* default */].components.LayoutSynchronizer);


core["a" /* default */].components.LayoutSynchronizer.impl = layoutsynch_LayoutSynchronizer;
// EXTERNAL MODULE: ./src/panel/ganttpanel.scss
var ganttpanel = __webpack_require__(153);

// CONCATENATED MODULE: ./src/panel/ganttpanel.js



















/**
 * Gantt panel is structured as follows:
 *
 * <pre>
 *   .gantt-panel
 *   ------------------------------------------------------------------------------------------------------------
 *   | Split pane                                                                                               |
 *   | -------------------------------------------------------------------------------------------------------- |
 *   | | .table-panel      | .time-panel                                                                      | |
 *   | | ----------------- | -------------------------------------------------------------------------------  | |
 *   | | | Table         | | | .time-line-scroller                            .vertical-scroller-filler     | | |
 *   | | | ------------- | | | --------------------------------------------   ----------------------------  | | |
 *   | | | | Header    | | | | | Time Line                                |   |                          |  | | |
 *   | | | ------------- | | | --------------------------------------------   ----------------------------  | | |
 *   | | |               | | |                                                                              | | |
 *   | | |               | | | .time-table-scroller                                                         | | |
 *   | | | ------------- | | | ---------------------------------------------------------------------------  | | |
 *   | | | | Body    ^ | | | | | Time Table                                                            ^^ | | | |
 *   | | | |         : | | | | |< .............. timeTableWidthTester ...................................>| | | |
 *   | | | |         : | | | | |                                                                       :: | | | |
 *   | | | |         : | | | | |                                                 timeTableHeightTester :: | | | |
 *   | | | |         : | | | | |                                                                       :: | | | |
 *   | | | |         : | | | | |                                                                       v: | | | |
 *   | | ------------:-- | | ---------------------------------------------------------------------------:-- | | |
 *   | --------------:----------------------------------------------------------------------------------:------ |
 *   ----------------:----------------------------------------------------------------------------------:--------
 *                   :                                                                                  :
 *                   : Matches height of .time-table-body                              .time-table-body :
 *                   v                                                                                  v
 * </pre>
 */

var ganttpanel_GanttPanel =
/*#__PURE__*/
function (_Gantt$components$Gan) {
  Object(inherits["a" /* default */])(GanttPanel, _Gantt$components$Gan);

  function GanttPanel(node, config) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, GanttPanel);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(GanttPanel).call(this, node, config));

    _this.resizeHandler = function () {
      return _this.onResize();
    };

    _this.initPromise = core["a" /* default */].envReady().then(function () {
      return _this.setConfiguration(config);
    });
    return _this;
  }

  Object(createClass["a" /* default */])(GanttPanel, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this2 = this;

      if (this.splitPane) {
        this.destroy();
      }

      this.initializing = true;
      window.addEventListener('resize', this.resizeHandler);
      this.config = core["a" /* default */].utils.mergeObjects({}, core["a" /* default */].defaultConfiguration, config); // TODO

      this.rowHeight = this.config.rowHeight;
      this.zoomFactor = this.config.zoomFactor;

      if (this.tooltip && this.tooltip.destroy) {
        this.tooltip.destroy();
      }

      var TooltipClass = core["a" /* default */].components.Tooltip.impl || core["a" /* default */].components.Tooltip;
      this.tooltip = new TooltipClass(this.config.tooltip);

      if (this.config.title) {
        if (core["a" /* default */].utils.isFunction(this.config.title)) {
          this.title = this.config.title(this);
        } else {
          this.title = this.config.title;
        }
      } else this.title = null;

      var stringMatcher = core["a" /* default */].utils.stringMatches;
      var FilterClass = core["a" /* default */].components.Filter.impl || core["a" /* default */].components.Filter;
      this.rowFilter = core["a" /* default */].utils.mergeObjects(new FilterClass(this.config && this.config.rows && this.config.rows.filter), {
        stringMatches: function stringMatches(string, pattern) {
          return stringMatcher(string, pattern);
        },
        getObjectFilterMethodName: function getObjectFilterMethodName() {
          return 'acceptRow';
        },
        acceptString: function acceptString(row, columnData, rowIndex, text) {
          if (!text) {
            return true;
          }

          for (var col = 0; col < columnData.length; col++) {
            if (stringMatcher(columnData[col], text)) {
              return true;
            }
          }

          return false;
        }
      });
      this.activityFilter = core["a" /* default */].utils.mergeObjects(new FilterClass(this.config && this.config.tasks && this.config.tasks.filter), {
        stringMatches: function stringMatches(string, pattern) {
          return stringMatcher(string, pattern);
        },
        getObjectFilterMethodName: function getObjectFilterMethodName() {
          return 'acceptTask';
        },
        acceptString: function acceptString(activity, row, text) {
          var actName = activity.name;
          return !text || actName && stringMatcher(actName, text);
        }
      });

      if (this.config.table && this.config.table.hideEmptyRows) {
        this.setHideEmptyRows(true, true);
      }

      if (this.config.palette) {
        this.setPaletteConfiguration(this.config.palette);
      } else {
        this.palettes = {};
        this.defaultPalette = null;
      }

      var SelectionClass = core["a" /* default */].components.SelectionHandler.impl || core["a" /* default */].components.SelectionHandler;
      this.selectionHandler = new SelectionClass(this.config && this.config.selection, {
        setObjectSelected: function setObjectSelected(obj, selected) {
          if (selected) {
            obj.selected = true;
          } else {
            delete obj.selected;
          }
        }
      });
      var actType = this.selectionHandler.registerType({
        name: 'activity',
        accept: function accept(o) {
          return o.getObjectType() === core["a" /* default */].ObjectTypes.Activity;
        },
        clearSelectionMethod: 'clearActivitySelection',
        selectionChangedMethod: 'activitySelectionChanged',
        unselectionMethod: 'unselectActivities',
        selectionMethod: 'selectActivities'
      });
      var resType = this.selectionHandler.registerType({
        name: 'resource',
        accept: function accept(o) {
          return o.getObjectType() === core["a" /* default */].ObjectTypes.Resource;
        },
        clearSelectionMethod: 'clearResourceSelection',
        selectionChangedMethod: 'resourceSelectionChanged',
        unselectionMethod: 'unselectResources',
        selectionMethod: 'selectResources'
      });
      this.selectionHandler.registerType({
        name: 'constraint',
        accept: function accept(o) {
          return o.getObjectType() === core["a" /* default */].ObjectTypes.Constraint;
        },
        clearSelectionMethod: 'clearConstraintSelection',
        selectionChangedMethod: 'constraintSelectionChanged',
        unselectionMethod: 'unselectConstraints',
        selectionMethod: 'selectConstraints'
      });
      this.selectionHandler.registerType({
        name: 'reservation',
        accept: function accept(o) {
          return o.getObjectType() === core["a" /* default */].ObjectTypes.Reservation;
        },
        clearSelectionMethod: 'clearReservationSelection',
        selectionChangedMethod: 'reservationSelectionChanged',
        unselectionMethod: 'unselectReservations',
        selectionMethod: 'selectReservations'
      });
      var rowType = this.selectionHandler.registerType({
        name: 'row',
        clearSelectionMethod: 'clearRowSelection',
        selectionChangedMethod: 'rowSelectionChanged',
        unselectionMethod: 'unselectRows',
        selectionMethod: 'selectRows'
      });
      this.type = config && config.type || core["a" /* default */].type.SCHEDULE_CHART;
      var rc = this.isResourceGantt(); // Selection of objects that are rows for the Gantt chart (activities or resources) must generate row specific events

      var typeForRow = rc ? resType : actType;
      var defaultNotify = this.selectionHandler.notify;
      var handler = this.selectionHandler;

      this.selectionHandler.notify = function (type, event) {
        var args = new Array(arguments.length);

        for (var i = 0; i < arguments.length; i++) {
          args[i] = arguments[i];
        }

        defaultNotify.apply(handler, args);

        if (type === typeForRow) {
          args[0] = rowType;
          defaultNotify.apply(handler, args);
        }
      };

      var ErrorClass = core["a" /* default */].components.ErrorHandler.impl || core["a" /* default */].components.ErrorHandler;
      this.errorHandler = new ErrorClass(this.node, this.config && this.config.error);
      this.updates = new (core["a" /* default */].components.GanttUpdates.impl || core["a" /* default */].components.GanttUpdates)();
      var oldApplyUpdates = this.updates.applyUpdates;

      this.updates.applyUpdates = function () {
        var containsRowChanges = _this2.updates.containsRowChanges;
        oldApplyUpdates.call(_this2.updates);

        if (containsRowChanges) {
          // Time sheet scroller height depends on the height of the time sheet displays rows.
          // Call updateScrollerHeight without modifying the time sheet rows first has no effect
          _this2.updateScrollerHeight();
        }

        if (_this2.updates.hasTableScrollYChanged()) {
          var table = _this2.table && _this2.table.getScrollableTable();

          var scrollTop = table.scrollTop;

          _this2.timeTable.setScrollTop(scrollTop);
        }
      };

      this.model = null; // Create the Gantt

      try {
        this.create();
      } catch (err) {
        // Error already display in the Gantt
        return promise_default.a.reject(err);
      }

      try {
        // Constructs the model, not loading it yet
        // Load data if specified in the configuration
        this.model = this.createModel(this.config.data || this.createDefaultModelConfig());
        this.initializing = false;
        this.triggerEvent(core["a" /* default */].events.RESIZED);
        return this.model && this.load() || promise_default.a.resolve([]).then(function () {
          return _this2.updateScrollerHeight();
        });
      } catch (err) {
        this.errorHandler.addError(err, 'Error initializing the Gantt');
        return promise_default.a.reject(err);
      }
    }
  }, {
    key: "createDefaultModelConfig",
    value: function createDefaultModelConfig(config) {
      return {
        resources: {
          data: []
        },
        activities: {
          data: []
        },
        reservations: {
          data: []
        }
      };
    }
  }, {
    key: "createModel",
    value: function createModel(config) {
      var _this3 = this;

      var ModelClass = core["a" /* default */].components.GanttModel.impl || core["a" /* default */].components.GanttModel;
      var model = new ModelClass(this, config);
      model.on(core["a" /* default */].events.TIME_WINDOW_CHANGED, function (event, wnd) {
        return _this3.setTimeWindow(wnd);
      });
      return model;
    }
  }, {
    key: "create",
    value: function create() {
      var _this4 = this;

      var getLoadConfig = function getLoadConfig(p) {
        var c = _this4.config.loadResourceChart;
        return core["a" /* default */].utils.isArray(c) ? c.length ? c[0][p] : undefined : c[p];
      };

      if (this.loadChartCtrl) {
        this.loadChartCtrl.destroy();
        delete this.loadChartCtrl;
      }

      var loadChartHidden = !this.config.loadResourceChart || !getLoadConfig('visible');
      this.loadChartCtrl = new loadchartctrl_LoadResourceChartCtrl(this, !loadChartHidden);
      this.contentElt = document.createElement('div');
      this.contentElt.className = 'gantt-panel docloud-gantt';

      if (this.config.loadResourceChart) {
        this.contentElt.className += ' gantt-load-resource-chart ' + (loadChartHidden ? LOAD_RESOURCE_CHART_CLOSED : LOAD_RESOURCE_CHART_OPENED);
      }

      this.contentElt.style.position = 'relative';
      this.contentElt.style.display = 'flex';
      this.contentElt.style.flexDirection = 'column';
      this.contentElt.style.height = '100%';
      this.toolbars = null;

      if (this.config.toolbar) {
        this.createToolbars(this.config.toolbar);
      } else {
        this.toolbarElt = null;
      }

      if (this.config.classes) {
        core["a" /* default */].utils.addClass(this.contentElt, this.config.classes);
      }

      if (this.config.header) {
        this.headerElt = this.createHeader(this.config.header);

        if (this.headerElt !== null) {
          this.contentElt.appendChild(this.headerElt);
        }
      } else {
        this.headerElt = null;
      }

      this.node.appendChild(this.contentElt);
      var bodyElt = this.body = document.createElement('div');
      bodyElt.className = 'gantt-body';
      bodyElt.style.position = 'relative'; // Position must be set for the child split pane to get its offsetTop relative to it and have the tooltips positioning work...

      bodyElt.style.flexGrow = 1;
      bodyElt.style.flexShrink = 1; // Impressive hack: the flex layout does not manage well resizing of components of height initially to zero!

      bodyElt.style.height = '10px';
      this.errorHandler.node = bodyElt;
      this.contentElt.appendChild(bodyElt); // Need to be added here for the split pane to be created in a element in the DOM

      var bodyCtnr;
      var SplitClass = core["a" /* default */].components.Split.impl || core["a" /* default */].components.Split;

      if (this.config.loadResourceChart) {
        this.legendConfig = {
          selector: function selector() {
            return _this4.loadChartCtrl.isVisible();
          },
          background: this.loadChartCtrl.getRowBackground.bind(this.loadChartCtrl)
        };
        var h = 150;
        var hConfig = getLoadConfig('height');

        if (hConfig) {
          if (core["a" /* default */].utils.isFunction(hConfig)) {
            h = hConfig();
          } else if (core["a" /* default */].utils.isString(hConfig)) {
            h = number_parse_int_default()(hConfig, 10);
          } else {
            h = hConfig;
          }
        }

        try {
          this.loadChartSplit = new SplitClass(bodyElt, core["a" /* default */].utils.mergeObjects({}, this.config && this.config.divider, {
            pos: -h,
            horizontal: false,
            fixedFirst: false,
            hideSecond: !this.loadChartCtrl.isVisible()
          }));

          this.loadChartSplit.onDividerDragEnd = function (e) {
            if (_this4.initPromise) {
              _this4.initPromise.then(function () {
                _this4.triggerEvent(core["a" /* default */].events.SPLIT_RESIZED);

                _this4.onResize();
              });
            }
          };
        } catch (err) {
          this.errorHandler.addError(err, 'Load split pane initialization error', this.node);
          throw new Error('Load split pane initialization error');
        }

        bodyCtnr = this.loadChartSplit.getLeftComponent();
      } else {
        bodyCtnr = bodyElt;
        this.legendConfig = undefined;
      }

      try {
        this.splitPane = new SplitClass(bodyCtnr, this.config && this.config.divider);

        this.splitPane.onresized = function (e) {
          _this4.triggerEvent(core["a" /* default */].events.SPLIT_RESIZED);
        };
      } catch (err) {
        this.errorHandler.addError(err, 'Split pane initialization error', this.node);
        throw new Error('Split pane initialization error');
      } // Initialize the load resource chart if any
      // Initialization prior to table and timetable so that selection listeners are set before selection
      // listeners of those two components.


      this.loadCharts = null;
      this.loadResPanel = null;

      if (this.config.loadResourceChart) {
        this.loadResPanel = this.createLoadResourceChart(this.config.loadResourceChart);

        if (this.loadResPanel) {
          // Both width and height to 100% for IE
          this.loadResPanel.style.width = '100%';
          this.loadResPanel.style.height = '100%';
          this.loadChartSplit.getRightComponent().appendChild(this.loadResPanel);
          this.loadChartSplit.rightComponentCreated();
        }
      } // Initialize table panel


      this.tablePanel = null;
      var leftComp = this.splitPane.getLeftComponent();
      leftComp.style.overflow = 'hidden';

      try {
        this.tablePanel = this.createTreeTable(leftComp); // A non-zero width component has been created in the left component part of the split pane, we can now
        // fix the split position

        this.splitPane.leftComponentCreated();
      } catch (err) {
        this.errorHandler.addError(err, 'Tree table initialization error', this.tablePanel || this.node);
        throw new Error('Table creation error');
      } // Initialize the time panel


      var rightPanel = this.splitPane.getRightComponent();
      rightPanel.style.overflow = 'hidden';

      try {
        this.createTimePanel(rightPanel);
      } catch (err) {
        this.errorHandler.addError(err, 'Error creating the time panel', rightPanel);
        throw new Error('Time panel creation error');
      }

      try {
        this.createTimeLine(this.timeLineScroller);
      } catch (err) {
        this.errorHandler.addError(err, 'Error create the time line', this.timeLineScroller);
        throw new Error('Time line creation error');
      }

      if (this.toolbars) {
        for (var i = 0; i < this.toolbars.length; i++) {
          this.toolbars[i].connect(this, this.toolbars[i].node);
        }
      }
    }
  }, {
    key: "load",
    value: function load(config) {
      var _this5 = this;

      if (config) {
        if (this.model && this.model.destroy) {
          this.model.destroy();
        }

        this.model = this.createModel(config);
      }

      this.timeLineInit = null; // Loading panel

      this.loadingPanel = null;
      var loadTimeout = setTimeout(function () {
        _this5.loadingPanel = _this5.createLoadingPanel(_this5.config);

        _this5.body.appendChild(_this5.loadingPanel);
      }, this.config.loadingPanelThresold);

      var stopLoading = function stopLoading() {
        if (!_this5.loadingPanel) {
          clearTimeout(loadTimeout);
        } else {
          _this5.body.removeChild(_this5.loadingPanel);
        }

        _this5.loading = false;
      };

      return this.model.load().then(function (rows) {
        var wnd = _this5.getTimeWindow();

        if (!wnd || !wnd.start) {
          if (!rows.length) {
            // Empty Gantt, this is ok
            var today = new Date().getTime();
            var day = 1000 * 3600 * 24;

            _this5.setTimeWindow({
              start: today - day * 2,
              end: today + day * 2
            });
          } else {
            stopLoading();
            return promise_default.a.reject('No time window defined');
          }
        }

        _this5.loading = true;

        _this5.startUpdating();

        _this5._resourceGantt = _this5.isResourceGantt();
        core["a" /* default */].utils.toggleClass(_this5.contentElt, 'schedule_chart', _this5._resourceGantt);
        core["a" /* default */].utils.toggleClass(_this5.contentElt, 'activity_chart', !_this5._resourceGantt);
        core["a" /* default */].utils.toggleClass(_this5.contentElt, 'constraints_chart', _this5.hasConstraints);
        return promise_default.a.all([// Promise.all can be given non-promises as the parameter.
        // See example in https://developer.mozilla.org/en-US/docs/Web/JavaScript/Reference/Global_Objects/Promise/all
        _this5.table.setRows(rows) || rows, _this5.timeLineInit || rows]).then(function () {
          stopLoading(); // After table is initialized and time line ready with accurate time window
          // We can update the time table

          _this5.triggerEvent(core["a" /* default */].events.DATA_LOADED, rows);

          _this5.timeTable.setConstraints(_this5.model.constraints);

          _this5.updates.timeTable.reload();

          _this5.stopUpdating();

          if (_this5.toobars) {
            _this5.toolbars.forEach(function (bar) {
              bar.ganttLoaded(_this5, rows);
            });
          }

          return rows;
        });
      })["catch"](function (err) {
        stopLoading();

        _this5.errorHandler.addError(err, 'Loading error', _this5.tablePanel);

        return promise_default.a.reject(err);
      });
    }
  }, {
    key: "isResourceGantt",
    value: function isResourceGantt() {
      return !this.type || this.type !== core["a" /* default */].type.ACTIVITY_CHART;
    }
  }, {
    key: "hasConstraints",
    value: function hasConstraints() {
      return this.model && this.model.constraints && this.model.constraints.length;
    }
  }, {
    key: "isFlat",
    value: function isFlat() {
      return !this.model || this.model.isFlat();
    }
  }, {
    key: "getTimeWindow",
    value: function getTimeWindow() {
      return this.timeWindow;
    }
  }, {
    key: "setTimeWindow",
    value: function setTimeWindow(_ref) {
      var _this6 = this;

      var start = _ref.start,
          end = _ref.end;

      if (end === 0) {
        throw new Error("Invalid time window + ".concat(stringify_default()({
          start: start,
          end: end
        }), ", may not have been processed correctly"));
      }

      if (this.timeWindow && this.timeWindow.start === start && this.timeWindow.end === end) {
        return promise_default.a.resolve(this.timeWindow);
      }

      this.timeWindow = {
        start: start,
        end: end
      };
      return this.timeLineInit = this.timeLine.setTimeWindow(start, end).then(function (_ref2) {
        var start = _ref2.start,
            end = _ref2.end;

        _this6.updateTableHeaderHeight();

        _this6.updateWidthFromTimeLine();

        _this6.scrollTimeTableToX(_this6.timeLine.getXFromMillis(_this6.timeLine.getHorizon().start));

        _this6.updateTimeLineHeight();

        _this6.triggerEvent(core["a" /* default */].events.TIME_WINDOW_CHANGED, start, end);
      });
    }
  }, {
    key: "getBody",
    value: function getBody() {
      return this.body;
    }
  }, {
    key: "initialized",
    value: function initialized() {
      return this.initPromise;
    } // noinspection JSUnusedLocalSymbols

  }, {
    key: "createTreeTable",
    value: function createTreeTable(ctnr) {
      var _this7 = this;

      // Initialize table panel
      var tablePanel = document.createElement('div');
      tablePanel.className = 'table-panel';
      tablePanel.style.position = 'relative';
      tablePanel.style.height = '100%';
      tablePanel.style.width = '100%';
      tablePanel.style.overflow = 'hidden'; // If not setting the min width, the table width would be zero while data being loaded and
      // the split pane would not able to set its split position.

      tablePanel.style.minWidth = '100px';
      var TreeTableClass = core["a" /* default */].components.TreeTable.impl || core["a" /* default */].components.TreeTable;
      var tableConfig = this.config.table;

      if (this.legendConfig || this.config.rows) {
        var rowsConfig = core["a" /* default */].utils.mergeObjects({}, this.legendConfig && {
          rows: {
            renderer: this.legendConfig
          }
        }, {
          rows: this.config.rows
        });
        tableConfig = core["a" /* default */].utils.mergeObjects(rowsConfig, tableConfig);
      }

      this.table = new TreeTableClass(this, tablePanel, tableConfig);
      this.table.setRowFilter(this.rowFilter);
      this.updates.table = this.table.createUpdates(this.updates);
      ctnr.appendChild(tablePanel);
      window.addWheelListener(tablePanel, function (evt) {
        var factor = evt.deltaMode === 1
        /** DOM_DELTA_LINE */
        ? 32 : 0.8; // necessary for FF !

        var delta = factor * evt.deltaY || -evt.wheelDelta || evt.detail;

        _this7.timeTable.scrollToY(_this7.timeTable.getScrollTop() + delta);

        if (evt.preventDefault) {
          evt.preventDefault();
        }
      });
      return tablePanel;
    } // noinspection JSUnusedLocalSymbols

  }, {
    key: "createTimePanel",
    value: function createTimePanel(ctnr) {
      var _this8 = this;

      this.timePanel = document.createElement('div');
      this.timePanel.className = 'time-panel'; // CSS layout

      this.timePanel.style.position = 'relative';
      this.timePanel.style.height = '100%'; // Create the time right panel

      var vScrollerFiller = document.createElement('div');
      vScrollerFiller.className = 'vertical-scroller-filler'; // CSS layout

      vScrollerFiller.style.position = 'absolute';
      vScrollerFiller.style.right = 0;
      vScrollerFiller.top = 0;
      this.timePanel.appendChild(vScrollerFiller);

      this.updateTimeLineRightMargin = function () {
        var rightMargin = _this8.timeTable.getRightMargin();

        _this8.timeLineScroller.style.paddingRight = rightMargin ? "".concat(rightMargin, "px") : '0';
        vScrollerFiller.style.width = _this8.timeLineScroller.style.paddingRight;
        vScrollerFiller.style.display = rightMargin ? 'block' : 'none';
      };

      this.updateTableHeaderHeight = function (force) {
        if (!_this8.initializing && _this8.timeLine) {
          // Timeline is created after first resize events are fired
          var h = _this8.timeLine.getTimeAxisHeight();

          if (force || _this8.headersHeight !== h) {
            _this8.headersHeight = h;

            if (!_this8.table) {
              console.log('no table');
            }

            _this8.table.setHeaderHeight(h);

            if (h) {
              _this8.timeTablePanel.style.top = vScrollerFiller.style.height = "".concat(h, "px");
            }
          }
        }
      };

      this.timeLineScroller = document.createElement('div');
      this.timeLineScroller.className = 'time-line-scroller';
      this.timeLineScroller.style.overflow = 'hidden';
      this.timeLineScroller.style.width = '100%';
      this.timeLineScroller.style.height = '100%';
      this.timePanel.appendChild(this.timeLineScroller);
      this.timeTablePanel = document.createElement('div');
      this.timeTablePanel.className = 'time-table'; // CSS layout

      this.timeTablePanel.style.position = 'absolute';
      this.timeTablePanel.style.left = '0';
      this.timeTablePanel.style.right = '0';
      this.timeTablePanel.style.bottom = '0';
      this.timePanel.appendChild(this.timeTablePanel);
      var TimeTableClass = core["a" /* default */].components.TimeTable.impl || core["a" /* default */].components.TimeTable;
      var timeTableConfig = this.config && this.config.timeTable;

      if (this.legendConfig || this.config.rows) {
        var rowsConfig = core["a" /* default */].utils.mergeObjects({}, this.legendConfig && {
          rows: {
            renderer: this.legendConfig
          }
        }, this.config.rows && {
          rows: this.config.rows
        });
        timeTableConfig = core["a" /* default */].utils.mergeObjects(rowsConfig, timeTableConfig);
      }

      this.timeTable = new TimeTableClass(this, this.timeTablePanel, timeTableConfig);
      this.updates.timeTable = this.timeTable.createUpdates(this.updates);
      this.attachTimeTableMouseWheel(this.timeTable.getScroller());
      this.timeTable.getScroller().addEventListener('scroll', function (e) {
        _this8.timeLineScroller.scrollLeft = e.target.scrollLeft;

        _this8.triggerEvent(core["a" /* default */].events.TIME_LINE_SCROLLED, e.target.scrollLeft);
      });
      ctnr.appendChild(this.timePanel);
      return this.timePanel;
    }
  }, {
    key: "drawTimeTable",
    value: function drawTimeTable(clear) {
      if (clear && this.table.deleteDrawCache) {
        this.table.deleteDrawCache();
      }

      this.timeTable.draw(clear);
    }
  }, {
    key: "createLoadingPanel",
    value: function createLoadingPanel(config) {
      var lp = document.createElement('div');
      lp.className = 'loading-panel';
      lp.style.position = 'absolute';
      lp.style.left = '0';
      lp.style.right = '0';
      lp.style.top = '0';
      lp.style.bottom = '0';
      lp.style.display = 'flex';
      lp.style.alignItems = 'center';
      lp.style.justifyContent = 'center';
      var loaderCtnr = document.createElement('div');
      loaderCtnr.style.position = 'absolute';
      loaderCtnr.style.left = '50%';
      loaderCtnr.style.top = '50%';
      loaderCtnr.style.transform = 'translate(-50%, -50%)';
      var loader = document.createElement('div');
      loader.className = 'loader';
      loaderCtnr.appendChild(loader);
      lp.appendChild(loaderCtnr);
      var label = document.createElement('div');
      label.className = 'label';
      label.appendChild(document.createTextNode(core["a" /* default */].utils.getString('gantt.loading')));
      lp.appendChild(label);
      return lp;
    }
  }, {
    key: "createLoadResourceChart",
    value: function createLoadResourceChart(config) {
      var _this9 = this;

      var loadChartNode;
      var chartPanel;
      (core["a" /* default */].utils.isArray(config) && config.length && core["a" /* default */].utils.isArray(config[0]) ? config : [config]).forEach(function (loadConfig) {
        // Construct the bar node
        if (!chartPanel) {
          chartPanel = document.createElement('div');
          chartPanel.className = 'load-resource-chart-panel';
          chartPanel.style.flexShrink = 0;
          chartPanel.style.position = 'relative'; // IE specific

          chartPanel.style.display = 'flex';
          chartPanel.style.flexDirection = 'columm';
        }

        loadChartNode = document.createElement('div');
        loadChartNode.className = 'load-resource-chart';
        chartPanel.appendChild(loadChartNode);

        if (!_this9.loadCharts) {
          _this9.loadCharts = [];
        }

        var loadChart = new (core["a" /* default */].components.LoadResourceChart.impl || core["a" /* default */].components.LoadResourceChart)(_this9, loadChartNode, core["a" /* default */].utils.mergeObjects({}, loadConfig, {
          height: ''
        }));

        _this9.loadChartCtrl.addLoadResourceChart(loadChart);

        loadChart.node.style.flex = '1 1';

        _this9.loadCharts.push(loadChart);

        window.addWheelListener(loadChart.getScroller(), function (evt) {
          evt.preventDefault();
        });
      });
      return chartPanel;
    }
  }, {
    key: "toggleLoadChartVisible",
    value: function toggleLoadChartVisible() {
      this.setLoadChartVisible(!this.isLoadChartVisible());
    }
  }, {
    key: "setLoadChartVisible",
    value: function setLoadChartVisible(visible) {
      this.loadChartHidden = !visible;
      this.loadChartSplit.setRightComponentVisible(visible);
      core["a" /* default */].utils.toggleClass(this.contentElt, LOAD_RESOURCE_CHART_OPENED, visible);
      core["a" /* default */].utils.toggleClass(this.contentElt, LOAD_RESOURCE_CHART_CLOSED, !visible);
      this.loadChartCtrl.setVisible(visible);
      this.onResize();
    }
  }, {
    key: "isLoadChartVisible",
    value: function isLoadChartVisible() {
      return this.loadChartCtrl.isVisible();
    }
  }, {
    key: "getPanelNode",
    value: function getPanelNode() {
      return this.contentElt;
    }
  }, {
    key: "updateTimeLineHeight",
    value: function updateTimeLineHeight() {
      var bottomMargin = this.timeTable.getBottomMargin();
      this.timeLineScroller.style.paddingBottom = bottomMargin ? "".concat(bottomMargin, "px") : '0';
    }
  }, {
    key: "attachTimeTableMouseWheel",
    value: function attachTimeTableMouseWheel(scroller) {
      var _this10 = this;

      window.addWheelListener(scroller, function (evt) {
        if (evt.ctrlKey && evt.deltaY !== 0) {
          if (evt.deltaY < 0) {
            _this10.zoomIn(evt);
          } else {
            _this10.zoomOut(evt);
          }

          evt.preventDefault();
        }
      });
    } // noinspection JSUnusedLocalSymbols

  }, {
    key: "createTimeLine",
    value: function createTimeLine(timeLineCtnr) {
      var _this11 = this;

      var TimeLineClass = core["a" /* default */].components.TimeLine.impl || core["a" /* default */].components.TimeLine;
      this.timeLine = new TimeLineClass(this, timeLineCtnr, this.config);
      this.timeLine.on([core["a" /* default */].events.TIME_LINE_RANGE_CHANGE, core["a" /* default */].events.TIME_LINE_RANGE_CHANGED, core["a" /* default */].events.TIME_LINE_PAN_MOVED], function () {
        _this11.updateTableHeaderHeight();

        _this11.updateWidthFromTimeLine();

        _this11.drawTimeTable(true);
      });
      this.timeLine.on(core["a" /* default */].events.TIME_LINE_SIZE_CHANGED, function (e, w, h) {
        _this11.updateWidthFromTimeLine();

        _this11.drawTimeTable(true);

        _this11.triggerEvent(core["a" /* default */].events.TIME_LINE_SIZE_CHANGED, w, h);
      });
      this.timeLine.on(core["a" /* default */].events.TIME_LINE_INIT, function (e) {
        _this11.triggerEvent(core["a" /* default */].events.TIME_LINE_INIT);
      });
      return this.timeLine;
    }
  }, {
    key: "createToolbars",
    value: function createToolbars(config) {
      var _this12 = this;

      this.toolbars = [];
      var ToolbarClass = core["a" /* default */].components.Toolbar.impl || core["a" /* default */].components.Toolbar;
      var toolbarNode;
      this.toolbarElt = null;
      (core["a" /* default */].utils.isArray(config) && config.length && core["a" /* default */].utils.isArray(config[0]) ? config : [config]).forEach(function (barConfig) {
        if (barConfig.node) {
          if (core["a" /* default */].utils.isString(barConfig.node)) {
            toolbarNode = document.getElementById(barConfig.node);
          } else if (core["a" /* default */].utils.isDomElement(node)) {
            toolbarNode = node;
          } else if (core["a" /* default */].utils.isFunction(barConfig.node)) {
            toolbarNode = barConfig.node(_this12);
          } else {
            throw new Error('The toolbar.node must be a string(Dom element ID) or a Dom element or a function returning a Dom element');
          }

          barConfig = barConfig.components;
        } else {
          // Construct the bar node
          if (!_this12.toolbarElt) {
            _this12.toolbarElt = document.createElement('div');
            _this12.toolbarElt.className = 'gantt-toolbars';
            _this12.toolbarElt.style.flexShrink = 0;
          }

          toolbarNode = document.createElement('div');
          toolbarNode.className = 'gantt-toolbar';

          _this12.toolbarElt.appendChild(toolbarNode);
        }

        _this12.toolbars.push(new ToolbarClass(_this12, toolbarNode, barConfig));
      });

      if (this.toolbarElt) {
        this.contentElt.appendChild(this.toolbarElt);
      } // Wait for all toolbar components to be created before triggering onInitialized as components can refer to each others


      this.toolbars.forEach(function (t) {
        t.onInitialized();
      });
      return this.toolbarElt;
    }
  }, {
    key: "createHeader",
    value: function createHeader(config) {
      var header = document.createElement('div');
      header.className = 'gantt-header';

      if (core["a" /* default */].utils.isString(config)) {
        header.appendChild(document.createTextNode(config));
      } else if (core["a" /* default */].utils.isFunction(config)) {
        var _node = config(this);

        if (_node) {
          header.appendChild(_node);
        }
      }

      return header;
    }
  }, {
    key: "getRowCount",
    value: function getRowCount() {
      return this.table.getRowCount();
    }
  }, {
    key: "getRow",
    value: function getRow(param) {
      return this.table.getRow(param);
    }
  }, {
    key: "getRows",
    value: function getRows(selector) {
      return this.table.getRows(selector);
    }
  }, {
    key: "getVisibleRows",
    value: function getVisibleRows() {
      return this.table.getVisibleRows();
    }
  }, {
    key: "getVisibleHeight",
    value: function getVisibleHeight() {
      return this.timeTable.getVisibleHeight();
    }
  }, {
    key: "ensureRowVisible",
    value: function ensureRowVisible(param) {
      var row = this.table.getRow(param);

      if (!row) {
        throw new Error("Cannot find row for ".concat(param));
      }

      if (this.table.isRowFiltered(row)) {
        throw new Error("Cannot show the filtered row: ".concat(param));
      }

      this.table.expandParents(row);
      this.timeTable.scrollToRow(row);
    }
  }, {
    key: "isRowVisible",
    value: function isRowVisible(param) {
      return this.table.isRowVisible(param);
    }
  }, {
    key: "getFirstVisibleRow",
    value: function getFirstVisibleRow() {
      return this.table.getFirstVisibleRow();
    }
  }, {
    key: "setFirstVisibleRow",
    value: function setFirstVisibleRow(param) {
      this.timeTable.setFirstVisibleRow(this.getRow(param));
    }
  }, {
    key: "isRowFiltered",
    value: function isRowFiltered(param) {
      return this.table.isRowFiltered(param);
    }
  }, {
    key: "toggleCollapseRow",
    value: function toggleCollapseRow(param, collapse) {
      this.table.toggleCollapseRow(this.getRow(param), collapse);
    }
  }, {
    key: "scrollToY",
    value: function scrollToY(y) {
      this.timeTable.scrollToY(y);
    }
  }, {
    key: "getRowHeight",
    value: function getRowHeight(row) {
      row = this.getRow(row);
      return row && (row.activityRow ? row.activityRow.height : row.tr.offsetHeight);
    }
  }, {
    key: "draw",
    value: function draw(forceTableRedraw) {
      if (this.timeLine) {
        this.timeLine.draw(true);

        if (this.table.deleteDrawCache) {
          this.table.deleteDrawCache();
        }

        this.table.draw(forceTableRedraw);
        this.timeTable.draw();
        this.updateScrollerHeight();
      }
    }
  }, {
    key: "drawRows",
    value: function drawRows(selector) {
      var rows = this.getRows(selector);
      this.table.drawRows(rows);
      this.timeTable.drawRows(rows);
    }
  }, {
    key: "updateScrollerHeight",
    value: function updateScrollerHeight() {
      this.timeTable.setBodyHeight(this.loadOnDemand ? this.table.getRowCount() * this.getRowHeight() : this.table.getHeight());
      this.updateTimeLineRightMargin();
    }
  }, {
    key: "getRowActivities",
    value: function getRowActivities(row) {
      row = this.getRow(row);
      return row && row.activities || [];
    }
  }, {
    key: "getActivity",
    value: function getActivity(param, row) {
      if (row) {
        var acts = this.getRowActivities(row);

        if (core["a" /* default */].utils.isString(param)) {
          for (var i = 0, count = acts.length; i < count; ++i) {
            if (acts[i].id === param) {
              return acts[i];
            }
          }

          return undefined;
        }

        if (core["a" /* default */].utils.isInteger(param)) {
          return acts[param];
        }

        for (var _i = 0, _count = acts.length; _i < _count; ++_i) {
          if (acts[_i].getData() === param) {
            return acts[_i];
          }
        }
      } else {
        return this.model.getActivity(param);
      }
    }
  }, {
    key: "getActivityNode",
    value: function getActivityNode(param, res) {
      var activity = this.getActivity(param, res);
      return activity && activity.node;
    }
  }, {
    key: "getToolbarComponent",
    value: function getToolbarComponent(id) {
      for (var i = 0; i < this.toolbars.length; i++) {
        for (var j = 0; j < this.toolbars[i].components.length; j++) {
          var c = this.toolbars[i].components[j];

          if (c && id === c.id) {
            return c;
          }
        }
      }
    }
  }, {
    key: "onResize",
    value: function onResize() {
      if (this.timeLine && this.timeLine.onResize) {
        this.timeLine.onResize();
      }

      if (this.updateTimeLineRightMargin) {
        this.updateTimeLineRightMargin();
      }

      if (this.table && this.table.onResize) {
        this.table.onResize();
      }

      if (this.updateTableHeaderHeight && this.timeLine) {
        this.updateTableHeaderHeight(true);
      }

      if (this.table) {
        this.triggerEvent(core["a" /* default */].events.RESIZED);
      }

      if (this.timeTable && this.timeTable.onResize) {
        this.timeTable.onResize();
      }

      if (this.timeTable) {
        this.updateScrollerHeight();
      }
    }
  }, {
    key: "destroy",
    value: function destroy() {
      core["a" /* default */].plugins.call('destroy', this);

      if (this.errorHandler && this.errorHandler.destroy) {
        this.errorHandler.destroy();
      }

      if (this.splitPane && this.splitPane.destroy) {
        this.splitPane.destroy();
      }

      if (this.table && this.table.destroy) {
        this.table.destroy();
      }

      if (this.model && this.model.destroy) {
        this.model.destroy();
      }

      if (this.resizeHandler) {
        window.removeEventListener('resize', this.resizeHandler);
        this.resizeHandler = null;
      }

      if (this.updates) {
        this.updates.destroy();
      }

      if (this.toolbars) {
        this.toolbars.forEach(function (bar) {
          bar.destroy();
        });
        this.toobars = null;
      }

      while (this.node.firstChild) {
        this.node.removeChild(this.node.firstChild);
      }

      this.contentElt = null;
      this.table = null;
      this.body = null;
    }
  }, {
    key: "disconnect",
    value: function disconnect() {}
    /*             */

    /*     Rows    */

    /*             */

  }, {
    key: "highlightRow",
    value: function highlightRow(row, highlight, deselectAll) {
      if (typeof row === 'string') {
        row = this.table.getRow(row);
      }

      highlight = highlight === undefined || highlight;
      this.table.highlightRow(row, highlight, deselectAll);
      this.timeTable.highlightRow(row, highlight, deselectAll);
    }
    /*                */

    /*   Selection    */

    /*                */

  }, {
    key: "synchLayout",

    /*                         */

    /*   Layout synchronizer   */

    /*                         */
    value: function synchLayout(config) {
      var ls = new (core["a" /* default */].components.LayoutSynchronizer.impl || core["a" /* default */].components.LayoutSynchronizer)(config);
      ls.connect(this);
      return ls;
    }
    /*             */

    /*     Zoom    */

    /*             */

  }, {
    key: "resetZoom",
    value: function resetZoom() {
      this.timeLine.resetZoom();
      this.scrollTimeTableToX(this.timeLine.getXFromMillis(this.timeLine.getHorizon().start));
    }
  }, {
    key: "zoomIn",
    value: function zoomIn(evt) {
      this.zoom(this.zoomFactor, evt);
    }
  }, {
    key: "zoomOut",
    value: function zoomOut(evt) {
      this.zoom(-this.zoomFactor, evt);
    }
  }, {
    key: "zoom",
    value: function zoom(zoomFactor, evt) {
      zoomFactor = this.timeLine.validateZoomFactor(zoomFactor);

      if (zoomFactor !== 0) {
        var visibleW = this.timeTable.getVisibleWidth(); // When zooming, we want to keep the same time coordinate under the mouse, if mousewheel event is provided as a parameter.

        var xRef = evt && this.getTimeTableCoordinates(evt.target, {
          x: evt.offsetX,
          y: evt.offsetY
        }).x || this.timeTable.getScrollLeft() + visibleW / 2;
        var timeRef = this.timeLine.getTimeAt(xRef);
        xRef -= this.timeTable.getScrollLeft();
        this.timeLine.zoom(zoomFactor);
        var newScrollLeft = this.timeLine.getXFromMillis(timeRef) - xRef;
        this.scrollTimeTableToX(newScrollLeft);
      }
    }
  }, {
    key: "fitToContent",
    value: function fitToContent() {
      var timeRange = this.timeTable.getDisplayedActivitiesTimeRange();
      this.timeLine.setVisibleTimeWindow(timeRange);
      this.scrollTimeTableToX(this.timeLine.getXFromMillis(timeRange && timeRange.start || this.timeLine.getHorizon().start));
    }
  }, {
    key: "updateScrollFromTimeLine",
    value: function updateScrollFromTimeLine() {}
  }, {
    key: "updateWidthFromTimeLine",
    value: function updateWidthFromTimeLine() {
      this.timeTable.setBodyWidth(this.timeLine.getWidth());
    }
    /*                        */

    /*    Search and filter   */

    /*                        */

  }, {
    key: "addFilter",
    value: function addFilter(filter, rows, activities) {
      var result = {
        activities: activities && this.activityFilter.addFilter(filter)
      };
      var actFilter = result.activities;

      if (rows) {
        // noinspection JSUnusedLocalSymbols
        result.row = actFilter ? this.rowFilter.addOrFilters(filter, function (row, columnData, rowIndex) {
          var count = row.activities.length;
          var params = [null, row];

          for (var i = 0; i < count; i++) {
            params[0] = row.activities[i];

            if (actFilter(params)) {
              return true;
            }
          }

          return false;
        }) : this.rowFilter.addFilter(filter);
      }

      if (result.row || result.activities) {
        this.filterChanged();
        return result;
      }

      return null;
    }
  }, {
    key: "removeFilter",
    value: function removeFilter(key, preventNotify) {
      var success = false;

      if (key) {
        if (key.row) {
          success = this.rowFilter.removeFilter(key.row);
        }

        if (key.activities) {
          success = this.activityFilter.removeFilter(key.activities);
        }

        if (this.searchFilter === key) {
          this.searchFilter = null;
        }
      }

      if (success && !preventNotify) {
        this.filterChanged();
      }

      return success;
    }
  }, {
    key: "search",
    value: function search(text, rows, activities) {
      if (this.searchFilter) {
        if (this.searchFilter.row) {
          this.rowFilter.removeFilter(this.searchFilter.row);
        }

        if (this.searchFilter.activities) {
          this.activityFilter.removeFilter(this.searchFilter.activities);
        }
      }

      if (text && (rows || activities)) {
        this.searchFilter = this.addFilter(text, rows, activities);
      } else {
        this.searchFilter = null;
        this.filterChanged();
      }
    }
  }, {
    key: "setHideEmptyRows",
    value: function setHideEmptyRows(hide, preventNotify) {
      var _this13 = this;

      if (hide && !this.hideEmptyRowsFilter || !hide && this.hideEmptyRowsFilter) {
        if (this.hideEmptyRowsFilter) {
          this.rowFilter.removeFilter(this.hideEmptyRowsFilter);
          this.hideEmptyRowsFilter = null;
        } else {
          // noinspection JSUnusedLocalSymbols
          this.hideEmptyRowsFilter = this.rowFilter.addFilter(function (row, columnData, rowIndex) {
            var activityFilter = _this13.activityFilter;
            activityFilter = activityFilter && !activityFilter.isEmpty() ? activityFilter : null;
            var count = row.activities && row.activities.length;

            if (!count || !activityFilter) {
              return count;
            }

            for (var i = 0; i < count; i++) {
              if (activityFilter.accept(row.activities[i], row)) {
                return true;
              }
            }

            return false;
          });
        }

        if (!preventNotify) {
          this.filterChanged();
        }

        return true;
      }

      return false;
    }
  }, {
    key: "filterChanged",
    value: function filterChanged() {
      if (this.table && this.timeTable) {
        this.table.filterChanged();
        var table = this.table && this.table.getScrollableTable();
        this.updateScrollerHeight();
        var scrollTop = table.scrollTop;
        this.timeTable.setScrollTop(scrollTop);
        this.drawTimeTable(true);
        this.triggerEvent(core["a" /* default */].events.ROWS_FILTERED);
      }
    }
    /*             */

    /*     Title   */

    /*             */

  }, {
    key: "getTitle",
    value: function getTitle() {
      return this.title;
    }
  }, {
    key: "setTitle",
    value: function setTitle(title) {
      this.title = title;
      this.triggerEvent(core["a" /* default */].events.TITLE_CHANGED, title);
    }
    /*                */

    /*   Row colors   */

    /*                */

  }, {
    key: "setRowColor",
    value: function setRowColor(row, color) {
      row.color = color;

      if (this.table.setRowColor) {
        this.table.setRowColor(row, color);
      }

      if (this.timeTable.setRowColor) {
        this.timeTable.setRowColor(row, color);
      }
    }
    /*             */

    /*     Utils   */

    /*             */
    // noinspection JSUnusedGlobalSymbols

  }, {
    key: "centerTimeSheetOnX",
    value: function centerTimeSheetOnX(x) {
      this.scrollTimeTableToX(x - this.timeTable.getVisibleWidth() / 2);
    }
  }, {
    key: "scrollTimeTableToX",
    value: function scrollTimeTableToX(x) {
      x = Math.min(Math.max(Math.round(x), 0), this.timeTable.getBodyWidth() - this.timeTable.getVisibleWidth());
      this.timeTable.setScrollLeft(x);

      if (this.loadChartCtrl) {
        this.loadChartCtrl.timeTableXScrolled(x);
      }

      this.triggerEvent(core["a" /* default */].events.TIME_LINE_SCROLLED, x);
    }
  }, {
    key: "getTimeTableCoordinates",
    value: function getTimeTableCoordinates(target, position) {
      var _this14 = this;

      return core["a" /* default */].utils.walkToAncestor([this.timeTable.getScroller(), this.timeLineScroller], target, function (parent, node, position) {
        if (parent === _this14.timeLineScroller) {
          position.x += _this14.timeTable.getScrollLeft();
        } else if (parent === _this14.timeTable.getScroller()) {
          return position;
        }

        return {
          x: position.x + node.offsetLeft - parent.scrollLeft,
          y: position.y + node.offsetTop - parent.scrollTop
        };
      }, {
        x: position && position.x || 0,
        y: position && position.y || 0
      });
    }
  }, {
    key: "addTimeMarker",
    value: function addTimeMarker(id, time, classes) {
      this.timeLine.addTimeMarker(id, time, classes);
    }
  }, {
    key: "removeTimeMarker",
    value: function removeTimeMarker(id) {
      this.timeLine.removeTimeMarker(id);
    }
  }, {
    key: "setTimeLineItem",
    value: function setTimeLineItem(id, item) {
      this.timeLine.setTimeLineItem(id, item);
    }
  }, {
    key: "addTimeLineItem",
    value: function addTimeLineItem(id, item) {
      this.timeLine.addTimeLineItem(id, item);
    }
  }, {
    key: "removeTimeLineItem",
    value: function removeTimeLineItem(id) {
      this.timeLine.removeTimeLineItem(id);
    }
    /*             */

    /*    Errors   */

    /*             */

  }, {
    key: "hasErrors",
    value: function hasErrors() {
      return this.errorHandler.hasErrors();
    }
    /*             */

    /*   Palettes  */

    /*             */

  }, {
    key: "setPaletteConfiguration",
    value: function setPaletteConfiguration(config) {
      if (core["a" /* default */].utils.isArray(config) || core["a" /* default */].utils.isFunction(config)) {
        this.palettes = null;
        this.defaultPalette = new (core["a" /* default */].components.Palette.impl || core["a" /* default */].components.Palette)(config);
      } else if (core["a" /* default */].utils.isString(config)) {
        this.palettes = null;
        this.defaultPalette = core["a" /* default */].defaultPalettes[config];

        if (!this.defaultPalette) {
          console.error("Palette [".concat(config, "] does not exist"));
        }
      } else {
        var paletteNames = keys_default()(config);

        this.palettes = {};
        this.defaultPalette = null;

        for (var i = 0, count = paletteNames.length; i < count; ++i) {
          this.palettes[paletteNames[i]] = new (core["a" /* default */].components.Palette.impl || core["a" /* default */].components.Palette)(config[paletteNames[i]]);
        }
      }
    }
  }, {
    key: "getPalette",
    value: function getPalette(name) {
      if (!name) {
        return this.defaultPalette || core["a" /* default */].defaultPaletteName && core["a" /* default */].defaultPalettes[core["a" /* default */].defaultPaletteName];
      }

      return this.palettes && this.palettes[name] || core["a" /* default */].defaultPalettes[name];
    }
    /*             */

    /*   Updates   */

    /*             */

  }, {
    key: "startUpdating",
    value: function startUpdating() {
      this.updates.startUpdating();
    }
  }, {
    key: "stopUpdating",
    value: function stopUpdating() {
      if (this.updates.stopUpdating()) {// nothing to do
      }
    }
  }, {
    key: "rowsChanged",
    value: function rowsChanged(event, rows) {
      this.updates.startUpdating();
      this.triggerEvent(event, rows);
      this.updates.rowsChanged(event, rows);
      this.updates.stopUpdating();
    }
  }, {
    key: "selection",
    get: function get() {
      return this.selectionHandler;
    },
    set: function set(sel) {
      var currentSel = this.selectionHandler && this.selectionHandler.get();

      if (this.selectionHandler) {
        this.selectionHandler.destroy();
      }

      this.selectionHandler = sel;

      if (this.selectionHandler) {
        if (currentSel && currentSel.length) {
          this.selectionHandler.select(sel);
        }
      }
    }
  }]);

  return GanttPanel;
}(core["a" /* default */].components.GanttPanel);

core["a" /* default */].components.GanttPanel.impl = ganttpanel_GanttPanel;
/* harmony default export */ var panel_ganttpanel = (ganttpanel_GanttPanel);
// CONCATENATED MODULE: ./src/panel/index.js


// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/object/get-own-property-descriptor.js
var get_own_property_descriptor = __webpack_require__(86);
var get_own_property_descriptor_default = /*#__PURE__*/__webpack_require__.n(get_own_property_descriptor);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/reflect/get.js
var get = __webpack_require__(64);
var get_default = /*#__PURE__*/__webpack_require__.n(get);

// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/superPropBase.js

function _superPropBase(object, property) {
  while (!Object.prototype.hasOwnProperty.call(object, property)) {
    object = Object(getPrototypeOf["a" /* default */])(object);
    if (object === null) break;
  }

  return object;
}
// CONCATENATED MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/get.js




function get_get(target, property, receiver) {
  if (typeof Reflect !== "undefined" && get_default.a) {
    get_get = get_default.a;
  } else {
    get_get = function _get(target, property, receiver) {
      var base = _superPropBase(target, property);
      if (!base) return;

      var desc = get_own_property_descriptor_default()(base, property);

      if (desc.get) {
        return desc.get.call(receiver);
      }

      return desc.value;
    };
  }

  return get_get(target, property, receiver || target);
}
// CONCATENATED MODULE: ./src/core/dragdrop.js



var defaultConfig = {
  keySpeed: 10,
  showMoveOnInvalid: true,
  dragActivationThresoldWidth: 5,
  dragActivationThresoldHeight: 5
};

var dragdrop_DragDropHandler =
/*#__PURE__*/
function () {
  function DragDropHandler(container, config) {
    Object(classCallCheck["a" /* default */])(this, DragDropHandler);

    core["a" /* default */].utils.mergeObjects(this, defaultConfig, config);
    this.container = container;
    this.initialMouseX = undefined;
    this.initialMouseY = undefined;
    this.startX = undefined;
    this.startY = undefined;
    this.dXKeys = undefined;
    this.dYKeys = undefined;
    this.draggedObject = undefined;
    this.clickedObject = undefined;
    this.handlers = [];
    this.methodsToHitch = [];
    this.hitchedMethods = [];
  }

  Object(createClass["a" /* default */])(DragDropHandler, [{
    key: "addHandler",
    value: function addHandler(handler) {
      this.handlers.push(handler);
    } // noinspection JSUnusedGlobalSymbols

  }, {
    key: "removeHandler",
    value: function removeHandler(handler) {
      var index = this.handlers.indexOf(handler);

      if (index > -1) {
        this.handlers.splice(index, 1);
        return true;
      }

      return false;
    }
  }, {
    key: "attach",
    value: function attach(element) {
      var _this = this;

      element.onmousedown = function (e) {
        return _this.startDragMouse(e);
      };
    }
  }, {
    key: "startDragMouse",
    value: function startDragMouse(e) {
      var evt = e || window.event;

      if (evt.button === 2) {
        // Right button, we cancel the drag if any
        if (this.draggedObject) {
          this.cancel(evt);
        }
      } else if (!evt.button) {
        this.initialMouseX = evt.clientX;
        this.initialMouseY = evt.clientY;
        evt.target.blur();
        this.connectDragStarter(evt);
        return false;
      }
    }
  }, {
    key: "connectDragStarter",
    value: function connectDragStarter(evt) {
      // Drag will be triggered only if the mouse moves more than options.dragActivationThresoldWidth / options.dragActivationThresoldHeight
      this.initOffsetX = evt.offsetX;
      this.initOffsetY = evt.offsetY;
      this.clickedObject = evt.target;
      this.dXKeys = this.dYKeys = 0;
      this.addEventListener(document, 'mousemove', this.checkStartDrag);
      this.addEventListener(document, 'mouseup', this.cancelDragStarter);
      this.addEventListener(document, 'keydown', this.dragStarterKeys);
      this.addEventListener(document, 'keypress', this.dragStartSwitchKeyEvents);
    }
  }, {
    key: "checkStartDrag",
    value: function checkStartDrag(e) {
      var evt = e || window.event;
      var dX = evt.clientX - this.initialMouseX;
      var dY = evt.clientY - this.initialMouseY;

      if (Math.abs(dX) >= this.dragActivationThresoldWidth || Math.abs(dY) >= this.dragActivationThresoldHeight) {
        this.cancelDragStarter();

        if (this.startDrag()) {
          this.move(dX, dY);
        }
      }
    }
  }, {
    key: "dragStartSwitchKeyEvents",
    value: function dragStartSwitchKeyEvents() {
      // for Opera and Safari 1.3
      this.removeEventListener(document, 'keydown', this.dragStarterKeys);
      this.removeEventListener(document, 'keypress', this.switchKeyEvents);
      this.addEventListener(document, 'keypress', this.dragStarterKeys);
    }
  }, {
    key: "dragStarterKeys",
    value: function dragStarterKeys(e) {
      var evt = e || window.event;
      var key = evt.keyCode;

      switch (key) {
        case 37: // left

        case 63234:
          this.dXKeys -= this.keySpeed;
          break;

        case 38: // up

        case 63232:
          this.dYKeys -= this.keySpeed;
          break;

        case 39: // right

        case 63235:
          this.dXKeys += this.keySpeed;
          break;

        case 40: // down

        case 63233:
          this.dYKeys += this.keySpeed;
          break;

        case 13: // enter

        case 27:
          // escape
          if (evt.preventDefault) evt.preventDefault();
          this.cancelDragStarter(evt);
          return false;

        default:
          return true;
      }

      if (evt.preventDefault) evt.preventDefault();
      this.cancelDragStarter(); // Any movement key pressed triggers the start of the drag

      if (this.startDrag()) {
        this.move(this.dXKeys, this.dYKeys);
      }

      return false;
    }
  }, {
    key: "cancelDragStarter",
    value: function cancelDragStarter() {
      this.removeEventListener(document, 'mousemove', this.checkStartDrag);
      this.removeEventListener(document, 'mouseup', this.cancelDragStarter);
      this.removeEventListener(document, 'keypress', this.dragStarterKeys);
      this.removeEventListener(document, 'keypress', this.dragStartSwitchKeyEvents);
      this.removeEventListener(document, 'keydown', this.dragStarterKeys);
    }
  }, {
    key: "startDrag",
    value: function startDrag() {
      var obj = this.startMove(this.clickedObject, this.initOffsetX, this.initOffsetY);

      if (!obj) {
        return false;
      }

      if (this.draggedObject) {
        this.releaseElement();
      }

      this.addEventListener(document, 'mousemove', this.dragMouse);
      this.addEventListener(document, 'mouseup', this.dropped);
      this.addEventListener(document, 'keydown', this.dragKeys);
      this.addEventListener(document, 'keypress', this.switchKeyEvents);
      this.startX = obj.offsetLeft;
      this.startY = obj.offsetTop;
      this.initLeft = obj.style.left;
      this.initTop = obj.style.top;
      this.initParentNode = obj.parentNode;
      this.draggedObject = obj;
      this.invalid = false;
      obj.className += ' dragged';
      return true;
    }
  }, {
    key: "callHandlers",
    value: function callHandlers(meth, evt) {
      var result;
      var i;
      var handler;

      for (i = 0; i < this.handlers.length; i++) {
        handler = this.handlers[i];

        if (handler[meth]) {
          result = handler[meth](evt);

          if (result !== undefined && !result) {
            return false;
          }
        }
      }

      return result;
    }
  }, {
    key: "startMove",
    value: function startMove(obj, offsetX, offsetY) {
      var result = this.callHandlers('startMove', obj, offsetX, offsetY);
      return result === undefined ? obj : result;
    }
  }, {
    key: "dragMouse",
    value: function dragMouse(e) {
      var evt = e || window.event;
      var dX = evt.clientX - this.initialMouseX;
      var dY = evt.clientY - this.initialMouseY;
      this.move(dX, dY);
      return false;
    }
  }, {
    key: "move",
    value: function move(dx, dy) {
      var i;
      var handler;
      var result;
      var pos = {
        dx: dx,
        dy: dy,
        x: this.startX + dx,
        y: this.startY + dy
      }; // Check if move valid

      this.invalid = false;

      for (i = 0; i < this.handlers.length; i++) {
        handler = this.handlers[i];

        if (handler.move) {
          result = handler.move(pos);

          if (result !== undefined && !result) {
            this.invalid = true;
          }
        }
      }

      if (this.invalid && !this.showMoveOnInvalid) {
        return false;
      }

      this.moved(dx, dy);

      if (pos.x !== undefined) {
        this.draggedObject.style.left = "".concat(pos.x, "px");
      }

      if (pos.y !== undefined) {
        this.draggedObject.style.top = "".concat(pos.y, "px");
      }

      return true;
    }
  }, {
    key: "dragKeys",
    value: function dragKeys(e) {
      var evt = e || window.event;
      var key = evt.keyCode;

      switch (key) {
        case 37: // left

        case 63234:
          this.dXKeys -= this.keySpeed;
          break;

        case 38: // up

        case 63232:
          this.dYKeys -= this.keySpeed;
          break;

        case 39: // right

        case 63235:
          this.dXKeys += this.keySpeed;
          break;

        case 40: // down

        case 63233:
          this.dYKeys += this.keySpeed;
          break;

        case 13: // enter

        case 27:
          // escape
          this.cancel(evt);
          return false;

        default:
          return true;
      }

      this.move(this.dXKeys, this.dYKeys);
      if (evt.preventDefault) evt.preventDefault();
      return false;
    }
  }, {
    key: "addEventListener",
    value: function addEventListener(elt, event, method, capturing) {
      var _this2 = this;

      var index = this.methodsToHitch.indexOf(method);
      var hitched = index >= 0 ? this.hitchedMethods[index] : null;

      if (index < 0) {
        this.methodsToHitch.push(method);
        this.hitchedMethods.push(hitched = function hitched(e) {
          return method.call(_this2, e);
        });
      } else {
        hitched = this.hitchedMethods[index];
      }

      if (capturing) {
        core["a" /* default */].utils.addEventListener(elt, event, hitched, true);
      } else {
        core["a" /* default */].utils.addEventListener(elt, event, hitched);
      }
    }
  }, {
    key: "removeEventListener",
    value: function removeEventListener(elt, event, method) {
      var index = this.methodsToHitch.indexOf(method);

      if (index >= 0) {
        core["a" /* default */].utils.removeEventListener(elt, event, this.hitchedMethods[index]);
      }
    }
  }, {
    key: "switchKeyEvents",
    value: function switchKeyEvents() {
      // for Opera and Safari 1.3
      this.removeEventListener(document, 'keydown', this.dragKeys);
      this.removeEventListener(document, 'keypress', this.switchKeyEvents);
      this.addEventListener(document, 'keypress', this.dragKeys);
    } // noinspection JSUnusedLocalSymbols

  }, {
    key: "moved",
    value: function moved(dx, dy) {
      this.callHandlers('moved');
    }
  }, {
    key: "stopDrag",
    value: function stopDrag() {
      this.callHandlers('stopMove');
    }
  }, {
    key: "cancel",
    value: function cancel(evt) {
      this.restoreInitPosition();
      this.callHandlers('cancel');
      this.releaseElement(evt);
    }
  }, {
    key: "restoreInitPosition",
    value: function restoreInitPosition() {
      if (this.draggedObject) {
        if (this.callHandlers('restoreInitPosition') !== false) {
          this.draggedObject.style.left = this.initLeft;
          this.draggedObject.style.top = this.initTop;

          if (this.initParentNode !== this.draggedObject.parentNode) {
            this.initParentNode.appendChild(this.draggedObject);
          }
        }
      }
    }
  }, {
    key: "dropped",
    value: function dropped(e) {
      var evt = e || window.event;

      if (!evt.button && this.draggedObject) {
        // Drag and drop may have been cancelled through a right click or pressing the Esc key
        var dX = evt.clientX - this.initialMouseX;
        var dY = evt.clientY - this.initialMouseY;
        this.move(dX, dY, true);
        this.applyMove();
        this.releaseElement(evt);
      }
    }
  }, {
    key: "applyMove",
    value: function applyMove() {
      this.callHandlers('applyMove');
    }
  }, {
    key: "releaseElement",
    value: function releaseElement(evt) {
      this.stopDrag(evt);
      this.removeEventListener(document, 'mousemove', this.dragMouse);
      this.removeEventListener(document, 'mouseup', this.dropped);
      this.removeEventListener(document, 'keypress', this.dragKeys);
      this.removeEventListener(document, 'keypress', this.switchKeyEvents);
      this.removeEventListener(document, 'keydown', this.dragKeys);
      core["a" /* default */].utils.removeClass(this.draggedObject, 'dragged');
      this.draggedObject = null;
    }
  }]);

  return DragDropHandler;
}();


// CONCATENATED MODULE: ./src/timetable/css-classes.js
var TIME_MARKER_DRAG_ITEM = 'dragg-item';
var TIME_TABLE_ACTIVITY_CLASSNAME = 'time-table-activity';
var TIME_TABLE_ROW = 'time-table-row';
var UNSELECTABLE_CLASSNAME = 'g-unselectable';
var DEFAULT_ACTIVITY_CLASSNAME = "".concat(TIME_TABLE_ACTIVITY_CLASSNAME, " ").concat(UNSELECTABLE_CLASSNAME);
var MILESTONE_CLASSNAME = "".concat(DEFAULT_ACTIVITY_CLASSNAME, " milestone");
var PARENT_ACTIVITY_CLASSNAME = "".concat(DEFAULT_ACTIVITY_CLASSNAME, " parent-activity");
var HIGHLIGHT_CLASS = 'highlight';
var SELECTION_CLASS = 'selected';
var SELECT_CONTENT_CLASSNAME = 'select-content';
var DECORATION_INVALID_TYPE = 'invalid';
var DECORATION_INVALID_CLASS = 'time-table-invalid';
var DECORATION_BREAK_TYPE = 'break';
var DECORATION_BREAK_CLASS = 'time-table-break';
// CONCATENATED MODULE: ./src/timetable/activityrenderer.js


var ActivityRendererPrototype = {
  createShape: function createShape(activity) {
    var elt = document.createElement('div');
    var start = activity.start;
    var end = activity.end;

    if (end === start) {
      elt.className = MILESTONE_CLASSNAME;
      elt.style.border = 'none';
      elt.style.maxWidth = '0';
      var diamond = document.createElement('div');
      diamond.className = 'shape';
      diamond.style.position = 'absolute';
      diamond.style.top = '8px';
      diamond.style.left = '0';
      diamond.style.right = '0';
      diamond.style.bottom = '-8px';
      diamond.style.minWidth = '16px';
      diamond.style.maxHeight = '16px';
      diamond.style.background = 'inherit';
      elt.appendChild(diamond);
    } else if (activity.children && activity.children.length) {
      elt.className = PARENT_ACTIVITY_CLASSNAME;
      elt.style.display = 'block';
      elt.style.backgroundColor = 'transparent';
      var bar = document.createElement('div');
      bar.className = 'parent-activity-bar';
      bar.style.width = '100%';
      bar.style.height = '50%';
      elt.appendChild(bar);
      var triangleBar = document.createElement('div');
      var triangleWidth = 7;
      triangleBar.style.width = '100%';
      triangleBar.style.height = '50%';
      triangleBar.style.backgroundColor = 'transparent';
      var leftTriangle = document.createElement('div');
      leftTriangle.className = 'top-left-triangle activity-limit';
      leftTriangle.style.display = 'inline-block';
      leftTriangle.style["float"] = 'left';
      leftTriangle.style.width = '0';
      leftTriangle.style.height = '0';
      leftTriangle.style.borderTopStyle = 'solid';
      leftTriangle.style.borderTopWidth = "".concat(triangleWidth, "px");
      leftTriangle.style.borderRightStyle = 'solid';
      leftTriangle.style.borderRightWidth = "".concat(triangleWidth, "px");
      leftTriangle.style.borderRightColor = 'transparent';
      triangleBar.appendChild(leftTriangle);
      var rightTriangle = document.createElement('div');
      rightTriangle.className = 'top-right-triangle activity-limit';
      triangleBar.appendChild(rightTriangle);
      rightTriangle.style.display = 'inline-block';
      rightTriangle.style["float"] = 'right';
      rightTriangle.style.width = '0';
      rightTriangle.style.height = '0';
      rightTriangle.style.borderTopStyle = 'solid';
      rightTriangle.style.borderTopWidth = "".concat(triangleWidth, "px");
      rightTriangle.style.borderLeftStyle = 'solid';
      rightTriangle.style.borderLeftWidth = "".concat(triangleWidth, "px");
      rightTriangle.style.borderLeftColor = 'transparent';
      elt.appendChild(triangleBar);
    } else {
      elt.className = DEFAULT_ACTIVITY_CLASSNAME;
    }

    var selElt = document.createElement('div');
    selElt.className = SELECT_CONTENT_CLASSNAME;
    selElt.style.height = '100%';
    selElt.style.display = 'flex';
    selElt.style.justifyContent = 'space-between';
    selElt.style.alignItems = 'center';
    selElt.style.border = 'none';
    elt.appendChild(selElt);
    return elt;
  },
  drawRightContent: function drawRightContent(elt, icon, text, object) {
    var textCtnr = document.createElement('div');
    textCtnr.style.position = 'absolute';
    textCtnr.className = 'text-container right';
    textCtnr.style.left = '100%';
    textCtnr.style.top = '0';
    textCtnr.style.height = '100%';

    if (icon) {
      var img = document.createElement('img');
      img.className = 'image-content';
      img.src = icon;
      img.alt = '';
      textCtnr.appendChild(img);
    }

    elt.style.overflowX = 'visible';
    var t = document.createElement('span');
    t.className = 'text-content';
    t.innerHTML = text;
    textCtnr.appendChild(t);
    elt.appendChild(textCtnr);
    object.label = {
      getTextWidth: function getTextWidth() {
        return t.offsetWidth;
      },
      getTextHeight: function getTextHeight() {
        return t.offsetHeight;
      },
      move: function move(left, dist) {
        core["a" /* default */].utils.toggleClass(textCtnr, 'left', left);
        textCtnr.style.marginLeft = 0; // Default one is for margin on text without links

        if (left) {
          textCtnr.style.left = "".concat(-dist, "px");
          textCtnr.style.paddingLeft = 0;
        } else {
          textCtnr.style.left = '100%';
          textCtnr.style.paddingLeft = "".concat(dist, "px");
        }
      }
    };
    return textCtnr;
  },
  getText: function getText(activity) {
    return activity.name;
  },
  getTooltipProperties: function getTooltipProperties(act) {
    var props = [core["a" /* default */].utils.getString('gantt.start'), new Date(act.start).format(), core["a" /* default */].utils.getString('gantt.end'), new Date(act.end).format()];

    if (act.id !== undefined) {
      props.push(core["a" /* default */].utils.getString('gantt.id'));
      props.push(act.id);
    }

    return props;
  },
  processConfiguration: function processConfiguration(selector, config) {
    this.defaultProcessConfiguration(selector, config);

    if (config.rowHeight) {
      this.addRowHeightConfiguration(selector, config.rowHeight);
    }

    if (config.generateRowDecorations) {
      this.addGenerateRowDecorations(selector, config.generateRowDecorations);
    }

    if (config.generateDecorations) {
      this.addGenerateDecorations(selector, config.generateDecorations);
    }
  },
  initialized: function initialized(config) {
    var _this = this;

    var gantt = this.paletteHandler;
    this.defaultSetBackground = this.setBackground;
    this.drawDefaultContentSet = this.drawDefaultContent;

    this.ganttLoadListener = function (e) {
      if (gantt.isResourceGantt()) {
        _this.drawDefaultContent = _this.drawNoDisplayOverflowContent;
        _this.setBackground = _this.defaultSetBackground;
        _this.drawDefaultContent = _this.drawDefaultContentSet;
      } else {
        // TODO Don't put a setter in a get...
        _this.setBackground = function (shapeElt, bg) {
          if (core["a" /* default */].utils.hasClass('parent-activity')) {
            shapeElt.querySelectorAll('.activity-limit').forEach(function (elt) {
              elt.style.borderColor = bg;
            });
            shapeElt.querySelector('parent-activity-bar').style.backgroundColor = bg;
          } else {
            this.drawDefaultContentSet(shapeElt, bg);
          }
        };

        _this.drawDefaultContent = _this.drawRightContent;
      }
    };

    gantt.on(core["a" /* default */].events.DATA_LOADED, this.ganttLoadListener);
  },
  destroy: function destroy() {
    if (this.ganttLoadListener) {
      var gantt = this.paletteHandler;
      gantt.off(core["a" /* default */].events.DATA_LOADED, this.ganttLoadListener);
      this.ganttLoadListener = null;
    }
  },
  addRowHeightConfiguration: function addRowHeightConfiguration(selector, config) {
    var rowHeight;

    if (typeof config === 'function') {
      rowHeight = config;
    } else if (typeof config === 'string') {
      var getter = core["a" /* default */].utils.propertyEvaluator(config);

      if (getter) {
        rowHeight = function rowHeight(object, ctx) {
          return getter(object, ctx);
        };
      }
    } else {
      rowHeight = function rowHeight() {
        return config;
      };
    }

    if (rowHeight) {
      var oldRowHeight = this.rowHeight;

      this.rowHeight = function (object, ctx) {
        if (!selector || selector(object)) {
          return rowHeight(object, ctx);
        }

        return oldRowHeight && oldRowHeight(object, ctx);
      };
    }
  },
  //
  // Decoration management
  //
  addGenerateRowDecorations: function addGenerateRowDecorations(selector, config) {
    var generateRowDecorations;

    if (typeof config === 'function') {
      generateRowDecorations = config;
    } else if (typeof config === 'string') {
      var getter = core["a" /* default */].utils.propertyEvaluator(config);

      if (getter) {
        generateRowDecorations = function generateRowDecorations(row, start, end, ctx) {
          return getter(row, start, end, ctx);
        };
      }
    } else {
      throw new Error('generateRowDecorations must be a function or an accessor to a row method');
    }

    if (generateRowDecorations) {
      var oldGenerateRowDecorations = this.generateRowDecorations;

      this.generateRowDecorations = function (row, start, end, ctx) {
        var decorations = oldGenerateRowDecorations && oldGenerateRowDecorations(row, start, end, ctx) || null;

        if (!selector || selector(row)) {
          var newDecos = generateRowDecorations(row, start, end, ctx);

          if (newDecos && newDecos.length) {
            return !decorations || !decorations.length ? newDecos : decorations.concat(newDecos);
          }
        }

        return decorations;
      };
    }
  },
  addGenerateDecorations: function addGenerateDecorations(selector, config) {
    var generateDecorations;

    if (typeof config === 'function') {
      generateDecorations = config;
    } else {
      throw new Error('generateDecorations must be a function');
    }

    if (generateDecorations) {
      var oldGenerateDecorations = this.generateDecorations;

      this.generateDecorations = function (start, end, ctx) {
        var decorations = oldGenerateDecorations && oldGenerateDecorations(start, end, ctx) || null;

        if (!selector || selector(ctx)) {
          var newDecos = generateDecorations(start, end, ctx);

          if (newDecos && newDecos.length) {
            return !decorations || !decorations.length ? newDecos : decorations.concat(newDecos);
          }
        }

        return decorations;
      };
    }
  }
};
/* harmony default export */ var activityrenderer = (ActivityRendererPrototype);
// CONCATENATED MODULE: ./src/timetable/rowrenderer.js

var RowRendererPrototype = {
  createShape: function createShape(activity, parentElt) {
    return parentElt;
  }
};
/* harmony default export */ var rowrenderer = (RowRendererPrototype);
// CONCATENATED MODULE: ./src/timetable/activitylayout.js







var defaultOptions = {
  cascadeOffset: 5,
  topMargin: 1,
  bottomMargin: 1,
  subRowPadding: 1,
  constantRowHeight: false,
  compareBoundingBoxes: false,
  miniWidth: 4
};
var STRATEGY_LOGISTIC = 'logistic';
var STRATEGY_TILE = 'tile';
var STRATEGIES = {};
var MINI_ACTIVITY_CLASS = 'mini-activity';
var MILESTONE = 'milestone';

STRATEGIES[STRATEGY_LOGISTIC] = function (row) {
  // this is the activity layout calling this function
  activitylayout_ActivityLayout.sortTasksOnStart(row);
  var subRowsCount = activitylayout_ActivityLayout.computeSubRows(row);
  var offset;
  var actHeight = row.height - this.topMargin - this.bottomMargin - 1;

  if (subRowsCount > 1) {
    offset = this.cascadeOffset;
    actHeight = Math.max(actHeight - this.cascadeOffset * (subRowsCount - 1), 0);

    if (actHeight === 0) {
      offset = 0;
    }
  }

  var actCount = row.activities && row.activities.length || 0;

  for (var iAct = 0, act; iAct < actCount; ++iAct) {
    act = row.activities[iAct];

    if (act.node) {
      act.node.style.top = "".concat(this.topMargin + offset * act.subRowIndex, "px");
      act.node.style.height = actHeight;
    }
  }
};

STRATEGIES[STRATEGY_TILE] = function (row) {
  var rowHeight = row.tableRowHeight;
  var topMargin = this.topMargin;
  var bottomMargin = this.bottomMargin;
  var subRowHeight = rowHeight - topMargin - bottomMargin - 1;

  if (subRowHeight <= 0) {
    subRowHeight = 1;
    var availMargin = rowHeight - subRowHeight;
    topMargin = availMargin * topMargin / (topMargin + bottomMargin);
    bottomMargin = availMargin - topMargin;
  } // Compute the overlap, tiling, and number of subrows required to accommodate the
  // graphics. First, we associate each graphic with its the bounds in view coordinates.
  // Then we sort the array by start time or x position, depending on the overlap
  // detection strategy being used.


  var activitiyComparator = this.compareBoundingBoxes ? function (act1, act2) {
    return act1.left - act2.left;
  } : function (act1, act2) {
    return act1.start - act2.start;
  };
  row.activities.sort(activitiyComparator); // Finally, assign graphics to subrows, increasing the number of subrows as
  // necessary so that the graphics do not overlap.

  var subRows = this.setTaskSubRows(row); // For constant row height, we subdivide the row's current height into the required
  // number of subrows. For constant subrow height, we expand the row to accommodate the
  // required number of subrows

  var subRowMargin = this.subRowPadding;

  if (this.constantRowHeight) {
    if (subRowMargin * (subRows.length - 1) >= subRowHeight) {
      subRowMargin = subRowHeight / (subRows.length - 1);
    }

    subRowHeight = (subRowHeight - (subRows.length - 1) * subRowMargin) / subRows.length;
  } else {
    rowHeight = topMargin + bottomMargin + subRows.length * subRowHeight + (subRows.length - 1) * subRowMargin; // Set the row height so that each subrow has the chart's global row
    // height.

    row.setRowHeight(Math.round(rowHeight));
  } // Set the vertical bounds of the activities in each subrow.


  var top = topMargin;
  var subRowTasks;
  var task;

  for (var i = 0, iTask; i < subRows.length; i++) {
    subRowTasks = subRows[i];

    for (iTask = 0; iTask < subRowTasks.length; iTask++) {
      task = subRowTasks[iTask];
      task.node.style.top = "".concat(top, "px");
      task.node.style.height = "".concat(subRowHeight, "px");
    }

    top += subRowHeight + subRowMargin;
  }
};

var activitylayout_ActivityLayout =
/*#__PURE__*/
function (_Gantt$components$Act) {
  Object(inherits["a" /* default */])(ActivityLayout, _Gantt$components$Act);

  function ActivityLayout(config, proto, ctx) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, ActivityLayout);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(ActivityLayout).call(this, config));
    core["a" /* default */].utils.mergeObjects(Object(assertThisInitialized["a" /* default */])(_this), defaultOptions, config, proto);
    _this.ctx = ctx;

    if (_this.strategy) {
      if (typeof config.strategy === 'string') {
        _this.getLayoutStrategy = function () {
          return _this.strategy;
        };
      } else if (typeof _this.strategy === 'function') {
        _this.getLayoutStrategy = function () {
          return _this.strategy(_this.ctx);
        };
      }
    }

    return _this;
  }

  Object(createClass["a" /* default */])(ActivityLayout, [{
    key: "layout",
    value: function layout(row) {
      if (row.activities && row.activities.length) {
        var strategyKey = this.getLayoutStrategy();
        var vLayout;
        this.layoutHorizontally(row);

        if (strategyKey && (vLayout = STRATEGIES[strategyKey])) {
          vLayout.call(this, row);
        } else {
          var act;
          var elt;

          for (var iAct = 0; iAct < row.activities.length; iAct++) {
            act = row.activities[iAct];
            elt = act.node;

            if (elt) {
              elt.style.top = "".concat(this.topMargin, "px");
              elt.style.height = "".concat(row.height - this.topMargin - this.bottomMargin - 1, "px");
            }
          }
        }
      }
    }
    /**
     * @return {string}
     */

  }, {
    key: "allowVariableRowHeight",
    value: function allowVariableRowHeight() {
      var strategyKey = this.getLayoutStrategy();

      if (strategyKey && strategyKey === STRATEGY_TILE) {
        return !this.constantRowHeight;
      }

      return false;
    }
  }, {
    key: "layoutHorizontally",
    value: function layoutHorizontally(row) {
      var act;
      var elt;
      var left;
      var actCount = row.activities.length;

      for (var iAct = 0; iAct < actCount; iAct++) {
        act = row.activities[iAct];
        elt = act.node;

        if (elt) {
          left = act.left = row.getX(act.start);
          elt.style.left = "".concat(left, "px");
          elt.style.width = "".concat(act.width = row.getX(act.end) - left + 1, "px");

          if (act.width <= this.miniWidth && !core["a" /* default */].utils.hasClass(elt, MILESTONE)) {
            act.width = this.miniWidth;
            elt.style.width = "".concat(act.width, "px");
            core["a" /* default */].utils.addClass(elt, MINI_ACTIVITY_CLASS);
          }
        }
      }
    }
  }, {
    key: "getLayoutStrategy",
    // noinspection JSMethodCanBeStatic
    value: function getLayoutStrategy() {
      return null;
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "layoutVertically",
    value: function layoutVertically(row) {
      row.subRows = [];
    }
    /*                                  */

    /*      Tiling specific methods     */

    /*                                  */

    /**
     * Creates as many subrows as needed to accommodate the given activity graphics and
     * assigns the activity graphics to the subrows. The activity graphics are provided
     * with their view bounding boxes as an array of {@link GraphicBounds}. This allows
     * the tiling policy to take advantage of the precomputed activity bounding boxes when
     * computing graphic overlap and assigning activity graphics to subrows. The result of
     * this method is a list of subrows, where each subrow is a list of {@link
     * GraphicBounds} representing the activities assigned to the subrow. All activity
     * graphics provided as input to the tiling policy must be assigned to one and only
     * one subrow.
     *
     * @param graphics             The activity graphics to be tiled into subrows, as an
     *                             array of {@link GraphicBounds}. If <code>compareBoundingBoxes</code>
     *                             is <code>true</code> then the array will be sorted by
     *                             the x position of each activity graphic's bounding box.
     *                             If <code>compareBoundingBoxes</code> is
     *                             <code>false</code> then the array will be sorted by the
     *                             start time of each activity. Note, that the bounding
     *                             boxes are provided as input only. Modifying the
     *                             bounding box of a {@link GraphicBounds} will not affect
     *                             how an activity is positioned.
     * @param compareBoundingBoxes Indicates whether the tiling policy should compute
     *                             activity overlap by comparing the graphic bounding
     *                             boxes. If <code>false</code>, activity overlap should
     *                             be computed by comparing the activity time intervals.
     * @return The list of subrows, where each subrow is a list of {@link GraphicBounds}
     *         representing the activities assigned to the subrow.
     */

  }, {
    key: "setTaskSubRows",
    value: function setTaskSubRows(row) {
      var subRows = [];
      var act;
      var iSubRow;

      for (var iAct = 0, actCount = row.activities && row.activities.length || 0; iAct < actCount; ++iAct) {
        act = row.activities[iAct];

        if (act.node) {
          for (iSubRow = 0; iSubRow < subRows.length; iSubRow++) {
            if (this.addGraphicToSubRowIfFits(act, subRows[iSubRow])) {
              break;
            }
          }

          if (iSubRow === subRows.length) {
            subRows.push([act]);
          }
        }
      }

      return subRows;
    }
    /**
     * Adds the specified task to the specified subRow if it fits. If the
     * task is successfully added to the list of graphics for the subrow, this method
     * returns true. If the graphic does not fit into the subrow, this method returns
     * false. If the graphic does not fit into any of the existing subrows, the tiling
     * policy will create a new subrow for the graphic. Note, that a graphic must always
     * succeed in being added to an empty subrow.
     *
     * @param activity             The activity to add.
     * @param subRow               The subRow, represented as a list of activities.
     */

  }, {
    key: "addGraphicToSubRowIfFits",
    value: function addGraphicToSubRowIfFits(activity, subRow) {
      // Adding a graphic to an empty subrow must always succeed.
      if (!subRow.length) {
        subRow.push(activity);
      } // Otherwise, check whether the graphic fits at the end of the subRow.
      else {
          var lastRowTask = subRow[subRow.length - 1];

          if (this.compareBoundingBoxes) {
            if (activity.left < lastRowTask.left + lastRowTask.width) {
              return false;
            }
          } else if (activity.start < lastRowTask.end) {
            return false;
          }

          subRow.push(activity);
        }

      return true;
    }
  }], [{
    key: "sortTasksOnStart",
    value: function sortTasksOnStart(row) {
      row.activities.sort(function (act1, act2) {
        return act1.start - act2.start;
      });
    }
  }, {
    key: "computeSubRows",
    value: function computeSubRows(row) {
      var endTimes = [];
      var endTime;
      var iAct;
      var act;
      var e;
      var endTimesCount = 0;
      var actCount = row.activities && row.activities.length || 0;

      for (iAct = 0; iAct < actCount; ++iAct) {
        act = row.activities[iAct];

        if (act.node) {
          for (e = 0; e < endTimesCount; e++) {
            endTime = endTimes[e];

            if (act.start === endTime || act.start > endTime) {
              break;
            }
          }

          act.subRowIndex = e;

          if (e < endTimesCount) {
            endTimes[e] = act.end;
          } else {
            endTimes.push(act.end);
            endTimesCount++;
          }
        }
      }

      return endTimesCount;
    }
  }, {
    key: "STRATEGY_LOGISTIC",
    get: function get() {
      return STRATEGY_LOGISTIC;
    }
    /**
     * @return {string}
     */

  }, {
    key: "STRATEGY_TILE",
    get: function get() {
      return STRATEGY_TILE;
    }
  }, {
    key: "STRATEGIES",
    get: function get() {
      return STRATEGIES;
    }
  }]);

  return ActivityLayout;
}(core["a" /* default */].components.ActivityLayout);


core["a" /* default */].components.ActivityLayout.impl = activitylayout_ActivityLayout;
// CONCATENATED MODULE: ./src/constraintgraph/linkrenderer.js






var ID_DELIM = '_';
var CONSTRAINT_LINK_CLASS = 'constraint-link';
var CONSTRAINT_LINK_CTNR_CLASS = 'constraint-link-ctnr';
var STYLE_ARROW = 1;
var CONSTRAINT_ARROW = 'constraint-arrow';

var linkrenderer_NodeLabelLayout =
/*#__PURE__*/
function () {
  function NodeLabelLayout() {
    Object(classCallCheck["a" /* default */])(this, NodeLabelLayout);
  }

  Object(createClass["a" /* default */])(NodeLabelLayout, [{
    key: "startLayout",
    value: function startLayout(act, ctx) {}
  }, {
    key: "getNodeToLabelSpacing",
    value: function getNodeToLabelSpacing(act, bbox, textWidth, ctx) {}
  }]);

  return NodeLabelLayout;
}();

var linkrenderer_DefaultNodeLabelLayout =
/*#__PURE__*/
function (_NodeLabelLayout) {
  Object(inherits["a" /* default */])(DefaultNodeLabelLayout, _NodeLabelLayout);

  function DefaultNodeLabelLayout(left) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, DefaultNodeLabelLayout);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(DefaultNodeLabelLayout).call(this));
    _this.left = left;
    return _this;
  }

  Object(createClass["a" /* default */])(DefaultNodeLabelLayout, [{
    key: "getNodeToLabelSpacing",
    value: function getNodeToLabelSpacing(act, bbox, textWidth, ctx) {
      return this.left ? -ctx.nodeToLinkPadding : ctx.nodeToLinkPadding;
    }
  }]);

  return DefaultNodeLabelLayout;
}(linkrenderer_NodeLabelLayout);

var LinkRendererPrototype = {
  drawLink: function drawLink(object, points, style, parentElt, ctx) {
    if (points.length < 2) return null;
    var lastX = points[0].x;
    var lastY = points[0].y;
    var nodes = [];
    var color = this.color ? this.color(object, ctx) : undefined;
    var css = this.getCSS && this.getCSS(object, ctx);
    var w = this.lineWidth && this.lineWidth(object, ctx);
    var i = 0;
    var line;
    var pt;
    var horiz; // eslint-disable-next-line no-constant-condition

    while (true) {
      line = document.createElement('div');
      line.style.position = 'absolute';
      line.style.pointerEvents = 'auto';
      pt = points[++i];
      if (object && object.id) line.id = object.id + ID_DELIM + i;
      horiz = pt.y === lastY;
      line.className = "".concat(CONSTRAINT_LINK_CLASS, " ").concat(horiz ? 'constraint-horiz-link' : 'constraint-vert-link');

      if (this.linkOutlineWidth) {
        line.className = "".concat(CONSTRAINT_LINK_CTNR_CLASS, " ").concat(horiz ? 'constraint-horiz-link' : 'constraint-vert-link');

        if (horiz) {
          line.style.height = "".concat((w || 1) + this.linkOutlineWidth + this.linkOutlineWidth, "px");
          line.style.paddingTop = line.style.paddingBottom = "".concat(this.linkOutlineWidth, "px");
          line.style.top = "".concat(lastY - this.linkOutlineWidth, "px");
          line.style.left = "".concat(Math.min(lastX, pt.x), "px");
          line.style.width = "".concat(Math.abs(lastX - pt.x) + (i && lastX > pt.x ? w || 1 : 0), "px");
          if (css) line.className += " ".concat(css);
          var link = document.createElement('div');
          link.className = "".concat(CONSTRAINT_LINK_CLASS, " constraint-horiz-link");
          if (w) link.style.height = "".concat(w, "px");
          link.style.width = '100%';
          line.appendChild(link);
        } else {
          line.style.width = "".concat((w || 1) + this.linkOutlineWidth + this.linkOutlineWidth, "px");
          line.style.paddingLeft = line.style.paddingRight = "".concat(this.linkOutlineWidth, "px");
          line.style.left = "".concat(lastX - this.linkOutlineWidth, "px");
          line.style.top = "".concat(Math.min(lastY, pt.y), "px");
          line.style.height = "".concat(Math.abs(lastY - pt.y), "px");
          if (css) line.className += " ".concat(css);

          var _link = document.createElement('div');

          _link.className = "".concat(CONSTRAINT_LINK_CLASS, " constraint-vert-link");
          if (w) _link.style.width = "".concat(w, "px");
          _link.style.height = '100%';
          line.appendChild(_link);
        }
      } else if (horiz) {
        if (w) line.style.height = "".concat(w, "px");
        line.style.top = "".concat(lastY, "px");
        line.style.left = "".concat(Math.min(lastX, pt.x), "px");
        line.style.width = "".concat(Math.abs(lastX - pt.x) + (i && lastX > pt.x ? w || 1 : 0), "px");
        if (css) line.className += " ".concat(css);
      } else {
        if (w) line.style.width = "".concat(w, "px");
        line.style.left = "".concat(lastX, "px");
        line.style.top = "".concat(Math.min(lastY, pt.y), "px");
        line.style.height = "".concat(Math.abs(lastY - pt.y), "px");
        if (css) line.className += " ".concat(css);
      }

      nodes.push(line);
      parentElt.appendChild(line);

      if (i === points.length - 1) {
        if (style === STYLE_ARROW) {
          if (horiz) {
            var arrowWidth = this.arrowWidth(object, ctx);
            var arrowHeight = this.arrowHeight(object, ctx);

            if (lastX < pt.x) {
              line = this.drawRightArrow(pt.x, lastY, arrowWidth, arrowHeight, color);
            } else {
              line = this.drawLeftArrow(pt.x, lastY, arrowWidth, arrowHeight, color);
            }

            line.style.pointerEvents = 'auto';
            if (css) line.className += " ".concat(css);
            if (object && object.id) line.id = "".concat(object.id + ID_DELIM, "arrow");
            nodes.push(line);
            parentElt.appendChild(line);
          }
        }

        return nodes;
      }

      lastX = pt.x;
      lastY = pt.y;
    }
  },
  drawLeftArrow: function drawLeftArrow(x, y, arrowWidth, arrowHeight, color) {
    var node = document.createElement('div');
    node.style.position = 'absolute';
    node.className = "".concat(CONSTRAINT_ARROW, " constraint-left-arrow");
    node.style.left = "".concat(x, "px");
    node.style.top = "".concat(y - (arrowHeight - 1), "px");
    node.style.width = '0';
    node.style.height = '0';
    node.style.borderTop = "".concat(arrowHeight, "px solid transparent");
    node.style.borderBottom = "".concat(arrowHeight, "px solid transparent");
    node.style.borderRightWidth = "".concat(arrowWidth, "px");
    node.style.borderRightStyle = 'solid';
    if (color) node.style.borderRightColor = color;
    return node;
  },
  drawRightArrow: function drawRightArrow(x, y, arrowWidth, arrowHeight, color) {
    var node = document.createElement('div');
    node.style.position = 'absolute';
    node.className = "".concat(CONSTRAINT_ARROW, " constraint-right-arrow");
    node.style.left = "".concat(x - arrowWidth, "px");
    node.style.top = "".concat(y - (arrowHeight - 1), "px");
    node.style.width = '0';
    node.style.height = '0';
    node.style.borderTop = "".concat(arrowHeight, "px solid transparent");
    node.style.borderBottom = "".concat(arrowHeight, "px solid transparent");
    node.style.borderLeftWidth = "".concat(arrowWidth, "px");
    node.style.borderLeftStyle = 'solid';
    if (color) node.style.borderLeftColor = color;
    return node;
  },
  arrowWidth: function arrowWidth() {
    return 5;
  },
  arrowHeight: function arrowHeight() {
    return 5;
  },
  getTooltipProperties: function getTooltipProperties(cons, ctx) {
    var getName = function getName(act) {
      return act.name || act.id;
    };

    var props = [core["a" /* default */].utils.getString('gantt.constraintChart.from'), getName(cons.from), core["a" /* default */].utils.getString('gantt.constraintChart.to'), getName(cons.to), core["a" /* default */].utils.getString('gantt.constraintChart.type')];
    var type;
    if (cons.type === core["a" /* default */].constraintTypes.START_TO_START) type = core["a" /* default */].utils.getString('gantt.constraintChart.start.start');else if (cons.type === core["a" /* default */].constraintTypes.START_TO_END) type = core["a" /* default */].utils.getString('gantt.constraintChart.start.end');else if (cons.type === core["a" /* default */].constraintTypes.END_TO_END) type = core["a" /* default */].utils.getString('gantt.constraintChart.end.end');else type = core["a" /* default */].utils.getString('gantt.constraintChart.end.start');
    props.push(type);
    return props;
  },
  processConfiguration: function processConfiguration(selector, config) {
    this.defaultProcessConfiguration(selector, config);

    if (config.lineWidth) {
      this.addLineWidthConfiguration(selector, config.lineWidth);
    }

    if (config.arrowWidth) {
      this.addArrowConfiguration(selector, config.arrowWidth, 'arrowWidth');
    }

    if (config.arrowHeight) {
      this.addArrowConfiguration(selector, config.arrowWidth, 'arrowHeight');
    }

    if (config.nodeLabelLayout) {
      this.addNodeLabelLayoutConfiguration(selector, config.nodeLabelLayout);
    }
  },
  setColor: function setColor(elt, color) {
    elt.style.color = color;
  },
  destroy: function destroy() {},
  addLineWidthConfiguration: function addLineWidthConfiguration(selector, config) {
    var lineWidth;

    if (typeof config === 'function') {
      lineWidth = config;
    } else if (typeof config === 'string') {
      var getter = core["a" /* default */].utils.propertyEvaluator(config);

      if (getter) {
        lineWidth = function lineWidth(object, ctx) {
          return getter(object, ctx);
        };
      }
    } else {
      lineWidth = function lineWidth() {
        return config;
      };
    }

    if (lineWidth) {
      var oldLineWidth = this.lineWidth;

      this.lineWidth = function (object, ctx) {
        if (!selector || selector(object, ctx)) {
          return lineWidth(object, ctx);
        }

        return oldLineWidth && oldLineWidth(object, ctx);
      };
    }
  },
  addArrowConfiguration: function addArrowConfiguration(selector, config, field) {
    var arrowSize;

    if (typeof config === 'function') {
      arrowSize = config;
    } else if (typeof config === 'string') {
      var getter = core["a" /* default */].utils.propertyEvaluator(config);

      if (getter) {
        arrowSize = function arrowSize(object, ctx) {
          return getter(object, ctx);
        };
      }
    } else {
      arrowSize = function arrowSize() {
        return config;
      };
    }

    if (arrowSize) {
      var oldArrowSize = this[field];

      this[field] = function (object, ctx) {
        if (!selector || selector(object, ctx)) {
          return arrowSize(object, ctx);
        }

        return oldArrowSize && oldArrowSize(object, ctx);
      };
    }
  },
  addNodeLabelLayoutConfiguration: function addNodeLabelLayoutConfiguration(selector, config) {
    var labelLayout;

    if (typeof config === 'string') {
      if (config === 'left' || config === 'LEFT') {
        labelLayout = new linkrenderer_DefaultNodeLabelLayout(true);
      } else if (config === 'right' || config === 'RIGHT') {
        labelLayout = new linkrenderer_DefaultNodeLabelLayout(false);
      }
    } else if (core["a" /* default */].utils.isFunction(config)) {
      labelLayout = new linkrenderer_NodeLabelLayout();
      labelLayout.getNodeToLabelSpacing = config;
    } else {
      labelLayout = config;
    }

    if (labelLayout) {
      var oldGetLabelLayout = this.getLabelLayout;

      this.getLabelLayout = function (object, ctx) {
        if (!selector || selector(object, ctx)) {
          return labelLayout;
        }

        return oldGetLabelLayout && oldGetLabelLayout(object, ctx);
      };
    }
  }
};

// CONCATENATED MODULE: ./src/constraintgraph/constraintlayout.js






var LOCKED = Number.MAX_VALUE;
var constraintlayout_STYLE_ARROW = 1;
var LEFT = 0;
var RIGHT = 1;
var SIDE_COUNT = 2;
var CONNECTOR_COUNT = 4;
var INCOMINGS = new Array(4);
INCOMINGS[core["a" /* default */].constraintTypes.START_TO_START] = 0;
INCOMINGS[core["a" /* default */].constraintTypes.START_TO_END] = 2;
INCOMINGS[core["a" /* default */].constraintTypes.END_TO_START] = 0;
INCOMINGS[core["a" /* default */].constraintTypes.END_TO_END] = 2;
var OUTGINGS = new Array(4);
OUTGINGS[core["a" /* default */].constraintTypes.START_TO_START] = 1;
OUTGINGS[core["a" /* default */].constraintTypes.START_TO_END] = 1;
OUTGINGS[core["a" /* default */].constraintTypes.END_TO_START] = 3;
OUTGINGS[core["a" /* default */].constraintTypes.END_TO_END] = 3;

var constraintlayout_Link =
/*#__PURE__*/
function () {
  function Link(cons) {
    Object(classCallCheck["a" /* default */])(this, Link);

    this.ar = [cons];

    if (cons.from.consNode.index < cons.to.consNode.index) {
      this.topNode = cons.from.consNode;
      this.bottomNode = cons.to.consNode;
    } else {
      this.topNode = cons.to.consNode;
      this.bottomNode = cons.from.consNode;
    }
  }

  Object(createClass["a" /* default */])(Link, [{
    key: "addConstraint",
    value: function addConstraint(cons) {
      this.ar.push(cons);
      var rowIndex = cons.from.consNode.index;

      if (rowIndex < this.topNode.index) {
        this.topNode = cons.from.consNode;
      } else if (rowIndex > this.bottomNode.index) {
        this.bottomNode = cons.from.consNode;
      }
    }
  }, {
    key: "topIndex",
    value: function topIndex() {
      return this.topNode.index;
    }
  }, {
    key: "bottomIndex",
    value: function bottomIndex() {
      return this.bottomNode.index;
    }
  }, {
    key: "toNode",
    value: function toNode() {
      return this.ar[0].to.consNode;
    }
  }, {
    key: "switchSides",
    value: function switchSides() {
      var type = this.ar[0].type;
      return type === core["a" /* default */].constraintTypes.END_TO_START || type === core["a" /* default */].constraintTypes.START_TO_END;
    }
  }, {
    key: "isDisplayed",
    value: function isDisplayed() {
      for (var i = 0; i < this.ar.length; i++) {
        if (!this.ar[i].nodes) {
          return false;
        }
      }

      return true;
    }
  }, {
    key: "toString",
    value: function toString() {
      var s = 'Link[';

      if (this.ar.length > 1) {
        s += "(".concat(this.ar.map(function (cons) {
          return cons.from.consNode.toString();
        }).join(','), ")");
      } else s += this.ar[0].from.consNode.toString();

      s += ' -> ';
      s += this.ar[0].to.consNode.toString();
      return "".concat(s, "]");
    }
  }, {
    key: "resetLayout",
    value: function resetLayout() {
      this.x = undefined;

      for (var i = 0; i < this.ar.length; i++) {
        this.ar[i].nodes = undefined;
      }
    }
  }]);

  return Link;
}();

function compareLinks(l1, l2) {
  var i1 = l1.topIndex();
  var i2 = l2.topIndex();
  if (i1 < i2) return 1;
  if (i1 > i2) return -1;
  i1 = l1.bottomIndex();
  i2 = l2.bottomIndex();
  return i1 < i2 ? 1 : i1 > i2 ? -1 : 0;
}

var constraintlayout_Node =
/*#__PURE__*/
function () {
  function Node(act, index) {
    Object(classCallCheck["a" /* default */])(this, Node);

    this.act = act;
    this.index = index;
    this.links = [[], []];
    this.layoutLinks = 0;
    this.linksDisplayed = 0;
    this.bbox = null;
    this.incomingLinks = new Array(4);
    this.connectors = new Array(CONNECTOR_COUNT);
    this.nodeLabelLayout = false;

    for (var i = 0; i < CONNECTOR_COUNT; i++) {
      this.connectors[i] = 0;
    }
  }

  Object(createClass["a" /* default */])(Node, [{
    key: "addLink",
    value: function addLink(link, side) {
      var ar = this.links[side];

      for (var i = 0, count = ar.length, thisLink; i < count; i++) {
        thisLink = ar[i];

        if (compareLinks(ar[i], link) >= 0) {
          ar.splice(i, 0, link);
          return;
        }
      }

      ar.push(link);
    }
  }, {
    key: "getLinks",
    value: function getLinks(side) {
      return this.links[side];
    }
  }, {
    key: "getIncomingLink",
    value: function getIncomingLink(type) {
      return this.incomingLinks[type];
    }
  }, {
    key: "setIncomingLink",
    value: function setIncomingLink(type, link) {
      this.incomingLinks[type] = link;
    }
  }, {
    key: "incConnectionCount",
    value: function incConnectionCount(type) {
      this.connectors[type]++;
    }
  }, {
    key: "setBBox",
    value: function setBBox(bbox) {
      this.bbox = bbox;
    }
  }, {
    key: "hasLinks",
    value: function hasLinks() {
      for (var side = 0; side < SIDE_COUNT; side++) {
        if (this.links[side].length) return true;
      }

      return false;
    }
  }, {
    key: "clearLinks",
    value: function clearLinks() {
      this.links = [[], []];
      this.connectors = new Array(CONNECTOR_COUNT);
      this.bbox = null;
    }
  }, {
    key: "resetLayout",
    value: function resetLayout() {
      for (var side = 0; side < SIDE_COUNT; ++side) {
        for (var iLink = 0, ar = this.links[side], link; iLink < ar.length; iLink++) {
          if ((link = ar[iLink]).toNode() === this) {
            ar[iLink].resetLayout();
          }
        }
      }

      this.nodeLabelLayout = false;
    }
  }, {
    key: "topRight",
    value: function topRight() {
      var n = this;

      while (n.next) {
        n = n.next;
      }

      return n;
    }
  }, {
    key: "toString",
    value: function toString() {
      return this.act.name || this.act.id;
    }
  }]);

  return Node;
}();

var defaultLayoutOptions = {
  horizLinkToNodeDist: 11,
  horizSwitchSideLinkToNodeDist: 8,
  horizLinkToLinkDist: 10,
  switchSideLinkVertMargin: 1 // Vertical space between the To node row and the link crossing over the node

};

var constraintlayout_ConstraintLayout =
/*#__PURE__*/
function (_Gantt$components$Con) {
  Object(inherits["a" /* default */])(ConstraintLayout, _Gantt$components$Con);

  function ConstraintLayout(gantt, config) {
    Object(classCallCheck["a" /* default */])(this, ConstraintLayout);

    return Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(ConstraintLayout).call(this, gantt, config));
  }

  Object(createClass["a" /* default */])(ConstraintLayout, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      core["a" /* default */].utils.mergeObjects(this, defaultLayoutOptions, config);
    }
  }, {
    key: "startInitialize",
    value: function startInitialize() {
      this.nodes = [];
    }
  }, {
    key: "addNode",
    value: function addNode(act, index) {
      var node = new constraintlayout_Node(act, index);
      node.next = this.nodes[index];
      this.nodes[index] = node;
      return node;
    }
  }, {
    key: "addConstraint",
    value: function addConstraint(from, to, cons) {
      var type = cons.type;
      var side = core["a" /* default */].constraintTypes.isFromStart(cons.type) ? LEFT : RIGHT;
      var link = to.getIncomingLink(INCOMINGS[type]);
      var i;
      from.incConnectionCount(OUTGINGS[type]);
      to.incConnectionCount(INCOMINGS[type]);

      if (link) {
        var beforeTop = link.topIndex();
        var beforeBottom = link.bottomIndex();
        link.addConstraint(cons);

        for (i = link.topIndex(); i < beforeTop; i++) {
          this.nodes[i].addLink(link, side);
        }

        for (i = beforeBottom + 1; i <= link.bottomIndex(); i++) {
          this.nodes[i].addLink(link, side);
        }
      } else {
        to.setIncomingLink(INCOMINGS[type], link = new constraintlayout_Link(cons));

        for (i = link.topIndex(); i <= link.bottomIndex(); i++) {
          this.nodes[i].addLink(link, side);
        }
      }
    }
  }, {
    key: "stopInitialize",
    value: function stopInitialize() {}
  }, {
    key: "layoutRowNodeLinks",
    value: function layoutRowNodeLinks(rowIndex, renderer, ctx) {
      this.reinteringPath = null;

      for (var consNode = this.nodes[rowIndex]; consNode; consNode = consNode.next) {
        this.layoutOneSideNodeLinks(consNode, LEFT);
        this.layoutOneSideNodeLinks(consNode, RIGHT);
        this.layoutNodeLabel(consNode, renderer, ctx);
      }
    }
  }, {
    key: "processConnectors",
    value: function processConnectors(consNode, bbox) {
      if (!consNode.links[LEFT].length && !consNode.links[RIGHT].length) return;
      var parentAct = consNode.act.children && consNode.act.children.length;
      var h = parentAct ? bbox.height / 2 : bbox.height;

      for (var side = 0, connectIndex = 0, incoming, outgoing; side < SIDE_COUNT; side++, connectIndex += 2) {
        incoming = consNode.connectors[connectIndex];
        outgoing = consNode.connectors[connectIndex + 1];

        if (incoming || outgoing) {
          if (incoming) {
            consNode.connectors[connectIndex] = bbox.y + bbox.top + h / (outgoing ? 3 : 2);
          }

          if (outgoing) {
            consNode.connectors[connectIndex + 1] = bbox.y + bbox.top + h - h / (incoming ? 3 : 2);
          }
        }
      }
    }
  }, {
    key: "layoutOneSideNodeLinks",
    value: function layoutOneSideNodeLinks(consNode, side, beforeLink) {
      if (!consNode.bbox) {
        consNode.setBBox(this.getNodeRect(consNode.act, consNode.index));
        this.processConnectors(consNode, consNode.bbox);
      }

      var left = side === LEFT;
      var nodeLimit = consNode.bbox.x + (left ? -this.horizLinkToNodeDist : consNode.bbox.width + this.horizLinkToNodeDist);
      var limit = nodeLimit;

      for (var i = 0, links = consNode.getLinks(side), lastIndex = beforeLink ? links.indexOf(beforeLink) : links.length, link; i < lastIndex; i++) {
        link = links[i];

        if (link.x === undefined) {
          link.x = LOCKED;
          var x = nodeLimit;
          var skipIndex = void 0;

          if (link.switchSides()) {
            // If node switch sides (goes from start to end or end to start), we don't need to layout the
            // 'to' node as its bounds are not taken into account into the current layout processing which
            // layouts the other side.
            var toNode = link.toNode();
            skipIndex = toNode.index; // However, it is still necessary to calc the 'to' node bounds for the link when it is to
            // be the drawn, in case the 'to' node is outside the layout processing row range.

            if (!toNode.bbox) {
              toNode.setBBox(this.getNodeRect(toNode.act, toNode.index));
              this.processConnectors(toNode, toNode.bbox);
            }
          }

          for (var index = link.topIndex(), last = link.bottomIndex(), value; index <= last; index++) {
            if (index !== consNode.index && index !== skipIndex) {
              value = this.layoutOneSideNodeLinks(this.nodes[index], side, link);

              if (this.reinteringPath) {
                this.reinteringPath = "".concat(this.nodes[index].toString(), " -> ").concat(link.toString(), " -> ").concat(this.reinteringPath);

                if (!beforeLink) {
                  throw new Error("Re-entering layout on ".concat(left ? 'left side of ' : 'right side of ').concat(this.reinteringPath));
                }

                return left ? Number.MAX_VALUE : Number.MIN_VALUE;
              }

              x = left ? Math.min(x, value) : Math.max(x, value);
            }
          }

          link.x = x;
          consNode.layoutLinks++;
        } else if (link.x === LOCKED) {
          // Re-entering on a same node, we are looping
          this.reinteringPath = "".concat(consNode.toString(), " -> ").concat(link.toString());
          return left ? Number.MAX_VALUE : Number.MIN_VALUE;
        }

        limit = left ? Math.min(limit, link.x - this.horizLinkToLinkDist) : Math.max(limit, link.x + this.horizLinkToLinkDist);
      }

      return limit;
    }
  }, {
    key: "layoutNodeLabel",
    value: function layoutNodeLabel(consNode, renderer, ctx) {
      var _this = this;

      var label = consNode.act.label;
      if (!label) return;
      var labelLayout = renderer.getLabelLayout && renderer.getLabelLayout(consNode.act, ctx);

      if (labelLayout) {
        var labelW = label.getTextWidth();

        var iterLinks = function iterLinks(side) {
          var limit = consNode.bbox.x + (side === LEFT ? 0 : consNode.bbox.width);
          var links = consNode.links[side];
          var lastX = limit;
          var x;
          var i = 0;
          var link;

          for (; i < links.length; i++) {
            link = links[i];
            if (link.toNode() === consNode && link.switchSides()) continue; // Switching side links are either on top or at the bottom of the row in the label area, cannot go over labels

            x = link.x; // Link margin not taken into account, compensated with applied padding

            if (labelLayout.nextLink(consNode.act, side === LEFT, link.x, lastX, limit, ctx)) break;
            lastX = x;
          }

          return Math.abs(lastX + (side === LEFT ? -1 : 1) * (i ? _this.horizLinkToLinkDist : _this.horizLinkToNodeDist) - limit);
        };

        labelLayout.startLayout(consNode.act, labelW, ctx);

        if (consNode.hasLinks() && labelLayout.nextLink) {
          iterLinks(RIGHT);
          iterLinks(LEFT);
        }

        var spacing = labelLayout.getNodeToLabelSpacing(consNode.act, consNode.bbox, labelW, ctx);

        if (spacing < 0) {
          label.move(true, -spacing + labelW);
        } else {
          label.move(false, spacing);
        }
      }
    }
  }, {
    key: "drawLink",
    value: function drawLink(link, parentElt, renderer, ctx) {
      var cons = link.ar[0];
      var toNode = cons.to.consNode; // If the link starts from one side (left/right) of the node and comes to the node on the otherside.

      var startLeft = core["a" /* default */].constraintTypes.isFromStart(cons.type);
      var endLeft = core["a" /* default */].constraintTypes.isToStart(cons.type);
      var points = new Array(startLeft !== endLeft ? 6 : 4);
      link.nodes = null;

      for (var i = 0, count = link.ar.length, fromNode, x, y, iPoint; i < count; i++) {
        cons = link.ar[i];
        iPoint = 0;
        fromNode = cons.from.consNode;
        points[iPoint++] = {
          x: startLeft ? fromNode.bbox.x : fromNode.bbox.x + fromNode.bbox.width,
          y: y = fromNode.connectors[OUTGINGS[cons.type]]
        };
        points[iPoint++] = {
          x: link.x,
          y: y
        };

        if (startLeft !== endLeft) {
          y = fromNode.index < toNode.index ? toNode.bbox.y + this.switchSideLinkVertMargin : toNode.bbox.y + toNode.bbox.rowHeight - this.switchSideLinkVertMargin;
          points[iPoint++] = {
            x: link.x,
            y: y
          };
          x = endLeft ? toNode.bbox.x - this.horizSwitchSideLinkToNodeDist : toNode.bbox.x + toNode.bbox.width + this.horizSwitchSideLinkToNodeDist;
          points[iPoint++] = {
            x: x,
            y: y
          };
          points[iPoint++] = {
            x: x,
            y: y = toNode.connectors[INCOMINGS[cons.type]]
          };
        } else {
          points[iPoint++] = {
            x: link.x,
            y: y = toNode.connectors[INCOMINGS[cons.type]]
          };
        }

        points[iPoint++] = {
          x: endLeft ? toNode.bbox.x : toNode.bbox.x + toNode.bbox.width,
          y: y
        };
        cons.nodes = renderer.drawLink(cons, points, constraintlayout_STYLE_ARROW, parentElt, ctx);
      }
    }
  }, {
    key: "drawRowLinks",
    value: function drawRowLinks(rowIndex, parentElt, renderer, ctx) {
      var side;
      var links;
      var i;
      var count;

      for (var consNode = this.nodes[rowIndex]; consNode; consNode = consNode.next) {
        if (consNode.linksDisplayed === consNode.links.length) continue;

        for (side = 0; side < SIDE_COUNT; side++) {
          links = consNode.getLinks(side);

          for (i = 0, count = links.length; i < count; ++i) {
            if (!links[i].isDisplayed()) {
              consNode.linksDisplayed++;
              this.drawLink(links[i], parentElt, renderer, ctx);
            }
          }
        }
      }
    }
  }, {
    key: "clearLinks",
    value: function clearLinks() {
      for (var i = 0, count = this.nodes ? this.nodes.length : 0; i < count; i++) {
        for (var node = this.nodes[i]; node; node = node.next) {
          node.clearLinks();
        }
      }
    }
  }, {
    key: "resetLayout",
    value: function resetLayout() {
      for (var i = 0, count = this.nodes ? this.nodes.length : 0; i < count; i++) {
        for (var node = this.nodes[i]; node; node = node.next) {
          node.resetLayout();
        }
      }
    }
  }, {
    key: "destroy",
    value: function destroy() {
      if (this.nodes) {
        for (var i = 0, count = this.nodes.length; i < count; i++) {
          if (this.nodes[i].act) {
            this.nodes[i].act.consNode = null;
          }
        }

        this.nodes = null;
      }
    }
  }]);

  return ConstraintLayout;
}(core["a" /* default */].components.ConstraintLayout);


core["a" /* default */].components.ConstraintLayout.impl = constraintlayout_ConstraintLayout;
// CONCATENATED MODULE: ./src/constraintgraph/constraintgraph.js










var constraintgraph_defaultOptions = {
  linkOutlineWidth: 2
};
var constraintgraph_TOOLTIP_FADING_TIME = 1000;
var constraintgraph_TOOLTIP_SHOWING_DELAY = 800;
var constraintgraph_SELECTION_CLASS = 'selected';

var constraintgraph_ConstraintsGraph =
/*#__PURE__*/
function (_Gantt$components$Con) {
  Object(inherits["a" /* default */])(ConstraintsGraph, _Gantt$components$Con);

  function ConstraintsGraph(gantt, node, config) {
    Object(classCallCheck["a" /* default */])(this, ConstraintsGraph);

    return Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(ConstraintsGraph).call(this, gantt, node, core["a" /* default */].utils.mergeObjects({}, constraintgraph_defaultOptions, config)));
  }

  Object(createClass["a" /* default */])(ConstraintsGraph, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this = this;

      this.destroy();
      this.create();
      this.ready = promise_default.a.resolve([]);

      if (config.layout && core["a" /* default */].utils.isFunction(config.layout)) {
        this.layout = new config.layout(this.gantt);
      } else {
        var LayoutClass = core["a" /* default */].components.ConstraintLayout.impl || core["a" /* default */].components.ConstraintLayout;
        this.layout = new LayoutClass(this.gantt, config.layout);
      }

      var LinkRendererClass = core["a" /* default */].components.Renderer.impl || core["a" /* default */].components.Renderer;
      this.linkRenderer = new LinkRendererClass(config.renderer, LinkRendererPrototype, this.gantt);

      if (config.linkOutlineWidth) {
        this.linkRenderer.linkOutlineWidth = config.linkOutlineWidth;
      } // Ugly way for managing the exception of this view having several DOM nodes in its life


      var node = this.node;
      this.node = null;
      this.setNode(node);
      var selectionHandler = this.gantt.selection;
      selectionHandler.on(core["a" /* default */].events.CONSTRAINT_SELECTION_CLEARED, function (e, sels) {
        return _this.clearConstraintSelection(sels);
      });
      selectionHandler.on(core["a" /* default */].events.CONSTRAINT_SELECTED, function (e, sels) {
        return _this.selectConstraints(sels);
      });
      selectionHandler.on(core["a" /* default */].events.CONSTRAINT_UNSELECTED, function (e, sels) {
        return _this.unselectConstraints(sels);
      });
    }
  }, {
    key: "setNode",
    value: function setNode(node) {
      var _this2 = this;

      if (this.node) {
        this.gantt.errorHandler.removeGroup(this.node);

        if (this.tooltipEnter) {
          core["a" /* default */].utils.removeEventListener(this.node, 'mouseenter', this.tooltipEnter);
          core["a" /* default */].utils.removeEventListener(this.node, 'mouseleave', this.tooltipLeave);
          core["a" /* default */].utils.removeEventListener(this.node, 'click', this.clickHandler);
        }

        this.node.innerHTML = '';
      }

      this.node = node;

      if (node) {
        if (!this.tooltipEnter) {
          this.tooltipEnter = function (evt) {
            var ctNode = _this2.getConstraintNode(evt.target);

            if (ctNode && (!_this2.gantt.timeTable.isDragAndDropping || !_this2.gantt.timeTable.isDragAndDropping())) {
              _this2.showTooltip(ctNode);
            }
          };

          this.tooltipLeave = function (evt) {
            var ctNode = _this2.getConstraintNode(evt.target);

            if (ctNode && _this2.tooltipElt === node) {
              _this2.hideTooltip(constraintgraph_TOOLTIP_FADING_TIME);
            }
          };

          this.clickHandler = function (e) {
            return _this2.processClick(e);
          };
        }

        core["a" /* default */].utils.addEventListener(this.node, 'mouseenter', this.tooltipEnter, true);
        core["a" /* default */].utils.addEventListener(this.node, 'mouseleave', this.tooltipLeave, true);
        core["a" /* default */].utils.addEventListener(this.node, 'click', this.clickHandler, true);
      }
    }
  }, {
    key: "create",
    value: function create() {
      if (this.config && this.config.classes) {
        core["a" /* default */].utils.addClass(this.config.classes);
      }
    }
  }, {
    key: "setConstraints",
    value: function setConstraints(cts) {
      var _this3 = this;

      this.cts = cts;

      if (cts && cts.length) {
        this.ready = new promise_default.a(function (resolve) {
          setTimeout(function () {
            _this3.processConstraints(cts);

            resolve();
          }, 0);
        });
      } else {
        this.ready = promise_default.a.resolve([]);
      }
    }
  }, {
    key: "processConstraints",
    value: function processConstraints(cts) {
      var table = this.gantt.table;
      var activityFilter = this.gantt.timeTable.getActivityFilter();
      var row;
      var count;
      var acts;
      var act;
      var i;
      this.layout.startInitialize();

      try {
        for (row = table.getFirstVisibleRow(); row; row = table.nextRow(row)) {
          acts = row.activities;
          count = acts && acts.length;

          if (count) {
            for (i = 0; i < count; ++i) {
              act = acts[i];
              act = !activityFilter || activityFilter.accept(act, row) ? act : null;

              if (act) {
                act.consNode = this.layout.addNode(act, row.index);
              }
            }
          }
        }

        var from;
        var to;
        var cons;

        for (i = 0, count = cts.length; i < count; ++i) {
          cons = cts[i];
          cons.nodes = null; // Remove nodes from previous display

          from = cons.from.consNode;
          to = cons.to.consNode;

          if (from && to) {
            this.layout.addConstraint(from, to, cons);
          }
        }
      } catch (e) {
        this.addError(e, 'Error processing constraints');
        this.layout.stopInitialize();
        throw e;
      }

      this.layout.stopInitialize();
    }
  }, {
    key: "addError",
    value: function addError(e, msg) {
      if (!this.errorNode) {
        this.errorNode = document.createElement('div');
        this.errorNode.style.opacity = '0.80';
        this.gantt.timeTablePanel.appendChild(this.errorNode);
      }

      this.gantt.errorHandler.addError(e, msg, this.errorNode);
    }
  }, {
    key: "destroy",
    value: function destroy() {
      if (this.layout && this.layout.destroy) {
        this.layout.destroy();
      }

      this.layout = null;

      if (this.node && this.tooltipEnter) {
        core["a" /* default */].utils.removeEventListener(this.node, 'mouseenter', this.tooltipEnter);
        core["a" /* default */].utils.removeEventListener(this.node, 'mouseleave', this.tooltipLeave);
        this.tooltipEnter = this.tooltipLeave = null;
      }
    }
  }, {
    key: "clearCache",
    value: function clearCache() {
      if (this.cts) {
        for (var i = 0, count = this.cts.length; i < count; ++i) {
          this.cts[i].fromNode = null;
          this.cts[i].toNode = null;
        }
      }
    }
  }, {
    key: "clear",
    value: function clear() {
      this.node.innerHTML = '';
      this.clearCache();
    }
  }, {
    key: "clearLinks",
    value: function clearLinks() {
      this.layout.clearLinks();
    }
  }, {
    key: "resetLayout",
    value: function resetLayout() {
      this.layout.resetLayout();
    }
  }, {
    key: "draw",
    value: function draw(rows, drawCB) {
      var _this4 = this;

      if (!rows.length) return this.ready;
      return this.ready.then(function () {
        var table = _this4.gantt.table;
        var firstRowIndex = rows[0].row.index;
        var lastRowIndex = rows[rows.length - 1].row.index;

        function getNodeRect(act, index) {
          var row;
          var y;

          if (index < firstRowIndex) {
            row = rows[0].row;
            y = rows[0].y;

            while (index < firstRowIndex) {
              row = table.prevRow(row);
              drawCB(row);
              y -= row.activityRow.height;
              rows.splice(0, 0, {
                y: y,
                row: row,
                height: row.activityRow.height,
                index: --firstRowIndex
              });
            }
          } else if (index > lastRowIndex) {
            row = rows[lastRowIndex];
            y = row.y + row.height;
            row = row.row;

            while (index > lastRowIndex) {
              row = table.nextRow(row);
              drawCB(row);
              rows.push({
                y: y,
                row: row,
                height: row.activityRow.height,
                index: ++lastRowIndex
              });
              y += row.activityRow.height;
            }
          }

          row = rows[index - firstRowIndex];
          return act.node ? {
            x: act.left,
            y: row.y,
            top: number_parse_int_default()(act.node.style.top, 10),
            width: act.node.offsetWidth,
            height: act.node.offsetHeight,
            rowHeight: row.height
          } : {
            x: 0,
            y: row.y,
            top: 0,
            width: 0,
            height: 0,
            rowHeight: row.height
          };
        }

        _this4.layout.getNodeRect = getNodeRect;
        var ctx = {
          gantt: _this4.gantt,
          nodeToLinkPadding: _this4.layout.horizLinkToNodeDist,
          linkToLinkPadding: _this4.layout.horizLinkToLinkDist
        };
        var i;
        var rowIndex;
        var count = rows.length;

        try {
          for (i = 0, rowIndex = firstRowIndex; i < count; i++, rowIndex++) {
            _this4.layout.layoutRowNodeLinks(rowIndex, _this4.linkRenderer, ctx);
          }
        } catch (e) {
          _this4.addError(e);
        }

        try {
          var fragment = document.createDocumentFragment();

          for (i = 0, rowIndex = firstRowIndex; i < count; i++, rowIndex++) {
            _this4.layout.drawRowLinks(rowIndex, fragment, _this4.linkRenderer, ctx);
          }

          _this4.node.appendChild(fragment);
        } catch (e) {
          _this4.addError(e, 'Error drawing constraints');
        }
      });
    }
  }, {
    key: "getConstraint",
    value: function getConstraint(node) {
      var id = node.id;
      var lastIndex = id.indexOf(ID_DELIM);
      var index;

      if (lastIndex >= 0) {
        while ((index = id.indexOf(ID_DELIM, lastIndex + 1)) > 0) {
          lastIndex = index;
        }

        id = id.substring(0, lastIndex);
      }

      var cons;

      if (this.cts.byIds && (cons = this.cts.byIds[id])) {
        return cons;
      }

      return null;
    }
  }, {
    key: "getConstraintNode",
    value: function getConstraintNode(elt) {
      var node = null;

      for (; elt && elt !== this.node; elt = elt.parentNode) {
        if (core["a" /* default */].utils.hasClass(elt, CONSTRAINT_LINK_CTNR_CLASS) || core["a" /* default */].utils.hasClass(elt, CONSTRAINT_ARROW)) return elt;
        if (core["a" /* default */].utils.hasClass(elt, CONSTRAINT_LINK_CLASS)) node = elt;
      }

      return node;
    }
    /*                 */

    /*     Tooltips    */

    /*                 */

  }, {
    key: "showTooltip",
    value: function showTooltip(consNode) {
      var _this5 = this;

      var cons;

      if (consNode && consNode !== this.tooltipElt && (cons = this.getConstraint(consNode))) {
        this.tooltipElt = consNode;
        var ctx = {
          limitElt: this.gantt.getBody(),
          showDelay: constraintgraph_TOOLTIP_SHOWING_DELAY
        };
        this.gantt.tooltip.showTooltip(consNode, ctx, function (parent) {
          var tooltipCtx = {
            gantt: _this5.gantt
          };

          _this5.linkRenderer.getTooltip(parent, cons, tooltipCtx);
        });
      }
    }
  }, {
    key: "hideTooltip",
    value: function hideTooltip(fadingTime) {
      this.tooltipElt = null;
      this.gantt.tooltip.hideTooltip(fadingTime);
    }
    /**
     * Selection management
     */

  }, {
    key: "processClick",
    value: function processClick(e) {
      this.hideTooltip();
      var consNode = this.getConstraintNode(e.target);
      var cons;

      if (consNode && (cons = this.getConstraint(consNode))) {
        this.gantt.selection.processClick(e, cons);
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "clearConstraintSelection",
    value: function clearConstraintSelection(sels) {
      for (var i = 0, nodes, count = sels.length, sel; i < count; ++i) {
        sel = sels[i];

        if (nodes = sel.nodes) {
          for (var j = 0, nodesCount = nodes.length; j < nodesCount; j++) {
            core["a" /* default */].utils.removeClass(nodes[j], constraintgraph_SELECTION_CLASS);
          }
        }
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "selectConstraints",
    value: function selectConstraints(sels) {
      for (var i = 0, nodes; i < sels.length; i++) {
        if (nodes = sels[i].nodes) {
          for (var j = 0, count = nodes.length; j < count; j++) {
            core["a" /* default */].utils.addClass(nodes[j], constraintgraph_SELECTION_CLASS);
          }
        }
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "unselectConstraints",
    value: function unselectConstraints(sels) {
      for (var i = 0, nodes; i < sels.length; i++) {
        if (nodes = sels[i].nodes) {
          for (var j = 0, count = nodes.length; j < count; j++) {
            core["a" /* default */].utils.removeClass(nodes[j], constraintgraph_SELECTION_CLASS);
          }
        }
      }
    }
  }]);

  return ConstraintsGraph;
}(core["a" /* default */].components.ConstraintsGraph);


core["a" /* default */].components.ConstraintsGraph.impl = constraintgraph_ConstraintsGraph;
// EXTERNAL MODULE: ./src/constraintgraph/constraintgraph.scss
var constraintgraph = __webpack_require__(158);

// CONCATENATED MODULE: ./src/constraintgraph/index.js


/* harmony default export */ var src_constraintgraph = (constraintgraph_ConstraintsGraph);
// EXTERNAL MODULE: ./src/timetable/timetable.scss
var timetable = __webpack_require__(159);

// CONCATENATED MODULE: ./src/timetable/timetable.js














var ROW_ID_PREFIX = 'timeTableRow_';
var ACTIVITY_ID_PREFIX = '';
var timetable_defaultOptions = {
  bufferPageSize: 3
};

var timetable_TimeTable =
/*#__PURE__*/
function (_Gantt$components$Tim) {
  Object(inherits["a" /* default */])(TimeTable, _Gantt$components$Tim);

  function TimeTable(gantt, node, config) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, TimeTable);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(TimeTable).call(this, gantt, node, core["a" /* default */].utils.mergeObjects({}, timetable_defaultOptions, config))); // Selection management

    core["a" /* default */].utils.addEventListener(node, 'click', function (e) {
      return _this.processClick(e);
    }, true);
    core["a" /* default */].utils.addEventListener(node, 'dblclick', function (e) {
      return _this.processDoubleClick(e);
    }, true);
    core["a" /* default */].utils.addEventListener(node, 'contextmenu', function (e) {
      return _this.processMouseDown(e);
    }, true);
    var selectionHandler = gantt.selection;
    selectionHandler.on(core["a" /* default */].events.ACTIVITY_SELECTION_CLEARED, function (e, sels) {
      return _this.clearActivitySelection(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ACTIVITY_SELECTED, function (e, sels) {
      return _this.selectActvities(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ACTIVITY_UNSELECTED, function (e, sels) {
      return _this.unselectActvities(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTED, function (e, sels) {
      return _this.selectRows(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ROW_UNSELECTED, function (e, sels) {
      return _this.unselectRows(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTION_CLEARED, function (e, sels) {
      return _this.unselectRows(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTION_CHANGED, function (e, sels) {
      return _this.rowSelectionChanged(sels);
    });
    return _this;
  } // Method called from super class
  // noinspection JSUnusedGlobalSymbols


  Object(createClass["a" /* default */])(TimeTable, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this2 = this;

      this.destroy();
      this.create();
      this.bufferPageSize = config.bufferPageSize;
      var RendererClass = core["a" /* default */].components.Renderer.impl || core["a" /* default */].components.Renderer;
      this.activityRenderer = new RendererClass(config.renderer, activityrenderer, this.gantt);
      this.rowRenderer = config.rows && config.rows.renderer && new RendererClass(config.rows.renderer, rowrenderer, this.gantt);
      this.interactor = this.config.interactor;
      this.moveInterator = this.interactor && this.interactor.move;
      this.mouseHandler = this.interactor && this.interactor.click;

      var onScroll = function onScroll(e) {
        if (_this2.synchronizeTableTop(e.target.scrollTop)) {
          e.preventDefault && e.preventDefault();
        }
      };

      core["a" /* default */].utils.addEventListener(this.scroller, 'scroll', onScroll);
      if (this.moveInterator) this.initDragAndDrop();
      this.initTooltip();
      this.events = {};
      var LayoutClass = core["a" /* default */].components.ActivityLayout.impl || core["a" /* default */].components.ActivityLayout;
      this.layout = new LayoutClass(config && config.layout, null
      /* proto */
      , {
        gantt: this.gantt
      });
    }
  }, {
    key: "create",
    value: function create() {
      var _this3 = this;

      this.scroller = document.createElement('div');
      this.scroller.className = 'time-table-scroller'; // CSS layout

      this.scroller.style.position = 'absolute';
      this.scroller.style.height = '100%';
      this.scroller.style.top = '0';
      this.scroller.style.left = '0';
      this.scroller.style.right = '0';
      this.scroller.style.bottom = '0';
      this.scroller.style.overflowX = 'scroll';
      this.node.appendChild(this.scroller); // Element used for getting the width of the visible time table area.

      var timeTableWidthTester = document.createElement('div');

      this.getVisibleWidth = function () {
        return timeTableWidthTester.offsetWidth;
      }; // CSS layout


      timeTableWidthTester.style.width = '100%';
      timeTableWidthTester.style.height = 0;
      this.scroller.appendChild(timeTableWidthTester); // Element used for getting the height of the visible time table area,
      // excluding the horizontal scrollbar height

      var timeTableHeightTester = document.createElement('div'); // noinspection JSUnusedGlobalSymbols

      this.getVisibleHeight = function () {
        return timeTableHeightTester.offsetHeight;
      };

      timeTableHeightTester.style.width = 0;
      timeTableHeightTester.style.position = 'absolute';
      timeTableHeightTester.style.top = 0;
      timeTableHeightTester.style.height = '100%';
      this.scroller.appendChild(timeTableHeightTester); // noinspection JSUnresolvedVariable

      this.body = document.createElement('div');
      this.body.style.minHeight = '1px'; // Horizontal scroll position for this.scroll is set before the body is given a height. If this.scroll content (this.body) has no height, the h-scroll position does not apply

      this.body.className = 'time-table-body'; // this.scroller.style.width = 0;

      this.scroller.appendChild(this.body);
      core["a" /* default */].utils.addEventListener(this.body, 'mouseenter', function (e) {
        var row = _this3.getTimeTableRowNode(e.target);

        if (row) {
          _this3.gantt.highlightRow(row.id.substring(ROW_ID_PREFIX.length), true, true);
        }
      }, true);
      core["a" /* default */].utils.addEventListener(this.body, 'mouseleave', function (e) {
        var row = _this3.getTimeTableRowNode(e.target);

        if (row) {
          _this3.gantt.highlightRow(row.id.substring(ROW_ID_PREFIX.length), false, true);
        }
      }, true);
    }
  }, {
    key: "update",
    value: function update() {
      this.draw();
    }
  }, {
    key: "createUpdates",
    value: function createUpdates(parent) {
      var _this4 = this;

      return new (core["a" /* default */].components.GanttUpdates.impl || core["a" /* default */].components.GanttUpdates)(parent, {
        applyReload: function applyReload() {
          _this4.draw();
        },
        applyUpdates: function applyUpdates() {
          if (parent.containsRowChanges()) {
            if (_this4.ctsGraph) {
              _this4.resetConstraints();
            }

            _this4.draw(true);
          } else {
            _this4.draw();
          }
        }
      });
    } // noinspection JSUnusedLocalSymbols

  }, {
    key: "renderRow",
    value: function renderRow(row, ctx) {
      var timeLine = this.gantt.timeLine;
      var actRow = {
        row: row,
        getX: function getX(date) {
          return timeLine.getXFromMillis(date);
        },
        setRowHeight: function setRowHeight(h) {
          this.height = h;
        }
      };
      var node = document.createElement('div');
      node.id = ROW_ID_PREFIX + row.id;
      var table = this.gantt.table; // In Firefox, the use of tr.offsetHeight leads to error.
      // For a row of height 32.5px, tr.offsetHeight will return 33px where
      // as the actual display of the row takes 32px.
      // Gantt.utils.getHeight internally invokes the jQuery.height() function which is more reliable.

      var oldRowHeight = table.getRowHeight(row);
      var variableLayoutRowHeight = this.layout.allowVariableRowHeight();
      actRow.tableRowHeight = actRow.height = !variableLayoutRowHeight && this.activityRenderer.rowHeight && this.activityRenderer.rowHeight(row) || oldRowHeight;

      if (!variableLayoutRowHeight && actRow.height !== oldRowHeight) {
        table.setRowHeight(row, actRow.height); // For example if actRow.height < minimum table row height

        actRow.height = oldRowHeight = table.getRowHeight(row);
      } // See http://help.dottoro.com/lhwdpnva.php
      // for making nodes unselectable


      node.className = "".concat(ctx.odd ? "".concat(TIME_TABLE_ROW, " odd") : TIME_TABLE_ROW, " ").concat(UNSELECTABLE_CLASSNAME) + (row.classes ? ' ' + row.classes : '') + (row.selected ? ' ' + SELECTION_CLASS : '');

      if (this.rowRenderer) {
        this.rowRenderer.draw(row, node, ctx);
      } // node.style.backgroundColor = row.tr.style.backgroundColor;


      var rowSpan = document.createElement('div');
      rowSpan.innerHTML = "".concat(row.index + 1);
      rowSpan.className = 'row-number';
      node.appendChild(rowSpan);
      actRow.rowNode = node;

      if (this.activityRenderer.generateRowDecorations) {
        this.generateRowDecorations(row, node, ctx);
      }

      this.renderActivities(actRow, ctx);

      if (actRow.height !== oldRowHeight) {
        table.setRowHeight(row, actRow.height); // For example if actRow.height < minimum table row height

        actRow.height = table.getRowHeight(row);
      }

      node.style.height = "".concat(actRow.height, "px");
      return actRow;
    }
  }, {
    key: "renderActivities",
    value: function renderActivities(activityRow) {
      var activityFilter = this.getActivityFilter(),
          activities = activityRow.row.activities,
          actCount = activities && activities.length || 0;
      var actNodes, iAct, act, actNode;
      activityRow.activities = actNodes = [];

      if (actCount) {
        for (iAct = 0; iAct < actCount; ++iAct) {
          act = activities[iAct];
          act.node = actNode = (!activityFilter || activityFilter.accept(act, activityRow.row)) && this.renderActivity(act, activityRow.row, activityRow.rowNode) || null;

          if (actNode) {
            if (act.id) {
              actNode.id = ACTIVITY_ID_PREFIX + activityRow.rowNode.id + act.id;
            }

            actNodes.push(act);
            activityRow.rowNode.appendChild(actNode);
          }
        }

        this.layout.layout(activityRow);
      }
    }
  }, {
    key: "getActivityFilter",
    value: function getActivityFilter() {
      var activityFilter = this.gantt.activityFilter;
      return activityFilter && !activityFilter.isEmpty() ? activityFilter : null;
    }
  }, {
    key: "renderActivity",
    value: function renderActivity(act, row, timeTableRowNode) {
      return this.activityRenderer.draw(act, timeTableRowNode, row);
    }
  }, {
    key: "getX",
    value: function getX(date) {
      return this.gantt.timeLine.getXFromMillis(date);
    }
  }, {
    key: "draw",
    value: function draw(forceRedraw) {
      var _this5 = this;

      if (this.container) {
        this.body.removeChild(this.container);
        this.container = null;
      }

      var ctsNode;

      if (this.ctsGraph && forceRedraw) {
        this.resetConstraints();
      } // Draw the height of several row pages


      var top = this.scroller.scrollTop;
      this.lastRepaintY = top;

      if (top < 0) {
        top = 0;
      }

      var table = this.gantt.table;
      top -= Math.abs((this.bufferPageSize - 1) / 2 * this.scroller.clientHeight);

      if (top < 0) {
        top = 0;
      }

      var timeLine = this.gantt.timeLine;
      var ctx = {
        getX: function getX(millis) {
          timeLine.getXFromMillis(millis);
        },
        horiz: this.gantt.timeLine.getScrollableHorizon(),
        gantt: this.gantt
      }; // Generate  global decorations

      if (this.activityRenderer.generateDecorations && (forceRedraw || !this.backgroundCtnr)) {
        this.generateGlobalDecorations(ctx);
      }

      var row = table.getRowAt(top);

      if (row && row.getData()) {
        // If no rows are displayed, a row displaying
        // 'No matching records found' is displayed instead: no activities to display
        top = table.getRowTop(row);
        var ctsRows = this.ctsGraph ? [] : null,
            firstRowIndex = row.index;
        var maxBufferHeight = top + this.bufferPageSize * this.scroller.clientHeight;
        var yFinal = Math.min(maxBufferHeight, table.getHeight());
        var variableHeightLayout = this.layout.allowVariableRowHeight() || this.activityRenderer.rowHeight;
        ctx.odd = row.index % 2 === 0; // This is the way datatables work...

        this.container = this.createContainer(top);
        var activityRow;

        while (row && top < yFinal) {
          activityRow = row.activityRow;

          if (forceRedraw || !activityRow || !activityRow.rowNode) {
            row.activityRow = activityRow = this.renderRow(row, ctx);
          }

          this.container.appendChild(activityRow.rowNode);

          if (ctsRows) {
            ctsRows.push({
              y: top,
              height: activityRow.height,
              row: row
            });
          }

          top += activityRow.height;

          if (variableHeightLayout) {
            // Row height can change so that the yFinal
            yFinal = Math.min(maxBufferHeight, table.getHeight());
          }

          ctx.odd = !ctx.odd;
          row = table.nextRow(row);
        }

        if (this.ctsGraph && this.ctsGraph.node) {
          this.body.insertBefore(this.container, this.ctsGraph.node);
        } else {
          this.body.appendChild(this.container);
        }

        if (variableHeightLayout) {
          this.gantt.updateScrollerHeight();
        }

        if (this.ctsGraph) {
          var updateScrolls = false;
          this.ctsGraph.draw(ctsRows, function (row) {
            // Draw callback to draw additional rows
            activityRow = row.activityRow;

            if (forceRedraw || !activityRow || !activityRow.rowNode) {
              row.activityRow = activityRow = _this5.renderRow(row, ctx);
            }

            if (row.index > firstRowIndex) {
              // We only add row nodes rendered after the last row node above.
              // The constraint draw algorithm ensures that additional rows to be rendered are drawn
              // in ascending order, from the lowest to the highest index.
              _this5.container.appendChild(activityRow.rowNode);

              updateScrolls = true;
            }
          }).then(function () {
            if (forceRedraw && ctsNode) {
              _this5.body.appendChild(ctsNode);
            }

            if (updateScrolls) {
              _this5.gantt.updateScrollerHeight();
            }
          });
        }
      }

      this._ready = true;
    }
  }, {
    key: "drawRows",
    value: function drawRows() {
      this.draw(true);
    }
  }, {
    key: "createContainer",
    value: function createContainer(y) {
      var c = document.createElement('div');
      c.className = 'time-table-row-container'; // c.style.width = this.gantt.getTimeTableWidth() + 'px';

      c.style.width = "".concat(this.getBodyWidth(), "px");
      c.style.overflow = 'none';
      c.style.position = 'absolute';
      c.style.padding = 0;
      c.style.border = 'none';
      c.style.top = "".concat(y, "px");
      c.style.left = 0;
      return c;
    }
  }, {
    key: "on",
    value: function on(event, handler) {
      if (event === core["a" /* default */].events.TIME_TABLE_INIT) {
        if (this._ready) {
          handler.call(this);
        } else {
          get_get(Object(getPrototypeOf["a" /* default */])(TimeTable.prototype), "on", this).call(this, this, core["a" /* default */].events.TIME_TABLE_INIT, handler);
        }
      }
    }
  }, {
    key: "onResize",
    value: function onResize() {
      this.draw(false);
    }
  }, {
    key: "getActivityNode",
    value: function getActivityNode(elt) {
      for (; elt && elt !== this.body; elt = elt.parentNode) {
        if (TimeTable.isActivityNode(elt)) {
          return elt;
        }
      }

      return null;
    }
  }, {
    key: "getActivity",
    value: function getActivity(activityElt) {
      var tr = this.getTimeTableRowNode(activityElt);

      if (tr) {
        var row = this.getRow(tr.id.substring(ROW_ID_PREFIX.length));
        var activities = row && row.activityRow && row.activityRow.activities;

        if (activities) {
          for (var iAct = 0; iAct < activities.length; iAct++) {
            if (activities[iAct].node === activityElt) {
              return activities[iAct];
            }
          }
        }
      }

      return null;
    }
  }, {
    key: "getTimeTableRowNode",
    value: function getTimeTableRowNode(activityNode) {
      for (var tr = activityNode; tr !== this.body; tr = tr.parentNode) {
        if (core["a" /* default */].utils.hasClass(tr, TIME_TABLE_ROW)) {
          return tr;
        }
      }

      return null;
    } // noinspection JSUnusedGlobalSymbols

  }, {
    key: "getActivityRow",
    value: function getActivityRow(activity) {
      var tr;
      var actNode = activity.node && activity.start && activity.node || activity;

      for (tr = actNode.parentNode; tr !== this.body; tr = tr.parentNode) {
        if (this.utils.hasClass(tr, TIME_TABLE_ROW)) {
          break;
        }
      }

      return tr && this.getRow(tr.id.substring(ROW_ID_PREFIX.length));
    }
  }, {
    key: "getRow",
    value: function getRow(id) {
      return this.gantt.table.getRow(id);
    }
  }, {
    key: "scrollToRow",
    value: function scrollToRow(row) {
      var y = this.gantt.table.getRowTop(row);
      var top = this.scroller.scrollTop; // If row before or after visible area

      if (y < top || y > top + this.getVisibleHeight()) {
        this.scrollToY(y);
      } // Check if row is fully visible
      else {
          // Draw of row has been called, we can access its height.
          var rowHeight = this.gantt.getRowHeight(row);

          if (top + this.getVisibleHeight() < y + rowHeight) {
            this.scrollToY(y);
          }
        }
    }
  }, {
    key: "setFirstVisibleRow",
    value: function setFirstVisibleRow(row) {
      var y = this.gantt.table.getRowTop(row);
      this.scrollToY(y);
    }
  }, {
    key: "scrollToY",
    value: function scrollToY(y) {
      this.scroller.scrollTop = y; // For unit test, we want both the time table and table have their top synchronised immediatly

      this.synchronizeTableTop(y);
    }
  }, {
    key: "setScrollTop",
    value: function setScrollTop(y) {
      this.scroller.scrollTop = y;
    }
  }, {
    key: "getScrollTop",
    value: function getScrollTop() {
      return this.scroller.scrollTop;
    }
  }, {
    key: "synchronizeTableTop",
    value: function synchronizeTableTop(top) {
      var table = this.gantt.table && this.gantt.table.getScrollableTable();

      if (table) {
        // Table may not be initialized yet.
        table.scrollTop = top;
        var scrollTop = table.scrollTop; // No empty space below the table which impacts the default scrolling strategy of the element.
        // When reaching the bottom of the table, last scroll down events won't impact table's display
        // We need to reflect that on the time table scrollbar
        // e.target.scrollTop = scrollTop;

        if (this.lastRepaintY === undefined || Math.abs(scrollTop - this.lastRepaintY) > this.scroller.clientHeight) {
          this.draw();
        }

        return true;
      }

      return false;
    }
  }, {
    key: "highlightActivity",
    value: function highlightActivity(act, highlight, deSelectAll) {
      if (deSelectAll && (!act || !core["a" /* default */].utils.hasClass(act, HIGHLIGHT_CLASS))) {
        var highlightActs = this.body.querySelectorAll(".".concat(TIME_TABLE_ACTIVITY_CLASSNAME, ".").concat(HIGHLIGHT_CLASS));

        if (highlightActs && highlightActs.length) {
          for (var i = 0; i < highlightActs.length; i++) {
            core["a" /* default */].utils.removeClass(highlightActs[i], HIGHLIGHT_CLASS);
          }
        }
      }

      if (act) {
        core["a" /* default */].utils.toggleClass(act, HIGHLIGHT_CLASS, highlight);
      }
    }
  }, {
    key: "highlightRow",
    value: function highlightRow(row, highlight, deSelectAll) {
      if (deSelectAll) {
        var highlightRows = this.body.querySelectorAll(".".concat(TIME_TABLE_ROW, ".").concat(HIGHLIGHT_CLASS));

        if (highlightRows && highlightRows.length) {
          for (var i = 0; i < highlightRows.length; i++) {
            core["a" /* default */].utils.removeClass(highlightRows[i], HIGHLIGHT_CLASS);
          }
        }
      }

      if (row) {
        if (row.activityRow && row.activityRow.rowNode) {
          core["a" /* default */].utils.toggleClass(row.activityRow.rowNode, HIGHLIGHT_CLASS, highlight);
        }
      }
    }
  }, {
    key: "getDisplayedActivitiesTimeRange",
    value: function getDisplayedActivitiesTimeRange() {
      var top = this.scroller.scrollTop;

      if (top < 0) {
        top = 0;
      }

      var table = this.gantt.table;
      var row = table.getRowAt(top);

      if (!row || !row.getData()) {
        return null; // If no rows are displayed, a row displaying 'No matching records found' is displayed instead: no activities to display
      }

      top = table.getRowTop(row);
      var yFinal = Math.min(top + this.scroller.clientHeight, table.getHeight());
      var activityFilter = this.getActivityFilter();
      var minDate,
          maxDate = 0,
          activities,
          act,
          iAct,
          start,
          end,
          actCount;

      while (row && top < yFinal) {
        top += row.tr.offsetHeight;
        activities = row.activityRow && row.activityRow.activities;

        if (actCount = activities && activities.length) {
          for (iAct = 0; iAct < actCount; ++iAct) {
            act = activities[iAct];

            if (!activityFilter || activityFilter.accept(act, row)) {
              start = act.start;
              end = act.end;

              if (minDate) {
                if (minDate > start) {
                  minDate = start;
                }

                if (maxDate < end) {
                  maxDate = end;
                }
              } else {
                minDate = start;
                maxDate = end;
              }
            }
          }
        }

        row = table.nextRow(row);
      }

      return minDate && {
        start: minDate,
        end: maxDate
      };
    }
  }, {
    key: "getScrollLeft",
    value: function getScrollLeft() {
      return this.scroller.scrollLeft;
    }
  }, {
    key: "setScrollLeft",
    value: function setScrollLeft(x) {
      this.scroller.scrollLeft = x;
    }
  }, {
    key: "getScroller",
    value: function getScroller() {
      return this.scroller;
    }
  }, {
    key: "getRightMargin",
    value: function getRightMargin() {
      return this.scroller.offsetWidth - this.getVisibleWidth();
    }
  }, {
    key: "getBottomMargin",
    value: function getBottomMargin() {
      return this.scroller.offsetHeight - this.getVisibleHeight();
    }
  }, {
    key: "setBodyWidth",
    value: function setBodyWidth(w) {
      // this.timeScroller.style.width = this.timeLine.getWidth() + 'px';
      this.body.style.width = "".concat(w, "px");
    }
  }, {
    key: "getBodyWidth",
    value: function getBodyWidth() {
      return this.body.offsetWidth;
    }
  }, {
    key: "setBodyHeight",
    value: function setBodyHeight(h) {
      this.body.style.height = "".concat(h, "px");
    } // noinspection JSUnusedGlobalSymbols

  }, {
    key: "getBodyHeight",
    value: function getBodyHeight() {
      return core["a" /* default */].utils.getHeight(this.scroller);
    }
    /*                 */

    /*     Tooltips    */

    /*                 */

  }, {
    key: "initTooltip",
    value: function initTooltip() {
      var timeTable = this;
      var resGantt = this.gantt.isResourceGantt();
      this.gantt.tooltip.installTooltip({
        // The container that contains elements to display tooltip for.
        container: this.body,
        // The container inside which bounds the tooltip can be displayed
        getTooltipDisplayContainer: function getTooltipDisplayContainer() {
          return timeTable.gantt.getBody();
        },
        // Returns an element in the node hierarchy for which a tooltip can be displayed
        getTooltipElement: function getTooltipElement(node) {
          return timeTable.getActivityNode(node);
        },
        getTooltipData: function getTooltipData(actNode) {
          return timeTable.getActivity(actNode);
        },
        renderTooltip: function renderTooltip(actNode
        /* The element returned by getTooltipElement */
        , act
        /* data returned by getTooltipData for the specified tooltipElt */
        , tooltipCtnr
        /* The container of the tooltip to fill with info. */
        ) {
          if (act && (resGantt && act.row || act)) {
            timeTable.activityRenderer.getTooltip(tooltipCtnr, act, act.row);
          }
        },
        enteringTooltipElement: function enteringTooltipElement(actNode, act) {
          if (timeTable.isDragAndDropping()) return false;

          if (actNode) {
            timeTable.highlightActivity(actNode, true, true);
          }

          return true;
        },
        leavingTooltipElement: function leavingTooltipElement(actNode, act) {
          if (actNode) {
            timeTable.highlightActivity(actNode, false, true);
          }
        }
      });
    }
  }, {
    key: "hideTooltip",
    value: function hideTooltip() {
      this.gantt.tooltip.hideTooltip(0);
    }
    /*                 */

    /*      Search     */

    /*                 */
    // noinspection JSUnusedGlobalSymbols

  }, {
    key: "searchActivities",
    value: function searchActivities(row, filter) {
      var _this6 = this;

      var activities = row.activities;
      var actCount = activities && activities.length;

      if (actCount) {
        var filterFct = typeof filter === 'string' && function (act, object, filter) {
          return _this6.activityRenderer.filter(act, row, filter);
        } || filter;

        for (var iAct = 0; iAct < actCount; ++iAct) {
          if (filterFct(activities[iAct], row, filter)) {
            return true;
          }
        }
      }

      return false;
    }
    /*                   */

    /*   Drag and drop   */

    /*                   */

  }, {
    key: "initDragAndDrop",
    value: function initDragAndDrop() {
      var node = this.body,
          timeTable = this;
      this.dragDropHandler = new dragdrop_DragDropHandler(node);
      this.dragDropHandler.addHandler({
        startMove: function startMove(target, initOffsetX, initOffsetY) {
          var actNode = timeTable.getActivityNode(target);

          if (actNode) {
            this.activity = timeTable.getActivity(actNode);

            if (this.activity === null) {
              console.log('null activity!');
              return false;
            }

            this.initActivityRow = timeTable.getTimeTableRowNode(actNode);
            this.row = this.initRow = timeTable.getRow(this.initActivityRow.id.substring(ROW_ID_PREFIX.length));
            this.initTimeTablePos = timeTable.gantt.getTimeTableCoordinates(target, {
              x: initOffsetX,
              y: initOffsetY
            });
            this.initScrollLeft = node.scrollLeft;
            this.initScrollTop = node.scrollTop;
            this.timeLineItem = {
              start: new Date(this.activity.start),
              type: 'box'
            };
            this.timeLineItem.context = {
              start: this.timeLineItem.start.format(),
              startRow: this.initRow.name
            };
            timeTable.hideTooltip();
            timeTable.gantt.highlightRow(this.row, true, true);
            timeTable.startDraggingActivity(this);
            return actNode;
          }

          return false;
        },
        move: function move(pos) {
          pos.y = undefined; // We don't change the activity Y position

          var scrollDiffX = node.scrollLeft - this.initScrollLeft;

          if (scrollDiffX) {
            pos.dx += scrollDiffX;
            pos.x += scrollDiffX;
          }

          var scrollDiffY = node.scrollTop - this.initScrollTop;

          if (scrollDiffY) {
            pos.dy += scrollDiffY;
          }

          var preRow = this.row;
          var newRow = timeTable.gantt.table.getRowAt(this.initTimeTablePos.y + pos.dy, preRow);
          this.currentTime = new Date(timeTable.gantt.timeLine.getTimeAt(pos.x));

          if (newRow) {
            this.row = newRow;

            if (preRow.id !== newRow.id && this.initRow.id !== preRow.id) {
              // Keep highlighting the init row
              timeTable.gantt.highlightRow(preRow, false);
            }

            if (preRow.id !== newRow.id) {
              if (this.initRow.id !== preRow.id) {
                timeTable.gantt.highlightRow(preRow, false);
              }

              if (this.initRow.id !== newRow.id) {
                timeTable.gantt.highlightRow(newRow, true);
              }

              if (newRow.activityRow) {
                newRow.activityRow.rowNode.appendChild(timeTable.dragDropHandler.draggedObject);
              }
            }

            return this.row.id !== this.initRow.id ? timeTable.acceptActivityRowChange(this) : timeTable.acceptActivityMove(this);
          }

          return false;
        },
        moved: function moved() {
          this.updateTimeLineItem();
        },
        restoreInitPosition: function restoreInitPosition() {
          if (this.row && this.initRow.id !== this.row.id) {
            timeTable.gantt.highlightRow(this.row, false);
            this.row = this.initRow;
          }

          node.scrollTop = this.initTop;
        },
        stopMove: function stopMove() {
          timeTable.stopDraggingActivity(this);
          timeTable.gantt.timeLine.removeTimeLineItem(TIME_MARKER_DRAG_ITEM);

          if (this.row) {
            timeTable.gantt.highlightRow(this.row, true, true);
          }
        },
        applyMove: function applyMove() {
          timeTable.applyActivityMove(this);
        },
        cancel: function cancel() {
          timeTable.abortActivityMove();
        },
        updateTimeLineItem: function updateTimeLineItem() {
          timeTable.gantt.timeLine.setTimeLineItem(TIME_MARKER_DRAG_ITEM, this.createDragTimeLineItem());
        },
        createDragTimeLineItem: function createDragTimeLineItem() {
          var item = this.timeLineItem,
              changeRow = this.row.id !== this.initRow.id;
          item.className = "".concat(TIME_MARKER_DRAG_ITEM, " ").concat(timeTable.dragDropHandler.invalid ? 'dragg-invalid' : 'dragg-valid'); // item.context.draggStatusClass = dragDropHandler.invalid? 'dragg-invalid' : 'dragg-valid';

          item.context.current = this.currentTime.format();
          item.start = this.currentTime;
          item.context.title = core["a" /* default */].utils.formatString(changeRow ? 'Gantt.ChangeActivityRow' : 'Gantt.MoveActivity', this.activity);

          if (changeRow) {
            item.context.currentRow = this.row.name;
          }

          item.content = core["a" /* default */].utils.formatString(changeRow ? 'timeLine.changeRowItem.fmt' : 'timeLine.newTimeItem.fmt', item.context);
          return item;
        }
      });
      this.dragDropHandler.addEventListener(node, 'mousedown', this.dragDropHandler.startDragMouse, true); // Capturing!
    }
  }, {
    key: "startDraggingActivity",
    value: function startDraggingActivity(actParam) {
      if (this.moveInterator && this.moveInterator.startMove) {
        this.moveInterator.startMove(actParam);
      }
    }
  }, {
    key: "acceptActivityRowChange",
    value: function acceptActivityRowChange(actParam) {
      if (this.moveInterator && this.moveInterator.acceptRowChange) {
        return this.moveInterator.acceptRowChange(actParam);
      }

      return true;
    }
  }, {
    key: "acceptActivityMove",
    value: function acceptActivityMove(actParam) {
      if (this.moveInterator && this.moveInterator.acceptMove) {
        return this.moveInterator.acceptMove(actParam);
      }

      return true;
    }
  }, {
    key: "abortActivityMove",
    value: function abortActivityMove(actParam) {
      if (this.moveInterator && this.moveInterator.abortMove) {
        return this.moveInterator.abortMove(actParam);
      }

      return true;
    }
  }, {
    key: "applyActivityMove",
    value: function applyActivityMove(actParam) {
      if (this.moveInterator && this.moveInterator.applyMove) {
        return this.moveInterator.applyMove(actParam);
      }

      return true;
    }
  }, {
    key: "stopDraggingActivity",
    value: function stopDraggingActivity(actParam) {
      if (this.moveInterator && this.moveInterator.stopMove) {
        return this.moveInterator.stopMove(actParam);
      }

      return true;
    }
  }, {
    key: "isDragAndDropping",
    value: function isDragAndDropping() {
      return this.dragDropHandler && this.dragDropHandler.draggedObject;
    }
    /*  Selection methods  */

  }, {
    key: "processClick",
    value: function processClick(e) {
      var _this7 = this;

      this.hideTooltip();
      this.processMouseEvent(e, function (e, row, date) {
        _this7.gantt.highlightRow(row, true, true);

        _this7.gantt.selection.processClick(e, row);

        if (_this7.mouseHandler && _this7.mouseHandler.rowClicked) {
          _this7.mouseHandler.rowClicked(e, row, date);
        }
      }, function (e, activity, date, row) {
        _this7.gantt.selection.processClick(e, activity);

        if (_this7.mouseHandler && _this7.mouseHandler.activityClicked) {
          _this7.mouseHandler.activityClicked(e, activity, date, row);
        }
      });
    }
  }, {
    key: "processMouseEvent",
    value: function processMouseEvent(e, rowCB, activityCB) {
      // const date = new Date(this.gantt.timeLine.getTimeAt(pos.x));
      var coord = this.gantt.getTimeTableCoordinates(e.target, {
        x: event.offsetX,
        y: event.offsetY
      });
      var date = new Date(this.gantt.timeLine.getTimeAt(coord.x));

      if (e.target && core["a" /* default */].utils.hasClass(e.target, TIME_TABLE_ROW)) {
        var row = this.getRow(e.target.id.substring(ROW_ID_PREFIX.length));

        if (row) {
          this.gantt.highlightRow(row, true, true);

          if (rowCB) {
            rowCB(e, row, date);
          }

          this.gantt.selection.processClick(e, row);
        }
      } else {
        var actNode = core["a" /* default */].utils.closest(e.target, ".".concat(TIME_TABLE_ACTIVITY_CLASSNAME));
        var act = actNode && this.getActivity(actNode);

        if (act) {
          var _row = act.row;

          if (!_row) {
            var rowNode = core["a" /* default */].utils.closest(e.target, ".".concat(TIME_TABLE_ROW));
            _row = this.getRow(rowNode.id.substring(ROW_ID_PREFIX.length));
          }

          if (_row) {
            this.gantt.highlightRow(_row, true, true);
          }

          if (activityCB) {
            activityCB(e, act, date, _row);
          }
        }
      }
    }
  }, {
    key: "processDoubleClick",
    value: function processDoubleClick(e) {
      var _this8 = this;

      this.hideTooltip();
      this.processMouseEvent(e, function (e, row, date) {
        if (_this8.mouseHandler && _this8.mouseHandler.rowDoubleClicked && row) {
          _this8.mouseHandler.rowDoubleClicked(e, row, date);
        }
      }, function (e, activity, date, row) {
        if (_this8.mouseHandler && _this8.mouseHandler.activityDoubleClicked) {
          _this8.mouseHandler.activityDoubleClicked(e, activity, date, row);
        }
      });
    }
  }, {
    key: "processMouseDown",
    value: function processMouseDown(e) {
      var _this9 = this;

      this.hideTooltip();

      if (e.which === 3) {
        this.processMouseEvent(e, function (e, row, date) {
          if (_this9.mouseHandler && _this9.mouseHandler.rowRightClicked && row) {
            _this9.mouseHandler.rowRightClicked(e, row, date);
          }
        }, function (e, activity, date, row) {
          if (_this9.mouseHandler && _this9.mouseHandler.activityRightClicked) {
            _this9.mouseHandler.activityRightClicked(e, activity, date, row);
          }
        });
        e && e.preventDefault && e.preventDefault();
        e && e.stopPropagation && e.stopPropagation();
        return false;
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "clearActivitySelection",
    value: function clearActivitySelection(sels) {
      for (var i = 0, count = sels.length, sel; i < count; ++i) {
        sel = sels[i];

        if (sel.node) {
          core["a" /* default */].utils.removeClass(sel.node, SELECTION_CLASS);
        }
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "selectActvities",
    value: function selectActvities(sels) {
      for (var i = 0, node; i < sels.length; i++) {
        if (node = sels[i].node) {
          core["a" /* default */].utils.addClass(node, SELECTION_CLASS);
        }
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "unselectActvities",
    value: function unselectActvities(sels) {
      for (var i = 0, node; i < sels.length; i++) {
        if (node = sels[i].node) {
          core["a" /* default */].utils.removeClass(node, SELECTION_CLASS);
        }
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "selectRows",
    value: function selectRows(rows) {
      for (var i = 0, node; i < rows.length; i++) {
        if ((node = rows[i].activityRow) && (node = node.rowNode)) {
          core["a" /* default */].utils.addClass(node, SELECTION_CLASS);
        }
      }
    } // noinspection JSMethodCanBeStatic

  }, {
    key: "unselectRows",
    value: function unselectRows(rows) {
      for (var i = 0, node; i < rows.length; i++) {
        if ((node = rows[i].activityRow) && (node = node.rowNode)) {
          core["a" /* default */].utils.removeClass(node, SELECTION_CLASS);
        }
      }
    }
  }, {
    key: "rowSelectionChanged",
    value: function rowSelectionChanged() {
      this.draw();
    } //
    // Decoration management
    //

  }, {
    key: "generateGlobalDecorations",
    value: function generateGlobalDecorations(ctx) {
      var decoContainer = this.gantt.timeLine.getDecorationContainer();

      if (!decoContainer) {
        console.warn('No decoration container found in time line');
        return;
      }

      if (this.backgroundCtnr) {
        decoContainer.removeChild(this.backgroundCtnr);
        this.backgroundCtnr = null;
      }

      if (this.activityRenderer.generateDecorations) {
        var ctnr = document.createElement('div');
        ctnr.className = 'time-table-decoration-ctnr decoration-background-ctnr';
        ctnr.style.position = 'absolute';
        ctnr.style.left = 0;
        ctnr.style.top = 0;
        ctnr.style.bottom = 0;
        ctnr.style.width = '100%';
        ctnr.style.height = '100%';
        var objs = this.activityRenderer.generateDecorations(ctx.horiz.start, ctx.horiz.end, ctx);

        for (var i = 0, count = objs ? objs.length : 0, obj; i < count; ++i) {
          obj = objs[i]; // noinspection JSUnresolvedVariable

          this.addDecoration(obj, ctnr);
        }

        if (ctnr.firstChild) {
          decoContainer.appendChild(this.backgroundCtnr = ctnr);
        }
      }
    }
  }, {
    key: "generateRowDecorations",
    value: function generateRowDecorations(row, rowNode, ctx) {
      var objs = this.activityRenderer.generateRowDecorations(row, ctx.horiz.start, ctx.horiz.end, ctx);

      for (var i = 0, count = objs ? objs.length : 0, obj, node; i < count; ++i) {
        obj = objs[i];
        node = this.addDecoration(obj, rowNode); // noinspection JSUnresolvedVariable

        node.style.zIndex = obj.foreground ? 1 : -1;
      }
    }
  }, {
    key: "addDecoration",
    value: function addDecoration(obj, ctnr) {
      var node;

      if (obj.create) {
        node = obj.create();
      } else {
        node = document.createElement('div');

        if (obj.type) {
          if (obj.type === DECORATION_INVALID_TYPE) {
            node.className = DECORATION_INVALID_CLASS;
          } else if (obj.type === DECORATION_BREAK_TYPE) {
            node.className = DECORATION_BREAK_CLASS;
          }
        } else {
          node.className = DECORATION_BREAK_CLASS;
        }

        node.display = 'inline-block';
      }

      if (obj.className) {
        core["a" /* default */].utils.addClass(node, obj.className);
      }

      node.style.position = 'absolute';

      if (obj.background) {
        node.style.background = obj.background;
      } // noinspection JSUnresolvedVariable


      if (obj.color || obj.foreground) {
        // noinspection JSUnresolvedVariable
        node.style.color = obj.color || obj.foreground;
      }

      var left = this.gantt.timeLine.getXFromMillis(obj.start);
      node.style.left = "".concat(left, "px");
      node.style.width = this.gantt.timeLine.getXFromMillis(obj.end) - left;
      node.style.top = '1px';
      node.style.bottom = '1px';
      ctnr.appendChild(node);
      return node;
    } //
    // Constraints
    //

  }, {
    key: "createConstraintGrapherNode",
    value: function createConstraintGrapherNode() {
      if (this.ctsGraph && this.ctsGraph.node) {
        this.body.removeChild(this.ctsGraph.node);
      }

      var ctsNode = document.createElement('div');
      ctsNode.className = 'constraints-grapher';
      ctsNode.style.height = '100%';
      ctsNode.style.width = '100%';
      ctsNode.style.position = 'relative';
      ctsNode.style.pointerEvents = 'none';
      return ctsNode;
    }
  }, {
    key: "setConstraints",
    value: function setConstraints(constraints) {
      this.constraints = constraints;

      if (constraints && constraints.length) {
        if (!this.ctsGraph) {
          var ctsNode = this.createConstraintGrapherNode();
          this.ctsGraph = new (core["a" /* default */].components.ConstraintsGraph.impl || core["a" /* default */].components.ConstraintsGraph)(this.gantt, ctsNode, this.gantt.config && this.gantt.config.constraints);
          this.body.appendChild(ctsNode);
        }

        this.ctsGraph.setConstraints(constraints);
      } else if (this.ctsGraph) {
        if (this.ctsGraph.node) {
          this.body.removeChild(this.ctsGraph.node);
        }

        if (this.ctsGraph.destroy) {
          this.ctsGraph.destroy();
        }

        this.ctsGraph = null;
      }
    }
  }, {
    key: "resetConstraints",
    value: function resetConstraints() {
      var ctsNode = this.createConstraintGrapherNode();
      this.ctsGraph.setNode(ctsNode); // Instead of removing all links, we change the link container

      this.ctsGraph.setConstraints(this.constraints);
      this.body.appendChild(ctsNode);
    } //
    // Destroy
    //

  }, {
    key: "destroy",
    value: function destroy() {
      if (this.backgroundCtnr) {
        this.node.removeChild(this.backgroundCtnr);
        this.backgroundCtnr = null;
      }

      if (this.foregroundCtnr) {
        this.node.removeChild(this.foregroundCtnr);
        this.foregroundCtnr = null;
      }

      if (this.activityRenderer) {
        this.activityRenderer.destroy();
        this.activityRenderer = null;
      }

      if (this.ctsGraph) {
        this.ctsGraph.destroy();
        this.ctsGraph = null;
      }
    }
  }], [{
    key: "isActivityNode",
    value: function isActivityNode(elt) {
      return core["a" /* default */].utils.hasClass(elt, TIME_TABLE_ACTIVITY_CLASSNAME);
    }
  }]);

  return TimeTable;
}(core["a" /* default */].components.TimeTable);


core["a" /* default */].components.TimeTable.impl = timetable_TimeTable;

if (false) {}
// CONCATENATED MODULE: ./src/timetable/index.js


// CONCATENATED MODULE: ./src/gantt.js
/* concated harmony reexport default */__webpack_require__.d(__webpack_exports__, "a", function() { return core["a" /* default */]; });
/**
 * Copyright IBM Corp. 2019
 *
 * This source code is licensed under the Apache-2.0 license found in the
 * LICENSE file in the root directory of this source tree.
 */

/* import-sort-ignore */






 // import P from 'es6-promise/dist/es6-promise.min';


 // if (typeof Promise === 'undefined' /* && Promise.toString().indexOf("[native code]") !== -1 */) {
//   console.log('Use of es6-promise');
//   P.polyfill();
// }

/***/ }),
/* 45 */
/***/ (function(module, exports, __webpack_require__) {

var isObject = __webpack_require__(15);
var document = __webpack_require__(10).document;
// typeof document.createElement is 'object' in old IE
var is = isObject(document) && isObject(document.createElement);
module.exports = function (it) {
  return is ? document.createElement(it) : {};
};


/***/ }),
/* 46 */
/***/ (function(module, exports, __webpack_require__) {

// 7.1.1 ToPrimitive(input [, PreferredType])
var isObject = __webpack_require__(15);
// instead of the ES6 spec version, we didn't implement @@toPrimitive case
// and the second argument - flag - preferred type is a string
module.exports = function (it, S) {
  if (!isObject(it)) return it;
  var fn, val;
  if (S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  if (typeof (fn = it.valueOf) == 'function' && !isObject(val = fn.call(it))) return val;
  if (!S && typeof (fn = it.toString) == 'function' && !isObject(val = fn.call(it))) return val;
  throw TypeError("Can't convert object to primitive value");
};


/***/ }),
/* 47 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var $at = __webpack_require__(92)(true);

// 21.1.3.27 String.prototype[@@iterator]()
__webpack_require__(67)(String, 'String', function (iterated) {
  this._t = String(iterated); // target
  this._i = 0;                // next index
// 21.1.5.2.1 %StringIteratorPrototype%.next()
}, function () {
  var O = this._t;
  var index = this._i;
  var point;
  if (index >= O.length) return { value: undefined, done: true };
  point = $at(O, index);
  this._i += point.length;
  return { value: point, done: false };
});


/***/ }),
/* 48 */
/***/ (function(module, exports) {

// 7.1.4 ToInteger
var ceil = Math.ceil;
var floor = Math.floor;
module.exports = function (it) {
  return isNaN(it = +it) ? 0 : (it > 0 ? floor : ceil)(it);
};


/***/ }),
/* 49 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.2.2 / 15.2.3.5 Object.create(O [, Properties])
var anObject = __webpack_require__(13);
var dPs = __webpack_require__(94);
var enumBugKeys = __webpack_require__(52);
var IE_PROTO = __webpack_require__(50)('IE_PROTO');
var Empty = function () { /* empty */ };
var PROTOTYPE = 'prototype';

// Create object with fake `null` prototype: use iframe Object with cleared prototype
var createDict = function () {
  // Thrash, waste and sodomy: IE GC bug
  var iframe = __webpack_require__(45)('iframe');
  var i = enumBugKeys.length;
  var lt = '<';
  var gt = '>';
  var iframeDocument;
  iframe.style.display = 'none';
  __webpack_require__(71).appendChild(iframe);
  iframe.src = 'javascript:'; // eslint-disable-line no-script-url
  // createDict = iframe.contentWindow.Object;
  // html.removeChild(iframe);
  iframeDocument = iframe.contentWindow.document;
  iframeDocument.open();
  iframeDocument.write(lt + 'script' + gt + 'document.F=Object' + lt + '/script' + gt);
  iframeDocument.close();
  createDict = iframeDocument.F;
  while (i--) delete createDict[PROTOTYPE][enumBugKeys[i]];
  return createDict();
};

module.exports = Object.create || function create(O, Properties) {
  var result;
  if (O !== null) {
    Empty[PROTOTYPE] = anObject(O);
    result = new Empty();
    Empty[PROTOTYPE] = null;
    // add "__proto__" for Object.getPrototypeOf polyfill
    result[IE_PROTO] = O;
  } else result = createDict();
  return Properties === undefined ? result : dPs(result, Properties);
};


/***/ }),
/* 50 */
/***/ (function(module, exports, __webpack_require__) {

var shared = __webpack_require__(51)('keys');
var uid = __webpack_require__(36);
module.exports = function (key) {
  return shared[key] || (shared[key] = uid(key));
};


/***/ }),
/* 51 */
/***/ (function(module, exports, __webpack_require__) {

var core = __webpack_require__(8);
var global = __webpack_require__(10);
var SHARED = '__core-js_shared__';
var store = global[SHARED] || (global[SHARED] = {});

(module.exports = function (key, value) {
  return store[key] || (store[key] = value !== undefined ? value : {});
})('versions', []).push({
  version: core.version,
  mode: __webpack_require__(29) ? 'pure' : 'global',
  copyright: '© 2019 Denis Pushkarev (zloirock.ru)'
});


/***/ }),
/* 52 */
/***/ (function(module, exports) {

// IE 8- don't enum bug keys
module.exports = (
  'constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf'
).split(',');


/***/ }),
/* 53 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.2.9 / 15.2.3.2 Object.getPrototypeOf(O)
var has = __webpack_require__(22);
var toObject = __webpack_require__(38);
var IE_PROTO = __webpack_require__(50)('IE_PROTO');
var ObjectProto = Object.prototype;

module.exports = Object.getPrototypeOf || function (O) {
  O = toObject(O);
  if (has(O, IE_PROTO)) return O[IE_PROTO];
  if (typeof O.constructor == 'function' && O instanceof O.constructor) {
    return O.constructor.prototype;
  } return O instanceof Object ? ObjectProto : null;
};


/***/ }),
/* 54 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(98);
var global = __webpack_require__(10);
var hide = __webpack_require__(25);
var Iterators = __webpack_require__(30);
var TO_STRING_TAG = __webpack_require__(12)('toStringTag');

var DOMIterables = ('CSSRuleList,CSSStyleDeclaration,CSSValueList,ClientRectList,DOMRectList,DOMStringList,' +
  'DOMTokenList,DataTransferItemList,FileList,HTMLAllCollection,HTMLCollection,HTMLFormElement,HTMLSelectElement,' +
  'MediaList,MimeTypeArray,NamedNodeMap,NodeList,PaintRequestList,Plugin,PluginArray,SVGLengthList,SVGNumberList,' +
  'SVGPathSegList,SVGPointList,SVGStringList,SVGTransformList,SourceBufferList,StyleSheetList,TextTrackCueList,' +
  'TextTrackList,TouchList').split(',');

for (var i = 0; i < DOMIterables.length; i++) {
  var NAME = DOMIterables[i];
  var Collection = global[NAME];
  var proto = Collection && Collection.prototype;
  if (proto && !proto[TO_STRING_TAG]) hide(proto, TO_STRING_TAG, NAME);
  Iterators[NAME] = Iterators.Array;
}


/***/ }),
/* 55 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// 25.4.1.5 NewPromiseCapability(C)
var aFunction = __webpack_require__(32);

function PromiseCapability(C) {
  var resolve, reject;
  this.promise = new C(function ($$resolve, $$reject) {
    if (resolve !== undefined || reject !== undefined) throw TypeError('Bad Promise constructor');
    resolve = $$resolve;
    reject = $$reject;
  });
  this.resolve = aFunction(resolve);
  this.reject = aFunction(reject);
}

module.exports.f = function (C) {
  return new PromiseCapability(C);
};


/***/ }),
/* 56 */
/***/ (function(module, exports, __webpack_require__) {

exports.f = __webpack_require__(12);


/***/ }),
/* 57 */
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(10);
var core = __webpack_require__(8);
var LIBRARY = __webpack_require__(29);
var wksExt = __webpack_require__(56);
var defineProperty = __webpack_require__(20).f;
module.exports = function (name) {
  var $Symbol = core.Symbol || (core.Symbol = LIBRARY ? {} : global.Symbol || {});
  if (name.charAt(0) != '_' && !(name in $Symbol)) defineProperty($Symbol, name, { value: wksExt.f(name) });
};


/***/ }),
/* 58 */
/***/ (function(module, exports) {

exports.f = {}.propertyIsEnumerable;


/***/ }),
/* 59 */
/***/ (function(module, exports, __webpack_require__) {

// most Object methods by ES6 should accept primitives
var $export = __webpack_require__(9);
var core = __webpack_require__(8);
var fails = __webpack_require__(27);
module.exports = function (KEY, exec) {
  var fn = (core.Object || {})[KEY] || Object[KEY];
  var exp = {};
  exp[KEY] = exec(fn);
  $export($export.S + $export.F * fails(function () { fn(1); }), 'Object', exp);
};


/***/ }),
/* 60 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(114);

/***/ }),
/* 61 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(122);

/***/ }),
/* 62 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "b", function() { return RESOURCE_LOAD_CLASS; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return Block; });
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(2);


var LOAD_RESOURCE_BAR_CLASS = 'load-resource-bar';
var RESOURCE_LOAD_CLASS = 'resource-load';
var Block =
/*#__PURE__*/
function () {
  function Block(start, end, prev, next) {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_0__[/* default */ "a"])(this, Block);

    this.start = start;
    this.end = end;
    this.prev = prev;
    this.next = next;
    this.resNodes = [];
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_1__[/* default */ "a"])(Block, [{
    key: "addResource",
    value: function addResource(resNode) {
      this.resNodes.push(resNode);
    }
  }, {
    key: "insertBefore",
    value: function insertBefore(start, end, resNode) {
      var block = new Block(start, end, this.prev, this);
      this.prev.next = block; // Always a previous as firstBlock initialized with a minimal date.

      this.prev = block;
      if (resNode) block.addResource(resNode);
      return block;
    }
  }, {
    key: "insertAfter",
    value: function insertAfter(start, end, resNode) {
      if (this.next) {
        return this.next.insert(start, end, resNode);
      }

      var block = new Block(start, end, this, null);
      this.next = block;
      if (resNode) block.addResource(resNode);
      return block;
    }
  }, {
    key: "insert",
    value: function insert(start, end, resNode) {
      var block;

      if (start >= this.end) {
        return this.insertAfter(start, end, resNode);
      }

      if (start < this.start) {
        this.insertBefore(start, Math.min(this.start, end), resNode);
        if (end <= this.start) return undefined;
        start = this.start;
      }

      if (start > this.start) {
        this.insertBefore(this.start, start).resNodes = [].concat(this.resNodes);
        this.start = start;
      }

      if (end < this.end) {
        block = this.insertBefore(this.start, end);
        block.resNodes = this.resNodes.concat([resNode]);
        this.start = end;
        return block;
      }

      this.resNodes.push(resNode);

      if (end > this.end) {
        return this.insertAfter(this.end, end, resNode);
      }

      return this;
    }
  }, {
    key: "computeMax",
    value: function computeMax(useMaxLoad) {
      var max = 0;
      var usedRes = [];
      this.resNodes.forEach(function (node) {
        if (useMaxLoad) {
          if (usedRes.indexOf(node.resource) < 0) {
            usedRes.push(node.resource);
            max += node.maxLoad;
          }
        } else max += node.load;
      });
      this.max = max;
      return Math.max(max, this.next ? this.next.computeMax(useMaxLoad) : 0);
    }
  }, {
    key: "createVisItem",
    value: function createVisItem(ctx) {
      // max, verticalPercentage, renderer
      if (!this.resNodes.length) return null;
      var tpl = '<div style="display: flex; flex-direction: column-reverse; height: 100%" class="' + LOAD_RESOURCE_BAR_CLASS + '">';
      var closing = '</div>';
      var max = ctx.max;
      var height = ctx.plotAreaHeight; // Only true if one resource selected => this.resNodes is always of size 1

      if (ctx.useMaxLoad && this.max) {
        tpl += '<div style="display: flex; flex-direction: column-reverse; height: ' + Math.round(height = height * this.max / max) + 'px;" class="max-load">';
        max = this.max; // activities height are now proportional to their max load container height

        closing = '</div>' + closing;
      }

      for (var i = 0, res; i < this.resNodes.length; i++) {
        res = this.resNodes[i];
        tpl += '<div style="background-color: ' + ctx.chartRenderer.background(res.resource, res.activity) + '; height: ' + Math.round(height * res.load / max) + 'px;" data-res-name="' + res.resource.name + '" data-act-name="' + (res.activity.name || '') + '" data-res-load="' + res.load + '"' + (res.maxLoad ? ' data-max-load="' + res.maxLoad + '"' : '') + ' class="' + RESOURCE_LOAD_CLASS + '"></div>';
      }

      tpl += closing;
      return {
        start: this.start,
        end: this.end,
        type: 'background',
        content: tpl
      };
    }
  }, {
    key: "toString",
    value: function toString() {
      var s;

      if (this.start) {
        s = '[ start: ' + new Date(this.start).toLocaleDateString() + ' - end: ' + new Date(this.end).toLocaleDateString() + '(';
        s += this.resNodes.join(', ');
        s += ')]';
      } else {
        s = '';
      }

      return s + (this.next ? '\n     ' + this.next.toString() : '');
    }
  }]);

  return Block;
}();

/***/ }),
/* 63 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(147);

/***/ }),
/* 64 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(156);

/***/ }),
/* 65 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = !__webpack_require__(21) && !__webpack_require__(27)(function () {
  return Object.defineProperty(__webpack_require__(45)('div'), 'a', { get: function () { return 7; } }).a != 7;
});


/***/ }),
/* 66 */
/***/ (function(module, exports) {



/***/ }),
/* 67 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var LIBRARY = __webpack_require__(29);
var $export = __webpack_require__(9);
var redefine = __webpack_require__(68);
var hide = __webpack_require__(25);
var Iterators = __webpack_require__(30);
var $iterCreate = __webpack_require__(93);
var setToStringTag = __webpack_require__(37);
var getPrototypeOf = __webpack_require__(53);
var ITERATOR = __webpack_require__(12)('iterator');
var BUGGY = !([].keys && 'next' in [].keys()); // Safari has buggy iterators w/o `next`
var FF_ITERATOR = '@@iterator';
var KEYS = 'keys';
var VALUES = 'values';

var returnThis = function () { return this; };

module.exports = function (Base, NAME, Constructor, next, DEFAULT, IS_SET, FORCED) {
  $iterCreate(Constructor, NAME, next);
  var getMethod = function (kind) {
    if (!BUGGY && kind in proto) return proto[kind];
    switch (kind) {
      case KEYS: return function keys() { return new Constructor(this, kind); };
      case VALUES: return function values() { return new Constructor(this, kind); };
    } return function entries() { return new Constructor(this, kind); };
  };
  var TAG = NAME + ' Iterator';
  var DEF_VALUES = DEFAULT == VALUES;
  var VALUES_BUG = false;
  var proto = Base.prototype;
  var $native = proto[ITERATOR] || proto[FF_ITERATOR] || DEFAULT && proto[DEFAULT];
  var $default = $native || getMethod(DEFAULT);
  var $entries = DEFAULT ? !DEF_VALUES ? $default : getMethod('entries') : undefined;
  var $anyNative = NAME == 'Array' ? proto.entries || $native : $native;
  var methods, key, IteratorPrototype;
  // Fix native
  if ($anyNative) {
    IteratorPrototype = getPrototypeOf($anyNative.call(new Base()));
    if (IteratorPrototype !== Object.prototype && IteratorPrototype.next) {
      // Set @@toStringTag to native iterators
      setToStringTag(IteratorPrototype, TAG, true);
      // fix for some old engines
      if (!LIBRARY && typeof IteratorPrototype[ITERATOR] != 'function') hide(IteratorPrototype, ITERATOR, returnThis);
    }
  }
  // fix Array#{values, @@iterator}.name in V8 / FF
  if (DEF_VALUES && $native && $native.name !== VALUES) {
    VALUES_BUG = true;
    $default = function values() { return $native.call(this); };
  }
  // Define iterator
  if ((!LIBRARY || FORCED) && (BUGGY || VALUES_BUG || !proto[ITERATOR])) {
    hide(proto, ITERATOR, $default);
  }
  // Plug for library
  Iterators[NAME] = $default;
  Iterators[TAG] = returnThis;
  if (DEFAULT) {
    methods = {
      values: DEF_VALUES ? $default : getMethod(VALUES),
      keys: IS_SET ? $default : getMethod(KEYS),
      entries: $entries
    };
    if (FORCED) for (key in methods) {
      if (!(key in proto)) redefine(proto, key, methods[key]);
    } else $export($export.P + $export.F * (BUGGY || VALUES_BUG), NAME, methods);
  }
  return methods;
};


/***/ }),
/* 68 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(25);


/***/ }),
/* 69 */
/***/ (function(module, exports, __webpack_require__) {

var has = __webpack_require__(22);
var toIObject = __webpack_require__(26);
var arrayIndexOf = __webpack_require__(96)(false);
var IE_PROTO = __webpack_require__(50)('IE_PROTO');

module.exports = function (object, names) {
  var O = toIObject(object);
  var i = 0;
  var result = [];
  var key;
  for (key in O) if (key != IE_PROTO) has(O, key) && result.push(key);
  // Don't enum bug & hidden keys
  while (names.length > i) if (has(O, key = names[i++])) {
    ~arrayIndexOf(result, key) || result.push(key);
  }
  return result;
};


/***/ }),
/* 70 */
/***/ (function(module, exports, __webpack_require__) {

// 7.1.15 ToLength
var toInteger = __webpack_require__(48);
var min = Math.min;
module.exports = function (it) {
  return it > 0 ? min(toInteger(it), 0x1fffffffffffff) : 0; // pow(2, 53) - 1 == 9007199254740991
};


/***/ }),
/* 71 */
/***/ (function(module, exports, __webpack_require__) {

var document = __webpack_require__(10).document;
module.exports = document && document.documentElement;


/***/ }),
/* 72 */
/***/ (function(module, exports, __webpack_require__) {

// getting tag from 19.1.3.6 Object.prototype.toString()
var cof = __webpack_require__(31);
var TAG = __webpack_require__(12)('toStringTag');
// ES3 wrong here
var ARG = cof(function () { return arguments; }()) == 'Arguments';

// fallback for IE11 Script Access Denied error
var tryGet = function (it, key) {
  try {
    return it[key];
  } catch (e) { /* empty */ }
};

module.exports = function (it) {
  var O, T, B;
  return it === undefined ? 'Undefined' : it === null ? 'Null'
    // @@toStringTag case
    : typeof (T = tryGet(O = Object(it), TAG)) == 'string' ? T
    // builtinTag case
    : ARG ? cof(O)
    // ES3 arguments fallback
    : (B = cof(O)) == 'Object' && typeof O.callee == 'function' ? 'Arguments' : B;
};


/***/ }),
/* 73 */
/***/ (function(module, exports, __webpack_require__) {

var classof = __webpack_require__(72);
var ITERATOR = __webpack_require__(12)('iterator');
var Iterators = __webpack_require__(30);
module.exports = __webpack_require__(8).getIteratorMethod = function (it) {
  if (it != undefined) return it[ITERATOR]
    || it['@@iterator']
    || Iterators[classof(it)];
};


/***/ }),
/* 74 */
/***/ (function(module, exports, __webpack_require__) {

// 7.3.20 SpeciesConstructor(O, defaultConstructor)
var anObject = __webpack_require__(13);
var aFunction = __webpack_require__(32);
var SPECIES = __webpack_require__(12)('species');
module.exports = function (O, D) {
  var C = anObject(O).constructor;
  var S;
  return C === undefined || (S = anObject(C)[SPECIES]) == undefined ? D : aFunction(S);
};


/***/ }),
/* 75 */
/***/ (function(module, exports, __webpack_require__) {

var ctx = __webpack_require__(28);
var invoke = __webpack_require__(106);
var html = __webpack_require__(71);
var cel = __webpack_require__(45);
var global = __webpack_require__(10);
var process = global.process;
var setTask = global.setImmediate;
var clearTask = global.clearImmediate;
var MessageChannel = global.MessageChannel;
var Dispatch = global.Dispatch;
var counter = 0;
var queue = {};
var ONREADYSTATECHANGE = 'onreadystatechange';
var defer, channel, port;
var run = function () {
  var id = +this;
  // eslint-disable-next-line no-prototype-builtins
  if (queue.hasOwnProperty(id)) {
    var fn = queue[id];
    delete queue[id];
    fn();
  }
};
var listener = function (event) {
  run.call(event.data);
};
// Node.js 0.9+ & IE10+ has setImmediate, otherwise:
if (!setTask || !clearTask) {
  setTask = function setImmediate(fn) {
    var args = [];
    var i = 1;
    while (arguments.length > i) args.push(arguments[i++]);
    queue[++counter] = function () {
      // eslint-disable-next-line no-new-func
      invoke(typeof fn == 'function' ? fn : Function(fn), args);
    };
    defer(counter);
    return counter;
  };
  clearTask = function clearImmediate(id) {
    delete queue[id];
  };
  // Node.js 0.8-
  if (__webpack_require__(31)(process) == 'process') {
    defer = function (id) {
      process.nextTick(ctx(run, id, 1));
    };
  // Sphere (JS game engine) Dispatch API
  } else if (Dispatch && Dispatch.now) {
    defer = function (id) {
      Dispatch.now(ctx(run, id, 1));
    };
  // Browsers with MessageChannel, includes WebWorkers
  } else if (MessageChannel) {
    channel = new MessageChannel();
    port = channel.port2;
    channel.port1.onmessage = listener;
    defer = ctx(port.postMessage, port, 1);
  // Browsers with postMessage, skip WebWorkers
  // IE8 has postMessage, but it's sync & typeof its postMessage is 'object'
  } else if (global.addEventListener && typeof postMessage == 'function' && !global.importScripts) {
    defer = function (id) {
      global.postMessage(id + '', '*');
    };
    global.addEventListener('message', listener, false);
  // IE8-
  } else if (ONREADYSTATECHANGE in cel('script')) {
    defer = function (id) {
      html.appendChild(cel('script'))[ONREADYSTATECHANGE] = function () {
        html.removeChild(this);
        run.call(id);
      };
    };
  // Rest old browsers
  } else {
    defer = function (id) {
      setTimeout(ctx(run, id, 1), 0);
    };
  }
}
module.exports = {
  set: setTask,
  clear: clearTask
};


/***/ }),
/* 76 */
/***/ (function(module, exports) {

module.exports = function (exec) {
  try {
    return { e: false, v: exec() };
  } catch (e) {
    return { e: true, v: e };
  }
};


/***/ }),
/* 77 */
/***/ (function(module, exports, __webpack_require__) {

var anObject = __webpack_require__(13);
var isObject = __webpack_require__(15);
var newPromiseCapability = __webpack_require__(55);

module.exports = function (C, x) {
  anObject(C);
  if (isObject(x) && x.constructor === C) return x;
  var promiseCapability = newPromiseCapability.f(C);
  var resolve = promiseCapability.resolve;
  resolve(x);
  return promiseCapability.promise;
};


/***/ }),
/* 78 */
/***/ (function(module, exports) {

exports.f = Object.getOwnPropertySymbols;


/***/ }),
/* 79 */
/***/ (function(module, exports, __webpack_require__) {

// 7.2.2 IsArray(argument)
var cof = __webpack_require__(31);
module.exports = Array.isArray || function isArray(arg) {
  return cof(arg) == 'Array';
};


/***/ }),
/* 80 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.2.7 / 15.2.3.4 Object.getOwnPropertyNames(O)
var $keys = __webpack_require__(69);
var hiddenKeys = __webpack_require__(52).concat('length', 'prototype');

exports.f = Object.getOwnPropertyNames || function getOwnPropertyNames(O) {
  return $keys(O, hiddenKeys);
};


/***/ }),
/* 81 */
/***/ (function(module, exports, __webpack_require__) {

var $parseInt = __webpack_require__(10).parseInt;
var $trim = __webpack_require__(136).trim;
var ws = __webpack_require__(82);
var hex = /^[-+]?0[xX]/;

module.exports = $parseInt(ws + '08') !== 8 || $parseInt(ws + '0x16') !== 22 ? function parseInt(str, radix) {
  var string = $trim(String(str), 3);
  return $parseInt(string, (radix >>> 0) || (hex.test(string) ? 16 : 10));
} : $parseInt;


/***/ }),
/* 82 */
/***/ (function(module, exports) {

module.exports = '\x09\x0A\x0B\x0C\x0D\x20\xA0\u1680\u180E\u2000\u2001\u2002\u2003' +
  '\u2004\u2005\u2006\u2007\u2008\u2009\u200A\u202F\u205F\u3000\u2028\u2029\uFEFF';


/***/ }),
/* 83 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var _babel_runtime_corejs2_core_js_number_is_nan__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(42);
/* harmony import */ var _babel_runtime_corejs2_core_js_number_is_nan__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_corejs2_core_js_number_is_nan__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _babel_runtime_corejs2_core_js_number_parse_int__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(17);
/* harmony import */ var _babel_runtime_corejs2_core_js_number_parse_int__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_corejs2_core_js_number_parse_int__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(1);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(2);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(4);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(3);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_6__ = __webpack_require__(5);
/* harmony import */ var vis__WEBPACK_IMPORTED_MODULE_7__ = __webpack_require__(43);
/* harmony import */ var vis__WEBPACK_IMPORTED_MODULE_7___default = /*#__PURE__*/__webpack_require__.n(vis__WEBPACK_IMPORTED_MODULE_7__);
/* harmony import */ var _core_core__WEBPACK_IMPORTED_MODULE_8__ = __webpack_require__(0);
/* harmony import */ var _block__WEBPACK_IMPORTED_MODULE_9__ = __webpack_require__(62);
/* harmony import */ var _loadchart_scss__WEBPACK_IMPORTED_MODULE_10__ = __webpack_require__(146);
/* harmony import */ var _loadchart_scss__WEBPACK_IMPORTED_MODULE_10___default = /*#__PURE__*/__webpack_require__.n(_loadchart_scss__WEBPACK_IMPORTED_MODULE_10__);











var CHART_TOP_MARGIN = 8;

function ResNode(resource, activity, load, maxLoad) {
  this.resource = resource;
  this.activity = activity;
  this.load = load;
  this.maxLoad = maxLoad;
}

ResNode.prototype.toString = function () {
  return this.resource.name + ' - ' + this.activity.name;
};

var LoadResourceChart =
/*#__PURE__*/
function (_Gantt$components$Loa) {
  Object(_babel_runtime_corejs2_helpers_esm_inherits__WEBPACK_IMPORTED_MODULE_6__[/* default */ "a"])(LoadResourceChart, _Gantt$components$Loa);

  function LoadResourceChart() {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"])(this, LoadResourceChart);

    return Object(_babel_runtime_corejs2_helpers_esm_possibleConstructorReturn__WEBPACK_IMPORTED_MODULE_4__[/* default */ "a"])(this, Object(_babel_runtime_corejs2_helpers_esm_getPrototypeOf__WEBPACK_IMPORTED_MODULE_5__[/* default */ "a"])(LoadResourceChart).apply(this, arguments));
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_3__[/* default */ "a"])(LoadResourceChart, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      if (config.classes) {
        _core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.addClass(this.node, config.classes);
      }

      this.header = document.createElement('div');
      this.header.className = 'load-resource-chart-header';

      if (config.header) {
        var headerContent;

        if (_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.isFunction(config.header)) {
          headerContent = config.header(this.header);
        } else if (_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.isDomElement(config.header)) {
          headerContent = config.header;
        } else {
          headerContent = document.createElement('h3');
          headerContent.appendChild(document.createTextNode(config.header));
        }

        if (headerContent) {
          this.header.appendChild(headerContent);
        }
      }

      this.node.appendChild(this.header);
      this.body = document.createElement('div');
      this.body.className = 'load-resource-chart-body';
      this.body.style.position = 'relative';

      if (config.height) {
        if (_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.isFunction(config.height)) {
          this.body.style.height = config.height() + 'px';
        } else if (_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.isString(config.height)) {
          this.body.style.height = config.height;
        } else {
          this.body.style.height = config.height + 'px';
        }
      } else {
        this.body.style.height = '100%';
      }

      this.node.appendChild(this.body);
      this.leftPanel = document.createElement('div');
      this.leftPanel.className = 'load-resource-chart-left';
      this.leftPanel.style.position = 'absolute';
      this.leftPanel.style.left = '0';
      this.leftPanel.style.top = '0';
      this.leftPanel.style.bottom = '0';
      this.legendPanel = document.createElement('div');
      this.legendPanel.className = 'legend-panel empty-legend';
      this.legendPanel.style.position = 'absolute';
      this.legendPanel.style.bottom = '0';
      this.legendPanel.style.overflowY = 'auto';
      this.leftPanel.appendChild(this.legendPanel); // Create Y-Axis panel

      this.yAxisPanel = document.createElement('div');
      this.yAxisPanel.className = 'y-axis-ctnr';
      this.yAxisPanel.style.position = 'absolute';
      this.yAxisPanel.style.right = 0;
      this.yAxisPanel.style.top = '0';
      this.yAxis = document.createElement('div');
      this.yAxis.className = 'y-axis' + (config && config.yAxis && config.yAxis.className ? ' ' + config.yAxis.className : '');
      this.yAxis.style.position = 'absolute';
      this.yAxis.style.overflow = 'visible';
      this.yAxis.style.right = 0;
      this.yAxis.style.top = '0';
      this.yAxisPanel.appendChild(this.yAxis);
      this.leftPanel.appendChild(this.yAxisPanel);
      this.body.appendChild(this.leftPanel);
      this.timeLineScrollerElt = document.createElement('div');
      this.timeLineScrollerElt.className = 'load-resource-chart-scroller';
      this.timeLineScrollerElt.style.position = 'absolute';
      this.timeLineScrollerElt.style.top = '0';
      this.timeLineScrollerElt.style.bottom = '0';
      this.timeLineScrollerElt.style.right = '0';
      this.timeLineScrollerElt.style.overflow = 'hidden';
      this.body.appendChild(this.timeLineScrollerElt);
      this.noSelectionElt = document.createElement('div');
      this.noSelectionElt.className = 'no-selection';
      this.noSelectionElt.style.position = 'absolute';
      this.noSelectionElt.style.left = '0';
      this.noSelectionElt.style.top = '0';
      this.noSelectionElt.style.bottom = '0';
      this.noSelectionElt.style.right = '0';
      this.noSelectionElt.style.overflow = 'hidden';
      this.noSelectionElt.style.display = 'flex';
      this.noSelectionElt.style.alignItems = 'center';
      this.noSelectionElt.style.justifyContent = 'center';
      this.noSelectionElt.style.zIndex = '1';
      var noSelMsg = document.createElement('div');
      noSelMsg.className = 'no-selection-message';
      noSelMsg.appendChild(document.createTextNode(_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.getString('gantt.loadResourceChart.noSelection.title')));
      this.noSelectionElt.appendChild(noSelMsg);
      this.body.appendChild(this.noSelectionElt);

      function createGetter(config) {
        if (_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.isFunction(config)) {
          return config;
        }

        if (_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.isString(config)) {
          return _core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.propertyEvaluator(config);
        }

        return function () {
          return config;
        };
      }

      this.resourceMaxLoad = config.maxLoad && createGetter(config.maxLoad);

      this.resourceActivityLoad = config.load && createGetter(config.load) || function () {
        return 1;
      };

      var loadChart = this;
      var RendererClass = _core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].components.Renderer.impl || _core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].components.Renderer;
      this.chartRenderer = new RendererClass({}, {
        background: function background(res) {
          return loadChart.resourceRenderer.background(res);
        },
        getTooltipProperties: function getTooltipProperties(info) {
          var props = ['Resource', info.resourceName, 'Activity', info.activityName, 'Load', info.resourceLoad];

          if (info.resourceMaxLoad) {
            props.push('Maximum load', info.resourceMaxLoad);
          }

          return props;
        }
      }, this.gantt);
      this.initTooltips();
    }
  }, {
    key: "setVisible",
    value: function setVisible(visible) {}
  }, {
    key: "setTimeLineBounds",
    value: function setTimeLineBounds(bounds) {
      this.timeLineScrollerElt.style.left = bounds.x + 'px';
      this.timeLineScrollerElt.style.width = bounds.width + 'px';
      this.leftPanel.style.width = bounds.x + 'px';

      if (this.timeLineElt) {
        this.updatePlottingArea();
        this.drawCharts();
      }
    }
  }, {
    key: "setTimeLineWidth",
    value: function setTimeLineWidth(w) {
      if (this.timeLineElt) {
        this.timeLineElt.style.width = w + 'px';
      }
    }
  }, {
    key: "setTimeLineScrollLeft",
    value: function setTimeLineScrollLeft(left) {
      this.timeLineScrollerElt.scrollLeft = left;
    }
  }, {
    key: "getTimeLineNode",
    value: function getTimeLineNode() {
      return this.timeLineScrollerElt;
    }
  }, {
    key: "setTimeWindow",
    value: function setTimeWindow(start, end, onInit) {
      var _this = this;

      if (this.timeLineElt) {
        this.timeLineScrollerElt.removeChild(this.timeLineElt);
      }

      this.timeLineElt = document.createElement('div');
      this.timeLineElt.style.width = this.gantt.timeLine.getWidth() + 'px';
      this.timeLineElt.style.height = '100%';

      try {
        // See https://github.com/almende/vis/issues/24 for time zone hack
        this.visTimeline = new vis__WEBPACK_IMPORTED_MODULE_7___default.a.Timeline(this.timeLineElt, {}, {
          // 'millisecond', 'second', 'minute', 'hour', 'weekday', 'day', 'month', 'year'
          orientation: {
            axis: 'bottom',
            item: 'bottom'
          },
          height: '100%',
          start: this.gantt.timeLine.scrollableHorizon.start,
          end: this.gantt.timeLine.scrollableHorizon.end
        });
        this.visTimeline.range.body.emitter.off('mousewheel');

        var fireReady = function fireReady() {
          _this.visTimeline.off('changed', fireReady);

          _this.timeScaleElt = _this.timeLineElt.getElementsByClassName('vis-panel vis-bottom')[0];
          var style = window.getComputedStyle(_this.timeScaleElt);
          var bottom = style.bottom;
          bottom = bottom ? _babel_runtime_corejs2_core_js_number_parse_int__WEBPACK_IMPORTED_MODULE_1___default()(bottom, 10) : 0;

          if (_babel_runtime_corejs2_core_js_number_is_nan__WEBPACK_IMPORTED_MODULE_0___default()(bottom)) {
            bottom = 0;
          }

          var topBorder = style.borderTopWidth;
          topBorder = topBorder ? _babel_runtime_corejs2_core_js_number_parse_int__WEBPACK_IMPORTED_MODULE_1___default()(topBorder, 10) : 0;
          _this.timeScaleHeight = $(_this.timeScaleElt).outerHeight() + bottom - topBorder; // visjs set a -2px bottom

          _this.updatePlottingArea();

          _this.triggerEvent(_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].events.TIME_LINE_INIT);

          if (onInit) {
            onInit();
          }
        };

        this.visTimeline.on('changed', fireReady);
      } catch (e) {
        console.error(e);
        throw e;
      }

      this.timeLineScrollerElt.appendChild(this.timeLineElt);
    }
  }, {
    key: "setScrollLeft",
    value: function setScrollLeft(left) {
      this.getScroller().scrollLeft = left;
    }
  }, {
    key: "setResources",
    value: function setResources(resources) {
      this.resources = resources;
    }
  }, {
    key: "setResourceRenderer",
    value: function setResourceRenderer(resRenderer) {
      this.resourceRenderer = resRenderer;
    }
  }, {
    key: "destroy",
    value: function destroy() {}
  }, {
    key: "draw",
    value: function draw() {
      if (this.visTimeline) {
        this.noSelectionElt.style.display = this.resources && this.resources.length ? 'none' : 'flex';
        this.updateLegend();
        this.drawCharts();
      }
    }
  }, {
    key: "unselectRows",
    value: function unselectRows(rows) {
      rows.forEach(function (row) {
        return row.backgroundColor = undefined;
      });
    }
  }, {
    key: "drawCharts",
    value: function drawCharts() {
      var _this2 = this;

      var firstBlock = new _block__WEBPACK_IMPORTED_MODULE_9__[/* Block */ "a"](0, 0);
      var maxLoad;
      var load;
      (this.resources || []).forEach(function (res) {
        (res.activities || []).forEach(function (act) {
          load = _this2.resourceActivityLoad(res, act);
          maxLoad = _this2.resourceMaxLoad && _this2.resourceMaxLoad(res, act);
          firstBlock.insert(act.start, act.end, new ResNode(res, act, load, maxLoad));
        });
      });
      var max = firstBlock.computeMax(this.resourceMaxLoad && this.resources.length === 1);
      this.setYAxisMax(max);
      var items = [];
      var item;
      var ctx = {
        max: max,
        useMaxLoad: this.resourceMaxLoad && this.resources.length === 1,
        chartRenderer: this.chartRenderer,
        plotAreaHeight: this.plotAreaHeight - CHART_TOP_MARGIN,
        yRatio: this.yRatio
      };

      for (var block = firstBlock.next; block; block = block.next) {
        item = block.createVisItem(ctx);

        if (item) {
          items.push(item);
        }
      }

      this.visTimeline.setItems(items);
    }
  }, {
    key: "updateLegend",
    value: function updateLegend() {
      if (this.legend) {
        this.legendPanel.removeChild(this.legend);
      }

      var hasRes = this.resources && this.resources.length;
      _core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.toggleClass(this.legendPanel, 'empty-legend', !hasRes);
      this.legendPanel.style.overflowY = 'auto';

      if (this.resources) {
        this.legend = document.createElement('ul');
        this.legend.className = 'legend';
        var li;
        var colorBox;
        var name;
        var res;

        for (var i = 0, count = this.resources.length; i < count; i++) {
          res = this.resources[i];
          li = document.createElement('li');
          li.className = 'legend-item';
          li.style.display = 'table';
          colorBox = document.createElement('div');
          colorBox.className = 'legend-item-color';
          colorBox.style.display = 'table-cell';
          colorBox.style.verticalAlign = 'middle';
          colorBox.style.backgroundColor = res.backgroundColor;
          li.appendChild(colorBox);
          name = document.createElement('div');
          name.className = 'legend-item-name';
          name.style.display = 'table-cell';
          name.style.verticalAlign = 'middle';
          name.innerHTML = res.name;
          li.appendChild(name);
          this.legend.appendChild(li);
        }

        this.legendPanel.appendChild(this.legend);
      }
    }
  }, {
    key: "setYAxisMax",
    value: function setYAxisMax(max) {
      var tickCount;
      var tickUnit;
      this.yAxis.innerHTML = '';
      if (!max) return; // Calc the best tick units

      function closest10Factor(n) {
        var f = 10;

        while (n > f) {
          f *= 10;
        }

        return f;
      }

      var MAX_TICK_COUNT = 5;

      if (max <= MAX_TICK_COUNT) {
        tickUnit = 1;
        tickCount = max;
      } else {
        // Due to the small height of the axis, we can draw a maximum of 5 axis labels
        // Determine the best unit to use for a number of labels from 2 to 5
        max = closest10Factor(max);
        tickCount = MAX_TICK_COUNT;
        tickUnit = Math.round(max / tickCount);
      }

      var totalHeight = this.plotAreaHeight - CHART_TOP_MARGIN;
      this.yRatio = Math.round(totalHeight / max); // Create the Y Axis labels

      for (var iTick = 0, v = 0, h = tickUnit * this.yRatio; iTick <= tickCount; iTick++, v += tickUnit) {
        // <= MAX_TICK_COUNT because first tick is zero
        var label = this.createLabelledTick('' + v, h);
        label.style.top = this.plotAreaHeight - v * this.yRatio - h / 2 - 2 + 'px'; // -2 for the height of the tick border

        label.style.right = '0';
        this.yAxis.appendChild(label);
      }
    }
  }, {
    key: "createLabelledTick",
    value: function createLabelledTick(label, height) {
      var labelDiv = document.createElement('div');
      labelDiv.className = 'y-axis-label';
      labelDiv.style.position = 'absolute';
      labelDiv.style.height = height + 'px';
      labelDiv.style.lineHeight = height + 'px';
      labelDiv.style.textAlign = 'center';
      labelDiv.style.whiteSpace = 'nowrap';
      labelDiv.appendChild(document.createTextNode(label));
      var tick = document.createElement('div');
      tick.style.display = 'inline-block';
      tick.style.position = 'absolute';
      tick.style.top = height / 2 + 'px';
      tick.style.right = '0';
      tick.className = 'y-axis-tick';
      labelDiv.appendChild(tick);
      return labelDiv;
    }
  }, {
    key: "updatePlottingArea",
    value: function updatePlottingArea() {
      // Cannot use native offsetHeight as it is rounding dimensions
      // See warning at https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/offsetHeight
      this.setPlottingAreaHeight($(this.body).outerHeight() - this.timeScaleHeight);
    }
  }, {
    key: "setPlottingAreaHeight",
    value: function setPlottingAreaHeight(h) {
      this.yAxis.style.height = h + 'px';
      this.plotAreaHeight = h;
    }
  }, {
    key: "getScroller",
    value: function getScroller() {
      return this.timeLineScrollerElt;
    } //
    // Tooltips
    //

  }, {
    key: "initTooltips",
    value: function initTooltips() {
      var _this3 = this;

      var isResourceLoadNode = function isResourceLoadNode(elt) {
        return _core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].utils.hasClass(elt, _block__WEBPACK_IMPORTED_MODULE_9__[/* RESOURCE_LOAD_CLASS */ "b"]);
      };

      var getResourceLoadNode = function getResourceLoadNode(elt) {
        for (; elt && elt !== _this3.body; elt = elt.parentNode) {
          if (isResourceLoadNode(elt)) {
            return elt;
          }
        }

        return null;
      };

      var getResource = function getResource(id) {
        return id && _this3.gantt.table.getRow(id);
      };

      var gantt = this.gantt;
      var loadchart = this;
      this.gantt.tooltip.installTooltip({
        // The container that contains elements to display tooltip for.
        container: this.body,
        // The container inside which bounds the tooltip can be displayed
        getTooltipDisplayContainer: function getTooltipDisplayContainer() {
          return gantt.getBody();
        },
        // Returns an element in the node hierarchy for which a tooltip can be displayed
        getTooltipElement: function getTooltipElement(node) {
          return getResourceLoadNode(node);
        },
        getTooltipData: function getTooltipData(node) {
          return {
            resourceName: node.dataset.resName,
            resourceLoad: node.dataset.resLoad,
            resourceMaxLoad: node.dataset.resMaxLoad,
            activityName: node.dataset.actName
          };
        },
        renderTooltip: function renderTooltip(node
        /* The element returned by getTooltipElement */
        , info
        /* data returned by getTooltipData for the specified tooltipElt */
        , tooltipCtnr
        /* The container of the tooltip to fill with info. */
        ) {
          if (info) {
            loadchart.chartRenderer.getTooltip(tooltipCtnr, info);
          }
        }
      });
    }
  }]);

  return LoadResourceChart;
}(_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].components.LoadResourceChart);

_core_core__WEBPACK_IMPORTED_MODULE_8__[/* default */ "a"].components.LoadResourceChart.impl = LoadResourceChart;
/* unused harmony default export */ var _unused_webpack_default_export = (LoadResourceChart);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 84 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(89);

/***/ }),
/* 85 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(138);

/***/ }),
/* 86 */
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(154);

/***/ }),
/* 87 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* WEBPACK VAR INJECTION */(function($) {/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "a", function() { return TreeTableController; });
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(1);
/* harmony import */ var _babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(2);
/* harmony import */ var _treetablecontroller_scss__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(164);
/* harmony import */ var _treetablecontroller_scss__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_treetablecontroller_scss__WEBPACK_IMPORTED_MODULE_2__);



/* eslint-disable */

var DATATABLE_FILTER_INSTALLED = false;
var TREE_NODE_TYPE = 'tree-node';

var TreeTableController =
/*#__PURE__*/
function () {
  function TreeTableController() {
    Object(_babel_runtime_corejs2_helpers_esm_classCallCheck__WEBPACK_IMPORTED_MODULE_0__[/* default */ "a"])(this, TreeTableController);

    this.collapsedNodes = {};
  }

  Object(_babel_runtime_corejs2_helpers_esm_createClass__WEBPACK_IMPORTED_MODULE_1__[/* default */ "a"])(TreeTableController, [{
    key: "getHierarchyColumn",
    value: function getHierarchyColumn(columns) {
      // Safe enough for now to consider the first column is the one controlling the table hierarchy
      return columns && columns.length && columns[0] || null;
    }
  }, {
    key: "customizeOptions",
    value: function customizeOptions(options, hCol, rowRenderer) {
      var _this = this;

      if (hCol || (hCol = this.getHierarchyColumn(options.columns))) {
        // Without this column, not hierarchy can be managed, this tree table controller remains inactive
        if (!hCol.render) {
          hCol.render = {};
        }

        var oldRender = hCol.render.display;
        var oldData = hCol.data;
        var self = this;

        hCol.render.display = function (node, type, full, meta) {
          var content = oldRender && oldRender.call(this, oldData && node[oldData] || node, type, full, meta) || node.name;
          var parent = node.parent;
          var prefix = '';

          while (parent) {
            prefix += '<div class="tree-node-spacing"></div>';
            parent = parent.parent;
          }

          prefix += '<div class="tree-node-handle">' + (node.children && node.children.length ? '<i style="width: 16px;" class="fa fa-caret-right fa-lg collapsed"></i><i style="16px;" class="fa fa-caret-down fa-lg expanded"></i>' : '') + '</div>';

          if (node.color) {
            prefix += '<div class="tree-node-color" style="background-color="' + node.color + '"></div>';
          }

          return prefix + content;
        };

        hCol.render.filter = function (node, type, full, meta) {
          return node ? node.name : '';
        };

        hCol.className = hCol.className && hCol.className + ' hierarchy-control' || 'hierarchy-control';
        hCol.type = TREE_NODE_TYPE;
        var oldCreatedRow = options.createdRow;

        options.createdRow = function (row, node, index) {
          var parentRow = node.children && node.children.length;

          if (rowRenderer) {
            rowRenderer.draw(node, row, node);
          }

          var classname = parentRow ? _this.collapsedNodes[node.id] && 'parent-row collapsed' || 'parent-row' : 'leaf-row';

          if (node.hidden) {
            classname = classname + ' hidden';
          }

          $(row).addClass(classname);

          if (oldCreatedRow) {
            oldCreatedRow.call(_this, row, node, index);
          }
        };
      }
    }
  }, {
    key: "getData",
    value: function getData(id) {
      var row = this.$dataTable.row(id);
      var node;
      return row && (node = row.data()) && node.getData() || null;
    }
  }, {
    key: "reset",
    value: function reset() {
      this.collapsedNodes = {};
    }
  }, {
    key: "getRow",
    value: function getRow(data) {
      if (typeof data === 'string') {
        // object ID
        return this.$dataTable.row('#' + data);
      }

      return data;
    }
  }, {
    key: "isCollapsedNode",
    value: function isCollapsedNode(node) {
      if (typeof node === 'string') {
        return this.collapsedNodes[node];
      }

      var row = this.getRow(node);
      node = row && row.data();
      return node && node.children && this.collapsedNodes[node.id];
    }
  }, {
    key: "collapseNode",
    value: function collapseNode(node, collapse) {
      var row = this.getRow(node);
      node = row && row.data();

      if (node && node.children && node.children.length) {
        var visible = !collapse;

        if (!collapse) {
          delete this.collapsedNodes[node.id];
          $(row.node()).removeClass('collapsed');
        } else {
          this.collapsedNodes[node.id] = true;
          $(row.node()).addClass('collapsed');
        }

        var rowsModified = [];

        for (var i = 0; i < node.children.length; i++) {
          this.setRowVisible(node.children[i], visible, rowsModified);
        }

        this.rowsVisibilityChanged(!collapse, rowsModified, node.id);
      }
    }
  }, {
    key: "rowsVisibilityChanged",
    value: function rowsVisibilityChanged(visible, rows, rowRef) {}
  }, {
    key: "setRowVisible",
    value: function setRowVisible(row, visible, rowsModified) {
      var tr = row.tr || this.$dataTable.row('#' + row.id).node();

      if (tr) {
        $(tr).toggleClass('hidden', !visible);

        if (visible) {
          delete row.hidden;
        } else {
          row.hidden = true;
        }

        if (rowsModified) {
          rowsModified.push(row.id);
        }

        if (row.children && !this.collapsedNodes[row.id]) {
          for (var i = 0, count = row.children.length; i < count; ++i) {
            this.setRowVisible(row.children[i], visible, rowsModified);
          }
        }
      }
    }
  }, {
    key: "expandParents",
    value: function expandParents(row) {
      row = this.getRow(row); // row is Datatable row

      var node = row && row.data(); // node is Gantt row.

      if (node) {
        var parent = node.parent,
            topCollapsed;

        while (parent) {
          if (this.collapsedNodes[parent.id]) {
            // Change the collapse state of all collapsed ancestor except for the top most collapsed ancestor
            // which will be processed with the call to collapseNode().
            if (topCollapsed) {
              delete this.collapsedNodes[topCollapsed.id];
            }

            topCollapsed = parent;
          }

          parent = parent.parent;
        }

        if (topCollapsed) {
          // Expand the top most collapsed ancestor
          this.collapseNode(topCollapsed.id, false);
        }
      }
    }
  }, {
    key: "install",
    value: function install($dataTable, bodyElt) {
      var _this2 = this;

      this.$dataTable = $dataTable;
      $(bodyElt).on('click', 'td.hierarchy-control .tree-node-handle', function (e) {
        var tr = $(e.target).closest('tr');

        if (tr && tr.length) {
          var row = $dataTable.row(tr);

          _this2.collapseNode(row, !_this2.isCollapsedNode(row));
        }
      });

      if (!DATATABLE_FILTER_INSTALLED) {
        DATATABLE_FILTER_INSTALLED = true;
        $.fn.dataTable.ext.search.push(function (settings, aData, dataIndex, node) {
          var dataTable;

          if (dataTable = settings.ganttDataTable) {
            // Be sure this global search applies only to GanttDataTables
            if (!dataTable.filter.isEmpty()) {
              node.__filterMatched = dataTable.filter.accept(node, aData, dataIndex);
            }
          }

          return true;
        });
        $.fn.dataTable.ext.search.push(function (settings, data, dataIndex, node) {
          if (settings.ganttDataTable) {
            // Be sure this global search applies only to GanttDataTables
            if (node.hidden) {
              return false;
            }

            if (!settings.ganttDataTable.filter.isEmpty()) {
              // If a search is in place, a collapsed or not matching node cam be made visible if at least one child matches the search
              var processVisibilityFromChildren = function processVisibilityFromChildren(vNode) {
                if (vNode && vNode.children) {
                  for (var iChild = 0, count = vNode.children.length, child; iChild < count; iChild++) {
                    child = vNode.children[iChild];

                    if (child.__filterMatched || processVisibilityFromChildren(child)) {
                      vNode.__filterMatched = true;
                      return true;
                    }
                  }
                }

                return false;
              };

              return node.__filterMatched || processVisibilityFromChildren(node);
            }

            return true;
          }

          return true;
        });

        var makeComparisonFct = function makeComparisonFct(m) {
          function comp(a, b, comparator) {
            a = a.getSortValue ? a.getSortValue(a) : comparator ? a : a.name;
            b = b.getSortValue ? b.getSortValue(b) : comparator ? b : b.name;
            return comparator ? comparator(a, b) * m : a < b ? -m : a > b ? m : 0;
          }

          return function (a, b) {
            var comparator = a.comparator; // If comparator specified in user config, we are sure it is provided with a or b. But a.parent or b.parent won't have it has they are not constructed from the sort render callback

            if (a.parent === b.parent) {
              return comp(a, b, comparator);
            } // Look for common ancestor


            var aParent = a.parent,
                lastParent = a,
                bParent;

            while (aParent) {
              // Has b aParent has an ancestor?
              bParent = b;

              while (bParent) {
                if (bParent.parent === aParent) {
                  return comp(lastParent, bParent, comparator);
                }

                bParent = bParent.parent;
              }

              lastParent = aParent;
              aParent = aParent.parent;
            } // Compare top ancestor for both nodes


            for (bParent = b; bParent.parent;) {
              bParent = bParent.parent;
            }

            return comp(lastParent, bParent, comparator);
          };
        };

        $.fn.dataTable.ext.type.order[TREE_NODE_TYPE + '-asc'] = makeComparisonFct(1);
        $.fn.dataTable.ext.type.order[TREE_NODE_TYPE + '-desc'] = makeComparisonFct(-1);
      }
    }
  }]);

  return TreeTableController;
}();


/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 88 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var _gantt__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(44);
/* harmony import */ var _jquery_jquery_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(160);
/* harmony import */ var _jquery_utils__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(161);
/* harmony import */ var _jquery_split__WEBPACK_IMPORTED_MODULE_3__ = __webpack_require__(168);
/* harmony import */ var _jquery_timeline__WEBPACK_IMPORTED_MODULE_4__ = __webpack_require__(167);
/* harmony import */ var _jquery_treetable__WEBPACK_IMPORTED_MODULE_5__ = __webpack_require__(166);
/**
 * Copyright IBM Corp. 2019
 *
 * This source code is licensed under the Apache-2.0 license found in the
 * LICENSE file in the root directory of this source tree.
 */

/* import-sort-ignore */
 // jQuery modules





 // TODO should be defined in webpack, but there is a .default issue

if (typeof window !== 'undefined') {
  window.Gantt = _gantt__WEBPACK_IMPORTED_MODULE_0__[/* default */ "a"];
}

_gantt__WEBPACK_IMPORTED_MODULE_0__[/* default */ "a"].version = "0.5.3";

try {
  console.log("[LOADED] ".concat("ibm-gantt-chart", "@").concat("0.5.3", " (jquery@").concat($().jquery, ", datatables.net@").concat($().DataTable.version, ")"));
} catch (error) {// nothig to do
}

/* harmony default export */ __webpack_exports__["default"] = (_gantt__WEBPACK_IMPORTED_MODULE_0__[/* default */ "a"]);
/* WEBPACK VAR INJECTION */}.call(this, __webpack_require__(6)))

/***/ }),
/* 89 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(90);
var $Object = __webpack_require__(8).Object;
module.exports = function defineProperty(it, key, desc) {
  return $Object.defineProperty(it, key, desc);
};


/***/ }),
/* 90 */
/***/ (function(module, exports, __webpack_require__) {

var $export = __webpack_require__(9);
// 19.1.2.4 / 15.2.3.6 Object.defineProperty(O, P, Attributes)
$export($export.S + $export.F * !__webpack_require__(21), 'Object', { defineProperty: __webpack_require__(20).f });


/***/ }),
/* 91 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(66);
__webpack_require__(47);
__webpack_require__(54);
__webpack_require__(101);
__webpack_require__(112);
__webpack_require__(113);
module.exports = __webpack_require__(8).Promise;


/***/ }),
/* 92 */
/***/ (function(module, exports, __webpack_require__) {

var toInteger = __webpack_require__(48);
var defined = __webpack_require__(34);
// true  -> String#at
// false -> String#codePointAt
module.exports = function (TO_STRING) {
  return function (that, pos) {
    var s = String(defined(that));
    var i = toInteger(pos);
    var l = s.length;
    var a, b;
    if (i < 0 || i >= l) return TO_STRING ? '' : undefined;
    a = s.charCodeAt(i);
    return a < 0xd800 || a > 0xdbff || i + 1 === l || (b = s.charCodeAt(i + 1)) < 0xdc00 || b > 0xdfff
      ? TO_STRING ? s.charAt(i) : a
      : TO_STRING ? s.slice(i, i + 2) : (a - 0xd800 << 10) + (b - 0xdc00) + 0x10000;
  };
};


/***/ }),
/* 93 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var create = __webpack_require__(49);
var descriptor = __webpack_require__(33);
var setToStringTag = __webpack_require__(37);
var IteratorPrototype = {};

// 25.1.2.1.1 %IteratorPrototype%[@@iterator]()
__webpack_require__(25)(IteratorPrototype, __webpack_require__(12)('iterator'), function () { return this; });

module.exports = function (Constructor, NAME, next) {
  Constructor.prototype = create(IteratorPrototype, { next: descriptor(1, next) });
  setToStringTag(Constructor, NAME + ' Iterator');
};


/***/ }),
/* 94 */
/***/ (function(module, exports, __webpack_require__) {

var dP = __webpack_require__(20);
var anObject = __webpack_require__(13);
var getKeys = __webpack_require__(35);

module.exports = __webpack_require__(21) ? Object.defineProperties : function defineProperties(O, Properties) {
  anObject(O);
  var keys = getKeys(Properties);
  var length = keys.length;
  var i = 0;
  var P;
  while (length > i) dP.f(O, P = keys[i++], Properties[P]);
  return O;
};


/***/ }),
/* 95 */
/***/ (function(module, exports, __webpack_require__) {

// fallback for non-array-like ES3 and non-enumerable old V8 strings
var cof = __webpack_require__(31);
// eslint-disable-next-line no-prototype-builtins
module.exports = Object('z').propertyIsEnumerable(0) ? Object : function (it) {
  return cof(it) == 'String' ? it.split('') : Object(it);
};


/***/ }),
/* 96 */
/***/ (function(module, exports, __webpack_require__) {

// false -> Array#indexOf
// true  -> Array#includes
var toIObject = __webpack_require__(26);
var toLength = __webpack_require__(70);
var toAbsoluteIndex = __webpack_require__(97);
module.exports = function (IS_INCLUDES) {
  return function ($this, el, fromIndex) {
    var O = toIObject($this);
    var length = toLength(O.length);
    var index = toAbsoluteIndex(fromIndex, length);
    var value;
    // Array#includes uses SameValueZero equality algorithm
    // eslint-disable-next-line no-self-compare
    if (IS_INCLUDES && el != el) while (length > index) {
      value = O[index++];
      // eslint-disable-next-line no-self-compare
      if (value != value) return true;
    // Array#indexOf ignores holes, Array#includes - not
    } else for (;length > index; index++) if (IS_INCLUDES || index in O) {
      if (O[index] === el) return IS_INCLUDES || index || 0;
    } return !IS_INCLUDES && -1;
  };
};


/***/ }),
/* 97 */
/***/ (function(module, exports, __webpack_require__) {

var toInteger = __webpack_require__(48);
var max = Math.max;
var min = Math.min;
module.exports = function (index, length) {
  index = toInteger(index);
  return index < 0 ? max(index + length, 0) : min(index, length);
};


/***/ }),
/* 98 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var addToUnscopables = __webpack_require__(99);
var step = __webpack_require__(100);
var Iterators = __webpack_require__(30);
var toIObject = __webpack_require__(26);

// 22.1.3.4 Array.prototype.entries()
// 22.1.3.13 Array.prototype.keys()
// 22.1.3.29 Array.prototype.values()
// 22.1.3.30 Array.prototype[@@iterator]()
module.exports = __webpack_require__(67)(Array, 'Array', function (iterated, kind) {
  this._t = toIObject(iterated); // target
  this._i = 0;                   // next index
  this._k = kind;                // kind
// 22.1.5.2.1 %ArrayIteratorPrototype%.next()
}, function () {
  var O = this._t;
  var kind = this._k;
  var index = this._i++;
  if (!O || index >= O.length) {
    this._t = undefined;
    return step(1);
  }
  if (kind == 'keys') return step(0, index);
  if (kind == 'values') return step(0, O[index]);
  return step(0, [index, O[index]]);
}, 'values');

// argumentsList[@@iterator] is %ArrayProto_values% (9.4.4.6, 9.4.4.7)
Iterators.Arguments = Iterators.Array;

addToUnscopables('keys');
addToUnscopables('values');
addToUnscopables('entries');


/***/ }),
/* 99 */
/***/ (function(module, exports) {

module.exports = function () { /* empty */ };


/***/ }),
/* 100 */
/***/ (function(module, exports) {

module.exports = function (done, value) {
  return { value: value, done: !!done };
};


/***/ }),
/* 101 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var LIBRARY = __webpack_require__(29);
var global = __webpack_require__(10);
var ctx = __webpack_require__(28);
var classof = __webpack_require__(72);
var $export = __webpack_require__(9);
var isObject = __webpack_require__(15);
var aFunction = __webpack_require__(32);
var anInstance = __webpack_require__(102);
var forOf = __webpack_require__(103);
var speciesConstructor = __webpack_require__(74);
var task = __webpack_require__(75).set;
var microtask = __webpack_require__(107)();
var newPromiseCapabilityModule = __webpack_require__(55);
var perform = __webpack_require__(76);
var userAgent = __webpack_require__(108);
var promiseResolve = __webpack_require__(77);
var PROMISE = 'Promise';
var TypeError = global.TypeError;
var process = global.process;
var versions = process && process.versions;
var v8 = versions && versions.v8 || '';
var $Promise = global[PROMISE];
var isNode = classof(process) == 'process';
var empty = function () { /* empty */ };
var Internal, newGenericPromiseCapability, OwnPromiseCapability, Wrapper;
var newPromiseCapability = newGenericPromiseCapability = newPromiseCapabilityModule.f;

var USE_NATIVE = !!function () {
  try {
    // correct subclassing with @@species support
    var promise = $Promise.resolve(1);
    var FakePromise = (promise.constructor = {})[__webpack_require__(12)('species')] = function (exec) {
      exec(empty, empty);
    };
    // unhandled rejections tracking support, NodeJS Promise without it fails @@species test
    return (isNode || typeof PromiseRejectionEvent == 'function')
      && promise.then(empty) instanceof FakePromise
      // v8 6.6 (Node 10 and Chrome 66) have a bug with resolving custom thenables
      // https://bugs.chromium.org/p/chromium/issues/detail?id=830565
      // we can't detect it synchronously, so just check versions
      && v8.indexOf('6.6') !== 0
      && userAgent.indexOf('Chrome/66') === -1;
  } catch (e) { /* empty */ }
}();

// helpers
var isThenable = function (it) {
  var then;
  return isObject(it) && typeof (then = it.then) == 'function' ? then : false;
};
var notify = function (promise, isReject) {
  if (promise._n) return;
  promise._n = true;
  var chain = promise._c;
  microtask(function () {
    var value = promise._v;
    var ok = promise._s == 1;
    var i = 0;
    var run = function (reaction) {
      var handler = ok ? reaction.ok : reaction.fail;
      var resolve = reaction.resolve;
      var reject = reaction.reject;
      var domain = reaction.domain;
      var result, then, exited;
      try {
        if (handler) {
          if (!ok) {
            if (promise._h == 2) onHandleUnhandled(promise);
            promise._h = 1;
          }
          if (handler === true) result = value;
          else {
            if (domain) domain.enter();
            result = handler(value); // may throw
            if (domain) {
              domain.exit();
              exited = true;
            }
          }
          if (result === reaction.promise) {
            reject(TypeError('Promise-chain cycle'));
          } else if (then = isThenable(result)) {
            then.call(result, resolve, reject);
          } else resolve(result);
        } else reject(value);
      } catch (e) {
        if (domain && !exited) domain.exit();
        reject(e);
      }
    };
    while (chain.length > i) run(chain[i++]); // variable length - can't use forEach
    promise._c = [];
    promise._n = false;
    if (isReject && !promise._h) onUnhandled(promise);
  });
};
var onUnhandled = function (promise) {
  task.call(global, function () {
    var value = promise._v;
    var unhandled = isUnhandled(promise);
    var result, handler, console;
    if (unhandled) {
      result = perform(function () {
        if (isNode) {
          process.emit('unhandledRejection', value, promise);
        } else if (handler = global.onunhandledrejection) {
          handler({ promise: promise, reason: value });
        } else if ((console = global.console) && console.error) {
          console.error('Unhandled promise rejection', value);
        }
      });
      // Browsers should not trigger `rejectionHandled` event if it was handled here, NodeJS - should
      promise._h = isNode || isUnhandled(promise) ? 2 : 1;
    } promise._a = undefined;
    if (unhandled && result.e) throw result.v;
  });
};
var isUnhandled = function (promise) {
  return promise._h !== 1 && (promise._a || promise._c).length === 0;
};
var onHandleUnhandled = function (promise) {
  task.call(global, function () {
    var handler;
    if (isNode) {
      process.emit('rejectionHandled', promise);
    } else if (handler = global.onrejectionhandled) {
      handler({ promise: promise, reason: promise._v });
    }
  });
};
var $reject = function (value) {
  var promise = this;
  if (promise._d) return;
  promise._d = true;
  promise = promise._w || promise; // unwrap
  promise._v = value;
  promise._s = 2;
  if (!promise._a) promise._a = promise._c.slice();
  notify(promise, true);
};
var $resolve = function (value) {
  var promise = this;
  var then;
  if (promise._d) return;
  promise._d = true;
  promise = promise._w || promise; // unwrap
  try {
    if (promise === value) throw TypeError("Promise can't be resolved itself");
    if (then = isThenable(value)) {
      microtask(function () {
        var wrapper = { _w: promise, _d: false }; // wrap
        try {
          then.call(value, ctx($resolve, wrapper, 1), ctx($reject, wrapper, 1));
        } catch (e) {
          $reject.call(wrapper, e);
        }
      });
    } else {
      promise._v = value;
      promise._s = 1;
      notify(promise, false);
    }
  } catch (e) {
    $reject.call({ _w: promise, _d: false }, e); // wrap
  }
};

// constructor polyfill
if (!USE_NATIVE) {
  // 25.4.3.1 Promise(executor)
  $Promise = function Promise(executor) {
    anInstance(this, $Promise, PROMISE, '_h');
    aFunction(executor);
    Internal.call(this);
    try {
      executor(ctx($resolve, this, 1), ctx($reject, this, 1));
    } catch (err) {
      $reject.call(this, err);
    }
  };
  // eslint-disable-next-line no-unused-vars
  Internal = function Promise(executor) {
    this._c = [];             // <- awaiting reactions
    this._a = undefined;      // <- checked in isUnhandled reactions
    this._s = 0;              // <- state
    this._d = false;          // <- done
    this._v = undefined;      // <- value
    this._h = 0;              // <- rejection state, 0 - default, 1 - handled, 2 - unhandled
    this._n = false;          // <- notify
  };
  Internal.prototype = __webpack_require__(109)($Promise.prototype, {
    // 25.4.5.3 Promise.prototype.then(onFulfilled, onRejected)
    then: function then(onFulfilled, onRejected) {
      var reaction = newPromiseCapability(speciesConstructor(this, $Promise));
      reaction.ok = typeof onFulfilled == 'function' ? onFulfilled : true;
      reaction.fail = typeof onRejected == 'function' && onRejected;
      reaction.domain = isNode ? process.domain : undefined;
      this._c.push(reaction);
      if (this._a) this._a.push(reaction);
      if (this._s) notify(this, false);
      return reaction.promise;
    },
    // 25.4.5.1 Promise.prototype.catch(onRejected)
    'catch': function (onRejected) {
      return this.then(undefined, onRejected);
    }
  });
  OwnPromiseCapability = function () {
    var promise = new Internal();
    this.promise = promise;
    this.resolve = ctx($resolve, promise, 1);
    this.reject = ctx($reject, promise, 1);
  };
  newPromiseCapabilityModule.f = newPromiseCapability = function (C) {
    return C === $Promise || C === Wrapper
      ? new OwnPromiseCapability(C)
      : newGenericPromiseCapability(C);
  };
}

$export($export.G + $export.W + $export.F * !USE_NATIVE, { Promise: $Promise });
__webpack_require__(37)($Promise, PROMISE);
__webpack_require__(110)(PROMISE);
Wrapper = __webpack_require__(8)[PROMISE];

// statics
$export($export.S + $export.F * !USE_NATIVE, PROMISE, {
  // 25.4.4.5 Promise.reject(r)
  reject: function reject(r) {
    var capability = newPromiseCapability(this);
    var $$reject = capability.reject;
    $$reject(r);
    return capability.promise;
  }
});
$export($export.S + $export.F * (LIBRARY || !USE_NATIVE), PROMISE, {
  // 25.4.4.6 Promise.resolve(x)
  resolve: function resolve(x) {
    return promiseResolve(LIBRARY && this === Wrapper ? $Promise : this, x);
  }
});
$export($export.S + $export.F * !(USE_NATIVE && __webpack_require__(111)(function (iter) {
  $Promise.all(iter)['catch'](empty);
})), PROMISE, {
  // 25.4.4.1 Promise.all(iterable)
  all: function all(iterable) {
    var C = this;
    var capability = newPromiseCapability(C);
    var resolve = capability.resolve;
    var reject = capability.reject;
    var result = perform(function () {
      var values = [];
      var index = 0;
      var remaining = 1;
      forOf(iterable, false, function (promise) {
        var $index = index++;
        var alreadyCalled = false;
        values.push(undefined);
        remaining++;
        C.resolve(promise).then(function (value) {
          if (alreadyCalled) return;
          alreadyCalled = true;
          values[$index] = value;
          --remaining || resolve(values);
        }, reject);
      });
      --remaining || resolve(values);
    });
    if (result.e) reject(result.v);
    return capability.promise;
  },
  // 25.4.4.4 Promise.race(iterable)
  race: function race(iterable) {
    var C = this;
    var capability = newPromiseCapability(C);
    var reject = capability.reject;
    var result = perform(function () {
      forOf(iterable, false, function (promise) {
        C.resolve(promise).then(capability.resolve, reject);
      });
    });
    if (result.e) reject(result.v);
    return capability.promise;
  }
});


/***/ }),
/* 102 */
/***/ (function(module, exports) {

module.exports = function (it, Constructor, name, forbiddenField) {
  if (!(it instanceof Constructor) || (forbiddenField !== undefined && forbiddenField in it)) {
    throw TypeError(name + ': incorrect invocation!');
  } return it;
};


/***/ }),
/* 103 */
/***/ (function(module, exports, __webpack_require__) {

var ctx = __webpack_require__(28);
var call = __webpack_require__(104);
var isArrayIter = __webpack_require__(105);
var anObject = __webpack_require__(13);
var toLength = __webpack_require__(70);
var getIterFn = __webpack_require__(73);
var BREAK = {};
var RETURN = {};
var exports = module.exports = function (iterable, entries, fn, that, ITERATOR) {
  var iterFn = ITERATOR ? function () { return iterable; } : getIterFn(iterable);
  var f = ctx(fn, that, entries ? 2 : 1);
  var index = 0;
  var length, step, iterator, result;
  if (typeof iterFn != 'function') throw TypeError(iterable + ' is not iterable!');
  // fast case for arrays with default iterator
  if (isArrayIter(iterFn)) for (length = toLength(iterable.length); length > index; index++) {
    result = entries ? f(anObject(step = iterable[index])[0], step[1]) : f(iterable[index]);
    if (result === BREAK || result === RETURN) return result;
  } else for (iterator = iterFn.call(iterable); !(step = iterator.next()).done;) {
    result = call(iterator, f, step.value, entries);
    if (result === BREAK || result === RETURN) return result;
  }
};
exports.BREAK = BREAK;
exports.RETURN = RETURN;


/***/ }),
/* 104 */
/***/ (function(module, exports, __webpack_require__) {

// call something on iterator step with safe closing on error
var anObject = __webpack_require__(13);
module.exports = function (iterator, fn, value, entries) {
  try {
    return entries ? fn(anObject(value)[0], value[1]) : fn(value);
  // 7.4.6 IteratorClose(iterator, completion)
  } catch (e) {
    var ret = iterator['return'];
    if (ret !== undefined) anObject(ret.call(iterator));
    throw e;
  }
};


/***/ }),
/* 105 */
/***/ (function(module, exports, __webpack_require__) {

// check on default Array iterator
var Iterators = __webpack_require__(30);
var ITERATOR = __webpack_require__(12)('iterator');
var ArrayProto = Array.prototype;

module.exports = function (it) {
  return it !== undefined && (Iterators.Array === it || ArrayProto[ITERATOR] === it);
};


/***/ }),
/* 106 */
/***/ (function(module, exports) {

// fast apply, http://jsperf.lnkit.com/fast-apply/5
module.exports = function (fn, args, that) {
  var un = that === undefined;
  switch (args.length) {
    case 0: return un ? fn()
                      : fn.call(that);
    case 1: return un ? fn(args[0])
                      : fn.call(that, args[0]);
    case 2: return un ? fn(args[0], args[1])
                      : fn.call(that, args[0], args[1]);
    case 3: return un ? fn(args[0], args[1], args[2])
                      : fn.call(that, args[0], args[1], args[2]);
    case 4: return un ? fn(args[0], args[1], args[2], args[3])
                      : fn.call(that, args[0], args[1], args[2], args[3]);
  } return fn.apply(that, args);
};


/***/ }),
/* 107 */
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(10);
var macrotask = __webpack_require__(75).set;
var Observer = global.MutationObserver || global.WebKitMutationObserver;
var process = global.process;
var Promise = global.Promise;
var isNode = __webpack_require__(31)(process) == 'process';

module.exports = function () {
  var head, last, notify;

  var flush = function () {
    var parent, fn;
    if (isNode && (parent = process.domain)) parent.exit();
    while (head) {
      fn = head.fn;
      head = head.next;
      try {
        fn();
      } catch (e) {
        if (head) notify();
        else last = undefined;
        throw e;
      }
    } last = undefined;
    if (parent) parent.enter();
  };

  // Node.js
  if (isNode) {
    notify = function () {
      process.nextTick(flush);
    };
  // browsers with MutationObserver, except iOS Safari - https://github.com/zloirock/core-js/issues/339
  } else if (Observer && !(global.navigator && global.navigator.standalone)) {
    var toggle = true;
    var node = document.createTextNode('');
    new Observer(flush).observe(node, { characterData: true }); // eslint-disable-line no-new
    notify = function () {
      node.data = toggle = !toggle;
    };
  // environments with maybe non-completely correct, but existent Promise
  } else if (Promise && Promise.resolve) {
    // Promise.resolve without an argument throws an error in LG WebOS 2
    var promise = Promise.resolve(undefined);
    notify = function () {
      promise.then(flush);
    };
  // for other environments - macrotask based on:
  // - setImmediate
  // - MessageChannel
  // - window.postMessag
  // - onreadystatechange
  // - setTimeout
  } else {
    notify = function () {
      // strange IE + webpack dev server bug - use .call(global)
      macrotask.call(global, flush);
    };
  }

  return function (fn) {
    var task = { fn: fn, next: undefined };
    if (last) last.next = task;
    if (!head) {
      head = task;
      notify();
    } last = task;
  };
};


/***/ }),
/* 108 */
/***/ (function(module, exports, __webpack_require__) {

var global = __webpack_require__(10);
var navigator = global.navigator;

module.exports = navigator && navigator.userAgent || '';


/***/ }),
/* 109 */
/***/ (function(module, exports, __webpack_require__) {

var hide = __webpack_require__(25);
module.exports = function (target, src, safe) {
  for (var key in src) {
    if (safe && target[key]) target[key] = src[key];
    else hide(target, key, src[key]);
  } return target;
};


/***/ }),
/* 110 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

var global = __webpack_require__(10);
var core = __webpack_require__(8);
var dP = __webpack_require__(20);
var DESCRIPTORS = __webpack_require__(21);
var SPECIES = __webpack_require__(12)('species');

module.exports = function (KEY) {
  var C = typeof core[KEY] == 'function' ? core[KEY] : global[KEY];
  if (DESCRIPTORS && C && !C[SPECIES]) dP.f(C, SPECIES, {
    configurable: true,
    get: function () { return this; }
  });
};


/***/ }),
/* 111 */
/***/ (function(module, exports, __webpack_require__) {

var ITERATOR = __webpack_require__(12)('iterator');
var SAFE_CLOSING = false;

try {
  var riter = [7][ITERATOR]();
  riter['return'] = function () { SAFE_CLOSING = true; };
  // eslint-disable-next-line no-throw-literal
  Array.from(riter, function () { throw 2; });
} catch (e) { /* empty */ }

module.exports = function (exec, skipClosing) {
  if (!skipClosing && !SAFE_CLOSING) return false;
  var safe = false;
  try {
    var arr = [7];
    var iter = arr[ITERATOR]();
    iter.next = function () { return { done: safe = true }; };
    arr[ITERATOR] = function () { return iter; };
    exec(arr);
  } catch (e) { /* empty */ }
  return safe;
};


/***/ }),
/* 112 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";
// https://github.com/tc39/proposal-promise-finally

var $export = __webpack_require__(9);
var core = __webpack_require__(8);
var global = __webpack_require__(10);
var speciesConstructor = __webpack_require__(74);
var promiseResolve = __webpack_require__(77);

$export($export.P + $export.R, 'Promise', { 'finally': function (onFinally) {
  var C = speciesConstructor(this, core.Promise || global.Promise);
  var isFunction = typeof onFinally == 'function';
  return this.then(
    isFunction ? function (x) {
      return promiseResolve(C, onFinally()).then(function () { return x; });
    } : onFinally,
    isFunction ? function (e) {
      return promiseResolve(C, onFinally()).then(function () { throw e; });
    } : onFinally
  );
} });


/***/ }),
/* 113 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// https://github.com/tc39/proposal-promise-try
var $export = __webpack_require__(9);
var newPromiseCapability = __webpack_require__(55);
var perform = __webpack_require__(76);

$export($export.S, 'Promise', { 'try': function (callbackfn) {
  var promiseCapability = newPromiseCapability.f(this);
  var result = perform(callbackfn);
  (result.e ? promiseCapability.reject : promiseCapability.resolve)(result.v);
  return promiseCapability.promise;
} });


/***/ }),
/* 114 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(47);
__webpack_require__(54);
module.exports = __webpack_require__(56).f('iterator');


/***/ }),
/* 115 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(116);
__webpack_require__(66);
__webpack_require__(120);
__webpack_require__(121);
module.exports = __webpack_require__(8).Symbol;


/***/ }),
/* 116 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";

// ECMAScript 6 symbols shim
var global = __webpack_require__(10);
var has = __webpack_require__(22);
var DESCRIPTORS = __webpack_require__(21);
var $export = __webpack_require__(9);
var redefine = __webpack_require__(68);
var META = __webpack_require__(117).KEY;
var $fails = __webpack_require__(27);
var shared = __webpack_require__(51);
var setToStringTag = __webpack_require__(37);
var uid = __webpack_require__(36);
var wks = __webpack_require__(12);
var wksExt = __webpack_require__(56);
var wksDefine = __webpack_require__(57);
var enumKeys = __webpack_require__(118);
var isArray = __webpack_require__(79);
var anObject = __webpack_require__(13);
var isObject = __webpack_require__(15);
var toObject = __webpack_require__(38);
var toIObject = __webpack_require__(26);
var toPrimitive = __webpack_require__(46);
var createDesc = __webpack_require__(33);
var _create = __webpack_require__(49);
var gOPNExt = __webpack_require__(119);
var $GOPD = __webpack_require__(39);
var $GOPS = __webpack_require__(78);
var $DP = __webpack_require__(20);
var $keys = __webpack_require__(35);
var gOPD = $GOPD.f;
var dP = $DP.f;
var gOPN = gOPNExt.f;
var $Symbol = global.Symbol;
var $JSON = global.JSON;
var _stringify = $JSON && $JSON.stringify;
var PROTOTYPE = 'prototype';
var HIDDEN = wks('_hidden');
var TO_PRIMITIVE = wks('toPrimitive');
var isEnum = {}.propertyIsEnumerable;
var SymbolRegistry = shared('symbol-registry');
var AllSymbols = shared('symbols');
var OPSymbols = shared('op-symbols');
var ObjectProto = Object[PROTOTYPE];
var USE_NATIVE = typeof $Symbol == 'function' && !!$GOPS.f;
var QObject = global.QObject;
// Don't use setters in Qt Script, https://github.com/zloirock/core-js/issues/173
var setter = !QObject || !QObject[PROTOTYPE] || !QObject[PROTOTYPE].findChild;

// fallback for old Android, https://code.google.com/p/v8/issues/detail?id=687
var setSymbolDesc = DESCRIPTORS && $fails(function () {
  return _create(dP({}, 'a', {
    get: function () { return dP(this, 'a', { value: 7 }).a; }
  })).a != 7;
}) ? function (it, key, D) {
  var protoDesc = gOPD(ObjectProto, key);
  if (protoDesc) delete ObjectProto[key];
  dP(it, key, D);
  if (protoDesc && it !== ObjectProto) dP(ObjectProto, key, protoDesc);
} : dP;

var wrap = function (tag) {
  var sym = AllSymbols[tag] = _create($Symbol[PROTOTYPE]);
  sym._k = tag;
  return sym;
};

var isSymbol = USE_NATIVE && typeof $Symbol.iterator == 'symbol' ? function (it) {
  return typeof it == 'symbol';
} : function (it) {
  return it instanceof $Symbol;
};

var $defineProperty = function defineProperty(it, key, D) {
  if (it === ObjectProto) $defineProperty(OPSymbols, key, D);
  anObject(it);
  key = toPrimitive(key, true);
  anObject(D);
  if (has(AllSymbols, key)) {
    if (!D.enumerable) {
      if (!has(it, HIDDEN)) dP(it, HIDDEN, createDesc(1, {}));
      it[HIDDEN][key] = true;
    } else {
      if (has(it, HIDDEN) && it[HIDDEN][key]) it[HIDDEN][key] = false;
      D = _create(D, { enumerable: createDesc(0, false) });
    } return setSymbolDesc(it, key, D);
  } return dP(it, key, D);
};
var $defineProperties = function defineProperties(it, P) {
  anObject(it);
  var keys = enumKeys(P = toIObject(P));
  var i = 0;
  var l = keys.length;
  var key;
  while (l > i) $defineProperty(it, key = keys[i++], P[key]);
  return it;
};
var $create = function create(it, P) {
  return P === undefined ? _create(it) : $defineProperties(_create(it), P);
};
var $propertyIsEnumerable = function propertyIsEnumerable(key) {
  var E = isEnum.call(this, key = toPrimitive(key, true));
  if (this === ObjectProto && has(AllSymbols, key) && !has(OPSymbols, key)) return false;
  return E || !has(this, key) || !has(AllSymbols, key) || has(this, HIDDEN) && this[HIDDEN][key] ? E : true;
};
var $getOwnPropertyDescriptor = function getOwnPropertyDescriptor(it, key) {
  it = toIObject(it);
  key = toPrimitive(key, true);
  if (it === ObjectProto && has(AllSymbols, key) && !has(OPSymbols, key)) return;
  var D = gOPD(it, key);
  if (D && has(AllSymbols, key) && !(has(it, HIDDEN) && it[HIDDEN][key])) D.enumerable = true;
  return D;
};
var $getOwnPropertyNames = function getOwnPropertyNames(it) {
  var names = gOPN(toIObject(it));
  var result = [];
  var i = 0;
  var key;
  while (names.length > i) {
    if (!has(AllSymbols, key = names[i++]) && key != HIDDEN && key != META) result.push(key);
  } return result;
};
var $getOwnPropertySymbols = function getOwnPropertySymbols(it) {
  var IS_OP = it === ObjectProto;
  var names = gOPN(IS_OP ? OPSymbols : toIObject(it));
  var result = [];
  var i = 0;
  var key;
  while (names.length > i) {
    if (has(AllSymbols, key = names[i++]) && (IS_OP ? has(ObjectProto, key) : true)) result.push(AllSymbols[key]);
  } return result;
};

// 19.4.1.1 Symbol([description])
if (!USE_NATIVE) {
  $Symbol = function Symbol() {
    if (this instanceof $Symbol) throw TypeError('Symbol is not a constructor!');
    var tag = uid(arguments.length > 0 ? arguments[0] : undefined);
    var $set = function (value) {
      if (this === ObjectProto) $set.call(OPSymbols, value);
      if (has(this, HIDDEN) && has(this[HIDDEN], tag)) this[HIDDEN][tag] = false;
      setSymbolDesc(this, tag, createDesc(1, value));
    };
    if (DESCRIPTORS && setter) setSymbolDesc(ObjectProto, tag, { configurable: true, set: $set });
    return wrap(tag);
  };
  redefine($Symbol[PROTOTYPE], 'toString', function toString() {
    return this._k;
  });

  $GOPD.f = $getOwnPropertyDescriptor;
  $DP.f = $defineProperty;
  __webpack_require__(80).f = gOPNExt.f = $getOwnPropertyNames;
  __webpack_require__(58).f = $propertyIsEnumerable;
  $GOPS.f = $getOwnPropertySymbols;

  if (DESCRIPTORS && !__webpack_require__(29)) {
    redefine(ObjectProto, 'propertyIsEnumerable', $propertyIsEnumerable, true);
  }

  wksExt.f = function (name) {
    return wrap(wks(name));
  };
}

$export($export.G + $export.W + $export.F * !USE_NATIVE, { Symbol: $Symbol });

for (var es6Symbols = (
  // 19.4.2.2, 19.4.2.3, 19.4.2.4, 19.4.2.6, 19.4.2.8, 19.4.2.9, 19.4.2.10, 19.4.2.11, 19.4.2.12, 19.4.2.13, 19.4.2.14
  'hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables'
).split(','), j = 0; es6Symbols.length > j;)wks(es6Symbols[j++]);

for (var wellKnownSymbols = $keys(wks.store), k = 0; wellKnownSymbols.length > k;) wksDefine(wellKnownSymbols[k++]);

$export($export.S + $export.F * !USE_NATIVE, 'Symbol', {
  // 19.4.2.1 Symbol.for(key)
  'for': function (key) {
    return has(SymbolRegistry, key += '')
      ? SymbolRegistry[key]
      : SymbolRegistry[key] = $Symbol(key);
  },
  // 19.4.2.5 Symbol.keyFor(sym)
  keyFor: function keyFor(sym) {
    if (!isSymbol(sym)) throw TypeError(sym + ' is not a symbol!');
    for (var key in SymbolRegistry) if (SymbolRegistry[key] === sym) return key;
  },
  useSetter: function () { setter = true; },
  useSimple: function () { setter = false; }
});

$export($export.S + $export.F * !USE_NATIVE, 'Object', {
  // 19.1.2.2 Object.create(O [, Properties])
  create: $create,
  // 19.1.2.4 Object.defineProperty(O, P, Attributes)
  defineProperty: $defineProperty,
  // 19.1.2.3 Object.defineProperties(O, Properties)
  defineProperties: $defineProperties,
  // 19.1.2.6 Object.getOwnPropertyDescriptor(O, P)
  getOwnPropertyDescriptor: $getOwnPropertyDescriptor,
  // 19.1.2.7 Object.getOwnPropertyNames(O)
  getOwnPropertyNames: $getOwnPropertyNames,
  // 19.1.2.8 Object.getOwnPropertySymbols(O)
  getOwnPropertySymbols: $getOwnPropertySymbols
});

// Chrome 38 and 39 `Object.getOwnPropertySymbols` fails on primitives
// https://bugs.chromium.org/p/v8/issues/detail?id=3443
var FAILS_ON_PRIMITIVES = $fails(function () { $GOPS.f(1); });

$export($export.S + $export.F * FAILS_ON_PRIMITIVES, 'Object', {
  getOwnPropertySymbols: function getOwnPropertySymbols(it) {
    return $GOPS.f(toObject(it));
  }
});

// 24.3.2 JSON.stringify(value [, replacer [, space]])
$JSON && $export($export.S + $export.F * (!USE_NATIVE || $fails(function () {
  var S = $Symbol();
  // MS Edge converts symbol values to JSON as {}
  // WebKit converts symbol values to JSON as null
  // V8 throws on boxed symbols
  return _stringify([S]) != '[null]' || _stringify({ a: S }) != '{}' || _stringify(Object(S)) != '{}';
})), 'JSON', {
  stringify: function stringify(it) {
    var args = [it];
    var i = 1;
    var replacer, $replacer;
    while (arguments.length > i) args.push(arguments[i++]);
    $replacer = replacer = args[1];
    if (!isObject(replacer) && it === undefined || isSymbol(it)) return; // IE8 returns string on undefined
    if (!isArray(replacer)) replacer = function (key, value) {
      if (typeof $replacer == 'function') value = $replacer.call(this, key, value);
      if (!isSymbol(value)) return value;
    };
    args[1] = replacer;
    return _stringify.apply($JSON, args);
  }
});

// 19.4.3.4 Symbol.prototype[@@toPrimitive](hint)
$Symbol[PROTOTYPE][TO_PRIMITIVE] || __webpack_require__(25)($Symbol[PROTOTYPE], TO_PRIMITIVE, $Symbol[PROTOTYPE].valueOf);
// 19.4.3.5 Symbol.prototype[@@toStringTag]
setToStringTag($Symbol, 'Symbol');
// 20.2.1.9 Math[@@toStringTag]
setToStringTag(Math, 'Math', true);
// 24.3.3 JSON[@@toStringTag]
setToStringTag(global.JSON, 'JSON', true);


/***/ }),
/* 117 */
/***/ (function(module, exports, __webpack_require__) {

var META = __webpack_require__(36)('meta');
var isObject = __webpack_require__(15);
var has = __webpack_require__(22);
var setDesc = __webpack_require__(20).f;
var id = 0;
var isExtensible = Object.isExtensible || function () {
  return true;
};
var FREEZE = !__webpack_require__(27)(function () {
  return isExtensible(Object.preventExtensions({}));
});
var setMeta = function (it) {
  setDesc(it, META, { value: {
    i: 'O' + ++id, // object ID
    w: {}          // weak collections IDs
  } });
};
var fastKey = function (it, create) {
  // return primitive with prefix
  if (!isObject(it)) return typeof it == 'symbol' ? it : (typeof it == 'string' ? 'S' : 'P') + it;
  if (!has(it, META)) {
    // can't set metadata to uncaught frozen object
    if (!isExtensible(it)) return 'F';
    // not necessary to add metadata
    if (!create) return 'E';
    // add missing metadata
    setMeta(it);
  // return object ID
  } return it[META].i;
};
var getWeak = function (it, create) {
  if (!has(it, META)) {
    // can't set metadata to uncaught frozen object
    if (!isExtensible(it)) return true;
    // not necessary to add metadata
    if (!create) return false;
    // add missing metadata
    setMeta(it);
  // return hash weak collections IDs
  } return it[META].w;
};
// add metadata on freeze-family methods calling
var onFreeze = function (it) {
  if (FREEZE && meta.NEED && isExtensible(it) && !has(it, META)) setMeta(it);
  return it;
};
var meta = module.exports = {
  KEY: META,
  NEED: false,
  fastKey: fastKey,
  getWeak: getWeak,
  onFreeze: onFreeze
};


/***/ }),
/* 118 */
/***/ (function(module, exports, __webpack_require__) {

// all enumerable object keys, includes symbols
var getKeys = __webpack_require__(35);
var gOPS = __webpack_require__(78);
var pIE = __webpack_require__(58);
module.exports = function (it) {
  var result = getKeys(it);
  var getSymbols = gOPS.f;
  if (getSymbols) {
    var symbols = getSymbols(it);
    var isEnum = pIE.f;
    var i = 0;
    var key;
    while (symbols.length > i) if (isEnum.call(it, key = symbols[i++])) result.push(key);
  } return result;
};


/***/ }),
/* 119 */
/***/ (function(module, exports, __webpack_require__) {

// fallback for IE11 buggy Object.getOwnPropertyNames with iframe and window
var toIObject = __webpack_require__(26);
var gOPN = __webpack_require__(80).f;
var toString = {}.toString;

var windowNames = typeof window == 'object' && window && Object.getOwnPropertyNames
  ? Object.getOwnPropertyNames(window) : [];

var getWindowNames = function (it) {
  try {
    return gOPN(it);
  } catch (e) {
    return windowNames.slice();
  }
};

module.exports.f = function getOwnPropertyNames(it) {
  return windowNames && toString.call(it) == '[object Window]' ? getWindowNames(it) : gOPN(toIObject(it));
};


/***/ }),
/* 120 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(57)('asyncIterator');


/***/ }),
/* 121 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(57)('observable');


/***/ }),
/* 122 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(123);
module.exports = __webpack_require__(8).Object.getPrototypeOf;


/***/ }),
/* 123 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.2.9 Object.getPrototypeOf(O)
var toObject = __webpack_require__(38);
var $getPrototypeOf = __webpack_require__(53);

__webpack_require__(59)('getPrototypeOf', function () {
  return function getPrototypeOf(it) {
    return $getPrototypeOf(toObject(it));
  };
});


/***/ }),
/* 124 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(125);
module.exports = __webpack_require__(8).Object.setPrototypeOf;


/***/ }),
/* 125 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.3.19 Object.setPrototypeOf(O, proto)
var $export = __webpack_require__(9);
$export($export.S, 'Object', { setPrototypeOf: __webpack_require__(126).set });


/***/ }),
/* 126 */
/***/ (function(module, exports, __webpack_require__) {

// Works with __proto__ only. Old v8 can't work with null proto objects.
/* eslint-disable no-proto */
var isObject = __webpack_require__(15);
var anObject = __webpack_require__(13);
var check = function (O, proto) {
  anObject(O);
  if (!isObject(proto) && proto !== null) throw TypeError(proto + ": can't set as prototype!");
};
module.exports = {
  set: Object.setPrototypeOf || ('__proto__' in {} ? // eslint-disable-line
    function (test, buggy, set) {
      try {
        set = __webpack_require__(28)(Function.call, __webpack_require__(39).f(Object.prototype, '__proto__').set, 2);
        set(test, []);
        buggy = !(test instanceof Array);
      } catch (e) { buggy = true; }
      return function setPrototypeOf(O, proto) {
        check(O, proto);
        if (buggy) O.__proto__ = proto;
        else set(O, proto);
        return O;
      };
    }({}, false) : undefined),
  check: check
};


/***/ }),
/* 127 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(128);
var $Object = __webpack_require__(8).Object;
module.exports = function create(P, D) {
  return $Object.create(P, D);
};


/***/ }),
/* 128 */
/***/ (function(module, exports, __webpack_require__) {

var $export = __webpack_require__(9);
// 19.1.2.2 / 15.2.3.5 Object.create(O [, Properties])
$export($export.S, 'Object', { create: __webpack_require__(49) });


/***/ }),
/* 129 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 130 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 131 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 132 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(133);
module.exports = __webpack_require__(8).Array.isArray;


/***/ }),
/* 133 */
/***/ (function(module, exports, __webpack_require__) {

// 22.1.2.2 / 15.4.3.2 Array.isArray(arg)
var $export = __webpack_require__(9);

$export($export.S, 'Array', { isArray: __webpack_require__(79) });


/***/ }),
/* 134 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(135);
module.exports = __webpack_require__(8).parseInt;


/***/ }),
/* 135 */
/***/ (function(module, exports, __webpack_require__) {

var $export = __webpack_require__(9);
var $parseInt = __webpack_require__(81);
// 18.2.5 parseInt(string, radix)
$export($export.G + $export.F * (parseInt != $parseInt), { parseInt: $parseInt });


/***/ }),
/* 136 */
/***/ (function(module, exports, __webpack_require__) {

var $export = __webpack_require__(9);
var defined = __webpack_require__(34);
var fails = __webpack_require__(27);
var spaces = __webpack_require__(82);
var space = '[' + spaces + ']';
var non = '\u200b\u0085';
var ltrim = RegExp('^' + space + space + '*');
var rtrim = RegExp(space + space + '*$');

var exporter = function (KEY, exec, ALIAS) {
  var exp = {};
  var FORCE = fails(function () {
    return !!spaces[KEY]() || non[KEY]() != non;
  });
  var fn = exp[KEY] = FORCE ? exec(trim) : spaces[KEY];
  if (ALIAS) exp[ALIAS] = fn;
  $export($export.P + $export.F * FORCE, 'String', exp);
};

// 1 -> String#trimLeft
// 2 -> String#trimRight
// 3 -> String#trim
var trim = exporter.trim = function (string, TYPE) {
  string = String(defined(string));
  if (TYPE & 1) string = string.replace(ltrim, '');
  if (TYPE & 2) string = string.replace(rtrim, '');
  return string;
};

module.exports = exporter;


/***/ }),
/* 137 */
/***/ (function(module, exports, __webpack_require__) {

var core = __webpack_require__(8);
var $JSON = core.JSON || (core.JSON = { stringify: JSON.stringify });
module.exports = function stringify(it) { // eslint-disable-line no-unused-vars
  return $JSON.stringify.apply($JSON, arguments);
};


/***/ }),
/* 138 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(54);
__webpack_require__(47);
module.exports = __webpack_require__(139);


/***/ }),
/* 139 */
/***/ (function(module, exports, __webpack_require__) {

var anObject = __webpack_require__(13);
var get = __webpack_require__(73);
module.exports = __webpack_require__(8).getIterator = function (it) {
  var iterFn = get(it);
  if (typeof iterFn != 'function') throw TypeError(it + ' is not iterable!');
  return anObject(iterFn.call(it));
};


/***/ }),
/* 140 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(141);
module.exports = __webpack_require__(8).Object.keys;


/***/ }),
/* 141 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.2.14 Object.keys(O)
var toObject = __webpack_require__(38);
var $keys = __webpack_require__(35);

__webpack_require__(59)('keys', function () {
  return function keys(it) {
    return $keys(toObject(it));
  };
});


/***/ }),
/* 142 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(143);
module.exports = __webpack_require__(8).Number.parseInt;


/***/ }),
/* 143 */
/***/ (function(module, exports, __webpack_require__) {

var $export = __webpack_require__(9);
var $parseInt = __webpack_require__(81);
// 20.1.2.13 Number.parseInt(string, radix)
$export($export.S + $export.F * (Number.parseInt != $parseInt), 'Number', { parseInt: $parseInt });


/***/ }),
/* 144 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(145);
module.exports = __webpack_require__(8).Number.isNaN;


/***/ }),
/* 145 */
/***/ (function(module, exports, __webpack_require__) {

// 20.1.2.4 Number.isNaN(number)
var $export = __webpack_require__(9);

$export($export.S, 'Number', {
  isNaN: function isNaN(number) {
    // eslint-disable-next-line no-self-compare
    return number != number;
  }
});


/***/ }),
/* 146 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 147 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(148);
module.exports = __webpack_require__(8).Number.isInteger;


/***/ }),
/* 148 */
/***/ (function(module, exports, __webpack_require__) {

// 20.1.2.3 Number.isInteger(number)
var $export = __webpack_require__(9);

$export($export.S, 'Number', { isInteger: __webpack_require__(149) });


/***/ }),
/* 149 */
/***/ (function(module, exports, __webpack_require__) {

// 20.1.2.3 Number.isInteger(number)
var isObject = __webpack_require__(15);
var floor = Math.floor;
module.exports = function isInteger(it) {
  return !isObject(it) && isFinite(it) && floor(it) === it;
};


/***/ }),
/* 150 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 151 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 152 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 153 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 154 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(155);
var $Object = __webpack_require__(8).Object;
module.exports = function getOwnPropertyDescriptor(it, key) {
  return $Object.getOwnPropertyDescriptor(it, key);
};


/***/ }),
/* 155 */
/***/ (function(module, exports, __webpack_require__) {

// 19.1.2.6 Object.getOwnPropertyDescriptor(O, P)
var toIObject = __webpack_require__(26);
var $getOwnPropertyDescriptor = __webpack_require__(39).f;

__webpack_require__(59)('getOwnPropertyDescriptor', function () {
  return function getOwnPropertyDescriptor(it, key) {
    return $getOwnPropertyDescriptor(toIObject(it), key);
  };
});


/***/ }),
/* 156 */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(157);
module.exports = __webpack_require__(8).Reflect.get;


/***/ }),
/* 157 */
/***/ (function(module, exports, __webpack_require__) {

// 26.1.6 Reflect.get(target, propertyKey [, receiver])
var gOPD = __webpack_require__(39);
var getPrototypeOf = __webpack_require__(53);
var has = __webpack_require__(22);
var $export = __webpack_require__(9);
var isObject = __webpack_require__(15);
var anObject = __webpack_require__(13);

function get(target, propertyKey /* , receiver */) {
  var receiver = arguments.length < 3 ? target : arguments[2];
  var desc, proto;
  if (anObject(target) === receiver) return target[propertyKey];
  if (desc = gOPD.f(target, propertyKey)) return has(desc, 'value')
    ? desc.value
    : desc.get !== undefined
      ? desc.get.call(receiver)
      : undefined;
  if (isObject(proto = getPrototypeOf(target))) return get(proto, propertyKey, receiver);
}

$export($export.S, 'Reflect', { get: get });


/***/ }),
/* 158 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 159 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 160 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var _babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(7);
/* harmony import */ var _babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(_babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(6);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_1__);
/* harmony import */ var _core_core__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(0);



var allGantts = [];

var getGantt = function getGantt(node) {
  for (var i = 0, count = allGantts.length; i < count; ++i) {
    if (allGantts[i].node === node) {
      return allGantts[i];
    }
  }

  return null;
};

var removeGantt = function removeGantt(gantt) {
  var index = allGantts.indexOf(gantt);

  if (index > -1) {
    allGantts.splice(index, 1);
  }

  return gantt;
};

_core_core__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"].envReady = function () {
  return new _babel_runtime_corejs2_core_js_promise__WEBPACK_IMPORTED_MODULE_0___default.a(function (resolve, reject) {
    jquery__WEBPACK_IMPORTED_MODULE_1___default()(document).ready(resolve);
  });
};

try {
  jquery__WEBPACK_IMPORTED_MODULE_1___default.a.fn.Gantt = function (options) {
    var gantts = [];
    this.each(function () {
      var _this = this;

      var gantt = getGantt(this);

      if (gantt) {
        if (options) {
          gantt.destroy();
          removeGantt(gantt);
        } else {
          // Use the current gantt associated with this node as no configuration change has been specified.
          return;
        }
      }

      gantt = new _core_core__WEBPACK_IMPORTED_MODULE_2__[/* default */ "a"](this, options);

      gantt.disconnect = function () {
        removeGantt(_this);
      };

      gantts.push(gantt);
    });
    var ganttRef = gantts.length && gantts[0];
    var apiRef = ganttRef && ganttRef.api && ganttRef.api() || {};

    if (gantts.length === 1) {
      this.api = function () {
        return apiRef;
      };
    } else if (gantts.length > 0) {// TODO
    } else {
      this.api = function () {
        return {};
      };
    }

    jquery__WEBPACK_IMPORTED_MODULE_1___default.a.extend(this, apiRef);
    return gantts.length && gantts[0];
  };
} catch (e) {
  console.error(e);
}

/***/ }),
/* 161 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(6);
/* harmony import */ var jquery__WEBPACK_IMPORTED_MODULE_0___default = /*#__PURE__*/__webpack_require__.n(jquery__WEBPACK_IMPORTED_MODULE_0__);
/* harmony import */ var _core_core__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(0);


_core_core__WEBPACK_IMPORTED_MODULE_1__[/* default */ "a"].utils = jquery__WEBPACK_IMPORTED_MODULE_0___default.a.extend({}, _core_core__WEBPACK_IMPORTED_MODULE_1__[/* default */ "a"].utils, {
  closest: function closest(elt, selector) {
    var res = jquery__WEBPACK_IMPORTED_MODULE_0___default()(elt).closest(selector);
    return res && res.length && res[0] || null;
  },
  mergeObjects: function mergeObjects() {
    var args = [];

    for (var i = 0; i < arguments.length; i++) {
      args.push(arguments[i]);
    }

    return jquery__WEBPACK_IMPORTED_MODULE_0___default.a.extend.apply(jquery__WEBPACK_IMPORTED_MODULE_0___default.a, args);
  },
  // Triggers security issues
  // https://github.ibm.com/IBMDecisionOptimization/dd-gantt-component/issues/21
  // html(node, htmlText) {
  //     $(node).html(htmlText);
  // },
  offsetParent: function offsetParent(elt) {
    var $parent = jquery__WEBPACK_IMPORTED_MODULE_0___default()(elt).offsetParent();
    return $parent.length && $parent[0] || null;
  },
  ajax: function ajax(url, params) {
    var $params = {
      url: url || params.url,
      dataType: params && params.dataType || 'json'
    };

    if (params && params.method) {
      $params.method = params.method;
    }

    if (params && params.params) {
      $params.data = params.params;
    }

    if (params && params.customizeRequest) {
      $params.beforeSend = params.customizeRequest;
    }

    var settings = params.settings;

    if (params && params.success) {
      return jquery__WEBPACK_IMPORTED_MODULE_0___default.a.ajax($params).then(function (data, statusText, req) {
        if (params.settings) {
          params.settings.statusText = statusText;
          params.settings.request = req;
        }

        if (params.context) {
          return params.success.call(params.context, data, params.settings);
        }

        return params.success(data, params.settings);
      });
    }

    return jquery__WEBPACK_IMPORTED_MODULE_0___default.a.ajax($params);
  },
  getHeight: function getHeight(elt) {
    return jquery__WEBPACK_IMPORTED_MODULE_0___default()(elt).height();
  }
});

/***/ }),
/* 162 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 163 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 164 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 165 */
/***/ (function(module, exports, __webpack_require__) {

// extracted by mini-css-extract-plugin

/***/ }),
/* 166 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/promise.js
var promise = __webpack_require__(7);
var promise_default = /*#__PURE__*/__webpack_require__.n(promise);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/object/create.js
var create = __webpack_require__(18);
var create_default = /*#__PURE__*/__webpack_require__.n(create);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/classCallCheck.js
var classCallCheck = __webpack_require__(1);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/createClass.js
var createClass = __webpack_require__(2);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/possibleConstructorReturn.js
var possibleConstructorReturn = __webpack_require__(4);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/getPrototypeOf.js
var getPrototypeOf = __webpack_require__(3);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/inherits.js + 1 modules
var inherits = __webpack_require__(5);

// EXTERNAL MODULE: external {"root":"jQuery","commonjs2":"jquery","commonjs":"jquery","amd":"jquery"}
var external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_ = __webpack_require__(6);
var external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default = /*#__PURE__*/__webpack_require__.n(external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_);

// EXTERNAL MODULE: ./src/core/core.js
var core = __webpack_require__(0);

// CONCATENATED MODULE: ./src/jquery/treetable/columnrenderer.js

var ColumnRendererPrototype = {
  createShape: function createShape(activity, parentElt, ctx) {
    return parentElt;
  },
  getText: function getText(row) {
    return row.name;
  },
  drawContent: function drawContent(elt, icon, text, object, ctx) {// Done through the render method

    /* if (icon) {
            const img = document.createElement('img');
            img.className = 'image-content';
            img.src = icon;
            img.alt = '';
            img.style.float = 'left';
            elt.appendChild(img);
        }
         if (text) {
            elt.appendChild(document.createTextNode(text));
        } */
  }
};
/* harmony default export */ var columnrenderer = (ColumnRendererPrototype);
// CONCATENATED MODULE: ./src/jquery/treetable/rowrenderer.js

var RowRendererPrototype = {
  createShape: function createShape(activity, parentElt) {
    return parentElt;
  }
};
/* harmony default export */ var rowrenderer = (RowRendererPrototype);
// EXTERNAL MODULE: ./src/jquery/treetable/treetablecontroller.js
var treetablecontroller = __webpack_require__(87);

// EXTERNAL MODULE: ./src/jquery/treetable/datatables.scss
var datatables = __webpack_require__(165);

// CONCATENATED MODULE: ./src/jquery/treetable/index.js
/* unused harmony export default */













var HIGHLIGHT_CLASS = 'highlight';
var SELECTION_CLASS = 'selected';
var FLAT_CLASS = 'tree-table-flat';
var NUMBER_COLUMN_NAME = 'rowNumbers';
var HIERARCHY_COLUMN_NAME = 'hierarchy';
var TREE_NODE_TYPE = 'tree-node';
var defaultDataTableOptions = {
  /* serverSide: true, */

  /*
     searching: false, */
  bInfo: false,
  paging: false,
  scrollY: '100%',
  scrollX: true,
  rowId: 'id'
};

function getDefaultTableColumns() {
  return [{
    name: NUMBER_COLUMN_NAME,
    data: null,
    title: '',
    render: function render(data, type, full, meta) {
      var color = full.backgroundColor ? " style=\"background-color: ".concat(full.backgroundColor) : '';
      return "<div class=\"row-number\"".concat(color, ">").concat(meta.row + 1, "</div>");
    },

    /* "width": "40px", */
    className: 'row-number-col',
    orderable: false,
    searchable: false
  }, {
    name: HIERARCHY_COLUMN_NAME,
    data: null,
    title: 'Name'
  }];
}

var findColumn = function findColumn(columns, name) {
  for (var iCol = 0, count = columns ? columns.length : 0; iCol < count; iCol++) {
    if (columns[iCol].name === name) {
      return columns[iCol];
    }
  }

  return null;
};

var treetable_GanttDataTable =
/*#__PURE__*/
function (_Gantt$components$Tre) {
  Object(inherits["a" /* default */])(GanttDataTable, _Gantt$components$Tre);

  function GanttDataTable(gantt, node, config) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, GanttDataTable);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(GanttDataTable).call(this, gantt, node, config));
    _this.gantt = gantt;
    var selectionHandler = _this.gantt.selection;
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTION_CLEARED, function () {
      return _this.clearSelection();
    });
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTED, function (e, sels) {
      return _this.selectRows(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ROW_UNSELECTED, function (e, sels) {
      return _this.unselectRows(sels);
    });
    selectionHandler.on(core["a" /* default */].events.ROW_SELECTION_CHANGED, function (e, sels) {
      return _this.rowSelectionChanged(sels);
    });

    _this.setConfiguration(config);

    return _this;
  }

  Object(createClass["a" /* default */])(GanttDataTable, [{
    key: "setConfiguration",
    value: function setConfiguration(config) {
      var _this2 = this;

      this.config = config;

      if (this.$dataTable) {
        this.destroy();
      }

      var defaultConfig = core["a" /* default */].utils.mergeObjects({}, defaultDataTableOptions);
      defaultConfig.columns = getDefaultTableColumns(); // Instead of doing a deep copy of the defaultDataTableOptions

      this.dataTableOptions = core["a" /* default */].utils.mergeObjects(defaultConfig, config && config.dataTables);
      var rowRenderer;

      if (config && config.rows && config.rows.renderer) {
        rowRenderer = new (core["a" /* default */].components.Renderer.impl || core["a" /* default */].components.Renderer)(config.rows.renderer, rowrenderer, this.gantt);
      }

      if (config && config.columns && config.columns.length) {
        var defaultColumns = {};
        this.dataTableOptions.columns = this.dataTableOptions.columns.filter(function (col) {
          // Remove default columns if defined - maybe with a different order - in config.columns
          if (col.name) {
            defaultColumns[col.name] = col;
          }

          return !col.name || !findColumn(config.columns, col.name);
        });

        for (var iCol = 0, configCol, col; iCol < config.columns.length; iCol++) {
          configCol = config.columns[iCol];
          col = this.customizeDataColumn(configCol.name && defaultColumns[configCol.name] || {}, configCol, rowRenderer);

          if (col) {
            this.dataTableOptions.columns.push(col);
          }
        } // if default columns not in the specified config.columns, add them back in the columns unless explicitely removed


        var removedCols = {};
        this.dataTableOptions.columns = this.dataTableOptions.columns.filter(function (col) {
          if (col.remove && col.name) {
            removedCols[col.name] = true;
            return false;
          }

          return true;
        });

        if (!findColumn(this.dataTableOptions.columns, HIERARCHY_COLUMN_NAME) && !removedCols[HIERARCHY_COLUMN_NAME]) {
          this.dataTableOptions.columns.splice(0, 0, findColumn(defaultColumns[HIERARCHY_COLUMN_NAME]));
        }

        if (!findColumn(this.dataTableOptions.columns, NUMBER_COLUMN_NAME) && !removedCols[NUMBER_COLUMN_NAME]) {
          this.dataTableOptions.columns.splice(0, 0, findColumn(defaultColumns[NUMBER_COLUMN_NAME]));
        }
      } else if (rowRenderer) {
        for (var _iCol = 0, _configCol; _iCol < this.dataTableOptions.columns.length; _iCol++) {
          _configCol = this.dataTableOptions.columns[_iCol];
          this.dataTableOptions.columns[_iCol] = this.customizeDataColumn(_configCol, {}, rowRenderer);
        }
      }

      if (config && config.sorting !== undefined && !config.sorting) {
        this.dataTableOptions.columns.bSort = false;
      } else if (!config || !config.initialSorting) {
        this.dataTableOptions.order = [];
      }

      this.controller = new treetablecontroller["a" /* default */]();

      this.controller.rowsVisibilityChanged = function (visible, rows, rowRef) {
        _this2.gantt.startUpdating();

        _this2.triggerEvent(visible ? core["a" /* default */].events.ROWS_ADDED : core["a" /* default */].events.ROWS_REMOVED, rows, rowRef);

        _this2.gantt.updates.rowsChanged(visible ? core["a" /* default */].events.ROWS_ADDED : core["a" /* default */].events.ROWS_REMOVED, rows, rowRef);

        _this2.gantt.stopUpdating();
      };

      this.controller.customizeOptions(this.dataTableOptions, findColumn(this.dataTableOptions.columns, HIERARCHY_COLUMN_NAME), rowRenderer);
      this.dataTableOptions.rowId = 'id';
      var oldInitComplete = this.dataTableOptions.initComplete;

      this.dataTableOptions.initComplete = function (oSettings, json) {
        if (oldInitComplete) {
          oldInitComplete(oSettings, json);
        }
      };

      var oldDrawCallback = this.dataTableOptions.drawCallback;
      this._drawCallbacks = [];

      this.dataTableOptions.drawCallback = function (settings) {
        if (oldDrawCallback) {
          oldDrawCallback.call(_this2, settings);
        }

        for (var i = 0; i < _this2._drawCallbacks.length; i++) {
          _this2._drawCallbacks[i](settings);
        }

        _this2._drawCallbacks = [];
      };

      this.create();
    }
  }, {
    key: "customizeDataColumn",
    value: function customizeDataColumn(col, config, rowRenderer) {
      if (config.name) {
        col.name = config.name;
      }

      if (config.title) {
        col.title = config.title;
      }

      if (config.width) {
        col.width = config.width;
      }

      if (config.visible) {
        col.visible = config.visible;
      }

      if (config.className) {
        col.className = config.className;
      }

      if (config.remove) {
        // Not a dataTables field but pre-processed by this class
        col.remove = config.remove;
      }

      if (config.data || config.text) {
        var c = config.data || config.text;

        if (typeof c === 'function') {
          col.data = c;
        } else if (typeof c === 'string') {
          var getter = core["a" /* default */].utils.propertyEvaluator(c);

          if (getter) {
            col.data = function (object) {
              return getter(object);
            };
          }
        }
      }

      if (config.renderer || config.sortComparator || config.sortValue || config.filterValue || rowRenderer) {
        var colRenderer = config.renderer ? new (core["a" /* default */].components.Renderer.impl || core["a" /* default */].components.Renderer)(config.renderer, columnrenderer, this.gantt) : null;

        if (config.sortValue || config.sortComparator || colRenderer && colRenderer.getText) {
          col.type = TREE_NODE_TYPE;
          var sortValue;

          if (config.sortValue) {
            if (core["a" /* default */].utils.isFunction(config.sortValue)) {
              sortValue = function sortValue(obj) {
                return config.sortValue.call(config, obj);
              };
            } else if (core["a" /* default */].utils.isString(config.sortValue)) {
              sortValue = core["a" /* default */].utils.propertyEvaluator(config.sortValue);
            } else {
              console.warn('sortValue column config should be a function or a string');
            }
          }

          if (!sortValue && !config.sortComparator && colRenderer && colRenderer.getText) {
            sortValue = function sortValue(obj) {
              return colRenderer.getText(obj);
            };
          }

          col.render = {};

          col.render.sort = function (node, type, full) {
            var obj = create_default()(full);

            if (sortValue) {
              obj.getSortValue = sortValue;
            }

            if (config.sortComparator) {
              obj.comparator = function (a, b) {
                return config.sortComparator.call(config, a, b);
              };
            }

            return obj;
          };
        } else {
          col.orderable = false;
        }

        if (config.filterValue) {
          if (!col.render) {
            col.render = {};
          }

          if (core["a" /* default */].utils.isFunction(config.filterValue)) {
            col.render.filter = function (node, type, full) {
              return config.filterValue.call(config, full);
            };
          } else if (core["a" /* default */].utils.isString(config.filterValue)) {
            var filterValue = core["a" /* default */].utils.propertyEvaluator(config.filterValue);

            col.render.filter = function (node, type, full) {
              return filterValue(full);
            };
          } else {
            console.warn('filterValue column config should be a function or a string');
          }
        }

        if (colRenderer) {
          if (!col.render) {
            col.render = {};
          }

          if (colRenderer && colRenderer.getText) {
            // Value used for sorting or filtering if not sort/filter config specified.
            col.render._ = function (node, type, full) {
              return colRenderer.getText(full);
            };
          }

          col.render.display = function (node, type, full, meta) {
            var result = '';
            var icon = colRenderer.getIcon && colRenderer.getIcon(node, meta);

            if (icon) {
              icon = core["a" /* default */].utils.isArray(icon) ? icon : [icon];

              for (var iIcon = 0; iIcon < icon.length; iIcon++) {
                result += "<img src='".concat(icon[iIcon], "' alt='' class='text-icon'>");
              }
            }

            var text = colRenderer.getText && colRenderer.getText(node, meta);

            if (text) {
              result += "<span>".concat(text, "</span>");
            }

            return result;
          };
        } // https://datatables.net/reference/option/columns.createdCell


        var ctx = {};

        if (rowRenderer) {
          if (colRenderer) {
            col.createdCell = function (cell, cellData, rowData) {
              colRenderer.draw(rowData, cell, ctx);
            };
          } else {
            col.createdCell = function (cell, cellData, rowData) {
              rowRenderer.draw(rowData, cell, ctx);
            };
          }
        } else if (colRenderer) {
          col.createdCell = function (cell, cellData, rowData) {
            colRenderer.draw(rowData, cell, ctx);
          };
        }
      }

      if (!col.data) {
        col.data = null;
      }

      return col;
    }
  }, {
    key: "setRowFilter",
    value: function setRowFilter(filter) {
      this.filter = filter;
    }
  }, {
    key: "create",
    value: function create() {}
  }, {
    key: "setRows",
    value: function setRows(rows) {
      var _this3 = this;

      this.rows = rows;

      if (this.tableElt) {
        this.destroy();
      }

      this.tableElt = document.createElement('table');
      this.tableElt.className = core["a" /* default */].components.TreeTable.defaultClass;
      this.tableElt.cellSpacing = 0; // this.tableElt.style.width = '100%';

      var thead = document.createElement('thead');
      var tr = document.createElement('tr'); // Scan columns definitions

      var columns = this.dataTableOptions.columns;

      for (var i = 0, th; i < columns.length; i++) {
        th = document.createElement('th');
        th.innerHTML = columns[i].title && core["a" /* default */].utils.getString(columns[i].title) || columns[i].data || "Col".concat(i + 1);
        tr.appendChild(th);
      }

      thead.appendChild(tr);
      this.tableElt.appendChild(thead);
      this.node.appendChild(this.tableElt);
      var initResolver;
      var initPms = new promise_default.a(function (resolver, reject) {
        initResolver = resolver;
      });
      var $tableElt = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.tableElt);
      this.tableBody = null;

      if (this.headerHeight > 0) {
        this.headerHeight = -this.headerHeight;
      }

      this.$dataTable = $tableElt.on('init.dt', function () {
        _this3.tableInitialized();

        if (_this3.headerHeight < 0) {
          _this3.setHeaderHeight(-_this3.headerHeight);
        }

        _this3.triggerEvent(core["a" /* default */].events.TABLE_INIT);

        initResolver(rows);
        _this3.dataTableOptions.data = null;
      }).DataTable(core["a" /* default */].utils.mergeObjects({}, this.dataTableOptions, {
        data: rows
      })); // https://datatables.net/examples/api/counter_columns.html

      var hasNumberColumn = findColumn(this.dataTableOptions.columns, NUMBER_COLUMN_NAME);
      this.$dataTable.on('order.dt search.dt', function (e) {
        if (hasNumberColumn) {
          _this3.$dataTable.column("".concat(NUMBER_COLUMN_NAME, ":name"), {
            search: 'applied',
            order: 'applied'
          }).nodes().each(function (cell, i) {
            cell.innerHTML = i + 1;
          });
        }
      }).draw('full-hold');
      var allSettings = this.$dataTable.settings();

      for (var _i = 0; _i < allSettings.length; _i++) {
        // Retrieve the GanttDataTable from the global search function
        allSettings[_i].ganttDataTable = this;
      }

      var body = this.getScrollableBody(this.tableElt);
      this.controller.install(this.$dataTable, body);
      /* Impossilbe to use the code below as an alternative of re-creating the table for each setRows
              The code below does not set ids to tr rows and the workaround for doing that is too costly.
              this.$dataTable.rows.add(rows).draw();
              * */

      /*  Manage selection  */

      external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(body).on('click', 'tr', function (e) {
        var tr = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(e.target).closest('tr');

        var row = tr && tr.length && _this3.getRow(tr[0]);

        if (row) {
          _this3.gantt.highlightRow(row, true, true);

          _this3.gantt.selection.processClick(e, row);
        }
      });
      external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(body).on('mouseenter', 'tr', function (e) {
        var tr = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(e.target).closest('tr');

        var row = tr && tr.length && _this3.getRow(tr[0]);

        if (row) {
          _this3.gantt.highlightRow(row, true, true);
        }
      });
      external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(body).on('mouseleave', 'tr', function (e) {
        var tr = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(e.target).closest('tr');

        var row = tr && tr.length && _this3.getRow(tr[0]);

        _this3.gantt.highlightRow(null, true, true);
      });
      return initPms;
    }
  }, {
    key: "tableInitialized",
    value: function tableInitialized() {
      external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.node).toggleClass(FLAT_CLASS, this.gantt.isFlat());
      this.$scrollableBody = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.node).find('div.dataTables_scrollBody');
      this.scrollableBody = this.$scrollableBody[0];
      this.tableBody = this.$scrollableBody.find('TBODY')[0];
      this.scrollableBody.overflowX = 'scroll';
      this.scrollableBody.overflowY = 'hidden';
      this.scrollableBody.style.position = 'absolute';
      this.scrollableBody.style.right = 0;
      this.scrollableBody.style.left = 0;
      this.scrollableBody.style.bottom = 0;
      this.scrollableBody.style.width = null;
      this.scrollableBody.style.height = null;
      var $scrollableHead = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.node).find('div.dataTables_scrollHead THEAD');
      this.tableHeader = $scrollableHead[0];
      var table = this;
      $scrollableHead.find('th').click(function () {
        if (core["a" /* default */].utils.hasClass(this, 'sorting') || core["a" /* default */].utils.hasClass(this, 'sorting_asc') || core["a" /* default */].utils.hasClass(this, 'sorting_desc')) {
          table.gantt.startUpdating();
          table.gantt.updates.rowsChanged(core["a" /* default */].events.ROWS_SORTED);
          table.gantt.updates.tableScrollYChanged(); // When sorting, datatable automatically restore scrolly position to 0

          table.triggerEvent(core["a" /* default */].events.ROWS_SORTED);
          table.gantt.stopUpdating();
        }
      });
    }
  }, {
    key: "onDraw",
    value: function onDraw(fct) {
      this._drawCallbacks.push(fct);
    }
  }, {
    key: "createUpdates",
    value: function createUpdates(parent) {
      var _this4 = this;

      var updates = new (core["a" /* default */].components.GanttUpdates.impl || core["a" /* default */].components.GanttUpdates)(parent, {
        doApplyUpdates: function doApplyUpdates() {
          if (updates.isReload()) {
            _this4.$dataTable.draw();
          } else if (updates.containsRowChanges) {
            _this4.$dataTable.draw('full-hold');
          }
        }
      });
      return updates;
    }
  }, {
    key: "getScrollableBody",
    value: function getScrollableBody() {
      return this.getTableBody();
    }
  }, {
    key: "setHeaderHeight",
    value: function setHeaderHeight(height) {
      if (this.tableHeader) {
        this.headerHeight = height;
        var scrollHeadHeight;

        if (!height) {
          scrollHeadHeight = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.tableHeader).height();
        } else {
          scrollHeadHeight = height;
          var tds = core["a" /* default */].utils.getChild(this.tableHeader, 'TR').childNodes;

          for (var i = 0, count = tds.length; i < count; ++i) {
            external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(tds.item(i)).css({
              height: "".concat(height, "px")
            });
          }

          this.tableHeader.parentNode.height = "".concat(height, "px");
        } // Horrible hack to Datatable issue for fitting its parent div
        // https://datatables.net/forums/discussion/12187/datatable-fixed-height


        this.scrollableBody.style.top = "".concat(scrollHeadHeight, "px");
        var panelHeight = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.node).height();
        this.$scrollableBody.height(panelHeight - scrollHeadHeight); // this.getScrollableBody().style.top = scrollHeadHeight + 'px';
      } // Table not initialized yet
      else {
          // Store it for when the table is initialized
          this.headerHeight = -height;
        }
    }
  }, {
    key: "getScrollableTable",
    value: function getScrollableTable() {
      return this.scrollableBody;
    }
  }, {
    key: "getTableBody",
    value: function getTableBody() {
      return this.tableBody;
    }
  }, {
    key: "getHeight",
    value: function getHeight() {
      return this.tableBody ? this.tableBody.offsetHeight : 0;
    }
  }, {
    key: "getRowCount",
    value: function getRowCount() {
      return this.$dataTable.data().length;
    }
  }, {
    key: "createRowResult",
    value: function createRowResult(tr, index) {
      var id = tr.id;
      var node = (id || id === 0) && this.rows && this.rows.byIds[id] || null;

      if (node) {
        node.tr = tr;

        if (index !== undefined) {
          node.index = index;
        }
      }

      return node;
    }
  }, {
    key: "getRow",
    value: function getRow(param) {
      var id;
      var row;

      if (param && param.isGanttRow) {
        row = param;
        id = param.id;
      } else if (typeof param === 'string' || param && param.id) {
        id = param.id || param;
        row = this.rows && this.rows.byIds && id && this.rows.byIds[id];
      } else if (core["a" /* default */].utils.isInteger(param)) {
        row = this.rows && this.rows[param];
        id = row && row.id;
      }

      if (row && !row.tr && id) {
        row.tr = param.nodeType ? param : document.getElementById(id);
      }

      return row;
    }
  }, {
    key: "getRows",
    value: function getRows(selector) {
      var _this5 = this;

      if (!selector) {
        // Return all rows
        return this.rows;
      }

      if (core["a" /* default */].utils.isArray(selector)) {
        return selector.map(function (row) {
          return _this5.getRow(row);
        });
      }

      return this.getRow(selector);
    }
  }, {
    key: "getVisibleRows",
    value: function getVisibleRows() {
      var trs = this.$dataTable.$('tr', {
        filter: 'applied'
      });
      var count = trs.length;
      var result = new Array(count);

      for (var i = 0, row; i < count; ++i) {
        row = trs[i];
        row = row.length ? row[0] : row;
        row = this.rows && this.rows.byIds[row.id];
        result[i] = row;
      }

      return result;
    }
  }, {
    key: "getRowAt",
    value: function getRowAt(y, startingRow) {
      // TODO code below seems to be quicker but does not work as is as getBoundingClientRect().top does not
      // return the coordinate relative to the direct parent

      /* var rowHeight = this.getRowHeight();
           var rowNum = y / rowHeight;
           var row = this.getRowAtIndex(Math.floor(y / rowHeight));
            if (!row && !(row = this.nextRow(null))) {
           return null;
           }
           var rect = row.tr.getBoundingClientRect();
           if (y >= rect.top) {
           while (y >= rect.bottom) {
           row = this.nextRow(row);
           if (!row) {
           return null;
           }
           rect = row.tr.getBoundingClientRect()
           }
           }
           else {
           while (y < rect.top) {
           row = this.prevRow(row);
           if (!row) {
           return null;
           }
           rect = row.tr.getBoundingClientRect();
           }
           }
           return row; */
      // Alternative slower option, only using element.offsetHeight
      var tr;
      var index;

      if (startingRow && startingRow.getData() && (tr = startingRow.tr)) {
        index = startingRow.index;
        var top = this.getRowTop(startingRow);

        if (top <= y) {
          y -= top;

          while (tr && y > tr.offsetHeight) {
            y -= tr.offsetHeight;
            tr = tr.nextSibling;
            index++;
          }
        } else {
          do {
            tr = tr.previousSibling;
            --index;
          } while (tr && y < (top -= tr.offsetHeight));
        }

        if (tr && startingRow.tr === tr) {
          return startingRow;
        }
      } else {
        index = 0;
        var row = this.nextRow(null);
        tr = row && row.tr;

        while (tr && y >= tr.offsetHeight) {
          y -= tr.offsetHeight;
          tr = tr.nextSibling;
          ++index;
        }
      }

      return tr && this.createRowResult(tr, index);
    } // noinspection JSUnusedGlobalSymbols

  }, {
    key: "getRowAtIndex",
    value: function getRowAtIndex(index) {
      var body = this.getTableBody();

      if (body) {
        var tr = core["a" /* default */].utils.getChild(body, 'TR');
        var origIndex = index;

        while (index-- && tr) {
          tr = tr.nextSibling;
        }

        return tr && this.createRowResult(tr, origIndex) || null;
      }

      return null;
    }
  }, {
    key: "getRowTop",
    value: function getRowTop(row) {
      return (row.tr || (row.tr = document.getElementById(row.id))) && row.tr.offsetTop - this.getTableBody().offsetTop || 0;
    }
  }, {
    key: "nextRow",
    value: function nextRow(row) {
      if (!row) {
        var tr = this.getTableBody() && this.getTableBody().firstChild;
        return tr && this.createRowResult(tr, 0) || null;
      }

      var nextTr = row.tr.nextSibling;
      return nextTr && this.createRowResult(nextTr, row.index + 1) || null;
    } // noinspection JSUnusedGlobalSymbols

  }, {
    key: "prevRow",
    value: function prevRow(row) {
      if (!row) {
        var tr = this.getTableBody() && this.getTableBody().lastChild;
        return tr && this.createRowResult(tr, this.getTableBody().childElementCount) || null;
      }

      var prevTr = row.tr.previousSibling;
      return prevTr && this.createRowResult(prevTr, row.index - 1) || null;
    }
  }, {
    key: "setRowHeight",
    value: function setRowHeight(row, height) {
      if (!row.defaultHeight) {
        row.defaultHeight = row.tr.offsetHeight;
      }

      if (height !== row.defaultHeight) {
        external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(row.tr).css({
          height: "".concat(height, "px")
        }).addClass('variable-row-height');
      } else {
        external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(row.tr).css({
          height: 'inherit'
        });
      }
    }
  }, {
    key: "getRowHeight",
    value: function getRowHeight(row, height) {
      // return $(row.tr).offsetHeight;
      if (!row.tr) row.tr = document.getElementById(row.id);
      var r = row.tr.getBoundingClientRect();
      return r.height; // return row.tr.getBoundingClientRect().height;
      // return $(row.tr || (row.tr = document.getElementById(row.id))).height();
    }
  }, {
    key: "deleteDrawCache",
    value: function deleteDrawCache() {
      if (this.rows) {
        for (var i = 0, count = this.rows.length; i < count; ++i) {
          delete this.rows[i].activityRow;
        }
      }

      this.$dataTable.$('tr.variable-row-height').css({
        height: 'inherit'
      }).removeClass('variable-row-height');
    }
  }, {
    key: "expandParents",
    value: function expandParents(row) {
      row = this.getRow(row);

      if (row) {
        this.controller.expandParents("".concat(row.id)); // In case row.id is a num
      }
    }
  }, {
    key: "getFirstVisibleRow",
    value: function getFirstVisibleRow() {
      var yTop = this.getScrollableTable().scrollTop;
      return this.getRowAt(yTop);
    }
  }, {
    key: "isRowVisible",
    value: function isRowVisible(param) {
      var row = this.getRow(param);

      if (this.isRowFiltered(row)) {
        return false;
      }

      var parent = row.parent;

      while (parent) {
        if (this.controller.isCollapsedNode(parent.id)) {
          return false;
        }

        parent = parent.parent;
      }

      return true;
    }
  }, {
    key: "toggleCollapseRow",
    value: function toggleCollapseRow(param, collapse) {
      var row = this.getRow(param);

      if (!row || this.isRowFiltered(row)) {
        return false;
      }

      if (collapse === undefined) {
        collapse = !this.controller.isCollapsedNode(row.id);
      }

      this.controller.collapseNode(row.id, collapse);
    }
  }, {
    key: "highlightRow",
    value: function highlightRow(row, highlight, deselectAll) {
      var utils = core["a" /* default */].utils;

      if (deselectAll) {
        var result = this.getTableBody().querySelectorAll("tr.".concat(HIGHLIGHT_CLASS));

        for (var i = 0; i < result.length; i++) {
          utils.removeClass(result[i], HIGHLIGHT_CLASS);
        }
      }

      if (row && row.tr) {
        utils.toggleClass(row.tr, HIGHLIGHT_CLASS, highlight === undefined || highlight);
      } else if (row) {
        external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.getTableBody()).find("#".concat(row.id || row)).toggleClass(HIGHLIGHT_CLASS, highlight === undefined || highlight);
      }
    }
  }, {
    key: "draw",
    value: function draw(forceTableReload) {
      if (forceTableReload) {
        this.$dataTable.draw();
      } else {
        this.$dataTable.draw('full-hold');
      }
    }
  }, {
    key: "drawRows",
    value: function drawRows(rows) {
      var _this6 = this;

      // this.$dataTable.rows(rows.map(row => row.tr)).invalidate().draw();
      rows.forEach(function (element) {
        var data = _this6.$dataTable.row(element.tr).data();

        element.tr.style.backgroundColor = data.backgroundColor || '';
      }); // this.$dataTable.row(0).invalidate().draw();
      // this.$dataTable.rows(rows.map(row => row.tr)).invalidate('dom').draw();
    }
  }, {
    key: "onResize",
    value: function onResize() {
      if (this.$dataTable) this.$dataTable.draw('full-hold');
    }
  }, {
    key: "filterChanged",
    value: function filterChanged() {
      if (this.$dataTable) this.$dataTable.draw('full-hold');
    }
  }, {
    key: "isRowFiltered",
    value: function isRowFiltered(row) {
      return row.__filterMatched !== undefined && !row.__filterMatched;
    }
  }, {
    key: "setRowColor",
    value: function setRowColor(row, color) {}
  }, {
    key: "destroy",
    value: function destroy() {
      if (this.$dataTable) {
        this.$dataTable.destroy(); // https://datatables.net/reference/api/destroy()

        if (this.tableElt.parentNode === this.node) {
          this.node.removeChild(this.tableElt);
        }

        this.$dataTable = null;
        this.tableElt = null;
        this.tableBody = null;
        this.$scrollableBody = null;
        this.tableHeader = null;
      }
    }
    /*  Selection methods  */

  }, {
    key: "clearSelection",
    value: function clearSelection() {
      if (this.$dataTable) {
        this.$dataTable.$("tr.".concat(SELECTION_CLASS)).removeClass(SELECTION_CLASS);
      }
    }
  }, {
    key: "selectRows",
    value: function selectRows(rows) {
      for (var i = 0, tr; i < rows.length; i++) {
        tr = rows[i].tr || this.getRow(rows[i]).tr;

        if (tr) {
          core["a" /* default */].utils.addClass(tr, SELECTION_CLASS);
          /* const tds = tr.querySelectorAll('td');
                   for (let i = 0; i < tds.length; i++) {
                   Gantt.utils.addClass(tds[i], SELECTION_CLASS);
                   } */
        }
      }
    }
  }, {
    key: "unselectRows",
    value: function unselectRows(rows) {
      for (var i = 0, tr; i < rows.length; i++) {
        tr = rows[i].tr || this.getRow(rows[i]).tr;

        if (tr) {
          core["a" /* default */].utils.removeClass(tr, SELECTION_CLASS);
        }
      }
    }
  }, {
    key: "rowSelectionChanged",
    value: function rowSelectionChanged() {
      if (this.$dataTable) {
        this.$dataTable.draw('full-hold');
      }
    }
  }]);

  return GanttDataTable;
}(core["a" /* default */].components.TreeTable);


core["a" /* default */].components.TreeTable.defaultClass = 'gantt-tree-table display nowrap';
core["a" /* default */].components.TreeTable.impl = treetable_GanttDataTable;

/***/ }),
/* 167 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/promise.js
var promise = __webpack_require__(7);
var promise_default = /*#__PURE__*/__webpack_require__.n(promise);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/classCallCheck.js
var classCallCheck = __webpack_require__(1);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/createClass.js
var createClass = __webpack_require__(2);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/possibleConstructorReturn.js
var possibleConstructorReturn = __webpack_require__(4);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/getPrototypeOf.js
var getPrototypeOf = __webpack_require__(3);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/inherits.js + 1 modules
var inherits = __webpack_require__(5);

// EXTERNAL MODULE: external {"root":"jQuery","commonjs2":"jquery","commonjs":"jquery","amd":"jquery"}
var external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_ = __webpack_require__(6);
var external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default = /*#__PURE__*/__webpack_require__.n(external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_);

// EXTERNAL MODULE: external {"root":"vis","commonjs2":"vis","commonjs":"vis","amd":"vis"}
var external_root_vis_commonjs2_vis_commonjs_vis_amd_vis_ = __webpack_require__(43);
var external_root_vis_commonjs2_vis_commonjs_vis_amd_vis_default = /*#__PURE__*/__webpack_require__.n(external_root_vis_commonjs2_vis_commonjs_vis_amd_vis_);

// EXTERNAL MODULE: ./src/core/core.js
var core = __webpack_require__(0);

// EXTERNAL MODULE: ./src/jquery/timeline/timeline.scss
var timeline = __webpack_require__(163);

// CONCATENATED MODULE: ./src/jquery/timeline/timeline.js










var defaultConfig = {
  scrollableHorizonFactor: 3,
  margin: 20
};

var timeline_TimeLine =
/*#__PURE__*/
function (_Gantt$components$Tim) {
  Object(inherits["a" /* default */])(TimeLine, _Gantt$components$Tim);

  function TimeLine(gantt, elt, config) {
    var _this;

    Object(classCallCheck["a" /* default */])(this, TimeLine);

    _this = Object(possibleConstructorReturn["a" /* default */])(this, Object(getPrototypeOf["a" /* default */])(TimeLine).call(this, gantt, elt, core["a" /* default */].utils.mergeObjects({}, defaultConfig, config)));

    _this.create();

    return _this;
  }

  Object(createClass["a" /* default */])(TimeLine, [{
    key: "create",
    value: function create() {
      this.scrollableHorizonFactor = Math.max(this.config && this.config.scrollableHorizonFactor || 3, 1);
      this.items = [];
      this.itemsByIds = {};
      this._init = false;
    }
  }, {
    key: "setTimeWindow",
    value: function setTimeWindow(start, end) {
      var _this2 = this;

      if (this.timeLineElt) {
        this.node.removeChild(this.timeLineElt);
      }

      this.timeLineElt = document.createElement('div');
      this.timeLineElt.style.width = "".concat(this.node.offsetWidth * this.scrollableHorizonFactor, "px");
      this.timeLineElt.style.height = '100%';
      var data = [];
      var span = end - start;
      this.scrollableHorizon = {
        start: Math.round(start - (this.scrollableHorizonFactor - 1) / 2 * span),
        end: Math.round(end + (this.scrollableHorizonFactor - 1) / 2 * span)
      };

      try {
        // See https://github.com/almende/vis/issues/24 for time zone hack
        this.visTimeline = new external_root_vis_commonjs2_vis_commonjs_vis_amd_vis_default.a.Timeline(this.timeLineElt, data, {
          // 'millisecond', 'second', 'minute', 'hour', 'weekday', 'day', 'month', 'year'
          orientation: {
            axis: 'top',
            item: 'top'
          },
          height: '100%',
          start: this.scrollableHorizon.start,
          end: this.scrollableHorizon.end
        });
      } catch (e) {
        console.error(e);
        throw e;
      }

      this.horizon = {
        start: start,
        end: end
      };
      this.node.appendChild(this.timeLineElt);
      this.zoomFactor = 1;
      var initPromise = new promise_default.a(function (resolve, reject) {
        _this2.initResolve = resolve;
      });
      this.visTimeline.on('rangechanged', function () {
        _this2.updateRatio();
      });
      this._init = false;

      var fireReady = function fireReady() {
        _this2._init = true;

        var window = _this2.visTimeline.getWindow();

        window.startMillis = window.start.getTime();
        window.endMillis = window.end.getTime();

        _this2.updateRatio();

        var wnd = {
          start: start,
          end: end
        };

        _this2.initResolve(wnd);

        _this2.visTimeline.off('changed', fireReady);

        _this2.triggerEvent(core["a" /* default */].events.TIME_LINE_INIT, wnd);
      };

      this.visTimeline.on('changed', fireReady);
      this.visTimeline.on('rangechange', function () {
        _this2.updateRatio();

        _this2.triggerEvent(core["a" /* default */].events.TIME_LINE_RANGE_CHANGE);
      });
      this.visTimeline.on('rangechanged', function () {
        _this2.updateRatio();

        _this2.triggerEvent(core["a" /* default */].events.TIME_LINE_RANGE_CHANGED);
      });
      this.visTimeline.on('pan', function () {
        _this2.triggerEvent(core["a" /* default */].events.TIME_LINE_PAN_MOVE);
      });
      this.visTimeline.on('panend', function () {
        _this2.triggerEvent(core["a" /* default */].events.TIME_LINE_PAN_MOVED);
      });
      return initPromise;
    }
  }, {
    key: "getWidth",
    value: function getWidth() {
      return this.timeLineElt.offsetWidth;
    }
  }, {
    key: "getHorizon",
    value: function getHorizon() {
      return this.horizon;
    }
  }, {
    key: "getScrollableHorizon",
    value: function getScrollableHorizon() {
      return this.scrollableHorizon;
    }
  }, {
    key: "updateRatio",
    value: function updateRatio() {
      this.window = this.visTimeline.getWindow();
      this.window.startMillis = this.window.start.getTime();
      this.window.endMillis = this.window.end.getTime();
      this.scrollableHorizon.start = this.window.startMillis;
      this.scrollableHorizon.end = this.window.endMillis;
      this.ratio = this.getWidth() / (this.window.endMillis - this.window.startMillis);
    }
  }, {
    key: "getXFromMillis",
    value: function getXFromMillis(time) {
      return Math.round((time - this.scrollableHorizon.start) * this.ratio); // return (time - this.window.startMillis) * this.ratio;
    }
  }, {
    key: "getX",
    value: function getX(time) {
      return Math.round((time - this.scrollableHorizon.start) * this.ratio);
    }
  }, {
    key: "getTimeAt",
    value: function getTimeAt(x) {
      return this.scrollableHorizon.start + Math.round(x / this.getWidth() * (this.scrollableHorizon.end - this.scrollableHorizon.start));
    }
  }, {
    key: "getTimeAxisHeight",
    value: function getTimeAxisHeight(defaultValue) {
      var visTimeAxis = this.timeLineElt && this.timeLineElt.getElementsByClassName('vis-panel vis-top'); // Cannot use native offsetHeight as it is rounding dimensions
      // See warning at https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/offsetHeight

      return visTimeAxis && visTimeAxis.length && external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(visTimeAxis[0]).outerHeight() || defaultValue;
    }
  }, {
    key: "getTimeWindow",
    value: function getTimeWindow() {
      return this.visTimeline && this.visTimeline.getWindow();
    }
  }, {
    key: "draw",
    value: function draw() {}
  }, {
    key: "onResize",
    value: function onResize() {
      if (this._init) {
        this.updateRatio();
      }
    }
  }, {
    key: "validateZoomFactor",
    value: function validateZoomFactor(zoomFactor) {
      if (this.zoomFactor + zoomFactor < 1) {
        return 0;
      }

      return zoomFactor;
    }
  }, {
    key: "zoom",
    value: function zoom(zoomFactor, xCenter) {
      this.zoomFactor += zoomFactor;
      var w = this.getWidth() + zoomFactor * this.getWidth();
      this.timeLineElt.style.width = "".concat(w, "px");
      this.updateRatio();
      this.triggerEvent(core["a" /* default */].events.TIME_LINE_SIZE_CHANGED, w, this.getTimeAxisHeight());
    }
  }, {
    key: "resetZoom",
    value: function resetZoom() {
      this.zoomFactor = 1;
      var w = this.node.offsetWidth * this.scrollableHorizonFactor;
      this.timeLineElt.style.width = "".concat(w, "px");
      this.updateRatio();
      this.triggerEvent(core["a" /* default */].events.TIME_LINE_SIZE_CHANGED, w, this.getTimeAxisHeight());
    }
  }, {
    key: "setVisibleTimeWindow",
    value: function setVisibleTimeWindow(window) {
      if (!window || !window.start || !window.end) {
        this.resetZoom();
      } else {
        var horizPageCount = (this.scrollableHorizon.end - this.scrollableHorizon.start) / (window.end - window.start);
        this.zoomFactor = horizPageCount / this.scrollableHorizonFactor;
        var w = horizPageCount * this.node.offsetWidth;
        this.timeLineElt.style.width = "".concat(w, "px");
        this.updateRatio();
        this.triggerEvent(core["a" /* default */].events.TIME_LINE_SIZE_CHANGED, w, this.getTimeAxisHeight());
      }
    }
  }, {
    key: "getVisibleTimes",
    value: function getVisibleTimes() {
      return {
        start: this.window.startMillis,
        end: this.window.endMillis
      };
    }
  }, {
    key: "scrollTo",
    value: function scrollTo(time, animate) {
      var range = this.visTimeline.getWindow();
      var interval = range.end - range.start;
      this.visTimeline.setWindow(time, time + interval, animate === undefined ? undefined : {
        animation: animate
      });
    }
    /*           Markers        */

  }, {
    key: "addTimeMarker",
    value: function addTimeMarker(id, time, classes) {
      var ar = this.visTimeline.customTimes;
      var l = ar && ar.length;
      this.visTimeline.addCustomTime(time, id); // Retrieve the node associate with the time marker

      if (ar && ar.length && ar.length !== l) {
        var markerObj = this.visTimeline.customTimes[l];

        if (markerObj && markerObj.bar) {
          external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(markerObj.bar).css('top', "".concat(this.getTimeAxisHeight() - 3, "px"));
        }
      }
    }
  }, {
    key: "removeTimeMarker",
    value: function removeTimeMarker(id, time, classes) {
      this.visTimeline.removeCustomTime(id);
    }
  }, {
    key: "createVisItem",
    value: function createVisItem(item) {
      return {
        start: item.start || (item.type === 'background' ? this.window.startMillis : undefined),
        end: item.end || (item.type === 'background' ? this.window.endMillis : undefined),
        title: item.title,
        type: item.type === 'background' ? 'background' : item.type === 'box' ? 'box' : item.type === 'point' ? 'point' : 'background',
        className: item.className,
        content: item.content
      };
    }
  }, {
    key: "setTimeLineItem",
    value: function setTimeLineItem(id, item) {
      this.removeTimeLineItem(id, false);
      this.addTimeLineItem(id, item);
    }
  }, {
    key: "addTimeLineItem",
    value: function addTimeLineItem(id, item, update) {
      item = this.createVisItem(item);
      this.items.push(item);
      this.itemsByIds[id] = item;

      if (update === undefined || update) {
        this.visTimeline.setItems(this.items);
      }
    }
  }, {
    key: "removeTimeLineItem",
    value: function removeTimeLineItem(id, update) {
      var item = this.itemsByIds[id];

      if (item) {
        delete this.itemsByIds[id];
        var index = this.items.indexOf(item);

        if (index > -1) {
          this.items.splice(index, 1);
        }

        if (update === undefined || update) {
          this.visTimeline.setItems(this.items);
        }
      }
    } //
    // Decorations

  }, {
    key: "getDecorationContainer",
    value: function getDecorationContainer() {
      var $panel = external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default()(this.timeLineElt).find('.vis-panel.vis-background.vis-horizontal');
      return $panel.length && $panel[0] || null;
    }
  }]);

  return TimeLine;
}(core["a" /* default */].components.TimeLine);


core["a" /* default */].components.TimeLine.impl = timeline_TimeLine;
// CONCATENATED MODULE: ./src/jquery/timeline/index.js

/* harmony default export */ var jquery_timeline = (timeline_TimeLine);

/***/ }),
/* 168 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/classCallCheck.js
var classCallCheck = __webpack_require__(1);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/helpers/esm/createClass.js
var createClass = __webpack_require__(2);

// EXTERNAL MODULE: /Users/gilles/dev/ibm/gantt-chart/node_modules/@babel/runtime-corejs2/core-js/number/parse-int.js
var parse_int = __webpack_require__(17);
var parse_int_default = /*#__PURE__*/__webpack_require__.n(parse_int);

// EXTERNAL MODULE: external {"root":"jQuery","commonjs2":"jquery","commonjs":"jquery","amd":"jquery"}
var external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_ = __webpack_require__(6);
var external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default = /*#__PURE__*/__webpack_require__.n(external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_);

// EXTERNAL MODULE: ./src/core/core.js
var core = __webpack_require__(0);

// CONCATENATED MODULE: ./src/jquery/split/split.js





/* ONO: Gantt malfunctions with latter versions of this plugin! */

(function (Gantt, $) {
  var methods = {};

  methods.init = function () {
    var $splitPanes = this;
    $splitPanes.each(setMinHeightAndMinWidth);
    $splitPanes.append('<div class="split-pane-resize-shim">');
    $splitPanes.children('.split-pane-divider').html('<div class="split-pane-divider-inner"></div>');
    $splitPanes.children('.split-pane-divider').on('touchstart mousedown', mousedownHandler);
    setTimeout(function () {
      // Doing this later because of an issue with Chrome (v23.0.1271.64) returning split-pane width = 0
      // and triggering multiple resize events when page is being opened from an <a target="_blank"> .
      $splitPanes.each(function () {
        $(this).on('_splitpaneparentresize', createParentresizeHandler($(this)));
      });
      $(window).trigger('resize');
    }, 100);
  };

  methods.firstComponentSize = function (value) {
    this.each(function () {
      var $splitPane = $(this);
      var components = getComponents($splitPane);

      if ($splitPane.is('.fixed-top')) {
        fixedTopHandler(components, components.divider.offsetTop)({
          pageY: value
        });
      } else if ($splitPane.is('.fixed-bottom')) {
        value = components.splitPane.offsetHeight - components.divider.offsetHeight - value;
        fixedBottomHandler(components, -components.last.offsetHeight)({
          pageY: -value
        });
      } else if ($splitPane.is('.horizontal-percent')) {
        value = components.splitPane.offsetHeight - components.divider.offsetHeight - value;
        horizontalPercentHandler(components, -components.last.offsetHeight)({
          pageY: -value
        });
      } else if ($splitPane.is('.fixed-left')) {
        fixedLeftHandler(components, components.divider.offsetLeft)({
          pageX: value
        });
      } else if ($splitPane.is('.fixed-right')) {
        value = components.splitPane.offsetWidth - components.divider.offsetWidth - value;
        fixedRightHandler(components, -components.last.offsetWidth)({
          pageX: -value
        });
      } else if ($splitPane.is('.vertical-percent')) {
        value = components.splitPane.offsetWidth - components.divider.offsetWidth - value;
        verticalPercentHandler(components, -components.last.offsetWidth)({
          pageX: -value
        });
      }
    });
  };

  methods.lastComponentSize = function (value) {
    this.each(function () {
      var $splitPane = $(this);
      var components = getComponents($splitPane);

      if ($splitPane.is('.fixed-top')) {
        value = components.splitPane.offsetHeight - components.divider.offsetHeight - value;
        fixedTopHandler(components, components.divider.offsetTop)({
          pageY: value
        });
      } else if ($splitPane.is('.fixed-bottom')) {
        fixedBottomHandler(components, -components.last.offsetHeight)({
          pageY: -value
        });
      } else if ($splitPane.is('.horizontal-percent')) {
        horizontalPercentHandler(components, -components.last.offsetHeight)({
          pageY: -value
        });
      } else if ($splitPane.is('.fixed-left')) {
        value = components.splitPane.offsetWidth - components.divider.offsetWidth - value;
        fixedLeftHandler(components, components.divider.offsetLeft)({
          pageX: value
        });
      } else if ($splitPane.is('.fixed-right')) {
        fixedRightHandler(components, -components.last.offsetWidth)({
          pageX: -value
        });
      } else if ($splitPane.is('.vertical-percent')) {
        verticalPercentHandler(components, -components.last.offsetWidth)({
          pageX: -value
        });
      }
    });
  };

  methods.setLeftComponentVisible = function (visible) {
    this.each(function () {
      var $splitPane = $(this);
      var components = getComponents($splitPane);
      components.divider.style.display = visible ? '' : 'none';
      components.first.style.display = visible ? '' : 'none';
    });
  };

  methods.setRightComponentVisible = function (visible) {
    this.each(function () {
      var $splitPane = $(this);
      var components = getComponents($splitPane);
      var first = components.first;
      first.style.position = visible ? 'absolute' : 'relative';
      first.style[$(first).hasClass('top-pane') ? 'height' : 'width'] = visible ? '' : '100%';
      components.divider.style.display = visible ? '' : 'none';
      components.last.style.display = visible ? '' : 'none';
    });
  };

  $.fn.splitPane = function (method) {
    if (!method) {
      method = 'init';
    }

    methods[method].apply(this, $.grep(arguments, function (it, i) {
      return i > 0;
    }));
  };

  var SPLITPANERESIZE_HANDLER = '_splitpaneparentresizeHandler';
  /**
   * A special event that will "capture" a resize event from the parent split-pane or window.
   * The event will NOT propagate to grandchildren.
   */

  $.event.special._splitpaneparentresize = {
    setup: function setup(data, namespaces) {
      var element = this;
      var parent = $(this).parent().closest('.split-pane')[0] || window;
      $(this).data(SPLITPANERESIZE_HANDLER, function (event) {
        var target = event.target === document ? window : event.target;

        if (target === parent) {
          event.type = '_splitpaneparentresize';
          $.event.dispatch.apply(element, arguments);
        } else {
          event.stopPropagation();
        }
      });
      $(parent).on('resize', $(this).data(SPLITPANERESIZE_HANDLER));
    },
    teardown: function teardown(namespaces) {
      var parent = $(this).parent().closest('.split-pane')[0] || window;
      $(parent).off('resize', $(this).data(SPLITPANERESIZE_HANDLER));
      $(this).removeData(SPLITPANERESIZE_HANDLER);
    }
  };

  function setMinHeightAndMinWidth() {
    var $splitPane = $(this);
    var components = getComponents($splitPane);

    if ($splitPane.is('.fixed-top, .fixed-bottom, .horizontal-percent')) {
      $splitPane.css('min-height', "".concat(minHeight(components.first) + minHeight(components.last) + $(components.divider).height(), "px"));
    } else {
      $splitPane.css('min-width', "".concat(minWidth(components.first) + minWidth(components.last) + $(components.divider).width(), "px"));
    }
  }

  function mousedownHandler(event) {
    var $divider = $(this);
    var $splitPane = $divider.parent();
    var $resizeShim = $divider.siblings('.split-pane-resize-shim');
    $resizeShim.show();
    $divider.addClass('dragged');

    if (event.type.match(/^touch/)) {
      $divider.addClass('touch');
    }

    var moveEventHandler = createMousemove($splitPane, pageXof(event), pageYof(event));
    $(document).on('touchmove mousemove', moveEventHandler);
    $(document).one('touchend mouseup', function (event) {
      $(document).off('touchmove mousemove', moveEventHandler);
      $divider.removeClass('dragged touch');
      $resizeShim.hide();
      $splitPane.trigger('dividerdragend', [getComponentsSizes($splitPane)]);
    });
    $splitPane.trigger('dividerdragstart', [getComponentsSizes($splitPane)]);
  }

  function getComponentsSizes($splitPane) {
    var property = $splitPane.is('.fixed-top, .fixed-bottom, .horizontal-percent') ? 'height' : 'width';
    return {
      firstComponentSize: $splitPane.find('.split-pane-component:first')[property](),
      lastComponentSize: $splitPane.find('.split-pane-component:last')[property]()
    };
  }

  function createParentresizeHandler($splitPane) {
    var components = getComponents($splitPane);

    if ($splitPane.is('.fixed-top')) {
      return function (event) {
        var lastComponentMinHeight = minHeight(components.last);
        var maxfirstComponentHeight = components.splitPane.offsetHeight - lastComponentMinHeight - components.divider.offsetHeight;

        if (components.first.offsetHeight > maxfirstComponentHeight) {
          setTop(components, "".concat(maxfirstComponentHeight, "px"));
        }

        $splitPane.resize();
      };
    }

    if ($splitPane.is('.fixed-bottom')) {
      return function (event) {
        var firstComponentMinHeight = minHeight(components.first);
        var maxLastComponentHeight = components.splitPane.offsetHeight - firstComponentMinHeight - components.divider.offsetHeight;

        if (components.last.offsetHeight > maxLastComponentHeight) {
          setBottom(components, "".concat(maxLastComponentHeight, "px"));
        }

        $splitPane.resize();
      };
    }

    if ($splitPane.is('.horizontal-percent')) {
      return function (event) {
        var lastComponentMinHeight = minHeight(components.last);
        var firstComponentMinHeight = minHeight(components.first);
        var maxLastComponentHeight = components.splitPane.offsetHeight - firstComponentMinHeight - components.divider.offsetHeight;

        if (components.last.offsetHeight > maxLastComponentHeight) {
          setBottom(components, "".concat(maxLastComponentHeight / components.splitPane.offsetHeight * 100, "%"));
        } else if (components.splitPane.offsetHeight - components.first.offsetHeight - components.divider.offsetHeight < lastComponentMinHeight) {
          setBottom(components, "".concat(lastComponentMinHeight / components.splitPane.offsetHeight * 100, "%"));
        }

        $splitPane.resize();
      };
    }

    if ($splitPane.is('.fixed-left')) {
      return function (event) {
        var lastComponentMinWidth = minWidth(components.last);
        var maxFirstComponentWidth = components.splitPane.offsetWidth - lastComponentMinWidth - components.divider.offsetWidth;

        if (components.first.offsetWidth > maxFirstComponentWidth) {
          setLeft(components, "".concat(maxFirstComponentWidth, "px"));
        }

        $splitPane.resize();
      };
    }

    if ($splitPane.is('.fixed-right')) {
      return function (event) {
        var firstComponentMinWidth = minWidth(components.first);
        var maxLastComponentWidth = components.splitPane.offsetWidth - firstComponentMinWidth - components.divider.offsetWidth;

        if (components.last.offsetWidth > maxLastComponentWidth) {
          setRight(components, "".concat(maxLastComponentWidth, "px"));
        }

        $splitPane.resize();
      };
    }

    if ($splitPane.is('.vertical-percent')) {
      return function (event) {
        var lastComponentMinWidth = minWidth(components.last);
        var firstComponentMinWidth = minWidth(components.first);
        var maxLastComponentWidth = components.splitPane.offsetWidth - firstComponentMinWidth - components.divider.offsetWidth;

        if (components.last.offsetWidth > maxLastComponentWidth) {
          setRight(components, "".concat(maxLastComponentWidth / components.splitPane.offsetWidth * 100, "%"));
        } else if (components.splitPane.offsetWidth - components.first.offsetWidth - components.divider.offsetWidth < lastComponentMinWidth) {
          setRight(components, "".concat(lastComponentMinWidth / components.splitPane.offsetWidth * 100, "%"));
        }

        $splitPane.resize();
      };
    }
  }

  function createMousemove($splitPane, pageX, pageY) {
    var components = getComponents($splitPane);

    if ($splitPane.is('.fixed-top')) {
      return fixedTopHandler(components, pageY);
    }

    if ($splitPane.is('.fixed-bottom')) {
      return fixedBottomHandler(components, pageY);
    }

    if ($splitPane.is('.horizontal-percent')) {
      return horizontalPercentHandler(components, pageY);
    }

    if ($splitPane.is('.fixed-left')) {
      return fixedLeftHandler(components, pageX);
    }

    if ($splitPane.is('.fixed-right')) {
      return fixedRightHandler(components, pageX);
    }

    if ($splitPane.is('.vertical-percent')) {
      return verticalPercentHandler(components, pageX);
    }
  }

  function fixedTopHandler(components, pageY) {
    var firstComponentMinHeight = minHeight(components.first);
    var maxFirstComponentHeight = components.splitPane.offsetHeight - minHeight(components.last) - components.divider.offsetHeight;
    var topOffset = components.divider.offsetTop - pageY;
    return function (event) {
      var top = newTop(firstComponentMinHeight, maxFirstComponentHeight, topOffset + pageYof(event));
      setTop(components, "".concat(top, "px"));
      $(components.splitPane).resize();
    };
  }

  function fixedBottomHandler(components, pageY) {
    var lastComponentMinHeight = minHeight(components.last);
    var maxLastComponentHeight = components.splitPane.offsetHeight - minHeight(components.first) - components.divider.offsetHeight;
    var bottomOffset = components.last.offsetHeight + pageY;
    return function (event) {
      event.preventDefault && event.preventDefault();
      var bottom = Math.min(Math.max(lastComponentMinHeight, bottomOffset - pageYof(event)), maxLastComponentHeight);
      setBottom(components, "".concat(bottom, "px"));
      $(components.splitPane).resize();
    };
  }

  function horizontalPercentHandler(components, pageY) {
    var splitPaneHeight = components.splitPane.offsetHeight;
    var lastComponentMinHeight = minHeight(components.last);
    var maxLastComponentHeight = splitPaneHeight - minHeight(components.first) - components.divider.offsetHeight;
    var bottomOffset = components.last.offsetHeight + pageY;
    return function (event) {
      event.preventDefault && event.preventDefault();
      var bottom = Math.min(Math.max(lastComponentMinHeight, bottomOffset - pageYof(event)), maxLastComponentHeight);
      setBottom(components, "".concat(bottom / splitPaneHeight * 100, "%"));
      $(components.splitPane).resize();
    };
  }

  function fixedLeftHandler(components, pageX) {
    var firstComponentMinWidth = minWidth(components.first);
    var maxFirstComponentWidth = components.splitPane.offsetWidth - minWidth(components.last) - components.divider.offsetWidth;
    var leftOffset = components.divider.offsetLeft - pageX;
    return function (event) {
      event.preventDefault && event.preventDefault();
      var left = newLeft(firstComponentMinWidth, maxFirstComponentWidth, leftOffset + pageXof(event));
      setLeft(components, "".concat(left, "px"));
      $(components.splitPane).resize();
    };
  }

  function fixedRightHandler(components, pageX) {
    var lastComponentMinWidth = minWidth(components.last);
    var maxLastComponentWidth = components.splitPane.offsetWidth - minWidth(components.first) - components.divider.offsetWidth;
    var rightOffset = components.last.offsetWidth + pageX;
    return function (event) {
      event.preventDefault && event.preventDefault();
      var right = Math.min(Math.max(lastComponentMinWidth, rightOffset - pageXof(event)), maxLastComponentWidth);
      setRight(components, "".concat(right, "px"));
      $(components.splitPane).resize();
    };
  }

  function verticalPercentHandler(components, pageX) {
    var splitPaneWidth = components.splitPane.offsetWidth;
    var lastComponentMinWidth = minWidth(components.last);
    var maxLastComponentWidth = splitPaneWidth - minWidth(components.first) - components.divider.offsetWidth;
    var rightOffset = components.last.offsetWidth + pageX;
    return function (event) {
      event.preventDefault && event.preventDefault();
      var right = Math.min(Math.max(lastComponentMinWidth, rightOffset - pageXof(event)), maxLastComponentWidth);
      setRight(components, "".concat(right / splitPaneWidth * 100, "%"));
      $(components.splitPane).resize();
    };
  }

  function getComponents($splitPane) {
    return {
      splitPane: $splitPane[0],
      first: $splitPane.children('.split-pane-component:first')[0],
      divider: $splitPane.children('.split-pane-divider')[0],
      last: $splitPane.children('.split-pane-component:last')[0]
    };
  }

  function pageXof(event) {
    if (event.pageX !== undefined) {
      return event.pageX;
    }

    if (event.originalEvent.pageX !== undefined) {
      return event.originalEvent.pageX;
    }

    if (event.originalEvent.touches) {
      return event.originalEvent.touches[0].pageX;
    }
  }

  function pageYof(event) {
    if (event.pageY !== undefined) {
      return event.pageY;
    }

    if (event.originalEvent.pageY !== undefined) {
      return event.originalEvent.pageY;
    }

    if (event.originalEvent.touches) {
      return event.originalEvent.touches[0].pageY;
    }
  }

  function minHeight(element) {
    return parse_int_default()($(element).css('min-height'), 10) || 0;
  }

  function minWidth(element) {
    return parse_int_default()($(element).css('min-width'), 10) || 0;
  }

  function newTop(firstComponentMinHeight, maxFirstComponentHeight, value) {
    return Math.min(Math.max(firstComponentMinHeight, value), maxFirstComponentHeight);
  }

  function newLeft(firstComponentMinWidth, maxFirstComponentWidth, value) {
    return Math.min(Math.max(firstComponentMinWidth, value), maxFirstComponentWidth);
  }

  function setTop(components, top) {
    components.first.style.height = top;
    components.divider.style.top = top;
    components.last.style.top = top;
  }

  function setBottom(components, bottom) {
    components.first.style.bottom = bottom;
    components.divider.style.bottom = bottom;
    components.last.style.height = bottom;
  }

  function setLeft(components, left) {
    components.first.style.width = left;
    components.divider.style.left = left;
    components.last.style.left = left;
  }

  function setRight(components, right) {
    components.first.style.right = right;
    components.divider.style.left = right;
    components.last.style.width = right;
  }

  var Split =
  /*#__PURE__*/
  function () {
    function Split(elt, options) {
      var _this = this;

      Object(classCallCheck["a" /* default */])(this, Split);

      this.options = options;
      this.horiz = !this.options || this.options.horizontal === undefined || this.options.horizontal;
      var fixedFirst = !this.options || this.options.fixedFirst === undefined || this.options.fixedFirst;
      var hideFirst = options && options.hideFirst;
      var hideSecond = options && options.hideSecond;
      this.splitPaneElt = document.createElement('div');
      this.splitPaneElt.className = "split-pane docloud-splitpane ".concat(this.horiz ? fixedFirst ? 'fixed-left' : 'fixed-right' : fixedFirst ? 'fixed-top' : 'fixed-bottom');
      this.leftComponent = document.createElement('div');
      this.leftComponent.className = "split-pane-component ".concat(this.horiz ? 'left-pane split-pane-left' : 'top-pane split-pane-top');
      this.splitPaneElt.appendChild(this.leftComponent);
      var divider = document.createElement('div');
      divider.className = "split-pane-divider ".concat(this.horiz ? 'h-split-pane-divider' : 'v-split-pane-divider');
      this.splitPaneElt.appendChild(divider);

      if (hideFirst || hideSecond) {
        divider.style.display = 'none';
      }

      this.rightComponent = document.createElement('div');
      this.rightComponent.className = "split-pane-component ".concat(this.horiz ? 'right-pane split-pane-right' : 'bottom-pane split-pane-bottom');
      this.splitPaneElt.appendChild(this.rightComponent);

      if (hideSecond) {
        this.leftComponent.style.position = 'relative';
        this.leftComponent.style[!this.horiz ? 'height' : 'width'] = '100%';
        this.rightComponent.style.display = 'none';
      } else if (hideFirst) {
        this.rightComponent.style.position = 'relative';
        this.rightComponent.style[!this.horiz ? 'height' : 'width'] = '100%';
        this.leftComponent.style.display = 'none';
      }

      elt.appendChild(this.splitPaneElt);
      this.$splitPaneElt = $(this.splitPaneElt).splitPane();
      $(this.splitPaneElt).on('resize', function (e) {
        _this.onresized();
      });
      $(this.splitPaneElt).on('dividerdragend', function (e) {
        _this.onDividerDragEnd();
      });
    }

    Object(createClass["a" /* default */])(Split, [{
      key: "getLeftComponent",
      value: function getLeftComponent() {
        return this.leftComponent;
      }
    }, {
      key: "getRightComponent",
      value: function getRightComponent() {
        return this.rightComponent;
      }
    }, {
      key: "leftComponentCreated",
      value: function leftComponentCreated() {
        var pos = this.options && this.options.pos || 200;

        if (pos >= 0) {
          $(this.splitPaneElt).splitPane('firstComponentSize', pos);
        }
      }
    }, {
      key: "rightComponentCreated",
      value: function rightComponentCreated() {
        var pos = this.options && this.options.pos;

        if (pos < 0) {
          $(this.splitPaneElt).splitPane('lastComponentSize', -pos);
        }
      }
    }, {
      key: "onresized",
      value: function onresized() {}
    }, {
      key: "onDividerDragEnd",
      value: function onDividerDragEnd() {}
    }, {
      key: "setLeftComponentVisible",
      value: function setLeftComponentVisible(visible) {
        $(this.splitPaneElt).splitPane('setLeftComponentVisible', visible);
      }
    }, {
      key: "setRightComponentVisible",
      value: function setRightComponentVisible(visible) {
        $(this.splitPaneElt).splitPane('setRightComponentVisible', visible);
      }
    }]);

    return Split;
  }();

  Gantt.components.Split.impl = Split;
})(core["a" /* default */], external_root_jQuery_commonjs2_jquery_commonjs_jquery_amd_jquery_default.a);
// EXTERNAL MODULE: ./src/jquery/split/split-pane.scss
var split_pane = __webpack_require__(162);

// CONCATENATED MODULE: ./src/jquery/split/index.js



/***/ })
/******/ ]);
});
//# sourceMappingURL=ibm-gantt-chart-jquery.js.map