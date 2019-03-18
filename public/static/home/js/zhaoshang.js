
        function zixun_type(id){
            if(id=='1'){
            	document.getElementById("zixun_1").className="bk1_tzzx1";
            	document.getElementById("zixun_2").className="bk1_zszx1";
            }else{
            	document.getElementById("zixun_1").className="bk1_tzzx2";
            	document.getElementById("zixun_2").className="bk1_zszx2";
            }
            
            $("#zixun_type").attr("value",id);



        }   
   	 function submitCheck(){
   		
   		var reg = /^1[34578]\d{4,9}$/;	   
   		var mobile = $('#mobile').val();
   		var name = $('#name').val();
   		var message = $('#message').val();
   		//var code = $('#code').val();
   		var email = $('#email').val();
   		var qq = $('#qq').val();
   		var danwei = $('#danwei').val();
   		var type = $('#type').val();
   		var yqid = $('#yqid').val();
   		var mobile2 = $('#mobile2').val();
   		var uid = $('#uid').val();
		var title = $('#title').val();
   		var zixun_type = $('#zixun_type').val();
   		if(danwei == ''){		
   			alert('请输入咨询单位');
   			return false;
   		}
		
   		if(mobile ){		
   			  if (!reg.test(mobile)){			
   			alert('请输入正确的手机号码');
   			return false;
   		}
   		}
   		
   		/*
   		if(code == ''){		
   			alert('请输入验证码');
   			return false;
   		}*/
   		

   		if(message == ''){		
   			alert('请输入留言内容');
   			return false;
   		}
   		
   		$.post("/address_show.php",
   				{	
   					level:'10',
					type:type,
   					mobile:mobile,
   					mobile2:mobile2,
   					name:name,
   				//	code:code,
   					email:email,
   					qq:qq,
   					yqid:yqid,
   					uid:uid,
   					danwei:danwei,
   					zixun_type:zixun_type,
   					message:message,
					title:title
   					},
   				function(data){		
						loadBaiduTongji();
   						alert(data);
					
   				});
   	}
   	 function submitCheck_gx(){
    		
    		var reg = /^1[34578]\d{4,9}$/;	   
    		var mobile = $('#mobile1').val();
    		var name = $('#name1').val();
    		var message = $('#message1').val();
    		//var code = $('#code').val();
    		var type = $('#type').val();
    		var yqid = $('#yqid').val();
    		var uid = $('#uid').val();
    		var title = $('#title').val();
    		var zixun_type = $('#zixun_type').val();
    		if(name == ''){		
    			alert('请输入姓名');
    			return false;
    		}
    		if (!reg.test(mobile)){			
    			alert('请输入正确的手机号码');
    			return false;
    		}
    		
    		/*
    		if(code == ''){		
    			alert('请输入验证码');
    			return false;
    		}*/
    		

    		if(message == ''){		
    			alert('请输入留言内容');
    			return false;
    		}
    		
    		
    		$.post("/address_show.php",
    				{	
    					level:'10',
 					type:type,
    					mobile:mobile,
    					name:name,
    				//	code:code,
    					yqid:yqid,
    					uid:uid,
    					zixun_type:zixun_type,
    					message:message,
 					title:title
    					},
    				function(data){		
 						loadBaiduTongji();
    						alert(data);
 					
    				});
    	}
   	 
   	 
	function loadBaiduTongji(){
		var iframe = '<iframe style="display:none" src="http://www.zhongguozhaoshang.com/html/liuyan.html" height="0" width="0"></iframe>';
		//document.body.append(iframe);
		$('body').append(iframe);
	}
   	var ttime= 60;
   	var n;	
    function save(){
		var mobile = $('#mobile').val();
		if($('#mobile').val() == ''){
			$('#mobile').focus();
			alert('请输入手机号码');
			return false;
		}

		reg = /^1[3|4|5|8|7][0-9]\d{8}$/;
        if(!reg.test(mobile)){
            alert('请输入正确的移动电话');
            proMsgForm.tel1.focus();
            return false;
        }
		
		$.post("/saveMobile.php",
				{	action:"saveMobile",
					mobile:mobile
					},
				function(data){						
					if(data=='1'){
						n=ttime;
						setInterval("time()",1000);
					}
					else{
						alert(data);
					}
						
				});

	}
  
   	 function time(){

         if(n>0){
                 n--;
                 //alert(n);
                 document.getElementById('dosubmit').value="还剩"+n+"秒";
                 document.getElementById('dosubmit').disabled = true;
         }else{
                 document.getElementById('dosubmit').value="重新获取";
                 document.getElementById('dosubmit').disabled = false;
         }
     }
   	 
   	 function avals2(content)
     {
         var textarea=document.getElementById('message');
        textarea.value=textarea.value+content;
     }
   	 
   	 
   	function submitCheck1(){
   		var reg = /^1[34578]\d{4,9}$/;	   
   		var mobile = $('#mobile1').val();
   		var name = $('#name1').val();
   		var message = $('#message1').val();
   		//var code = $('#code').val();
   		var email = $('#email1').val();
   		var qq = $('#qq1').val();
   		var danwei = $('#danwei1').val();
   		var type = $('#type').val();
   		var yqid = $('#yqid').val();
   		var mobile2 = $('#mobile21').val();
   		var uid = $('#uid').val();
		var title = $('#title').val();
   		var zixun_type = $('#zixun_type').val();
   		if(danwei == ''){		
   			alert('请输入咨询单位');
   			return false;
   		}
		
   		if(mobile ){		
   			  if (!reg.test(mobile)){			
   			alert('请输入正确的手机号码');
   			return false;
   		}
   		}
   		
   		/*
   		if(code == ''){		
   			alert('请输入验证码');
   			return false;
   		}*/
   		

   		if(message == ''){		
   			alert('请输入留言内容');
   			return false;
   		}
   		
   		$.post("/address_show.php",
   				{	
   					level:'10',
					type:type,
   					mobile:mobile,
   					mobile2:mobile2,
   					name:name,
   				//	code:code,
   					email:email,
   					qq:qq,
   					yqid:yqid,
   					uid:uid,
   					danwei:danwei,
   					zixun_type:zixun_type,
   					message:message,
					title:title
   					},
   				function(data){		
						loadBaiduTongji();
   						alert(data);
					
   				});
   	} 	
   	
   	function avals1(content)
    {
        var textarea=document.getElementById('message1');
       textarea.value=textarea.value+content;
    }
   	
   	function showid(content)
    {
   		$('#tc_lybox').show();
		$('#fudong01').hide();
    }
   	 
   	 
   	 
   	 
   	 
   	 
   	 
   	 
   	 
   	 
   	 
   	 
   	 