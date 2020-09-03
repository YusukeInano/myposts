var x = 0;

var timetable_up = {
  1:{ id:"はるか1", hour:5, minute:45, type:1 },
  2:{ id:"はるか3", hour:6, minute:21, type:2 },
  3:{ id:"はるか5", hour:6, minute:44, type:1 },
  4:{ id:"びわこエクスプレス1", hour:7, minute:3, type:3 },
  5:{ id:"スーパーはくと1", hour:7, minute:6, type:4 },
  6:{ id:"はるか9", hour:7, minute:45, type:5 },
  7:{ id:"サンダーバード2", hour:7, minute:53, type:4 },
  8:{ id:"はるか11", hour:8, minute:17, type:5 },
  9:{ id:"サンダーバード4", hour:8, minute:38, type:3 },
  10:{ id:"スーパーはくと3", hour:8, minute:50, type:4 },
  11:{ id:"サンダーバード6", hour:8, minute:56, type:6 },
  12:{ id:"はるか15", hour:9, minute:30, type:7 },
  13:{ id:"サンダーバード8", hour:9, minute:36, type:6 },
  14:{ id:"サンダーバード10", hour:10, minute:12, type:3 },
  15:{ id:"はるか19", hour:10, minute:30, type:7 },
  16:{ id:"サンダーバード12", hour:10, minute:39, type:3 },
  17:{ id:"スーパーはくと5", hour:10, minute:54, type:3 },
  18:{ id:"サンダーバード14", hour:11, minute:11, type:8 },
  19:{ id:"はるか23", hour:11, minute:30, type:7 },
  20:{ id:"サンダーバード16", hour:12, minute:11, type:8 },
  21:{ id:"はるか27", hour:12, minute:30, type:7 },
  22:{ id:"スーパーはくと7", hour:12, minute:52, type:4 },
  23:{ id:"サンダーバード18", hour:13, minute:11, type:8 },
  24:{ id:"はるか31", hour:13, minute:30, type:7 },
  25:{ id:"サンダーバード20", hour:13, minute:38, type:6 },
  26:{ id:"はるか35", hour:14, minute:30, type:7 },
  27:{ id:"サンダーバード22", hour:14, minute:38, type:6 },
  28:{ id:"スーパーはくと9", hour:14, minute:52, type:3 },
  29:{ id:"はるか39", hour:15, minute:30, type:7 },
  30:{ id:"サンダーバード24", hour:15, minute:37, type:6 },
  31:{ id:"サンダーバード26", hour:16, minute:11, type:8 },
  32:{ id:"はるか43", hour:16, minute:30, type:7 },
  33:{ id:"サンダーバード28", hour:16, minute:38, type:6 },
  34:{ id:"スーパーはくと", hour:16, minute:56, type:6 },
  35:{ id:"サンダーバード20", hour:17, minute:9, type:6 },
  36:{ id:"はるか47", hour:17, minute:30, type:7 },
  37:{ id:"サンダーバード32", hour:17, minute:41, type:6 },
  38:{ id:"くろしお23", hour:17, minute:47, type:2 },
};

// 駅の到着時間にパターンがあったので、パターンにした
var traintype = {
  1:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":16, "SinOsaka":30},
  2:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":12, "SinOsaka":25},
  3:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":11, "SinOsaka":23},
  4:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":12, "SinOsaka":24},
  5:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":15, "SinOsaka":28},
  6:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":11, "SinOsaka":22},
  7:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":14, "SinOsaka":27},
  8:{"Kyoto":0, "Katsuragawa":4, "Takatsuki":11, "SinOsaka":21},
 
};

