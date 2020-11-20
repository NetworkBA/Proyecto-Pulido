(window["webpackJsonp"] = window["webpackJsonp"] || []).push([[1],{

/***/ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Administrativo.vue?vue&type=template&id=fb24afd2&":
/*!************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!./node_modules/vue-loader/lib??vue-loader-options!./resources/js/views/Administrativo.vue?vue&type=template&id=fb24afd2& ***!
  \************************************************************************************************************************************************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "render", function() { return render; });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return staticRenderFns; });
var render = function() {
  var _vm = this
  var _h = _vm.$createElement
  var _c = _vm._self._c || _h
  return _vm._m(0)
}
var staticRenderFns = [
  function() {
    var _vm = this
    var _h = _vm.$createElement
    var _c = _vm._self._c || _h
    return _c("main", { staticClass: "main" }, [
      _c("div", { staticClass: "container-fluid" }, [
        _c("div", { staticClass: "card" }, [
          _c("div", { staticClass: "card-header" }, [
            _c("h2", [_vm._v("Listado de Administrativos")]),
            _c("br"),
            _vm._v(" "),
            _c(
              "button",
              {
                staticClass: "btn btn-primary btn-lg",
                attrs: {
                  type: "button",
                  "data-toggle": "modal",
                  "data-target": "#abrirmodal"
                }
              },
              [
                _c("i", { staticClass: "fa fa-plus fa-2x" }),
                _vm._v("  Agregar Nuevo Administrativo\n                     ")
              ]
            )
          ]),
          _vm._v(" "),
          _c("div", { staticClass: "card-body" }, [
            _c("div", { staticClass: "form-group row" }, [
              _c("div", { staticClass: "col-md-6" }, [
                _c("div", { staticClass: "input-group" }, [
                  _c("input", {
                    staticClass: "form-control",
                    attrs: {
                      type: "text",
                      placeholder: "Buscar Administrativo"
                    }
                  }),
                  _vm._v(" "),
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-primary",
                      attrs: { type: "submit" }
                    },
                    [
                      _c("i", { staticClass: "fa fa-search" }),
                      _vm._v(" Buscar")
                    ]
                  )
                ])
              ])
            ]),
            _vm._v(" "),
            _c(
              "table",
              { staticClass: "table table-bordered table-striped table-sm" },
              [
                _c("thead", [
                  _c("tr", { staticClass: "bg-primary" }, [
                    _c("th", [_vm._v("Nombre")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("CURP")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Información")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Editar")]),
                    _vm._v(" "),
                    _c("th", [_vm._v("Cambiar Estado")])
                  ])
                ]),
                _vm._v(" "),
                _c("tbody", [
                  _c("tr", [
                    _c("td", [_vm._v("categoria")]),
                    _vm._v(" "),
                    _c("td", [_vm._v("descripcion")]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-success btn-md",
                          attrs: { type: "button" }
                        },
                        [
                          _c("i", { staticClass: "fa fa-check fa-2x" }),
                          _vm._v(
                            " Activo\n                                     "
                          )
                        ]
                      )
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-info btn-md",
                          attrs: {
                            type: "button",
                            "data-toggle": "modal",
                            "data-target": "#abrirmodal"
                          }
                        },
                        [
                          _c("i", { staticClass: "fa fa-edit fa-2x" }),
                          _vm._v(
                            " Editar\n                                     "
                          )
                        ]
                      ),
                      _vm._v("  \n                                 ")
                    ]),
                    _vm._v(" "),
                    _c("td", [
                      _c(
                        "button",
                        {
                          staticClass: "btn btn-danger btn-sm",
                          attrs: { type: "button" }
                        },
                        [
                          _c("i", { staticClass: "fa fa-lock fa-2x" }),
                          _vm._v(
                            " Desactivar\n                                     "
                          )
                        ]
                      )
                    ])
                  ])
                ])
              ]
            ),
            _vm._v(" "),
            _c("nav", [
              _c("ul", { staticClass: "pagination" }, [
                _c("li", { staticClass: "page-item" }, [
                  _c("a", { staticClass: "page-link", attrs: { href: "#" } }, [
                    _vm._v("Anterior")
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "page-item active" }, [
                  _c("a", { staticClass: "page-link", attrs: { href: "#" } }, [
                    _vm._v("1")
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "page-item" }, [
                  _c("a", { staticClass: "page-link", attrs: { href: "#" } }, [
                    _vm._v("2")
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "page-item" }, [
                  _c("a", { staticClass: "page-link", attrs: { href: "#" } }, [
                    _vm._v("3")
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "page-item" }, [
                  _c("a", { staticClass: "page-link", attrs: { href: "#" } }, [
                    _vm._v("4")
                  ])
                ]),
                _vm._v(" "),
                _c("li", { staticClass: "page-item" }, [
                  _c("a", { staticClass: "page-link", attrs: { href: "#" } }, [
                    _vm._v("Siguiente")
                  ])
                ])
              ])
            ])
          ])
        ])
      ]),
      _vm._v(" "),
      _c(
        "div",
        {
          staticClass: "modal fade",
          staticStyle: { display: "none" },
          attrs: {
            id: "abrirmodal",
            tabindex: "-1",
            role: "dialog",
            "aria-labelledby": "myModalLabel",
            "aria-hidden": "true"
          }
        },
        [
          _c(
            "div",
            {
              staticClass: "modal-dialog modal-primary modal-lg",
              attrs: { role: "document" }
            },
            [
              _c("div", { staticClass: "modal-content" }, [
                _c("div", { staticClass: "modal-header" }, [
                  _c("h4", { staticClass: "modal-title" }, [
                    _vm._v("Agregar categoría")
                  ]),
                  _vm._v(" "),
                  _c(
                    "button",
                    {
                      staticClass: "close",
                      attrs: {
                        type: "button",
                        "data-dismiss": "modal",
                        "aria-label": "Close"
                      }
                    },
                    [
                      _c("span", { attrs: { "aria-hidden": "true" } }, [
                        _vm._v("×")
                      ])
                    ]
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "modal-body" }, [
                  _c("div", { staticClass: "form-group row div-error" }, [
                    _c("div", { staticClass: "text-center text-error" }, [
                      _c("div")
                    ])
                  ]),
                  _vm._v(" "),
                  _c(
                    "form",
                    {
                      staticClass: "form-horizontal",
                      attrs: {
                        action: "",
                        method: "post",
                        enctype: "multipart/form-data"
                      }
                    },
                    [
                      _c("div", { staticClass: "form-group row" }, [
                        _c(
                          "label",
                          {
                            staticClass: "col-md-3 form-control-label",
                            attrs: { for: "text-input" }
                          },
                          [_vm._v("Categoría")]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-9" }, [
                          _c("input", {
                            staticClass: "form-control",
                            attrs: {
                              type: "text",
                              placeholder: "Nombre de categoría"
                            }
                          })
                        ])
                      ]),
                      _vm._v(" "),
                      _c("div", { staticClass: "form-group row" }, [
                        _c(
                          "label",
                          {
                            staticClass: "col-md-3 form-control-label",
                            attrs: { for: "email-input" }
                          },
                          [_vm._v("Descripción")]
                        ),
                        _vm._v(" "),
                        _c("div", { staticClass: "col-md-9" }, [
                          _c("input", {
                            staticClass: "form-control",
                            attrs: {
                              type: "email",
                              placeholder: "Ingrese descripcion"
                            }
                          })
                        ])
                      ])
                    ]
                  )
                ]),
                _vm._v(" "),
                _c("div", { staticClass: "modal-footer" }, [
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-danger",
                      attrs: { type: "button", "data-dismiss": "modal" }
                    },
                    [
                      _c("i", { staticClass: "fa fa-times fa-2x" }),
                      _vm._v(" Cerrar")
                    ]
                  ),
                  _vm._v(" "),
                  _c(
                    "button",
                    {
                      staticClass: "btn btn-success",
                      attrs: { type: "button" }
                    },
                    [
                      _c("i", { staticClass: "fa fa-save fa-2x" }),
                      _vm._v(" Guardar")
                    ]
                  )
                ])
              ])
            ]
          )
        ]
      )
    ])
  }
]
render._withStripped = true



/***/ }),

/***/ "./resources/js/views/Administrativo.vue":
/*!***********************************************!*\
  !*** ./resources/js/views/Administrativo.vue ***!
  \***********************************************/
/*! exports provided: default */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _Administrativo_vue_vue_type_template_id_fb24afd2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Administrativo.vue?vue&type=template&id=fb24afd2& */ "./resources/js/views/Administrativo.vue?vue&type=template&id=fb24afd2&");
/* harmony import */ var _node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ../../../node_modules/vue-loader/lib/runtime/componentNormalizer.js */ "./node_modules/vue-loader/lib/runtime/componentNormalizer.js");

