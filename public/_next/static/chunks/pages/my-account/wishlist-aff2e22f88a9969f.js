(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[8834],{71214:function(t,e,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/my-account/wishlist",function(){return r(71306)}])},89183:function(t,e,r){"use strict";var n=r(85893),a=r(2962);e.Z=function(t){var e=t.title,r=t.description,i=t.path;return(0,n.jsx)(a.PB,{title:e,description:r,openGraph:{url:"".concat("https://borobazar.vercel.app/","/").concat(i),title:e,description:r,images:[{url:"/assets/images/og-image-01.png",width:800,height:600,alt:"Og Image Alt"},{url:"/assets/images/og-image-02.png",width:900,height:800,alt:"Og Image Alt Second"}]}})}},15239:function(t,e,r){"use strict";var n=r(85893);e.Z=function(t){var e=t.message,r=t.className;return(0,n.jsx)("div",{className:"w-full h-full py-4 px-5 text-13px md:text-sm text-brand-danger font-semibold flex items-center justify-center border border-brand-danger/40 rounded ".concat(r),children:e})}},19988:function(t,e,r){"use strict";var n=r(85893),a=r(24561);function i(t,e,r){return e in t?Object.defineProperty(t,e,{value:r,enumerable:!0,configurable:!0,writable:!0}):t[e]=r,t}e.Z=function(t){return(0,n.jsxs)(a.ZP,function(t){for(var e=1;e<arguments.length;e++){var r=null!=arguments[e]?arguments[e]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(t){return Object.getOwnPropertyDescriptor(r,t).enumerable})))),n.forEach((function(e){i(t,e,r[e])}))}return t}({speed:2,width:226,height:320,viewBox:"0 0 226 320",backgroundColor:"#F3F6FA",foregroundColor:"#E7ECF3",className:"w-full h-auto shadow-card rounded-md overflow-hidden"},t,{children:[(0,n.jsx)("rect",{x:"0",y:"0",rx:"0",ry:"0",width:"226",height:"185"}),(0,n.jsx)("rect",{x:"18",y:"203",rx:"3",ry:"3",width:"79",height:"8"}),(0,n.jsx)("rect",{x:"18",y:"236",rx:"3",ry:"3",width:"195",height:"5"}),(0,n.jsx)("rect",{x:"18",y:"258",rx:"3",ry:"3",width:"100",height:"5"}),(0,n.jsx)("rect",{x:"18",y:"287",rx:"3",ry:"3",width:"79",height:"5"})]}))}},9627:function(t,e,r){"use strict";r.d(e,{ZP:function(){return i}});var n=r(67294);function a(t){var e=t.amount,r=t.currencyCode,n=t.locale;return new Intl.NumberFormat(n,{style:"currency",currency:r}).format(e)}function i(t){var e=null!==t&&void 0!==t?t:{},r=e.amount,i=e.baseAmount,l=e.currencyCode,o=(0,n.useMemo)((function(){return"number"===typeof r&&l?i?function(t){var e=t.amount,r=t.baseAmount,n=t.currencyCode,i=t.locale,l=r>e,o=new Intl.NumberFormat(i,{style:"percent"}),c=l?o.format((r-e)/r):null;return{price:a({amount:e,currencyCode:n,locale:i}),basePrice:l?a({amount:r,currencyCode:n,locale:i}):null,discount:c}}({amount:r,baseAmount:i,currencyCode:l,locale:"en"}):a({amount:r,currencyCode:l,locale:"en"}):""}),[r,i,l]);return"string"===typeof o?{price:o,basePrice:null,discount:null}:o}},71306:function(t,e,r){"use strict";r.r(e),r.d(e,{__N_SSG:function(){return C},default:function(){return A}});var n=r(85893),a=r(17653),i=r(13279),l=r(67294),o=r(63879),c=r(9627),s=r(51649),u=r(20868),d=function(t){var e,r=t.product,a=(t.className,(0,u.$G)("common").t),i=null!==r&&void 0!==r?r:{},d=i.name,m=i.image,x=i.unit,f=(0,l.useState)(!1),h=f[0],p=f[1],y=(0,c.ZP)({amount:r.sale_price?r.sale_price:r.price,baseAmount:r.price,currencyCode:"USD"}),v=y.price,b=y.basePrice,g=y.discount;return(0,n.jsxs)("div",{className:"flex flex-col py-4 border-b md:flex-row border-border-base 2xl:py-5 wishlist-card last:pb-0 first:-mt-8 lg:first:-mt-4 2xl:first:-mt-7",children:[(0,n.jsxs)("div",{className:"flex ",children:[(0,n.jsx)("div",{className:"relative mt-1 shrink-0",children:(0,n.jsx)("div",{className:"flex overflow-hidden max-w-[80px] transition duration-200 ease-in-out transform group-hover:scale-105",children:(0,n.jsx)(o.Z,{src:null!==(e=null===m||void 0===m?void 0:m.thumbnail)&&void 0!==e?e:"/assets/placeholder/product.svg",alt:d||"Product Image",width:80,height:80,quality:100,className:"object-cover bg-fill-thumbnail"})})}),(0,n.jsxs)("div",{className:"flex flex-col ltr:ml-2 rtl:mr-2 2xl:ltr:ml-3.5 2xl:rtl:mr-3.5 h-full",children:[(0,n.jsx)("h2",{className:"text-brand-dark text-13px sm:text-sm lg:text-15px leading-5 sm:leading-6 mb-1.5",children:d}),(0,n.jsx)("div",{className:"mb-1 text-13px sm:text-sm lg:mb-2",children:x}),(0,n.jsxs)("div",{className:"-mx-1",children:[(0,n.jsx)("span",{className:"inline-block mx-1 text-sm font-semibold sm:text-15px lg:text-base text-brand-dark",children:v}),g&&(0,n.jsx)("del",{className:"mx-1 text-sm text-opacity-50 text-brand-dark",children:b})]})]})]}),(0,n.jsx)("div",{className:"flex cursor-pointer ltr:ml-auto rtl:mr-auto md:pt-7",onClick:function(){p(!h)},children:h?(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)(s.g2w,{className:"w-5 h-5 mt-0.5"}),(0,n.jsx)("span",{className:" ltr:ml-3 rtl:mr-3 text-brand-dark font-medium text-15px -mt-0.5 md:mt-0",children:a("text-favorite")})]}):(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)(s.yas,{className:"text-brand w-5 h-5 mt-0.5"}),(0,n.jsx)("span",{className:"text-brand ltr:ml-3 rtl:mr-3 font-semibold text-15px -mt-0.5 md:mt-0",children:a("text-favorited")})]})})]})},m=r(34051),x=r.n(m),f=r(75402),h=r(34758),p=r(88767);function y(t,e){(null==e||e>t.length)&&(e=t.length);for(var r=0,n=new Array(e);r<e;r++)n[r]=t[r];return n}function v(t,e,r,n,a,i,l){try{var o=t[i](l),c=o.value}catch(s){return void r(s)}o.done?e(c):Promise.resolve(c).then(n,a)}function b(t,e){return function(t){if(Array.isArray(t))return t}(t)||function(t,e){var r=null==t?null:"undefined"!==typeof Symbol&&t[Symbol.iterator]||t["@@iterator"];if(null!=r){var n,a,i=[],l=!0,o=!1;try{for(r=r.call(t);!(l=(n=r.next()).done)&&(i.push(n.value),!e||i.length!==e);l=!0);}catch(c){o=!0,a=c}finally{try{l||null==r.return||r.return()}finally{if(o)throw a}}return i}}(t,e)||function(t,e){if(!t)return;if("string"===typeof t)return y(t,e);var r=Object.prototype.toString.call(t).slice(8,-1);"Object"===r&&t.constructor&&(r=t.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return y(t,e)}(t,e)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var g=function(){var t,e=(t=x().mark((function t(e){var r,n,a;return x().wrap((function(t){for(;;)switch(t.prev=t.next){case 0:return r=e.queryKey,(n=b(r,2))[0],n[1],t.next=4,f.Z.get(h.P.WISHLIST);case 4:return a=t.sent.data,t.abrupt("return",a);case 6:case"end":return t.stop()}}),t)})),function(){var e=this,r=arguments;return new Promise((function(n,a){var i=t.apply(e,r);function l(t){v(i,n,a,l,o,"next",t)}function o(t){v(i,n,a,l,o,"throw",t)}l(void 0)}))});return function(t){return e.apply(this,arguments)}}(),j=r(19988),w=r(15239),N=r(94184),S=r.n(N),k=function(t){t.element;var e,r=t.className,a=void 0===r?"":r,i=(e={limit:35},(0,p.useQuery)([h.P.WISHLIST,e],g)),l=i.data,o=i.isLoading,c=i.error;return(0,n.jsx)("div",{className:S()(a),children:c?(0,n.jsx)(w.Z,{message:null===c||void 0===c?void 0:c.message}):(0,n.jsx)("div",{className:"flex flex-col",children:o&&!(null===l||void 0===l?void 0:l.length)?Array.from({length:35}).map((function(t,e){return(0,n.jsx)(j.Z,{uniqueKey:"product--key-".concat(e)},"product--key-".concat(e))})):null===l||void 0===l?void 0:l.map((function(t){return(0,n.jsx)(d,{product:t},"product--key".concat(t.id))}))})})};function P(){return(0,n.jsx)("div",{className:"flex flex-col pt-8 2xl:pt-12",children:(0,n.jsx)(k,{})})}P.Layout=a.Z;var _=r(89183),C=!0;function A(){var t=(0,u.$G)().t;return(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)(_.Z,{title:"Wishlist",description:"Fastest E-commerce template built with React, NextJS, TypeScript, React-Query and Tailwind CSS.",path:"my-account/wishlist"}),(0,n.jsxs)(i.Z,{children:[(0,n.jsx)("h2",{className:"text-base md:text-lg xl:text-[20px] font-semibold text-brand-dark lg:pt-0",children:t("common:text-account-wishlist")}),(0,n.jsx)(P,{})]})]})}A.Layout=a.Z}},function(t){t.O(0,[9866,6351,5445,2013,260,9351,1560,7979,7653,3279,9774,2888,179],(function(){return e=71214,t(t.s=e);var e}));var e=t.O();_N_E=e}]);