function setTrainPosition(){

  var nowdate = new Date();
  var timetablekey = 0;
  var nowday = nowdate.getFullYear() + "/" +  nowdate.getMonth() + "/"+ nowdate.getDate();
  var nowtime = nowday + " " + nowdate.getHours() + ":" + nowdate.getMinutes() + ":" + nowdate.getSeconds();
  var nowmin = nowdate.getMinutes()
  var nowsec =  Math.round( nowdate.getSeconds()/10 );
  var trainpoint = 0;

  // for 現在時刻＜発車時刻 break　key を保存
  for ( key in timetable_up ) {
      var traindetail = timetable_up[key];
      var traintime = nowday + " " + traindetail.hour + ":" + traindetail.minute + ":00" ;

      if ( Date.parse(nowtime) < Date.parse(traintime)  ) {
          timetablekey = key;
          break;
      }
      //console.log( nowtime );
      //console.log( traintime );
  }

  console.log( timetablekey );

  //発車時刻+SinOsaka＜現在時刻＜発車時刻　の場合に電車を非表示
　// 駅の位置を微調整する
  var target_after = "";
  var target_before = "";
  var stationtime = "";
  var starttime = "";
  var endtime = "";

  var kyotime = "";
  var katsutime = "";
  var takatime = "";
  var shintime = "";

  if ( timetablekey == 0 ) {

    target_before = timetable_up[38];
    stationtime = traintype[target_before.type];

    starttime = nowday + " " +  + target_before.hour + ":" + target_before.minute + ":00";

    // 通貨時刻を計算する
      if ( (target_before.minute + stationtime.SinOsaka) > 60 ) {
        shintime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.SinOsaka - 60);
        endtime = nowday + " " + (target_before.hour + 1) + ":" + (target_before.minute +  stationtime.Kyoto - 60);
      } else {
        shintime = (target_before.hour) + ":" + (target_before.minute + stationtime.SinOsaka);
        endtime = nowday + " " + (target_before.hour) + ":" + (target_before.minute +  stationtime.SinOsaka);
      }

      if ( (target_before.minute + stationtime.Takatsuki) > 60 ) {
        takatime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Takatsuki - 60);
      } else {
        takatime = (target_before.hour) + ":" + (target_before.minute + stationtime.Takatsuki);
      }

      if ( (target_before.minute + stationtime.Katsuragawa) > 60 ) {
        katsutime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Katsuragawa - 60);
      } else {
        katsutime = (target_before.hour) + ":" + (target_before.minute + stationtime.Katsuragawa);
      }

      if ( (target_before.minute + stationtime.Kyoto) > 60 ) {
        kyotime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Kyoto - 60);
      } else {
        kyotime = (target_before.hour) + ":" + (target_before.minute + stationtime.Kyoto);
      }

  } else if ( timetablekey == 1 ) {

    target_after = timetable_up[timetablekey];
    stationtime =  traintype[target_after.type];

    starttime = nowday + " " +  + target_after.hour + ":" + target_after.minute + ":00";

    // 通貨時刻を計算する
    if ( (target_after.minute + stationtime.SinOsaka) > 60 ) {
      shintime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.SinOsaka - 60);
      endtime = nowday + " " + (target_after.hour + 1) + ":" + (target_after.minute +  stationtime.SinOsaka - 60);
    } else {
      shintime = (target_after.hour) + ":" + (target_after.minute + stationtime.SinOsaka);
      endtime = nowday + " " + (target_after.hour) + ":" + (target_after.minute +  stationtime.SinOsaka);
    }

    if ( (target_after.minute + stationtime.Takatsuki) > 60 ) {
      takatime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.Takatsuki - 60);
    } else {
      takatime = (target_after.hour) + ":" + (target_after.minute + stationtime.Takatsuki);
    }

    if ( (target_after.minute + stationtime.Katsuragawa) > 60 ) {
      katsutime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.Katsuragawa - 60);
    } else {
      katsutime = (target_after.hour) + ":" + (target_after.minute + stationtime.Katsuragawa);
    }

    if ( (target_after.minute + stationtime.Kyoto) > 60 ) {
      kyotime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.Kyoto - 60);
    } else {
      kyotime = (target_after.hour) + ":" + (target_after.minute + stationtime.Kyoto);
    }

  } else {
    target_after = timetable_up[timetablekey];
    target_before = timetable_up[timetablekey-1];
    stationtime =  traintype[target_before.type];

    starttime = nowday + " " +  + target_before.hour + ":" + target_before.minute + ":00";

    // 通貨時刻を計算する
      if ( (target_before.minute + stationtime.SinOsaka) > 60 ) {
        shintime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.SinOsaka - 60);
        endtime = nowday + " " + (target_before.hour + 1) + ":" + (target_before.minute +  stationtime.SinOsaka - 60);
      } else {
        shintime = (target_before.hour) + ":" + (target_before.minute + stationtime.SinOsaka);
        endtime = nowday + " " + (target_before.hour) + ":" + (target_before.minute +  stationtime.SinOsaka);
      }

      if ( (target_before.minute + stationtime.Takatsuki) > 60 ) {
        takatime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Takatsuki - 60);
      } else {
        takatime = (target_before.hour) + ":" + (target_before.minute + stationtime.Takatsuki);
      }

      if ( (target_before.minute + stationtime.Katsuragawa) > 60 ) {
        katsutime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Katsuragawa - 60);
      } else {
        katsutime = (target_before.hour) + ":" + (target_before.minute + stationtime.Katsuragawa);
      }

      if ( (target_before.minute + stationtime.Kyoto) > 60 ) {
        kyotime = (target_before.hour + 1) + ":" + (target_before.minute + stationtime.Kyoto - 60);
      } else {
        kyotime = (target_before.hour) + ":" + (target_before.minute + stationtime.Kyoto);
      }
  }

  document.getElementById( 'nowdate' ).innerHTML = nowday;
  document.getElementById( 'name' ).innerHTML = '特急';
  document.getElementById( 'number' ).innerHTML =  target_before.id + '号';
  document.getElementById( 'home' ).innerHTML =  '桂川駅' + katsutime + '通過';

  //発車時刻＜=現在時刻＜=発車時刻+Kyoto の場合に電車を表示
  if ( Date.parse(starttime) <= Date.parse(nowtime) && Date.parse(nowtime) <= Date.parse(endtime) ) {

    calctim =  Math.round( ( Date.parse(nowtime) - Date.parse(starttime) ) / 10000);
    console.log( calctim );

    trainpoint = calctim * 3 ;

    document.getElementById( 'express' ).style.left = trainpoint + "px";
    console.log(trainpoint);
  } else {

　  if ( timetablekey > 1 ) {
      stationtime =  traintype[target_after.type];

      if ( (target_after.minute + stationtime.SinOsaka) > 60 ) {
        shintime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.SinOsaka - 60);
      } else {
        shintime = (target_after.hour) + ":" + (target_after.minute + stationtime.SinOsaka);
      }

      if ( (target_after.minute + stationtime.Takatsuki) > 60 ) {
        takatime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.Takatsuki - 60);
      } else {
        takatime = (target_after.hour) + ":" + (target_after.minute + stationtime.Takatsuki);
      }

      if ( (target_after.minute + stationtime.Katsuragawa) > 60 ) {
        katsutime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.Katsuragawa - 60);
      } else {
        katsutime = (target_after.hour) + ":" + (target_after.minute + stationtime.Katsuragawa);
      }

      if ( (target_after.minute + stationtime.Kyoto) > 60 ) {
        kyotime = (target_after.hour + 1) + ":" + (target_after.minute + stationtime.Kyoto - 60);
      } else {
        kyotime = (target_after.hour) + ":" + (target_after.minute + stationtime.Kyoto);
      }

      trainpoint = 0;
    } else if ( timetablekey == 0 ) {
      trainpoint = 540;
    }

    document.getElementById( 'express' ).style.left = trainpoint + "px";
    console.log(trainpoint);
  }

  var kyopoint = stationtime.Kyoto * 18 - 120;
  var katsupoint = stationtime.Katsuragawa * 18 - 90;// 画像の大きさだけズレるのでオフセットを入れた
  var takapoint = stationtime.Takatsuki * 18 - 30 ;// 画像の大きさだけズレるのでオフセットを入れた
  var shinpoint = stationtime.SinOsaka * 18 + 70 ;// 画像の大きさだけズレるのでオフセットを入れた

  document.getElementById( 'shinosaka' ).style.left = shinpoint + "px";
  console.log(shinpoint);
  document.getElementById( 'takatsuki' ).style.left = takapoint + "px";
  console.log(takapoint);
  document.getElementById( 'katsuragawa' ).style.left = katsupoint + "px";
  console.log(katsupoint);
  document.getElementById( 'kyoto' ).style.left = kyopoint + "px";
  console.log(kyopoint);

  document.getElementById( 'shintime' ).innerHTML = shintime;
  console.log(shintime);
  document.getElementById( 'takatime' ).innerHTML= takatime;
  console.log(takatime);
  document.getElementById( 'katsutime' ).innerHTML = katsutime;
  console.log(katsutime);
  document.getElementById( 'kyotime' ).innerHTML = kyotime;
  console.log(kyotime);

  console.log(nowtime);

}

//開いたとき
window.onload = function(){
  setTrainPosition();
}

//10秒に1回呼び出す
setInterval(setTrainPosition, 10000);
