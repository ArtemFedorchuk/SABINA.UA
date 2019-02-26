<!DOCTYPE html>
<html lang="en">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <link rel="stylesheet" href="navbarcss">
    
	<title>Document</title>
</head>
<body>
	<section id="navbar" class="Navbar">
     <div class="container-fluid">
       <div class="row">
         <div class="col "><a href="#">[<i class="fas fa-video" style="color: red; padding: 0px 5px;"></i>]*FILMS</a></div>
         <div class="col navs-menu">
           <ul class=" justify-content-around menu-films">
             <li class="menu-hover">
              <a href="#">Фильмы</a>
                <ul class="menu-films_1">
                  <li><a href="#">боевики</a></li>
                  <li><a href="#">Ужасы</a></li>
                  <li><a href="#">мистика</a></li>
                  <li><a href="#">триллеры</a></li>
                  <li><a href="#">комедии</a></li>
                </ul>
            </li>
             <li class="menu-hover">
              <a href="#">Новинки</a>
               <ul class="menu-films_1">
                  <li><a href="#">1</a></li>
                  <li><a href="#">2</a></li>
                  <li><a href="#">3</a></li>
                  <li><a href="#">4</a></li>
                  <li><a href="#">5</a></li>
                </ul>
            </li>
             <li class="menu-hover">
              <a href="#">Сериалы</a>
            </li>
             <li class="menu-hover">
              <a href="#">Мультфильмы</a>
            </li>
             <li class="menu-hover">
              <a href="#">Передачи</a>
            </li>
             <li class="menu-hover">
              <a href="#">Топ</a>
            </li>
           </ul>
         </div>
         <div class=" col d-flex search">
           <input type="search" id="search" placeholder="поиск">
           <label for="search">поиск</label>
         </div>
       </div>
     </div>
    </section>



    <style>
    	body{
	background: #141313;
}
i{
	font-size: 14px;
	color: #696969;
}
a{
	text-decoration: none;
}
a:hover{
	text-decoration: none;
}
ul,li{
	text-decoration: none;
	list-style: none;
}

/*navbar*/
	#navbar{
		background-color: rgba(51,51,51, 0.9);
		padding: 10px 0px 0px 0px;
		font-family: Verdana;
	}
#navbar a{
		color: #00BFFF;
		font-size: 16px;
	}
#navbar a:hover{
		color: #cece;
	}
.navs-menu ul{
		display: flex;
	}
	.navs-menu li{
		margin-left: 20px;
		justify-content: space-between;
		/*flex-wrap: wrap;*/
		font-size: 18px;

	}
	#navbar input{
		width: 	120px;
		height: 	30px;
		background: rgba(0, 191, 255, 1);
		border-radius: 5px;
		border: 1px solid #000; 
		padding: 	3px;
		font-size: 16px;
	}
	#navbar label{
		color: rgba(0, 191, 255, 1)		;
		margin-left: 	10px;
	}
	/*выпадающее меню навбара!*/
	.menu-films{
	position: relative;
	}
	.menu-films_1{
	display: flex;
	flex-direction: column;
	background: #674545;
	padding: 20px;
	margin: 7px;
	position: absolute;
	z-index: 2;
	left: 50px;
	top: 30px;
	opacity: 0;
	transition: all 0.25s ease;
}
.menu-films .menu-films_1 a{
		margin: 5px;
		color: white;
	}
.menu-hover:hover .menu-films_1{
	opacity: 1;
}
/*выпадающее меню навбара!*/
/*navbar end*/

/*Медиа запросы для адаптивности*/
@media screen and (max-width: 992px){

}
@media screen and (max-width: 768px){

}

@media screen and (max-width: 576px){
	.Navbar{
		display: flex;
		justify-content: center;
	}
	.menu-films{
	display: flex;
	flex-direction: column;
	align-items: flex-start;
 }
 .search{
 	margin: 0 auto;
 }
}
/*Медиа запросы конец*/
    </style>
	<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>
</html>