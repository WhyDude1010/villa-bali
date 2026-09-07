// Villa Nirawa Laravel App JavaScript

window.addEventListener('scroll', () => {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 80) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});

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
    if (mobileDrawer) mobileDrawer.classList.remove('open');
}

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
    const modal = document.getElementById('lightboxModal');
    if (modal) modal.classList.remove('open');
}

function changeLightboxImg(direction) {
    currentLightboxIndex = (currentLightboxIndex + direction + galleryData.length) % galleryData.length;
    openLightbox(currentLightboxIndex);
}

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

window.addEventListener('keydown', (e) => {
    const modal = document.getElementById('lightboxModal');
    if (modal && modal.classList.contains('open')) {
        if (e.key === 'Escape') closeLightbox();
        if (e.key === 'ArrowRight') changeLightboxImg(1);
        if (e.key === 'ArrowLeft') changeLightboxImg(-1);
    }
});

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

function renderItinerary() {
    const checkboxes = document.querySelectorAll('.itinerary-options input[type="checkbox"]:checked');
    const container = document.getElementById('itineraryList');
    
    if (!container) return;

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

function toggleFaq(btn) {
    const item = btn.parentElement;
    const isActive = item.classList.contains('active');
    
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('active'));
    if (!isActive) {
        item.classList.add('active');
    }
}

function scrollToReservation() {
    const section = document.getElementById('reservation');
    if (section) {
        section.scrollIntoView({ behavior: 'smooth' });
    }
}

function updateInlinePriceCalculation() {
    const checkInVal = document.getElementById('inlineCheckIn')?.value;
    const checkOutVal = document.getElementById('inlineCheckOut')?.value;

    let nights = 3;
    if (checkInVal && checkOutVal) {
        const d1 = new Date(checkInVal);
        const d2 = new Date(checkOutVal);
        const diffTime = d2 - d1;
        nights = Math.max(1, Math.ceil(diffTime / (1000 * 60 * 60 * 24)));
    }

    const rate = 4500000;
    const cleaningFee = 650000;
    const taxFee = 500000;
    const nightTotal = rate * nights;
    const grandTotal = nightTotal + cleaningFee + taxFee;

    const formatIdr = (amount) => 'Rp ' + amount.toLocaleString('id-ID');

    const label = document.getElementById('inlineNightLabel');
    const totalEl = document.getElementById('inlineNightTotal');
    const grandEl = document.getElementById('inlineGrandTotal');

    if (label) label.textContent = `${formatIdr(rate)} × ${nights} night${nights > 1 ? 's' : ''}`;
    if (totalEl) totalEl.textContent = formatIdr(nightTotal);
    if (grandEl) grandEl.textContent = formatIdr(grandTotal);
}

document.addEventListener('DOMContentLoaded', () => {
    const checkIn = document.getElementById('inlineCheckIn');
    const checkOut = document.getElementById('inlineCheckOut');
    if (checkIn && !checkIn.value) {
        const today = new Date();
        today.setDate(today.getDate() + 5);
        checkIn.value = today.toISOString().split('T')[0];
    }
    if (checkOut && !checkOut.value) {
        const outDate = new Date(checkIn.value);
        outDate.setDate(outDate.getDate() + 3);
        checkOut.value = outDate.toISOString().split('T')[0];
    }
    updateInlinePriceCalculation();
    initTheme();
});

function toggleTheme() {
    const current = document.documentElement.getAttribute('data-theme') || 'light';
    const next = current === 'dark' ? 'light' : 'dark';
    document.documentElement.setAttribute('data-theme', next);
    localStorage.setItem('theme', next);
    updateThemeToggleIcons();
}

function initTheme() {
    const savedTheme = localStorage.getItem('theme');
    const prefersDark = window.matchMedia && window.matchMedia('(prefers-color-scheme: dark)').matches;
    const nextTheme = savedTheme || (prefersDark ? 'dark' : 'light');

    document.documentElement.setAttribute('data-theme', nextTheme);
    updateThemeToggleIcons();
}

function updateThemeToggleIcons() {
    const current = document.documentElement.getAttribute('data-theme') || 'light';
    document.querySelectorAll('.theme-toggle-btn').forEach(btn => {
        btn.setAttribute('aria-label', `Switch to ${current === 'dark' ? 'light' : 'dark'} mode`);
        btn.innerHTML = current === 'dark' 
            ? `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><circle cx="12" cy="12" r="5"/><line x1="12" y1="1" x2="12" y2="3"/><line x1="12" y1="21" x2="12" y2="23"/><line x1="4.22" y1="4.22" x2="5.64" y2="5.64"/><line x1="18.36" y1="18.36" x2="19.78" y2="19.78"/><line x1="1" y1="12" x2="3" y2="12"/><line x1="21" y1="12" x2="23" y2="12"/><line x1="4.22" y1="19.78" x2="5.64" y2="18.36"/><line x1="18.36" y1="5.64" x2="19.78" y2="4.22"/></svg>` 
            : `<svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z"/></svg>`;
    });
}

initTheme();
