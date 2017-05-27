webpackJsonp([1],{

/***/ 11:
/***/ (function(module, exports) {

module.exports = function normalizeComponent (
  rawScriptExports,
  compiledTemplate,
  scopeId,
  cssModules
) {
  var esModule
  var scriptExports = rawScriptExports = rawScriptExports || {}

  // ES6 modules interop
  var type = typeof rawScriptExports.default
  if (type === 'object' || type === 'function') {
    esModule = rawScriptExports
    scriptExports = rawScriptExports.default
  }

  // Vue.extend constructor export interop
  var options = typeof scriptExports === 'function'
    ? scriptExports.options
    : scriptExports

  // render functions
  if (compiledTemplate) {
    options.render = compiledTemplate.render
    options.staticRenderFns = compiledTemplate.staticRenderFns
  }

  // scopedId
  if (scopeId) {
    options._scopeId = scopeId
  }

  // inject cssModules
  if (cssModules) {
    var computed = options.computed || (options.computed = {})
    Object.keys(cssModules).forEach(function (key) {
      var module = cssModules[key]
      computed[key] = function () { return module }
    })
  }

  return {
    esModule: esModule,
    exports: scriptExports,
    options: options
  }
}


/***/ }),

/***/ 36:
/***/ (function(module, exports, __webpack_require__) {


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

__webpack_require__(59);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

window.Gridstack = __webpack_require__(5);
__webpack_require__(14); // for draggable, etc

Vue.component('example', __webpack_require__(64));
Vue.component('dashboard', __webpack_require__(62));

var app = new Vue({
  el: '#app'
});

/***/ }),

/***/ 37:
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 56:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function($) {/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__DashboardWidget_vue__ = __webpack_require__(63);
/* harmony import */ var __WEBPACK_IMPORTED_MODULE_0__DashboardWidget_vue___default = __webpack_require__.n(__WEBPACK_IMPORTED_MODULE_0__DashboardWidget_vue__);
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

$(function () {
    var options = {
        cellHeight: 80,
        verticalMargin: 10,
        draggable: {
            handle: '.draggable',
            scroll: true,
            appendTo: 'body'
        }
    };
    $('.grid-stack').gridstack(options);
});



/* harmony default export */ __webpack_exports__["default"] = ({
    components: {
        'dashboard-widget': __WEBPACK_IMPORTED_MODULE_0__DashboardWidget_vue___default.a
    },
    data: function data() {
        return {
            selected: 0,
            dashboards: [],
            widgets: [],
            errors: []
        };
    },
    mounted: function mounted() {
        var _this = this;

        window.axios.get('api/dashboard').then(function (response) {
            _this.dashboards = response.data.dashboards;
            for (var id in _this.dashboards) {
                _this.selected = id;
                break;
            }
        }).catch(function (e) {
            _this.errors.push(e);
        });
    },

    watch: {
        'selected': function selected() {
            var _this2 = this;

            if (this.selected === 0 || !(this.selected in this.dashboards)) {
                return;
            }

            // changing dashboards, remove all nodes from gridstack, but don't let it update the dom
            var grid = $('.grid-stack').data('gridstack');
            if (grid) {
                grid.removeAll(false);
            }

            // TODO is caching necessary?
            if (this.dashboards[this.selected].hasOwnProperty('widgets')) {
                this.widgets = this.dashboards[this.selected].widgets;
            } else {
                window.axios.get('api/dashboard/' + this.selected).then(function (response) {
                    _this2.dashboards[_this2.selected].widgets = response.data.widgets;
                    _this2.widgets = response.data.widgets;
                }).catch(function (e) {
                    _this2.errors.push(e);
                });
            }
        }
    },
    methods: {
        removeWidget: function removeWidget(id) {
            console.log('removing ' + id);
            this.widgets = $.grep(this.widgets, function (widget) {
                return widget.user_widget_id !== id;
            });
        }
    }
});
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),

/***/ 57:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* WEBPACK VAR INJECTION */(function($) {//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    props: ['widget'],
    methods: {
        removeWidget: function removeWidget() {
            var grid = $('.grid-stack').data('gridstack');
            grid.removeWidget($('#user_widget_' + this.widget.user_widget_id), false);
            this.$emit('remove');
        }
    },
    mounted: function mounted() {
        // if gridstack is already running, notify it of the new widget
        var grid = $('.grid-stack').data('gridstack');
        if (grid) {
            grid.makeWidget('#user_widget_' + this.widget.user_widget_id);
        }
    }
});
/* WEBPACK VAR INJECTION */}.call(__webpack_exports__, __webpack_require__(0)))

