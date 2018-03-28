<script>
var countEng = 0;


function clicks(count,language){
	count++;
	var lang = document.getElementById(language);
	if (count % 2 == 0){
		lang.color = "darkblue";
	} else
	{
		lang.color = "";
	}
}




</script>
