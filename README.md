# HTPL Website

This repository contains all development assets for the **Harrison Township Public Library (HTPL)** public website. It includes the custom WordPress child theme, CSS styling, and supporting assets optimized for use with the **Elementor + Hello** theme stack.

---

## 📁 Project Structure

```
htpl-website/
├── themes/
│   └── htpl-child/             # Custom WordPress child theme
│       ├── style.css           # Registers the child theme
│       ├── functions.php       # Enqueues custom styles, logic
│       ├── css/
│       │   └── htpl_v5.0.css   # Global styles using Elementor tokens
│       ├── js/                 # Scripts (e.g., alert bar logic)
│       └── templates/          # Optional: override WP templates
├── assets/                     # Shared assets (images, icons, etc.)
└── README.md
```

---

## 🔧 WordPress Theme Setup

1. Base theme: [Hello Elementor](https://elementor.com/help/hello-theme/)
2. This child theme extends Hello and is activated via WP Admin.
3. All layout and page structures are managed via **Elementor Theme Builder**.
4. The child theme is used for:
   - Global CSS styling (`htpl_v5.0.css`)
   - Custom PHP logic (e.g., dynamic alerts)
   - Optional template overrides

---

## 🌈 Styling Philosophy

- Fonts: **Poppins (headings/buttons)**, **Nunito (body text)**
- Color palette: 10-brand color set defined in Elementor Global Settings
- Typography and color styles use `var(--e-global-...)` tokens to inherit global values
- Badges, buttons, and forms are styled using semantic utility classes

---

## 🚀 Workflow Guidelines

### Development Branches
- `main`: clean, deployable version of the site
- `v5`: current development branch for HTPL version 5.0

### To Commit Changes
```bash
git add .
git commit -m "Description of your update"
git push origin v5
```

### To Deploy
- Zip and upload only `themes/htpl-child/` via WP Admin → Appearance → Themes
- Or deploy to server `/wp-content/themes/` via SFTP

---

## 🛠 Elementor Global Settings Reference

Recommended values for:
- **Global Colors:** Navy, Teal, Orange, Sky, Offwhite, etc.
- **Global Fonts:** Primary (Poppins), Text (Nunito), Eyebrow, Subheading
- **Typography Defaults:** H1–H6, Body, Links (normal & hover)
- **Global Widgets & Templates:** Used for Announcements, eResources, Events

> See `/themes/htpl-child/css/htpl_v5.0.css` for current style implementation.

---

## 📌 Notes

- Editors manage content entirely in Elementor; the child theme provides structure, branding, and logic.
- All styles and layout components should align with accessibility best practices (WCAG AA).
- This repo may later include LocalWP or WP-CLI configs for local dev.

---

## 📫 Maintainers

For questions or contributions, contact:  
**Harrison Township Public Library**  
webmaster@htlibrary.org

