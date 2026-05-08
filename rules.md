# CODING RULES (VIBE CODING GUIDELINES)

This document defines the coding standards and behavior rules that must be followed during development.

---

## 1. RESPONSIVE-FIRST DEVELOPMENT
- Every component or UI must be fully responsive by default.
- No need to manually adjust responsiveness per device unless necessary.
- Ensure layouts automatically adapt to mobile, tablet, and desktop screens.
- Use flexible units (%, rem, vw, vh) instead of fixed values whenever possible.

---

## 2. PROPER FILE SEPARATION (VERY IMPORTANT)
- Always separate files based on their responsibility.
- NEVER put everything inside a single file (no monolithic structure).
- Backend must be modular:
  - Example: routes, controllers, services, models must be separated.
  - DO NOT use only `app.py` for everything.
- Frontend/UI must also be modular:
  - Separate components like:
    - Navbar / Navigation
    - Footer
    - Sidebar 
    - Cards / Buttons / Forms
- Each UI part must have its own file when reusable or logically separate.
- Keep logic, UI, and utilities separated properly.

---

## 3. CLEAN AND ORGANIZED FILE STRUCTURE
- Maintain a clean and understandable folder structure.
- It is okay to keep it simple as a beginner, but it must NOT be confusing.
- Group related files together:
  - `/backend`
  - `/frontend`
  - `/components`
  - `/pages`
  - `/utils`
- Avoid messy or random file placement.

---

## 4. CODE REPLACEMENT RULE
- If there is an existing feature or component that needs changes:
  - REMOVE the old version completely.
  - DO NOT duplicate or create multiple versions of the same logic.
- Ensure there are no duplicate functions, components, or UI elements.

---

## 5. CLEAN CODE STANDARD
- Code must be clean, readable, and easy to understand.
- NO COMMENTS in the final code output.
- Remove all unnecessary comments and debug notes.
- Keep naming consistent and meaningful.

---

## 6. UI CONSISTENCY RULE
- UI must be consistent across all pages and components.
- Avoid mixed styles, random spacing, or inconsistent design patterns.
- Use a unified design system (colors, spacing, typography).
- Ensure the UI looks clean, modern, and professional.

---

## 7. SENIOR DEVELOPER MINDSET
- Always think like a Senior Software Engineer.
- Prioritize:
  - Maintainability
  - Scalability
  - Performance
  - Clean architecture
- Avoid shortcut or messy solutions that will cause future problems.
- Write code as if it will be maintained by a team.

---

## 8. FINAL OUTPUT RULE
- Always provide production-ready code.
- No unnecessary explanations inside code.
- Ensure everything is structured, optimized, and clean before final output.