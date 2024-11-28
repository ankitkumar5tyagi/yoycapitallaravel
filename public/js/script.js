function openNav() {
    document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

function servicerotation() {
    let services = document.getElementsByClassName('service');
    const rotationInterval = 5000;

    for (let i = 0; i < services.length; i++) {
        services[i].setAttribute('data-rotation', '0');
        services[i].setAttribute('data-last-rotated', '0');

        services[i].addEventListener('mouseover', function() {
            let currentTime = new Date().getTime();
            let lastRotated = parseInt(this.getAttribute('data-last-rotated'));

            if (currentTime - lastRotated > rotationInterval) {
                let rotation = parseInt(this.getAttribute('data-rotation')) + 360;
                this.style.transform = `rotateZ(${rotation}deg)`;
                this.setAttribute('data-rotation', rotation);
                this.setAttribute('data-last-rotated', currentTime);
            }
        });
    }
}

function showreview() {
    const reviewsContainer = document.querySelector('.reviewscontainer');
    const reviews = document.querySelectorAll('.review');
    let currentReviewIndex = 0;

    console.log("Total reviews:", reviews.length); 

    function showReview(index) {
        reviews.forEach((review, i) => {
            review.style.display = (i === index) ? 'flex' : 'none';
        });
    }

    function cycleReviews() {
        currentReviewIndex = (currentReviewIndex + 1) % reviews.length;
        showReview(currentReviewIndex);
        console.log("Current review index:", currentReviewIndex); 
    }

    showReview(0);
    setInterval(cycleReviews, 4000);
}

document.addEventListener("DOMContentLoaded", function() {
    servicerotation();
    showreview();
});












function openModal(event, modalId) {
    event.preventDefault();  
    
    var modal = document.getElementById(modalId);
    modal.style.display = "block";  
}

function closeModal(modalId) {
    var modal = document.getElementById(modalId);
    modal.style.display = "none";
}



