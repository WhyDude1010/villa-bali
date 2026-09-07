<?php
use App\Models\Villa;
$title = $seo['title'] ?? 'Villa Nirawa — Private Luxury Villa in Ubud, Bali';
?>
    <!-- Header Navigation -->
    <header class="navbar" id="navbar">
        <div class="nav-container">
            <a href="#" class="brand-logo"><?php echo htmlspecialchars(strtoupper($villa['name'])); ?></a>
            
            <nav class="nav-links" id="navLinks">
                <a href="#villa" class="nav-link">The Villa</a>
                <a href="#gallery" class="nav-link">Gallery</a>
                <a href="#experiences" class="nav-link">Experiences</a>
                <a href="#stay-mood" class="nav-link">Stay Mood</a>
                <a href="#location" class="nav-link">Location</a>
                <a href="#reservation" class="nav-link">Reserve</a>
                <a href="#faq" class="nav-link">FAQ</a>
            </nav>

            <div class="nav-actions">
                <button class="theme-toggle-btn" onclick="toggleTheme()" aria-label="Toggle Theme"></button>
                <button class="btn btn-primary" onclick="scrollToReservation()">Check Availability</button>
                <button class="menu-toggle" id="menuToggle" aria-label="Toggle Menu">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><line x1="3" y1="12" x2="21" y2="12"></line><line x1="3" y1="6" x2="21" y2="6"></line><line x1="3" y1="18" x2="21" y2="18"></line></svg>
                </button>
            </div>
        </div>
    </header>

    <!-- Mobile Drawer -->
    <div class="mobile-drawer" id="mobileDrawer">
        <div class="drawer-header">
            <span class="brand-logo"><?php echo htmlspecialchars(strtoupper($villa['name'])); ?></span>
            <div style="display:flex; align-items:center; gap:12px;">
                <button class="theme-toggle-btn" onclick="toggleTheme()" aria-label="Toggle Theme"></button>
                <button class="drawer-close" id="drawerClose">&times;</button>
            </div>
        </div>
        <nav class="drawer-links">
            <a href="#villa" onclick="closeDrawer()">The Villa</a>
            <a href="#gallery" onclick="closeDrawer()">Gallery</a>
            <a href="#experiences" onclick="closeDrawer()">Experiences</a>
            <a href="#stay-mood" onclick="closeDrawer()">Stay Mood</a>
            <a href="#location" onclick="closeDrawer()">Location</a>
            <a href="#reservation" onclick="closeDrawer()">Reserve</a>
            <a href="#faq" onclick="closeDrawer()">FAQ</a>
        </nav>
        <div class="drawer-footer">
            <button class="btn btn-primary btn-full" onclick="closeDrawer(); scrollToReservation();">Book Your Stay</button>
            <p class="drawer-contact">Ubud, Bali · <?php echo htmlspecialchars($footer['email'] ?? 'hello@villanirawa.com'); ?></p>
        </div>
    </div>

    <!-- Hero -->
    <section class="hero-section" id="hero">
        <div class="hero-bg-overlay"></div>
        <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=2000&q=85" alt="Villa Nirawa Pool" class="hero-img">
        <div class="hero-content">
            <span class="hero-subtitle"><?php echo htmlspecialchars($villa['location']); ?></span>
            <h1 class="hero-title">A Private Place<br>to Slow Down</h1>
            <p class="hero-desc">Designed for quiet mornings, long poolside afternoons, and evenings framed by jungle breezes.</p>
            <div class="hero-btn-group">
                <a href="#villa" class="btn btn-secondary">Explore the Villa</a>
                <button class="btn btn-primary" onclick="scrollToReservation()">Check Availability</button>
            </div>
        </div>
        <a href="#villa" class="scroll-indicator" aria-label="Scroll Down">
            <span>Scroll</span>
            <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"><path d="M12 5v14M19 12l-7 7-7-7"/></svg>
        </a>
    </section>

    <!-- Villa Introduction -->
    <section class="section villa-intro" id="villa">
        <div class="container grid-2">
            <div class="intro-text">
                <span class="section-tag">A Quiet Corner of Bali</span>
                <h2 class="section-heading">Architecture Rooted in Sanctuary</h2>
                <p class="body-text">Villa Nirawa sits quietly among Ubud's palm groves and terraced rice fields. Crafted from ironwood, lava stone, and bamboo, the residence blends seamless open-air pavilion living with intimate private suites.</p>
                <p class="body-text">Here, time softens. Wake to birdsong, swim before morning coffee, and let the gentle rhythm of Balinese hospitality carry your stay.</p>
                <div class="intro-specs-mini">
                    <div class="spec-mini-item">
                        <span class="spec-mini-num">0<?php echo (int)$villa['bedrooms']; ?></span>
                        <span class="spec-mini-label">Bedrooms</span>
                    </div>
                    <div class="spec-mini-item">
                        <span class="spec-mini-num">0<?php echo (int)$villa['max_guests']; ?></span>
                        <span class="spec-mini-label">Guests</span>
                    </div>
                    <div class="spec-mini-item">
                        <span class="spec-mini-num">01</span>
                        <span class="spec-mini-label">Infinity Pool</span>
                    </div>
                </div>
            </div>
            <div class="intro-image-wrapper">
                <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?auto=format&fit=crop&w=1200&q=85" alt="Villa Architecture" class="intro-img">
                <div class="img-caption">Open-air pavilion surrounded by natural spring pools</div>
            </div>
        </div>
    </section>

    <!-- Spec Grid -->
    <section class="specs-section">
        <div class="container">
            <div class="specs-grid">
                <div class="spec-card">
                    <span class="spec-number">03</span>
                    <h3 class="spec-title">Master Suites</h3>
                    <p class="spec-desc">En-suite outdoor stone tubs & rainfall showers</p>
                </div>
                <div class="spec-card">
                    <span class="spec-number">06</span>
                    <h3 class="spec-title">Maximum Guests</h3>
                    <p class="spec-desc">Privacy designed for couples, families, or small groups</p>
                </div>
                <div class="spec-card">
                    <span class="spec-number">14m</span>
                    <h3 class="spec-title">Infinity Pool</h3>
                    <p class="spec-desc">Natural slate tile pool overlooking jungle valley</p>
                </div>
                <div class="spec-card">
                    <span class="spec-number">250m²</span>
                    <h3 class="spec-title">Living Space</h3>
                    <p class="spec-desc">Open-air teak lounge & dining pavilion</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Gallery -->
    <section class="section gallery-section" id="gallery">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag">Visual Journal</span>
                <h2 class="section-heading">Every Angle, Crafted with Intention</h2>
                <p class="section-sub">Explore the atmosphere, interior spaces, and peaceful corners of Villa Nirawa.</p>
            </div>
            <div class="gallery-filters">
                <button class="filter-btn active" data-filter="all">All Photos</button>
                <button class="filter-btn" data-filter="villa">The Villa</button>
                <button class="filter-btn" data-filter="pool">The Pool</button>
                <button class="filter-btn" data-filter="bedroom">Bedrooms</button>
                <button class="filter-btn" data-filter="garden">Garden & Nature</button>
            </div>
            <div class="gallery-masonry" id="galleryGrid">
                <div class="gallery-item item-large" data-category="pool" onclick="openLightbox(0)">
                    <img src="https://images.unsplash.com/photo-1540555700478-4be289fbecef?auto=format&fit=crop&w=1200&q=85" alt="Infinity Pool at Sunset">
                    <div class="gallery-overlay"><span>The Pool</span><p>14m Slate Infinity Pool at Sunset</p></div>
                </div>
                <div class="gallery-item" data-category="bedroom" onclick="openLightbox(1)">
                    <img src="https://images.unsplash.com/photo-1618773928121-c32242e63f39?auto=format&fit=crop&w=900&q=85" alt="Master Suite Bed">
                    <div class="gallery-overlay"><span>Bedrooms</span><p>Master Suite with Garden View</p></div>
                </div>
                <div class="gallery-item" data-category="villa" onclick="openLightbox(2)">
                    <img src="https://images.unsplash.com/photo-1600585154340-be6161a56a0c?auto=format&fit=crop&w=900&q=85" alt="Open Pavilion Dining">
                    <div class="gallery-overlay"><span>The Villa</span><p>Teak Wood Open Lounge</p></div>
                </div>
                <div class="gallery-item" data-category="garden" onclick="openLightbox(3)">
                    <img src="https://images.unsplash.com/photo-1512917774080-9991f1c4c750?auto=format&fit=crop&w=900&q=85" alt="Tropical Garden">
                    <div class="gallery-overlay"><span>Garden</span><p>Lush Private Tropical Grounds</p></div>
                </div>
                <div class="gallery-item" data-category="bedroom" onclick="openLightbox(4)">
                    <img src="https://images.unsplash.com/photo-1584622650111-993a426fbf0a?auto=format&fit=crop&w=900&q=85" alt="Outdoor Stone Bathtub">
                    <div class="gallery-overlay"><span>Bedrooms</span><p>Outdoor Carved Stone Bathtub</p></div>
                </div>
                <div class="gallery-item" data-category="pool" onclick="openLightbox(5)">
                    <img src="https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=900&q=85" alt="Morning Pool View">
                    <div class="gallery-overlay"><span>The Pool</span><p>Morning Sun over the Pool Deck</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Lightbox -->
    <div class="lightbox" id="lightboxModal">
        <button class="lightbox-close" onclick="closeLightbox()">&times;</button>
        <button class="lightbox-nav prev" onclick="changeLightboxImg(-1)">&#10094;</button>
        <button class="lightbox-nav next" onclick="changeLightboxImg(1)">&#10095;</button>
        <div class="lightbox-content">
            <img id="lightboxImg" src="" alt="Villa Detail">
            <div class="lightbox-caption" id="lightboxCaption"></div>
        </div>
    </div>

    <!-- Experiences -->
    <section class="section experiences-section" id="experiences">
        <div class="container">
            <div class="section-header">
                <span class="section-tag">Curated Stay</span>
                <h2 class="section-heading">More Than a Place to Stay</h2>
                <p class="section-sub">Personalized services brought directly to your villa by our dedicated hospitality staff.</p>
            </div>
            <div class="experiences-grid">
                <div class="exp-card">
                    <div class="exp-num">01</div>
                    <h3 class="exp-title">Floating Breakfast</h3>
                    <p class="exp-desc">Fresh tropical fruits, artisan sourdough, and local Balinese coffee served in your private infinity pool.</p>
                </div>
                <div class="exp-card">
                    <div class="exp-num">02</div>
                    <h3 class="exp-title">Private In-Villa Chef</h3>
                    <p class="exp-desc">Multi-course traditional Balinese feast or modern farm-to-table tasting menu prepared fresh in your pavilion.</p>
                </div>
                <div class="exp-card">
                    <div class="exp-num">03</div>
                    <h3 class="exp-title">Balinese Wellness & Massage</h3>
                    <p class="exp-desc">Holistic massage, flower bath, and reflexology on your poolside terrace by certified local therapists.</p>
                </div>
                <div class="exp-card">
                    <div class="exp-num">04</div>
                    <h3 class="exp-title">Sunset Temple & Rice Field Tour</h3>
                    <p class="exp-desc">Guided private excursion to secret waterfalls, ancient water temples, and local artisan studios.</p>
                </div>
                <div class="exp-card">
                    <div class="exp-num">05</div>
                    <h3 class="exp-title">Private Yoga & Meditation</h3>
                    <p class="exp-desc">Morning Vinyasa or gentle Hatha session led by experienced yoga masters on the open wooden deck.</p>
                </div>
                <div class="exp-card">
                    <div class="exp-num">06</div>
                    <h3 class="exp-title">Airport Chauffeur Transfer</h3>
                    <p class="exp-desc">Seamless private vehicle pickup from Denpasar Airport directly to Villa Nirawa with chilled towels.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Stay Mood -->
    <section class="section mood-section" id="stay-mood">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag">Signature Experience</span>
                <h2 class="section-heading">Curate Your Ideal Stay</h2>
                <p class="section-sub">Select your desired mood to explore tailored itineraries and host recommendations.</p>
            </div>
            <div class="mood-selector">
                <button class="mood-btn active" onclick="selectMood('romantic', this)">Romantic Escape</button>
                <button class="mood-btn" onclick="selectMood('slow', this)">Slow Mornings & Relaxation</button>
                <button class="mood-btn" onclick="selectMood('wellness', this)">Wellness & Renewal</button>
                <button class="mood-btn" onclick="selectMood('family', this)">Family & Friends</button>
            </div>
            <div class="mood-result-card" id="moodResult">
                <div class="mood-content">
                    <span class="mood-badge" id="moodBadge">For Couples & Anniversaries</span>
                    <h3 class="mood-title" id="moodTitle">The Romantic Escape</h3>
                    <p class="mood-desc" id="moodDesc">Uninterrupted intimacy surrounded by lush tropical nature. Private poolside dining under candlelight, couples aromatherapy, and serene mornings.</p>
                    <ul class="mood-highlights" id="moodHighlights">
                        <li>Floating Breakfast served in private pool</li>
                        <li>Candlelight multi-course dinner under the stars</li>
                        <li>Sunset champagne on the valley terrace</li>
                        <li>Private couples Balinese massage session</li>
                    </ul>
                    <button class="btn btn-primary" onclick="scrollToReservation()">Plan This Stay</button>
                </div>
            </div>
        </div>
    </section>

    <!-- Itinerary Builder -->
    <section class="section itinerary-section" id="itinerary">
        <div class="container grid-2">
            <div class="itinerary-intro">
                <span class="section-tag">Interactive Planner</span>
                <h2 class="section-heading">Design Your Personal Days</h2>
                <p class="body-text">Customize your stay by choosing available experiences. We'll automatically organize them into a seamless daily schedule for your host team upon booking.</p>
                <div class="itinerary-options">
                    <h4>Morning Options</h4>
                    <label class="check-option"><input type="checkbox" checked data-name="Floating Pool Breakfast" data-time="08:00 AM"> Floating Pool Breakfast</label>
                    <label class="check-option"><input type="checkbox" data-name="Morning Yoga on Deck" data-time="07:00 AM"> Morning Yoga on Deck</label>
                    <h4>Afternoon Options</h4>
                    <label class="check-option"><input type="checkbox" checked data-name="Balinese Herbal Massage" data-time="02:00 PM"> Balinese Herbal Massage</label>
                    <label class="check-option"><input type="checkbox" data-name="Ubud Artisan & Market Tour" data-time="03:30 PM"> Ubud Artisan & Market Tour</label>
                    <h4>Evening Options</h4>
                    <label class="check-option"><input type="checkbox" checked data-name="Private Chef Tasting Dinner" data-time="07:30 PM"> Private Chef Tasting Dinner</label>
                    <label class="check-option"><input type="checkbox" data-name="Stargazing & Poolside Cocktails" data-time="09:00 PM"> Stargazing & Cocktails</label>
                </div>
            </div>
            <div class="itinerary-preview-box">
                <div class="itinerary-card">
                    <div class="itinerary-card-header">
                        <h3>YOUR BALI DAY ITINERARY</h3>
                        <span>Villa Nirawa Guest Service</span>
                    </div>
                    <div class="itinerary-list" id="itineraryList"></div>
                    <div class="itinerary-footer">
                        <button class="btn btn-primary btn-full" onclick="scrollToReservation()">Request This Itinerary With Booking</button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Location -->
    <section class="section location-section" id="location">
        <div class="container">
            <div class="grid-2">
                <div class="location-text">
                    <span class="section-tag">Where We Are</span>
                    <h2 class="section-heading">Hidden, Yet Connected</h2>
                    <p class="body-text">Villa Nirawa is tucked peacefully in Sayan, Ubud—minutes away from world-class dining, traditional artisan villages, and sacred rice terraces, while preserving complete secluded privacy.</p>
                    <div class="distance-grid">
                        <div class="distance-item"><span class="dist-time">12 min</span><span class="dist-place">Ubud Center & Palace</span></div>
                        <div class="distance-item"><span class="dist-time">15 min</span><span class="dist-place">Tegallalang Rice Terraces</span></div>
                        <div class="distance-item"><span class="dist-time">35 min</span><span class="dist-place">Black Sand Beaches</span></div>
                        <div class="distance-item"><span class="dist-time">70 min</span><span class="dist-place">Denpasar Airport (DPS)</span></div>
                    </div>
                </div>
                <div class="location-guide">
                    <h3 class="guide-title">Our Bali — Curated Host Guide</h3>
                    <div class="guide-list">
                        <div class="guide-item">
                            <span class="guide-cat">EAT</span>
                            <div><strong>Locavore Next Door & Alchemy</strong><p>Organic plant-focused dining 10 minutes away.</p></div>
                        </div>
                        <div class="guide-item">
                            <span class="guide-cat">EXPLORE</span>
                            <div><strong>Campuhan Ridge Walk</strong><p>Scenic morning hilltop trail with panoramic valley views.</p></div>
                        </div>
                        <div class="guide-item">
                            <span class="guide-cat">CULTURE</span>
                            <div><strong>Tirta Empul Holy Water Temple</strong><p>Sacred purification springs surrounded by ancient banyan trees.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Reviews -->
    <section class="section reviews-section">
        <div class="container">
            <div class="editorial-quote">
                <div class="quote-stars">★★★★★</div>
                <p class="quote-text">"Some places are beautiful. Villa Nirawa made us forget to check the time. The pool at golden hour and the gentle care of the host team created an unforgettable week."</p>
                <span class="quote-author">— Sarah & Daniel · London, UK</span>
                <span class="quote-meta">Stayed September 2026 · Verified Stay</span>
            </div>
        </div>
    </section>

    <!-- Direct Reservation Section (Inline Form) -->
    <section class="section reservation-section" id="reservation">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag">Direct Reservation</span>
                <h2 class="section-heading">Reserve Your Stay at Villa Nirawa</h2>
                <p class="section-sub">Book directly with us for exclusive rates, complimentary floating breakfast, and tailored host service.</p>
            </div>

            <div class="reservation-card-wrapper grid-2">
                <form action="/booking/checkout" method="POST" class="reservation-inline-form" id="inlineBookingForm">
                    <h3 class="form-block-title">Stay & Guest Details</h3>
                    
                    <div class="form-grid">
                        <div class="input-group">
                            <label>Check-in Date</label>
                            <input type="date" name="check_in" id="inlineCheckIn" onchange="updateInlinePriceCalculation()" required>
                        </div>
                        <div class="input-group">
                            <label>Check-out Date</label>
                            <input type="date" name="check_out" id="inlineCheckOut" onchange="updateInlinePriceCalculation()" required>
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="input-group">
                            <label>Number of Guests</label>
                            <select name="guests" id="inlineGuests" onchange="updateInlinePriceCalculation()">
                                <option value="1">1 Guest</option>
                                <option value="2" selected>2 Guests</option>
                                <option value="3">3 Guests</option>
                                <option value="4">4 Guests</option>
                                <option value="5">5 Guests</option>
                                <option value="6">6 Guests (Max)</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <label>Phone / WhatsApp</label>
                            <input type="tel" name="phone" required placeholder="+62 812 3456 7890">
                        </div>
                    </div>

                    <div class="form-grid">
                        <div class="input-group">
                            <label>First Name</label>
                            <input type="text" name="first_name" required placeholder="Sarah">
                        </div>
                        <div class="input-group">
                            <label>Last Name</label>
                            <input type="text" name="last_name" required placeholder="Jenkins">
                        </div>
                    </div>

                    <div class="input-group">
                        <label>Email Address</label>
                        <input type="email" name="email" required placeholder="sarah@example.com">
                    </div>

                    <div class="input-group">
                        <label>Special Requests (Optional)</label>
                        <textarea name="notes" rows="3" placeholder="Airport transfer details, honeymoon celebration, dietary preferences..."></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary btn-full" style="margin-top: 15px;">Confirm & Create Reservation</button>
                </form>

                <div class="reservation-summary-side">
                    <div class="summary-card">
                        <h3 class="form-block-title">Reservation Summary</h3>
                        
                        <div class="price-summary-box">
                            <div class="price-row">
                                <span id="inlineNightLabel"><?php echo Villa::formatPrice($villa['base_rate']); ?> × 3 nights</span>
                                <span id="inlineNightTotal"><?php echo Villa::formatPrice($villa['base_rate'] * 3); ?></span>
                            </div>
                            <div class="price-row">
                                <span>Villa Preparation & Cleaning</span>
                                <span><?php echo Villa::formatPrice($villa['cleaning_fee']); ?></span>
                            </div>
                            <div class="price-row">
                                <span>Local Hospitality Tax & Service</span>
                                <span><?php echo Villa::formatPrice($villa['tax_fee']); ?></span>
                            </div>
                            <div class="price-row total-row">
                                <span>Total Due</span>
                                <span id="inlineGrandTotal"><?php echo Villa::formatPrice($villa['base_rate'] * 3 + $villa['cleaning_fee'] + $villa['tax_fee']); ?></span>
                            </div>
                        </div>

                        <div class="direct-booking-perks">
                            <h4>Direct Booking Perks Included:</h4>
                            <ul>
                                <li>✓ Daily Floating or Pavilion Breakfast</li>
                                <li>✓ Complimentary Airport Chauffeur Pickup</li>
                                <li>✓ Free Cancellation up to 14 days prior</li>
                                <li>✓ Dedicated Private Host Concierge</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="section faq-section" id="faq">
        <div class="container">
            <div class="section-header text-center">
                <span class="section-tag">Clarity & Trust</span>
                <h2 class="section-heading">Frequently Asked Questions</h2>
            </div>
            <div class="faq-accordion">
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What time is check-in and check-out?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><p>Check-in is from 3:00 PM onwards, and check-out is by 11:00 AM. We offer flexible arrangements upon request based on availability.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>Is breakfast included in the stay rate?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><p>Yes, daily gourmet breakfast for all guests (including option for floating breakfast) is included in your direct booking rate.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>Is the villa completely private?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><p>Yes. You have exclusive private access to the entire 3-bedroom villa, private pool, gardens, and lounge pavilion during your booking.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question" onclick="toggleFaq(this)"><span>What is the direct booking cancellation policy?</span><span class="faq-icon">+</span></button>
                    <div class="faq-answer"><p>Free cancellation up to 14 days prior to check-in. Bookings can be rescheduled for any available date within 12 months without penalty.</p></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container footer-grid">
            <div class="footer-col">
                <span class="brand-logo footer-logo"><?php echo htmlspecialchars(strtoupper($villa['name'])); ?></span>
                <p class="footer-desc"><?php echo htmlspecialchars($footer['tagline'] ?? 'A quiet private residence to slow down in Ubud, Bali.'); ?></p>
            </div>
            <div class="footer-col">
                <h4>Explore</h4>
                <a href="#villa">The Villa</a>
                <a href="#gallery">Gallery</a>
                <a href="#experiences">Experiences</a>
                <a href="#location">Location</a>
            </div>
            <div class="footer-col">
                <h4>Reservation</h4>
                <a href="#reservation">Reserve Your Stay</a>
                <a href="#faq">Stay Policies</a>
                <a href="#location">Arrival Info</a>
            </div>
            <div class="footer-col">
                <h4>Direct Contact</h4>
                <p><?php echo htmlspecialchars($footer['address'] ?? 'Jalan Raya Sayan, Ubud, Bali'); ?></p>
                <p>Email: <?php echo htmlspecialchars($footer['email'] ?? 'hello@villanirawa.com'); ?></p>
                <p>WhatsApp: <?php echo htmlspecialchars($footer['whatsapp'] ?? '+62 812 3456 7890'); ?></p>
            </div>
        </div>
        <div class="container footer-bottom">
            <p><?php echo htmlspecialchars($footer['copyright'] ?? '© 2026 Villa Nirawa Bali.'); ?></p>
        </div>
    </footer>

    <!-- Sticky Mobile CTA -->
    <div class="mobile-sticky-cta" id="stickyCta">
        <div class="cta-price">
            <span class="price-val"><?php echo Villa::formatPrice($villa['base_rate']); ?></span>
            <span class="price-unit">/ night</span>
        </div>
        <button class="btn btn-primary" onclick="scrollToReservation()">Book Stay</button>
    </div>
