
var time = new Date().getHours();
var icon;

    if (time >= 4 && time <= 12){
      document.getElementById("greating").innerHTML = 'Good Morning';
      document.getElementById("icon").innerHTML= '<i class="fa fa-fw fa-coffee"></i>';
      }else if (time > 12 && time <= 18){
        document.getElementById("greating").innerHTML='Good Afternoon';
        document.getElementById("icon").innerHTML= '<i class="fa fa-fw fa-sun-o"></i>';
        }else if (time > 18 && time <= 23){
          document.getElementById("greating").innerHTML='Good Evening';
          document.getElementById("icon").innerHTML= '<i class="fa fa-fw fa-moon-o"></i>';
          } else {
            document.getElementById("greating").innerHTML='Good Night';
            document.getElementById("icon").innerHTML= '<i class="fa fa-fw fa-star-o"></i>';
            }
