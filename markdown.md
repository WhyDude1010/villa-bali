# Bali Villa Booking Website

## UI/UX & Product Design Specification

> **Project:** Premium Individual Bali Villa Booking Website
> **Stack:** Laravel + Blade/Livewire or Laravel API + frontend
> **Design Direction:** Minimalist · Tropical · Editorial · Premium · Conversion-focused
> **Property Model:** One primary villa with a small number of bookable units or accommodation options
> **Primary Goal:** Help visitors imagine staying at the villa and complete a direct booking easily.

---

# 1. Design Philosophy

The website should not look like a hotel marketplace or multi-property booking platform.

This is a website for one individual villa. The design should therefore focus deeply on:

* The villa’s identity
* Its architecture and atmosphere
* The surrounding location
* The guest experience
* Direct booking
* Trust and clarity

Avoid:

* Villa listing pages with many properties
* Excessive property cards
* Generic hotel templates
* Marketplace-style filters
* Too many colors
* Huge amounts of text
* Aggressive promotional banners
* Overloaded navigation
* Stock-photo-heavy layouts
* “Book Now” buttons everywhere
* Cheap-looking gradients
* Excessive rounded cards
* Complicated booking forms
* Features designed for managing many unrelated villas

Instead, the website should feel like:

> **A quiet digital entrance to one special place in Bali.**

The experience should communicate:

**Escape → Discover → Imagine → Trust → Book**

The visitor should understand the villa within seconds while still feeling encouraged to explore its story.

---

# 2. Core Brand Concept

## Brand Personality

The visual identity should feel:

* Calm
* Intimate
* Natural
* Sophisticated
* Warm
* Exclusive
* Modern
* Authentic to Bali
* Personal
* Memorable

It should feel closer to a **boutique architecture magazine or private villa journal** than Booking.com.

### Design Keywords

```text
Bali
Tropical
Quiet luxury
Natural materials
Private escape
Architecture
Slow living
Sunlight
Water
Stone
Wood
Nature
Privacy
Personal hospitality
```

The villa should feel like a destination with its own personality, not one item in a large accommodation catalog.

---

# 3. Visual Direction

## Overall Style

Use a combination of:

* Large cinematic photography
* Editorial typography
* Generous whitespace
* Asymmetrical layouts
* Thin dividers
* Subtle animations
* Natural colors
* Large typography
* Minimal UI elements
* Personal, story-driven copy

The design should feel **expensive because it is restrained**, not because it contains visual effects everywhere.

Since there is only one primary villa, every section should reinforce its identity rather than introduce unnecessary browsing complexity.

---

# 4. Color System

Use a warm natural palette.

### Primary

```css
--color-ink: #1C211D;
--color-paper: #F5F2EA;
--color-sand: #D8CBB8;
--color-stone: #A9A49A;
--color-palm: #536052;
--color-earth: #806B58;
--color-white: #FFFFFF;
```

### Usage

| Color | Usage                           |
| ----- | ------------------------------- |
| Ink   | Primary text                    |
| Paper | Main background                 |
| Sand  | Secondary surfaces              |
| Stone | Borders / muted text            |
| Palm  | Accent / CTA                    |
| Earth | Small decorative accents        |
| White | Photography overlays / contrast |

Avoid pure black unless necessary.

Avoid bright tropical green.

The Bali feeling should come from **photography, materials, light, and composition**, not stereotypical tropical colors.

---

# 5. Typography

Use a sophisticated serif and modern sans-serif combination.

### Recommended

**Display / Heading**

```text
Cormorant Garamond
```

Alternative:

```text
Playfair Display
DM Serif Display
Instrument Serif
```

### Body / UI

```text
Inter
Manrope
DM Sans
```

### Typography Hierarchy

```text
Hero:
72–110px

Section heading:
48–72px

Large editorial text:
32–48px

Body:
16–18px

Small UI:
12–14px

Navigation:
13–15px
```

Use typography as part of the villa’s identity.

Headings should feel editorial and emotional. Interface text should remain clear and practical.

---

# 6. Navigation

