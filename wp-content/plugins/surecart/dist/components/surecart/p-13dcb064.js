import{a as n,g as o}from"./p-cc7ce8c7.js";var r=new Map,a=function(e,a){var n=e.fields,t=e.updater;n.forEach((function(e){t(e,a[e])}))},i={create:function(e,t){var c=n(e),o=new Map,l={wormholes:o,state:t};r.set(e,l);var i=e.connectedCallback;e.connectedCallback=function(){r.set(e,l),i&&i.call(e)};var d=e.disconnectedCallback;e.disconnectedCallback=function(){r.delete(e),d&&d.call(e)},c.addEventListener("openWormhole",(function(e){e.stopPropagation();var n=e.detail,t=n.consumer,c=n.onOpen;if(!o.has(t)){if("symbol"!=typeof t){var r=t.connectedCallback,i=t.disconnectedCallback;t.connectedCallback=function(){o.set(t,e.detail),r&&r.call(t)},t.disconnectedCallback=function(){o.delete(t),i&&i.call(t)}}o.set(t,e.detail),a(e.detail,l.state),null==c||c.resolve((function(){o.delete(t)}))}})),c.addEventListener("closeWormhole",(function(e){var a=e.detail;o.delete(a)}))},Provider:function(e,n){var t=e.state,c=o();if(r.has(c)){var l=r.get(c);l.state=t,l.wormholes.forEach((function(e){a(e,t)}))}return n}};export{i as U};