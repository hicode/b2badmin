//Pan Pan start fix function execute if exist  04/06/2015
var alertgeneraldivid = '#bootstrap_alert_general';
var myajaxDatatables = new Array();//global variable for refresh-check-search grids
$.ajaxSetup({
    cache: true
 });
 
var checkIfVarIsEmpty = function (varnameName) {
    var blret = false;
    if (!varnameName.trim()) {
        blret = true;
    }
    return blret;

};
var checkIfFunctionExist = function (functionName) {
    var blret = false;
    if ($.isFunction(window[functionName]))
    {
        blret = true;
    }
    return blret;

};

var executeIfFunctionExist = function (functionName, param1) {
    var blret = false;
    if (checkIfFunctionExist(functionName) === true)
    {
        window[functionName](param1);
    }
};

var checkIfParamIsNullOrUndefined = function (paramname) {
    var blret = false;
    if (paramname == null || paramname == undefined)
    {
        blret = true;
        ;
    }
    return blret;
};

var toastrMsg = function (mymsgtitle, mymsg, mytype) {
    var dt = new Date();
    var time = dt.getDay() + "/" + dt.getMonth() + "/" + dt.getFullYear() + " " + dt.getHours() + ":" + dt.getMinutes() + ":" + dt.getSeconds();
    toastr.options = {
        "closeButton": true,
        "debug": false,
        "positionClass": "toast-top-left",
        "onclick": null,
        "showDuration": "5000",
        "hideDuration": "5000",
        "timeOut": "5000",
        "extendedTimeOut": "1000",
        "showEasing": "swing",
        "hideEasing": "linear",
        "showMethod": "fadeIn",
        "hideMethod": "fadeOut"
    }
    mymsgtitle = mymsgtitle || "";
    mymsgtitle = time + mymsgtitle;
    toastr[mytype || 'success'](mymsg || "", mymsgtitle);
    //success info warning error
}
function DatatableGenActionRowclick()
{
}
$('html').delegate('.mydatatablerowbtn', 'click', DatatableGenActionRowclick);
//$(".mytablebtn" ).on( "click", DatatableGenActionRowclick());

//Pan Pan end fix function execute if exist  04/06/2015
