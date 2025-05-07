# HTPL Website Theme & Styling Guide

This guide documents the finalized decisions and responsibilities for implementing the HTPL website using the Hello Elementor theme, a custom child theme, and Elementor's global styling system. It is structured to support long-term clarity between design, development, and content management roles.

---

## ✅ Design System Overview

### 🖌 Typography
- **Heading Font:** Poppins
- **Body Font:** Nunito
- **Eyebrow / Meta:** Poppins (uppercase, small, letter-spaced)
- **Subheadings:** Poppins (smaller headings between H2 and body)

### 🎨 Color Palette
| Name           | Hex       | Token Name              |
|----------------|-----------|--------------------------|
| Navy           | #002d62   | `--e-global-color-primary` |
| Sky            | #8eafcf   | `--e-global-color-sky`      |
| Gray           | #535353   | `--e-global-color-gray`     |
| Offwhite       | #f5f5f5   | `--e-global-color-offwhite` |
| Orange         | #ffaa4c   | `--e-global-color-accent`   |
| Orange Hover   | #e69936   | `--e-global-color-orange-hover` |
| Teal           | #007c91   | `--e-global-color-secondary` |
| Teal Hover     | #005f73   | `--e-global-color-teal-hover` |
| Sail           | #4477aa   | `--e-global-color-sail`      |
| Dark Gray      | #333333   | `--e-global-color-dark`      |

---

## 🧰 Implementation Checklist

### In Elementor → Site Settings

#### Global Colors
- Add all 10 brand colors using the names above
- Set Primary, Secondary, Accent, and Text roles

#### Global Fonts
- Primary: Poppins (Headings)
- Text: Nunito (Body)
- Add custom roles: `Eyebrow`, `Subheading`, `Button`

#### Typography (HTML Defaults)
- Define styles for H1–H6, Body, and Links (normal/hover)
- Set responsive sizes for mobile and tablet

#### Buttons
- Font: Poppins, 600 weight
- Background: Teal (`--e-global-color-secondary`)
- Hover: Teal Hover
- Radius: `0.5rem`

#### Images
- Border Radius: `0.5rem`
- Optional hover effects (scale, grayscale, etc.)

#### Form Fields
- Font: Nunito
- Background: Offwhite
- Border Radius: `0.375rem`
- Focus color: Teal

---

## In WordPress (Admin Interface)

### Using Pods
- Define and assign CPTs:
  - `htpl_announcement`
  - `htpl_eresource`
  - `htpl_document`
  - `htpl_event`
  - `htpl_tutorial`
  - `htpl_library_service`
- Use taxonomies:
  - `content_type`, `topic`, `audience`, `service_area`, etc.
- Use conditional fields and visibility logic
- Create custom fields: `alert`, `embed_method`, `apollo_id`, etc.

### Using Code Snippets
- Add logic for:
  - Notification bar (based on `alert = true` and date range)
  - Auto-badging, icon rendering
  - Shortcodes if needed (e.g., document info)

---

## In VSCode + GitHub (Theme Development)

### File: `htpl_v5.0.css`
- Define global styles using Elementor tokens:
  - Typography utility classes (`.text-eyebrow`, `.text-subheading`)
  - `.badge-*` styles for taxonomy visualization
  - Buttons, forms, containers, and layout helpers

### File: `functions.php`
- Enqueue CSS via `wp_enqueue_style`
- Optional: enqueue JS for dismissable alert bar

### Folder Structure
```
htpl-child/
├── style.css
├── functions.php
├── css/
│   └── htpl_v5.0.css
├── js/
├── templates/
└── screenshot.png
```

---

## ✅ Summary

| Tool/Area      | Responsibility                        |
|----------------|----------------------------------------|
| Elementor      | Global styles, templates, layout       |
| Pods (WP Admin)| CPTs, taxonomies, meta fields          |
| Code Snippets  | PHP logic, dynamic display, alerts     |
| VSCode (Child Theme) | CSS tokens, layout styles, utilities |

This structure supports easy content editing, consistent design, and long-term maintainability.
