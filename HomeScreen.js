window.onload =function()
{
    var invalid= document.getElementById("invalid");
    var pages= document.getElementById("pages");
    
    inbox();
    
    
    if (invalid==="")
    {
        Home();
    }
    
    function Home()
    {
       var myRequest = new XMLHttpRequest();
       myRequest.open("GET","https://info2180_project_4-c9-jeremydane.c9.io/HomeScreen.html",true);
       invalid.innerHTML=myRequest.send();
       var mytext = myRequest.responseText;
       //console.log(mytext);
       //alert(mytext);
       pages.innerHTML=mytext;
    }
    
    function inbox()
    {
        var compose= document.getElementById("compose");
        var otherUsers= document.getElementById("otherUsers");
        
        compose.onclick=newMessage;
        otherUsers.onclick=others;
    }
    
    
    
    function newMessage()
    {
        alert("New message");
    }
    function others()
    {
        var myRequest = new XMLHttpRequest();
       //myRequest.open("GET","chepomail.php?index=" + indexvalue,false);
       myRequest.open("GET","https://info2180_project_4-c9-jeremydane.c9.io/HomeScreen.php",true);
       myRequest.send();
       var mytext = myRequest.responseText;
       //console.log(mytext);
       alert("access response2:"+mytext);
    }
};
