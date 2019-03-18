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

var thisId = window.location.hash.substring(1);
var totalID = $('#hidden_xq_id').val();

if(thisId=='')var thisId='1';

for(var i=1;i<=totalID;i++){
	g('tb_8'+i).className='tab_b';
	g('tbc_8'+i).className='tab_no';
}
g('tbc_8'+thisId).className='tab_box';
g('tb_8'+thisId).className='tab_a';

//alert(totalID);
	 


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