The navigation should be simple and focused on one villa.

### Desktop

```text
┌──────────────────────────────────────────────────────────┐

VILLA NAME          THE VILLA     EXPERIENCE     LOCATION

                                      [ Check Availability ]

└──────────────────────────────────────────────────────────┘
```

Recommended navigation items:

* The Villa
* Experience
* Location
* Journal, only if there is enough meaningful content
* Check Availability

Do not include a “Villas” listing page unless the business later expands to multiple properties.

Navigation should initially sit **over the hero image**.

After scrolling:

```text
background: paper
text: ink
```

with a subtle transition.

### Mobile

Use:

```text
LOGO                         MENU
```

The menu should open as a full-screen editorial navigation.

Suggested mobile links:

```text
The Villa
Experience
Location
Availability
Contact
```

---

# 7. Homepage

The homepage should function as the main villa presentation page.

Because there is only one villa, visitors should not need to browse through multiple property listings. The homepage should combine discovery, storytelling, trust, and booking intent.

Recommended homepage flow:

```text
Hero
Booking CTA
Villa Introduction
Gallery
Villa Details
Experience
Location
Reviews
FAQ
Final Booking CTA
Footer
```

The homepage should not immediately begin with a large booking form.

---

## Section 01 — Cinematic Hero

Use full-viewport photography.

```text
┌──────────────────────────────────────────────────────┐
│                                                      │
│                                                      │
│                  A PRIVATE PLACE                     │
│                  TO SLOW DOWN                        │
│                                                      │
│                 Bali, Indonesia                      │
│                                                      │
│              [ Explore the Villa ]                   │
│                                                      │
│                                      ↓               │
└──────────────────────────────────────────────────────┘
```

Use an immersive photograph that immediately communicates the villa’s atmosphere.

Possible hero imagery:

* Pool at sunset
* Villa surrounded by tropical vegetation
* Bedroom opening toward nature
* Architectural exterior
* Private garden
* Ocean or jungle view

### Hero Rules

The image must carry the emotional impact.

Do not cover it with:

* Excessive gradients
* Multiple buttons
* Large booking widgets
* Excessive text
* Marketplace-style search controls

Use one primary action:

```text
[ Explore the Villa ]
```

or:

```text
[ Check Availability ]
```

Do not use both unless one is clearly secondary.

---

# 8. Immediate Booking CTA

After the hero, introduce booking without interrupting the emotional experience.

```text
YOUR STAY

Check-in       Check-out       Guests

12 SEP         15 SEP          2 Guests

                         [ Check Availability ]
```

This should feel like part of the editorial design rather than a traditional hotel search engine.

Since there is only one villa, do not include:

* Property selection
* Destination search
* Number of rooms
* Villa comparison
* Search filters

The booking widget only needs to collect:

* Check-in date
* Check-out date
* Number of guests

If the villa has fixed occupancy or a single accommodation type, keep the guest selector especially simple.

---

# 9. Villa Introduction

Create a large editorial section focused on the villa’s character.

Example:

```text
A QUIET CORNER
OF BALI

Designed for mornings without plans,
slow afternoons in the pool,
and evenings that last a little longer.

                      [ Discover the Villa ]
```

Use asymmetrical composition.

Image on one side.

Text on the other.

Avoid centered layouts everywhere.

The copy should explain what makes this particular villa special:

* Its setting
* Its architecture
* Its privacy
* Its relationship with nature
* Its proximity to local life
* Its atmosphere

Do not use generic descriptions that could apply to any villa.

---

# 10. Villa Gallery

Do not create a normal grid of identical cards.

Use an **editorial masonry gallery** that presents the villa as a complete visual story.

Example:

```text
┌───────────────┐     ┌──────────────────────────┐
│               │     │                          │
│               │     │                          │
│    IMAGE      │     │          IMAGE           │
│               │     │                          │
│               │     └──────────────────────────┘
│               │
└───────────────┘     ┌───────────────┐
                      │               │
                      │     IMAGE     │
                      │               │
                      └───────────────┘
```

Suggested gallery categories:

