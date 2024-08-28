function updateSelectedLanguageCurrency() {
    var language = document.getElementById("language").value;
    var currency = document.getElementById("currency").value;
    document.getElementById("selected-language").textContent = language + " - " + currency;
}
window.onload = function() {
    updateSelectedLanguageCurrency();
}
function updateLanguageCurrency() {
    updateSelectedLanguageCurrency();
}
document.getElementById("vd").addEventListener("click",function(){
    document.getElementById("vd2").classList.toggle("active");
})


//carsoul

// For scrol-1
const track1 = document.querySelector('.scrol-1'); 
const slides1 = Array.from(track1.children); 
const slideWidth1 = slides1[0].getBoundingClientRect().width;

// For scrol-2
const track2 = document.querySelector('.scrol-2');
const slides2 = Array.from(track2.children);
const slideWidth2 = slides2[0].getBoundingClientRect().width;

// Buttons
const nextButton = document.querySelector('.next');
const prevButton = document.querySelector('.prev');

let currentIndex = 0;

nextButton.addEventListener('click', () => {
    if (currentIndex < slides1.length - 1 && currentIndex < slides2.length - 1) {
        currentIndex++;
        track1.style.transform = `translateX(-${currentIndex * (slideWidth1 + 20)}px)`;
        track2.style.transform = `translateX(-${currentIndex * (slideWidth2 + 20)}px)`;
    }
});

prevButton.addEventListener('click', () => {
    if (currentIndex > 0) {
        currentIndex--;
        track1.style.transform = `translateX(-${currentIndex * (slideWidth1 + 20)}px)`;
        track2.style.transform = `translateX(-${currentIndex * (slideWidth2 + 20)}px)`;
    }
});

//section 4
document.addEventListener('DOMContentLoaded', () => {
    const container = document.querySelector('.bottom1-cardes');
    const items = document.querySelectorAll('.bottom-cardes');
    const prevButton1 = document.querySelector('.prev1');
    const nextButton1 = document.querySelector('.next1');
    let index = 0;

    function updateCarousel() {
        const offset = -index * 100;
        container.style.transform = `translateX(${offset}%)`;
    }

    nextButton1.addEventListener('click', () => {
        index = (index + 1) % items.length;
        updateCarousel();
    });

    prevButton1.addEventListener('click', () => {
        index = (index - 1 + items.length) % items.length;
        updateCarousel();
    });

    updateCarousel();  // Initial call to set the first slide
});


document.getElementById("btn-verified").addEventListener('click',function(){
    document.getElementById("sec-6-Verified-video").classList.toggle("active");
})
document.getElementById("btn-protected").addEventListener('click',function(){
    document.getElementById("sec-6-Verified-video-2").classList.toggle("active");
})

//li-1
document.getElementById('li-1').addEventListener('mouseover',function(){

    document.getElementById('img-1-li-1').style.transition = 'all 0.5s ease';
    document.getElementById('div2').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-1').style.transition = 'all 0.5s ease';
    document.getElementById('li-1').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-1-li-1').src='../Home/image/search-orange-removebg-preview.png';
    document.getElementById('div2').style.display='block'
    document.getElementById('h2-li-1').style.color='#51200B'
    document.getElementById('h2-li-1').style.fontSize='36px'
    document.getElementById('li-1').style.height='95px'
})
document.getElementById('li-1').addEventListener('mouseout',function(){

    document.getElementById('img-1-li-1').style.transition = 'all 0.5s ease';
    document.getElementById('div2').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-1').style.transition = 'all 0.5s ease';
    document.getElementById('li-1').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-1-li-1').src='../Home/image/search-black-removebg-preview.png';
    document.getElementById('div2').style.display='none'
    document.getElementById('h2-li-1').style.color='#000'
    document.getElementById('h2-li-1').style.fontSize='28px'
    document.getElementById('li-1').style.height='60px'
})

//li-2
document.getElementById('li-2').addEventListener('mouseover',function(){

    document.getElementById('img-2-li-2').style.transition = 'all 0.5s ease';
    document.getElementById('div4').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-2').style.transition = 'all 0.5s ease';
    document.getElementById('li-2').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-2-li-2').src='../Home/image/identifie-the-right-colore-orange-removebg-preview.png';
    document.getElementById('div4').style.display='block'
    document.getElementById('h2-li-2').style.color='#51200B'
    document.getElementById('h2-li-2').style.fontSize='36px'
    document.getElementById('li-2').style.height='95px'
    document.getElementById('right-ul-img').src='../Home/image/image-5asa-bl-identify.jpg'
})
document.getElementById('li-2').addEventListener('mouseout',function(){

    document.getElementById('img-2-li-2').style.transition = 'all 0.5s ease';
    document.getElementById('div4').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-2').style.transition = 'all 0.5s ease';
    document.getElementById('li-2').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-2-li-2').src='../Home/image/identify-the-right-removebg-preview.png';
    document.getElementById('div4').style.display='none'
    document.getElementById('h2-li-2').style.color='#000'
    document.getElementById('h2-li-2').style.fontSize='28px'
    document.getElementById('li-2').style.height='60px'
    document.getElementById('right-ul-img').src='../Home/image/image-5asa-bl-search-li btzhar.jpg'
})

