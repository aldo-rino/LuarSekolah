document.addEventListener('DOMContentLoaded', function () {
    const form = document.querySelector('form');
    const name = document.getElementById('nama');
    const gmail = document.getElementById('gmail');
    const phone = document.getElementById('phone');
    const university = document.getElementById('university');

    form.addEventListener('submit', function (e) {
        if (!validateForm()) {
            e.preventDefault();
        } else {
            alert('Form has been submitted');
        }
    });

    function validateForm() {
        if (university) {
            return registerForm();
        } else {
            return loginForm();
        }
    }

    function loginForm() {
        if (name.value === "") {
            alert("Please input your name");
            return false;
        }
        if (gmail.value === "") {
            alert("Please input your gmail");
            return false;
        }
        if (phone.value === "") {
            alert("Please input your phone number");
            return false;
        }
        return true;
    }

    function registerForm() {
        if (name.value === "") {
            alert("Please input your name");
            return false;
        }
        if (gmail.value === "") {
            alert("Please input your gmail");
            return false;
        }
        if (university.value === "") {
            alert("Please input your university");
            return false;
        }
        return true;
    }
});


document.addEventListener('DOMContentLoaded', function () {
    const images = document.querySelectorAll('.imageCarousel img');
    const prevBtn = document.getElementById('prevBtn');
    const nextBtn = document.getElementById('nextBtn');
    let index = 0;
    images[index].classList.add('active');

    nextBtn.addEventListener('click', () => {
        if (index < images.length - 1) {
            images[index].classList.remove('active');
            index++;
            images[index].classList.add('active');
        }
    });

    prevBtn.addEventListener('click', () => {
        if (index > 0) {
            images[index].classList.remove('active');
            index--;
            images[index].classList.add('active');
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const dropdown = document.getElementById('dropdown');
    
    dropdown.addEventListener('change', filterArticles);

    function filterArticles() {
        const selectedValue = dropdown.value;
        const articles = document.querySelectorAll('#articles > div');

        articles.forEach(article => {
            if (selectedValue === 'all') {
                article.style.display = 'block';
            } else if (article.classList.contains(selectedValue)) {
                article.style.display = 'block';
            } else {
                article.style.display = 'none';
            }
        });
        
        filterArticles();
    }
});