var script = {}


/* normalize component */

var component = Object(_node_modules_vue_loader_lib_runtime_componentNormalizer_js__WEBPACK_IMPORTED_MODULE_1__["default"])(
  script,
  _Administrativo_vue_vue_type_template_id_fb24afd2___WEBPACK_IMPORTED_MODULE_0__["render"],
  _Administrativo_vue_vue_type_template_id_fb24afd2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"],
  false,
  null,
  null,
  null
  
)

/* hot reload */
if (false) { var api; }
component.options.__file = "resources/js/views/Administrativo.vue"
/* harmony default export */ __webpack_exports__["default"] = (component.exports);

/***/ }),

/***/ "./resources/js/views/Administrativo.vue?vue&type=template&id=fb24afd2&":
/*!******************************************************************************!*\
  !*** ./resources/js/views/Administrativo.vue?vue&type=template&id=fb24afd2& ***!
  \******************************************************************************/
/*! exports provided: render, staticRenderFns */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
__webpack_require__.r(__webpack_exports__);
/* harmony import */ var _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Administrativo_vue_vue_type_template_id_fb24afd2___WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../node_modules/vue-loader/lib/loaders/templateLoader.js??vue-loader-options!../../../node_modules/vue-loader/lib??vue-loader-options!./Administrativo.vue?vue&type=template&id=fb24afd2& */ "./node_modules/vue-loader/lib/loaders/templateLoader.js?!./node_modules/vue-loader/lib/index.js?!./resources/js/views/Administrativo.vue?vue&type=template&id=fb24afd2&");
/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "render", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Administrativo_vue_vue_type_template_id_fb24afd2___WEBPACK_IMPORTED_MODULE_0__["render"]; });

/* harmony reexport (safe) */ __webpack_require__.d(__webpack_exports__, "staticRenderFns", function() { return _node_modules_vue_loader_lib_loaders_templateLoader_js_vue_loader_options_node_modules_vue_loader_lib_index_js_vue_loader_options_Administrativo_vue_vue_type_template_id_fb24afd2___WEBPACK_IMPORTED_MODULE_0__["staticRenderFns"]; });



/***/ })

}]);