 setInterval(function()
 {
	
$.ajax({
    "type":"POST",
    "url":"p22.php",
    "data":{"load":JSON.stringify(JSON.parse(localStorage.getItem("load"))),
   "unload":JSON.stringify(JSON.parse(localStorage.getItem("unload"))),
    "generate":JSON.stringify(JSON.parse(localStorage.getItem("generate"))),
    "clickbtn":JSON.stringify(JSON.parse(localStorage.getItem("clickbtn")))},
    "success":function(response){
        console.log(response);
        console.log(typeof response);
		localStorage.clear();
    }

});},5000);

/////////////////////

$btnshow=$("#show");
$btnshow.on("click",function(){
$.ajax({
	"type":"GET",
    "url":"p22.php",
	"data":{"localstore":""},
	"success":function(response){
		document.write(response);
		
		 console.log(typeof response);
	}
	
});
	
});
/////////////////////