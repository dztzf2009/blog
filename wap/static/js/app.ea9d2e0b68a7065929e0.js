webpackJsonp([1],{"F/vJ":function(t,e){},NHnr:function(t,e,a){"use strict";Object.defineProperty(e,"__esModule",{value:!0});var s=a("7+uW"),i={render:function(){var t=this.$createElement,e=this._self._c||t;return e("div",{attrs:{id:"app"}},[e("router-view")],1)},staticRenderFns:[]},n=a("VU/8")({name:"app"},i,!1,null,null,null).exports,o=a("/ocq"),r={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",{staticClass:"hello"},[a("h1",[t._v(t._s(t.msg))]),t._v(" "),a("h2",[t._v("Essential Links")]),t._v(" "),t._m(0),t._v(" "),a("h2",[t._v("Ecosystem")]),t._v(" "),t._m(1)])},staticRenderFns:[function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("ul",[a("li",[a("a",{attrs:{href:"https://vuejs.org",target:"_blank"}},[t._v("Core Docs")])]),t._v(" "),a("li",[a("a",{attrs:{href:"https://forum.vuejs.org",target:"_blank"}},[t._v("Forum")])]),t._v(" "),a("li",[a("a",{attrs:{href:"https://chat.vuejs.org",target:"_blank"}},[t._v("Community Chat")])]),t._v(" "),a("li",[a("a",{attrs:{href:"https://twitter.com/vuejs",target:"_blank"}},[t._v("Twitter")])]),t._v(" "),a("br"),t._v(" "),a("li",[a("a",{attrs:{href:"http://vuejs-templates.github.io/webpack/",target:"_blank"}},[t._v("Docs for This Template")])])])},function(){var t=this.$createElement,e=this._self._c||t;return e("ul",[e("li",[e("a",{attrs:{href:"http://router.vuejs.org/",target:"_blank"}},[this._v("vue-router")])]),this._v(" "),e("li",[e("a",{attrs:{href:"http://vuex.vuejs.org/",target:"_blank"}},[this._v("vuex")])]),this._v(" "),e("li",[e("a",{attrs:{href:"http://vue-loader.vuejs.org/",target:"_blank"}},[this._v("vue-loader")])]),this._v(" "),e("li",[e("a",{attrs:{href:"https://github.com/vuejs/awesome-vue",target:"_blank"}},[this._v("awesome-vue")])])])}]};a("VU/8")({name:"HelloWorld",data:function(){return{msg:"Welcome to Your Vue.js App"}}},r,!1,function(t){a("pVZD")},"data-v-d14401cc",null).exports;var c={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("swiper",{attrs:{options:t.swiperOption}},[t._l(t.slides,function(t){return a("swiper-slide",{key:t.id},[a("img",{attrs:{src:t.path}})])}),t._v(" "),a("div",{staticClass:"swiper-pagination",attrs:{slot:"pagination"},slot:"pagination"})],2),t._v(" "),a("h2",[t._v("推荐视频")]),t._v(" "),a("div",{attrs:{id:"recommend"}},t._l(t.commendLesson,function(e){return a("router-link",{key:e.id,attrs:{to:{params:{lessonId:e.id},name:"Page"}}},[a("img",{attrs:{src:e.preview}}),t._v(" "),a("i",{staticClass:"iconfont icon-bofang"}),t._v(" "),a("span",{staticClass:"time"},[t._v("22:56")]),t._v(" "),a("span",{staticClass:"title"},[t._v(t._s(e.title))])])})),t._v(" "),a("a",{staticClass:"more",attrs:{href:""}},[t._v("MORE >")]),t._v(" "),a("h2",[t._v("热门视频")]),t._v(" "),a("div",{staticClass:"today"},[a("a",{staticClass:"title",attrs:{href:""}},[t._v("大数据下的广告：精准投放与精准消除")]),t._v(" "),a("p",{staticClass:"column"},[t._v("热门视频")]),t._v(" "),a("div",{staticClass:"pic"},t._l(t.hotLesson,function(t){return a("router-link",{key:t.id,attrs:{to:{params:{lessonId:t.id},name:"Page"}}},[a("img",{attrs:{src:t.preview}})])}))]),t._v(" "),a("ul",{attrs:{id:"bottom"}},[a("li",{staticClass:"cur"},[a("router-link",{attrs:{to:"/"}},[a("i",{staticClass:"iconfont icon-shouyeshouye"}),t._v(" "),a("span",[t._v("首页")])])],1),t._v(" "),a("li",[a("router-link",{attrs:{to:"/video"}},[a("i",{staticClass:"iconfont icon-icon02"}),t._v(" "),a("span",[t._v("视频")])])],1)])],1)},staticRenderFns:[]};var l=a("VU/8")({name:"home",mounted:function(){var t=this;this.axios.get("http://web.blog.com:8080/api/commendLesson/4").then(function(e){t.commendLesson=e.data.data}),this.axios.get("http://web.blog.com:8080/api/hotLesson/4").then(function(e){t.hotLesson=e.data.data})},data:function(){return{commendLesson:[],hotLesson:[],slides:[{id:1,path:"static/images/1.jpg"},{id:2,path:"static/images/1.jpg"},{id:3,path:"static/images/1.jpg"}],swiperOption:{slidesPerView:"auto",spaceBetween:30,pagination:{el:".swiper-pagination",clickable:!0}}}}},c,!1,function(t){a("p6Ix")},"data-v-13ae329b",null).exports,v={name:"vidwo",watch:{$route:function(t,e){this.loadData()}},mounted:function(){this.loadData()},data:function(){return{tags:[],lesson:[],swiperOption:{slidesPerView:3,spaceBetween:30,pagination:{el:".swiper-pagination",clickable:!0}}}},methods:{loadData:function(){var t=this;this.axios.get("http://web.blog.com:8080/api/tags").then(function(e){t.tags=e.data.data});var e=this.$route.params.tid;this.axios.get("http://web.blog.com:8080/api/lesson/"+(e||0)).then(function(e){200!=e.data.code?alert("获取课程列表失败，请重新获取"):t.lesson=e.data.data})}}},u={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("swiper",{attrs:{options:t.swiperOption}},t._l(t.tags,function(e){return a("swiper-slide",{key:e.id},[a("router-link",{attrs:{to:{params:{tid:e.id},name:"Video"}}},[t._v(t._s(e.name))])],1)})),t._v(" "),a("ul",{attrs:{id:"videolist"}},t._l(t.lesson,function(e){return a("li",{key:e.id},[a("router-link",{staticClass:"pic",attrs:{to:{params:{lessonId:e.id},name:"Page"}}},[a("img",{attrs:{src:e.preview}}),t._v(" "),a("span",[t._v("08:26")]),t._v(" "),a("i",{staticClass:"iconfont icon-bofang"})]),t._v(" "),a("router-link",{staticClass:"title",attrs:{to:{params:{lessonId:e.id},name:"Page"}}},[t._v(t._s(e.title))])],1)})),t._v(" "),a("ul",{attrs:{id:"bottom"}},[a("li",[a("router-link",{attrs:{to:"/"}},[a("i",{staticClass:"iconfont icon-shouyeshouye"}),t._v(" "),a("span",[t._v("首页")])])],1),t._v(" "),a("li",{staticClass:"cur"},[a("router-link",{attrs:{to:"/video"}},[a("i",{staticClass:"iconfont icon-icon02"}),t._v(" "),a("span",[t._v("视频")])])],1)])],1)},staticRenderFns:[]};var p=a("VU/8")(v,u,!1,function(t){a("F/vJ")},"data-v-7be32620",null).exports,d={name:"page",mounted:function(){var t=this,e=this.$route.params.lessonId;this.axios.get("http://web.blog.com:8080/api/videos/"+e).then(function(e){200!=e.data.code?alert("获取视频列表失败，请重新获取"):(t.videos=e.data.data,t.current=t.videos[0])})},data:function(){return{current:{},videos:[]}},methods:{play:function(t){this.current=t},back:function(){this.$router.back()}}},_={render:function(){var t=this,e=t.$createElement,a=t._self._c||e;return a("div",[a("video",{attrs:{src:t.current.path,controls:"controls",poster:"static/images/510.jpg"}}),t._v(" "),a("h1",[t._v("10 导航条样式的设置")]),t._v(" "),a("ul",{attrs:{id:"list"}},t._l(t.videos,function(e){return a("li",{key:e.id},[a("a",{attrs:{href:"javascript:;"},on:{click:function(a){a.preventDefault(),t.play(e)}}},[t._v(t._s(e.title))])])})),t._v(" "),a("a",{staticClass:"iconfont back",on:{click:function(e){e.preventDefault(),t.back()}}},[t._v("")])])},staticRenderFns:[]};var h=a("VU/8")(d,_,!1,function(t){a("qvRa")},"data-v-d24617d2",null).exports;s.a.use(o.a);var m=new o.a({routes:[{path:"/",name:"Home",component:l},{path:"/video/:tid?",name:"Video",component:p},{path:"/page/:lessonId",name:"Page",component:h}]}),f=a("7QTg"),g=a.n(f),b=(a("v2ns"),a("mtWM")),k=a.n(b),w=a("Rf8U"),C=a.n(w);s.a.use(g.a),s.a.config.productionTip=!1,s.a.use(C.a,k.a),new s.a({el:"#app",router:m,template:"<App/>",components:{App:n}})},p6Ix:function(t,e){},pVZD:function(t,e){},qvRa:function(t,e){},v2ns:function(t,e){}},["NHnr"]);
//# sourceMappingURL=app.ea9d2e0b68a7065929e0.js.map