```text
The Villa
The Pool
The Bedrooms
The Living Spaces
The Garden
The Details
The Surroundings
```

Clicking an image opens a fullscreen gallery.

Features:

* Keyboard navigation
* Swipe on mobile
* Image counter
* ESC to close
* Smooth transitions
* Preloading next image
* Descriptive image captions where useful

The gallery should feel like a visual tour of one property, not a collection of listing thumbnails.

---

# 11. Villa Details

Instead of displaying everything as cards:

```text
3 Bedrooms
3 Bathrooms
6 Guests
Private Pool
```

Use an elegant specification section.

```text
THE VILLA

03       Bedrooms
06       Guests
03       Bathrooms
01       Private Pool

250 m²   Living Space
```

Large numbers should be used as visual anchors.

Only show details that are accurate for this villa.

Possible specifications:

* Bedrooms
* Bathrooms
* Maximum guests
* Living area
* Pool type
* Outdoor area
* Minimum stay
* Distance to nearby locations

If the villa has multiple room types or accommodation options, present them as variations within the same villa rather than as separate properties.

---

# 12. The Experience Section

This is one of the most important differentiators.

Do not only sell the villa.

Sell the **experience of staying at this villa**.

Example:

```text
MORE THAN
A PLACE TO STAY

Wake up slowly.
Swim before breakfast.
Walk through the village.
Return when the sun begins to disappear.

This is Bali at your own pace.
```

Then introduce services or experiences available to guests:

```text
01  Floating Breakfast

02  Private Chef

03  Temple Visit

04  Balinese Massage

05  Sunset Dinner

06  Airport Transfer
```

Only include services that are actually available.

Each experience may include:

* Short description
* Optional image
* Availability information
* Additional price, if applicable
* Request or booking action

Do not make the experience section feel like a separate marketplace. It should remain connected to the villa stay.

---

# 13. “A Day Here” Feature

Create a unique interactive section.

## A Day at the Villa

A horizontal timeline:

```text
06:30
Morning Light

08:00
Breakfast

11:30
Pool

14:00
Slow Afternoon

17:45
Golden Hour

20:00
Dinner
```

As the user scrolls, the background image changes.

This makes the website feel like an experience rather than a property listing.

The timeline should describe a possible day, not promise a fixed schedule.

Use language that encourages imagination:

```text
Start with coffee in the garden.
Take the afternoon slowly.
Watch the light move across the pool.
```

---

# 14. Location

Do not only say:

```text
Location:
Ubud, Bali
```

Tell a story about where this villa is located.

Example:

```text
WHERE WE ARE

Hidden between rice fields and village life,
yet close enough to discover Bali's most
beautiful places.

Ubud          12 min
Beach         35 min
Airport       70 min
```

Include:

* A quiet interactive map
* Nearby landmarks
* Estimated travel times
* Arrival information
* Optional transfer details

The location section should help guests understand both the villa’s privacy and its accessibility.

---

# 15. Local Recommendations

Add:

## OUR BALI

Curated recommendations from the villa team.

Categories:

```text
Eat
Swim
Explore
Wellness
Culture
Sunset
```

Example:

```text
01
A morning market

02
A hidden waterfall

03
Our favorite warung

04
A quiet beach

05
A sunset viewpoint
```

This establishes the villa as a **local guide**, not simply accommodation.

Recommendations should be personal and specific to the villa’s location.

Avoid building a large directory. A small, carefully selected list is more appropriate for an individual villa.

---

# 16. Reviews

Avoid generic review cards.

Instead create a large editorial testimonial.

```text
“Some places are beautiful.
This one made us forget to check the time.”

— Sarah & Daniel
   London
```

Then show verified review information only if available:

```text
★★★★★

4.9 / 5

Based on verified stays
```

Do not display fabricated review counts or ratings.

Reviews should build trust close to the booking CTA.

If there are only a few reviews, show them with more space and context rather than forcing them into a carousel.

---

# 17. Booking Experience

The booking flow is the most important functional component.

Do not send users to another website unless an external payment provider is required.

The villa booking experience should remain inside the website as much as possible.

