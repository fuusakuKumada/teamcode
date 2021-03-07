
<!DOCTYPE html>
<html>
  <head>    
  
  <title></title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="https://www.jungleocean.com/demo/css/common.css"/>
  <link rel="stylesheet" type="text/css" href="https://www.jungleocean.com/demo/jquery-slick/css/slick-theme.css"/>
  <link rel="stylesheet" type="text/css" href="https://www.jungleocean.com/demo/jquery-slick/css/slick.css"/>
  
  
  
  </head>



<body>
<?php
$pdo = new PDO('mysql:host=mysql1.php.xdomain.ne.jp;dbname=kaihatsusd2c_shoping;charset=utf8','kaihatsusd2c_abc','sd2cshopping');


$sql=$pdo->prepare('select * from shohin,shohin_details where shohin_id = 1');
$sql->execute([$_GET['shohin_id']]);

?>
<div class="thum">

<div class="thumbnail">
  <?php foreach ($sql as $row) ?>
      <div><?php echo '<img src="photo/', $row['photo1'], '.jpg">'?></div>
      <div><?php echo '<img src="photo/', $row['photo2'], '.jpg">'?></div>
      <div><?php echo '<img src="photo/', $row['photo3'], '.jpg">'?></div>
      <div><?php echo '<img src="photo/', $row['photo4'], '.jpg">'?></div>
      </div>
  <div class="thumbnail-thumb">
      <?php foreach ($sql as $row) ?>
      <div><?php echo '<img src="photo/', $row['photo1'], '.jpg">'?></div>
      <div><?php echo '<img src="photo/', $row['photo2'], '.jpg">'?></div>
      <div><?php echo '<img src="photo/', $row['photo3'], '.jpg">'?></div>
      <div><?php echo '<img src="photo/', $row['photo4'], '.jpg">'?></div>
      </div>
 </div>
    </div>

    
    

 
<div class="container">
<div class="float-right">



<h1 class="mb-2"><?php echo htmlspecialchars($row['shohin_mei']) ?></h1>



<form action="cart.php"method="get">

        <!-- size -->
            <div class="cp_ipradio" name="size">
              <h3>size</h3>
            <input type="radio" name="cpipr03" id="a_rb1" />
            <label for="a_rb1">S</label>
            <input type="radio" name="cpipr03" id="a_rb2" />
            <label for="a_rb2">M</label>
            <input type="radio" name="cpipr03" id="a_rb3" />
            <label for="a_rb3">L</label>
          </div>
        <!-- color -->
        
          <div class="cp_ipradio1" name="color">
              <h3>color</h3>
            <?php foreach ($sql as $row) ?>
            <input type="radio" name="cpipr04" id="a_rb4" />
            <label for="a_rb4"><?php echo$row['color1']?></label>
            <input type="radio" name="cpipr04" id="a_rb5" />
            <label for="a_rb5"><?php echo$row['color2']?></label>
            <input type="radio" name="cpipr04" id="a_rb6" />
            <label for="a_rb6"><?php echo$row['color3']?></label>
            <input type="radio" name="cpipr04" id="a_rb7" />
            <label for="a_rb7"><?php echo$row['color4']?></label>
         
          </div>
          <!-- suryo -->
          
          
          <select name="suryo"  class="custom-select mb-1  ">
                             
                          <option value="数量" selected="">数量</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                        </select>

           <!-- kingaku -->
                        <div class="col-12 col-lg" style="margin-top:10px;">
                        <h1 style="font-size:30px;"> <?php echo htmlspecialchars($row['kin']) ."円 (税込)"?></h1>
                            <!-- Submit -->
                            <button type="submit" class="btn btn-block btn-dark mb-2">
                              Add to Cart <i class="fe fe-shopping-cart ml-2"></i>
                            </button>

                            </div>
                            <div class="col-12 col-lg-auto">
                            </form>
                            <!-- Wishlist -->
                            <button class="btn btn-outline-dark btn-block mb-2" data-toggle="button">
                              Wishlist <i class="fe fe-heart ml-2"></i>
                            </button>



