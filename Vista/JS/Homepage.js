var MostrarMas = document.getElementById("Product-JS");


MostrarMas.style.display = "none";


function VerMas()
{
    if(MostrarMas.style.display == "none")
    {
        MostrarMas.style.display = "grid";
    }
    else
    {
        MostrarMas.style.display = "none";
    }
}