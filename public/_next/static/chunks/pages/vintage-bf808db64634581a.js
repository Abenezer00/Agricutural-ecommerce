(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[4052],{39823:function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/vintage",function(){return r(1633)}])},62440:function(e,t,r){"use strict";var l=r(85893),n=r(40559),a=r(16740),i=r(94184),s=r.n(i),o=r(5152),c=r(6557),d=r(68139),u=(0,o.default)((function(){return Promise.resolve().then(r.bind(r,82857))}),{loadableGenerated:{webpack:function(){return[82857]}},ssr:!1}),x={1024:{slidesPerView:3,spaceBetween:16},768:{slidesPerView:2,spaceBetween:16},680:{slidesPerView:2,spaceBetween:12},0:{slidesPerView:1}};t.Z=function(e){var t=e.className,r=void 0===t?"mb-12 pb-0.5":t,i=e.data,o=(0,a.Z)().width;return(0,l.jsx)("div",{className:s()("heightFull",r),children:o<1536?(0,l.jsx)(u,{breakpoints:x,children:null===i||void 0===i?void 0:i.map((function(e){return(0,l.jsx)(c.o5,{children:(0,l.jsx)(n.Z,{bundle:e,href:"".concat(d.Z.BUNDLE,"/").concat(e.slug)})},"bundle-key-".concat(e.id))}))}):(0,l.jsx)("div",{className:"grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5",children:null===i||void 0===i?void 0:i.map((function(e){return(0,l.jsx)(n.Z,{bundle:e,href:"".concat(d.Z.BUNDLE,"/").concat(e.slug)},"bundle-key-".concat(e.id))}))})})}},40559:function(e,t,r){"use strict";var l=r(85893),n=r(58448),a=r(63879),i=r(96872),s=r(20868),o=r(94184),c=r.n(o);t.Z=function(e){var t=e.bundle,r=e.imgWidth,o=void 0===r?180:r,d=e.imgHeight,u=void 0===d?150:d,x=e.className,m=void 0===x?"":x,p=e.thumbnailClassName,h=void 0===p?"w-36 lg:w-32 xl:w-40 2xl:w-36 3xl:w-[180px] ltr:pr-1.5 rtl:pl-1.5 2xl:ltr:pr-2.5 2xl:rtl:pl-2.5":p,f=e.href,b=t.image,g=t.title,v=t.description,j=t.bgColor,y=(0,s.$G)("common").t;return(0,l.jsx)(i.Z,{href:f,className:c()("group flex",m),children:(0,l.jsxs)("div",{className:"relative flex items-center w-full overflow-hidden",style:{backgroundColor:j},children:[(0,l.jsx)("div",{className:c()("flex shrink-0",h),children:(0,l.jsx)(a.Z,{src:null!==b&&void 0!==b?b:"/assets/placeholder/collection.svg",alt:y(g)||y("text-card-thumbnail"),width:o,height:u,className:"object-cover transition duration-200 ease-in-out transform bg-sink-thumbnail group-hover:scale-105"})}),(0,l.jsxs)("div",{className:"py-3 lg:py-5 ltr:pr-4 rtl:pl-4 lg:ltr:pr-3 lg:rtl:pl-3 xl:ltr:pr-4 xl:rtl:pl-4",children:[(0,l.jsx)(n.Z,{variant:"title",className:"mb-[5px]",children:y(g)}),(0,l.jsx)("p",{className:"text-sm leading-6 lg:text-13px xl:text-sm",children:y("".concat(v))})]})]})})}},68997:function(e,t,r){"use strict";r.d(t,{Z:function(){return y}});var l=r(85893),n=r(15239),a=r(13123),i=r(11163),s=r(94184),o=r.n(s),c=r(51649),d=r(78126),u=r(67294),x=r(63879),m=r(20868);function p(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function h(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},l=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(l=l.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),l.forEach((function(t){p(e,t,r[t])}))}return e}function f(e,t){if(null==e)return{};var r,l,n=function(e,t){if(null==e)return{};var r,l,n={},a=Object.keys(e);for(l=0;l<a.length;l++)r=a[l],t.indexOf(r)>=0||(n[r]=e[r]);return n}(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(l=0;l<a.length;l++)r=a[l],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(n[r]=e[r])}return n}function b(e){var t,r,n=e.className,a=e.item,s=e.depth,p=void 0===s?0:s,g=(0,m.$G)("common").t,v=(0,i.useRouter)(),j=null===v||void 0===v||null===(t=v.query)||void 0===t?void 0:t.category,y=j===a.slug||(null===a||void 0===a||null===(r=a.children)||void 0===r?void 0:r.some((function(e){return e.slug===j}))),N=(0,u.useState)(y),w=N[0],k=N[1];(0,u.useEffect)((function(){k(y)}),[y]);var O,Z=a.slug,P=a.name,S=a.children,_=a.icon,C=(0,d.l8)(),E=C.displaySidebar,T=C.closeSidebar;return Array.isArray(S)&&S.length&&(O=w?(0,l.jsx)(c.Vmf,{className:"text-base text-brand-dark text-opacity-40"}):(0,l.jsx)(c.OId,{className:"text-base text-brand-dark text-opacity-40"})),(0,l.jsxs)(l.Fragment,{children:[(0,l.jsx)("li",{onClick:function(){if(Array.isArray(S)&&S.length)k((function(e){return!e}));else{var e=v.pathname,t=v.query,r=(t.type,f(t,["type"]));v.push({pathname:e,query:h({},r,{category:Z})},void 0,{scroll:!1}),E&&T()}},className:"flex justify-between items-center transition ".concat(n||"text-sm md:text-15px hover:bg-fill-base border-t border-border-base first:border-t-0 px-3.5 2xl:px-4 py-3 xl:py-3.5 2xl:py-2.5 3xl:py-3"," ").concat(w?"bg-fill-base":"text-brand-dark text-opacity-70"),children:(0,l.jsxs)("button",{className:o()("flex items-center w-full ltr:text-left rtl:text-right outline-none focus:outline-none group focus:ring-0 focus:text-brand-dark"),children:[_&&(0,l.jsx)("div",{className:"inline-flex shrink-0 2xl:w-12 2xl:h-12 3xl:w-auto 3xl:h-auto",children:(0,l.jsx)(x.Z,{src:null!==_&&void 0!==_?_:"/assets/placeholder/category-small.svg",alt:P||g("text-category-thumbnail"),width:40,height:40})}),(0,l.jsx)("span",{className:"text-brand-dark group-hover:text-opacity-80 capitalize ltr:pl-2.5 rtl:pr-2.5 md:ltr:pl-4 md:rtl:pr-4 2xl:ltr:pl-3 2xl:rtl:pr-3 3xl:ltr:pl-4 3xl:rtl:pr-4",children:P}),(0,l.jsx)("span",{className:"ltr:ml-auto rtl:mr-auto",children:O})]})}),Array.isArray(S)&&w?(0,l.jsx)("li",{children:(0,l.jsx)("ul",{className:"py-3 text-xs border-t border-border-base",children:null===S||void 0===S?void 0:S.map((function(e){var t=p+1;return(0,l.jsx)(b,{item:e,depth:t,className:o()("text-sm ltr:pl-14 rtl:pr-14 py-2.5 ltr:pr-4 rtl:pl-4")},"".concat(e.name).concat(e.slug))}))},"content")}):null]})}var g=function(e){var t=e.items,r=e.className;return(0,l.jsx)("ul",{className:o()(r),children:null===t||void 0===t?void 0:t.map((function(e){return(0,l.jsx)(b,{item:e},"".concat(e.slug,"-key-").concat(e.id))}))})},v=r(72558),j=r(4937),y=function(e){var t,r,i,s=e.className,c=(0,j.E)({limit:10}),d=c.data,u=c.isLoading,x=c.error;return(0,l.jsx)("aside",{className:o()("category-mobile-sidebar",s),children:(0,l.jsx)("div",{className:"max-h-full overflow-hidden border rounded border-border-base",children:x?(0,l.jsx)("div",{className:"2xl:ltr:pr-4 2xl:rtl:pl-4",children:(0,l.jsx)(n.Z,{message:x.message})}):(0,l.jsx)(a.Z,{className:"w-full h-full category-scrollbar",children:u&&!(null===d||void 0===d||null===(t=d.categories)||void 0===t||null===(r=t.data)||void 0===r?void 0:r.length)?Array.from({length:15}).map((function(e,t){return(0,l.jsx)(v.Z,{uniqueKey:"category-list-card-loader"},"category-list-".concat(t))})):(0,l.jsx)(g,{items:null===d||void 0===d||null===(i=d.categories)||void 0===i?void 0:i.data})})})})}},48156:function(e,t,r){"use strict";r.d(t,{Z:function(){return m}});var l=r(85893),n=r(94184),a=r.n(n),i=r(96872),s=r(16740),o=r(20868),c=r(32453),d=r(67294),u=r(11163),x=function(){var e=(0,o.$G)("forms").t,t=(0,u.useRouter)(),r=(0,d.useState)(""),n=r[0],a=r[1];return(0,l.jsxs)("form",{className:"relative flex w-full mt-6 rounded-md",noValidate:!0,role:"search",onSubmit:function(e){e.preventDefault(),t.push("/search?q=".concat(n))},children:[(0,l.jsx)("label",{htmlFor:"hero-search",className:"flex flex-1 items-center py-0.5",children:(0,l.jsx)("input",{id:"hero-search",className:"w-full text-sm transition-all duration-200 rounded-md outline-none placeholder:text-brand-dark/50 text-brand-dark/80 h-14 md:h-16 ltr:pl-5 rtl:pr-5 md:ltr:pl-6 md:rtl:pr-6 ltr:pr-14 rtl:pl-14 md:ltr:pr-16 md:rtl:pl-16 text-brand-light lg:text-base shadow-heroSearch focus:ring-2 focus:ring-brand",placeholder:e("placeholder-search"),"aria-label":"Search",autoComplete:"off",value:n,onChange:function(e){return a(e.target.value)}})}),(0,l.jsx)("button",{type:"submit",title:"Search",className:"absolute top-0 flex items-center justify-center h-full transition duration-200 ease-in-out outline-none ltr:right-0 rtl:left-0 w-14 md:w-16 hover:text-heading focus:outline-none",children:(0,l.jsx)(c.Z,{className:"w-5 h-5 text-brand-dark text-opacity-40"})})]})};var m=function(e){var t,r=e.banner,n=e.className,c=void 0===n?"py-20 xy:pt-24":n,d=e.variant,u=void 0===d?"default":d,m=(0,o.$G)("common").t,p=(0,s.Z)().width,h=r.title,f=r.description,b=r.image,g=(t=b,p<480?t.mobile:t.desktop);return(0,l.jsx)("div",{className:a()("w-full bg-fill-thumbnail bg-no-repeat bg-cover bg-center flex items-center",{"min-h-[420px] md:min-h-[460px] lg:min-h-[500px] xl:min-h-[550px]":"slider"===u},c),style:{backgroundImage:"url('".concat(g.url,"')")},children:(0,l.jsx)("div",{className:a()("mx-auto h-full flex flex-col text-center px-6 xl:max-w-[750px] 2xl:max-w-[850px]",{"max-w-[480px] md:max-w-[550px]":"default"===u||"slider","max-w-[480px] md:max-w-[650px]":"medium"===u}),children:(0,l.jsxs)("div",{className:"text-center",children:[(0,l.jsx)("h2",{className:a()("text-3xl md:text-4xl font-manrope font-extrabold leading-snug md:leading-tight xl:leading-[1.3em] mb-3 md:mb-4 xl:mb-3 -mt-2 xl:-mt-3 2xl:-mt-4",{"text-brand-tree-dark xl:text-5xl 2xl:text-[55px]":"default"===u,"text-brand-tree-dark xl:text-[40px] 2xl:text-5xl 2xl:mb-4 2xl:pb-0.5":"medium"===u,"text-brand-light xl:text-5xl 2xl:text-[55px]":"slider"===u}),children:m(h)}),(0,l.jsx)("p",{className:a()("text-base md:text-[17px] xl:text-lg leading-7 md:leading-8 xl:leading-[1.92em] xl:px-16",{"text-brand-dark text-opacity-80 2xl:px-32":"default"===u,"text-brand-light 2xl:px-32":"slider"===u,"2xl:px-24":"medium"===u}),children:m(f)}),r.btnText&&(0,l.jsx)(i.Z,{href:r.btnUrl,className:"h-[45px] mt-7 md:mt-8 text-sm inline-flex items-center justify-center transition duration-300 rounded px-6 py-2 font-semibold bg-brand-light text-brand-dark hover:text-brand-light hover:bg-brand",children:m(r.btnText)}),r.searchBox&&(0,l.jsx)("div",{className:"hidden lg:flex max-w-[620px] mx-auto md:pt-1 lg:pt-3",children:(0,l.jsx)(x,{})})]})})})}},1980:function(e,t,r){"use strict";var l=r(85893),n=r(67294),a=r(9517),i=r(23833),s=r(19988),o=r(26003),c=r(18921),d=r(12571),u=r.n(d),x=r(15239),m=r(94184),p=r.n(m),h=r(20868),f=r(11163),b=r(64251);function g(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}t.Z=function(e){var t,r,d=e.element,m=e.className,v=void 0===m?"":m,j=(0,h.$G)("common").t,y=(0,f.useRouter)().query,N=(0,i.k)(function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},l=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(l=l.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),l.forEach((function(t){g(e,t,r[t])}))}return e}({limit:b.b.PRODUCTS_LIMITS},y)),w=N.isFetching,k=(N.isFetchingNextPage,N.fetchNextPage,N.hasNextPage,N.data),O=N.error,Z=(0,c.SO)().openModal;return(0,l.jsxs)("div",{className:p()(v),children:[(0,l.jsxs)("div",{className:"flex items-center justify-between pb-0.5 mb-4 lg:mb-5 xl:mb-6",children:[(0,l.jsx)(o.Z,{sectionHeading:"All Products",className:"mb-0"}),(0,l.jsx)("div",{className:"lg:hidden transition-all text-brand -mt-1.5 font-semibold text-sm md:text-15px hover:text-brand-dark",role:"button",onClick:function(){Z("CATEGORY_VIEW")},children:j("text-categories")})]}),O?(0,l.jsx)(x.Z,{message:null===O||void 0===O?void 0:O.message}):(0,l.jsx)("div",{className:"grid grid-cols-2 gap-3 sm:grid-cols-3 lg:grid-cols-3 xl:grid-cols-4 2xl:grid-cols-5 3xl:grid-cols-6 md:gap-4 2xl:gap-5",children:w&&!(null===k||void 0===k||null===(t=k.pages)||void 0===t?void 0:t.length)?Array.from({length:b.b.PRODUCTS_LIMITS}).map((function(e,t){return(0,l.jsx)(s.Z,{uniqueKey:"product--key-".concat(t)},"product--key-".concat(t))})):(0,l.jsx)(l.Fragment,{children:null===k||void 0===k||null===(r=k.pages)||void 0===r?void 0:r.map((function(e,t){var r,i,s,o;return(0,l.jsxs)(n.Fragment,{children:[null===(i=null===e||void 0===e||null===(r=e.data)||void 0===r?void 0:r.slice(0,18))||void 0===i?void 0:i.map((function(e){return(0,l.jsx)(a.Z,{product:e},"product--key".concat(e.id))})),d&&(0,l.jsx)("div",{className:"col-span-full",children:d}),(null===e||void 0===e||null===(s=e.data)||void 0===s?void 0:s.length)>18&&u()(null===e||void 0===e?void 0:e.data,18,null===e||void 0===e||null===(o=e.data)||void 0===o?void 0:o.length).map((function(e){return(0,l.jsx)(a.Z,{product:e},"product--key".concat(e.id))}))]},t)}))})})]})}},72558:function(e,t,r){"use strict";var l=r(85893),n=r(24561);function a(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}t.Z=function(e){return(0,l.jsxs)(n.ZP,function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},l=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(l=l.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),l.forEach((function(t){a(e,t,r[t])}))}return e}({speed:2,width:389,height:88,viewBox:"0 0 389 88",backgroundColor:"#f9f9f9",foregroundColor:"#ecebeb",className:"rounded-md w-full"},e,{children:[(0,l.jsx)("circle",{cx:"43",cy:"45",r:"30"}),(0,l.jsx)("rect",{x:"88",y:"40",rx:"3",ry:"3",width:"96",height:"8"}),(0,l.jsx)("rect",{x:"350",y:"34",rx:"3",ry:"3",width:"20",height:"20"})]}))}},1633:function(e,t,r){"use strict";r.r(t),r.d(t,{__N_SSG:function(){return v},default:function(){return j}});var l=r(85893),n=r(62440),a=r(1980),i=r(17653),s=r(89146),o=r(31694),c=r(94808),d=r(49412),u=r(48156),x=r(82857),m=r(6557),p=function(e){var t=e.heroBanner,r=e.className,n=void 0===r?"mb-7":r,a=e.contentClassName,i=void 0===a?"py-24":a;return(0,l.jsx)("div",{className:"".concat(n),children:(0,l.jsx)(x.default,{pagination:{clickable:!0},navigation:!1,autoplay:!1,children:null===t||void 0===t?void 0:t.map((function(e){return(0,l.jsx)(m.o5,{children:(0,l.jsx)(u.Z,{banner:e,variant:"slider",className:i})},"banner--key".concat(e.id))}))})})},h=r(66261),f=r(68997),b=r(9974),g=r(89183),v=!0;function j(){return(0,l.jsxs)(l.Fragment,{children:[(0,l.jsx)(g.Z,{title:"Vintage",description:"Fastest E-commerce template built with React, NextJS, TypeScript, React-Query and Tailwind CSS.",path:"vintage"}),(0,l.jsx)(p,{heroBanner:c.GT,contentClassName:"pb-24 xl:pb-32 pt-16 xl:pt-24"}),(0,l.jsxs)(s.Z,{children:[(0,l.jsx)(n.Z,{data:b.bs}),(0,l.jsxs)(h.W_,{name:"grid",className:"flex mb-16 pb-2.5",children:[(0,l.jsx)(f.Z,{className:"shrink-0 ltr:pr-8 rtl:pl-8 hidden lg:block w-80 xl:w-[370px] lg:sticky lg:top-20"}),(0,l.jsx)(a.Z,{className:"w-full",element:(0,l.jsx)(d.Z,{banner:c.VY,className:"py-5"})})]})]}),(0,l.jsx)(o.Z,{})]})}j.Layout=i.Z}},function(e){e.O(0,[9866,6351,5445,2013,9351,1560,1990,5595,6261,4838,7979,7653,932,1270,3941,9774,2888,179],(function(){return t=39823,e(e.s=t);var t}));var t=e.O();_N_E=t}]);