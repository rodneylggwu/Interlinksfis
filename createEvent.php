<button type ='button' class='btn btn-success mb-4' onclick="openForm()">Add Event</button>

<form id="eventForm" action="" method="post">
    <div class="form-group mt-3 col-md-5">
        <label for="EventName" class="form-label">Name of Event</label>
        <input type="text" name="eventname" class="form-control" required>
    </div>
    <div class="form-group mt-3 col-md-5">
        <label for="EventStartDate" class="form-label">Start Date and Time</label>
        <input type="datetime-local" name="EventDateStart" class="form-control" required>
    </div>
    <div class="form-group mt-3 col-md-5">
        <label for="EventStopDate" class="form-label">End Date and Time</label>
        <input type="datetime-local" name="EventDateStop" class="form-control" required>
    </div>
    <div class="form-group mt-3">
        <label for="EventDescription" class="form-label">Event Description</label>
        <textarea class="form-control" name="Description" rows="4"></textarea>
    </div>
    <div class="form-group mt-3">
        <label for="EventAddress" class="form-label">Street Address</label>
        <input type="text" name="EventAddress" class="form-control">
    </div>
    <div class="form-group mt-3 col-md-4">
        <label for="EventCity" class="form-label">City</label>
        <input type="text" name="EventCity" class="form-control">
    </div>
    <div class="mt-3 col-md-2 form-group">
        <label for="EventState" class="form-label">State</label>
        <select class="form-select" name="EventState">
            <option value="" selected="selected">Select a State</option>
            <option value="AL">Alabama</option>
            <option value="AK">Alaska</option>
            <option value="AZ">Arizona</option>
            <option value="AR">Arkansas</option>
            <option value="CA">California</option>
            <option value="CO">Colorado</option>
            <option value="CT">Connecticut</option>
            <option value="DE">Delaware</option>
            <option value="DC">District Of Columbia</option>
            <option value="FL">Florida</option>
            <option value="GA">Georgia</option>
            <option value="HI">Hawaii</option>
            <option value="ID">Idaho</option>
            <option value="IL">Illinois</option>
            <option value="IN">Indiana</option>
            <option value="IA">Iowa</option>
            <option value="KS">Kansas</option>
            <option value="KY">Kentucky</option>
            <option value="LA">Louisiana</option>
            <option value="ME">Maine</option>
            <option value="MD">Maryland</option>
            <option value="MA">Massachusetts</option>
            <option value="MI">Michigan</option>
            <option value="MN">Minnesota</option>
            <option value="MS">Mississippi</option>
            <option value="MO">Missouri</option>
            <option value="MT">Montana</option>
            <option value="NE">Nebraska</option>
            <option value="NV">Nevada</option>
            <option value="NH">New Hampshire</option>
            <option value="NJ">New Jersey</option>
            <option value="NM">New Mexico</option>
            <option value="NY">New York</option>
            <option value="NC">North Carolina</option>
            <option value="ND">North Dakota</option>
            <option value="OH">Ohio</option>
            <option value="OK">Oklahoma</option>
            <option value="OR">Oregon</option>
            <option value="PA">Pennsylvania</option>
            <option value="RI">Rhode Island</option>
            <option value="SC">South Carolina</option>
            <option value="SD">South Dakota</option>
            <option value="TN">Tennessee</option>
            <option value="TX">Texas</option>
            <option value="UT">Utah</option>
            <option value="VT">Vermont</option>
            <option value="VA">Virginia</option>
            <option value="WA">Washington</option>
            <option value="WV">West Virginia</option>
            <option value="WI">Wisconsin</option>
            <option value="WY">Wyoming</option>
        </select>
    </div>
    <div class="mt-3 col-md-4 form-group">
        <label for="EventCity" class="form-label">Zip</label>
        <input type="text" name="EventZip" class="form-control">
    </div>
    
    <button type="submit" name="submit" class="btn btn-primary my-4" value="submit">Save Event</button>

</form>

<script>
document.getElementById('eventForm').style.display='none';
function openForm() {
     document.getElementById('eventForm').style.display = 'block';
}
</script>