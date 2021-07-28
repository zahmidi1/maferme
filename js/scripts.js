
// This file is intentionally blank
// Use this file to add JavaScript to your project


// var prevScrollpos = window.pageYOffset;
// window.onscroll = function() {
// var currentScrollPos = window.pageYOffset;
//   if (prevScrollpos > currentScrollPos) {
//     document.getElementById("navbar").style.top = "0";
//   } else {
//     document.getElementById("navbar").style.top = "-80px";
//   }
//   prevScrollpos = currentScrollPos;navA_active
// }
window.addEventListener('scroll', function () {
            let header = document.getElementById("navbar");
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('scrolling-active', windowPosition);


        })

window.addEventListener('scroll', function () {
            let header = document.getElementById("linkA");
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('navA_active', windowPosition);


        })
        window.addEventListener('scroll', function () {
            let header = document.getElementById("linkB");
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('navA_active', windowPosition);


        })
        window.addEventListener('scroll', function () {
            let header = document.getElementById("linkC");
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('navA_active', windowPosition);


        })
        window.addEventListener('scroll', function () {
            let header = document.getElementById("linkD");
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('navA_active', windowPosition);


        })
        window.addEventListener('scroll', function () {
            let header = document.getElementById("linkE");
            let windowPosition = window.scrollY > 0;
            header.classList.toggle('navA_active', windowPosition);


        })

