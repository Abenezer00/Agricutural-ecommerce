(self.webpackChunk_N_E=self.webpackChunk_N_E||[]).push([[2176,7703],{62339:function(e,t,r){(window.__NEXT_P=window.__NEXT_P||[]).push(["/signin",function(){return r(34949)}])},87703:function(e,t,r){"use strict";r.r(t),r.d(t,{default:function(){return _}});var n=r(85893),o=r(67294),a=r(65225),l=r(84367),i=r(14685),s=r(87536),c=r(34051),u=r.n(c),d=r(78126),m=r(31955),f=r(88767);function p(e,t,r,n,o,a,l){try{var i=e[a](l),s=i.value}catch(c){return void r(c)}i.done?t(s):Promise.resolve(s).then(n,o)}function b(e){return function(){var t=this,r=arguments;return new Promise((function(n,o){var a=e.apply(t,r);function l(e){p(a,n,o,l,i,"next",e)}function i(e){p(a,n,o,l,i,"throw",e)}l(void 0)}))}}function x(){return x=b(u().mark((function e(t){return u().wrap((function(e){for(;;)switch(e.prev=e.next){case 0:return e.abrupt("return",{token:"".concat(t.email,".").concat(t.remember_me).split("").reverse().join("")});case 1:case"end":return e.stop()}}),e)}))),x.apply(this,arguments)}var h=function(){var e=(0,d.l8)(),t=e.authorize,r=e.closeModal;return(0,f.useMutation)((function(e){return function(e){return x.apply(this,arguments)}(e)}),{onSuccess:function(e){m.Z.set("auth_token",e.token),t(),r()},onError:function(e){console.log(e,"login error response")}})},g=r(57310),v=r(20868),y=r(63879),j=r(18921),w=r(44567),k=r(89341),N=r(89583),O=r(94184),P=r.n(O);function S(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function C(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){S(e,t,r[t])}))}return e}var _=function(e){var t,r,c=e.isPopup,u=void 0===c||c,d=e.className,m=function(){S({email:"demo@demo.com",password:"demo",remember_me:!0}),b()},f=(0,v.$G)().t,p=(0,j.SO)(),b=p.closeModal,x=p.openModal,O=h(),S=O.mutate,_=O.isLoading,Z=(0,o.useState)(!1),E=Z[0],B=Z[1],M=(0,s.cI)(),I=M.register,L=M.handleSubmit,A=M.formState.errors;return(0,n.jsxs)("div",{className:P()("w-full md:w-[720px] lg:w-[920px] xl:w-[1000px] 2xl:w-[1200px] relative",d),children:[!0===u&&(0,n.jsx)(k.Z,{onClick:b}),(0,n.jsxs)("div",{className:"flex mx-auto overflow-hidden rounded-lg bg-brand-light",children:[(0,n.jsx)("div",{className:"md:w-1/2 lg:w-[55%] xl:w-[60%] registration hidden md:block relative",children:(0,n.jsx)(y.Z,{src:"/assets/images/login.png",alt:"signin Image",layout:"fill"})}),(0,n.jsxs)("div",{className:"w-full md:w-1/2 lg:w-[45%] xl:w-[40%] py-6 sm:py-10 px-4 sm:px-8 md:px-6 lg:px-8 xl:px-12 rounded-md flex flex-col justify-center",children:[(0,n.jsxs)("div",{className:"mb-6 text-center",children:[(0,n.jsx)("div",{onClick:b,children:(0,n.jsx)(g.Z,{})}),(0,n.jsx)("h4",{className:"text-xl font-semibold text-brand-dark sm:text-2xl sm:pt-3 ",children:f("common:text-welcome-back")}),(0,n.jsxs)("div",{className:"mt-3 mb-1 text-sm text-center sm:text-15px text-body",children:[f("common:text-don\u2019t-have-account"),(0,n.jsx)("button",{type:"button",className:"text-sm font-semibold text-brand sm:text-15px ltr:ml-1 rtl:mr-1 hover:no-underline focus:outline-none",onClick:function(){return x("SIGN_UP_VIEW")},children:f("common:text-create-account")})]})]}),(0,n.jsx)("form",{onSubmit:L((function(e){var t=e.email,r=e.password,n=e.remember_me;S({email:t,password:r,remember_me:n}),b(),console.log(t,r,n,"data")})),className:"flex flex-col justify-center",noValidate:!0,children:(0,n.jsxs)("div",{className:"flex flex-col space-y-3.5",children:[(0,n.jsx)(a.Z,C({label:f("forms:label-email"),type:"email",variant:"solid"},I("email",{required:"".concat(f("forms:email-required")),pattern:{value:/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/,message:f("forms:email-error")}}),{error:null===(t=A.email)||void 0===t?void 0:t.message})),(0,n.jsx)(l.Z,C({label:f("forms:label-password"),error:null===(r=A.password)||void 0===r?void 0:r.message},I("password",{required:"".concat(f("forms:password-required"))}))),(0,n.jsxs)("div",{className:"flex items-center justify-center",children:[(0,n.jsxs)("div",{className:"flex items-center shrink-0",children:[(0,n.jsx)("label",{className:"relative inline-block cursor-pointer switch",children:(0,n.jsx)(w.Z,{checked:E,onChange:B})}),(0,n.jsx)("label",{htmlFor:"remember",className:"mt-1 text-sm cursor-pointer shrink-0 text-heading ltr:pl-2.5 rtl:pr-2.5",children:f("forms:label-remember-me")})]}),(0,n.jsx)("div",{className:"flex ltr:ml-auto rtl:mr-auto mt-[3px]",children:(0,n.jsx)("button",{type:"button",onClick:function(){return x("FORGET_PASSWORD")},className:"text-sm ltr:text-right rtl:text-left text-heading ltr:pl-3 lg:rtl:pr-3 hover:no-underline hover:text-brand-dark focus:outline-none focus:text-brand-dark",children:f("common:text-forgot-password")})})]}),(0,n.jsx)("div",{className:"relative",children:(0,n.jsx)(i.Z,{type:"submit",loading:_,disabled:_,className:"w-full mt-2 tracking-normal h-11 md:h-12 font-15px md:font-15px",variant:"formButton",children:f("common:text-sign-in")})})]})}),(0,n.jsx)("div",{className:"relative flex flex-col items-center justify-center text-sm",children:(0,n.jsx)("span",{className:"mt-6 text-sm text-brand-dark opacity-70",children:f("common:text-or")})}),(0,n.jsxs)("div",{className:"flex justify-center mt-5 space-x-2.5",children:[(0,n.jsx)("button",{className:"flex items-center justify-center w-10 h-10 transition-all border rounded-full cursor-pointer group border-border-one hover:border-brand focus:border-brand focus:outline-none",onClick:m,children:(0,n.jsx)(N.Am9,{className:"w-4 h-4 text-opacity-50 transition-all text-brand-dark group-hover:text-brand "})}),(0,n.jsx)("button",{className:"flex items-center justify-center w-10 h-10 transition-all border rounded-full cursor-pointer group border-border-one hover:border-brand focus:border-brand focus:outline-none",onClick:m,children:(0,n.jsx)(N.fWC,{className:"w-4 h-4 text-opacity-50 transition-all text-brand-dark group-hover:text-brand"})}),(0,n.jsx)("button",{className:"flex items-center justify-center w-10 h-10 transition-all border rounded-full cursor-pointer group border-border-one hover:border-brand focus:border-brand focus:outline-none",onClick:m,children:(0,n.jsx)(N.BUd,{className:"w-4 h-4 text-opacity-50 transition-all text-brand-dark group-hover:text-brand"})})]})]})]})]})}},89183:function(e,t,r){"use strict";var n=r(85893),o=r(2962);t.Z=function(e){var t=e.title,r=e.description,a=e.path;return(0,n.jsx)(o.PB,{title:t,description:r,openGraph:{url:"".concat("https://borobazar.vercel.app/","/").concat(a),title:t,description:r,images:[{url:"/assets/images/og-image-01.png",width:800,height:600,alt:"Og Image Alt"},{url:"/assets/images/og-image-02.png",width:900,height:800,alt:"Og Image Alt Second"}]}})}},14685:function(e,t,r){"use strict";var n=r(85893),o=r(94184),a=r.n(o),l=r(67294),i=r(53990);function s(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function c(e,t){if(null==e)return{};var r,n,o=function(e,t){if(null==e)return{};var r,n,o={},a=Object.keys(e);for(n=0;n<a.length;n++)r=a[n],t.indexOf(r)>=0||(o[r]=e[r]);return o}(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(n=0;n<a.length;n++)r=a[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}var u=(0,l.forwardRef)((function(e,t){var r=e.className,o=e.variant,l=void 0===o?"primary":o,u=e.children,d=e.active,m=e.loading,f=void 0!==m&&m,p=e.disabled,b=void 0!==p&&p,x=c(e,["className","variant","children","active","loading","disabled"]),h=a()("group text-[13px] md:text-sm lg:text-15px leading-4 inline-flex items-center cursor-pointer transition ease-in-out duration-300 font-body font-semibold text-center justify-center tracking-[0.2px] rounded placeholder-white focus-visible:outline-none focus:outline-none",{"h-12 md:h-14 bg-brand text-brand-light tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90":"primary"===l,"h-12 md:h-14 bg-brand-light text-brand-dark border border-border-four tracking-widest px-5 md:px-6 lg:px-8 py-4 md:py-3.5 lg:py-4":"border"===l,"h-11 md:h-[50px] bg-brand text-brand-light font-manrope px-5 lg:px-6 py-4 md:py-3.5 lg:py-4 hover:text-white hover:bg-opacity-90 focus:bg-opacity-70":"formButton"===l,"cursor-not-allowed hover:cursor-not-allowed bg-opacity-50 hover:bg-opacity-50":b},r);return(0,n.jsxs)("button",function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){s(e,t,r[t])}))}return e}({"aria-pressed":d,"data-variant":l,ref:t,className:h,disabled:b},x,{children:[u,f&&(0,n.jsx)(i.Cd,{className:"w-5 h-5 animate-spin ltr:-mr-1 rtl:-ml-1 ltr:ml-3 rtl:mr-3 "})]}))}));u.displayName="Button",t.Z=u},89341:function(e,t,r){"use strict";var n=r(85893),o=r(60155),a=r(94184),l=r.n(a);t.Z=function(e){var t=e.className,r=e.onClick;return(0,n.jsx)("button",{onClick:r,"aria-label":"Close Button",className:l()("fixed z-10 inline-flex items-center justify-center w-8 h-8 lg:w-9 lg:h-9 transition duration-200 text-brand-dark text-opacity-50 focus:outline-none  hover:text-opacity-100 top-0.5 md:top-2 lg:top-7 xl:top-10 ltr:right-0.5 rtl:left-0.5 md:ltr:right-2 md:rtl:left-0 lg:ltr:right-7 lg:rtl:left-7 xl:ltr:right-10 xl:rtl:left-10 bg-brand-light lg:bg-transparent rounded-full",t),children:(0,n.jsx)(o.bjh,{className:"text-xl lg:text-2xl"})})}},98121:function(e,t,r){"use strict";var n=r(85893);t.Z=function(e){var t=e.className,r=void 0===t?"":t;return(0,n.jsx)("div",{className:"border-t border-border-base ".concat(r)})}},84367:function(e,t,r){"use strict";r.d(t,{Z:function(){return h}});var n=r(85893),o=r(94184),a=r.n(o),l=r(67294);function i(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var s=function(e){return(0,n.jsxs)("svg",function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){i(e,t,r[t])}))}return e}({xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},e,{children:[(0,n.jsx)("path",{strokeLinecap:"round",strokeLinejoin:"round",strokeWidth:2,d:"M15 12a3 3 0 11-6 0 3 3 0 016 0z"}),(0,n.jsx)("path",{strokeLinecap:"round",strokeLinejoin:"round",strokeWidth:2,d:"M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"})]}))};function c(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}var u=function(e){return(0,n.jsx)("svg",function(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){c(e,t,r[t])}))}return e}({xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},e,{children:(0,n.jsx)("path",{strokeLinecap:"round",strokeLinejoin:"round",strokeWidth:2,d:"M13.875 18.825A10.05 10.05 0 0112 19c-4.478 0-8.268-2.943-9.543-7a9.97 9.97 0 011.563-3.029m5.858.908a3 3 0 114.243 4.243M9.878 9.878l4.242 4.242M9.88 9.88l-3.29-3.29m7.532 7.532l3.29 3.29M3 3l3.59 3.59m0 0A9.953 9.953 0 0112 5c4.478 0 8.268 2.943 9.543 7a10.025 10.025 0 01-4.132 5.411m0 0L21 21"})}))},d=r(20868);function m(e,t,r){return t in e?Object.defineProperty(e,t,{value:r,enumerable:!0,configurable:!0,writable:!0}):e[t]=r,e}function f(e){for(var t=1;t<arguments.length;t++){var r=null!=arguments[t]?arguments[t]:{},n=Object.keys(r);"function"===typeof Object.getOwnPropertySymbols&&(n=n.concat(Object.getOwnPropertySymbols(r).filter((function(e){return Object.getOwnPropertyDescriptor(r,e).enumerable})))),n.forEach((function(t){m(e,t,r[t])}))}return e}function p(e,t){if(null==e)return{};var r,n,o=function(e,t){if(null==e)return{};var r,n,o={},a=Object.keys(e);for(n=0;n<a.length;n++)r=a[n],t.indexOf(r)>=0||(o[r]=e[r]);return o}(e,t);if(Object.getOwnPropertySymbols){var a=Object.getOwnPropertySymbols(e);for(n=0;n<a.length;n++)r=a[n],t.indexOf(r)>=0||Object.prototype.propertyIsEnumerable.call(e,r)&&(o[r]=e[r])}return o}var b="py-2 px-4 md:px-5 w-full appearance-none transition duration-150 ease-in-out border text-input text-13px lg:text-sm font-body rounded-md placeholder-[#B3B3B3] transition duration-200 ease-in-out text-brand-dark border-border-two focus:border-2 focus:outline-none focus:ring-0 focus:border-brand h-11 md:h-12",x=l.forwardRef((function(e,t){var r=e.className,o=void 0===r?"block":r,i=e.inputClassName,c=e.label,m=e.name,x=e.error,h=(e.shadow,p(e,["className","inputClassName","label","name","error","shadow"])),g=(0,l.useState)(!1),v=g[0],y=g[1],j=(0,d.$G)().t,w=a()(b,i);return(0,n.jsxs)("div",{className:o,children:[c&&(0,n.jsx)("label",{htmlFor:m,className:"block mb-3 text-sm font-normal leading-none cursor-pointer text-brand-dark opacity-70",children:j(c)}),(0,n.jsxs)("div",{className:"relative",children:[(0,n.jsx)("input",f({id:m,name:m,type:v?"text":"password",ref:t,className:w,autoComplete:"off",spellCheck:"false"},h)),(0,n.jsx)("label",{htmlFor:m,className:"absolute -mt-2 cursor-pointer ltr:right-4 rtl:left-4 top-5 text-brand-dark text-opacity-30",onClick:function(){return y((function(e){return!e}))},children:v?(0,n.jsx)(u,{className:"w-6 h-6"}):(0,n.jsx)(s,{className:"w-6 h-6"})})]}),x&&(0,n.jsx)("p",{className:"my-2 text-13px text-brand-danger text-opacity-70",children:j(x)})]})})),h=x;x.displayName="PasswordInput"},44567:function(e,t,r){"use strict";var n=r(85893),o=r(56727),a=r(11163),l=r(62687);t.Z=function(e,t){var r=e.srText,i=void 0===r?"toggle":r,s=e.checked,c=e.onChange,u=(0,a.useRouter)().locale,d=(0,l.M)(u);return(0,n.jsxs)(o.rs,{checked:s,onChange:c,type:"button",ref:t,className:"".concat(s?"bg-brand":"bg-fill-four","\n          relative inline-flex shrink-0 h-6 lg:h-7 w-10 lg:w-12 border-2 border-transparent rounded-full cursor-pointer transition-colors ease-in-out duration-200 focus:outline-none focus-visible:ring-2  focus-visible:ring-brand-light focus-visible:ring-opacity-75 focus:border-brand"),children:[(0,n.jsx)("span",{className:"sr-only",children:i}),(0,n.jsx)("span",{"aria-hidden":"true",className:"".concat(s?"rtl"===d?"-translate-x-4 lg:-translate-x-5":"translate-x-4 lg:translate-x-5":"translate-x-0","\n            pointer-events-none inline-block h-5 lg:h-6 w-5 lg:w-6 rounded-full bg-brand-light shadow-switch transform ring-0 transition ease-in-out duration-200")})]})}},34949:function(e,t,r){"use strict";r.r(t),r.d(t,{__N_SSG:function(){return s},default:function(){return c}});var n=r(85893),o=r(17653),a=r(87703),l=r(98121),i=r(89183),s=!0;function c(){return(0,n.jsxs)(n.Fragment,{children:[(0,n.jsx)(i.Z,{title:"Sign In",description:"Fastest E-commerce template built with React, NextJS, TypeScript, React-Query and Tailwind CSS.",path:"signin"}),(0,n.jsx)(l.Z,{}),(0,n.jsx)("div",{className:"flex items-center justify-center",children:(0,n.jsx)("div",{className:"px-4 py-12 sm:py-16 lg:py-20 md:px-6 lg:px-8 2xl:px-10",children:(0,n.jsx)(a.default,{isPopup:!1,className:"border rounded-lg border-border-base"})})}),(0,n.jsx)(l.Z,{})]})}c.Layout=o.Z}},function(e){e.O(0,[9866,6351,5445,2013,260,3609,9351,1560,7979,7653,9774,2888,179],(function(){return t=62339,e(e.s=t);var t}));var t=e.O();_N_E=t}]);