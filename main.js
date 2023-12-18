

function searchFor(){
    var input = document.getElementById("input").value;
    var input2 = document.getElementById("input2").value;
    var sortBy = document.getElementById("sortBy").value;
    var countries = document.getElementById("countries").value;
    if(countries=="one"){
        window.location.href = "./search.php?input=" + input +"&input2=none&sortBy=" + sortBy + "&countries="+countries;
        
    }else if(countries=="two"){
        window.location.href = "./search.php?input=" + input +"&input2="+input2+"&sortBy=" + sortBy + "&countries="+countries;
        
    }
   
};

function change(){
    
    var selectElement = document.getElementById("countries");
    var Value = selectElement.value;
    
    if(Value=="one"){
        document.getElementById('input2').style.display="none";
        console.log(Value);
    }else if(Value=="two"){
        document.getElementById('input2').style.display="";
        console.log(Value);
    }
   
};