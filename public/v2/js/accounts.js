(window.webpackJsonp=window.webpackJsonp||[]).push([[2],{206:function(t,s,a){t.exports=a(211)},211:function(t,s,a){"use strict";a.r(s);var e=a(9),n={name:"Index"},c=a(1),i=Object(c.a)(n,(function(){var t=this.$createElement,s=this._self._c||t;return s("div",[s("router-view")],1)}),[],!1,null,"6b40cc75",null).exports,r={name:"List",props:{accountTypes:String},data:function(){return{accounts:[]}},mounted:function(){var t=this;axios.get("./api/v1/accounts?type="+this.$props.accountTypes).then((function(s){t.loadAccounts(s.data.data)}))},methods:{loadAccounts:function(t){for(var s in t)if(t.hasOwnProperty(s)&&/^0$|^[1-9]\d*$/.test(s)&&s<=4294967294){var a=t[s];"asset"===a.attributes.type&&null!==a.attributes.account_role&&(a.attributes.account_role=this.$t("firefly.account_role_"+a.attributes.account_role)),"asset"===a.attributes.type&&null===a.attributes.account_role&&(a.attributes.account_role=this.$t("firefly.Default asset account")),null===a.attributes.iban&&(a.attributes.iban=a.attributes.account_number),this.accounts.push(a)}}}},o=Object(c.a)(r,(function(){var t=this,s=t.$createElement,a=t._self._c||s;return a("div",{staticClass:"row"},[a("div",{staticClass:"col-lg-12 col-md-12 col-sm-12 col-xs-12"},[a("div",{staticClass:"card"},[t._m(0),t._v(" "),a("div",{staticClass:"card-body p-0"},[a("table",{staticClass:"table table-sm table-striped"},[a("thead",[a("tr",[a("th",[t._v(" ")]),t._v(" "),a("th",[t._v(t._s(t.$t("list.name")))]),t._v(" "),"asset"===t.$props.accountTypes?a("th",[t._v(t._s(t.$t("list.role")))]):t._e(),t._v(" "),a("th",[t._v(t._s(t.$t("list.iban")))]),t._v(" "),a("th",{staticStyle:{"text-align":"right"}},[t._v(t._s(t.$t("list.currentBalance")))]),t._v(" "),a("th",[t._v(t._s(t.$t("list.balanceDiff")))])])]),t._v(" "),a("tbody",t._l(t.accounts,(function(s){return a("tr",[t._m(1,!0),t._v(" "),a("td",[a("router-link",{attrs:{to:{name:"accounts.show",params:{id:s.id}},title:s.attributes.name}},[t._v(t._s(s.attributes.name)+"\n                            ")])],1),t._v(" "),"asset"===t.$props.accountTypes?a("td",[t._v("\n                            "+t._s(s.attributes.account_role)+"\n                        ")]):t._e(),t._v(" "),a("td",[t._v("\n                            "+t._s(s.attributes.iban)+"\n                        ")]),t._v(" "),a("td",{staticStyle:{"text-align":"right"}},[t._v("\n                            "+t._s(Intl.NumberFormat("en-US",{style:"currency",currency:s.attributes.currency_code}).format(s.attributes.current_balance))+"\n                        ")]),t._v(" "),a("td",[t._v("diff")])])})),0)])]),t._v(" "),a("div",{staticClass:"card-footer"},[t._v("\n                Footer stuff.\n            ")])])])])}),[function(){var t=this.$createElement,s=this._self._c||t;return s("div",{staticClass:"card-header"},[s("h3",{staticClass:"card-title"},[this._v("Title thing")]),this._v(" "),s("div",{staticClass:"card-tools"},[s("div",{staticClass:"input-group input-group-sm",staticStyle:{width:"150px"}},[s("input",{staticClass:"form-control float-right",attrs:{type:"text",name:"table_search",placeholder:"Search"}}),this._v(" "),s("div",{staticClass:"input-group-append"},[s("button",{staticClass:"btn btn-default",attrs:{type:"submit"}},[s("i",{staticClass:"fas fa-search"})])])])])])},function(){var t=this.$createElement,s=this._self._c||t;return s("td",[s("div",{staticClass:"btn-group btn-group-xs"},[s("a",{staticClass:"btn btn-xs btn-default",attrs:{href:"edit"}},[s("i",{staticClass:"fa fas fa-pencil-alt"})]),this._v(" "),s("a",{staticClass:"btn btn-xs btn-danger",attrs:{href:"del"}},[s("i",{staticClass:"fa far fa-trash"})])])])}],!1,null,"27a44b66",null).exports,u={name:"Show"},l=Object(c.a)(u,(function(){var t=this.$createElement;return(this._self._c||t)("div",[this._v("\n    I am a show\n")])}),[],!1,null,"dcd61a50",null).exports;a(156);var p=[{path:"/",component:i},{path:"/accounts/asset",name:"accounts.index.asset",component:o,props:{accountTypes:"asset"}},{path:"/accounts/expense",component:o,props:{accountTypes:"expense"}},{path:"/accounts/revenue",component:o,props:{accountTypes:"revenue"}},{path:"/accounts/liabilities",component:o,props:{accountTypes:"liabilities"}},{path:"/accounts/show/:id",name:"accounts.show",component:l}],_=new e.a({mode:"history",routes:p}),d=a(154),h={};Vue.use(e.a),new Vue({router:_,i18n:d,render:function(t){return t(i,{props:h})}}).$mount("#accounts")}},[[206,0,1]]]);
//# sourceMappingURL=accounts.js.map