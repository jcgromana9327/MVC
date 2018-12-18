<h3>Send us your Feedback</h3>
<p>We'd love to get your thoughts. By giving us your feedback, Kindly fill up the forms below.</p>
<p><strong>PAGE COMMENTS</strong>
</p>
<p>Select a category that describes your comment:*</p>
<form action="feedback.php" method="post" class="form-group" role="search" id="myForm" onsubmit="return validateFeedback(this);">
    <select class="form-control" name="categoryType" id="categoryType" required>
        <option></option>
        <option>Broken Link</option>
        <option>Content Error</option>
        <option>Searching vehicle</option>
        <option>Comments and suggestion</option>
        <option>Site improvement</option>
    </select>
    <p class="newline">
    <div class="form-group">
        <textarea class="form-control" name="message" id="message" rows="5" required></textarea>
    </div>

    <div class="form-group">
        <label for="">Did you accomplish what you wanted to do on this page?</label>
        <div class="radio">
            <label>
                <input type="radio" name="satisfied" id="yes" value="yes" required> Yes</label>
            <label>
                <input type="radio" name="satisfied" id="no" value="no"> No</label>
        </div>
    </div>
    <div class="form-group">
        <label for="">If you did not accomplish what you wanted, please tell us why.</label>
        <input type="text" class="form-control" placeholder="" name= "message1" id="message1" required>
    </div>
    <div class="form-group">
        <label for="">Would you recommend this site to a friend?</label>
        <div class="radio">
            <label>
                <input type="radio" name="recommend" id="recommendYes" value="yes" required> Yes</label>
            <label>
                <input type="radio" name="recommend" id="recommendNo" value="no"> No</label>
        </div>
    </div>
    <div class="form-group">
        <label for="">Please enter your email address *</label>
        <input type="text" class="form-control" name="email" id="email" placeholder="" required>
    </div>
    <div class="form-group">
        <label for="">Please enter your contact number</label>
        <input type="text" class="form-control" name="contact" id="contack" placeholder="" required>
    </div>
    <button type="submit" class="btn btn-default" name="submit" id="submit" >Submit</button>
</form>
