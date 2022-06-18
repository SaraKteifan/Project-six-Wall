function cost(){
    let height=document.getElementById('height').value;
    let width=document.getElementById('width').value;
    let price=document.getElementById('price').value;
    let finalCost=document.getElementById('finalCost').value=height*width*price;
    
    return finalCost;
}