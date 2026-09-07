// Villa Nirawa Application Script

// Navigation Scroll Effect
window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

// Mobile Drawer Controls
const menuToggle = document.getElementById('menuToggle');
const drawerClose = document.getElementById('drawerClose');
const mobileDrawer = document.getElementById('mobileDrawer');

if (menuToggle) {
    menuToggle.addEventListener('click', () => {
        mobileDrawer.classList.add('open');
    });
}

if (drawerClose) {
    drawerClose.addEventListener('click', () => {
        mobileDrawer.classList.remove('open');
    });
}

function closeDrawer() {
    mobileDrawer.classList.remove('open');
}

// Gallery Lightbox & Filtering Data
const galleryData = [
    { src: 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1600&q=85', category: 'pool', title: '14m Slate Infinity Pool at Sunset' },
    { src: 'https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=1600&q=85', category: 'bedroom', title: 'Master Suite with Garden View' },
    { src: 'https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=1600&q=85', category: 'villa', title: 'Teak Wood Open Lounge & Dining' },
    { src: 'https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=1600&q=85', category: 'garden', title: 'Lush Private Tropical Grounds' },
    { src: 'https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=1600&q=85', category: 'bedroom', title: 'Outdoor Carved Stone Bathtub' },
    { src: 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=1600&q=85', category: 'pool', title: 'Morning Sun over the Pool Deck' }
];

let currentLightboxIndex = 0;

function openLightbox(index) {
    currentLightboxIndex = index;
    const modal = document.getElementById('lightboxModal');
    const img = document.getElementById('lightboxImg');
    const caption = document.getElementById('lightboxCaption');
    
    img.src = galleryData[index].src;
    caption.textContent = galleryData[index].title;
    modal.classList.add('open');
}

function closeLightbox() {
    document.getElementById('lightboxModal').classList.remove('open');
}

function changeLightboxImg(direction) {
    currentLightboxIndex = (currentLightboxIndex + direction + galleryData.length) % galleryData.length;
    openLightbox(currentLightboxIndex);
}

// Gallery Filtering
const filterBtns = document.querySelectorAll('.filter-btn');
const galleryItems = document.querySelectorAll('.gallery-item');

filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
        filterBtns.forEach(b => b.classList.remove('active'));
        btn.classList.add('active');

        const filter = btn.getAttribute('data-filter');
        galleryItems.forEach(item => {
            if (filter === 'all' || item.getAttribute('data-category') === filter) {
                item.style.display = 'block';
            } else {
                item.style.display = 'none';
            }
        });
    });
});

// Keyboard Navigation for Lightbox
window.addEventListener('keydown', (e) => {
    const modal = document.getElementById('lightboxModal');
    if (modal.classList.contains('open')) {
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') changeLightboxImg(1);
        if (e.key === 'ArrowLeft') changeLightboxImg(-1);
    }
});

