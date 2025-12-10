# Hyatt Consulting WordPress Theme

A modern, dark-themed WordPress theme for digital marketing consulting with professional design and customizable content.

## Version 1.0.0

---

## Installation

### Method 1: Upload via WordPress Admin (Recommended)

1. Download the `hyatt-consulting-theme.zip` file from this repository
2. Go to **Appearance → Themes** in your WordPress admin
3. Click **Add New** → **Upload Theme**
4. Select the ZIP file and click **Install Now**
5. Click **Activate**

### Method 2: FTP/File Manager

1. Unzip and upload the theme folder to `/wp-content/themes/`
2. Go to **Appearance → Themes** in your WordPress admin
3. Find "Hyatt Consulting" and click **Activate**

---

## Configuration

### 1. Configure Hero Section

1. Go to **Appearance → Customize → Hero Section**
2. Update the hero title and subtitle
3. Click **Publish**

### 2. Configure Stats Section

1. Go to **Appearance → Customize → Stats Section**
2. Update the values and labels for your statistics
3. Click **Publish**

### 3. Add Social Links & Contact Email

1. Go to **Appearance → Customize → Social Links**
2. Add your LinkedIn URL, Twitter URL, and contact email
3. This email will be used for the contact form and displayed in legal pages
4. Click **Publish**

### 4. Set Up Navigation Menu

1. Go to **Appearance → Menus**
2. Create a new menu
3. Add pages/links
4. Assign to "Primary Menu" location
5. Save

### 5. Edit Page Template Content

Several page templates have editable meta boxes. Go to **Pages** and edit:
- **AEO Strategy** - Answer Engine Optimization service page
- **Audit Services** - Digital marketing audit services
- **Fee Analysis** - Agency fee analysis service
- **Methodology** - Company methodology and principles

Each page has custom meta boxes below the editor where you can customize the content.

---

## Theme Structure

```
hyatt-consulting/
├── assets/
│   ├── images/          (add your images here)
│   └── js/
│       └── main.js      (navigation, forms, animations)
├── 404.php              (error page)
├── archive.php          (blog category/tag archives)
├── footer.php
├── functions.php        (theme setup, customizer, meta boxes)
├── header.php
├── index.php            (homepage template)
├── page.php             (default page template)
├── page-aeo-strategy.php
├── page-audit-services.php
├── page-fee-analysis.php
├── page-methodology.php
├── page-privacy-policy.php
├── page-terms-of-service.php
├── README.md
└── style.css            (all theme styles)
```

---

## Features

### Contact Form
- AJAX-powered contact form on homepage
- Sends inquiries to the email configured in Customizer → Social Links
- Includes website, monthly spend, focus areas, and message fields

### Schema.org Markup
- Comprehensive structured data for better SEO
- Organization schema with services and contact info
- Article schema for blog posts
- FAQ schema where applicable
- Breadcrumb navigation

### Custom Page Templates
- Six specialized service and informational page templates
- Dashboard-editable content via meta boxes
- No need to edit PHP code to update content

### Responsive Design
- Mobile-first approach
- Collapsible navigation menu
- Touch-friendly buttons and forms

### Performance
- Minimal dependencies (no jQuery)
- Optimized vanilla JavaScript
- Efficient CSS with custom properties

---

## Customization

### Add Images

Place your images in the `/assets/images/` directory. The theme expects:
- `hero-bg.jpg` - Hero section background (used across multiple pages)
- Add any other images as needed and reference them in your content

### Modify Colors

Edit the CSS variables at the top of `style.css`:
```css
:root {
    --color-blue-500: #3b82f6;
    --color-indigo-500: #6366f1;
    --color-zinc-900: #18181b;
    /* etc */
}
```

### Change Contact Form Recipient

1. Go to **Appearance → Customize → Social Links**
2. Update the Email field
3. This email receives all contact form submissions

---

## Support

For questions or customization requests, configure your contact email in **Appearance → Customize → Social Links**.

---

## License

GNU General Public License v2 or later