Because there is only one villa, the booking flow should be short and focused.

## Step 01

```text
WHEN ARE YOU COMING?

Check-in
[ 12 September 2026 ]

Check-out
[ 15 September 2026 ]

Guests
[ 2 Adults ]

[ Continue ]
```

Do not ask users to select a property.

If the villa has different room configurations, show those only after dates and guest count are selected.

---

# 18. Availability Calendar

The calendar should clearly communicate:

```text
AVAILABLE
SELECTED
UNAVAILABLE
```

Never rely on color alone.

Use:

* Opacity
* Borders
* Labels
* Disabled states
* Clear focus states

Example:

```text
September 2026

Mo Tu We Th Fr Sa Su

    1  2  3  4  5  6
 7  8  9 10 11 12 13
14 15 16 17 18 19 20
21 22 23 24 25 26 27
28 29 30
```

Unavailable dates should be visually obvious.

The calendar should show availability for the individual villa, not a collection of properties.

If the villa has blocked dates for maintenance or owner use, treat them as unavailable and manage them through the admin system.

---

# 19. Price Transparency

Never hide the final price until the last step.

Show:

```text
3 nights                 €750
Cleaning                 €40
Service                  €35
────────────────────────────
Total                    €825
```

If taxes exist:

```text
Subtotal
Taxes
Fees
Total
```

Clearly explain each fee.

For a single villa, pricing should be easy to understand. Avoid unnecessary pricing complexity unless the property genuinely requires seasonal rates, extra guest fees, or optional services.

Trust is more valuable than a short-term conversion trick.

---

# 20. Booking Summary

Desktop:

```text
┌────────────────────────────────────────────────────────┐
│                                                        │
│  YOUR STAY                         VILLA IMAGE          │
│                                                        │
│  12 Sep — 15 Sep                                      │
│  2 Guests                                              │
│                                                        │
│  3 nights                         €825                 │
│                                                        │
│                    [ Continue to Guest Details ]       │
│                                                        │
└────────────────────────────────────────────────────────┘
```

Mobile:

Booking summary should become a sticky bottom sheet.

The summary should clearly identify:

* Villa name
* Dates
* Guest count
* Number of nights
* Price breakdown
* Cancellation policy
* Next action

Do not include a property comparison or alternative villa suggestions.

---

# 21. Guest Details

Keep the form short.

Required:

```text
First Name
Last Name
Email
Phone
Country
Special Request
```

Do not ask unnecessary information.

Use progressive disclosure.

Optional fields may include:

* Arrival time
* Dietary requirements
* Airport transfer request
* Celebration details
* Preferred experiences

These should not block the booking unless required for operational reasons.

---

# 22. Payment

The payment page should feel trustworthy.

Display:

```text
SECURE PAYMENT

Your booking is protected with secure payment processing.

[ Card ]
[ Payment Method ]

Total

€825

[ Confirm & Pay ]
```

Never visually overwhelm the user with payment information.

Clearly show:

* Villa name
* Stay dates
* Total amount
* Payment status
* Cancellation policy
* Secure payment messaging

Do not store sensitive payment information unnecessarily.

---

# 23. Booking Confirmation

The confirmation page should feel rewarding.

Example:

```text
YOUR ESCAPE IS BOOKED.

We can't wait to welcome you to Bali.

12 — 15 September 2026

Villa Name
Ubud, Bali

Booking #BV-10291

[ View My Reservation ]
[ Add to Calendar ]
```

Include useful information:

* Check-in time
* Check-out time
* Villa address
* Contact host
* Directions
* Reservation number
* Payment status
* Cancellation policy
* Arrival instructions

The confirmation should also provide a clear way to contact the villa team through email, WhatsApp, or another supported channel.

---

# 24. Sticky Booking CTA

On the homepage and villa detail sections, maintain a subtle booking CTA.

Desktop:

```text
                         [ Check Availability ]
```

Mobile:

```text
┌───────────────────────────────────────┐
│ From €250/night     [ Book Your Stay ]│
└───────────────────────────────────────┘
```

