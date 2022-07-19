<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Space+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> </script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"> </script>  
    <script>  
        $(document).ready (function () {  
            $("#pay1").validate ({
              rules:{
                cardname:{
                  required: true,
		                number: false,
                    text: true,
                },
                cardnumber:{
                  required: true,
		                number: true,
                },
                cardexp:{
                  required: true,
		                number: false,
                },
                cardcvv:{
                  required: true,
		                number: true,
                }
              }
            });
        });  
    </script>  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<style>
    body{
  display: block;
  position: center;
    font-family: 'Space Mono', monospace;
    background-color: rgb(240, 244, 247);
  background: linear-gradient(-70deg,  #202020, #000000);
  height: 100vh;
  
}







/* Background circles start */
.circle {
  position: absolute;
  border-radius: 50%;
  background: linear-gradient(120deg, #1D976C, #2c3e50);
}
.circles {
  position: absolute;
  height: 270px;
  width: 450px;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  z-index: -1;
}
.circle-1 {
  height: 300px;
  width: 300px;
  top: 100px;
  left: -50px;
  opacity: 0.8;
  animation-timing-function: cubic-bezier(0.54, 0.085, 0.5, 0.92);
  animation-iteration-count: infinite;
  animation-name: float;
  -webkit-animation-name: float;
  animation-duration: 6s;
  -webkit-animation-duration: 6s;
  -webkit-animation-delay: 3.5s;
  animation-delay: 3.5s;
  animation-direction: alternate;
  
}

.circle-2 {
  height: 240px;
  width: 240px;
  bottom: 40px;
  right: -100px;
  opacity: 0.8;
  animation-timing-function: cubic-bezier(0.54, 0.085, 0.5, 0.92);
  animation-iteration-count: infinite;
  animation-name: float;
  -webkit-animation-name: float;
  animation-duration: 6s;
  -webkit-animation-duration: 6s;
  -webkit-animation-delay: 2s;
  animation-delay: 2s;
  animation-direction: alternate;
}
/* Background circles end */





/* ANIMATIONS */
@keyframes explode {
 0% { opacity: 1; }
 100% { transform: scale(1.2); opacity: 0; }
}
@keyframes float {

  0% {
    -webkit-transform: rotateX(0deg) translateY(0px);
    -moz-transform: rotateX(0deg) translateY(0px);
    -ms-transform: rotateX(0deg) translateY(0px);
    -o-transform: rotateX(0deg) translateY(0px);
    transform: rotateX(0deg) translateY(0px);
    }

  50% {
    -webkit-transform: rotateX(0deg) translateY(1px) translateX(5px);
    -moz-transform: rotateX(0deg) translateY(10px) translateX(5px);
    -ms-transform: rotateX(0deg) translateY(30px) translateX(5px);
    -o-transform: rotateX(0deg) translateY(40px) translateX(5px);
    transform: rotateX(0deg) translateY(10px) translateX(5px);
}
  100% {
    -webkit-transform: rotateX(0deg) translateY(0px) translateX(1px);
    -moz-transform: rotateX(0deg) translateY(0px) translateX(1px);
    -ms-transform: rotateX(0deg) translateY(0px) translateX(1px);
    -o-transform: rotateX(0deg) translateY(0px) translateX(1px);
    transform: rotateX(0deg) translateY(0px) translateX(1px);
  }

}

.mdl{
  height: auto;
  width: 420px;
  position: absolute;
  top: 45%;
  left: 50%;
  transform: translate(-60%,-60%);

}

h1{
  
  font-family: 'Poppins', sans-serif;
  font-size: 20px;
  font-weight: 300;
  padding-left: 30px;
  padding-bottom: 20px;
  color: #ffffff;
  width: 420px;
  line-height: 1.5em;
  text-align: left;
}

.card {
  height: 260px;
  width: 420px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.1);
  backdrop-filter: blur(35px);
  border: 2px solid rgba(255, 255, 255, 0.1);
  box-shadow: 0 0 80px rgba(0, 0, 0, 0.25);
  padding: 30px 30px 30px 30px;
  overflow: hidden;
  
}

.logo{
  padding-bottom: 40px;
  opacity: 0.9;
}



input[id="card-number"]{
  font-size: 30px;
  font-family: 'Space Mono', monospace;
  width: 100%;
  height: 50px;
}

input[id="card-number"]::placeholder{
  color: #b5b5b5;
  font-size: 30px;
  font-family: 'Space Mono', monospace;
}

input::placeholder{
  color: #b5b5b5;
  font-family: 'Space Mono', monospace;
}



.group{
  display: inline-flex;
  margin: 0;
  padding: 0;
  
}

.card-number 			  { 
  position:relative; 
   display: inline-block;
  overflow: hidden;
  margin-bottom:30px; 
  
 
}

.card-number > input[id="card-number"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.card-name > input[id="card-name"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.card-exp > input[id="card-exp"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.card-ccv > input[id="card-ccv"]{
  border: none;
  margin-bottom: 0px;
  outline: none;
}

.underline{
  transition: all 0.3s;
  display: inline-block;
  bottom: 0;
  left: -100%;
  position: absolute;
  width: 100%;
  height: 2px;
  background-color: #ffffff;
}

.card-number > input[id="card-number"]:hover + .underline
{
  left: 0; 
}

.card-number > input[id="card-number"]:focus + .underline
{
  left: 0; 
}




.card-name > input[id="card-name"]:hover + .underline{
  left: 0; 
}
.card-name > input[id="card-name"]:focus + .underline{
  left: 0; 
}

.expiration-date > input[id="card-exp"]:hover + .underline{
  left: 0;
}

.expiration-date > input[id="card-exp"]:focus + .underline{
  left: 0;
}

.ccv > input[id="card-ccv"]:hover + .underline{
  left: 0;
}

.ccv > input[id="card-ccv"]:focus + .underline{
  left: 0;
}

.card-name{ 
  font-family: 'Space Mono', monospace;
  margin-right: 40px;
  width: 150px;
  position:relative; 
   display: inline-block;
  overflow: hidden;
}

.expiration-date{
  font-family: 'Space Mono', monospace;
 padding: 0px 0px 0px 0px; 
  margin-right: 60px;
  width: 80px;
  position:relative; 
   display: inline-block;
  overflow: hidden;
}

.ccv{
  font-family: 'Space Mono', monospace;
 padding: 0px 0px 0px 0px; 
  margin-right: 0px;
  width: 60px;
  position:relative; 
   display: inline-block;
  overflow: hidden;
}

input {
  font-family: 'Space Mono', monospace;
  border: none;
  font-size: 16px;
  height: 26px;
  color: #ffffff;
  background: 0;
  padding 0;
  width 0;
}

input:focus{ 
  border-bottom: 2px solid white;
  outline: none;
  font-family: 'Space Mono', monospace;
  border: none;
  color: white;
  font-size: 16px;
  height: 30px;
  margin-bottom: -2px;
}

input:hover{
  border-bottom: 2px solid white;
  font-family: 'Space Mono', monospace;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 30px;
}





input[id="card-number"]:focus
{
  border: none;
  border-bottom: 2px solid white;
  color: white;
  font-size: 30px;
  height: 50px;
  margin-bottom: -2px;
  width: 400px;
}

input[id="card-number"]:hover
{
  border: none;
  border-bottom: 2px solid white;
  color: white;
  font-size: 30px;
  height: 50px;
  margin-bottom: -2px;
  width: 400px;
}




input[id="card-name"]{
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 160px;
}

input[id="card-name"]:hover{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 160px;
}

input[id="card-name"]:focus{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 160px;
}

input[id="card-exp"]:hover{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 80px;
}

input[id="card-exp"]:focus{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 80px;
}

input[id="card-ccv"]:hover{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 50px;
  
}

input[id="card-ccv"]:focus{
  border-bottom: 2px solid white;
  color: white;
  margin-bottom: -2px;
  font-size: 16px;
  height: 26px;
  width: 50px;
  
}


label {
  color: white; 
  font-size:12px;
  font-weight:normal;
  font-family: 'Space Mono', monospace;
  pointer-events:none;
  display: block;
  padding-bottom: 2px;

}

</style>

<script>
    
/* Card Number Spacing */

$('#cardnumber').on('keypress change blur', function () {
  $(this).val(function (index, value) {
    return value.replace(/[^a-z0-9]+/gi, '').replace(/(.{4})/g, '$1 ');
  });
});

$('#cardnumber').on('copy cut paste', function () {
  setTimeout(function () {
    $('#cardnumber').trigger("change");
  });
});


/* Exp. Date Slash */

$('#cardexp').on('input',function(){
    var curLength = $(this).val().length;
    if(curLength === 2){
       var newInput = $(this).val();
        newInput += '/';
        $(this).val(newInput);
    }


});

 var characterCount
$('#cardexp').on('input',function(e){
    if($(this).val().length == 2 && characterCount < $(this).val().length) {        $(this).val($(this).val()+'/');
    }
    characterCount = $(this).val().length
 });


</script>
<div class="box">
<br><br><br><br><br><br><br><br><br><br>
  <div class="mdl">
  <div class="circles">
    <div class="circle circle-1"></div>
    <div class="circle circle-2"></div>
  </div>  
      <form name="pay1" id="pay1" method="post">
      <div class="card" style="padding-left: 30px;margin-left: 40px;margin-top: 460px;">
        <div class="card-number" style="padding: 0px 0px0px 0px;">
          <label>Card Number</label>
          <div class="form-field">
          <input id="cardnumber" name="cardnumber" placeholder="1234 1234 1234 1234" type="text" required="" minlength="16" maxlength="16"  aria-required="true" class="full-width">
          </div>
          <span class="underline"></span>
        </div>    
        <br>
        <div class="group">
          <div class="card-name">  
            <label>Card Holder</label>
            <div class="form-field">
            <input id="cardname"  name="cardname" placeholder="ISRAEL ISRAELI" type="text" required=""  aria-required="true" class="full-width">
</div>
            <span class="underline"></span>
          </div> 
          <div class="expiration-date">
            <label>Exp. Date</label>
            <div class="form-field">
            <input id="cardexp"  name="cardexp" placeholder="10/25" type="text" maxlength="5" minlength="5" required=""  aria-required="true" class="full-width">
</div>
            <span class="underline"></span>
          </div> 
          <div class="ccv">
            <label>CCV</label>
            <div class="form-field">
            <input id="cardccv"  name="cardcvv" placeholder="123" type="text" maxlength="3" minlength="3" required=""  aria-required="true" class="full-width">
</div>
            <span class="underline"></span>
          </div>  
        </div>
        
    </div>
        <div class="form-field">
          <br><br><br><br><br>
                      <button style="margin: left;margin-left: 50px;"  class="full-width btn--primary" type="submit" value="Submite" name="submite7">Submite</button>
               </div>
      </form>
    </div>
        <?php include('phpCode/verificationCard.php');?>
  </div>

</div>