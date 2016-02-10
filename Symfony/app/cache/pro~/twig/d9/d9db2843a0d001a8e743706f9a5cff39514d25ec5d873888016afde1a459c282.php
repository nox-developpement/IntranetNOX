<?php

/* support/scp/js/g.dot-min.js */
class __TwigTemplate_a035b95a70d26d81af6c229985ac7ad70a6717df40509738bd9ed5faa71b372b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "/*!
 * g.Raphael 0.5 - Charting library, based on Raphaël
 *
 * Copyright (c) 2009 Dmitry Baranovskiy (http://g.raphaeljs.com)
 * Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license.
 */
(function(){var b=function(g,f,e,d){return\"hsb(\"+[Math.min((1-g/f)*0.4,1),e||0.75,d||0.75]+\")\"};function a(e,N,M,d,j,B,A,t,I){var v=this;function U(g){+g[0]&&(g[0]=v.axis(N+s,M+s,d-2*s,E,p,I.axisxstep||Math.floor((d-2*s)/20),2,I.axisxlabels||null,I.axisxtype||\"t\",null,e));+g[1]&&(g[1]=v.axis(N+d-s,M+j-s,j-2*s,D,o,I.axisystep||Math.floor((j-2*s)/20),3,I.axisylabels||null,I.axisytype||\"t\",null,e));+g[2]&&(g[2]=v.axis(N+s,M+j-s+H,d-2*s,E,p,I.axisxstep||Math.floor((d-2*s)/20),0,I.axisxlabels||null,I.axisxtype||\"t\",null,e));+g[3]&&(g[3]=v.axis(N+s-H,M+j-s,j-2*s,D,o,I.axisystep||Math.floor((j-2*s)/20),1,I.axisylabels||null,I.axisytype||\"t\",null,e))}I=I||{};var z=v.snapEnds(Math.min.apply(Math,B),Math.max.apply(Math,B),B.length-1),E=z.from,p=z.to,s=I.gutter||10,L=v.snapEnds(Math.min.apply(Math,A),Math.max.apply(Math,A),A.length-1),D=L.from,o=L.to,C=Math.max(B.length,A.length,t.length),w=e[I.symbol]||\"circle\",J=e.set(),u=e.set(),G=I.max||100,r=Math.max.apply(Math,t),q=[],Q=Math.sqrt(r/Math.PI)*2/G;for(var S=0;S<C;S++){q[S]=Math.min(Math.sqrt(t[S]/Math.PI)*2/Q,G)}s=Math.max.apply(Math,q.concat(s));var F=e.set(),H=Math.max.apply(Math,q);if(I.axis){var n=(I.axis+\"\").split(/[,\\s]+/);U.call(v,n);var T=[],V=[];for(var S=0,K=n.length;S<K;S++){var W=n[S].all?n[S].all.getBBox()[[\"height\",\"width\"][S%2]]:0;T[S]=W+s;V[S]=W}s=Math.max.apply(Math,T.concat(s));for(var S=0,K=n.length;S<K;S++){if(n[S].all){n[S].remove();n[S]=1}}U.call(v,n);for(var S=0,K=n.length;S<K;S++){if(n[S].all){F.push(n[S].all)}}J.axis=F}var P=(d-s*2)/((p-E)||1),O=(j-s*2)/((o-D)||1);for(var S=0,K=A.length;S<K;S++){var h=e.raphael.is(w,\"array\")?w[S]:w,m=N+s+(B[S]-E)*P,l=M+j-s-(A[S]-D)*O;h&&q[S]&&u.push(e[h](m,l,q[S]).attr({fill:I.heat?b(q[S],H):v.colors[0],\"fill-opacity\":I.opacity?q[S]/G:1,stroke:\"none\"}))}var f=e.set();for(var S=0,K=A.length;S<K;S++){var m=N+s+(B[S]-E)*P,l=M+j-s-(A[S]-D)*O;f.push(e.circle(m,l,H).attr(v.shim));I.href&&I.href[S]&&f[S].attr({href:I.href[S]});f[S].r=+q[S].toFixed(3);f[S].x=+m.toFixed(3);f[S].y=+l.toFixed(3);f[S].X=B[S];f[S].Y=A[S];f[S].value=t[S]||0;f[S].dot=u[S]}J.covers=f;J.series=u;J.push(u,F,f);J.hover=function(i,g){f.mouseover(i).mouseout(g);return this};J.click=function(g){f.click(g);return this};J.each=function(k){if(!e.raphael.is(k,\"function\")){return this}for(var g=f.length;g--;){k.call(f[g])}return this};J.href=function(x){var k;for(var g=f.length;g--;){k=f[g];if(k.X==x.x&&k.Y==x.y&&k.value==x.value){k.attr({href:x.href})}}};return J}var c=function(){};c.prototype=Raphael.g;a.prototype=new c;Raphael.fn.dotchart=function(e,k,g,d,j,i,f,h){return new a(this,e,k,g,d,j,i,f,h)}})();";
    }

    public function getTemplateName()
    {
        return "support/scp/js/g.dot-min.js";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}
/* /*!*/
/*  * g.Raphael 0.5 - Charting library, based on Raphaël*/
/*  **/
/*  * Copyright (c) 2009 Dmitry Baranovskiy (http://g.raphaeljs.com)*/
/*  * Licensed under the MIT (http://www.opensource.org/licenses/mit-license.php) license.*/
/*  *//* */
/* (function(){var b=function(g,f,e,d){return"hsb("+[Math.min((1-g/f)*0.4,1),e||0.75,d||0.75]+")"};function a(e,N,M,d,j,B,A,t,I){var v=this;function U(g){+g[0]&&(g[0]=v.axis(N+s,M+s,d-2*s,E,p,I.axisxstep||Math.floor((d-2*s)/20),2,I.axisxlabels||null,I.axisxtype||"t",null,e));+g[1]&&(g[1]=v.axis(N+d-s,M+j-s,j-2*s,D,o,I.axisystep||Math.floor((j-2*s)/20),3,I.axisylabels||null,I.axisytype||"t",null,e));+g[2]&&(g[2]=v.axis(N+s,M+j-s+H,d-2*s,E,p,I.axisxstep||Math.floor((d-2*s)/20),0,I.axisxlabels||null,I.axisxtype||"t",null,e));+g[3]&&(g[3]=v.axis(N+s-H,M+j-s,j-2*s,D,o,I.axisystep||Math.floor((j-2*s)/20),1,I.axisylabels||null,I.axisytype||"t",null,e))}I=I||{};var z=v.snapEnds(Math.min.apply(Math,B),Math.max.apply(Math,B),B.length-1),E=z.from,p=z.to,s=I.gutter||10,L=v.snapEnds(Math.min.apply(Math,A),Math.max.apply(Math,A),A.length-1),D=L.from,o=L.to,C=Math.max(B.length,A.length,t.length),w=e[I.symbol]||"circle",J=e.set(),u=e.set(),G=I.max||100,r=Math.max.apply(Math,t),q=[],Q=Math.sqrt(r/Math.PI)*2/G;for(var S=0;S<C;S++){q[S]=Math.min(Math.sqrt(t[S]/Math.PI)*2/Q,G)}s=Math.max.apply(Math,q.concat(s));var F=e.set(),H=Math.max.apply(Math,q);if(I.axis){var n=(I.axis+"").split(/[,\s]+/);U.call(v,n);var T=[],V=[];for(var S=0,K=n.length;S<K;S++){var W=n[S].all?n[S].all.getBBox()[["height","width"][S%2]]:0;T[S]=W+s;V[S]=W}s=Math.max.apply(Math,T.concat(s));for(var S=0,K=n.length;S<K;S++){if(n[S].all){n[S].remove();n[S]=1}}U.call(v,n);for(var S=0,K=n.length;S<K;S++){if(n[S].all){F.push(n[S].all)}}J.axis=F}var P=(d-s*2)/((p-E)||1),O=(j-s*2)/((o-D)||1);for(var S=0,K=A.length;S<K;S++){var h=e.raphael.is(w,"array")?w[S]:w,m=N+s+(B[S]-E)*P,l=M+j-s-(A[S]-D)*O;h&&q[S]&&u.push(e[h](m,l,q[S]).attr({fill:I.heat?b(q[S],H):v.colors[0],"fill-opacity":I.opacity?q[S]/G:1,stroke:"none"}))}var f=e.set();for(var S=0,K=A.length;S<K;S++){var m=N+s+(B[S]-E)*P,l=M+j-s-(A[S]-D)*O;f.push(e.circle(m,l,H).attr(v.shim));I.href&&I.href[S]&&f[S].attr({href:I.href[S]});f[S].r=+q[S].toFixed(3);f[S].x=+m.toFixed(3);f[S].y=+l.toFixed(3);f[S].X=B[S];f[S].Y=A[S];f[S].value=t[S]||0;f[S].dot=u[S]}J.covers=f;J.series=u;J.push(u,F,f);J.hover=function(i,g){f.mouseover(i).mouseout(g);return this};J.click=function(g){f.click(g);return this};J.each=function(k){if(!e.raphael.is(k,"function")){return this}for(var g=f.length;g--;){k.call(f[g])}return this};J.href=function(x){var k;for(var g=f.length;g--;){k=f[g];if(k.X==x.x&&k.Y==x.y&&k.value==x.value){k.attr({href:x.href})}}};return J}var c=function(){};c.prototype=Raphael.g;a.prototype=new c;Raphael.fn.dotchart=function(e,k,g,d,j,i,f,h){return new a(this,e,k,g,d,j,i,f,h)}})();*/
