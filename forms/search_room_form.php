<!-- action is removed to prevent redirecting page, AJAX will be used instead to send and retrieve data-->
<form id="search-room-form" method="POST">
    <div class="flex-row form-wrapper">
        <div class="flex-column form-control">
            <label for="arrival-date"> Arrival Date </label>
            <input 
              type="date" 
              id="arrival-date" 
              name="arrival_date" 
              required
            />
        </div>
      <div class="flex-column form-control">
          <label for="departure-date">
            Departure Date
          </label>
          <input 
              type="date" 
              id="departure-date"
              name="departure_date" 
              required
          />
      </div>
      <div class="flex-column form-control">
          <label for="adult-count"> No. of Adult </label>
          <input
              type="number"
              id="adult-count"
              name="adult_count"
              min="0"
              max="4"
              value="0"
              required
          />
      </div>
      <div class="flex-column form-control">
          <label for="child-count">
              No. of Children
          </label>
          <input
              type="number"
              id="child-count"
              name="child_count"
              min="0"
              max="4"
              name="children-count"
              value="0"
              required
          />
      </div>
    </div>
    <div class="button-style">
        <input id="find-room-button" type="submit" value="Find Room" name="submit"/>
    </div>
</form>

