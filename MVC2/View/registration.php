<style>
    body,
.signin {
  background-color: black;
  font-family: 'Montserrat', sans-serif;
  color: #fff;
  font-size: 14px;
  letter-spacing: 1px;
}

.login {
  position: relative;
  height: 560px;
  width: 405px;
  margin: auto;
  padding: 60px 60px;
  /* background: url(https://picsum.photos/id/1004/5616/3744) no-repeat   center center #505050;    */
  background-size: cover;
  box-shadow: 0px 30px 60px -5px #000;
}

form {
  padding-top: 80px;
}

.active {
  border-bottom: 2px solid #1161ed;
}

.nonactive {
  color: rgba(255, 255, 255, 0.2);
}

h2 {
  padding-left: 12px;
  align-items: center;
  align-content: center;
  font-size: 22px;
  text-transform: uppercase;
  padding-bottom: 5px;
  letter-spacing: 2px;
  display: inline-block;
  font-weight: 100;
}

h2:first-child {
  padding-left: 0px;
}

span {
  text-transform: uppercase;
  font-size: 12px;
  opacity: 0.4; 
  display: inline-block;
  position: relative;
  top: -65px;
  transition: all 0.5s ease-in-out;
}

.text {
  border: none;
  width: 89%;
  padding: 10px 20px;
  display: block;
  height: 15px;
  border-radius: 20px;
  background: rgba(255, 255, 255, 0.1);
  border: 2px solid rgba(255, 255, 255, 0);
  overflow: hidden;
  margin-top: 15px;
  transition: all 0.5s ease-in-out;
}

.text:focus {
  outline: 0;
  border: 2px solid rgba(255, 255, 255, 0.5);
  border-radius: 20px;
  background: rgba(0, 0, 0, 0);
}

.text:focus + span {
  opacity: 0.6;
}

input[type="text"],
input[type="password"] {
  font-family: 'Montserrat', sans-serif;
  color: whites;
}



input {
  display: inline-block;
  padding-top: 20px;
  font-size: 14px;
  color: white;
}











label {
  display: inline-block;
  padding-top: 10px;
  padding-left: 5px;
}

.Signup {
  background-color: #1161ed;
  color: #FFF;
  width: 100%;
  padding: 10px 20px;
  display: block;
  height: 39px;
  border-radius: 20px;
  margin-top: 30px;
  transition: all 0.5s ease-in-out;
  border: none;
  text-transform: uppercase;
}

.Signup:hover {
  background: #4082f5;
  box-shadow: 0px 4px 35px -5px #4082f5;
  cursor: pointer;
}

.Signup:focus {
  outline: none;
}

hr {
  border: 1px solid rgba(255, 255, 255, 0.1);
  top: 85px;
  position: relative;
}

    </style>
<!-- <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'> -->

<div class="login"  >
  <h2 class="active"  > Signup </h2>
  <form>   
    

    <input type="text" class="text" name="username" placeholder="user Name">
   

    <br>
    <input type="email" class="text" name="email" placeholder="Enter Your Email">



    
    <br>

    <input type="password" class="text" name="password" placeholder="Enter your password">

    <br>
    <input type="text" class="text" name="mobile" placeholder="Enter your mobile" > 



    <!-- <input type="checkbox" id="checkbox-1-1" class="custom-checkbox" />
    <label for="checkbox-1-1">Keep me Signed in</label>
     -->
    <button class="Signup">
      Sign Up 
    </button>
  


  
  </form>

</div>