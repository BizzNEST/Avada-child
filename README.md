# Avada Child Theme README

## Overview

This repository holds all updates to the child theme of the digitalnest.org website. This allows us to focus on different tasks outside of WordPress without needing unique access to the page, and prevents theme updates from causing compatibility issues.

## Features

* Custom CSS for additional styling
* Custom JavaScript

## Requirements

* Text Editor of choice (VSCode, Cursor, etc.)
* Local

## Installation

1. Create a local copy of the website through Local

2. Download or clone this repository:

   ```bash
   git clone https://github.com/BizzNEST/Avada-child.git
   ```
3. All changes in Local must be duplicated to the github repo folder. You can drag and drop
   ```
   wp-content/themes/Avada-child
   ```
   into the repo. 
4. Checkout a local branch using the standard conventions.
  ```
   git checkout -b 'yourInitials-issueNumber-taskName'
  ```
6. Stage and Commit the changes using the standard conventions.
   ```
      git add .
      git commit -m 'type(summary):description of changes'
   ```
8. Push your branch and create a pull request. DO NOT PUSH TO MAIN.
   ```
      git push --set-upstream origin your-branch-name
   ```
## File Structure

```
Avada-child/
├── custom-style.min.css
├── functions.php
├── style.css
├── README.md
├── assets/
└── templates/

```

## Modifying Styles

Add your custom CSS to the page's css file (`/assets/css/example-page.css`). Example:

```example-page.css
/* Custom button styling */
button {
  border-radius: 5px;
}
```

## Adding Custom Functions

You can add custom PHP to `functions.php`. Example:

```php
add_action('wp_enqueue_scripts', function() {
    wp_enqueue_style('child-style', get_stylesheet_uri());
});
```
