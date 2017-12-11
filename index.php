<html>
<title>Sistema Minkay</title><link rel="stylesheet" href="./login/style.css"> 
<script src="js/jquery.min.js"></script> 
 <script type="text/javascript" src="js/validation.min.js"></script>
         <script src="js/script.js"></script>
         <link rel="shortcut icon" href="https://minkay.com.pe/img/favicon.ico">
<link href="./login/base.css" type="text/css" rel="stylesheet">
<link href="./login/Default.css" type="text/css" rel="stylesheet">
<link href="./login/demo.css" type="text/css" rel="stylesheet">
<link href="./login/layout.css" type="text/css" rel="stylesheet"></head>
<body>
<div class="wrapper">
		
		<div class="container">
        <div class="logocab">
           <img src="./../img/logo.png" alt="Logo">
        </div>

    <form id="login-form">
<div>


    <div>
     <table id="table" width="100%" cellspacing="0" cellpadding="0">
        <tbody><tr>
            <td align="center">
                

<style type="text/css">
    .style1
    {
        height: 39px;
    }
    .imputUser
    {}
    .style3
    {
        width: 19px;
    }
    
    input.placeholder {
    text-align: center;
}
    .style4
    {
        width: 19px;
        height: 1px;
    }
    .style5
    {
        height: 1px;
    }
</style>
<script type="text/javascript" src="./login/alertify.js.descarga"></script>
     <link href="./login/alertify.core.css" rel="stylesheet" type="text/css">
<link href="./login/alertify.default.css" rel="stylesheet">

<table border="0" cellpadding="0" cellspacing="2" align="center">
 <tbody><tr>
    <td colspan="3" align="center" class="style1">
          
     </td>
 </tr>
 <tr>
    <td align="right" class="style3">
        <br>
        </td>
    <td>
        <input name="username" type="text" maxlength="30" id="username" tabindex="1" class="imputUser" placeholder="Usuario">
              
         </td>
    <td><div id="msgEr1" style="display:none;"><img src="./login/edtError.png" id="ucLogin1_imgError1"></div></td>
 
 </tr>
  
 <tr>
    <td align="right" class="style4">
        </td>
    <td class="style5">
        </td>
    <td class="style5"></td>
 </tr>
  
 <tr>
    <td align="right" class="style3">
      <br>
        &nbsp;</td>
    <td>
        <input name="password" type="password" maxlength="15" id="password" class="imputPass" placeholder="Contrasena">
    </td>
    <td><div id="msgEr2" style="display:none;"><img src="./login/edtError.png" id="ucLogin1_imgError2"></div></td>
 </tr>
    
 <tr>
    <td colspan="3" style="color: Red; font-size: small">
        &nbsp;
    </td>
 </tr>


 <tr>
    <td align="center" class="style3">
        &nbsp;</td>
    <td colspan="2" align="left">
        <input type="submit" name="btn-login" value="Ingresar"  class="aspPButton">        
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        
         
    </td>
 </tr>
 
 <tr>
    <td colspan="3" align="right">
       
       
       
        &nbsp;</td>
 </tr>
</tbody></table>






<br>
<script language="javascript" type="text/javascript">


    function salir() { $("#login").show(); $("#ver").hide(); }
    function Verifica(evt) {
        evt = (evt) ? evt : event;
        var charCode = (evt.which) ? evt.which : evt.keyCode
        if (charCode == 13) {
            if (!Validate()) { return false; }
        }
    }
    function Validate() {
        var isValid = true;
       
        if ($("#ucLogin1_txtUserName").val() == "") {
            $("#msgEr1").show();
            $("#msgEr2").hide();
            $("#msgEr3").hide();
            $("#txtUserName").focus();
            return false;
        }
        if ($("#ucLogin1_txtPassword").val() == "") {
            $("#msgEr1").hide();
            $("#msgEr2").show();
            $("#msgEr3").hide();
            $("#txtPassword").focus();
            return false;
        }


        if (isValid) {
            showLoader(); $("#msgEr").hide();
            return true;
        }
    }

    function lnkOlvidoContrasenha_onClick(_url) {
        top.location.href = _url;
    }
    function lnkNuevoUsusario_onClick(_url) {
        top.location.href = _url;
    }
    function lnkNuevoAgencia_onClick(_url) {
        top.location.href = _url;
    }
   
</script>


            </td>
        </tr>
    </tbody></table>
    </div>
    
</form>
    </div>
    
      <ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>

	</div><!-- container -->
  


</body></html>