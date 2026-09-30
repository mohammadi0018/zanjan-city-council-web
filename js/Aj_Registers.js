var xmlHttp;
var id;
var colorwa;
var Adadesh;
var starteshA;
var nanayok;

function kicccact(warn,adadesh,startesh,nanay){
	
	colorwa = warn;
	Adadesh = adadesh;
	starteshA = startesh;
	nanayok = nanay;

var str = "r="+(new Date().getTime()) ;


//alert(colorwa);
id = "HmyColorNew";

if (colorwa == "Upload_Fi_Next"){
	//alert(starteshA);
	var url="aj_Upload_Fi_Next.php?Quer="+starteshA+'&start='+Adadesh+'&r='+(new Date().getTime());
	
	//alert(url);
}



if (colorwa == "RefreshPic"){
	var url="RefreshPic.php?r="+(new Date().getTime());
	//alert('fgfgfg');
}



if (colorwa == "RegChat"){
	var myMatnn=encodeURI(document.all.titletext.value);
	var mysecPic=document.all.secPic.value;
	var url="Reg_Chat.php?myTextQ="+myMatnn+'&SecText='+mysecPic+'&r='+(new Date().getTime());
	//alert(url);
}


if (colorwa == "OpinionAct"){
	var GbSSX="document.all."+nanayok+".value";
	var XSenderid = encodeURI(eval(GbSSX));
	var maSSOthE="document.all."+starteshA+".value";
	var XsenderOtherSupp = encodeURI(eval(maSSOthE));
	var myOpse = eval('document.all.'+Adadesh);
    var mySelectOpinion = encodeURI(myOpse.options[myOpse.selectedIndex].value);
   // alert(mySelectOpinion);
	var url="Opinion_Add.php?myOpse="+mySelectOpinion+'&XSenderid='+XSenderid+
	'&XsenderOtherSupp='+XsenderOtherSupp+'&r='+(new Date().getTime());
	//alert(url);
}


if (colorwa == "OpinionActTel"){
	var XsuppID = encodeURI(document.all.idSUppp.value);
	var myOpse = document.all.OpinionSelect;
    var mySelectOpinion = encodeURI(myOpse.options[myOpse.selectedIndex].value);	
	var url="Opinion_AddTel.php?myOpse="+mySelectOpinion+'&XsuppID='+XsuppID+'&r='+(new Date().getTime());
	//alert(url);
}

if (colorwa == "CheckUsername"){
	var UsernameOk = encodeURI(document.all.Username.value);
	var url="Username_Check.php?Username="+UsernameOk+'&r='+(new Date().getTime());
	//alert('fgfgfg');
}

if (colorwa == "CheckUserPass2"){
	var UsernameOk2 = encodeURI(document.all.Username2.value);	
	var PasswordOk2 = encodeURI(document.all.Password2.value);
	var PasswordOk2 = PasswordOk2.replace('&','*');
	var CokRemindOk2 = "";//encodeURI(document.all.CokRemind2.value);
	var url="Check.php?Username="+UsernameOk2+'&Password='+PasswordOk2+'&CokRemind='+CokRemindOk2+'&r='+(new Date().getTime());
}


if (colorwa == "CheckUserPass2INDEX"){
	var UsernameOk2 = encodeURI(document.all.Username2.value);	
	var PasswordOk2 = encodeURI(document.all.Password2.value);
	var PasswordOk2 = PasswordOk2.replace('&','*');
	var CokRemindOk2 = "";//encodeURI(document.all.CokRemind2.value);
	var url="member/Check.php?Username="+UsernameOk2+'&Password='+PasswordOk2+'&CokRemind='+CokRemindOk2+'&r='+(new Date().getTime());
}

if (colorwa == "RegisterNewUser_darandegan"){
	//encodeURI(
	var NameOkk = encodeURI(document.all.Name.value);
	var FamilyOkk = encodeURI(document.all.Family.value);
	var UsernameOkk = encodeURI(document.all.Username.value);
	var PasswordOkk = encodeURI(document.all.Password.value);
	var PasswordOkk = PasswordOkk.replace('&','*');
	var EmailOkk = encodeURI(document.all.Email.value);
	var shnOkk =encodeURI(document.all.shn.value);
	var PicOkk = encodeURI(document.all.Pic.value);
	var SalOkk = encodeURI(document.all.sal.value);
	var telcodeOkk = encodeURI(document.all.telcode.value);
	var telOkk = encodeURI(document.all.tel.value);
	
	var mobileOkk = encodeURI(document.all.mobile.value);
	var MeliCodeOkk = encodeURI(document.all.MeliCode.value);
	var PostalCodeOkk = encodeURI(document.all.PostalCode.value);
	var PasokhOkk = encodeURI(document.all.Pasokh.value);
	var sh_1Okk = encodeURI(document.all.sh_1.value);
	var sh_2Okk = encodeURI(document.all.sh_2.value);
	var sh_3Okk = encodeURI(document.all.sh_3.value);
	var sh_4Okk = encodeURI(document.all.sh_4.value);
	var SepehrCodeOkk = encodeURI(document.all.SepehrCode.value);
	var ShobeCodeOkk = encodeURI(document.all.ShobeCode.value);
	
	var myentass = document.all.SecurityQuestion;
    var SecurityQuestionOkk = encodeURI(myentass.options[myentass.selectedIndex].value);	
    
	var myenta = document.all.Gensiat;
    var myentshodea = encodeURI(myenta.options[myenta.selectedIndex].value);	
    
    var myent2 = document.all.Rooz;
    var myentshode2 = myent2.options[myent2.selectedIndex].value;	
    
    var myent3 = document.all.Mah;
    var myentshode3 = myent3.options[myent3.selectedIndex].value;	
    
    var NoCardd3 = document.all.NoCard;
    var BNO = encodeURI(NoCardd3.options[NoCardd3.selectedIndex].value);	
    //alert(myentshode3);
   // alert(NameOkk);
	var url="Aj_Ki_RegisterNewUser_da.php?Username="+UsernameOkk+'&Password='+PasswordOkk+'&Name='+NameOkk+'&Family='+FamilyOkk+'&Gensiat='+myentshodea+'&Email='+EmailOkk+'&Pic='+PicOkk+'&shn='+shnOkk+'&Rooz='+myentshode2+'&Mah='+myentshode3+'&Sal='+SalOkk+'&telcode='+telcodeOkk+'&tel='+telOkk+'&mobile='+mobileOkk+'&MeliCode='+MeliCodeOkk+'&PostalCode='+PostalCodeOkk+'&SecurityQuestion='+SecurityQuestionOkk+'&Pasokh='+PasokhOkk+'&sh_1='+sh_1Okk+'&sh_2='+sh_2Okk+'&sh_3='+sh_3Okk+'&sh_4='+sh_4Okk+'&SepehrCode='+SepehrCodeOkk+'&ShobeCode='+ShobeCodeOkk+'&NoCard='+BNO+'&r='+(new Date().getTime());

}


if (colorwa == "EDITUser"){
	//encodeURI(
	var NameOkk = encodeURI(document.all.Name.value);
	var FamilyOkk = encodeURI(document.all.Family.value);
	var PasswordOkk = encodeURI(document.all.Password.value);
	var PasswordOkk = PasswordOkk.replace('&','*');
	//alert(BbBgol);
	var EmailOkk = encodeURI(document.all.Email.value);
	var shnOkk =encodeURI(document.all.shn.value);
	var PicOkk = encodeURI(document.all.Pic.value);
	var SalOkk = encodeURI(document.all.sal.value);
	var telcodeOkk = encodeURI(document.all.telcode.value);
	var telOkk = encodeURI(document.all.tel.value);
	
	var mobileOkk = encodeURI(document.all.mobile.value);
	var MeliCodeOkk = encodeURI(document.all.MeliCode.value);
	var PostalCodeOkk = encodeURI(document.all.PostalCode.value);
	var PasokhOkk = encodeURI(document.all.Pasokh.value);
	var sh_1Okk = encodeURI(document.all.sh_1.value);
	var sh_2Okk = encodeURI(document.all.sh_2.value);
	var sh_3Okk = encodeURI(document.all.sh_3.value);
	var sh_4Okk = encodeURI(document.all.sh_4.value);
	var SepehrCodeOkk = encodeURI(document.all.SepehrCode.value);
	var ShobeCodeOkk = encodeURI(document.all.ShobeCode.value);
	var PazirandegiCodeOkk = encodeURI(document.all.PazirandegiCode.value);
	var PayaneCodeOkk = encodeURI(document.all.PayaneCode.value);
	
	var myentass = document.all.SecurityQuestion;
    var SecurityQuestionOkk = encodeURI(myentass.options[myentass.selectedIndex].value);	
    
	var myenta = document.all.Gensiat;
    var myentshodea = encodeURI(myenta.options[myenta.selectedIndex].value);	
    
    var myent2 = document.all.Rooz;
    var myentshode2 = myent2.options[myent2.selectedIndex].value;	
    
    var myent3 = document.all.Mah;
    var myentshode3 = myent3.options[myent3.selectedIndex].value;	
	var url="Aj_Ki_EDITUser.php?&Password="+PasswordOkk+'&Name='+NameOkk+
	'&Family='+FamilyOkk+'&Gensiat='+myentshodea+'&Email='+EmailOkk+'&Pic='+PicOkk+
	'&shn='+shnOkk+'&Rooz='+myentshode2+'&Mah='+myentshode3+'&Sal='+SalOkk+'&telcode='
	+telcodeOkk+'&tel='+telOkk+'&mobile='+mobileOkk+'&MeliCode='+MeliCodeOkk+'&PostalCode='
	+PostalCodeOkk+'&SecurityQuestion='+SecurityQuestionOkk+'&Pasokh='+PasokhOkk+'&sh_1='+sh_1Okk+
	'&sh_2='+sh_2Okk+'&sh_3='+sh_3Okk+'&sh_4='+sh_4Okk+'&SepehrCode='+SepehrCodeOkk+'&ShobeCode='+ShobeCodeOkk+
	'&PazirandegiCode='+PazirandegiCodeOkk+'&PayaneCode='+PayaneCodeOkk+'&r='+(new Date().getTime());
}





if (colorwa == "RegisterNewUser"){
	//encodeURI(
	var NameOkk = encodeURI(document.all.Name.value);
	var FamilyOkk = encodeURI(document.all.Family.value);
	var UsernameOkk = encodeURI(document.all.Username.value);
	var PasswordOkk = encodeURI(document.all.Password.value);
	var PasswordOkk = PasswordOkk.replace('&','*');
	var EmailOkk = encodeURI(document.all.Email.value);
	var shnOkk =encodeURI(document.all.shn.value);
	var PicOkk = encodeURI(document.all.Pic.value);
	var SalOkk = encodeURI(document.all.sal.value);
	var telcodeOkk = encodeURI(document.all.telcode.value);
	var telOkk = encodeURI(document.all.tel.value);
	
	var mobileOkk = encodeURI(document.all.mobile.value);
	var MeliCodeOkk = encodeURI(document.all.MeliCode.value);
	var PostalCodeOkk = encodeURI(document.all.PostalCode.value);
	var PasokhOkk = encodeURI(document.all.Pasokh.value);
	var sh_1Okk = encodeURI(document.all.sh_1.value);
	var sh_2Okk = encodeURI(document.all.sh_2.value);
	var sh_3Okk = encodeURI(document.all.sh_3.value);
	var sh_4Okk = encodeURI(document.all.sh_4.value);
	var SepehrCodeOkk = encodeURI(document.all.SepehrCode.value);
	var ShobeCodeOkk = encodeURI(document.all.ShobeCode.value);
	var PazirandegiCodeOkk = encodeURI(document.all.PazirandegiCode.value);
	var PayaneCodeOkk = encodeURI(document.all.PayaneCode.value);
	
	var myentass = document.all.SecurityQuestion;
    var SecurityQuestionOkk = encodeURI(myentass.options[myentass.selectedIndex].value);	
    
	var myenta = document.all.Gensiat;
    var myentshodea = encodeURI(myenta.options[myenta.selectedIndex].value);	
    
    var myent2 = document.all.Rooz;
    var myentshode2 = myent2.options[myent2.selectedIndex].value;	
    
    var myent3 = document.all.Mah;
    var myentshode3 = myent3.options[myent3.selectedIndex].value;	
    //alert(myentshode3);
    //alert('fdfdf');
	var url="Aj_Ki_RegisterNewUser.php?Username="+UsernameOkk+'&Password='+PasswordOkk+'&Name='+NameOkk+'&Family='+FamilyOkk+'&Gensiat='+myentshodea+'&Email='+EmailOkk+'&Pic='+PicOkk+'&shn='+shnOkk+'&Rooz='+myentshode2+'&Mah='+myentshode3+'&Sal='+SalOkk+'&telcode='+telcodeOkk+'&tel='+telOkk+'&mobile='+mobileOkk+'&MeliCode='+MeliCodeOkk+'&PostalCode='+PostalCodeOkk+'&SecurityQuestion='+SecurityQuestionOkk+'&Pasokh='+PasokhOkk+'&sh_1='+sh_1Okk+'&sh_2='+sh_2Okk+'&sh_3='+sh_3Okk+'&sh_4='+sh_4Okk+'&SepehrCode='+SepehrCodeOkk+'&ShobeCode='+ShobeCodeOkk+'&PazirandegiCode='+PazirandegiCodeOkk+'&PayaneCode='+PayaneCodeOkk+'&r='+(new Date().getTime());

}

if (colorwa == "Delete_ItemUpload"){
	
	var url="Delete_ItemUpload.php?itemID="+Adadesh+'&start='+starteshA+'&r='+(new Date().getTime());
}




xmlHttp=GetXmlHttpObject(stateChanged);
xmlHttp.open("POST", url , true);
xmlHttp.setRequestHeader("Content-Type", "application/x-www-form-urlencoded; charset=UTF-8"); 
//xmlHttp.setRequestHeader("enctype", "multipart/form-data"); 
xmlHttp.send(str);


}

