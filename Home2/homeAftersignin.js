function updateLanguageCurrency() {
    var language = document.getElementById("language").value;
    var currency = document.getElementById("currency").value;
    document.getElementById("selected-language").textContent = language + " - " + currency;
}
window.onload = function() {
    updateLanguageCurrency();
}

document.addEventListener('DOMContentLoaded', function() {
    const image = [
        "//s.alicdn.com/@img/imgextra/i4/O1CN01vjAyVx23FYrqBaXJd_!!6000000007226-2-tps-2880-640.png",
        "//s.alicdn.com/@img/imgextra/i2/O1CN01RsQW3U1Cv57GuK09e_!!6000000000142-2-tps-2880-640.png",
        "//s.alicdn.com/@img/imgextra/i4/O1CN01IEkGs71azFYk7QAzl_!!6000000003400-2-tps-1440-320.png",
        "//s.alicdn.com/@img/imgextra/i2/O1CN01XKphHF21ympNqPlZt_!!6000000007054-2-tps-2880-640.png",
        "//s.alicdn.com/@img/imgextra/i1/O1CN01GNXOAp25fKRZKqAxH_!!6000000007553-2-tps-1440-320.png",
        "//s.alicdn.com/@img/imgextra/i1/O1CN01Q1MuAO1Sfzxg78y79_!!6000000002275-2-tps-2880-640.png",
        "//s.alicdn.com/@img/imgextra/i2/O1CN01mseAP81gfS3Uk5x4j_!!6000000004169-2-tps-1440-320.png"
    ];
    let currentIndex = 0;
    const slider = document.getElementById('slider');
    setInterval(function() {
        currentIndex = (currentIndex + 1) % image.length;
        slider.style.opacity = 0; // اخفاء الصورة قبل تغييرها

        setTimeout(function() {
            slider.src = image[currentIndex];
            slider.style.opacity = 1; // اظهار الصورة الجديدة بعد تغييرها
        }, 0); // التحكم بالمدة الزمنية بين الإخفاء والتغيير
    }, 3000); // تغيير الصورة كل 4 ثواني
});