The CTA should remain accessible without becoming annoying.

Since there is only one villa, the CTA should always refer directly to that villa.

Avoid generic labels such as:

```text
Browse Villas
Find Accommodation
Search Properties
```

---

# 25. Microinteractions

Animations should be subtle.

Use:

```text
150–250ms
```

for UI transitions.

Use:

```text
500–900ms
```

for image transitions.

Preferred effects:

* Fade
* Slide
* Image reveal
* Scale 1.02
* Text reveal
* Parallax used sparingly

Avoid:

* Excessive bouncing
* Large zoom animations
* Spinning elements
* Constant motion
* Slow transitions that block interaction

Animation should make the interface feel **alive**, not slow.

---

# 26. Page Transitions

When moving between pages:

```text
Home
   ↓
Villa Story
   ↓
Booking
```

Use subtle fade or clip transitions.

The website should feel like a continuous journey through one villa.

Do not create unnecessary transitions between multiple property pages because there is only one primary property.

---

# 27. Villa Detail Page

If the villa has a dedicated detail page separate from the homepage, use the following structure:

```text
NAVIGATION

HERO IMAGE

Villa Name
Location
[ Check Availability ]

────────────────

INTRODUCTION

────────────────

PHOTO GALLERY

────────────────

VILLA DETAILS

Bedrooms
Guests
Bathrooms
Pool
Area

────────────────

AMENITIES

────────────────

A DAY HERE

────────────────

EXPERIENCES

────────────────

LOCATION

────────────────

REVIEWS

────────────────

FAQ

────────────────

BOOK YOUR STAY

────────────────

FOOTER
```

If the homepage already contains all of this content, a separate villa detail page may not be necessary.

For an individual villa, a strong single-page experience can be more effective than splitting the story across many pages.

---

# 28. Amenities

Use icons sparingly.

Example:

```text
Private Pool
Wi-Fi
Air Conditioning
Kitchen
Daily Housekeeping
Parking
Breakfast
Workspace
Smart TV
Hot Water
```

Do not use emoji.

Use a consistent SVG icon system.

Recommended:

```text
Lucide Icons
```

Only display amenities that are actually available at the villa.

Group amenities where useful:

```text
Comfort
Outdoor
Kitchen
Services
Connectivity
```

Avoid turning amenities into a large marketplace-style feature grid.

---

# 29. FAQ

Important questions:

```text
What time is check-in?

Is breakfast included?

Is the villa private?

Can we request airport transfer?

Is there a minimum stay?

Can children stay?

What is the cancellation policy?

Are pets allowed?

How far is the beach?

How do we get to the villa?

Is housekeeping included?

Can we arrange a private chef?
```

Accordion behavior:

```text
Question
────────────────────
Answer
```

Only one or two should be expanded initially.

Answers should be specific to this villa.

---

# 30. Footer

The footer should feel like the final page of a magazine.

```text
VILLA NAME

A private place
to slow down in Bali.

EXPLORE
The Villa
Experience
Location
Availability

STAY
Contact
Arrival Information
Policies

FOLLOW
Instagram
WhatsApp

────────────────────────

© 2026 Villa Name
Privacy
Terms
```

Do not include a large “Villas” section or links to unrelated properties.

---

# 31. Mobile-First Design

The mobile experience is critical.

Assume many visitors will arrive from:

* Instagram
* TikTok
* WhatsApp
* Google
* Travel blogs

Therefore mobile should not simply be a compressed desktop layout.

Mobile navigation:

```text
LOGO                         MENU
```

Mobile hero:

```text
IMAGE

Villa Name

Bali, Indonesia

[ Check Availability ]
```

Mobile booking CTA:

```text
STICKY BOTTOM CTA
```

The mobile experience should make it easy to:

* View the villa gallery
* Check dates
* Contact the host
* Review the price
* Complete a booking

---

# 32. Responsive Breakpoints

Use:

```text
Mobile:
< 640px

Tablet:
640–1024px

Desktop:
1024–1440px

Large Desktop:
> 1440px
```

Content should not become excessively wide.

