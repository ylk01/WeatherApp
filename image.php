<?PHP

//error_reporting(E_ERROR | E_WARNING | E_PARSE);

/*$img = 'http://localhost/wpf/13.png';
header('Content-Type: image/png');
readfile($img);*/

$city = $_POST['postname'];

$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q='.$city.'&APPID=7f759089493b563470025ff8e11b88c9");

$data = json_decode($json);

$descr = $data->weather[0]->description;

if ($descr == "overcast clouds")
{echo '<img src="http://localhost/wpf/img/28.png"/>';}

elseif ($descr == "scattered clouds")
{echo '<img src="http://localhost/wpf/img/28.png"/>';}

elseif ($descr == "clear sky")
{echo '<img src="http://localhost/wpf/img/32.png"/>';}

elseif ($descr == "broken clouds")
{echo '<img src="http://localhost/wpf/img/28.png"/>';}

elseif ($descr == "light rain")
{echo '<img src="http://localhost/wpf/img/11.png"/>';}

else
{echo '<img src="http://localhost/wpf/img/na.png"/>';}

?>