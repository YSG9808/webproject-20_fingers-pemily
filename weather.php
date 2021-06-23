<html>
<head>  
    <TITLE>WEATHER</TITLE>
    <style>
            html {
                height: 100%;
                background: #E0E0D4;
            }
    </style>
    <script src = "./js/jquery-3.4.1.min.js"></script>
</head>
<body>
    <div style = "width:870px; margin-top:40px; text-align:center">  
        <select name= "city" id="city" style="padding:3px; vertical-align:top" onchange="javascript:goSearch()">
            <option value = "">도시선택</option>
            <option value="Seoul">서울</option>
            <option value="Daejeon">대전</option>
            <option value="Incheon">인천</option>
            <option value="Daegu">대구</option>
            <option value="Busan">부산</option>
            <option value="Gwangju">광주</option>
            <option value="Ulsan">울산</option>
    </select> 
    <button onclick="javascript:searchWithLatLng();">현재 위치로 검색</button>
    
    </div>

    <div style = "float:right; margin-right:30px; line-height: 180%;">
        
        <B>- 맑은 날</B> : 강아지가 산책하기 가장 좋은 날이며,<BR>
        고양이에게도 기분 좋은 날이니 충분히 놀아주세요!<BR>
        <BR>
        <B>- 비 오는 날, 고양이</B> : 고양이는 원래 육식을 즐기며 작은 동물들을 사냥하고 <BR>다니던 사냥꾼들이었습니다.
        이러한 본능 때문에 비 오는 날이면 사냥에 실패할 <BR>확률이 높다는 것을
        알고 있는 고양이는 에너지 소비를 최소한으로 억제하기<BR> 위해 잠만 잡니다.
        그러니 비가 오는 날에는 고양이의 잠을 방해하지 않는 것이 좋습니다!
        <BR>
        <BR>
        <B>- 비 오는 날, 강아지</B> : <BR>
        1. 비 오는 날에는 자연 냄새를 더 잘 맡을 수 있기 때문에
        가능하다면 강아지와 <BR>잠시 외출해 주시는 것도 좋습니다!<BR>
        2. 장마철 폭우나 장대비가 내리는 날에는 나가지 않는 편이
           좋습니다.<BR> 
        3. 강아지들도 비를 맞으면 피부에 좋지 않습니다. 피부 보호를
        위해 전용 우비를 <BR>입혀주시고, 우비가 없다면 우산 안에서 비를 피할 수
         있도록 해주세요.<BR>
        4. 비오는 날에는 강아지의 발바닥과 털이 더 더러워지기 때문에<BR>
           더욱 깨끗하게 닦아주고, 잘 말려주어야 합니다.
    </div>

    <div style = "margin-left:50px; margin-top:15px; color: #1d253a; font-weight:bold">
        오늘의 날씨 
    </div>
    <div id="weather_result" style="margin-left:50px; width:35%; min-height:390px; display:inline-block; margin-top:10px;
    margin-left:50px; padding:10px; padding-right:40px; border:1px solid #bbbbbb; background-color: white;">
    <div id = "resultContainer" style="display:none">
        <div id = "resultCity" style = "margin-left:85px; margin-top:30px; font-size:20px;font-weight:bold">    
        </div>
        <div style="display:inline-block">
            <div style="float:left; margin-left:130px; margin-top: 10px">
                <div>
                    <img src="" id="resultWeatherIcon">
                </div>
            </div>
            <div style="float:left; margin-left:117px; margin-top:45px">
                <span id="resultTemperature" style="font-weight:bold; font-size:25px"></span><span>°C</span>
            </div>
        </div>
        <div style="margin-left:17px">
            <!-- <div id = "resultWeatherTitle" style="float:left">
            </div> -->
            <div style="float:left; margin-left:90px; margin-top:30px">
            습도: <span id = "resultWeatherHumidity" style="margin-right:30px"></span>
            기압: <span id = "resultWeatherPressure" style="margin-right:30px"></span>
            풍속: <span id = "resultWeatherWindSpeed" style="margin-right:30px"></span>
        </div>
    </div>
</body>
</html>
<script>

    function getWeatherEngineData(SEARCH_CITY, LAT, LNG)
    {
        $.ajax({
                type: 'POST',
                dataType: 'json',
                url: 'lib.php',
                data: {'search_city': SEARCH_CITY, 'lat': LAT, 'lng': LNG},
                cache: false,
                async: false
            })
            .done(function(result){
                //  ajax 통신이 성공한 경우
                console.log(result);
                if(result.main)
                {
                    $("#resultWeatherIcon").attr("src","//openweathermap.org/img/wn/" + result.weather[0].icon+"@2x.png");
                    $("#resultTemperature").html(result.main.temp);
                    $("#resultCity").html(result.name);

                    $("#resultWeatherTitle").html(result.weather[0].description);
                    $("#resultWeatherHumidity").html(result.main.humidity + "%");
                    $("#resultWeatherPressure").html(result.main.pressure + "hPa");
                    $("#resultWeatherWindSpeed").html(result.wind.speed + "m/s");

                    $("#resultContainer").show();
                }
//                alert("현재 온도: " + result.main.temp);
            });
    }

    function searchWithLatLng() //  현재 위치로 검색
    {
        if(navigator.geolocation)
        {
            navigator.geolacation.getCurrentPosition (function(pos){
                //  pos.coords.longitude: 경도, pos.coords.latitude: 위도
                getWeatherEngineData("", pos.coords.longitude, pos.coords.latitude)
            });
        }  
    }

    function goSearch() //  날씨 검색
    {
        var SEARCH_CITY = $("#city").val();
        if(!SEARCH_CITY)
        {
            alert("먼저 도시를 입력하세요");
            return false;
        }
        else    //  API 엔진과 소통
        {
            getWeatherEngineData(SEARCH_CITY, "", "");
        }
    }  
</script>