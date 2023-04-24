<style>
    @charset "UTF-8";
/*********************************************/
/*COLORS*/
/*********************************************/
body {
  font-family: "Titillium Web", sans-serif;
  font-weight: 400;
  font-size: 14px;
  min-width: 320px;
  position: relative;
}

img {
  max-width: 100%;
  height: auto;
}

ul {
  margin: 0;
  padding: 0;
  list-style-type: none !important;
}

a {
  text-decoration: none;
  color: black;
}
a:hover, a:focus, a:active {
  text-decoration: none;
  color: black;
}

input, input:focus, input:active {
  outline: none;
}

button,
button:active,
button:focus,
button:hover {
  outline: none;
}

button {
  padding: 0;
  margin: 0;
  background-color: transparent;
  color: #000;
  border-radius: 10px;
}

.mainWrapper {
  position: relative;
  width: 100%;
  min-width: 320px;
  background-size: cover;
  min-height: 900px;
  padding: 0;
  margin: 0 !important;
  background: radial-gradient(#303d55, #2f3352);
}

.wrappen_block {
  position: relative;
  width: 100%;
  height: 100%;
}

.mainBackground {
  width: 100%;
  min-height: 939px;
  background: url("https://cdn.wallpapersafari.com/97/50/eRwDMy.jpg") left center no-repeat, url("https://png.pngtree.com/thumb_back/fh260/background/20200714/pngtree-modern-double-color-futuristic-neon-background-image_351866.jpg") center center no-repeat, url("https://github.com/BlackStar1991/CardProduct/blob/master/app/img/layer-3-copy-2.png?raw=true") center center no-repeat, url("https://github.com/BlackStar1991/CardProduct/blob/master/app/img/mainBg.png?raw=true") center center no-repeat;
}

.productCard_block {
  position: relative;
  margin: 190px auto 0;
  max-width: 800px;
  min-height: 500px;
  box-shadow: 0 5px 21px rgba(0, 0, 0, 0.08);
  background-color: #fff;
  border-radius: 20px
}

/* LEFT SIDE */
.productCard_leftSide {
  position: relative;
  width: 100%;
  min-height: 600px;
}

.productCard_brendBlock {
  width: 100%;
  height: 75px;
  position: absolute;
  top: 0;
  left: 0;
  max-width: 184px;
  max-height: 75px;
  background-color: #272727;
  z-index: 2;
}
.productCard_brendBlock__imageBlock {
  display: block;
  height: 100%;
}
.productCard_brendBlock__imageBlock img {
  position: absolute;
  display: block;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}

.sliderBlock {
  position: relative;
  height: 100%;
  margin-left: 70px;
  margin-top: 89px;
  margin-bottom: 46px;
  overflow: hidden;
}

.sliderBlock_items {
  position: relative;
  display: block;
  width: 100%;
  height: 403px;
}
.sliderBlock_items__itemPhoto {
  position: absolute;
  width: 100%;
  height: 100%;
  opacity: 0;
  z-index: 2;
  transition: opacity 1s;
}
.sliderBlock_items__showing {
  opacity: 1;
  z-index: 3;
}
.sliderBlock_items:after {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  background: url("../img/decorElements/DecorRectangle.png") 50% 50% no-repeat;
  opacity: 0.2;
  z-index: 4;
}

.sliderBlock_controls {
  width: 100%;
}
.sliderBlock_controls__navigatin {
  margin-top: 8px;
  width: 100%;
}
.sliderBlock_controls__wrapper {
  margin: 1% auto;
  width: 110px;
  height: 20px;
}
.sliderBlock_controls__arrow {
  position: relative;
  width: 24px;
  height: 24px;
  cursor: pointer;
  border: 1px solid #536dfe;
  transition: 300ms all;
  background-color: #0d2660;
  border-radius: 50%;
}
.sliderBlock_controls__arrow:hover {
  background-color: #536dfe;
}
.sliderBlock_controls__arrow i {
  position: absolute;
  width: 100%;
  height: 100%;
  top: 50%;
  left: 50%;
  margin-left: -50%;
  margin-top: -50%;
  color: #fff;
  transition: 300ms all;
  font-weight: bold;
  text-align: center;
  font-size: 20px;
}
.sliderBlock_controls__arrowBackward {
  float: left;
}
.sliderBlock_controls__arrowForward {
  float: right;
}

.sliderBlock_positionControls {
  display: block;
  width: 100%;
  height: 3px;
  margin: 30px auto 0;
}
.sliderBlock_positionControls__paginatorItem {
  float: left;
  width: 18px;
  height: 10px;
  margin-left: 5px;
  background-color: #D7D7D7;
  cursor: pointer;
}
.sliderBlock_positionControls__paginatorItem:first-child {
  margin-left: 31%;
}
.sliderBlock_positionControls__active {
  background-color: #536dfe;
}

/*   RIGHT SIDE */
.productCard_rightSide {
  position: relative;
  padding-top: 34px;
  padding-left: 27px;
  padding-right: 40px;
  width: 100%;
  min-height: 600px;
}

.block_specification {
  float: right;
  margin-top: 8px;
  cursor: pointer;
  color: #536dfe;
  transition: all 0.5s;
}
.block_specification__button {
  display: inline-block;
  margin-right: 7px;
  height: 100%;
  font-size: 17px;
  text-transform: uppercase;
  transform: rotate(0);
  transition: transform 0.5s;
  transform-origin: center center;
}
.block_specification:hover .block_specification__button__rotate {
  transition: transform 0.5s;
  transform: rotate(1turn);
}
.block_specification:hover {
  color: #f1425d;
}

.block_specification__text {
  width: 30px;
  height: 11px;
  font-family: "Titillium Web", sans-serif;
  font-size: 14px;
  font-weight: 600;
  text-transform: uppercase;
}

.block_model {
  display: inline-block;
  color: #263238;
  font-size: 12px;
  opacity: 0.9;
}

.block_name {
  width: 100%;
  color: #263238;
  font-weight: 400;
  line-height: 35px;
}
.block_name__mainName {
  margin: 0;
  padding: 0;
  font-size: 29px;
}
.block_name__addName {
  margin: 0;
  padding: 0;
  font-size: 24px;
}

.block_product {
  position: relative;
  width: 100%;
}
.block_product__advantagesProduct {
  width: 271px;
  height: 41px;
  margin-top: 14px;
  color: #646b6f;
  font-size: 17px;
  line-height: 24px;
}
.block_product__link {
  line-height: 23px;
  color: #536dfe;
}

.block_informationAboutDevice {
  position: relative;
  width: 100%;
  overflow: hidden;
}

.block_descriptionInformation {
  width: 304px;
  height: 104px;
  margin-top: 10px;
  font-size: 14px;
  font-weight: 400;
  line-height: 23px;
  color: #263238;
}

.block_descriptionCharacteristic {
  position: absolute;
  top: 0;
  left: 100%;
  width: 100%;
  height: 100%;
  z-index: 30;
  transition: left, ease-out, 0.5s;
}
.block_descriptionCharacteristic__active {
  left: 0;
}

@-webkit-keyframes moveCharackeristic {
  0% {
    left: 100%;
  }
  100% {
    left: 0;
  }
}

@keyframes moveCharackeristic {
  0% {
    left: 100%;
  }
  100% {
    left: 0;
  }
}
.block_specificationInformation_table {
  position: relative;
  height: 90%;
  background-color: #fff;
}
.block_specificationInformation_table tr {
  border-collapse: collapse;
  border: 1px solid #000;
}
.block_specificationInformation_table th {
  border: 1px solid #000;
  font-weight: bold;
}
.block_specificationInformation_table td {
  border-collapse: collapse;
  text-align: center;
  border: 1px solid #000;
}

.block_rating {
  width: 100%;
  margin-top: 33px;
}

fieldset, label {
  margin: 0;
  padding: 0;
}

.block_rating__stars {
  border: none;
  float: left;
  width: auto;
  margin: 0;
  padding: 0;
}

input[type=checkbox] + label, input[type=radio] + label {
  margin: 0;
}

.block_rating__stars > input {
  display: none;
}

.block_rating__stars > label:before {
  margin: 5px;
  font-size: 15px;
  font-family: FontAwesome;
  display: inline-block;
  content: "";
}

.block_rating__stars > .half:before {
  content: "";
  position: absolute;
}

.block_rating__stars > label {
  color: #c9c9c9;
  float: right;
}

/***** CSS Magic to Highlight Stars on Hover *****/
.block_rating__stars > input:checked ~ label,
.block_rating__stars:not(:checked) > label:hover,
.block_rating__stars:not(:checked) > label:hover ~ label {
  color: #fccf47;
}

/* hover previous stars in list */
.block_rating__stars > input:checked + label:hover,
.block_rating__stars > input:checked ~ label:hover,
.block_rating__stars > label:hover ~ input:checked ~ label,
.block_rating__stars > input:checked ~ label:hover ~ label {
  color: #FFED85;
}

.block_rating__avarage {
  margin-left: 31px;
  color: #f1425d;
  font-size: 15px;
  line-height: 35px;
}

.block_rating__reviews {
  margin-left: 6px;
  color: #656c6f;
  font-size: 13px;
}

.block_price {
  margin-top: 29px;
  width: 100%;
}
.block_price__currency {
  padding: 0;
  margin: 0;
  vertical-align: top;
  color: #f1425d;
  font-size: 26px;
  font-weight: 600;
}
.block_price__shipping {
  padding: 0;
  margin: 0;
  color: #A2A9AD;
  font-size: 12px;
}

.radio_button {
  position: absolute;
  opacity: 0;
}

.block_goodColor {
  margin-top: 29px;
  width: 100%;
}
.block_goodColor__allColors {
  width: 100%;
  margin-top: 14px;
}
.block_goodColor__radio {
  display: inline-block;
  width: 21px;
  height: 21px;
  border-radius: 50%;
  margin-left: 10% !important;
  background-color: #e8e6e3;
  cursor: pointer;
}

.radio_button:checked + .block_goodColor__radio {
  width: 25px;
  height: 25px;
  box-shadow: 0 0 5px 3px rgba(83, 109, 254, 0.5);
  border: 2px solid #fff;
}

.block_goodColor__black {
  background-color: #3c383a;
}

.block_goodColor__silver {
  background-color: silver;
}

.text_specification {
  padding: 0;
  color: #37474f;
  font-size: 13px;
}

.block_quantity {
  position: relative;
  height: 46px;
  margin-top: 45px;
}
.block_quantity span {
  display: inline-block;
  float: left;
  margin-top: 15px;
  margin-right: 10px;
}
.block_quantity__chooseBlock {
  vertical-align: top;
  height: 100%;
  margin: 0;
  padding: 0;
}
.block_quantity__number {
  display: inline-block;
  float: left;
  width: 52px;
  height: 46px;
  border: 1px solid #ddd;
  font-size: 18px;
}
.block_quantity__number::-moz-placeholder {
  color: #403f40;
  font-size: 18px;
  line-height: 35px;
}
.block_quantity__number:-ms-input-placeholder {
  color: #403f40;
  font-size: 18px;
  line-height: 35px;
}
.block_quantity__number::placeholder {
  color: #403f40;
  font-size: 18px;
  line-height: 35px;
}
.block_quantity__button {
  display: inline-block;
  position: relative;
  float: left;
  width: 20px;
  height: 50%;
  margin: 0;
  padding: 0;
  margin-left: 11px;
  font-size: 0;
  cursor: pointer;
}
.block_quantity__button:hover, .block_quantity__button:focus {
  background-color: transparent;
}
.row{
    border-radius: 25px;
}
.block_quantity__button:hover:before, .block_quantity__button:focus:before {
  color: #536dfe;
}
.block_quantity__up:before {
  content: "";
  width: 11px;
  height: 6px;
  font-family: "FontAwesome";
  color: #37474f;
  font-size: 18px;
}
.block_quantity__down:before {
  content: "";
  width: 11px;
  height: 6px;
  font-family: "FontAwesome";
  color: #37474f;
  font-size: 18px;
}

.button.button_addToCard {
  width: 147px;
  height: 46px;
  margin-top: 43px;
  margin-bottom: 0;
  border-radius: 15px;
  padding: 0;
  color: #fff;
  background-color: #536dfe;
  font-size: 17px;
  transition: all 0.3s;
}
.button.button_addToCard:hover {
  background-color: #0d2660;
}

.aboutMe a {
  display: block;
  width: 30%;
  position: fixed;
  bottom: 0.1%;
  left: 20px;
  color: rgba(255, 255, 255, 0.6);
  font-size: 1.5em;
  font-family: "Roboto", sans-serif;
  text-decoration: none;
}
.fotoraf{
    margin-right:209px;
}
</style>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Preview</title>
   <link href="https://fonts.googleapis.com/css?family=Titillium+Web" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto|Roboto+Slab" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css'><link rel="stylesheet" href="./style.css">

</head>
<body>

<!-- partial:index.partial.html -->
<main class="main">
    <div class="mainWrapper">
        <div class="mainBackground clearfix">
            <div class="rounded">
                <div class="column small-centered">
                    <style>
.sa{
    text-align:center;
}
                    </style>
                    <h1 class="sa">Bu Sadece Ürün Önizlemesidir</h1>

                    <div class="productCard_block">

                        <div class="rounded mt-5 mb-5">

                            <div class="rounded col-md-12 large-6 columns rounded">

                                <div class="productCard_leftSide clearfix">
                                    <div class="">
                                        <ul class="sliderBlock_items">
                                            <li class="">
                                               <img src="{{ $urun->photo }}" width="300px" alt="" srcset="" class="fotoraf text-center" style="margin-top:60px">
                                            </li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-12 large-6 columns">



                                    <p class="block_model" style="margin-top:20px">
                                        <span class="block_model__text">Ürün Kodu: </span>
                                        <span class="block_model__number">{{$urun->code}}</span>
                                    </p>

                                    <div class="block_product">
                                        <h2 class="block_name block_name__mainName">{{$urun->name}}</h2>
                                        <h2 class="block_name block_name__addName">{{$urun->category}}</h2>

                                        <p class="block_product__advantagesProduct">
                                            Ürün Bedeni : {{$urun->size}}
                                        </p>

                                        <div class="block_informationAboutDevice">


                                            <div class="block_descriptionInformation">
                                                <h6 for="">Ürün Açıklaması :</h6>
                                                <span>
                                                    {{$urun->info}}
                                                </span>
                                            </div>

                                            <div class="block_rating clearfix">


                                            </div>
                                            <div class="row ">
                                                <div class="large-6 small-12 column left-align">
                                                    <div class="block_price">
                                                        <p class="block_price__currency">₺{{$urun->price}}</p>
                                                        <p class="block_price__shipping">Fiyatlara KDV Dahildir</p>
                                                    </div>
                                                </div><div class="large-6 small-12 column end">
                                                    <button class="button button_addToCard">
                                                        Sepete Ekle
                                                    </button>
                                                    <a class="sas button button_addToCard" href="{{route('products')}}" style="margin-top:10px"> <h4>Sayfaya Dön</h4> </a>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>

</main>
<!-- partial -->
  <script  src="./script.js"></script>
</body>
</html>
