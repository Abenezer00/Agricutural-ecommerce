(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[2353],{70151:function(e,t,r){var n=r(278),a=r(73480);e.exports=function(e){return a(n(e))}},69877:function(e){var t=Math.floor,r=Math.random;e.exports=function(e,n){return e+t(r()*(n-e+1))}},25127:function(e,t,r){var n=r(73480),a=r(52628);e.exports=function(e){return n(a(e))}},47415:function(e,t,r){var n=r(29932);e.exports=function(e,t){return n(t,(function(t){return e[t]}))}},278:function(e){e.exports=function(e,t){var r=-1,n=e.length;for(t||(t=Array(n));++r<n;)t[r]=e[r];return t}},73480:function(e,t,r){var n=r(69877);e.exports=function(e,t){var r=-1,a=e.length,l=a-1;for(t=void 0===t?a:t;++r<t;){var i=n(r,l),s=e[i];e[i]=e[r],e[r]=s}return e.length=t,e}},69983:function(e,t,r){var n=r(70151),a=r(25127),l=r(1469);e.exports=function(e){return(l(e)?n:a)(e)}},52628:function(e,t,r){var n=r(47415),a=r(3674);e.exports=function(e){return null==e?[]:n(e,a(e))}},95046:function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/refined",function(){return r(2494)}])},49412:function(e,t,r){"use strict";var n=r(85893),a=r(96872),l=r(25675),i=r(16740),s=r(94184),o=r.n(s);t.Z=function(e){var t,r=e.banner,s=e.className,c=e.variant,u=void 0===c?"default":c,d=e.effectActive,m=void 0===d||d,h=e.classNameInner,x=(0,i.Z)().width,p=r.slug,g=r.title,b=r.image,f=(t=b,x<480?t.mobile:t.desktop);return(0,n.jsx)("div",{className:o()("mx-auto",s),children:(0,n.jsxs)(a.Z,{href:p,className:o()("h-full group flex justify-center relative overflow-hidden",h),children:[(0,n.jsx)(l.default,{src:f.url,width:f.width,height:f.height,alt:g,quality:100,className:o()("bg-fill-thumbnail object-cover w-full",{"rounded-md":"rounded"===u})}),m&&(0,n.jsx)("div",{className:"absolute top-0 block w-1/2 h-full transform -skew-x-12 ltr:-left-full rtl:-right-full z-5 bg-gradient-to-r from-transparent to-white opacity-30 group-hover:animate-shine"})]})})}},68997:function(e,t,r){"use strict";r.d(t,{Z:function(){return w}});var n=r(85893),a=r(15239),l=r(13123),i=r(11163),s=r(94184),o=r.n(s),c=r(51649),u=r(78126),d=r(67294),m=r(63879),h=r(20868);function x(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function p(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){x(e,t,r[t])}))}return e}function g(e,t){if(null==e)return{};var r,n,a=function(e,t){if(null==e)return{};var r,n,a={},l=Object.keys(e);for(n=0;n<l.length;n++)r=l[n],t.indexOf(r)>=0||(a[r]=e[r]);return a}(e,t);if(Object.getOwnPropertySymbols){var l=Object.getOwnPropertySymbols(e);for(n=0;n<l.length;n++)r=l[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(a[r]=e[r])}return a}function b(e){var t,r,a=e.className,l=e.item,s=e.depth,x=void 0===s?0:s,f=(0,h.$G)("common").t,v=(0,i.useRouter)(),y=null===v||void 0===v||null===(t=v.query)||void 0===t?void 0:t.category,w=y===l.slug||(null===l||void 0===l||null===(r=l.children)||void 0===r?void 0:r.some((function(e){return e.slug===y}))),j=(0,d.useState)(w),N=j[0],S=j[1];(0,d.useEffect)((function(){S(w)}),[w]);var k,O=l.slug,P=l.name,I=l.children,_=l.icon,T=(0,u.l8)(),A=T.displaySidebar,E=T.closeSidebar;return Array.isArray(I)&&I.length&&(k=N?(0,n.jsx)(c.Vmf,{className:"text-base text-brand-dark text-opacity-40"}):(0,n.jsx)(c.OId,{className:"text-base text-brand-dark text-opacity-40"})),(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)("li",{onClick:function(){if(Array.isArray(I)&&I.length)S((function(e){return!e}));else{var e=v.pathname,t=v.query,r=(t.type,g(t,["type"]));v.push({pathname:e,query:p({},r,{category:O})},void 0,{scroll:!1}),A&&E()}},className:"flex justify-between items-center transition ".concat(a||"text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3"," ").concat(N?"bg-fill-base":"text-brand-dark text-opacity-70"),children:(0,n.jsxs)("button",{className:o()("flex items-center w-full ltr:text-left rtl:text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark"),children:[_&&(0,n.jsx)("div",{className:"inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto",children:(0,n.jsx)(m.Z,{src:null!==_&&void 0!==_?_:"/assets/placeholder/category-small.svg",alt:P||f("text-category-thumbnail"),width:40,height:40})}),(0,n.jsx)("span",{className:"text-brand-dark group-hover:text-opacity-80 capitalize ltr:pl-2.5 rtl:pr-2.5 md:ltr:pl-4 md:rtl:pr-4 2xl:ltr:pl-3 2xl:rtl:pr-3 3xl:ltr:pl-4 3xl:rtl:pr-4",children:P}),(0,n.jsx)("span",{className:"ltr:ml-auto rtl:mr-auto",children:k})]})}),Array.isArray(I)&&N?(0,n.jsx)("li",{children:(0,n.jsx)("ul",{className:"py-3 text-xs border-t border-border-base",children:null===I||void 0===I?void 0:I.map((function(e){var t=x+1;return(0,n.jsx)(b,{item:e,depth:t,className:o()("text-sm ltr:pl-14 rtl:pr-14 py-2.5 ltr:pr-4 rtl:pl-4")},"".concat(e.name).concat(e.slug))}))},"content")}):null]})}var f=function(e){var t=e.items,r=e.className;return(0,n.jsx)("ul",{className:o()(r),children:null===t||void 0===t?void 0:t.map((function(e){return(0,n.jsx)(b,{item:e},"".concat(e.slug,"-key-").concat(e.id))}))})},v=r(72558),y=r(4937),w=function(e){var t,r,i,s=e.className,c=(0,y.E)({limit:10}),u=c.data,d=c.isLoading,m=c.error;return(0,n.jsx)("aside",{className:o()("category-mobile-sidebar",s),children:(0,n.jsx)("div",{className:"max-h-full overflow-hidden border rounded border-border-base",children:m?(0,n.jsx)("div",{className:"2xl:ltr:pr-4 2xl:rtl:pl-4",children:(0,n.jsx)(a.Z,{message:m.message})}):(0,n.jsx)(l.Z,{className:"w-full h-full category-scrollbar",children:d&&!(null===u||void 0===u||null===(t=u.categories)||void 0===t||null===(r=t.data)||void 0===r?void 0:r.length)?Array.from({length:15}).map((function(e,t){return(0,n.jsx)(v.Z,{uniqueKey:"category-list-card-loader"},"category-list-".concat(t))})):(0,n.jsx)(f,{items:null===u||void 0===u||null===(i=u.categories)||void 0===i?void 0:i.data})})})})}},9823:function(e,t,r){"use strict";var n=r(85893),a=r(63879),l=r(94184),i=r.n(l),s=r(96872),o=r(20868),c="app-heading",u="app-description",d="/assets/images/app-bg.png",m="/assets/images/app-thumbnail-2.png",h=[{id:1,slug:"/#",altText:"button-app-store",appButton:"/assets/images/app-store.png",buttonWidth:170,buttonHeight:56},{id:2,slug:"/#",altText:"button-play-store",appButton:"/assets/images/play-store.png",buttonWidth:170,buttonHeight:56}];t.Z=function(e){var t=e.className,r=void 0===t?"pt-1.5 md:pt-0":t,l=h,x=c,p=u,g=m,b=d,f=(0,o.$G)("common").t;return(0,n.jsx)("div",{className:i()("bg-fill-two overflow-hidden bg-cover bg-top",r),style:{backgroundImage:"url(".concat(b,")")},children:(0,n.jsxs)("div",{className:"max-w-[1920px] mx-auto px-4 sm:px-5 md:px-6 lg:px-16 xl:px-28 2xl:px-32 3xl:px-40 md:flex justify-between",children:[(0,n.jsx)("div",{className:"shrink-0 mx-auto md:ltr:ml-0 md:rtl:mr-0 lg:flex lg:items-center pb-5 pt-1.5 md:pt-4 max-w-[350px] md:max-w-[340px] lg:max-w-[485px] xl:max-w-[540px] 2xl:max-w-[680px] 3xl:ltr:pl-10 3xl:rtl:pr-10",children:(0,n.jsxs)("div",{className:"py-8 mb-1 text-center xl:py-10 2xl:py-16 md:ltr:text-left md:rtl:text-right",children:[(0,n.jsx)("h2",{className:"text-[22px] md:text-2xl lg:text-3xl xl:text-4xl 2xl:text-[42px] leading-9 lg:leading-[1.4em] xl:leading-[1.45em] text-brand-dark font-bold font-manrope -tracking-[0.2px] mb-3 lg:mb-4",children:f(x)}),(0,n.jsx)("p",{className:"text-15px xl:text-base 2xl:text-[17px] leading-7 xl:leading-9 text-brand-dark text-opacity-70 pb-5 lg:pb-7 ltr:pr-0 rtl:pl-0 xl:ltr:pr-8 xl:rtl:pl-8 2xl:ltr:pr-20 2xl:rtl:pl-20",children:f(p)}),(0,n.jsx)("div",{className:"flex justify-center md:justify-start -mx-1 md:-mx-1.5 pt-0.5 px-7 sm:px-0",children:null===l||void 0===l?void 0:l.map((function(e){return(0,n.jsx)(s.Z,{href:e.slug,className:"inline-flex transition duration-200 ease-in hover:box-shadow hover:opacity-80 mx-1 md:mx-1.5",children:(0,n.jsx)(a.Z,{src:e.appButton,alt:f(e.altText),className:"rounded-md w-36 lg:w-44 xl:w-auto",width:e.buttonWidth,height:e.buttonHeight})},e.id)}))})]})}),(0,n.jsx)("div",{className:"hidden md:flex items-end ltr:pl-4 rtl:pr-4 2xl:ltr:pl-0 2xl:rtl:pr-0 md:max-w-[450px] lg:max-w-[660px] xl:max-w-auto ltr:-mr-10 rtl:-ml-10 lg:ltr:-mr-16 lg:rtl:-ml-16 xl:ltr:-mr-10 xl:rtl:-ml-10 3xl:ltr:mr-7 3xl:rtl:ml-7",children:(0,n.jsx)(a.Z,{src:g,alt:f("text-app-thumbnail"),width:660,height:465,quality:100})})]})})}},26003:function(e,t,r){"use strict";var n=r(85893),a=r(20868),l=r(94184),i=r.n(l),s=r(58448),o=r(49732);t.Z=function(e){var t=e.sectionHeading,r=void 0===t?"text-section-title":t,l=e.sectionSubHeading,c=e.className,u=void 0===c?"pb-0.5 mb-5 xl:mb-6":c,d=e.headingPosition,m=void 0===d?"left":d,h=(0,a.$G)("common").t;return(0,n.jsxs)("div",{className:i()("-mt-1.5 ".concat(u),{"text-center pb-2 lg:pb-3 xl:pb-4 3xl:pb-7":"center"===m}),children:[(0,n.jsx)(s.Z,{variant:"heading",className:i()({"3xl:text-[25px] 3xl:leading-9":"center"===m}),children:h(r)}),l&&"center"===m&&(0,n.jsx)(o.Z,{variant:"medium",className:"pb-0.5 mt-1.5 lg:mt-2.5 xl:mt-3",children:h(l)})]})}},7792:function(e,t,r){"use strict";r.d(t,{Z:function(){return p}});var n=r(85893),a=r(94184),l=r.n(a),i=r(63879),s=r(9627),o=r(18921),c=r(98130),u=r(45764),d=r(20868),m=function(e){var t=e.soldProduct,r=void 0===t?0:t,a=e.totalProduct,l=void 0===a?0:a,i=e.className,s=void 0===i?"":i,o=100/l*r,c=(0,d.$G)("common").t;return(0,n.jsxs)("div",{className:"w-full ".concat(s),children:[(0,n.jsx)("div",{className:"relative w-full h-2.5 lg:h-3 bg-fill-three rounded-full overflow-hidden",children:(0,n.jsx)("div",{className:"absolute h-full bg-yellow-200 bg-opacity-90 rounded-full bg-progress-striped",style:{width:"".concat(Math.round(o),"%")}})}),(0,n.jsxs)("div",{className:"flex justify-between items-center mt-2.5 md:mt-3 xl:mt-2.5 2xl:mt-3.5",children:[(0,n.jsxs)("div",{className:"text-brand-dark text-opacity-60 text-13px sm:text-sm lg:text-15px leading-6 md:leading-7",children:[c("text-sold")," :\xa0",(0,n.jsxs)("span",{className:"text-brand-dark font-medium",children:[r," ",c("text-items")]})]}),(0,n.jsxs)("div",{className:"text-brand-dark text-opacity-60 text-13px sm:text-sm lg:text-15px leading-6 md:leading-7",children:[c("text-available")," :\xa0",(0,n.jsxs)("span",{className:"text-brand-dark font-medium",children:[l-r," ",c("text-items")]})]})]})]})},h=r(31567),x=function(e){var t=e.days,r=e.hours,a=e.minutes,l=e.seconds;return e.completed?null:(0,n.jsxs)("span",{className:"flex items-center justify-center text-base xl:text-lg text-brand-dark text-opacity-50 font-semibold -mx-2.5",children:[(0,n.jsx)("span",{className:"flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-fill-three text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5",children:(0,c.Bu)(t)}),":",(0,n.jsx)("span",{className:"flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-fill-three text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5",children:(0,c.Bu)(r)}),":",(0,n.jsx)("span",{className:"flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-fill-three text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5",children:(0,c.Bu)(a)}),":",(0,n.jsx)("span",{className:"flex items-center justify-center min-w-[40px] md:min-w-[50px] min-h-[36px] md:min-h-[40px] bg-fill-three text-brand-dark rounded p-1 mx-1 md:mx-1.5 lg:mx-2.5",children:(0,c.Bu)(l)})]})},p=function(e){var t,r,a,d=e.product,p=e.className,g=e.date,b=null!==d&&void 0!==d?d:{},f=b.name,v=b.image,y=b.quantity,w=b.sold,j=b.product_type,N=(0,o.SO)().openModal,S=(0,h.$)("common").t,k=(0,s.ZP)({amount:(null===d||void 0===d?void 0:d.sale_price)?null===d||void 0===d?void 0:d.sale_price:null===d||void 0===d?void 0:d.price,baseAmount:null===d||void 0===d?void 0:d.price,currencyCode:"USD"}),O=k.price,P=k.basePrice,I=(0,s.ZP)({amount:null!==(t=null===d||void 0===d?void 0:d.min_price)&&void 0!==t?t:0,currencyCode:"USD"}).price,_=(0,s.ZP)({amount:null!==(r=null===d||void 0===d?void 0:d.max_price)&&void 0!==r?r:0,currencyCode:"USD"}).price;return(0,n.jsxs)("article",{className:l()("flex flex-col justify-between group cursor-pointer relative px-5 lg:px-7 pt-4 lg:pt-5 pb-6 lg:pb-8",p),onClick:function(){N("PRODUCT_VIEW",d)},title:f,children:[(0,n.jsxs)("div",{className:"",children:[(0,n.jsxs)("div",{className:"relative shrink-0",children:[(0,n.jsx)("div",{className:"relative flex justify-center mx-auto overflow-hidden",children:(0,n.jsx)(i.Z,{src:null!==(a=null===v||void 0===v?void 0:v.original)&&void 0!==a?a:u.Hb,alt:f||"Product Image",width:350,height:350,quality:100,className:"object-cover bg-fill-thumbnail"})}),(0,n.jsx)("div",{className:"w-full h-full absolute top-0 z-10 -mx-0.5 sm:-mx-1",children:(0,n.jsx)("span",{className:"text-[11px] md:text-xs font-bold text-brand-light uppercase inline-block bg-[#fd5473] rounded-full px-2.5 py-[5px] pb-1 mx-0.5 sm:mx-1",children:S("text-most-popular")})})]}),(0,n.jsxs)("div",{className:"flex flex-col pb-5 lg:pb-6 mb-0.5 lg:pt-3 h-full text-center",children:[(0,n.jsxs)("div",{className:"-mx-1 mb-1 lg:mb-2.5",children:[(0,n.jsx)("span",{className:"inline-block mx-1 text-xl font-semibold xl:text-2xl text-brand-dark",children:"variable"===j?"".concat(I," - ").concat(_):O}),P&&(0,n.jsx)("del",{className:"mx-1 text-base text-opacity-50 xl:text-lg text-brand-dark",children:P})]}),(0,n.jsx)("h2",{className:"text-sm leading-5 text-brand-dark lg:text-15px xl:text-base sm:leading-6",children:f})]})]}),(0,n.jsx)(c.ZP,{date:g,intervalDelay:1e3,renderer:x}),(0,n.jsx)(m,{soldProduct:w,totalProduct:y,className:"pt-8 lg:pt-10"})]})}},89183:function(e,t,r){"use strict";var n=r(85893),a=r(2962);t.Z=function(e){var t=e.title,r=e.description,l=e.path;return(0,n.jsx)(a.PB,{title:t,description:r,openGraph:{url:"".concat("https://borobazar.vercel.app/","/").concat(l),title:t,description:r,images:[{url:"/assets/images/og-image-01.png",width:800,height:600,alt:"Og Image Alt"},{url:"/assets/images/og-image-02.png",width:900,height:800,alt:"Og Image Alt Second"}]}})}},72558:function(e,t,r){"use strict";var n=r(85893),a=r(24561);function l(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}t.Z=function(e){return(0,n.jsxs)(a.ZP,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){l(e,t,r[t])}))}return e}({speed:2,width:389,height:88,viewBox:"0 0 389 88",backgroundColor:"#f9f9f9",foregroundColor:"#ecebeb",className:"rounded-md w-full"},e,{children:[(0,n.jsx)("circle",{cx:"43",cy:"45",r:"30"}),(0,n.jsx)("rect",{x:"88",y:"40",rx:"3",ry:"3",width:"96",height:"8"}),(0,n.jsx)("rect",{x:"350",y:"34",rx:"3",ry:"3",width:"20",height:"20"})]}))}},4937:function(e,t,r){"use strict";r.d(t,{E:function(){return m}});var n=r(34051),a=r.n(n),l=r(75402),i=r(34758),s=r(88767);function o(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function c(e,t,r,n,a,l,i){try{var s=e[l](i),o=s.value}catch(c){return void r(c)}s.done?t(o):Promise.resolve(o).then(n,a)}function u(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,l=[],i=!0,s=!1;try{for(r=r.call(e);!(i=(n=r.next()).done)&&(l.push(n.value),!t||l.length!==t);i=!0);}catch(o){s=!0,a=o}finally{try{i||null==r.return||r.return()}finally{if(s)throw a}}return l}}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return o(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return o(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var d=function(){var e,t=(e=a().mark((function e(t){var r,n,s,o;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.queryKey,(n=u(r,2))[0],n[1],e.next=4,l.Z.get(i.P.CATEGORIES);case 4:return s=e.sent,o=s.data.data,e.abrupt("return",{categories:{data:o}});case 7:case"end":return e.stop()}}),e)})),function(){var t=this,r=arguments;return new Promise((function(n,a){var l=e.apply(t,r);function i(e){c(l,n,a,i,s,"next",e)}function s(e){c(l,n,a,i,s,"throw",e)}i(void 0)}))});return function(e){return t.apply(this,arguments)}}(),m=function(e){return(0,s.useQuery)([i.P.CATEGORIES,e],d)}},23833:function(e,t,r){"use strict";r.d(t,{k:function(){return x}});var n=r(34051),a=r.n(n),l=r(34758),i=r(75402),s=r(69983),o=r.n(s),c=r(88767);function u(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function d(e,t,r,n,a,l,i){try{var s=e[l](i),o=s.value}catch(c){return void r(c)}s.done?t(o):Promise.resolve(o).then(n,a)}function m(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,l=[],i=!0,s=!1;try{for(r=r.call(e);!(i=(n=r.next()).done)&&(l.push(n.value),!t||l.length!==t);i=!0);}catch(o){s=!0,a=o}finally{try{i||null==r.return||r.return()}finally{if(s)throw a}}return l}}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return u(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return u(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var h=function(){var e,t=(e=a().mark((function e(t){var r,n,s;return a().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.queryKey,(n=m(r,2))[0],n[1],e.next=4,i.Z.get(l.P.PRODUCTS);case 4:return s=e.sent.data,e.abrupt("return",{data:o()(s),paginatorInfo:{nextPageUrl:""}});case 6:case"end":return e.stop()}}),e)})),function(){var t=this,r=arguments;return new Promise((function(n,a){var l=e.apply(t,r);function i(e){d(l,n,a,i,s,"next",e)}function s(e){d(l,n,a,i,s,"throw",e)}i(void 0)}))});return function(e){return t.apply(this,arguments)}}(),x=function(e){return(0,c.useInfiniteQuery)([l.P.PRODUCTS,e],h,{getNextPageParam:function(e){return e.paginatorInfo.nextPageUrl}})}},94808:function(e,t,r){"use strict";r.d(t,{VY:function(){return n},mk:function(){return a},nP:function(){return l},_t:function(){return i},B$:function(){return s},u$:function(){return o},GT:function(){return c},w1:function(){return u},TR:function(){return d},yV:function(){return m},od:function(){return h},U_:function(){return x},p1:function(){return p},uY:function(){return g}});var n={id:1,title:"Store Of Fresh Quality Meat",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-6.png",width:450,height:370},desktop:{url:"/assets/images/banner/banner-6.png",width:1460,height:400}}},a=[{id:1,title:"Try Fresh Healthy Breakfast on Morning",slug:"/search",type:"medium",image:{mobile:{url:"/assets/images/banner/banner-mobile-10.png",width:450,height:465},desktop:{url:"/assets/images/banner/banner-10.png",width:1190,height:500}}},{id:2,title:"Today best deal",slug:"/search",type:"small",image:{mobile:{url:"/assets/images/banner/banner-mobile-11.png",width:450,height:465},desktop:{url:"/assets/images/banner/banner-11.png",width:740,height:500}}}],l=[{id:1,title:"Free delivery from your store",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-1.png",width:450,height:222},desktop:{url:"/assets/images/banner/banner-1.png",width:910,height:450}}},{id:2,title:"Fresh Healthy Breakfast food",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-2.png",width:450,height:222},desktop:{url:"/assets/images/banner/banner-2.png",width:910,height:450}}}],i=[{id:1,title:"Have a Safe Delivery",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-8.png",width:450,height:440},desktop:{url:"/assets/images/banner/banner-8.png",width:905,height:420}}},{id:2,title:"Let's stop Covid-19",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-9.png",width:450,height:440},desktop:{url:"/assets/images/banner/banner-9.png",width:905,height:420}}}],s=[{id:1,title:"Free delivery from your store",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-1.png",width:450,height:220},desktop:{url:"/assets/images/banner/banner-medium-1.png",width:720,height:390}}},{id:2,title:"Fresh Healthy Breakfast food",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-2.png",width:450,height:220},desktop:{url:"/assets/images/banner/banner-medium-2.png",width:720,height:390}}}],o=[{id:1,title:"Love Spice Food",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-3.png",width:450,height:255},desktop:{url:"/assets/images/banner/banner-3.png",width:597,height:340}}},{id:2,title:"Amazing Pet Food",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-4.png",width:450,height:255},desktop:{url:"/assets/images/banner/banner-4.png",width:597,height:340}}},{id:3,title:"Your Perfect Diet",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-5.png",width:450,height:255},desktop:{url:"/assets/images/banner/banner-5.png",width:597,height:340}}}],c=[{id:1,title:"banner-meat-needs-title",description:"banner-healthy-vegetable-description",btnText:"text-explore-more",btnUrl:"/search",image:{mobile:{url:"/assets/images/hero/banner-mobile-1.png"},desktop:{url:"/assets/images/hero/banner-1.png"}}},{id:2,title:"banner-meat-needs-title",description:"banner-healthy-vegetable-description",btnText:"text-explore-more",btnUrl:"/search",image:{mobile:{url:"/assets/images/hero/banner-1.png"},desktop:{url:"/assets/images/hero/banner-1.png"}}},{id:3,title:"banner-meat-needs-title",description:"banner-healthy-vegetable-description",btnText:"text-explore-more",btnUrl:"/search",image:{mobile:{url:"/assets/images/hero/banner-1.png"},desktop:{url:"/assets/images/hero/banner-1.png"}}}],u={id:1,title:"Healthy Vegetable that you Deserve to Eat Fresh",description:"We source and sell the very best beef, lamb and pork, sourced with the greatest care from farmer.",searchBox:!0,image:{mobile:{url:"/assets/images/hero/banner-mobile-2.png"},desktop:{url:"/assets/images/hero/banner-2.png"}}},d={id:1,title:"banner-thousand-grocery-title",description:"banner-thousand-grocery-title-description",searchBox:!0,image:{mobile:{url:"/assets/images/hero/banner-3.png"},desktop:{url:"/assets/images/hero/banner-3.png"}}},m={id:1,title:"banner-healthy-vegetable-title",description:"banner-healthy-vegetable-description",searchBox:!0,image:{mobile:{url:"/assets/images/hero/banner-mobile-4.png"},desktop:{url:"/assets/images/hero/banner-4.webp"}}},h=[{id:1,title:"Love Spice Food",slug:"/search",image:{mobile:{url:"/assets/images/hero/banner-mobile-5.png",width:450,height:520},desktop:{url:"/assets/images/hero/banner-5.png",width:1840,height:370}}},{id:2,title:"Amazing Pet Food",slug:"/search",image:{mobile:{url:"/assets/images/hero/banner-mobile-6.png",width:450,height:520},desktop:{url:"/assets/images/hero/banner-6.png",width:1840,height:370}}}],x=[{id:1,title:"Up to RM10 rebate on groceries!",slug:"/search",image:{mobile:{url:"/assets/images/banner/discount/banner-1.png",width:475,height:250},desktop:{url:"/assets/images/banner/discount/banner-1.png",width:475,height:250}}},{id:2,title:"Up to 50% off",slug:"/search",image:{mobile:{url:"/assets/images/banner/discount/banner-2.png",width:475,height:250},desktop:{url:"/assets/images/banner/discount/banner-2.png",width:475,height:250}}},{id:3,title:"Green tea now with Immunity power",slug:"/search",image:{mobile:{url:"/assets/images/banner/discount/banner-3.png",width:475,height:250},desktop:{url:"/assets/images/banner/discount/banner-3.png",width:475,height:250}}},{id:4,title:"Delight your summers",slug:"/search",image:{mobile:{url:"/assets/images/banner/discount/banner-4.png",width:475,height:250},desktop:{url:"/assets/images/banner/discount/banner-4.png",width:475,height:250}}},{id:5,title:"Grocery Sale",slug:"/search",image:{mobile:{url:"/assets/images/banner/discount/banner-5.png",width:475,height:250},desktop:{url:"/assets/images/banner/discount/banner-5.png",width:475,height:250}}}],p={id:1,title:"Super Discount 70% Off",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-mobile-7.png",width:450,height:400},desktop:{url:"/assets/images/banner/banner-7.png",width:1840,height:400}}},g={id:1,title:"Today's best deal",slug:"/search",image:{mobile:{url:"/assets/images/banner/banner-12.jpg",width:450,height:960},desktop:{url:"/assets/images/banner/banner-12.jpg",width:385,height:960}}}},64251:function(e,t,r){"use strict";r.d(t,{b:function(){return n}});var n={CATEGORIES_LIMITS:18,PRODUCTS_LIMITS:30,REFINED_PRODUCTS_LIMITS:20,RELATED_PRODUCTS_LIMITS:15,BEST_SELLER_PRODUCTS_LIMITS:15,BEST_SELLER_GROCERY_PRODUCTS_LIMITS:21,POPULAR_PRODUCTS_LIMITS:14,POPULAR_PRODUCTS_TWO_LIMITS:10,COOKIES_PRODUCTS_LIMITS:15,CHIPS_PRODUCTS_LIMITS:15,POPCORN_JERKY_PRODUCTS_LIMITS:15,FRESH_VEGETABLES_PRODUCTS_LIMITS:15}},2494:function(e,t,r){"use strict";r.r(t),r.d(t,{__N_SSG:function(){return ie},default:function(){return se}});var n=r(85893),a=r(28817),l=r(96872),i=r(74723),s=r(67294),o=r(5152),c=r(20868),u=r(68139),d=r(78126),m=r(53577),h=r(89146),x=r(57310),p=r(33865),g=r(56581),b=r(41777),f=r(18921),v=r(94184),y=r.n(v),w=r(32131),j=(0,o.default)((function(){return r.e(5395).then(r.bind(r,65395))}),{loadableGenerated:{webpack:function(){return[65395]}},ssr:!1}),N=(0,o.default)((function(){return r.e(2545).then(r.bind(r,32545))}),{loadableGenerated:{webpack:function(){return[32545]}},ssr:!1}),S=function(){var e=(0,d.l8)(),t=e.openSidebar,r=e.isAuthorized,a=e.displayMobileSearch,l=(0,f.SO)().openModal,i=(0,c.$G)("common").t,o=(0,s.useRef)();return(0,m.V)(o),(0,n.jsx)("header",{id:"siteHeader",ref:o,className:y()("header-one w-full h-16 lg:h-20 z-30 sticky -top-0.5",a&&"active-mobile-search"),children:(0,n.jsxs)("div",{className:"z-20 w-full h-16 transition duration-200 ease-in-out border-b bg-brand-light innerSticky body-font text-brand-muted lg:h-20 border-border-base",children:[(0,n.jsx)(w.Z,{className:"top-bar-search lg:max-w-[600px] absolute z-30 px-4 md:px-6 top-1"}),(0,n.jsxs)(h.Z,{className:"flex items-center justify-between w-full h-full lg:justify-center",children:[(0,n.jsx)("button",{"aria-label":"Menu",className:"flex-col items-center justify-center hidden outline-none menuBtn ltr:mr-5 rtl:ml-5 lg:flex shrink-0 focus:outline-none",onClick:function(){return t()},children:(0,n.jsx)(g.Z,{})}),(0,n.jsx)(x.Z,{className:"-mt-1"}),(0,n.jsx)(w.Z,{searchId:"top-bar-search",className:"hidden lg:flex lg:max-w-[650px] 2xl:max-w-[700px] ltr:ml-7 rtl:mr-7 ltr:mr-4 rtl:ml-4 xl:ltr:ml-auto xl:rtl:mr-auto",variant:"fill"}),(0,n.jsx)("div",{className:"ltr:ml-auto rtl:mr-auto",children:(0,n.jsxs)("div",{className:"flex shrink-0 -mx-2.5 xl:-mx-3.5",children:[(0,n.jsx)("div",{className:"xl:mx-3.5 mx-2.5",children:(0,n.jsx)(b.Z,{})}),(0,n.jsx)(N,{className:"hidden lg:flex xl:mx-3.5 mx-2.5"}),(0,n.jsxs)("div",{className:"items-center hidden lg:flex shrink-0 xl:mx-3.5 mx-2.5",children:[(0,n.jsx)(p.Z,{className:"text-brand-dark text-opacity-40"}),(0,n.jsx)(j,{isAuthorized:r,href:u.Z.ACCOUNT,btnProps:{children:i("text-sign-in"),onClick:function(){l("LOGIN_VIEW")}},children:i("text-account")})]})]})})]})]})})},k=r(94643),O=r(27850),P=r(60155);function I(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function _(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,l=[],i=!0,s=!1;try{for(r=r.call(e);!(i=(n=r.next()).done)&&(l.push(n.value),!t||l.length!==t);i=!0);}catch(o){s=!0,a=o}finally{try{i||null==r.return||r.return()}finally{if(s)throw a}}return l}}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return I(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return I(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var T=function(e){var t=e.children,r=(0,c.$G)("common").t,s=_((0,a.Z)("borobazar-highlightedBar","false"),2),o=s[0],u=s[1];return(0,n.jsxs)("div",{className:"flex flex-col min-h-screen",children:["true"!==o&&(0,n.jsx)(i.Z,{onClose:function(){return u("true")},className:"text-brand-light]",children:(0,n.jsx)("div",{className:"text-sm font-medium py-0.5 ltr:pr-6 rtl:pl-6",children:(0,n.jsxs)("span",{children:[r("35% Exclusive discount plus free next day delivery, excludes sale"),(0,n.jsxs)(l.Z,{href:"#",className:"opacity-80 inline-flex text-xs uppercase font-bold ltr:pl-1.5 rtl:pr-1.5 items-center relative transition-all hover:opacity-100",children:[(0,n.jsx)("span",{className:"border-b border-brand-light inline-block pb-0.5",children:"Learn More"}),(0,n.jsx)(P.CD9,{className:"text-xl ltr:ml-1 rtl:mr-1 relative -top-0.5"})]})]})})}),(0,n.jsx)(S,{}),(0,n.jsx)("main",{className:"relative flex-grow",style:{WebkitOverflowScrolling:"touch"},children:t}),(0,n.jsx)(k.Z,{}),(0,n.jsx)(O.Z,{})]})},A=r(94808),E=r(66261),Z=r(68997),C=r(89183),R=r(49412),D=r(7792),L=r(34051),U=r.n(L),M=r(75402),F=r(34758),B=r(88767);function G(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function H(e,t,r,n,a,l,i){try{var s=e[l](i),o=s.value}catch(c){return void r(c)}s.done?t(o):Promise.resolve(o).then(n,a)}function $(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,a,l=[],i=!0,s=!1;try{for(r=r.call(e);!(i=(n=r.next()).done)&&(l.push(n.value),!t||l.length!==t);i=!0);}catch(o){s=!0,a=o}finally{try{i||null==r.return||r.return()}finally{if(s)throw a}}return l}}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return G(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return G(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var q=function(){var e,t=(e=U().mark((function e(t){var r,n,a;return U().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.queryKey,(n=$(r,2))[0],n[1],e.next=4,M.Z.get(F.P.FLASH_SELL_PRODUCTS);case 4:return a=e.sent.data,e.abrupt("return",a);case 6:case"end":return e.stop()}}),e)})),function(){var t=this,r=arguments;return new Promise((function(n,a){var l=e.apply(t,r);function i(e){H(l,n,a,i,s,"next",e)}function s(e){H(l,n,a,i,s,"throw",e)}i(void 0)}))});return function(e){return t.apply(this,arguments)}}(),z=r(64251),W=function(e){var t,r=e.className,a=(0,c.$G)("common").t,l=z.b.POPULAR_PRODUCTS_TWO_LIMITS,i=(t={limit:l},(0,B.useQuery)([F.P.FLASH_SELL_PRODUCTS,t],q)),s=i.data;i.isLoading,i.error;return(0,n.jsxs)("div",{className:y()("h-full w-full xl:w-[350px] 2xl:w-96 shrink-0 md:ltr:pl-5 md:rtl:pr-5 lg:ltr:pl-6 lg:rtl:pr-6 xl:ltr:pl-7 xl:rtl:pr-7 space-y-6 lg:space-y-8",r),children:[(0,n.jsxs)("div",{className:"h-auto overflow-hidden border-2 border-yellow-200 rounded-md 3xl:h-full shadow-card",children:[(0,n.jsx)("h2",{className:"bg-yellow-200 text-center font-bold text-brand-dark font-manrope p-2.5 text-15px lg:text-base",children:a("text-deals-of-the-week")}),(0,n.jsx)(D.Z,{product:null===s||void 0===s?void 0:s[0],date:Date.now()+24e7})]}),(0,n.jsx)(R.Z,{banner:A.uY,className:"hidden md:flex"})]})},V=r(9823),K=r(9517),Y=r(23833),Q=r(19988),J=r(26003),X=r(15239),ee=r(11163);function te(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var re=function(e){var t,r,a=e.className,l=void 0===a?"":a,i=(0,c.$G)("common").t,o=(0,ee.useRouter)().query,u=(0,Y.k)(function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){te(e,t,r[t])}))}return e}({limit:z.b.REFINED_PRODUCTS_LIMITS},o)),d=u.isFetching,m=(u.isFetchingNextPage,u.fetchNextPage,u.hasNextPage,u.data),h=u.error,x=(0,f.SO)().openModal;return(0,n.jsxs)("div",{className:y()(l),children:[(0,n.jsxs)("div",{className:"xl:hidden flex items-center justify-between pb-0.5 mb-4 lg:mb-5 xl:mb-6",children:[(0,n.jsx)(J.Z,{sectionHeading:"All Products",className:"mb-0"}),(0,n.jsx)("div",{className:"transition-all text-brand -mt-1.5 font-semibold text-sm md:text-15px hover:text-brand-dark",role:"button",onClick:function(){x("CATEGORY_VIEW")},children:i("text-categories")})]}),h?(0,n.jsx)(X.Z,{message:null===h||void 0===h?void 0:h.message}):(0,n.jsx)("div",{className:"grid grid-cols-2 gap-3 sm:grid-cols-3 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 3xl:grid-cols-4 md:gap-4 2xl:gap-5",children:d&&!(null===m||void 0===m||null===(t=m.pages)||void 0===t?void 0:t.length)?Array.from({length:z.b.REFINED_PRODUCTS_LIMITS}).map((function(e,t){return(0,n.jsx)(Q.Z,{uniqueKey:"product--key-".concat(t)},"product--key-".concat(t))})):(0,n.jsx)(n.Fragment,{children:null===m||void 0===m||null===(r=m.pages)||void 0===r?void 0:r.map((function(e,t){var r,a;return(0,n.jsx)(s.Fragment,{children:null===(a=null===e||void 0===e||null===(r=e.data)||void 0===r?void 0:r.slice(0,z.b.REFINED_PRODUCTS_LIMITS))||void 0===a?void 0:a.map((function(e){return(0,n.jsx)(K.Z,{product:e},"product--key".concat(e.id))}))},t)}))})})]})},ne=r(82857),ae=r(6557),le=function(e){var t=e.heroBanner,r=e.className,a=void 0===r?"mt-5 mb-8 xl:mb-10":r;return(0,n.jsx)("div",{className:"".concat(a),children:(0,n.jsx)(ne.default,{autoplay:!1,prevActivateId:"hero-carousel-button-prev",nextActivateId:"hero-carousel-button-next",children:null===t||void 0===t?void 0:t.map((function(e){return(0,n.jsx)(ae.o5,{children:(0,n.jsx)(R.Z,{banner:e,className:"overflow-hidden rounded-md"})},"banner--key-".concat(e.id))}))})})},ie=!0;function se(){return(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)(C.Z,{title:"Refined",description:"Fastest E-commerce template built with React, NextJS, TypeScript, React-Query and Tailwind CSS.",path:"refined"}),(0,n.jsxs)(h.Z,{children:[(0,n.jsx)(le,{heroBanner:A.od}),(0,n.jsxs)(E.W_,{name:"grid",className:"flex flex-col mb-16 md:flex-row",children:[(0,n.jsx)(Z.Z,{className:"shrink-0 ltr:pr-8 rtl:pl-8 xl:ltr:pr-10 xl:rtl:pl-10 hidden xl:block w-[350px] 2xl:w-96 lg:sticky lg:top-20"}),(0,n.jsx)(re,{className:"w-full xl:ltr:-ml-3 xl:rtl:-mr-3 3xl:ltr:-ml-1 3xl:rtl:-mr-1 3xl:ltr:pr-2 3xl:rtl:pl-2"}),(0,n.jsx)(W,{className:"w-full md:w-[300px] lg:w-[350px] mt-10 md:mt-0 md:sticky md:top-16 lg:top-20"})]})]}),(0,n.jsx)(V.Z,{})]})}se.Layout=T}},function(e){e.O(0,[9866,6351,5445,2013,260,9351,1560,1990,5595,6261,4838,7979,932,9774,2888,179],(function(){return t=95046,e(e.s=t);var t}));var t=e.O();_N_E=t}]);