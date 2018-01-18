/*!
 * jQuery numberMask Plugin v0.9.0
 *
 * Licensed under the MIT License
 * Authors: Konstantin Krivlenia
 *          krivlenia@gmail.com
 * Site:  https://github.com/Mavrin/maskInput
 */
!function(e){e.fn.numberMask=function(t){var n,r={type:"int",beforePoint:10,afterPoint:2,defaultValueInput:0,decimalMark:["."],pattern:""},a=function(e){var t=e.which;if(e.ctrlKey||e.altKey||e.metaKey||32>t)return!0;if(t){var r=String.fromCharCode(t),a=e.target.value,i=o(e.target);return a=a.substring(0,i.start)+r+a.substring(i.end),n.test(a)}},i=function(t){var n=e(t.target);(13==t.which||86==t.which)&&n.val(l(n))},o=function(e){var t,n,r,a,i,o=0,c=0,l=!1;return"number"==typeof e.selectionStart&&"number"==typeof e.selectionEnd?(o=e.selectionStart,c=e.selectionEnd):(n=document.selection.createRange(),n&&n.parentElement()==e&&(a=e.value.length,t=e.value.replace(/\r\n/g,"\n"),r=e.createTextRange(),r.moveToBookmark(n.getBookmark()),i=e.createTextRange(),i.collapse(!1),r.compareEndPoints("StartToEnd",i)>-1?o=c=a:(o=-r.moveStart("character",-a),o+=t.slice(0,o).split("\n").length-1,r.compareEndPoints("EndToEnd",i)>-1?c=a:(c=-r.moveEnd("character",-a),c+=t.slice(0,c).split("\n").length-1)))),o-c!=0&&(l=!0),{start:o,end:c,statusSelection:l}},c=function(t){var n=e(t.target);""!=n.val()&&n.val(l(n))},l=function(e){var t=e.val();return n.test(t)?t:r.defaultValueInput},u=function(){for(var e="(\\"+r.decimalMark[0],t=1;t<r.decimalMark.length;t++)e+="|\\"+r.decimalMark[t];return e+=")"};return this.bind("keypress",a).bind("keyup",i).bind("blur",c),t&&(t.decimalMark&&"string"===e.type(t.decimalMark)&&(t.decimalMark=[t.decimalMark]),e.extend(r,t)),n="object"==typeof r.pattern&&r.pattern instanceof RegExp?r.pattern:new RegExp("int"==r.type?"^\\d{1,"+r.beforePoint+"}$":"^\\d{1,"+r.beforePoint+"}$|^\\d{1,"+r.beforePoint+"}"+u()+"\\d{0,"+r.afterPoint+"}$"),this}}(jQuery);