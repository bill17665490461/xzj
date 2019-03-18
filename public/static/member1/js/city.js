// JavaScript Document
function g(o){return document.getElementById(o);}
function HoverLi(m,n,counter){
	for(var i=1;i<=counter;i++){
		g('tb_'+m+i).className='tab_b';
		g('tbc_'+m+i).className='tab_no';
	}
	g('tbc_'+m+n).className='tab_box';
	g('tb_'+m+n).className='tab_a';
}
	 


function showsubmenu(sid)
{ 
whichEl = eval("submenu" + sid);
if (whichEl.style.display == "none")
{
eval("submenu" + sid + ".style.display=\"\";");
}
else
{
eval("submenu" + sid + ".style.display=\"none\";");
}
}
