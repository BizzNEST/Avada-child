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
3. Replace the Local child theme folder with Git's child theme folder:

   ```
   wp-content/themes/Avada-child
   ```
4. Ensure the parent theme is installed.
5. Activate the child theme in **Appearance → Themes**.

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

Add your custom CSS to `style.css`. Example:

```css
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