Recommended:

```css
max-width: 1440px;
margin: auto;
padding: 24px;
```

For a single villa, use generous spacing and large imagery rather than filling every available area with content.

---

# 33. Accessibility

The website must be usable by everyone.

Requirements:

* Semantic HTML
* Keyboard navigation
* Visible focus states
* Accessible form labels
* ARIA only when necessary
* Alt text for meaningful images
* Reduced-motion support
* Sufficient contrast
* Large touch targets

Minimum touch target:

```text
44 × 44px
```

The gallery, calendar, booking form, accordions, and payment flow must all be keyboard accessible.

---

# 34. Performance

Luxury design means nothing if the website loads slowly.

Prioritize:

```text
LCP < 2.5s
CLS < 0.1
INP < 200ms
```

Image strategy:

```text
AVIF
WebP
Responsive images
Lazy loading
Blur placeholder
```

Hero images should be optimized separately.

Never load a 5MB photograph when a 400KB optimized image is sufficient.

Because the website depends heavily on photography, image optimization should be treated as a core product requirement.

---

# 35. Image Strategy

Photography is the most important visual asset.

Required categories:

```text
Exterior
Pool
Bedroom
Bathroom
Living Room
Kitchen
Dining
Garden
Sunset
Local Area
Experience
Food
People
Details
```

Images should communicate:

**What does it feel like to be there?**

Not simply:

**What does the room look like?**

For one villa, image consistency is especially important. Use a coherent photography style, color treatment, and aspect-ratio system.

---

# 36. Booking Conversion Strategy

The conversion funnel should be:

```text
DISCOVER
   ↓
DESIRE
   ↓
TRUST
   ↓
AVAILABILITY
   ↓
BOOK
```

Do not ask users to book before they understand the villa.

But once they demonstrate booking intent, remove friction.

The website should not make visitors browse through multiple properties. The main conversion path should lead directly from the villa story to availability.

---

# 37. Trust Signals

Include only accurate trust signals:

```text
★★★★★ 4.9/5
Verified guest reviews

Secure payment

Free cancellation until X

Instant confirmation

Local host

24/7 support
```

Only display claims that are actually true.

Never fabricate reviews, ratings, certifications, booking numbers, or availability.

For an individual villa, personal trust can be especially valuable:

* Host introduction
* Response time
* Direct contact
* Local knowledge
* Clear policies
* Real guest feedback

---

# 38. Scarcity

Use scarcity carefully.

Good:

```text
Only 2 available weekends this month
```

Bad:

```text
ONLY 1 ROOM LEFT!!!
BOOK NOW!!!
```

The website should feel premium, not desperate.

Only show scarcity when it is based on real availability data.

---

# 39. Error States

Every important action must have a designed error state.

Examples:

```text
No availability

We're sorry, this villa isn't available
for those dates.

Try another date.

[ Change Dates ]
```

Payment failure:

```text
Your payment didn't go through.

No booking has been created.

[ Try Again ]
```

Network failure:

```text
Something went wrong.

Please check your connection
and try again.
```

Booking conflict:

```text
Those dates were just booked.

Please choose another date range.
```

---

# 40. Loading States

Never leave users staring at a blank screen.

Use skeletons for:

* Availability
* Villa data
* Reviews
* Price calculation
* Booking confirmation

Example:

```text
████████████
████████
████████████████
```

Loading states should preserve the layout so the page does not jump unexpectedly.

---

# 41. Laravel Architecture

Recommended separation:

```text
app/
├── Models/
│   ├── Villa.php
│   ├── VillaImage.php
│   ├── Amenity.php
│   ├── Booking.php
│   ├── Guest.php
│   ├── Payment.php
│   ├── Review.php
│   └── Experience.php
│
├── Services/
│   ├── BookingService.php
│   ├── AvailabilityService.php
│   ├── PricingService.php
│   └── PaymentService.php
│
├── Http/
│   ├── Controllers/
│   └── Requests/
│
└── Policies/
    └── BookingPolicy.php
```

Because this is an individual villa, the architecture should remain simple and avoid unnecessary multi-property complexity.

