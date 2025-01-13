document.addEventListener('DOMContentLoaded', function () {
    const reviewsList = document.getElementById('reviews-list');
    const overlay = document.getElementById('overlay');
    const feedbackMessage = document.getElementById('feedback-message');

    function displayReviews() {
        fetch('http://127.0.0.1/wordpress/wordpress/wp-content/themes/old-town/get_reviews.php')
            .then(response => response.json())
            .then(reviews => {
                if (!reviews || reviews.length === 0) {
                    reviewsList.innerHTML = '<p>No reviews available</p>';
                    return;
                }

                let currentIndex = 0;

                function showReview() {
                    reviewsList.classList.add('fade-out');
                    setTimeout(() => {
                        const review = reviews[currentIndex];
                        const averageRating = (review.dishes_rating + review.service_rating) / 2;

                        reviewsList.innerHTML = `
                            <div class="review-item">
                                <p class="review-text">${review.text}</p>
                                <div class="stars">${generateStars(averageRating)}</div>
                            </div>
                        `;

                        currentIndex = (currentIndex + 1) % reviews.length;
                        reviewsList.classList.remove('fade-out');
                    }, 500);
                }

                showReview();

                setInterval(showReview, 5000);
            })
            .catch(error => {
                reviewsList.innerHTML = '<p>Failed to load reviews</p>';
            });
    }

    function submitReview() {
        const name = document.getElementById('name').value;
        const comment = document.getElementById('comment').value;
        const dishesRating = document.querySelector('input[name="dishes"]:checked')?.value;
        const serviceRating = document.querySelector('input[name="service"]:checked')?.value;

        if (!name || !comment || !dishesRating || !serviceRating) {
            alert('Please fill in all fields and give ratings.');
            return;
        }

        const review = {
            name: name,
            dishes_rating: parseInt(dishesRating, 10),
            service_rating: parseInt(serviceRating, 10),
            text: comment,
            date: new Date().toISOString().split('T')[0]
        };

        fetch('http://127.0.0.1/wordpress/wordpress/wp-content/themes/old-town/submit_feedback.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify(review)
        })
            .then(response => response.json())
            .then(data => {
                if (data.status === 'success') {
                    overlay.style.display = 'block';
                    feedbackMessage.style.display = 'block';
                    feedbackMessage.innerHTML = `
                        <span class="close-btn">&times;</span>
                        <div class="message-content">
                            <p>Thank you for your feedback!</p>
                            <div class="emoji">😊</div>
                            <p>You make us better!</p>
                        </div>
                    `;

                    feedbackMessage.querySelector('.close-btn').addEventListener('click', function () {
                        overlay.style.display = 'none';
                        feedbackMessage.style.display = 'none';
                    });

                    document.getElementById('name').value = '';
                    document.getElementById('comment').value = '';
                    document.querySelectorAll('input[name="dishes"]').forEach(input => {
                        input.checked = false;
                    });
                    document.querySelectorAll('input[name="service"]').forEach(input => {
                        input.checked = false;
                    });

                    displayReviews();
                } else {
                    alert(`Error: ${data.message}`);
                }
            })
            .catch(error => {
                alert('Failed to submit the review');
            });
    }

    function generateStars(rating) {
        let starsHTML = '';
        for (let i = 1; i <= 5; i++) {
            if (rating >= i) {
                starsHTML += '<span class="star full">★</span>';
            } else if (rating > i - 1 && rating < i) {
                starsHTML += '<span class="star half">★</span>';
            } else {
                starsHTML += '<span class="star empty">★</span>';
            }
        }
        return starsHTML;
    }

    displayReviews();
    document.getElementById('submit-feedback').addEventListener('click', submitReview);
});



























