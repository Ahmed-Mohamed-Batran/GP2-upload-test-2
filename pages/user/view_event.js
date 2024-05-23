document.addEventListener('DOMContentLoaded', function() {
    // Fetch events from the server
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
                    <p class="list-group-item-text" >Organizer: ${ event.organizers_details }</p>
                    <p class="list-group-item-text"><i class="glyphicon glyphicon-map-marker"></i> ${ event.event_location }</p>
                </a>
            `;
            eventsContainer.appendChild(eventElement);
        });
    })
   .catch(error => console.error('Error:', error));
});
