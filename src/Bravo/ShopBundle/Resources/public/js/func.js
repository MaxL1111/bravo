// часы 
function formatDate(date) {

  var dd = date.getDate();
  if (dd < 10) dd = '0' + dd;

  var mm = date.getMonth() + 1;
  if (mm < 10) mm = '0' + mm;

  var yy = date.getFullYear() % 100;
  if (yy < 10) yy = '0' + yy;
  
  var ss = date.getSeconds();
  if (ss < 10) ss = '0' + ss;
  
  var min = date.getMinutes();
  if (min < 10) min = '0' + min;
  
  var hh = date.getHours();
  if (hh < 10) hh = '0' + hh;

  return hh + ":" + min + ":" + ss + " " + dd + '.' + mm + '.' + yy;
}

function dateTick(){
	var d = new Date();
	var timeDate = formatDate(d);
	$("#dateTime").text(timeDate);
}

setInterval("dateTick()", 1000);

// таймер обратного отсчета времени
function taimerTick() {
	var now = new Date();
	var tomorrow = new Date(now.getFullYear(), now.getMonth(), now.getDate() + 1);
	var t = tomorrow - Date.now();
	var sec = Math.ceil(t / 1000);
	var min = Math.floor(sec / 60);
	sec -= min * 60;
	var hours = Math.floor(min / 60);
	min -= hours * 60;
	var days = Math.floor(hours / 24);
	hours -= days * 24;
	var clock = days + " дней " + hours + " часов " + ('0' + min).slice(-2) + " минут " + ('0' + sec).slice(-2) + " секунд ";
	$("#discountEnd").text(clock);
}
setInterval("taimerTick()", 1000);

$(document).on("click", ".product", function(e){
	e.preventDefault();
	//var div = document.getElementById("modal");
	var id = $(this).attr("id");
	//processajaxHTML("http://bravo.local/view/site/function.php",div,"GET","id="+id);
	//showDialog(div);
	$.ajax(
		"http://bravo.local/view/site/function.php",
		{
			type: "post",
			data: {id: id},
			success: function(data){
				data = JSON.parse(data);
				///JSON.stringify();//формирует json
				console.log(data);
				var str = "id: " + data[0].id + " title: " + data[0].title + " price: " + data[0].price;
				var div = document.getElementById("modal");
				$(div).html("<div class = 'modal-div'><p><img style = 'width: 200px' src='images/"+data[0].img+"'/></p><p>"+str+"</p></div>");
				showDialog(div);
			}
		}
	);
});
$(document).on("click", "#modal", function(e){
	hideDialog();
});
//test