const search = () => {
    const searchbox = document.getElementById("search-item").value.toUpperCase();
    const storeitems = document.getElementById("item-box");
    const product = document.querySelectorAll(".item");
    const pname = document.getElementsByTagName("h6");
   
    for(var i=0; i < pname.length ; i++){
       let match = product[i].getElementsByTagName("h6")[0];
   
       if(match){
           let textvalue = match.textcontent || match.innerHTML
   
           if(textvalue.toUpperCase().indexOf(searchbox) > -1){
               product[i].style.display = "";
           }else{
               product[i].style.display = "none";
           }
       }
    }
   }