const search = () =>{
    const searchbox = document.getElementById("search").value.toUpperCase();
    const storeitem = document.getElementById("catalogue")
    const product = document.querySelectorAll(".produits")
    const pname = storeitem.getElementsByTagName("h2")

    for(var i=0; i < pname.length; i++){
        let match = product[i].getElementsByTagName("h2")[0];

        if(match){
            let textvalue = match.textContent || match.innerHTML

            if(textvalue.toUpperCase().indexOf(searchbox) > -1){
                product[i].style.display = "";
            }
            else{
                product[i].style.display = "none";
            }           
        }
    }
}