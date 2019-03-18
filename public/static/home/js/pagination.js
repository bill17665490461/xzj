// JavaScript Document
// JavaScript Document
// JavaScript Document
//'-------------------------------------------------------------------------------------------------------------------------
//'例如：PageList(1,3,10,123,"acton=12",1)
//'页次：1/13页　每页：10篇 共：123篇 [1][2][3]...[13] 
//'页次：当前第currentpag页，n 分隔数量；每页显示记录数:MaxRows,总记录数：CountNum,v为显示类型
//'-------------------------------------------------------------------------------------------------------------------------
function PageList(CurrentPage,n,MaxRows,CountNum,PageSearch,v,getdata)
{
	var PageStr="";
	if (PageSearch!=''){PageSearch+="&";}
	CountNum=parseInt(CountNum);
	CurrentPage=parseInt(CurrentPage);
	if (CountNum%MaxRows==0){var Pagecount= parseInt(CountNum / MaxRows);}else{var Pagecount = parseInt(CountNum / MaxRows)+1}
	if (Pagecount>CurrentPage+n){var Endpage=CurrentPage+n;}else{var Endpage=Pagecount;}
	var ShowPage;
	switch (v)
	{
		case 1:
			ShowPage="<table border=\"0\" Style=\"width:98%\" align=center cellpadding=0 cellspacing=2><FORM action=\"?"+PageSearch+"\" method=POST name=\"PageForm\">";
			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,1)
			ShowPage+="<tr><td nowrap>";
			ShowPage+="页次：<b><font color=red>"+CurrentPage+"<\/font><\/b>/<b>"+Pagecount+"</b>页";
			ShowPage+="．每页：显示<b>"+MaxRows+"<\/b>条 共：<b>"+CountNum+"<\/b>条记录</td>";
			ShowPage+="<td valign=middle nowrap align=right>";
			ShowPage+=PageStr;
			ShowPage+="<\/td><td width=115 noWrap align=right><input type=text name=page size=4 value=\""+CurrentPage+"\"><input type=button onclick=\"submit(this)\" value=\">>\" title=\"填写翻转的分页，然后点击查看！\" ><\/td><\/tr>";
			ShowPage+="<\/FORM><\/table>";
			break;
		case 2:
			ShowPage = "<form action=\"?" + PageSearch + "\" method=\"post\" enctype=\"application/x-www-form-urlencoded\" name=\"PageForm\" id=\"PageForm\">";
			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,2)
			ShowPage += "<table border=\"0\" style=\"width:98%\" align=\"center\" cellpadding=\"0\" cellspacing=\"2\">"
			ShowPage += "<tr>"
			ShowPage += "<td nowrap=\"nowrap\">符合您条件的共有<span class=\"needTips\">" + CountNum + "<\/span>条 ，第<span class=\"needTips\">" + CurrentPage + "</span>页/共<span class=\"needTips\">" + Pagecount + "</span>页</td>";
			ShowPage += "<td valign=\"middle\" nowrap=\"nowrap\" align=\"right\">" + PageStr + "</td>";
			ShowPage += "<td width=\"115\" nowrap=\"nowrap\" align=\"right\">";
			ShowPage += "<label for=\"pageNum\" accesskey=\"p\">";
			ShowPage += "<input name=\"page\" class=\"pageNum\" type=\"text\" id=\"pageNum\" size=\"4\" maxlength=\"4\" value=\"" + CurrentPage + "\" title=\"请输入:0123456789数字组合\" \/>";
			ShowPage += "<\/label>&nbsp;&nbsp;&nbsp;";
			ShowPage += "<label for=\"btnPageGo\" accesskey=\"g\">";
			ShowPage += "<input name=\"btnPageGo\" type=\"submit\" id=\"btnPageGo\" title=\"填写翻转的分页，然后点击查看！\" value=\"GO\" \/>";
			ShowPage += "<\/label>";
			ShowPage += "<\/tr>";
			ShowPage += "<\/table>";
			ShowPage += "<\/form>";
			break;
		case 3:
			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,3)
			ShowPage="<table cellpadding=0 cellspacing=1 class=tableborder5>";
			ShowPage=ShowPage+"<FORM action=\""+PageSearch+"\" method=POST name=\"PageForm\" target=\"hiddenframe\"><tr align=center>";
			ShowPage=ShowPage+"<td class=tabletitle1 title=\"\">&nbsp;"+CountNum+"&nbsp;</td>";
			ShowPage=ShowPage+"<td class=tabletitle1 title=\"?\">&nbsp;"+MaxRows+"&nbsp;</td>";
			ShowPage=ShowPage+"<td class=tabletitle1 title=\"?\">&nbsp;"+CurrentPage+"/"+Pagecount+"&nbsp;</td>";
			ShowPage=ShowPage+"";
			ShowPage=ShowPage+PageStr
			ShowPage=ShowPage+"<td class=tablebody1><input type=text name=star size=2 value=\""+CurrentPage+"\" Class=PageInput><input type=submit value=GO name=submit Class=PageInput ></td>";
			ShowPage=ShowPage+"</tr></FORM></table>";
			break;
		case 4:
			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,4)
			ShowPage="<table cellpadding=0 cellspacing=1 class=tableborder5>";
			ShowPage=ShowPage+"<FORM action=\"?"+PageSearch+"\" method=POST name=\"PageForm\"><tr align=center>";
			ShowPage=ShowPage+"<td class=tabletitle1 title=\"\">&nbsp;"+CountNum+"&nbsp;</td>";
			ShowPage=ShowPage+"<td class=tabletitle1 title=\"?\">&nbsp;"+MaxRows+"&nbsp;</td>";
			ShowPage=ShowPage+"<td class=tabletitle1 title=\"?\">&nbsp;"+CurrentPage+"/"+Pagecount+"&nbsp;</td>";
			ShowPage=ShowPage+"";
			ShowPage=ShowPage+PageStr
			ShowPage=ShowPage+"<td class=tablebody1><input type=text name=page size=2 value=\""+CurrentPage+"\" Class=PageInput><input type=submit value=GO name=submit Class=PageInput ></td>";
			ShowPage=ShowPage+"</tr></FORM></table>";
			break;
		case 5:
		    PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,5)
			ShowPage="<div id=\"page\">"+PageStr+"<\/div>";
		    break;
		case 6:
			PageSearch=PageSearch.replace("&","");
			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,6)
			ShowPage="<table cellpadding=0 cellspacing=1>";
			ShowPage=ShowPage+"";
			ShowPage=ShowPage+PageStr
			ShowPage=ShowPage+"<td><input type=\"text\" name=\"page\" id=\"iyy_list_page_value\" size=\"2\" value=\""+CurrentPage+"\"></td>";
			ShowPage=ShowPage+"<td><input type=button value=GO name=submit onclick=\"javascript:viewPage('"+PageSearch+"',"+Pagecount+")\;return false\;\"></td>";
			ShowPage=ShowPage+"<td title=\"总数\">&nbsp;"+CountNum+"条&nbsp;&nbsp;"+CurrentPage+"/"+Pagecount+"&nbsp;页&nbsp;</td>";
			ShowPage=ShowPage+"</tr>";
			ShowPage=ShowPage+"</table>";
			break;
		case 7:
			PageStr = SeachPage(CurrentPage,5,MaxRows,Endpage,Pagecount,PageSearch,7)
			ShowPage="<div class=\"pagelist\">"
			ShowPage=ShowPage+"<div class=\"nw_num\">共"+CountNum+"条</div>"
			ShowPage=ShowPage+"<div class=\"nw_page\">"+PageStr+"</div>"
			ShowPage=ShowPage+"</div>"
			break;
		case 8:
			PageStr = SeachPage(CurrentPage,5,MaxRows,Endpage,Pagecount,PageSearch,10)
			ShowPage="<div class=\"pagelist\">"
			ShowPage=ShowPage+"<div class=\"nw_page\">"+PageStr+"</div>"
			ShowPage=ShowPage+"</div>"
			break;
		case 9:
			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,7)
			ShowPage="<div class=\"pagelist\">"
			ShowPage=ShowPage+"<div class=\"nw_num\">共"+CountNum+"条</div>"
			ShowPage=ShowPage+"<div class=\"nw_page\">"+PageStr+"</div>"
			ShowPage=ShowPage+"</div>"
			break;
			