//li-3
document.getElementById('li-3').addEventListener('mouseover',function(){

    document.getElementById('img-3-li-3').style.transition = 'all 0.5s ease';
    document.getElementById('div6').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-3').style.transition = 'all 0.5s ease';
    document.getElementById('li-3').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-3-li-3').src='../Home/image/pay-orange-removebg-preview.png';
    document.getElementById('div6').style.display='block'
    document.getElementById('h2-li-3').style.color='#51200B'
    document.getElementById('h2-li-3').style.fontSize='36px'
    document.getElementById('li-3').style.height='95px'
    document.getElementById('right-ul-img').src='../Home/image/images-5asa-bl-payement.jpg'
})
document.getElementById('li-3').addEventListener('mouseout',function(){

    document.getElementById('img-3-li-3').style.transition = 'all 0.5s ease';
    document.getElementById('div6').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-3').style.transition = 'all 0.5s ease';
    document.getElementById('li-3').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-3-li-3').src='../Home/image/paye-black-removebg-preview.png';
    document.getElementById('div6').style.display='none'
    document.getElementById('h2-li-3').style.color='#000'
    document.getElementById('h2-li-3').style.fontSize='28px'
    document.getElementById('li-3').style.height='60px'
    document.getElementById('right-ul-img').src='../Home/image/image-5asa-bl-search-li btzhar.jpg'
})

//li-4
document.getElementById('li-4').addEventListener('mouseover',function(){

    document.getElementById('img-4-li-4').style.transition = 'all 0.5s ease';
    document.getElementById('div8').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-4').style.transition = 'all 0.5s ease';
    document.getElementById('li-4').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-4-li-4').src='../Home/image/fulfill-orange-removebg-preview.png';
    document.getElementById('div8').style.display='block'
    document.getElementById('h2-li-4').style.color='#51200B'
    document.getElementById('h2-li-4').style.fontSize='36px'
    document.getElementById('li-4').style.height='95px'
    document.getElementById('right-ul-img').src='../Home/image/images-5asa-bl-fulfill.jpg'
})
document.getElementById('li-4').addEventListener('mouseout',function(){

    document.getElementById('img-4-li-4').style.transition = 'all 0.5s ease';
    document.getElementById('div8').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-4').style.transition = 'all 0.5s ease';
    document.getElementById('li-4').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-4-li-4').src='../Home/image/fulfill-black-removebg-preview.png';
    document.getElementById('div8').style.display='none'
    document.getElementById('h2-li-4').style.color='#000'
    document.getElementById('h2-li-4').style.fontSize='28px'
    document.getElementById('li-4').style.height='60px'
    document.getElementById('right-ul-img').src='../Home/image/image-5asa-bl-search-li btzhar.jpg'
})

//li-5
document.getElementById('li-5').addEventListener('mouseover',function(){

    document.getElementById('img-5-li-5').style.transition = 'all 0.5s ease';
    document.getElementById('div10').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-5').style.transition = 'all 0.5s ease';
    document.getElementById('li-5').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-5-li-5').src='../Home/image/manage-with-ease-orange-removebg-preview.png';
    document.getElementById('div10').style.display='block'
    document.getElementById('h2-li-5').style.color='#51200B'
    document.getElementById('h2-li-5').style.fontSize='36px'
    document.getElementById('li-5').style.height='95px'
    document.getElementById('right-ul-img').src='../Home/image/images-5asa-bl-manage.jpg'
})
document.getElementById('li-5').addEventListener('mouseout',function(){

    document.getElementById('img-5-li-5').style.transition = 'all 0.5s ease';
    document.getElementById('div10').style.transition = 'all 0.5s ease';
    document.getElementById('h2-li-5').style.transition = 'all 0.5s ease';
    document.getElementById('li-5').style.transition = 'all 0.5s ease';
    document.getElementById('right-ul-img').style.transition = 'all 0.5s ease';

    document.getElementById('img-5-li-5').src='../Home/image/manage-with-ease-black-removebg-preview.png';
    document.getElementById('div10').style.display='none'
    document.getElementById('h2-li-5').style.color='#000'
    document.getElementById('h2-li-5').style.fontSize='28px'
    document.getElementById('li-5').style.height='60px'
    document.getElementById('right-ul-img').src='../Home/image/image-5asa-bl-search-li btzhar.jpg'
})



const carouselItems3 = document.querySelectorAll('.carousel-item3');
const prevBtn3 = document.querySelector('.prev-btn3');
const nextBtn3 = document.querySelector('.next-btn3');
let currentIndex3 = 0;

function showItem(index) {
    carouselItems3.forEach((item, i) => {
        if (i === index) {
            item.classList.add('active');
        } else {
            item.classList.remove('active');
        }
    });
}

prevBtn3.addEventListener('click', () => {
    currentIndex3 = (currentIndex3 > 0) ? currentIndex3 - 1 : carouselItems3.length - 1;
    showItem(currentIndex3);
});

nextBtn3.addEventListener('click', () => {
    currentIndex3 = (currentIndex3 < carouselItems3.length - 1) ? currentIndex3 + 1 : 0;
    showItem(currentIndex3);
});

// إظهار العنصر الأول عند تحميل الصفحة
showItem(currentIndex3);