/***/ }),

/***/ 58:
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//
//

/* harmony default export */ __webpack_exports__["default"] = ({
    data: function data() {
        return {
            heading: 'Example Component',
            body: "I'm an example component!"
        };
    },
    mounted: function mounted() {
        console.log('Component mounted.');
    }
});

/***/ }),

/***/ 59:
/***/ (function(module, exports, __webpack_require__) {

window._ = __webpack_require__(9);

/**
 * We'll load jQuery and the Bootstrap jQuery plugin which provides support
 * for JavaScript based Bootstrap features such as modals and tabs. This
 * code may be modified to fit the specific needs of your application.
 */

try {
  window.$ = window.jQuery = __webpack_require__(0);
  __webpack_require__(13);
} catch (e) {}

/**
 * Vue is a modern JavaScript library for building interactive web interfaces
 * using reactive data binding and reusable components. Vue's API is clean
 * and simple, leaving you to focus on building your next great project.
 */

window.Vue = __webpack_require__(22);

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = __webpack_require__(12);
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

/**
 * Next we will register the CSRF Token as a common header with Axios so that
 * all outgoing HTTP requests automatically have it attached. This is just
 * a simple convenience so we don't have to attach every token manually.
 */

var token = document.head.querySelector('meta[name="csrf-token"]');
if (token) {
  window.axios.defaults.headers.common['X-CSRF-TOKEN'] = token.content;
} else {
  console.error('CSRF token not found: https://laravel.com/docs/csrf#csrf-x-csrf-token');
}

var jwt = document.head.querySelector('meta[name="jwt-token"]');
if (jwt) {
  window.axios.defaults.headers.common['Authorization'] = 'Bearer ' + jwt.content;
}

/**
 * Echo exposes an expressive API for subscribing to channels and listening
 * for events that are broadcast by Laravel. Echo and event broadcasting
 * allows your team to easily build robust real-time web applications.
 */

// import Echo from 'laravel-echo'

// window.Pusher = require('pusher-js');

// window.Echo = new Echo({
//     broadcaster: 'pusher',
//     key: 'your-pusher-key'
// });

/***/ }),

/***/ 62:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(56),
  /* template */
  __webpack_require__(65),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/home/murrant/projects/librenmsv2/resources/assets/js/components/Dashboard.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Dashboard.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-5a65f450", Component.options)
  } else {
    hotAPI.reload("data-v-5a65f450", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 63:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(57),
  /* template */
  __webpack_require__(67),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/home/murrant/projects/librenmsv2/resources/assets/js/components/DashboardWidget.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] DashboardWidget.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-9527eb88", Component.options)
  } else {
    hotAPI.reload("data-v-9527eb88", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 64:
/***/ (function(module, exports, __webpack_require__) {

var Component = __webpack_require__(11)(
  /* script */
  __webpack_require__(58),
  /* template */
  __webpack_require__(66),
  /* scopeId */
  null,
  /* cssModules */
  null
)
Component.options.__file = "/home/murrant/projects/librenmsv2/resources/assets/js/components/Example.vue"
if (Component.esModule && Object.keys(Component.esModule).some(function (key) {return key !== "default" && key !== "__esModule"})) {console.error("named exports are not supported in *.vue files.")}
if (Component.options.functional) {console.error("[vue-loader] Example.vue: functional components are not supported with templates, they should use render functions.")}

/* hot reload */
if (false) {(function () {
  var hotAPI = require("vue-hot-reload-api")
  hotAPI.install(require("vue"), false)
  if (!hotAPI.compatible) return
  module.hot.accept()
  if (!module.hot.data) {
    hotAPI.createRecord("data-v-8f4ee6a4", Component.options)
  } else {
    hotAPI.reload("data-v-8f4ee6a4", Component.options)
  }
})()}

module.exports = Component.exports


/***/ }),

/***/ 65:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', [_c('form', {
    staticClass: "form-inline"
  }, [_c('div', {
    staticClass: "form-group"
  }, [_c('select', {
    directives: [{
      name: "model",
      rawName: "v-model",
      value: (_vm.selected),
      expression: "selected"
    }],
    staticClass: "form-control",
    on: {
      "change": function($event) {
        var $$selectedVal = Array.prototype.filter.call($event.target.options, function(o) {
          return o.selected
        }).map(function(o) {
          var val = "_value" in o ? o._value : o.value;
          return val
        });
        _vm.selected = $event.target.multiple ? $$selectedVal : $$selectedVal[0]
      }
    }
  }, _vm._l((_vm.dashboards), function(dashboard) {
    return _c('option', {
      domProps: {
        "value": dashboard.dashboard_id
      }
    }, [_vm._v("\n                    " + _vm._s(dashboard.dashboard_name) + "\n                ")])
  }))]), _vm._v(" "), _vm._m(0)]), _vm._v(" "), _c('br'), _vm._v(" "), _c('div', {
    staticClass: "grid-stack"
  }, _vm._l((_vm.widgets), function(widget) {
    return _c('dashboard-widget', {
      key: widget.user_widget_id,
      attrs: {
        "widget": widget
      },
      on: {
        "remove": function($event) {
          _vm.removeWidget(widget.user_widget_id)
        }
      }
    })
  }))])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "form-group"
  }, [_c('a', {
    staticClass: "btn btn-primary",
    attrs: {
      "href": "#",
      "data-toggle": "control-sidebar"
    }
  }, [_c('i', {
    staticClass: "fa fa-gears"
  })])])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-5a65f450", module.exports)
  }
}