//			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,7)
//			ShowPage="<div class=\"pagelist\">"
//			ShowPage=ShowPage+"<div class=\"nw_num\">共"+CountNum+"条 这是第"+CurrentPage+"-"+Pagecount+"页</div>"
//			ShowPage=ShowPage+"<div class=\"nw_page\">"+PageStr+"</div>"
//			ShowPage=ShowPage+"</div>"
//			break;
		case 10:
			PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,10)
			ShowPage="<span class=\"more\">"
			ShowPage=ShowPage+"共有"+CountNum+"条信息"
			ShowPage=ShowPage+PageStr
			ShowPage=ShowPage+"</span>"
			break;
	}
	if (getdata)
	{
		return ShowPage;
	}
	else{
		document.write (ShowPage);
	}
}


function SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,v) {
var PageStr="";
switch (v)
{
	case 1:
		if (CurrentPage>n+1){PageStr="<a href=\"?"+PageSearch+"page=1\">[1]<\/a> ...";}
		for (var i=CurrentPage-n;i<=Endpage;i++)
		{
			if (i>=1)
			{
				if (i==CurrentPage)
				{
					PageStr+="<font color=Red>["+i+"]<\/font>";
				}else{
					PageStr+="<a href=\"?"+PageSearch+"page="+i+"\">["+i+"]<\/a>";
				}
			}
		}
		if (Pagecount>CurrentPage+n){PageStr+="...<a href=\"?"+PageSearch+"page="+Pagecount+"\" class=path>["+Pagecount+"]<\/a>";}
	break;
	case 2:
		var p;
		if ((CurrentPage-1)%n==0) 
		{
			p=(CurrentPage-1) /n
		}
		else
		{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1)
		{
			PageStr += "<a href=\"?"+PageSearch+"page=1\" title=\"?\"><img src=\"http://www.cnrepark.com/images/admin/First.gif\" border=\"0\" alt=\"首页\"><\/a>";
		}

		if (p*n > 0)
		{
			PageStr += "<a href=\"?"+PageSearch+"page="+p*n+"\" title=\"上一页\"><img src=\"http://www.cnrepark.com/images/admin/Previous.gif\" border=\"0\"><\/a>";
		}
		//PageStr += "<b>";
		for (var i=p*n+1;i<p*n+n+1;i++)
		{
			if (i==CurrentPage)
			{
				PageStr += " <font color=\"red\">["+i+"]<\/font> ";
			}
			else
			{
				PageStr += " <a href=\"?"+PageSearch+"page="+i+"\">"+i+"<\/a> ";
			}
			if (i==Pagecount) break;
		}
		//PageStr += "</b>";
		if (i<Pagecount)
		{
			PageStr += "<a href=\"?"+PageSearch+"page="+i+"\" title=\"下一页\"><img src=\"http://www.cnrepark.com/images/admin/Next.gif\" border=\"0\"><\/a>";
		}
		if (CurrentPage!=Pagecount)
		{
			PageStr += "<a href=\"?"+PageSearch+"page="+Pagecount+"\" title=\"尾页\"><img src=\"http://www.cnrepark.com/images/admin/Last.gif\" border=\"0\"><\/a>";
		}
	break;
	case 3:
		var p;
		if ((CurrentPage-1)%n==0) 
		{
			p=(CurrentPage-1) /n
		}
		else
		{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1)
		{			
			PageStr+="<td class=tablebody1>&nbsp;<a href=\""+PageSearch+"star=1\" title=\"??\" target=\"hiddenframe\"><img src=\"images/pagelist/First.gif\" border=\"0\" alt=\"??\"><\/a>&nbsp;<\/td>";
		}
		//else{
			//PageStr+="<td class=tablebody1><font style=\"font-family:webdings\">9<\/font><\/td>";
		//}
		if (p*n > 0)
		{
			PageStr +="<td class=tablebody1>&nbsp;<a href=\""+PageSearch+"star="+p*n+"\" title=\"??\" target=\"hiddenframe\"><img src=\"images/pagelist/Previous.gif\" border=\"0\"><\/a>&nbsp;<\/td>";
		}
		for (var i=p*n+1;i<p*n+n+1;i++)
		{
			if (i==CurrentPage)
			{
				PageStr+="<td class=tablebody2>&nbsp;<B><font color=\"red\">"+i+"<\/font><\/B><\/td>";
			}
			else
			{
				PageStr+="<td class=tablebody1>&nbsp;<a href=\""+PageSearch+"star="+i+"\" target=\"hiddenframe\">"+i+"<\/a>&nbsp;<\/td>";
			}
			if (i==Pagecount) break;
		}
		if (i<Pagecount)
		{
			PageStr+="<td class=tablebody1>&nbsp;<a href=\""+PageSearch+"star="+i+"\" title=\"??\" target=\"hiddenframe\"><img src=\"images/pagelist/Next.gif\" border=\"0\"><\/a>&nbsp;<\/td>";
		}
		if (CurrentPage<Pagecount)
		{
			PageStr+="<td class=tablebody1>&nbsp;<a href=\""+PageSearch+"star="+Pagecount+"\" title=\"β?\" target=\"hiddenframe\"><img src=\"images/pagelist/Last.gif\" border=\"0\"><\/a>&nbsp;";
			PageStr+="<\/td>";
		}
	break;

	case 4:
		var p;
		if ((CurrentPage-1)%n==0) 
		{
			p=(CurrentPage-1) /n
		}
		else
		{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1)
		{			
			PageStr+="<td class=tablebody1>&nbsp;<a href=\"?"+PageSearch+"page=1\" title=\"??\"><img src=\"images/pagelist/First.gif\" border=\"0\" alt=\"??\"><\/a>&nbsp;<\/td>";
		}
		if (p*n > 0)
		{
			PageStr +="<td class=tablebody1>&nbsp;<a href=\"?"+PageSearch+"page="+p*n+"\" title=\"??\"><img src=\"images/pagelist/Previous.gif\" border=\"0\"><\/a>&nbsp;<\/td>";
		}
		for (var i=p*n+1;i<p*n+n+1;i++)
		{
			if (i==CurrentPage)
			{
				PageStr+="<td class=tablebody2>&nbsp;<B><font color=\"red\">"+i+"<\/font><\/B><\/td>";
			}
			else
			{
				PageStr+="<td class=tablebody1>&nbsp;<a href=\"?"+PageSearch+"page="+i+"\">"+i+"<\/a>&nbsp;<\/td>";
			}
			if (i==Pagecount) break;
		}
		if (i<Pagecount)
		{
			PageStr+="<td class=tablebody1>&nbsp;<a href=\"?"+PageSearch+"page="+i+"\" title=\"??\"><img src=\"images/pagelist/Next.gif\" border=\"0\"><\/a>&nbsp;<\/td>";
		}
		if (CurrentPage<Pagecount)
		{
			PageStr+="<td class=tablebody1>&nbsp;<a href=\"?"+PageSearch+"page="+Pagecount+"\" title=\"β?\"><img src=\"images/pagelist/Last.gif\" border=\"0\"><\/a>&nbsp;";
			PageStr+="<\/td>";
		}
	break;
	case 5:
		var p;
		PageStr += CurrentPage + " / " +Pagecount;
		if ((CurrentPage-1)%n==0) 
		{
			p=(CurrentPage-1) /n
		}
		else
		{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1)
		{
			PageStr += "<a href=\"?"+PageSearch+"page=" + eval(CurrentPage-1) + "\" title=\"?\"><img src=\"http://www.cnrepark.com/images/admin/pre_page_simple_act.gif\" border=\"0\" alt=\"上一页\" \/><\/a>";
		}else{
			PageStr += "<img src=\"http://www.cnrepark.com/images/admin/pre_page_simple.gif\" border=\"0\" \/>";
		}
		//PageStr += "<b>";
		for (var i=p*n+1;i<p*n+n+1;i++)
		{
			if (i==CurrentPage)
			{
				PageStr += " <span>"+i+"<\/span> ";
			}
			else
			{
				PageStr += " <a href=\"?"+PageSearch+"page="+i+"\">"+i+"<\/a> ";
			}
			if (i==Pagecount) break;
		}
		if (CurrentPage<Pagecount)
		{
			PageStr += "<a href=\"?"+PageSearch+"page="+eval(CurrentPage+1)+"\" title=\"下一页\"><img src=\"http://www.cnrepark.com/images/admin/next_page_act.gif\" border=\"0\" \/><\/a>";
		}else{
			PageStr += "<img src=\"http://www.cnrepark.com/images/admin/next_page.gif\" border=\"0\" \/>";
		}
		PageStr += "到第<input type=\"text\" name=\"pNo\" id=\"pNo\" size=\"3\" value=\""+Pagecount+"\" />页 <a href=\"javascript:\;\" onclick=\"javascript:gotoPage('"+PageSearch+"',"+Pagecount+")\;return false\;\"><img src=\"http://img.soosou.com/pagelist/btn_ok.gif\" /></a>"
	break;
	case 6:
	//PageStr = SeachPage(CurrentPage,n,MaxRows,Endpage,Pagecount,PageSearch,6)
		var p;
		if ((CurrentPage-1)%n==0){
			p=(CurrentPage-1) /n
		}else{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1){			
			PageStr+="<td>&nbsp;<a href=\""+PageSearch+"index.shtml\" title=\"第一页\"><img src=\"http://www.cnrepark.com/images/admin/First.gif\" border=\"0\" alt=\"第一页\"><\/a>&nbsp;<\/td>";
		}
		//else{
			//PageStr+="<td class=\"page\"><font style=\"font-family:webdings\">9<\/font><\/td>";
		//}
		if (p*n > 0){
			PageStr +="<td>&nbsp;<a href=\""+PageSearch+"index_"+p*n+".shtml\" title=\"上10页\"><img src=\"http://www.cnrepark.com/images/admin/Previous.gif\" border=\"0\"><\/a>&nbsp;<\/td>";
		}
		for (var i=p*n+1;i<p*n+n+1;i++){
		//for (var i=p*n+1;i<p*n+n+1;i++){
			if (i==CurrentPage){
				PageStr+="<td>&nbsp;<strong>"+i+"<\/strong><\/td>";
			}else{
				PageStr+="<td>&nbsp;<a href=\""+PageSearch+"index_"+i+".shtml\">"+i+"<\/a>&nbsp;<\/td>";
			}
			if (i==Pagecount) break;
		}
		if (i<Pagecount){
			PageStr+="<td>&nbsp;<a href=\""+PageSearch+"index_"+i+".shtml\" title=\"下10页\"><img src=\"http://www.cnrepark.com/images/admin/Next.gif\" border=\"0\"><\/a>&nbsp;<\/td>";
		}
		if (CurrentPage<Pagecount){
			PageStr+="<td>&nbsp;<a href=\""+PageSearch+"index_"+Pagecount+".shtml\" title=\"尾页\"><img src=\"http://www.cnrepark.com/images/admin/Last.gif\" border=\"0\"><\/a>&nbsp;";
			PageStr+="<\/td>";
		}
	break;
	case 7:
		var p;
		if ((CurrentPage-1)%n==0){
			p=(CurrentPage-1) /n
		}else{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1){			
			PageStr+="<a href=\"?"+PageSearch+"\" title=\"首页\">首页<\/a>";
		}
		if (p*n > 0){
			PageStr +="<a href=\"?"+PageSearch+"page="+p*n+"\" title=\"前10页\"><<<\/a>";
		}
		for (var i=p*n+1;i<p*n+n+1;i++){
			if (i==CurrentPage){
				PageStr+="<a href=\"?"+PageSearch+"page="+i+"\" title=\"第"+i+"页\"><strong>"+i+"<\/strong><\/a>";
			}else{
				PageStr+="<a href=\"?"+PageSearch+"page="+i+"\" title=\"第"+i+"页\">"+i+"<\/a>";
			}
			if (i==Pagecount) break;
		}
		if (i<Pagecount){
			PageStr+="<a href=\"?"+PageSearch+"page="+i+"\" title=\"后10页\">>><\/a>";
		}
		if (CurrentPage<Pagecount){
			PageStr+="<a href=\"?"+PageSearch+"page="+Pagecount+"\" title=\"末页\">末页<\/a>";
		}
	break;
	case 8:
		var p;
		if ((CurrentPage-1)%n==0){
			p=(CurrentPage-1) /n
		}else{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1){			
			PageStr+="<a href=\""+PageSearch+"0.html\" title=\"第一页\">首页<\/a>";
		}
		if (p*n > 0){
			PageStr +="<a href=\""+PageSearch+p*n+".html\" title=\"上10页\">上10页<\/a>";
		}
		for (var i=p*n+1;i<p*n+n+1;i++){
			if (i==CurrentPage){
				PageStr+="<a href=\""+PageSearch+i+".html\" title=\"第"+i+"页\"  class=\"current\"><strong>"+i+"<\/strong><\/a>";
			}else{
				PageStr+="<a href=\""+PageSearch+i+".html\" title=\"第"+i+"页\">"+i+"<\/a>";
			}
			if (i==Pagecount) break;
		}
		if (i<Pagecount){
			PageStr+="<a href=\""+PageSearch+i+".html\" title=\"下10页\">下10页<\/a>";
		}
		if (CurrentPage<Pagecount){
			PageStr+="<a href=\""+PageSearch+Pagecount+".html\" title=\"尾页\">尾页<\/a>";
		}
	break;
	case 10:
		var p;
		if ((CurrentPage-1)%n==0){
			p=(CurrentPage-1) /n
		}else{
			p=(((CurrentPage-1)-(CurrentPage-1)%n)/n)
		}
		if (CurrentPage!=1){			
			PageStr+="<a href=\"?"+PageSearch+"\" title=\"首页\">首页<\/a>";
		}
		if (p*n > 0){
			PageStr +="<a href=\"?"+PageSearch+"page="+p*n+"\" title=\"前5页\"><<<\/a>";
		}
		for (var i=p*n+1;i<p*n+n+1;i++){
			if (i==CurrentPage){
				PageStr+="<a href=\"?"+PageSearch+"page="+i+"\" title=\"第"+i+"页\"  class=\"current\"><strong>"+i+"<\/strong><\/a>";
			}else{
				PageStr+="<a href=\"?"+PageSearch+"page="+i+"\" title=\"第"+i+"页\">"+i+"<\/a>";
			}
			if (i==Pagecount) break;
		}
		if (i<Pagecount){
			PageStr+="<a href=\"?"+PageSearch+"page="+i+"\" title=\"后5页\">>><\/a>";
		}
		if (CurrentPage<Pagecount){
			PageStr+="<a href=\"?"+PageSearch+"page="+Pagecount+"\" title=\"末页\">末页<\/a>";
		}
	break;

}

	return PageStr;
}
function gotoPage(pagesearch,pagecount){
	var page=document.getElementById("pNo").value;
	if((/^\d+$/gi.test(page)) && (parseInt(page)<=pagecount)){
		var lj=document.location.href.split("?")[0];
		document.location.href=lj+"?"+pagesearch+"page="+page;
	}else{
		alert("请输入正确的页数");
	}
}

function viewPage(pagesearch,pagecount){
	var page_value=document.getElementById("iyy_list_page_value").value;
	if(/^\d+$/gi.test(page_value)){
		if(page_value<=0){
			page_value=1;
		}else if(page_value>pagecount){
			page_value=pagecount;
		}
		document.location.href=pagesearch+"index_"+ page_value + ".shtml";
	}else{
	 alert("页数只能是0-9之间的正整数！");
	}
}