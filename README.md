# 🌱 Clean Energy Tips

A web-based platform for browsing, managing, and learning about clean energy and sustainable living practices. Built with Laravel (PHP), it provides an interactive interface for users to explore eco-friendly tips and resources, submit feedback, and for administrators to manage content.

**🔗 Live Demo:** [clean-energy-tips.page.gd](https://clean-energy-tips.page.gd) &nbsp;|&nbsp; **📽️ Demo Video:** [Watch on YouTube](https://youtu.be/1pAyYn_lE4g)

---

## 📋 Table of Contents

- [About](#about)
- [Features](#features)
- [Tech Stack](#tech-stack)
- [Project Structure](#project-structure)
- [Getting Started](#getting-started)
- [Database Schema](#database-schema)
- [Pages & Roles](#pages--roles)
- [Team](#team)

---

## About

Clean Energy Tips addresses the difficulty of finding clear, accessible guidance on renewable energy and eco-friendly living. The platform gathers clean energy insights into one hub, presenting information in digestible formats with a simple navigation layout — lowering the barrier for everyday readers to build sustainable habits.

---

## Features

| Feature | Description |
|---|---|
| User Registration & Auth | Sign up, log in, and log out with secure password hashing |
| Browse Tips | View a structured list of clean energy tips with details, images, and ratings |
| Browse Resources | Access curated external articles, videos, and tools |
| Feedback & Ratings | Submit star ratings and comments on tips; average ratings are displayed |
| Image Uploads | Administrators can attach images to tips |
| Admin Dashboard | Full CRUD management of tips, resources, and user feedback |
| Role-Based Access | Separate interfaces and permissions for regular users and administrators |
| Responsive Design | Bootstrap 5 layout that adapts across devices |

---

## Tech Stack

| Layer | Technology |
|---|---|
| Front-End | HTML5, CSS3, Bootstrap 5, Blade templating |
| Back-End | PHP with Laravel ^12.0 |
| Database | SQLite / MySQL via Laravel Eloquent ORM & Migrations |
| Dev Tools | VS Code, Git, Composer, npm |
| Web Server | Laravel built-in dev server / Apache-compatible |

---

## Project Structure

```
WebProg-Project/
├── app/
│   ├── Http/Controllers/   # Request handling (Tips, Resources, Feedback, Auth)
│   └── Models/             # Eloquent models: User, Tip, Resource, Feedback
├── database/
│   ├── migrations/         # Schema definitions
│   └── seeders/            # Initial data
├── resources/
│   └── views/              # Blade templates (public pages + admin panel)
├── routes/
│   └── web.php             # URL-to-controller mappings
├── public/                 # Public assets (images, compiled CSS/JS)
├── storage/                # Uploaded files
└── tests/                  # Automated tests
```

---

## Getting Started

### Prerequisites

- PHP >= 8.2
- Composer
- Node.js & npm
- MySQL or SQLite

### Installation

```bash
# 1. Clone the repository
git clone https://github.com/JoshuaPP5/WebProg-Project.git
cd WebProg-Project

# 2. Install PHP dependencies
composer install

# 3. Install JS dependencies
npm install && npm run build

# 4. Set up environment
cp .env.example .env
php artisan key:generate

# 5. Configure your database in .env, then run migrations
php artisan migrate

# 6. (Optional) Seed initial data
php artisan db:seed

# 7. Create the storage symlink for file uploads
php artisan storage:link

# 8. Start the development server
php artisan serve
```

The app will be available at `http://localhost:8000`.

---

## Database Schema

The application uses four core tables:

| Table | Primary Key | Foreign Keys | Purpose |
|---|---|---|---|
| `users` | `id` | — | Registered user accounts for authentication |
| `tips` | `id` | — | Clean energy tips with descriptions, benefits, and images |
| `resources` | `id` | — | External links to articles, videos, and tools |
| `feedback` | `id` | `tip_id → tips.id`, `user_id → users.id` | User ratings and optional comments per tip |

**Relationships:**
- One Tip → many Feedback entries
- One User → many Feedback entries

---

## Pages & Roles

### Public / User Pages

| Page | Description |
|---|---|
| Home | Landing page introducing the platform and clean energy overview |
| Tips | Browsable list of tips; click any tip to see full details, images, and ratings |
| Resources | Curated external links for deeper learning |
| About | Background on the project's purpose and goals |
| Login / Sign Up | Authentication pages for account access |

### Admin Pages

| Page | Description |
|---|---|
| Admin Dashboard | Overview and navigation for all admin functions |
| Manage Tips | Create, edit, and delete clean energy tips (with image upload) |
| Manage Resources | Create, edit, and delete external resources |
| Manage Feedback | Review and moderate user-submitted ratings and comments |

---

## Team

**Group 5 — Web Programming Project**

| Name | Student ID | Role |
|---|---|---|
| Clara Jessica | 2702267520 | Team Leader / Video Editor / Ideator / Coordinator |
| Joshua Putra Pratama | 2702238792 | Back-End Developer / Project Author |
| Reynaldi Anantyo | 2702242940 | Front-End Developer |
| Revidio Kieran | 2702278184 | Front-End Support Developer |
| Jeffkins Andrew Likadinata | 2702255893 | Documentation & Demo Presenter |

---

## Development Timeline

| Phase | Period |
|---|---|
| Planning & Requirement Analysis | Week 1–2 |
| System Design | Week 3 |
| UI Design | Week 4 |
| Implementation | Week 5–9 |
| Testing | Week 10–11 |
| Deployment | Week 12 |
| Documentation & Demo | Week 13 |

---

## License

This project was developed as an academic web programming assignment. The underlying Laravel framework is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT).
