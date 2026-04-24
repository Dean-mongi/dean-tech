# Security Enhancement Implementation Plan

## Phase 1: Authentication & Access Control
- [x] 1. Fix login_attempts migration with proper columns
- [x] 2. Create LoginAttempt model
- [x] 3. Fix AuthenticatedSessionController with brute-force protection & dual auth (User/Admin)
- [x] 4. Create RoleMiddleware for admin-only access
- [x] 5. Register RoleMiddleware in bootstrap/app.php
- [x] 6. Apply role middleware to admin routes in routes/web.php

## Phase 2: Rate Limiting & Throttling
- [x] 7. Configure RateLimiter in AppServiceProvider for login, register, contact
- [x] 8. Apply throttle middleware to auth routes
- [x] 9. Apply throttle middleware to contact form

## Phase 3: Password & Session Hardening
- [x] 10. Enforce password complexity in RegisteredUserController
- [x] 11. Update session config (encrypt=true, secure=true, SameSite=strict)

## Phase 4: Security Headers & HTTPS
- [x] 12. Create SecurityHeadersMiddleware (X-Frame-Options, CSP, HSTS, X-Content-Type-Options)
- [x] 13. Create HttpsMiddleware for HTTPS enforcement
- [x] 14. Register security middlewares globally in bootstrap/app.php

## Phase 5: Email Verification
- [x] 15. Implement MustVerifyEmail in User model
- [x] 16. Update RegisteredUserController to send verification email
- [x] 17. Create verify-email view
- [x] 18. Add email verification routes in routes/auth.php

## Phase 6: Blade to Pure PHP Conversion (Shared Hosting Ready)
- [x] 22. Create layouts/header.php and layouts/footer.php with $baseUrl helper
- [x] 23. Convert home.blade.php → home.php
- [x] 24. Convert about.blade.php → about.php
- [x] 25. Convert services.blade.php → services.php
- [x] 26. Convert service.blade.php → service.php
- [x] 27. Convert contact.blade.php → contact.php
- [x] 28. Convert portfolio.blade.php → portfolio.php
- [x] 29. Convert auth/login.blade.php → auth/login.php
- [x] 30. Convert auth/register.blade.php → auth/register.php
- [x] 31. Convert auth/verify-email.blade.php → auth/verify-email.php
- [x] 32. Convert admin/dashboard.blade.php → admin/dashboard.php
- [x] 33. Rename old .blade.php files to .blade.php.bak
- [x] 34. Fix image paths to use $baseUrl for shared hosting compatibility

## Follow-up Steps
- [x] 19. Run migrations
- [x] 20. Clear config cache
- [ ] 21. Test all security features
- [ ] 35. Test pure PHP views on XAMPP/shared hosting