</div>



<p>
                      <span class="text-gray-500">Is your size/color sold out?</span>
                      <a class="text-reset text-decoration-underline" data-toggle="modal" href="#modalWaitList">Join the Wait List!</a>
                    </p>



<div class="gaiyou">
                  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">説明</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">サイズ表</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Contact</a>
                    </li>
                  </ul>
                  <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab"><?php echo htmlspecialchars($row['manual']) ?></div>
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"><?php echo htmlspecialchars($row['size_hyo']) ?></div>
                    <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab"><?php echo htmlspecialchars($row['sozai']) ?></div>
                  </div>
                  </div>
</div>

</div>
     
    

</div>
                        



                      </div>
                      

          
                    
</div>








</div>

</body>













 






<style>

.form-row{
  max-width: 100%;
position: absolute;
display: inline-block;
top: 80%; right: 10%;
transform: translate(-50%, -50%);
}


.container{
margin-top:10%;



}


.cp_ipradio {
	width: 90%;
	margin: 2em auto;
	text-align: left;
}
.cp_ipradio input[type='radio'] {
	position: absolute;
	z-index: -1;
	opacity: 0;
}
.cp_ipradio label {
	position: relative;
	display: inline-block;
	margin-right: 30px;
	padding-right: 10px;
	padding-left: 35px;
	cursor: pointer;
}
.cp_ipradio label::before {
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
	display: block;
	width: 24px;
	height: 24px;
	content: ' ';
	border: 2px solid #da3c41;
	border-radius: 4px;
}
.cp_ipradio input[type='radio'] + label::before {
	border-radius: 18px;
}
.cp_ipradio input[type='radio']:checked + label {
	padding-left: 10px;
	color: #ffffff;
}
.cp_ipradio input[type='radio']:checked + label::before {
	top: 0;
	width: 100%;
	height: 100%;
	background: #da3c41;
}
/* Transition */
.cp_ipradio label, .cp_ipradio label::before {
	-webkit-transition: 0.25s all ease;
	        transition: 0.25s all ease;
}


.cp_ipradio1 {
	width: 90%;
	margin: 2em auto;
	text-align: left;
}
.cp_ipradio1 input[type='radio'] {
	position: absolute;
	z-index: -1;
	opacity: 0;
}
.cp_ipradio1 label {
	position: relative;
	display: inline-block;
	margin-right: 30px;
	padding-right: 10px;
	padding-left: 35px;
	cursor: pointer;
}
.cp_ipradio1 label::before {
	position: absolute;
	z-index: -1;
	top: 0;
	left: 0;
	display: block;
	width: 24px;
	height: 24px;
	content: ' ';
	border: 2px solid #da3c41;
	border-radius: 4px;
}
.cp_ipradio1 input[type='radio'] + label::before {
	border-radius: 18px;
}
.cp_ipradio1 input[type='radio']:checked + label {
	padding-left: 10px;
	color: #ffffff;
}
.cp_ipradio1 input[type='radio']:checked + label::before {
	top: 0;
	width: 100%;
	height: 100%;
	background: #da3c41;
}
/* Transition */
.cp_ipradio1 label, .cp_ipradio label::before {
	-webkit-transition: 0.25s all ease;
	        transition: 0.25s all ease;
}













body {
  background: #ededed;
  font-family: 'Open Sans', sans-serif;
}
.center {
  position: absolute;
  display: inline-block;
  top: 50%; left: 50%;
  transform: translate(-50%, -50%);
}