// "A Day Here" Timeline Data & Switcher
const timelineData = [
    { time: '06:30 AM', heading: 'Morning Light over the Jungle', text: 'Wake softly as gentle sunlight filters through banana leaves. Hear the faint chime of temple bells as valley mist dissolves.', img: 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=1000&q=85' },
    { time: '08:30 AM', heading: 'Breakfast in the Open Pavilion', text: 'Savor fresh papaya, artisan sourdough, and single-origin Kintamani coffee served right at your outdoor dining table.', img: 'https://images.unsplash.com/photo-1533105079780-92b9be482077?auto=format&fit=crop&w=1000&q=85' },
    { time: '11:30 AM', heading: 'Infinity Pool & Sunlight', text: 'Cool off in the 14m slate pool. Read on the daybed under shade palms as dragonflies drift across the water.', img: 'https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1000&q=85' },
    { time: '15:00 PM', heading: 'Slow Afternoon Massage', text: 'Relax with an in-villa Balinese herbal oil massage on your private terrace. Soft jungle breezes replace any sense of rush.', img: 'https://images.unsplash.com/photo-1544161515-4ab6ce6db874?auto=format&fit=crop&w=1000&q=85' },
    { time: '17:45 PM', heading: 'Golden Hour Sunset', text: 'Watch the sky turn violet and amber behind the coconut palm canopy. Sip chilled passionfruit cocktails as lanterns light up.', img: 'https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1000&q=85' },
    { time: '20:00 PM', heading: 'Candlelight Dinner & Stargazing', text: 'Indulge in a multi-course dinner prepared by your private villa chef. End the night with unhindered night sky views.', img: 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=1000&q=85' }
];

function selectTimeline(index) {
    const slots = document.querySelectorAll('.time-slot');
    slots.forEach(s => s.classList.remove('active'));
    slots[index].classList.add('active');

    const item = timelineData[index];
    document.getElementById('timelineTime').textContent = item.time;
    document.getElementById('timelineHeading').textContent = item.heading;
    document.getElementById('timelineText').textContent = item.text;
    document.getElementById('timelineImg').src = item.img;
}

// "Stay Mood" Recommendation Data
const moodData = {
    romantic: {
        badge: 'For Couples & Anniversaries',
        title: 'The Romantic Escape',
        desc: 'Uninterrupted intimacy surrounded by lush tropical nature. Private poolside dining under candlelight, couples aromatherapy, and serene mornings.',
        highlights: [
            'Floating Breakfast served in private pool',
            'Candlelight multi-course dinner under the stars',
            'Sunset champagne on the valley terrace',
            'Private couples Balinese massage session'
        ]
    },
    slow: {
        badge: 'For Slow Living & Unplugging',
        title: 'Slow Mornings & Serenity',
        desc: 'No schedules, no alarms. Spend your days drifting between the poolside daybed, reading in the open pavilion, and listening to nature.',
        highlights: [
            'Daily organic breakfast served at your preferred hour',
            'In-villa tea ceremony with local herbal infusions',
            'Private meditation session in garden',
            'Unrestricted access to villa library & lounge'
        ]
    },
    wellness: {
        badge: 'For Mind & Body Renewal',
        title: 'Holistic Wellness & Renewal',
        desc: 'Recharge your energy with daily yoga, organic cold-pressed juices, traditional Balinese flower baths, and sound healing.',
        highlights: [
            'Private sunrise Vinyasa yoga on pool deck',
            'Traditional Balinese flower bath experience',
            'Organic plant-forward daily menu options',
            'Deep tissue reflexology and herbal body scrubs'
        ]
    },
    family: {
        badge: 'For Small Families & Groups',
        title: 'Family & Friends Sanctuary',
        desc: 'Generous living space for up to 6 guests. Share memorable meals, pool swims, and cultural day trips with total private comfort.',
        highlights: [
            '3 En-suite master bedrooms with flexible bed setups',
            'Family-style traditional Balinese BBQ dinner',
            'Guided village walk & artisan crafts workshop',
            'Dedicated villa staff for effortless stays'
        ]
    }
};

function selectMood(key, btn) {
    document.querySelectorAll('.mood-btn').forEach(b => b.classList.remove('active'));
    btn.classList.add('active');

    const m = moodData[key];
    document.getElementById('moodBadge').textContent = m.badge;
    document.getElementById('moodTitle').textContent = m.title;
    document.getElementById('moodDesc').textContent = m.desc;

    const list = document.getElementById('moodHighlights');
    list.innerHTML = m.highlights.map(h => `<li>${h}</li>`).join('');
}

// "Plan Your Stay" Itinerary Generator
function renderItinerary() {
    const checkboxes = document.querySelectorAll('.itinerary-options input[type="checkbox"]:checked');
    const container = document.getElementById('itineraryList');
    
    if (checkboxes.length === 0) {
        container.innerHTML = '<p style="font-size:0.85rem; color:#A9A49A;">No experiences selected yet. Check options on the left to build your day schedule.</p>';
        return;
    }

    let items = [];
    checkboxes.forEach(cb => {
        items.push({
            name: cb.getAttribute('data-name'),
            time: cb.getAttribute('data-time')
        });
    });

    container.innerHTML = items.map(item => `
        <div class="itinerary-item-row">
            <span>${item.name}</span>
            <span class="itinerary-time">${item.time}</span>
        </div>
    `).join('');
}

document.querySelectorAll('.itinerary-options input[type="checkbox"]').forEach(cb => {
    cb.addEventListener('change', renderItinerary);
});
renderItinerary();

// FAQ Accordion Toggle
function toggleFaq(btn) {
    const item = btn.parentElement;
    const isActive = item.classList.contains('active');
    
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
    if (!isActive) {
        item.classList.add('active');
    }
}

// Booking Modal Engine
const bookingModal = document.getElementById('bookingModal');

function openBookingModal() {
    bookingModal.classList.add('open');
    // Set default dates if empty
    const checkIn = document.getElementById('inputCheckIn');
    const checkOut = document.getElementById('inputCheckOut');
    
    if (!checkIn.value) {
        const today = new Date();
        today.setDate(today.getDate() + 5);
        checkIn.value = today.toISOString().split('T')[0];
    }
    if (!checkOut.value) {
        const outDate = new Date(checkIn.value);
        outDate.setDate(outDate.getDate() + 3);
        checkOut.value = outDate.toISOString().split('T')[0];
    }
    updatePriceCalculation();
}

function closeBookingModal() {
    bookingModal.classList.remove('open');
}

function goToStep(stepNum) {
    document.querySelectorAll('.step-indicator').forEach(ind => ind.classList.remove('active'));
    document.querySelectorAll('.modal-step-content').forEach(content => content.classList.remove('active'));

    document.getElementById(`stepInd${stepNum}`).classList.add('active');
    document.getElementById(`modalStep${stepNum}`).classList.add('active');

    if (stepNum === 3) {
        generateReservationSummary();
    }
}

function updatePriceCalculation() {
    const checkInVal = document.getElementById('inputCheckIn').value;
    const checkOutVal = document.getElementById('inputCheckOut').value;
    const guestsVal = document.getElementById('inputGuests').value;

    let nights = 3;
    if (checkInVal && checkOutVal) {
        const d1 = new Date(checkInVal);
        const d2 = new Date(checkOutVal);
        const diffTime = d2 - d1;
        nights = Math.max(1, Math.ceil(diffTime / (1000 * 60 * 60 * 24)));
    }

    const rate = 250;
    const cleaningFee = 40;
    const taxFee = 35;
    const nightTotal = rate * nights;
    const grandTotal = nightTotal + cleaningFee + taxFee;

    document.getElementById('priceNightLabel').textContent = `€${rate} × ${nights} night${nights > 1 ? 's' : ''}`;
    document.getElementById('priceNightTotal').textContent = `€${nightTotal}`;
    document.getElementById('priceGrandTotal').textContent = `€${grandTotal}`;

    // Update main page bar display
    if (checkInVal && checkOutVal) {
        const formatDate = (str) => {
            const d = new Date(str);
            return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
        };
        document.getElementById('barCheckIn').textContent = formatDate(checkInVal);
        document.getElementById('barCheckOut').textContent = formatDate(checkOutVal);
        document.getElementById('barGuests').textContent = `${guestsVal} Guest${guestsVal > 1 ? 's' : ''}`;
    }
}

function generateReservationSummary() {
    const fn = document.getElementById('guestFirstName').value || 'Sarah';
    const ln = document.getElementById('guestLastName').value || 'Jenkins';
    const checkInVal = document.getElementById('inputCheckIn').value;
    const checkOutVal = document.getElementById('inputCheckOut').value;
    const guestsVal = document.getElementById('inputGuests').value;
    const grandTotal = document.getElementById('priceGrandTotal').textContent;

    let nights = 3;
    if (checkInVal && checkOutVal) {
        const d1 = new Date(checkInVal);
        const d2 = new Date(checkOutVal);
        nights = Math.max(1, Math.ceil((d2 - d1) / (1000 * 60 * 60 * 24)));
    }

    const formatDate = (str) => {
        if (!str) return '12 Sep 2026';
        const d = new Date(str);
        return d.toLocaleDateString('en-GB', { day: 'numeric', month: 'short', year: 'numeric' });
    };

    document.getElementById('confirmName').textContent = `${fn} ${ln}`;
    document.getElementById('confirmDates').textContent = `${formatDate(checkInVal)} — ${formatDate(checkOutVal)}`;
    document.getElementById('confirmNights').textContent = nights;
    document.getElementById('confirmGuests').textContent = guestsVal;
    document.getElementById('confirmTotal').textContent = grandTotal;
}
