# Hyatt Consulting WordPress Theme

A modern, dark-themed WordPress theme for digital marketing consulting with Google Calendar booking integration, Cookie Policy compliance, and professional design.

## Version 2.0.0

### New Features
- **Google Calendar Scheduling** - "Book an Audit" button opens appointment scheduler popup
- **Cookie Policy** - Auto-created page with consent banner for EU/US compliance
- **Favicon** - Custom H logo favicon across all browsers
- **Dashboard-Editable Homepage** - Edit hero and methodology sections from WordPress Pages

---

## Installation

### Method 1: Upload via WordPress Admin (Recommended)

1. Download the `hyatt-theme.zip` file
2. Go to **Appearance → Themes** in your WordPress admin
3. Click **Add New** → **Upload Theme**
4. Select the ZIP file and click **Install Now**
5. Click **Activate**

### Method 2: FTP/File Manager

1. Unzip and upload the `hyatt-theme` folder to `/wp-content/themes/`
2. Go to **Appearance → Themes** in your WordPress admin
3. Find "Hyatt Consulting" and click **Activate**

---

## After Activation

The theme automatically creates these pages on activation:
- **Home** (set as front page)
- **Privacy Policy**
- **Terms of Service**
- **Cookie Policy**

---

## Configuration

### 1. Edit Homepage Content

1. Go to **Pages → Home**
2. Edit the Hero and Methodology sections using the custom meta boxes
3. Click **Update**

### 2. Configure Stats Section

1. Go to **Appearance → Customize → Stats Section**
2. Update the values and labels
3. Click **Publish**

### 3. Add Social Links

1. Go to **Appearance → Customize → Social Links**
2. Add your LinkedIn URL, Twitter URL, and contact email
3. Click **Publish**

### 4. Set Up Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu
3. Add pages/links
4. Assign to "Primary Menu" location
5. Save

### 5. Upload Custom Favicon (Optional)

The theme includes a default SVG favicon. To use your own:
1. Go to **Appearance → Customize → Site Identity**
2. Click **Select site icon**
3. Upload your icon (512x512 PNG recommended)
4. Click **Publish**

**Note:** WordPress will automatically generate all required favicon formats (ICO, PNG sizes, etc.) from your uploaded image.

---

## Theme Structure

```
hyatt-theme/
├── assets/
│   ├── images/
│   │   └── favicon.svg
│   └── js/
│       └── main.js
├── 404.php
├── footer.php
├── front-page.php
├── functions.php
├── header.php
├── index.php
├── page.php
├── README.md
└── style.css
```

---

## Features

### Google Calendar Integration
- Scheduling button appears in navigation (desktop & mobile)
- Opens popup overlay - visitors stay on your site
- Syncs with your Google Calendar availability

### Cookie Consent
- Banner appears for first-time visitors
- "Accept" stores consent in browser
- Links to auto-generated Cookie Policy page
- Styled to match dark theme

### Responsive Design
- Mobile-first approach
- Collapsible navigation menu
- Touch-friendly buttons

### Performance
- Minimal dependencies
- Optimized CSS animations
- Lazy-loading ready

---

## Customization

### Change Google Calendar URL

Edit `header.php` and find these lines (appears twice):
```javascript
url: 'https://calendar.google.com/calendar/appointments/schedules/AcZssZ0...',
```
Replace with your own Google Calendar appointment scheduling URL.

### Change Calendar Button Text

Edit `header.php` and find:
```javascript
label: 'Book an Audit',
```
Change to your preferred text.

### Modify Colors

Edit the CSS variables at the top of `style.css`:
```css
:root {
    --color-blue-500: #3b82f6;
    --color-indigo-500: #6366f1;
    /* etc */
}
```

---

## Support

For questions or customization requests, contact brian@hyattlabs.com

---

## License

GNU General Public License v2 or later
