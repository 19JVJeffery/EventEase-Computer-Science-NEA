const app = document.getElementById('app');

const pages = {
  home: `
    <section>
      <h2>Welcome to EventEase!</h2>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit...</p>
    </section>
  `,
  events: `
    <section>
      <h2>Events</h2>
      <div class="event-card">
        <img src="https://via.placeholder.com/400x200" alt="Event Cover"/>
        <h3>Event Name</h3>
        <button onclick="viewEvent()">Book Now</button>
      </div>
    </section>
  `,
  contact: `
    <section>
      <h2>Contact Us</h2>
      <form onsubmit="submitForm(event)">
        <input type="text" placeholder="First Name *" required>
        <input type="text" placeholder="Last Name *" required>
        <input type="email" placeholder="Email Address *" required>
        <textarea rows="4" placeholder="Message *" required></textarea>
        <button type="submit">Submit</button>
      </form>
    </section>
  `,
  eventDetail: `
    <section>
      <h2>Event Name</h2>
      <img src="https://via.placeholder.com/400x200" alt="Event Detail"/>
      <p><strong>Date and time:</strong> 25 Aug 2025, 6 PM</p>
      <p><strong>Location:</strong> Event location here</p>
      <p><strong>Refund Policy:</strong> No refunds</p>
      <p>Lorem ipsum dolor sit amet consectetur adipiscing elit...</p>
      <button onclick="navigateTo('events')">Return</button>
    </section>
  `,
  submitted: `
    <section>
      <h2>Form Submitted</h2>
      <p>We’ll get back to you shortly.</p>
      <button onclick="navigateTo('home')">Return to home page</button>
    </section>
  `
};

function navigateTo(page) {
  window.location.hash = page;
  renderPage();
}

function renderPage() {
  const hash = window.location.hash.replace('#', '') || 'home';
  app.innerHTML = pages[hash] || pages.home;
}

function viewEvent() {
  window.location.hash = 'eventDetail';
  renderPage();
}

function submitForm(e) {
  e.preventDefault();
  navigateTo('submitted');
}

document.querySelectorAll('.nav-link').forEach(link =>
  link.addEventListener('click', e => {
    e.preventDefault();
    navigateTo(e.target.getAttribute('href').replace('#', ''));
  })
);

window.addEventListener('load', renderPage);
window.addEventListener('hashchange', renderPage);
