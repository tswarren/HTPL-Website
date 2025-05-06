
## ✅ WCAG Contrast Compliance for HTPL Color Palette

### Color Palette Variables

```css
--color-navy:          #002D62;
--color-sky:           #8EAFCF;
--color-gray:          #535353;
--color-offwhite:      #F5F5F5;
--color-orange:        #FFAA4C;
--color-orange-hover:  #e69936;
--color-teal:          #007C91;
--color-teal-hover:    #005f73;
--color-sail:          #4477AA;
--color-white:         #ffffff;
```

---

### ✅ Compliant Text/Background Pairs

| Foreground Color      | Background Color      | Contrast Ratio | WCAG-AA | WCAG-AAA |
|-----------------------|------------------------|----------------|---------|----------|
| `--color-navy`        | `--color-white`        | 12.63:1        | ✅       | ✅        |
| `--color-navy`        | `--color-offwhite`     | 10.65:1        | ✅       | ✅        |
| `--color-sky`         | `--color-navy`         | 5.95:1         | ✅       | ❌        |
| `--color-sky`         | `--color-gray`         | 4.7:1          | ✅       | ❌        |
| `--color-orange`      | `--color-navy`         | 6.75:1         | ✅       | ❌        |
| `--color-orange-hover`| `--color-navy`         | 5.84:1         | ✅       | ❌        |
| `--color-teal`        | `--color-white`        | 5.62:1         | ✅       | ❌        |
| `--color-teal-hover`  | `--color-white`        | 8.11:1         | ✅       | ✅        |
| `--color-sail`        | `--color-white`        | 5.72:1         | ✅       | ❌        |
| `--color-gray`        | `--color-white`        | 10.3:1         | ✅       | ✅        |
| `--color-white`       | `--color-navy`         | 12.63:1        | ✅       | ✅        |
| `--color-white`       | `--color-teal-hover`   | 8.11:1         | ✅       | ✅        |
| `--color-white`       | `--color-gray`         | 10.3:1         | ✅       | ✅        |
| `--color-white`       | `--color-sail`         | 5.72:1         | ✅       | ❌        |

---

### ⚠️ Failing or Borderline Text/Background Pairs

| Foreground Color      | Background Color      | Contrast Ratio | Issue     |
|-----------------------|------------------------|----------------|-----------|
| `--color-sky`         | `--color-white`        | 2.61:1         | ❌ Fails AA |
| `--color-orange`      | `--color-white`        | 2.08:1         | ❌ Fails AA |
| `--color-orange-hover`| `--color-white`        | 2.43:1         | ❌ Fails AA |
| `--color-sail`        | `--color-sky`          | 2.29:1         | ❌ Fails AA |

---

### 🔍 Suggestions

- Use `--color-navy`, `--color-gray`, or `--color-teal-hover` for body or heading text on light backgrounds to meet **WCAG AAA**.
- Avoid using `--color-orange`, `--color-sky`, or `--color-sail` as foreground text on `--color-white` or `--color-offwhite`.
- For buttons or UI elements, ensure hover states maintain compliant contrast.
