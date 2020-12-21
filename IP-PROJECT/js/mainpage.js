$(document).ready(function (){


  /*##############---FOR GETTING RANDOM DATA AS CURRENT HEIGHT FOR WATER LEVEL---###########*/
  setInterval(function()
  {
    var randPercent = Math.random()*0.5;
    console.log(randPercent);
    var color = '#90A4AE';
  
    if(randPercent*200 >= 90){
      color = '#FF3D00';
    }
    else if(randPercent*200 < 90 && randPercent*200 >= 60){
      color = '#81C784';
    }
    else if (randPercent*200 < 60 && randPercent*200 >= 40){
      color = '#FFEB3B';
    }
    else if (randPercent*200 < 40 && randPercent*200 >= 10){
      color = '#FF9800';
    }
    else if (randPercent*200 < 10 && randPercent*200 >= 0){
      color = '#FF3D00';
    }


    /*###############--------END OF CODE-------###############*/

    var USERNAME = document.getElementById("username").innerText;
    console.log(USERNAME);
    var now = new Date(Date.now());
    let percantageValue = document.querySelector(".gauge_cover");
    var d = new Date();
    let indicatorValue = document.querySelector(".gauge_fill");


    /********* ------UPDATE TANK LEVEL-------*************/

    $.ajax
    ({
      type:'post',
      url:'UpdateTable.php',
      data:{
      curHeight : randPercent*200,
      USERNAME : USERNAME
      },
      success:function(response)
      {
        if(response== "Success")
        {
          document.getElementById("error").innerHTML = "Updated";
          document.getElementById("error").style.color = 'green';
        }
        else if(response == "Fail")
        {
          percantageValue.textContent = `--`;
          indicatorValue.style.transform = `rotate(0turn)`
          document.getElementById("error").innerHTML = response;
          document.getElementById("error").style.color = 'red';
        }
        else
        {
          percantageValue.textContent = `--`;
          indicatorValue.style.transform = `rotate(0turn)`
          document.getElementById("error").innerHTML = "Unknown Error";
          document.getElementById("error").style.color = 'red';
        }
      }
    });

/********* ------UPDATE TANK LEVEL ENDS HERE-------*************/





/********* ------DISPLAY TANK LEVEL-------*************/
    $.ajax
    ({
      type:'post',
      url:'BasicData.php',
      data:
      {
        USERNAME : USERNAME
      },
      success:function(response){
        if(response!="Fail")
        {
          document.getElementById('currentheightshow').innerHTML = (jQuery.parseJSON(response).VariableHeight/100*(jQuery.parseJSON(response).TotalHeightTank)).toFixed(2)+" cm";
          document.getElementById('totalheightshow').innerHTML = jQuery.parseJSON(response).TotalHeightTank + " cm";
        }
        else if(response == "Fail")
        {
          document.getElementById("error").innerHTML = response;
          document.getElementById("error").style.color = 'red';
          indicatorValue.style.transform = `rotate(0turn)`
          percantageValue.textContent = `--`;
        }
      }
    });

  /********* ------DISPLAY TANK LEVEL ENDS HERE-------*************/


    
    indicatorValue.style.transform = `rotate(${randPercent}turn)`;
    percantageValue.textContent = `${(randPercent*200).toFixed(2)}%`;
    indicatorValue.style.background = color;
    $("#percentageshow").text(Math.round(randPercent*200).toString() + "%");


  }, 10000);




  setInterval(function(){

    /********* ------UPDATE DAILY TANK LEVEL DATA-------*************/

    var USERNAME = $('#username').html();
    var now = new Date(Date.now())
    var currentlevel = $('#currentheightshow').html();
    var totalheightlevel = $('#totalheightshow').html()
    var CurrentDate = now.getFullYear().toString()+"-"+(now.getMonth()+1).toString()+"-"+now.getDate().toString();
    var CurrentTime = getTime();
    var TimeID = now.getHours()+""+now.getMinutes()+""+now.getSeconds()+""+now.getMilliseconds()
    console.log(USERNAME);

    $.ajax
    ({
      type:'post',
      url:'DailyRecordUpdate.php',
      data:{
       TimeID : TimeID,
       CurrentDate : CurrentDate,
       currentlevel : currentlevel,
       totalheightlevel : totalheightlevel,
       CurrentTime : CurrentTime,
       databaseName :  USERNAME
      },
      success:function(response) {
        if(response === "success")
        {
          console.log(response);
          
          document.getElementById("error").innerHTML = "Updated";
          document.getElementById("error").style.color = 'green';
          document.getElementById('lastupdated').innerHTML = (new Date().toTimeString().split(" ")[0]);
          
        }
        else if(response === "Fail")
        {
          
          document.getElementById("error").innerHTML = response;
          document.getElementById("error").style.color = 'red';
        }
        else
        {
            console.log(response);
            document.getElementById("error").innerHTML = "Updated";
            document.getElementById("error").style.color = 'green';
            $("#lastupdated").text(getTime());
        }
      }
    });

    /********* ------UPDATE DAILY TANK LEVEL DATA ENDS HERE-------*************/

  },10000);

  var USERNAME = document.getElementById("username").innerText;
  console.log(USERNAME);

  
    getData();
  
    /*##########--------- DISPLAY DATA IN TABLE ---------############*/

  function getData()
  {
      $.ajax({
        type:'GET',
        url:'WholeTableData.php',
        data:{
          USERNAME : USERNAME
        },
        success:function(response) {
          console.log(response);
          $('.tableIndiactor').html(response);
        }
      });
  }

  /*##########--------- DISPLAY DATA IN TABLE ENDS HERE ---------############*/


  /*##########--------- DISPLAY SEARCHED DATA IN TABLE ---------############*/

  $('#search_text').keyup(function(){
    var txt = $(this).val();
      if(txt  != '')
      {
        $.ajax({
        type:'post',
        url:'SearchData.php',
        data:{
          USERNAME : USERNAME,
          search : txt
            },
              dataType: "text",
              success:function(response) {
              $('.tableIndiactor').html(response);
            }
          });
      }
      else
      {
        $('.tableIndiactor').html('');
        $.ajax({
          type:'post',
          url:'SearchData.php',
          data:{
            USERNAME : USERNAME,
            search : txt
            },
              dataType: "text",
              success:function(response) {
              $('.tableIndiactor').html(response);
            }
          });
        }
    });


  /*##########--------- DISPLAY SEARCHED DATA IN TABLE ENDS ---------############*/

  function getTime()
  {
    var dt = new Date();
    var h =  dt.getHours();
    var m = dt.getMinutes();
    var s = dt.getSeconds();
    m = (m < 10) ? ("0"+m):(m);
    s = (s < 10) ? ("0"+s):(s);
    var _time = (h > 12) ? (h-12 + ':' + m +":"+s+' PM') : (h + ':' + m +":"+s+' AM');
    console.log(_time);
    return _time;
  }
});