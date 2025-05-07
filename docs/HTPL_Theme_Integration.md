# HTPL Theme + Elementor Integration Plan

## ✅ Core Integration Components

- Hello Elementor theme (barebones)
- `htpl-child` theme for all styling and logic
- Elementor for layout and visual editing
- Pods for CPT and field structures
- Code Snippets for lightweight PHP logic

## 🔗 File Overview

| File                       | Purpose                           |
|----------------------------|------------------------------------|
| `style.css`                | Registers the child theme          |
| `functions.php`            | Enqueues `htpl_v5.0.css`           |
| `css/htpl_v5.0.css`        | Core styles using global tokens    |
| `js/`                      | Future alert bar logic             |
| `templates/`               | Optional WP template overrides     |

## 💡 Notes

- All styles use `var(--e-global-color-...)` and include fallbacks
- Editors rely on Elementor Site Settings — not raw CSS
- The theme is versioned in GitHub under `htpl-website` > `v5`