The `Villa` model may still be useful for future growth, but the initial product should be optimized around one primary villa.

---

# 42. Database Concept

Core relationships:

```text
Villa
 │
 ├── VillaImages
 ├── Amenities
 ├── Experiences
 ├── Reviews
 └── Bookings
          │
          └── Guest
```

If there is only one villa, the database can still use a `villas` table for clean architecture and future expansion.

Recommended booking status:

```text
pending
awaiting_payment
confirmed
checked_in
completed
cancelled
expired
```

Payment status:

```text
pending
processing
paid
failed
refunded
partially_refunded
```

Optional supporting models:

```text
BlockedDate
VillaSetting
ContactRequest
```

Use `BlockedDate` for owner stays, maintenance, or manually unavailable dates.

---

# 43. Availability Logic

Never determine availability only from frontend state.

The backend must be authoritative.

Concept:

```text
requested dates
        ↓
AvailabilityService
        ↓
check existing bookings
        ↓
check blocked dates
        ↓
check villa availability
        ↓
calculate price
        ↓
return result
```

Prevent double booking using:

* Database transactions
* Server-side validation
* Proper locking / concurrency handling
* Unique booking constraints where appropriate

The availability system only needs to evaluate the individual villa, not compare multiple properties.

---

# 44. Pricing Engine

Do not hard-code price directly into Blade templates.

Create a pricing service.

Example:

```text
Base Rate
+
Seasonal Rate
+
Weekend Rate
+
Extra Guest Fee
+
Cleaning Fee
+
Tax
-
Discount
=
Final Price
```

This allows future features such as:

```text
High Season
Low Season
Long Stay Discount
Last Minute
Holiday Pricing
Weekend Pricing
Promo Codes
```

For a single villa, keep the pricing rules understandable and easy to manage.

Optional services such as airport transfers, private chefs, or floating breakfasts should be separated from the accommodation price and clearly labeled.

---

# 45. Admin Dashboard

The public website is the main product, but the admin area should support the operation of one villa efficiently.

Admin should manage:

```text
Dashboard

Bookings
Calendar
Villa Details
Images
Amenities
Experiences
Guests
Payments
Reviews
Promotions
Content
Blocked Dates
Settings
```

Do not build a complex multi-property management interface unless expansion is planned.

Calendar view:

```text
        SEP 2026

Villa  ███ BOOKED ███
       █████ AVAILABLE
       █████ BLOCKED ███
```

The admin should be able to:

* Block dates
* Confirm bookings
* Update pricing
* Manage guest details
* Upload images
* Edit villa content
* Manage reviews
* Configure policies
* View payment status

---

# 46. Security

Booking systems must prioritize security.

Requirements:

* CSRF protection
* Server-side validation
* Authorization policies
* Rate limiting
* Secure payment integration
* Sanitized user input
* Audit logs
* Secure session handling
* No sensitive payment information stored unnecessarily

Never trust:

```text
price
availability
guest count
booking status
```

from the client.

Always recalculate and validate on the server.

---

# 47. SEO

The individual villa should have one strong primary SEO page.

Example:

```text
/villa-name
```

or:

```text
/ubud-private-pool-villa
```

Metadata:

```text
Title
Description
Open Graph image
Canonical URL
Structured data
```

Use relevant structured data where appropriate, such as lodging or vacation rental information.

Do not create unnecessary villa listing pages if there is only one property.

---

# 48. URL Structure

Recommended:

```text
/
 /villa
 /experience
 /location
 /journal
 /journal/{slug}
 /availability
 /booking
 /booking/{reference}
 /contact
```

If the homepage already contains the full villa story, `/villa` may redirect to a relevant section or remain optional.

Keep URLs human-readable.

Avoid:

```text
/villas
/villas/{slug}
```

unless the business is expected to expand into multiple properties.

---

# 49. Content Tone

Copy should be:

```text
Short
Warm
Human
Confident
Sensory
Quiet
Personal
Specific
```

Avoid:

```text
"Experience unparalleled luxury and world-class hospitality..."
```

