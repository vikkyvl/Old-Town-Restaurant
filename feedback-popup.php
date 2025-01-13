<div class="top-up hidden" id="feedbackForm">
    <div class="background">
        <button class="close-btn">×</button>
    </div>
    <div class="col-info" id="reviews-list"></div>
    <div class="col-rating">
        <h2>Please Rate Us!</h2>
        <div class="ratings-container">
            <div class="rating">
                <label for="dishes">Dishes</label>
                <div class="stars">
                    <?php for ($i = 5; $i >= 1; $i--): ?>
                        <input type="radio" id="dish<?= $i ?>" name="dishes" value="<?= $i ?>">
                        <label for="dish<?= $i ?>">&#9733;</label>
                    <?php endfor; ?>
                </div>
            </div>
            <div class="rating">
                <label for="service">Service</label>
                <div class="stars">
                    <?php for ($i = 5; $i >= 1; $i--): ?>
                        <input type="radio" id="service<?= $i ?>" name="service" value="<?= $i ?>">
                        <label for="service<?= $i ?>">&#9733;</label>
                    <?php endfor; ?>
                </div>
            </div>            
        </div>
        <p>Click on the star</p>
        <div class="comment-box">
            <label for="name">Name</label>
            <input type="text" id="name" placeholder="Name">
            <label for="comment">Comment</label>
            <textarea id="comment" maxlength="500" rows="4" placeholder="Comment"></textarea>
            <button id="submit-feedback" type="button">LEAVE A FEEDBACK</button>
        </div>
    </div>    
</div>
<div id="overlay" class="overlay" style="display: none;"></div>
<div id="feedback-message" class="feedback-message" style="display: none;"></div>
