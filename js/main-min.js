// Avoid `console` errors in browsers that lack a console.
(function(){var e,t=function(){},n=["assert","clear","count","debug","dir","dirxml","error","exception","group","groupCollapsed","groupEnd","info","log","markTimeline","profile","profileEnd","table","time","timeEnd","timeStamp","trace","warn"],r=n.length,i=window.console=window.console||{};while(r--)e=n[r],i[e]||(i[e]=t)})(),jQuery(document).ready(function(e){function t(e){e.wrap("<div class='table-wrapper' />");var t=e.clone();t.find("td:not(:first-child), th:not(:first-child)").css("display","none"),t.removeClass("responsive"),e.closest(".table-wrapper").append(t),t.wrap("<div class='pinned' />"),e.wrap("<div class='scrollable' />"),r(e,t)}function n(e){e.closest(".table-wrapper").find(".pinned").remove(),e.unwrap(),e.unwrap()}function r(t,n){var r=t.find("tr"),i=n.find("tr"),s=[];r.each(function(t){var n=e(this),r=n.find("th, td");r.each(function(){var n=e(this).outerHeight(!0);s[t]=s[t]||0,n>s[t]&&(s[t]=n)})}),i.each(function(t){e(this).height(s[t])})}var i=!1,s=function(){if(e(window).width()<767&&!i)return i=!0,e("table.responsive").each(function(n,r){t(e(r))}),!0;i&&e(window).width()>767&&(i=!1,e("table.responsive").each(function(t,r){n(e(r))}))};e(window).load(s),e(window).bind("resize",s)}),function(e){var t={init:function(){this.toggleSearchField(),this.openMobileNav(),this.closeMobileNav(),this.bugFixes(),this.algaTipset()},toggleSearchField:function(){e(".genericon-search").on("click",function(){e(this).parent().toggleClass("closed","open")})},openMobileNav:function(){e("div#open-mobile-navigation").on("click",function(){e("nav#mobile-navigation").slideToggle("slow")})},closeMobileNav:function(){e("#mobile-navigation .close").on("click",function(){e("div#mobile-navigation").removeClass("open")})},bugFixes:function(){e(".wp-caption").removeAttr("style")},algaTipset:function(){if(e("body").hasClass("page-id-2878")){var t=e("table#algatipset").find("tbody"),n="";e.getJSON("http://87.238.58.178/algatipset/public/topten?callback=?",function(e){for(var r=0;r<e.length;r++){var i=r+1;n+="<tr><td>"+i+"</td><td>"+e[r].name+"</td><td>"+e[r].ratt+"</td></tr>"}t.html(n)})}}};t.init()}(jQuery);