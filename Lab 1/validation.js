function required(){

  var password = document.getElementById('password').value;
  var regex = /^(?=.*\d)(?=.*[ !"#$%&'()*+,-./:;<=>?@[\]^_`{|}~])(?=.*[a-zA-Z]).{8,}$/;

  if (document.getElementById('name').value == ""){
    document.getElementById('vname').innerHTML="Please enter your full name.";
    return false;
  } else{
    document.getElementById('vname').innerHTML="";
  }

  if (document.getElementById('username').value == ""){
    document.getElementById('vusername').innerHTML="Please enter your username.";
    return false;
  } else{
    document.getElementById('vusername').innerHTML="";
  }

  if (document.getElementById('email').value == ""){
    document.getElementById('vemail').innerHTML="Please enter your email.";
    return false;
  } else{
    document.getElementById('vemail').innerHTML="";
  }

  if (password == ""){
    document.getElementById('vpass').innerHTML="Please enter your password"
    return false;
  } else if(!regex.test(password)){
    document.getElementById('vpass').innerHTML="Password must contain atleast 8 characters, 1 uppercase letter, 1 lowercase letter, 1 digit and 1 special character."
    return false;
  } else{
    document.getElementById('vpass').innerHTML="";
  }

  if (document.getElementById('birthdate').value == ""){
    document.getElementById('vdate').innerHTML="Please enter your date."
    return false;
  } else{
    document.getElementById('vdate').innerHTML="";
  }

}

