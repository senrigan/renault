var localurl=location.href;
localurl=localurl.replace("#",'');
localurl=localurl.substring(0,localurl.indexOf("/app/"));
var staticfolder=localurl+"/static/";
var jscript=staticfolder+"javascript/";
var cssfolder=staticfolder+"css/";
localurl=localurl+"/app/";

var admin=localurl+"admin/";
var adminview=admin+"view/";
var adminmodel=admin+"model/";
var admincontroller=admin+"controller/";
var user=localurl+"user/";
var userview=user+"view/";
var usermodel=user+"model/";
var usercontroller=user+"controller/";
