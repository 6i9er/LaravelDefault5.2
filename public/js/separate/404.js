!function(){for(var n=0,e=["ms","moz","webkit","o"],i=0;i<e.length&&!window.requestAnimationFrame;++i)window.requestAnimationFrame=window[e[i]+"RequestAnimationFrame"],window.cancelAnimationFrame=window[e[i]+"CancelAnimationFrame"]||window[e[i]+"CancelRequestAnimationFrame"];window.requestAnimationFrame||(window.requestAnimationFrame=function(e,i){var t=(new Date).getTime(),a=Math.max(0,16-(t-n)),o=window.setTimeout(function(){e(t+a)},a);return n=t+a,o}),window.cancelAnimationFrame||(window.cancelAnimationFrame=function(n){clearTimeout(n)})}(),function(){function n(){r=window.innerWidth,d=window.innerHeight,l={x:0,y:d},w=document.getElementById("large-header"),w.style.height=d+"px",m=document.getElementById("demo-canvas"),m.width=r,m.height=d,c=m.getContext("2d"),h=[];for(var n=0;n<.5*r;n++){var e=new o;h.push(e)}a()}function e(){window.addEventListener("scroll",i),window.addEventListener("resize",t)}function i(){s=!(document.body.scrollTop>d)}function t(){r=window.innerWidth,d=window.innerHeight,w.style.height=d+"px",m.width=r,m.height=d}function a(){if(s){c.clearRect(0,0,r,d);for(var n in h)h[n].draw()}requestAnimationFrame(a)}function o(){function n(){e.pos.x=Math.random()*r,e.pos.y=d+100*Math.random(),e.alpha=.1+.3*Math.random(),e.scale=.1+.3*Math.random(),e.velocity=Math.random()}var e=this;!function(){e.pos={},n()}(),this.draw=function(){e.alpha<=0&&n(),e.pos.y-=e.velocity,e.alpha-=5e-4,c.beginPath(),c.arc(e.pos.x,e.pos.y,10*e.scale,0,2*Math.PI,!1),c.fillStyle="rgba(255,255,255,"+e.alpha+")",c.fill()}}var r,d,w,m,c,h,l,s=!0;n(),e()}();