!function(e){var t={};function n(r){if(t[r])return t[r].exports;var i=t[r]={i:r,l:!1,exports:{}};return e[r].call(i.exports,i,i.exports,n),i.l=!0,i.exports}n.m=e,n.c=t,n.d=function(e,t,r){n.o(e,t)||Object.defineProperty(e,t,{configurable:!1,enumerable:!0,get:r})},n.n=function(e){var t=e&&e.__esModule?function(){return e.default}:function(){return e};return n.d(t,"a",t),t},n.o=function(e,t){return Object.prototype.hasOwnProperty.call(e,t)},n.p="",n(n.s=37)}([function(e,t){var n=e.exports="undefined"!=typeof window&&window.Math==Math?window:"undefined"!=typeof self&&self.Math==Math?self:Function("return this")();"number"==typeof __g&&(__g=n)},function(e,t){var n={}.hasOwnProperty;e.exports=function(e,t){return n.call(e,t)}},function(e,t,n){var r=n(3),i=n(12);e.exports=n(4)?function(e,t,n){return r.f(e,t,i(1,n))}:function(e,t,n){return e[t]=n,e}},function(e,t,n){var r=n(10),i=n(28),o=n(16),a=Object.defineProperty;t.f=n(4)?Object.defineProperty:function(e,t,n){if(r(e),t=o(t,!0),r(n),i)try{return a(e,t,n)}catch(e){}if("get"in n||"set"in n)throw TypeError("Accessors not supported!");return"value"in n&&(e[t]=n.value),e}},function(e,t,n){e.exports=!n(11)(function(){return 7!=Object.defineProperty({},"a",{get:function(){return 7}}).a})},function(e,t,n){var r=n(49),i=n(15);e.exports=function(e){return r(i(e))}},function(e,t,n){var r=n(20)("wks"),i=n(13),o=n(0).Symbol,a="function"==typeof o;(e.exports=function(e){return r[e]||(r[e]=a&&o[e]||(a?o:i)("Symbol."+e))}).store=r},function(e,t){e.exports=function(e){return"object"==typeof e?null!==e:"function"==typeof e}},function(e,t){e.exports=!0},function(e,t){var n=e.exports={version:"2.6.12"};"number"==typeof __e&&(__e=n)},function(e,t,n){var r=n(7);e.exports=function(e){if(!r(e))throw TypeError(e+" is not an object!");return e}},function(e,t){e.exports=function(e){try{return!!e()}catch(e){return!0}}},function(e,t){e.exports=function(e,t){return{enumerable:!(1&e),configurable:!(2&e),writable:!(4&e),value:t}}},function(e,t){var n=0,r=Math.random();e.exports=function(e){return"Symbol(".concat(void 0===e?"":e,")_",(++n+r).toString(36))}},function(e,t){var n=Math.ceil,r=Math.floor;e.exports=function(e){return isNaN(e=+e)?0:(e>0?r:n)(e)}},function(e,t){e.exports=function(e){if(void 0==e)throw TypeError("Can't call method on  "+e);return e}},function(e,t,n){var r=n(7);e.exports=function(e,t){if(!r(e))return e;var n,i;if(t&&"function"==typeof(n=e.toString)&&!r(i=n.call(e)))return i;if("function"==typeof(n=e.valueOf)&&!r(i=n.call(e)))return i;if(!t&&"function"==typeof(n=e.toString)&&!r(i=n.call(e)))return i;throw TypeError("Can't convert object to primitive value")}},function(e,t){e.exports={}},function(e,t,n){var r=n(32),i=n(21);e.exports=Object.keys||function(e){return r(e,i)}},function(e,t,n){var r=n(20)("keys"),i=n(13);e.exports=function(e){return r[e]||(r[e]=i(e))}},function(e,t,n){var r=n(9),i=n(0),o=i["__core-js_shared__"]||(i["__core-js_shared__"]={});(e.exports=function(e,t){return o[e]||(o[e]=void 0!==t?t:{})})("versions",[]).push({version:r.version,mode:n(8)?"pure":"global",copyright:"© 2020 Denis Pushkarev (zloirock.ru)"})},function(e,t){e.exports="constructor,hasOwnProperty,isPrototypeOf,propertyIsEnumerable,toLocaleString,toString,valueOf".split(",")},function(e,t,n){var r=n(3).f,i=n(1),o=n(6)("toStringTag");e.exports=function(e,t,n){e&&!i(e=n?e:e.prototype,o)&&r(e,o,{configurable:!0,value:t})}},function(e,t,n){t.f=n(6)},function(e,t,n){var r=n(0),i=n(9),o=n(8),a=n(23),s=n(3).f;e.exports=function(e){var t=i.Symbol||(i.Symbol=o?{}:r.Symbol||{});"_"==e.charAt(0)||e in t||s(t,e,{value:a.f(e)})}},function(e,t){t.f={}.propertyIsEnumerable},function(e,t,n){"use strict";var r=n(8),i=n(27),o=n(30),a=n(2),s=n(17),c=n(47),u=n(22),f=n(54),m=n(6)("iterator"),_=!([].keys&&"next"in[].keys()),l=function(){return this};e.exports=function(e,t,n,d,p,g,b){c(n,t,d);var v,y,h,w=function(e){if(!_&&e in j)return j[e];switch(e){case"keys":case"values":return function(){return new n(this,e)}}return function(){return new n(this,e)}},x=t+" Iterator",S="values"==p,O=!1,j=e.prototype,T=j[m]||j["@@iterator"]||p&&j[p],P=T||w(p),k=p?S?w("entries"):P:void 0,E="Array"==t&&j.entries||T;if(E&&(h=f(E.call(new e)))!==Object.prototype&&h.next&&(u(h,x,!0),r||"function"==typeof h[m]||a(h,m,l)),S&&T&&"values"!==T.name&&(O=!0,P=function(){return T.call(this)}),r&&!b||!_&&!O&&j[m]||a(j,m,P),s[t]=P,s[x]=l,p)if(v={values:S?P:w("values"),keys:g?P:w("keys"),entries:k},b)for(y in v)y in j||o(j,y,v[y]);else i(i.P+i.F*(_||O),t,v);return v}},function(e,t,n){var r=n(0),i=n(9),o=n(45),a=n(2),s=n(1),c=function(e,t,n){var u,f,m,_=e&c.F,l=e&c.G,d=e&c.S,p=e&c.P,g=e&c.B,b=e&c.W,v=l?i:i[t]||(i[t]={}),y=v.prototype,h=l?r:d?r[t]:(r[t]||{}).prototype;for(u in l&&(n=t),n)(f=!_&&h&&void 0!==h[u])&&s(v,u)||(m=f?h[u]:n[u],v[u]=l&&"function"!=typeof h[u]?n[u]:g&&f?o(m,r):b&&h[u]==m?function(e){var t=function(t,n,r){if(this instanceof e){switch(arguments.length){case 0:return new e;case 1:return new e(t);case 2:return new e(t,n)}return new e(t,n,r)}return e.apply(this,arguments)};return t.prototype=e.prototype,t}(m):p&&"function"==typeof m?o(Function.call,m):m,p&&((v.virtual||(v.virtual={}))[u]=m,e&c.R&&y&&!y[u]&&a(y,u,m)))};c.F=1,c.G=2,c.S=4,c.P=8,c.B=16,c.W=32,c.U=64,c.R=128,e.exports=c},function(e,t,n){e.exports=!n(4)&&!n(11)(function(){return 7!=Object.defineProperty(n(29)("div"),"a",{get:function(){return 7}}).a})},function(e,t,n){var r=n(7),i=n(0).document,o=r(i)&&r(i.createElement);e.exports=function(e){return o?i.createElement(e):{}}},function(e,t,n){e.exports=n(2)},function(e,t,n){var r=n(10),i=n(48),o=n(21),a=n(19)("IE_PROTO"),s=function(){},c=function(){var e,t=n(29)("iframe"),r=o.length;for(t.style.display="none",n(53).appendChild(t),t.src="javascript:",(e=t.contentWindow.document).open(),e.write("<script>document.F=Object<\/script>"),e.close(),c=e.F;r--;)delete c.prototype[o[r]];return c()};e.exports=Object.create||function(e,t){var n;return null!==e?(s.prototype=r(e),n=new s,s.prototype=null,n[a]=e):n=c(),void 0===t?n:i(n,t)}},function(e,t,n){var r=n(1),i=n(5),o=n(50)(!1),a=n(19)("IE_PROTO");e.exports=function(e,t){var n,s=i(e),c=0,u=[];for(n in s)n!=a&&r(s,n)&&u.push(n);for(;t.length>c;)r(s,n=t[c++])&&(~o(u,n)||u.push(n));return u}},function(e,t){var n={}.toString;e.exports=function(e){return n.call(e).slice(8,-1)}},function(e,t,n){var r=n(15);e.exports=function(e){return Object(r(e))}},function(e,t){t.f=Object.getOwnPropertySymbols},function(e,t,n){var r=n(32),i=n(21).concat("length","prototype");t.f=Object.getOwnPropertyNames||function(e){return r(e,i)}},function(e,t,n){"use strict";var r=n(38);r.keys().forEach(function(e){r(e)})},function(e,t,n){var r={"./js/script.js":39,"./sass/styles.scss":70};function i(e){return n(o(e))}function o(e){var t=r[e];if(!(t+1))throw new Error("Cannot find module '"+e+"'.");return t}i.keys=function(){return Object.keys(r)},i.resolve=o,e.exports=i,i.id=38},function(e,t,n){window.jQuery;var r=function(e){return e&&e.__esModule?e:{default:e}}(n(40));window.wpmdb=window.wpmdb||{},wpmdb.mediaFiles={remote_media_files_unavailable:!1},function(e,t){var n=0,i=e("#mf-select-subsites-section"),o=e("#mf-select-subsites");Object.size||(Object.size=function(e){var t,n=0;for(t in e)e.hasOwnProperty(t)&&n++;return n}),Object.keys||(Object.keys=function(){"use strict";var e=Object.prototype.hasOwnProperty,t=!{toString:null}.propertyIsEnumerable("toString"),n=["toString","toLocaleString","valueOf","hasOwnProperty","isPrototypeOf","propertyIsEnumerable","constructor"],i=n.length;return function(o){if("object"!==(void 0===o?"undefined":(0,r.default)(o))&&("function"!=typeof o||null===o))throw new TypeError("Object.keys called on non-object");var a,s,c=[];for(a in o)e.call(o,a)&&c.push(a);if(t)for(s=0;s<i;s++)e.call(o,n[s])&&c.push(n[s]);return c}}());var a=function(){e("#media-files").attr("data-available","0"),e("#media-files").prop("checked",!1),e("#media-files").attr("disabled","disabled"),e(".media-files").addClass("disabled"),e(".media-files-options .expandable-content").hide()},s=function(n){var r=t.functions.wpmdb_migration_type();if(-1===e.inArray(r,["savefile","find_replace","import"])){if(e(".media-files-options").show(),e(".media-files-push").hide(),n)return e(".media-files-options ul").hide(),e(".media-migration-unavailable").show(),void a();if(void 0!==t.mediaFiles.remote_connection_data&&wpmdb_data.media_files_version!==t.mediaFiles.remote_connection_data.media_files_version)return e(".media-files-remote-location").html(t.mediaFiles.remote_connection_data.url),e(".media-file-remote-version").html(t.mediaFiles.remote_connection_data.media_files_version),e(".media-files-different-plugin-version-notice").show(),void a();if("true"===wpmdb_data.is_multisite){var s=function(){var e={};"pull"===t.functions.wpmdb_migration_type()?void 0!==t.mediaFiles.remote_connection_data&&void 0!==t.mediaFiles.remote_connection_data.subsites&&(e=t.mediaFiles.remote_connection_data.subsites):void 0!==wpmdb_data.subsites&&(e=wpmdb_data.subsites);return e}(),c=e("#_mf-selected-subsites"),u=e("#mf-selected-subsites").val();"pull"===r&&0<Object.size(s)&&c.length&&(u=e.parseJSON(c.val()),c.remove()),t.functions.update_multiselect("#mf-selected-subsites",s,u),e.wpmdb.apply_filters("wpmdbmf_enable_select_subsites",!0)?i.show():(o.prop("checked",!1),i.hide()),o.change(),d()}e(".media-files-options ul").show(),e(".media-migration-unavailable").hide(),e(".media-files-different-plugin-version-notice").hide(),e("#media-files").removeAttr("disabled"),e(".media-files").removeClass("disabled"),e("#media-files").attr("data-available","1")}else e(".media-files-options").hide()};function c(i){if(0===Object.size(i.files_to_migrate))return delete i.files_to_migrate,delete i.total_size,e("#compare-remove-media").is(":checked")||setTimeout(function(){e.wpmdb.do_action("wpmdbmf_media_transfer_complete")},100*t.mediaFiles.remote_connection_data.media_files_max_file_uploads),t.common.next_step_in_migration={fn:t.functions.finalise_media_migration,args:[i]},void t.functions.execute_next_step();var o=[],a=0,s=0;if(e.each(i.files_to_migrate,function(e,r){if("push"===t.functions.wpmdb_migration_type()&&r>n){var c=wpmdbmf_strings.file_too_large+" "+e+" (#124mf)<br>";t.common.non_fatal_errors+=c}else if(o.length){if(a+r>i.bottleneck||s>=t.mediaFiles.remote_connection_data.media_files_max_file_uploads)return!1;o.push(e),a+=r}else o.push(e),a+=r;delete i.files_to_migrate[e],++i.media_progress_image_number,++s}),!t.common.migration_error)return o.length?void e.ajax({url:ajaxurl,type:"POST",dataType:"text",cache:!1,data:{action:"wpmdbmf_migrate_media",migration_state_id:t.migration_state_id,file_chunk:o,nonce:wpmdb_data.nonces.migrate_media},error:function(e,n,r){t.current_migration.setState(wpmdbmf_strings.migration_failed,t.functions.wpmdbGetAjaxErrors(wpmdbmf_strings.migration_failed,"(#102mf)",e.responseText,e),"error"),console.log(e),console.log(n),console.log(r),t.common.migration_error=!0,t.functions.migration_complete_events()},success:function(n){var o=n;if(n=t.functions.wpmdb_parse_json(e.trim(n)))if(void 0===n.wpmdb_error||1!==n.wpmdb_error){if(void 0!==n.wpmdb_non_fatal_error&&1===n.wpmdb_non_fatal_error&&(t.common.non_fatal_errors+=n.body),void 0!==(0,r.default)(n.wpmdb_memory_too_low_error)&&1===n.wpmdb_memory_too_low_error&&(t.common.non_fatal_errors+=wpmdbmf_strings.memory_limit_exceeded+" "+n.files+"<br>"),n.transfers&&n.transfers.length){var s=0;e.each(n.transfers,function(e,n){setTimeout(function(){t.current_migration.model.getStageModel("media").setItemComplete(n.file)},s),s+=50})}i.media_progress+=a,t.common.next_step_in_migration={fn:c,args:[i]},t.functions.execute_next_step()}else u(n.body);else u(o)}}):(t.common.next_step_in_migration={fn:c,args:[i]},void t.functions.execute_next_step());t.functions.migration_complete_events()}function u(e){t.current_migration.setState(wpmdbmf_strings.migration_failed,t.functions.wpmdbGetAjaxErrors("","",e),"error"),t.common.migration_error=!0,t.functions.migration_complete_events()}function f(){return t.functions.is_media_migration()}function m(n,r){return"savefile"!==t.functions.wpmdb_migration_type()&&e("#media-files").is(":checked")&&"true"===wpmdb_data.is_multisite&&o.is(":checked")&&null===e("#mf-selected-subsites").val()&&(alert(wpmdbmf_strings.please_select_a_subsite),n=!1),n}function l(){var t=e('input[name="media_migration_option"][value="compare-remove"]');e(t).is(":checked")?e(".compare-remove-warning").show():e(".compare-remove-warning").hide()}function d(){var n=e(".mf-selected-subsites-tables-differ"),r=e("#mf-selected-subsites").val(),i=e.wpmdb.apply_filters("wpmdb_get_tables_to_migrate",null,null);if("true"===wpmdb_data.is_multisite&&o.is(":checked")&&void 0!==r&&null!==r&&void 0!==i&&null!==i&&0<i.length){var a=e.wpmdb.apply_filters("wpmdb_get_table_prefix",null,null),s=!1;e.each(i,function(n,i){if(t.functions.table_is(a,"posts",i)||t.functions.table_is(a,"postmeta",i)){var o=t.functions.subsite_for_table(a,i);if(0>e.inArray(o.toString(),r))return s=!0,!1}}),s?n.show():n.hide()}else n.hide()}function p(n){!0===f()&&-1===e.inArray(t.functions.wpmdb_migration_type(),["savefile","find_replace","import"])&&t.current_migration.model.addStage("media",[],n.dataType,{strings:{itemsName:wpmdb_strings.files}})}t.functions.prepare_remove_all_files=function(){t.mediaFiles.connection_info=e.trim(e(".pull-push-connection-info").val()).split("\n");var n=e('input[name="media_migration_option"]:checked').val();if(t.current_migration.model.setActiveStage("media"),"entire"===n){var r="removing_all_files_"+t.functions.wpmdb_migration_type();t.current_migration.setText(wpmdbmf_strings[r]);var i={remove_files:1,compare:0,offset:0};i.next_step_in_migration=t.functions.prepare_determine_media,t.common.next_step_in_migration={fn:t.functions.remove_files_recursive,args:[i]},t.functions.execute_next_step()}else t.common.next_step_in_migration={fn:t.functions.prepare_determine_media},t.functions.execute_next_step()},t.functions.remove_files_recursive=function(n){if(0===n.remove_files)return e("#compare-remove-media").is(":checked")&&setTimeout(function(){e.wpmdb.do_action("wpmdbmf_media_transfer_complete")},100*t.mediaFiles.remote_connection_data.media_files_max_file_uploads),void(!1!==n.next_step_in_migration?(t.common.next_step_in_migration={fn:n.next_step_in_migration},t.functions.execute_next_step()):t.functions.wpmdb_call_next_hook());t.mediaFiles.connection_info=e.trim(e(".pull-push-connection-info").val()).split("\n");var r=n;e.ajax({url:ajaxurl,type:"POST",dataType:"text",cache:!1,data:{action:"wpmdbmf_remove_files_recursive",migration_state_id:t.migration_state_id,compare:n.compare,offset:JSON.stringify(n.offset),nonce:wpmdb_data.nonces.remove_files_recursive},error:function(e,n,r){t.current_migration.setState(wpmdbmf_strings.migration_failed,t.functions.wpmdbGetAjaxErrors(wpmdbmf_strings.error_determining,"(#101mf)",e.responseText,e),"error"),console.log(e),console.log(n),console.log(r),t.common.migration_error=!0,t.functions.migration_complete_events()},success:function(i){var o=i;(n=t.functions.wpmdb_parse_json(e.trim(i)))?void 0===n.wpmdb_error||1!==n.wpmdb_error?(void 0!==n.wpmdb_non_fatal_error&&1===n.wpmdb_non_fatal_error&&(t.common.non_fatal_errors+=n.body),n.next_step_in_migration=r.next_step_in_migration,t.common.next_step_in_migration={fn:t.functions.remove_files_recursive,args:[n]},t.functions.execute_next_step()):u(n.body):u(o)}})},t.functions.prepare_determine_media=function(){t.mediaFiles.connection_info=e.trim(e(".pull-push-connection-info").val()).split("\n"),n=0;var r=0,i=0,o=e('input[name="media_migration_option"]:checked').val();t.current_migration.setText("0% - "+wpmdbmf_strings.determining),"compare-remove"===o&&(o="compare",r=1),"entire"===o&&(i=1);var a={};e.ajax({url:ajaxurl,type:"POST",dataType:"text",cache:!1,data:{action:"wpmdbmf_prepare_determine_media",migration_state_id:t.migration_state_id,nonce:wpmdb_data.nonces.prepare_determine_media},error:function(e,n,r){t.current_migration.setState(wpmdbmf_strings.migration_failed,t.functions.wpmdbGetAjaxErrors(wpmdbmf_strings.error_determining,"(#101mf)",e.responseText,e),"error"),console.log(e),console.log(n),console.log(r),t.common.migration_error=!0,t.functions.migration_complete_events()},success:function(o){var s=o;(a=t.functions.wpmdb_parse_json(e.trim(o)))?void 0===a.wpmdb_error||1!==a.wpmdb_error?(n=a.remote_max_upload_size,a.determine_progress=0,a.remove_local_media=r,a.copy_entire_media=i,t.common.next_step_in_migration={fn:t.functions.determine_media_to_migrate_recursive,args:[a]},t.functions.execute_next_step()):u(a.body):u(s)}})},t.functions.determine_media_to_migrate_recursive=function(n){if(n.determine_progress>=n.attachment_count)return t.common.next_step_in_migration={fn:t.functions.media_successfully_determined,args:[n]},void t.functions.execute_next_step();t.mediaFiles.connection_info=e.trim(e(".pull-push-connection-info").val()).split("\n"),e.ajax({url:ajaxurl,type:"POST",dataType:"text",cache:!1,data:{action:"wpmdbmf_determine_media_to_migrate_recursive",migration_state_id:t.migration_state_id,determine_progress:n.determine_progress,attachment_count:n.attachment_count,remote_uploads_url:n.remote_uploads_url,remove_local_media:n.remove_local_media,copy_entire_media:n.copy_entire_media,blogs:n.blogs,attachment_batch_limit:n.attachment_batch_limit,nonce:wpmdb_data.nonces.determine_media_to_migrate_recursive},error:function(e,n,r){t.current_migration.setState(wpmdbmf_strings.migration_failed,wpmdbmf_strings.error_determining+" (#101mf)","error"),console.log(e),console.log(n),console.log(r),t.common.migration_error=!0,t.functions.migration_complete_events()},success:function(r){var i=r;if(r=t.functions.wpmdb_parse_json(e.trim(r)))if(void 0===r.wpmdb_error||1!==r.wpmdb_error){n.blogs=r.blogs,n.determine_progress=r.determine_progress,n.total_size=n.total_size||0,n.total_size+=r.total_size,n.files_to_migrate=n.files_to_migrate||{},_.each(r.files_to_migrate,function(e,r){n.files_to_migrate[r]=e,t.current_migration.model.addStageItem("media",r,parseInt(e/1024))}),t.current_migration.fixProgressStageWidthForScrollBar();var o=Math.min(100,100*n.determine_progress/n.attachment_count),a=Math.floor(o);e(".migration-progress-stage-container[data-stage=media]").addClass("determining-media"),e(".progress-bar",".stage-progress.media").width(o+"%"),t.current_migration.setText(a+"% - "+wpmdbmf_strings.determining),t.common.next_step_in_migration={fn:t.functions.determine_media_to_migrate_recursive,args:[n]},t.functions.execute_next_step()}else u(r.body);else u(i)}})},t.functions.media_successfully_determined=function(n){if(void 0!==n.wpmdb_error&&1===n.wpmdb_error)return t.common.non_fatal_errors+=data.body,t.common.next_step_in_migration={fn:t.functions.wpmdb_call_next_hook},void t.functions.execute_next_step();n.media_progress=0,n.media_progress_image_number=0,n.bottleneck=wpmdb_data.max_request,n.files_to_migrate=n.files_to_migrate||{};var r="migrate_media_files_"+t.functions.wpmdb_migration_type();t.current_migration.setText(wpmdbmf_strings[r]),e(".migration-progress-stage-container[data-stage=media]").removeClass("determining-media"),t.common.next_step_in_migration={fn:c,args:[n]},t.functions.execute_next_step()},t.functions.finalise_media_migration=function(e){if(1===e.remove_local_media){var n="removing_files_"+t.functions.wpmdb_migration_type();return t.current_migration.setText(wpmdbmf_strings[n]),(e={}).remove_files=1,e.compare=1,e.offset="",e.next_step_in_migration=!1,t.common.next_step_in_migration={fn:t.functions.remove_files_recursive,args:[e]},void t.functions.execute_next_step()}t.functions.wpmdb_call_next_hook()},t.functions.is_media_migration=function(){return!("1"!==e("#media-files").attr("data-available")||!e("#media-files").is(":checked"))},e(document).ready(function(){-1!==e.inArray(t.functions.wpmdb_migration_type(),["savefile","find_replace","import"])&&e(".media-files-options").hide(),e.wpmdb.add_action("move_connection_info_box",function(){s(t.mediaFiles.remote_media_files_unavailable),t.functions.wpmdb_toggle_migration_action_text()}),e.wpmdb.add_action("verify_connection_to_remote_site",function(e){t.mediaFiles.remote_connection_data=e,t.mediaFiles.remote_media_files_unavailable=void 0===e.media_files_available,s(t.mediaFiles.remote_media_files_unavailable)}),e.wpmdb.add_action("wpmdbmst_select_subsite_changed",function(){s(t.mediaFiles.remote_media_files_unavailable)}),e.wpmdb.add_filter("wpmdb_before_migration_complete_hooks",function(n){return!1===f()||-1===e.inArray(t.functions.wpmdb_migration_type(),["push","pull"])?n:(n.push(t.functions.prepare_remove_all_files),n)}),e("body").on("change","#mf-select-subsites",function(){e.wpmdb.do_action("wpmdbmf_selected_subsites_changed")}),e("body").on("change","#mf-selected-subsites",function(){e.wpmdb.do_action("wpmdbmf_selected_subsites_changed")}),e.wpmdb.add_filter("wpmdb_migration_profile_ready",m),e.wpmdb.add_action("wpmdb_tables_to_migrate_changed",d),e.wpmdb.add_action("wpmdbmf_selected_subsites_changed",d),e.wpmdb.add_action("wpmdb_add_migration_stages",p),e('input[name="media_migration_option"]').change(function(){l()}),l()})}(jQuery,wpmdb)},function(e,t,n){"use strict";t.__esModule=!0;var r=a(n(41)),i=a(n(59)),o="function"==typeof i.default&&"symbol"==typeof r.default?function(e){return typeof e}:function(e){return e&&"function"==typeof i.default&&e.constructor===i.default&&e!==i.default.prototype?"symbol":typeof e};function a(e){return e&&e.__esModule?e:{default:e}}t.default="function"==typeof i.default&&"symbol"===o(r.default)?function(e){return void 0===e?"undefined":o(e)}:function(e){return e&&"function"==typeof i.default&&e.constructor===i.default&&e!==i.default.prototype?"symbol":void 0===e?"undefined":o(e)}},function(e,t,n){e.exports={default:n(42),__esModule:!0}},function(e,t,n){n(43),n(55),e.exports=n(23).f("iterator")},function(e,t,n){"use strict";var r=n(44)(!0);n(26)(String,"String",function(e){this._t=String(e),this._i=0},function(){var e,t=this._t,n=this._i;return n>=t.length?{value:void 0,done:!0}:(e=r(t,n),this._i+=e.length,{value:e,done:!1})})},function(e,t,n){var r=n(14),i=n(15);e.exports=function(e){return function(t,n){var o,a,s=String(i(t)),c=r(n),u=s.length;return c<0||c>=u?e?"":void 0:(o=s.charCodeAt(c))<55296||o>56319||c+1===u||(a=s.charCodeAt(c+1))<56320||a>57343?e?s.charAt(c):o:e?s.slice(c,c+2):a-56320+(o-55296<<10)+65536}}},function(e,t,n){var r=n(46);e.exports=function(e,t,n){if(r(e),void 0===t)return e;switch(n){case 1:return function(n){return e.call(t,n)};case 2:return function(n,r){return e.call(t,n,r)};case 3:return function(n,r,i){return e.call(t,n,r,i)}}return function(){return e.apply(t,arguments)}}},function(e,t){e.exports=function(e){if("function"!=typeof e)throw TypeError(e+" is not a function!");return e}},function(e,t,n){"use strict";var r=n(31),i=n(12),o=n(22),a={};n(2)(a,n(6)("iterator"),function(){return this}),e.exports=function(e,t,n){e.prototype=r(a,{next:i(1,n)}),o(e,t+" Iterator")}},function(e,t,n){var r=n(3),i=n(10),o=n(18);e.exports=n(4)?Object.defineProperties:function(e,t){i(e);for(var n,a=o(t),s=a.length,c=0;s>c;)r.f(e,n=a[c++],t[n]);return e}},function(e,t,n){var r=n(33);e.exports=Object("z").propertyIsEnumerable(0)?Object:function(e){return"String"==r(e)?e.split(""):Object(e)}},function(e,t,n){var r=n(5),i=n(51),o=n(52);e.exports=function(e){return function(t,n,a){var s,c=r(t),u=i(c.length),f=o(a,u);if(e&&n!=n){for(;u>f;)if((s=c[f++])!=s)return!0}else for(;u>f;f++)if((e||f in c)&&c[f]===n)return e||f||0;return!e&&-1}}},function(e,t,n){var r=n(14),i=Math.min;e.exports=function(e){return e>0?i(r(e),9007199254740991):0}},function(e,t,n){var r=n(14),i=Math.max,o=Math.min;e.exports=function(e,t){return(e=r(e))<0?i(e+t,0):o(e,t)}},function(e,t,n){var r=n(0).document;e.exports=r&&r.documentElement},function(e,t,n){var r=n(1),i=n(34),o=n(19)("IE_PROTO"),a=Object.prototype;e.exports=Object.getPrototypeOf||function(e){return e=i(e),r(e,o)?e[o]:"function"==typeof e.constructor&&e instanceof e.constructor?e.constructor.prototype:e instanceof Object?a:null}},function(e,t,n){n(56);for(var r=n(0),i=n(2),o=n(17),a=n(6)("toStringTag"),s="CSSRuleList,CSSStyleDeclaration,CSSValueList,ClientRectList,DOMRectList,DOMStringList,DOMTokenList,DataTransferItemList,FileList,HTMLAllCollection,HTMLCollection,HTMLFormElement,HTMLSelectElement,MediaList,MimeTypeArray,NamedNodeMap,NodeList,PaintRequestList,Plugin,PluginArray,SVGLengthList,SVGNumberList,SVGPathSegList,SVGPointList,SVGStringList,SVGTransformList,SourceBufferList,StyleSheetList,TextTrackCueList,TextTrackList,TouchList".split(","),c=0;c<s.length;c++){var u=s[c],f=r[u],m=f&&f.prototype;m&&!m[a]&&i(m,a,u),o[u]=o.Array}},function(e,t,n){"use strict";var r=n(57),i=n(58),o=n(17),a=n(5);e.exports=n(26)(Array,"Array",function(e,t){this._t=a(e),this._i=0,this._k=t},function(){var e=this._t,t=this._k,n=this._i++;return!e||n>=e.length?(this._t=void 0,i(1)):i(0,"keys"==t?n:"values"==t?e[n]:[n,e[n]])},"values"),o.Arguments=o.Array,r("keys"),r("values"),r("entries")},function(e,t){e.exports=function(){}},function(e,t){e.exports=function(e,t){return{value:t,done:!!e}}},function(e,t,n){e.exports={default:n(60),__esModule:!0}},function(e,t,n){n(61),n(67),n(68),n(69),e.exports=n(9).Symbol},function(e,t,n){"use strict";var r=n(0),i=n(1),o=n(4),a=n(27),s=n(30),c=n(62).KEY,u=n(11),f=n(20),m=n(22),_=n(13),l=n(6),d=n(23),p=n(24),g=n(63),b=n(64),v=n(10),y=n(7),h=n(34),w=n(5),x=n(16),S=n(12),O=n(31),j=n(65),T=n(66),P=n(35),k=n(3),E=n(18),F=T.f,M=k.f,L=j.f,A=r.Symbol,C=r.JSON,N=C&&C.stringify,I=l("_hidden"),z=l("toPrimitive"),G={}.propertyIsEnumerable,D=f("symbol-registry"),R=f("symbols"),V=f("op-symbols"),W=Object.prototype,J="function"==typeof A&&!!P.f,B=r.QObject,H=!B||!B.prototype||!B.prototype.findChild,Q=o&&u(function(){return 7!=O(M({},"a",{get:function(){return M(this,"a",{value:7}).a}})).a})?function(e,t,n){var r=F(W,t);r&&delete W[t],M(e,t,n),r&&e!==W&&M(W,t,r)}:M,K=function(e){var t=R[e]=O(A.prototype);return t._k=e,t},q=J&&"symbol"==typeof A.iterator?function(e){return"symbol"==typeof e}:function(e){return e instanceof A},Y=function(e,t,n){return e===W&&Y(V,t,n),v(e),t=x(t,!0),v(n),i(R,t)?(n.enumerable?(i(e,I)&&e[I][t]&&(e[I][t]=!1),n=O(n,{enumerable:S(0,!1)})):(i(e,I)||M(e,I,S(1,{})),e[I][t]=!0),Q(e,t,n)):M(e,t,n)},U=function(e,t){v(e);for(var n,r=g(t=w(t)),i=0,o=r.length;o>i;)Y(e,n=r[i++],t[n]);return e},X=function(e){var t=G.call(this,e=x(e,!0));return!(this===W&&i(R,e)&&!i(V,e))&&(!(t||!i(this,e)||!i(R,e)||i(this,I)&&this[I][e])||t)},Z=function(e,t){if(e=w(e),t=x(t,!0),e!==W||!i(R,t)||i(V,t)){var n=F(e,t);return!n||!i(R,t)||i(e,I)&&e[I][t]||(n.enumerable=!0),n}},$=function(e){for(var t,n=L(w(e)),r=[],o=0;n.length>o;)i(R,t=n[o++])||t==I||t==c||r.push(t);return r},ee=function(e){for(var t,n=e===W,r=L(n?V:w(e)),o=[],a=0;r.length>a;)!i(R,t=r[a++])||n&&!i(W,t)||o.push(R[t]);return o};J||(s((A=function(){if(this instanceof A)throw TypeError("Symbol is not a constructor!");var e=_(arguments.length>0?arguments[0]:void 0),t=function(n){this===W&&t.call(V,n),i(this,I)&&i(this[I],e)&&(this[I][e]=!1),Q(this,e,S(1,n))};return o&&H&&Q(W,e,{configurable:!0,set:t}),K(e)}).prototype,"toString",function(){return this._k}),T.f=Z,k.f=Y,n(36).f=j.f=$,n(25).f=X,P.f=ee,o&&!n(8)&&s(W,"propertyIsEnumerable",X,!0),d.f=function(e){return K(l(e))}),a(a.G+a.W+a.F*!J,{Symbol:A});for(var te="hasInstance,isConcatSpreadable,iterator,match,replace,search,species,split,toPrimitive,toStringTag,unscopables".split(","),ne=0;te.length>ne;)l(te[ne++]);for(var re=E(l.store),ie=0;re.length>ie;)p(re[ie++]);a(a.S+a.F*!J,"Symbol",{for:function(e){return i(D,e+="")?D[e]:D[e]=A(e)},keyFor:function(e){if(!q(e))throw TypeError(e+" is not a symbol!");for(var t in D)if(D[t]===e)return t},useSetter:function(){H=!0},useSimple:function(){H=!1}}),a(a.S+a.F*!J,"Object",{create:function(e,t){return void 0===t?O(e):U(O(e),t)},defineProperty:Y,defineProperties:U,getOwnPropertyDescriptor:Z,getOwnPropertyNames:$,getOwnPropertySymbols:ee});var oe=u(function(){P.f(1)});a(a.S+a.F*oe,"Object",{getOwnPropertySymbols:function(e){return P.f(h(e))}}),C&&a(a.S+a.F*(!J||u(function(){var e=A();return"[null]"!=N([e])||"{}"!=N({a:e})||"{}"!=N(Object(e))})),"JSON",{stringify:function(e){for(var t,n,r=[e],i=1;arguments.length>i;)r.push(arguments[i++]);if(n=t=r[1],(y(t)||void 0!==e)&&!q(e))return b(t)||(t=function(e,t){if("function"==typeof n&&(t=n.call(this,e,t)),!q(t))return t}),r[1]=t,N.apply(C,r)}}),A.prototype[z]||n(2)(A.prototype,z,A.prototype.valueOf),m(A,"Symbol"),m(Math,"Math",!0),m(r.JSON,"JSON",!0)},function(e,t,n){var r=n(13)("meta"),i=n(7),o=n(1),a=n(3).f,s=0,c=Object.isExtensible||function(){return!0},u=!n(11)(function(){return c(Object.preventExtensions({}))}),f=function(e){a(e,r,{value:{i:"O"+ ++s,w:{}}})},m=e.exports={KEY:r,NEED:!1,fastKey:function(e,t){if(!i(e))return"symbol"==typeof e?e:("string"==typeof e?"S":"P")+e;if(!o(e,r)){if(!c(e))return"F";if(!t)return"E";f(e)}return e[r].i},getWeak:function(e,t){if(!o(e,r)){if(!c(e))return!0;if(!t)return!1;f(e)}return e[r].w},onFreeze:function(e){return u&&m.NEED&&c(e)&&!o(e,r)&&f(e),e}}},function(e,t,n){var r=n(18),i=n(35),o=n(25);e.exports=function(e){var t=r(e),n=i.f;if(n)for(var a,s=n(e),c=o.f,u=0;s.length>u;)c.call(e,a=s[u++])&&t.push(a);return t}},function(e,t,n){var r=n(33);e.exports=Array.isArray||function(e){return"Array"==r(e)}},function(e,t,n){var r=n(5),i=n(36).f,o={}.toString,a="object"==typeof window&&window&&Object.getOwnPropertyNames?Object.getOwnPropertyNames(window):[];e.exports.f=function(e){return a&&"[object Window]"==o.call(e)?function(e){try{return i(e)}catch(e){return a.slice()}}(e):i(r(e))}},function(e,t,n){var r=n(25),i=n(12),o=n(5),a=n(16),s=n(1),c=n(28),u=Object.getOwnPropertyDescriptor;t.f=n(4)?u:function(e,t){if(e=o(e),t=a(t,!0),c)try{return u(e,t)}catch(e){}if(s(e,t))return i(!r.f.call(e,t),e[t])}},function(e,t){},function(e,t,n){n(24)("asyncIterator")},function(e,t,n){n(24)("observable")},function(e,t){window.jQuery}]);
//# sourceMappingURL=bundle-1416.js.map