Prefer:

```text
"Wake to the sound of the garden.
Breakfast slowly.
Let the afternoon disappear."
```

The website should **show luxury rather than announce luxury**.

Copy should refer to the villa as a distinct place with a recognizable personality.

---

# 50. Unique Signature Feature

## “Stay Mood”

Instead of immediately asking:

> How many guests?

Let visitors explore what kind of stay they want.

Example:

```text
WHAT ARE YOU LOOKING FOR?

      SLOW MORNINGS

      ROMANTIC ESCAPE

      FAMILY TIME

      WELLNESS

      ADVENTURE
```

After selecting:

```text
ROMANTIC ESCAPE

We think you'll love:

Private sunset dinner
Poolside breakfast
Couples massage
Sunset temple visit
```

Then:

```text
[ Plan My Stay ]
```

This creates an emotional connection before booking.

For an individual villa, this feature should recommend experiences available at or around that villa, not redirect users to other properties.

---

# 51. Another Signature Feature

## “Plan Your Stay”

Interactive itinerary builder.

User selects:

```text
Morning
☑ Breakfast
☑ Yoga

Afternoon
☑ Pool
☑ Massage

Evening
☑ Private Dinner
☑ Sunset
```

The website generates:

```text
YOUR BALI DAY

08:00  Breakfast
10:00  Yoga
13:00  Pool
16:00  Massage
18:00  Sunset
20:00  Dinner
```

Then:

```text
[ Request These Experiences ]
```

or:

```text
[ Book Your Stay ]
```

This turns the villa from a **room for rent** into a **personalized Bali experience**.

The itinerary should remain optional and should not complicate the core booking flow.

---

# 52. Design System Components

Create reusable components.

```text
Button
Input
DatePicker
GuestSelector
BookingWidget
VillaHero
ImageGallery
AmenityList
Review
Accordion
Modal
Toast
PriceBreakdown
AvailabilityCalendar
ExperienceSection
Navigation
Footer
```

Avoid components that exist only for multi-property browsing, such as:

```text
VillaComparison
PropertySearchGrid
PropertyFilter
MultiVillaCard
```

Each component should have:

```text
default
hover
focus
active
disabled
loading
error
```

states where applicable.

---

# 53. Button System

Primary:

```text
[ Check Availability ]
```

Secondary:

```text
[ Explore the Villa ]
```

Tertiary:

```text
View details →
```

Avoid having multiple visually competing primary buttons.

One section = one dominant action.

For the individual villa, the primary action should usually be:

```text
Check Availability
```

or:

```text
Book Your Stay
```

---

# 54. UX Rule

Every page should answer three questions:

### 1. Where am I?

Clear navigation and page hierarchy.

### 2. What can I do?

Obvious next action.

### 3. Why should I care?

Strong photography and meaningful content.

If a section does not help with one of these questions, consider removing it.

Because there is only one villa, the website should never make visitors wonder which property they are viewing.

---

# 55. Golden UX Principle

The website should never make the guest think:

> “How do I book this?”

It should naturally lead them toward:

> “I want to stay here.”

Then:

> “Are my dates available?”

Then:

> “Let's book it.”

There should be no unnecessary property selection step.

---

# 56. Final Experience

The ideal user journey:

```text
Instagram / Google
        ↓
    HOMEPAGE
        ↓
  "This looks beautiful."
        ↓
   VILLA STORY
        ↓
  "I want to stay here."
        ↓
   EXPERIENCES
        ↓
  "This is exactly my trip."
        ↓
 AVAILABILITY
        ↓
  "My dates are available."
        ↓
    BOOKING
        ↓
  "That was easy."
        ↓
 CONFIRMATION
        ↓
  "I can't wait for Bali."
```

---

# 57. Final Design Rule

> **Do not build a website that sells rooms.**
>
> **Build a website that lets people imagine themselves already being in this villa in Bali.**

The booking system should be technically robust, but visually almost invisible.

The guest should remember:

**the sunlight, the pool, the architecture, the morning, the feeling.**

And then the website should make booking that feeling extremely easy.
