'use strict';
{
  var ListElement = new Array(
    { time:"12:55:0", id:"train11"}, { time:"12:56:0", id:"train11"}, { time:"12:57:0", id:"train11"}, { time:"12:58:0", id:"train11"}, { time:"12:59:0", id:"train11"}, { time:"13:0:0", id:"train11"}, { time:"13:1:0", id:"train11"},
    { time:"13:2:0", id:"train11"}, { time:"13:3:0", id:"train11"}, { time:"13:4:0", id:"train11"},
    { time:"12:57:0", id:"train12"}, { time:"12:58:0", id:"train12"}, { time:"12:59:0", id:"train12"}, { time:"13:0:0", id:"train12"}, { time:"13:1:0", id:"train12"}, { time:"13:2:0", id:"train12"}, { time:"13:3:0", id:"train12"},
    { time:"13:4:0", id:"train12"}, { time:"13:5:0", id:"train12_0"}, { time:"13:6:0", id:"train12_0"},
    { time:"13:24:0", id:"train13"}, { time:"13:25:0", id:"train13"}, { time:"13:26:0", id:"train13"}, { time:"13:27:0", id:"train13"}, { time:"13:28:0", id:"train13"}, { time:"13:29:0", id:"train13"}, { time:"13:30:0", id:"train13"},
    { time:"13:31:0", id:"train13"}, { time:"13:32:0", id:"train13"}, { time:"13:33:0", id:"train13"},
    { time:"13:24:0", id:"train14"}, { time:"13:25:0", id:"train14"}, { time:"13:26:0", id:"train14"}, { time:"13:27:0", id:"train14"}, { time:"13:28:0", id:"train14"}, { time:"13:29:0", id:"train14"}, { time:"13:30:0", id:"train14"},
    { time:"13:31:0", id:"train14"}, { time:"13:32:0", id:"train14"}, { time:"13:33:0", id:"train14"},
    { time:"13:34:0", id:"train15"},  { time:"13:35:0", id:"train15"},  { time:"13:36:0", id:"train15"},  { time:"13:37:0", id:"train15"},  { time:"13:38:0", id:"train15"},  { time:"13:39:0", id:"train15"},  { time:"13:40:0", id:"train15"},
    { time:"13:41:0", id:"train15"},  { time:"13:42:0", id:"train15"},
    { time:"14:0:0", id:"train5"},  { time:"14:1:0", id:"train5"},  { time:"14:2:0", id:"train5"},  { time:"14:3:0", id:"train5"},  { time:"14:4:0", id:"train5"},
    { time:"14:24:0", id:"train6"}, { time:"14:25:0", id:"train6"},  { time:"14:26:0", id:"train6"},  { time:"14:27:0", id:"train6"},  { time:"14:28:0", id:"train6"},  { time:"14:29:0", id:"train6"},  { time:"14:30:0", id:"train6"},
    { time:"14:31:0", id:"train6"},  { time:"14:32:0", id:"train6"},  { time:"14:33:0", id:"train6"},
    { time:"14:32:4", id:"train7"},  { time:"14:33:4", id:"train7"},  { time:"14:34:0", id:"train7_0"},  { time:"14:35:0", id:"train7_0"},  { time:"14:36:0", id:"train7_0"},  { time:"14:37:0", id:"train7_0"},
    { time:"14:38:0", id:"train7_0"},  { time:"14:39:0", id:"train7_0"},  { time:"14:40:0", id:"train7_0"},  { time:"14:41:0", id:"train7_0"},
    { time:"14:46:0", id:"train8"}, { time:"14:47:0", id:"train8"}, { time:"14:48:0", id:"train8"}, { time:"14:49:0", id:"train8"}, { time:"14:50:0", id:"train8"}, { time:"14:51:0", id:"train8"}, { time:"14:52:0", id:"train8"},
    { time:"14:53:0", id:"train8"}, { time:"14:54:0", id:"train8"}, { time:"14:55:0", id:"train8"},
    { time:"14:49:0", id:"train9"}, { time:"14:50:0", id:"train9"}, { time:"14:51:0", id:"train9"}, { time:"14:52:0", id:"train9"}, { time:"14:53:0", id:"train9"}, { time:"14:54:0", id:"train9"}, { time:"14:55:0", id:"train9"},
    { time:"14:56:0", id:"train9_0"}, { time:"14:57:0", id:"train9_0"}, { time:"14:58:0", id:"train9_0"},
    { time:"14:55:0", id:"train0"},  { time:"14:56:0", id:"train0_2"},  { time:"14:57:0", id:"train0_2"},  { time:"14:58:0", id:"train0_2"},  { time:"14:59:0", id:"train0_3"},  { time:"15:0:0", id:"train0_3"},
    { time:"15:1:3", id:"train0_3"}, { time:"15:2:3", id:"train0_3"}, { time:"15:3:3", id:"train0_3"}, { time:"15:4:3", id:"train0_3"},
    { time:"15:24:0", id:"train1"}, { time:"15:25:0", id:"train1"}, { time:"15:26:0", id:"train1"}, { time:"15:27:0", id:"train1"}, { time:"15:28:0", id:"train1"}, { time:"15:29:0", id:"train1"}, { time:"15:30:0", id:"train1"},
    { time:"15:31:0", id:"train1"}, { time:"15:32:0", id:"train1"}, { time:"15:33:0", id:"train1"},
    { time:"15:25:0", id:"train2"}, { time:"15:26:0", id:"train2"}, { time:"15:27:0", id:"train2"}, { time:"15:28:0", id:"train2"}, { time:"15:29:0", id:"train2"}, { time:"15:30:0", id:"train2"}, { time:"15:31:0", id:"train2"},
    { time:"15:32:0", id:"train2"}, { time:"15:33:0", id:"train2"}, { time:"15:34:0", id:"train2_0"},
    { time:"15:31:0", id:"train3"}, { time:"15:32:0", id:"train3"}, { time:"15:33:0", id:"train3"}, { time:"15:34:0", id:"train3_0"}, { time:"15:35:0", id:"train3_1"}, { time:"15:36:0", id:"train3_1"}, { time:"15:37:0", id:"train3_1"},
    { time:"15:38:0", id:"train3_1"}, { time:"15:39:0", id:"train3_1"}, { time:"15:40:0", id:"train3_1"},
    { time:"15:33:0", id:"train4"}, { time:"15:34:0", id:"train4_0"}, { time:"15:35:0", id:"train4_1"}, { time:"15:36:0", id:"train4_1"}, { time:"15:37:0", id:"train4_1"}, { time:"15:38:0", id:"train4_1"}, { time:"15:39:0", id:"train4_1"},
    { time:"15:40:0", id:"train4_1"}, { time:"15:41:0", id:"train4_2"}, { time:"15:42:0", id:"train4_2"},
    { time:"15:49:0", id:"train10"}, { time:"15:50:0", id:"train10"}, { time:"15:51:0", id:"train10"}, { time:"15:52:0", id:"train10"}, { time:"15:53:0", id:"train10"}, { time:"15:54:0", id:"train10"}, { time:"15:55:0", id:"train10"},
    { time:"15:56:0", id:"train10"}, { time:"15:57:0", id:"train10"}, { time:"15:58:0", id:"train10"}
 );
    
    /* メッセージ表示欄を取得 */
    /* "Elems"内のすべての<div>を配列に格納 */
    var myElements
    =document.getElementById("trains").getElementsByTagName("div");
    
    /*メッセージを表示するタイマーの関数*/
    function MessageTimer(){
    // 時刻を取得
    var myTime = new Date();
    var myHours = myTime.getHours();
    var myMinutes = myTime.getMinutes();
    var mySeconds = myTime.getSeconds();
    // リストに登録した時刻なら、文言を表示する（60秒間）
    var strTime = myHours+":"+myMinutes+":"+mySeconds;
    for(var i=0;i<ListElement.length;i++){
    if( strTime == ListElement[i]["time"] ){
    var elem = document.getElementById(ListElement[i]["id"]);
    elem.style.display="block";
    setTimeout(function(){
    elem.style.display="none";},59000);
    }
    }
    return 0;
    }
    
    /* 全ての要素を非表示に */
    for(var i=0;i<ListElement.length;i++){
    var elem = document.getElementById(ListElement[i]["id"]);
    elem.style.display="none";
    }
    
    /* 10秒ごとに「MessageTimer();」を繰り返し実行 */
    var tmrTimer = setInterval( function(){ MessageTimer(); },1000);
}