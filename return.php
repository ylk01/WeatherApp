<?PHP

error_reporting(E_WARNING);

$city = $_POST['postname'];

$json = file_get_contents("http://api.openweathermap.org/data/2.5/weather?q='.$city.'&APPID=7f759089493b563470025ff8e11b88c9");

$data = json_decode($json);

echo "<center><h1> It is " . $data->weather[0]->description . " in " . $data->name . " now.</h1></br>";
echo "<h1> Temperature is " . round(($data->main->temp-273.15)) . " C</h1></br>";
echo "<h1> Humidity is " . $data->main->humidity . " %</h1></br>"; 
echo "<h1> Pressure is " . round($data->main->pressure) . " Mbar</h1></br>"; 
echo "<h1> Wind is " . round($data->wind->speed*3.6) . " Km/h</h1></br>";


?>