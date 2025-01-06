# Blog Search Engine Project
A simple blog platform that uses Elasticsearch for fast search capabilities. Users can add blog posts and search them efficiently. The project integrates Tailwind CSS for a clean and modern UI.

## Features

- Add Blog Posts: Create and store blog posts in Elasticsearch.

- Search Blog Posts: Perform full-text search on blog titles and content.

- Modern UI: Styled with Tailwind CSS.

## Project Structure
```
blog-search/
├── public/                         # Publicly accessible files
│   ├── index.php                   # Homepage linking to other pages
│   ├── post.php                    # Add blog post page
│   ├── search.php                  # Search blog posts page
│   ├── output.css                  # Tailwind CSS output file (auto-generated)
│   ├── styles.css                  # Tailwind CSS input file
│   ├── assets/                     # Static assets folder
│   │   ├── images/                 # Images folder (optional)
│   │   └── favicon.ico             # Favicon (optional)
├── src/                            # Source files for backend logic
│   ├── config.php                  # Configuration for Elasticsearch and SQLite
│   ├── functions.php               # Helper functions for database and search
├── database/                       # Database-related files
│   └── blog.sqlite                 # SQLite database file
├── node_modules/                   # Node.js dependencies (auto-generated)
├── tailwind.config.js              # Tailwind CSS configuration file
├── package.json                    # Node.js package configuration
├── package-lock.json               # Node.js dependency lock file
├── composer.json                   # PHP dependencies file
├── composer.lock                   # PHP dependency lock file
```

## Requirements

- PHP 7.4 or later

- Elasticsearch 7.x or 8.x

- Node.js 14.x or later

- SQLite

## Installation

1. Step 1: Clone the Repository

```
git clone [blog-search](https://github.com/khouloudhaddad/blog-search.git)

cd blog-search
```
2. Step 2: Install PHP Dependencies
```
composer install
```

3. Step 3: Install Node.js Dependencies
```
npm install
```

4. Step 4: Set Up Tailwind CSS
```
Generate the Tailwind CSS file:

npx tailwindcss -i ./public/styles.css -o ./public/output.css --watch
```
5. Step 5: Start Elasticsearch

    Ensure Elasticsearch is running locally on http://localhost:9200.

6. Step 6: Start the PHP Server

    Run the project locally:
```
php -S localhost:8000 -t public
```

## Usage

### Add a Blog Post

1. Open http://localhost:8000/post.php.

2. Enter the title and content of the blog post.

3. Click "Add Post" to save it.


### Search Blog Posts

1. Open http://localhost:8000/search.php.

2. Enter a search query (e.g., keywords from the blog post).

3. View the results below the search bar.


## Technologies Used

- **PHP**: Backend logic.

- **Elasticsearch**: Search engine.

- **SQLite**: Lightweight database for storing blog metadata.

- **Tailwind CSS**: Frontend styling.

- **Composer**: PHP dependency management.

- **Node.js**: For Tailwind CSS.


## Future Enhancements

- Add user authentication.

- Implement pagination for search results.

- Dockerize the application.

- Add richer search features like filtering and sorting.

- Deploy to a cloud platform.

## License

This project is open-source and available under the MIT License.