/***/ }),

/***/ 66:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "container"
  }, [_c('div', {
    staticClass: "row"
  }, [_c('div', {
    staticClass: "col-md-8 col-md-offset-2"
  }, [_c('div', {
    staticClass: "panel panel-default"
  }, [_c('div', {
    staticClass: "panel-heading",
    domProps: {
      "textContent": _vm._s(_vm.heading)
    }
  }), _vm._v(" "), _c('div', {
    staticClass: "panel-body",
    model: {
      value: (_vm.body),
      callback: function($$v) {
        _vm.body = $$v
      },
      expression: "body"
    }
  }, [_vm._v("\n                    " + _vm._s(_vm.body) + "\n                ")])])])])])
},staticRenderFns: []}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-8f4ee6a4", module.exports)
  }
}

/***/ }),

/***/ 67:
/***/ (function(module, exports, __webpack_require__) {

module.exports={render:function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('div', {
    staticClass: "grid-stack-item",
    attrs: {
      "id": 'user_widget_' + _vm.widget.user_widget_id,
      "data-gs-id": _vm.widget.user_widget_id,
      "data-gs-width": _vm.widget.size_x,
      "data-gs-height": _vm.widget.size_y,
      "data-gs-x": _vm.widget.col,
      "data-gs-y": _vm.widget.row
    }
  }, [_c('div', {
    staticClass: "grid-stack-item-content box box-primary box-solid"
  }, [_c('div', {
    staticClass: "box-header with-border draggable"
  }, [_c('h3', {
    staticClass: "box-title"
  }, [_vm._v(" " + _vm._s(_vm.widget.title) + " ")]), _vm._v(" "), _c('div', {
    staticClass: "box-tools pull-right"
  }, [_vm._m(0), _vm._v(" "), _c('button', {
    staticClass: "btn btn-box-tool",
    attrs: {
      "type": "button"
    },
    on: {
      "click": _vm.removeWidget
    }
  }, [_c('i', {
    staticClass: "fa fa-trash"
  })])])]), _vm._v(" "), _c('div', {
    staticClass: "box-body"
  }, [_vm._v("\n            " + _vm._s(_vm.widget.widget_id) + "\n        ")])])])
},staticRenderFns: [function (){var _vm=this;var _h=_vm.$createElement;var _c=_vm._self._c||_h;
  return _c('button', {
    staticClass: "btn btn-box-tool",
    attrs: {
      "type": "button"
    }
  }, [_c('i', {
    staticClass: "fa fa-wrench"
  })])
}]}
module.exports.render._withStripped = true
if (false) {
  module.hot.accept()
  if (module.hot.data) {
     require("vue-hot-reload-api").rerender("data-v-9527eb88", module.exports)
  }
}

/***/ }),

/***/ 69:
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(36);
module.exports = __webpack_require__(37);


/***/ })

},[69]);