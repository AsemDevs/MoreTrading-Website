# Landing Page More Trading Website

This project is a simple landing page for a trading website. It is built with WordPress and styled with Tailwind CSS.

## Admin Credentials

- Username: `admin`
- Password: `*jx5SQNfdmDZgkK%h686C#jG`

## Requirements

- Docker
- WordPress (version: latest)
- PHP (version: 8.2)
- MySQL (version: latest)

## Technology Stack

- WordPress: Content Management System
- Tailwind CSS: A utility-first CSS framework for rapidly building custom designs
- MySQL: Database
- Docker: Containerization platform

## Installation

- Commands to run:

```bash
docker-compose up -d // to start the containers
npm install -D tailwindcss // to install tailwind css
npx tailwindcss init -p // to create the tailwind.config.js file
npm run build // to build the tailwind css
npm run watch // to watch the tailwind css
```

## Design

- Total Width is 1920px
- The Container width is 1536px
- The container screen percentage is 80% of the view port.
- The container screen percentage is 90% of the view port in mobile.

## must-haves installed plugins and extensions

- [wordfence](https://wordpress.org/plugins/wordfence/) (for security)
- [w3 total cache](https://wordpress.org/plugins/w3-total-cache/) (for caching)
- [Akismet Anti-Spam](https://wordpress.org/plugins/akismet/) (for spam)
- [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/) (for SEO)
- [Total up keep](https://wordpress.org/plugins/total-upkeep/) (for backup)
- [Image Service](https://www.boldgrid.com/w3-total-cache/) (w3 total extension for image optimization)

## Usage

- I will USE ACF plugin to create custom fields for all images in the theme to make it easy for the user to change the images from the admin panel.
- Our Tools Section is using a scroll snap instead of creating a carousel or slider i used a simple approach to make the features scroll horizontally.

## Desktop Performance

*I used the lighthouse extension in chrome to test the performance of the website.*

- Performance score: ![Progress](https://progress-bar.dev/100)
- Accessibility score: ![Progress](https://progress-bar.dev/94)
- Best Practices score: ![Progress](https://progress-bar.dev/100)
- SEO score: ![Progress](https://progress-bar.dev/100)

## Mobile Performance

- Performance score: ![Progress](https://progress-bar.dev/100)
- Accessibility score: ![Progress](https://progress-bar.dev/97)
- Best Practices score: ![Progress](https://progress-bar.dev/100)
- SEO score: ![Progress](https://progress-bar.dev/100)
