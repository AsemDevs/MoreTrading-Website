# Landing Page for More Trading Website

This project presents a landing page for a trading website, crafted with the combined power of WordPress and Tailwind CSS for a user-friendly and aesthetically pleasing experience.

## Admin Credentials

- Username: `admin`
- Password: `*jx5SQNfdmDZgkK%h686C#jG`

## Requirements

- Docker
- WordPress (latest version)
- PHP (version 8.2)
- MySQL (latest version)

## Technology Stack

- WordPress: Our chosen Content Management System.
- Tailwind CSS: A utility-first CSS framework used for custom designs.
- MySQL: Our database of choice.
- Docker: Our containerization platform.

## Installation

1. Start Docker containers using the following command:

    ```bash
    docker-compose up -d 
    ```

2. Install Tailwind CSS:

    ```bash
    npm install -D tailwindcss 
    ```

3. Initialize the Tailwind configuration:

    ```bash
    npx tailwindcss init -p 
    ```

4. Build the CSS:

    ```bash
    npm run build 
    ```

5. Watch the CSS files for changes:

    ```bash
    npm run watch 
    ```

6. Import the provided SQL database file into your MySQL instance.

7. Update the `wp-config.php` file in your WordPress installation to match the database name, user, and password.

    For example:

    ```php
    define( 'DB_NAME', 'your_database_name' );
    define( 'DB_USER', 'your_database_user' );
    define( 'DB_PASSWORD', 'your_database_password' );
    define( 'DB_HOST', 'localhost' );

    $table_prefix = 'wp_';

    ```

8. Run the following SQL commands to update your site URLs in the database:

    ```sql
    UPDATE wp_options SET option_value = replace(option_value, 'http://localhost:8883', 'http://www.newurl') WHERE option_name = 'home' OR option_name = 'siteurl';
    UPDATE wp_posts SET post_content = replace(post_content, 'http://localhost:8883', 'http://www.newurl');
    UPDATE wp_postmeta SET meta_value = replace(meta_value,'http://localhost:8883','http://www.newurl');
    UPDATE wp_posts SET guid = REPLACE (guid, 'http://localhost:8883', 'http://www.newurl');

    ```

    - Replace `'http://www.oldurl'` and `'http://www.newurl'` with your old and new URLs, respectively.
    - Login using [#Admin Credentials](#admin-credentials)

9. Add the `wp-content` directory to your WordPress installation.
    - or Install the theme and plugins manually.
10. Activate the theme and plugins.
11. make sure the Uploads folder is added to the wp-content folder.
12. **Important** Make sure the Footer Mneus are set to their Theme Locations as due to the export/import process they might not be set automatically.
    - Easy to set
    - Go to Appearance > Menus
    - Select Manage Locations
    - Set the following Menus to their respective locations:

        ```php
            'header-menu' => 'Header Menu',
            'trading-menu' => 'Trading',
            'affiliate-menu' => 'Affiliate',
            'help-menu' => 'Help',
            'learn-menu' => 'Learn Menu',
            'about-menu' => 'About Menu',
            'resources-menu' => 'Resources Menu',
            'legal-menu' => 'Legal Menu',
        ```

13. Access your WordPress website and confirm that all contents and configurations are correct.

## Design

- Total Width is 1920px.
- The Container width is 1536px.
- The container screen percentage is 80% of the viewport.
- The container screen percentage is 90% of the viewport on mobile devices.

## Essential Plugins and Extensions

- [Wordfence](https://wordpress.org/plugins/wordfence/)
- [Advanced Custom Fields](https://wordpress.org/plugins/advanced-custom-fields/) (Must Have)
- [W3 Total Cache](https://wordpress.org/plugins/w3-total-cache/)
- [Akismet Anti-Spam](https://wordpress.org/plugins/akismet/)
- [Yoast SEO](https://wordpress.org/plugins/wordpress-seo/)
- [Total Upkeep](https://wordpress.org/plugins/total-upkeep/)
- [Image Service](https://www.boldgrid.com/w3-total-cache/)

## Usage

- The Advanced Custom Fields (ACF) plugin is used to create custom fields for all images in the theme, allowing the user to easily change the images from the admin panel.
- The "Our Tools" section uses scroll snap for an intuitive user experience.
- Please Activate the plugins, clear the cache.

## Screenshots

- Desktop View:

  ![Desktop View](./screenshots/desktop.png)

- Mobile View:

  ![Mobile View](./screenshots/performance-mobile.png)

## Performance Scores

We have tested our website's performance using the Lighthouse extension in Chrome, and have achieved the following results:

- Desktop Performance:
  - Performance score: ![Progress](https://progress-bar.dev/100)
  - Accessibility score: ![Progress](https://progress-bar.dev/94)
  - Best Practices score: ![Progress](https://progress-bar.dev/100)
  - SEO score: ![Progress](https://progress-bar.dev/100)
  
    ![Desktop View](./screenshots/performance-desktop.png)

- Mobile Performance:
  - Performance score: ![Progress](https://progress-bar.dev/100)
  - Accessibility score: ![Progress](https://progress-bar.dev/97)
  - Best Practices score: ![Progress](https://progress-bar.dev/100)
  - SEO score: ![Progress](https://progress-bar.dev/100)

    ![Mobile View](./screenshots/performance-mobile.png)

*Please note: The accessibility score is not 100 due to a lower contrast ratio for the paragraph color in the "Our Tools" section. This is an aesthetic design choice.*
