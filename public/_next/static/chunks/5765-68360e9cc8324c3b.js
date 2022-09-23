"use strict";(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[5765],{30146:function(e,t,r){r.d(t,{Z:function(){return b}});var n=r(85893),o=r(58448),i=r(63879),l=r(96872),a=r(49732),s=r(20868),u=r(45764),c=function(e){var t=e.collection,r=e.imgWidth,c=void 0===r?440:r,d=e.imgHeight,f=void 0===d?280:d,m=e.href,p=t.image,x=t.title,h=t.description,v=(0,s.$G)("common").t;return(0,n.jsxs)(l.Z,{href:m,className:"flex flex-col overflow-hidden rounded-md group shadow-card ",children:[(0,n.jsx)(i.Z,{src:null!==p&&void 0!==p?p:u.Zt,alt:v(x)||v("text-card-thumbnail"),width:c,height:f,className:"object-cover transition duration-300 ease-in-out transform bg-fill-thumbnail group-hover:opacity-90 group-hover:scale-105"}),(0,n.jsxs)("div",{className:"flex flex-col px-4 pt-4 pb-4 lg:px-5 xl:px-6 lg:pt-5 md:pb-5 lg:pb-6 xl:pb-7",children:[(0,n.jsx)(o.Z,{variant:"title",className:"mb-1 lg:mb-1.5 truncate group-hover:text-brand",children:v(x)}),(0,n.jsx)(a.Z,{variant:"medium",className:"truncate",children:v("".concat(h))})]})]})},d=r(26003),f=r(89146),m=r(16740),p=r(82857),x=r(6557),h=r(68139),v=[{id:1,slug:"feel-the-thirsty-in-summer-anytime",image:"/assets/images/collection/1.png",title:"collection-title-one",description:"collection-description-one"},{id:2,slug:"most-popular-item-for-Fast-food",image:"/assets/images/collection/2.png",title:"collection-title-two",description:"collection-description-two"},{id:3,slug:"authentic-japanese-food-in-real-taste",image:"/assets/images/collection/3.png",title:"collection-title-three",description:"collection-description-three"},{id:4,slug:"explore-our-family-of-freshest\xae-foods",image:"/assets/images/collection/4.png",title:"collection-title-four",description:"collection-description-four"}],g={1024:{slidesPerView:3},768:{slidesPerView:3},540:{slidesPerView:2},0:{slidesPerView:1}},b=function(e){var t=e.className,r=void 0===t?"mb-12 lg:mb-14 xl:mb-16 2xl:mb-20 pb-1 lg:pb-0 3xl:pb-2.5":t,o=e.headingPosition,i=void 0===o?"left":o,l=(0,m.Z)().width;return(0,n.jsx)("div",{className:r,children:(0,n.jsxs)(f.Z,{children:[(0,n.jsx)(d.Z,{sectionHeading:"text-curated-collections",sectionSubHeading:"text-categories-grocery-items",headingPosition:i}),l<1536?(0,n.jsx)(p.default,{breakpoints:g,autoplay:{delay:4e3},prevButtonClassName:"ltr:-left-2.5 rtl:-right-2.5 -top-14",nextButtonClassName:"ltr:-right-2.5 rtl:-left-2.5 -top-14",className:"-mx-1.5 md:-mx-2 xl:-mx-2.5 -my-4",prevActivateId:"collection-carousel-button-prev",nextActivateId:"collection-carousel-button-next",children:null===v||void 0===v?void 0:v.map((function(e){return(0,n.jsx)(x.o5,{className:"px-1.5 md:px-2 xl:px-2.5 py-4",children:(0,n.jsx)(c,{collection:e,href:"".concat(h.Z.BUNDLE,"/").concat(e.slug)},e.id)},"collection-key-".concat(e.id))}))}):(0,n.jsx)("div",{className:"gap-5 2xl:grid 2xl:grid-cols-4 3xl:gap-7",children:null===v||void 0===v?void 0:v.map((function(e){return(0,n.jsx)(c,{collection:e,href:"".concat(h.Z.BUNDLE,"/").concat(e.slug)},e.id)}))})]})})}},98027:function(e,t,r){r.d(t,{Z:function(){return m}});var n=r(85893),o=r(96872),i=r(89583),l=r(20868),a=r(51649),s=function(e){var t=e.dept,r=e.data,i=e.hasSubMenu,s=e.menuIndex,c=(0,l.$G)("menu").t;return(0,n.jsxs)("li",{className:"relative",children:[(0,n.jsxs)(o.Z,{href:r.path,className:"flex items-center justify-between py-2 ltr:pl-5 rtl:pr-5 xl:ltr:pl-7 xl:rtl:pr-7 ltr:pr-3 rtl:pl-3 xl:ltr:pr-3.5 xl:rtl:pl-3.5 hover:bg-fill-dropdown-hover hover:text-brand-dark",children:[c(r.label),r.subMenu&&(0,n.jsx)("span",{className:"text-sm mt-0.5 shrink-0",children:(0,n.jsx)(a.hjJ,{className:"transition duration-300 ease-in-out text-body group-hover:text-brand-dark"})})]}),i&&(0,n.jsx)(u,{dept:t,data:r.subMenu,menuIndex:s})]})},u=function(e){var t=e.dept,r=e.data,o=e.menuIndex;return t+=1,(0,n.jsx)("ul",{className:"absolute z-0 invisible w-56 py-3 transition-all duration-300 opacity-0 subMenuChild shadow-subMenu bg-brand-light ltr:right-full rtl:left-full 2xl:ltr:right-auto 2xl:rtl:left-auto 2xl:ltr:left-full 2xl:rtl:right-full top-4",children:null===r||void 0===r?void 0:r.map((function(e,r){var i="sidebar-submenu-".concat(t,"-").concat(o,"-").concat(r);return(0,n.jsx)(s,{dept:t,data:e,hasSubMenu:e.subMenu,menuName:i,menuIndex:r},i)}))})},c=s,d=r(94184),f=r.n(d),m=function(e){var t=e.data,r=e.className,a=(0,l.$G)("menu").t;return(0,n.jsx)("nav",{className:f()("headerMenu flex w-full relative -mx-3 xl:-mx-4",r),children:null===t||void 0===t?void 0:t.map((function(e){return(0,n.jsxs)("div",{className:"relative py-3 mx-3 cursor-pointer menuItem group xl:mx-4",children:[(0,n.jsxs)(o.Z,{href:e.path,className:"relative inline-flex items-center py-2 text-sm font-normal lg:text-15px text-brand-dark group-hover:text-brand before:absolute before:w-0 before:ltr:right-0 rtl:left-0 before:bg-brand before:h-[3px] before:transition-all before:duration-300 before:-bottom-[14px] group-hover:before:w-full ltr:group-hover:before:left-0 rtl:group-hover:before:right-0 lrt:group-hover:before:right-auto rtl:group-hover:before:left-auto",children:[a(e.label),((null===e||void 0===e?void 0:e.columns)||e.subMenu)&&(0,n.jsx)("span",{className:"text-xs mt-1 xl:mt-0.5 w-4 flex justify-end text-brand-dark opacity-40 group-hover:text-brand",children:(0,n.jsx)(i.RiI,{className:"transition duration-300 ease-in-out transform group-hover:-rotate-180"})})]}),(null===e||void 0===e?void 0:e.subMenu)&&Array.isArray(null===e||void 0===e?void 0:e.subMenu)&&(0,n.jsx)("div",{className:"absolute z-30 opacity-0 subMenu shadow-dropDown transition-all duration-300 invisible bg-brand-light ltr:left-0 rtl:right-0 w-[220px] xl:w-[240px] group-hover:opacity-100",children:(0,n.jsx)("ul",{className:"py-5 text-sm text-brand-muted",children:e.subMenu.map((function(e,t){var r="sidebar-menu-".concat(1,"-").concat(t);return(0,n.jsx)(c,{dept:1,data:e,hasSubMenu:e.subMenu,menuName:r,menuIndex:t},r)}))})})]},e.id)}))})}},90888:function(e,t,r){r.d(t,{Z:function(){return x}});var n=r(85893),o=r(34051),i=r.n(o),l=r(75402),a=r(34758),s=r(88767);function u(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function c(e,t,r,n,o,i,l){try{var a=e[i](l),s=a.value}catch(u){return void r(u)}a.done?t(s):Promise.resolve(s).then(n,o)}function d(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,o,i=[],l=!0,a=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(i.push(n.value),!t||i.length!==t);l=!0);}catch(s){a=!0,o=s}finally{try{l||null==r.return||r.return()}finally{if(a)throw o}}return i}}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return u(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return u(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var f=function(){var e,t=(e=i().mark((function e(t){var r,n,o;return i().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.queryKey,(n=d(r,2))[0],n[1],e.next=4,l.Z.get(a.P.BEST_SELLER_GROCERY_PRODUCTS);case 4:return o=e.sent.data,e.abrupt("return",o);case 6:case"end":return e.stop()}}),e)})),function(){var t=this,r=arguments;return new Promise((function(n,o){var i=e.apply(t,r);function l(e){c(i,n,o,l,a,"next",e)}function a(e){c(i,n,o,l,a,"throw",e)}l(void 0)}))});return function(e){return t.apply(this,arguments)}}(),m=r(87841),p=r(64251),x=function(e){var t,r=e.className,o=(t={limit:p.b.BEST_SELLER_GROCERY_PRODUCTS_LIMITS},(0,s.useQuery)([a.P.BEST_SELLER_GROCERY_PRODUCTS,t],f)),i=o.data,l=o.isLoading,u=o.error;return(0,n.jsx)(m.Z,{sectionHeading:"text-best-grocery-near-you",sectionSubHeading:"text-fresh-grocery-items",className:r,products:i,loading:l,error:null===u||void 0===u?void 0:u.message,limit:p.b.BEST_SELLER_GROCERY_PRODUCTS_LIMITS,uniqueKey:"best-sellers"})}},87841:function(e,t,r){var n=r(85893),o=r(26003),i=r(9517),l=r(19988),a=r(15239);t.Z=function(e){var t=e.sectionHeading,r=e.sectionSubHeading,s=e.headingPosition,u=void 0===s?"center":s,c=e.className,d=void 0===c?"mb-12 lg:mb-14 xl:mb-16":c,f=e.products,m=e.loading,p=e.error,x=e.limit,h=e.uniqueKey;return(0,n.jsxs)("div",{className:"".concat(d),children:[(0,n.jsx)(o.Z,{sectionHeading:t,sectionSubHeading:r,headingPosition:u}),(0,n.jsx)("div",{className:"grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 2xl:grid-cols-6 3xl:grid-cols-7 md:gap-4 2xl:gap-5",children:p?(0,n.jsx)(a.Z,{message:p,className:"col-span-full"}):m&&!(null===f||void 0===f?void 0:f.length)?Array.from({length:x}).map((function(e,t){return(0,n.jsx)(l.Z,{uniqueKey:"".concat(h,"-").concat(t)},"".concat(h,"-").concat(t))})):null===f||void 0===f?void 0:f.map((function(e){return(0,n.jsx)(i.Z,{product:e},"".concat(h,"-").concat(e.id))}))})]})}},89092:function(e,t,r){r.d(t,{T:function(){return f}});var n=r(34051),o=r.n(n),i=r(75402),l=r(34758),a=r(88767);function s(e,t){(null==t||t>e.length)&&(t=e.length);for(var r=0,n=new Array(t);r<t;r++)n[r]=e[r];return n}function u(e,t,r,n,o,i,l){try{var a=e[i](l),s=a.value}catch(u){return void r(u)}a.done?t(s):Promise.resolve(s).then(n,o)}function c(e,t){return function(e){if(Array.isArray(e))return e}(e)||function(e,t){var r=null==e?null:"undefined"!==typeof Symbol&&e[Symbol.iterator]||e["@@iterator"];if(null!=r){var n,o,i=[],l=!0,a=!1;try{for(r=r.call(e);!(l=(n=r.next()).done)&&(i.push(n.value),!t||i.length!==t);l=!0);}catch(s){a=!0,o=s}finally{try{l||null==r.return||r.return()}finally{if(a)throw o}}return i}}(e,t)||function(e,t){if(!e)return;if("string"===typeof e)return s(e,t);var r=Object.prototype.toString.call(e).slice(8,-1);"Object"===r&&e.constructor&&(r=e.constructor.name);if("Map"===r||"Set"===r)return Array.from(r);if("Arguments"===r||/^(?:Ui|I)nt(?:8|16|32)(?:Clamped)?Array$/.test(r))return s(e,t)}(e,t)||function(){throw new TypeError("Invalid attempt to destructure non-iterable instance.\\nIn order to be iterable, non-array objects must have a [Symbol.iterator]() method.")}()}var d=function(){var e,t=(e=o().mark((function e(t){var r,n,a;return o().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return r=t.queryKey,(n=c(r,2))[0],n[1],e.next=4,i.Z.get(l.P.POPULAR_PRODUCTS);case 4:return a=e.sent.data,e.abrupt("return",a);case 6:case"end":return e.stop()}}),e)})),function(){var t=this,r=arguments;return new Promise((function(n,o){var i=e.apply(t,r);function l(e){u(i,n,o,l,a,"next",e)}function a(e){u(i,n,o,l,a,"throw",e)}l(void 0)}))});return function(e){return t.apply(this,arguments)}}(),f=function(e){return(0,a.useQuery)([l.P.POPULAR_PRODUCTS,e],d)}}}]);