function stateChanged() 
{ 
if (xmlHttp.readyState==1 || xmlHttp.readyState=="loading")
{	
	if (colorwa == "OpinionActTel"){
		document.getElementById('myOpinion2').innerHTML="<p align='center'><img src='ajax-loader2.gif'></p>";
	}
	if (colorwa == "OpinionAct"){
		document.getElementById('myOpinion').innerHTML="<p align='center'><img src='ajax-loader2.gif'></p>";
	}
	if (colorwa == "CheckUsername"){
	document.getElementById('UserChecker').innerHTML="<p align='center'><img src='ajax-loader2.gif'></p>";
	}
	

	if (colorwa == "CheckUserPass2"){
					document.getElementById('LoginNextRegister').innerHTML="<p align='right'><img src='ajax-loader2.gif'><font face='tahoma' size='1'>لطفا كمي صبر نماييد </font></p>";
		
	}
	if (colorwa == "CheckUserPass2INDEX"){
		document.getElementById('LoginNextRegister').innerHTML="<p align='right'><img src='member/ajax-loader2.gif'><font face='tahoma' size='1'>لطفا كمي صبر نماييد </font></p>";
	}
	if (colorwa == "RegisterNewUser_darandegan"){
		document.getElementById('reg_DIVV').innerHTML="<p align='right'><img src='ajax-loader2.gif'><font face='tahoma' size='1'>لطفا كمي صبر نماييد </font></p>";
	}
	if (colorwa == "EDITUser"){
			document.getElementById('reg_DIVV').innerHTML="<p align='right'><img src='ajax-loader2.gif'><font face='tahoma' size='1'>لطفا كمي صبر نماييد </font></p>";
	}
	if (colorwa == "RegisterNewUser"){
		document.getElementById('reg_DIVV').innerHTML="<p align='right'><img src='ajax-loader2.gif'><font face='tahoma' size='1'>لطفا كمي صبر نماييد </font></p>";
	}
	
	if (colorwa == "SendContact"){
			document.getElementById('contactSend').innerHTML="<p align='right'><img src='ajax-loader2.gif'><font face='tahoma' size='1'>لطفا كمي صبر نماييد </font></p>";

	}
	if (colorwa == "RefreshPic"){
		document.getElementById('SecurityPic').innerHTML="<p align='center'><img src='ajax-loader2.gif'></p>";
	}
	if (colorwa == "RegChat"){
		document.getElementById('myDivLoad').innerHTML="<p align='center'><img src='ajax-loader2.gif'></p>";
	}
}


if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete")
{ 
	if (colorwa == "RegChat"){
		if (xmlHttp.responseText == "PicNotCorrect"){
			alert('عبارت موجود در تصویر امنیتی به درستی وارد نشده است');
			document.getElementById('myDivLoad').innerHTML="عبارت موجود در تصویر امنیتی به درستی وارد نشده است";
		}
		if (xmlHttp.responseText != "PicNotCorrect"){
			window.parent.location.href='OnlineChat2.php?IDSC='+xmlHttp.responseText;
		}
	}
	if (colorwa == "OpinionActTel"){
				if (xmlHttp.responseText == "OpinionExist"){
			alert('نظر به این کاربر طی لحظاتی پیش انجام شده است');
			document.getElementById('myOpinion2').innerHTML="<font face=tahoma size=1 color=blue>درج نظر امکان پذیر نیست</font>";
		}else{
		document.getElementById('myOpinion2').innerHTML="<font face=tahoma size=1 color=blue>نظر شما درج شد</font>";
		}
	}
	if (colorwa == "OpinionAct"){
		//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "OpinionExist"){
			alert('نظر به این کاربر طی لحظاتی پیش انجام شده است');
			document.getElementById('myOpinion').innerHTML="<font face=tahoma size=1 color=yellow>درج نظر امکان پذیر نیست</font>";
		}else{
		document.getElementById('myOpinion').innerHTML="<font face=tahoma size=1 color=yellow>نظر شما درج شد</font>";
		}
		
	}
	
	if (colorwa == "RefreshPic"){
		document.getElementById('SecurityPic').innerHTML=xmlHttp.responseText;
	}
	if (colorwa == "CheckUserPass2"){
		//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "NOWrong"){
			alert("نام کاربري يا کلمه عبور وارد شده صحيح نمي باشد");
			document.getElementById('LoginNextRegister').innerHTML = "";
			
		}
		if (xmlHttp.responseText == "NODisable"){
			alert("حساب کاربری شما از طرف مدیریت غیر فعال شده است");
			document.getElementById('LoginNextRegister').innerHTML = "";
			
		}
		if (xmlHttp.responseText == "YESCorrect"){
			document.forms["KiccReg"].submit( );
		}
		if (xmlHttp.responseText == "Invalid character"){
			alert("نام کاربري يا کلمه عبور وارد شده صحيح نمي باشد");
			document.getElementById('LoginNextRegister').innerHTML = "";
		}
	}
	
	if (colorwa == "CheckUserPass2INDEX"){
		//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "NOWrong"){
			alert("نام کاربري يا کلمه عبور وارد شده صحيح نمي باشد");
			document.getElementById('LoginNextRegister').innerHTML = "";
			
		}
		if (xmlHttp.responseText == "NODisable"){
			alert("حساب کاربری شما از طرف مدیریت غیر فعال شده است");
			document.getElementById('LoginNextRegister').innerHTML = "";
			
		}
		if (xmlHttp.responseText == "YESCorrect"){
			document.forms["KiccReg"].submit( );
		}
		if (xmlHttp.responseText == "Invalid character"){
			alert("نام کاربري يا کلمه عبور وارد شده صحيح نمي باشد");
			document.getElementById('LoginNextRegister').innerHTML = "";
		}
	}
	
	if (colorwa == "RegisterNewUser_darandegan"){
			document.getElementById('reg_DIVV').innerHTML="";
		//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "PicNotCorrect"){
			alert('عبارت موجود در تصویر به طور صحیح وارد نشده است');
		}else if (xmlHttp.responseText == "UsernameEmpty"){
			alert('نام کاربری وارد نشده است');
		}else if (xmlHttp.responseText == "PasswordEmpty"){
			alert('کلمه عبور وارد نشده است');
		}else if (xmlHttp.responseText == "EmailEmpty"){
			alert('آدرس ایمیل وارد نشده است');
		}else if (xmlHttp.responseText == "SHEmpty"){
			alert('شماره کارت به طور صحیح وارد نشده است');
		}else if (xmlHttp.responseText == "SEPEmpty"){
			alert('شماره حساب سپهر به درستی وارد نشده است');
		}else if (xmlHttp.responseText == "PasokhEmpty"){
			alert('پاسخ سوال امنیتی وارد نشده است');
		}else if (xmlHttp.responseText == "MeliCode"){
			alert('کد ملی وارد نشده است');
		}else if (xmlHttp.responseText == "mobile"){
			alert('شماره تلفن همراه وارد نشده است');
		}else if (xmlHttp.responseText == "shn"){
			alert('شماره شناسنامه وارد نشده است');
		
		}else if (xmlHttp.responseText == "UsernameWasRepeat"){
			alert('این نام کاربری قبلا در سیستم ثبت شده است - لطفا نام کاربری دیگری انتخاب نمایید');
		}else if (xmlHttp.responseText == "EmailWasRepeat"){
			alert('کاربری با این آدرس ایمیل در سیستم وجود دارد ');
		}else if (xmlHttp.responseText == "Invalid character"){
				alert('در مشخصات وارد شده کاراکترهای غیر مجاز وجود دارد ، لطفا فقط از حروف و یا اعداد و یا کاراکتر  _ یا همان خط زیر استفاده نمایید');
		}else {
    	//alert(xmlHttp.responseText);
		displayMessage('Action_Register.php?ID='+xmlHttp.responseText);return false;
		}
	}
	
	if (colorwa == "EDITUser"){
		document.getElementById('reg_DIVV').innerHTML="";
	//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "PicNotCorrect"){
			alert('عبارت موجود در تصویر به طور صحیح وارد نشده است');
		}else if (xmlHttp.responseText == "UsernameEmpty"){
			alert('نام کاربری وارد نشده است');
		}else if (xmlHttp.responseText == "MerchantNotValid"){	
			alert('کد پذیرندگی یا شماره پایانه یا شماره حساب سپهر وارد شده در سیستم یافت نشد ، لطفا از صحت مقادیر این فیلدها اطمینان حاصل نمایید');
		}else if (xmlHttp.responseText == "PasswordEmpty"){
			alert('کلمه عبور وارد نشده است');
		}else if (xmlHttp.responseText == "EmailEmpty"){
			alert('آدرس ایمیل وارد نشده است');
		}else if (xmlHttp.responseText == "SHEmpty"){
			alert('شماره کارت به طور صحیح وارد نشده است');
		}else if (xmlHttp.responseText == "SEPEmpty"){
			alert('شماره حساب سپهر به درستی وارد نشده است');
		}else if (xmlHttp.responseText == "PasokhEmpty"){
			alert('پاسخ سوال امنیتی وارد نشده است');
		}else if (xmlHttp.responseText == "MeliCode"){
			alert('کد ملی وارد نشده است');
		}else if (xmlHttp.responseText == "mobile"){
			alert('شماره تلفن همراه وارد نشده است');
		}else if (xmlHttp.responseText == "shn"){
			alert('شماره شناسنامه وارد نشده است');
		
		}else if (xmlHttp.responseText == "UsernameWasRepeat"){
			alert('این نام کاربری قبلا در سیستم ثبت شده است - لطفا نام کاربری دیگری انتخاب نمایید');
		}else if (xmlHttp.responseText == "EmailWasRepeat"){
			alert('کاربری با این آدرس ایمیل در سیستم وجود دارد ');
		}else if (xmlHttp.responseText == "Invalid character"){
				alert('در مشخصات وارد شده کاراکترهای غیر مجاز وجود دارد ، لطفا فقط از حروف و یا اعداد و یا کاراکتر  _ یا همان خط زیر استفاده نمایید');
		}else {
    	alert('اطلاعات شما با موفقیت تغییر یافت');
		}
	}
	if (colorwa == "RegisterNewUser"){
		
				document.getElementById('reg_DIVV').innerHTML="";
	//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "PicNotCorrect"){
			alert('عبارت موجود در تصویر به طور صحیح وارد نشده است');
		}else if (xmlHttp.responseText == "UsernameEmpty"){
			alert('نام کاربری وارد نشده است');
		}else if (xmlHttp.responseText == "MerchantNotValid"){	
			alert('کد پذیرندگی یا شماره پایانه یا شماره حساب سپهر وارد شده در سیستم یافت نشد ، لطفا از صحت مقادیر این فیلدها اطمینان حاصل نمایید');
		}else if (xmlHttp.responseText == "PasswordEmpty"){
			alert('کلمه عبور وارد نشده است');
		}else if (xmlHttp.responseText == "EmailEmpty"){
			alert('آدرس ایمیل وارد نشده است');
		}else if (xmlHttp.responseText == "SHEmpty"){
			alert('شماره کارت به طور صحیح وارد نشده است');
		}else if (xmlHttp.responseText == "SEPEmpty"){
			alert('شماره حساب سپهر به درستی وارد نشده است');
		}else if (xmlHttp.responseText == "PasokhEmpty"){
			alert('پاسخ سوال امنیتی وارد نشده است');
		}else if (xmlHttp.responseText == "MeliCode"){
			alert('کد ملی وارد نشده است');
		}else if (xmlHttp.responseText == "mobile"){
			alert('شماره تلفن همراه وارد نشده است');
		}else if (xmlHttp.responseText == "shn"){
			alert('شماره شناسنامه وارد نشده است');
			}else if (xmlHttp.responseText == "MerchantRegistered"){
			alert('شما قبلا در سیستم عضو شده اید');
		}else if (xmlHttp.responseText == "UsernameWasRepeat"){
			alert('این نام کاربری قبلا در سیستم ثبت شده است - لطفا نام کاربری دیگری انتخاب نمایید');
		}else if (xmlHttp.responseText == "EmailWasRepeat"){
			alert('کاربری با این آدرس ایمیل در سیستم وجود دارد ');
		}else if (xmlHttp.responseText == "Invalid character"){
				alert('در مشخصات وارد شده کاراکترهای غیر مجاز وجود دارد ، لطفا فقط از حروف و یا اعداد و یا کاراکتر  _ یا همان خط زیر استفاده نمایید');
		}else {
    	
		displayMessage('Action_Register.php?ID='+xmlHttp.responseText);return false;
		}
		
		
	}
	
	if (colorwa == "CheckUsername"){
		//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "Invalid character"){
			document.getElementById('UserChecker').innerHTML="<p align='right'><font color='#800000' face='tahoma' size='1'> نام کاربری وارد شده مجاز نیست ، لطفا فقط از حروف و اعداد استفاده نمایید</font></p>";
		}
		if (xmlHttp.responseText == "YESReady"){
			document.getElementById('UserChecker').innerHTML="<p align='right'><font color='#008000' face='tahoma' size='1'> اين نام کاربري آماده ثبت است </font></p>";
		}
		if (xmlHttp.responseText == "NoUsed"){
			document.getElementById('UserChecker').innerHTML="<p align='right'><font color='#800000' face='tahoma' size='1'> اين نام کاربري قبلا ثبت شده است </font></p>";
		}
	}
	

	
	if (colorwa == "InviteFriend"){
		//alert(xmlHttp.responseText);
		if (xmlHttp.responseText == "ok"){
			alert('دعوت نامه شما برای فرد مورد نظرتان ارسال شد');
		}
	}
	
	
	
	
}
}

function GetXmlHttpObject(handler){ 

var objXmlHttp=null;
if (navigator.userAgent.indexOf("Opera")>=0)
{
alert("This example doesn't work in Opera") ;
return ;
}

if (navigator.userAgent.indexOf("MSIE")>=0)
{ 
var strName="Msxml2.XMLHTTP";
if (navigator.appVersion.indexOf("MSIE 5.5")>=0)
{
strName="Microsoft.XMLHTTP";
} 
try
{
objXmlHttp=new ActiveXObject(strName);
objXmlHttp.onreadystatechange=handler ;
return objXmlHttp;
} 
catch(e)
{ 
alert("Error. Scripting for ActiveX might be disabled");
return;
} 
} 
if (navigator.userAgent.indexOf("Mozilla")>=0)
{
objXmlHttp=new XMLHttpRequest();
objXmlHttp.onload=handler;
objXmlHttp.onerror=handler;
return objXmlHttp;
}
}
