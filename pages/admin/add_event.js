document.getElementById('addEventForm').addEventListener('submit', function(event) {
    event.preventDefault();
    const name = document.getElementById('name').value;
    const description = document.getElementById('description').value;
    const date = document.getElementById('date').value;
    const time = document.getElementById('time').value;
    const organizer_details = document.getElementById('organizers_details').value;
    const location = document.getElementById('location').value; // Make sure this matches the ID of your location input field

    // Construct the body of the fetch request
    const body = `name=${encodeURIComponent(name)}&description=${encodeURIComponent(description)}&date=${encodeURIComponent(date)}&time=${encodeURIComponent(time)}&organizers_details=${encodeURIComponent(organizer_details)}&location=${encodeURIComponent(location)}`;

    // Send the form data to the server
    fetch('events.php', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/x-www-form-urlencoded',
        },
        body: body,
    })
  .then(response => response.text())
  .then(data => {
        alert(data);
        window.location.reload();
    })
  .catch(error => console.error('Error:', error));
});





document.addEventListener('DOMContentLoaded', function() {
    // Fetch events from the PHP script
    console.log("DOM fully loaded and parsed");
    fetch('fetch_events.php')
    .then(response => response.json())
    .then(data => {
            // Clear the events container
            const eventsContainer = document.getElementById('eventsContainer');
            eventsContainer.innerHTML = ''; // Clear existing content

            // Loop through the events and create HTML elements for each
            data.forEach(event => {
                const eventElement = document.createElement('div');
                eventElement.innerHTML = `
    <a href="#" class="list-group-item">
    <h4 class="list-group-item-heading"><i class="glyphicon glyphicon-bullhorn"></i> ${ event.name }</h4>
    <p class="list-group-item-text">Description: ${ event.description }</p>
    <h5><i class="glyphicon glyphicon-calendar" ></i> ${ event.date }</h5>
    <h5><i class="glyphicon glyphicon-time" ></i> ${ event.time }</h5>
    <p class="list-group-item-text">Organizer: ${ event.organizers_details }</p>
    <p class="list-group-item-text"><i class="glyphicon glyphicon-map-marker"></i> ${ event.event_location }</p>
    </a>
`;
                console.log(eventElement);
                eventsContainer.appendChild(eventElement);
            });
        })
    .catch(error => console.error('Error:', error));

    

});