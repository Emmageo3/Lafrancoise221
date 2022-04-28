bouton = document.getElementById('hamburger');
item = document.getElementById('item');

bouton.addEventListener("click", function() {
    item.style.display = 'block';
    item.style.backgroundColor = "white";
    item.style.marginLeft = "5rem";
    item.style.borderRadius = "1rem";
})