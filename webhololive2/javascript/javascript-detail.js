function changeImage(event) {
   
    const thumbnails = document.querySelectorAll('.product-thumbnails img');
    thumbnails.forEach(function (thumbnail) {
        thumbnail.classList.remove('active');
    });

   
    const clickedThumbnail = event.target;
    clickedThumbnail.classList.add('active');

    
    const mainImage = document.getElementById('mainImage');
    mainImage.src = clickedThumbnail.src;
}