/** Custom Select **/
.custom-select-wrapper {
  position: relative;
  display: inline-block;
  user-select: none;
}
  .custom-select-wrapper select {
    display: none;
  }
  .custom-select {
    position: relative;
    display: inline-block;
  }
    .custom-select-trigger {
      position: relative;
      display: block;
      width: 130px;
      padding: 0 84px 0 22px;
      font-size: 22px;
      font-weight: 300;
      color: #fff;
      line-height: 60px;
      background: #5c9cd8;
      border-radius: 4px;
      cursor: pointer;
    }
      .custom-select-trigger:after {
        position: absolute;
        display: block;
        content: '';
        width: 10px; height: 10px;
        top: 50%; right: 25px;
        margin-top: -3px;
        border-bottom: 1px solid #fff;
        border-right: 1px solid #fff;
        transform: rotate(45deg) translateY(-50%);
        transition: all .4s ease-in-out;
        transform-origin: 50% 0;
      }
      .custom-select.opened .custom-select-trigger:after {
        margin-top: 3px;
        transform: rotate(-135deg) translateY(-50%);
      }
  .custom-options {
    position: absolute;
    display: block;
    top: 100%; left: 0; right: 0;
    min-width: 100%;
    margin: 15px 0;
    border: 1px solid #b5b5b5;
    border-radius: 4px;
    box-sizing: border-box;
    box-shadow: 0 2px 1px rgba(0,0,0,.07);
    background: #fff;
    transition: all .4s ease-in-out;
    
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: translateY(-15px);
  }
  .custom-select.opened .custom-options {
    opacity: 1;
    visibility: visible;
    pointer-events: all;
    transform: translateY(0);
  }
    .custom-options:before {
      position: absolute;
      display: block;
      content: '';
      bottom: 100%; right: 25px;
      width: 7px; height: 7px;
      margin-bottom: -4px;
      border-top: 1px solid #b5b5b5;
      border-left: 1px solid #b5b5b5;
      background: #fff;
      transform: rotate(45deg);
      transition: all .4s ease-in-out;
    }
    .option-hover:before {
      background: #f9f9f9;
    }
    .custom-option {
      position: relative;
      display: block;
      padding: 0 22px;
      border-bottom: 1px solid #b5b5b5;
      font-size: 18px;
      font-weight: 600;
      color: #b5b5b5;
      line-height: 47px;
      cursor: pointer;
      transition: all .4s ease-in-out;
    }
    .custom-option:first-of-type {
      border-radius: 4px 4px 0 0;
    }
    .custom-option:last-of-type {
      border-bottom: 0;
      border-radius: 0 0 4px 4px;
    }
    .custom-option:hover,
    .custom-option.selection {
      background: #f9f9f9;
    }



    
.btn-group{
  
  width:400px;
  height:50px;

}
.button{
  
}
.thumbnail {
  max-width: 40%;
  margin: 0 auto 0px;
  padding: 0;
  position: absolute;
  display: inline-block;
  top: 50%; left: 30%;
  transform: translate(-50%, -50%);
 
}
.thumbnail img,
.thumbnail-thumb img{
  width: 100%;
}
.thumbnail-thumb {
  max-width: 40%;
  margin: 0 auto;
  margin-top:10px;
  position: absolute;
  display: inline-block;
  top: 100%; left: 30%;
  transform: translate(-50%, -50%);
}
.thumbnail-thumb li {
  margin: 5px;
}


.thumbnail-thumb .slick-current {
  opacity: 0.5;
}
.thumbnail-thumb div div div {
  cursor: pointer;
}
.gaiyou{
  position: absolute;
  display: inline-block;
  top:120%; left: 30%;
  transform: translate(-50%, -50%);


}
</style>



</section>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="https://www.jungleocean.com/demo/jquery-slick/js/slick.min.js"></script>

<script>
$(document).ready(function () {

  //4.サムネイルがついているスライダー
  $('.thumbnail').slick({
    infinite: true, //スライドのループ有効化
    arrows: false, //矢印非表示
    fade: true, //フェードの有効化
    draggable: false //ドラッグ操作の無効化
  });
  $('.thumbnail-thumb').slick({
    infinite: true, //スライドのループ有効化
    slidesToShow: 4, //表示するスライドの数
    focusOnSelect: true, //フォーカスの有効化
    asNavFor: '.thumbnail', //thumbnailクラスのナビゲーション
  });


});
</script>

</body>

</html>
