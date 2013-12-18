window.onload =function()
{
  var login= document.getElementById("login");
  var pass= document.getElementById("password");
  var user= document.getElementById("username");
  var invalid= document.getElementById("invalid");
  var pages= document.getElementById("pages");
  login.onclick=validate;
  
  
  function validate()
  {
      validateUsername();
      validatePassword();
  }
  function validateUsername()
  {
      var username=user.value;
      if (username==="")
      {
          invalid.innerHTML="Enter a username";
      }
      else
      {
          return true;
      }
      
  }
  function validatePassword()
  {
      
      var password=pass.value;
      var valid=false;
      var containsDigit = /[0-9]/.test(password);
      var containsUpper = /[A-Z]/.test(password);
      var containsLower = /[a-z]/.test(password);
      if (password.length==8)
      {
          valid= true;
          if (containsDigit)
          {
              valid= true;
               if (containsUpper)
              {
                  valid= true;
                  if (containsLower)
                  {
                      valid= true;
                      if (validateUsername())
                      {
                        invalid.innerHTML="";
                        alert("Username:"+user.value+" "+"Password:"+pass.value);
                        access();
                        Home();
                      }
                  }
                  else
                  {
                      invalid.innerHTML="Must contain a common letter,";
                  }
              }
              else
              {
                  invalid.innerHTML="Must contain a capital letter,";
              }
          }
          else
          {
              invalid.innerHTML="Must contain a number,";
          }
      }
      else
      {
          invalid.innerHTML="8 characters required,";
      }
      
  }
  
// checks database to validate login
  function access()
  {

       var myRequest = new XMLHttpRequest();
       //myRequest.open("GET","chepomail.php?index=" + indexvalue,false);
       myRequest.open("GET","https://info2180_project_4-c9-jeremydane.c9.io/chepomail.php?username=" + user.value,true);
       myRequest.send();
       var mytext = myRequest.responseText;
       //console.log(mytext);
       alert("access response:"+mytext);

  }
  
  function Home()
  {
       var Request = new XMLHttpRequest();
       Request.open("GET","https://info2180_project_4-c9-jeremydane.c9.io/HomeScreen.php",true);
       //myRequest.open("GET","https://c9.io/jeremydane/info2180_project_4/workspace/HomeSceen.html",true);
       invalid.innerHTML=Request.send();
       var text = Request.responseText;
       pages.innerHTML=text;
       //console.log(mytext);
       //alert(text);
    }
  
};  
